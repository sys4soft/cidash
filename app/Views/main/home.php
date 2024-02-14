<?= $this->extend('layouts/layout_main') ?>
<?= $this->section('content') ?>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">


        <div class="col">
            <?= view('partials/resume', ['fa_icon' => 'far fa-chart-bar', 'title' => 'Vendas', 'value' => '$ 1250,00']) ?>
        </div>
        <div class="col">
            <?= view('partials/resume', ['fa_icon' => 'fas fa-handshake', 'title' => 'Negócios fechados', 'value' => '150']) ?>
        </div>
        <div class="col">
            <?= view('partials/resume', ['fa_icon' => 'fas fa-hand-holding-usd', 'title' => 'Total Vendas', 'value' => '$ 5050,00']) ?>
        </div>

    </div>
</div>

<?= $this->endSection() ?>