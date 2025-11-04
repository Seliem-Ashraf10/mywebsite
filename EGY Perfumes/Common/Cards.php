<div class="row mx-auto mt-5 mb-5" style="width: 85%;">
    <?php
    include './Common/Data.php';
    $someCities = array_slice($Products, 0, 4);
    foreach ($Products as $Product => $data) {
    ?>
        <div class="col-md-3 gap-1">
            <div class="card mb-3">
                <img class="card-img-top" style="height: 230px;" src="<?php echo $data['img'] ?>" alt="Prodacts" />
                <div class="card-body">
                    <h4 class="card-title text-center"><?php echo $data['title'] ?></h4>
                    <a
                        href="Details.php?id=<?php echo $Product?>"
                        class="btn btn-outline-info w-100 mt-1 text-center">More Info</a>
                </div>
            </div>
        </div>
    <?php
    };
    ?>
</div>