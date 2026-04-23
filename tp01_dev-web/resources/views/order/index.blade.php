<x-layout title="DevGear - Commande" css="cart.css">
    <x-cart.nav />

    <main class="py-lg-5 container py-4">
        <div class="mb-4">
            <h1 class="display-6 fw-bold mb-1 text-white">Finaliser votre commande</h1>
        </div>

        <div class="row g-4">
            <div class="col-lg-7">
                <div class="cart-panel p-lg-4 p-3 h-100">
                    <h2 class="h5 fw-bold mb-4 text-white">Détails du paiement</h2>

                    <form id="payment-form" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label class="form-label text-secondary small fw-semibold">Numéro de carte bancaire</label>
                            {{-- Stripe.js injecte son iframe sécurisé ici --}}
                            <div id="card-element"
                                style="background:rgba(15,15,15,.98); border:1px solid var(--accent-border-soft);
                                        border-radius:.75rem; padding:.875rem 1rem; min-height:45px; color:var(--text-primary);">
                            </div>

                            <div id="card-errors" class="text-danger small mt-2" role="alert"></div>
                        </div>

                        <button id="submit-btn" type="submit" class="btn btn-accent btn-lg w-100 fw-bold">
                            Payer ${{ number_format($total, 2, ',', ' ') }}
                        </button>
                    </form>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="cart-panel p-lg-4 p-3 h-100">
                    <h2 class="h5 fw-bold mb-3 text-white">Résumé de la commande</h2>

                    @foreach ($items as $item)
                        <div class="d-flex justify-content-between text-secondary mb-2">
                            <span>
                                {{ $item['weapon']->name }}
                                <span class="small text-secondary">× {{ $item['amount'] }}</span>
                            </span>
                            <span
                                class="fw-semibold text-white">${{ number_format($item['totalWeapon'], 2, ',', ' ') }}</span>
                        </div>
                    @endforeach

                    <hr class="my-3" style="border-color: rgba(255,255,255,.1);">

                    <div class="d-flex justify-content-between text-secondary mb-2">
                        <span>Sous-total</span>
                        <span class="fw-semibold text-white">${{ number_format($sousTotal, 2, ',', ' ') }}</span>
                    </div>
                    <div class="d-flex justify-content-between text-secondary mb-2">
                        <span>TPS (5 %)</span>
                        <span class="fw-semibold text-white">${{ number_format($totalTPS, 2, ',', ' ') }}</span>
                    </div>
                    <div class="d-flex justify-content-between text-secondary mb-2">
                        <span>TVQ (9,975 %)</span>
                        <span class="fw-semibold text-white">${{ number_format($totalTVQ, 2, ',', ' ') }}</span>
                    </div>

                    <hr class="my-3" style="border-color: rgba(255,255,255,.1);">

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <span class="fw-bold text-white">Total à payer</span>
                        <span class="fs-5 fw-bold text-gradient-orange">${{ number_format($total, 2, ',', ' ') }}</span>
                    </div>

                    <a href="{{ route('cart') }}" class="btn btn-outline-accent w-100">
                        ← Retour au panier
                    </a>
                </div>
            </div>

        </div>
    </main>


    @push('scripts')
        <script src="https://js.stripe.com/v3/"></script>

        <script>
            // init Stripe avec la clé publique
            const stripe = Stripe('{{ $stripeKey }}');
            // créer un élément de carte
            const elements = stripe.elements();

            const cardElement = elements.create('card', {
                style: {
                    base: {
                        color: 'rgba(255,255,255,.87)',
                        fontSize: '16px',
                        fontFamily: 'system-ui, sans-serif',
                        '::placeholder': {
                            color: 'rgba(255,255,255,.5)'
                        }
                    },
                    invalid: {
                        color: '#f87171'
                    }
                },
                hidePostalCode: true
            })

            // injecter l'elément de carte dans le HTML
            cardElement.mount('#card-element');

            // valider en temp reel le formulaire de paiement
            cardElement.on('change', function(event) {
                const errorDiv = document.querySelector('#card-errors');
                errorDiv.textContent = event.error ? event.error.message : '';
            });

            //soumettre le formulaire
            document.querySelector('#payment-form').addEventListener('submit', function(event) {

                event.preventDefault();
                const submitButton = document.querySelector('#submit-btn');
                submitButton.disabled = true;
                submitButton.textContent = 'Traitement en cours...';
                
                axios.post('{{ route('order.pay') }}')
                    .then(function(response) {
                        const clientSecret = response.data.clientSecret

                        return stripe.confirmCardPayment(clientSecret, {
                            payment_method: {
                                card: cardElement
                            }
                        })
                    })
                    .then(function(result) {
                        if (result.error) {
                            showError(result.error)
                        } else if (result.paymentIntent.status === 'succeeded') {
                            handleSuccess(result.paymentIntent)
                        }
                    })
                    .catch(function(error) {
                        const message = error.response ? error.response.data.error :
                            'Impossible de joindre le serveur. Réessayez.'
                        showError({
                            message: message
                        })
                    })
            })

            function handleSuccess(paymentIntent) {
                window.location.href = '{{ route('order.confirm') }}?payment_intent=' + paymentIntent.id;
            }

            function showError(error) {
                document.querySelector('#card-errors').textContent = error.message;

                const submitButton = document.querySelector('#submit-btn');
                submitButton.disabled = false;
                submitButton.textContent = 'Payer ${{ number_format($total, 2, ',', ' ') }}';
            }
        </script>
    @endpush
</x-layout>
