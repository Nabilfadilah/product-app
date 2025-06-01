<?php
include '../config/database.php';
// include 'templates/header.php';
include(__DIR__ . '/templates/header.php');

// Query data dari tabel produk
$query = "SELECT * FROM products ORDER BY created_at DESC";
$result = mysqli_query($conn, $query);
?>

<section class="max-w-6xl mx-auto px-4 py-12">
    <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">Daftar Produk</h1>

    <div class="grid md:grid-cols-3 gap-6">
        <?php if (mysqli_num_rows($result) > 0): ?>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <!-- <img src="assets/images/<?= $row['gambar'] ?>" alt="<?= $row['name'] ?>" class="w-full h-48 object-cover"> -->
                    <div class="p-4">
                        <h2 class="text-xl font-semibold text-gray-800"><?= htmlspecialchars($row['name']) ?></h2>
                        <p class="text-gray-600 text-sm mt-2 mb-4"><?= htmlspecialchars($row['category']) ?></p>
                        <p class="text-blue-600 font-bold text-lg mb-2">Rp<?= number_format($row['price'], 0, ',', '.') ?></p>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p class="text-center col-span-3 text-gray-600">Belum ada produk tersedia.</p>
        <?php endif; ?>
    </div>
</section>

<?php
// include 'templates/footer.php'; 
include(__DIR__ . '/templates/footer.php');
?>