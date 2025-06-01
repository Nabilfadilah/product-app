<?php
include(__DIR__ . '/templates/header.php');

session_start();
include '../config/database.php';

if (isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}

// login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    // Ambil user berdasarkan email saja
    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);

    // Verifikasi password
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['role'] = $user['role'];
        header('Location: ' . ($user['role'] === 'admin' ? 'dashboard/index.php' : 'products.php'));
        exit;
    } else {
        $error = "Email atau password salah!";
    }
}

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <form method="POST" class="max-w-sm mx-auto mt-12" autocomplete="on">
        <h2 class="text-xl font-bold mb-4">Login Admin</h2>
        <?php if (isset($error)): ?>
            <p class="text-red-600"><?= $error ?></p>
        <?php endif; ?>

        <input
            type="email"
            name="email"
            placeholder="Email"
            required
            autocomplete="email"
            class="border w-full px-3 py-2 mb-3">

        <input
            type="password"
            name="password"
            placeholder="Password"
            required
            autocomplete="current-password"
            class="border w-full px-3 py-2 mb-3">

        <button class="bg-blue-500 text-white px-4 py-2 rounded">Login</button>
        <p class="mt-4 text-sm text-center">Belum punya akun? <a href="register.php" class="text-blue-600">Register di sini</a></p>

    </form>
</body>