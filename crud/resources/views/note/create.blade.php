@extends('layouts.app')

@section('content')
    <form action={{ route('note.store') }} method="POST">
        @csrf
        <label for="title">Title: </label>
        <input type="text" name="title" id="title">

        <label for="description">Description: </label>
        <input type="text" name="description" id="description">

        <input type="submit" value="Create">
    </form>
@endsection
