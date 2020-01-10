<h2>Thêm mặt hàng</h2>
<?php
if (isset($message))
    echo "<p class='alert-info'>$message</p>";

?>

<form method="post">
    <div class="form-group">
        <label>Tên Hàng</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
        <label>Loại Hàng</label>
        <select class="form-control" name="type">
            <option value="Điện Thoại">Điện Thoại</option>
            <option value="Máy Tính">Máy Tính</option>
            <option value="Tivi">Tivi</option>
            <option value="Điều Hòa">Điều Hòa</option>
            <option value="Tủ Lạnh">Tủ Lạnh</option>
        </select>
        <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control" name="price">
        </div>
        <div class="form-group">
            <label>Số lượng</label>
            <input type="number" class="form-control" name="number">
        </div>
    </div>
    <div class="form-group">
        <label>Mô tả</label>
        <textarea class="form-control" name="description" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Thêm mặt hàng</button>
    <a href="index.php" class="btn btn-primary">Thoát</a>
</form>