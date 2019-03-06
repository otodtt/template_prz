<!doctype html>
<html lang="bg">
<head>
    <meta charset="utf-8">
    <title>ДЕСИКАНТИ</title>

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
        .latin_name {
            font-style: italic;
        }
    </style>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>

<div class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a href="../" class="navbar-brand">Bootswatch</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
            <ul class="nav navbar-nav">
                <li><a href="{!!URL::to('/desiccants/create')!!}">Добави Десикант</a></li>
            </ul>
            <h3 style="margin-left: 500px">ДЕСИКАНТИ</h3>
        </div>
    </div>
</div>
<div class="container">
    @yield('content')
</div>
</body>
</html>