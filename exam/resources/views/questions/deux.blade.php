<x-layout>

    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-2">
                <img class="img-category" src="/images/categories/{{ $category->imagePath }}" alt="">
            </div>
            <div class="col-4">
                <h1>{{ $category->name }}</h1>
                <p class="lead">  {{$spectators}}  <i class="fa-solid fa-users"></i> </p>
            </div>
        </div>
    </div>
    <div class="bs-docs-section clearfix">
        <div class="row">
            <table class="table-striped table-bordered table">
                <thead>
                    <tr>
                        <th scope="col">Avatar</th>
                        <th scope="col">Nom d'utilisateur</th>
                        <th scope="col">Titre</th>
                        <th scope="col">Viewers</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($category->channels as $channel)
                        <tr>
                            <td><img src="{{ $channel->avatar }}"></td>
                            <td scope="row"><a
                                    href="{{ route('app_question_trois', $channel->id) }}">{{ $channel->username }}</a>
                            </td>
                            <td>{{ $channel->title }}</td>
                            <td>{{ $channel->viewers }}</td>
                            <td>
                                <a href=" {{ route('app_question_quatre', ['idChannel' => $channel->id, 'cat' => $category->imagePath]) }}"><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                        </tr>

                    @empty
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>


    @push('styles')
        <link rel="stylesheet" href="{{ asset('styles/q2.css') }}">
    @endpush

</x-layout>
