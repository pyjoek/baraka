<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        body {
            margin: 20px; /* Adding some margin around the body */
        }
        h1 {
            text-align: center; /* Centering the heading */
            margin-bottom: 20px; /* Space below the heading */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>History Table</h1>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Car Number</th>
                    <th>Driver Name</th>
                    <th>Phone Number</th>
                    <th>Reason</th>
                    <th>Time In</th>
                    <th>Time Out</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($history as $hist)
                    <tr>
                        <td>{{$hist['car_number']}}</td>
                        <td>{{$hist['driver_name']}}</td>
                        <td>{{$hist['phone_number']}}</td>
                        <td>{{$hist['reason']}}</td>
                        <td>{{$hist['time_in']}}</td>
                        <td>{{$hist['time_out']}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
