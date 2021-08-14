<?php
"multipart/form-data";

if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $img=$_FILES['img'];
    print_r($img);

$imgName=$img['name'];
$imgType=$img['type'];
$imgTmpName=$img['tmp_name'];
$imgErrors=$img['error'];
$imgSize=$img['size'];
$randStr=uniqid();
$ext=pathinfo($imgName,PATHINFO_EXTENSION);
$date=time();
$imgNewName="$date$randStr.$ext";
move_uploaded_file($imgTmpName,"uploads/$imgNewName");

$Errors=[];
if ($imgErrors>0) {
    $Errors[]="there is error while uploading";
}elseif (! in_array($ext,["jpg","png","gif"])) {
    $Errors[]="must be image";
}elseif ($imgSizemb > 1) {
    $Errors[]="images must be less than 1mb";
}

if (empty($Errors)) {
    $randStr=uniqid();
    $imgNewName="$randStr.$ext";
    move_uploaded_file($imgTmpName,"uploads/$imgNewName");

}else {
    print_r($Errors);
}

}
?>
