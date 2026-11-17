-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 01, 2026 at 04:31 AM
-- Server version: 8.4.11
-- PHP Version: 8.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portofolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel-cache-5c785c036466adea360111aa28563bfd556b5fba', 'i:2;', 1793446651),
('laravel-cache-5c785c036466adea360111aa28563bfd556b5fba:timer', 'i:1793446651;', 1793446651);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `issuer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `credential_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` int UNSIGNED NOT NULL DEFAULT '0',
  `is_visible` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `title`, `issuer`, `year`, `image`, `description`, `credential_url`, `sort_order`, `is_visible`, `created_at`, `updated_at`) VALUES
(1, 'Introduction to Java', 'Sololearn', '2024', 'certificates/Sololearn.jpg', 'Successfully completed Java.', NULL, 1, 1, '2026-10-24 23:08:29', '2026-10-24 23:08:29'),
(2, 'Interactive Coding Course for Beginners: Learn CSS & HTML', 'BitDegree', '2023', 'certificates/BitDegree.jpg', 'Successfully completed CSS & HTML.', NULL, 2, 1, '2026-10-24 23:08:29', '2026-10-24 23:08:29');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `year` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` int UNSIGNED NOT NULL DEFAULT '0',
  `is_visible` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `title`, `subtitle`, `description`, `year`, `image`, `sort_order`, `is_visible`, `created_at`, `updated_at`) VALUES
(1, 'PROVOKS UB', 'Staff Sekertaris', 'Bergabung sebagai Staff Sekretaris di PROVOKS UB, mengurus administrasi dan kesekretariatan organisasi.', '2025', 'experience/Provoks.JPG', 1, 1, '2026-10-24 23:08:29', '2026-10-31 06:14:13'),
(2, 'KOMAKU', 'Staff Infokom', 'Bergabung sebagai Staff Infokom di KOMAKU, mengurus informasi dan komunikasi organisasi.', '2024', 'experience/KOMAKU.jpeg', 2, 1, '2026-10-24 23:08:29', '2026-10-31 06:14:13'),
(3, 'KMNU', 'Staff Media & Relation', 'Bergabung sebagai Staff Media & Relation di KMNU Universitas Brawijaya, mengurus media dan hubungan organisasi.', '2024', 'experience/KMNU.jpeg', 3, 1, '2026-10-24 23:08:29', '2026-10-31 06:14:13'),
(4, 'Olivia X UB', 'Participant', 'Berpartisipasi dalam Olivia X di Universitas Brawijaya.', '2025', 'experience/Olivia X UB.jpg', 4, 1, '2026-10-24 23:08:29', '2026-10-31 06:14:13'),
(5, 'Olivia XI Unesa', 'Participant', 'Berpartisipasi dalam Olivia XI di Universitas Negeri Surabaya dan menampilkan proyek kandang pintar.', '2026', 'experience/Olivia XI Unesa.jpeg', 5, 1, '2026-10-24 23:08:29', '2026-10-31 06:14:13'),
(6, 'PKM', 'Participant', 'Mengikuti Program Kreativitas Mahasiswa sebagai peserta.', '2026', 'experience/PKM.jpeg', 6, 1, '2026-10-24 23:08:29', '2026-10-31 06:14:13');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_07_07_040647_create_projects_table', 2),
(5, '2026_07_07_040745_create_certificates_table', 2),
(6, '2026_10_25_120000_create_settings_table', 2),
(7, '2026_10_25_120100_create_skills_table', 2),
(8, '2026_10_25_120200_create_experiences_table', 2),
(9, '2026_10_31_200000_add_description_to_projects_and_experiences', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `year` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` int UNSIGNED NOT NULL DEFAULT '0',
  `is_visible` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `subtitle`, `description`, `year`, `image`, `url`, `sort_order`, `is_visible`, `created_at`, `updated_at`) VALUES
(1, 'Wellnessplate', 'PHP . MySQL', 'Wellnessplate adalah platform untuk menemukan hidangan sehat sesuai kondisi pengguna, lengkap dengan resep dan artikel yang mudah diikuti.', '2025', 'projects/wellnessplate.png', NULL, 1, 1, '2026-10-24 23:08:29', '2026-10-31 06:14:13'),
(2, 'Warung Soto Vokasi', 'Laravel . MySQL', 'Warung Soto Vokasi adalah situs untuk menampilkan menu, testimoni, dan informasi Warung Soto Pak Sulung cabang Vokasi.', '2025', 'projects/Warung Soto Vokasi.png', NULL, 2, 1, '2026-10-24 23:08:29', '2026-10-31 06:14:13'),
(3, 'Buah AI', 'Laravel . Flask . MySQL', 'Buah AI mendeteksi kesegaran buah dari foto yang diunggah, lalu memberi tahu apakah buah itu masih segar atau tidak dalam hitungan detik.', '2025', 'projects/Buah AI.png', NULL, 3, 1, '2026-10-24 23:08:29', '2026-10-31 06:14:13'),
(4, 'KaloriQ', 'Flutter . Supabase', 'KaloriQ adalah aplikasi untuk menghitung kalori harian, membantu pengguna yang sedang diet atau bulking memantau asupan makanannya.', '2025', 'projects/kaloriQ.png', NULL, 4, 1, '2026-10-24 23:08:29', '2026-10-31 06:14:13'),
(5, 'SmartCane', 'Laravel . Flask . C++ . YOLO . MySQL', 'SmartCane adalah alat untuk membantu tunanetra berjalan lebih aman, dengan deteksi halangan di sekitar pengguna.', '2025', 'projects/Smart Cane.png', NULL, 5, 1, '2026-10-24 23:08:29', '2026-10-24 23:08:29'),
(6, 'SmartCoop', 'Laravel . Flask . C++ . YOLO . MySQL', 'SmartCoop adalah sistem kandang pintar untuk mengelola pakan, memantau suhu, dan mengontrol gerbang secara real-time.', '2026', 'projects/SmartCoop.png', NULL, 6, 1, '2026-10-24 23:08:29', '2026-10-31 06:14:13'),
(7, 'Cek Halal', 'Laravel . MySQL', 'Cek Halal adalah platform untuk memeriksa sertifikasi halal produk, supaya konsumen bisa memastikan status halal sebelum membeli.', '2026', 'projects/Cek Halal.png', NULL, 7, 1, '2026-10-24 23:08:29', '2026-10-31 06:14:13'),
(9, 'Indah Tracker', 'Next.js . MySQL', 'Indah Tracker adalah sistem lacak kirim untuk Indah Mesin. Pengguna memasukkan nomor tracking dan empat digit terakhir nomor telepon untuk memantau status pesanan.', '2026', 'uploads/projects/scOQIANt1GVBgoeLvzfb4JvHmaaixuv5EVBgHZ4d.png', 'https://tracker.indahmesin.com/track', 1, 1, '2026-10-24 23:24:39', '2026-10-31 06:14:13'),
(10, 'PWA(Progressive Web Apps)', 'Next.js . MySQL', 'PWA MesinBagus adalah aplikasi web yang bisa dipasang di ponsel untuk mencari mesin industri, seperti mesin seaming kaleng, konveyor, dan kemasan.', '2026', 'uploads/projects/rlUrsA9mNymRyu1GxGmLRqpVXzrl17ZyzZTubUp0.png', 'https://mesinbagus.com/beranda-artikel', 2, 1, '2026-10-24 23:28:04', '2026-10-31 06:14:13'),
(11, 'Wanderdesa', 'Flutter . Laravel . MySQL', 'Wanderdesa adalah aplikasi pengelolaan wisata desa. Staf masuk ke dashboard untuk mengatur data dan layanan destinasi.', '2026', 'uploads/projects/7x2onIZeOKOMimCkv2iMG2YFldWb3H7LMLQ6DXsB.png', NULL, 1, 1, '2026-10-25 12:56:44', '2026-10-31 06:14:13'),
(12, 'Rakku', 'Laravel . C++ . MySQL', 'Rakku adalah sistem pengelolaan rak toko. Staf memantau dan mengatur stok barang langsung dari dashboard.', '2026', 'uploads/projects/vMhxg9HksKdGGPjqmSD09cx7tdR1El7qIWdok1pt.png', NULL, 1, 1, '2026-10-25 13:05:33', '2026-10-31 06:14:13');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('aIC7dg2evBXXOqzdB6OxKDh9ShYRanYWMMvZw9hw', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/156.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoieFpRd2U5TlViMkVka29PWDhHdXJiaW5UQTV3eXJWRmRSZjhpa0xqMCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9wcm9maWxlIjtzOjU6InJvdXRlIjtzOjE4OiJhZG1pbi5wcm9maWxlLmVkaXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1793454869),
('dC6I0kIVYK7WRQ6F7UTTCCUGFj7o9PsMZs09ragg', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/3.14.27 Chrome/144.0.7559.236 Electron/40.10.3 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZUJiQ0FCRXV1T0RxN0x1aVduQXFkWDRZZUI4VmJFRFJyM2ZVRkV0TCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1793421745),
('EhmU4jeAasW43muPvx3Y5xe1DFr8UKEgj9W6rS8x', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/3.14.27 Chrome/144.0.7559.236 Electron/40.10.3 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoid0Z0VXRudlA0YUFiVGFWU2xNc0FxUjh3Rk9VOUJHaVZsc3UwUFFiQyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC8/dj1kZXNjIjtzOjU6InJvdXRlIjtzOjQ6ImhvbWUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1793452508),
('hyajxFAIMaHwYL6HLTnm77Isi3NBWUJ5qd0UxeBt', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/3.14.27 Chrome/144.0.7559.236 Electron/40.10.3 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZWlJOWl2TXJQbjI5dG5QUHp1SWJyV1FhNDVSMnppMWd0Yjlvc2h5MSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyNzoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2FkbWluIjt9fQ==', 1793423036),
('IzOMw1ioiI69aOe8UkFfXkO4mImVvoewO6kxoIGg', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/156.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoid1B3YWRWUXhwQ21jazVybzBJSnlkcXJDSWJRZ3BoaldCcmZDRjh5diI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1793423136),
('K9JogPuRFtbtTvDWJ47vLP2LXNsQRERyczEbReTb', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/3.14.27 Chrome/144.0.7559.236 Electron/40.10.3 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNXFkZndtbkZteHowWlljalQ5Ykx2MWl6MU1UYnpyQmNWcThwOGhXQiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1793421746),
('XMVfZu1qA6b1glFGRS0Z6rcCKnfxCyVlKTLuxg8T', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Cursor/3.14.27 Chrome/144.0.7559.236 Electron/40.10.3 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib04zODlka1Nhc2JlMUxJMnJsMGpYVmMwSHpWV2t0cnpqTDVleHA3eCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1793421747);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint UNSIGNED NOT NULL,
  `page_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `greeting` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cv_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caption_primary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caption_secondary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `page_title`, `brand_name`, `owner_name`, `greeting`, `roles`, `bio`, `photo`, `cv_path`, `caption_primary`, `caption_secondary`, `github`, `instagram`, `linkedin`, `whatsapp`, `email`, `footer_note`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Habib Masyhur | Portfolio', 'Babbibub', 'Muhammad Habib Masyhur', 'Hi! This is my', 'FULL STACK DEVELOPER • IOT ENGINEER • AI ENGINEER', 'An Information Technology student at Brawijaya University with a strong interest in <strong>Artificial Intelligence, the Internet of Things, and Full-Stack Web Development.</strong>\r\nPassionate about developing modern web applications using Laravel and building innovative, efficient, and user-centered digital solutions.', 'uploads/profile/cvMcbrnRlye35MTWQBY30zP94x0dwmWPDejtlU4E.png', 'cv/CV - Muhammad Habib Masyhur.pdf', 'Mahasiswa Teknologi Informasi', 'Universitas Brawijaya', 'https://github.com/kuncooroo', 'https://instagram.com/msyhrrr_', 'https://linkedin.com/in/muhammad-habib-masyhur', 'https://wa.me/6287785711752?text=Halo%20Habib,%20saya%20tertarik%20dengan%20portfolio%20Anda.', 'muhammadhabibmasyhur14@gmail.com', 'Built with Laravel & Tailwind CSS', '2026-10-24 23:08:28', '2026-10-31 05:19:37');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_order` int UNSIGNED NOT NULL DEFAULT '0',
  `is_visible` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `icon`, `category`, `sort_order`, `is_visible`, `created_at`, `updated_at`) VALUES
(1, 'Laravel', 'devicon-laravel-plain', 'web', 1, 1, '2026-10-24 23:08:28', '2026-10-24 23:08:28'),
(2, 'PHP', 'devicon-php-plain', 'web', 2, 1, '2026-10-24 23:08:28', '2026-10-24 23:08:28'),
(3, 'MySQL', 'devicon-mysql-plain', 'web', 3, 1, '2026-10-24 23:08:28', '2026-10-24 23:08:28'),
(4, 'Supabase', 'devicon-supabase-plain', 'web', 4, 1, '2026-10-24 23:08:28', '2026-10-24 23:08:28'),
(5, 'HTML5', 'devicon-html5-plain', 'web', 5, 1, '2026-10-24 23:08:28', '2026-10-24 23:08:28'),
(6, 'CSS3', 'devicon-css3-plain', 'web', 6, 1, '2026-10-24 23:08:28', '2026-10-24 23:08:28'),
(7, 'JavaScript', 'devicon-javascript-plain', 'web', 7, 1, '2026-10-24 23:08:28', '2026-10-24 23:08:28'),
(8, 'Tailwind CSS', 'devicon-tailwindcss-original', 'web', 8, 1, '2026-10-24 23:08:28', '2026-10-24 23:08:28'),
(9, 'Bootstrap', 'devicon-bootstrap-plain', 'web', 9, 1, '2026-10-24 23:08:29', '2026-10-24 23:08:29'),
(10, 'React', 'devicon-react-original', 'web', 10, 1, '2026-10-24 23:08:29', '2026-10-24 23:08:29'),
(11, 'Python', 'devicon-python-plain', 'ai', 11, 1, '2026-10-24 23:08:29', '2026-10-24 23:08:29'),
(12, 'Flask', 'devicon-flask-original', 'ai', 12, 1, '2026-10-24 23:08:29', '2026-10-24 23:08:29'),
(13, 'TensorFlow', 'devicon-tensorflow-original', 'ai', 13, 1, '2026-10-24 23:08:29', '2026-10-24 23:08:29'),
(14, 'OpenCV', 'devicon-opencv-plain', 'ai', 14, 1, '2026-10-24 23:08:29', '2026-10-24 23:08:29'),
(15, 'Arduino', 'devicon-arduino-plain', 'iot', 15, 1, '2026-10-24 23:08:29', '2026-10-24 23:08:29'),
(16, 'C++', 'devicon-cplusplus-plain', 'iot', 16, 1, '2026-10-24 23:08:29', '2026-10-24 23:08:29'),
(17, 'Flutter', 'devicon-flutter-plain', 'mobile', 17, 1, '2026-10-24 23:08:29', '2026-10-24 23:08:29'),
(18, 'Dart', 'devicon-dart-plain', 'mobile', 18, 1, '2026-10-24 23:08:29', '2026-10-24 23:08:29'),
(19, 'Android', 'devicon-android-plain', 'mobile', 19, 1, '2026-10-24 23:08:29', '2026-10-24 23:08:29'),
(20, 'Git', 'devicon-git-plain', 'tools', 20, 1, '2026-10-24 23:08:29', '2026-10-24 23:08:29'),
(21, 'GitHub', 'devicon-github-original', 'tools', 21, 1, '2026-10-24 23:08:29', '2026-10-24 23:08:29'),
(22, 'VS Code', 'devicon-vscode-plain', 'tools', 22, 1, '2026-10-24 23:08:29', '2026-10-24 23:08:29'),
(23, 'Figma', 'devicon-figma-plain', 'tools', 23, 1, '2026-10-24 23:08:29', '2026-10-24 23:08:29'),
(24, 'Canva', 'devicon-canva-original', 'tools', 24, 1, '2026-10-24 23:08:29', '2026-10-24 23:08:29'),
(25, 'Docker', 'devicon-docker-plain', 'tools', 25, 1, '2026-10-24 23:08:29', '2026-10-24 23:08:29'),
(26, 'Arduino IDE', 'devicon-arduino-plain', 'tools', 26, 1, '2026-10-24 23:08:29', '2026-10-24 23:08:29'),
(27, 'Postman', 'devicon-postman-plain', 'tools', 27, 1, '2026-10-24 23:08:29', '2026-10-24 23:08:29'),
(28, 'EX: 370', 'gaming.png', 'gaming', 28, 1, '2026-10-24 23:08:29', '2026-10-24 23:08:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Habib Masyhur', 'muhammadhabibmasyhur14@gmail.com', '2026-10-24 23:08:28', '$2y$12$tS8e56.UU1jS02X9IOuEC.O6Am/jJD.RbCktkxHOBUTND0wYUehA.', 'YiHL4PvOwtlQ5tODbRBGrV8VDDEodeXtvrvon0bdxqnWVNP1JbU0yv2xvbVt', '2026-10-24 23:08:28', '2026-10-24 23:08:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
