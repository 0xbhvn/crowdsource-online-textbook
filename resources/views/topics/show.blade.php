@extends('layouts.app')

@section('content')
    <a href="/textbooks/{{ $topic->id }}/add">Add new topic</a>
    <br><br>
    @foreach($childs as $child)
        <a href="/textbooks/{{ $child->id }}"><?php echo $child['title'] ?></a><br>
    @endforeach
    <br>
    <h1><?php echo $topic['title'] ?><br></h1>
    <?php echo $topic['text'] ?>
    <br><br>
    <a href="/textbooks/{{ $topic->id }}/contribute">Edit</a><br>
@endsection
