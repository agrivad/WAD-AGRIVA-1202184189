<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Tambah</title>

</head>

<body>
    <!-- NAVBAR -->
    <div class="bg-secondary">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link text-dark" href="/">HOME</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link text-dark" href="/products">PRODUCT<a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/orders">ORDER<a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="/history">HISTORY</a>
            </li>
        </ul>
    </div>
<!-- NAVBAR -->

<div class="container" style="margin-bottom: 80px;">
<br>
<br>
<h3 class="text-center" >Input Product</h3>

        <form  role="form" method="post" enctype="multipart/form-data" action="/addproducts">

            @csrf
            @method('post')
            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <div class="input-group-prepend">
                    <div class="input-group-text">$ USD</div>
                    <input class="form-control" type="text" id="price" name="price" >
                </div>
            </div>
            <div class="form-group">
                <label for="Description">Description</label>
                <textarea class="form-control" id="Description" name="Description" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="number" name="stock" id="stock" class="form-control" style="width: 300px">
            </div>
            <div class="form-group">
                <label for="img">Image file input</label>
                <input type="file" class="form-control-file" id="img" name="img">
            </div>
            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
</body>

</html>