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
    </head>
    <body>
    NEW
    <input type=button value="新增學生" onClick = "location.href = '/addnewstu' ">
    <input type=button value="新增課程" onClick = "location.href = '/addnewcla' ">
       <table border=1>
       
            <tr>
                <td>ID</td>
                <td>姓名</td>
                <td>課程</td>
                <td>時間</td>
                
                <td>修改</td>
                <td>刪除</td>


            </tr>
            <script>
            <!--
            function abcd(id){
                location.href='/choose/'+id;
            }
            //-->
            </script>
            @foreach($data as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->Post_student->studentname}}</td>
                <td>{{$item->Post_class->classname}}</td>
                <td>{{$item->updated_at}}</td>

                <td><button name="modify" onClick="location.href='/choose/{{$item->id}}' ">修改</button></td>
                <td><a href="/choose/delete/{{$item->id}}">刪除</a></td>
            </tr>
            @endforeach


    </table>
    
    <form action = "/choose" method = "POST">
    @csrf
            <!--id:<input type ="int" name ="id"><br>,
            name:<input type ="text" name ="poststudent_id"><br>
            class:<input type ="text" name ="postclass_id"><br>
            -->
        
            <select name="poststudent_id">
                @foreach($poststudents as $student)
                <option value="{{ $student->id }}">{{ $student->studentname }}</option>
                
                @endforeach
            </select>    
            <select name="postclass_id">
                @foreach($postclasses as $clsaa)
                <option value="{{ $clsaa->id }}">{{ $clsaa->classname }}{{$clsaa->classtime}}</option>
                @endforeach
            </select>   

            <input type=submit value="SEND">
           
    </form>
            
    </body>

</html>
