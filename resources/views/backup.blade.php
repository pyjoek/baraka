<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <b>
                <td>CAR NUMBER</td>
                <td>DRIVER NAME</td>
                <td>PHONE NUMBER</td>
                <td>REASON</td>
                <td>TIME IN</td>
                <td>TIME OUT</td>
            </b>
        </tr>
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
    </table>
</body>
</html>