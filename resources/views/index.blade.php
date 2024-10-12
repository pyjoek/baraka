<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}}</title>
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
        .content {
            display: none;
        }
        #new {
            margin: 0 auto;
            width: 80%;
            max-width: 800px; /* Max width for larger screens */
            margin-top: 20px; /* Spacing from top */
        }
        h1 {
            margin-bottom: 20px; /* Space between heading and table */
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <h1>
            <a href="/adat" class="btn btn-link">Add New Attendance</a>
            <a href="/add" class="btn btn-link">Add New Student</a>
            <a href="/dates" class="btn btn-link">Dates</a>
        </h1>
        
        <div id="new">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Full Name</th>
                        <th>Roll Number</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($students->isNotEmpty())
                        @foreach ($students as $student)
                            <tr>
                                <td><input type="text" name="students[{{$loop->index}}][name]" value="{{$student->name}}" class="form-control" readonly></td>
                                <td><input type="text" name="students[{{$loop->index}}][rollNo]" value="{{$student->rollNo}}" class="form-control" readonly></td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="2">No Students Found!!</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
