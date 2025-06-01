<?php
include '../../config/database.php';

// pengecekan role
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit;
}

$id = $_GET['id'] ?? 0;
$error = "";

$stmt = $conn->prepare("SELECT * FROM products WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$product = $stmt->get_result()->fetch_assoc();

if (!$product) {
    die("Produk tidak ditemukan");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $category = trim($_POST["category"]);
    $price = floatval($_POST["price"]);
    $stock = intval($_POST["stock"]);

    if ($name && $category && $price && $stock >= 0) {
        $stmt = $conn->prepare("UPDATE products SET name=?, category=?, price=?, stock=? WHERE id=?");
        $stmt->bind_param("ssdii", $name, $category, $price, $stock, $id);
        $stmt->execute();
        header("Location: index.php");
        exit();
    } else {
        $error = "Semua field wajib diisi dengan benar.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Edit Produk</title>
</head>

<body class="bg-gray-100 p-8">
    <div class="max-w-md mx-auto bg-white p-6 rounded shadow">
        <h2 class="text-xl font-bold mb-4">Edit Produk</h2>
        <?php if ($error): ?>
            <div class="bg-red-100 text-red-700 p-2 mb-4 rounded"><?= $error ?></div>
        <?php endif; ?>
        <form method="POST" class="space-y-4">
            <div>
                <label class="block text-sm font-medium">Nama Produk</label>
                <input type="text" name="name" value="<?= htmlspecialchars($product['name']) ?>" class="w-full border p-2 rounded" />
            </div>
            <div>
                <label class="block text-sm font-medium">Kategori</label>
                <input type="text" name="category" value="<?= htmlspecialchars($product['category']) ?>" class="w-full border p-2 rounded" />
            </div>
            <div>
                <label class="block text-sm font-medium">Harga</label>
                <input type="number" step="0.01" name="price" value="<?= $product['price'] ?>" class="w-full border p-2 rounded" />
            </div>
            <div>
                <label class="block text-sm font-medium">Stok</label>
                <input type="number" name="stock" value="<?= $product['stock'] ?>" class="w-full border p-2 rounded" />
            </div>
            <div class="flex justify-between">
                <a href="index.php" class="text-gray-500">Kembali</a>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Simpan</button>
            </div>
        </form>
    </div>
</body>

</html>