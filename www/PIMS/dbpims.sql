-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 10, 2013 at 07:09 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbpims`
--

-- --------------------------------------------------------

--
-- Table structure for table `autonumber`
--

CREATE TABLE IF NOT EXISTS `autonumber` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `autocode` varchar(20) NOT NULL,
  `autoname` varchar(20) NOT NULL,
  `appenchar` varchar(10) NOT NULL,
  `autostart` int(11) NOT NULL,
  `autoend` int(11) NOT NULL,
  `incval` int(11) NOT NULL,
  `datecreated` date NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `autonumber`
--

INSERT INTO `autonumber` (`auto_id`, `autocode`, `autoname`, `appenchar`, `autostart`, `autoend`, `incval`, `datecreated`) VALUES
(1, 'asset code', 'Asset Name', 'ASC', 1, 10000, 1, '2013-06-09'),
(4, 'Sponsor', 'Sponsor', 'spons', 55, 10000000, 2, '2013-06-09'),
(5, 'pers', 'Personal', 'pers', 28, 10000, 1, '2013-06-09'),
(7, 'Prim', 'Primary', 'bapt', 127, 10000000, 1, '2013-06-09'),
(20, 'jokenauto', 'autonum', 'abc', 101, 1000000000, 2, '2013-08-01');

-- --------------------------------------------------------

--
-- Table structure for table `baptism`
--

CREATE TABLE IF NOT EXISTS `baptism` (
  `bapt_id` varchar(30) NOT NULL,
  `bkNum` int(11) NOT NULL,
  `bkPage` int(11) NOT NULL,
  `bkLine` int(11) NOT NULL,
  `lName` varchar(30) NOT NULL,
  `fName` varchar(30) NOT NULL,
  `mName` varchar(30) NOT NULL,
  `sName` varchar(30) NOT NULL,
  `cur_date` date NOT NULL,
  `minister` text NOT NULL,
  `stipend` int(11) NOT NULL,
  `remarks` text NOT NULL,
  `pers_id` varchar(30) NOT NULL,
  `sponsor_id` varchar(30) NOT NULL,
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`b_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `baptism`
--

INSERT INTO `baptism` (`bapt_id`, `bkNum`, `bkPage`, `bkLine`, `lName`, `fName`, `mName`, `sName`, `cur_date`, `minister`, `stipend`, `remarks`, `pers_id`, `sponsor_id`, `b_id`) VALUES
('bapt109', 1, 2, 3, 'Batutos', 'Jasons', 'Jimenezs', 'Jr', '0000-00-00', 'Rev.Bayog', 6000, 'sadsadsad', 'pers9', 'spons17', 7),
('bapt111', 5, 5, 5, 'Sarah Janes', 'Mc.Donalds', 'Disneys', 'Sr', '2013-06-12', 'Rev. Ramon Florete', 1550, '', 'pers12', 'spons23', 10),
('bapt110', 1, 2, 3, 'Scofield', 'Michael', 'Prisonbreak', '', '2013-06-12', 'Rev.Bayog', 6000, '', 'pers11', 'spons21', 9),
('bapt127', 11, 12, 122, 'Dela pena', 'Leah whynett', 'Villanueva', '', '2013-11-10', 'Rev. Fr.Ricon Dagunan', 12000, '', 'pers28', 'spons55', 26);

-- --------------------------------------------------------

--
-- Stand-in structure for view `bapt_pers_spon`
--
CREATE TABLE IF NOT EXISTS `bapt_pers_spon` (
`bapt_id` varchar(30)
,`bkNum` int(11)
,`bkPage` int(11)
,`bkLine` int(11)
,`lName` varchar(30)
,`fName` varchar(30)
,`mName` varchar(30)
,`sName` varchar(30)
,`cur_date` date
,`minister` text
,`stipend` int(11)
,`remarks` text
,`birth_date` date
,`age` int(11)
,`birth_place` text
,`father` varchar(40)
,`f_Origin` text
,`Mother` varchar(40)
,`m_Origin` text
,`legitimacy` varchar(30)
,`sponsName1` varchar(30)
,`sponsOrigin1` text
,`sponsName2` varchar(30)
,`sponsOrigin2` text
,`s_others` text
,`pers_id` varchar(30)
,`sponsor_id` varchar(30)
,`b_id` int(11)
);
-- --------------------------------------------------------

--
-- Table structure for table `pers_details`
--

CREATE TABLE IF NOT EXISTS `pers_details` (
  `pers_id` varchar(20) NOT NULL,
  `birth_date` date NOT NULL,
  `age` int(11) NOT NULL,
  `birth_place` text NOT NULL,
  `father` varchar(40) NOT NULL,
  `f_Origin` text NOT NULL,
  `Mother` varchar(40) NOT NULL,
  `m_Origin` text NOT NULL,
  `legitimacy` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`pers_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pers_details`
--

INSERT INTO `pers_details` (`pers_id`, `birth_date`, `age`, `birth_place`, `father`, `f_Origin`, `Mother`, `m_Origin`, `legitimacy`) VALUES
('pers12', '2013-06-11', 2, 'Cebu city', 'Alter Rivera', 'Suay Himamaylan city', 'Jeanete Besonaya', 'Sysdney Austrilla', ''),
('pers11', '2012-06-11', 4, 'NCR Manila', 'Alter River', 'Suay Himamaylan city', 'Jeanete Besonaya', 'Suay Himamaylan City', 'Live-in'),
('pers9', '0000-00-00', 1, 'Cebu city', 'Junior Batuto', 'Cebu City', 'Marit Batuto', 'Cebu City', 'Married'),
('pers28', '2007-02-28', 10, 'Kabankalan City', 'Reylan Dela pena', 'Cadiz City', 'Jay Anne Villanueva', 'Cadiz city', 'Married');

-- --------------------------------------------------------

--
-- Table structure for table `sponsor`
--

CREATE TABLE IF NOT EXISTS `sponsor` (
  `sponsor_id` varchar(20) NOT NULL,
  `sponsName1` varchar(30) NOT NULL,
  `sponsOrigin1` text NOT NULL,
  `sponsName2` varchar(30) NOT NULL,
  `sponsOrigin2` text NOT NULL,
  `s_others` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sponsor`
--

INSERT INTO `sponsor` (`sponsor_id`, `sponsName1`, `sponsOrigin1`, `sponsName2`, `sponsOrigin2`, `s_others`) VALUES
('spons19', 'Lizeth Tabaldo', 'Luz ville Kabankalan City', 'Rodito Intong', 'Kabankalan City', '					'),
('spons17', 'Clariza Gomez', 'sponsor address', 'Susan Martir', 'sponsor2 address', 'dfdfdfdf					'),
('spons23', 'Rudy Iligan', 'Naga Kabankalan City', 'Leo Lagulao', 'Isio Cauayan ', 'others\r\nothers\r\nothers\r\nothers\r\nothers\r\nother\r\nothers\r\nother\r\nothers					'),
('spons21', 'Dorothy', '', 'Raymund', '', '					'),
('spons55', 'Hatch Villanueva', 'Cadiz City', 'Joken Villanueva', 'Kabankalan City', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_name` varchar(30) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `u_pass` varchar(60) NOT NULL,
  `utype` varchar(30) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=98 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `users_name`, `uname`, `u_pass`, `utype`) VALUES
(70, 'Charlotte Ems', 'charlang', '71fafc4e2fc1e47e234762a96b80512b6b5534c2', 'Administrator'),
(6, 'Joken Villanueva', 'admin', '4f26aeafdb2367620a393c973eddbe8f8b846ebd', 'Administrator'),
(50, 'Lead Wyneth', 'Samer', '31aa2558efd8cf9f10e7aef3aa66cb8829084889', 'Administrator'),
(64, 'Leah Wyneth Delapena', 'leah', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Administrator'),
(93, 'Samer', 'sasam', 'd1a494a05eb635d103617decaec281969cc1261d', 'Administrator'),
(95, 'Joken Villanueva', 'admin', '4f26aeafdb2367620a393c973eddbe8f8b846ebd', 'Administrator'),
(96, 'Dolan Cuevas', 'dolan', '799f05c1932cddab1d9cdf855c6ec69853f0d543', 'Administrator');

-- --------------------------------------------------------

--
-- Structure for view `bapt_pers_spon`
--
DROP TABLE IF EXISTS `bapt_pers_spon`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `bapt_pers_spon` AS select `b`.`bapt_id` AS `bapt_id`,`b`.`bkNum` AS `bkNum`,`b`.`bkPage` AS `bkPage`,`b`.`bkLine` AS `bkLine`,`b`.`lName` AS `lName`,`b`.`fName` AS `fName`,`b`.`mName` AS `mName`,`b`.`sName` AS `sName`,`b`.`cur_date` AS `cur_date`,`b`.`minister` AS `minister`,`b`.`stipend` AS `stipend`,`b`.`remarks` AS `remarks`,`p`.`birth_date` AS `birth_date`,`p`.`age` AS `age`,`p`.`birth_place` AS `birth_place`,`p`.`father` AS `father`,`p`.`f_Origin` AS `f_Origin`,`p`.`Mother` AS `Mother`,`p`.`m_Origin` AS `m_Origin`,`p`.`legitimacy` AS `legitimacy`,`s`.`sponsName1` AS `sponsName1`,`s`.`sponsOrigin1` AS `sponsOrigin1`,`s`.`sponsName2` AS `sponsName2`,`s`.`sponsOrigin2` AS `sponsOrigin2`,`s`.`s_others` AS `s_others`,`b`.`pers_id` AS `pers_id`,`b`.`sponsor_id` AS `sponsor_id`,`b`.`b_id` AS `b_id` from ((`baptism` `b` join `pers_details` `p`) join `sponsor` `s`) where ((`b`.`pers_id` = `p`.`pers_id`) and (`b`.`sponsor_id` = `s`.`sponsor_id`));
