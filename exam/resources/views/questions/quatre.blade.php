<x-layout>

    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-2">
                <img class="img-category" src="/images/categories/{{ $channel->cat }}" alt="">

            </div>
            <div class="col-2">
                <img src="{{ $channel->avatar }}" alt="">
            </div>
            <div class="col-6">
                <h1>Chaine - {{ $channel->username }}</h1>
            </div>
        </div>
    </div>
    <div class="bs-docs-section clearfix">
        <div class="row">
            {{-- Question 4: votre formulaire va ici --}}
            <form action="{{ route('app_question_quatre.edit', ['idChannel' => $channel->id]) }}" method="POST">
                @csrf
                <td>
                    <label for="title" class="form-label">Titre</label>
                    <input type="text" class="form-control" id="title" name="title">

                    <label for="about" class="form-label">A propos</label>
                    <input type="text" class="form-control" id="about" name="about">

                    <div>
                        <label for="category_id" class="form-label">Categorie</label>
                        <select class="form-select" id="category_id" name="category_id">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </td>
                <td>
                    <button type="submit" class="btn btn-outline-primary">
                        Enregistrer
                    </button>
                </td>
            </form>
        </div>
    </div>


    @push('styles')
        <link rel="stylesheet" href="{{ asset('styles/q4.css') }}">
    @endpush

</x-layout>
