<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <title>Document</title>
    
</head>
<body class="bg-gray-200">

    <x-navbar :drawerId="'drawer-create-product-default'">
        Add Product
    </x-navbar>
   
    <x-product-list :products="$products" />
    <x-product-edit />
    <x-product-drawer />

</body>
</html>