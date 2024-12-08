<?php
function buat_nama_kapital($nama) {
  return ucwords($nama);
}

$nama_lengkap = buat_nama_kapital("muhamad abduh");
echo $nama_lengkap . PHP_EOL; // "Muhamad Abduh"

// memanggil function di dalam function lain
function perkenalan($nama, $asal) {
  echo "perkenalkan nama saya " . buat_nama_kapital($nama). ", asal saya dari $asal";
}

perkenalan("muhamad abduh", "bandung");
