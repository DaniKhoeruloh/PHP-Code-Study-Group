<?php
require_once 'koneksioracle.php';
if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $no = $_POST['no'];
  $nama = $_POST['nama'];
  $kelas = $_POST['kelas'];
 
  
	$query = "INSERT INTO pembayaran (ID_SISWA,NO_KELAS,NAMA_SISWA,NAMA) VALUES ('".$id."','".$no."','".$nama."','".$kelas."')";
	$statement = oci_parse($conn,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($conn);
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data pembayaran berhasil ditambahkan'); 
	window.location.href='pembayaran.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data pembayaran gagal ditambahkan');
	window.location.href='pembayaran.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: pembayaran.php'); 
}