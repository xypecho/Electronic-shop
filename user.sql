/*
Navicat MySQL Data Transfer

Source Server         : test
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2017-10-29 12:52:45
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(50) NOT NULL,
  `registdate` varchar(50) NOT NULL,
  `isadmin` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', 'admin', '1508847410', '1');
INSERT INTO `user` VALUES ('2', 'admin', 'admin', '1508847432', null);
INSERT INTO `user` VALUES ('3', 'xyp', 'admin', '1508847525', null);
INSERT INTO `user` VALUES ('4', '网萨法', '124124', '1508847595', null);
INSERT INTO `user` VALUES ('6', '薛友平123', '123', '1508933209', null);
INSERT INTO `user` VALUES ('7', 'root', '123456', '1508940075', null);
