<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>PRODUCTS</title>

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

    <!-- cek dari controller -->
    @if($products -> isEmpty())
    <div class="text-center">
        <br>
        <br>
    <h5>Tidak ada data bund</h5>
        <a type="button" class="btn btn-secondary btn-sm" href="/addproduct">Add Product</a>
    </div>

    @else
    <div class="container" style="margin-bottom: 80px;">
        <div class="text-center" style="margin-bottom: 20px; margin-top: 40px;">
            <h3>List Product</h3>
        </div>

        <a href="/addproducts" type="button" class="btn btn-dark">Add Product</a>
        <table class="table" style="margin-top: 20px">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>

            <!-- menampilkan list produk dari database -->
            <tbody>
                <?php $x = 1 ?>
                @foreach($products as $pds)
                <tr>
                    <th scope="row"><?php echo $x;
                                    $x++ ?></th>
                    <td>{{$pds->name}}</td>
                    <td>{{$pds->price}}</td>
                    <td><a type="button" href="" class="btn btn-primary">Edit</a>
                        <a href="" type="button" class="btn btn-danger">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
</body>

</html>