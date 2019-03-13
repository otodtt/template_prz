<!doctype html>
<html lang="bg">
<head>
    <meta charset="utf-8">
    <title>АДЮВАНТИ</title>

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
        #exampleTable {
            border: 1px solid gray;
        }
        td, th {
            border: 1px solid gray;
        }
        #exampleTable > thead > tr > th {
            border: 2px solid gray;
        }
        .italic-bold {
            font-style: italic;
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
                <li><a href="{!!URL::to('/adjuvants/create')!!}">Добави Адювант</a></li>
            </ul>
            <ul class="nav navbar-nav">
                <li><a href="{!!URL::to('/adjuvants/deactivated')!!}">Деактивирани</a></li>
            </ul>
            <h3 style="margin-left: 500px">АДЮВАНТИ</h3>
        </div>
    </div>
</div>
<div class="container">
    @yield('content')
</div>
</body>
</html>