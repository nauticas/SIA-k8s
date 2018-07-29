/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50635
Source Host           : localhost:3306
Source Database       : krs

Target Server Type    : MYSQL
Target Server Version : 50635
File Encoding         : 65001

Date: 2018-01-24 14:34:26
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('2016_09_05_042427_buat_table_dosen', '1');
INSERT INTO `migrations` VALUES ('2016_09_05_082747_buat_tabel_mhs', '1');
INSERT INTO `migrations` VALUES ('2016_09_06_130023_buat_tabel_mk', '1');
INSERT INTO `migrations` VALUES ('2016_09_09_030257_buat_tabel_ruang', '1');
INSERT INTO `migrations` VALUES ('2016_09_09_034324_buat_tabel_jadwal', '1');
INSERT INTO `migrations` VALUES ('2016_09_11_033152_buat_tabel_thnajaran', '1');
INSERT INTO `migrations` VALUES ('2016_09_13_054409_buat_tabel_krs', '1');
INSERT INTO `migrations` VALUES ('2016_09_13_073007_buat_table_krs_detil', '1');
INSERT INTO `migrations` VALUES ('2016_09_13_073547_buat_tabel_nilai', '1');
INSERT INTO `migrations` VALUES ('2016_09_15_025204_buat_tabel_bobot', '1');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for tbl_bobot
-- ----------------------------
DROP TABLE IF EXISTS `tbl_bobot`;
CREATE TABLE `tbl_bobot` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `bobot` double(8,2) NOT NULL,
  `nilai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbl_bobot
-- ----------------------------
INSERT INTO `tbl_bobot` VALUES ('1', '4.00', 'A', '2018-01-10 08:30:01', '2018-01-10 08:30:01');
INSERT INTO `tbl_bobot` VALUES ('2', '3.00', 'B', '2018-01-10 08:30:01', '2018-01-10 08:30:01');
INSERT INTO `tbl_bobot` VALUES ('3', '2.00', 'C', '2018-01-10 08:30:01', '2018-01-10 08:30:01');
INSERT INTO `tbl_bobot` VALUES ('4', '1.00', 'D', '2018-01-10 08:30:01', '2018-01-10 08:30:01');
INSERT INTO `tbl_bobot` VALUES ('5', '0.00', 'E', '2018-01-10 08:30:01', '2018-01-10 08:30:01');

-- ----------------------------
-- Table structure for tbl_dosen
-- ----------------------------
DROP TABLE IF EXISTS `tbl_dosen`;
CREATE TABLE `tbl_dosen` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kode_dosen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nidn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_dosen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbl_dosen
-- ----------------------------
INSERT INTO `tbl_dosen` VALUES ('1', 'D226', '57913', 'Adi Kusjani', '2', null, '2018-01-10 08:30:02', '2018-01-10 08:30:02');
INSERT INTO `tbl_dosen` VALUES ('2', 'D64', '32532', 'Agung Budi Prasetyo ', '4', null, '2018-01-10 08:30:02', '2018-01-10 08:30:02');
INSERT INTO `tbl_dosen` VALUES ('3', 'D552', '30328', 'Berta Bednar ', '6', null, '2018-01-10 08:30:02', '2018-01-10 08:30:02');
INSERT INTO `tbl_dosen` VALUES ('4', 'D831', '4398', 'Cuk Subiyantoro ', '8', null, '2018-01-10 08:30:03', '2018-01-10 08:30:03');
INSERT INTO `tbl_dosen` VALUES ('5', 'D587', '46151', 'Febri Nova Lenti ', '10', null, '2018-01-10 08:30:03', '2018-01-10 08:30:03');
INSERT INTO `tbl_dosen` VALUES ('6', 'D775', '69077', 'Indra Yatini ', '12', null, '2018-01-10 08:30:04', '2018-01-10 08:30:04');
INSERT INTO `tbl_dosen` VALUES ('7', 'D210', '65186', 'M Agung Nugroho', '14', null, '2018-01-10 08:30:04', '2018-01-18 08:27:21');
INSERT INTO `tbl_dosen` VALUES ('8', 'D75', '76539', 'Luthfan Hadi Pramono', '16', null, '2018-01-10 08:30:04', '2018-01-10 08:30:04');
INSERT INTO `tbl_dosen` VALUES ('9', 'D361', '23261', 'Sri Rejeki ', '18', null, '2018-01-10 08:30:05', '2018-01-10 08:30:05');
INSERT INTO `tbl_dosen` VALUES ('10', 'D319', '52326', 'Totok Suprawoto ', '20', null, '2018-01-10 08:30:05', '2018-01-10 08:30:05');
INSERT INTO `tbl_dosen` VALUES ('11', 'D407', '27487', 'Tri Prabawa ', '22', null, '2018-01-10 08:30:05', '2018-01-10 08:30:05');
INSERT INTO `tbl_dosen` VALUES ('12', 'D440', '3619', 'Yosef Murya', '24', null, '2018-01-10 08:30:06', '2018-01-10 08:30:06');
INSERT INTO `tbl_dosen` VALUES ('13', 'D26', '58198', 'Erna Hudianti ', '26', null, '2018-01-10 08:30:06', '2018-01-18 08:28:46');
INSERT INTO `tbl_dosen` VALUES ('14', 'D736', '64571', 'Dison Librado ', '28', null, '2018-01-10 08:30:07', '2018-01-18 08:29:46');
INSERT INTO `tbl_dosen` VALUES ('15', 'D630', '28643', 'Mrs. Violette Will', '30', '2018-01-18 08:29:48', '2018-01-10 08:30:07', '2018-01-18 08:29:48');
INSERT INTO `tbl_dosen` VALUES ('16', 'D756', '29221', 'Maria', '32', null, '2018-01-10 08:30:07', '2018-01-18 08:42:25');
INSERT INTO `tbl_dosen` VALUES ('17', 'D323', '13835', 'Dixian', '34', null, '2018-01-10 08:30:08', '2018-01-18 11:22:28');
INSERT INTO `tbl_dosen` VALUES ('18', 'D201', '44111', 'Kris Mraz', '36', '2018-01-18 11:20:20', '2018-01-10 08:30:08', '2018-01-18 11:20:20');
INSERT INTO `tbl_dosen` VALUES ('19', 'D826', '40218', 'Chelsey Crona Jr.', '38', '2018-01-11 03:58:43', '2018-01-10 08:30:09', '2018-01-11 03:58:43');
INSERT INTO `tbl_dosen` VALUES ('20', 'D965', '28277', 'Nelda Lind', '40', '2018-01-11 03:58:35', '2018-01-10 08:30:09', '2018-01-11 03:58:35');
INSERT INTO `tbl_dosen` VALUES ('21', 'D234', '197888', 'Dison', '42', '2018-01-18 11:20:15', '2018-01-11 04:01:42', '2018-01-18 11:20:15');

-- ----------------------------
-- Table structure for tbl_jadwal
-- ----------------------------
DROP TABLE IF EXISTS `tbl_jadwal`;
CREATE TABLE `tbl_jadwal` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mk_id` int(11) NOT NULL,
  `dosen_id` int(11) NOT NULL,
  `thnajaran_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hari` enum('Mon','Tue','Wed','Thu','Fri','Sat') COLLATE utf8_unicode_ci NOT NULL,
  `waktu_mulai` time NOT NULL,
  `waktu_selesai` time NOT NULL,
  `program` enum('Sore','Pagi') COLLATE utf8_unicode_ci NOT NULL,
  `kelas` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `ruang_id` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbl_jadwal
-- ----------------------------
INSERT INTO `tbl_jadwal` VALUES ('2', '9', '14', '5', 'Tue', '17:00:00', '18:30:00', 'Sore', '9', '30', '4', null, '2018-01-18 08:39:14', '2018-01-18 08:39:14');
INSERT INTO `tbl_jadwal` VALUES ('3', '2', '16', '4', 'Fri', '17:00:00', '18:30:00', 'Sore', '9', '30', '5', null, '2018-01-18 08:39:45', '2018-01-18 08:42:37');
INSERT INTO `tbl_jadwal` VALUES ('4', '12', '8', '5', 'Tue', '20:00:00', '21:30:00', 'Sore', '9', '30', '2', null, '2018-01-18 08:40:39', '2018-01-18 08:40:39');
INSERT INTO `tbl_jadwal` VALUES ('5', '10', '1', '5', 'Fri', '17:00:00', '18:30:00', 'Sore', '9', '30', '1', null, '2018-01-18 08:42:02', '2018-01-18 08:42:02');
INSERT INTO `tbl_jadwal` VALUES ('6', '19', '12', '5', 'Wed', '20:00:00', '21:30:00', 'Sore', '9', '30', '1', null, '2018-01-18 08:43:16', '2018-01-18 08:43:16');
INSERT INTO `tbl_jadwal` VALUES ('7', '3', '12', '1', 'Mon', '17:00:00', '19:00:00', 'Sore', '9', '30', '3', null, '2018-01-18 08:46:51', '2018-01-18 08:46:51');
INSERT INTO `tbl_jadwal` VALUES ('21', '11', '13', '1', 'Thu', '17:00:00', '19:00:00', 'Sore', '9', '30', '4', null, '2018-01-18 11:18:34', '2018-01-18 11:18:34');
INSERT INTO `tbl_jadwal` VALUES ('22', '17', '7', '1', 'Mon', '19:00:00', '21:00:00', 'Sore', '9', '30', '3', null, '2018-01-18 11:19:40', '2018-01-18 11:19:40');
INSERT INTO `tbl_jadwal` VALUES ('23', '18', '17', '1', 'Mon', '19:00:00', '21:00:00', 'Sore', '9', '30', '3', null, '2018-01-18 11:23:19', '2018-01-18 11:23:19');
INSERT INTO `tbl_jadwal` VALUES ('24', '1', '11', '2', 'Fri', '17:00:00', '18:30:00', 'Sore', '9', '30', '2', null, '2018-01-18 11:25:43', '2018-01-18 11:25:43');
INSERT INTO `tbl_jadwal` VALUES ('25', '7', '7', '2', 'Thu', '18:30:00', '20:00:00', 'Sore', '9', '30', '2', null, '2018-01-18 11:27:45', '2018-01-18 11:27:45');
INSERT INTO `tbl_jadwal` VALUES ('26', '13', '3', '2', 'Thu', '17:00:00', '18:30:00', 'Sore', '9', '30', '2', null, '2018-01-18 11:29:05', '2018-01-18 11:29:05');
INSERT INTO `tbl_jadwal` VALUES ('27', '14', '6', '2', 'Fri', '17:00:00', '18:30:00', 'Sore', '9', '30', '5', null, '2018-01-18 11:30:20', '2018-01-18 11:30:20');
INSERT INTO `tbl_jadwal` VALUES ('28', '5', '11', '3', 'Thu', '17:00:00', '18:30:00', 'Sore', '9', '30', '2', null, '2018-01-18 11:31:40', '2018-01-18 11:31:40');
INSERT INTO `tbl_jadwal` VALUES ('29', '16', '10', '3', 'Fri', '17:00:00', '18:30:00', 'Sore', '9', '30', '1', null, '2018-01-18 11:32:31', '2018-01-18 11:32:31');
INSERT INTO `tbl_jadwal` VALUES ('30', '15', '4', '3', 'Mon', '18:30:00', '20:00:00', 'Sore', '9', '30', '3', null, '2018-01-18 11:33:09', '2018-01-18 11:33:09');
INSERT INTO `tbl_jadwal` VALUES ('32', '4', '7', '4', 'Fri', '17:00:00', '18:30:00', 'Sore', '9', '30', '3', null, '2018-01-18 11:36:41', '2018-01-18 11:36:41');
INSERT INTO `tbl_jadwal` VALUES ('33', '6', '7', '4', 'Thu', '17:00:00', '18:30:00', 'Sore', '9', '30', '5', null, '2018-01-18 11:37:07', '2018-01-18 11:37:07');
INSERT INTO `tbl_jadwal` VALUES ('34', '20', '5', '4', 'Thu', '17:00:00', '18:30:00', 'Sore', '9', '30', '4', null, '2018-01-18 11:37:44', '2018-01-18 11:37:44');

-- ----------------------------
-- Table structure for tbl_krs
-- ----------------------------
DROP TABLE IF EXISTS `tbl_krs`;
CREATE TABLE `tbl_krs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `mahasiswa_id` int(11) NOT NULL,
  `tgl_krs` date NOT NULL,
  `tgl_persetujuan` date DEFAULT NULL,
  `thnajaran_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `semester` int(11) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbl_krs
-- ----------------------------
INSERT INTO `tbl_krs` VALUES ('1', '20', '2018-01-10', '2018-01-11', '20', '2', '1', null, '2018-01-10 08:40:23', '2018-01-11 04:30:47');
INSERT INTO `tbl_krs` VALUES ('2', '19', '2018-01-11', null, '20', '0', '1', null, '2018-01-11 04:33:09', '2018-01-11 04:33:09');

-- ----------------------------
-- Table structure for tbl_krs_detil
-- ----------------------------
DROP TABLE IF EXISTS `tbl_krs_detil`;
CREATE TABLE `tbl_krs_detil` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `krs_id` int(11) NOT NULL,
  `jadwal_id` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbl_krs_detil
-- ----------------------------
INSERT INTO `tbl_krs_detil` VALUES ('6', '1', '15', null, '2018-01-11 04:29:17', '2018-01-11 04:29:17');
INSERT INTO `tbl_krs_detil` VALUES ('7', '1', '7', null, '2018-01-11 04:29:17', '2018-01-11 04:29:17');
INSERT INTO `tbl_krs_detil` VALUES ('8', '1', '3', null, '2018-01-11 04:29:17', '2018-01-11 04:29:17');
INSERT INTO `tbl_krs_detil` VALUES ('9', '1', '18', null, '2018-01-11 04:29:17', '2018-01-11 04:29:17');
INSERT INTO `tbl_krs_detil` VALUES ('10', '1', '5', null, '2018-01-11 04:29:17', '2018-01-11 04:29:17');
INSERT INTO `tbl_krs_detil` VALUES ('25', '2', '15', null, '2018-01-11 04:48:18', '2018-01-11 04:48:18');
INSERT INTO `tbl_krs_detil` VALUES ('26', '2', '8', null, '2018-01-11 04:48:18', '2018-01-11 04:48:18');
INSERT INTO `tbl_krs_detil` VALUES ('27', '2', '3', null, '2018-01-11 04:48:18', '2018-01-11 04:48:18');
INSERT INTO `tbl_krs_detil` VALUES ('28', '2', '9', null, '2018-01-11 04:48:18', '2018-01-11 04:48:18');
INSERT INTO `tbl_krs_detil` VALUES ('29', '2', '5', null, '2018-01-11 04:48:18', '2018-01-11 04:48:18');

-- ----------------------------
-- Table structure for tbl_mahasiswa
-- ----------------------------
DROP TABLE IF EXISTS `tbl_mahasiswa`;
CREATE TABLE `tbl_mahasiswa` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nim` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_mahasiswa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `angkatan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jurusan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kelas_program` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dosen_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbl_mahasiswa
-- ----------------------------
INSERT INTO `tbl_mahasiswa` VALUES ('1', '62495', 'ANDERSON', '2016', 'Sistem Informasi', 'Pagi', '1', '3', null, '2018-01-10 08:30:02', '2018-01-10 08:30:02');
INSERT INTO `tbl_mahasiswa` VALUES ('2', '52181', 'ARIF RIYADI', '2015', 'Teknik Informatika', 'Sore', '2', '5', null, '2018-01-10 08:30:02', '2018-01-10 08:30:02');
INSERT INTO `tbl_mahasiswa` VALUES ('3', '58080', 'SITI', '2015', 'Sistem Informasi', 'Pagi', '2', '7', null, '2018-01-10 08:30:02', '2018-01-10 08:30:02');
INSERT INTO `tbl_mahasiswa` VALUES ('4', '18886', 'NURCAHYO', '2014', 'Sistem Informasi', 'Pagi', '2', '9', null, '2018-01-10 08:30:03', '2018-01-10 08:30:03');
INSERT INTO `tbl_mahasiswa` VALUES ('5', '12267', 'DHITYA PAMUNGKAS', '2015', 'Teknik Informatika', 'Sore', '2', '11', null, '2018-01-10 08:30:03', '2018-01-10 08:30:03');
INSERT INTO `tbl_mahasiswa` VALUES ('6', '96764', 'AZIS', '2016', 'Sistem Informasi', 'Pagi', '6', '13', null, '2018-01-10 08:30:04', '2018-01-10 08:30:04');
INSERT INTO `tbl_mahasiswa` VALUES ('7', '37496', 'RENI KUMALAWATI', '2015', 'Teknik Informatika', 'Sore', '7', '15', null, '2018-01-10 08:30:04', '2018-01-10 08:30:04');
INSERT INTO `tbl_mahasiswa` VALUES ('8', '82094', 'RISKA AMALIA', '2015', 'Teknik Informatika', 'Sore', '1', '17', null, '2018-01-10 08:30:04', '2018-01-10 08:30:04');
INSERT INTO `tbl_mahasiswa` VALUES ('9', '14622', 'JOHNSON', '2014', 'Manajemen Informatika', 'Pagi', '1', '19', null, '2018-01-10 08:30:05', '2018-01-10 08:30:05');
INSERT INTO `tbl_mahasiswa` VALUES ('10', '11880', 'THOMAS', '2013', 'Sistem Informasi', 'Pagi', '1', '21', null, '2018-01-10 08:30:05', '2018-01-10 08:30:05');
INSERT INTO `tbl_mahasiswa` VALUES ('11', '83986', 'IRWAN SETIAWAN', '2015', 'Teknik Informatika', 'Sore', '10', '23', null, '2018-01-10 08:30:06', '2018-01-10 08:30:06');
INSERT INTO `tbl_mahasiswa` VALUES ('12', '52236', 'JALU', '204', 'Sistem Informasi', 'Pagi', '6', '25', null, '2018-01-10 08:30:06', '2018-01-10 08:30:06');
INSERT INTO `tbl_mahasiswa` VALUES ('13', '90624', 'JONES', '2013', 'Manajemen Informatika', 'Pagi', '13', '27', null, '2018-01-10 08:30:06', '2018-01-10 08:30:06');
INSERT INTO `tbl_mahasiswa` VALUES ('14', '21109', 'SUTARMAN', '2015', 'Teknik Informatika', 'Sore', '9', '29', null, '2018-01-10 08:30:07', '2018-01-10 08:30:07');
INSERT INTO `tbl_mahasiswa` VALUES ('15', '17982', 'GERHARD FELIX S', '2015', 'Teknik Informatika', 'Sore', '11', '31', null, '2018-01-10 08:30:07', '2018-01-10 08:30:07');
INSERT INTO `tbl_mahasiswa` VALUES ('16', '74303', 'ELY', '2016', 'Manajemen Informatika', 'Pagi', '11', '33', null, '2018-01-10 08:30:08', '2018-01-10 08:30:08');
INSERT INTO `tbl_mahasiswa` VALUES ('17', '220', 'TAYLOR', '2017', 'Manajemen Informatika', 'Pagi', '2', '35', null, '2018-01-10 08:30:08', '2018-01-10 08:30:08');
INSERT INTO `tbl_mahasiswa` VALUES ('18', '75313', 'DAVID', '2017', 'Sistem Informasi', 'Pagi', '7', '37', null, '2018-01-10 08:30:08', '2018-01-10 08:30:08');
INSERT INTO `tbl_mahasiswa` VALUES ('19', '7224', 'RIKO RUDIANTO', '2015', 'Teknik Informatika', 'Sore', '7', '39', null, '2018-01-10 08:30:09', '2018-01-10 08:30:09');
INSERT INTO `tbl_mahasiswa` VALUES ('20', '90999', 'SLAMET SAPTOTO', '2015', 'Teknik Informatika', 'Sore', '15', '41', null, '2018-01-10 08:30:09', '2018-01-10 08:30:09');

-- ----------------------------
-- Table structure for tbl_mk
-- ----------------------------
DROP TABLE IF EXISTS `tbl_mk`;
CREATE TABLE `tbl_mk` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kd_mk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama_mk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sks` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `prasyarat_mk` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `jurusan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbl_mk
-- ----------------------------
INSERT INTO `tbl_mk` VALUES ('1', '256955', 'SISTEM BASIS DATA', '2', '2', null, 'Teknik Informatika', null, '2018-01-10 08:30:02', '2018-01-10 08:30:02');
INSERT INTO `tbl_mk` VALUES ('2', '24746', 'PEMROGRAMAN DESKTOP', '2', '4', null, 'Teknik Informatika', null, '2018-01-10 08:30:02', '2018-01-10 08:30:02');
INSERT INTO `tbl_mk` VALUES ('3', '947013', 'ALGORITMA DAN PEMROGRAMAN 1', '3', '1', null, 'Teknik Informatika', null, '2018-01-10 08:30:03', '2018-01-10 08:30:03');
INSERT INTO `tbl_mk` VALUES ('4', '965719', 'JARINGAN NIRKABEL', '2', '4', null, 'Teknik Informatika', null, '2018-01-10 08:30:03', '2018-01-10 08:30:03');
INSERT INTO `tbl_mk` VALUES ('5', '688046', 'STRUKTUR DATA', '2', '3', null, 'Teknik Informatika', null, '2018-01-10 08:30:03', '2018-01-10 08:30:03');
INSERT INTO `tbl_mk` VALUES ('6', '20719', 'KONSEP CLOUD COMPUTING', '2', '4', null, 'Teknik Informatika', null, '2018-01-10 08:30:04', '2018-01-10 08:30:04');
INSERT INTO `tbl_mk` VALUES ('7', '639553', 'JARINGAN KOMPUTER', '2', '2', null, 'Teknik Informatika', null, '2018-01-10 08:30:04', '2018-01-10 08:30:04');
INSERT INTO `tbl_mk` VALUES ('9', '851372', 'INTERAKSI MANUSIA DAN KOMPUTER', '2', '5', null, 'Teknik Informatika', null, '2018-01-10 08:30:05', '2018-01-10 08:30:05');
INSERT INTO `tbl_mk` VALUES ('10', '253958', 'PEMROGRAMAN BERORIENTASI OBJEK', '2', '5', null, 'Teknik Informatika', null, '2018-01-10 08:30:05', '2018-01-10 08:30:05');
INSERT INTO `tbl_mk` VALUES ('11', '263784', 'LOGIKA INFORMATIKA', '2', '1', null, 'Teknik Informatika', null, '2018-01-10 08:30:06', '2018-01-10 08:30:06');
INSERT INTO `tbl_mk` VALUES ('12', '679018', 'TEKNOLOGI CLOUD COMPUTING', '2', '5', null, 'Teknik Informatika', null, '2018-01-10 08:30:06', '2018-01-10 08:30:06');
INSERT INTO `tbl_mk` VALUES ('13', '672812', 'SISTEM OPERASI', '2', '2', null, 'Teknik Informatika', null, '2018-01-10 08:30:06', '2018-01-10 08:30:06');
INSERT INTO `tbl_mk` VALUES ('14', '83863', 'ALGORITMA DAN PEMROGRAMAN 2', '3', '2', null, 'Teknik Informatika', null, '2018-01-10 08:30:07', '2018-01-10 08:30:07');
INSERT INTO `tbl_mk` VALUES ('15', '168802', 'ANALISIS DESAIN TERSTRUKTUR', '2', '3', null, 'Teknik Informatika', null, '2018-01-10 08:30:07', '2018-01-10 08:30:07');
INSERT INTO `tbl_mk` VALUES ('16', '583058', 'ANALISIS DESAIN BERORIENTASI OBJEK', '2', '3', null, 'Teknik Informatika', null, '2018-01-10 08:30:08', '2018-01-10 08:30:08');
INSERT INTO `tbl_mk` VALUES ('17', '994164', 'SISTEM DIGITAL', '2', '1', null, 'Teknik Informatika', null, '2018-01-10 08:30:08', '2018-01-10 08:30:08');
INSERT INTO `tbl_mk` VALUES ('18', '371786', 'SISTEM INFORMASI MANAJEMEN DAN BISNIS', '2', '1', null, 'Teknik Informatika', null, '2018-01-10 08:30:08', '2018-01-10 08:30:08');
INSERT INTO `tbl_mk` VALUES ('19', '33499', 'TEKNOLOGI MOBILE', '2', '5', null, 'Teknik Informatika', null, '2018-01-10 08:30:09', '2018-01-10 08:30:09');
INSERT INTO `tbl_mk` VALUES ('20', '555425', 'KECERDASAN BUATAN', '2', '4', null, 'Teknik Informatika', null, '2018-01-10 08:30:09', '2018-01-10 08:30:09');

-- ----------------------------
-- Table structure for tbl_nilai
-- ----------------------------
DROP TABLE IF EXISTS `tbl_nilai`;
CREATE TABLE `tbl_nilai` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `krsdetil_id` int(11) NOT NULL,
  `mahasiswa_id` int(11) NOT NULL,
  `bobot_id` int(11) NOT NULL,
  `thnajaran_id` int(11) NOT NULL,
  `semester_ditempuh` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbl_nilai
-- ----------------------------
INSERT INTO `tbl_nilai` VALUES ('1', '6', '20', '3', '20', '1', '2018-01-11 04:30:47', '2018-01-11 04:30:47');
INSERT INTO `tbl_nilai` VALUES ('2', '33', '8', '1', '5', '1', '2018-01-18 12:38:58', '2018-01-18 12:38:58');

-- ----------------------------
-- Table structure for tbl_ruang
-- ----------------------------
DROP TABLE IF EXISTS `tbl_ruang`;
CREATE TABLE `tbl_ruang` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama_ruang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbl_ruang
-- ----------------------------
INSERT INTO `tbl_ruang` VALUES ('1', 'S.2.1', null, '2018-01-10 08:30:02', '2018-01-10 08:30:02');
INSERT INTO `tbl_ruang` VALUES ('2', 'S.2.2', null, '2018-01-10 08:30:02', '2018-01-10 08:30:02');
INSERT INTO `tbl_ruang` VALUES ('3', 'S.2.3', null, '2018-01-10 08:30:03', '2018-01-10 08:30:03');
INSERT INTO `tbl_ruang` VALUES ('4', 'U.2.3', null, '2018-01-10 08:30:03', '2018-01-10 08:30:03');
INSERT INTO `tbl_ruang` VALUES ('5', 'U.2.4', null, '2018-01-10 08:30:03', '2018-01-10 08:30:03');
INSERT INTO `tbl_ruang` VALUES ('6', 'S.3.1', null, '2018-01-10 08:30:04', '2018-01-10 08:30:04');
INSERT INTO `tbl_ruang` VALUES ('7', 'S.3.2', null, '2018-01-10 08:30:04', '2018-01-10 08:30:04');
INSERT INTO `tbl_ruang` VALUES ('8', 'S.3.3', null, '2018-01-10 08:30:04', '2018-01-10 08:30:04');
INSERT INTO `tbl_ruang` VALUES ('9', 'B.1.2', null, '2018-01-10 08:30:05', '2018-01-10 08:30:05');
INSERT INTO `tbl_ruang` VALUES ('10', 'B.1.3', null, '2018-01-10 08:30:05', '2018-01-10 08:30:05');
INSERT INTO `tbl_ruang` VALUES ('11', 'B.1.4', null, '2018-01-10 08:30:06', '2018-01-10 08:30:06');
INSERT INTO `tbl_ruang` VALUES ('12', 'B.1.5', null, '2018-01-10 08:30:06', '2018-01-10 08:30:06');
INSERT INTO `tbl_ruang` VALUES ('13', 'Lab KOMDAS', null, '2018-01-10 08:30:06', '2018-01-10 08:30:06');
INSERT INTO `tbl_ruang` VALUES ('14', 'Lab Akuntansi', null, '2018-01-10 08:30:07', '2018-01-10 08:30:07');
INSERT INTO `tbl_ruang` VALUES ('15', 'Lab Pemrograman', null, '2018-01-10 08:30:07', '2018-01-10 08:30:07');
INSERT INTO `tbl_ruang` VALUES ('16', 'Lab Basis Data', null, '2018-01-10 08:30:08', '2018-01-10 08:30:08');
INSERT INTO `tbl_ruang` VALUES ('17', 'Lab Aplikasi', '2018-01-18 12:02:37', '2018-01-10 08:30:08', '2018-01-18 12:02:37');
INSERT INTO `tbl_ruang` VALUES ('18', 'Lab Multimedia', null, '2018-01-10 08:30:08', '2018-01-10 08:30:08');
INSERT INTO `tbl_ruang` VALUES ('19', 'Lab Jaringan Komputer', null, '2018-01-10 08:30:09', '2018-01-10 08:30:09');

-- ----------------------------
-- Table structure for tbl_thnajaran
-- ----------------------------
DROP TABLE IF EXISTS `tbl_thnajaran`;
CREATE TABLE `tbl_thnajaran` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kd_tahun` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8_unicode_ci NOT NULL,
  `tgl_kuliah` date NOT NULL,
  `tgl_awal_perwalian` date NOT NULL,
  `tgl_akhir_perwalian` date NOT NULL,
  `status` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbl_thnajaran
-- ----------------------------
INSERT INTO `tbl_thnajaran` VALUES ('1', 'Gasal-2015/2016', 'Gasal-2015/2016', '2015-09-28', '2015-08-31', '2015-09-20', '0', null, '2018-01-10 08:30:02', '2018-01-18 08:19:52');
INSERT INTO `tbl_thnajaran` VALUES ('2', 'Genap-2015/2016', 'Genap-2015/2016', '2016-03-01', '2016-02-01', '2016-02-20', '0', null, '2018-01-10 08:30:02', '2018-01-10 08:30:09');
INSERT INTO `tbl_thnajaran` VALUES ('3', 'Gasal-2016/2017', 'Gasal-2016/2017', '2016-09-28', '2016-08-31', '2016-09-04', '0', null, '2018-01-10 08:30:03', '2018-01-10 08:30:09');
INSERT INTO `tbl_thnajaran` VALUES ('4', 'Genap-2016/2017', 'Genap-2016/2017', '2017-03-09', '2017-02-06', '2017-02-09', '0', null, '2018-01-10 08:30:03', '2018-01-10 08:30:09');
INSERT INTO `tbl_thnajaran` VALUES ('5', 'Gasal-2017/2018', 'Gasal-2017/2018', '2017-09-27', '2017-09-20', '2017-09-25', '1', null, '2018-01-10 08:30:03', '2018-01-10 08:30:09');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admin', '$2y$10$ZMc6Zx3sQNbRcLRLX.IaZ.IVUkGbWRcJuCYpEJhn4bEsi5OxkRlEq', 'admin', '6HCBwGm1MkFOXSCt06nKSPmPrNLPQQS23sN5yyIyUC8RRxTQ2KxNH9VVwdWg', '2018-01-10 08:30:01', '2018-01-18 12:02:47');
INSERT INTO `users` VALUES ('2', 'D226', '$2y$10$OZ1hDY84.0efGIXw1Rh9jev9AKeKydzuFiGqwk6iH.C0DIbt77DqS', 'dosen', 'bno6Ru9OPn8z3DSVOLWkkP1O7fKzovO48Q66uujtE9FHKXRmzyZsczY5ZcTe', '2018-01-10 08:30:02', '2018-01-18 12:39:09');
INSERT INTO `users` VALUES ('3', '62495', '$2y$10$FlN8XXQchBSv69C2uicNzOUYqNPgHDTo1ma9TnrNDEssvIdAXWqy2', 'mahasiswa', null, '2018-01-10 08:30:02', '2018-01-10 08:30:02');
INSERT INTO `users` VALUES ('4', 'D64', '$2y$10$kp5PfzjlrImm8DA/ZZ/G1eiZyh/eJHGTjPAtJRyS3fVrA4l6rfIL6', 'dosen', null, '2018-01-10 08:30:02', '2018-01-10 08:30:02');
INSERT INTO `users` VALUES ('5', '52181', '$2y$10$C1P5mIRjNKdS0fPD0iQjue6888KxCLUdvSaDWFx4Ld6w61asGN/ey', 'mahasiswa', null, '2018-01-10 08:30:02', '2018-01-10 08:30:02');
INSERT INTO `users` VALUES ('6', 'D552', '$2y$10$weIBC6T8ZRYoxVOjSuV79OVGZKVy64p3hoViHJvqQznkj/FkKoscu', 'dosen', 'B5qnrBDPKbkSaNnfLPqHyd0Dwj3PdtdyI0YFAdTAfOrMoB8zqc99CZnCdzvn', '2018-01-10 08:30:02', '2018-01-11 04:28:38');
INSERT INTO `users` VALUES ('7', '58080', '$2y$10$ELR3KevVLrcohx6m8HSIP.sYEvFM/CdJ6PmHxs8LpVHourKYxEqFK', 'mahasiswa', null, '2018-01-10 08:30:02', '2018-01-10 08:30:02');
INSERT INTO `users` VALUES ('8', 'D831', '$2y$10$ByPoKXSgJ3D3MBR.H2bfP.vQqwFtj7CZUM5gQcVMTh91OStYBuFGG', 'dosen', null, '2018-01-10 08:30:03', '2018-01-10 08:30:03');
INSERT INTO `users` VALUES ('9', '18886', '$2y$10$IuTxToJceCej3dax.1Z/Y.9MoCpqhEkW.Y6JJJyiZUKdktWm39HPG', 'mahasiswa', null, '2018-01-10 08:30:03', '2018-01-10 08:30:03');
INSERT INTO `users` VALUES ('10', 'D587', '$2y$10$fws7NteqPF42eIZ/uXtxOu2wCq5l3pOHISS/paUECskkW1XB.X2A6', 'dosen', null, '2018-01-10 08:30:03', '2018-01-10 08:30:03');
INSERT INTO `users` VALUES ('11', '12267', '$2y$10$vK9nJ/qz6Z8E.sDmiWtwJ.erQw94k.FGtIACJqQiAgVthpUJaWdv6', 'mahasiswa', 'BxewEa6u8bjbRkLqlqyrbvHWK3uHqZXw04Ai8HCGa8ubRjllCXuYJhzrGYct', '2018-01-10 08:30:03', '2018-01-11 06:42:27');
INSERT INTO `users` VALUES ('12', 'D775', '$2y$10$pF2OkJMhMt.8UAIek/cE7uuSPh1DWDWMHp4pDF/bcy2KQmIVHYlyG', 'dosen', null, '2018-01-10 08:30:04', '2018-01-10 08:30:04');
INSERT INTO `users` VALUES ('13', '96764', '$2y$10$u50XGs7SMXe2Ulhg/hbQNu.mkMMo8fexED1nDA9Wlvf.IzNBzJspy', 'mahasiswa', null, '2018-01-10 08:30:04', '2018-01-10 08:30:04');
INSERT INTO `users` VALUES ('14', 'D210', '$2y$10$cex3yXx6ZvE58hcKdy8Rme2buDyYBOMF7PWTB0LjE/VfHlsJB/Ulm', 'dosen', null, '2018-01-10 08:30:04', '2018-01-18 08:27:21');
INSERT INTO `users` VALUES ('15', '37496', '$2y$10$.NACjzWvZ8DJFSBql0pjB.Atdav3MdqEDP4TQAW5dB7Hb0izcpfQO', 'mahasiswa', 'qDw3t3arhimMKTXDBe8x5FzICUq5e1SYd15FOZr6kwd25Dd0WpLln36gtoD3', '2018-01-10 08:30:04', '2018-01-11 06:53:06');
INSERT INTO `users` VALUES ('16', 'D75', '$2y$10$pn6ORor9PQAVlPiJd58UA.y4XUe354rErR.GuFMx3XoCqLE85zFmy', 'dosen', null, '2018-01-10 08:30:04', '2018-01-10 08:30:04');
INSERT INTO `users` VALUES ('17', '82094', '$2y$10$qwukKZgZsT3OsdgA9LWKRet.b02drwNYtusr36NyJnIG6RKar4Oz2', 'mahasiswa', 'Q6Oz8oxW2pMg3KJ7nxJKFhQzA0BZ69LQSYzeDfgsCVUXRR0EnuXxPeXgPVTZ', '2018-01-10 08:30:04', '2018-01-18 12:36:22');
INSERT INTO `users` VALUES ('18', 'D361', '$2y$10$euqoeVaRWdgN8b7B/qciEOVLjHMhfN/ykpfO4eoqWOu5h4CVJlbJ.', 'dosen', null, '2018-01-10 08:30:05', '2018-01-10 08:30:05');
INSERT INTO `users` VALUES ('19', '14622', '$2y$10$TOnIHeUg6KIzFrOUnTz./uHl72YfIDluuwNXBlh5rHfHhDOxH1QYm', 'mahasiswa', null, '2018-01-10 08:30:05', '2018-01-10 08:30:05');
INSERT INTO `users` VALUES ('20', 'D319', '$2y$10$vyzGKYPI1QrQAglf6Z7cuuShqNKel5W4vhH6YdL7AGmLkeZ4jY7RO', 'dosen', null, '2018-01-10 08:30:05', '2018-01-10 08:30:05');
INSERT INTO `users` VALUES ('21', '11880', '$2y$10$8r2ZSJOznhyaMPrNJ2yWsuupC1tzCVczsDd0Dz93u0MxxSW0fAOQy', 'mahasiswa', 'o2xByYetHYUviY5VEkTleTtkgHTNOaeDZakS5GC5jg1IBYd2hFB3XFrHKEqm', '2018-01-10 08:30:05', '2018-01-11 06:39:26');
INSERT INTO `users` VALUES ('22', 'D407', '$2y$10$PxtYa6PNeQR/Fe5fcXHNQOqqwUKFn.BiWMpT3jpzyhabDBOjdoZoa', 'dosen', null, '2018-01-10 08:30:05', '2018-01-10 08:30:05');
INSERT INTO `users` VALUES ('23', '83986', '$2y$10$69.sEcSOmjBqjp/SHaG1RuRVkz7AbOls3J3zuRCBgG9Ol6UkU/iAq', 'mahasiswa', null, '2018-01-10 08:30:06', '2018-01-10 08:30:06');
INSERT INTO `users` VALUES ('24', 'D440', '$2y$10$p5gJ8IvHLjwYfXN/3b.Yq.7vjCUVp.ozO92fDYkYtVm.t1XO.YAju', 'dosen', 'yxTm8yNgRyDyOir8f5b3adENcU4mJ0PGU3q8ny0os7KuFh00WItMwuzeJd1s', '2018-01-10 08:30:06', '2018-01-18 12:44:30');
INSERT INTO `users` VALUES ('25', '52236', '$2y$10$YawcmWQ/kDcByqe.CdJyPOMVRXomMXGhUGtpyO8u2n3VynlBX27OO', 'mahasiswa', null, '2018-01-10 08:30:06', '2018-01-10 08:30:06');
INSERT INTO `users` VALUES ('26', 'D26', '$2y$10$cIL/SBe3Mz4NX27HdFr/YONaTz8.L863b87DftffKVoHPamVkhQUe', 'dosen', null, '2018-01-10 08:30:06', '2018-01-18 08:28:46');
INSERT INTO `users` VALUES ('27', '90624', '$2y$10$Crshzx7.BgGzth/SKe70hOrPAvstA7FvhuurgaBDLxW5XdOCHkwjm', 'mahasiswa', null, '2018-01-10 08:30:06', '2018-01-10 08:30:06');
INSERT INTO `users` VALUES ('28', 'D736', '$2y$10$FmwaKWWWDHScfblzphbAzO07lwcUJyyIkUL9jW2jg83LvtO6Q1sGC', 'dosen', null, '2018-01-10 08:30:07', '2018-01-18 08:29:46');
INSERT INTO `users` VALUES ('29', '21109', '$2y$10$HOGigFshxM7Ta8/4jg4C1.fnf29PxlNx2BQK547dVaF2TZyGaGb6K', 'mahasiswa', null, '2018-01-10 08:30:07', '2018-01-10 08:30:07');
INSERT INTO `users` VALUES ('30', 'D630', '$2y$10$udQYy9DIOcDtzU7FwtP07OmSH8d6QGzR0adbJIFrcorrVQIhO2k7K', 'dosen', 'qa0fXoV1g5QKSv96zVKlndrVggDlQN9t1d9kaquMGJwmEeqQaGV6b2JAc5x3', '2018-01-10 08:30:07', '2018-01-11 04:45:13');
INSERT INTO `users` VALUES ('31', '17982', '$2y$10$9hsNdMZvbMXErRG91//X5.eVXlye3EkfHpYeNmCpgSIdiTGzJWPP6', 'mahasiswa', null, '2018-01-10 08:30:07', '2018-01-10 08:30:07');
INSERT INTO `users` VALUES ('32', 'D756', '$2y$10$KAUTsRhdXaCXMPjRn9IrDe9jBQIhFytn0eLqG85LomRhNZC30H1ei', 'dosen', null, '2018-01-10 08:30:07', '2018-01-18 08:42:25');
INSERT INTO `users` VALUES ('33', '74303', '$2y$10$UnSo2Y3xynHw8MLJ.J3WaOTH8w4Pp34dQMOqP0AhkHDtu3NdDLjkO', 'mahasiswa', null, '2018-01-10 08:30:07', '2018-01-10 08:30:07');
INSERT INTO `users` VALUES ('34', 'D323', '$2y$10$5oWNrtivlqHPJZGAfSUTVe51Swk.TPn3A8XVQlE84gPCZ4x.WIsXW', 'dosen', null, '2018-01-10 08:30:08', '2018-01-18 11:22:28');
INSERT INTO `users` VALUES ('35', '220', '$2y$10$1FJfjWGC/U/ZjZUob9H1m.n6ezOemZJsaFokLncilhZsJ8xVxVO/G', 'mahasiswa', null, '2018-01-10 08:30:08', '2018-01-10 08:30:08');
INSERT INTO `users` VALUES ('36', 'D201', '$2y$10$aQIVOvggWx0t8vXwCTAxSePY7r.YGClGrq/yzaPtHPe6Q03jeLnNG', 'dosen', null, '2018-01-10 08:30:08', '2018-01-10 08:30:08');
INSERT INTO `users` VALUES ('37', '75313', '$2y$10$jujudQRT5ju.ugiliS4uNugMNWT4C2k7DH.KsIDd6UKwAJ2ZaNz9S', 'mahasiswa', null, '2018-01-10 08:30:08', '2018-01-10 08:30:08');
INSERT INTO `users` VALUES ('38', 'D826', '$2y$10$gJRrN5NvK7vJ1sZ4SiB.JeqvSAEfozj3OxWf5zYvSVaaSQkz3p2mG', 'dosen', null, '2018-01-10 08:30:08', '2018-01-10 08:30:08');
INSERT INTO `users` VALUES ('39', '7224', '$2y$10$ws0qjdv4HFsrZqRElos5OOTZq6D/jG71KuLhN2pXOIoG6iqRlI/U6', 'mahasiswa', 'xuzMdFP6GzdW4PntOumFn05zhXNUOITMi4i5wBXHaMWybJPufxColPfifcsG', '2018-01-10 08:30:09', '2018-01-11 04:48:35');
INSERT INTO `users` VALUES ('40', 'D965', '$2y$10$hL0qsjtZIAotfFmNplpsEe0DMRHKUYk2lnYdgSVKVDBc82PuehY5u', 'dosen', null, '2018-01-10 08:30:09', '2018-01-10 08:30:09');
INSERT INTO `users` VALUES ('41', '90999', '$2y$10$JMf5oD9Y9wXhiRwHXcYCF.YqxCBQLkfeoD6Z4uSnG3IW4Uz77QmTi', 'mahasiswa', 'vNfRB9ZqWv2NomdHosNZcAtN8gVz3CSioSQ7NyLVAe2mzTbOcTvgmDh6fcba', '2018-01-10 08:30:09', '2018-01-11 06:47:46');
INSERT INTO `users` VALUES ('42', 'D234', '$2y$10$OJ6tie22eiSbVTp7NvuvJO1HUIUZ11rieanckYDeJDog419EGvbXW', 'dosen', null, '2018-01-11 04:01:42', '2018-01-11 04:01:42');
