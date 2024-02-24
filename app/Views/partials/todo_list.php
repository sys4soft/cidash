<div class="col-sm-12 col-md-6 col-xl-4">
    <div class="h-100 bg-secondary rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0"><?= $title ?></h6>
            <a href="#">Show All</a>
        </div>

        <?= form_open('todo_submit') ?>
            <div class="d-flex mb-2">
                <input class="form-control bg-dark border-0" type="text" placeholder="Enter task">
                <button type="submit" class="btn btn-primary ms-2">Adicionar</button>
            </div>
        <?= form_close() ?>

        <?php foreach($todo_list as $item) : ?>
            <div class="d-flex align-items-center border-bottom py-2">
                <input class="form-check-input m-0" type="checkbox">
                <div class="w-100 ms-3">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                        <span><?= $item ?></span>
                        <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                    </div>
                </div>
            </div>
        <?php endforeach ; ?>

    </div>
</div>