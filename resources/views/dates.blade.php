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
        h1 a {
            margin-right: 20px;
        }
        table th, table td {
            text-align: center;
            vertical-align: middle;
        }
        table {
            margin-top: 20px;
            border: 1px solid #ddd;
        }
        .btn-primary {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <main>
        <center>
            <h1>
                <a href="/adat" class="btn btn-link">Add New Attendance</a>&nbsp;&nbsp;&nbsp;
                <a href="/add" class="btn btn-link">Add New Student</a>&nbsp;&nbsp;&nbsp;
                <a href="/dates" class="btn btn-link">Dates</a>&nbsp;&nbsp;&nbsp;
                <a href="/logout" class="btn btn-link">Logout</a>
            </h1>

            <!-- Displaying table buttons -->
            <div class="date-row">
                @foreach ($dateTables as $index => $table)
                    <div class="date-item">
                        <button onclick="showContent({{ $index }})" class="btn btn-primary">{{ $table['table_name'] }}</button>
                    </div>
                @endforeach
            </div>

            <!-- Displaying content for each table -->
            @foreach ($dateTables as $index => $table)
                <div id="content-{{ $index }}" class="content container">
                    <h3>Table: {{ $table['table_name'] }}</h3>
                    
                    <h4>Sample Data:</h4>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                @foreach($table['columns'] as $columnIndex => $column)
                                    @if($columnIndex < count($table['columns']) - 2) <!-- Skip the last two columns -->
                                        <th>{{ $column->Field }}</th>
                                    @endif
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($table['sample_data'] as $row)
                                <tr>
                                    @foreach($table['columns'] as $columnIndex => $column)
                                        @if($columnIndex < count($table['columns']) - 2) <!-- Skip the last two columns -->
                                            <td>
                                                {{-- Safely output each field value --}}
                                                {{ is_array($row->{$column->Field}) || is_object($row->{$column->Field}) ? json_encode($row->{$column->Field}) : strval($row->{$column->Field}) }}
                                            </td>
                                        @endif
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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
