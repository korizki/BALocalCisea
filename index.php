<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bukit Asam - Operation Performance</title>
    <link rel="stylesheet" href="assets/styles/index.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="assets/logo/icon.svg" />
    <script defer src="assets/script/script.js"></script>
</head>
<body id="mainPage" height="1000px">
    <?php include "codes/connection.php"?>
    <nav>
        <div class="brand">
            <figure>
                <a href="index.php">
                    <img src="assets/logo/logoptba.png" alt="logoptba">
                </a>
            </figure>
        </div>
    </nav>
    <main>
        <div class="flex container" >
            <a href="#" onClick="showForm()" id="box1">
                <div class="boxContainer" >
                    <h4><i class="fa fa-plus" style="margin-right: 10px"></i>Tambah Data Produksi</h4>
                    <figure>
                        <img src="assets/illus/1.svg" alt="illustration">
                    </figure>
                </div>
            </a>
            <a href="#" onClick="showFormProb()" id="box2">
                <div class="boxContainer" >
                    <h4><i class="fa fa-plus" style="margin-right: 10px"></i>Tambah Data Problem</h4>
                    <figure>
                        <img src="assets/illus/2.svg" alt="illustration">
                    </figure>
                </div>
            </a>
            <a href="pages/summary.php" target="_blank" id="box3" >
                <div class="boxContainer" >
                    <h4><i class="fa fa-chart-bar" style="margin-right: 10px"></i>Report Produksi</h4>
                    <figure>
                        <img src="assets/illus/3.svg" alt="illustration">
                    </figure>
                </div>
            </a>
        </div>
    </main>
     <!-- Form Input Data -->
    <?php include "pages/sum_input.php"?>
    <!-- Form Input Problem / Loss Time -->
    <?php include "pages/sum_input_loss.php" ?>
    <footer style="margin-top: 140px">
        <div class="footer_cont" >
            <p> Copyright &copy; 2022 PT. Bukit Asam (Persero) Tbk. </p>
        </div>
    </footer>
</body>
</html>