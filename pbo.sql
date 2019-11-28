-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Nov 2019 pada 14.30
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pbo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(150) NOT NULL,
  `nama_admin` varchar(150) NOT NULL,
  `password_admin` varchar(150) NOT NULL,
  `id_toko` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `password_admin`, `id_toko`) VALUES
('1', 'dala', 'dala123', ''),
('2', 'rahmat', 'rahmat123', ''),
('3', 'naufal', 'naufal123', ''),
('4', 'aldo', 'aldo123', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `idBuku` varchar(150) NOT NULL,
  `judulBuku` varchar(150) NOT NULL,
  `pengarang` varchar(150) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `penerbit` varchar(150) NOT NULL,
  `thnTerbit` int(5) NOT NULL,
  `rating` int(5) NOT NULL,
  `harga` int(5) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`idBuku`, `judulBuku`, `pengarang`, `deskripsi`, `penerbit`, `thnTerbit`, `rating`, `harga`, `img`) VALUES
('BK01', 'Night Stories', 'Ken Adams', 'Good Night Stories for Rebel Girls mengemas ulang dongeng-dongeng, menginspirasi anak-anak dengan kisah wanita-wanita heroik, dari Ratu Elizabeth I hingga Serena Williams. Dilengkapi dengan ilustrasi dari 60 seniman wanita dari setiap penjuru dunia, inilah buku orisinal yang mampu menggalang dana terbanyak dalam sejarah penggalangan dana.\r\n', 'Gramedia', 2019, 4, 90000, '1mc'),
('BK02', 'Hujan', 'Tere Liye', 'Novel ini secara mengejutkan menceritakan latar dunia pada tahun 2050-an. Terdapat seorang gadis bernama Lail yang hidup pada masa itu dengan segala kemajuan tekonologinya dan gentingnya isu-isu mengenai lingkungan. Lail berusaha untuk menghapus seluruh kenangannya yang menyakitkan dengan sebuah alat canggih yang ada di zaman tersebut. Syarat agar alat tersebut bisa bekerja adalah dengan menceritakan kenangan-kenganan selama hidupnya tanpa ada satu pun yang ditutup-tutupi.', 'Elex Media Komputindo', 2017, 5, 40000, '2mc'),
('BK03', 'Jingga dan Senja', 'Esti Kinasih', 'Kemiripan dua buah nama ternyata bisa dijadikan sebagai  alasan yang kuat untuk bersama. Bukan merupakan nama biasa yang pada umumnya dapat ditemui di pasaran. Akan tetapi, lebih mengacu kepada suatu identitas unik dan bersifat fenomenal. Tidak dapat dikatakan “kuno” atau “berlebihan”, namun itulah kenyataannya. Walaupun memiliki perbedaan huruf yang signifikan, tetapi makna katanya tetap sama. Memusat pada satu titik terpenting dalam jagat raya. Dua panggilan inilah yang digunakan Esti Kinasih dalam novelnya yang berjudul Jingga dan Senja.', 'Gramedia Studio', 2013, 4, 100000, '3mc'),
('BK04', 'Harry Potter and the Deathly Hallows', 'J.K. Rowling', 'Harry Potter menginjak usia 17 tahun, dimana itu berarti bahwa mantera pelindung selama ia tinggal dirumah Dursley akan terangkat. Atas informasi Severus snape, Voldemort dan pengikutnya akan menyerang Harry Potter ketika ia akan meninggalkan rumah Dursley. Namun penyerangan itu gagal karena Hary potter dan anggota Orde berhasil kabur. Meskipun Hedwig dan Mad-eye Moody terbunuh dalam pertempuran tersebut.', 'Erlangga Studio', 2012, 5, 300000, '4mc'),
('BK05', 'Percy Jackson The Lightning Thief', 'Rick Riordan', 'Percy Jackson berusia 12 tahun. Percy merupakan siswa kelas enam di akademi Yancy (sekolah swasta untuk anak-anak bemasalah di New York Utara) dan menderita disleksia dan GPPH (Gangguan Pemusatan Perhatian dan Hiperaktivitas). Dia memiliki seorang teman baik tapi pincang, Grover Underwood. Suatu hari saat sekolahnya mengadakan karyawisata, Percy diserang oleh guru pra aljabarnya bu Dodds yang ternyata seorang Erinyes yang sedang menyamar. Beruntung Percy ditolong oleh Pak Brunner, guru bahasa latinnya yang berkursi roda. Pak brunner melemparkan sebuah pena yang ternyata adalah pedang pada Percy. Percy menebas Bu Dodds yang meledak menjadi debu.', 'Surya Putra Production', 2012, 5, 120000, '5mc'),
('BK06', 'Naruto Chapter 700', 'Masashi Kishimoto', 'Cerita dimulai ketika seekor monster rubah ekor sembilan atau disebut Kyuubi menyerang Konoha, sebuah desa shinobi yang terletak di negara Api. Kekacauan terjadi di desa Konoha dan korban banyak berjatuhan. Akhirnya ada seseorang yang berhasil melenyapkan Kyuubi dengan menyegel sebagian chakra Kyuubi itu ke tubuhnya sendiri dan sisanya disegel ke tubuh Naruto, orang yang berhasil menyegel monster rubah ekor sembilan itu dikenal sebagai Yondaime Hokage, Hokage ke-4 atau Minato Namikaze yang tidak lain adalah ayah dari Naruto. Penyegelan itu menggunakan jurus Dewa Kematian sehingga risikonya adalah kematian Hokage ke-4 sendiri.', 'Elex Media Komputindo', 2018, 4, 16000, '6mc'),
('BK07', 'Naruto Chapter 600', 'Masashi Kishimoto', 'Cerita dimulai ketika seekor monster rubah ekor sembilan atau disebut Kyuubi menyerang Konoha, sebuah desa shinobi yang terletak di negara Api. Kekacauan terjadi di desa Konoha dan korban banyak berjatuhan. Akhirnya ada seseorang yang berhasil melenyapkan Kyuubi dengan menyegel sebagian chakra Kyuubi itu ke tubuhnya sendiri dan sisanya disegel ke tubuh Naruto, orang yang berhasil menyegel monster rubah ekor sembilan itu dikenal sebagai Yondaime Hokage, Hokage ke-4 atau Minato Namikaze yang tidak lain adalah ayah dari Naruto. Penyegelan itu menggunakan jurus Dewa Kematian sehingga risikonya adalah kematian Hokage ke-4 sendiri.', 'Elex Media Komputindo', 2008, 4, 16000, '7mc'),
('BK08', 'Laskar Pelangi', 'Andrea Hirata', 'Dimulai dari kisah miris dunia pendidikan di indonesia dimana sebuah terdapat sekolah yang kekurangan murid hendak ditutup. Tepatnya di SD Muhammadiyah Belitung. Pada saat itu adalah saat yang menegangkan bagi kesembilan murid yang bersekolah di SD Muhammadiyah ini. Kesembilan Murid Tersebut adalah Ikal, Sahara, Lintang, A kiong, Kucai, Syahdan, Borek, A ling dan terepani.\r\nMereka tengah cemas karena SD Muhammadiyah yang mereka tempati akan ditutup jika murid yang bersekolah di SD tersebut tidak genap sepuluh. Mereka sangat cemas. SD Muhammadiyah adalh SD tertua di desa Belitung, Sehingga jika ditutup akan kasihan pada keluarga mereka karena tidak mampu menyekolahkan anak-anaknya yang ingin bersekolah. Disinilah perjalanan mereka dimulai.', 'Sitrawang Studios', 2008, 5, 180000, '8mc');

-- --------------------------------------------------------

--
-- Struktur dari tabel `inventaris`
--

CREATE TABLE `inventaris` (
  `id_buku` varchar(150) NOT NULL,
  `id_toko` varchar(150) NOT NULL,
  `total_buku` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `inventaris`
--

INSERT INTO `inventaris` (`id_buku`, `id_toko`, `total_buku`) VALUES
('BK01', 'TK01', 23),
('BK01', 'TK02', 21),
('BK01', 'TK03', 12),
('BK02', 'TK02', 4),
('BK03', 'TK03', 21),
('BK04', 'TK01', 2),
('BK04', 'TK03', 56),
('BK05', 'TK02', 12),
('BK05', 'TK03', 67),
('BK06', 'TK01', 54),
('BK07', 'TK01', 24),
('BK07', 'TK02', 12),
('BK08', 'TK01', 22),
('BK08', 'TK02', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_cust` int(150) NOT NULL,
  `nama_cust` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `username_cust` varchar(150) NOT NULL,
  `pass_cust` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_cust`, `nama_cust`, `email`, `username_cust`, `pass_cust`) VALUES
(1, 'Naufal Farraso', 'naufalfarras117@gmail.com', 'naufalnny', '$2y$10$J77ieHXRAS7VGEMMCWHIQO7atwK4ew1OtLFBQQdQIP4PhV/Rg57cq'),
(2, 'Rahmat Taufiq', 'rahmat1456@gmail.com', 'rahmatta', '$2y$10$2AMKWm5k6PsMppr1ev0bxe.dWY8oglW.t32qK/pXmxA8CZpINgiEe');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `kode_pembayaran` varchar(150) NOT NULL,
  `kode_transaksi` varchar(150) NOT NULL,
  `via_pembayaran` varchar(150) NOT NULL,
  `total_pembayaran` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `toko`
--

CREATE TABLE `toko` (
  `id_toko` varchar(150) NOT NULL,
  `nama_toko` varchar(150) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `e-mail` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `toko`
--

INSERT INTO `toko` (`id_toko`, `nama_toko`, `alamat`, `e-mail`) VALUES
('TK01', 'Togamas Bandung', 'jln. tarumanegara no.4N, Kota Bandung', 'tgbandung@gmail.com'),
('TK02', 'Gramedia BEC', 'Jln. Pahlawan no. 31, Kota Bandung', 'grambec@gmail.com'),
('TK03', 'Gramedia Mall', 'Jln. Singosari no.37, Kota Bandung', 'gmall@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `kode_transaksi` varchar(150) NOT NULL,
  `id_buku` varchar(150) NOT NULL,
  `jumlah_buku` int(5) NOT NULL,
  `total_harga` int(5) NOT NULL,
  `kurir` varchar(150) NOT NULL,
  `id_cust` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`,`id_toko`),
  ADD KEY `id_toko` (`id_toko`),
  ADD KEY `id_toko_2` (`id_toko`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`idBuku`);

--
-- Indeks untuk tabel `inventaris`
--
ALTER TABLE `inventaris`
  ADD KEY `id_buku` (`id_buku`,`id_toko`),
  ADD KEY `id_toko` (`id_toko`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_cust`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`kode_pembayaran`,`kode_transaksi`),
  ADD KEY `kode_transaksi` (`kode_transaksi`);

--
-- Indeks untuk tabel `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id_toko`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`kode_transaksi`),
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `id_cust` (`id_cust`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_cust` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `inventaris`
--
ALTER TABLE `inventaris`
  ADD CONSTRAINT `inventaris_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`idBuku`),
  ADD CONSTRAINT `inventaris_ibfk_2` FOREIGN KEY (`id_toko`) REFERENCES `toko` (`id_toko`);

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`kode_transaksi`) REFERENCES `transaksi` (`kode_transaksi`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`idBuku`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_cust`) REFERENCES `pelanggan` (`id_cust`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
