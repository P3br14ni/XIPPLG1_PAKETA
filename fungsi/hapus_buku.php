<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM buku WHERE id_buku=$id");
?>
 <script>
    alert('Jangan nyesel yah');
    location.href = "index.php?page=buku";
 </script>