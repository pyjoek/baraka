<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}}</title>
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
        .sub{
            display: flex;
            flex-direction: row;
        }
    </style>
</head>
<body>
   <center>
   <div class="main">
        <h1>    
            <a href="/adat">Add New Attendance</a>&nbsp&nbsp&nbsp 
            <a href="/add">Add New Student</a>&nbsp&nbsp&nbsp 
            <a href="/dates">Dates</a>
        </h1>
        <div class="add-student">
            <form action="/addStudent" method="post" id="new">
                @csrf
                <input type="text" name="name" placeholder="Full Name">
                <input type="text" name="rollno" placeholder="Roll Number">
                <div class="sub">
                    <input type="radio" name="gender" value="male"> Male
                    <input type="radio" name="gender" value="female"> Female
                </div>
                <input type="date" name="dob">
                <input type="submit" value="Add" class="btn btn-primary">
            </form>
        </div>
    </div>
   </center>
</body>
</html>