<?php
  echo "<h4>1. Perulangan FOR (Angka 1 - 10):</h4>";
  for ($i = 1; $i <= 10; $i++) {
      echo "Angka ke-" . $i . "<br>";
  }

  echo "<h4>2. Perulangan WHILE (Hitung Mundur 10 - 1):</h4>";
  $j = 10;
  while ($j >= 1) {
      echo "Hitung: " . $j . "<br>";
      $j--;
  }

  echo "<h4>3. Perulangan DO-WHILE (Minimal Dieksekusi 1 Kali):</h4>";
  $k = 10;
  do {
      echo "Nilai k saat ini: " . $k . "(Kondisi k < 10 sebenarnya bernilai false)<br>";
      $k++;
  } while ($k < 10);
?>