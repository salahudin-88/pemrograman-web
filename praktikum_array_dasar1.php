<?php
  // 1. Indexed Array
  $buah = ["Nanas", "Jeruk", "Mangga"];
  echo "Buah favorit: " . $buah[1] . "<br>"; // Output: Jeruk

  // 2. Associative Array
  $mahasiswa = [
      "nama" => "Budi Santoso",
      "nim"  => "2026101001",
      "ipk"  => 3.85
  ];
  echo "Nama Mahasiswa: " 
  . $mahasiswa["nama"] 
  . " NIM: " . $mahasiswa["nim"] 
  . ", (IPK: " . $mahasiswa["ipk"] . ")<br>";
?>