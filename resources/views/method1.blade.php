<!DOCTYPE html>
<html>
    <head>
        <title>Document</title>
    </head>
<body>
    {{ $aaa }}
    {{ $bbb }}
    <x-layout>
        <x-slot:title>
            {{ $title }}
        </x-slot>
        {{ $text }}
    </x-layout>
</body>
</html>