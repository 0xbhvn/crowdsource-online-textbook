<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Crowdsource Textbook</title>
<script src="//cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #000;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            #particles-js{



}

.name {
color: white;
position: absolute;
margin-top: 20%;
margin-left: 40%;
float: none;
}
            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}" style="color:white;">Home</a>
                    @else
                        <a href="{{ route('login') }}" style="color:white;">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" style="color:white;">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


        </div>

        <div id="particles-js">
        <center>

          <h1 style="font-size:50px;" class="name"> CLOUDBOOK
  </h1></center>
        </div>

          <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
           <script>
             particlesJS.load('particles-js', '{{ asset('js/particles.json') }}', function(){
               console.log('particles.json loaded...');
             });
           </script>

    </body>
</html>
