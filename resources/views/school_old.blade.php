<?php
//use app\Http\Controllers\PostchooseController;
?>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
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
        <script>

        </script>
    </head>
    <body>
    <form action = "/choose/update" method = "POST">
    @csrf
            id:<input type ="int" name ="id" value="{{$chose->id}}"><br>,<!--
            name:<input type ="text" name ="poststudent_id"><br>
            class:<input type ="text" name ="postclass_id"><br>
            -->
        
            <select name="poststudent_id">
                @foreach($stucho as $student)
                <option value="{{ $student->id }}" <?php if($student->id == $chose->poststudents_id) echo "selected";?> >{{ $student->studentname }}</option>
                
                @endforeach
            </select>    
            <select name="postclass_id">
                @foreach($clacho as $clsaa)
                <option value="{{ $clsaa->id }}" <?php if($clsaa->id == $chose->postclasss_id) echo "selected";?> >{{ $clsaa->classname }}</option>
                @endforeach
            </select>   

            <input type=submit value="SEND">
           
    </form>

    </body>

</html>
