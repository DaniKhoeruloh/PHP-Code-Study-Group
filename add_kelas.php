<?php
require_once 'koneksioracle.php';
if (isset($_POST['submit'])) {
  $no = $_POST['no'];
  $nama = $_POST['nama'];
  $jam = $_POST['jam'];
  $tutor = $_POST['tutor'];
  $link = $_POST['link'];
  $biaya = $_POST['biaya'];
  
	$query = "INSERT INTO kelas (NO_KELAS,NAMA,WAKTU,TUTOR,LINK,BAYAR) VALUES ('".$no."','".$nama."','".$jam."','".$tutor."','".$link."','".$biaya."')";
	$statement = oci_parse($conn,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($conn);
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data kelas baru berhasil ditambahkan'); 
	window.location.href='kelas.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data kelas baru gagal ditambahkan');
	window.location.href='kelas.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: kelas.php'); 
}