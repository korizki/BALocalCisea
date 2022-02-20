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
                            <textarea id="keterangan" cols="30" rows="2" name="keterangan" spellcheck="false"></textarea>
                        </div>
                    </div>
                </div>
                <div class="submit_data">
                    <input type="submit" value="Submit Data" name="save_data"></input>
                </div>
            </form>
            <a href="#" name="cancel" class="cancelbtn" onClick="hideForm()">Cancel</a>
        </div>
    </div>
</div>