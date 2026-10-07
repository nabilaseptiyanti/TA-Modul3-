<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f5f5f5;
        }

        header {
            background-color: #eaeaea;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            margin: 0 0 15px 0;
        }

        nav a {
            margin: 0 10px;
            text-decoration: none;
            color: #663399;
        }

        main {
            padding: 20px;
        }

        .container {
            max-width: 900px;
            margin: auto;
        }

        .card {
            background-color: white;
            padding: 20px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        button {
            background-color: #663399;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        .status {
            font-weight: bold;
        }

        footer {
            background-color: #eaeaea;
            text-align: center;
            padding: 15px;
            margin-top: 20px;
        }
    </style>
</head>

<body>

<header>
    <h1>LaporBanjir</h1>

    <nav>
        <a href="{{ route('lapor.form') }}">Form Laporan</a>
        <a href="{{ route('lapor.daftar') }}">Daftar Laporan</a>
    </nav>
</header>

<main>
    <div class="container">
        @yield('content')
    </div>
</main>

<footer>
    © 2025 LaporBanjir - Nabila Septiyanti Supriono
</footer>

</body>
</html>