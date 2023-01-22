@extends('layouts.default')
@section('content')
    @include('sections.frontsite.intro.index')
    <main id="main">
        @include('sections.frontsite.featured-services.index')
        @include('sections.frontsite.about-us.index')
        @include('sections.frontsite.services.index')
        @include('sections.frontsite.call-to-action.index')
        @include('sections.frontsite.skills.index')
        @include('sections.frontsite.facts.index')
        @include('sections.frontsite.portfolio.index')
        @include('sections.frontsite.clients.index')
        @include('sections.frontsite.clients-testimonials.index')
        @include('sections.frontsite.team.index')
        @include('sections.frontsite.contact.index')
    </main>
@endsection
