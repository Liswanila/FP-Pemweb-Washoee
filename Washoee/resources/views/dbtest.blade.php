<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Test</title>
</head>
<body>
    <h1>Database Tables</h1>
    <ul>
        @foreach($tables as $table)
            <li>{{ $table->Tables_in_washoee_db }}</li>
        @endforeach
    </ul>
</body>
</html>
