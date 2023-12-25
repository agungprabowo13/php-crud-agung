<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah - PHP CRUD</title>
    <link rel="stylesheet" href="./dist/output.css">
</head>

<body>
    <?php include("koneksi.php") ?>
    <div class="max-w-7xl mx-auto py-5">
        <div class="flex justify-between mb-10">
            <h1 class="text-2xl">Ubah Player</h1>
            <a href="." class="btn btn-error">Batal</a>
        </div>
        <form action="_action_ubah.php" method="post">
            <?php
            $id = $_GET['id'];
            $query = mysqli_query($koneksi, "SELECT * FROM tb_mlbb WHERE id='$id'");
            $data = mysqli_fetch_array($query);
            ?>
            <input type="hidden" name="id" value="<?= $data['id'] ?>">
            <input type="text" name="nama" placeholder="Nama Player" class=" input input-bordered w-full mb-3" value="<?= $data['nama'] ?>">
            <input type="text" name="alamat" placeholder="Alamat" class=" input input-bordered w-full mb-3" value="<?= $data['alamat'] ?>">
            <select name="role" id="role" class="select select-bordered w-full mb-5">
                <option value="<?= $data['role']?>"><?= $data['role']?></option>
                <option value="Roamer">Roamer</option>
                <option value="Jungler">Jungler</option>
                <option value="Gold Laner">Gold Laner</option>
                <option value="Exp Laner">Exp Laner</option>
                <option value="Mid Laner">Mid Laner</option>
            </select>
            <button type="submit" class="btn btn-primary">Ubah</button>
        </form>
    </div>
    <script>
        const role = document.getElementById("role").children
        const x = role[0].value
        for (let i = 1; i < role.length; i++) {
            if (role[i].value == x){
                role[i].classList.add("hidden");
            };
        }
    </script>
</body>

</html>