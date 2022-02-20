
<div class='cont_graph'>
    <div class="contentboxgraph">
        <h4><i class="fa fa-gem" style="margin-inline-end: 10px"></i>Produksi Batubara Periode</h4>
        <div class="graphbox">
            <div>
                <canvas id="myChart"></canvas>
                <script>
                    const labels2 = [
                        'PIT 2 Coal Swakelola',
                        'PIT 2 Coal BKPL',
                        'PIT 3 Coal BKPL',
                        'PSW'
                    ];
                    const data2 = {
                        labels: labels2,
                        datasets: [
                            {
                                label: "Rakor",
                                backgroundColor: "rgba(255, 36, 36, 0.5)",
                                borderColor: "rgba(255, 36, 36)",
                                borderWidth: 1,
                                data: [12,13,19,20]
                            },
                            {
                                label: "Realisasi",
                                backgroundColor: "rgba(36, 255, 47, 0.5)",
                                borderColor: "rgba(36, 255, 47)",
                                borderWidth: 1,
                                data: [8,10,21,23]
                            }
                        ]
                    };
                    const config2 = {
                        type: 'bar',
                        data: data2,
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    };
                    const myChart2 = new Chart(
                        document.getElementById('myChart'),
                        config2
                    );
                </script>
            </div>
        </div>
        <div class="tgraph">
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>PIT 2 SWK</th>
                        <th>PIT 2 BKPL</th>
                        <th>PIT 3 BKPL</th>
                        <th>PSW</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Rakor</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Real</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="contentboxgraph">
        <h4><i class="fa fa-globe-asia" style="margin-inline-end: 10px"></i>Produksi Tanah Periode</h4>
        <div class="graphbox">
            <div>
                <canvas id="myChart_1" style="width: 100% !important"></canvas>
                <script>
                    const labels = [
                        'PIT 2 OB Swakelola',
                        'PIT 2 OB BKPL',
                        'PIT 3 OB Swakelola',
                        'PIT 3 OB BKPL',
                        'PSW'
                    ];

                    const data = {
                        labels: labels,
                        datasets: [
                            {
                                label: "Rakor",
                                backgroundColor: "rgba(255, 36, 36, 0.5)",
                                borderColor: "rgba(255, 36, 36)",
                                borderWidth: 1,
                                data: [12,13,19,22,20]
                            },
                            {
                                label: "Realisasi",
                                backgroundColor: "rgba(36, 255, 47, 0.5)",
                                borderColor: "rgba(36, 255, 47)",
                                borderWidth: 1,
                                data: [8,10,10,21,23]
                            }
                        ]
                    };

                    const config = {
                        type: 'bar',
                        data: data,
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    };
                    const myChart = new Chart(
                        document.getElementById('myChart_1'),
                        config
                    );
                </script>
            </div>
        </div>
        <div class="tgraph">
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>PIT 2 SWK</th>
                        <th>PIT 2 BKPL</th>
                        <th>PIT 3 SWK</th>
                        <th>PIT 3 BKPL</th>
                        <th>PSW</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Rakor</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Real</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>