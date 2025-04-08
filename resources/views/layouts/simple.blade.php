<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Meu Site')</title>

    <!-- Bootstrap 4 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
        form {
        width: 300px;
        margin: 20px auto;
        }

        label {
        display: block;
        margin-bottom: 5px;
        }

        input[type="text"], select {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        }

        button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        }

        canvas {
        margin: 20px auto;
        display: block;
        }
    </style>

    <style media="print">
        body * {
            visibility: hidden;
        }

        #chartContainer,
        #chartContainer * {
            visibility: visible;
        }

        #chartContainer {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #myChart {
            width: 100% !important;
            height: auto !important;
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="mt-3 mb-3">
            <h1>@yield('title', 'Meu Site')</h1>
        </header>

        <main>
            @yield('content')
        </main>

        <footer class="mt-5 mb-3 text-center">
            <p>&copy; {{ date('Y') }} Meu Site</p>
        </footer>
    </div>
    @yield('scripts')
</body>
</html>
