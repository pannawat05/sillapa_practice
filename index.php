<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Basic PHP</title>
</head>
<body>
<div class="container">
    <nav>
    <a href="#">Home</a>
    <a href="#">About</a>
    <a href="#">Product</a>
    <a href="#">Contact</a>
    <div class="dropdown">
        <a class="dropbtn" onclick="document.getElementById('content').style.display='block';">
        <i class="fa-solid fa-square-caret-down"></i>Dropdown
        </a>
  <div class="dropdown-content" id="content">
  <a href="#">link1</a>
  <a href="#">link2</a>
  <a href="#">link3</a>
    </div>
</div>
    
    </nav>
    <div class="sidebar">sidebar</div>
    <div class="catalog">catalog</div>
    <footer>Created by...</footer>
</div>
<script src="script.js"></script>
</body>
</html>