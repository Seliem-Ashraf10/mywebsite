<?php
include_once './Common/Header.php';
include './Common/Data.php';
$id = $_GET['id'];
?>
<?php
// استخرج بيانات المنتج قبل ما تدخل في HTML
$selectedProduct = null;
foreach ($Products as $key => $data) {
    if ($key == $id) {
        $selectedProduct = $data;
        break;
    }
}
?>

<div class="row m-5 text-center w-75 m-auto mb-5">
    <div class="col-md-6 col-sm-12 my-5">
        <img class="rounded-2" style="width: 100%;"
            src="<?php echo $selectedProduct['img']; ?>"
            alt="Image">
    </div>
    <div class="col-md-6 col-sm-12 my-5 p-5 mt-5">
        <h1 class="text-dark fw-bolder fs-1 mt-4">
            <?php echo $selectedProduct['title']; ?>
        </h1>
        <p class="h4 mt-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto commodi vero dolorum, omnis quos natus accusamus ullam neque ipsa, dolorem magnam totam ad quod expedita reiciendis incidunt at qui voluptate?</p>

        <a href="./index.php" class="btn btn-warning btn-lg mt-5 px-5  mx-2">Back to Home</a>
        <a href="./Cart.php" class="btn btn-primary btn-lg mt-5 px-5  mx-2">Add To Cart</a>
    </div>
</div>
<?php
include_once './Common/Footer.php';
?>