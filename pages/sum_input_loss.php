<div class="input_cont_prob">
    <div class="input_form form_problem">
        <div class="title_form">
            <h3>Form Input Data Loss Time</h3>
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
            <form action="codes/handleSubmit.php" method="post">
                <div class="sub_input" style="margin-block-end: 20px">
                    <p>Sub 1</p>
                    <div class="flex">
                        <div class="date">
                            <label for="tanggal_prob">Tanggal</label>
                            <input type="date" id="tanggal_prob" name="tanggal_prob">
                        </div>
                    </div>
                </div>
                <div class="sub_input " style="margin-block-end: 20px">
                    <p>Sub 2</p>
                    <div class="flex sub2 prob_group">
                        <div class="supervisor">
                        <label for="bd_prob">Breakdown</label>
                            <input type="number" step="any" id="bd_prob" name="bd_prob">
                        </div>
                        <div class="supervisor">
                            <label for="engine">Problem Engineering</label>
                            <input type="number" step="any" id="engine" name="engine_prob">
                        </div>
                        <div class="supervisor">
                            <label for="listrik_prob">Problem Kelistrikan</label>
                            <input type="number" step="any" id="listrik_prob" name="listrik_prob">
                        </div>
                        <div class="supervisor">
                            <label for="move_prob">Move Equipment</label>
                            <input type="number" step="any" id="move_prob" name="move_prob">
                        </div>
                        <div class="supervisor">
                            <label for="force_prob">Force Majeur</label>
                            <input type="number" step="any" id="force_prob" name="force_prob">
                        </div>
                        <div class="supervisor">
                            <label for="safety_prob">Safety Talk</label>
                            <input type="number" step="any" id="safety_prob" name="safety_prob">
                        </div>
                        <div class="supervisor">
                            <label for="rest_prob">Rest and Meal</label>
                            <input type="number" step="any" id="rest_prob" name="rest_prob">
                        </div>
                        <div class="supervisor">
                            <label for="weather_prob">Weather</label>
                            <input type="number" step="any" id="weather_prob" name="weather_prob">
                        </div>
                        <div class="supervisor">
                            <label for="wait_prob">Wait Operator</label>
                            <input type="number" step="any" id="wait_prob" name="wait_prob">
                        </div>
                        <div class="supervisor">
                            <label for="slippery_prob">Slippery</label>
                            <input type="number" step="any" id="slippery_prob" name="slippery_prob">
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