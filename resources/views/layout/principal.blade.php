<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/custom.css">
         <title>@yield('titulo')</title>
    </head>
<body>

<div class="container">
<nav class="navbar navbar-default">
<div class="container-fluid">
<div class="navbar-header">
<a class="navbar-brand" href="/produtos">
Jornal 
</a>
</div>
<ul class="nav navbar-nav navbar-right">
<li><a href="login">Login</a></li>
</ul>
</div>
</nav>

@yield('conteudo')

<footer class="footer">
    <p>© Sistema de notícias.</p>
    </footer>
</div>
</body>
</html>