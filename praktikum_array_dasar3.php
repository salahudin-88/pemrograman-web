<?php
  $listTugas = ["Tugas 1", "Tugas 2"];

  // Menambah elemen baru
  array_push($listTugas, "Tugas 3"); // Menambah di akhir
  $listTugas[] = "Tugas 4";          // Cara singkat menambah di akhir

  // Menghapus elemen
  unset($listTugas[0]); // Menghapus "Tugas 3"

  echo "<pre>";
  print_r($listTugas);
  echo "</pre>";
?>