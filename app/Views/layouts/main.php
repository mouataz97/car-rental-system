<!DOCTYPE html>
<html>
<head>
    <title>Car Rental System</title>
    <style>
        body{
            font-family: Arial;
            margin:40px;
        }

        nav{
            margin-bottom:20px;
        }

        nav a{
            margin-right:15px;
            text-decoration:none;
            font-weight:bold;
        }
    </style>
</head>

<body>

<nav>
    <a href="/car-rental-system/public/">Home</a>
    <a href="/car-rental-system/public/cars">Cars</a>
    <a href="/car-rental-system/public/cars/create">Add Car</a>
</nav>

<hr>

<!-- Page Content -->
<?php require $viewPath; ?>

</body>
</html>