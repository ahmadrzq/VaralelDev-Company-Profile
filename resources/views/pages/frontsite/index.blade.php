@extends('layouts.default')

@section('content')
    <main id="main">
        @include('sections.frontsite.featured-services')
        @include('sections.frontsite.about-us')
        @include('sections.frontsite.services')
        @include('sections.frontsite.call-to-action')
        @include('sections.frontsite.skills')
        @include('sections.frontsite.facts')
        @include('sections.frontsite.portfolio')
        @include('sections.frontsite.clients')
        @include('sections.frontsite.clients-testimonials')
        @include('sections.frontsite.team')
        @include('sections.frontsite.contact')
    </main>
@endsection
