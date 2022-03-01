<?php

include "connection.php";

$queryexportlosstime = mysqli_query($connection, "SELECT * FROM `t_losstime` INNER JOIN t_losscategory ON t_losstime.obstacle = t_losscategory.obstacle ORDER BY id DESC");
if(mysqli_num_rows($queryexportlosstime) > 0){
    $delimiterloss = ",";
    $filenameloss = "data_losstime_".date('Y-m-d').".csv";
    // create a file pointer
    $floss = fopen("php://memory", "w");
    // set column header
    $fieldsloss = array('id','date','unit','start_time','end_time','duration','obstacle','keterangan','status','category');
    fputcsv($floss, $fieldsloss, $delimiterloss);
    // output setiap data ke csv
    while($rowloss = mysqli_fetch_array($queryexportlosstime)){
        $linedataloss = array($rowloss['id'],$rowloss['date'],$rowloss['unit'],$rowloss['start_time'],$rowloss['end_time'],$rowloss['duration'],$rowloss['obstacle'],$rowloss['keterangan'],$rowloss['status'],$rowloss['category']);
        fputcsv($floss, $linedataloss, $delimiterloss);
    }
    // move back
    fseek($floss, 0);
    // set header
    header('Content-Type: text/csv');
    header('Content-Disposition: attachmentl; filename="'.$filenameloss.'";');
    fpassthru($floss);
}
exit;

?>