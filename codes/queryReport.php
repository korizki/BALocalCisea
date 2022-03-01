<?php 
include "connection.php";
$start_date = date('Y-m-d');
$end_date = date('Y-m-d');
if(isset($_GET['submitdate'])){
    if(empty($_GET['startdate'])){
        
        $start_date = date('Y-m-d');
    } else {
        $start_date = $_GET['startdate'];
    }
    if(empty($_GET['enddate'])){
        
        $end_date = date('Y-m-d');
    } else {
        $end_date = $_GET['enddate'];
    }
}
// definisi variabel 0
$bd = 0; $agree = 0;
$querybd = mysqli_query($connection, "SELECT SUM(duration) AS DURASIBD FROM t_losstime INNER JOIN t_losscategory ON t_losscategory.obstacle = t_losstime.obstacle WHERE date BETWEEN '$start_date' AND '$end_date' AND category like '%Breakdown%'");
$bd =  mysqli_fetch_array($querybd)['DURASIBD'];
if($bd == ""){
    $bd = 0;
}
$queryagree = mysqli_query($connection, "SELECT SUM(duration) AS DURASIAGREE FROM t_losstime INNER JOIN t_losscategory ON t_losscategory.obstacle = t_losstime.obstacle WHERE date BETWEEN '$start_date' AND '$end_date' AND category = 'Agreement'");
$agree = mysqli_fetch_array($queryagree)['DURASIAGREE'];
if($agree == ""){
    $agree = 0;
}
$queryforce = mysqli_query($connection, "SELECT SUM(duration) AS DURASIFORCE FROM t_losstime INNER JOIN t_losscategory ON t_losscategory.obstacle = t_losstime.obstacle WHERE date BETWEEN '$start_date' AND '$end_date' AND category = 'Force Majeur'");
$force = mysqli_fetch_array($queryforce)['DURASIFORCE'];
if($force == ""){
    $force = 0;
}
$queryweather = mysqli_query($connection, "SELECT SUM(duration) AS DURASIWEATHER FROM t_losstime INNER JOIN t_losscategory ON t_losscategory.obstacle = t_losstime.obstacle WHERE date BETWEEN '$start_date' AND '$end_date' AND category = 'Weather'");
$weather = mysqli_fetch_array($queryweather)['DURASIWEATHER'];
if($weather == ""){
    $weather = 0;
}
$queryengine = mysqli_query($connection, "SELECT SUM(duration) AS DURASIENGINE FROM t_losstime INNER JOIN t_losscategory ON t_losscategory.obstacle = t_losstime.obstacle WHERE date BETWEEN '$start_date' AND '$end_date' AND category = 'Problem Engineering'");
$engine = mysqli_fetch_array($queryengine)['DURASIENGINE'];
if($engine == ""){
    $engine = 0;
}
$querysafety = mysqli_query($connection, "SELECT SUM(duration) AS DURASISAFETY FROM t_losstime INNER JOIN t_losscategory ON t_losscategory.obstacle = t_losstime.obstacle WHERE date BETWEEN '$start_date' AND '$end_date' AND category = 'Safety Talk'");
$safety = mysqli_fetch_array($querysafety)['DURASISAFETY'];
if($safety == ""){
    $safety = 0;
}
$querydust = mysqli_query($connection, "SELECT SUM(duration) AS DURASIDUST FROM t_losstime INNER JOIN t_losscategory ON t_losscategory.obstacle = t_losstime.obstacle WHERE date BETWEEN '$start_date' AND '$end_date' AND category = 'Dust'");
$dust = mysqli_fetch_array($querydust)['DURASIDUST'];
if($dust == ""){
    $dust = 0;
}
$querywaitopt = mysqli_query($connection, "SELECT SUM(duration) AS DURASIWAITOPT FROM t_losstime INNER JOIN t_losscategory ON t_losscategory.obstacle = t_losstime.obstacle WHERE date BETWEEN '$start_date' AND '$end_date' AND category = 'Wait Operator'");
$waitopt = mysqli_fetch_array($querywaitopt)['DURASIWAITOPT'];
if($waitopt == ""){
    $waitopt = 0;
}
$querywaitequip = mysqli_query($connection, "SELECT SUM(duration) AS DURASIWAITEQUIP FROM t_losstime INNER JOIN t_losscategory ON t_losscategory.obstacle = t_losstime.obstacle WHERE date BETWEEN '$start_date' AND '$end_date' AND category = 'Wait Equipment'");
$waitequip = mysqli_fetch_array($querywaitequip)['DURASIWAITEQUIP'];
if($waitequip == ""){
    $waitequip = 0;
}
$querylistrik = mysqli_query($connection, "SELECT SUM(duration) AS DURASILISTRIK FROM t_losstime INNER JOIN t_losscategory ON t_losscategory.obstacle = t_losstime.obstacle WHERE date BETWEEN '$start_date' AND '$end_date' AND category = 'Problem Kelistrikan'");
$listrik = mysqli_fetch_array($querylistrik)['DURASILISTRIK'];
if($listrik == ""){
    $listrik = 0;
}
$queryrest = mysqli_query($connection, "SELECT SUM(duration) AS DURASIREST FROM t_losstime INNER JOIN t_losscategory ON t_losscategory.obstacle = t_losstime.obstacle WHERE date BETWEEN '$start_date' AND '$end_date' AND category = 'Rest and Meal'");
$rest = mysqli_fetch_array($queryrest)['DURASIREST'];
if($rest == ""){
    $rest = 0;
}
$queryslippery = mysqli_query($connection, "SELECT SUM(duration) AS DURASISLIPPERY FROM t_losstime INNER JOIN t_losscategory ON t_losscategory.obstacle = t_losstime.obstacle WHERE date BETWEEN '$start_date' AND '$end_date' AND category = 'Slippery'");
$slippery = mysqli_fetch_array($queryslippery)['DURASISLIPPERY'];
if($slippery == ""){
    $slippery = 0;
}
$queryshift = mysqli_query($connection, "SELECT SUM(duration) AS DURASISHIFT FROM t_losstime INNER JOIN t_losscategory ON t_losscategory.obstacle = t_losstime.obstacle WHERE date BETWEEN '$start_date' AND '$end_date' AND category = 'Change Shift'");
$shift = mysqli_fetch_array($queryshift)['DURASISHIFT'];
if($shift == ""){
    $shift = 0;
}
$queryblast = mysqli_query($connection, "SELECT SUM(duration) AS DURASIBLAST FROM t_losstime INNER JOIN t_losscategory ON t_losscategory.obstacle = t_losstime.obstacle WHERE date BETWEEN '$start_date' AND '$end_date' AND category = 'Wait Blast'");
$blast = mysqli_fetch_array($queryblast)['DURASIBLAST'];
if($blast == ""){
    $blast = 0;
}

?>