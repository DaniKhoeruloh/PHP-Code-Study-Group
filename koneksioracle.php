<?php
$username="Dani_10060";
$password="Dani_10060";
$dbname="localhost/XE";
$conn=oci_connect($username,$password,$dbname);
if(!$conn){
echo"Gagal tersambung ke ORACLE";
exit();
}else{
echo "Study Group (On-Line)";
}
?>
