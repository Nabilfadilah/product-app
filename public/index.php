<?php
// include 'templates/header.php';
include(__DIR__ . '/templates/header.php');
?>

<!-- Hero Section -->
<section class="bg-gray-100 py-20">
    <div class="max-w-6xl mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">Selamat Datang di Percetakan Aliza</h1>
        <p class="text-gray-600 text-lg md:text-xl mb-6">Melayani berbagai kebutuhan cetak Anda dengan kualitas terbaik dan harga terjangkau.</p>
        <a href="products.php" class="bg-blue-600 text-white px-6 py-3 rounded-md text-lg hover:bg-blue-700 transition">Lihat Produk</a>
    </div>
</section>

<!-- About Section -->
<section class="bg-white py-16">
    <div class="max-w-6xl mx-auto px-4 grid md:grid-cols-2 gap-12 items-center">
        <img src="assets/images/bg2.jpg" alt="Tentang Kami" class="w-full rounded-lg shadow-md">
        <div>
            <h2 class="text-3xl font-semibold text-gray-800 mb-4">Tentang Percetakan Aliza</h2>
            <p class="text-gray-600 leading-relaxed mb-4">Percetakan Aliza merupakan usaha percetakan yang berdiri sejak 2020. Kami menyediakan layanan cetak seperti brosur, undangan, banner, stiker, dan lain-lain. Kualitas dan kepuasan pelanggan adalah prioritas kami.</p>
            <a href="about.php" class="text-blue-600 hover:underline font-medium">Baca selengkapnya</a>
        </div>
    </div>
</section>

<!-- Contact CTA -->
<section class="bg-blue-600 text-white py-16">
    <div class="max-w-4xl mx-auto text-center px-4">
        <h2 class="text-3xl font-bold mb-4">Butuh Bantuan atau Konsultasi Cetak?</h2>
        <p class="text-lg mb-6">Hubungi kami sekarang dan dapatkan penawaran terbaik untuk kebutuhan cetak Anda.</p>
        <a href="https://wa.me/6281234567890" target="_blank" class="bg-white text-blue-600 px-6 py-3 rounded-md font-semibold hover:bg-gray-100 transition">Hubungi via WhatsApp</a>
    </div>
</section>

<?php
// include 'templates/footer.php'; 
include(__DIR__ . '/templates/footer.php');
?>