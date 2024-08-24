<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
            <table>
                <th>
                    <thead>Full Name</thead>
                    <thead>Roll Number</thead>
                    <thead>Status</thead>
                </th>
                <form action="/addattendance" method="post">
                    @csrf
                    @foreach ($students ?? '' as $student)
                    <tr>
                        <input type="hidden" name="date" value="<?php date_default_timezone_set('Africa/Nairobi'); $currentDate = date('Y-m-d'); echo  $currentDate; ?>">
                        <td><input type="text" name="name" value="{{$student->name}}" readonly></td>
                        <td><input type="text" name="rollno" value="{{$student->rollNo}}" readonly></td>
                        <td>
                            <select name="status" id="">
                                <option value="absent">Absent</option>
                                <option value="present">Present</option>
                            </select>
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="3"><button type="submit">Submit</button></td>
                    </tr>
                </form>
            </table>
        </div>
    </main>
    </center>
</body>
</html>