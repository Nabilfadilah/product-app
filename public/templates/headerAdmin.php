<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        #sidebar.collapsed {
            width: 5rem;
        }

        #sidebar.collapsed .menu-label,
        #sidebar.collapsed .sidebar-title {
            display: none;
        }

        #sidebar .menu-label {
            transition: opacity 0.3s ease;
        }
    </style>
</head>

<body class="bg-gray-100">