<!DOCTYPE html>
<html>
    <head>
        <title>Document</title>
    </head>
<body>
    {{ $ccc }}
    {{ $ddd }}

    <x-layout>
        <x-slot:title>
            {{ $title2 }}
        </x-slot>
        {{ $text2 }}
    </x-layout>
</body>
</html>