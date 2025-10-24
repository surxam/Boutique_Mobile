<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Boutique Mobile</title>
</head>
<body>

    <x-navigation/>
    <x-hero-section/>
    <x-categories/> 
   <div class="mx-auto flex justify-center items-center" >
        @yield('content')
   </div>
    
</body>
</html>