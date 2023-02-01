@extends('_layouts.main')

@section('body')
<div class="p-8 border-2 border-primary max-w-5xl grid grid-cols-1 sm:grid-cols-golden gap-8">
    <div class="flex flex-col items-center md:justify-center gap-6">
        <img alt="Fotografia de Zé Cipriano" src="{{ $page->baseUrl }}/assets/images/photo.jpg" class="rounded-full w-1/2">
        @include('_partials.logo')
    </div>

    <div>
        <p class="md:text-lg mb-8">Programador web com mais de 10 anos de experiência como trabalhador independente. Especializado em PHP e Laravel.</p>

        @include('_partials.contacts')

        @include('_partials.cv')

        @include('_partials.links')
    </div>
</div>
@endsection
