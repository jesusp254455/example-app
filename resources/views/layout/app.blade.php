<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('title') - Products app</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <style>body{
    background: rgba(220, 218, 218, 0.777);
  }
    .acv{
      display: flex;
      justify-content: center;
      
    }
  </style>
  <body>
    <nav class="navbar navbar-light bg-light">
      <form class="form-inline">
        <a href="/products" class="btn btn-outline-success">Products</a>
        <a href="/products/create" class="btn btn-sm btn-outline-secondary">create</a>
      </form>
    </nav>
    <main class="acv p-3">
        @yield('content')
    </main>
    <div class="container">
      <div class="col">
        @yield('content2')
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>