-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jan 2023 pada 08.27
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticket`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id_admin` bigint(20) UNSIGNED NOT NULL,
  `posisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`id_admin`, `posisi`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita_informasis`
--

CREATE TABLE `berita_informasis` (
  `id_beritainformasi` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statusbi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` bigint(20) UNSIGNED NOT NULL,
  `fasilitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `fasilitas`, `created_at`, `updated_at`) VALUES
(1, 'Masjid', NULL, NULL),
(2, 'Toilet Umum', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas_wisatas`
--

CREATE TABLE `fasilitas_wisatas` (
  `id_fw` bigint(20) UNSIGNED NOT NULL,
  `id_wisata` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_fasilitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `fasilitas_wisatas`
--

INSERT INTO `fasilitas_wisatas` (`id_fw`, `id_wisata`, `id_fasilitas`, `created_at`, `updated_at`) VALUES
(1, '1', '1', NULL, NULL),
(2, '1', '2', NULL, NULL),
(5, '2', '2', NULL, NULL),
(6, '2', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `feedback`
--

CREATE TABLE `feedback` (
  `id_feedback` bigint(20) UNSIGNED NOT NULL,
  `id_pengguna` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_pesan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `balas_pesan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_pesan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `feedback`
--

INSERT INTO `feedback` (`id_feedback`, `id_pengguna`, `isi_pesan`, `balas_pesan`, `status_pesan`, `created_at`, `updated_at`) VALUES
(1, '3', 'Hai', 'Hai juga', 'read', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `fotowisatas`
--

CREATE TABLE `fotowisatas` (
  `id_fotow` bigint(20) UNSIGNED NOT NULL,
  `id_wisata` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fotowisata` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `fotowisatas`
--

INSERT INTO `fotowisatas` (`id_fotow`, `id_wisata`, `fotowisata`, `created_at`, `updated_at`) VALUES
(1, '1', 'Sari Ater Hotel & Resort0.png', NULL, NULL),
(2, '1', 'Sari Ater Hotel & Resort1.png', NULL, NULL),
(3, '1', 'Sari Ater Hotel & Resort2.png', NULL, NULL),
(4, '1', 'Sari Ater Hotel & Resort3.png', NULL, NULL),
(5, '1', 'Sari Ater Hotel & Resort4.png', NULL, NULL),
(6, '1', 'Sari Ater Hotel & Resort5.jpg', NULL, NULL),
(7, '1', 'Sari Ater Hotel & Resort6.jpg', NULL, NULL),
(8, '1', 'Sari Ater Hotel & Resort7.png', NULL, NULL),
(9, '1', 'Sari Ater Hotel & Resort8.png', NULL, NULL),
(10, '1', 'Sari Ater Hotel & Resort9.jpg', NULL, NULL),
(11, '1', 'Sari Ater Hotel & Resort10.png', NULL, NULL),
(12, '1', 'Sari Ater Hotel & Resort11.jpg', NULL, NULL),
(13, '1', 'Sari Ater Hotel & Resort12.png', NULL, NULL),
(14, '2', 'G hotel0.png', NULL, NULL),
(15, '2', 'G hotel1.png', NULL, NULL),
(16, '2', 'G hotel2.png', NULL, NULL),
(17, '2', 'G hotel3.png', NULL, NULL),
(18, '2', 'G hotel4.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hbalances`
--

CREATE TABLE `hbalances` (
  `id_balance` bigint(20) UNSIGNED NOT NULL,
  `id_mitra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jadwal_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `hbalance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buktibalance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `hbalances`
--

INSERT INTO `hbalances` (`id_balance`, `id_mitra`, `jadwal_pembayaran`, `tanggal_pembayaran`, `hbalance`, `buktibalance`, `created_at`, `updated_at`) VALUES
(1, '2', 'Minggu Ke-2, January 2023', '2023-01-07', '10000', 'sariater-2023-01-07.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jam_bukas`
--

CREATE TABLE `jam_bukas` (
  `id_buka` bigint(20) UNSIGNED NOT NULL,
  `id_wisata` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hari` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_buka` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_tutup` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jam_bukas`
--

INSERT INTO `jam_bukas` (`id_buka`, `id_wisata`, `hari`, `jam_buka`, `jam_tutup`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '00:00', '00:00', NULL, NULL),
(2, '1', '2', '00:00', '00:00', NULL, NULL),
(3, '1', '3', '00:00', '00:00', NULL, NULL),
(4, '1', '4', '00:00', '00:00', NULL, NULL),
(5, '1', '5', '00:00', '00:00', NULL, NULL),
(6, '1', '6', '00:00', '00:00', NULL, NULL),
(7, '1', '7', '00:00', '00:00', NULL, NULL),
(8, '2', '1', '00:00', '00:00', NULL, NULL),
(9, '2', '2', '00:00', '00:00', NULL, NULL),
(10, '2', '3', '00:00', '00:00', NULL, NULL),
(11, '2', '4', '00:00', '00:00', NULL, NULL),
(12, '2', '5', '00:00', '00:00', NULL, NULL),
(13, '2', '6', '00:00', '00:00', NULL, NULL),
(14, '2', '7', '00:00', '00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategoris`
--

CREATE TABLE `kategoris` (
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategoris`
--

INSERT INTO `kategoris` (`id_kategori`, `kategori`, `created_at`, `updated_at`) VALUES
(1, 'Wisata Alam', NULL, NULL),
(2, 'Hotel', NULL, NULL);

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
(5, '2023_01_02_040740_create_kategoris_table', 1),
(6, '2023_01_02_041144_create_admins_table', 1),
(7, '2023_01_02_041405_create_mitras_table', 1),
(8, '2023_01_02_041618_create_penggunas_table', 1),
(9, '2023_01_02_042405_create_petugas_table', 1),
(10, '2023_01_02_064022_create_fasilitas_table', 1),
(11, '2023_01_02_064441_create_berita_informasis_table', 1),
(12, '2023_01_02_065134_create_wisatas_table', 1),
(13, '2023_01_02_073146_create_fasilitas_wisatas_table', 1),
(14, '2023_01_02_074434_create_jam_bukas_table', 1),
(15, '2023_01_02_075719_create_pakets_table', 1),
(16, '2023_01_03_021542_create_fotowisatas_table', 1),
(17, '2023_01_03_021818_create_ratings_table', 1),
(18, '2023_01_03_022203_create_tikets_table', 1),
(19, '2023_01_03_023048_create_pemesanans_table', 1),
(20, '2023_01_03_023334_create_pembayarans_table', 1),
(21, '2023_01_03_024111_create_pesan_masifs_table', 1),
(22, '2023_01_03_024305_create_feedback_table', 1),
(23, '2023_01_05_021136_create_hbalances_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mitras`
--

CREATE TABLE `mitras` (
  `id_mitra` bigint(20) UNSIGNED NOT NULL,
  `deskripsi_mitra` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `balance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mitras`
--

INSERT INTO `mitras` (`id_mitra`, `deskripsi_mitra`, `balance`, `created_at`, `updated_at`) VALUES
(2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pakets`
--

CREATE TABLE `pakets` (
  `id_paket` bigint(20) UNSIGNED NOT NULL,
  `paket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_wisata` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fitur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_wday` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_wend` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pakets`
--

INSERT INTO `pakets` (`id_paket`, `paket`, `id_wisata`, `fitur`, `harga_wday`, `harga_wend`, `created_at`, `updated_at`) VALUES
(1, 'Paket Akhir Tahun', '1', 'Pelampung+Naik Kuda+Makan Siang', '50000', '75000', NULL, NULL),
(2, 'Paket A', '2', 'Kamar+Wifi', '500000', '1000000', NULL, NULL),
(3, 'Paket B', '2', 'Wifi', '50000', '100000', NULL, NULL);

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
-- Struktur dari tabel `pembayarans`
--

CREATE TABLE `pembayarans` (
  `id_pembayaran` bigint(20) UNSIGNED NOT NULL,
  `id_pengguna` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_paket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanans`
--

CREATE TABLE `pemesanans` (
  `id_pemesanan` bigint(20) UNSIGNED NOT NULL,
  `id_paket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu_kunjungan` date NOT NULL,
  `atas_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penggunas`
--

CREATE TABLE `penggunas` (
  `id_pengguna` bigint(20) UNSIGNED NOT NULL,
  `tanggal_lahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penggunas`
--

INSERT INTO `penggunas` (`id_pengguna`, `tanggal_lahir`, `created_at`, `updated_at`) VALUES
(3, NULL, NULL, NULL);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan_masifs`
--

CREATE TABLE `pesan_masifs` (
  `id_masif` bigint(20) UNSIGNED NOT NULL,
  `id_pengguna` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_paket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu_kunjungan` date NOT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pesan_masifs`
--

INSERT INTO `pesan_masifs` (`id_masif`, `id_pengguna`, `nik`, `id_paket`, `waktu_kunjungan`, `qty`, `harga`, `stat`, `created_at`, `updated_at`) VALUES
(1, '3', '3216212412010004', '1', '2023-01-14', '1', '75000', 'process', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` bigint(20) UNSIGNED NOT NULL,
  `id_mitra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ratings`
--

CREATE TABLE `ratings` (
  `id_rate` bigint(20) UNSIGNED NOT NULL,
  `id_wisata` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_pengguna` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ulasan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `balasan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tikets`
--

CREATE TABLE `tikets` (
  `kode_tiket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `atas_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_pengguna` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu_kunjungan` date NOT NULL,
  `id_paket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bukti` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tikets`
--

INSERT INTO `tikets` (`kode_tiket`, `atas_nama`, `whatsapp`, `id_pengguna`, `qty`, `status`, `waktu_kunjungan`, `id_paket`, `id_user`, `harga`, `bukti`, `created_at`, `updated_at`) VALUES
('1', 'Aji', '81286216470', '3', '1', 'refund', '2023-01-01', '1', '3', '10000', '1.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kontak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `kontak`, `foto`, `level`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin@gmail.com', 'superadmin', '081286216470', 'default.jpg', 'admin', 'active', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL),
(2, 'Sari Ater Corp', 'mitra@gmail.com', 'sariater', '82249025353', 'mitra@gmail.com.jpg', 'mitra', 'active', NULL, '$2y$10$nDFyMWwyReq2qIYSu0Z.PebNyEPKmxwudrUYLgDi1XDBuQplsiuua', NULL, NULL, NULL),
(3, 'Aji Santoso', 'bagaas86@gmail.com', 'ajisantoso', '82249025353', 'ajisantoso@gmail.com.jpg', 'pengguna', 'active', NULL, '$2y$10$NC//HmXuFwjl1whpeaSwCOJga.5Y1Ll2fWDkNE1rx1ObiMgltuKcW', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisatas`
--

CREATE TABLE `wisatas` (
  `id_wisata` bigint(20) UNSIGNED NOT NULL,
  `wisata` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_mitra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `wisatas`
--

INSERT INTO `wisatas` (`id_wisata`, `wisata`, `id_kategori`, `lokasi`, `deskripsi`, `id_mitra`, `created_at`, `updated_at`) VALUES
(1, 'Sari Ater Hotel & Resort', '1', 'Jl Subang-Lembang', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2', NULL, NULL),
(2, 'Hoter Baru', '2', 'Subang', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `berita_informasis`
--
ALTER TABLE `berita_informasis`
  ADD PRIMARY KEY (`id_beritainformasi`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indeks untuk tabel `fasilitas_wisatas`
--
ALTER TABLE `fasilitas_wisatas`
  ADD PRIMARY KEY (`id_fw`);

--
-- Indeks untuk tabel `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`);

--
-- Indeks untuk tabel `fotowisatas`
--
ALTER TABLE `fotowisatas`
  ADD PRIMARY KEY (`id_fotow`);

--
-- Indeks untuk tabel `hbalances`
--
ALTER TABLE `hbalances`
  ADD PRIMARY KEY (`id_balance`);

--
-- Indeks untuk tabel `jam_bukas`
--
ALTER TABLE `jam_bukas`
  ADD PRIMARY KEY (`id_buka`);

--
-- Indeks untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mitras`
--
ALTER TABLE `mitras`
  ADD PRIMARY KEY (`id_mitra`);

--
-- Indeks untuk tabel `pakets`
--
ALTER TABLE `pakets`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pembayarans`
--
ALTER TABLE `pembayarans`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `pemesanans`
--
ALTER TABLE `pemesanans`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indeks untuk tabel `penggunas`
--
ALTER TABLE `penggunas`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `pesan_masifs`
--
ALTER TABLE `pesan_masifs`
  ADD PRIMARY KEY (`id_masif`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id_rate`);

--
-- Indeks untuk tabel `tikets`
--
ALTER TABLE `tikets`
  ADD PRIMARY KEY (`kode_tiket`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- Indeks untuk tabel `wisatas`
--
ALTER TABLE `wisatas`
  ADD PRIMARY KEY (`id_wisata`),
  ADD UNIQUE KEY `wisatas_wisata_unique` (`wisata`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admins`
--
ALTER TABLE `admins`
  MODIFY `id_admin` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `berita_informasis`
--
ALTER TABLE `berita_informasis`
  MODIFY `id_beritainformasi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `fasilitas_wisatas`
--
ALTER TABLE `fasilitas_wisatas`
  MODIFY `id_fw` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `fotowisatas`
--
ALTER TABLE `fotowisatas`
  MODIFY `id_fotow` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `hbalances`
--
ALTER TABLE `hbalances`
  MODIFY `id_balance` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `jam_bukas`
--
ALTER TABLE `jam_bukas`
  MODIFY `id_buka` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id_kategori` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `mitras`
--
ALTER TABLE `mitras`
  MODIFY `id_mitra` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pakets`
--
ALTER TABLE `pakets`
  MODIFY `id_paket` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pembayarans`
--
ALTER TABLE `pembayarans`
  MODIFY `id_pembayaran` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pemesanans`
--
ALTER TABLE `pemesanans`
  MODIFY `id_pemesanan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `penggunas`
--
ALTER TABLE `penggunas`
  MODIFY `id_pengguna` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pesan_masifs`
--
ALTER TABLE `pesan_masifs`
  MODIFY `id_masif` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id_rate` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `wisatas`
--
ALTER TABLE `wisatas`
  MODIFY `id_wisata` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
