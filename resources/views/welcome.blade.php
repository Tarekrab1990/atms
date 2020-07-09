<?php

$serverName = "127.0.0.1";
$connectionInfo = array( "Database"=>"HRSYSTEM", "UID"=>"sa", "PWD"=>"13041990" );
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn === false ) {
     die( print_r( sqlsrv_errors(), true));
}else{
    echo "Success";
}


$sql = "SELECT * FROM ATT_LOG_FINAL3";
//$params = array(1, "some data");

$stmt = sqlsrv_query( $conn, $sql);
if( $stmt === false ) {
     die( print_r( sqlsrv_errors(), true));
}
?>
<table>
<tr><th>
Badge Number
</th> <th>Name</th><th>work time</th></tr>

<?
while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
    $result = $row['WORKTIME']->format('H:i:s');
    echo "<tr>.<td>".$row['BADGENUMBER']."</td><td>".$row['NAME']."</td><td>".$result."</td></tr>";
}

?>
</table>
<?
sqlsrv_free_stmt( $stmt);
?>