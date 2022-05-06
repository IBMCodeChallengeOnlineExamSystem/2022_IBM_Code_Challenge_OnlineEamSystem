-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2019 at 09:05 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `automatic_question`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
`id` int(100) NOT NULL,
  `q1` varchar(100) NOT NULL,
  `q2` varchar(100) NOT NULL,
  `q3` varchar(100) NOT NULL,
  `q4` varchar(100) NOT NULL,
  `q5` varchar(100) NOT NULL,
  `q6` varchar(100) NOT NULL,
  `q7` varchar(100) NOT NULL,
  `q8` varchar(100) NOT NULL,
  `q9` varchar(100) NOT NULL,
  `q10` varchar(100) NOT NULL,
  `a1` varchar(100) NOT NULL,
  `a2` varchar(100) NOT NULL,
  `a3` varchar(100) NOT NULL,
  `a4` varchar(100) NOT NULL,
  `a5` varchar(100) NOT NULL,
  `a6` varchar(100) NOT NULL,
  `a7` varchar(100) NOT NULL,
  `a8` varchar(100) NOT NULL,
  `a9` varchar(100) NOT NULL,
  `a10` varchar(100) NOT NULL,
  `sid` int(100) NOT NULL,
  `score` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `a9`, `a10`, `sid`, `score`) VALUES
(1, '2', '8', '9', '3', '6', '7', '4', '1', '10', '5', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 27, '4'),
(2, '2', '9', '1', '6', '7', '10', '5', '4', '3', '8', 'a', 'a', 'a', 'b', 'b', 'b', 'b', 'b', 'b', 'c', 16, '1'),
(3, '7', '8', '9', '10', '2', '11', '1', '3', '6', '4', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 28, '4'),
(4, '2', '11', '1', '7', '5', '10', '3', '6', '9', '8', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 20, '3');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE IF NOT EXISTS `college` (
`college_id` int(100) NOT NULL,
  `college_name` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `loginid` int(100) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`college_id`, `college_name`, `address`, `email`, `website`, `loginid`) VALUES
(3, 'SDFGHJ', 'FGHJK', 'FGHJK', 'GHJ', 9),
(5, 'cvb', 'cvb', 'vcb', 'vcb', 19),
(11, 're', 'ctl', 'fgdh', 'dfg', 25),
(14, 'tt', 'ctl', 'ctl@g.c', 'fgdh', 33),
(15, '3333', 'ctl', 'ctl@g.c', 'ww.ggg.com', 35);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`loginid` int(100) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `type1` varchar(100) DEFAULT NULL,
  `status` int(100) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginid`, `username`, `password`, `type1`, `status`) VALUES
(1, 'G', 'GG', 'teacher', 1),
(2, 'admin', 'admin', 'admin', 1),
(4, 'arun', 'arun', 'teacher', 1),
(9, 'job', 'job', 'college', 1),
(11, 'raju', 'raju', 'teacher', 1),
(12, 'JJJ', 'JJJ', 'college', 1),
(13, 'BB', 'BB', 'teacher', 1),
(14, 'sambhu', 'sambhu', 'teacher', 1),
(15, 'dav', 'dav', 'student', 1),
(16, 'a', 'a', 'student', 1),
(17, 'dfg', 'h', 'teacher', 0),
(18, 'gh', 'h', 'teacher', 0),
(26, '', '', 'teacher', 1),
(27, 'vv', 'vv', 'student', 1),
(28, 'cc', 'cc', 'student', 1),
(29, 'aa', 'aa', 'student', 1),
(31, '', '', 'college', 0),
(32, '', '', 'college', 0),
(33, '', '', 'college', 0),
(34, 'ghhf', 'f', 'teacher', 0);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
`question_id` int(100) NOT NULL,
  `question` varchar(100) DEFAULT NULL,
  `option_a` varchar(100) DEFAULT NULL,
  `option_b` varchar(100) DEFAULT NULL,
  `option_c` varchar(100) DEFAULT NULL,
  `option_d` varchar(100) DEFAULT NULL,
  `answer` varchar(100) NOT NULL,
  `status` int(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `answer`, `status`) VALUES
(1, 'fgf', 'dfg', '0', 'dfg', '0', 'c', 0),
(2, 'g', 'dfg', 'dfg', 'dfg', 'dfg', 'a', 0),
(3, 'h', 'fghd', 'dfghdfgh', 'fgh', 'fdgh', 'a', 0),
(4, 'aaaaaaaaaaa', 'a', 'b', 'a', 'a', 'a', 0),
(5, 'gggfg', 'fgg', 'fgfgfdg', 'gggfdg', 'fgfgg', 'c', 0),
(6, 'sdfdfdf', 'dfdff', 'fdfdfd', 'fdffdf', 'dfdfdfd', 'c', 0),
(7, 'hfgdhghfgh', 'hfghfhfgh', 'ghghgg', 'ghfgh', 'fghh', 'a', 0),
(8, 'ghfghghfg', 'gfgfgh', 'gfghg', 'ggg', 'ggg', 'b', 0),
(9, 'ffffffffffffff', 'ffffffffff', 'fffffffffff', 'fffffffffff', 'ffffffffff', 'c', 0),
(10, 'gg', 'g', 'g', 'g', 'g', 'd', 0),
(11, 'fdgh', 'fgh', 'dfgh', 'fdgh', 'fgh', 'a', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
`id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `college` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `estatus` int(100) NOT NULL,
  `loginid` int(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `college`, `email`, `estatus`, `loginid`) VALUES
(1, 'fgh', ' 9', 'ctl@g.c', 0, 27),
(2, 'rfr', ' 9', 'ctl@g.c', 0, 28),
(3, 're', ' 20', 'ctl@g.c', 0, 29);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
`teach_id` int(100) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `college` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `qualification` varchar(100) DEFAULT NULL,
  `experiance` varchar(100) DEFAULT NULL,
  `loginid` int(100) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teach_id`, `name`, `college`, `email`, `qualification`, `experiance`, `loginid`) VALUES
(1, 'WDE', 'HLL', 'GLG', 'G', 'LG', 1),
(3, 'arun', 'Sdfg', '5', 'BCA', '44', 4),
(4, 'raju', 'college of engineering cherthala', ' 1', 'btech', '5', 11),
(5, 'GGGG', 'GGGGG', ' 3', 'BCA', '4', 13),
(6, 'sambhu', 'cec', ' 3', 'BCA', '5', 14),
(7, 'david john', 'Sdfg', ' 2', 'BCA', '7', 15),
(8, '', '', '', '', '', 26),
(9, 'tt', ' 2', 'r', 'r', '5', 29),
(10, '', '', '', '', '', 26),
(11, 'raj', ' 2', 'ctl@g.c', 'r', '4', 34),
(12, 'w', ' 5', 'ctl@g.c', 'fdg', '54', 34);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
 ADD PRIMARY KEY (`college_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`loginid`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
 ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
 ADD PRIMARY KEY (`teach_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
MODIFY `college_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `loginid` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
MODIFY `question_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
MODIFY `teach_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
