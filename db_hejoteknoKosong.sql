/*
BACKUP DATABASE KOSONG
Navicat MySQL Data Transfer

Source Server         : koneksi01
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : db_hejotekno

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2024-06-07 17:32:56
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
INSERT INTO `tim` VALUES ('1', 'Erick', 'CMO Hejotech', 'testtt', 'testttt', 'ERICK.png');
INSERT INTO `tim` VALUES ('2', 'Betha', 'CEO Hejotech', 'test', 'https://www.instagram.com/betha_xyla/', 'BETHA.png');
INSERT INTO `tim` VALUES ('3', 'Kus', 'CFO Hejotech', 'test', 'test', 'KUS.png');
INSERT INTO `tim` VALUES ('4', 'Galih', 'CTO Hejotech', 'test', 'test', 'GALIH.png');
INSERT INTO `tim` VALUES ('10', 'Gugun', 'CRND Hejotech', 'TEST', 'TEST', 'GUGUN.png');

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
