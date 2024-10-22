<?php
if(isset($_GET["id"]) && !empty($_GET["id"])){
    include "conn.php";
    $sql = "DELETE FROM tablanches WHERE id = ".$_GET["id"];
    $result = mysqli_query($conn, $sql);
    echo $result;
    
}else{
    echo "paia";
}

?>