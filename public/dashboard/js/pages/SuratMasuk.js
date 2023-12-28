// // Define Chart Agama Start
// const suratMasuk = document.getElementById("chart-suratMasuk");
// const suratMasuk_bar = document.getElementById("chart-suratMasuk-bar");
// // Define Chart Agama Start

// new Chart(suratMasuk, {
//     type: "pie",
//     data: {
//         labels: ["Perizinan", "Penyelenggaraan"],
//         datasets: [
//             {
//                 data: [
//                     12, 19, 3, 5, 2, 3
//                 ],
//                 borderWidth: 1,
//             },
//         ],
//     },
//     options: {
//         scales: {
//             y: {
//                 beginAtZero: true,
//             },
//         },
//         plugins: {
//             title: {
//                 display: true,
//                 text: "Grafik Data Laporan Surat Masuk",
//             },
//         },
//     },
// });
// // Chart Surat Masuk Pie End
// SuratMasuk.js

import Chart from 'chart.js/auto';

const labels = ["Januari", "Februari", "Maret", "April", "Mei", "Juni"];
const dataValues = [100, 200, 300, 400, 500, 600];

export function createChart(ctx, data) {
    return new Chart(ctx, {
        type: "pie",
        data: data
    });
}

const ctx = document.getElementById("myCanvas").getContext("2d");

const data = {
    labels: labels,
    datasets: [{
        data: dataValues,
        backgroundColor: [
            'red',
            'orange',
            'yellow',
            'green',
            'blue',
            'purple',
        ],
    }],
};

createChart(ctx, data);
