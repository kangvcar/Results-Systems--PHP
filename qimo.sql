-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-05-05 04:06:00
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
(1, 1, '1'),
(1, 2, '2');

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
(1, 'php'),
(2, 'mysql');

-- --------------------------------------------------------

--
-- 表的结构 `student`
--

CREATE TABLE `student` (
  `xuehao` int(20) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `xingbie` varchar(20) DEFAULT NULL,
  `banji` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `student`
--

INSERT INTO `student` (`xuehao`, `name`, `xingbie`, `banji`) VALUES
(1, '1', NULL, NULL);

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
(1, 'admin', '123', '', '', '');

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
  MODIFY `kmid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
