<!doctype html>
<html lang="bg">
<head>
    <meta charset="utf-8">
    <title>ПРЗ КУЛТУРИ</title>

    {!!Html::style("css/bootstrap.css" )!!}
    <style>
        .bold {
            font-weight: bold;
        }
        .latin_name {
            font-style: italic;
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
                <li><a href="{!!URL::to('crops/create')!!}">Добави КУЛТУРА</a></li>
            </ul>
            <h3 class="bold" style="margin-left: 500px; color: green">ПРЗ КУЛТУРИ</h3>
        </div>
    </div>
</div>
<div class="container">
    @yield('content')
</div>
</body>
</html>