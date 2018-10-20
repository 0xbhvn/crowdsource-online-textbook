@extends('layouts.app')

@section('content')
<form method="POST" action="/uni/textbooks">
    @csrf
    <input type="text" name="name">
    <input type="submit">
</form>

@endsection
