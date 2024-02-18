<div class="bg-secondary text-center rounded p-4">
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h6 class="mb-0"><?= $title ?></h6>
        <a href="#">Show All</a>
    </div>
    <div class="table-responsive">
        <table class="table text-start align-middle table-bordered table-hover mb-0">
            <thead>
                <tr class="text-white">
                    <?php foreach ($table_header as $header) : ?>
                        <th><?= $header ?></th>
                    <?php endforeach; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($table_rows as $row) : ?>
                    <tr>
                        <?php foreach($row as $cell) : ?>
                            <td><?= $cell ?></td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>