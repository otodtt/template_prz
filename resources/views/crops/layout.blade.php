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
        .overflow {
            width: 8em;
            outline: 1px solid rgba(0, 0, 0, 0);
            margin: 0 0 2em 0;
            white-space: nowrap;
            overflow: hidden;
        }
        .green {
            color: green;
        }
        .red {
            color: red;
        }
        .category {
            width: 10px;
        }
        .dose {
            width: 80px;
        }
        .underline {
            text-decoration: underline;
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