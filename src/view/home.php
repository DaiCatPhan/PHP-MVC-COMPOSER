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
    <h1>Đây là trang chủ</h1>
    <div>
        <a href="/php/php-mvc/product/createPage">Tạo san pham moi</a>
    </div>


    <div class="w-50 m-auto">
        <table class="table border">
            <thead>
                <tr>

                    <th scope="col">ID</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Hành động</th>

                </tr>
            </thead>
            <tbody>

                <?php foreach ($listProduct as $item): ?>
                    <tr>
                        <td><?= htmlspecialchars($item['id']) ?></td>
                        <td><?= htmlspecialchars($item['name']) ?></td>
                        <td><?= htmlspecialchars($item['des']) ?></td>
                        <td class="d-flex">

                            <a href="/php/php-mvc/product/update/<?= htmlspecialchars($item['id']) ?>">
                                <i class="fa-solid fa-pen-to-square text-primary"></i>
                            </a>
                            <a href="/php/php-mvc/product/delete/<?= htmlspecialchars($item['id']) ?>"
                                onclick="alert('Ban co chac chan muon xoa khong ?')">
                                <i class="fa-solid fa-trash text-danger mx-3"></i>
                            </a>

                            <a href="/php/php-mvc/product/detail/<?= htmlspecialchars($item['id']) ?>">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                        </td>

                    </tr>
                <?php endforeach; ?>



            </tbody>
        </table>
    </div>
</body>

</html>