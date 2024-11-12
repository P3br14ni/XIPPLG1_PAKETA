<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM peminjaman WHERE id_peminjam=$id");
?>
 <script>
    alert('Jangan nyesel yah');
    location.href = "index.php?page=peminjaman";
 </script>