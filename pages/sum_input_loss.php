<div class="input_cont_prob">
    <div class="input_form form_problem">
        <div class="illustrationrep">
            <figure>
                <img src="assets/illus/5.svg" alt="illus">
            </figure>
            <div>
                <h3>Preview or Download All Data </h3>
                <p>Anda bisa melihat semua data input loss time dan mendownload data dalam format .csv </p>
                <p><a href="#"><i class="fa fa-search" style="margin-inline-end: 8px"></i>Preview Data</a><a href="#"><i class="fa fa-download" style="margin-inline-end: 8px"></i>Download .csv</a></p>
                <a class="attribute" href="https://storyset.com/business">Business illustrations by Storyset</a>
            </div>
        </div>
        <div class="title_form">
            <h3 style="margin-top: 20px;">Form Input Data Loss Time</h3>
            <div style="display: flex;">
                <?php 
                    if(isset($_GET['status'])){
                        if($_GET['status'] =='problemsuccess'){
                            echo "<script>
                                const cont_prob = document.querySelector('.input_cont_prob');
                                cont_prob.style.display='flex';
                            </script>";
                            echo "<p class='green'>Data berhasil disimpan.</p>";
                        };
                        if($_GET['status'] =='problemfailed'){
                            echo "<script>
                                const cont_prob = document.querySelector('.input_cont_prob');
                                cont_prob.style.display='flex';
                            </script>";
                            echo "<p class='red'>Data gagal disimpan, silahkan periksa kembali data!</p>";
                        }
                    }
                ?>
            </div>
        </div>
        <div class="content_input">
            <form action="codes/handleSubmit.php" method="get">
                <div class="sub_input" style="margin-block-end: 20px">
                    <p>Sub 1</p>
                    <div class="flex">
                        <div class="date">
                            <label for="tanggal_prob">Tanggal</label>
                            <input type="date" id="tanggal_prob" name="tanggal_prob" class="indisable" required disabled>
                            <span style="margin-inline-start: 10px; color: red;" >* Terisi Otomatis</span>
                        </div>
                    </div>
                </div>
                <div class="sub_input " style="margin-block-end: 20px">
                    <p>Sub 2</p>
                    <div class="flex sub2 prob_group">
                        <div class="supervisor">
                            <label for="unitse">Unit</label>
                            <select name="unitse" id="unitse" required>
                                <option required value="" selected disabled >-- Pilih Shovel --</option>
                                <?php
                                    include "../codes/connection.php";
                                    $queryshovel = mysqli_query($connection, "SELECT * FROM t_unit WHERE unit_type = 'SHOVEL PC-3000' ORDER BY id ASC");
                                    $no = 1;
                                    while($rowshovel = mysqli_fetch_array($queryshovel)){
                                        
                                        ?>
                                        <option value="<?php echo $rowshovel['unit_name']?>"><?php echo $no++ ?> - <?php echo $rowshovel['unit_name']?></option>
                                        <?php
                                    } 
                                ?>
                            </select>
                        </div>
                        <div class="supervisor">
                            <label for="start_time">Waktu Mulai</label>
                            <input type="datetime-local" id="start_time" name="start_time" required>
                        </div>
                        <div class="supervisor">
                            <label for="end_time">Waktu Akhir</label>
                            <input type="datetime-local" id="end_time" name="end_time" required>
                        </div>
                        <div class="supervisor">
                            <label for="durasi">Durasi Problem</label>
                            <input type="number" step="any" id="durasi" name="durasi" class="mini" disabled required>
                        </div>
                        <div class="supervisor">
                            <select name="jenis_prob" id="jenis_prob" required>
                                <option value="" selected disabled>-- Jenis Problem --</option>
                                <?php
                                    include "../codes/connection.php";
                                    $queryprob = mysqli_query($connection, "SELECT * FROM t_losscategory ORDER BY id_cat ASC");
                                    while($rowprob = mysqli_fetch_array($queryprob)){
                                        ?>
                                        <option value="<?php echo $rowprob['obstacle']?>"><?php echo $rowprob['obstacle']?></option>
                                        <?php
                                    } 
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="submit_data">
                    <input type="submit" value="Submit Data" name="save_data_prob"></input>
                </div>
            </form>
            <a href="#" name="cancel" class="cancelbtn" onClick="hideFormProb()">Cancel</a>
        </div>
        
    </div>
</div>
<script>
    const starttime = document.getElementById('start_time');
    starttime.addEventListener('input', function(e){
        const inputdate = document.getElementById('tanggal_prob');
        dates = new Date(e.target.value);
        
        hour_value = dates.getHours();
        if (hour_value < 6){
            // merubah format date jadi number
            xx = dates.setDate(dates.getDate() - 1);
            // dikurangi 86400 milisecoond atau 1 hari
            xy = xx - 86400;
            // ubah format number ke date
            xz = new Date(xy);
            // ubah format date complete jadi date saja
            xb = xz.toLocaleDateString("sv-SE");
            inputdate.value = xb;     
        } else {
            dateb = dates.toLocaleDateString("sv-SE");
            inputdate.value = dateb;
        }
        var start_time = document.getElementById('start_time');
        var end_time = document.getElementById('end_time');
        const hitung = function(){
            date1 = new Date(start_time.value);
            date2 = new Date(end_time.value);
            const hour = ((date2 - date1) / (1000*60*60)).toFixed(2);
            // const hour = Math.floor((date2-date1) / );
            const durasi = document.getElementById('durasi');
            durasi.value = hour;
        }
        end_time.addEventListener('input', hitung);

    })
</script>