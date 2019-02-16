/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 100116
Source Host           : localhost:3306
Source Database       : e-surat

Target Server Type    : MYSQL
Target Server Version : 100116
File Encoding         : 65001

Date: 2019-02-12 20:33:51
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for jenis_doc
-- ----------------------------
DROP TABLE IF EXISTS `jenis_doc`;
CREATE TABLE `jenis_doc` (
  `id_document` int(2) NOT NULL,
  `nama_document` varchar(50) NOT NULL,
  `kode_document` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_document`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of jenis_doc
-- ----------------------------
INSERT INTO `jenis_doc` VALUES ('1', 'Surat Keputusan Direksi (SK)', 'SK');
INSERT INTO `jenis_doc` VALUES ('2', 'Surat Kuasa (SKK)', 'SKK');
INSERT INTO `jenis_doc` VALUES ('3', 'Surat Tugas (ST)', 'ST');
INSERT INTO `jenis_doc` VALUES ('4', 'Surat Edaran (SE)', 'SE');
INSERT INTO `jenis_doc` VALUES ('5', 'Surat Keluar Eksternal (KE)', 'KE');
INSERT INTO `jenis_doc` VALUES ('6', 'Surat Keluar Internal (KI)', 'KI');
INSERT INTO `jenis_doc` VALUES ('7', 'Perjanjian Kerjasama ', 'SPK');
INSERT INTO `jenis_doc` VALUES ('8', 'SPK HRD', 'SPK-HRD');
INSERT INTO `jenis_doc` VALUES ('9', 'SPK PROC', 'SPK-PROC');
INSERT INTO `jenis_doc` VALUES ('10', 'SPK LEGAL', 'SPK-LGL');
INSERT INTO `jenis_doc` VALUES ('11', 'SPK KOMERSIL', 'SPK-COM');

-- ----------------------------
-- Table structure for konselor
-- ----------------------------
DROP TABLE IF EXISTS `konselor`;
CREATE TABLE `konselor` (
  `ID_konselor` int(6) NOT NULL AUTO_INCREMENT,
  `ID_user` int(6) NOT NULL,
  `no_konselor` varchar(6) NOT NULL,
  `nama_konselor` varchar(15) NOT NULL,
  PRIMARY KEY (`ID_konselor`)
) ENGINE=InnoDB AUTO_INCREMENT=300005 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of konselor
-- ----------------------------
INSERT INTO `konselor` VALUES ('300001', '110001', 'KSL001', 'ATIK');
INSERT INTO `konselor` VALUES ('300003', '0', 'KSL002', 'JUJU');
INSERT INTO `konselor` VALUES ('300004', '0', 'KSL003', 'ELOK SATITI');

-- ----------------------------
-- Table structure for no_surat
-- ----------------------------
DROP TABLE IF EXISTS `no_surat`;
CREATE TABLE `no_surat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_surat` varchar(30) DEFAULT NULL,
  `jenis_perusahaan` varchar(30) DEFAULT NULL,
  `kode_perusahaan` varchar(8) DEFAULT NULL,
  `jenis_dokumen` varchar(50) DEFAULT NULL,
  `department` varchar(20) DEFAULT NULL,
  `penandatangan` varchar(20) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `keterangan` text,
  `id_user` int(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of no_surat
-- ----------------------------
INSERT INTO `no_surat` VALUES ('1', '009/oijihuihu', 'uihiuh', 'ihiuhiuh', 'uhuihuh', 'uhuihuihui', 'uhuih', '2019-01-01', 'jbshhav', null);
INSERT INTO `no_surat` VALUES ('8', '1', 'Head Office', 'MI_SU', 'SK', 'HRD', 'Direktur', '2019-01-28', '<p>\n	coba lagi ajaa, iseng</p>\n', null);
INSERT INTO `no_surat` VALUES ('13', '1', 'Head Office', 'MI_SU', 'SK', 'HRD', 'Direktur', '2019-01-23', '<p>\n	tes lagi yaaaa</p>\n', null);
INSERT INTO `no_surat` VALUES ('15', '1', 'Head Office', 'MI_SU', 'SK', 'HRD', 'Direktur', '2019-01-30', '<p>\r\n	tesssssssssssssssssssssssssssssssss</p>\r\n', null);
INSERT INTO `no_surat` VALUES ('16', '1', 'Head Office', 'BM', 'SK', 'GA', 'Direktur', '2019-01-30', '<p>\r\n	kjhsamgguroisdom</p>\r\n', null);
INSERT INTO `no_surat` VALUES ('17', '1', 'Head Office', 'MI_SU', 'SK', 'HRD', 'Direktur', '2019-01-30', '<p>\r\n	tes</p>\r\n', null);
INSERT INTO `no_surat` VALUES ('18', '1', 'Head Office', 'BM', 'SK', 'SUS', 'Direktur', '2019-01-27', '<p>\r\n	coba hari ini</p>\r\n', null);
INSERT INTO `no_surat` VALUES ('19', null, 'tes', 'tes', 'tes', 'tes', 'tes', '2019-01-30', 'tes', null);

-- ----------------------------
-- Table structure for no_surat_copy1
-- ----------------------------
DROP TABLE IF EXISTS `no_surat_copy1`;
CREATE TABLE `no_surat_copy1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_surat` varchar(30) DEFAULT NULL,
  `jenis_perusahaan` varchar(30) DEFAULT NULL,
  `kode_perusahaan` varchar(8) DEFAULT NULL,
  `jenis_dokumen` varchar(50) DEFAULT NULL,
  `department` varchar(20) DEFAULT NULL,
  `penandatangan` varchar(20) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `keterangan` text,
  `id_user` int(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of no_surat_copy1
-- ----------------------------
INSERT INTO `no_surat_copy1` VALUES ('1', '009/oijihuihu', 'uihiuh', 'ihiuhiuh', 'uhuihuh', 'uhuihuihui', 'uhuih', '2019-01-01', 'jbshhav', null);
INSERT INTO `no_surat_copy1` VALUES ('2', null, 'Head Office', 'MI_SU', 'Surat Keputusan Direksi', 'AGR', 'Manager', '2019-01-24', '<p>\n	coba</p>\n', '1');
INSERT INTO `no_surat_copy1` VALUES ('3', null, 'Head Office', 'MI_SU', 'Surat Keputusan Direksi', 'tes', 'tes', '2019-01-24', '<p>\n	tes</p>\n', '1');

-- ----------------------------
-- Table structure for no_surat_copy2
-- ----------------------------
DROP TABLE IF EXISTS `no_surat_copy2`;
CREATE TABLE `no_surat_copy2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_surat` varchar(30) DEFAULT NULL,
  `jenis_perusahaan` varchar(30) DEFAULT NULL,
  `kode_perusahaan` varchar(8) DEFAULT NULL,
  `jenis_dokumen` varchar(50) DEFAULT NULL,
  `department` varchar(20) DEFAULT NULL,
  `penandatangan` varchar(20) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `keterangan` text,
  `id_user` int(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of no_surat_copy2
-- ----------------------------
INSERT INTO `no_surat_copy2` VALUES ('1', '009/oijihuihu', 'uihiuh', 'ihiuhiuh', 'uhuihuh', 'uhuihuihui', 'uhuih', '2019-01-01', 'jbshhav', null);
INSERT INTO `no_surat_copy2` VALUES ('2', null, 'Head Office', 'MI_SU', 'Surat Keputusan Direksi', 'AGR', 'Manager', '2019-01-24', '<p>\n	coba</p>\n', '1');
INSERT INTO `no_surat_copy2` VALUES ('3', null, 'Head Office', 'MI_SU', 'Surat Keputusan Direksi', 'tes', 'tes', '2019-01-24', '<p>\n	tes</p>\n', '1');

-- ----------------------------
-- Table structure for penandatangan
-- ----------------------------
DROP TABLE IF EXISTS `penandatangan`;
CREATE TABLE `penandatangan` (
  `id_penandatangan` int(5) NOT NULL,
  `nama_penandatangan` varchar(255) DEFAULT NULL,
  `kode_penandatangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_penandatangan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of penandatangan
-- ----------------------------
INSERT INTO `penandatangan` VALUES ('1', 'Direktur', 'DIR');
INSERT INTO `penandatangan` VALUES ('2', 'Manager', 'MGR');
INSERT INTO `penandatangan` VALUES ('3', 'General Manager', 'GM');

-- ----------------------------
-- Table structure for profil
-- ----------------------------
DROP TABLE IF EXISTS `profil`;
CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of profil
-- ----------------------------

-- ----------------------------
-- Table structure for sk_dir
-- ----------------------------
DROP TABLE IF EXISTS `sk_dir`;
CREATE TABLE `sk_dir` (
  `id_skdir` int(11) NOT NULL AUTO_INCREMENT,
  `nomor_skdir` varchar(30) DEFAULT NULL,
  `id_perusahaan` varchar(30) DEFAULT NULL,
  `id_document` varchar(50) DEFAULT NULL,
  `id_department` varchar(20) DEFAULT NULL,
  `id_penandatangan` varchar(20) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `keterangan` text,
  `id_user` int(6) DEFAULT NULL,
  PRIMARY KEY (`id_skdir`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of sk_dir
-- ----------------------------
INSERT INTO `sk_dir` VALUES ('1', '009/HS/SK-HRD/DIR/I/2019', 'uihiuh', 'uhuihuh', 'uhuihuihui', 'uhuih', '2019-01-01', 'jbshhav', null);
INSERT INTO `sk_dir` VALUES ('19', '001//SK-HRD/DIR/II/2019', '2', '', '', '', '2019-02-05', 'SK MUTASI AN. RIKA', '0');
INSERT INTO `sk_dir` VALUES ('20', '001//SK-HRD/DIR/II/2019', '1', '', '', '', '2019-02-04', '1234', '0');
INSERT INTO `sk_dir` VALUES ('21', '001//SK-HRD/DIR/II/2019', '1', '', '', '', '2019-02-05', '7879879', '0');
INSERT INTO `sk_dir` VALUES ('22', '001//SK-HRD/DIR/II/2019', '2', '', '', '', '2019-02-04', 'ughfkjahoiy8t749809-0594', '0');
INSERT INTO `sk_dir` VALUES ('23', '001//SK-HRD/DIR/II/2019', '6', '', '', '', '2019-02-04', '567890-', '0');
INSERT INTO `sk_dir` VALUES ('24', '001//SK-HRD/DIR/II/2019', '3', '', '', '', '2019-02-05', 'uiuiui', '0');

-- ----------------------------
-- Table structure for tb_department
-- ----------------------------
DROP TABLE IF EXISTS `tb_department`;
CREATE TABLE `tb_department` (
  `id_department` int(2) NOT NULL,
  `nama_department` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_department`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_department
-- ----------------------------
INSERT INTO `tb_department` VALUES ('1', 'HRD');
INSERT INTO `tb_department` VALUES ('2', 'GA');
INSERT INTO `tb_department` VALUES ('3', 'SUS');
INSERT INTO `tb_department` VALUES ('4', 'AGR');
INSERT INTO `tb_department` VALUES ('5', 'PROC');
INSERT INTO `tb_department` VALUES ('6', 'TEK');
INSERT INTO `tb_department` VALUES ('7', 'COM');
INSERT INTO `tb_department` VALUES ('8', 'FIN');
INSERT INTO `tb_department` VALUES ('9', 'LGL');
INSERT INTO `tb_department` VALUES ('10', 'PROD');
INSERT INTO `tb_department` VALUES ('11', 'ACC');
INSERT INTO `tb_department` VALUES ('12', 'IT');

-- ----------------------------
-- Table structure for tb_perusahaan
-- ----------------------------
DROP TABLE IF EXISTS `tb_perusahaan`;
CREATE TABLE `tb_perusahaan` (
  `id_perusahaan` int(2) NOT NULL,
  `kode_perusahaan` varchar(50) DEFAULT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_perusahaan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_perusahaan
-- ----------------------------
INSERT INTO `tb_perusahaan` VALUES ('1', 'MI_SU', 'MI Sumut');
INSERT INTO `tb_perusahaan` VALUES ('2', 'MI_ST', 'MI Sultra');
INSERT INTO `tb_perusahaan` VALUES ('3', 'BM', 'Binanga Mandala');
INSERT INTO `tb_perusahaan` VALUES ('4', 'HS', 'Hexa Sawita');
INSERT INTO `tb_perusahaan` VALUES ('5', 'SSP', 'Swadaya Sapta Putra');
INSERT INTO `tb_perusahaan` VALUES ('6', 'MIG', 'Mahitala Ingkeng Gemah');

-- ----------------------------
-- Table structure for tb_user
-- ----------------------------
DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user` (
  `iduser` int(4) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(100) DEFAULT NULL,
  `p_keys` varchar(255) DEFAULT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT '0',
  `u_email` varchar(255) DEFAULT NULL,
  `flag_type` varchar(20) DEFAULT NULL,
  `flag_status` char(2) DEFAULT '1',
  `user_01` varchar(255) DEFAULT NULL,
  `user_02` varchar(255) DEFAULT NULL,
  `user_03` varchar(255) DEFAULT NULL,
  `user_04` int(4) DEFAULT NULL,
  `user_05` int(4) DEFAULT NULL,
  `user_06` double DEFAULT NULL,
  `user_07` double DEFAULT NULL,
  `user_08` text,
  `status` smallint(1) DEFAULT '1' COMMENT '1: simpan || 0 : hapus',
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `userid` int(3) DEFAULT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_user
-- ----------------------------
INSERT INTO `tb_user` VALUES ('1', 'test', '098f6bcd4621d373cade4e832627b4f6', 'Titi Dwi Pusparani', '0', 'rani@mig.co.id', 'Administrator', '1', null, null, null, null, null, null, null, null, '1', null, null, null);
INSERT INTO `tb_user` VALUES ('2', 'kodok1', '260cf942f466dabb8d9c5a54e22c4256', 'Titis', '0', 'titis@mig.co.id', 'Administrator', '1', null, null, null, null, null, null, null, null, '1', null, null, null);
INSERT INTO `tb_user` VALUES ('3', 'tos', '227f82daef18fd97b0ed9538ce418761', 'tos', '5', 'imam.andrias@mig.co.id', 'User', '1', null, null, null, null, null, null, null, null, '1', null, null, null);
INSERT INTO `tb_user` VALUES ('4', 'coba', 'c3ec0f7b054e729c5a716c8125839829', 'coba', '6', 'titi@mig.co.id', 'User', '1', null, null, null, null, null, null, null, null, '1', null, null, null);
INSERT INTO `tb_user` VALUES ('5', 'reza', '2ada7cb78fb90fe5d8ae564ef3b230b1', 'Reza Hasbi', '0', 'reza.hasbi@mig.co.id', 'Administrator', '1', null, null, null, null, null, null, null, null, '1', null, null, null);
INSERT INTO `tb_user` VALUES ('6', 'tes', '28b662d883b6d76fd96e4ddc5e9ba780', 'rizky', '0', 'rizky@mig.co.id', 'Administrator', '1', null, null, null, null, null, null, null, null, '1', null, null, null);
INSERT INTO `tb_user` VALUES ('7', 'bm sumut', '28b662d883b6d76fd96e4ddc5e9ba780', 'binangan sumut', '7', 'tes@mig.co.id', 'User', '1', null, null, null, null, null, null, null, null, '1', null, null, null);
INSERT INTO `tb_user` VALUES ('8', 'bm edit', '098f6bcd4621d373cade4e832627b4f6', 'bm sumatra', '0', 'tes@mig.co.id', 'Administrator', '1', null, null, null, null, null, null, null, null, '1', null, '2016-02-19 08:13:49', null);
INSERT INTO `tb_user` VALUES ('9', 'bm tes', '28b662d883b6d76fd96e4ddc5e9ba780', 'bm sumatra', '7', 'asdasd', 'User', '1', null, null, null, null, null, null, null, null, '1', null, '2016-02-19 05:27:02', null);
INSERT INTO `tb_user` VALUES ('10', 'bm sumut', 'd66c264e1dbd73e6111d3ffc70908e8e', 'rizky', '7', 'rizky@mig.co.id', 'User', '1', null, null, null, null, null, null, null, null, '1', null, null, null);

-- ----------------------------
-- Table structure for tb_verifikator
-- ----------------------------
DROP TABLE IF EXISTS `tb_verifikator`;
CREATE TABLE `tb_verifikator` (
  `id_verifikator` int(2) NOT NULL,
  `nama_verifikator` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_verifikator`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_verifikator
-- ----------------------------

-- ----------------------------
-- Table structure for tb_wilayah
-- ----------------------------
DROP TABLE IF EXISTS `tb_wilayah`;
CREATE TABLE `tb_wilayah` (
  `id_wilayah` int(2) NOT NULL,
  `nama_wilayah` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_wilayah`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_wilayah
-- ----------------------------

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `ID_user` int(6) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `level_user` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'logout',
  `last_login` datetime NOT NULL,
  `last_logout` datetime NOT NULL,
  PRIMARY KEY (`ID_user`)
) ENGINE=InnoDB AUTO_INCREMENT=110003 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('110001', 'admin', 'Administrator', '21232f297a57a5a743894a0e4a801fc3', 'administrator', 'login', '2019-02-10 04:02:43', '2014-02-08 00:00:00');
INSERT INTO `user` VALUES ('110002', 'rika', null, 'rika', 'user', 'login', '2019-01-30 09:01:03', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for user_copy
-- ----------------------------
DROP TABLE IF EXISTS `user_copy`;
CREATE TABLE `user_copy` (
  `ID_user` int(6) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level_user` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'logout',
  `last_login` datetime NOT NULL,
  `last_logout` datetime NOT NULL,
  PRIMARY KEY (`ID_user`)
) ENGINE=InnoDB AUTO_INCREMENT=110003 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_copy
-- ----------------------------
INSERT INTO `user_copy` VALUES ('110001', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'konselor', 'login', '2019-01-30 09:01:48', '2014-02-08 00:00:00');
INSERT INTO `user_copy` VALUES ('110002', 'rika', 'rika', 'konselor', 'login', '2019-01-30 09:01:03', '0000-00-00 00:00:00');
SET FOREIGN_KEY_CHECKS=1;
