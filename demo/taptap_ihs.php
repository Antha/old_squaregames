<?php
$connect = mysqli_connect("mysql.idhostinger.com","u880626497_zen","amandarv","u880626497_squar");

if(mysqli_connect_errno())
{
    echo "Error Database";
}
else{
    echo "Berhasil Database";
}

$name = $_POST["name"];
$score = $_POST["score"];

mysqli_query($connect,"insert into taptap_high_score(NAMA,SKOR) values ('".$name."',".$score.")");
?>
