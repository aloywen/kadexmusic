$koneksi = mysqli_connect("localhost:8080","root","","kadexstudio");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>