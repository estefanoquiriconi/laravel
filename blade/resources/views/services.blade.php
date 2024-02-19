@extends('layouts.landing')

@section('title', 'Services')

@section('content')

    <h1>Services</h1>

    @component('components.card')
        @slot('title', 'Service 1')
        @slot('content', 'Lorem ipsum dollendus,');
    @endcomponent

    @component('components.card')
        @slot('title', 'Service 2')
        @slot('content', 'Lorem 2');
    @endcomponent
@endsection
