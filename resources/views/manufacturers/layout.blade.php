<!doctype html>
<html lang="bg">
<head>
    <meta charset="utf-8">
    <title>Неприятели</title>

    {!!Html::style("css/bootstrap.css" )!!}
    <style>
        .bold {
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a href="../" class="navbar-brand">Bootswatch</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
            <ul class="nav navbar-nav">
                <li><a href="{!!URL::to('/manufacturers/create')!!}">Добави Призводител</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
    @yield('content')
</div>
</body>
</html>