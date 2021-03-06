/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50547
Source Host           : localhost:3366
Source Database       : hrtwists

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2018-11-30 14:15:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for flight
-- ----------------------------
DROP TABLE IF EXISTS `flight`;
CREATE TABLE `flight` (
  `id` int(11) NOT NULL,
  `start_time` varchar(40) DEFAULT NULL,
  `end_time` varchar(40) DEFAULT NULL,
  `start_city` varchar(40) DEFAULT NULL,
  `end_city` varchar(40) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `start_date` varchar(50) DEFAULT NULL,
  `arrive_date` varchar(50) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of flight
-- ----------------------------
INSERT INTO `flight` VALUES ('1', '06：00', '09：00', '广东', '河北', '1100', '2018-12-01', '2018-12-01', '1');
INSERT INTO `flight` VALUES ('2', '06：45', '09：45', '广东', '河北', '1100', '2018-12-01', '2018-12-01', '2');
INSERT INTO `flight` VALUES ('3', '07：30', '10：30', '广东', '河北', '1100', '2018-12-01', '2018-12-01', '3');
INSERT INTO `flight` VALUES ('4', '09：30', '14：30', '广东', '河北', '1100', '2018-12-01', '2018-12-01', '4');
INSERT INTO `flight` VALUES ('5', '14：30', '17：30', '广东', '河北', '1100', '2018-12-01', '2018-12-01', '5');
INSERT INTO `flight` VALUES ('6', '06：00', '09：00', '广东', '河北', '1100', '2018-12-02', '2018-12-02', '11');
INSERT INTO `flight` VALUES ('7', '06：45', '09：45', '广东', '河北', '1100', '2018-12-02', '2018-12-02', '12');
INSERT INTO `flight` VALUES ('8', '07：30', '10：30', '广东', '河北', '1100', '2018-12-92', '2018-12-02', '13');
INSERT INTO `flight` VALUES ('9', '09：30', '14：30', '广东', '河北', '1100', '2018-12-02', '2018-12-02', '14');
INSERT INTO `flight` VALUES ('10', '14：30', '17：30', '广东', '河北', '1100', '2018-12-02', '2018-12-02', '15');
