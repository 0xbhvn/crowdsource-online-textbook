@extends('layouts.app')

@section('content')
    <a href="/textbooks/{{ $topic->id }}/add">Add new topic</a>
    <br>
    @foreach($childs as $child)
        <?php echo $child['title'] ?><br>
    @endforeach
@endsection
