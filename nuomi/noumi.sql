-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 02, 2015 at 05:37 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `noumi`
--

-- --------------------------------------------------------

--
-- Table structure for table `nm_admin`
--

CREATE TABLE IF NOT EXISTS `nm_admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(20) NOT NULL,
  `password` char(32) NOT NULL,
  `rtime` int(50) unsigned NOT NULL,
  `auth` tinyint(4) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `nm_admin`
--

INSERT INTO `nm_admin` (`id`, `name`, `password`, `rtime`, `auth`, `status`) VALUES
(1, 'guanjianfeng', '089fb1da9864f87917d149e1a187e87c', 0, 1, 1),
(2, 'jianfeng', '5b7c7dada2b740abbe26d0b4d3edfa3c', 1448417213, 1, 1),
(3, 'fengde', 'c5e1e342b3a6122602aaa8489b6976e1', 1448420565, 1, 1),
(4, 'guande', '17dd70e1cf74b8d0e07086aad2276c20', 1448432852, 0, 1),
(5, 'yuhuan', 'b497394d157c5a2b6985795e57ef12a8', 1448502445, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `nm_advert`
--

CREATE TABLE IF NOT EXISTS `nm_advert` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `place` char(60) NOT NULL DEFAULT '',
  `title` text NOT NULL,
  `image` char(60) NOT NULL DEFAULT '',
  `ctime` int(11) NOT NULL,
  `url` char(60) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `nm_advert`
--

INSERT INTO `nm_advert` (`id`, `place`, `title`, `image`, `ctime`, `url`) VALUES
(7, '0', '甩1', 'Uploads/advert/2015-12-01/565d8fa4a3804.jpg', 1448972196, 'www.baidu.com'),
(8, '0', '好', 'Uploads/advert/2015-12-01/565d91044e49a.jpg', 1448972548, 'www.baidu.com'),
(9, '0', '好消息', 'Uploads/advert/2015-12-01/565d912436765.jpg', 1448972580, 'www.baidu.com'),
(10, '0', '甩单活动', 'Uploads/advert/2015-12-01/565d929a71ab7.png', 1448972954, 'www.baidu.com'),
(11, '0', '百度', 'Uploads/advert/2015-12-01/565d95c5736f9.jpg', 1448973765, 'www.baidu.com'),
(12, '3', '独家发售', 'Uploads/advert/2015-12-01/565d9ad04e1a3.jpg', 1448975056, 'www.baidu.com'),
(13, '3', '原图', 'Uploads/advert/2015-12-01/565d9edbefc4a.jpg', 1448976091, 'www.baidu.com'),
(14, '4', 'app', 'Uploads/advert/2015-12-01/565da0c147282.jpg', 1448976577, 'www.baidu.com'),
(15, '1', '活动专场', 'Uploads/advert/2015-12-02/565e589373065.jpg', 1449023635, 'www.baidu.com');

-- --------------------------------------------------------

--
-- Table structure for table `nm_area`
--

CREATE TABLE IF NOT EXISTS `nm_area` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `aname` varchar(50) NOT NULL,
  `apid` char(10) NOT NULL,
  `apath` char(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `nm_area`
--

INSERT INTO `nm_area` (`id`, `aname`, `apid`, `apath`) VALUES
(1, '北京', '0', '0'),
(2, '昌平', '1', '0,1'),
(3, '海淀区', '1', '0,1'),
(4, '朝阳区', '1', '0,1'),
(5, '东城区', '1', '0,1'),
(6, '西城区', '1', '0,1'),
(7, '风台区', '1', '0,1'),
(8, '石景区', '1', '0,1'),
(9, '房山区', '1', '0,1'),
(10, '通州区', '1', '0,1'),
(11, '城北街道', '2', '0,1,2'),
(12, '南口地区', '2', '0,1,2'),
(13, '马池口地区', '2', '0,1,2'),
(14, '沙河地区', '2', '0,1,2'),
(15, '城南街道', '2', '0,1,2'),
(16, '阳坊镇', '2', '0,1,2'),
(17, '郑州', '0', ''),
(18, '金水区', '17', ',17'),
(19, '二七区', '17', ',17'),
(20, '中原区', '17', ',17'),
(21, '管城区', '17', ',17'),
(27, '西大街街道', '21', ',17,21'),
(28, '南关街道', '21', ',17,21'),
(29, '城东街道', '21', ',17,21'),
(30, '东大街街道', '21', ',17,21'),
(31, '二里岗街道', '21', ',17,21'),
(32, '紫金山南路街道', '21', ',17,21');

-- --------------------------------------------------------

--
-- Table structure for table `nm_comment`
--

CREATE TABLE IF NOT EXISTS `nm_comment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `goodid` int(11) NOT NULL,
  `goodpoint` int(11) NOT NULL,
  `content` text NOT NULL,
  `comtime` int(11) NOT NULL,
  `stute` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `nm_comment`
--

INSERT INTO `nm_comment` (`id`, `userid`, `orderid`, `goodid`, `goodpoint`, `content`, `comtime`, `stute`) VALUES
(1, 62, 226, 0, 3, '非常舒服，很好！', 1448889842, 4),
(2, 62, 226, 29, 4, '顶顶顶顶顶顶顶顶顶顶顶顶顶顶', 1448891993, 1),
(3, 62, 226, 29, 0, '', 1448892443, 0),
(4, 62, 226, 29, 4, '顶顶顶顶顶顶顶顶顶顶顶顶顶顶', 1448893541, 0),
(5, 62, 226, 29, 4, '顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶', 1448893557, 1),
(6, 62, 226, 29, 4, '还可以追平一下！！！！！！1111', 1448893870, 1),
(7, 65, 229, 19, 3, '很好吃！', 1448911171, 0),
(8, 65, 229, 19, 4, '追平！！！！！！！！！！！！1', 1448911195, 1),
(9, 66, 230, 19, 4, 'aaa 很好吃！', 1448932402, 0),
(10, 66, 230, 19, 4, '很好吃！！', 1448932426, 1),
(11, 66, 230, 19, 4, '追平一下！！！！！！！！1很好吃！！', 1448940287, 1),
(12, 66, 230, 19, 4, '和好吃！', 1448949731, 0),
(13, 66, 230, 19, 4, '很好很完美！', 1448949743, 1),
(14, 66, 230, 19, 1, '不是很好吃！还是别去了', 1449042785, 1),
(15, 67, 232, 19, 1, '不是很好吃！！！', 1449043213, 0);

-- --------------------------------------------------------

--
-- Table structure for table `nm_goods`
--

CREATE TABLE IF NOT EXISTS `nm_goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(255) NOT NULL,
  `name` char(32) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `descr` varchar(255) NOT NULL,
  `price` char(255) NOT NULL,
  `oldprice` char(255) NOT NULL,
  `is_best` tinyint(4) NOT NULL DEFAULT '1',
  `is_phone` tinyint(4) NOT NULL DEFAULT '0',
  `is_state` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `nm_goods`
--

INSERT INTO `nm_goods` (`id`, `img`, `name`, `cate_id`, `area_id`, `descr`, `price`, `oldprice`, `is_best`, `is_phone`, `is_state`) VALUES
(17, 'Goods_Upload/2015-11-26/5656d31b72f5b.jpg', '九宫格火锅', 147, 27, '降价啦~sss', '50', '80', 1, 1, 1),
(18, 'Goods_Upload/2015-11-26/5656d30eed07b.jpg', '季季红', 147, 28, '又便宜了', '40', '65', 1, 1, 0),
(19, 'Goods_Upload/2015-11-26/5656d2be991b5.jpg', '好吃烧烤', 150, 29, '不来你会后悔哦', '140', '180', 1, 1, 1),
(20, 'Goods_Upload/2015-11-26/5656d2f6bb706.jpg', '大星星KTV', 160, 11, '环境干净 服务周到', '10', '120', 1, 1, 1),
(22, 'Goods_Upload/2015-11-26/5656d2451f095.jpg', '水果火锅', 147, 29, '最特别的火锅', '10', '110', 0, 1, 1),
(23, 'Goods_Upload/2015-11-26/5656d2b1a48d0.jpg', '管管自助餐', 148, 31, '不好吃不要钱 快来吃', '0', '1', 1, 1, 1),
(24, 'Goods_Upload/2015-11-26/5656cc6d6f252.jpg', '兄弟连烧烤', 150, 32, '正宗的烧烤', '300', '330', 1, 0, 0),
(25, 'Goods_Upload/2015-11-26/5656e6da1397a.jpg', '世纪银河假日酒店', 161, 11, '仅售19.9元，价值49元世纪银河假日洗浴单人门票！', '18', '20', 1, 0, 0),
(27, 'Goods_Upload/2015-11-26/5656c15317683.jpg', '新元素主题酒店', 163, 15, '仅98元！价值368元的郑州新元素主题酒店时尚主题房入住1晚，免费WiFi、免费早餐。', '98', '368', 1, 1, 0),
(28, 'Goods_Upload/2015-11-26/565675bba85d9.jpg', '蓝孔雀世界风情旅馆', 165, 12, '世界风情大床房/世界风情双床房2选1，免费WiFi、免费早餐。', '299', '699', 1, 0, 1),
(29, 'Goods_Upload/2015-11-26/56567a3717683.jpg', '御玺国际酒店', 164, 14, '仅398元！价值1299元的郑州御玺国际酒店行政景观大床房入住1晚，免费WiFi。', '399', '799', 0, 0, 0),
(30, 'Goods_Upload/2015-11-26/56569f58ddc57.jpg', '管剑锋大保健', 166, 14, '服务到位', '10', '20', 1, 0, 0),
(31, 'Goods_Upload/2015-11-27/5657ad1386088.jpg', '辜榆瀚专营店', 166, 14, '团购只要100！全北京最优秀的大保健 你还不来吗 ', '100', '120', 1, 0, 0),
(32, 'Goods_Upload/2015-11-26/5656a35cd253c.jpg', '新哥大饭店', 152, 30, '团购只要199！店内提供免费WiFi 有免费停车位！', '199', '399', 1, 1, 0),
(36, 'Goods_Upload/2015-11-27/5657ad042e4b9.jpg', '盲人按摩', 162, 31, '盲人按摩盲人按摩盲人按摩盲人按摩', '50', '100', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `nm_goods_category`
--

CREATE TABLE IF NOT EXISTS `nm_goods_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `pid` char(10) NOT NULL DEFAULT '0',
  `path` char(10) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=167 ;

--
-- Dumping data for table `nm_goods_category`
--

INSERT INTO `nm_goods_category` (`id`, `name`, `pid`, `path`, `status`) VALUES
(137, '美食', '0', '0', 1),
(138, '酒店', '0', '0', 1),
(139, '电影', '0', '0', 1),
(147, '火锅', '137', '0,137', 1),
(148, '自助餐', '137', '0,137', 1),
(149, '海鲜', '137', '0,137', 1),
(150, '烧烤/烤肉', '137', '0,137', 1),
(151, '辣味美食', '137', '0,137', 1),
(152, '聚会宴请', '137', '0,137', 1),
(154, '休闲娱乐', '0', '0', 1),
(155, '网购', '0', '0', 1),
(156, '生活服务', '0', '0', 1),
(157, '本地生活', '0', '0', 1),
(158, '丽人', '0', '0', 1),
(160, 'KTV', '154', '0,154', 1),
(161, '温泉洗浴', '154', '0,154', 1),
(162, '足疗按摩', '154', '0,154', 1),
(163, '主题酒店', '138', '0,138', 1),
(164, '公寓式酒店', '138', '0,138', 1),
(165, '豪华酒店', '138', '0,138', 1),
(166, '大保健', '158', '0,158', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nm_hotel`
--

CREATE TABLE IF NOT EXISTS `nm_hotel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_id` int(11) NOT NULL,
  `hotlename` varchar(50) NOT NULL,
  `hotleaddress` varchar(255) NOT NULL,
  `nprice` decimal(10,2) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `discount` decimal(10,0) NOT NULL,
  `style_id` int(11) NOT NULL,
  `detial` char(255) NOT NULL,
  `hotlenum` tinyint(4) NOT NULL,
  `hotleinstro` varchar(255) NOT NULL,
  `tel` char(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `nm_info`
--

CREATE TABLE IF NOT EXISTS `nm_info` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(100) NOT NULL DEFAULT '',
  `logo` char(100) NOT NULL DEFAULT 'logo.png',
  `keywords` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL DEFAULT '',
  `copy` varchar(255) NOT NULL DEFAULT '',
  `icp` varchar(255) NOT NULL DEFAULT '',
  `isopen` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `nm_links`
--

CREATE TABLE IF NOT EXISTS `nm_links` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL,
  `url` char(100) NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '0',
  `detail` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `nm_links`
--

INSERT INTO `nm_links` (`id`, `title`, `url`, `type`, `detail`) VALUES
(1, '应届生校招网', 'http://xiaozhao.renren.com', 1, '应届生校招网描述'),
(2, '人人逛街', 'http://j.renren.com', 1, '人人逛街'),
(3, '56网', 'http://www.56.com', 0, '56网'),
(4, '车问网', 'http://www.chewen.com', 1, '车问网'),
(5, '经纬网', 'http://www.jingwei.com', 1, '经纬网'),
(7, '亚马逊', 'http://www.amazon.cn', 1, 'http://www.amazon.cn'),
(8, '大麦网', 'http://www.damai.cn', 1, '大麦网'),
(9, '秀网', 'http://www.xiu.com', 0, '秀网'),
(10, '我买网上购物', 'http://www.womai.com', 0, 'http://www.womai.com '),
(11, '大邑网', 'http://www.dayiwang.com', 0, 'http://www.dayiwang.com'),
(12, '美图看看', 'http://kankan.meitu.com', 0, 'http://kankan.meitu.com'),
(13, '化妆品团购', 'http://www.jumei.com', 0, '化妆品团购'),
(14, '开心人网上购药店', 'http://www.360kxr.com', 0, 'http://www.360kxr.com'),
(15, '网上订餐', 'http://www.xiaomishu.com', 0, 'http://www.xiaomishu.com'),
(16, '三丰漫画', 'http://www.yisanfeng.com', 0, 'http://www.yisanfeng.com'),
(17, '铁血君品行', 'http://www.junph.com', 0, 'http://www.junph.com');

-- --------------------------------------------------------

--
-- Table structure for table `nm_movie`
--

CREATE TABLE IF NOT EXISTS `nm_movie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `cinema_id` int(11) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `first_time` date NOT NULL,
  `content` varchar(255) NOT NULL,
  `num` int(11) NOT NULL,
  `performer` varchar(50) NOT NULL,
  `director` varchar(50) NOT NULL,
  `len` char(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `nm_order`
--

CREATE TABLE IF NOT EXISTS `nm_order` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `goods_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `sumprice` decimal(10,0) NOT NULL,
  `order_num` varchar(255) NOT NULL,
  `order_time` datetime NOT NULL,
  `finish_time` datetime NOT NULL,
  `state` varchar(255) NOT NULL DEFAULT '1',
  `img` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=233 ;

--
-- Dumping data for table `nm_order`
--

INSERT INTO `nm_order` (`id`, `goods_id`, `user_id`, `name`, `number`, `price`, `sumprice`, `order_num`, `order_time`, `finish_time`, `state`, `img`) VALUES
(229, 19, 65, '好吃烧烤', 1, 140.00, 140, '4891108188903808', '2015-12-01 03:18:01', '0000-00-00 00:00:00', '5', 'Goods_Upload/2015-11-26/5656d2be991b5.jpg'),
(230, 19, 66, '好吃烧烤', 1, 140.00, 140, '4894942521063232', '2015-12-01 13:57:05', '0000-00-00 00:00:00', '5', 'Goods_Upload/2015-11-26/5656d2be991b5.jpg'),
(231, 27, 0, '新元素主题酒店', 1, 98.00, 98, '4898300017788696', '2015-12-01 23:16:40', '0000-00-00 00:00:00', '1', 'Goods_Upload/2015-11-26/5656c15317683.jpg'),
(232, 19, 67, '好吃烧烤', 1, 140.00, 140, '4904313955368041', '2015-12-02 15:58:59', '0000-00-00 00:00:00', '5', 'Goods_Upload/2015-11-26/5656d2be991b5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `nm_user`
--

CREATE TABLE IF NOT EXISTS `nm_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(20) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '糯米',
  `image` varchar(255) NOT NULL DEFAULT 'default.png',
  `password` char(100) NOT NULL,
  `paypwd` char(100) NOT NULL DEFAULT '123456',
  `email` varchar(100) NOT NULL,
  `phone` char(20) NOT NULL DEFAULT '',
  `ctime` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '订单状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=68 ;

--
-- Dumping data for table `nm_user`
--

INSERT INTO `nm_user` (`id`, `username`, `name`, `image`, `password`, `paypwd`, `email`, `phone`, `ctime`, `status`) VALUES
(25, 'user3', '糯米', 'default.png', '92877af70a45fd6a2ed7fe81e1236b78', '', '', '', 0, 0),
(26, 'user4', '糯米', 'default.png', '3f02ebe3d7929b091e3d8ccfde2f3bc6', '', '', '', 0, 1),
(35, 'user12', '糯米', 'default.png', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 1448017242, 1),
(39, 'user13', '糯米', 'default.png', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 1448017560, 1),
(40, 'user14', '糯米', 'default.png', '123456', '', '', '', 1448018710, 1),
(44, 'user15', '糯米', 'default.png', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 1448019167, 0),
(59, 'ttttt', '糯米', 'default.png', '111111', '', '', '', 1448021388, 1),
(60, 'qqqqqq', '糯米', 'default.png', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', 1448021462, 0),
(61, 'ling', '吕银玲', 'default.png', '123456', 'ling123', '123456@qq.com', '110', 1448021462, 1),
(62, 'lingling', '糯米', 'default.png', 'f6d19652c8f635eb88a5c93c8ec52cd7', '1234567', '', '', 1448812486, 2),
(63, 'user', '糯米', 'default.png', 'ee11cbb19052e40b07aac0ca060c23ee', '', '', '', 1448885747, 1),
(64, 'user1', '糯米', 'default.png', '24c9e15e52afc47c225b757e7bee1f9d', '123456', '', '', 1448886122, 1),
(65, 'ddddd', '糯米', 'default.png', '50f84daf3a6dfd6a9f20c9f8ef428942', '123456', '', '', 1448911036, 1),
(66, 'aaaaa', '李四四', 'default.bmp', 'e10adc3949ba59abbe56e057f20f883e', '123456', 'user21@qq.com', '18874423111', 1448932301, 1),
(67, '123456', '小123456', 'default.bmp', 'e10adc3949ba59abbe56e057f20f883e', '123456', '123456@qq.com', '18874423166', 1449042988, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
