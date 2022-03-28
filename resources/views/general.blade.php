<!DOCTYPE html>
<html lang="spa">
<head>
    <link rel ="stylesheet" href="<?=asset('css/css.css')?>">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')>Document</title>
</head>
<body>@yield('body')
<p>Hola me llamo paco el pistolero</p>

<pre><?php print_r($paquete);?></pre>

</body>
</html>
