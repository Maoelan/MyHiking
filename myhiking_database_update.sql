-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2022 at 12:42 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myhiking_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id_info` bigint(20) UNSIGNED NOT NULL,
  `pertanyaan` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id_info`, `pertanyaan`, `jawaban`, `created_at`, `updated_at`) VALUES
(1, '1. Mengapa harus mendaki gunung?', 'Memakai sepatu gunung, menggunakan pengikat kepala, memegang trekking pole, dan menggendong ransel besar, penampilan seperti ini yang sedang diikuti banyak orang. Bukankah di gunung istilahnya hanya menumpang tidur dengan suasana berbeda? Beralaskan matras, berlindung di dalam tenda, dan tidur melingkar di dalam sleeping bag. Lalu kamu menyalakan api unggun untuk memasak dan menghangatkan badan. Terlebih jika kamu ingin buang air besar atau air kecil, bukankah itu menyulitkanmu? Selebihnya, apa sebenarnya yang kamu dapatkan di sana?', '2022-11-25 16:32:40', '2022-11-25 16:32:40'),
(2, '2. Apa yang kamu cari di gunung?', 'Di gunung tak ada taman rekreasi, tak ada minimarket, mall, ataupun tempat nongkrong, jadi apa yang kamu cari? Bukankah di sana hanya ada hutan dan hamparan rumput, bahkan ada hewan buas?', '2022-11-25 16:34:02', '2022-11-25 16:34:02'),
(3, '3. Apa yang membuatmu begitu termotivasi dan antusias untuk selalu melakukan pendakian?', 'Apakah foto-foto yang berseliweran di sosial media membuatmu ingin menirunya? Jika motivasimu mendaki adalah melarikan diri dari permasalahan hidup dengan cara mendekatkan diri pada alam, lalu, setelah mencapai puncak dan berhasil turun, apakah kamu benar-benar bisa melupakan masalahmu?', '2022-11-25 16:34:14', '2022-11-25 16:34:14'),
(4, '4. Menaklukan berbagai puncak gunung, seperti apa rasanya?', 'Puncak tertinggi Jawa sudah berhasil kamu taklukkan, dan gunung-gunung di luar pulau berhasil kamu sambangi. Foto-fotomu di banyak gunung dipampang dengan jelas dengan caption ‘… MDPL. Kamu kapan ke sini?’', '2022-11-25 16:34:31', '2022-11-25 16:34:31'),
(5, '5. Apakah tiap pendakian harus mencapai puncak?', 'Apakah puncak harga mati bagimu? Saya tak pernah mendaki, tapi saya lihat pendakian sepertinya sangat melelahkan, apa itu sepadan dengan  yang kamu dapat di puncak?', '2022-11-25 16:34:46', '2022-11-25 16:34:46'),
(6, '6. Foto atau nyawa?', 'Bagimu, manakah yang lebih penting, berfoto di tempat-tempat berbahaya di gunung demi eksistensi diri di sosial media namun beresiko celaka, atau pulang dengan selamat meski hanya dengan foto-foto yang biasa saja?', '2022-11-25 16:34:58', '2022-11-25 16:34:58');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(21, '2014_10_12_000000_create_users_table', 1),
(22, '2014_10_12_100000_create_password_resets_table', 1),
(23, '2019_08_19_000000_create_failed_jobs_table', 1),
(24, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(25, '2022_11_25_141534_create_pegunungan', 1),
(26, '2022_11_25_182832_create_info', 1),
(27, '2022_11_25_192402_create_story', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pegunungan`
--

CREATE TABLE `pegunungan` (
  `id_gunung` bigint(20) UNSIGNED NOT NULL,
  `nama_gunung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `letak_gunung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ketinggian_gunung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_gunung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_gunung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `jalur_pendakian` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_pendakian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pegunungan`
--

INSERT INTO `pegunungan` (`id_gunung`, `nama_gunung`, `letak_gunung`, `ketinggian_gunung`, `jenis_gunung`, `foto_gunung`, `deskripsi`, `jalur_pendakian`, `level_pendakian`, `created_at`, `updated_at`) VALUES
(1, 'Gunung Prau', 'Kalilembu, Dieng, Wetan, Kabupaten Wonosobo, Jawa Tengah', '2.565 mdpl', 'Tidak Aktif', '20221125231923.png', 'Masih dari Jawa Tengah, ada satu lagi gunung yang sangat cocok untuk pendaki pemula, Gunung Prau. Terletak di Dataran Tinggi Dieng, tepatnya di Desa Patak Banteng, puncak Gunung Prau menawarkan hamparan lautan awan yang sudah siap untuk memanjakan mata dan menenangkan pikiran kita. Gunung yang tingginya mencapai 2.565 mdpl ini juga bisa menjadi tempat yang tepat bagi kamu yang ingin melihat cantiknya golden sunrise, lho.', 'Jalur Patak Banteng, Jalur Dwarawati, Jalur Dieng Wetan, Jalur Kalilembu, Jalur Wates, Jalur Igirmranak', 'Pemula', '2022-11-25 16:19:23', '2022-11-25 16:19:23'),
(2, 'Gunung Tambora', 'Semenanjung Sanggar, Sumbawa, Nusa Tenggara Barat', '2.850 mdpl', 'Aktif', '20221125232601.png', 'Gunung Tambora adalah sebuah gunung berapi kerucut aktif yang terletak di Pulau Sumbawa, Nusa Tenggara Barat, Indonesia. Gunung ini terletak di dua kabupaten yaitu Kabupaten Dompu yang mencakup lereng bagian barat dan selatan dan Kabupaten Bima yang mencakup lereng bagian timur dan utara.', 'Jalur Pancasila, Jalur Doro Ncanga, Jalur Oi Marai, Jalur Piong', 'Berpengalaman', '2022-11-25 16:26:01', '2022-11-25 16:26:01'),
(3, 'Gunung Rinjani', 'Sembalun Lawang, Sembalun, Lombok Timur, Nusa Tenggara Barat', '3.726 mdpl', 'Aktif', '20221125233144.png', 'Gunung Rinjani adalah gunung yang berlokasi di Pulau Lombok, Nusa Tenggara Barat. Gunung yang merupakan gunung berapi kedua tertinggi di Indonesia dengan ketinggian 3.726 mdpl serta terletak pada lintang 8º25\' LS dan 116º28\' BT ini merupakan gunung favorit bagi pendaki Indonesia karena keindahan pemandangannya.', 'Jalur Torean, Jalur Tetebatu, Jalur Senaru, Jalur Sembalun, Jalur Aik Berik', 'Berpengalaman', '2022-11-25 16:31:44', '2022-11-25 16:31:44');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `story`
--

CREATE TABLE `story` (
  `id_story` bigint(20) UNSIGNED NOT NULL,
  `judul_story` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_post` date NOT NULL,
  `foto_story` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_story` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `story`
--

INSERT INTO `story` (`id_story`, `judul_story`, `nama`, `tanggal_post`, `foto_story`, `post_story`, `created_at`, `updated_at`) VALUES
(1, 'Pengelaman Pertama Mendaki Gunung', 'Gede Pangrango', '2022-11-26', '20221125233833.png', 'Ini pengalaman pertamaku mendaku Gunung Pangrango via Cibodas. Saya sendiri adalah pegawai swasta dan belum pernah mendaki sebelumnya.Sebagai seorang suami, ayah dan pekerja kantoran berumur 38 tahun, mungkin sudah terlambat jika melakukan ini sebagai seorang pemula. Tetapi banyak pengelaman dan pelajaran yang saya dapat ketika mendaki gunung, lelah semuanya terbayar ketika sampai puncak.', '2022-11-25 16:38:33', '2022-11-25 16:38:33'),
(2, 'Pengelaman Luar Biasa Mendaki Gunung Seorang Diri', 'Faud Baasil', '2022-11-26', '20221125234120.png', 'Sendiri’ dalam Kamus Besar Bahasa Indonesia (KBBI) berarti : ‘tidak dengan orang lain, tidak dengan orang yang anda kenal sebelumnya.’\r\nSendiri itu sepi, menakutkan, dan membosankan. Iya memang, tetapi semua itu dapat dilawan.\r\nSekali-kali merdekalah. Saya telah mencobanya, ‘menyendiri’ dalam rentang waktu tertentu beberapa waktu lalu. Hasilnya tak sia-sia, Gunung Lawu menjadi saksi kesendirian saya yang mengasyikkan dan menjadi candu yang menyehatkan bagi jiwa raga saya.\r\nApa yang saya dapatkan saat mendaki sendiri? saat saya mendaki sendiri saya menemukan teman baru, merasa penemu \'benua baru\', wejangan berharga seorang bapak tua, sampai menemukan hikmah sejati saat mendaki.', '2022-11-25 16:41:20', '2022-11-25 16:41:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@email.com', NULL, '$2y$10$bnEHtw5/gMhsJle6hQTm5OYUbXUOfKjVFAb4cHkXCF1EO/ByJyoWC', NULL, 1, '2022-11-25 16:14:23', '2022-11-25 16:14:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pegunungan`
--
ALTER TABLE `pegunungan`
  ADD PRIMARY KEY (`id_gunung`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`id_story`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id_info` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `pegunungan`
--
ALTER TABLE `pegunungan`
  MODIFY `id_gunung` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `story`
--
ALTER TABLE `story`
  MODIFY `id_story` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
