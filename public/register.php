<?php
session_start();
include '../config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Enkripsi password
    $role = mysqli_real_escape_string($conn, $_POST['role']); // Bisa 'admin' atau 'user'

    // Cek apakah email sudah terdaftar
    $checkQuery = "SELECT * FROM users WHERE email='$email'";
    $checkResult = mysqli_query($conn, $checkQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        $error = "Email sudah digunakan.";
    } else {
        $query = "INSERT INTO users (email, password, role) VALUES ('$email', '$password', '$role')";
        if (mysqli_query($conn, $query)) {
            $success = "Registrasi berhasil. Silakan login.";
        } else {
            $error = "Gagal mendaftar. Silakan coba lagi.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <form method="POST" class="max-w-sm mx-auto mt-12">
        <h2 class="text-xl font-bold mb-4">Register Akun</h2>

        <?php if (isset($error)): ?>
            <p class="text-red-600 mb-2"><?= $error ?></p>
        <?php elseif (isset($success)): ?>
            <p class="text-green-600 mb-2"><?= $success ?></p>
        <?php endif; ?>

        <input
            type="email"
            name="email"
            placeholder="Email"
            required
            class="border w-full px-3 py-2 mb-3">
        <input
            type="password"
            name="password"
            placeholder="Password"
            required
            class="border w-full px-3 py-2 mb-3">
        <select name="role" required class="border w-full px-3 py-2 mb-3">
            <option value="">-- Pilih Role --</option>
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select>

        <button class="bg-green-500 text-white px-4 py-2 rounded">Daftar</button>
        <p class="mt-4 text-sm text-center">Sudah punya akun? <a href="login.php" class="text-blue-600">Login di sini</a></p>
    </form>
</body>

</html>