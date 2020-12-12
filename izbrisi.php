<? php
include_once 'includes/dbh.php';
//DELETE
$roll=$_GET['ucenikid'];
$query="DELETE FROM `ucenik` WHERE ucenikid='$roll';";

$data=mysqli_query($conn, $query);
 if($data){
     echo "Obrisano iz baze učenika";
 }else {echo "Nije obrisano iz baze učenika"}
