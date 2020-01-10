<h3>Danh sách mặt hàng</h3>
<a href="index.php?page=add">Thêm mặt hàng</a>

<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Tên hàng</th>
        <th scope="col">Loại hàng</th>
        <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $key => $product): ?>
        <tr>
            <th scope="row"><?php echo ++$key ?></th>
            <td><?php echo $product->getName() ?></td>
            <td><?php echo $product->getType() ?></td>
            <td>
                <a href="index.php?page=edit&id=<?php echo $product->getId(); ?>"
                   class="btn btn-primary btn-sm">Chỉnh sửa</a>
                <a href="index.php?page=delete&id=<?php echo $product->getId(); ?>"
                 class="btn btn-warning btn-sm">Xóa</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>