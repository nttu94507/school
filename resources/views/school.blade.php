<?php
//use app\Http\Controllers\PostchooseController;
?>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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
    <input type=button value="新增">
       <table border=1>
       
            <tr>
                <td>ID</td>
                <td>姓名</td>
                <td>課程</td>
                <td>時間</td>
                
                <td>修改</td>
                <td>刪除</td>


            </tr>
            @foreach($data as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->Post_student->studentname}}</td>
                <td>{{$item->Post_class->classname}}</td>
                <td>{{$item->updated_at}}</td>

                <td><button name="modify">修改</button></td>
                <td><a href="/choose/delete/id">刪除</a></td>
            </tr>
            @endforeach


    </table>
    <form action = "/choose" method = "POST">
            id:<input type ="int" name ="id"><br>
            name:<input type ="text" name ="name"><br>
            class:<input type ="text" name ="class"><br>
            <input type=submit value="SEND">
    </form>
            
    </body>

</html>
