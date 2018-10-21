@extends('layouts.app')

@section('content')
    <script>
        tinymce.init({
            selector: '#mytextarea'
        });
    </script>
    <form method="POST" action="/textbooks/{{ $topic->id }}/contribute">
        @csrf
        <input type="text" name="title" value="{{ $topic->title }}">
        <textarea id="mytextarea" name="text"><?php echo $topic['text'] ?></textarea>
        <input type="submit">
    </form>

@endsection
