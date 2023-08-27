@extends('landing.layouts.main')
@section('content')
    <main>
        {{-- hero --}}
        @include('landing.home.partials.hero')
        {{-- about --}}
        @include('landing.home.partials.about')
        {{-- featured --}}
        @include('landing.home.partials.featured')
        {{-- clients --}}
        @include('landing.home.partials.clients')
        {{-- services --}}
        @include('landing.home.partials.services')
        {{-- projects --}}
        @include('landing.home.partials.projects')
        {{-- contact --}}
        @include('landing.home.partials.contact')
    </main>
@endsection