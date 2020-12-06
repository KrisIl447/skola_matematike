<?php

include_once 'includes/dbh.php';
include 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Škola matematike</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <script src="./assets/js/jquery-3.3.1.min.js"></script>
  <script src="./assets/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/script.js"></script>
</head>
<style>
body {
  background-image: linear-gradient(to right, red , white);
  
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  padding-bottom: 100px;
  font-size:14px;
  text-align: center;

}
.my-3 {
  font-family: Impact;
  color: blue;
  text-align: center;
}

.container{
  color: black;
  margin: 30px auto;
  font-family: Trebuchet MS;
  
}
table {
    color: red;
    font-family: Trebuchet MS;
    border: white 4px solid;
    
}
td {
    color: black;
    border:  white 2px solid;
    text-align: center;
    padding: 5px;
    background: #f2f2f2;
}
th {
  background: #d9d9d9;
  border:  white 2px solid;
  text-align: center;
}


</style>
<body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<div>
<h1>Škola matemtike</h1>
<h2>Math is cool5</h2>
</div>

<div>
<h4>Potrebna ti je pomoć oko matematike? <br>
Prijavi se u formi ispod:</h4>

</div>

<form action="includes/signup.inc.php" method="POST">
<input type="text", name="idu", placeholder="IDUcenika">
<br>
<input type="text", name="first", placeholder="Ime">
<br>
<input type="text", name="last", placeholder="Prezime">
<br>
<button type="submit", name="submit">Prijavi se</button>

</form>
<h6>Radujemo se našem druženju</h6>





<div>
<h2>Lista naših nastavnika</h2>

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
</body>
</html>