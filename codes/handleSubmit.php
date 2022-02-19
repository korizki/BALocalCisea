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
  }
  // query untuk simpan data ke database
  $insertquery = mysqli_query($connection, "INSERT INTO t_epa VALUES(NULL, '$hari','$tanggal','$supervisor','$shift','$grup','$lokasi','$equipment','$ritase','$hmawal','$hmakhir','$hmoperasi','$jamoperasi','$jampenunjang','$jamlain','$breakdown','$nooperator','$hujan','$standby','$fuel','$bbmawal','$bbmakhir','$hmisi','$jmrefuel','$jarak','$keterangan')");
  // Jika berhasil simpan data, maka memunculkan notif berhasil, dan form input dimunculkan kembali
  if ($insertquery){
      
      header('Location: ../pages/summary.php?status=success');
  } else {
    header('Location: ../pages/summary.php?status=failed');
  }
?>