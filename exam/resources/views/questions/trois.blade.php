<x-layout>
    <div class="bs-docs-section clearfix">
        <div class="row">
            <div class="col-8">
                {{-- Question 3 --}}
                <div class="row">
                    <iframe width="560" height="500" src="{{ $channel->streamUrl }}" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>
                    <h2 class="my-4">{{ $channel->title }} - {{ $channel->viewers }} <i class="fa-solid fa-user"></i>
                    </h2>
                    <div class="">
                        <p class="lead"></p>
                        <h4>À propos</h4>
                        <p>{{ $channel->about }}</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <h4>Commentaires</h4>
                {{-- Question 3 --}}
                @forelse ($comments as $comment)
                    <div class="card mb-4">
                        <div class="card-body">
                            <p>{{ $comment->message }}</p>
                            <div class="d-flex justify-content-between">
                                <div class="d-flex flex-row align-items-center">
                                    <p class="small text-muted mb-0">{{ $comment->commentDate }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
                {{-- Question 3: votre formulaire va ici --}}
                <form action="{{ route('app_question_trois.commentAdd', $channel->id) }}" method="POST">
                    @csrf
                    <div class="d-flex ">
                        <input type="hidden" name="channel_id" id="channel_id" value="{{ $channel->id }}">

                        <input type="text" class="form-control" id="message" name="message"
                            placeholder="Entrer un commentaire" required>

                        <button type="submit" class="btn btn-success">
                            Envoyer
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('styles')
        <link rel="stylesheet" href="{{ asset('styles/q3.css') }}">
    @endpush
</x-layout>
