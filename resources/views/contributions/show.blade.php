@extends('layouts.app')

@section('content')
    <h1><?php echo $topic['title'] ?><br></h1>
    <?php echo $topic['text'] ?>
    <br><br>
    <h1><?php echo $contribution['title'] ?><br></h1>
    <?php echo $contribution['text'] ?>
    Status: {{ $contribution->status }}
@endsection
