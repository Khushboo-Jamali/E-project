<?php
include 'header.php'; ?>

<div class="container">
    <form action="function.php" method="post">
        <?php
        include 'config.php';
        $id = $_GET['id'];
        $sql = "SELECT * FROM `products` WHERE product_id ='$id'";
        $res = mysqli_query($conn, $sql);


        while ($row = mysqli_fetch_array($res)) {


        ?>
            <input type="hidden" name="id" value="<?php echo $row['product_id']; ?>" />
            <div class="mb-3">
                <label for="productName" class="form-label">Product Name</label>
                <input
                    type="text"
                    class="form-control"
                    name="product_name"
                    id="productName"
                    value="<?php echo $row['product_name']; ?>" />
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea
                    class="form-control"
                    name="description"
                    id="description"><?php echo $row['description']; ?></textarea>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input
                    type="number"
                    class="form-control"
                    name="price"
                    id="price"
                    value="<?php echo $row['price']; ?>" />
            </div>

            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <input
                    type="text"
                    class="form-control"
                    name="category"
                    id="category"
                    value="<?php echo $row['category']; ?>" />
            </div>



            <button type="submit" class="btn btn-primary" name="update_product">Update</button>
        <?php
        }
        ?>
    </form>
</div>

<?php


include 'footer.php';
?>