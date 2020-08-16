/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50547
Source Host           : localhost:3366
Source Database       : hrtwists

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2018-11-30 21:14:40
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nickname` varchar(20) DEFAULT NULL,
  `sex` int(1) DEFAULT NULL,
  `hometown` varchar(30) DEFAULT NULL,
  `hobby` varchar(60) DEFAULT NULL,
  `school` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', 'abc', 'admin', '1', '上海', '旅游', '未知');
INSERT INTO `user` VALUES ('2', 'abc', 'abc', 'abc', '2', '河北', '滑雪', '未知');
INSERT INTO `user` VALUES ('3', 'an', 'an', 'an', '1', '广东', '打篮球', '未知');
