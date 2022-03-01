<?php
  include "connection.php";

  $tanggal = ''; $hari =''; $supervisor = ''; $shift =''; $grup = ''; $lokasi =''; $equipment = ''; $ritase ='';$hmawal = '';$hmakhir ='';$hmoperasi = '';$jamoperasi = '';$jampenunjang = '';$jamlain = '';$breakdown = '';$nooperator ='';$hujan ='';$standby = '';$fuel ='';$bbmawal ='';$bbmakhir = '';$hmisi ='';$jmrefuel = '';$jarak ='';$keterangan = '';
            
  // Handle Submit Data Form Input
  if(isset($_POST['save_data'])){
      // mendapatkan nilai dari setiap element input
      $tanggal = $_POST['tanggal'];
      $day = date('D', strtotime($tanggal));
      $dayList = array(
          'Sun' => 'Minggu',
          'Mon' => 'Senin',
          'Tue' => 'Selasa',
          'Wed' => 'Rabu',
          'Thu' => 'Kamis',
          'Fri' => 'Jumat',
          'Sat' => 'Sabtu'
      );
      $hari = $dayList[$day];
      $supervisor = $_POST['supervisor'];
      $shift = $_POST['shift'];
      $grup = $_POST['grup'];
      $lokasi = $_POST['lokasi'];
      $equipment = $_POST['equipment'];
      $ritase = $_POST['ritase'];
      $hmawal = $_POST['hm_awal'];
      $hmakhir = $_POST['hm_akhir'];
      $hmoperasi = number_format($hmakhir - $hmawal, 1);
      $jamoperasi = number_format($hmakhir - $hmawal, 1);
      $jampenunjang = $_POST['jam_penunjang'];
      $jamlain = $_POST['jam_lain'];
      $breakdown = $_POST['breakdown'];
      $nooperator = $_POST['no_operator'];
      $hujan = $_POST['hujan'];
      $standby = $_POST['standby'];
      $fuel = $_POST['fuel'];
      $bbmawal = $_POST['bbm_awal'];
      $bbmakhir = $_POST['bbm_akhir'];
      $hmisi = $_POST['hm_isi'];
      $jmrefuel = $_POST['jm_refuel'];
      $jarak = $_POST['jarak'];
      $keterangan = $_POST['keterangan'];
      // query untuk simpan data ke database
      $insertquery = mysqli_query($connection, "INSERT INTO t_epa VALUES(NULL, '$hari','$tanggal','$supervisor','$shift','$grup','$lokasi','$equipment','$ritase','$hmawal','$hmakhir','$hmoperasi','$jamoperasi','$jampenunjang','$jamlain','$breakdown','$nooperator','$hujan','$standby','$fuel','$bbmawal','$bbmakhir','$hmisi','$jmrefuel','$jarak','$keterangan')");
      // Jika berhasil simpan data, maka memunculkan notif berhasil, dan form input dimunculkan kembali
      if ($insertquery){
          
          header('Location: ../index.php?status=success');
      } else {
        header('Location: ../index..php?status=failed');
      }
  }
  // handle save data Problem
  if(isset($_GET['save_data_prob'])){
    $start_prob = "";
    // mengambil tanggal problem 
    $start_prob = $_GET['start_time'];
    // mengubah tanggal menjadi format string
    $time = strtotime($start_prob);
    // mengurangi 1 hari 
    $date_only = strtotime('-1 days', strtotime($start_prob));
    // mengambil nilai jam dari variabel start_prob
    $time_ok = date('H', $time);
    // jika kurang dari jam 6 pagi, maka berlaku 
    if($time_ok < 6){
      // date ok berisi nilai $date only (yang dikurang 1 hari sebelumnya)
      $date_ok = date('Y-m-d', $date_only);
    } else {
      $tgl_prob = new DateTime($start_prob);   
      $date_ok = $tgl_prob->format('Y-m-d'); 
    }
    $unit_prob = $_GET['unitse'];
    $end_prob = $_GET['end_time'];
    // membuat variabel durasi
    $durasi = "";
    // mengambil nilai tanggal diubah ke string
    $time_awal = strtotime($start_prob);
    $time_akhir = strtotime($end_prob);
    // selisih variabel waktu dibagi milisecond, second, dan menit
    $durasi = ($time_akhir - $time_awal) / (60*60);
    // pembulatan dua angka
    $durasi_ok = round($durasi, 2);
    $jenis_prob = $_GET['jenis_prob'];
    $keterangan_prob = $_GET['keterangan'];

    // query save data ke database
    $insertproblem = mysqli_query($connection, "INSERT INTO t_losstime VALUES (NULL, '$date_ok','$unit_prob','$start_prob','$end_prob','$durasi_ok','$jenis_prob','$keterangan_prob')");
    // mengarahkan ke halaman setelah berhasil atau gagal simpan
    if($insertproblem){
      header('Location: ../index.php?status=problemsuccess');
    } else {
      header('Location: ../index.php?status=problemfailed');
    }
  };

  // Handle save data BBM
  if(isset($_POST['save_data_bbm'])){
    $bbm_userid = $_POST['bbm_userid'];
    $bbm_petugas = $_POST['bbm_petugas'];
    $bbm_restock = $_POST['bbm_restock'];
    $bbm_floawal = $_POST['bbm_flowawal'];
    $bbm_flowakhir = $_POST['bbm_flowakhir'];
    $bbm_noid = $_POST['bbm_noid'];
    $bbm_fueltruck = $_POST['bbm_fueltruck'];
    // Sub II
    $bbm_equipment = $_POST['bbm_equipment'];
    $bbm_material = $_POST['bbm_material'];
    $bbm_quantity = $_POST['bbm_quantity'];
    $bbm_mread = $_POST['bbm_mread'];
    $bbm_type = $_POST['bbm_type'];
    $bbm_hmawal = $_POST['bbm_hmawal'];
    $bbm_hmakhir = $_POST['bbm_hmakhir'];
    // save to database
    $insertbbm = mysqli_query($connection, "INSERT INTO t_bbm VALUES (NULL, '$bbm_fueltruck','$bbm_userid','$bbm_noid','$bbm_equipment','$bbm_material','$bbm_quantity','$bbm_mread','$bbm_type','$bbm_hmawal','$bbm_hmakhir','$bbm_petugas','$bbm_restock','$bbm_floawal','$bbm_flowakhir')");
    // cek berhasil atau tidak dalam simpan data dan redirect
    if($insertbbm){
      header('Location: ../pages/sum_input_bbm.php?status=bbmsuccess');
    } else {
      header('Location: ../pages/sum_input_bbm.php?status=bbmfailed');
    }
  }

  // export 
  if(isset($_POST['exportFile'])){
    $bbm_userid = "";
    $bbm_userid = $_POST['bbm_userid'];
    if($bbm_userid == ""){
      $queryexport = mysqli_query($connection, "SELECT * FROM t_bbm INTO OUTFILE 'D:/export.csv' FIELDS TERMINATED BY ','");
      if($queryexport){
        header('Location: ../pages/sum_input_bbm.php?status=exportallsuccess');
      }
    } else {
      $queryexport = mysqli_query($connection, "SELECT * FROM t_bbm WHERE user_id = '$bbm_userid' INTO OUTFILE 'D:/export.csv' FIELDS TERMINATED BY ','");
      if($queryexport){
        header('Location: ../pages/sum_input_bbm.php?status=exportidsuccess');
      }
    }
  }
?>