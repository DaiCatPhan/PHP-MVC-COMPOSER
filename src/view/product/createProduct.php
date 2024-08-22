<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body>

    <h1>CREATE PRODUCT</h1>
    <div class="w-25 m-auto border p-2">

        <form action="/php/php-mvc/product/create" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Tên sản phẩm</label>
                <input type="text" class="form-control" name="name">

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Giá</label>
                <input type="text" class="form-control" name="des">
            </div>

            <button type="submit" class="btn btn-primary">Tạo</button>
        </form>
    </div>
</body>

</html>