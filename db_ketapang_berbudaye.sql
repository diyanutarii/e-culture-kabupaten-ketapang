-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Sep 2024 pada 16.08
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ketapang_berbudaye`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `acara`
--

CREATE TABLE `acara` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `acara`
--

INSERT INTO `acara` (`id`, `gambar`, `nama`, `tanggal`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'images/acara/acara1.jpg', 'Napak Tilas Ketapang 2024', '2024-10-31', 'Napak Tilas merupakan kilas balik dalam mengenang kembali perjuangan masyarakat Tumbang Titi karena ketidaksetujuan terhadap pungutan Pajak/Blasting oleh pemerintah Kolonial Hindia Belanda. Perjuangan tersebut dipelopori oleh tiga tokoh pejuang, antara lain Uti Usman, Panglima Tentemak dan Kenduruhan Bajir.', '2024-08-11 13:42:51', '2024-08-11 13:42:51'),
(2, 'storage/acara/Robo-Robo-[1723385527].png', 'Robo-Robo', '2024-08-28', 'Tradisi Robo-Robo sendiri merupakan kegiatan masyarakat khususnya warga Kabupaten Ketapang yang rutin dilaksanakan setiap tahunnya dibulan safar dalam penanggalan Hijriah (arab) dengan cara mengadakan selamatan serta berdoa bersama.\r\nDengan Semangat Robo Robo, mari kita lestarikan nilai kearifan lokal sebagai aset budaya bangsa, melalui acara ini, kita rekatkan silaturahmi, kita bangun dan jaga keragaman budaya serta kita pelihara kearifan lokal seiring kemajuan Kabupaten Ketapang. Selain itu, Pesta Seni Budaya Robo Robo ini juga sebagai khazanah budaya yang turut mensukseskan pariwisata di Kabupaten Ketapang.', '2024-08-11 14:12:07', '2024-08-11 14:12:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL DEFAULT '$2y$12$s5PuMba9f3mUN.XbR/9v3ORY6Mwj4PvDVp/8jHj/uC6Y2o6yTae3a',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `foto`, `nama`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'storage/admin/dianutari989@gmail.com-[1724849331].png', 'Dian Utari', 'dianutari989@gmail.com', '$2y$12$HsIld5Px/lVL37sycpIs1ugrnprvKk0em.yub.N.NMvu.mYVAt9.m', '2024-08-11 13:42:51', '2024-08-28 12:48:52'),
(2, NULL, 'Super Admin', 'superadmin@gmail.com', '$2y$12$fAAvbwcoYNdPNxlfkXoekOOp7HvFGcf9JwGyK9K9rWZZQYrPhwGnS', '2024-08-11 13:42:51', '2024-08-11 13:42:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuliner`
--

CREATE TABLE `kuliner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `category_id` varchar(255) DEFAULT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `tags` longtext DEFAULT NULL,
  `konten` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kuliner`
--

INSERT INTO `kuliner` (`id`, `gambar`, `category_id`, `judul`, `slug`, `tags`, `konten`, `created_at`, `updated_at`) VALUES
(2, 'storage/pustaka/-[1723817795].jpeg', NULL, 'Ale-Ale', NULL, NULL, 'Salah satu makanan khas Ketapang, Kalimantan Barat ini juga memiliki cita rasa yang lezat yakni ale-ale. Makanan yang identik dengan kerang laut asli Ketapang ini hanya bisa ditemukan di Ketapang, Kalimantan Barat, lho!\r\n\r\nJenis kerang ini seperti remis, bercangkang keras dan licin serta bagian dalamnya berwarna putih bersih. Nggak hanya itu, saking ikoniknya ale-ale juga menjadi tugu di Ketapang, Kalimantan Barat. Makanan ale-ale ini dapat diolah dengan cara ditumis, di buat sambal, dan lain-lain. Ale-ale akan terasa lebih nikmat dihidangkan dalam keadaan panas ditambah lagi makan rame-rame bersama keluarga tercinta.', '2024-08-16 14:16:35', '2024-08-16 14:16:35'),
(4, 'storage/pustaka/-[1724049665].jpe', NULL, 'Amplang Khas Ketapang', NULL, NULL, 'Kabupaten Ketapang merupakan salah satu daerah kunjungan wisata di Kalimantan Barat. Sebagai daerah kunjungan wisata, \'Bumi Kayong\' tidak hanya memiliki keindahan dan pesona objek wisatanya saja yang molek dan menawan, melainkan juga  kekhasan dari makanan daerahnya yaitu kerupuk amplang  yang dapat dijadikan sebagai buah tangan bagi wisatawan yang berkunjung. Kerupuk amplang adalah makanan ringan yang merupakan hasil karya dari sebuah industri kecil rumah tangga (home industry) masyarakat Ketapang.', '2024-08-19 06:40:40', '2024-08-28 12:49:27'),
(5, 'storage/kuliner/-[1726623650].jpg', NULL, 'Bubor Pedas, Bubur Hijau Khas Kalimantan Barat', NULL, NULL, 'Saat pertama kali mendengar makanan yang satu ini, banyak orang yang mungkin akan menyangka bahwa bubur jenis ini memiliki rasa pedas. Padahal tidak demikian. Istilah “paddas” atau pedas sendiri adalah perumpamaan dari suku Melayu Sambas, Kalimantan Barat, yang berarti beragam sayuran dan rempah yang terdapat di dalam bubur. Rasa pedasnya yang berasal dari bumbu merica dan cabe merah juga tidak berlebihan. Bubor pedas merupakan kuliner khas masyarakat Melayu Sambas yang berdiam di wilayah pesisir pantai utara Kalimantan Barat. Anda bisa menemukan bubur ini di setiap sudut kota Sambas. Mulai dari kantin-kantin sekolah, pasar tradisional, bahkan di restoran berbintang. Melansir dari laman resmi indonesia.go.id, bubor pedas kuliner khas Sambas dulunya berasal dari suku Melayu dari wilayah Pontianak, Singkawang, dan sekitarnya. Pada awalnya, bubur ini hanya dimasak dan disajikan ketika ada acara kerajaan atau upacara adat yang bersifat sakral. Namun, ketika terjadi perang dan stok bahan makanan di Sambas menipis, bubor pedas yang menjadi simbol semangat Bhinneka Tunggal Ika ini dibuat oleh masyarakat sebagai salah satu cara untuk berhemat dan dapat dinikmati oleh seluruh anggota keluarga. Tidak seperti bubur-bubur di kota lain yang dimasak hingga lembut, bubor pedas dibuat dengan cara menumbuk beras hingga halus, lalu dioseng dan dicampur berbagai sayur-sayuran seperti kangkung, daun kesum, dan daun pakis, yang dimasukkan secara bersamaan saat bubur dimasak. Bubor pedas ini biasa disajikan dengan ikan teri goreng lengkap dengan kacang tanah sebagai topping yang sering dihidangkan sebagai menu berbuka di bulan Ramadan. Hal ini dikarenakan bubor pedas yang dibuat dari beras tumbuk, kelapa parut, berbagai sayuran, serta ubi merah, diyakini dapat mengembalikan stamina setelah berpuasa selama 14 jam dengan cepat.', '2024-09-18 01:40:50', '2024-09-18 01:40:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `legenda`
--

CREATE TABLE `legenda` (
  `id` bigint(20) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `category_id` varchar(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `tags` longtext DEFAULT NULL,
  `konten` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `legenda`
--

INSERT INTO `legenda` (`id`, `gambar`, `category_id`, `judul`, `slug`, `tags`, `konten`, `created_at`, `updated_at`) VALUES
(1, 'storage/pustaka/-[1723644607].jpg', NULL, 'Misteri Padang 12', NULL, NULL, 'Padang 12 terletak di antara Kecamatan Kendawangan dan Pesaguan. Bagi masyarakat Ketapang dan Kalimantan Barat, wilayah tersebut dikenal sebagai \'Kota Gaib\' yang konon dihuni bangsa jin muslim.\r\nMengutip dari beberapa sumber, tempat ini sebenarnya hanya merupakan area tanah kosong dengan luas sekitar 12 kilometer. Kawasan Padang 12 ini juga dipenuhi pasir dan ditumbuhi pohon pinus dan ilalang tinggi.\r\nKonon, Padang 12 merupakan kota yang indah dan mewah serta memiliki penduduk yang sangat sejahtera dan modern. Tentunya, hal tersebut hanya bisa disaksikan oleh mereka yang mampu melihat dengan mata batin.\r\nMenurut warga lokal, Padang 12 hanya bisa dilihat oleh orang-orang yang berhati bersih, suci, serta jauh dari kesombongan dan ketamakan. Namun, ada pula yang berpendapat sebaliknya.\r\nJika seseorang melewati Padang 12 dengan sikap sombong atau berbuat jahat di daerah tersebut, maka kemungkinan besar ia akan melihat pemandangan aneh dan menyeramkan. Tak jarang, mereka juga akan \'diganggu\' oleh para penghuni Padang 12 yang tak terlihat.\r\nKonon, kota gaib ini sudah ada sejak zaman nenek moyang. Bahkan, banyak cerita legenda tentang orang-orang yang melihat atau bertemu dengan penduduk Padang 12. Mereka menyebut penduduk Kota Padang 12 sebagai orang \'Limun\' atau orang kebeneran.\r\nMasih menurut cerita penduduk, penghuni Padang 12 seluruhnya memiliki hunian dan kendaraan mewah. Bahkan, mereka memiliki kendaraan, seperti Ferrari, Rolls Royce, dan motor gede Harley Davidson. Beberapa juga menyebutkan, penduduk Padang 12 sudah memiliki pesawat pribadi dan kapal pesiar.\r\nTerkait wujudnya, bagi beberapa yang sudah pernah melihat akan mengatakan penduduk Padang 12 memiliki wujud fisik layaknya manusia biasa. Hanya saja, mereka tidak memiliki belahan di antara hidung dan di atas bibir.\r\nKota Padang 12 juga disebut sebagai kota yang sangat maju, bersih, indah, dan super mewah. Ada beberapa orang yang percaya bahwa orang Limun merupakan keturunan malaikat Harut dan Marut yang berada di bumi, meski sampai saat ini tidak bisa dibuktikan kebenarannya. Beberapa orang beranggapan orang Limun merupakan kalangan jin muslim yang sudah ada sejak ribuan tahun silam dan menguasai wilayah tersebut.\r\n\r\n Sumber: Liputan6', '2024-08-14 14:10:07', '2024-08-14 14:12:18'),
(3, 'storage/legenda/-[1726623552].jpg', NULL, 'Cerita Rakyat Kalimantan Barat: Legenda Batu Menangis', NULL, NULL, 'Alkisah di atas sebuah bukit, jauh dari pemukiman penduduk di Kalimantan Barat, hiduplah ibu bersama anak perempuannya. Suaminya sudah lama meninggal tanpa mewariskan harta berarti. Kehidupan menjanda di umur cukup tua tak meninggalkan ibu banyak pilihan. Ia tak mungkin menikah lagi, jadi ibu harus berusaha sendiri untuk menghidupi anak perempuan kesayangannya, Darmi. Setiap hari ibu bekerja keras. Mengurus kebun sayur sejak pagi buta: menanam bibit, menyiram, memberi pupuk, menyiangi semak, memanen, dan menjual hasil panen ke pasar. Belum lagi mengurus anak yang masih kecil, juga mencari kayu bakar untuk memasak. Kulit ibu yang awalnya cerah, lama-lama menggelap karena terpapar sinar matahari. Berat badannya menyusut, ibu tak memiliki waktu untuk mengurus dirinya sendiri. Harapan ibu, Darmi bisa hidup bahagia, tak seperti dirinya. Maka Darmi pun dimanja; penuh kasih sayang. Darmi tumbuh menjadi gadis cantik! Kulitnya kuning langsat, tubuh semampai, paras memesona, dan rambutnya hitam legam panjang terurai. Darmi juga selalu mengenakan baju indah dan aksesori mentereng. Berbeda dari ibu yang sudah lama tak membeli barang untuk diri sendiri. Ia sudah tua, pikirnya. Tak memerlukan lagi semua hal itu. Tapi Darmi masih muda dan suka bergaul. Darmi pun selalu senang jika dibelikan baju baru, aksesori, dan alat berhias. Lama kelamaan, hanya benda-benda itu yang ada di benaknya. Darmi senang sekali bercermin sambil menyisir rambutnya. Ia sadar, kalau dirinya sangat cantik. Tapi hanya itu pula yang Darmi lakukan. Mengagumi diri sendiri sepanjang hari, saat ibu bekerja keras di kebun. Suatu hari ibu lupa mengantar pesanan sayur ke pelanggannya di desa. Ibu meminta tolong Darmi untuk memasak. Tapi saat pulang, ternyata Darmi masih bersolek. Jangankan memasak, kamarnya pun masih berantakan seperti saat ibu tinggalkan. Saat ditanya, Darmi malah geram, karena ibu mengganggunya berdandan dan meninggalkannya kelaparan. Akhirnya ibu juga yang membuat makanan, kemudian membereskan kamar Darmi. Darmi makin keenakan, untuk mengambil segelas air saja harus memanggil ibu. Tak pernah sekalipun Darmi mengerjakan pekerjaan rumah, apalagi berpanas-panasan di kebun sayur atau mengantar dagangan ke pasar di kaki bukit. Tapi saat menginginkan sesuatu, Darmi akan merengek hingga mendapatkan keinginannya. Jika ibu tidak punya uang, Darmi marah besar! Mengatakan ia kesal dilahirkan di keluarga miskin. Hal ini membuat ibu sedih, dan sering kali menguras uang tabungannya. Bagaimanapun, Darmi adalah satu-satunya cinta ibu, anaknya tersayang yang ia besarkan sendiri dari kecil.', '2024-09-18 01:39:12', '2024-09-18 01:39:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2024_03_26_133922_create_admin_table', 1),
(2, '2024_05_10_222150_create_acara_table', 1),
(3, '2024_05_10_222240_create_warisan_budaya_tak_benda_table', 1),
(4, '2024_05_10_222241_create_situs_cagar_budaya_table', 1),
(5, '2024_05_10_222254_create_pustaka_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pustaka`
--

CREATE TABLE `pustaka` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `category_id` varchar(255) DEFAULT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `tags` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`tags`)),
  `konten` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pustaka`
--

INSERT INTO `pustaka` (`id`, `gambar`, `category_id`, `judul`, `slug`, `tags`, `konten`, `created_at`, `updated_at`) VALUES
(1, 'images/pustaka/pustaka1.jpg', NULL, 'Cerita Rakyat Kalimantan Barat: Legenda Batu Menangis', NULL, NULL, 'Alkisah di atas sebuah bukit, jauh dari pemukiman penduduk di Kalimantan Barat, hiduplah ibu bersama anak perempuannya. Suaminya sudah lama meninggal tanpa mewariskan harta berarti. Kehidupan menjanda di umur cukup tua tak meninggalkan ibu banyak pilihan. Ia tak mungkin menikah lagi, jadi ibu harus berusaha sendiri untuk menghidupi anak perempuan kesayangannya, Darmi. Setiap hari ibu bekerja keras. Mengurus kebun sayur sejak pagi buta: menanam bibit, menyiram, memberi pupuk, menyiangi semak, memanen, dan menjual hasil panen ke pasar. Belum lagi mengurus anak yang masih kecil, juga mencari kayu bakar untuk memasak. Kulit ibu yang awalnya cerah, lama-lama menggelap karena terpapar sinar matahari. Berat badannya menyusut, ibu tak memiliki waktu untuk mengurus dirinya sendiri. Harapan ibu, Darmi bisa hidup bahagia, tak seperti dirinya. Maka Darmi pun dimanja; penuh kasih sayang. Darmi tumbuh menjadi gadis cantik! Kulitnya kuning langsat, tubuh semampai, paras memesona, dan rambutnya hitam legam panjang terurai. Darmi juga selalu mengenakan baju indah dan aksesori mentereng. Berbeda dari ibu yang sudah lama tak membeli barang untuk diri sendiri. Ia sudah tua, pikirnya. Tak memerlukan lagi semua hal itu. Tapi Darmi masih muda dan suka bergaul. Darmi pun selalu senang jika dibelikan baju baru, aksesori, dan alat berhias. Lama kelamaan, hanya benda-benda itu yang ada di benaknya. Darmi senang sekali bercermin sambil menyisir rambutnya. Ia sadar, kalau dirinya sangat cantik. Tapi hanya itu pula yang Darmi lakukan. Mengagumi diri sendiri sepanjang hari, saat ibu bekerja keras di kebun. Suatu hari ibu lupa mengantar pesanan sayur ke pelanggannya di desa. Ibu meminta tolong Darmi untuk memasak. Tapi saat pulang, ternyata Darmi masih bersolek. Jangankan memasak, kamarnya pun masih berantakan seperti saat ibu tinggalkan. Saat ditanya, Darmi malah geram, karena ibu mengganggunya berdandan dan meninggalkannya kelaparan. Akhirnya ibu juga yang membuat makanan, kemudian membereskan kamar Darmi. Darmi makin keenakan, untuk mengambil segelas air saja harus memanggil ibu. Tak pernah sekalipun Darmi mengerjakan pekerjaan rumah, apalagi berpanas-panasan di kebun sayur atau mengantar dagangan ke pasar di kaki bukit. Tapi saat menginginkan sesuatu, Darmi akan merengek hingga mendapatkan keinginannya. Jika ibu tidak punya uang, Darmi marah besar! Mengatakan ia kesal dilahirkan di keluarga miskin. Hal ini membuat ibu sedih, dan sering kali menguras uang tabungannya. Bagaimanapun, Darmi adalah satu-satunya cinta ibu, anaknya tersayang yang ia besarkan sendiri dari kecil.', '2024-08-11 13:42:51', '2024-08-11 13:42:51'),
(2, 'images/pustaka/pustaka2.jpg', NULL, 'Bubor Pedas, Bubur Hijau Khas Kalimantan Barat', NULL, NULL, 'Saat pertama kali mendengar makanan yang satu ini, banyak orang yang mungkin akan menyangka bahwa bubur jenis ini memiliki rasa pedas. Padahal tidak demikian. Istilah “paddas” atau pedas sendiri adalah perumpamaan dari suku Melayu Sambas, Kalimantan Barat, yang berarti beragam sayuran dan rempah yang terdapat di dalam bubur. Rasa pedasnya yang berasal dari bumbu merica dan cabe merah juga tidak berlebihan. Bubor pedas merupakan kuliner khas masyarakat Melayu Sambas yang berdiam di wilayah pesisir pantai utara Kalimantan Barat. Anda bisa menemukan bubur ini di setiap sudut kota Sambas. Mulai dari kantin-kantin sekolah, pasar tradisional, bahkan di restoran berbintang. Melansir dari laman resmi indonesia.go.id, bubor pedas kuliner khas Sambas dulunya berasal dari suku Melayu dari wilayah Pontianak, Singkawang, dan sekitarnya. Pada awalnya, bubur ini hanya dimasak dan disajikan ketika ada acara kerajaan atau upacara adat yang bersifat sakral. Namun, ketika terjadi perang dan stok bahan makanan di Sambas menipis, bubor pedas yang menjadi simbol semangat Bhinneka Tunggal Ika ini dibuat oleh masyarakat sebagai salah satu cara untuk berhemat dan dapat dinikmati oleh seluruh anggota keluarga. Tidak seperti bubur-bubur di kota lain yang dimasak hingga lembut, bubor pedas dibuat dengan cara menumbuk beras hingga halus, lalu dioseng dan dicampur berbagai sayur-sayuran seperti kangkung, daun kesum, dan daun pakis, yang dimasukkan secara bersamaan saat bubur dimasak. Bubor pedas ini biasa disajikan dengan ikan teri goreng lengkap dengan kacang tanah sebagai topping yang sering dihidangkan sebagai menu berbuka di bulan Ramadan. Hal ini dikarenakan bubor pedas yang dibuat dari beras tumbuk, kelapa parut, berbagai sayuran, serta ubi merah, diyakini dapat mengembalikan stamina setelah berpuasa selama 14 jam dengan cepat.', '2024-08-11 13:42:51', '2024-08-11 13:42:51'),
(3, 'images/pustaka/pustaka3.jpg', NULL, 'Gendang Beriak, Pertunjukan Gendang Khas Masyarakat Dayak', NULL, NULL, 'Sama halnya dengan musik tradisional berbagai suku di Asia Tenggara lainnya, musik Suku Dayak juga didominasi oleh bunyi-bunyi yang dihasilkan dari alat musik perkusi. Musik perkusi merupakan musik yang lahir dari kebudayaan yang lekat hubungannya dengan alam. Dengan kata lain, musik ini bersumber dari pola hidup masyarakat yang agraris, mengingat alat musik perkusi lahir dan terinspirasi dari tumbuhan. Dayak memiliki berbagai alat musik perkusi, seperti togunggak, peruncong, sengkurung, gendang Dayak, dan lainnya. Yang menarik, salah satu ciri dari alat musik perkusi Dayak adalah nadanya yang saling mengisi, atau dalam istilah Suku Dayak disebut dengan ngait, ngipa, atau ningka. Menurut Willian Malm, seorang etnomusikolog berkebangsaan Amerika Serikat, tangga nada dalam alat musik Dayak tidak sama dengan alat musik tradisional Jawa. Alat musik Dayak hanya mempunyai lima tangga nada dan tidak memilki jarak nada setengah yang disebut dengan anhemitonic-penthatonic–dapat dilihat dari alat musik sape. Karenanya, banyak yang menganggap musik Dayak lebih rumit jika dibandingkan dengan alat musik tradisional Jawa yang memiliki tujuh tangga nada. Namun, tidak semua alat musik tradisional Dayak terlihat rumit. Gendang Dayak, misalnya. Jika alat musik perkusi Dayak lainnya dimainkan menggunakan tehnik ngait, maka gendang Dayak dalam pementasan gendang beriak justru dimainkan dengan cara rampak. Suara gendang beriak hampir sama dengan suara gendang pada umumnya. Yang membedakan gendang beriak dari gendang lainnya adalah tempo permainannya. Tabuhan menghentak tapi lambat disesuaikan dengan gerakan para penari yang bertumpu pada gerak hentak kaki.', '2024-08-11 13:42:51', '2024-08-11 13:42:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reset_password_tokens`
--

CREATE TABLE `reset_password_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('EEeJpXaw9gaDVWpkM3DLINg7ro39UefgYAHfYCYr', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiY3p1U2dLTDZsUFZ1cXdBbVBmc0xkMFhBMnNLNU95dWU0dTRuYWN5eCI7czo2OiJsb2NhbGUiO3M6MjoiaWQiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI3OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYWNhcmEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1726626334),
('fSDEabbg5aaPDc7XBVii6vZFkTCI4hvWZl0JyEB4', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiVkVOa2hDb29nU2FYYlV3QXlBQjVDTWE3bFRFYmVwbVU2YVAzMnY3TSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly9hZG1pbi5sb2NhbGhvc3Q6ODAwMC9iZXJhbmRhIjt9czo2OiJsb2NhbGUiO3M6MjoiaWQiO3M6NTI6ImxvZ2luX2FkbWluXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mjt9', 1726626279);

-- --------------------------------------------------------

--
-- Struktur dari tabel `situs_cagar_budaya`
--

CREATE TABLE `situs_cagar_budaya` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `nomor_sk` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `situs_cagar_budaya`
--

INSERT INTO `situs_cagar_budaya` (`id`, `foto`, `nama`, `nomor_sk`, `alamat`, `latitude`, `longitude`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'images/situs-cagar-budaya/situs1.jpg', 'Keraton Kerajaan Matan', 'SK Direktur Jendral Kebudayaan Nomor : 442/E.II/CB/2016', 'Jl. Pangeran Kusuma Jaya, Kelurahan Mulia Kerta Kecamatan Benua Kayong', '-1.8617127', '109.9783484', 'Keraton Matan merupakan Keraton bekas Kerajaan Tanjungpura yakni salah satu kerajaan Melayu tertua di Kalimantan Barat yang sudah ada sejak abad ke-8. Berada tepat ditepian sungai Pawan yang merupakan sungai terbesar di Kabupaten Ketapang, tepatnya di Jalan Pangeran Kesuma Jaya, Kelurahan Mulia Kerta, Kecamatan Benua Kayong, Kabupaten Ketapang, Provinsi Kalimantan Barat. Bangunan berarsitektur panggung terdiri dari bagian kaki, badan dan atap. Mempunyai luas bangunan 714 m2. serta terbuat dari kayu ulin, saat ini dipergunakan sebagai museum yang menampilkan berbagai memorabilia koleksi istana, seperti singgasana sultan dan permaisurinya, foto sultan dan keluarganya, kain tenun khas kerajaan, aneka batik kuno, serta benda-benda dan peralatan-peralatan peninggalan Kesultanan Tanjungpura lainnya, tersimpan didalamnya.', '2024-08-11 13:42:51', '2024-08-11 13:42:51'),
(2, 'images/situs-cagar-budaya/situs2.png', 'Komplek Makam Keramat Tujuh', 'SK Direktur Jendral Kebudayaan Nomor : 442/E.II/CB/2016', 'Kelurahan Mulia Kerta Kecamatan Benua Kayong', '-1.8502625', '109.9931808', 'Peradaban islam di Ketapang dapat diketahui dari beberapa tinggalan arkeologis. Unsur-unsur pemukiman yang masih dapat terlacakyaitu berupa peninggalan makam dengan berbagai bentuk nisan serta inskripsi yang menyertai. Bukti arkeologis di Ketapang mengindikasikan bahwa Islam sudah berkembang pada abad ke-14 dengan bukti tertulisnya inskripsi jawa kuno pada nisan dengan angka tahun 1437. Kompleks Makam keramat Tujuh secara administatif terletak di Jl. Pangeran Kesumajaya, Desa Negeri Baru, Kecamatan Benua Kayong, Kabupaten Ketapang. Provinsi Kalimatan Barat. Lokasi kompleks berada di areal kompleks kuburan muslim yang mempunyai luas lahan 3.493,5 m2, terdiri atas dua bangunan bercungkup, bangunan yang pertama mempunyai 5 makam dan banguan yang kedua mempunyai dua makam berikut penjabarannya.', '2024-08-11 13:42:51', '2024-08-11 13:42:51'),
(3, 'images/situs-cagar-budaya/situs3.png', 'Komplek Makam Keramat Sembilan', 'SK Direktur Jendral Kebudayaan Nomor : 442/E.II/CB/2016', 'Desa Negeri Baru Kecamatan Benua Kayong', '-1.8539926', '109.9955078', 'Secara administrative terletak di Jl. Pangeran Kesumajaya, Dusun Pagarruyung, Kelurahan Muliakerta, Kecamatan Benua Kayang, Kabupaten Ketapang, Provinsi Kalimatan Barat. Secara astronomis berada pada 1° 51” 1.40” LS dan 109° 59” 35.27” BT. Lokasi kompleks berada di areal kompleks kuburan muslimin yang mempunyai luas lahan 2.509 m2. Terdiri atas dua bangunan utama, bangunan utama bercungkup difungsikan sebagai pemakanam yang didalamnya  terdapat 9 makam dan bangunan kedua bercungkup yang difungsikan sebagai tempat peristrahatan bagi para pengunjung, mempunyai panjang 9 m dan lebar 6 m. Bangunan utama bercungkup yang difungsikan sebagai pemakaman mempunyai panjang 20 m dan lebar 15 m. terdapat 9 makam yang ditandai dari nisan utara dan nisan selatan, sedangkan jirat makam sudah tidak ada lagi.', '2024-08-11 13:42:51', '2024-08-11 13:42:51'),
(4, 'images/situs-cagar-budaya/situs4.png', 'Komplek Makam Astane Raja Pangeran Iranata', 'SK Direktur Jendral Kebudayaan Nomor : 442/E.II/CB/2016', 'Desa Negeri Baru Kecamatan Benua Kayong', '-1.8442015', '109.9271972', 'Pangeran Iranata adalah putra sulung Panembahan Giri Kesuma, raja muslim pertama di Kerajaan Tanjungpura. Karena pecah perselisihan di kalangan pejabat istana, Pangeran Iranata memilih keluar dari lingkaran kekuasaan. Bersama dengan keluarganya, Pangeran Iranata menyusuri sungai Pawan hingga tiba di sebuah daerah yang kini dikenal dengan nama Sembelengan atau Desa Negeri Baru. Di sini, dia mendirikan sebuah permukiman dan bermastautin hingga akhir hayatnya. Di tempat ini pula Pangeran Iranata dikebumikan. Kompleks permakaman Pangeran Iranata menjadi magnet bagi para arkeolog karena diduga menyimpan banyak artefak. Ada beberapa tim peneliti, baik dari luar maupun dalam negeri, yang pernah melakukan penelitian di kompleks permakaman ini. Salah satunya adalah tim peneliti dari Banjarmasin yang melakukan penelitian selama 12 hari pada tahun 2007. Tim ini berhasil menemukan beberapa artefak seperti perabotan keramik, relief bermotif bunga, dan relief kaki arca yang menempel pada dinding bata merah. Pada awalnya, tim peneliti dari Banjarmasin menemukan puing-puing bata merah dan keramik kuno yang berserakan di sekitar lokasi yang kemudian dijadikan sebagai lokasi penggalian. Tim itu kemudian mengembangkan penggalian dan menemukan struktur bangunan yang kemudian dipastikan merupakan pintu masuk sebuah candi. Pada pintu masuk itu, terdapat relief arca dan ukiran bunga. Selain candi, tim peneliti itu juga berhasil menemukan struktur puing lingga dan pecahan lumpang atau lesung batu. Lingga yang merupakan lambang pemujaan peradaban Hindu kuno tersebut mempunyai ukuran yang cukup besar dengan bagian atas yang telah patah. Berbagai benda yang ditemukan tersebut tersebar dalam radius yang cukup luas, yaitu 100 – 200 m².', '2024-08-11 13:42:51', '2024-08-11 13:42:51'),
(5, 'images/situs-cagar-budaya/situs5.png', 'Situs Reruntuhan Candi Negeri Baru', 'SK Direktur Jendral Kebudayaan Nomor : 442/E.II/CB/2016', 'Desa Negeri Baru Kecamatan Benua Kayong', '-1.8443803', '110.0070262', 'Candi Negeri Baru merupakan satu-satunya struktur bangunan dari masa perkembangan budaya Hindu-Buddha yang telah ditemukan di wilayah ini. Lokasi candi berada di Desa Negeri Baru, Kecamatan Banua Kayong, Kabupaten Ketapang, Kalimantan Barat. Tinggalan dengan karakter budaya yang sama lainnya hanya ditemukan dalam bentuk artefaktual. Salah satu bentuk tinggalan budaya tersebut adalah lingga dari batu yang ditemukan di Hulu Sungai Pawan. Pada sisi-sisi bagian Brahma Bhaga lingga terdapat relief yang kemungkinan inskripsi. Pada wilayah lain di Kalimantan bagian Barat Daya–khususnya di Pulau Maya–ditemukan pula relief stupa Buddha pada sebongkah batu dan fragmen arca. Kendati demikian, fragmen arca tersebut sudah hilang akibat penjarahan barang antik oleh penduduk sekitar. Penelitian arkeologi di Situs Candi Negeri Baru telah dilakukan beberapa tahap. Penelitian pertama dilakukan tahun 1994 oleh Pusat Penelitian Arkeologi Nasional. Hasil dari penelitian ini berupa keragaman data di daerah Benua Lama yang terdiri atas makam Islam dengan tahun çaka, sebaran fragmen keramik, dan bata. Penelitian selanjutnya dilakukan oleh Balai Arkeologi Banjarmasin pada tahun 2007. Pada penelitian kali ini dilakukan tes pit di sekitar konsentrasi batu bata di Desa Negeri Baru. Penelitian ini menunjukkan adanya kemungkinan berkembangnya karakter budaya Hinddu-Buddha di wilayah tersebut. Ekskavasi yang lebih intensif di sekitar konsentrasi bata dilakukan pada tahun 2010-2011. Berdasarkan hasil ekskavasi diketahui bahwa terdapat struktur bata yang diindikasi sebagai bangunan keagamaan (Atmojo, 2014: 64).', '2024-08-11 13:42:51', '2024-08-12 09:32:08'),
(6, 'images/situs-cagar-budaya/situs6.jpg', 'Komplek Makam Raja-Raja Tanjung Pura', 'SK Direktur Jendral Kebudayaan Nomor : 442/E.II/CB/2016', 'Desa Tanjung Pura Kecamatan Muara Pawan', '-1.7256021', '110.2065882', 'Makam Raja Tanjungpura menyimpan cerita-cerita masa lalu yang tak hanya menarik bagi mereka yang berminat pada sejarah, tetapi juga bagi siapa saja yang menghargai keindahan arsitektur serta kekayaan budaya. Terletak di Kalimantan, situs ini berbicara banyak tentang kejayaan dan kehidupan Kerajaan Tanjungpura yang pernah berjaya. Kerajaan Tanjungpura, sebuah nama yang menggema dalam lipatan sejarah Kalimantan, tidak hanya dikenal karena penguasaannya yang luas tetapi juga karena perannya dalam perdagangan dan penyebaran agama di kawasan tersebut. Dari masa ke masa, Kerajaan Tanjungpura telah menunjukkan betapa pentingnya lokasi strategis mereka di peta perdagangan kuno. Melalui pelabuhan dan sungai, kerajaan ini menjadi titik pertemuan bagi berbagai bangsa dan budaya, memungkinkan Tanjungpura tumbuh menjadi pusat perdagangan dan sekaligus penyebaran budaya.', '2024-08-11 13:42:51', '2024-08-11 13:42:51'),
(7, 'storage/situs-cagar-budaya/Komplek Makam Korban Pembantaian Jepang-[1723385414].jpg', 'Komplek Makam Korban Pembantaian Jepang', 'SK Bupati Ketapang Nomor : 492/ Disparbudparpora/ 2016', 'Kelurahan Sampit Kecamatan Delta Pawan', '-1.8305168178164124', '109.97696763706027', 'Tempat yang', '2024-08-11 14:10:14', '2024-08-11 14:10:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `warisan_budaya_tak_benda`
--

CREATE TABLE `warisan_budaya_tak_benda` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `nomor_sk` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `category_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `warisan_budaya_tak_benda`
--

INSERT INTO `warisan_budaya_tak_benda` (`id`, `foto`, `nama`, `nomor_sk`, `deskripsi`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'images/warisan-budaya/warisan1.jpg', 'Syair Gulung Ketapang', 'Sertifikat Menteri Pendidikan Kebudayaan Riset dan Teknologi No: 3040/F4/KB.09.06/2022', 'Syair Gulung merupakan khasanah kebudayaan Melayu yang harus dipertahankan. Melalui syair, banyak sekali yang bisa dilakukan diantaranya, mengenalkan wilayah, memberikan kritik, memberikan hiburan kepada orang lain (yang penting jangan sampai ada yang tersakiti). Syair yang dibaca harus sesuai dengan situasi dan kondisi. Dahulu penyebarannya dilakukan dengan menggunakan seni-seni budaya dan tradisi setempat dan juga sebagai media dakwah. Disebut syair gulung, karena kertas yang dibaca di sambung panjang kebawah dan ada wadahnya setelah digulung.', NULL, '2024-08-11 13:42:51', '2024-08-11 13:42:51'),
(2, 'images/warisan-budaya/warisan2.jpg', 'Ritual Adat Kanjang Serayong', 'Sertifikat Menteri Pendidikan Kebudayaan Riset dan Teknologi No: 3040/F4/KB.09.06/2022', 'Kanjan Serayong ini merupakan ritual adat kematian dalam masyarakat dayak pesaguan dan merupakan sebuah ritual untuk menghormati arwah orang yang meninggal. Upacara ini mirip dengan upacara ngaben di Bali. Makna dari menganjan ini adalah semacam ungkapan kemenangan atas maut. Adapun maksud dan tujuan dari upacara ini adalah mengganti suasana dalam masa berkabung menjadi suasana yang riang gembira. Di samping itu juga untuk melepaskan semacam ikatan dari masa berkabung.', NULL, '2024-08-11 13:42:51', '2024-08-11 13:42:51'),
(3, 'images/warisan-budaya/warisan3.jpg', 'Ritual Adat Meruba', '-', 'Ritual Adat Meruba adalah sebuah upacara adat yang sangat penting bagi masyarakat Dayak di Dusun Sengkuang, Desa Benua Krio, Kecamatan Hulu Sungai, Kabupaten Ketapang, Kalimantan Barat. Upacara ini dilaksanakan setiap tahunnya pada tanggal 25 Juni dan memiliki makna yang sangat dalam bagi kehidupan masyarakat setempat. Inti dari ritual ini adalah pencucian pusaka Kerajaan Hulu Aik, khususnya keris keramat Bosi Koling. Proses pencucian ini diyakini sebagai cara untuk menjaga kesucian dan kekuatan pusaka agar tetap melindungi masyarakat. Meruba juga dipandang sebagai momen untuk memperbarui ikatan spiritual antara masyarakat dengan leluhur dan alam semesta. Ritual ini bertujuan untuk menjaga keharmonisan dan keseimbangan dalam masyarakat. Diharapkan dengan terlaksananya Meruba, masyarakat akan hidup rukun dan damai. Meruba juga menjadi bentuk ungkapan syukur kepada Tuhan Yang Maha Esa atas segala berkah yang telah diberikan.', NULL, '2024-08-11 13:42:51', '2024-08-11 13:42:51'),
(4, 'images/warisan-budaya/warisan4.jpg', 'Ritual Adat Nungkat Gumi', '-', 'Ritual Adat Nungkat Gumi merupakan upacara adat yang sangat penting bagi masyarakat Dayak Semandang-Kualan di Kecamatan Simpang Hulu, Kabupaten Ketapang, Kalimantan Barat. Ritual ini memiliki makna yang sangat dalam terkait hubungan manusia dengan alam semesta. Secara harfiah, \"nungkat\" berarti menopang dan \"gumi\" berarti bumi. Jadi, ritual ini bertujuan untuk membersihkan bumi dari segala kotoran dan energi negatif yang dapat mengganggu keseimbangan alam. Nungkat Gumi juga bertujuan untuk menjaga keharmonisan antara manusia dengan alam semesta, leluhur, dan sesama manusia. Melalui ritual ini, masyarakat memohon berkah kepada Sang Pencipta agar diberikan kesehatan, rezeki, dan perlindungan.', NULL, '2024-08-11 13:42:51', '2024-08-11 13:42:51'),
(5, 'images/warisan-budaya/warisan5.jpg', 'Ritual Adat Bebantan', '-', 'Ritual Adat Bebantan merupakan upacara adat yang sangat penting bagi masyarakat Dayak Pesaguan khususnya yang berada di Kabupaten Ketapang Kalimantan Barat. Bebantan merupakan tradisi yang dilakukan secara turun-temurun dengan tujuan untuk membersihkan kampung, mengusir roh jahat, dan memohon berkah kepada Sang Hyang Duwata (Tuhan Yang Maha Esa) serta leluhur. Ritual ini bertujuan untuk membersihkan kampung dari segala pengaruh negatif, baik itu dari roh jahat maupun energi buruk lainnya. Bebantan juga merupakan bentuk ungkapan syukur kepada alam semesta atas segala karunia yang telah diberikan.', NULL, '2024-08-11 13:42:51', '2024-08-11 13:42:51'),
(6, 'storage/warisan-budaya-tak-benda/Ritual Adat Menjangkap Buah Dayak Jelai-[1723386066].JPG', 'Ritual Adat Menjangkap Buah Dayak Jelai', '-', 'Tradisi  Adat Menjangkap Buah / Atau Pesta Adat Makan Buah dapat kita temui di Kabupaten Ketapang tepatnya di akaran sungai Jelai khususnya bagian Jelai daerah hulu Kecamatan  Jelai hulu yang meliputi beberapa desa diantara nya Desa Penyarang dusun Setipayan, Desa Periangan / Riam Kota, Desa Kusik Batu Lapu, Desa Tebing Berseri, dan beberapa desa lainnya. Tradisi ini sudah berlangsung dari nenek moyang dan sudah menjadi budaya yang kental di daerah ini.', NULL, '2024-08-11 14:21:07', '2024-08-11 14:21:07');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `acara`
--
ALTER TABLE `acara`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_email_unique` (`email`);

--
-- Indeks untuk tabel `kuliner`
--
ALTER TABLE `kuliner`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `legenda`
--
ALTER TABLE `legenda`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pustaka`
--
ALTER TABLE `pustaka`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `reset_password_tokens`
--
ALTER TABLE `reset_password_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `situs_cagar_budaya`
--
ALTER TABLE `situs_cagar_budaya`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `warisan_budaya_tak_benda`
--
ALTER TABLE `warisan_budaya_tak_benda`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `acara`
--
ALTER TABLE `acara`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kuliner`
--
ALTER TABLE `kuliner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `legenda`
--
ALTER TABLE `legenda`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pustaka`
--
ALTER TABLE `pustaka`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `situs_cagar_budaya`
--
ALTER TABLE `situs_cagar_budaya`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `warisan_budaya_tak_benda`
--
ALTER TABLE `warisan_budaya_tak_benda`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
