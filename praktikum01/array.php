<?php

//Buat array
$animals = ["Kucing", "nyamuk", "singa", "ayam"];
echo $animals[3]. "<br>";
echo $animals[1];

foreach ($animals as $animal) {
    echo $animal . "<br>";
}


// Buat array asosiatif
$mahasiswa = ["nama"=>"zahra", "jurusan"=>"si", "semester"=>2];
echo $mahasiswa["jurusan"] . "<br>";

foreach ($mahasiswa as $key =>$value) {
    echo "key nya adalah " .$key . "value:" . $value . "<br>";

}


// Buat array multidimensi
$dosen =[
    ["pak rojul", "web"],
    ["pak nasrul", "ddp"],
    ["pak lukman", "os"]
];
// 00 01 10 11 20 21

echo $dosen[0][0];
    # code...


?>