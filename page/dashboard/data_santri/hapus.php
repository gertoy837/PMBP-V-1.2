<?php

require "../config.php";

$id = $_GET['id'];

$query = "DELETE FROM santri WHERE id = '$id'";

$santri = mysqli_query($connect,"SELECT * FROM santri WHERE id = '$id'");
$san = mysqli_fetch_assoc($santri);
$query1 = "DELETE FROM wali_santri WHERE santri_id = '$san[id]'";

$hapus = mysqli_query($connect,$query1);
$hapus1 = mysqli_query($connect,$query);

header("Location:data_santri.php");