<?php
$SafeFile = $_FILES['banner']['name'];
if ($SafeFile != '') {
    $curdate = date('d-m-Y');
    $uploaddir = "images/banners/" . $curdate . "/";
    $path = $uploaddir . $SafeFile;
    $uploaddir2 = "images/banners/" . $curdate . "/";
    $path2 = $uploaddir2 . $SafeFile;
    if (!file_exists($uploaddir)) //part A
    {
        mkdir($uploaddir, 0777, true); //part B
        copy($_FILES['banner']['tmp_name'], $path);
    } else {
        copy($_FILES['banner']['tmp_name'], $path);
    }
} else {
    $path2 = '';
}
?>