<? php

class Test extends Dbh{
    new public getCenovnik(){
        $sql="SELECT * FROM cenovnik";
        $stmt=$this->connect()->query($sql);
        while($row=$stmt->fetch()){
            echo $row['idc']." ";
            echo $row['trajanje']." ";
            echo $row['cena']."<br>";
        }

    }

}