-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-05-07 07:44:53
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qimo`
--

-- --------------------------------------------------------

--
-- 表的结构 `cj`
--

CREATE TABLE `cj` (
  `xuehao` int(20) NOT NULL,
  `kmid` int(20) NOT NULL,
  `cj` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `cj`
--

INSERT INTO `cj` (`xuehao`, `kmid`, `cj`) VALUES
(1, 2, '75'),
(1, 4, '55'),
(1, 5, '64'),
(1, 6, '74'),
(1, 7, '50'),
(1, 8, '90'),
(2, 4, '97'),
(3, 4, '78'),
(6, 2, '74'),
(6, 4, '87'),
(6, 5, '67'),
(6, 6, '45'),
(6, 7, '50'),
(6, 8, '90'),
(7, 2, '73'),
(7, 4, '80'),
(7, 5, '68'),
(7, 6, '46'),
(7, 7, '50'),
(7, 8, '90'),
(8, 2, '72'),
(8, 4, '76'),
(8, 5, '69'),
(8, 6, '49'),
(8, 7, '50'),
(8, 8, '90');

-- --------------------------------------------------------

--
-- 表的结构 `kemu`
--

CREATE TABLE `kemu` (
  `kmid` int(20) NOT NULL,
  `kmmc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `kemu`
--

INSERT INTO `kemu` (`kmid`, `kmmc`) VALUES
(2, 'mysql'),
(4, 'php'),
(5, 'seo'),
(6, 'linux'),
(7, 'hadoop'),
(8, 'openstack');

-- --------------------------------------------------------

--
-- 表的结构 `student`
--

CREATE TABLE `student` (
  `xuehao` int(20) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `xingbie` varchar(20) DEFAULT NULL,
  `banji` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `student`
--

INSERT INTO `student` (`xuehao`, `name`, `xingbie`, `banji`) VALUES
(1, '何康健', '男', '1502'),
(2, '李四', '男', '1501'),
(3, '王五', '男', '1501'),
(4, '小明', '女', '1504'),
(6, '小红', '女', '1502'),
(7, '小白', '女', '1502'),
(8, '小黑', '女', '1502'),
(11, '小绿', '男', '1503'),
(12, '小小', '女', '1503'),
(13, '小何', '女', '1504');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `passwd` varchar(20) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `iphone` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `name`, `passwd`, `mail`, `iphone`, `address`) VALUES
(1, 'admin', '123', '', '', ''),
(6, 'user1', '123', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cj`
--
ALTER TABLE `cj`
  ADD PRIMARY KEY (`xuehao`,`kmid`),
  ADD KEY `kemuid` (`kmid`);

--
-- Indexes for table `kemu`
--
ALTER TABLE `kemu`
  ADD PRIMARY KEY (`kmid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`xuehao`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `kemu`
--
ALTER TABLE `kemu`
  MODIFY `kmid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- 限制导出的表
--

--
-- 限制表 `cj`
--
ALTER TABLE `cj`
  ADD CONSTRAINT `kemuid` FOREIGN KEY (`kmid`) REFERENCES `kemu` (`kmid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `xuehao` FOREIGN KEY (`xuehao`) REFERENCES `student` (`xuehao`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
