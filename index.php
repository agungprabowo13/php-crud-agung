<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD</title>
    <link rel="stylesheet" href="./dist/output.css">
</head>

<body>
    <?php include("koneksi.php")?>
    <div class="max-w-7xl mx-auto py-5">
        <div class="flex justify-between mb-10">
            <h1 class="text-2xl">Data Player</h1>
            <a href="tambah.php" class="btn btn-primary">Tambah Player</a>
        </div>
        <div class="overflow-x-auto">
            <table class="table">
                <!-- head -->
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Role</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php   
                        $no = 1;
                        $query = mysqli_query($koneksi,"SELECT * FROM tb_mlbb");
                        while ($data = mysqli_fetch_array($query)) {
                            ?>
                    <tr>
                        <td><?= $no++?></td>
                        <td><?= $data['nama']?></td>
                        <td><?= $data['alamat']?></td>
                        <td><?= $data['role']?></td>
                        <td class="">    
                            <a href="ubah.php?id=<?= $data['id'] ?>" class="btn btn-accent">Ubah</a>
                            <a href="hapus.php?id=<?php echo $data['id']?>" class="btn btn-error text-white">
                            Hapus
                            </a>
                        </td>
                    <?php } ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>