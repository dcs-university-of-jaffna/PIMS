<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                height:100%;
                background-color: #fff;
                /*background-image: url("/images/main.jpg ");*/
                color: #636b6f;
                /*background-repeat: no-repeat;*/
                /*background-attachment: fixed;*/
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100px;
                
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
                text-align: center;
                margin-top: 400px; 
                /*right: 10px;
                top: 18px;*/
            }

            .content {
                text-align: center;
                position: absolute;
                top: 200px;
                
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: blue;
                margin-top: 300px;
                padding: 0 100px;
                font-size: 60px;
                font-weight: 10000;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                border-style: solid;
                border-color:yellow;
                background-color: orange;
            }

            .m-b-md {
                
                margin-bottom: 15px;
                margin-top: 30px;
            }

            .hero-image{
                 /* The image used */
                background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url("/images/main.jpg ");

                /* Full height */
                height: 1000%;

                /* Center and scale the image nicely */
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                position:relative;
            }
            .hero-text{
                /*text-align: center;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);*/
                color: white;
            }

        </style>
    </head>
    <body>      
                 <div class="hero-image">
                    <div class="hero-text">                    
                        <div class="flex-center position-ref full-height"> 
                            @if (Route::has('login'))
                            
                                    <div class="top-right links">
                                        @auth
                                            <a href="{{ url('/home') }}">Home</a>
                                        @else
                                            <a href="{{ route('login') }}">Login</a>

                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}">
                                                Register
                                                <!--button type="button" href="{{ route('register') }}">Register</button-->
                                                </a>
                                            @endif
                                        @endauth
                                    </div>
                                @endif
                          
                                    <div class="content">
                                    <table>                                     
                                            <tr>
                                                <td>
                                                    <div class="title m-b-md">
                                                    Poison Information Management System
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="title m-b-md">
                                                    (PIMS)
                                                    </div>
                                                </td>
                                            </tr>
                                    </table>
                                    </div> 
                        </div>
                    </div>
                </div>
    </body>
</html>
