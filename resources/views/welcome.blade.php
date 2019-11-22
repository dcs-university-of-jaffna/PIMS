<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Laravel</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url("images/main.jpg");
                height: 100%;
                background-attachment: fixed;
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;

            }
            p.pp{
                font-size: 1em; /* 14px/16=0.875em */
                font-family:"Serif+";
                font-weight: bold;;
                font-variant: small-caps;
                
            }
            p.ppp{
                font-size: 1.3em; /* 14px/16=0.875em */
                font-family:"Serif";
                font-weight: bold;
                font-variant: small-caps;
                
            }
            .saveForm {
                position: static;
                top: 750px;
                font-weight: lighter;
                font-size: 40px;
                
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

        <form>
            <div class="container-fluid">
            <div class="flex-center position-ref full-height">   
                <div class="content">

                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                        <div class="title m-b-md ">
                            <p class ="pp text-primary">Poison Information Management System</p>
                        </div>
                        <div class="title m-b-md ">
                            <p class ="ppp text-primary">(PIMS)</p>
                        </div>           
                    
                    @if (Route::has('login'))
                        <div>
                            @auth
                                <a href="{{ url('/home') }}" ><button type="button" class="btn btn-success saveForm" aria-pressed="true">Home</button></a>
                            @else
                                <a href="{{ route('login') }}" ><button type="button" class="btn btn-success saveForm" aria-pressed="true">Login</button></a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"><button type="button" class="btn btn-success saveForm" aria-pressed="true">Register</button></a>
                                @endif
                            @endauth
                        </div>
                    @endif
            </div>
            </div>
            </div>
        </form>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
    </body>
</html>
