<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Board</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="bg-secondary-subtle fw-semibold ">
    <div class="container mt-4">
    {{ $slot }}
    </div>
    
</body>
</html>