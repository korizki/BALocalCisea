<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Summary | Operation Performance</title>
    <link rel="stylesheet" href="../assets/styles/index.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="../assets/logo/icon.svg" />
    <script defer src="../assets/script/script.js"></script>
    <script src="../assets/script/chart.js"></script>
</head>
<body id="summary">
    <?php include "../codes/connection.php" ?>
    <header>
        <h2>Operation Performance Evaluation</h2>
        <h3>Penambangan Swakelola</h3>
    </header>
    <main>
        <div class="box-date">
            <div class='cont-date'>
                <label for="startdate">Tanggal Awal</label>
                <input type="date" id="startdate" name="startdate">
                <label for="enddate">Tanggal Akhir</label>
                <input type="date" id="enddate" name="enddate">
                <button type="submit" name="submitdate"><i class="fa fa-paper-plane" style="margin-inline-end: 8px;"></i>Submit</button>
            </div>
        </div>
        <div class="subContent">
            <div class="header_menu">
                <h3>Produksi Swakelola</h3>
                <a href="#" class="btn-add" onClick="showForm()"><i class="fa fa-plus" style="margin-inline-end: 8px;"></i>Tambah Data</a>
            </div>
            <div class="contentBox">
                <div class="content">
                    <h4><i class="fa fa-map-marker-alt" style="margin-inline-end: 13px"></i>Swakelola 2 | Coal</h4>
                    <div class="t_content">
                        <table>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>PIT 2</th>
                                    <th>PIT 2 BKPL</th>
                                    <th>PIT 3 BKPL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><i class="fa fa-cogs" style="margin-inline-end: 10px"></i>EWH (Jam)</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-wrench" style="margin-inline-end: 10px"></i>Runn. Fleet</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-chart-pie" style="margin-inline-end: 10px"></i>PDTY</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="content">
                    <h4><i class="fa fa-map-marker-alt" style="margin-inline-end: 13px"></i>Swakelola 2 | Overbudden</h4>
                    <div class="t_content">
                        <table>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>PIT 2 BKPL</th>
                                    <th>PIT 3 BKPL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><i class="fa fa-cogs" style="margin-inline-end: 10px"></i>EWH (Jam)</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-wrench" style="margin-inline-end: 10px"></i>Runn. Fleet</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-chart-pie" style="margin-inline-end: 10px"></i>PDTY (BCM/Jam)</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="content">
                    <h4><i class="fa fa-map-marker-alt" style="margin-inline-end: 10px"></i>Swakelola 1</h4>
                    <div class="t_content">
                        <table>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>PIT 2 Banko</th>
                                    <th>PIT 3 Banko</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><i class="fa fa-cogs" style="margin-inline-end: 10px"></i>EWH (Jam)</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-wrench" style="margin-inline-end: 10px"></i>Runn. Fleet</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-chart-pie" style="margin-inline-end: 10px"></i>PDTY (BCM/Jam)</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Content Graph -->
            <?php include "sum_graph.php"?>
            <!-- Content Loss Time -->
            <div class="header_menu" style="display: block">
                <h3>Loss Time Swakelola</h3>
            </div>
            <div class="loss_cont">
                <div class="loss_graph">
                    <canvas id="myChart_2" style="width: 100% !important"></canvas>
                    <script>
                        const labels3 = [
                            'Breakdown',
                            'Problem Engineering',
                            'Problem Kelistrikan',
                            'Move Equipment',
                            'Force Majeur',
                            'Safety Talk',
                            'Rest and Meal',
                            'Weather',
                            'Wait Operator',
                            'Slippery',
                        ];

                        const data3 = {
                            labels: labels3,
                            datasets: [
                                {
                                    label: "Loss Time",
                                    backgroundColor: [
                                    "rgba(252, 79, 79, 0.6)",
                                    "rgba(255, 211, 45, 0.6)",
                                    "rgba(84, 186, 185, 0.6)",
                                    "rgba(49, 53, 82, 0.6)",
                                    "rgba(247, 110, 17, 0.6)",
                                    "rgba(46, 176, 134, 0.6)",
                                    "rgba(156, 15, 72, 0.6)",
                                    "rgba(154, 208, 236, 0.6)",
                                    "rgba(137, 70, 166, 0.6)",
                                    "rgba(206, 123, 176, 0.6)"
                                    ],    
                                    borderColor: [
                                    "rgba(252, 79, 79)",
                                    "rgba(255, 211, 45)",
                                    "rgba(84, 186, 185)",
                                    "rgba(49, 53, 82)",
                                    "rgba(247, 110, 17)",
                                    "rgba(46, 176, 134)",
                                    "rgba(156, 15, 72)",
                                    "rgba(154, 208, 236)",
                                    "rgb(137, 70, 166)",
                                    "rgba(206, 123, 176)"
                                    ],
                                    borderWidth: 1,
                                    data: [12,13,19,22,20, 12, 23, 11, 22]
                                },
                            ]
                        };

                        const config3 = {
                            type: 'pie',
                            data: data3,
                            options: {
                                scales: {
                                    y: {
                                        beginAtZero: true
                                    }
                                },
                                plugins: {
                                    legend: {
                                        labels: {
                                            padding: 15,   
                                        },
                                    }
                                }
                            }
                        };
                        const myChart3 = new Chart(
                            document.getElementById('myChart_2'),
                            config3
                        );
                    </script>
                </div>
                <div class="loss_detail">
                    <article>
                        <table>
                            <thead>
                                <tr>
                                    <th>Kategori</th>
                                    <th>Total Jam</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><i class="fa fa-times-circle" style="margin-inline-end: 10px"></i>Breakdown</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-exclamation-triangle" style="margin-inline-end: 10px"></i>Problem Engineering</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-bolt" style="margin-inline-end: 10px"></i>Problem Kelistrikan</td>
                                    <td>20</td>
                                </tr>
                                 <tr>
                                    <td><i class="fa fa-arrows-alt" style="margin-inline-end: 10px"></i>Move Equipment</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-dumpster-fire" style="margin-inline-end: 10px"></i>Force Majeur</td>
                                    <td>20</td>
                                </tr>
                                 <tr>
                                    <td><i class="fa fa-hard-hat" style="margin-inline-end: 10px"></i>Safety Talk</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-utensils" style="margin-inline-end: 10px"></i>Rest and Meal</td>
                                    <td>20</td>
                                </tr>
                                 <tr>
                                    <td><i class="fa fa-cloud-rain" style="margin-inline-end: 10px"></i>Weather</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-pause-circle" style="margin-inline-end: 10px"></i>Wait Operator</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-snowflake" style="margin-inline-end: 10px"></i>Slippery</td>
                                    <td>20</td>
                                </tr>
                            </tbody>
                        </table>
                    </article>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="footer_cont">
            <p>&copy; Copyright PT. Bukit Asam (Persero) Tbk. 2022</p>
        </div>
    </footer>
    <!-- Form Input Data -->
    <?php include "sum_input.php"?>
</body>
</html>