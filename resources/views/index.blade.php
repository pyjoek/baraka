<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}}</title>
    <script>
        function news(){
            document.querySelector('#new').style.display = ""
            document.querySelector('#history').style.display = "none"
        }
        function hist(){
            document.querySelector('#new').style.display = "none"
            document.querySelector('#history').style.display = ""
        }
    </script>
    <style>
        *{
            padding: 0;
        }
        #new input{
            width: 50%;
            padding: 3px;
            margin-bottom: 5px;
            outline: none;
            border: none;
            background: transparent;
            border-bottom: 1px solid red;
        }
        #new input[type="submit"],#wen{
            border-bottom: none;
            
        }
        #new{
            margin:0 auto;
            width: 80%;
            height: max-content;
            top: 50%;
            left: 50%;
            translate: (-50,-50);
        }
        #top{
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>
    <center>
    <main>
        <div id="new">
            <h1><a href="/adat">Add New attendance</a>&nbsp&nbsp&nbsp <a href="/add">Add New Student</a></h1>
            <table class="table">
               <tr>
                    <th>Full Name</th>
                    <th>Roll Number</th>
               </tr>
                @foreach ($students ?? '' as $student)
                    <tr>
                    <td><input type="text" name="students[{{$loop->index}}][name]" value="{{$student->name}}" readonly></td>
                    <td><input type="text" name="students[{{$loop->index}}][rollNo]" value="{{$student->rollNo}}" readonly></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </main>
    </center>
</body>
</html>