@extends('layouts.app')

@section('content')

@endsection
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>MODERATOR</title>
    <script>
      function openSlideMenu(){
        document.getElementById('menu').style.width = '250px';
        document.getElementById('content').style.marginLeft= '250px';
      }
      function closeSlideMenu(){
        document.getElementById('menu').style.width = '0';
        document.getElementById('content').style.marginLeft= '0';
      }
     </script>
  </head>
  <body>
    <div id="content">
      <span class="slide">
      <a href="#" onclick="openSlideMenu()">
        <i class="fas fa-bars"></i>
      </a>

      </span>


  <div id="menu" class="nav">
    <a href="#" class="close" onclick="closeSlideMenu()">
      <i class="fas fa-times"></i>
    </a>
    <a href="#">HOME</a>
    <a href="#">BOOKS</a>
    <a href="#">SETTINGS</a>
    <a href="#">LOGOUT</a>

  </div>
  <div class="body-book">
<a href="book.html">BOOK NAME</a>
<p>Contribution ID</p>
<p>Created by </p>
<p>Created at</p>
  </div>
    </div>
  </body>
</html>
