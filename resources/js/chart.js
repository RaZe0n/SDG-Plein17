import Chart from "chart.js/auto";

// Donut chart voor sectoren
const ctx = document.getElementById('donutChart').getContext('2d');

fetch('/api/chart/sector').then(response => response.json()).then(data => {
    const labels = data.map(item => item.sector);
    const chartData = data.map(item => item.total);

    const backgroundColors = [
        'rgba(54, 162, 235, 0.7)',
        'rgba(255, 99, 132, 0.7)',
        'rgba(255, 206, 86, 0.7)',
        'rgba(75, 192, 192, 0.7)',
        'rgba(153, 102, 255, 0.7)',
        'rgba(255, 159, 64, 0.7)',
        'rgba(201, 203, 207, 0.7)',
        'rgba(255, 99, 71, 0.7)',
        'rgba(144, 238, 144, 0.7)',
        'rgba(173, 216, 230, 0.7)',
    ];

    const borderColors = [
        'rgba(54, 162, 235, 1)',
        'rgba(255, 99, 132, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)',
        'rgba(201, 203, 207, 1)',
        'rgba(255, 99, 71, 1)',
        'rgba(144, 238, 144, 1)',
        'rgba(173, 216, 230, 1)',
    ];

    new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: labels,
            datasets: [{
                label: 'Gebruikers per sector',
                data: chartData,
                backgroundColor: backgroundColors,
                borderColor: borderColors,
                borderWidth: 1,
            }],
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'bottom',
                },
                tooltip: {
                    enabled: true,
                }
            },
        },
    });
});

const ctxPredicaatAanvragen = document
    .getElementById("predicaatAanvragenChart")
    .getContext("2d");

fetch("/api/chart/aanvragen")
    .then((response) => response.json())
    .then((data) => {
        const monthNames = [
            "Januari", "Februari", "Maart", "April", "Mei", "Juni",
            "Juli", "Augustus", "September", "Oktober", "November", "December"
        ];
        const labels = data.map(item => monthNames[item.month - 1]);
        const chartData = data.map(item => item.total);

        new Chart(ctxPredicaatAanvragen, {
            type: "line",
            data: {
                labels: labels,
                datasets: [{
                    label: 'Aanvragen per maand',
                    data: chartData,
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderWidth: 1,
                }],
            },
            options: {
                responsive: true,
                plugins: {
                    title: {
                        display: false,
                        text: "Chart.js Line Chart - Logarithmic",
                    },
                },
                scales: {
                    x: {
                        display: true,
                    },
                    y: {
                        display: true,
                        type: "logarithmic",
                    },
                },
            },
        });
    });