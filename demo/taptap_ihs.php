<?php
$connect = mysqli_connect("localhost","root","","squaregame");

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
