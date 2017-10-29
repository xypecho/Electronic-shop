/*
Navicat MySQL Data Transfer

Source Server         : test
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2017-10-29 12:52:38
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for shoppingcart
-- ----------------------------
DROP TABLE IF EXISTS `shoppingcart`;
CREATE TABLE `shoppingcart` (
  `id` int(30) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `img_path` varchar(255) CHARACTER SET utf8 NOT NULL,
  `price` varchar(255) NOT NULL,
  `count` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of shoppingcart
-- ----------------------------
INSERT INTO `shoppingcart` VALUES ('1', '呆呆', 'image/2017-10-25/15089397481473415790.jpg', '199', '');
INSERT INTO `shoppingcart` VALUES ('3', '你们逗啊爱死比', 'image/2017-10-26/15090210831279510925.jpg', '1', '');
INSERT INTO `shoppingcart` VALUES ('4', '124', 'image/2017-10-26/1509021334116568901.jpg', '124', '');
INSERT INTO `shoppingcart` VALUES ('8', '124', 'image/2017-10-26/1509021320136795053.jpg', '124', '');
INSERT INTO `shoppingcart` VALUES ('10', '你们逗啊爱死比', 'image/2017-10-26/15090210831279510925.jpg', '1', '');
