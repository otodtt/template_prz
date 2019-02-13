<!doctype html>
<html lang="bg">
<head>
    <meta charset="utf-8">
    <title>ПАРАЛЕЛНА ТЪРГОВИЯ</title>

    {!!Html::style("css/bootstrap.css" )!!}
    <style>
        /*.latin_name {*/
        /*font-style: italic;*/
        /*}*/
        .overflow {
            width: 10em;
            outline: 1px solid rgba(0, 0, 0, 0);
            margin: 0 0 2em 0;
            white-space: nowrap;
            overflow: hidden;
        }
        .bold {
            font-weight: bold;
        }
        .underline {
            text-decoration: underline;
        }
        .green {
            color: green;
        }
        .red {
            color: red;
        }
        .dose {
            width: 80px;
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
                <li><a href="{!!URL::to('/parallel/create')!!}">Добави Продукт</a></li>
            </ul>
            <h3 style="margin-left: 500px">ПАРАЛЕЛНА ТЪРГОВИЯ</h3>
        </div>
    </div>
</div>
<div class="container">
    @yield('content')
</div>
</body>
</html>