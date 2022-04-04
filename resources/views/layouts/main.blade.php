<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-md navbar-dark">
		        <div class="container">
			    <a href="/" class="navbar-brand">MCF Concursos</a>
                <div id="main-nav" class="collapse navbar-collapse">
			    	<ul class="navbar-nav ml-auto">
				    	<li></li>
				      </ul>
			     </div>
		    	<div id="main-nav" class="collapse navbar-collapse">
			    	<ul class="navbar-nav ml-auto">
				    	<li><a href="/" class="nav-item nav-link active">Pagina Inicial</a></li>
                        <li><a class="nav-item nav-link"></a></li>
					    <li><a href="/inscricao/create" class="nav-item nav-link">Fazer Inscrição</a></li>
				      </ul>
			     </div>
		     </div>
	        </nav> 
        </header>
       @yield('content')
    </body>
</html>