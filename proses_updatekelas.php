<?php
require_once 'koneksioracle.php';
if (isset($_POST['submit'])) {
  $no = $_POST['no'];
  $nama = $_POST['nama'];
  $jam = $_POST['jam'];
  $tutor = $_POST['tutor'];
  $link = $_POST['link'];
  $biaya = $_POST['biaya'];
  
  // update data berdasarkan id_produk yg dikirimkan
  
	$query = "UPDATE  kelas  SET NAMA ='".$nama."', WAKTU ='".$jam."', TUTOR = '".$tutor."', LINK ='".$link."', BAYAR ='".$biaya."' WHERE NO_KELAS = '".$no."' ";
	$statement = oci_parse($conn,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($conn);
  if ($res) {
    // pesan jika data berubah
    echo "<script>alert('Data kelas berhasil diubah'); window.location.href='kelas.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data kelas gagal diubah'); window.location.href='kelas.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: kelas.php'); 
}