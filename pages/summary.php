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
                                            backgroundColor: "rgba(255, 99, 132, 0.6)",
                                            borderColor: "rgba(255, 99, 132)",
                                            borderWidth: 1,
                                            data: [12,13,19,20]
                                        },
                                        {
                                            label: "Realisasi",
                                            backgroundColor: "rgba(153, 102, 255, 0.6)",
                                            borderColor: "rgba(153, 102, 255)",
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
                                            backgroundColor: "rgba(255, 99, 132, 0.6)",
                                            borderColor: "rgba(255, 99, 132)",
                                            borderWidth: 1,
                                            data: [12,13,19,22,20]
                                        },
                                        {
                                            label: "Realisasi",
                                            backgroundColor: "rgba(153, 102, 255, 0.6)",
                                            borderColor: "rgba(153, 102, 255)",
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
                        
                    </div>
                </div>
            </div>
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
                                    <td>Breakdown</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <td>Problem Engineering</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <td>Problem Kelistrikan</td>
                                    <td>20</td>
                                </tr>
                                 <tr>
                                    <td>Move Equipment</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <td>Force Majeur</td>
                                    <td>20</td>
                                </tr>
                                 <tr>
                                    <td>Safety Talk</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <td>Rest and Meal</td>
                                    <td>20</td>
                                </tr>
                                 <tr>
                                    <td>Weather</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <td>Wait Operator</td>
                                    <td>20</td>
                                </tr>
                                <tr>
                                    <td>Slippery</td>
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
    <div class="input_cont">
        <div class="input_form">
            <div class="title_form">
                <h3>Form Input Data</h3>
                <div style="display: flex;">
                    <?php 
                        if(isset($_GET['status'])){
                            if($_GET['status'] =='success'){
                                echo "<script>
                                    const cont= document.querySelector('.input_cont');
                                    cont.style.display='flex';
                                </script>";
                                echo "<p class='green'>Data berhasil disimpan.</p>";
                            } else {
                                echo "<script>
                                    const cont= document.querySelector('.input_cont');
                                    cont.style.display='flex';
                                </script>";
                                echo "<p class='red'>Data gagal disimpan, silahkan periksa kembali data!</p>";
                            }
                        }
                    ?>
                </div>
            </div>
            <div class="content_input">
                <form action="../codes/handleSubmit.php" method="post">
                    <div class="sub_input">
                        <p>Sub 1</p>
                        <div class="flex">
                            <div class="date">
                                <label for="tanggal">Tanggal</label>
                                <input type="date" id="tanggal" name="tanggal">
                            </div>
                            <div class="date">
                                <label for="hari">Hari</label>
                                <input type="text" id="hari" name="hari" disabled style="background: rgba(214, 214, 214, 0.180);">
                            </div>
                        </div>
                    </div>
                    <div class="sub_input ">
                        <p>Sub 2</p>
                        <div class="flex sub2">
                            <div class="supervisor">
                            <label for="supervisor">Supervisor</label>
                                <select value="-- Pilih Shift --" name="supervisor">
                                    <option value="" id="" disabled selected>-- Pilih Supervisor --</option>
                                    <?php 
                                        $sql = mysqli_query($connection, "SELECT * FROM t_pekerja ORDER BY nama ASC");
                                        while($row = mysqli_fetch_array($sql)){
                                        ?>
                                            <option value="<?php echo $row['nama'] ?>" ><?php echo $row['nama']?></option>    
                                        <?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="supervisor">
                                <label for="shift">Shift</label>
                                <select value="-- Pilih Shift --" name="shift">
                                    <option value="" id="" disabled selected>-- Pilih Shift --</option>
                                    <option value="Shift I   ( 06:00:00 - 17:59:59 )">Shift I   ( 06:00:00 - 17:59:59 )</option>
                                    <option value="Shift II   ( 18:00:00 - 05:59:59 )">Shift II   ( 18:00:00 - 05:59:59 )</option>
                                    <option value="Shift I   ( 23:00:00 - 06:59:59 )">Shift I   ( 23:00:00 - 06:59:59 )</option>
                                    <option value="Shift II   ( 07:00:00 - 14:59:59 )">Shift II   ( 07:00:00 - 14:59:59 )</option>
                                    <option value="Shift I   ( 15:00:00 - 22:59:59 )">Shift I   ( 15:00:00 - 22:59:59 )</option>
                                </select>
                            </div>
                            <div class="supervisor">
                                <label for="grup">Grup</label>
                                <select value="-- Pilih Grup --" name="grup">
                                    <option value=""  disabled selected>-- Pilih Grup --</option>
                                    <option value="A" >A</option>
                                    <option value="B" >B</option>
                                    <option value="C" >C</option>
                                    <option value="D" >D</option>
                                </select>
                            </div>
                            <div class="supervisor">
                                <label for="lokasi">Lokasi</label>
                                <select value="-- Pilih Lokasi --" name="lokasi">
                                    <option value=""  disabled selected>-- Pilih Lokasi --</option>
                                    <option value="PIT 2" >PIT 2</option>
                                    <option value="PIT 3 TIMUR" >PIT 3 TIMUR</option>
                                    <option value="Temporary Stock Banko" >Temporary Stock Banko</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="sub_input ">
                        <p>Sub 3</p>
                        <div class="flex sub3">
                            <div class="supervisor">
                                <label for="equipment">Equipment</label>
                                <select value="-- Pilih Equipment --" name="equipment">
                                    <option value="" id="" disabled selected>-- Pilih Equipment --</option>
                                    <?php 
                                        $sql = mysqli_query($connection, "SELECT * FROM t_unit ORDER BY unit_name ASC");
                                        while($row = mysqli_fetch_array($sql)){
                                        ?>
                                            <option value="<?php echo $row['unit_name'] ?>" ><?php echo $row['unit_name']?></option>    
                                        <?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="supervisor">
                                <label for="hm_awal">HM Awal</label>
                                <input class="mini" type="number" id="hm_awal" name="hm_awal" step="any">
                            </div>
                            <div class="supervisor">
                                <label for="hm_akhir">HM Akhir</label>
                                <input class="mini" type="number" id="hm_akhir" name="hm_akhir" step="any">
                            </div>
                            <div class="supervisor">
                                <label for="hm_operasi">HM Operasi</label>
                                <input class="mini" type="number" id="hm_operasi" name="hm_operasi" disabled style="background: rgba(214, 214, 214, 0.180);">
                            </div>
                            <div class="supervisor">
                                <label for="jam_operasi">Jam Operasi</label>
                                <input class="mini" type="number" id="jam_operasi" name="jam_operasi" disabled style="background: rgba(214, 214, 214, 0.180);">
                            </div>
                            <div class="supervisor">
                                <label for="ritase">Ritase</label>
                                <input class="mini" type="number" id="ritase" name="ritase">
                            </div>
                            <div class="supervisor">
                                <label for="jam_penunjang">Jam Penunjang</label>
                                <input class="mini" type="number" id="jam_penunjang" name="jam_penunjang" >
                            </div>
                            <div class="supervisor">
                                <label for="jam_lain">Jam Lain</label>
                                <input class="mini" type="number" id="jam_lain" name="jam_lain" >
                            </div>
                            <div class="supervisor">
                                <label for="breakdown">Breakdown</label>
                                <input class="mini" type="number" id="breakdown" name="breakdown" >
                            </div>
                            <div class="supervisor">
                                <label for="no_operator">Tanpa Operator</label>
                                <input class="mini" type="number" id="no_operator" name="no_operator" >
                            </div>
                            <div class="supervisor">
                                <label for="hujan">Hujan</label>
                                <input class="mini" type="number" id="hujan" name="hujan" >
                            </div>
                            <div class="supervisor">
                                <label for="standby">Standby</label>
                                <input class="mini" type="number" id="standby" name="standby" >
                            </div>
                        </div>
                    </div>
                    <div class="sub_input ">
                        <p>Sub 4</p>
                        <div class="flex sub3">
                            <div class="supervisor">
                                <label for="supervisor">Fuel Truck</label>
                                <select value="-- Pilih Fuel Truck --" name="fuel">
                                    <option value="" id="" disabled selected>-- Pilih FTP --</option>
                                    <option value="FTP 001">FTP 001</option>
                                    <option value="FTP 002">FTP 002</option>
                                </select>
                            </div>
                            <div class="supervisor">
                                <label for="bbm_awal">BBM Awal</label>
                                <input class="mini" type="number" id="bbm_awal" name="bbm_awal">
                            </div>
                            <div class="supervisor">
                                <label for="bbm_akhir">BBM Akhir</label>
                                <input class="mini" type="number" id="bbm_akhir" name="bbm_akhir">
                            </div>
                            <div class="supervisor">
                                <label for="hm_isi">HM Pengisian Fuel</label>
                                <input class="mini" type="number" id="hm_isi" name="hm_isi">
                            </div>
                            <div class="supervisor">
                                <label for="jm_refuel">Total Refuel (Liter)</label>
                                <input class="mini" type="number" id="jm_refuel" name="jm_refuel">
                            </div>
                            <div class="supervisor">
                                <label for="jarak">Jarak Angkut</label>
                                <input class="mini" type="number" id="jarak" name="jarak" >
                            </div>
                        </div>
                    </div>
                    <div class="sub_input ">
                        <p>Sub 5</p>
                        <div class="flex sub3">
                            <div class="supervisor" style="flex: 1">
                                <label for="keterangan">Keterangan</label>
                                <textarea id="keterangan" cols="30" rows="3" name="keterangan"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="submit_data">
                        <input type="submit" value="Submit Data" name="save_data"></input>
                    </div>
                </form>
                <a href="summary.php" name="cancel" class="cancelbtn" onClick="hideForm()">Cancel</a>
            </div>
        </div>
    </div>
</body>
</html>