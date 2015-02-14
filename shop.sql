-- phpMyAdmin SQL Dump
-- version 4.3.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-02-14 17:50:18
-- 服务器版本： 5.6.22
-- PHP Version: 5.6.3

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
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` smallint(6) NOT NULL,
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
  `AddRess` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `phonenumber`, `logindata`, `email`, `lastlogin`, `TrueName`, `Sex`, `Tel`, `QQ`, `AreaID`, `AddRess`) VALUES
(1, 'a8895', 'eb573c6a19a5e4d3383c4ddc66b84853', '11111111111', '2015-02-13 07:26:06', '24@qq.cm', '2015-02-14 01:10:47', '爱的', 1, '18258022898', '243844647', '691', '阿斯达撒打算'),
(2, 'q243844647', 'a008aa83f9f52700237f9ecb93159a5b', '18258022898', '2015-02-13 07:30:35', '243844647@qq.com', '2015-02-14 09:10:22', '', 0, '', '', '1417', ''),
(3, 'a584520', '5351c68f42c0d8348c72f88b013de1fe', '18258022898', '2015-02-13 07:31:51', '243844647@qq.com', '2015-02-13 07:31:51', '', 0, NULL, NULL, '0', ''),
(4, 'a101', '0acf03f408f90ea0dcba786d300620db', '18258022898', '2015-02-13 07:37:43', '24@qq.cm123', '2015-02-13 07:37:43', '', 0, NULL, NULL, '0', ''),
(5, 'ck101', 'a008aa83f9f52700237f9ecb93159a5b', '18258022898', '2015-02-13 07:38:37', '24@qq.cm', '2015-02-13 07:38:37', '', 0, NULL, NULL, '0', ''),
(6, 'llll', '992e63080ee1e47b99f42b8d64ede953', '18258022898', '2015-02-13 07:39:46', '2222@qq.com', '2015-02-13 07:39:46', '', 0, NULL, NULL, '0', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
