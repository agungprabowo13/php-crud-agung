<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah - PHP CRUD</title>
    <link rel="stylesheet" href="./dist/output.css">
</head>
<body>
    <?php include("koneksi.php")?>
    <div class="max-w-7xl mx-auto py-5">
        <div class="flex justify-between mb-10">
            <h1 class="text-2xl">Tambah Player</h1>
            <a href="." class="btn btn-error">Batal</a>
        </div>
        <form action="_action_tambah.php" method="post">
            <input type="text" name="nama" placeholder="Nama Player" class=" input input-bordered w-full mb-3">
            <input type="text" name="alamat" placeholder="Alamat" class=" input input-bordered w-full mb-3">
            <select name="role" id="" class="select select-bordered w-full mb-5">
                <option value="Roamer">Roamer</option>
                <option value="Jungler">Jungler</option>
                <option value="Gold Laner">Gold Laner</option>
                <option value="Exp Laner">Exp Laner</option>
                <option value="Mid Laner">Mid Laner</option>
            </select>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</body>
</html>