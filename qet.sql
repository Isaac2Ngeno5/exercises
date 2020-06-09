/*
Navicat MySQL Data Transfer

Source Server         : conn
Source Server Version : 50525
Source Host           : 127.0.0.1:3306
Source Database       : qet

Target Server Type    : MYSQL
Target Server Version : 50525
File Encoding         : 65001

Date: 2020-06-09 14:52:38
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for landing_data
-- ----------------------------
DROP TABLE IF EXISTS `landing_data`;
CREATE TABLE `landing_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `business` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `stamp` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of landing_data
-- ----------------------------
INSERT INTO `landing_data` VALUES ('1', 'john doe', '', 'ok', '072555555', '', '202006091246', '09/06/2020', '12:46', '1');
INSERT INTO `landing_data` VALUES ('2', 'jane getchen', '', 'oplaaaaa', '072555505', '', '202006091250', '09/06/2020', '12:50', '1');
INSERT INTO `landing_data` VALUES ('3', 'jane getchen', 'hosi', 'oplaaaaa', '072555505', 'getrcher@mail.com', '202006091250', '09/06/2020', '12:50', '1');
INSERT INTO `landing_data` VALUES ('4', 'kevin kiptui', 'hosi', 'oplaaaaa', '072555505', 'kiptui@mail.com', '202006091251', '09/06/2020', '12:51', '1');
