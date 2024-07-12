SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penggajian`
--

CREATE DATABASE IF NOT EXISTS `dashboard-penggajian`;
USE `dashboard-penggajian`;

-- Table structure for table `data_jabatan`
CREATE TABLE `data_jabatan` (
  `id_jabatan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jabatan` varchar(50) NOT NULL,
  `gaji_pokok` decimal(10,2) NOT NULL,
  `tj_transport` decimal(10,2) NOT NULL,
  `uang_makan` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id_jabatan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table `data_jabatan`
INSERT INTO `data_jabatan` (`id_jabatan`, `nama_jabatan`, `gaji_pokok`, `tj_transport`, `uang_makan`) VALUES
(1, 'Staff Marketing', '3000000', '20000', '10000'),
(3, 'Desainer', '6000000', '12000', '10000'),
(5, 'Engineer', '2000000', '30000', '25000'),
(6, 'Admin', '3000000', '20000', '10000');

-- Table structure for table `data_kehadiran`
CREATE TABLE `data_kehadiran` (
  `id_kehadiran` int(11) NOT NULL AUTO_INCREMENT,
  `bulan` varchar(6) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL,
  `hadir` int(11) NOT NULL,
  `sakit` int(11) NOT NULL,
  `alpha` int(11) NOT NULL,
  PRIMARY KEY (`id_kehadiran`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table `data_kehadiran`
INSERT INTO `data_kehadiran` (`id_kehadiran`, `bulan`, `nik`, `nama_pegawai`, `jenis_kelamin`, `nama_jabatan`, `hadir`, `sakit`, `alpha`) VALUES
(1, '072024', '565656', 'onahh', 'Perempuan', 'Engineer', 20, 1, 1),
(2, '072024', '121212', 'Meow', 'Laki-laki', 'Staff Marketing', 20, 2, 2);

-- Table structure for table `data_pegawai`
CREATE TABLE `data_pegawai` (
  `id_pegawai` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hak_akses` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_pegawai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table `data_pegawai`
INSERT INTO `data_pegawai` (`id_pegawai`, `username`, `password`, `hak_akses`, `nik`, `nama_pegawai`, `jenis_kelamin`, `jabatan`, `tanggal_masuk`, `status`, `photo`) VALUES
(16, 'admin', '202cb962ac59075b964b07152d234b70', 1, '121212', 'Meow', 'Laki-laki', 'Staff Marketing', '2024-07-10', 'Pegawai Tetap', '51278172894_b1d3159239_o.jpg'),
(17, 'onahh', 'd41d8cd98f00b204e9800998ecf8427e', 2, '565656', 'Onah', 'Perempuan', 'Engineer', '2024-07-11', 'Pegawai Tidak Tetap', '51924774838_4296a4bcc4_o.jpg');

-- Table structure for table `hak_akses`
CREATE TABLE `hak_akses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `keterangan` varchar(50) NOT NULL,
  `hak_akses` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table `hak_akses`
INSERT INTO `hak_akses` (`id`, `keterangan`, `hak_akses`) VALUES
(1, 'admin', 1),
(2, 'karyawan', 2);

-- Table structure for table `potongan_gaji`
CREATE TABLE `potongan_gaji` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `potongan` varchar(50) NOT NULL,
  `jml_potongan` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table `potongan_gaji`
INSERT INTO `potongan_gaji` (`id`, `potongan`, `jml_potongan`) VALUES
(1, 'Listrik', 10000),
(2, 'Gas', 5000),
(3, 'Galon', 20000);

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
