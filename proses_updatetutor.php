<?php
require_once 'koneksioracle.php';
if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $kelas = $_POST['kelas'];
 
  
  // update data berdasarkan id_produk yg dikirimkan
  
	$query = "UPDATE  tutor  SET NAMA ='".$nama."', KELAS ='".$kelas."' WHERE ID_TUTOR = '".$id."' ";
	$statement = oci_parse($conn,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($conn);
  if ($res) {
    // pesan jika data berubah
    echo "<script>alert('Data tutor berhasil diubah'); window.location.href='tutor.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data tutor gagal diubah'); window.location.href='tutor.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: tutor.php'); 
}