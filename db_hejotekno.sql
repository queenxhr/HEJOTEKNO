/*
Navicat MySQL Data Transfer

Source Server         : koneksi01
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : db_hejotekno

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2024-06-12 19:55:12
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `nama_admin` varchar(255) NOT NULL,
  `email_admin` varchar(255) NOT NULL,
  `telp_admin` varchar(255) NOT NULL,
  `username_admin` varchar(255) NOT NULL,
  `pass_admin` varchar(255) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'Ratu', 'ratu@gmail.com', '0812345678', 'queenxhr', '$2y$10$guBQvWaXwFsDonsWnABNnej94EZWosyoasWK2QtQIpElmjvXYUe1u');
INSERT INTO `admin` VALUES ('2', 'Faya', 'faya@gmail.com', '08123', 'faayyeay', '$2y$10$XEr9FbzIdWxBYdM5h97fLe98lPC3DUolU6qKpKBKKY.G748NDBs1S');

-- ----------------------------
-- Table structure for `contact`
-- ----------------------------
DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pengirim` varchar(255) NOT NULL,
  `isi_pesan` varchar(255) NOT NULL,
  `subjek_pesan` varchar(255) NOT NULL,
  `email_pengirim` varchar(255) NOT NULL,
  `telp_pengirim` varchar(255) NOT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of contact
-- ----------------------------
INSERT INTO `contact` VALUES ('1', 'ratu', 'tes', 'apayah', 'ratu@mail.com', '08234');
INSERT INTO `contact` VALUES ('2', 'ratu', 'tes', 'apayah', 'ratu@mail.com', '08234');
INSERT INTO `contact` VALUES ('3', 'tes', 'apa', 'coba', 'ratu@mail.com', '08234');

-- ----------------------------
-- Table structure for `invoice`
-- ----------------------------
DROP TABLE IF EXISTS `invoice`;
CREATE TABLE `invoice` (
  `id_invoice` int(11) NOT NULL AUTO_INCREMENT,
  `id_order` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_invoice` date NOT NULL,
  `id_status` int(11) NOT NULL,
  PRIMARY KEY (`id_invoice`),
  KEY `fk_user` (`id_user`),
  KEY `fk_status` (`id_status`),
  CONSTRAINT `fk_status` FOREIGN KEY (`id_status`) REFERENCES `status_invoice` (`id_status_invoice`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of invoice
-- ----------------------------
INSERT INTO `invoice` VALUES ('2', '1', '6', '2024-06-11', '2');
INSERT INTO `invoice` VALUES ('3', '2', '6', '2024-06-11', '2');
INSERT INTO `invoice` VALUES ('4', '6', '6', '2024-06-11', '2');
INSERT INTO `invoice` VALUES ('5', '7', '6', '2024-06-11', '1');
INSERT INTO `invoice` VALUES ('6', '15', '6', '2024-06-04', '1');
INSERT INTO `invoice` VALUES ('7', '16', '8', '2024-06-04', '1');
INSERT INTO `invoice` VALUES ('9', '18', '8', '2024-06-04', '1');
INSERT INTO `invoice` VALUES ('10', '19', '8', '2024-06-04', '1');
INSERT INTO `invoice` VALUES ('11', '20', '8', '2024-06-04', '1');
INSERT INTO `invoice` VALUES ('12', '21', '6', '2024-06-04', '2');

-- ----------------------------
-- Table structure for `order`
-- ----------------------------
DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `no_order` int(11) NOT NULL AUTO_INCREMENT,
  `id_order` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `quantity_order` int(11) NOT NULL,
  `subtotal_order` varchar(255) NOT NULL,
  `total_order` varchar(255) NOT NULL,
  PRIMARY KEY (`no_order`),
  KEY `fk_produk_order` (`id_produk`),
  CONSTRAINT `fk_produk_order` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of order
-- ----------------------------
INSERT INTO `order` VALUES ('7', '1', '1', '5', '11250', '12850');
INSERT INTO `order` VALUES ('8', '1', '2', '1', '1600', '12850');
INSERT INTO `order` VALUES ('9', '2', '1', '3', '6750', '16350');
INSERT INTO `order` VALUES ('10', '2', '2', '6', '9600', '16350');
INSERT INTO `order` VALUES ('11', '3', '1', '4', '9000', '9000');
INSERT INTO `order` VALUES ('12', '3', '2', '0', '0', '9000');
INSERT INTO `order` VALUES ('13', '4', '1', '9', '20250', '26650');
INSERT INTO `order` VALUES ('14', '4', '2', '4', '6400', '26650');
INSERT INTO `order` VALUES ('15', '5', '1', '7', '15750', '17350');
INSERT INTO `order` VALUES ('16', '5', '2', '1', '1600', '17350');
INSERT INTO `order` VALUES ('17', '6', '1', '10', '22500', '22500');
INSERT INTO `order` VALUES ('18', '6', '2', '0', '0', '22500');
INSERT INTO `order` VALUES ('19', '7', '1', '0', '0', '6400');
INSERT INTO `order` VALUES ('20', '7', '2', '4', '6400', '6400');
INSERT INTO `order` VALUES ('21', '8', '1', '4', '9000', '9000');
INSERT INTO `order` VALUES ('22', '8', '2', '0', '0', '9000');
INSERT INTO `order` VALUES ('23', '9', '1', '0', '0', '6400');
INSERT INTO `order` VALUES ('24', '9', '2', '4', '6400', '6400');
INSERT INTO `order` VALUES ('25', '0', '1', '2', '4500', '6100');
INSERT INTO `order` VALUES ('26', '0', '2', '1', '1600', '6100');
INSERT INTO `order` VALUES ('27', '10', '1', '4', '9000', '13800');
INSERT INTO `order` VALUES ('28', '10', '2', '3', '4800', '13800');
INSERT INTO `order` VALUES ('29', '11', '1', '1', '2250', '5450');
INSERT INTO `order` VALUES ('30', '11', '2', '2', '3200', '5450');
INSERT INTO `order` VALUES ('31', '12', '1', '2', '4500', '7700');
INSERT INTO `order` VALUES ('32', '12', '2', '2', '3200', '7700');
INSERT INTO `order` VALUES ('33', '13', '1', '1', '2250', '2250');
INSERT INTO `order` VALUES ('34', '13', '2', '0', '0', '2250');
INSERT INTO `order` VALUES ('35', '14', '1', '1', '2250', '2250');
INSERT INTO `order` VALUES ('36', '15', '1', '1', '2250', '3850');
INSERT INTO `order` VALUES ('37', '15', '2', '1', '1600', '3850');
INSERT INTO `order` VALUES ('38', '16', '1', '1', '2250', '3850');
INSERT INTO `order` VALUES ('39', '16', '2', '1', '1600', '3850');
INSERT INTO `order` VALUES ('40', '17', '1', '1', '2250', '3850');
INSERT INTO `order` VALUES ('41', '17', '2', '1', '1600', '3850');
INSERT INTO `order` VALUES ('42', '18', '1', '2', '4500', '9300');
INSERT INTO `order` VALUES ('43', '18', '2', '3', '4800', '9300');
INSERT INTO `order` VALUES ('44', '19', '1', '1', '2250', '3850');
INSERT INTO `order` VALUES ('45', '19', '2', '1', '1600', '3850');
INSERT INTO `order` VALUES ('46', '20', '1', '1', '2250', '3850');
INSERT INTO `order` VALUES ('47', '20', '2', '1', '1600', '3850');
INSERT INTO `order` VALUES ('48', '21', '1', '2', '4500', '6100');
INSERT INTO `order` VALUES ('49', '21', '2', '1', '1600', '6100');

-- ----------------------------
-- Table structure for `produk`
-- ----------------------------
DROP TABLE IF EXISTS `produk`;
CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(255) NOT NULL,
  `harga_produk` varchar(255) NOT NULL,
  `deskripsi_produk` varchar(255) NOT NULL,
  `foto_produk` varchar(255) NOT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of produk
-- ----------------------------
INSERT INTO `produk` VALUES ('1', 'Wood Pellets', '2250', 'Wood Pellets adalah silinder kecil dari limbah kayu terkompresi tanpa bahan tambahan, berdiameter 6-10 mm, panjang 10-30 mm, padat dan berenergi tinggi, efektif sebagai bahan bakar pemanas rumah tangga dan industri.', 'woodpellets.png');
INSERT INTO `produk` VALUES ('2', 'Wood Chips', '1600', 'Wood Chips adalah potongan kecil kayu yang digunakan sebagai bahan bakar biomassa, mulsa dalam pertanian, alas hewan, kompos, pengendalian erosi, menekan gulma, dan meningkatkan struktur tanah.', 'woodchips.png');

-- ----------------------------
-- Table structure for `status_invoice`
-- ----------------------------
DROP TABLE IF EXISTS `status_invoice`;
CREATE TABLE `status_invoice` (
  `id_status_invoice` int(11) NOT NULL AUTO_INCREMENT,
  `status_invoice` varchar(255) NOT NULL,
  PRIMARY KEY (`id_status_invoice`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of status_invoice
-- ----------------------------
INSERT INTO `status_invoice` VALUES ('1', 'Tunggu dihubungi');
INSERT INTO `status_invoice` VALUES ('2', 'Sudah selesai');

-- ----------------------------
-- Table structure for `tim`
-- ----------------------------
DROP TABLE IF EXISTS `tim`;
CREATE TABLE `tim` (
  `id_tim` int(11) NOT NULL AUTO_INCREMENT,
  `nama_tim` varchar(255) NOT NULL,
  `jabatan_tim` varchar(255) NOT NULL,
  `linkedin_tim` varchar(255) NOT NULL,
  `ig_tim` varchar(255) NOT NULL,
  `foto_tim` varchar(255) NOT NULL,
  PRIMARY KEY (`id_tim`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of tim
-- ----------------------------
INSERT INTO `tim` VALUES ('1', 'Erick', 'CMO Hejotech', 'test', 'https://www.instagram.com/erickire?igsh=MWlzZTh6b2o5OXA1Mg==', 'ERICK.png');
INSERT INTO `tim` VALUES ('2', 'Kus', 'CFO Hejotech', 'test', 'test', 'KUS.png');
INSERT INTO `tim` VALUES ('3', 'Betha', 'CEO Hejotech', 'https://www.linkedin.com/in/betha-kurniawan-2097a5224?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app', 'https://www.instagram.com/betha_xyla?igsh=MTM2NG44aXdocjhvcA==', 'BETHA.png');
INSERT INTO `tim` VALUES ('4', 'Galih', 'CTO Hejotech', 'https://www.linkedin.com/in/galih-juhari-3790aaa7?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app', 'https://www.instagram.com/galihrush?igsh=MWkwejIwamRub2x5aQ==', 'GALIH.png');
INSERT INTO `tim` VALUES ('10', 'Gugun', 'CRND Hejotech', 'https://www.linkedin.com/in/greznor13?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app', 'https://www.instagram.com/abuaafiathalliareznor?utm_source=qr&igsh=MTRtMWo5cWl4dGxjdw==', 'GUGUN.png');

-- ----------------------------
-- Table structure for `timdivisi`
-- ----------------------------
DROP TABLE IF EXISTS `timdivisi`;
CREATE TABLE `timdivisi` (
  `id_timdivisi` int(11) NOT NULL AUTO_INCREMENT,
  `nama_timdivisi` varchar(255) NOT NULL,
  `jabatan_timdivisi` varchar(255) NOT NULL,
  `foto_timdivisi` varchar(255) NOT NULL,
  PRIMARY KEY (`id_timdivisi`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of timdivisi
-- ----------------------------
INSERT INTO `timdivisi` VALUES ('1', 'TECHNOLOGY', 'Division', 'tim1.jpg');
INSERT INTO `timdivisi` VALUES ('2', 'FINANCE & OPERATIONAL', 'Division', 'tim2.jpg');
INSERT INTO `timdivisi` VALUES ('3', 'MARKETING', 'Division', 'tim3.jpg');
INSERT INTO `timdivisi` VALUES ('4', 'RND', 'Division', 'tim4.jpg');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(255) NOT NULL,
  `alamat_user` varchar(255) NOT NULL,
  `telp_user` varchar(255) NOT NULL,
  `email_user` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('2', 'ratutes', 'jl', '0897', 'ratu@', 'queenxhr', 'hellopanda');
INSERT INTO `user` VALUES ('3', 'ratutes3', 'jl', '0897', 'ratu@', 'queenxhr', 'hellopanda');
INSERT INTO `user` VALUES ('4', 'Ratu Syahirah Khairunnisa', 'jl simpang', '081322535069', 'ratusyahirahk@gmail.com', 'admin1', '$2y$10$HZqqvHp2yvQjrDR3NfXQ8.BGv6NaThW1mtrmxEqgFLUv6O5jrgf6a');
INSERT INTO `user` VALUES ('5', 'tes', 'tesalamat', '0871263257', 'tes@mailcom', 'tes123', '$2y$10$W16kXEH5kT7bCcrNabCHAusgQCP5KUHyp08hyO5EVesduYeZ7KVCG');
INSERT INTO `user` VALUES ('6', 'ratuyyyy', 'jl simpang no 4', '089712123', 'ratusxxx@mail.com', 'ratusyakh', '$2y$10$x.FDI96AMXLRud0cFqwzPOF1c6Oj56Sp5I1GLpbujbLBqT.BrT8MK');
INSERT INTO `user` VALUES ('7', 'ratusyy', 'jl', '081322535069', 'ratusyahirahk@gmail.com', 'adminati1', '$2y$10$56zbzZ/0pNSBKO7jmObx0e/M3TuyQQNd8qmour0tjwFAPUlW6HICq');
INSERT INTO `user` VALUES ('8', 'tia', 'jl. halim', '081222382', 'tes@mailcom', 'tia123', '$2y$10$nhJ7HuVchRr.YwKT57VUO.FszmPZUxWs4XktdHhgNTt.tz7T0QV9a');
INSERT INTO `user` VALUES ('9', 'apayah', 'jl. halim', '081222382', 'tes@mailcom', 'apaajabole', '$2y$10$xzpyrMhWd5ietOjq5BVs6OjkvNUKQYfkMdw7W8HVeKbe2nCaHIToC');
INSERT INTO `user` VALUES ('10', 'yes', 'jl. halim', '081222382', 'tes@mailcom', 'dong', '$2y$10$TADWsvKtru2af03vF.nxJ.TTS7gicmIU9IrAfPzhleb3EJuFeY7Ci');
