<div class="bg-secondary text-center rounded p-4">
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h6 class="mb-0"><?= $title ?></h6>
        <a href="#">Show All</a>
    </div>
    <canvas id="<?= $uuid ?>" width="476" height="238" style="display: block; box-sizing: border-box; height: 238px; width: 476px;"></canvas>
</div>

<script>
    window.addEventListener("DOMContentLoaded", () => {
        var ctx_area = $("#<?= $uuid ?>").get(0).getContext("2d");
        var myChart2 = new Chart(ctx_area, {
            type: "line",
            data: {
                labels: [<?= $years ?>],
                datasets: [{
                    label: "<?= $country ?>",
                    data: [<?= $values ?>],
                    backgroundColor: "<?= $chart_color ?>",
                    fill: true
                }]
            },
            options: {
                responsive: true
            }
        });
    });
</script>