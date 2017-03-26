<!doctype html>
<html lang="bg">
<head>
    <meta charset="utf-8">
    <title>Неприятели</title>

    {!!Html::style("css/bootstrap.css" )!!}
</head>
<body>

    <div class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a href="../" class="navbar-brand">Bootswatch</a>
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
        </div>
    </div>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>