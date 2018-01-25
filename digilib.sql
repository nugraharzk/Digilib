-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2017 at 09:27 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digilib`
--

-- --------------------------------------------------------

--
-- Table structure for table `koleksi`
--

CREATE TABLE `koleksi` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `penulis` varchar(255) DEFAULT NULL,
  `subjek` varchar(255) DEFAULT NULL,
  `approved_by` int(11) DEFAULT '0',
  `kategori` varchar(50) DEFAULT NULL,
  `deskripsi` text,
  `lampiran` longtext,
  `c_date` datetime DEFAULT NULL,
  `m_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `koleksi`
--

INSERT INTO `koleksi` (`id`, `user_id`, `judul`, `penulis`, `subjek`, `approved_by`, `kategori`, `deskripsi`, `lampiran`, `c_date`, `m_date`) VALUES
(13, 13, 'Kajian Pengawasan Uji Coba Skala Penuh Pemanfaatan Agregat Lokal di Kalimantan Tengah', 'Nyoman Suaryana', 'perkerasan', 13, 'laporan penelitian', '', 'BBPJ0901.pdf', '2017-09-27 03:34:43', '2017-09-30 04:25:23'),
(14, 13, 'KAJIAN LABORATORIUM STABILISASI TANAH BERBASIS ASPAL DAN BAHAN KIMIA UNTUK PERKERASAN JALAN BERVOLUME LALU LINTAS RENDAH', 'Silvester Fransisko, Nyoman Suaryana', 'perkerasan', 13, 'naskah ilmiah', 'Pemanfaatan bahan lokal dan sub standar untuk perkerasan jalan merupakan suatu upaya yang dilakukan untuk mengatasi keterbatasan bahan berkualitas tinggi sesuai persyaratan spesifikasi yang berlaku saat ini. Dengan pemanfaatan bahan lokal dan sub standar, diharapkan pola pembangunan maupun pemeliharaan jalan bisa berjalan efektif dan efisien.\r\nBeberapa metode dapat diterapkan terkait pemanfaatan bahan lokal dan sub standar untuk perkerasan jalan, diantaranya adalah melakukan stabilisasi. Dengan perbaikan dan/ atau penerapan desain dan spesifikasi yang sesuai, banyak bahan lokal dan sub standar masih menunjukkan kinerja lapangan yang cukup memadai, terutama untuk jalan bervolume lalu lintas rendah.\r\nPada TA. 2011, penelitian teknologi stabilisasi tanah terutama mencakup penelitan laboratorium stabilisasi tanah berbasis aspal dan bahan kimia. Penelitian ini dilakukan dalam rangka menunjang pembangunan jalan-jalan yang bervolume lalu lintas rendah', 'Kajian_Laboratorium_Stabilisasi_Tanah_Berbasis_Aspal_dan_Bahan_Kimia_untuk_Perkerasan_Jalan(1).pdf', '2017-09-27 03:35:43', '2017-09-30 05:14:05'),
(15, 13, 'KINERJA CAMPURAN BERASPAL MENGGUNAKAN ASBUTON BUTIR BGA DAN LGA', 'Ilman Faridl', 'perkerasan', 13, 'naskah ilmiah', 'Naskah ilmiah ini menguraikan kinerja campuran beraspal yang menggunakan asbuton butir. Dari hasil monitoring dan evaluasi yang dilakukan tahun 2011 pada beberapa proyek terpilih yang menggunakan asbuton butir, menunjukkan terdapat beberapa ruas jalan yang mengalami kerusakan sebelum waktunya, yang diperkirakan karena ketidakakuratan perencana untuk penggunaan asbuton butir pada campuran berasapal. Kinerja yang dievaluasi adalah perkerasan jalan beraspal yang menggunakan asbuton butir BGA dan LGA.', 'Kinerja_campuran_beraspal_menggunakan_asbuton_butir_BGA_dan_LGA.pdf', '2017-09-27 03:45:57', '2017-09-30 05:14:18'),
(20, 13, 'Penilaian resiko pembangunan terowongan jalan', 'Fahmi Aldiamar,  Yayan Suryana', 'geoteknik', 13, 'naskah ilmiah', 'Buku naskah ilmiah merupakan output dari kegiatan penelitian dan pengembangan\r\nteknologi terowongan dan jalan bawah tanah di Pusat Penelitian dan Pengembangan\r\nJalan dan Jembatan dengan judul Penyusunan Risk Assessment Pembangunan\r\nTerowongan Jalan (2432.002.135.A). Kegiatan penelitian dan pengembangan\r\nteknologi terowongan dan jalan bawah tanah dimulai sejak tahun 1995 dan akan\r\nberakhir pada tahun 2015. Salah satu tujuan akhir dari kegiatan ini adalah untuk\r\nmenyediakan pedoman perencanaan dan pelaksanaan terowongan jalan yang sesuai\r\ndengan kondisi spesifik tanah dan batuan di Indonesia.', '2011_Penilaian_resiko_pembangunan_terowongan_jalan1.pdf', '2017-09-27 04:03:30', '2017-09-30 05:14:43'),
(21, 13, 'Kajian Bentuk Kontrak Dan Analisa Resiko Kontrak Serta Metode Penggalian Pekerjaan Terowongan Jalan', 'Susy K. Ariestianty, Ellyanti, Fahmi Aldiamar, Yayan Suryana', 'geoteknik', 13, 'naskah ilmiah', 'Buku naskah ilmiah merupakan output dari kegiatan penelitian dan pengembangan\r\ntematik terowongan di Pusat Penelitian dan Pengembangan Jalan dan Jembatan\r\ndengan judul Kajian Dokumen Lelang Pembangunan Terowongan dan Jalan Bawah\r\nTanah (033.11.04.2432.01.135.B). Kegiatan penelitian dan pengembangan\r\nmengenai terowongan jalan telah dimulai sejak tahun 1995 dan akan berakhir pada\r\ntahun 2015. Salah satu tujuan akhir dari kegiatan ini adalah untuk menyediakan\r\nkajian mengenai analisa risiko dan bentuk kontrak yang sesuai untuk pekerjaan\r\nterowongan jalan, serta spesifikasi khusus penggalian tanah untuk terowongan\r\njalan di Indonesia.', '2011_Bentuk_Kontrak_dan_Analisa_Risiko_Kontrak_dalam_Pekerjaan_Penggalian_Terowongan_Jalan.pdf', '2017-09-27 04:04:20', '2017-09-30 05:15:17'),
(22, 11, 'KAJIAN PENANGANAN TANAH LUNAK DENGAN TIMBUNAN JALAN MORTAR BUSA', 'Maulana Iqbal', 'geoteknik', 13, 'naskah ilmiah', 'Deposit tanah lunak di Indonesia mencapai 10 juta hektar atau sekitar 10%\r\ndari luas daratan. Permasalahan yang timbul pada tanah bermasalah ini\r\nadalah stabilitas dan penurunan timbunan. Sebagai salah satu opsi\r\npenanganan jalan di atas tanah lunak, Pusat Penelitian dan Pengembangan\r\nJalan dan Jembatan mengembangkan teknologi timbunan ringan dengan\r\nmortar busa. Mortar busa tersebut mempunyai karakteristik berat isi yang\r\nringan dengan kekuatan yang cukup tinggi sehingga diharapkan tidak terjadi\r\nmasalah stabilitas dan penurunan timbunan maupun tekanan lateral\r\nberlebih pada abutmen jembatan.', 'Kajian Penanganan Tanah Lunak dg Timbunan Jalan Mortar Busa (Timbunan Ringan).pdf', '2017-09-27 04:05:44', '2017-09-30 04:19:26'),
(23, 11, 'PENANGANGAN DARURAT LONGSORAN JALAN', 'Suantoro Wicaksono', 'geoteknik', 13, 'naskah ilmiah', 'Buku naskah ilmiah merupakan output dari kegiatan penelitian dan\r\npengembangan subbidang jalan dan jembatan di Pusat Penelitian dan\r\nPengembangan Jalan dan Jembatan dengan judul Naskah Ilmiah\r\nPenanganan Darurat Longsoran Jalan (2432.001.002.107.AT). Salah satu\r\ntujuan akhir dari kegiatan ini adalah untuk menyediakan pedoman praktis\r\npenanganan darurat longsoran jalan yang sesuai dengan kondisi di\r\nIndonesia.', 'Penanganan Darurat Longsoran Jalan.pdf', '2017-09-27 04:07:18', '2017-09-30 04:20:31'),
(24, 11, 'PENGGUNAAN BAHAN KOHESIF UNTUK TIMBUNAN DENGAN PERKUATAN GEOSINTETIK', 'Dian Asri Moelyani, Rakhman Taufik', 'geoteknik', 13, 'naskah ilmiah', 'Buku ini membahas hasil uji geser langsung untuk mengetahui pengaruh\r\nkadar air dan derajat pemadatan tanah merah terhadap perilaku interaksi\r\ntanah-geosintetik dalam moda keruntuhan geser langsung. Selain itu, pada\r\nbuku ini dijelaskan juga mengenai pengaruh mekanisme interaksi tanahgeosintetik\r\npada kinerja atau respons dari sistem dinding tanah yang\r\ndiperkuat geosintetik dengan menggunakan simulasi numerik.', 'Penggunaan Bahan Kohesif untuk Timbunan dengan Perkuatan Geosintetik.pdf', '2017-09-27 04:11:18', '2017-09-30 04:20:59'),
(25, 11, 'Penggunaan Tanah Merah untuk Timbunan yang Diperkuat dengan Geosintetik', 'Dian Asri Moelyani, Rakhman Taufik', 'geoteknik', 13, 'naskah ilmiah', 'Buku naskah ilmiah merupakan output dari kegiatan penelitian dan pengembangan teknologi geosintetik di Pusat Penelitian dan Pengembangan Jalan dan Jembatan dengan judul Sistem Basis Data Interaksi Tanah-Geosintetik (2432.01.002.133.B). Kegiatan penelitian dan pengembangan mengenai geosintetik dimulai sejak tahun 2009 dan akan berakhir padatahun 2014. Salah satu tujuan akhir dari kegiatan ini adalah untukmenyediakan pedoman perkuatan geosintetik yang sesuai dengan kondisi spesifik tanah di Indonesia.', 'Penggunaan Tanah Merah untuk Timbunan yang Diperkuat dengan Geosintetik.pdf', '2017-09-27 04:12:13', '2017-09-30 04:20:45'),
(26, 13, 'PEMANFAATAN SLAG BAJA UNTUK TEKNOLOGI JALAN YANG RAMAH LINGKUNGAN', 'Drs. G.Gunawan, M.Si. , Ir. Pantja Dharma Oetojo, M.Eng. Sc., Ir. Nanny Kusminingrum , Tri Rahmawati, AMD., dan Dra. Leksminingsih', 'teknik lalu lintas', 13, 'naskah ilmiah', 'Buku ini berisikan tentang informasi dan pengertian tentang Peraturan dan Kebijakan\r\nterkait pemanfaatan Limbah B3,sifat sifat pencemar Logam B3, karakteristik limbah\r\nSlag Baja, sifat fisik dan kimia dari slag baja, serta pemanfaatan dalam bidang jalan\r\ndan pengelolaan lingkungan hidup yang diperlukan dalam aplikasi skala lapangan\r\npemanfaatan limbah B3, diharapkan naskah ini dapat memberikan informasi kepada kita\r\ntentang Pemanfaatan Logam B3 umumnya dan khususnya tentang pemanfaatan limbah\r\nSlag Baja untuk Bidang Jalan. Kami menyadari bahwa naskah ini masih jauh dari sempurna,\r\noleh karena itu kritik dan saran dari semua pihak yang bersifat membangun selalu kami\r\nharapkan demi kesempurnaan buku ini', '01-Pemanfaatan_slag_baja.pdf', '2017-09-27 04:17:41', '2017-09-30 05:16:48'),
(27, 13, 'Efektivitas Bangunan Peredam Bising', 'Vera G. Sanoe, Andri Aditya Hidayat', 'lingkungan jalan', 13, 'naskah ilmiah', 'aporan akhir ini merupakan output dari kegiatan Penelitian Puslitbang Jalan dan\r\nJembatan khususnya Balai Teknik Lalu Lintas dan Lingkungan Jalan tahun 2011 dengan\r\nJudul Studi “ Kajian Penanganan Dampak Kebisingan dengan Berbagai Bahan dan\r\nVariasi Bentuk Atas Bangunan Peredam Bising di Ruas Jalan Perkotaan “ yang bertujuan\r\nuntuk mendapatkan efektifitas Bangunan Peredam Bising melalui penanganan dampak\r\nkebisingan dengan melakukan kajian terhadap Bangunan Peredam Bising pada berbagai\r\nbahan uji serta variasi bentuk atas bangunan, sehingga diperoleh suatu BPB efektif yang\r\nmendorong terciptanya prasarana jalan perkotaan yang berwawasan lingkungan.', '02-Efektivitas_Peredam_bising.pdf', '2017-09-27 04:19:02', '2017-09-30 05:18:12'),
(29, 13, 'Traffic Management Centre Di Ruas Jalan Perkotaan', 'Disi M Hanafiah, R.Sri Bintang Pamungkas', 'teknik lalu lintas', 13, 'naskah ilmiah', 'Traffic Management Center (TMC) sebagai pusat pengolahan data terpadu yang berkaitan\r\ndengan volume, jenis kendaraan, kondisi lalu lintas dan kondisi lingkungan jalan. Selain\r\nuntuk kebutuhan verifikasi data volume lalulintas, TMC juga berguna sebagai induk\r\npengawasan jarak jauh kondisi aktual lalulintas pada ruas-ruas vital seperti lokasi rawan\r\nkecelakaan, lokasi rawan longsor, atau lokasi rawan macet, untuk menunjang sistem\r\nmonitoring lalulintas terpadu yang bersifat permanen ataupun sementara dengan\r\nmanfaat meningkatkan kinerja jalan dan keselamatan jalan.', '04-tmc.pdf', '2017-09-27 04:22:03', '2017-09-30 05:23:27'),
(30, 13, 'Mengintip Perkembangan Rumput Vetiver dalam Penanggulangan Erosi dan Longsoran Dangkal pada Lereng Jalan', 'Asep Sunandar dan Nanny Kusminingrum', 'lingkungan jalan', 13, 'naskah ilmiah', 'Naskah ilmiah ini disusun berdasarkan hasil uji coba lapangan yang dilakukan sejak tahun\r\nanggaran 2008 sampai dengan 2011, di bawah Kelompok Program Penelitian dan\r\nPengembangan Prioritas – Pusat Litbang Jalan dan Jembatan.', '07-vetiver.pdf', '2017-09-27 04:23:11', '2017-09-30 05:23:52'),
(31, 13, 'PERHITUNGAN DAN MITIGASI GAS RUMAH KACA-CO2 BIDANG JALAN', 'GUGUN GUNAWAN', 'lingkungan jalan', 13, 'naskah ilmiah', 'Buku ini berisikan tentang informasi dan pengertian gas rumah kaca dan\r\nperubahan iklim, efek rumah kaca, inventarisasi dan penyerapan gas rumah kaca\r\nbidang jalan, perhitungan inventarisasi tingkat emisi CO2 pada AMP, emisi CO2\r\ndari AMP, Perhitungan Inventarisasi Tingkat Emisi CO2 dari Aktivitas Kendaraan di\r\nJalan, Perhitungan Emisi CO2 dari Kegiatan Pekerjaan Jalan, tanaman penyerap\r\ngas rumah kaca, dan perhitungan kebutuhan tanaman dalam mereduksi gas CO2\r\nuntuk pengendalian pada bidang jalan. Diharapkan naskah ini dapat memberikan\r\ninformasi kepada kita tentang perhitungan emisi CO2 dari AMP, aktivitas lalu lintas\r\ndan kegiatan pekerjaan jalan, serta dapat menghitung kebutuhan tanaman untuk\r\nMitigasi/mereduksi emisi CO2 yang diemisikan dari Bidang jalan.', 'Gas_rumah_kaca_edit.pdf', '2017-09-27 04:25:54', '2017-09-30 05:24:29'),
(33, 13, 'PERENCANAAN FONDASI JEMBATAN DI LAUT', 'Almuhithsyah', 'jembatan', 13, 'naskah ilmiah', 'Pembangunan fondasi merupakan langkah awal dalam pembangunan jembatan.\r\nProses ini mencakup investigasi geoteknik secara mendetail pada lokasi rencana\r\npembangunan jembatan. Setelah itu dilakukan pemilihan jenis fondasi seperti fondasi\r\ntiang dsb. Pemilihan fondasi disesuaikan dengan kondisi lapisan tanah dan karakteristik\r\njembatan yang diinginkan. Karakteristik tanah akan menentukan kapasitas daya dukung\r\ndan parameter penting lainnya.', 'Perencanaan_Fondasi_Jembatan_di_Laut.pdf', '2017-09-28 03:52:32', '2017-09-30 05:41:28'),
(34, 13, 'SISTEM MONITORING KESEHATAN STRUKTUR - PEMANFAATAN PENGUJIAN TIDAK MERUSAK', 'Septinurriandiani, Redrik Irawan, Tommy Virlianda WN', 'jembatan', 13, 'naskah ilmiah', 'Jembatan merupakan struktur yang penting dalam sistem jaringan jalan. Struktur yang\r\nkomplek dan relatif rentan terhadap kerusakan (baik yang disebabkan lingkungan,\r\nmanusia, maupun bencana alam) ini membutuhkan sistem perlindungan yang dapat\r\nmengurangi resiko dari dampak bahaya tersebut. Salah satunya adalah mempunyai sistem\r\npemeliharaan yang baik.', 'SMKS_Pemanfaatan_Pengujian_Tidak_Merusak.pdf', '2017-09-28 03:53:19', '2017-09-30 05:41:22'),
(35, 13, 'SISTEM MONITORING KESEHATAN STRUKTURPENGELOLAAN DAN PEMANFAATAN DATA SISTEM MONITORING', 'Septinurriandiani', 'jembatan', 13, 'naskah ilmiah', 'Sistem ini adalah monitoring kesehatan struktur dimana dibagi menjadi lima level yaitu\r\npeng-kelas-an, penilaian kondisi, penilaian kinerja, penilaian detail dan peng-kelas-an, dan\r\nperkiraan umur layan. Penentuan kelima level ini berdasarkan pada hasil yang diinginkan\r\noleh pengelola jembatan. Kelima level monitoring kesehatan ini didukung dengan adanya\r\ndatabase. Database ini berfungsi mengetahui riwayat jembatan selama beroperasi dan\r\nsaat konstruksi. Data yang disimpan pada database ini berguna sebagai input data untuk\r\nanalisis yang lebih kompleks. Maka oleh karena itu manajemen data diperlukan agar\r\ndata monitoring dapat dimanfaatkan dengan baik. Data monitoring yang dikelola dan\r\ndimanfaatkan dengan baik dapat menjadi dasar untuk pengambilan keputusan.', 'SMKS_Pengelolaan_Dan_Pemanfaatan_Data_Sistem_Monitoring.pdf', '2017-09-28 03:54:23', '2017-09-30 05:41:19'),
(36, 13, 'TEKNOLOGI JEMBATAN SEMENTARA BERBAHAN DASAR MATERIAL KOMPOSIT', 'Winarputro Adi Riyono', 'jembatan', 13, 'naskah ilmiah', 'Pada buku ini dibahas state of the art teknologi struktur jembatan sementara dan\r\nteknologi material komposit yang diharapkan dapat memberikan wacana baru dalam hal\r\npengembangan jembatan sementara. Namun demikian, mengingat ilmu pengetahuan\r\nyang terus berkembang, diharapkan masukan dari semua pihak terhadap buku ini guna\r\npenyempurnaan ke depan.', 'Teknologi_Jembatan_Sementara_Berbahan_Dasar_Material_Komposit.pdf', '2017-09-28 04:08:07', '2017-09-30 05:41:14'),
(43, 13, 'PERSYARATAN PERENCANAAN GEOTEKNIK DAN KEGEMPAAN', 'Dea Pertiwi dan Tim', 'geoteknik', 13, 'naskah ilmiah', 'Standar (code) merupakan spesifikasi teknis atau sesuatu yang dibakukan termasuk tata cara dan metode yang disusun berdasarkan konsensus semua pihak yang terkait. Saat ini, standar (code) persyaratan perencanaan geoteknik dan kegempaan yang komprehensif belum tersedia di lingkungan Kementerian Pekerjaan Umum. Tidak adanya standar tersebut dapat mengakibatkan terjadinya inkonsistensi pada pedoman-pedoman perencanaan turunannya.', 'Persyaratan_Perencanaan_Geoteknik_Jalan.pdf', '2017-09-30 06:11:11', '2017-09-30 06:13:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nohp` varchar(255) DEFAULT NULL,
  `level` varchar(255) DEFAULT NULL,
  `balai` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama`, `email`, `nohp`, `level`, `balai`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Super Admin', 'admin@admin.com', '081208120812', 'admin', 'Pilih Balai'),
(8, 'risma', 'bfa979396545edee06b67e768970d275', 'Risma Hermawati', 'risma@pusjatan.pu.go.id', '085222473675', 'sekretaris', 'balai perkerasan jalan'),
(9, 'tri', 'd2cfe69af2d64330670e08efb2c86df7', 'Tri Putri', 'tri@pusjatan.pu.go.id', '089765432111', 'sekretaris', 'balai lalu lintas'),
(10, 'retno', 'edd39370424d54db23ccec123f0ce66b', 'retno', 'retno@pusjatan.pu.go.id', '0812345678999', 'sekretaris', 'balai Jembatan'),
(11, 'yayah', 'f9dfa060ddbb6473dbeef00736036d8d', 'yayah', 'yayah@pusjatan.pu.go.id', '08222444556', 'sekretaris', 'balai geoteknik'),
(12, 'nurul', '6968a2c57c3a4fee8fadc79a80355e4d', 'nurul', 'nurul@pusjatan.pu.go.id', '081122334454', 'sekretaris', 'loka asbuton'),
(13, 'anita', '83349cbdac695f3943635a4fd1aaa7d0', 'anita', 'anita@pusjatan.pu.go.id', '08122233344', 'pustakawan', 'Pilih Balai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `koleksi`
--
ALTER TABLE `koleksi`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `koleksi`
--
ALTER TABLE `koleksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
