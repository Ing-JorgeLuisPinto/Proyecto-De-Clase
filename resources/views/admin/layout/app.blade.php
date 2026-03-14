<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Panel Administrador</title>

<link rel="stylesheet" href="{{ asset('css/admin.css') }}">

</head>

<body>

<div class="admin-container">

<aside class="sidebar">

<h2>JetProduct</h2>

<a href="/admin">Dashboard</a>

<a href="{{ route('product.index') }}">
Productos
</a>

<a href="#">
Usuarios
</a>

<a href="#">
Pedidos
</a>

<a href="#">
Reportes
</a>

<hr style="margin:20px 0; opacity:.2">

<a href="/">
Ver tienda
</a>

</aside>

<div class="main">

<div class="topbar">

<h1>Panel Administrativo</h1>

<div class="user">
Admin
</div>

</div>

<div class="content">

@yield('content')

</div>

</div>

</div>

</body>
</html>