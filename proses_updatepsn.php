<?php
require_once 'koneksioracle.php';
if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $kelamin = $_POST['KELAMIN'];
  $email = $_POST['email'];
  $alamat = $_POST['alamat'];
 
  
  // update data berdasarkan id_produk yg dikirimkan
  
	$query = "UPDATE  siswa  SET NAMA_SISWA ='".$nama."', JENIS_KELAMIN ='".$kelamin."', EMAIL = '".$email."', ALAMAT_SISWA ='".$alamat."' WHERE ID_SISWA = '".$id."' ";
	$statement = oci_parse($conn,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($conn);
  if ($res) {
    // pesan jika data berubah
    echo "<script>alert('Data anggota berhasil diubah'); window.location.href='siswa.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data anggota gagal diubah'); window.location.href='siswa.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: siswa.php'); 
}