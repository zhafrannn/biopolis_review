-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2023 at 11:20 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biopolis_propolis`
--

-- --------------------------------------------------------

--
-- Table structure for table `content_management_systems`
--

CREATE TABLE `content_management_systems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `content_management_systems`
--

INSERT INTO `content_management_systems` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'teks_judul_tentang_kami_1', 'Biopolis Propolis Kunci Menuju Kesehatan yang Kuat dan Berkelanjutan', NULL, '2023-11-15 09:41:21'),
(2, 'teks_sub_judul_tentang_kami_1', 'Biopolis merupakan solusi alami yang kuat dan efektif untuk meningkatkan daya tahan tubuh Anda secara signifikan.', NULL, '2023-11-15 09:41:21'),
(3, 'gambar_tentang_kami_1', 'img-hero.png', NULL, '2023-11-15 09:41:21'),
(4, 'angka_banner_rating_1', '4.9', NULL, '2023-11-15 10:11:15'),
(5, 'angka_banner_rating_2', '80JT+', NULL, '2023-11-15 10:11:15'),
(6, 'teks_banner_rating_1', '10K Rating', NULL, '2023-11-15 10:11:15'),
(7, 'teks_banner_rating_2', 'Total Terjual', NULL, '2023-11-15 10:11:15'),
(8, 'teks_banner_rating_3', 'Biopolis Telah dipercaya lebih dari 100+ pembeli di Indonesia sejak 2022', NULL, '2023-11-15 10:11:15'),
(9, 'gambar_banner_rating_1', 'guarantee.png', NULL, '2023-11-15 10:11:15'),
(10, 'gambar_banner_rating_2', 'best-seller.png', NULL, '2023-11-15 10:11:15'),
(11, 'gambar_banner_rating_3', 'premium-quality.png', NULL, '2023-11-15 10:11:15'),
(12, 'gambar_tentang_kami_2', 'promotion-babe-haikal.png', NULL, '2023-11-15 10:28:28'),
(13, 'teks_judul_tentang_kami_2', 'Sehat Dengan Biopolis', NULL, NULL),
(14, 'teks_sub_judul_tentang_kami_2', 'Biopolis Propolis adalah Zat Resin yang dihasilkan oleh Lebah dari bahan dasar yang diambil dari pucuk tumbuhan. Zat ini kaya akan kandungan Flavonoid yang sangat baik sebagai antioksidan, sehingga kerap dimanfaatkan untuk mengatasi beberapa masalah kesehatan.”', NULL, NULL),
(15, 'teks_judul_tentang_kami_3', 'Propolis Premium yang Terjamin', NULL, '2023-11-15 10:37:12'),
(16, 'teks_sub_judul_tentang_kami_3', 'Produk alami yang menggabungkan kekayaan propolis berkualitas tinggi dengan penelitian ilmiah terkini, menciptakan kunci menuju kesehatan yang kuat dan berkelanjutan bagi Anda. Anda dapat mengalami manfaat luar biasa dari propolis, yang telah terbukti meningkatkan daya tahan tubuh, melindungi tubuh dari infeksi, dan mendukung kesehatan umum.', NULL, '2023-11-15 10:37:12'),
(17, 'teks_judul_manfaat_1', 'Manfaat Biopolis untuk Kesehatan', NULL, '2023-11-15 12:49:21'),
(18, 'teks_sub_judul_manfaat_1', 'Satu ulasan dari Saudi Journal of Biological Science menunjukkan bahwa orang telah menggunakan senyawa ini sebagai obat sejak tahun 300 SM. Bahkan selama Perang Dunia II, senyawa ini digunakan untuk membantu penyembuhan luka. Menurut penelitian tersebut, manfaat senyawa ini datang dari beberapa sifatnya', NULL, '2023-11-16 15:15:07'),
(19, 'gambar_manfaat_1', 'manfaat-biopolis.png', NULL, '2023-11-15 12:49:21'),
(20, 'teks_judul_manfaat_2', 'Tinggi Antioksidan asd', NULL, '2023-11-16 15:15:07'),
(21, 'teks_sub_judul_manfaat_2', 'Satu ulasan dari Saudi Journal of Biological Science menunjukkan bahwa orang telah menggunakan senyawa ini sebagai obat sejak tahun 300 SM. Bahkan selama Perang Dunia II, senyawa ini digunakan untuk membantu penyembuhan luka. Menurut penelitian tersebut, manfaat senyawa ini datang dari beberapa sifatnya', NULL, NULL),
(22, 'teks_judul_manfaat_3', 'Proteksi Paru Paru', NULL, '2023-11-16 15:15:07'),
(23, 'teks_sub_judul_manfaat_3', 'Vape telah lama dikenal sebagai salah satu penyebab utama masalah kesehatan, termasuk masalah serius yang terkait dengan paru-paru. Merokok dapat merusak jaringan paru-paru, menyebabkan penyakit paru-paru kronis, dan bahkan meningkatkan risiko kanker paru-paru.', NULL, '2023-11-16 15:15:07'),
(24, 'teks_judul_kemitraan_1', 'Pendapatan Dari Penjualan', NULL, '2023-11-15 14:23:46'),
(25, 'teks_sub_judul_kemitraan_1', 'Ketika Bergabung Menjadi Mitra Bioplis, anda Akan mendapatkan Harga yang jauh lebih murah dan akan mendapatkan keuntungan yang signifikan ketika menjual langsung kepada End User', NULL, '2023-11-15 14:23:46'),
(26, 'teks_judul_kemitraan_2', 'Pendapatan Sebagai Afiliator', NULL, '2023-11-15 14:23:46'),
(27, 'teks_sub_judul_kemitraan_2', 'Ketika Bergabung Menjadi Mitra Bioplis, anda Berhak mendapatkan Rp 300.000 untuk setiap Mitra Baru yang menggunakan USER ID Anda sebagai Referral (Jumlah Mitra tidak terbatas)', NULL, '2023-11-15 14:23:46'),
(28, 'teks_judul_kemitraan_3', 'Bonus Uang dan Poin', NULL, '2023-11-15 14:23:46'),
(29, 'teks_sub_judul_kemitraan_3', 'Setiap Mitra / Afiliasi kita melakukan Repeat Order (RO) anda juga berhak mendapatkan Rp 100.000/ Paket Plus 5 Poin Setiap Paket.', NULL, '2023-11-15 14:23:46'),
(30, 'teks_judul_kemitraan_4', 'Kesempatan Umroh', NULL, '2023-11-15 14:23:46'),
(31, 'teks_sub_judul_kemitraan_4', 'Setiap Mitra berkesempatan untuk menukarkan Poin mereka dengan Uang Tunai, Kendaraan Bermotor atau Ibadah Umroh.', NULL, '2023-11-15 14:23:46'),
(32, 'teks_judul_kemitraan_5', 'Komunitas Pengusaha', NULL, '2023-11-15 14:23:46'),
(33, 'teks_sub_judul_kemitraan_5', 'Biopolis Rutin mengadakan Kajian kajian dakwah dan Pelatihan Kewirausahaan bersama pakar pakar tebaik dibidangnya', NULL, '2023-11-15 14:23:46'),
(34, 'teks_judul_kemitraan_6', 'Hadiah Uang dan Motor', NULL, '2023-11-15 14:23:46'),
(35, 'teks_sub_judul_kemitraan_6', 'Setiap mitra yang menjapau target poin bisa menukarkan poinnya menjadi uang atau kendaraan.', NULL, '2023-11-15 14:23:46'),
(36, 'gambar_kemitraan_1', 'umroh.png', NULL, '2023-11-15 14:23:46'),
(37, 'teks_judul_kemitraan_7', 'Pembayaran Aman', NULL, '2023-11-15 14:23:46'),
(38, 'teks_sub_judul_kemitraan_7', 'Menggunakan system payment gateway pembayaran jadi lebih mudah dan aman', NULL, '2023-11-15 14:23:46'),
(39, 'teks_judul_kemitraan_8', 'Garansi', NULL, '2023-11-15 14:23:46'),
(40, 'teks_sub_judul_kemitraan_8', 'Apabila terjadi kerusakan (pecah) pada produk, akan kami berikan garansi ganti baru', NULL, '2023-11-15 14:23:46'),
(41, 'teks_judul_kemitraan_9', '24/7 Siap Order', NULL, '2023-11-15 14:23:46'),
(42, 'teks_sub_judul_kemitraan_9', 'Di Jam berapapun kami siap menerima setiap orderan dan melayani Anda', NULL, '2023-11-15 14:23:46'),
(43, 'teks_nama_testimoni_1', 'Rudi ahong', NULL, NULL),
(44, 'teks_usia_testimoni_1', '45 Tahun', NULL, NULL),
(45, 'teks_testimoni_1', 'Saya seorang pekerja keras dan sering terpapara lingkungan yang tidak bersih. Sejak menggunakan Propolis Biopolis, saya merasakan lebih aman dari resiko infeksi. Ini adalah tambahan penting bagi rutinitas sehat saya', NULL, NULL),
(46, 'teks_nama_testimoni_2', 'Nina', NULL, NULL),
(47, 'teks_usia_testimoni_2', '30 Tahun', NULL, NULL),
(48, 'teks_testimoni_2', 'Saya selalu mencari cara alami untuk meningkatkan kekebalan tubuh, terutama selama musim flu. Propolis Biopolis adalah solusi yang sempurna. Rasanya enak dan memberi rasa ketenangan.', NULL, NULL),
(49, 'teks_nama_testimoni_3', 'Nina', NULL, NULL),
(50, 'teks_usia_testimoni_3', '30 Tahun', NULL, NULL),
(51, 'teks_testimoni_3', 'Saya selalu mencari cara alami untuk meningkatkan kekebalan tubuh, terutama selama musim flu. Propolis Biopolis adalah solusi yang sempurna. Rasanya enak dan memberi rasa ketenangan.', NULL, NULL),
(52, 'teks_judul_testimoni_1', 'Apa yang dimaksud dengan Biopolis Propolis?', NULL, NULL),
(53, 'teks_sub_judul_testimoni_1', 'Biopolis Propolis adalah produk alami yang menggabungkan kekayaan propolis berkualitas tinggi dengan penelitian ilmiah terkini untuk meningkatkan kesehatan dan daya tahan tubuh.', NULL, NULL),
(54, 'teks_judul_testimoni_2', 'Bagaimana cara menggunakan Biopolis Propolis?', NULL, NULL),
(55, 'teks_sub_judul_testimoni_2', 'Dianjurkan untuk mengonsumsi Biopolis Propolis sesuai dengan petunjuk dosis yang tertera pada kemasan produk. Biasanya, produk ini dapat diminum dengan air atau dicampur dengan minuman lain.', NULL, NULL),
(56, 'gambar_testimoni_1', 'umroh.png', NULL, NULL),
(57, 'teks_testimoni_4', 'Pesan Sekarang! Dan Nikmati Manfaat serta Keuntungannya!', NULL, NULL),
(58, 'teks_judul_kemitraan_10', 'Propolis Biopolis', NULL, NULL),
(59, 'teks_sub_judul_kemitraan_10', 'Dengan Modal Hanya Rp 1.950.000 anda sudah bisa menjadi Mitra Sekaligus Pengusaha dibidang Kesehatan dan berkesempatan untuk Umrah', NULL, NULL),
(60, 'teks_judul_kemitraan_11', 'Harga Khusus Mitra', NULL, NULL),
(61, 'teks_sub_judul_kemitraan_11_1', 'Rp 3.000.000', NULL, NULL),
(62, 'teks_sub_judul_kemitraan_11_2', 'Rp 1.950.000', NULL, NULL),
(63, 'teks_sub_judul_kemitraan_11_3', '12 Pcs Biopolis + Akun Kemitraan', NULL, NULL),
(64, 'gambar_kemitraan_2', 'img-hero.png', NULL, NULL),
(65, 'gambar_kemitraan_3', 'card-tick.svg', NULL, NULL),
(66, 'gambar_kemitraan_4', 'box-tick.svg', NULL, NULL),
(67, 'gambar_kemitraan_5', 'truck-time.svg', NULL, NULL),
(68, 'link_button_pdf', 'www.google.com', NULL, NULL),
(69, 'link_button_whatsapp', 'www.google.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_11_183409_create_user_biodatas_table', 1),
(6, '2023_11_11_204050_create_user_referals_table', 1),
(7, '2023_11_13_145637_create_products_table', 2),
(8, '2023_11_13_151114_create_user_payments_table', 3),
(11, '2023_11_14_004738_create_user_wallets_table', 4),
(12, '2023_11_14_133544_create_product_discounts_table', 5),
(14, '2023_11_15_201131_create_notifications_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'un_read',
  `redirect_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `description`, `status`, `redirect_url`, `created_at`, `updated_at`) VALUES
(1, 2, 'Kode Referalmu telah digunakan testinguser3', 'un_read', NULL, '2023-11-15 14:06:29', '2023-11-15 14:06:29'),
(2, 6, 'Selamat telah menjadi mitra biopolis propolis', 'un_read', NULL, '2023-11-15 14:06:29', '2023-11-15 14:06:29'),
(7, 2, 'Kamu mendapatkan 20 poin dan Rp.400,000 daritestinguser3', 'un_read', NULL, '2023-11-15 14:40:45', '2023-11-15 14:40:45'),
(8, 6, 'Kamu mendapatkan 60 dari pembelian produk', 'un_read', NULL, '2023-11-15 14:40:46', '2023-11-15 14:40:46'),
(9, 3, 'Kamu mendapatkan 10 poin dan Rp.200,000 dariZhafran Nouvaldi', 'un_read', NULL, '2023-11-16 01:58:39', '2023-11-16 01:58:39'),
(10, 5, 'Kamu mendapatkan 25 dari pembelian produk', 'un_read', NULL, '2023-11-16 01:58:39', '2023-11-16 01:58:39'),
(11, 3, 'Kode Referalmu telah digunakan testinguser4', 'un_read', NULL, '2023-11-16 02:03:44', '2023-11-16 02:03:44'),
(12, 7, 'Selamat telah menjadi mitra biopolis propolis', 'un_read', NULL, '2023-11-16 02:03:44', '2023-11-16 02:03:44'),
(13, 2, 'Kamu mendapatkan 10 poin dan Rp.200,000 dariSri Widdyandri', 'un_read', NULL, '2023-11-16 05:01:55', '2023-11-16 05:01:55'),
(14, 3, 'Kamu mendapatkan 25 dari pembelian produk', 'un_read', NULL, '2023-11-16 05:01:55', '2023-11-16 05:01:55'),
(15, 2, 'Kamu mendapatkan 20 poin dan Rp.400,000 dariSri Widdyandri', 'un_read', NULL, '2023-11-16 05:12:49', '2023-11-16 05:12:49'),
(16, 3, 'Kamu mendapatkan 60 dari pembelian produk', 'un_read', NULL, '2023-11-16 05:12:49', '2023-11-16 05:12:49');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_slug` varchar(255) NOT NULL,
  `point` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `weight` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_name`, `product_slug`, `point`, `price`, `stock`, `image`, `description`, `weight`, `created_at`, `updated_at`) VALUES
(1, 'P00', 'Product Register', 'product-register', 15, 1950000, NULL, 'product-register.png', '12 Botol Propolis Biopolis', 1000, NULL, NULL),
(2, 'P01', '1 Paket', '1-paket', 12, 1950000, NULL, 'paket-1.png', '12 Botol Biopolis Propolis + 12 Point', 1000, NULL, NULL),
(3, 'P02', '2 Paket', '2-paket', 25, 3900000, NULL, 'paket-2.png', '24 Botol Biopolis Propolis + 25 Point', 1000, NULL, NULL),
(4, 'P04', '4 Paket', '4-paket', 60, 7800000, NULL, 'paket-4.png', '48 Botol Biopolis Propolis + 60 Point', 2000, NULL, NULL),
(5, 'P06', '6 Paket', '6-paket', 80, 11700000, NULL, 'paket-6.png', '72 Botol Biopolis Propolis + 80 Point', 3000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_discounts`
--

CREATE TABLE `product_discounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `original_price` varchar(255) NOT NULL,
  `discount_price` varchar(255) NOT NULL,
  `percentage_price` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `kode_referal` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `kode_referal`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Deky Nurwianto', 'propolisbiopolis@gmail.com', NULL, '$2y$12$wB1JF5zf5p1XzKs1cUIx/u8kLlHIcAMF4A6ISvCZqQFEqTghRrIA2', 'user', '169WRMWM', NULL, '2023-11-13 08:45:34', '2023-11-13 08:45:34'),
(2, 'Hanggitya Raharjo', 'hanggityasri@gmail.com', NULL, '$2y$12$LwQLrFgUvuBeJJNaFeIUSe1DKvbNyRvjxTE.55dpGnKngIlEpDm4u', 'user', '169307AG', NULL, '2023-11-13 11:10:03', '2023-11-13 11:10:03'),
(3, 'Sri Widdyandri', 'hanggitya86@gmail.com', NULL, '$2y$12$BXDvUFJOkwmoVWDMLDkveOsQwahQsiXr05OcJpoQZ/q8wlS6Gu43W', 'member', '169DUXVR', NULL, '2023-11-13 17:08:53', '2023-11-14 02:13:43'),
(4, 'Fikry Nur Zaman', 'fikryn46@gmail.com', NULL, '$2y$12$V/4vXMOvRf3nVsEfZ2ib9.XfXIC1sU5zdUjqKnpamnwS.b0FUv35G', 'member', '169EPCSV', NULL, '2023-11-14 02:32:16', '2023-11-14 02:43:25'),
(5, 'Zhafran Nouvaldi', 'zhafran858@gmail.com', NULL, '$2y$12$2/NZuvFs/w8l7XmS4lNLUu2EHunRx8RinZMO.8ARaFYtxhgzl9WzW', 'member', '169EA4HH', NULL, '2023-11-14 02:52:42', '2023-11-14 02:53:20'),
(6, 'testinguser3', 'testinguser3@gmail.com', NULL, '$2y$12$Mk0DAChCsHhIT8qWOf0eoOhLF64LyLAIqEokxY4YociXoDbHpvciC', 'member', '170KTLOE', NULL, '2023-11-15 14:03:47', '2023-11-15 14:06:28'),
(7, 'testinguser4', 'testinguser4@gmail.com', NULL, '$2y$12$erd/KnTdVIYCJCTRa/JVRuqJNoUsFf4wlhjF9ZBEtDCrnN4tHrEvC', 'member', '170E8RUA', NULL, '2023-11-16 02:02:52', '2023-11-16 02:03:44');

-- --------------------------------------------------------

--
-- Table structure for table `user_biodatas`
--

CREATE TABLE `user_biodatas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nik` varchar(255) NOT NULL,
  `no_whatsapp` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `alamat_lengkap` text NOT NULL,
  `nama_bank` text NOT NULL,
  `no_rekening` varchar(255) NOT NULL,
  `nama_rekening` varchar(255) NOT NULL,
  `nama_kontak_darurat` varchar(255) NOT NULL,
  `nomor_kontak_darurat` varchar(255) NOT NULL,
  `referal_use` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_biodatas`
--

INSERT INTO `user_biodatas` (`id`, `user_id`, `nik`, `no_whatsapp`, `provinsi`, `kota`, `alamat_lengkap`, `nama_bank`, `no_rekening`, `nama_rekening`, `nama_kontak_darurat`, `nomor_kontak_darurat`, `referal_use`, `created_at`, `updated_at`) VALUES
(1, 1, '1234567890123456', '081123456789', '9-Jawa Barat', '22-Bandung', 'alamat lengkap', 'bca', '12341231231231', 'Deky Nurwianto', 'Nazarul Awal', '08112345677', 'ASDW123A', '2023-11-13 08:45:34', '2023-11-13 08:45:34'),
(2, 2, '1234567890123456', '081123456789', '9-Jawa Barat', '22-Bandung', 'alamat lengkap', 'bca', '12341231231231', 'asdasdasd', 'Nazarul Awal', '08112345677', '169WRMWM', '2023-11-13 11:10:03', '2023-11-13 11:10:03'),
(3, 3, '1234567890123456', '123123123123', '9-Jawa Barat', '440-Sumedang', 'sumedang', 'bca', '12341231231231', 'Sri Widdyandri', 'Hanggitya Raharjo', '08112345677', '169307AG', '2023-11-13 17:08:54', '2023-11-13 17:08:54'),
(4, 4, '1234567890123456', '081123456789', '9-Jawa Barat', '22-Bandung', 'Margahayu', 'bca', '12341231231231', 'Fikry Nur Zaman', 'Nazarul Awal', '08112345677', '169WRMWM', '2023-11-14 02:32:17', '2023-11-14 02:32:17'),
(5, 5, '090909090909', '080808080808', '9-Jawa Barat', '22-Bandung', 'alamat lengkap', 'bca', '12334556798', 'Jojo', 'Fikri', '080808080808', '169DUXVR', '2023-11-14 02:52:42', '2023-11-14 02:52:42'),
(6, 6, '1234567890123456', '081123456789', '9-Jawa Barat', '23-Bandung', 'alamat', 'mandiri', '12341231231231', 'testinguser3', 'Nazarul Awal', '08112345677', '169307AG', '2023-11-15 14:03:48', '2023-11-15 14:03:48'),
(7, 7, '1234567890123456', '123123123123', '9-Jawa Barat', '22-Bandung', 'alamat', 'bca', '12341231231231', 'testinguser4', 'Nazarul Awal', '08112345677', '169DUXVR', '2023-11-16 02:02:53', '2023-11-16 02:02:53');

-- --------------------------------------------------------

--
-- Table structure for table `user_payments`
--

CREATE TABLE `user_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `payment_code` varchar(255) NOT NULL,
  `total_payment` bigint(20) NOT NULL,
  `date` date NOT NULL,
  `valid_until` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `redirect_url` varchar(255) NOT NULL,
  `shipping_type` varchar(255) NOT NULL DEFAULT 'on_send',
  `shipping_courier` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_payments`
--

INSERT INTO `user_payments` (`id`, `user_id`, `product_id`, `payment_code`, `total_payment`, `date`, `valid_until`, `status`, `redirect_url`, `shipping_type`, `shipping_courier`, `created_at`, `updated_at`) VALUES
(3, 3, 1, 'P00-3-20231114-045605', 1962000, '2023-11-15', '2023-11-15 04:56:07', 'paid', 'https://checkout-staging.xendit.co/v2/6552fde673068679f40e1f71', 'on_send', 'jne', '2023-11-13 21:56:07', '2023-11-14 02:13:43'),
(4, 4, 1, 'P00-4-20231114-093245', 1950000, '2023-11-15', '2023-11-15 09:32:47', 'paid', 'https://checkout-staging.xendit.co/v2/65533ebe0e074b5bea8a67a3', 'on_location', NULL, '2023-11-14 02:32:47', '2023-11-14 02:43:25'),
(5, 5, 1, 'P00-5-20231114-095254', 1962000, '2023-11-15', '2023-11-15 09:52:57', 'paid', 'https://checkout-staging.xendit.co/v2/65534377645eaf2c5efd3d10', 'on_send', 'jne', '2023-11-14 02:52:57', '2023-11-14 02:53:20'),
(6, 3, 1, 'P00-3-20231114-163013', 1962000, '2023-11-15', '2023-11-15 16:30:19', 'pending', 'https://checkout-staging.xendit.co/v2/6553a099645eaf4300fda90d', 'on_send', 'jne', '2023-11-14 09:30:20', '2023-11-14 09:30:20'),
(7, 3, 4, 'P00-3-20231114-163225', 7812000, '2023-11-15', '2023-11-15 16:32:28', 'pending', 'https://checkout-staging.xendit.co/v2/6553a11b0e074b57088ad5dc', 'on_send', 'jne', '2023-11-14 09:32:28', '2023-11-14 09:32:28'),
(8, 3, 5, 'P00-3-20231114-165426', 11712000, '2023-11-15', '2023-11-15 16:54:29', 'pending', 'https://checkout-staging.xendit.co/v2/6553a644b99a0f6e3bffb19f', 'on_send', 'jne', '2023-11-14 09:54:29', '2023-11-14 09:54:29'),
(9, 3, 3, 'P02-3-20231114-165550', 3912000, '2023-11-15', '2023-11-15 16:55:52', 'pending', 'https://checkout-staging.xendit.co/v2/6553a698d7f394282da59444', 'on_send', 'jne', '2023-11-14 09:55:52', '2023-11-14 09:55:52'),
(10, 6, 1, 'P00-6-20231115-210402', 1950000, '2023-11-16', '2023-11-16 21:04:08', 'paid', 'https://checkout-staging.xendit.co/v2/65553246bf1b057e6a071377', 'on_location', NULL, '2023-11-15 14:04:08', '2023-11-15 14:06:31'),
(11, 6, 4, 'P04-6-20231115-210824', 7812000, '2023-11-16', '2023-11-16 21:08:26', 'paid', 'https://checkout-staging.xendit.co/v2/6555334b766da27fe692e761', 'on_send', 'jne', '2023-11-15 14:08:26', '2023-11-15 14:40:47'),
(12, 5, 3, 'P02-5-20231116-085729', 3912000, '2023-11-17', '2023-11-17 08:57:34', 'paid', 'https://checkout-staging.xendit.co/v2/6555d97d2b2f4e1eb72a16b9', 'on_send', 'jne', '2023-11-16 01:57:35', '2023-11-16 01:58:39'),
(13, 7, 1, 'P00-7-20231116-090302', 1962000, '2023-11-17', '2023-11-17 09:03:04', 'paid', 'https://checkout-staging.xendit.co/v2/6555dac873506c0c7263e0ea', 'on_send', 'jne', '2023-11-16 02:03:04', '2023-11-16 02:03:45'),
(14, 3, 3, 'P02-3-20231116-120034', 3912000, '2023-11-17', '2023-11-17 12:00:37', 'paid', 'https://checkout-staging.xendit.co/v2/65560465ba45500dd3d6e5c3', 'on_send', 'jne', '2023-11-16 05:00:37', '2023-11-16 05:01:55'),
(15, 3, 4, 'P04-3-20231116-121220', 7812000, '2023-11-17', '2023-11-17 12:12:23', 'paid', 'https://checkout-staging.xendit.co/v2/65560727d6fe4f6d3336ef26', 'on_send', 'jne', '2023-11-16 05:12:23', '2023-11-16 05:12:49');

-- --------------------------------------------------------

--
-- Table structure for table `user_referals`
--

CREATE TABLE `user_referals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_target_id` bigint(20) UNSIGNED NOT NULL,
  `kode_referal` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_wallets`
--

CREATE TABLE `user_wallets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `current_point` bigint(20) NOT NULL DEFAULT 0,
  `current_balance` bigint(20) NOT NULL DEFAULT 0,
  `total_point` bigint(20) NOT NULL DEFAULT 0,
  `total_refferal` bigint(20) NOT NULL DEFAULT 0,
  `total_balance` bigint(20) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_wallets`
--

INSERT INTO `user_wallets` (`id`, `user_id`, `current_point`, `current_balance`, `total_point`, `total_refferal`, `total_balance`, `created_at`, `updated_at`) VALUES
(1, 2, 80, 1600000, 80, 2, 1600000, NULL, '2023-11-16 05:12:49'),
(4, 3, 125, 800000, 125, 2, 800000, '2023-11-14 02:13:43', '2023-11-16 05:12:49'),
(5, 1, 15, 300000, 15, 1, 300000, NULL, '2023-11-14 02:43:25'),
(6, 4, 0, 0, 0, 0, 0, '2023-11-14 02:43:25', '2023-11-14 02:43:25'),
(7, 5, 25, 0, 25, 0, 0, '2023-11-14 02:53:20', '2023-11-16 01:58:39'),
(8, 6, 60, 0, 60, 0, 0, '2023-11-15 14:06:26', '2023-11-15 14:40:45'),
(9, 7, 0, 0, 0, 0, 0, '2023-11-16 02:03:42', '2023-11-16 02:03:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content_management_systems`
--
ALTER TABLE `content_management_systems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_discounts`
--
ALTER TABLE `product_discounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_biodatas`
--
ALTER TABLE `user_biodatas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_payments`
--
ALTER TABLE `user_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_referals`
--
ALTER TABLE `user_referals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_wallets`
--
ALTER TABLE `user_wallets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `content_management_systems`
--
ALTER TABLE `content_management_systems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_discounts`
--
ALTER TABLE `product_discounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_biodatas`
--
ALTER TABLE `user_biodatas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_payments`
--
ALTER TABLE `user_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_referals`
--
ALTER TABLE `user_referals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_wallets`
--
ALTER TABLE `user_wallets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
