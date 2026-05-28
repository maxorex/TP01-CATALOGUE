<x-layout>

    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-8 col-md-7 col-sm-6">
                <h1>Catégories</h1>
            </div>
        </div>
    </div>
    <div class="bs-docs-section clearfix">
        <div class="row">
            {{-- Question 1 --}}
            @forelse ($categories as $category)
                
            <div class="col-2 p-2">
                <a href="{{ route('app_question_deux', $category->id)}}"><img class="img-category" src="/images/categories/{{ $category->imagePath}}" alt=""></a>
                <a href="{{ route('app_question_deux', $category->id) }}"><h5>{{$category->name}}</h4></a>
                <p>{{ $category->channels->count() }} chaines en diffusion</p>
            </div>
            @empty
                
            @endforelse
        </div>
    </div>


@push('styles')
    <link rel="stylesheet" href="{{ asset('styles/q1.css') }}">
@endpush
</x-layout>
