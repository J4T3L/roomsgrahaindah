<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Sidebar</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.1.1/css/boxicons.min.css">
</head>
<body>

    <!-- Tombol Toggle Sidebar di Sebelah Kanan -->
    <button id="toggleSidebar" class="toggle-btn">☰</button>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="logo_content">
            <div class="logo">
                <img src="/img/logo.jpg" width="30" height="30" class="img-thumbnail rounded-circle">
                <span class="logo_name">Graha Indah</span>
            </div>
            <!-- <i class='bx bx-menu' id="btn"></i> -->
        </div>

        <div class="src">
            <i class='bx bx-search-alt'></i>
            <input type="text" placeholder="Search..">
        </div>

        <ul class="nav">
            <li>
                <a href="/" class="{{ Request::is('home') ? 'active' : '' }}">
                    <i class='bx bxs-home-circle'></i>
                    <span class="link_name">Home</span>
                </a>
                <span class="tooltip">Home</span>
            </li>
            <li>
                <a href="/dashboard" class="{{ Request::is('dashboard') ? 'active' : '' }}">
                    <i class='bx bxs-dashboard'></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="/dashboard/keranjang" class="{{ Request::is('dashboard/keranjang*') ? 'active' : '' }}">
                    <i class='bx bxs-like bx-tada'></i>
                    <span class="link_name">Favorit</span>
                </a>
                <span class="tooltip">Favorit</span>
            </li>
            <li>
                <a href="/dashboard/pembayaran" class="{{ Request::is('dashboard/pembayaran*') ? 'active' : '' }}">
                    <i class='bx bx-dollar-circle'></i>
                    <span class="link_name">Pemesanan</span>
                </a>
                <span class="tooltip">Pemesanan</span>
            </li>
            <li>
                <a href="/dashboard/infosuser" class="{{ Request::is('dashboard/infosuser*') ? 'active' : '' }}">
                    <i class='bx bxs-info-square'></i>
                    <span class="link_name">Pemberitahuan</span>
                </a>
                <span class="tooltip">Pemberitahuan</span>
            </li>

            @can('pemilik')
            <li>
                <a href="/dashboard/posts" class="{{ Request::is('dashboard/posts*') ? 'active' : '' }}">
                    <i class='bx bxs-buildings'></i>
                    <span class="link_name">Kos</span>
                </a>
                <span class="tooltip">Kos</span>
            </li>
            @endcan

            @can('admin')
            <li>
                <a href="/dashboard/news" class="{{ Request::is('dashboard/news*') ? 'active' : '' }}">
                    <i class='bx bxl-blogger'></i>
                    <span class="link_name">Berita</span>
                </a>
                <span class="tooltip">Berita</span>
            </li>
            <li>
                <a href="/dashboard/infos" class="{{ Request::is('dashboard/infos*') ? 'active' : '' }}">
                    <i class='bx bxs-info-square'></i>
                    <span class="link_name">Semua Info</span>
                </a>
                <span class="tooltip">Semua Info</span>
            </li>
            @endcan

            @can('superadmin')
            <li>
                <a href="/dashboard/semuauser" class="{{ Request::is('dashboard/semuauser*') ? 'active' : '' }}">
                    <i class='bx bx-user'></i>
                    <span class="link_name">Semua User</span>
                </a>
                <span class="tooltip">Semua User</span>
            </li>
            @endcan
        </ul>
    </div>

    <script src="script.js"></script>
</body>
</html>
