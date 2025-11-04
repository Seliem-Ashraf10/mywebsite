<?php
$PageTitle = "products";
include_once './Common/Header.php';
?>
<h2 class="text-center" style="margin-top: 150px;">All Products</h2>
</div>
<div class="row mx-auto mt-5 mb-5" style="width: 85%;;">
    <?php
    include './Common/Data.php';
    foreach ($Products as $Product => $data) {
    ?>
        <div class="col-md-3 gap-1">
            <div class="card mb-3">
                <img class="card-img-top" style="height: 230px;" src="<?php echo $data['img'] ?>" alt="Title" />
                <div class="card-body">
                    <h4 class="card-title text-center"><?php echo $data['title'] ?></h4>
                    <a
                        href="./Details.php?id=<?php echo $Products ?>"
                        class="btn btn-outline-info w-100 mt-1 text-center">Details</a>
                </div>
            </div>
        </div>
    <?php
    };
    ?>
</div>
<?php
include_once './Common/footer.php';
?>