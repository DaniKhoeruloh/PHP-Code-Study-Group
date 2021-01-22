<?php
require_once 'koneksioracle.php';
if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $no = $_POST['no'];
  $nama = $_POST['nama'];
  $kelas = $_POST['kelas'];
  
  // update data berdasarkan id_produk yg dikirimkan
  
	$query = "UPDATE  pembayaran  SET ID_SISWA ='".$id."', NO_KELAS ='".$no."', NAMA_SISWA = '".$nama."', NAMA ='".$kelas."' ";
	$statement = oci_parse($conn,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($conn);
  if ($res) {
    // pesan jika data berubah
    echo "<script>alert('Data pembayaran berhasil diubah'); window.location.href='pembayaran.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data pembayaran gagal diubah'); window.location.href='pembayaran.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: pembayaran.php'); 
}