<?php

require "../config.php";

$id = $_GET['id'];

$query = "DELETE FROM login WHERE id = '$id'";

$hapus1 = mysqli_query($connect,$query);

header("Location:data_akun.php");