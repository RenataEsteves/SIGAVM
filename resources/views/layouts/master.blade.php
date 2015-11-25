<!DOCTYPE html>
<html lang="en">
<head>
    <TITLE>SIGAVM</TITLE>

    <meta charset="UTF-8">
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    {{--<link rel="icon" href="../../favicon.ico">--}}

    <!-- Bootstrap core CSS -->
    {{--<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">--}}

    <!-- Custom styles for this template -->
    {{--<link href="navbar-fixed-top.css" rel="stylesheet">--}}

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><!--<script src="/bootstrap/js/ie8-responsive-file-warning.js"></script>--><![endif]-->
    {{--<script src="/bootstrap/js/ie-emulation-modes-warning.js"></script>--}}

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <!--<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>-->
    <!--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
    <![endif]-->
</head>

<body>

<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">SIGAVM</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Início</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Consultar <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/membros">Membros</a></li>
                        <li><a href="/instituicao">Instituição</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastrar <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/membros/create">Membros</a></li>
                        <li><a href="/instituicao/create">Instituição</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                {{--<li><a href="../navbar/">Default</a></li>--}}
                {{--<li><a href="../navbar-static-top/">Static top</a></li>--}}
                <li class="active"><a href="/auth/logout">Logout <span class="sr-only">(current)</span></a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container" style="margin-top: 3%">

    @yield('Content')

</div> <!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
{{--<script src="/bootstrap/js/main.js"></script>--}}

{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>--}}
<script src="/jss/jquery-1.11.3.min.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
{{--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>--}}


<script type="text/javascript" src="/jss/jquery.mask.min.js"></script>
<script type="text/javascript">
    $(function() {
        $('.phone').mask('(00) 0000-0000');
        $('.cpf').mask('000.000.000-00');
        $('.anoCad').mask('0000/0');
    });
</script>

</body>
</html>
