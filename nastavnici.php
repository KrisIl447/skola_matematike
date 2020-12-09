<?php

include_once 'includes/dbh.php';
//include 'header.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Nastavnici</title>
</head>
<body>
<style>
body {
  background: linear-gradient(white,gray);
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  padding-bottom: 100px;
  font-size:15px;
  text-align: center;

}
</style>
<?php include 'header.php'; ?>

<div>
<b><h2>Lista naših nastavnika</h2></b>

</div>
<?php
$sql="SELECT * FROM nastavnik;";
        $result= mysqli_query($conn, $sql);
        $resultCheck= mysqli_num_rows($result);

        if($resultCheck > 0){
            while($row=mysqli_fetch_assoc($result)){
                echo $row['imen']." ";
                echo $row['prezimen']."<br>";
            }
        }
?>

<?php include 'footer.php'; ?>
</body>
</html>