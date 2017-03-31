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
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                    <ul class="nav navbar-nav">
                        <li><a href="{!!URL::to('/template-practices/create')!!}">Добави Неприятел</a></li>
                        <li><a href="#">Link</a></li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>