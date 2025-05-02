<h2>10 Obat Medis Terbanyak</h2>
<canvas id="chartTindakan"></canvas>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('chartTindakan').getContext('2d');
    const chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode(array_column($data, 'nama')); ?>,
            datasets: [{
                label: 'Jumlah Diberikan',
                data: <?php echo json_encode(array_column($data, 'jumlah')); ?>,
                backgroundColor: 'rgba(153, 102, 255, 0.6)'
            }]
        }
    });
</script>