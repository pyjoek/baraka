<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <script>
        function news(){
            document.querySelector('#new').style.display = "";
            document.querySelector('#history').style.display = "none";
        }
        function hist(){
            document.querySelector('#new').style.display = "none";
            document.querySelector('#history').style.display = "";
        }
    </script>

    <style>
        #new input[type="submit"] {
            margin-top: 10px;
        }
        #new input {
            width: 100%;
            padding: 6px;
            margin-bottom: 10px;
            outline: none;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        #new select {
            width: 100%;
            padding: 6px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .table-container {
            margin-top: 30px;
        }
        .btn-primary {
            width: 100%;
        }
        h1 a {
            margin-right: 20px;
        }
    </style>
</head>
<body>
    <center>
    <main class="container">
        <h1>    
            <a href="/adat" class="btn btn-link">Add New Attendance</a>
            <a href="/add" class="btn btn-link">Add New Student</a>
            <a href="/dates" class="btn btn-link">Dates</a>
            <a href="/logout" class="btn btn-link">Logout</a>
        </h1>

        <div id="new" class="table-container">
            <form action="/addattendance" method="post" class="form-horizontal">
                @csrf
                <input type="hidden" name="date" value="{{ date('Y-m-d') }}">

                <!-- Table for attendance -->
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr class="active">
                            <th>Full Name</th>
                            <th>Roll Number</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                        <tr>
                            <td>
                                <input type="text" name="students[{{$loop->index}}][name]" value="{{$student->name}}" readonly class="form-control">
                            </td>
                            <td>
                                <input type="text" name="students[{{$loop->index}}][rollNo]" value="{{$student->rollNo}}" readonly class="form-control">
                            </td>
                            <td>
                                <select name="students[{{$loop->index}}][status]" class="form-control">
                                    <option value="absent">Absent</option>
                                    <option value="present">Present</option>
                                </select>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <!-- Submit button -->
                <input type="submit" value="Submit" class="btn btn-primary">
            </form>
        </div>
    </main>
    </center>
</body>
</html>
