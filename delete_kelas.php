<?php
require_once 'koneksioracle.php';
// cek id
if (isset($_GET['id'])) {
  $no = $_GET['id'];
	$sql = "delete from kelas where NO_KELAS='$no' ";
	$parsesql = oci_parse($conn, $sql);
	$q = oci_execute($parsesql) or die(oci_error());
	
  // cek perintah
  if ($q) {
    // pesan apabila hapus berhasil
    echo "<script>alert('Data berhasil dihapus'); window.location.href='kelas.php'</script>";
  } else {
    // pesan apabila hapus gagal
    echo "<script>alert('Data gagal dihapus'); window.location.href='kelas.php'</script>";
  }
} else {
  // jika mencoba akses langsung ke file ini akan diredirect ke halaman index
  header('Location:kelas.php');
}