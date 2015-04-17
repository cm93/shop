-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-04-17 02:46:42
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `passwrod` varchar(32) DEFAULT NULL,
  `role` tinyint(1) DEFAULT NULL,
  `lastlogin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `times` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `username`, `passwrod`, `role`, `lastlogin`, `times`) VALUES
(1, 'admin', 'a008aa83f9f52700237f9ecb93159a5b', 1, '2015-04-16 12:47:11', 29),
(2, 'james', 'e10adc3949ba59abbe56e057f20f883e', 2, '2015-04-12 04:43:46', 11);

-- --------------------------------------------------------

--
-- 表的结构 `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(60) DEFAULT NULL,
  `name` varchar(40) DEFAULT NULL,
  `price` varchar(10) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `sum` smallint(6) NOT NULL DEFAULT '1',
  `gid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=104 ;

--
-- 转存表中的数据 `cart`
--

INSERT INTO `cart` (`id`, `image`, `name`, `price`, `username`, `sum`, `gid`) VALUES
(103, 'http://localhost/Uploads/2015-04-06/552240621fa90.jpg', '三星W2015', '1950', 'james', 1, 12),
(49, 'http://localhost/shop/Uploads/2015-03-29/5517593d71536.png', '爱上大声', '2', 'a8895', 1, 6),
(50, 'http://localhost/shop/Uploads/2015-03-30/55189f1c5dde5.jpg', '漫步者M2', '200', 'a8895', 1, 7),
(48, 'http://localhost/shop/Uploads/2015-03-30/5518a57cca5d8.png', '魅动咔哟Magic II ', '1400', 'a8895', 1, 8),
(97, 'http://localhost/shop/Uploads/2015-03-30/55189f1c5dde5.jpg', '漫步者M2', '200', 'q243844647', 1, 7);

-- --------------------------------------------------------

--
-- 表的结构 `goods`
--

CREATE TABLE IF NOT EXISTS `goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `class` varchar(20) DEFAULT NULL,
  `list` varchar(20) DEFAULT NULL,
  `name` varchar(40) DEFAULT NULL,
  `new` varchar(6) DEFAULT NULL,
  `price` varchar(10) DEFAULT NULL,
  `sum` varchar(5) DEFAULT NULL,
  `newprice` mediumint(9) DEFAULT NULL,
  `sendprice` varchar(10) DEFAULT NULL,
  `phonenumber` varchar(11) DEFAULT NULL,
  `truename` varchar(10) DEFAULT NULL,
  `images` varchar(300) DEFAULT NULL,
  `describe` text,
  `username` varchar(20) DEFAULT NULL,
  `area` varchar(30) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

--
-- 转存表中的数据 `goods`
--

INSERT INTO `goods` (`id`, `title`, `class`, `list`, `name`, `new`, `price`, `sum`, `newprice`, `sendprice`, `phonenumber`, `truename`, `images`, `describe`, `username`, `area`, `time`) VALUES
(2, '123', '家居家饰', '棋牌麻将', '123', '七成新', '123', '2', 11, '10', '11111111111', '爱上大声', 'http://localhost/Uploads/2015-03-21/550d7ef70c156.png http://localhost/Uploads/2015-03-21/550d7ef91098c.png ', NULL, 'a8895', '本机地址', '2015-03-30 00:42:15'),
(3, '123', '家居家饰', '棋牌麻将', '123', '七成新', '123', '2', 11, '10', '11111111111', '爱上大声', 'http://localhost/Uploads/2015-03-21/550d7ef70c156.png http://localhost/Uploads/2015-03-21/550d7ef91098c.png ', NULL, 'a8895', '本机地址', '2015-03-30 00:42:15'),
(4, '123萨达', '旅游运动', '攀岩装备', '123', '九成新', '123', '2', 10, '10', '55555555555', '爱上大声', 'http://localhost/Uploads/2015-03-28/55163ffd7edd0.jpg http://localhost/Uploads/2015-03-28/551644c5c4621.png ', NULL, 'a8895', '本机地址', '2015-03-30 00:42:15'),
(5, '衣服', '家居家饰', '棋牌麻将', '爱上大声', '八成新', '123', '2', 10, '10', '11111111111', '阿斯达', 'http://localhost/Uploads/2015-03-29/551758b305ec8.png http://localhost/Uploads/2015-03-29/551758b51499e.jpg ', NULL, 'a8895', '本机地址', '2015-03-30 00:42:15'),
(6, '123萨达', '电脑数码', '耳机', '爱上大声', '八成新', '213', '2', 2, '123', '55555555555', '22', 'http://localhost/Uploads/2015-03-29/5517593d71536.png http://localhost/Uploads/2015-03-29/5517596ecf087.jpg ', NULL, 'a8895', '本机地址', '2015-03-30 00:42:15'),
(7, '漫步者M2音响', '电脑数码', '音响', '漫步者M2', '八成新', '500', '1', 200, '10', '11111111111', '陈先生', 'http://localhost/Uploads/2015-03-30/55189f1c5dde5.jpg ', NULL, 'a8895', '本机地址', '2015-03-30 00:57:36'),
(8, '魅动咔哟Magic II 智能蓝牙音响', '电脑数码', '音响', '魅动咔哟Magic II ', '全新', '1888', '1', 1450, '10', '18258088888', '呵', 'http://localhost/Uploads/2015-03-30/5518a57cca5d8.png http://localhost/Uploads/2015-03-30/5518a58523ade.png http://localhost/Uploads/2015-03-30/5518a58b9da0a.png http://localhost/Uploads/2015-03-30/5518a59077390.png http://localhost/Uploads/2015-03-30/5518a5942dffa.png ', '', 'a8895', '本机地址', '2015-03-30 01:23:41'),
(9, '现代金色水晶吸顶灯豪华品质客厅餐厅欧式复古吊灯', '家居家饰', '灯具', '欧式复古吊灯', '九成新', '1500', '1', 1280, '50', '18702941329', '陆先生', 'http://localhost/Uploads/2015-04-04/551fa0a459f27.png http://localhost/Uploads/2015-04-04/551fa0aa45b4a.png http://localhost/Uploads/2015-04-04/551fa0af9ce29.png http://localhost/Uploads/2015-04-04/551fa0b48e044.png ', '本人新购的精装修住宅小区(*^__^*) ，客厅已经被安装了吸顶灯和吊灯， 房子家居打算装修成简约中式木质风格( o )，所以尽快要把这对灯低价转让， 主要自己不喜欢欧式风格~(>_<)~，喜欢的朋友可以看了灯再交易，灯里带的灯泡好像是白炽灯，感觉有热度，黄色光，灯泡全送，我也不知道多少瓦，反正30平米的客厅感觉是很亮的啦，~\\( )/~ 可议价，喜欢欧式风格想买吊灯的朋友请尽快联系我~', 'q243844647', '本机地址', '2015-04-04 08:28:46'),
(10, '黃金低音犬舍最新窩雙血統金毛幼犬可刷卡', '宠物宝贝', '狗狗', '金毛幼犬', '全新', '6000', '1', 6000, '100', '18653175814', '金女士', 'http://localhost/Uploads/2015-04-04/551fa56684c85.jpg http://localhost/Uploads/2015-04-04/551fa56b68001.jpg http://localhost/Uploads/2015-04-04/551fa56fea63d.jpg ', '<p>可爱</p>', 'q243844647', '本机地址', '2015-04-04 08:49:04'),
(11, 'Beats Pro', '电脑数码', '耳机', 'Beats Pro', '全新', '3400', '1', 2200, '10', '13810305567', '陆先生', 'http://localhost/Uploads/2015-04-06/55223b8c84c1f.JPG ', '<p><span style="font-family: arial, 宋体; font-size: 14px; line-height: 28px; white-space: normal;">一手全新正品 官网可注册查询 无盒子 配件齐全 官网保修 所以出售 请微信或短信联系 谢谢 微信：15120082199 电话：13810305567</span>\r\n\r\n</p>', 'q243844647', '本机地址', '2015-04-06 07:53:56'),
(12, '精仿三星W2015，火的就是你', '电脑数码', '手机', '三星W2015', '全新', '2300', '1', 1950, '10', '15676336697', '陈先生', 'http://localhost/Uploads/2015-04-06/552240621fa90.jpg http://localhost/Uploads/2015-04-06/552240675ade2.jpg http://localhost/Uploads/2015-04-06/5522406b6046b.jpg http://localhost/Uploads/2015-04-06/5522406eda8e2.jpg ', '<p><span style="font-family: arial, 宋体; font-size: 14px; line-height: 28px; white-space: normal;">精仿三星W2015，火的就是你 三星w2015于今年年初华丽登场，一经发售，果然与众不同，无论是初出茅庐的年轻人，还是潇洒成功的中年人，都几乎是无人不知，真机外观高大上，配置也不失老大哥的风范，那么我们的高仿机怎么样呢？ 成功贵在坚持，我们自始至终都秉承质量至上的原则，这让我们迅速从纷繁杂乱的高仿市场中脱颖而出，占领了市场先机，赢得了广泛的好评，我们生产的</span><a href="http://www.qqershou.com/Product_620_1_0/" target="_blank" style="color: rgb(51, 51, 51); text-decoration: none; font-family: arial, 宋体; font-size: 14px; line-height: 28px; white-space: normal;" _href="http://www.qqershou.com/Product_620_1_0/">手机</a><span style="font-family: arial, 宋体; font-size: 14px; line-height: 28px; white-space: normal;">均经过层层把关，可以说是精品中的精品！从业几年，我们在你们的称赞中成长，但我们从未懈怠！ 我们专业经营高端奢侈</span><a href="http://www.qqershou.com/Product_620_1_0/" target="_blank" style="color: rgb(51, 51, 51); text-decoration: none; font-family: arial, 宋体; font-size: 14px; line-height: 28px; white-space: normal;" _href="http://www.qqershou.com/Product_620_1_0/">手机</a><span style="font-family: arial, 宋体; font-size: 14px; line-height: 28px; white-space: normal;">，为您提供的也都是高端服务，让您体会到前所未有的快感。 前不久，我们公司生产出的顶配版三星W2015，很快就销售一空，让我们了解顾客们对于这款精仿三星W2015 的喜爱，现在我们公司扩大这款手机的生产，在生产的过程中我们更注重精益求精，凡是质量，功能，外观 不过关的我们都坚决舍弃。为了扩大销售量，我们公司决定在您购买手机的同时会适量赠送优惠礼</span><a href="http://www.qqershou.com/Product_615_1_0/" target="_blank" style="color: rgb(51, 51, 51); text-decoration: none; font-family: arial, 宋体; font-size: 14px; line-height: 28px; white-space: normal;" _href="http://www.qqershou.com/Product_615_1_0/">包</a><span style="font-family: arial, 宋体; font-size: 14px; line-height: 28px; white-space: normal;">。 先到先得，机不可失哦。 我们家还有更多高仿手机，如果您感兴趣的话可以免费咨询我们QQ 2230801909 电话 15676336697 我们长期诚招代理，欢迎您的加入</span>\r\n\r\n</p>', 'q243844647', '本机地址', '2015-04-06 08:14:48'),
(13, '转让富士 SL305 数码相机, 红色', '电脑数码', '照相机', '富士 SL305', '九成新', '1600', '1', 1000, '10', '15099324189', '金女士', 'http://localhost/Uploads/2015-04-06/5522411cc0b9a.jpg http://localhost/Uploads/2015-04-06/552241213e9fa.jpg http://localhostp/Uploads/2015-04-06/55224124bf10e.jpg ', '<p><span style="font-family: arial, 宋体; font-size: 14px; line-height: 28px; white-space: normal;">1.富士（FUJIFILM） FinePix SL305 数码相机 白色（1400万像素 30倍光变 24mm广角 3.0英寸液晶屏），是中长焦相机，拥有30倍光化学变焦24mm广角变焦镜头，可玩性强，是上手学习单反的初级神器。 2.2014年6月京东购买，使用接近一年，平时也很少拿出去拍照。九成新，没摔，没坏。 3.赠送：传输线，8G内存卡，锂电池2块，相机</span><a href="http://www.qqershou.com/Product_615_1_0/" target="_blank" style="color: rgb(51, 51, 51); text-decoration: none; font-family: arial, 宋体; font-size: 14px; line-height: 28px; white-space: normal;" _href="http://www.qqershou.com/Product_615_1_0/">包</a><span style="font-family: arial, 宋体; font-size: 14px; line-height: 28px; white-space: normal;">，物有所值。 4.你有意，我有义（免费包邮），请短信或电话联系（15099324189）。</span>\r\n\r\n</p>', 'q243844647', '本机地址', '2015-04-06 08:17:52'),
(19, '联想 ideapad y460 20037', '电脑数码', '笔记本', '联想 ideapad y460 ', '压力锅', '60000', '1', 4000, '10', '18170582552', '陈先生', 'http://localhost/Uploads/2015-04-08/552505d0665b3.jpg ', '<p style="padding: 15px; margin-top: 0px; margin-bottom: 0px; float: left; font-family: arial, 宋体; font-size: 14px; line-height: 28px; white-space: normal;">联想IdeaPed Y460 采用英特尔最新的酷睿i3 <a href="mailto:M380@253GH" style="color: rgb(51, 51, 51); text-decoration: none;" _href="mailto:M380@253GH">M380@253GH</a> 双核处理器，联想IdeaPed Y460预装正版<a href="http://www.haosou.com/s?q=Windows%207&ie=utf-8&src=wenda_link" target="_blank" data-id="link-to-so" data-c="点击实体词http://wenda.haosou.com/q/13633262490666321.0.0_1.0.1Windows 7" text="点击实体词" style="color: rgb(51, 51, 51); text-decoration: none;" _href="http://www.haosou.com/s?q=Windows%207&ie=utf-8&src=wenda_link">Windows 7</a>操作系统 ，镁光2GB DDR3 1333MHz 内存，<a href="http://www.haosou.com/s?q=ATI%20Mobility%20Radeon%20HD%205650&ie=utf-8&src=wenda_link" target="_blank" data-id="link-to-so" data-c="点击实体词http://wenda.haosou.com/q/13633262490666321.0.0_1.0.1ATI Mobility Radeon HD 5650" text="点击实体词" style="color: rgb(51, 51, 51); text-decoration: none;" _href="http://www.haosou.com/s?q=ATI%20Mobility%20Radeon%20HD%205650&ie=utf-8&src=wenda_link">ATI Mobility Radeon HD 5650</a><a href="http://www.haosou.com/s?q=%E7%8B%AC%E7%AB%8B%E6%98%BE%E5%8D%A1&ie=utf-8&src=wenda_link" target="_blank" data-id="link-to-so" data-c="点击实体词http://wenda.haosou.com/q/13633262490666321.0.0_1.0.1独立显卡" text="点击实体词" style="color: rgb(51, 51, 51); text-decoration: none;" _href="http://www.haosou.com/s?q=%E7%8B%AC%E7%AB%8B%E6%98%BE%E5%8D%A1&ie=utf-8&src=wenda_link">独立显卡</a>，1GB GDDR3独立显存，全面支持<a href="http://www.haosou.com/s?q=DirectX%2011&ie=utf-8&src=wenda_link" target="_blank" data-id="link-to-so" data-c="点击实体词http://wenda.haosou.com/q/13633262490666321.0.0_1.0.1DirectX 11" text="点击实体词" style="color: rgb(51, 51, 51); text-decoration: none;" _href="http://www.haosou.com/s?q=DirectX%2011&ie=utf-8&src=wenda_link">DirectX 11</a>，14.7英寸、16：10黄金比例超薄<a href="http://www.haosou.com/s?q=LED%E7%82%AB%E5%BD%A9%E5%B1%8F&ie=utf-8&src=wenda_link" target="_blank" data-id="link-to-so" data-c="点击实体词http://wenda.haosou.com/q/13633262490666321.0.0_1.0.1LED炫彩屏" text="点击实体词" style="color: rgb(51, 51, 51); text-decoration: none;" _href="http://www.haosou.com/s?q=LED%E7%82%AB%E5%BD%A9%E5%B1%8F&ie=utf-8&src=wenda_link">LED炫彩屏</a>，采用JBL专业品牌音响，配合杜比专业音效认证，带来无与伦比的震撼立体环绕音效。Y460采用Handbag设计以及城市风尚纹理，顶盖采用半高光的材质；掌托处色彩自由选择，金属灰，外观上与Y450也有了不小的变化，采用了时尚的卡扣设计，用一只手就可以翻开<a href="http://www.qqershou.com/Product_65_1_0/" target="_blank" style="color: rgb(51, 51, 51); text-decoration: none;" _href="http://www.qqershou.com/Product_65_1_0/">电脑</a>。 联想Ideaped Y460 处理器采用(可睿频加速至 2.53GHz))两款。 显卡则是采用了最新支持DirectX 11的ATI Mobility Radeon HD 5650显卡，制造工艺40nm，400个流处理器，ATI Mobility Radeon HD 5650性能强于Y450采用的<a href="http://www.haosou.com/s?q=nVidia%20Geforce%20GT%20240M&ie=utf-8&src=wenda_link" target="_blank" data-id="link-to-so" data-c="点击实体词http://wenda.haosou.com/q/13633262490666321.0.0_1.0.1nVidia Geforce GT 240M" text="点击实体词" style="color: rgb(51, 51, 51); text-decoration: none;" _href="http://www.haosou.com/s?q=nVidia%20Geforce%20GT%20240M&ie=utf-8&src=wenda_link">nVidia Geforce GT 240M</a>，3Dmark 06得分在7500分左右，已经接近nVidia Geforce GTS 250M的得分，令人惊叹！！！显卡方面一直是小Y的强势项目，毫无疑问，Y460这个传统延续下来。16：10宽屏+强悍配置+JBL专业音箱，小Y将会成为极佳的移动影院。</p><p style="padding: 15px; margin-top: 0px; margin-bottom: 0px; float: left; font-family: arial, 宋体; font-size: 14px; line-height: 28px; white-space: normal;">本人用了两年，实际就用一年，一年闲置在那里！现需抛售</p><p><br></p>', 'james', '本机地址', '2015-04-08 10:41:28'),
(15, '戴尔N5110', '电脑数码', '笔记本', '戴尔N5110', '九成新', '3800', '1', 2500, '20', '18258088888', '陆先生', 'http://localhost/Uploads/2015-04-06/5522430bebe77.jpg http://localhost/Uploads/2015-04-06/5522431036093.jpg ', '<p><span style="font-family: arial, 宋体; font-size: 14px; line-height: 28px; white-space: normal;">产品类型：</span><a href="http://www.qqershou.com/Product_81_1_0/" target="_blank" style="color: rgb(51, 51, 51); text-decoration: none; font-family: arial, 宋体; font-size: 14px; line-height: 28px; white-space: normal;" _href="http://www.qqershou.com/Product_81_1_0/">笔记本</a><span style="font-family: arial, 宋体; font-size: 14px; line-height: 28px; white-space: normal;"> 所属品牌：戴尔(DELL) 操作系统：Windows 7 Home Basic 处理器：Intel Core i5-2450M(2.5GHz) 内存容量：4GB 硬盘容量：750GB 屏幕尺寸：15.6英寸 分辨率：1366×768 一年机子，可小刀，可交换IPAD MINI 有兴趣联系QQ..261866052</span></p>', 'james', '本机地址', '2015-04-06 08:25:59'),
(16, '联想ThinkPad X1 Helix变形触控超级本', '电脑数码', '笔记本', '联想ThinkPad X1 Helix', '九成新', '16000', '1', 7500, '20', '13194458858', '陈先生', 'http://localhost/Uploads/2015-04-06/5522435cb85cc.jpg http://localhost/Uploads/2015-04-06/55224367eb2c6.jpg ', 'null', 'james', '本机地址', '2015-04-06 08:27:39'),
(17, 'Sony 数码HD摄录一体机', '电脑数码', '照相机', 'Sony 数码HD', '七成新', '5000', '1', 2980, '10', '18215623577', '陈先生', 'http://localhost/Uploads/2015-04-06/5522441330c6e.jpg ', '<p>\r\n\r\n</p>', 'james', '本机地址', '2015-04-06 08:30:19'),
(18, '123萨达', '家居家饰', '棋牌麻将', '漫步者M2', '八成新', '123', '2', 10, '10', '18258088888', '陈先生', 'http://localhost/Uploads/2015-04-07/5523d03c6cd56.jpg ', 'das<p>\r\n\r\n</p>', 'james', '本机地址', '2015-04-07 12:40:31');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `phonenumber` varchar(11) DEFAULT NULL,
  `logindata` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(30) DEFAULT NULL,
  `lastlogin` timestamp NULL DEFAULT NULL,
  `TrueName` varchar(10) NOT NULL,
  `Sex` tinyint(1) DEFAULT NULL,
  `Tel` varchar(15) DEFAULT NULL,
  `QQ` varchar(12) DEFAULT NULL,
  `AreaID` varchar(4) DEFAULT '0',
  `AddRess` varchar(100) NOT NULL,
  `checkemail` tinyint(1) DEFAULT '0',
  `faceimg` varchar(50) DEFAULT 'http://www.qqershou.com/Images/Face/Image0.gif',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `phonenumber`, `logindata`, `email`, `lastlogin`, `TrueName`, `Sex`, `Tel`, `QQ`, `AreaID`, `AddRess`, `checkemail`, `faceimg`) VALUES
(1, 'a8895', 'eb573c6a19a5e4d3383c4ddc66b84853', '11111111111', '2015-02-13 07:26:06', '24@qq.cm', '2015-04-02 08:58:20', '爱的', 0, '18258022898', '243844647', '1385', '阿斯达撒打算', 0, 'http://www.qqershou.com/Images/Face/Image0.gif'),
(2, 'q243844647', 'a008aa83f9f52700237f9ecb93159a5b', '18258022898', '2015-02-13 07:30:35', '243844647@qq.com', '2015-04-06 01:18:59', '', 0, '', '', '1417', '', 0, 'http://www.qqershou.com/Images/Face/Image0.gif'),
(3, 'a584520', '5351c68f42c0d8348c72f88b013de1fe', '18258022898', '2015-02-13 07:31:51', '243844647@qq.com', '2015-02-13 07:31:51', '', 0, NULL, NULL, '0', '', 0, 'http://www.qqershou.com/Images/Face/Image0.gif'),
(4, 'a101', '0acf03f408f90ea0dcba786d300620db', '18258022898', '2015-02-13 07:37:43', '24@qq.cm123', '2015-02-13 07:37:43', '', 0, NULL, NULL, '0', '', 0, 'http://www.qqershou.com/Images/Face/Image0.gif'),
(5, 'ck101', 'a008aa83f9f52700237f9ecb93159a5b', '18258022898', '2015-02-13 07:38:37', '24@qq.cm', '2015-02-13 07:38:37', '', 0, NULL, NULL, '0', '', 0, 'http://www.qqershou.com/Images/Face/Image0.gif'),
(6, 'llll', '992e63080ee1e47b99f42b8d64ede953', '18258022898', '2015-02-13 07:39:46', '2222@qq.com', '2015-02-13 07:39:46', '', 0, NULL, NULL, '0', '', 0, 'http://www.qqershou.com/Images/Face/Image0.gif'),
(7, 'james', 'a008aa83f9f52700237f9ecb93159a5b', '18258088888', '2015-04-06 08:21:59', '243844647@qq.com', '2015-04-15 13:30:03', '', NULL, NULL, NULL, '0', '', 1, 'http://www.qqershou.com/Images/Face/Image10.gif');

-- --------------------------------------------------------

--
-- 表的结构 `want`
--

CREATE TABLE IF NOT EXISTS `want` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `class` varchar(20) DEFAULT NULL,
  `price1` varchar(10) DEFAULT NULL,
  `price2` varchar(10) DEFAULT NULL,
  `phonenumber` varchar(11) DEFAULT NULL,
  `truename` varchar(10) DEFAULT NULL,
  `area` varchar(30) DEFAULT NULL,
  `describe` text,
  `username` varchar(20) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `click` mediumint(9) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- 转存表中的数据 `want`
--

INSERT INTO `want` (`id`, `title`, `class`, `price1`, `price2`, `phonenumber`, `truename`, `area`, `describe`, `username`, `time`, `click`) VALUES
(25, '求购捷安特一辆，比较新一点得', '电脑数码', '888', '2500', '13265684658', '陈先生', '本机地址', '<p>求购捷安特一辆，比较新一点得\r\n\r\n</p>', 'james', '2015-04-16 10:13:58', 1),
(26, '有泡茶桌转让的吗？？？', '家居家饰', '888', '2500', '13810305567', '陈先生', '本机地址', '<p>有泡茶桌转让的吗？？？\r\n\r\n</p>', 'james', '2015-04-16 10:14:30', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
