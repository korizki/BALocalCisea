<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Losstime | Operation Performance</title>
    <link rel="stylesheet" href="../assets/styles/index.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="../assets/logo/icon.svg" />
    <script defer src="../assets/script/script.js"></script>
    <script src="../assets/script/chart.js"></script>
</head>
<body >
    <?php include "../codes/connection.php"; ?>
    <?php 
        if(isset($_GET['startdate'])){
            $start_date = $_GET['startdate'];
        } else {
            $start_date = date('Y-m-d');
        }
        if(isset($_GET['enddate'])){
            $end_date = $_GET['enddate'];
        } else {
            $end_date = date('Y-m-d');
        }
    ?>
    <header class="headlistlosstime">
        <div>
            <h1>Detail of Loss Time</h1>
            <p>This page show all of Loss Time / Problem, please choose Start and End date. </p>
        </div>
        <div>
            <form action="list_Losstime.php" method="get">
                <div class='cont-date choose_date' >
                    <label for="startdate">Tanggal Awal</label>
                    <input type="date" id="startdate" name="startdate" value="<?php echo $start_date ?>">
                    <label for="enddate">Tanggal Akhir</label>
                    <input type="date" id="enddate" name="enddate" value="<?php echo $end_date ?>">
                    <button type="submit" name="submitdateloss"><i class="fa fa-paper-plane" style="margin-inline-end: 8px;"></i>Submit</button>
                </div>
            </form>
        </div>
    </header>
    <main>
        <div class="box-losslist">
            <div class="tablelist" style="height: 550px; overflow: auto; margin-block-start: 40px;">
                <table style="width: 100%; text-align: center; border: 1px solid var(--line);border-collapse: collapse;margin-block-start: 0px; ">
                    <thead style="position: sticky; top:-5px;">
                        <tr style="background: var(--blue);color: white;">
                            <th>No.</th>
                            <th>Tanggal</th>
                            <th>Shovel</th>
                            <th>Waktu Mulai</th>
                            <th>Waktu Selesai</th>
                            <th>Durasi</th>
                            <th>Jenis Halangan</th>
                            <th>Keterangan</th>
                            <th>Kategori</th>
                        </tr>
                    </thead>
                    <tbody >
                        <?php 
                            $no = 1;
                            $start_date = date('Y-m-d');
                            $end_date = date('Y-m-d');
                            if(isset($_GET['submitdateloss'])){
                                $start_date = ($_GET['startdate'] == "") ? date('Y-m-d') : $_GET['startdate'];
                                $end_date = ($_GET['enddate'] == "") ? date('Y-m-d') : $_GET['enddate'];
                            };
                            $querylossall = mysqli_query($connection, "SELECT * FROM t_losstime INNER JOIN t_losscategory ON t_losstime.obstacle = t_losscategory.obstacle WHERE date BETWEEN '$start_date' AND '$end_date' ORDER BY start_time DESC");
                            while($lossrow = mysqli_fetch_array($querylossall)){
                                ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $lossrow['date']?></td>
                                        <td><?php echo $lossrow['unit']?></td>
                                        <td><?php echo $lossrow['start_time']?></td>
                                        <td><?php echo $lossrow['end_time']?></td>
                                        <td><?php echo $lossrow['duration']?></td>
                                        <td><?php echo $lossrow['obstacle']?></td>
                                        <td><?php echo $lossrow['keterangan']?></td>
                                        <td><?php echo $lossrow['category']?></td>
                                    </tr>
                                <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html