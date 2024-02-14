<div class="bg-secondary text-center rounded p-4">
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h6 class="mb-0"><?= $title ?></h6>
        <a href="#">Show All</a>
    </div>
    <canvas id="<?= $uuid ?>" width="437" height="218" style="display: block; box-sizing: border-box; height: 218px; width: 437px;">
    </canvas>
</div>

<script>
    window.addEventListener("DOMContentLoaded", () => {
        var ctx1 = $("#<?= $uuid ?>").get(0).getContext("2d");
        var myChart1 = new Chart(ctx1, {
            type: "bar",
            data: {
                labels: [<?= $years ?>],
                datasets: [{
                    label: "<?= $country ?>",
                    data: [<?= $values ?>],
                    backgroundColor: "<?= $chart_color ?>"
                }]
            },
            options: {
                responsive: true
            }
        });
    });
</script>