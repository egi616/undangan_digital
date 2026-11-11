<!DOCTYPE html> 
<html lang="en" class='scroll-smooth'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <title>Document</title>
</head>
<body>
    
    <x-footbar/>

    <x-home/>
    <x-couple/>
    <x-galery/>
    <x-event/>
    <x-reservasi-view :datareservasi="$datareservasi" />
    <x-gift/>
    
</body>
</html>