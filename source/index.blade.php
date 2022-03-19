@extends('_layouts.main')

@section('body')
<div class="p-8 border-2 border-primary max-w-5xl grid grid-cols-1 sm:grid-cols-golden gap-10">
    <div class="flex flex-col items-center justify-center gap-6">
        <img alt="Fotografia de Zé Cipriano" src="{{ $page->baseUrl }}/assets/images/photo.jpg" class="rounded-full w-1/2">
        <img alt="Zé Cipriano" src="{{ $page->baseUrl }}/assets/images/logo.svg" class="w-4/5 sm:w-full md:w-5/6">
    </div>

    <div>
        <p class="text-lg mb-8">Programador web com mais de 10 anos de experiência como freelancer / independente, especializado em PHP e Laravel.</p>

        @include('_partials.contacts')

        <div class="mb-8">
            <p>GitHub: <a href="https://github.com/zecipriano" target="_blank">github.com/zecipriano</a></p>
            <p>LinkedIn: <a href="https://www.linkedin.com/in/zecipriano/" target="_blank">linkedin.com/in/zecipriano</a></p>
            <p>Polywork: <a href="https://www.polywork.com/zecipriano" target="_blank">polywork.com/zecipriano</a></p>
            <p>Twitter: <a href="https://twitter.com/zecipriano" target="_blank">twitter.com/zecipriano</a></p>
        </div>

        <div>
            <p>Curriculum Vitae (pdf): <a href="{{ $page->baseUrl }}/assets/files/curriculum_vitae__ze_cipriano__pt.pdf" target="__blank">[Português]</a> <a href="{{ $page->baseUrl }}/assets/files/curriculum_vitae__ze_cipriano__en.pdf" target="__blank">[English]</a></p>
        </div>
    </div>
</div>
@endsection
