<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Demo</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
     <style>
        body{
            margin: 30px;
        }
    </style>
</head>
<body>
        <h1>Laravel Demo</h1>

        <ul class="nav justify-content-end float-right nav-pills">
            <li class="nav-item">
                <a class="nav-link " href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{url('/brand')}}">Brand</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{url('/about')}}">About</a>
            </li>
        </ul>
 
    
</body>
</html>