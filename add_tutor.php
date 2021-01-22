<?php
require_once 'koneksioracle.php';
if (isset($_POST['submit'])) {
  $id = $_POST['ID'];
  $nama = $_POST['NAMA'];
  $kelas = $_POST['KELAS'];
  
	$query = "INSERT INTO TUTOR (ID_TUTOR,NAMA,KELAS) VALUES ('".$id."','".$nama."','".$kelas."')";
	$statement = oci_parse($conn,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($conn);
  if ($res) {
    // pesan jika data tersimpan
    echo "<script>alert('Data tutor baru berhasil ditambahkan'); 
	window.location.href='tutor.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data tutor baru gagal ditambahkan');
	window.location.href='tutor.php'</script>";
  }
} else {
  //jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: tutor.php'); 
}