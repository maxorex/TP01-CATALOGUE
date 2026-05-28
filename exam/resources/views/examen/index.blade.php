<x-layout>

    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-8 col-md-7 col-sm-6">
                <h1>Résultat - Question {{ $numeroQuestion }}</h1>
            </div>
        </div>
    </div>
    <div class="bs-docs-section clearfix">
        <div class="row">
           <img src="{{ asset('/images/Q' . $numeroQuestion . '.png')}}" alt="">
        </div>
    </div>


@push('styles')
<style>
    .bs-docs-section {
        margin-top:2em;
    }
</style>
</x-layout>
