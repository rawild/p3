<!doctype html>
<html>

    <head>
      <meta charset="utf-8">
      <title>
          @yield('title', 'Developers Friend')
      </title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
     <link rel="stylesheet" href="/css/p3.css" type="text/css" />
      @yield('head')
    </head>

    <body>
      <div class="container theme-showcase" role="main">
        <header>
          @yield('header')
        </header>
        <section class="contents">
          @yield('contents')
        </section>



        <footer>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
        </script>
      </div>
    </body>
</html>
