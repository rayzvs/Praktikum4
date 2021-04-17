<?php

	$namaFile = "mahasiswa.txt";
	$trigger = "|";
	$trigger2 = "-";
	$myfile = fopen($namaFile, "r") or die("Tidak bisa buka file!");
	$result = array();
	$jusia = array();
	
	
	while(!feof($myfile))
	{
		$line = fgets($myfile);
		$result[] = explode($trigger,$line);
		
	}
  
  fclose($myfile);
  
  //fungsi hitung jumlah row di sini
  $jumlah_data = count($result);
  echo "Jumlah data : " . $jumlah_data;

  // inisiasi table
  echo "<table>";
  echo "<tr>
          <td>No</td>
          <td>NIM</td>
          <td>Nama</td>
          <td>Tanggal Lahir</td>
          <td>Tempat Lahir</td>
          <td>Usia</td>
  </tr>";
  
  //penulisan table dari hasil pemecahan string
  for($i=0; $i < count($result); $i++){
    echo "<tr>";
    echo "<td>$i</td>";
    for($j=0; $j < count($result[$i]); $j++)
	{
      echo "<td>" . $result[$i][$j] . "</td>";
    }
	
    //fungsi hitung usia

    $usia = 0;
    echo "<td>$usia</td>";
    echo "</tr>";
  }
  
  echo "</table>";
	

?>