<?php
include '../../config/database.php';
$currentPage = basename(__FILE__); // Ini akan otomatis mengambil nama file: 'products.php', dll

session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.php");
    exit;
}

include(__DIR__ . '/../templates/headerAdmin.php');
include(__DIR__ . '/../templates/sidebar.php');

$query = "SELECT * FROM products ORDER BY created_at DESC";
$result = mysqli_query($conn, $query);
?>

<!-- Konten utama mulai di sini -->
<h1 class="text-2xl font-bold mb-4">Dashboard Produk</h1>
<a href="create.php" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">+ Tambah Produk</a>

<table class="w-full table-auto border-collapse bg-white shadow rounded">
    <thead>
        <tr class="bg-gray-100">
            <th class="border p-2">No.</th>
            <th class="border p-2">Nama Produk</th>
            <th class="border p-2">Harga</th>
            <th class="border p-2">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        while ($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td class="border p-2"><?= $no++ ?>.</td>
                <td class="border p-2"><?= htmlspecialchars($row['name']) ?></td>
                <td class="border p-2">Rp<?= number_format($row['price']) ?></td>
                <td class="border p-2">
                    <a href="edit.php?id=<?= $row['id'] ?>" class="text-yellow-600">Edit</a> |
                    <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Yakin?')" class="text-red-600">Hapus</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>

</main> <!-- TUTUP main -->
</div> <!-- TUTUP .flex-1 -->
</div> <!-- TUTUP .flex -->

<!-- Tambahkan JavaScript -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const sidebar = document.getElementById("sidebar");
        const toggleMobile = document.getElementById("toggleSidebar");
        const toggleDesktop = document.getElementById("toggleSidebarDesktop");

        if (toggleMobile) {
            toggleMobile.addEventListener("click", function() {
                sidebar.classList.toggle("hidden");
            });
        }

        if (toggleDesktop) {
            toggleDesktop.addEventListener("click", function() {
                sidebar.classList.toggle("collapsed");
            });
        }
    });
</script>

</body>

</html>