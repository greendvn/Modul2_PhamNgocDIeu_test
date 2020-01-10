<h2>Chỉnh sửa mặt hàng <?php echo $product->getName() ?> </h2>
<div class="col-12">
    <form method="post" action="index.php?page=edit">
        <input type="text" class="form-control" name="id" value="<?php echo $product->getId() ?>" hidden>
        <input type="text" class="form-control" name="dayCreate" value="<?php echo $product->getDayCreate() ?>" hidden>

        <div class="form-group">
            <label>Tên Hàng</label>
            <input type="text" class="form-control" name="name" value="<?php echo $product->getName() ?>">
        </div>
        <div class="form-group">
            <label>Loại Hàng</label>
            <select class="form-control" name="type">
                <option value="Điện Thoại" <?php if ($product->getType() == "Điện Thoại"): ?>selected <?php endif; ?> >
                    Điện
                    Thoại
                </option>
                <option value="Máy Tính" <?php if ($product->getType() == "Máy Tính"): ?>selected <?php endif; ?> >Máy
                    Tính
                </option>
                <option value="Tivi" <?php if ($product->getType() == "Tivi"): ?>selected <?php endif; ?> >Tivi</option>
                <option value="Điều Hòa" <?php if ($product->getType() == 'Điều Hòa'): ?>selected <?php endif; ?> >Điều
                    Hòa
                </option>
                <option value="Tủ Lạnh" <?php if ($product->getType() == "Tủ Lạnh"): ?> selected <?php endif; ?>>Tủ Lạnh
                </option>
            </select>
            <div class="form-group">
                <label>Price</label>
                <input type="text" class="form-control" name="price" value="<?php echo $product->getPrice() ?>">
            </div>
            <div class="form-group">
                <label>Số lượng</label>
                <input type="number" class="form-control" name="number" value="<?php echo $product->getNumber() ?>">
            </div>
        </div>
        <div class="form-group">
            <label>Mô tả</label>
            <textarea class="form-control" name="description"
                      rows="3"><?php echo $product->getDescription() ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Sửa mặt hàng</button>
        <a href="index.php" class="btn btn-primary">Thoát</a>
    </form>
</div>