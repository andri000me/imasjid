<?php
	
	// include Database connection file 
	include("db_connection.php");
 		
	$sql = "SELECT * from settings";
  $query = $db->exec($sql);

  $ret = $db->query($sql);
  while($row = $ret->fetchArray(SQLITE3_ASSOC) ) {
      $id = $row['id'];
      $nama_masjid = $row['nama_masjid'];
      $alamat_masjid = $row['alamat_masjid'];
      $running_text = $row['running_text'];
  }
    
  $db->close();

?>