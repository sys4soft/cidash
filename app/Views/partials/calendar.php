<div class="col-sm-12 col-md-6 col-xl-4">
    <div class="h-100 bg-secondary rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4">
            <h6 class="mb-0">Calender</h6>
            <a href="">Show All</a>
        </div>
        <div>
            <input type="text" id="calendar" class="d-none">
        </div>
    </div>
</div>

<script>
    window.addEventListener("DOMContentLoaded", () => {
        $("#calendar").flatpickr({
            inline: true
        });
    });
</script>