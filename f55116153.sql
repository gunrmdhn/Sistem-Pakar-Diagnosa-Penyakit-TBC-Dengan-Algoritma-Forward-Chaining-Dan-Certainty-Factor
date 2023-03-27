-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Mar 2023 pada 06.02
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `f55116153`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_02_060336_create_kategoris_table', 1),
(6, '2022_07_02_104901_create_penyakits_table', 1),
(7, '2022_07_03_071409_create_gejalas_table', 1),
(8, '2022_07_04_092128_create_pasiens_table', 1),
(9, '2022_07_06_145922_create_bases_table', 1),
(10, '2022_08_05_182954_create_sessions_table', 2),
(11, '2022_08_05_193812_create_pohons_table', 3),
(12, '2022_08_06_113842_create_indikasis_table', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_basis`
--

CREATE TABLE `tabel_basis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_basis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penyakit_id` bigint(20) UNSIGNED NOT NULL,
  `gejala_id` bigint(20) UNSIGNED NOT NULL,
  `mb` double(8,2) NOT NULL,
  `md` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tabel_basis`
--

INSERT INTO `tabel_basis` (`id`, `kode_basis`, `penyakit_id`, `gejala_id`, `mb`, `md`, `created_at`, `updated_at`) VALUES
(1, 'B-001', 1, 1, 0.80, 0.00, '2022-08-05 05:28:40', '2022-08-05 05:29:28'),
(2, 'B-002', 1, 2, 0.90, 0.00, '2022-08-05 05:29:45', '2022-08-05 05:29:45'),
(3, 'B-003', 1, 3, 0.20, 0.00, '2022-08-05 05:29:55', '2022-08-05 05:29:55'),
(4, 'B-004', 1, 4, 0.90, 0.00, '2022-08-05 05:30:18', '2022-08-05 05:30:18'),
(5, 'B-005', 1, 5, 0.20, 0.00, '2022-08-05 05:30:35', '2022-08-05 05:30:35'),
(6, 'B-006', 1, 6, 0.20, 0.00, '2022-08-05 05:30:50', '2022-08-05 05:30:50'),
(7, 'B-007', 1, 7, 0.20, 0.00, '2022-08-05 05:31:07', '2022-08-05 05:31:07'),
(8, 'B-008', 1, 8, 0.20, 0.00, '2022-08-05 05:31:37', '2022-08-05 05:31:37'),
(9, 'B-009', 2, 3, 0.20, 0.00, '2022-08-05 05:38:11', '2022-08-05 05:38:11'),
(10, 'B-010', 2, 5, 0.20, 0.00, '2022-08-05 05:38:37', '2022-08-05 05:38:37'),
(11, 'B-011', 2, 6, 0.20, 0.00, '2022-08-05 05:38:56', '2022-08-05 05:38:56'),
(12, 'B-012', 2, 7, 0.20, 0.00, '2022-08-05 05:40:07', '2022-08-05 05:40:07'),
(13, 'B-013', 2, 9, 0.90, 0.00, '2022-08-05 05:40:26', '2022-08-05 05:40:26'),
(14, 'B-014', 2, 10, 0.50, 0.00, '2022-08-05 05:40:40', '2022-08-05 05:40:40'),
(15, 'B-015', 2, 11, 0.70, 0.00, '2022-08-05 05:40:57', '2022-08-05 05:40:57'),
(16, 'B-016', 2, 12, 0.70, 0.00, '2022-08-05 05:41:45', '2022-08-05 05:41:45'),
(17, 'B-017', 2, 13, 0.80, 0.00, '2022-08-05 05:42:04', '2022-08-05 05:42:04'),
(18, 'B-018', 2, 14, 0.80, 0.00, '2022-08-05 05:42:40', '2022-08-05 05:42:40'),
(19, 'B-019', 2, 15, 0.70, 0.00, '2022-08-05 05:42:54', '2022-08-05 05:42:54'),
(20, 'B-020', 3, 5, 0.20, 0.00, '2022-08-05 05:43:37', '2022-08-05 05:43:37'),
(21, 'B-021', 3, 6, 0.20, 0.00, '2022-08-05 05:43:54', '2022-08-05 05:43:54'),
(22, 'B-022', 3, 7, 0.20, 0.00, '2022-08-05 05:44:13', '2022-08-05 05:44:13'),
(23, 'B-023', 3, 8, 0.20, 0.00, '2022-08-05 05:44:44', '2022-08-05 05:44:44'),
(24, 'B-024', 3, 16, 0.90, 0.00, '2022-08-05 05:44:59', '2022-08-05 05:44:59'),
(25, 'B-025', 3, 17, 0.80, 0.00, '2022-08-05 05:45:14', '2022-08-05 05:45:14'),
(26, 'B-026', 3, 18, 0.80, 0.00, '2022-08-05 05:45:36', '2022-08-05 05:45:36'),
(27, 'B-027', 3, 19, 0.80, 0.00, '2022-08-05 05:45:56', '2022-08-05 05:45:56'),
(28, 'B-028', 3, 20, 0.50, 0.00, '2022-08-05 05:46:42', '2022-08-05 05:46:42'),
(29, 'B-029', 3, 21, 0.70, 0.00, '2022-08-05 05:46:56', '2022-08-05 05:46:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_gejala`
--

CREATE TABLE `tabel_gejala` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_gejala` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gejala` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `urutan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tabel_gejala`
--

INSERT INTO `tabel_gejala` (`id`, `kode_gejala`, `gejala`, `pertanyaan`, `urutan`, `kategori_id`, `created_at`, `updated_at`) VALUES
(1, 'G-001', 'Berlangsung lama', 'Apakah anda batuk terus menerus selama lebih dari tiga minggu?', '6', 2, '2022-08-04 22:54:35', '2022-08-05 06:49:57'),
(2, 'G-002', 'Dahak bercampur darah', 'Apakah dahak anda bercampur darah?', '7', 2, '2022-08-04 22:58:11', '2022-08-06 04:26:34'),
(3, 'G-003', 'Berlangsung lama', 'Apakah demam anda berlangsung lama?', '1', 3, '2022-08-04 23:02:42', '2022-08-04 23:02:42'),
(4, 'G-004', 'Sesak nafas', 'Apakah anda sesak dan nyeri pada bagian dada?', '8', 4, '2022-08-04 23:03:22', '2022-08-06 20:50:04'),
(5, 'G-005', 'Nafsu makan', 'Apakah anda mengalami penurunan nafsu makan?', '4', 5, '2022-08-04 23:03:55', '2022-08-05 06:49:12'),
(6, 'G-006', 'Berat badan', 'Apakah anda mengalami penurunan berat badan?', '3', 5, '2022-08-04 23:04:26', '2022-08-05 06:48:55'),
(7, 'G-007', 'Kurang enak badan', 'Apakah anda sering kali mengalami kurang enak badan?', '2', 7, '2022-08-04 23:06:15', '2022-08-05 06:48:41'),
(8, 'G-008', 'Berkeringat di malam hari', 'Apakah pada malam hari anda berkeringat walaupun tidak melakukan aktifitas?', '5', 8, '2022-08-04 23:06:52', '2022-08-05 06:49:40'),
(9, 'G-009', 'Munculnya benjolan pada bagian leher, sela paha, serta ketiak', 'Apakah anda merasakan munculnya benjolan pada bagian leher, sela paha, atau ketiak?', '9', 1, '2022-08-04 23:08:06', '2022-08-06 20:50:23'),
(10, 'G-010', 'Radang', 'Apakah anda merasakan nyeri di daerah sekitar benjolan?', '10', 1, '2022-08-04 23:09:17', '2022-08-07 02:39:27'),
(11, 'G-011', 'Kelenjar mudah digerakkan', 'Apakah benjolan yang anda rasakan muda digerakkan?', '11', 1, '2022-08-04 23:09:58', '2022-08-07 02:39:42'),
(12, 'G-012', 'Kelenjar timbul terasa kenyal', 'Apakah benjolan terasa kenyal?', '12', 1, '2022-08-04 23:10:32', '2022-08-07 02:39:55'),
(13, 'G-013', 'Membesarnya benjolan kelenjar yang bisa merusak tubuh', 'Apakah anda merasa benjolan makin hari makin membesar?', '13', 1, '2022-08-04 23:10:56', '2022-08-07 02:40:21'),
(14, 'G-014', 'Kelenjar pecah dan mengeluarkan cairan kotor', 'Saat kelenjar pecah apakah mengeluarkan cairan seperti nana?', '14', 1, '2022-08-04 23:11:45', '2022-08-07 02:40:35'),
(15, 'G-015', 'Luka pada jaringan kulit yang disebabkan pecahnya kelenjar getah bening', 'Apakah ada luka saat pecahnya benjolan?', '15', 1, '2022-08-04 23:12:12', '2022-08-07 02:40:51'),
(16, 'G-016', 'Nyeri', 'Apakah punggung anda terasa nyeri?', '16', 6, '2022-08-04 23:12:43', '2022-08-07 02:41:12'),
(17, 'G-017', 'Kekakuan', 'Apakah punggung anda terasa kaku?', '17', 6, '2022-08-04 23:13:54', '2022-08-07 03:20:51'),
(18, 'G-018', 'Enggan menggerakkan punggung', 'Apakah anda enggan menggerakkan punggung?', '18', 6, '2022-08-04 23:14:41', '2022-08-07 03:21:08'),
(19, 'G-019', 'Membungkuk', 'Apakah saat membungkuk punggung anda terasa sakit?', '19', 6, '2022-08-04 23:15:10', '2022-08-07 03:21:27'),
(20, 'G-020', 'Mengangkat barang dari lantai', 'Apakah punggung anda terasa sakit saat mengangkkat barang dari lantai?', '20', 6, '2022-08-04 23:15:54', '2022-08-07 03:22:16'),
(21, 'G-021', 'Nyeri berkurang saat istirahat', 'Apakah rasa nyeri pada punggung anda berkurang saat istirahat, walaupun hanya sebentar?', '21', 6, '2022-08-04 23:16:20', '2022-08-07 03:22:29'),
(22, 'G-022', 'Timbul benjolan', 'Apakah ada benjolan yang tumbuh pada bagian punggung anda?', '22', 6, '2022-08-04 23:37:09', '2022-08-16 05:11:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_indikasi`
--

CREATE TABLE `tabel_indikasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jawaban` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_kategori`
--

CREATE TABLE `tabel_kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tabel_kategori`
--

INSERT INTO `tabel_kategori` (`id`, `kode_kategori`, `kategori`, `created_at`, `updated_at`) VALUES
(1, 'K-001', 'Benjolan', '2022-08-04 22:50:12', '2022-08-04 22:50:12'),
(2, 'K-002', 'Batuk', '2022-08-04 22:50:19', '2022-08-04 22:50:19'),
(3, 'K-003', 'Demam', '2022-08-04 22:50:33', '2022-08-04 22:50:33'),
(4, 'K-004', 'Nyeri pada bagian dada', '2022-08-04 22:50:42', '2022-08-04 22:50:42'),
(5, 'K-005', 'Penurunan', '2022-08-04 22:50:48', '2022-08-04 22:50:48'),
(6, 'K-006', 'Punggung', '2022-08-04 22:50:55', '2022-08-04 22:50:55'),
(7, 'K-007', 'Rasa', '2022-08-04 22:51:06', '2022-08-04 22:51:06'),
(8, 'K-008', 'Tidak melakukan apa-apa', '2022-08-04 22:51:17', '2022-08-04 22:51:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_pasien`
--

CREATE TABLE `tabel_pasien` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_registrasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_registrasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pasien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `golongan_darah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `indikasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cf_persen` float DEFAULT NULL,
  `penyakit_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tabel_pasien`
--

INSERT INTO `tabel_pasien` (`id`, `kode_registrasi`, `tanggal_registrasi`, `nama_pasien`, `tanggal_lahir`, `usia`, `alamat`, `nomor_telepon`, `jenis_kelamin`, `golongan_darah`, `indikasi`, `cf_persen`, `penyakit_id`, `created_at`, `updated_at`) VALUES
(1, 'R-001', '2023-03-27', 'Gugun', '1999-12-15', '23', 'Ampibabo', '0822917791916', 'Laki-Laki', 'O', '[\"3\",\"7\",\"6\",\"5\",\"8\",\"1\",\"2\",\"4\"]', 90, 1, '2023-03-26 20:01:31', '2023-03-26 20:01:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_penyakit`
--

CREATE TABLE `tabel_penyakit` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_penyakit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penyakit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `solusi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tabel_penyakit`
--

INSERT INTO `tabel_penyakit` (`id`, `kode_penyakit`, `penyakit`, `solusi`, `created_at`, `updated_at`) VALUES
(1, 'P-001', 'Tuberkulosis Paru', 'Lakukan Rujukan ke Dokter Ahli Paru Dengan Indikasi Kategori Tuberkulosis Paru', '2022-08-04 23:24:48', '2022-10-04 06:43:45'),
(2, 'P-002', 'Tuberkulosis Kelenjar Getah Bening', 'Lakukan Rujukan ke Dokter Ahli Bedah Dengan Indikasi Kategori Tuberkulosis Kelenjar Getah Bening', '2022-08-04 23:25:24', '2022-10-04 06:44:13'),
(3, 'P-003', 'Tuberkulosis Tulang Belakang', 'Lakukan Rujukan ke Dokter Ahli Orthopedi atau Dokter Ahli Saraf Dengan Indikasi Kategori Tuberkulosis Tulang Belakang', '2022-08-04 23:25:48', '2022-10-04 06:45:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `peran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pengguna` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `peran`, `nama_pengguna`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Pakar', 'Pakar', '$2y$10$J21u2bKZdxaSft7tFtJDzeRmOkKloE2SUKYeKMC6QrDzZsdo6YfYu', '2023-03-26 19:58:53', '2023-03-26 19:58:53');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `tabel_basis`
--
ALTER TABLE `tabel_basis`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tabel_basis_kode_basis_unique` (`kode_basis`),
  ADD KEY `tabel_basis_penyakit_id_foreign` (`penyakit_id`),
  ADD KEY `tabel_basis_gejala_id_foreign` (`gejala_id`);

--
-- Indeks untuk tabel `tabel_gejala`
--
ALTER TABLE `tabel_gejala`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tabel_gejala_kode_gejala_unique` (`kode_gejala`),
  ADD KEY `tabel_gejala_kategori_id_foreign` (`kategori_id`);

--
-- Indeks untuk tabel `tabel_indikasi`
--
ALTER TABLE `tabel_indikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_kategori`
--
ALTER TABLE `tabel_kategori`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tabel_kategori_kode_kategori_unique` (`kode_kategori`);

--
-- Indeks untuk tabel `tabel_pasien`
--
ALTER TABLE `tabel_pasien`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tabel_pasien_kode_registrasi_unique` (`kode_registrasi`),
  ADD KEY `tabel_pasien_penyakit_id_foreign` (`penyakit_id`);

--
-- Indeks untuk tabel `tabel_penyakit`
--
ALTER TABLE `tabel_penyakit`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tabel_penyakit_kode_penyakit_unique` (`kode_penyakit`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`nama_pengguna`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabel_basis`
--
ALTER TABLE `tabel_basis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `tabel_gejala`
--
ALTER TABLE `tabel_gejala`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tabel_indikasi`
--
ALTER TABLE `tabel_indikasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabel_kategori`
--
ALTER TABLE `tabel_kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tabel_pasien`
--
ALTER TABLE `tabel_pasien`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tabel_penyakit`
--
ALTER TABLE `tabel_penyakit`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tabel_basis`
--
ALTER TABLE `tabel_basis`
  ADD CONSTRAINT `tabel_basis_gejala_id_foreign` FOREIGN KEY (`gejala_id`) REFERENCES `tabel_gejala` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tabel_basis_penyakit_id_foreign` FOREIGN KEY (`penyakit_id`) REFERENCES `tabel_penyakit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tabel_gejala`
--
ALTER TABLE `tabel_gejala`
  ADD CONSTRAINT `tabel_gejala_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `tabel_kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tabel_pasien`
--
ALTER TABLE `tabel_pasien`
  ADD CONSTRAINT `tabel_pasien_penyakit_id_foreign` FOREIGN KEY (`penyakit_id`) REFERENCES `tabel_penyakit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
