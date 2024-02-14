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
    <div class="row pt-4 g-4">
        <div class="col">
            <?= view('partials/bar_chart', 
                [
                    'title' => 'Gráfico 1', 
                    'uuid' => uniqid(), 
                    'country' => 'USA', 
                    'values' => '80,90,100,110,120', 
                    'chart_color' => 'rgba(22, 235, 22)',
                    'years' => "'aaa', '2021', '2022', '2023', '2024'"
                ]) 
            ?>
        </div>
        <div class="col">
        <?= view('partials/bar_chart', 
                [
                    'title' => 'Gráfico 2', 
                    'uuid' => uniqid(), 
                    'country' => 'Brasil', 
                    'values' => '1500,1600,1800,1900,1100,1110,1120', 
                    'chart_color' => 'rgba(235, 22, 22)',
                    'years' => "'2018', '2019', '2020', '2021', '2022', '2023', '2024'"
                ]) 
            ?>
        </div>
    </div>
</div>

<?= $this->endSection() ?>