<?php 
include "connection.php";

$queryexport = mysqli_query($connection, "SELECT * FROM t_bbm ORDER BY no_trx DESC");
if(mysqli_num_rows($queryexport) > 0){
    $delimiter = ",";
    $filename = "bbm-data_".date('Y-m-d').".csv";
    // create a file pointer
    $f = fopen("php://memory", 'w');
    // set column headers
    $fields = array('no_trx', 'fuel_truck','user_id','no_id','equipment','material','quantity','meter_read','type','hm_awal','hm_akhir','petugas','restock','flow_awal','flow_akhir');
    fputcsv($f, $fields, $delimiter);
    // output setiap data, sebagai csv ke lokasi
    while($row = mysqli_fetch_array($queryexport)){
        $linedata = array($row['no_trx'],$row['fuel_truck'],$row['user_id'],$row['no_id'],$row['equipment'], $row['material'], $row['quantity'], $row['meter_read'], $row['type'], $row['hm_awal'], $row['hm_akhir'], $row['petugas'], $row['restock'], $row['flow_awal'], $row['flow_akhir']);
        fputcsv($f, $linedata, $delimiter);
    }
    // move back
    fseek($f, 0);
    // set header
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="'.$filename.'";');
    fpassthru($f);
}
exit;

?>