/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : web

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-06-02 22:41:21
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for think_comment
-- ----------------------------
DROP TABLE IF EXISTS `think_comment`;
CREATE TABLE `think_comment` (
  `id` int(11) NOT NULL,
  `data` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of think_comment
-- ----------------------------
INSERT INTO `think_comment` VALUES ('1', '1测试。。');
INSERT INTO `think_comment` VALUES ('1', '1测试');
INSERT INTO `think_comment` VALUES ('1', '1测试。。。。');
INSERT INTO `think_comment` VALUES ('2', '2测试');
INSERT INTO `think_comment` VALUES ('2', '2测试。。');
INSERT INTO `think_comment` VALUES ('2', '2测试。。。。');
INSERT INTO `think_comment` VALUES ('1', '123123123');

-- ----------------------------
-- Table structure for think_data
-- ----------------------------
DROP TABLE IF EXISTS `think_data`;
CREATE TABLE `think_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(255) CHARACTER SET utf8 DEFAULT NULL,
  `title` char(255) CHARACTER SET utf8 DEFAULT NULL,
  `content` char(255) CHARACTER SET utf8 DEFAULT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of think_data
-- ----------------------------
INSERT INTO `think_data` VALUES ('1', '第一篇文章', 'tag1', '23333333', '2015-06-02 00:00:00');
INSERT INTO `think_data` VALUES ('2', '第二篇文章', 'tag2', '。。。。。。', '2015-06-02 00:00:00');
INSERT INTO `think_data` VALUES ('3', '第三篇文章', 'tag3', '。。。。。。。。。', '2015-06-02 00:00:00');
INSERT INTO `think_data` VALUES ('4', '123', 'tag1', '123', '2015-06-02 00:00:00');
INSERT INTO `think_data` VALUES ('5', '1', 'tag2', '1', '2015-06-02 00:00:00');
INSERT INTO `think_data` VALUES ('6', '2', 'tag1', '2', '2015-06-02 00:00:00');

-- ----------------------------
-- Table structure for think_user
-- ----------------------------
DROP TABLE IF EXISTS `think_user`;
CREATE TABLE `think_user` (
  `username` varchar(255) NOT NULL,
  `passward` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of think_user
-- ----------------------------
INSERT INTO `think_user` VALUES ('xsp', '19970520');
