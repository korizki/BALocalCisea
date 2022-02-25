<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data BBM</title>
    <link rel="stylesheet" href="../assets/styles/index.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="../assets/logo/icon.svg" />
    <!-- <script defer src="../assets/script/script.js"></script> -->
</head>
<body>
    <?php include "../codes/connection.php"?>
    <div class="input_cont_bbm">
        <div class="input_form form_bbm">
            <div class="title_form">
                <h3>Form Input Data BBM</h3>
                <div style="display: flex;">
                    <?php 
                        if(isset($_GET['status'])){
                            if($_GET['status'] =='bbmsuccess'){
                                echo "<script>
                                    const cont_bbm = document.querySelector('.input_cont_bbm');
                                </script>";
                                echo "<p class='green'>Data berhasil disimpan.</p>";
                            };
                            if($_GET['status'] =='bbmfailed'){
                                echo "<script>
                                    const cont_bbm = document.querySelector('.input_cont_bbm');
                                </script>";
                                echo "<p class='red'>Data gagal disimpan, silahkan periksa kembali data!</p>";
                            };
                            if($_GET['status'] =='exportallsuccess'){
                                echo "<script>
                                    const cont_bbm = document.querySelector('.input_cont_bbm');
                                </script>";
                                echo "<p class='bluee'>Export file berhasil, file 'export.csv' pada Drive D:/</p>";
                            }
                            if($_GET['status'] =='exportidsuccess'){
                                echo "<script>
                                    const cont_bbm = document.querySelector('.input_cont_bbm');
                                </script>";
                                echo "<p class='bluee'>Export file berhasil, file 'export.csv' pada Drive D:/</p>";
                            }
                        }
                    ?>
                </div>
            </div>
            <?php
                
                $sqlbbm = mysqli_query($connection,"SELECT * from t_bbm ORDER BY no_trx DESC LIMIT 1");
                $row = mysqli_fetch_array($sqlbbm);
                $bbm_userid = $row['user_id'];
                $bbm_petugas = $row['petugas'];
                $bbm_restock = $row['restock'];
                $bbm_flowawal = $row['flow_awal'];
                $bbm_flowakhir = $row['flow_akhir'];
                $bbm_noid = $row['no_id'];
                $bbm_fueltruck = $row['fuel_truck'];
            
            ?>
            <div class="content_input">
                <form action="../codes/handleSubmit.php" method="post">
                    <div class="sub_input" style="margin-block-end: 20px">
                        <p>Sub 1</p>
                        <div class="flex" style="flex-wrap: wrap; align-items: center">
                            <div class="date">
                                <label for="bbm_userid">User ID</label>
                                <input type="text" id="bbm_userid" name="bbm_userid" value="<?php echo $bbm_userid?>">
                            </div>
                            <div class="date">
                                <label for="bbm_petugas">Petugas</label>
                                <input type="text" id="bbm_petugas" name="bbm_petugas" value="<?php echo $bbm_petugas?>">
                            </div>
                            <div class="date">
                                <label for="bbm_restock">Restock</label>
                                <input class="mini" type="number" id="bbm_restock" name="bbm_restock" value="<?php echo $bbm_restock?>">
                            </div>
                            <div class="date">
                                <label for="bbm_floawal">Flow Awal</label>
                                <input class="mini" type="number" id="bbm_flowawal" name="bbm_flowawal" value="<?php echo $bbm_flowawal?>">
                            </div>
                            <div class="date">
                                <label for="bbm_flowakhir">Flow Akhir</label>
                                <input class="mini" type="number" id="bbm_flowakhir" name="bbm_flowakhir" value="<?php echo $bbm_flowakhir?>">
                            </div>
                            <div class="date">
                                <label for="bbm_noid">No. ID</label>
                                <input type="text" id="bbm_noid" name="bbm_noid" class="mini" value="<?php echo $bbm_noid?>">
                            </div>
                            <div class="date">
                                <label for="bbm_fueltruck">Fuel Truck</label>
                                <select name="bbm_fueltruck" id="bbm_fueltruck">
                                    <option value="" disabled selected >-- Pilih Fuel Truck--</option>
                                    <option value="FTP 01" <?php echo ($bbm_fueltruck == "FTP 01") ? "selected" : ""?>>FTP 01</option>
                                    <option value="FTP 02" <?php echo ($bbm_fueltruck == "FTP 02") ? "selected" : "" ?>>FTP 02</option>
                                    <option value="FT 01" <?php ($bbm_fueltruck == "FT 01") ? "selected" : "" ?>>FT 01</option>
                                    <option value="FT 02" <?php echo ($bbm_fueltruck == "FT 02") ? "selected" : ""?>>FT 02</option>
                                </select>
                            </div>
                            <div class="supervisor">
                                <label for="bbm_equipment">Equipment</label>
                                <select value="-- Pilih Equipment --" name="bbm_equipment">
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
                            <div style="margin-left: 30px !important; color: var(--blue);">
                                <h4 id="textID">User ID : <?php echo $bbm_userid?></h4>
                            </div>
                            <div>
                                <a href="../codes/export.php" class="exportbtn" name="exportFile"> <i class="fa fa-file-export" style="margin-inline-end: 8px"></i>Export to CSV</a>
                            </div>
                        </div>
                    </div>
                    <div class="sub_input " style="margin-block-end: 20px">
                        <p>Sub 2</p>
                        <div class="flex sub2 prob_group" style="justify-content: flex-start !important">
                            
                            <div class="supervisor">
                                <label for="bbm_material">Material</label>
                                <input type="text" step="any" id="bbm_material" name="bbm_material">
                            </div>
                            <div class="supervisor">
                                <label for="bbm_quantity">Quantity</label>
                                <input type="number" step="any" id="bbm_quantity" name="bbm_quantity" class="mini">
                            </div>
                            <div class="supervisor">
                                <label for="bbm_mread">Meter Read</label>
                                <input type="number" step="any" id="bbm_mread" name="bbm_mread" class="mini">
                            </div>
                            <div class="supervisor">
                                <label for="bbm_type">Type </label>
                                <input type="text" step="any" id="bbm_type" name="bbm_type" >
                            </div>
                            <div class="supervisor">
                                <label for="bbm_hmawal">HM Awal</label>
                                <input type="number" step="any" id="bbm_hmawal" name="bbm_hmawal" class="mini">
                            </div>
                            <div class="supervisor">
                                <label for="bbm_hmakhir">HM Akhir</label>
                                <input type="number" step="any" id="bbm_hmakhir" name="bbm_hmakhir" class="mini">
                            </div>  
                        </div>
                    </div>
                    <div class="submit_data" >
                        <input type="submit" value="Submit Data" name="save_data_bbm" ></input>
                    </div>
                </form>
                <a href="../index.php" name="cancel" class="cancelbtn"  >Cancel / Back to Home Page</a>
            </div>
            <div class='t_bbm'>
                <h3 style="margin-block-start: -20px; margin-block-end: 5px;"><i class="fa fa-list" style="margin-inline-end: 12px"></i>List Of Transaction</h3>
                <div>
                    <table>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>User ID</th>
                                <th>Equipment</th>
                                <th>Material</th>
                                <th>Quantity</th>
                                <th>Meter Read</th>
                                <th>HM Awal</th>
                                <th>HM Akhir</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $no = 1;
                                $sqltable = mysqli_query($connection, "SELECT * FROM t_bbm WHERE user_id = '$bbm_userid'");
                                while($row_bbm = mysqli_fetch_array($sqltable)){
                                    ?>
                                    <tr>
                                        <td><?php echo $no++?></td>
                                        <td><?php echo $row_bbm['user_id']?></td>
                                        <td><?php echo $row_bbm['equipment']?></td>
                                        <td><?php echo $row_bbm['material']?></td>
                                        <td><?php echo $row_bbm['quantity']?></td>
                                        <td><?php echo $row_bbm['meter_read']?></td>
                                        <td><?php echo $row_bbm['hm_awal']?></td>
                                        <td><?php echo $row_bbm['hm_akhir']?></td>
                                    </tr>
                                    <?php
                                } 
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        const input_id = document.getElementById("bbm_userid");
        input_id.addEventListener('input', function(e){
            const heading = document.getElementById("textID");
            heading.innerHTML = e.target.value;
        })
    </script>
</body>
</html>