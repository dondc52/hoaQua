<?php 
$conn = mysqli_connect('localhost','root','','btl');
// tb
$sql = "SELECT td,nd FROM tb WHERE id = ( SELECT MAX(id) FROM tb ) ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$td = $row['td'];
$nd = $row['nd'];

$sqla = "SELECT td,nd FROM tb WHERE id = ( SELECT MAX(id-1) FROM tb ) ";
$resulta = mysqli_query($conn, $sqla);
$rowa = mysqli_fetch_assoc($resulta);
$tda = $rowa['td'];
$nda = $rowa['nd'];

// $sqlb = "SELECT td,nd FROM tb WHERE id = ( SELECT MAX(id-2) FROM tb ) ";
// $resultb = mysqli_query($conn, $sqlb);
// $rowb = mysqli_fetch_assoc($resultb);
// $tdb = $rowb['td'];
// $ndb = $rowb['nd'];

// $sqlc = "SELECT td,nd FROM tb WHERE id = ( SELECT MAX(id-3) FROM tb ) ";
// $resultc = mysqli_query($conn, $sqlc);
// $rowc = mysqli_fetch_assoc($resultc);
// $tdc = $rowc['td'];
// $ndc = $rowc['nd'];

// bt

$sql1 = "SELECT td,nd FROM bt WHERE id = ( SELECT MAX(id) FROM bt ) ";
$result1 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_assoc($result1);
$td1 = $row1['td'];
$nd1 = $row1['nd'];

$sql1a = "SELECT td,nd FROM bt WHERE id = ( SELECT MAX(id-1) FROM bt ) ";
$result1a = mysqli_query($conn, $sql1a);
$row1a = mysqli_fetch_assoc($result1a);
$td1a = $row1a['td'];
$nd1a = $row1a['nd'];

// $sql1b = "SELECT td,nd FROM bt WHERE id = ( SELECT MAX(id-2) FROM bt ) ";
// $result1b = mysqli_query($conn, $sql1b);
// $row1b = mysqli_fetch_assoc($result1b);
// $td1b = $row1b['td'];
// $nd1b = $row1b['nd'];

// $sql1c = "SELECT td,nd FROM bt WHERE id = ( SELECT MAX(id-3) FROM bt ) ";
// $result1c = mysqli_query($conn, $sql1c);
// $row1 = mysqli_fetch_assoc($result1c);
// $td1c = $row1c['td'];
// $nd1c = $row1c['nd'];


// bg

$sql2 = "SELECT td,nd FROM bg WHERE id = ( SELECT MAX(id) FROM bg ) ";
$result2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_assoc($result2);
$td2 = $row2['td'];
$nd2 = $row2['nd'];

$sql2a = "SELECT td,nd FROM bg WHERE id = ( SELECT MAX(id-1) FROM bg ) ";
$result2a = mysqli_query($conn, $sql2a);
$row2a = mysqli_fetch_assoc($result2a);
$td2a = $row2a['td'];
$nd2a = $row2a['nd'];


mysqli_close($conn);