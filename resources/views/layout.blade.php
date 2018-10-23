<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Todo</title>

         <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-size: 20px;
                height: 100vh;
                margin: 0;
            }

            .m-b-md {
                margin-top : 30px;
            }

            #btn{
               margin-top: 100px;
               width: 20%;
               height: 80px;
               margin-left: 700px;
            }

            .icon-success{
                color: green;
                margin-left: 30px;
            }

        </style>
    </head>
    <body>
            <div class="content">
                <div class="title m-b-md">
                  @yield('content')
                </div>
            </div>
        </div>
    </body>
</html>
