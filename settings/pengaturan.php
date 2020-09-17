<?php
	include('header.php');
	include('sidebar.php');
  include('../scripts/retrieve.php');
?>

<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">                 
  <div class="row">
    <div class="col-12 col-xl-12 mb-4 mb-lg-0">
      <div class="card">
          <h5 class="card-header">Pengaturan Dasar</h5>
            <div class="card-body">
                <div class="form-group">
                  <label>Nama Masjid</label><input type="text" name="nama_masjid" id="nama_masjid" class="form-control col-md-8" value="<?php echo $nama_masjid; ?>">
                </div>
                <div class="form-group">
                  <label>Alamat</label><input type="text" name="alamat_masjid" id="alamat_masjid" class="form-control col-md-8" value="<?php echo $alamat_masjid; ?>">
                </div>
                <div class="form-group">
                  <label>Koreksi Tanggal Hijriah</label>
                  <select name="koreksi_hijriah" id="koreksi_hijriah" class="form-control col-md-2">
                      <option <?php if ($koreksi_hijriah==-2) echo 'selected = "selected"'; ?> value="-2">-2</option>
                      <option <?php if ($koreksi_hijriah==-1) echo 'selected = "selected"'; ?> value="-1">-1</option>     
                      <option <?php if ($koreksi_hijriah==-0) echo 'selected = "selected"'; ?> value="0">0</option>  
                      <option <?php if ($koreksi_hijriah==1) echo 'selected = "selected"'; ?> value="1">1</option> 
                      <option <?php if ($koreksi_hijriah==2) echo 'selected = "selected"'; ?> value="2">2</option>                               
                  </select>
                </div>
                <div class="form-group">
                  <label>Metode Perhitungan</label>
                  <select name="metode_perhitungan" id="metode_perhitungan" class="form-control col-md-8">
                      <option <?php if ($metode_perhitungan==0) echo 'selected = "selected"'; ?> value="0">Ithna Ashari</option>
                      <option <?php if ($metode_perhitungan==1) echo 'selected = "selected"'; ?> value="1">University of Islamic Sciences, Karachi</option>     
                      <option <?php if ($metode_perhitungan==2) echo 'selected = "selected"'; ?> value="2">Islamic Society of North America (ISNA)</option>  
                      <option <?php if ($metode_perhitungan==3) echo 'selected = "selected"'; ?> value="3">Muslim World League</option> 
                      <option <?php if ($metode_perhitungan==4) echo 'selected = "selected"'; ?> value="4">Umm al-Qura, Makkah</option>     
                      <option <?php if ($metode_perhitungan==5) echo 'selected = "selected"'; ?> value="5">Egyptian General Authority of Survey</option>  
                      <option <?php if ($metode_perhitungan==7) echo 'selected = "selected"'; ?> value="7">Institute of Geophysics, University of Tehran</option>                            
                  </select>
                </div>
                <div class="form-group">
                  <label>Garis Lintang</label><input type="text" name="garis_lintang" id="garis_lintang" class="form-control col-md-3" value="<?php echo $garis_lintang; ?>">
                </div>
                <div class="form-group">
                  <label>Garis Bujur</label><input type="text" name="garis_bujur" id="garis_bujur" class="form-control col-md-3 " value="<?php echo $garis_bujur; ?>">
                </div>
                <div class="form-group">
                  <label>Zona Waktu</label>
                  <select name="zona_waktu" id="zona_waktu" class="form-control col-md-2">
                    <option <?php if ($zona_waktu==+7) echo 'selected = "selected"'; ?> value="+7">+7</option>
                    <option <?php if ($zona_waktu==+8) echo 'selected = "selected"'; ?> value="+8">+8</option>                   
                  </select>
                </div>
          </div>
      </div>
    </div>
  </div>       
</main>

<?php include('footer.php'); ?>