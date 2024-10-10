<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <title>Document</title>
</head>
<body>
    <main>
        <center>

        <h1><a href="/adat">Add New attendance</a>&nbsp&nbsp&nbsp <a href="/add">Add New Student</a>&nbsp&nbsp&nbsp <a href="/dates">Dates</a></h1>

        <div>
            @foreach ($dateTables as $table)
                <h1>{{$table}}</h1>
            @endforeach
        </div>
        </center>
    </main>
        
</body>
</html>