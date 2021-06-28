<!DOCTYPE html>
<?php
use Illuminate\Support\Facades\Route;
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Sample View 2</h2>
    <hr size="5">
    <p>Hello <b>{{ $name }}({{$age}})</b> :</p>
    <ul>
        <li>Sample 1</li>
        <li>Sample 2</li>
    </ul>
</body>
</html>