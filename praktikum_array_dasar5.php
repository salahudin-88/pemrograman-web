<?php
  $daftarBuku = [
      ["judul" => "Pemrograman PHP", "penulis" => "Rian H.", "stok" => 12],
      ["judul" => "Mastering jQuery", "penulis" => "Siti A.", "stok" => 5],
      ["judul" => "Desain Database", "penulis" => "Budi S.", "stok" => 8]
  ];

  echo "<table border='2' cellpadding='8' cellspacing='0'>
          <tr style='background: #1f1f1f; color: white;'>
            <th>No</th><th>Judul Buku</th><th>Penulis</th><th>Stok</th>
          </tr>";

  foreach ($daftarBuku as $index => $buku) {
      echo "<tr>
              <td>" . ($index + 1) . "</td>
              <td>" . $buku['judul'] . "</td>
              <td>" . $buku['penulis'] . "</td>
              <td>" . $buku['stok'] . "</td>
            </tr>";
  }

  echo "</table>";
?>