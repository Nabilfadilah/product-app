<?php include '../config/database.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Daftar Produk</title>
</head>

<body class="bg-gray-100 p-8">
    <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Daftar Produk</h1>
            <a href="create.php" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Tambah Produk</a>
        </div>
        <table class="w-full table-auto border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border px-4 py-2">Nama</th>
                    <th class="border px-4 py-2">Kategori</th>
                    <th class="border px-4 py-2">Harga</th>
                    <th class="border px-4 py-2">Stok</th>
                    <th class="border px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $conn->query("SELECT * FROM products ORDER BY created_at DESC");
                while ($row = $result->fetch_assoc()):
                ?>
                    <tr>
                        <td class="border px-4 py-2"><?= htmlspecialchars($row['name']) ?></td>
                        <td class="border px-4 py-2"><?= htmlspecialchars($row['category']) ?></td>
                        <td class="border px-4 py-2">Rp <?= number_format($row['price'], 2) ?></td>
                        <td class="border px-4 py-2"><?= $row['stock'] ?></td>
                        <td class="border px-4 py-2">
                            <a href="edit.php?id=<?= $row['id'] ?>" class="text-blue-500">Edit</a> |
                            <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin ingin hapus?')" class="text-red-500">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>