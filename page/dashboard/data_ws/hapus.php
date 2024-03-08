<?php

require "../config.php";

$id = $_GET['id'];

$query = "DELETE FROM wali_santri WHERE santri_id = '$id'";

$hapus1 = mysqli_query($connect,$query);

header("Location:data_ws.php");
