-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Agu 2022 pada 10.55
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indonesia_culture`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `author` varchar(40) NOT NULL,
  `slug` varchar(120) NOT NULL,
  `image` varchar(120) NOT NULL,
  `content` text NOT NULL,
  `draft` enum('true','false') NOT NULL DEFAULT 'true',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `article`
--

INSERT INTO `article` (`id`, `title`, `author`, `slug`, `image`, `content`, `draft`, `created_at`, `kategori`) VALUES
(20, 'Rambu solo', 'dika', '', '', '', 'false', '2022-08-21 13:07:50', 'Sulawesi'),
(24, 'Festival cai di raga', 'Asep', '', 'https://pelakubisnis.com/wp-content/uploads/2018/12/foto-laput-5-foto-1-e1544013332824.jpg', 'Pakaian jenis Batik berasal dari zaman nenek moyang yang dikenal sejak abad XVII yang ditulis dan dilukis pada daun lontar. Saat itu motif atau pola batik masih didominasi dengan bentuk binatang dan tanaman. Kesenian batik mulai meluas dan menjadi milik rakyat Indonesia dan khususnya suku Jawa setelah akhir abad ke-XVIII atau awal abad ke-XIX. Pemakaian busana adat Jawa yang bernama batik dalam tradisi Jawa memiliki dua fungsi yaitu fungsi religius dan fungsi sosial. Sebagai fungsi religius Batik merupakan busana resmi keagamaan. Upacara keagamaan kesultanan menampilkan para sultan sebagai sosok pemimpin agama sekaligus menampilkan fungsi batik sebagai pakaian keagamaan, misalnya dalam upacara grebeg.', 'true', '2022-08-24 01:30:17', 'Jawa'),
(25, 'batik', 'dika', '', '', '', 'false', '2022-08-25 01:12:38', 'jawa'),
(28, 'test 1', 'dika', '', '', 'HANYA TEST', 'true', '2022-08-25 01:51:48', 'kalimantan'),
(35, 'test dlu', '', '', '', 'test bali', 'false', '2022-08-25 02:40:30', 'bali');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(40) NOT NULL,
  `gambar_kategori` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `gambar_kategori`) VALUES
(111, 'Sumatra', 0),
(112, 'Jawa', 0),
(113, 'Kalimantan', 0),
(114, 'Sulawesi', 0),
(115, 'Papua', 0),
(121, 'Bali', 0),
(122, 'nusa', 0),
(123, 'Maluku', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(130) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(130) NOT NULL,
  `password` varchar(280) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(3, 'administrator', 'administator@gmail.com', '', '$2y$10$B0Tp9jQDRwIBlVZsFuBA3ORlpnNuj.xu75Twd0gFB1915scwPA9kW', 1, 1, 1659633315),
(4, 'Dika Aryana', 'dikaaryana6@gmail.com', '', '$2y$10$AQyK3r/5uvdgdxcLed4Tzedu.3AZmfA2nkiSfoYf24zFW1bgH0F8q', 2, 1, 1659440088),
(5, 'Dikoy', 'dikoy@gmail.com', 'default.jpg', '$2y$10$5Fv9Y39UcB.LuhSpPEr5COicJh/d/V5n1VfXzaym7i4Om.JopiwPW', 2, 1, 1659633273),
(7, 'alfa', 'alfamidi@gmail.com', 'default.jpg', '$2y$10$HOoAmw8q9W83n8hSppAseOu3nXuZi.h1xttQFvLVddMdliRZVfiPG', 2, 1, 1661060152);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'admin'),
(2, 'user'),
(3, 'Menu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(120) NOT NULL,
  `url` varchar(120) NOT NULL,
  `icon` varchar(120) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My profile', 'user', 'fas fa-user', 1),
(4, 2, 'article', 'User/articles/list_article', 'fas fa-pen', 1),
(5, 2, 'edit profile', 'user/editprofile', 'fas fa-fw fa-user-edit', 1),
(6, 3, 'Menu Management', 'menu', 'fas fa-fw  fa-folder', 1),
(7, 3, 'Sub Menu', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(12, 0, 'nyydua', 'nlam', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
