<?php
header("Access-Control-Allow-Origin: *");
//header("Content-Type: application/json; charset=UTF-8");
header( 'Content-Type: text/html;charset=utf-8' );
function ejecutarSQLCommand($commando){

  $mysqli = new mysqli("sql173.main-hosting.eu", "u450515599_pking", "Equipo1-fparking", "u450515599_pking");

  mysqli_set_charset($mysqli, "utf8");
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
if ( $mysqli->multi_query($commando)) {
     if ($resultset = $mysqli->store_result()) {
      while ($row = $resultset->fetch_array(MYSQLI_BOTH)) {

      }
      $resultset->free();
     }


}
$mysqli->close();
}
function getSQLResultSet($commando){

  $mysqli = new mysqli("sql173.main-hosting.eu", "u450515599_pking", "Equipo1-fparking", "u450515599_pking");

  mysqli_set_charset($mysqli, "utf8");
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
if ( $mysqli->multi_query($commando)) {
  return $mysqli->store_result();
}
$mysqli->close();
}
?>
