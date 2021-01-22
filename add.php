<?php
require_once 'koneksioracle.php';
if (isset($_POST['submit'])) {
  $id = $_POST['ID'];
  $nama = $_POST['NAMA'];
  $kelamin = $_POST['KELAMIN'];
  $email = $_POST['EMAIL'];
  $alamat = $_POST['ALAMAT'];
  
	$query = "INSERT INTO SISWA (ID_SISWA,NAMA_SISWA,JENIS_KELAMIN,EMAIL,ALAMAT_SISWA) VALUES ('".$id."','".$nama."','".$kelamin."','".$email."','".$alamat."')";
	$statement = oci_parse($conn,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($conn);
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data anggota baru berhasil ditambahkan'); 
	window.location.href='siswa.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data anggota baru gagal ditambahkan');
	window.location.href='siswa.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: siswa.php'); 
}