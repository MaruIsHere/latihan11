<?php

$data[0]["nim"] = "2201010148";
$data[0]["nama"] = "Komang Adi";
$data[0]["alamat"] = "JL. Utama 5 Blok A17";
$data[0]["tgl_lahir"] = "2011-11-28";
$data[0]["jns_kelamin"] = "Laki-Laki";

$data[1]["nim"] = "220101013434";
$data[1]["nama"] = "Riska Adi";
$data[1]["alamat"] = "JL. Utama 6 Blok A11";
$data[1]["tgl_lahir"] = "2011-02-23";
$data[1]["jns_kelamin"] = "Perempuan";

$data[2]["nim"] = "22012343523";
$data[2]["nama"] = "Budi Yanto";
$data[2]["alamat"] = "JL. Utama 1 Blok A15";
$data[2]["tgl_lahir"] = "2011-03-11";
$data[2]["jns_kelamin"] = "Laki-Laki";

header('content-type: application/json; charset=UTF-8');

echo json_encode($data);



?>