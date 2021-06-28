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
    <h2>Sample View 1</h2>
    <hr size="5">
    <ul>
        <?php 
            // This Returns as Object --}}
            // $current_route          = Route::current();
            // dd($current_route);die;
            $current_route_name     = Route::currentRouteName();
            $current_route_action   = Route::currentRouteAction();
        ?>
        <li>Current Route name : <b>{{ $current_route_name }}</b></li>
        <li>Current Route Action : <b>{{ $current_route_action }}</b></li>
        <li>Redirect (302) : <a href="{{ Route('ViewSampleBlade') }}">Test Redirect</a></li>
        <li>Permanant Redirect (301) : <a href="{{ url('/redirect2') }}">Test Permanant Redirect</a></li>
        <ul>
            <li>Status 301 means that the resource (page) is moved permanently to a new location. The client/browser should not attempt to request the original location but use the new location from now on.</li>
            <li>Status 302 means that the resource is temporarily located somewhere else, and the client/browser should continue requesting the original url.</li>
        </ul>
        <li>Return with Values : <a href="{{ Route('one_val_route',['name'=>'Kishore']) }}">Click Here"</a></li>
        <li>Return with Multiple Value <b><a href="{{ Route('testval',['commentid' =>'Hello Machi','postid'=>'48']) }}">Click Here</a></b></li>
    </ul>
</body>
</html>