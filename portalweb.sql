-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2023 at 09:24 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portalweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tberita`
--

CREATE TABLE `tberita` (
  `id` int(11) NOT NULL,
  `id_user` varchar(11) NOT NULL,
  `title_berita` varchar(256) NOT NULL,
  `id_kategori` int(64) NOT NULL,
  `isi_berita` text NOT NULL,
  `doc` varchar(256) NOT NULL,
  `jadwal_tayang` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `slug` text NOT NULL,
  `status` varchar(64) NOT NULL,
  `breaking_news` int(12) NOT NULL,
  `news_views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tberita`
--

INSERT INTO `tberita` (`id`, `id_user`, `title_berita`, `id_kategori`, `isi_berita`, `doc`, `jadwal_tayang`, `created_at`, `updated_at`, `deleted_at`, `slug`, `status`, `breaking_news`, `news_views`) VALUES
(5, '1', 'DUKUNG KTT KE-43 ASEAN, JAS TANGANI 20 PENERBANGAN VVIP DELEGASI ENAM NEGARA PESERTA', 4, '<p>Dalam rangka mendukung Konferensi Tingkat Tinggi (KTT) ke-43 ASEAN yang akan diselenggarakan di Jakarta 5-7 September 2023, PT Jasa Angkasa Semesta Tbk (JAS Airport Services) telah memastikan kesiapan dalam menangani lebih dari 20 penerbangan yang akan mengangkut para kepala negara beserta delegasi peserta dari enam negara yang berpartisipasi dalam acara pertemuan regional dwitahunan ini.</p><blockquote><p>\"Dengan komitmen yang kuat dan pengalaman yang mendalam, PT Jasa Angkasa Semesta Tbk (JAS) sebagai perusahaan ground handling anak bangsa siap untuk memberikan dukungan penuh dalam menyuksesan KTT ke-43 ASEAN dan memastikan bahwa para delegasi VVIP dapat menjalani kunjungan mereka dengan lancar dan nyaman”<br>Presiden Direktur dan CEO JAS Airport Services, Adji Gunawan di Cengkareng, Senin (4/9).</p></blockquote><p>JAS Airport Services tidak hanya fokus pada ground handling dan logistik semata, tetapi juga pada aspek-aspek penting lainnya, seperti pengurusan perizinan operasional pesawat VVIP di Indonesia untuk memastikan kesuksesan KTT ke-43 ASEAN di Indonesia dan menjadi bagian dari sejarah kerjasama ASEAN, tambah Adji.</p><p>Selain kedatangan para kepala negara dan delegasi dari enam negara peserta KTT ke-43 ASEAN, JAS Airport Services juga menangani logistik dari salah satu negara peserta.</p><p>Hal ini mencerminkan komitmen JAS Airport Services dalam memastikan semua aspek keamanan dan kenyamanan delegasi selama kunjungan mereka dalam masa keketuaan Indonesia di ASEAN tahun ini yang mengusung tema ‘ASEAN Matters Epicentrum of Growth’.</p><blockquote><p>Diharapkan dengan tema tersebut dapat menjadikan kawasan ASEAN relevan dan penting bagi masyarakat Indonesia, ASEAN dan kawasan sekitar, serta mewujudkan keinginan Indonesia untuk mengapitalisasi ASEAN sebagai pusat pertumbuhan ekonomi.</p></blockquote><p>Dengan pengalaman lebih dari 39 tahun melayani berbagai maskapai domestik maupun internasional di sembilan bandara internasional Indonesia, JAS Airport Services terus memberikan layanan terbaiknya dalam mempertahankan kepercayaan para pelanggannya termasuk penanganan berbagai penerbangan kenegaraan seperti Raja Salman pada tahun 2017 lalu, dan berlanjut pada penanganan 11 kepala negara anggota G20 pada tahun 2022.</p><p>Demi menjaga kualitas layanan prima kepada seluruh pelanggannya, JAS Airport Services juga telah memiliki sertifikasi internasional seperti Sertifikasi “CEIV for Lithium Battery” untuk penanganan logistik baterai Lithium yang aman.</p><p>Belum lama ini, JAS Airport Services juga telah bergabung dan mendapatkan sertifikasi dari TAPA (Transported Asset Protection Association) dalam pengelolaan keamanan penanganan logistik. JAS Airport Services juga telah diakui dan dipercaya oleh Direktorat Jenderal Bea dan Cukai sebagai Operator Ekonomi Bersertifikat (Authorized Economic Operator – AEO) dalam menjalankan layanan Cargo Handlingnya.</p>', '1701829265_b53d8311c5f8d95e4d93.jpg', '2023-10-24 00:00:00', '2023-10-25 10:06:42', '2023-12-06 02:21:05', '0000-00-00 00:00:00', 'dukung-ktt-ke-43-asean-jas-tangani-20-penerbangan-vvip-delegasi-enam-negara-peserta', 'Published', 1, 0),
(11, '1', 'JAS AIRPORT SERVICES SUKSES MENYELESAIKAN PENANGANAN 249 PENERBANGAN HAJI 2023', 1, '<p>PT Jasa Angkasa Semesta (JAS Airport Services) perusahaan ground handling Indonesia, telah berhasil menyelesaikan penanganan 249 penerbangan haji menggunakan Saudi Airlines pada tahun keberangkatan 2023 secara sukses dan lancar yang berlangsung sejak tanggal 24 Mei 2023 hingga 3 Agustus 2023.</p><p>“Dengan kerjasama yang erat bersama semua pemangku kepentingan, kami bersyukur telah menyelesaikan penanganan 249 penerbangan haji 2023 di lima kota yang menjadi bukti nyata komitmen dan dedikasi tinggi tim PT JAS Airport Services dalam mendukung penyelenggaraan ibadah haji Indonesia yang aman dan nyaman. Terima kasih atas kerjasama yang baik dari semua pihak yang terlibat dalam kesuksesan musim haji tahun ini,” kata Direktur Utama PT Jasa Angkasa Semesta Adji Gunawan di Cengkareng, Senin (7/8).</p><p>JAS Airport Services melayani penerbangan haji tahun 2023 Saudia Airlines di lima bandara utama Indonesia, yaitu Bandara Internasional Soekarno Hatta Jakarta, Bandara Internasional Kertajati, Bandara Internasional Hang Nadim Batam, Bandara Internasional Kualanamu Medan, dan Bandara Internasional Juanda Surabaya.</p><p>Dengan komitmen dan dedikasi tinggi, penanganan jemaah haji dan bagasi ini berjalan dengan lancar tanpa hambatan berarti, menjadikan perjalanan ibadah para jemaah menjadi lebih aman dan nyaman.</p><p>“Keberhasilan ini menunjukkan komitmen JAS Airport Services dalam mengembangkan layanan di berbagai bandara di Indonesia dan memberikan akses yang lebih baik bagi untuk pelaksanaan haji nasional,” tambah Adji.</p><p>JAS Airport Services juga berterima kasih kepada semua pemangku kepentingan terkait atas suksesnya penanganan penerbangan haji tahun 2023, diantaranya Kementerian Perhubungan, Kementerian Agama, Angkasa Pura I, Angkasa Pura II, otoritas bandara, pihak kepolisian, dan seluruh pihak terkait lainnya yang telah bersinergi dan berkolaborasi untuk menjamin kelancaran dan keberhasilan musim haji tahun ini.</p><p>Dengan prestasi ini, JAS Airport Services semakin terdorong untuk terus meningkatkan kualitas layanan dan inovasi dalam mendukung perjalanan jemaah haji di masa mendatang. Perusahaan berkomitmen untuk berperan aktif dalam mendukung upaya pemerintah dan masyarakat Indonesia dalam menyelenggarakan ibadah haji dengan aman, nyaman, dan lancar.</p><p>JAS Airport Service senantiasa terus mendukung tumbuhnya dunia penerbangan Indonesia dengan selalu berupaya untuk memberikan kontribusi terbaiknya bagi dunia kebandaraan Indonesia memberikan pelayanan terbaik kepada seluruh costumer dan stakeholdernya dengan memenuhi sertifikasi internasional dalam melayani berbagai maskapai asing yang datang ke Indonesia.</p>', '1701829222_cac4cd19f5be65e4744b.jpg', '2023-10-31 00:00:00', '2023-10-31 01:25:20', '2023-12-06 02:20:22', '0000-00-00 00:00:00', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023', 'Published', 1, 0),
(13, '1', 'JAS SIAP TANGANI OPERASIONAL PESAWAT PENUMPANG TERBESAR DI DUNIA, AIRBUS A380', 4, '<p>PT Jasa Angkasa Semesta (JAS Airport Services) penyedia layanan kebandarudaraan Indonesia siap menangani operasional pesawat penumpang terbesar di dunia, Airbus A380, yang dioperasikan oleh Emirates Airlines pada tanggal 1 Juni 2023 di Bandara Internasional I Gusti Ngurah Rai Denpasar, Bali.</p><p>“Kedatangan pesawat Airbus A380 merupakan sebuah milestone bagi JAS Airport Services dalam menangani salah satu pesawat penumpang terbesar di dunia. Untuk ini, JAS Airport Services bangga bahwa Emirates Airlines mempercayakan penanganan ground handling dan cargo handlingnya kepada kami,” kata Presiden Direktur &amp; CEO JAS Airport Services Adji Gunawan, di Denpasar, Kamis (1/6).</p><p>Untuk penanganan pesawat penumpang terbesar di dunia ini, JAS Airport Services juga telah menyiapkan personel tambahan serta peralatan pendukung khusus untuk penanganan pesawat buatan Perancis yang memiliki bentang sayap hingga 79,8 meter dan total panjang badan pesawat hingga 72,7 meter.</p><p>Adji menambahkan bahwa JAS Airport Services berkomitmen untuk memberikan pelayanan terbaik dalam penanganan pesawat A380 di Indonesia, dengan tim yang berpengalaman dan peralatan khusus yang memenuhi standar keselamatan internasional.</p><p>“Kami sangat bahagia karena armada A380 milik Emirates akhirnya tiba di Bali. Pencapaian ini merupakan hasil kerja seluruh tim, mulai tahap perencanaan hingga eksekusi yang apik. Awal beroperasinya A380 di Indonesia juga memaknai perpanjangan komitmen kami pada pasar Indonesia, serta pembuktian kerja sama yang semakin kuat dengan Bandara I Gusti Ngurah Rai dan pemerintah setempat. Kami siap melayani para pelanggan yang terbang dari dan ke Denpasar dengan layanan kelas dunia Emirates A380, sambil terus berupaya merespons tingginya permintaan destinasi internasional dengan pesawat Superjumbo untuk satu dari dua penerbangan harian ke Pulau Bali,” kata Orhan Abbas, Senior Vice President, Commercial Operations, Far East Emirates.</p><p>Ke depannya, pesawat Airbus A380 yang dilengkapi dengan kapasitas 516 penumpang dengan konfigurasi 14 kursi First Class, 76 kursi Kelas Bisnis dan 426 kursi Kelas Ekonomi yang akan menggantikan salah satu penerbangan harian ke Bali yang saat ini menggunakan armada Boeing 777-300ER.</p><p>Penerbangan EK368 menggunakan pesawat Airbus A380 ini dijadwalkan berangkat dari Bandara Internasional Dubai (DXB) pukul 03.25 waktu setempat, kemudian dijadwalkan tiba di Bandara Internasional I Gusti Ngurah Rai (DPS) pukul 16.35 Wita dengan membawa 483 penumpang. Sementara itu, penerbangan bernomor EK369 akan berangkat dari Bali pukul 19.40 Wita dengan membawa 493 penumpang, lalu dijadwalkan tiba di Dubai pukul 00.45 waktu setempat.</p><p>Selain dimensi yang besar, pesawat A380 ini diklaim mampu terbang dengan kecepatan 0,85 Mach di ketinggian 43.100 kaki dan dapat menempuh jarak hingga 8.000 nautical miles atau setara dengan 15.000 km dalam satu penerbangan.</p><p>JAS Airport Service senantiasa terus mendukung tumbuhnya dunia penerbangan Indonesia dengan selalu berupaya untuk memberikan kontribusi terbaiknya bagi dunia kebandaraan Indonesia memberikan pelayanan terbaik kepada seluruh costumer dan stakeholdernya dengan memenuhi sertifikasi internasional dalam melayani berbagai maskapai asing yang datang ke Indonesia.</p><p>Hal ini terwujud dengan re-sertifikasi ISAGO oleh IATA (Asosiasi Pengangkutan Udara Internasional / International Air Transport Association) yang diterima pada bulan Juni lalu untuk empat station PT Jasa Angkasa Semesta, yaitu Bandara Internasional Soekarno Hatta (CGK), Bandara Internasional I Gusti Ngurah Rai (DPS), Bandara Internasional Juanda (SUB) dan Bandara Internasional Kualanamu (KNO).</p><p>ISAGO merupakan sistem yang diakui secara internasional untuk menilai manajemen operasional dan sistem kontrol dari sebuah organisasi yang menyediakan layanan ground handling untuk maskapai penerbangan.</p>', '1701829249_54e8da13f6392ac0f5e6.jpeg', '2023-10-31 00:00:00', '2023-10-31 01:28:19', '2023-12-06 02:20:49', '0000-00-00 00:00:00', 'jas-siap-tangani-operasional-pesawat-penumpang-terbesar-di-dunia-airbus-a380', 'Published', 0, 0),
(16, '2', 'JAS TANGANI KEBERANGKATAN JEMAAH HAJI JAWA BARAT DARI BANDARA KERTAJATI', 1, '<p>PT Jasa Angkasa Semesta (JAS Airport Services), penyedia layanan kebandarudaraan Indonesia menangani keberangkatan 366 calon jemaah haji berikut 8 petugas haji asal Jawa Barat dari Bandara Internasonal Kertajati, Minggu, 28 Mei 2023 pukul 22.20 WIB menggunakan Saudia Airlines.</p><p>“Ini merupakan sebuah kesempatan sekaligus kehormatan bagi JAS Airport Services untuk menjadi bagian dari sejarah keberangkatan jemaah haji pertama dari Bandara Internasional Kertajati serta berkomitmen untuk memberikan pengalaman perjalanan yang aman, nyaman, dan lancar bagi seluruh jemaah,” kata Adji Gunawan, Presiden Direktur JAS Airport Services, Senin (29/05).</p><p>Dalam penanganan keberangkatan Jemaah Haji tahun ini, JAS Airport Services juga dipercaya untuk menangani keberangkatan jemaah haji dari Bandara Internasional Soekarno Hatta Jakarta, Bandara Internasional Juanda Surabaya serta Bandara Internasional Kualanamu Medan.</p><p>JAS Airport Services berharap dapat mendukung kemudahan proses keberangkatan Haji di tahun-tahun mendatang, tambah Adji.</p><p>Keberangkatan haji pertama kali di Bandara Internasional Kertajati menandai sejarah baru bagi seluruh masyarakat, terlebih bagi Jemaah Haji di wilayah Jawa Barat</p><p>Jemaah haji yang berangkat melalui Bandara Kertajati berasal dari tujuh kabupaten dan kota di Jawa Barat, antara lain Kabupaten Cirebon, Kota Cirebon, Kabupaten Majalengka, Kabupaten Kuningan, Kabupaten Indramayu, Kabupaten Subang, dan Kabupaten Sumedang.</p><p>Penerbangan haji pertama kali di Bandara Kertajati ini diharapkan dapat membuka pintu bagi lebih banyak penerbangan lainnya, baik itu untuk umrah maupun penerbangan komersial lainnya, dari bandara yang menjadi kebanggaan masyarakat Jawa Barat.</p><p>Selain Bandara Internasional, JAS Airport Services juga menangani keberangkatan rombongan haji dari Bandara Soekarno Hatta Jakarta, Bandara Internasional Juanda Surabaya, dan Bandara Internasional&nbsp;Kualanamu.</p>', '1701829214_c21f228f624214e58431.jpg', '2023-11-21 00:00:00', '2023-11-21 07:32:12', '2023-12-06 02:20:14', '0000-00-00 00:00:00', 'jas-tangani-keberangkatan-jemaah-haji-jawa-barat-dari-bandara-kertajati', 'Published', 1, 0),
(17, '2', 'JAS Successfully Handled The Arrival of Covid-19 Vaccine in Indonesia', 4, '<p>As many as 11 million doses of Covid-19 vaccine from Sinovac, China, arrived at the Soekarno-Hatta Airport Cargo Terminal, Tangerang, Banten, Tuesday afternoon (2/2/2020) using a Singapore Airlines.</p><p>JAS Airport Services as a ground handling service provider for Singapore Airlines has successfully handled the envirotainer unloading process. JAS has served Singapore Airlines ground and cargo handling for more than 30 years.</p><p>“The Covid-19 vaccine is our national interest. For this reason, we, as ground handlers, are doing our best to provide the best service for the Indonesian nation and airline customers,” said Adji Gunawan, CEO of JAS Airport Services.</p><p>With regard to pharmaceutical products as a whole, JAS is known to have begun to identify a number of additional cold chain facilities and is currently following procedures to obtain IATA CEIV Pharma certification.</p><p>IATA issued CEIV Pharma certification to help ground handling companies and the entire air cargo supply chain meet the industry’s needs for higher safety, security, compliance and efficiency. The IATA CEIV Pharma certification is essential to ensure the integrity of pharmaceutical products throughout the supply chain.</p><p>So that in the future JAS will become the first Cargo Terminal Operator [CTO] in Indonesia to get IATA CEIV Pharma certification. The goal is that in addition to compliance with international regulations and standards, JAS will be recognized globally and declared ready to handle pharmaceutical products consistently.</p><p>The IATA CEIV Pharma validation is expected to be completed in March 2021. But beyond that, JAS has had the GDP [Good Distribution Practices] certification from WHO since 2014.</p>', '1701829275_06437920866215dde269.jpg', '2021-02-21 00:00:00', '2023-11-21 07:35:09', '2023-12-06 02:21:15', '0000-00-00 00:00:00', 'jas-successfully-handled-the-arrival-of-covid-19-vaccine-in-indonesia', 'Published', 1, 0),
(20, '1', 'asdf', 1, '<p>asdf</p>', '1701829163_42086eebeadf17e6cb6c.jpg', '2023-11-29 00:00:00', '2023-11-29 04:36:55', '2023-12-06 02:19:23', '0000-00-00 00:00:00', 'asdf', 'Published', 0, 0),
(21, '1', 'berita 1', 1, '<p>berita 1</p>', '1701829312_e70c877c5da42f3237d2.jpeg', '2023-11-29 00:00:00', '2023-11-30 02:13:21', '2023-12-06 02:21:52', '0000-00-00 00:00:00', 'berita-1', 'Published', 0, 0),
(22, '1', 'berita 2', 1, '<p>berita 2</p>', '1701830438_bcffc5438d56d1955c3c.jpg', '2023-11-29 00:00:00', '2023-11-30 02:13:37', '2023-12-06 02:40:38', '0000-00-00 00:00:00', 'berita-2', 'Published', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tinfo`
--

CREATE TABLE `tinfo` (
  `id` int(11) NOT NULL,
  `content` varchar(256) NOT NULL,
  `status` int(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tinfo`
--

INSERT INTO `tinfo` (`id`, `content`, `status`) VALUES
(1, 'asdf', 0),
(2, 'Human Capital Information System', 1),
(3, 'Pembayaran SPT 2024 ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tkategori`
--

CREATE TABLE `tkategori` (
  `id` int(11) NOT NULL,
  `name_kategori` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tkategori`
--

INSERT INTO `tkategori` (`id`, `name_kategori`) VALUES
(1, 'BUSINESS'),
(2, 'CARGO'),
(4, 'AIRLINES'),
(5, 'INTERNAL');

-- --------------------------------------------------------

--
-- Table structure for table `tkomentar`
--

CREATE TABLE `tkomentar` (
  `id` int(64) NOT NULL,
  `id_berita` int(64) NOT NULL,
  `id_user` int(64) NOT NULL,
  `id_parent` int(11) NOT NULL,
  `comment_content` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_date` datetime NOT NULL,
  `status_content` int(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tkomentar`
--

INSERT INTO `tkomentar` (`id`, `id_berita`, `id_user`, `id_parent`, `comment_content`, `created_at`, `updated_at`, `deleted_date`, `status_content`) VALUES
(1, 5, 2, 0, 'satu', '2023-11-13 03:00:58', '2023-11-28 01:53:26', '0000-00-00 00:00:00', 0),
(2, 5, 2, 1, 'dua', '2023-11-13 03:01:10', '2023-11-13 03:01:10', '0000-00-00 00:00:00', 1),
(3, 5, 2, 1, 'tiga', '2023-11-13 03:06:40', '2023-11-13 03:06:40', '0000-00-00 00:00:00', 1),
(4, 5, 2, 1, 'empat', '2023-11-13 03:14:51', '2023-11-13 03:14:51', '0000-00-00 00:00:00', 1),
(5, 5, 2, 1, 'lima', '2023-11-13 03:19:53', '2023-11-13 03:19:53', '0000-00-00 00:00:00', 1),
(6, 5, 2, 0, 'asdf', '2023-11-13 03:20:11', '2023-11-13 03:20:11', '0000-00-00 00:00:00', 1),
(7, 8, 1, 0, 'asdf', '2023-11-13 04:45:25', '2023-11-13 04:45:25', '0000-00-00 00:00:00', 1),
(8, 8, 1, 7, 'balasan asdf berita asdf', '2023-11-13 08:16:49', '2023-11-13 08:16:49', '0000-00-00 00:00:00', 1),
(9, 11, 1, 0, '', '2023-11-15 01:48:20', '2023-11-16 09:16:08', '0000-00-00 00:00:00', 0),
(10, 11, 1, 0, 'test komen', '2023-11-15 01:48:29', '2023-11-15 01:48:29', '0000-00-00 00:00:00', 1),
(11, 11, 1, 0, 'asdf', '2023-11-15 03:13:20', '2023-11-17 07:52:45', '0000-00-00 00:00:00', 0),
(12, 5, 1, 0, 'asdffffffffffffff', '2023-11-15 03:13:54', '2023-11-16 09:08:25', '0000-00-00 00:00:00', 0),
(13, 11, 13, 0, 'bagus banget', '2023-11-16 08:16:58', '2023-11-17 07:50:15', '0000-00-00 00:00:00', 0),
(14, 11, 13, 0, 'asdf', '2023-11-17 08:34:20', '2023-11-17 08:34:20', '0000-00-00 00:00:00', 1),
(15, 11, 1, 10, 'test komen balasan', '2023-11-17 08:41:42', '2023-11-17 08:41:42', '0000-00-00 00:00:00', 1),
(16, 17, 17, 0, 'cumi', '2023-11-21 08:23:00', '2023-11-29 08:17:11', '0000-00-00 00:00:00', 0),
(17, 17, 17, 16, 'lagi', '2023-11-21 08:23:16', '2023-11-29 08:17:07', '0000-00-00 00:00:00', 0),
(18, 17, 17, 16, 'au amat', '2023-11-21 08:23:26', '2023-11-21 08:23:26', '0000-00-00 00:00:00', 1),
(19, 11, 1, 0, 'coba komen', '2023-11-22 01:08:15', '2023-11-22 01:08:15', '0000-00-00 00:00:00', 1),
(20, 16, 1, 0, 'Berita ini jelek', '2023-11-28 01:52:34', '2023-11-28 01:52:51', '0000-00-00 00:00:00', 0),
(21, 11, 13, 19, 'komen apa yaa', '2023-11-29 03:36:25', '2023-11-29 03:36:25', '0000-00-00 00:00:00', 1),
(22, 20, 1, 0, 'asdf', '2023-11-29 08:13:46', '2023-11-29 08:13:54', '0000-00-00 00:00:00', 0),
(23, 20, 1, 0, 'test komen', '2023-11-29 08:17:23', '2023-11-29 08:17:26', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tlog`
--

CREATE TABLE `tlog` (
  `id_log` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_berita` int(11) NOT NULL,
  `ip_add` text NOT NULL,
  `browser` text NOT NULL,
  `remarks` varchar(256) NOT NULL,
  `time_access` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `slug` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tlog`
--

INSERT INTO `tlog` (`id_log`, `id_user`, `id_berita`, `ip_add`, `browser`, `remarks`, `time_access`, `slug`) VALUES
(1, 0, 8, '203.128.74.218', '', 'Read News', '2023-11-15 01:41:22', 'asdf'),
(2, 0, 8, '203.128.74.218', '', 'Read News', '2023-11-15 01:41:51', 'asdf'),
(3, 0, 8, '203.128.74.218', '', 'Read News', '2023-11-15 01:42:32', 'asdf'),
(4, 0, 11, '203.128.74.218', '', 'Read News', '2023-11-15 01:43:16', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(5, 0, 11, '203.128.74.218', '', 'Read News', '2023-11-15 01:48:19', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(6, 1, 11, '203.128.74.218', '', 'Add Comment', '2023-11-15 01:48:20', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(7, 0, 11, '203.128.74.218', '', 'Read News', '2023-11-15 01:48:21', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(8, 1, 11, '203.128.74.218', '', 'Add Comment', '2023-11-15 01:48:29', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(9, 0, 11, '203.128.74.218', '', 'Read News', '2023-11-15 01:48:29', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(10, 0, 11, '203.128.74.218', '', 'Read News', '2023-10-15 03:00:15', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(11, 0, 11, '203.128.74.218', '', 'Read News', '2023-11-15 03:00:16', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(12, 1, 0, '203.128.74.218', '', 'Logout System', '2023-11-15 03:00:23', ''),
(13, 1, 0, '203.128.74.218', 'Chrome 119.0.0.0 (Windows 10)', 'Login System', '2023-11-15 03:07:38', ''),
(14, 0, 11, '203.128.74.218', '', 'Read News', '2023-11-15 03:09:56', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(15, 0, 11, '203.128.74.218', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-15 03:10:56', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(16, 0, 11, '203.128.74.218', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-15 03:11:03', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(17, 0, 11, '203.128.74.218', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-15 03:12:08', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(18, 1, 11, '203.128.74.218', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-15 03:13:00', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(19, 1, 11, '203.128.74.218', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-15 03:13:06', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(20, 1, 11, '203.128.74.218', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-15 03:13:15', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(21, 1, 11, '203.128.74.218', 'Chrome 119.0.0.0 (Windows 10)', 'Add Comment', '2023-11-15 03:13:20', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(22, 1, 11, '203.128.74.218', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-15 03:13:21', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(23, 1, 5, '203.128.74.218', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-15 03:13:40', 'dukung-ktt-ke-43-asean-jas-tangani-20-penerbangan-vvip-delegasi-enam-negara-peserta'),
(24, 1, 5, '203.128.74.218', 'Chrome 119.0.0.0 (Windows 10)', 'Add Comment', '2023-11-15 03:13:54', 'dukung-ktt-ke-43-asean-jas-tangani-20-penerbangan-vvip-delegasi-enam-negara-peserta'),
(25, 1, 5, '203.128.74.218', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-15 03:13:55', 'dukung-ktt-ke-43-asean-jas-tangani-20-penerbangan-vvip-delegasi-enam-negara-peserta'),
(26, 1, 5, '203.128.74.218', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-15 03:21:22', 'dukung-ktt-ke-43-asean-jas-tangani-20-penerbangan-vvip-delegasi-enam-negara-peserta'),
(27, 1, 5, '203.128.74.218', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-15 03:21:32', 'dukung-ktt-ke-43-asean-jas-tangani-20-penerbangan-vvip-delegasi-enam-negara-peserta'),
(28, 1, 11, '203.128.74.218', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-15 03:21:47', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(29, 1, 11, '203.128.74.218', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-15 03:36:44', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(30, 1, 11, '203.128.74.218', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-15 03:36:48', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(31, 1, 11, '203.128.74.218', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-15 03:36:55', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(32, 1, 11, '203.128.74.218', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-15 03:52:41', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(33, 1, 11, '203.128.74.218', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-15 04:36:40', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(34, 1, 11, '203.128.74.218', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-15 04:37:06', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(35, 0, 11, '203.128.74.218', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 00:46:50', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(36, 0, 11, '203.128.74.218', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 01:32:30', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(37, 0, 11, '203.128.74.218', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 01:49:20', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(38, 0, 11, '203.128.74.218', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 01:49:21', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(39, 0, 11, '203.128.74.218', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 01:49:22', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(40, 0, 5, '203.128.74.218', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 01:49:23', 'dukung-ktt-ke-43-asean-jas-tangani-20-penerbangan-vvip-delegasi-enam-negara-peserta'),
(41, 0, 11, '203.128.74.218', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 01:49:28', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(42, 0, 11, '203.128.74.218', 'Edge 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 01:49:34', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(43, 0, 11, '203.128.74.218', 'Firefox 117.0 (Windows 10)', 'Read News', '2023-11-16 01:50:05', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(44, 0, 5, '203.128.74.218', 'Firefox 117.0 (Windows 10)', 'Read News', '2023-11-16 01:50:09', 'dukung-ktt-ke-43-asean-jas-tangani-20-penerbangan-vvip-delegasi-enam-negara-peserta'),
(45, 0, 5, '::1', 'Firefox 117.0 (Windows 10)', 'Read News', '2023-11-16 01:53:42', 'dukung-ktt-ke-43-asean-jas-tangani-20-penerbangan-vvip-delegasi-enam-negara-peserta'),
(46, 0, 11, '::1', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 01:54:23', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(47, 0, 11, '::1', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 01:54:49', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(48, 0, 11, '::1', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 01:54:58', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(49, 0, 5, '::1', 'Firefox 117.0 (Windows 10)', 'Read News', '2023-11-16 01:55:02', 'dukung-ktt-ke-43-asean-jas-tangani-20-penerbangan-vvip-delegasi-enam-negara-peserta'),
(50, 0, 11, '::1', 'Firefox 117.0 (Windows 10)', 'Read News', '2023-11-16 01:55:05', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(51, 0, 11, '203.128.74.218', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 01:56:22', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(52, 0, 11, '203.128.74.218', 'Firefox 117.0 (Windows 10)', 'Read News', '2023-11-16 02:08:55', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(53, 0, 11, '203.128.74.218', 'Firefox 117.0 (Windows 10)', 'Read News', '2023-11-16 02:09:00', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(54, 0, 11, '203.128.74.218', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 02:47:58', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(55, 0, 11, '203.128.74.218', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 02:50:08', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(56, 0, 11, '203.128.74.218', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 04:25:54', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(57, 0, 11, '203.128.74.218', 'Edge 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 06:11:41', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(58, 1, 0, '203.128.74.218', 'Edge 119.0.0.0 (Windows 10)', 'Login System', '2023-11-16 06:12:04', ''),
(59, 1, 0, '203.128.74.218', 'Edge 119.0.0.0 (Windows 10)', 'Login System', '2023-11-16 06:12:09', ''),
(60, 1, 0, '203.128.74.218', 'Edge 119.0.0.0 (Windows 10)', 'Login System', '2023-11-16 06:12:14', ''),
(61, 0, 11, '203.128.74.218', 'Edge 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 06:13:03', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(62, 1, 13, '203.128.74.218', 'Edge 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 06:13:21', 'jas-siap-tangani-operasional-pesawat-penumpang-terbesar-di-dunia-airbus-a380'),
(63, 0, 11, '203.128.74.218', 'Firefox 115.0 (Windows 7)', 'Read News', '2023-11-16 06:18:17', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(64, 0, 11, '203.128.74.218', 'Firefox 115.0 (Windows 7)', 'Read News', '2023-11-16 06:18:23', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(65, 0, 11, '203.128.74.218', 'Firefox 115.0 (Windows 7)', 'Read News', '2023-11-16 06:18:47', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(66, 0, 5, '203.128.74.218', 'Firefox 115.0 (Windows 7)', 'Read News', '2023-11-16 06:18:55', 'dukung-ktt-ke-43-asean-jas-tangani-20-penerbangan-vvip-delegasi-enam-negara-peserta'),
(67, 0, 5, '203.128.74.218', 'Firefox 115.0 (Windows 7)', 'Read News', '2023-11-16 06:19:14', 'dukung-ktt-ke-43-asean-jas-tangani-20-penerbangan-vvip-delegasi-enam-negara-peserta'),
(68, 0, 11, '203.128.74.218', 'Firefox 115.0 (Windows 7)', 'Read News', '2023-11-16 06:19:27', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(69, 0, 5, '192.168.111.1', 'Firefox 115.0 (Windows 7)', 'Read News', '2023-11-16 06:20:32', 'dukung-ktt-ke-43-asean-jas-tangani-20-penerbangan-vvip-delegasi-enam-negara-peserta'),
(70, 0, 11, '192.168.111.1', 'Firefox 115.0 (Windows 7)', 'Read News', '2023-11-16 06:20:34', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(71, 0, 11, '192.168.111.1', 'Firefox 115.0 (Windows 7)', 'Read News', '2023-11-16 06:29:14', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(72, 0, 11, '192.168.111.1', 'Firefox 115.0 (Windows 7)', 'Read News', '2023-11-16 06:29:17', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(73, 0, 11, '::1', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 06:33:23', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(74, 0, 11, '::1', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 07:01:43', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(75, 0, 11, '::1', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 07:07:36', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(76, 0, 11, '::1', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 07:08:16', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(77, 0, 11, '::1', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 07:08:17', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(78, 0, 11, '::1', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 07:08:17', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(79, 0, 11, '::1', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 07:08:18', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(80, 0, 11, '::1', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 07:08:18', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(81, 0, 11, '::1', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 07:08:18', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(82, 0, 11, '::1', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 07:08:18', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(83, 0, 11, '::1', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 07:08:18', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(84, 0, 11, '::1', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 07:08:19', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(85, 0, 11, '::1', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 07:25:27', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(86, 0, 11, '::1', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 07:25:29', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(87, 0, 11, '::1', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 07:25:30', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(88, 0, 11, '::1', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 07:25:31', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(89, 0, 11, '::1', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 07:25:31', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(90, 0, 11, '::1', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 07:25:31', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(91, 0, 11, '::1', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 07:25:31', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(92, 0, 11, '::1', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 07:25:31', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(93, 0, 11, '::1', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 07:25:32', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(94, 0, 11, '::1', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 07:25:32', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(95, 0, 11, '::1', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 07:25:32', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(96, 0, 11, '::1', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 07:25:32', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(97, 0, 11, '::1', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 07:25:48', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(98, 0, 11, '::1', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 07:25:50', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(99, 0, 11, '::1', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 07:55:04', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(100, 0, 13, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 07:55:18', 'jas-siap-tangani-operasional-pesawat-penumpang-terbesar-di-dunia-airbus-a380'),
(101, 0, 13, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 07:55:53', 'jas-siap-tangani-operasional-pesawat-penumpang-terbesar-di-dunia-airbus-a380'),
(102, 1, 0, '203.128.74.218', 'Chrome 119.0.0.0 (Windows 10)', 'Login System', '2023-11-16 07:56:45', ''),
(103, 1, 11, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 07:56:54', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(104, 1, 13, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 07:58:10', 'jas-siap-tangani-operasional-pesawat-penumpang-terbesar-di-dunia-airbus-a380'),
(105, 1, 11, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 07:58:20', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(106, 1, 0, '203.128.74.218', 'Chrome 119.0.0.0 (Windows 10)', 'Logout System', '2023-11-16 07:58:33', ''),
(107, 0, 11, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 07:58:35', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(108, 1, 0, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Login System', '2023-11-16 08:16:09', ''),
(109, 1, 0, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Logout System', '2023-11-16 08:16:45', ''),
(110, 13, 0, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Login System', '2023-11-16 08:16:51', ''),
(111, 13, 11, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 08:16:53', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(112, 13, 11, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Add Comment', '2023-11-16 08:16:58', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(113, 13, 11, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 08:16:58', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(114, 13, 11, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 08:17:15', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(115, 13, 11, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 08:17:20', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(116, 13, 11, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 08:24:33', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(117, 13, 11, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 08:24:45', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(118, 0, 13, '192.168.111.229', 'Edge 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 08:27:52', 'jas-siap-tangani-operasional-pesawat-penumpang-terbesar-di-dunia-airbus-a380'),
(119, 13, 11, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 08:27:59', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(120, 13, 11, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 08:28:01', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(121, 0, 11, '192.168.111.229', 'Firefox 117.0 (Windows 10)', 'Read News', '2023-11-16 09:00:14', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(122, 0, 11, '192.168.111.229', 'Firefox 117.0 (Windows 10)', 'Read News', '2023-11-16 09:02:01', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(123, 0, 11, '192.168.111.229', 'Firefox 117.0 (Windows 10)', 'Read News', '2023-11-16 09:02:12', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(124, 0, 11, '192.168.111.229', 'Firefox 117.0 (Windows 10)', 'Read News', '2023-11-16 09:02:23', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(125, 0, 11, '192.168.111.229', 'Firefox 117.0 (Windows 10)', 'Read News', '2023-11-16 09:03:06', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(126, 13, 11, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 09:06:12', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(127, 13, 5, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 09:06:17', 'dukung-ktt-ke-43-asean-jas-tangani-20-penerbangan-vvip-delegasi-enam-negara-peserta'),
(128, 13, 5, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 09:07:07', 'dukung-ktt-ke-43-asean-jas-tangani-20-penerbangan-vvip-delegasi-enam-negara-peserta'),
(129, 13, 5, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 09:07:55', 'dukung-ktt-ke-43-asean-jas-tangani-20-penerbangan-vvip-delegasi-enam-negara-peserta'),
(130, 13, 5, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 09:08:03', 'dukung-ktt-ke-43-asean-jas-tangani-20-penerbangan-vvip-delegasi-enam-negara-peserta'),
(131, 1, 0, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Login System', '2023-11-16 09:13:25', ''),
(132, 1, 5, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 09:13:30', 'dukung-ktt-ke-43-asean-jas-tangani-20-penerbangan-vvip-delegasi-enam-negara-peserta'),
(133, 1, 11, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-16 09:13:35', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(134, 1, 0, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Login System', '2023-11-17 07:09:47', ''),
(135, 1, 11, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-17 07:15:21', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(136, 1, 11, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-17 07:51:15', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(137, 1, 11, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-17 07:51:57', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(138, 1, 11, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-17 07:52:45', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(139, 1, 11, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-17 07:55:53', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(140, 1, 11, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-17 08:32:10', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(141, 1, 11, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-17 08:32:18', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(142, 1, 0, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Logout System', '2023-11-17 08:32:29', ''),
(143, 13, 0, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Login System', '2023-11-17 08:32:37', ''),
(144, 13, 11, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-17 08:32:40', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(145, 13, 11, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-17 08:33:08', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(146, 13, 11, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-17 08:33:22', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(147, 13, 11, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-17 08:33:41', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(148, 13, 11, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-17 08:33:50', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(149, 13, 11, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Add Comment', '2023-11-17 08:34:20', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(150, 13, 11, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-17 08:34:20', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(151, 13, 0, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Access Menu Profile', '2023-11-17 08:35:34', ''),
(152, 13, 0, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Access Menu Profile', '2023-11-17 08:35:39', ''),
(153, 13, 11, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-17 08:35:43', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(154, 13, 0, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Logout System', '2023-11-17 08:35:48', ''),
(155, 1, 0, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Login System', '2023-11-17 08:35:56', ''),
(156, 1, 11, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-17 08:36:01', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(157, 1, 0, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Logout System', '2023-11-17 08:36:06', ''),
(158, 2, 0, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Login System', '2023-11-17 08:36:13', ''),
(159, 2, 11, '192.168.111.229', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-17 08:36:19', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(160, 0, 13, '192.168.111.229', 'Edge 119.0.0.0 (Windows 10)', 'Read News', '2023-11-17 08:36:32', 'jas-siap-tangani-operasional-pesawat-penumpang-terbesar-di-dunia-airbus-a380'),
(161, 0, 13, '192.168.111.229', 'Edge 119.0.0.0 (Windows 10)', 'Read News', '2023-11-17 08:36:35', 'jas-siap-tangani-operasional-pesawat-penumpang-terbesar-di-dunia-airbus-a380'),
(162, 1, 0, '192.168.111.229', 'Edge 119.0.0.0 (Windows 10)', 'Login System', '2023-11-17 08:36:48', ''),
(163, 1, 11, '192.168.111.229', 'Edge 119.0.0.0 (Windows 10)', 'Read News', '2023-11-17 08:36:58', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(164, 1, 11, '192.168.111.229', 'Edge 119.0.0.0 (Windows 10)', 'Read News', '2023-11-17 08:37:58', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(165, 1, 11, '192.168.111.229', 'Edge 119.0.0.0 (Windows 10)', 'Read News', '2023-11-17 08:38:18', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(166, 1, 11, '192.168.111.229', 'Edge 119.0.0.0 (Windows 10)', 'Read News', '2023-11-17 08:38:39', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(167, 1, 11, '192.168.111.229', 'Edge 119.0.0.0 (Windows 10)', 'Read News', '2023-11-17 08:40:24', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(168, 1, 11, '192.168.111.229', 'Edge 119.0.0.0 (Windows 10)', 'Read News', '2023-11-17 08:41:19', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(169, 1, 11, '192.168.111.229', 'Edge 119.0.0.0 (Windows 10)', 'Add Comment', '2023-11-17 08:41:42', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(170, 1, 11, '192.168.111.229', 'Edge 119.0.0.0 (Windows 10)', 'Read News', '2023-11-17 08:41:42', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(171, 1, 11, '192.168.111.229', 'Edge 119.0.0.0 (Windows 10)', 'Read News', '2023-11-17 08:42:51', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(172, 1, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Login System', '2023-11-20 00:50:35', ''),
(173, 0, 11, '192.168.111.183', 'Edge 119.0.0.0 (Windows 10)', 'Read News', '2023-11-20 01:34:29', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(174, 0, 11, '192.168.111.183', 'Edge 119.0.0.0 (Windows 10)', 'Read News', '2023-11-20 01:35:56', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(175, 0, 11, '192.168.111.183', 'Edge 119.0.0.0 (Windows 10)', 'Read News', '2023-11-20 01:36:18', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(176, 0, 11, '192.168.111.183', 'Edge 119.0.0.0 (Windows 10)', 'Read News', '2023-11-20 01:36:37', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(177, 0, 11, '192.168.111.183', 'Edge 119.0.0.0 (Windows 10)', 'Read News', '2023-11-20 01:38:23', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(178, 0, 11, '192.168.111.183', 'Edge 119.0.0.0 (Windows 10)', 'Read News', '2023-11-20 01:38:38', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(179, 0, 11, '192.168.111.183', 'Edge 119.0.0.0 (Windows 10)', 'Read News', '2023-11-20 01:39:16', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(180, 13, 0, '192.168.111.183', 'Edge 119.0.0.0 (Windows 10)', 'Login System', '2023-11-20 02:13:45', ''),
(181, 13, 11, '192.168.111.183', 'Edge 119.0.0.0 (Windows 10)', 'Read News', '2023-11-20 02:13:48', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(182, 13, 11, '192.168.111.183', 'Edge 119.0.0.0 (Windows 10)', 'Read News', '2023-11-20 02:15:15', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(183, 1, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Logout System', '2023-11-20 02:40:49', ''),
(184, 1, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Login System', '2023-11-20 02:40:55', ''),
(185, 13, 0, '192.168.111.183', 'Edge 119.0.0.0 (Windows 10)', 'Access Menu Profile', '2023-11-20 02:41:59', ''),
(186, 13, 0, '192.168.111.183', 'Edge 119.0.0.0 (Windows 10)', 'Logout System', '2023-11-20 02:42:01', ''),
(187, 1, 0, '192.168.111.183', 'Edge 119.0.0.0 (Windows 10)', 'Login System', '2023-11-20 02:42:08', ''),
(188, 1, 11, '192.168.111.183', 'Edge 119.0.0.0 (Windows 10)', 'Read News', '2023-11-20 03:05:09', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(189, 1, 11, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-20 04:21:16', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(190, 1, 0, '192.168.111.183', 'Edge 119.0.0.0 (Windows 10)', 'Login System', '2023-11-20 06:11:31', ''),
(191, 1, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Login System', '2023-11-20 07:10:28', ''),
(192, 1, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Login System', '2023-11-21 01:00:14', ''),
(193, 1, 11, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-21 01:00:31', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(194, 1, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Login System', '2023-11-21 03:11:13', ''),
(195, 2, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Login System', '2023-11-21 06:30:15', ''),
(196, 2, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Logout System', '2023-11-21 07:10:00', ''),
(197, 1, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Login System', '2023-11-21 07:10:06', ''),
(198, 1, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Logout System', '2023-11-21 07:10:18', ''),
(199, 2, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Login System', '2023-11-21 07:10:23', ''),
(200, 2, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Logout System', '2023-11-21 07:30:07', ''),
(201, 1, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Login System', '2023-11-21 07:30:16', ''),
(202, 1, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Logout System', '2023-11-21 07:30:29', ''),
(203, 2, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Login System', '2023-11-21 07:30:34', ''),
(204, 2, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Create News', '2023-11-21 07:32:12', ''),
(205, 2, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Create News', '2023-11-21 07:35:09', ''),
(206, 2, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Logout System', '2023-11-21 07:35:24', ''),
(207, 1, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Login System', '2023-11-21 07:35:30', ''),
(208, 1, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Create News', '2023-11-21 07:36:58', ''),
(209, 1, 17, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-21 07:37:11', 'jas-successfully-handled-the-arrival-of-covid-19-vaccine-in-indonesia'),
(210, 1, 17, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-21 07:37:17', 'jas-successfully-handled-the-arrival-of-covid-19-vaccine-in-indonesia'),
(211, 1, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Logout System', '2023-11-21 07:37:21', ''),
(212, 2, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Login System', '2023-11-21 07:37:26', ''),
(213, 0, 17, '192.168.111.205', 'Firefox 115.0 (Windows 7)', 'Read News', '2023-11-21 07:39:26', 'jas-successfully-handled-the-arrival-of-covid-19-vaccine-in-indonesia'),
(214, 0, 17, '192.168.111.205', 'Firefox 115.0 (Windows 7)', 'Read News', '2023-11-21 07:43:04', 'jas-successfully-handled-the-arrival-of-covid-19-vaccine-in-indonesia'),
(215, 2, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Logout System', '2023-11-21 08:11:17', ''),
(216, 2, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Login System', '2023-11-21 08:12:55', ''),
(217, 0, 0, '192.168.111.205', '', 'Register Account', '2023-11-21 08:22:06', ''),
(218, 17, 0, '192.168.111.205', 'Firefox 115.0 (Windows 7)', 'Login System', '2023-11-21 08:22:45', ''),
(219, 17, 17, '192.168.111.205', 'Firefox 115.0 (Windows 7)', 'Read News', '2023-11-21 08:22:54', 'jas-successfully-handled-the-arrival-of-covid-19-vaccine-in-indonesia'),
(220, 17, 17, '192.168.111.205', 'Firefox 115.0 (Windows 7)', 'Add Comment', '2023-11-21 08:24:00', 'jas-successfully-handled-the-arrival-of-covid-19-vaccine-in-indonesia'),
(221, 17, 17, '192.168.111.205', 'Firefox 115.0 (Windows 7)', 'Read News', '2023-11-21 08:23:01', 'jas-successfully-handled-the-arrival-of-covid-19-vaccine-in-indonesia'),
(222, 17, 17, '192.168.111.205', 'Firefox 115.0 (Windows 7)', 'Add Comment', '2023-11-21 08:23:16', 'jas-successfully-handled-the-arrival-of-covid-19-vaccine-in-indonesia'),
(223, 17, 17, '192.168.111.205', 'Firefox 115.0 (Windows 7)', 'Read News', '2023-11-21 08:23:16', 'jas-successfully-handled-the-arrival-of-covid-19-vaccine-in-indonesia'),
(224, 17, 17, '192.168.111.205', 'Firefox 115.0 (Windows 7)', 'Add Comment', '2023-11-21 08:23:26', 'jas-successfully-handled-the-arrival-of-covid-19-vaccine-in-indonesia'),
(225, 17, 17, '192.168.111.205', 'Firefox 115.0 (Windows 7)', 'Read News', '2023-11-21 08:23:26', 'jas-successfully-handled-the-arrival-of-covid-19-vaccine-in-indonesia'),
(226, 17, 17, '192.168.111.205', 'Firefox 115.0 (Windows 7)', 'Read News', '2023-11-21 08:23:32', 'jas-successfully-handled-the-arrival-of-covid-19-vaccine-in-indonesia'),
(227, 2, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Login System', '2023-11-21 08:23:37', ''),
(228, 1, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Login System', '2023-11-22 01:01:41', ''),
(229, 1, 5, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-22 01:01:59', 'dukung-ktt-ke-43-asean-jas-tangani-20-penerbangan-vvip-delegasi-enam-negara-peserta'),
(230, 1, 16, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-22 01:07:46', 'jas-tangani-keberangkatan-jemaah-haji-jawa-barat-dari-bandara-kertajati'),
(231, 1, 16, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-22 01:07:52', 'jas-tangani-keberangkatan-jemaah-haji-jawa-barat-dari-bandara-kertajati'),
(232, 1, 11, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-22 01:08:09', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(233, 1, 11, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Add Comment', '2023-11-22 01:08:15', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(234, 1, 11, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-22 01:08:15', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(235, 1, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Logout System', '2023-11-22 01:13:12', ''),
(236, 13, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Login System', '2023-11-22 01:13:20', ''),
(237, 13, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Access Menu Profile', '2023-11-22 01:13:24', ''),
(238, 13, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Edit Profile', '2023-11-22 01:13:34', ''),
(239, 13, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Edit Profile', '2023-11-22 01:13:42', ''),
(240, 13, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Access Menu Profile', '2023-11-22 01:14:04', ''),
(241, 13, 11, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-22 01:14:15', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(242, 13, 13, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-22 01:14:39', 'jas-siap-tangani-operasional-pesawat-penumpang-terbesar-di-dunia-airbus-a380'),
(243, 13, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Logout System', '2023-11-22 01:14:48', ''),
(244, 1, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Login System', '2023-11-22 01:14:55', ''),
(245, 1, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Edit News', '2023-11-22 01:18:03', ''),
(246, 1, 11, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-22 01:18:32', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(247, 1, 11, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-22 01:18:38', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(248, 1, 11, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-22 01:18:44', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(249, 1, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Edit News', '2023-11-22 01:18:55', ''),
(250, 1, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Edit News', '2023-11-22 01:19:20', ''),
(251, 1, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Edit News', '2023-11-22 01:20:11', ''),
(252, 1, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Create News', '2023-11-22 01:21:13', ''),
(253, 1, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Logout System', '2023-11-22 01:33:32', ''),
(254, 13, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Login System', '2023-11-22 01:33:39', ''),
(255, 13, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Access Menu Profile', '2023-11-22 01:33:42', ''),
(256, 13, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Edit Profile', '2023-11-22 01:33:49', ''),
(257, 13, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Access Menu Profile', '2023-11-22 01:33:49', ''),
(258, 13, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Edit Profile', '2023-11-22 01:36:22', ''),
(259, 13, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Access Menu Profile', '2023-11-22 01:36:22', ''),
(260, 13, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Edit Profile', '2023-11-22 01:36:29', ''),
(261, 13, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Access Menu Profile', '2023-11-22 01:36:30', ''),
(262, 1, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Login System', '2023-11-22 01:41:50', ''),
(263, 1, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Logout System', '2023-11-22 01:42:02', ''),
(264, 13, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Login System', '2023-11-22 01:42:10', ''),
(265, 13, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Access Menu Profile', '2023-11-22 01:42:12', ''),
(266, 13, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Edit Profile', '2023-11-22 01:42:18', ''),
(267, 13, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Access Menu Profile', '2023-11-22 01:42:18', ''),
(268, 13, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Access Menu Profile', '2023-11-22 01:43:32', ''),
(269, 13, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Edit Profile', '2023-11-22 01:45:59', ''),
(270, 13, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Access Menu Profile', '2023-11-22 01:45:59', ''),
(271, 13, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Access Menu Profile', '2023-11-22 01:46:18', ''),
(272, 13, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Access Menu Profile', '2023-11-22 01:46:19', ''),
(273, 13, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Edit Profile', '2023-11-22 01:55:18', ''),
(274, 13, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Access Menu Profile', '2023-11-22 01:55:18', ''),
(275, 1, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Login System', '2023-11-22 02:25:26', ''),
(276, 1, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Logout System', '2023-11-22 02:25:53', ''),
(277, 13, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Login System', '2023-11-22 02:26:00', ''),
(278, 13, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Access Menu Profile', '2023-11-22 02:26:15', ''),
(279, 13, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Edit Profile', '2023-11-22 02:26:21', ''),
(280, 13, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Access Menu Profile', '2023-11-22 02:26:21', ''),
(281, 13, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Access Menu Profile', '2023-11-22 02:26:24', ''),
(282, 13, 11, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-22 02:26:27', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(283, 13, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Access Menu Profile', '2023-11-22 02:26:33', ''),
(284, 13, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Edit Profile', '2023-11-22 02:26:44', ''),
(285, 13, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Access Menu Profile', '2023-11-22 02:26:44', ''),
(286, 13, 11, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-22 02:26:47', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(287, 13, 11, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-22 04:24:24', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(288, 13, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Access Menu Profile', '2023-11-22 04:24:41', ''),
(289, 13, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Logout System', '2023-11-22 04:24:45', ''),
(290, 1, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Login System', '2023-11-22 07:30:33', ''),
(291, 1, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Logout System', '2023-11-22 07:30:36', ''),
(292, 1, 0, '192.168.111.183', 'Edge 119.0.0.0 (Windows 10)', 'Login System', '2023-11-23 01:30:01', ''),
(293, 1, 0, '192.168.111.183', 'Edge 119.0.0.0 (Windows 10)', 'Logout System', '2023-11-23 01:30:39', ''),
(294, 1, 0, '192.168.111.183', 'Edge 119.0.0.0 (Windows 10)', 'Login System', '2023-11-23 01:30:45', ''),
(295, 1, 0, '192.168.111.183', 'Edge 119.0.0.0 (Windows 10)', 'Logout System', '2023-11-23 01:31:06', ''),
(296, 2, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Login System', '2023-11-23 02:09:42', ''),
(297, 1, 0, '192.168.111.183', 'Edge 119.0.0.0 (Windows 10)', 'Login System', '2023-11-23 02:15:24', ''),
(298, 1, 0, '192.168.111.183', 'Edge 119.0.0.0 (Windows 10)', 'Logout System', '2023-11-23 02:28:47', ''),
(299, 2, 0, '192.168.111.183', 'Edge 119.0.0.0 (Windows 10)', 'Login System', '2023-11-23 02:28:58', ''),
(300, 2, 0, '192.168.111.183', 'Edge 119.0.0.0 (Windows 10)', 'Logout System', '2023-11-23 03:58:53', ''),
(301, 1, 0, '192.168.111.183', 'Edge 119.0.0.0 (Windows 10)', 'Login System', '2023-11-23 03:59:00', ''),
(302, 1, 0, '192.168.111.183', 'Edge 119.0.0.0 (Windows 10)', 'Login System', '2023-11-23 07:37:09', ''),
(303, 1, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Login System', '2023-11-24 06:14:57', ''),
(304, 1, 0, '192.168.111.183', 'Edge 119.0.0.0 (Windows 10)', 'Login System', '2023-11-27 02:17:02', ''),
(305, 0, 16, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-27 02:49:07', 'jas-tangani-keberangkatan-jemaah-haji-jawa-barat-dari-bandara-kertajati'),
(306, 0, 11, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-27 02:49:12', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(307, 0, 11, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-27 02:49:16', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(308, 1, 11, '192.168.111.183', 'Edge 119.0.0.0 (Windows 10)', 'Read News', '2023-11-27 02:49:26', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(309, 1, 0, '192.168.111.183', 'Edge 119.0.0.0 (Windows 10)', 'Logout System', '2023-11-27 03:41:48', ''),
(310, 1, 0, '192.168.111.183', 'Edge 119.0.0.0 (Windows 10)', 'Login System', '2023-11-27 03:41:56', ''),
(311, 1, 0, '192.168.111.183', 'Edge 119.0.0.0 (Windows 10)', 'Login System', '2023-11-27 06:26:57', ''),
(312, 1, 0, '192.168.111.183', 'Edge 119.0.0.0 (Windows 10)', 'Logout System', '2023-11-27 06:26:58', ''),
(313, 2, 0, '192.168.111.183', 'Edge 119.0.0.0 (Windows 10)', 'Login System', '2023-11-27 06:27:07', ''),
(314, 0, 16, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-27 08:05:28', 'jas-tangani-keberangkatan-jemaah-haji-jawa-barat-dari-bandara-kertajati'),
(315, 2, 0, '192.168.111.183', 'Edge 119.0.0.0 (Windows 10)', 'Login System', '2023-11-27 08:34:48', ''),
(316, 2, 0, '192.168.111.183', 'Edge 119.0.0.0 (Windows 10)', 'Login System', '2023-11-28 01:02:40', ''),
(317, 0, 13, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-28 01:03:38', 'jas-siap-tangani-operasional-pesawat-penumpang-terbesar-di-dunia-airbus-a380'),
(318, 2, 11, '192.168.111.183', 'Edge 119.0.0.0 (Windows 10)', 'Read News', '2023-11-28 01:03:45', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(319, 0, 13, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-28 01:05:32', 'jas-siap-tangani-operasional-pesawat-penumpang-terbesar-di-dunia-airbus-a380'),
(320, 0, 16, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-28 01:24:03', 'jas-tangani-keberangkatan-jemaah-haji-jawa-barat-dari-bandara-kertajati'),
(321, 0, 16, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-28 01:24:17', 'jas-tangani-keberangkatan-jemaah-haji-jawa-barat-dari-bandara-kertajati'),
(322, 0, 16, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-28 01:35:00', 'jas-tangani-keberangkatan-jemaah-haji-jawa-barat-dari-bandara-kertajati'),
(323, 0, 16, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-28 01:49:33', 'jas-tangani-keberangkatan-jemaah-haji-jawa-barat-dari-bandara-kertajati'),
(324, 0, 16, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-28 01:49:41', 'jas-tangani-keberangkatan-jemaah-haji-jawa-barat-dari-bandara-kertajati'),
(325, 0, 16, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-28 01:50:12', 'jas-tangani-keberangkatan-jemaah-haji-jawa-barat-dari-bandara-kertajati'),
(326, 0, 16, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-28 01:50:43', 'jas-tangani-keberangkatan-jemaah-haji-jawa-barat-dari-bandara-kertajati'),
(327, 0, 16, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-28 01:50:47', 'jas-tangani-keberangkatan-jemaah-haji-jawa-barat-dari-bandara-kertajati'),
(328, 0, 16, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-28 01:51:00', 'jas-tangani-keberangkatan-jemaah-haji-jawa-barat-dari-bandara-kertajati'),
(329, 0, 16, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-28 01:52:00', 'jas-tangani-keberangkatan-jemaah-haji-jawa-barat-dari-bandara-kertajati'),
(330, 1, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Login System', '2023-11-28 01:52:15', ''),
(331, 1, 16, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-28 01:52:19', 'jas-tangani-keberangkatan-jemaah-haji-jawa-barat-dari-bandara-kertajati'),
(332, 1, 13, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-28 01:52:22', 'jas-siap-tangani-operasional-pesawat-penumpang-terbesar-di-dunia-airbus-a380'),
(333, 1, 16, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-28 01:52:28', 'jas-tangani-keberangkatan-jemaah-haji-jawa-barat-dari-bandara-kertajati');
INSERT INTO `tlog` (`id_log`, `id_user`, `id_berita`, `ip_add`, `browser`, `remarks`, `time_access`, `slug`) VALUES
(334, 1, 16, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Add Comment', '2023-11-28 01:52:34', 'jas-tangani-keberangkatan-jemaah-haji-jawa-barat-dari-bandara-kertajati'),
(335, 1, 16, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-28 01:52:34', 'jas-tangani-keberangkatan-jemaah-haji-jawa-barat-dari-bandara-kertajati'),
(336, 1, 16, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-28 01:52:51', 'jas-tangani-keberangkatan-jemaah-haji-jawa-barat-dari-bandara-kertajati'),
(337, 2, 5, '192.168.111.183', 'Edge 119.0.0.0 (Windows 10)', 'Read News', '2023-11-28 01:53:27', 'dukung-ktt-ke-43-asean-jas-tangani-20-penerbangan-vvip-delegasi-enam-negara-peserta'),
(338, 1, 16, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-28 01:54:08', 'jas-tangani-keberangkatan-jemaah-haji-jawa-barat-dari-bandara-kertajati'),
(339, 1, 16, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-28 01:54:13', 'jas-tangani-keberangkatan-jemaah-haji-jawa-barat-dari-bandara-kertajati'),
(340, 1, 16, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-28 01:54:48', 'jas-tangani-keberangkatan-jemaah-haji-jawa-barat-dari-bandara-kertajati'),
(341, 1, 16, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-28 01:56:34', 'jas-tangani-keberangkatan-jemaah-haji-jawa-barat-dari-bandara-kertajati'),
(342, 1, 16, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-28 01:57:42', 'jas-tangani-keberangkatan-jemaah-haji-jawa-barat-dari-bandara-kertajati'),
(343, 1, 16, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-28 01:58:41', 'jas-tangani-keberangkatan-jemaah-haji-jawa-barat-dari-bandara-kertajati'),
(344, 1, 16, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-28 01:58:44', 'jas-tangani-keberangkatan-jemaah-haji-jawa-barat-dari-bandara-kertajati'),
(345, 1, 16, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-28 01:58:48', 'jas-tangani-keberangkatan-jemaah-haji-jawa-barat-dari-bandara-kertajati'),
(346, 1, 16, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-28 01:59:00', 'jas-tangani-keberangkatan-jemaah-haji-jawa-barat-dari-bandara-kertajati'),
(347, 1, 16, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-28 01:59:06', 'jas-tangani-keberangkatan-jemaah-haji-jawa-barat-dari-bandara-kertajati'),
(348, 1, 16, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-28 01:59:26', 'jas-tangani-keberangkatan-jemaah-haji-jawa-barat-dari-bandara-kertajati'),
(349, 1, 16, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-28 01:59:33', 'jas-tangani-keberangkatan-jemaah-haji-jawa-barat-dari-bandara-kertajati'),
(350, 2, 0, '192.168.111.183', 'Edge 119.0.0.0 (Windows 10)', 'Logout System', '2023-11-28 01:59:49', ''),
(351, 1, 0, '192.168.111.183', 'Edge 119.0.0.0 (Windows 10)', 'Login System', '2023-11-28 01:59:58', ''),
(352, 1, 0, '192.168.111.183', 'Edge 119.0.0.0 (Windows 10)', 'Logout System', '2023-11-28 02:03:58', ''),
(353, 1, 0, '192.168.111.183', 'Edge 119.0.0.0 (Windows 10)', 'Login System', '2023-11-28 02:15:32', ''),
(354, 1, 0, '192.168.111.183', 'Edge 119.0.0.0 (Windows 10)', 'Logout System', '2023-11-28 02:15:52', ''),
(355, 3, 0, '192.168.111.183', 'Edge 119.0.0.0 (Windows 10)', 'Login System', '2023-11-28 02:15:59', ''),
(356, 1, 16, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-28 02:17:15', 'jas-tangani-keberangkatan-jemaah-haji-jawa-barat-dari-bandara-kertajati'),
(357, 1, 16, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-28 02:17:23', 'jas-tangani-keberangkatan-jemaah-haji-jawa-barat-dari-bandara-kertajati'),
(358, 1, 16, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-28 02:17:32', 'jas-tangani-keberangkatan-jemaah-haji-jawa-barat-dari-bandara-kertajati'),
(359, 1, 16, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-28 02:17:54', 'jas-tangani-keberangkatan-jemaah-haji-jawa-barat-dari-bandara-kertajati'),
(360, 1, 16, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-28 02:18:02', 'jas-tangani-keberangkatan-jemaah-haji-jawa-barat-dari-bandara-kertajati'),
(361, 1, 16, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-28 02:18:08', 'jas-tangani-keberangkatan-jemaah-haji-jawa-barat-dari-bandara-kertajati'),
(362, 3, 0, '192.168.111.183', 'Edge 119.0.0.0 (Windows 10)', 'Access Menu Profile', '2023-11-28 02:32:34', ''),
(363, 0, 16, '192.168.111.70', 'Firefox 115.0 (Windows 7)', 'Read News', '2023-11-29 03:25:18', 'jas-tangani-keberangkatan-jemaah-haji-jawa-barat-dari-bandara-kertajati'),
(364, 0, 11, '192.168.111.70', 'Firefox 115.0 (Windows 7)', 'Read News', '2023-11-29 03:33:28', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(365, 0, 16, '192.168.111.70', 'Firefox 115.0 (Windows 7)', 'Read News', '2023-11-29 03:34:54', 'jas-tangani-keberangkatan-jemaah-haji-jawa-barat-dari-bandara-kertajati'),
(366, 0, 11, '192.168.111.70', 'Firefox 115.0 (Windows 7)', 'Read News', '2023-11-29 03:35:07', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(367, 13, 0, '192.168.111.70', 'Firefox 115.0 (Windows 7)', 'Login System', '2023-11-29 03:35:53', ''),
(368, 13, 11, '192.168.111.70', 'Firefox 115.0 (Windows 7)', 'Read News', '2023-11-29 03:35:59', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(369, 13, 11, '192.168.111.70', 'Firefox 115.0 (Windows 7)', 'Add Comment', '2023-11-29 03:36:25', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(370, 13, 11, '192.168.111.70', 'Firefox 115.0 (Windows 7)', 'Read News', '2023-11-29 03:36:25', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(371, 13, 0, '192.168.111.70', 'Firefox 115.0 (Windows 7)', 'Access Menu Profile', '2023-11-29 03:38:15', ''),
(372, 13, 0, '192.168.111.70', 'Firefox 115.0 (Windows 7)', 'Logout System', '2023-11-29 03:39:23', ''),
(373, 0, 0, '192.168.111.70', '', 'Register Account', '2023-11-29 03:40:27', ''),
(374, 19, 0, '192.168.111.70', 'Firefox 115.0 (Windows 7)', 'Login System', '2023-11-29 03:41:17', ''),
(375, 19, 0, '192.168.111.70', 'Firefox 115.0 (Windows 7)', 'Access Menu Profile', '2023-11-29 03:41:24', ''),
(376, 19, 0, '192.168.111.70', 'Firefox 115.0 (Windows 7)', 'Edit Profile', '2023-11-29 03:41:49', ''),
(377, 19, 0, '192.168.111.70', 'Firefox 115.0 (Windows 7)', 'Access Menu Profile', '2023-11-29 03:41:49', ''),
(378, 19, 0, '192.168.111.70', 'Firefox 115.0 (Windows 7)', 'Logout System', '2023-11-29 04:12:32', ''),
(379, 1, 0, '192.168.111.70', 'Firefox 115.0 (Windows 7)', 'Login System', '2023-11-29 04:12:56', ''),
(380, 1, 0, '192.168.111.70', 'Firefox 115.0 (Windows 7)', 'Edit News', '2023-11-29 04:32:48', ''),
(381, 1, 16, '192.168.111.70', 'Firefox 115.0 (Windows 7)', 'Read News', '2023-11-29 04:35:35', 'jas-tangani-keberangkatan-jemaah-haji-jawa-barat-dari-bandara-kertajati'),
(382, 1, 0, '192.168.111.70', 'Firefox 115.0 (Windows 7)', 'Create News', '2023-11-29 04:36:55', ''),
(383, 1, 0, '192.168.111.70', 'Firefox 115.0 (Windows 7)', 'Edit News', '2023-11-29 04:37:47', ''),
(384, 1, 20, '192.168.111.70', 'Firefox 115.0 (Windows 7)', 'Read News', '2023-11-29 04:38:00', 'asdf'),
(385, 1, 17, '192.168.111.70', 'Firefox 115.0 (Windows 7)', 'Read News', '2023-11-29 04:39:30', 'jas-successfully-handled-the-arrival-of-covid-19-vaccine-in-indonesia'),
(386, 1, 17, '192.168.111.70', 'Firefox 115.0 (Windows 7)', 'Read News', '2023-11-29 04:39:51', 'jas-successfully-handled-the-arrival-of-covid-19-vaccine-in-indonesia'),
(387, 1, 0, '192.168.111.70', 'Firefox 115.0 (Windows 7)', 'Logout System', '2023-11-29 04:40:46', ''),
(388, 1, 0, '192.168.111.70', 'Firefox 115.0 (Windows 7)', 'Login System', '2023-11-29 04:41:24', ''),
(389, 1, 0, '192.168.111.70', 'Firefox 115.0 (Windows 7)', 'Logout System', '2023-11-29 04:42:58', ''),
(390, 2, 0, '192.168.111.70', 'Firefox 115.0 (Windows 7)', 'Login System', '2023-11-29 04:43:09', ''),
(391, 2, 0, '192.168.111.70', 'Firefox 115.0 (Windows 7)', 'Logout System', '2023-11-29 04:47:58', ''),
(392, 1, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Login System', '2023-11-29 08:06:32', ''),
(393, 1, 20, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-29 08:13:43', 'asdf'),
(394, 1, 20, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Add Comment', '2023-11-29 08:13:46', 'asdf'),
(395, 1, 20, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-29 08:13:46', 'asdf'),
(396, 1, 20, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-29 08:13:54', 'asdf'),
(397, 1, 20, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-29 08:14:59', 'asdf'),
(398, 1, 20, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-29 08:15:00', 'asdf'),
(399, 1, 20, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-29 08:16:54', 'asdf'),
(400, 1, 20, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-29 08:17:03', 'asdf'),
(401, 1, 20, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-29 08:17:06', 'asdf'),
(402, 1, 20, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Add Comment', '2023-11-29 08:17:23', 'asdf'),
(403, 1, 20, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-29 08:17:23', 'asdf'),
(404, 1, 20, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-29 08:17:26', 'asdf'),
(405, 1, 20, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-29 08:17:35', 'asdf'),
(406, 1, 20, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-29 08:19:10', 'asdf'),
(407, 1, 20, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-29 08:19:12', 'asdf'),
(408, 1, 20, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-29 08:19:41', 'asdf'),
(409, 1, 20, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-29 08:19:43', 'asdf'),
(410, 1, 20, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-29 08:19:51', 'asdf'),
(411, 1, 20, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-29 08:19:52', 'asdf'),
(412, 1, 20, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-29 08:20:08', 'asdf'),
(413, 1, 20, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-29 08:20:09', 'asdf'),
(414, 1, 20, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-29 08:20:28', 'asdf'),
(415, 1, 20, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-29 08:20:44', 'asdf'),
(416, 1, 20, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-29 08:20:51', 'asdf'),
(417, 1, 20, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-29 08:20:56', 'asdf'),
(418, 1, 20, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-29 08:47:41', 'asdf'),
(419, 1, 20, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-29 08:47:54', 'asdf'),
(420, 1, 20, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-29 08:47:57', 'asdf'),
(421, 1, 20, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-29 08:47:57', 'asdf'),
(422, 1, 20, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-29 08:48:26', 'asdf'),
(423, 1, 20, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-29 08:48:39', 'asdf'),
(424, 1, 20, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-29 08:48:55', 'asdf'),
(425, 1, 20, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-29 08:49:09', 'asdf'),
(426, 1, 20, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-11-29 08:53:09', 'asdf'),
(427, 1, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Login System', '2023-11-30 02:08:45', ''),
(428, 1, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Create News', '2023-11-30 02:13:21', ''),
(429, 1, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Create News', '2023-11-30 02:13:37', ''),
(430, 1, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Create News', '2023-11-30 02:13:52', ''),
(431, 1, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Create News', '2023-11-30 02:14:17', ''),
(432, 1, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Create News', '2023-11-30 02:14:29', ''),
(433, 1, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Create News', '2023-11-30 02:14:45', ''),
(434, 1, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Login System', '2023-11-30 07:22:36', ''),
(435, 1, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Add Information', '2023-11-30 08:31:45', ''),
(436, 1, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Add Information', '2023-11-30 08:32:40', ''),
(437, 1, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Login System', '2023-12-04 02:26:33', ''),
(438, 1, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Add Information', '2023-12-04 02:34:20', ''),
(439, 1, 0, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Add Information', '2023-12-04 02:34:37', ''),
(440, 1, 21, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-12-04 02:36:38', 'berita-1'),
(441, 1, 21, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-12-04 02:37:13', 'berita-1'),
(442, 0, 21, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-12-04 02:38:06', 'berita-1'),
(443, 0, 20, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-12-04 02:38:17', 'asdf'),
(444, 1, 21, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-12-04 02:41:45', 'berita-1'),
(445, 1, 21, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-12-04 02:41:57', 'berita-1'),
(446, 1, 21, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-12-04 02:42:14', 'berita-1'),
(447, 1, 21, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-12-04 02:57:54', 'berita-1'),
(448, 1, 21, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-12-04 02:58:10', 'berita-1'),
(449, 1, 21, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-12-04 02:58:18', 'berita-1'),
(450, 1, 21, '192.168.111.183', 'Chrome 119.0.0.0 (Windows 10)', 'Read News', '2023-12-04 02:58:59', 'berita-1'),
(451, 1, 0, '192.168.111.183', 'Edge 119.0.0.0 (Windows 10)', 'Login System', '2023-12-05 01:55:30', ''),
(452, 1, 0, '192.168.111.183', 'Edge 119.0.0.0 (Windows 10)', 'Logout System', '2023-12-05 02:50:58', ''),
(453, 0, 11, '192.168.111.36', 'Firefox 120.0 (Windows 10)', 'Read News', '2023-12-06 01:16:19', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(454, 1, 0, '192.168.111.183', 'Chrome 120.0.0.0 (Windows 10)', 'Login System', '2023-12-06 01:16:32', ''),
(455, 0, 11, '192.168.111.36', 'Firefox 120.0 (Windows 10)', 'Read News', '2023-12-06 01:16:34', 'jas-airport-services-sukses-menyelesaikan-penanganan-249-penerbangan-haji-2023'),
(456, 1, 5, '192.168.111.183', 'Chrome 120.0.0.0 (Windows 10)', 'Read News', '2023-12-06 01:50:30', 'dukung-ktt-ke-43-asean-jas-tangani-20-penerbangan-vvip-delegasi-enam-negara-peserta'),
(457, 1, 0, '192.168.111.183', 'Chrome 120.0.0.0 (Windows 10)', 'Edit News', '2023-12-06 02:02:00', ''),
(458, 1, 0, '192.168.111.183', 'Chrome 120.0.0.0 (Windows 10)', 'Edit News', '2023-12-06 02:02:33', ''),
(459, 1, 0, '192.168.111.183', 'Chrome 120.0.0.0 (Windows 10)', 'Edit News', '2023-12-06 02:06:50', ''),
(460, 1, 0, '192.168.111.183', 'Chrome 120.0.0.0 (Windows 10)', 'Edit News', '2023-12-06 02:06:50', ''),
(461, 1, 0, '192.168.111.183', 'Chrome 120.0.0.0 (Windows 10)', 'Edit News', '2023-12-06 02:09:41', ''),
(462, 1, 0, '192.168.111.183', 'Chrome 120.0.0.0 (Windows 10)', 'Edit News', '2023-12-06 02:13:09', ''),
(463, 1, 0, '192.168.111.183', 'Chrome 120.0.0.0 (Windows 10)', 'Edit News', '2023-12-06 02:14:22', ''),
(464, 1, 0, '192.168.111.183', 'Chrome 120.0.0.0 (Windows 10)', 'Edit News', '2023-12-06 02:15:32', ''),
(465, 1, 0, '192.168.111.183', 'Chrome 120.0.0.0 (Windows 10)', 'Edit News', '2023-12-06 02:18:36', ''),
(466, 1, 0, '192.168.111.183', 'Chrome 120.0.0.0 (Windows 10)', 'Edit News', '2023-12-06 02:19:13', ''),
(467, 1, 0, '192.168.111.183', 'Chrome 120.0.0.0 (Windows 10)', 'Edit News', '2023-12-06 02:19:23', ''),
(468, 1, 0, '192.168.111.183', 'Chrome 120.0.0.0 (Windows 10)', 'Edit News', '2023-12-06 02:20:14', ''),
(469, 1, 0, '192.168.111.183', 'Chrome 120.0.0.0 (Windows 10)', 'Edit News', '2023-12-06 02:20:22', ''),
(470, 1, 0, '192.168.111.183', 'Chrome 120.0.0.0 (Windows 10)', 'Edit News', '2023-12-06 02:20:49', ''),
(471, 1, 0, '192.168.111.183', 'Chrome 120.0.0.0 (Windows 10)', 'Edit News', '2023-12-06 02:21:05', ''),
(472, 1, 0, '192.168.111.183', 'Chrome 120.0.0.0 (Windows 10)', 'Edit News', '2023-12-06 02:21:15', ''),
(473, 1, 0, '192.168.111.183', 'Chrome 120.0.0.0 (Windows 10)', 'Edit News', '2023-12-06 02:21:41', ''),
(474, 1, 0, '192.168.111.183', 'Chrome 120.0.0.0 (Windows 10)', 'Edit News', '2023-12-06 02:21:52', ''),
(475, 1, 0, '192.168.111.183', 'Chrome 120.0.0.0 (Windows 10)', 'Edit News', '2023-12-06 02:40:13', ''),
(476, 1, 0, '192.168.111.183', 'Chrome 120.0.0.0 (Windows 10)', 'Edit News', '2023-12-06 02:40:38', ''),
(477, 1, 0, '192.168.111.183', 'Chrome 120.0.0.0 (Windows 10)', 'Logout System', '2023-12-06 02:42:39', ''),
(478, 13, 0, '192.168.111.183', 'Chrome 120.0.0.0 (Windows 10)', 'Login System', '2023-12-06 02:42:46', ''),
(479, 13, 0, '192.168.111.183', 'Chrome 120.0.0.0 (Windows 10)', 'Access Menu Profile', '2023-12-06 02:42:48', ''),
(480, 13, 0, '192.168.111.183', 'Chrome 120.0.0.0 (Windows 10)', 'Access Menu Profile', '2023-12-06 02:44:07', ''),
(481, 13, 0, '192.168.111.183', 'Chrome 120.0.0.0 (Windows 10)', 'Access Menu Profile', '2023-12-06 02:44:25', ''),
(482, 13, 0, '192.168.111.183', 'Chrome 120.0.0.0 (Windows 10)', 'Edit Profile', '2023-12-06 02:47:21', ''),
(483, 13, 0, '192.168.111.183', 'Chrome 120.0.0.0 (Windows 10)', 'Access Menu Profile', '2023-12-06 02:47:21', ''),
(484, 13, 0, '192.168.111.183', 'Chrome 120.0.0.0 (Windows 10)', 'Logout System', '2023-12-06 02:47:32', ''),
(485, 1, 0, '192.168.111.183', 'Chrome 120.0.0.0 (Windows 10)', 'Login System', '2023-12-06 02:47:40', ''),
(486, 1, 0, '192.168.111.183', 'Chrome 120.0.0.0 (Windows 10)', 'Logout System', '2023-12-06 02:54:01', ''),
(487, 1, 0, '192.168.111.183', 'Chrome 120.0.0.0 (Windows 10)', 'Login System', '2023-12-06 02:59:18', ''),
(488, 1, 0, '192.168.111.183', 'Chrome 120.0.0.0 (Windows 10)', 'Logout System', '2023-12-06 02:59:51', ''),
(489, 1, 0, '192.168.111.183', 'Chrome 120.0.0.0 (Windows 10)', 'Login System', '2023-12-06 03:04:15', ''),
(490, 1, 0, '192.168.111.183', 'Chrome 120.0.0.0 (Windows 10)', 'Logout System', '2023-12-06 03:09:07', ''),
(491, 1, 0, '192.168.111.183', 'Chrome 120.0.0.0 (Windows 10)', 'Login System', '2023-12-06 03:09:13', ''),
(492, 1, 0, '192.168.111.183', 'Chrome 120.0.0.0 (Windows 10)', 'Login System', '2023-12-06 06:12:17', ''),
(493, 1, 0, '192.168.111.183', 'Chrome 120.0.0.0 (Windows 10)', 'Logout System', '2023-12-06 06:13:10', '');

-- --------------------------------------------------------

--
-- Table structure for table `tuser`
--

CREATE TABLE `tuser` (
  `id` int(11) NOT NULL,
  `name_user` varchar(256) NOT NULL,
  `email_user` varchar(256) NOT NULL,
  `password_user` varchar(256) NOT NULL,
  `divisi_user` varchar(256) NOT NULL,
  `fotouser` varchar(256) NOT NULL,
  `role_user` int(11) NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tuser`
--

INSERT INTO `tuser` (`id`, `name_user`, `email_user`, `password_user`, `divisi_user`, `fotouser`, `role_user`, `create_date`) VALUES
(0, 'Visitors', 'null', '$2y$10$5N.TI2XG4IdvLVSaVR2Hnuk2eYO0yl95ZQZ3iFpB0/2PAwVFNR./y', 'null', 'profile.png', 3, '2023-12-06 02:51:39'),
(1, 'Dadang Indra', 'dadang@ptjas.co.id', '$2y$10$G0oFKT1iePqEQ1P1somFCua0hBJsXlnQU/IjmW2uQIdm35WJuwUr2', 'HC Information System', '1701832142_f6cbc41fc8178a406eb3.jpg', 1, '2023-12-06 03:09:02'),
(2, 'Admin', 'admin@gmail.com', '$2y$10$gXPWb31xRg58MsPusZi/vO3P1VizvzILiMp1d4AKV7dpAInLdbJLu', 'HCIS', 'admin.jpg', 2, '2023-12-06 02:52:45'),
(13, 'Tri Agnesti', 'triagnesti@gmail.com', '$2y$10$e22JC.Hm5VQ7gxWbeyVy3ejV4hD5pRyV8gvhk7W0AKDiizyYtrfVO', 'HCIS', '1701830841_fcfe78cc4f292bcfd3e2.jpg', 3, '2023-12-06 02:47:21'),
(20, 'asdf', 'asdf@gmail.com', '$2y$10$ELSgwwegXOjTDOfQI.VZ3u/YVnOaJfDi2xn1ynB0FC.EF.qihWNua', 'HC Recruitment', '1701831226_a070fe72f08b31858e6e.jpg', 3, '2023-12-06 02:53:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tberita`
--
ALTER TABLE `tberita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tinfo`
--
ALTER TABLE `tinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tkategori`
--
ALTER TABLE `tkategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tkomentar`
--
ALTER TABLE `tkomentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tlog`
--
ALTER TABLE `tlog`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `tuser`
--
ALTER TABLE `tuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tberita`
--
ALTER TABLE `tberita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tinfo`
--
ALTER TABLE `tinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tkategori`
--
ALTER TABLE `tkategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tkomentar`
--
ALTER TABLE `tkomentar`
  MODIFY `id` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tlog`
--
ALTER TABLE `tlog`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=494;

--
-- AUTO_INCREMENT for table `tuser`
--
ALTER TABLE `tuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
