<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>I'M A SCATMAN</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="/css/app.css">
    <link href="/css/bootstrap.min.css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/changeMessage.js"></script>
  </head>
  <body>
  <button onClick="getMessage()">Click meh</button>
    @yield('content')
  </body>
  
  
</html>