<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @foreach ($usuarios as $lista_usuarios)
      {{ $lista_usuarios['nickname'] }}
    @endforeach;
  </body>
</html>
