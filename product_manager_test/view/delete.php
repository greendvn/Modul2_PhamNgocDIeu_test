<h2>Xóa mặt hàng</h2>
<h5>Bạn có chăc chắn muốn xóa mặt hàng <?php echo $product->getName()  ?>?</h5>
<?php
    if($_SERVER["REQUEST_METHOD"]=="POST") {
        $id = $_POST["id"];
        $this->productDB->delete($id);
        header("Location:index.php");
    }
?>
<form method="post">
    <input type="text" class="form-control" name="id" value="<?php echo $product->getId()?> " hidden>
    <a  href="index.php" class="btn btn-primary">Thoát</a>
    <button type="submit" class="btn btn-primary">Xóa Mặt hàng</button>
</form>