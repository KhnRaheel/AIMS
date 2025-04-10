<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AIMS Healthcare</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link
      href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.30.0/tabler-icons.min.css"
      rel="stylesheet"
    />
</head>
<body>
    @include('layouts.navbar')
    @yield('content')
</body>
</html>
