<h2>Jumlah Kunjungan Pasien per Bulan</h2>
<canvas id="chartKunjungan"></canvas>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('chartKunjungan').getContext('2d');
    const chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: <?php echo json_encode(array_column($data, 'bulan')); ?>,
            datasets: [{
                label: 'Jumlah Kunjungan',
                data: <?php echo json_encode(array_column($data, 'jumlah')); ?>,
                backgroundColor: 'rgba(75, 192, 192, 0.6)'
            }]
        }
    });
</script>