<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        .date-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .date-item {
            margin: 10px;
        }
        .content {
            display: none;
        }
    </style>
</head>
<body>
    <main>
        <center>
            <h1>
                <a href="/adat">Add New Attendance</a>&nbsp&nbsp&nbsp 
                <a href="/add">Add New Student</a>&nbsp&nbsp&nbsp 
                <a href="/dates">Dates</a>
            </h1>

            <div class="date-row">
                @foreach ($dateTables as $index => $table)
                    <div class="date-item">
                        <button onclick="showContent({{ $index }})" class="btn btn-primary">{{ $table }}</button>
                    </div>
                @endforeach
            </div>

            @foreach ($dateTables as $index => $table)
                <div id="content-{{ $index }}" class="content">
                    <h3>Content for {{ $table }}</h3>
                    <p>This is the content for {{ $table }}.</p>
                </div>
            @endforeach
        </center>
    </main>

    <script>
        function showContent(index) {
            // Hide all content
            let contents = document.querySelectorAll('.content');
            contents.forEach(function(content) {
                content.style.display = 'none';
            });

            // Show the selected content
            let selectedContent = document.getElementById('content-' + index);
            selectedContent.style.display = 'block';
        }
    </script>
</body>
</html>
