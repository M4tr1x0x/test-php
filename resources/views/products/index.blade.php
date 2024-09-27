<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product View</title>
</head>
<body>
    <h1>Product List</h1>

    <!-- Botón para agregar un nuevo producto -->
    <a href="{{ route('products.create') }}">
        <button>Add Product</button>
    </a>

    <!-- Aquí podrías listar los productos si los estuvieras pasando desde el controlador -->
</body>
</html>
