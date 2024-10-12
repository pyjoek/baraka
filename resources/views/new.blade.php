<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <style>
        .form-check-inline {
            margin-right: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .btn-primary {
            margin-top: 10px;
        }
        h1 a {
            margin-right: 20px;
        }
        .main {
            margin-top: 20px;
        }
    </style>
</head>
<body>
   <center>
   <div class="main container">
        <h1>    
            <a href="/adat" class="btn btn-link">Add New Attendance</a>&nbsp;&nbsp;&nbsp;
            <a href="/add" class="btn btn-link">Add New Student</a>&nbsp;&nbsp;&nbsp;
            <a href="/dates" class="btn btn-link">Dates</a>&nbsp;&nbsp;&nbsp;
            <a href="/logout" class="btn btn-link">Logout</a>
        </h1>

        <div class="add-student">
            <form action="/addStudent" method="post" id="new" class="form-horizontal">
                @csrf

                <!-- Full Name Input -->
                <div class="form-group">
                    <input type="text" name="name" placeholder="Full Name" class="form-control" required>
                </div>

                <!-- Roll Number Input -->
                <div class="form-group">
                    <input type="text" name="rollno" placeholder="Roll Number" class="form-control" required>
                </div>

                <!-- Gender Radio Buttons -->
                <div class="form-group">
                    <label>Gender:</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" value="male" id="male" required>
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" value="female" id="female" required>
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                </div>

                <!-- Date of Birth Input -->
                <div class="form-group">
                    <input type="date" name="dob" class="form-control" required>
                </div>

                <!-- Submit Button -->
                <input type="submit" value="Add" class="btn btn-primary">
            </form>
        </div>
    </div>
   </center>
</body>
</html>
