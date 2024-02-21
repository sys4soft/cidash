<div class="col-sm-12 col-md-6 col-xl-4">
    <div class="h-100 bg-secondary rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-2">
            <h6 class="mb-0"><?= $title ?></h6>
            <a href="#">Show All</a>
        </div>
        
        <?php foreach($messages as $index => $message) : ?>
            
            <?php
                $css = $index != (count($messages) - 1) ? "border-bottom" : "";
            ?>


            <div class="d-flex <?= $css ?> py-3">
                <img class="rounded-circle flex-shrink-0" src="<?= base_url('assets/images/' . $message['image']) ?>" alt="" style="width: 40px; height: 40px;">
                <div class="w-100 ms-3">
                    <div class="d-flex w-100 justify-content-between">
                        <h6 class="mb-0"><?= $message['author'] ?></h6>
                        <small><?= $message['date_time'] ?></small>
                    </div>
                    <span><?= $message['message'] ?></span>
                </div>
            </div>
        <?php endforeach ; ?>
        
        <?php 
        
        /*
        <div class="d-flex align-items-center border-bottom py-3">
            <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
            <div class="w-100 ms-3">
                <div class="d-flex w-100 justify-content-between">
                    <h6 class="mb-0">Jhon Doe</h6>
                    <small>15 minutes ago</small>
                </div>
                <span>Short message goes here...</span>
            </div>
        </div>
        
        <div class="d-flex align-items-center border-bottom py-3">
            <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
            <div class="w-100 ms-3">
                <div class="d-flex w-100 justify-content-between">
                    <h6 class="mb-0">Jhon Doe</h6>
                    <small>15 minutes ago</small>
                </div>
                <span>Short message goes here...</span>
            </div>
        </div>
        
        <div class="d-flex align-items-center pt-3">
            <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
            <div class="w-100 ms-3">
                <div class="d-flex w-100 justify-content-between">
                    <h6 class="mb-0">Jhon Doe</h6>
                    <small>15 minutes ago</small>
                </div>
                <span>Short message goes here...</span>
            </div>
        </div>
        */

        ?>

    </div>
</div>