<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Laravel</h1>
    {{-- {{ $age }} --}}


    {{ $name }}
    {{ $age }}
    {{-- @if($age >= 22)
        @if ($name == 'Calling')
            <h3>Hi, My is Collin</h3>
        @endif
    @elseif()
        
    @endif --}}

    @if ($age >= 15 && $age <= 20)
        <p>1</p>
    @elseif ($age >= 21 && $age <= 25)
        <p>2</p>
    @else
        <p>3</p>
    @endif
</body>
</html>