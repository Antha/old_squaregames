<?php

$connect = mysqli_connect("mysql.idhostinger.com","u880626497_zen","amandarv","u880626497_squar");

$qhigest_score = mysqli_query($connect,"Select * From taptap_high_score order By SKOR Desc limit 1");

while($row = mysqli_fetch_array($qhigest_score))
{
    $data["nama"] = $row["NAMA"];
    $data["high_score"] = $row["SKOR"];
}

echo $data["high_score"]." oleh ". $data["nama"];

?>
