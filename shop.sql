/*
Navicat MySQL Data Transfer

Source Server         : test
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2017-10-29 12:52:31
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for shop
-- ----------------------------
DROP TABLE IF EXISTS `shop`;
CREATE TABLE `shop` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `img_path` varchar(255) CHARACTER SET utf8 NOT NULL,
  `price` varchar(255) NOT NULL,
  `count` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of shop
-- ----------------------------
INSERT INTO `shop` VALUES ('1', '小黑裙', 'image/2017-10-25/15089397271794330611.jpg', '199', '99');
INSERT INTO `shop` VALUES ('2', '呆呆', 'image/2017-10-25/15089397481473415790.jpg', '199', '30');
INSERT INTO `shop` VALUES ('3', '哦i排气尾', 'image/2017-10-25/15089397581575526743.jpg', '123', '13');
INSERT INTO `shop` VALUES ('4', '大黑群', 'image/2017-10-25/1508941098928693273.jpg', '199', '1');
INSERT INTO `shop` VALUES ('5', '呆呆的胖次', 'image/2017-10-26/15090200921538049796.jpg', '199', '11');
INSERT INTO `shop` VALUES ('6', '你们逗啊爱死比', 'image/2017-10-26/15090210831279510925.jpg', '1', '13');
INSERT INTO `shop` VALUES ('7', '小黑', 'image/2017-10-26/1509021123954891768.png', '122', '12');
INSERT INTO `shop` VALUES ('9', '1124', 'image/2017-10-26/15090213141585145421.jpg', '214', '124');
INSERT INTO `shop` VALUES ('10', '124', 'image/2017-10-26/1509021320136795053.jpg', '124', '124');
INSERT INTO `shop` VALUES ('11', '124', 'image/2017-10-26/1509021328608671079.jpg', '124', '214');
INSERT INTO `shop` VALUES ('12', '124', 'image/2017-10-26/1509021334116568901.jpg', '124', '124');
INSERT INTO `shop` VALUES ('14', '124', 'image/2017-10-26/15090213491344406034.jpg', '124', '124');
INSERT INTO `shop` VALUES ('15', '124', 'image/2017-10-26/1509021355389146997.jpg', '124', '124');
INSERT INTO `shop` VALUES ('16', '124', 'image/2017-10-26/15090213631205504771.jpg', '214', '124');
INSERT INTO `shop` VALUES ('17', '20', 'image/2017-10-26/15090213751246908422.png', '124', '124');
INSERT INTO `shop` VALUES ('18', '124', 'image/2017-10-26/1509021388664898540.jpeg', '124', '4124');
INSERT INTO `shop` VALUES ('19', '124', 'image/2017-10-26/15090213961343188608.png', '124', '124');
INSERT INTO `shop` VALUES ('20', '124', 'image/2017-10-26/1509021409273008461.jpg', '124', '124');
INSERT INTO `shop` VALUES ('21', '20', 'image/2017-10-26/1509021409273008461.jpg', '124', '124');
INSERT INTO `shop` VALUES ('22', '124', 'image/2017-10-26/1509021409273008461.jpg', '124', '124');
INSERT INTO `shop` VALUES ('23', '124', 'image/2017-10-26/1509021409273008461.jpg', '124', '124');
INSERT INTO `shop` VALUES ('24', '124', 'image/2017-10-26/1509021409273008461.jpg', '124', '124');
INSERT INTO `shop` VALUES ('25', '124', 'image/2017-10-26/1509021409273008461.jpg', '124', '124');
INSERT INTO `shop` VALUES ('26', '124', 'image/2017-10-26/1509021409273008461.jpg', '124', '124');
INSERT INTO `shop` VALUES ('27', '124', 'image/2017-10-26/1509021409273008461.jpg', '124', '124');
INSERT INTO `shop` VALUES ('28', '124', 'image/2017-10-26/1509021409273008461.jpg', '124', '124');
INSERT INTO `shop` VALUES ('29', '124', 'image/2017-10-26/1509021409273008461.jpg', '124', '124');
INSERT INTO `shop` VALUES ('30', '124', 'image/2017-10-26/1509021409273008461.jpg', '124', '124');
INSERT INTO `shop` VALUES ('31', '124', 'image/2017-10-26/1509021409273008461.jpg', '124', '124');
INSERT INTO `shop` VALUES ('32', '124', 'image/2017-10-26/1509021409273008461.jpg', '124', '124');
INSERT INTO `shop` VALUES ('33', '124', 'image/2017-10-26/1509021409273008461.jpg', '124', '124');
INSERT INTO `shop` VALUES ('34', '124', 'image/2017-10-26/1509021409273008461.jpg', '124', '124');
