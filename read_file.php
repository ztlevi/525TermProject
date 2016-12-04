<?php
session_start();
require 'includes/config.php';
$q="select * from book";

$res=mysqli_query($conn,$q) or die("Can't Execute Query..");

$i = 0;
while ($row = mysqli_fetch_assoc($res))
{
    $id[$i] = $row["b_id"];
    $name[$i] = $row["b_nm"];
    $img[$i] = $row["b_img"];
    $i++;
}
$data=array("id"=>$id, "img"=>$img, "name"=>$name);
echo json_encode($data);
// $dir = 'upload_image';
// $files = scandir($dir);
// // print_r($files);
// $data['result'] = $files;
// echo json_encode($data);
?>
