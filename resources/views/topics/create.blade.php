@extends('layouts.app')

@section('content')
    <script>
        tinymce.init({
            selector: '#mytextarea'
        });
    </script>
    <form method="POST" action="/textbooks/{{ $topic->id }}">
        @csrf
        <input type="text" name="title">
        <textarea id="mytextarea" name="text"></textarea>
        <input type="submit">
    </form>

@endsection
