<div class="card">
    <div class="card-body">
<h1 class="mt-4">Tambah data buku</h1><br>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form method="post">
                    <?php
                    if(isset($_POST['submit'] ) {
                        $id_kategori = $_POST['id_kategori'];
                        $judul = $_POST['judul'];
                        $penulis = $_POST['penulis'];
                        $penerbit = $_POST['penerbit'];
                        $tahun_terbit = $_POST['tahun_terbit'];
                        $deskripsi = $_POST['deskripsi'];
                        $query = mysqli_query($koneksi, "INSERT INTO buku(id_kategori,judul,penulis,penerbit,tahun_terbit,deskripsi) VALUES('id_kategori','judul,penulis','penerbit','tahun_terbit','deskripsi')");

                        if($query) {
                            echo '<script>alert("oke sip.");</script>';
                        }else{
                            echo '<script>alert("ulangi.");</script>';
                        }
                    }
                ?>
                <div class="row mb-3">
                    <div class="col-md-2">Nama Kategori</div>
                    <div class="col-md-8">
                        <select name="id_kategori" class="form-control">
                            <?php
                                $kat = mysqli_query($koneksi, "SELECT * FORM kategori");
                                while($kategori = mysqli_fetch_array($kat)) {
                                    ?>
                                    <option value="<?php echo $kategori['id_kategori']; ?>"><
                                }   