<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <h1>Dashboard</h1>
    <canvas id="linksChart" width="400" height="200"></canvas>
    <script>
        const ctx = document.getElementById('linksChart').getContext('2d');
        const data = <?= json_encode($data) ?>;

        const labels = data.map(item => item.created_date);
        const values = data.map(item => item.total);

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Links Created Per Day',
                    data: values,
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderWidth: 2,
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                scales: {
                    x: { title: { display: true, text: 'Date' } },
                    y: { beginAtZero: true, title: { display: true, text: 'Links Created' } }
                }
            }
        });
    </script>
</body>
</html>
