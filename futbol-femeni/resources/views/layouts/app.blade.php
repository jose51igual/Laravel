<!DOCTYPE html>
<html lang="ca">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>@yield('title','Guia de futbol femení')</title>
      @vite(['resources/css/app.css', 'resources/css/equips.css'])
</head>
<body>
      <header>
        @include('partials.menu')
      </header>
      <main>
       @yield('content')
      </main>
      <footer>
          <p>&copy; 2024 Guia de Futbol Femení</p>
      </footer>
</body>
</html>