-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2019 at 06:38 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `exam_online`
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
  `exam_id` int(100) NOT NULL,
  `score` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `a9`, `a10`, `sid`, `exam_id`, `score`) VALUES
(9, '9', '10', '2', '7', '11', '13', '12', '15', '14', '4', 'b', 'd', 'a', 'a', 'a', 'c', 'a', 'b', 'c', '', 16, 4, '8');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`college_id`, `college_name`, `address`, `email`, `website`, `loginid`) VALUES
(3, 'SDFGHJ', 'FGHJK', 'FGHJK', 'GHJ', 9),
(5, 'cvb', 'cvb', 'vcb', 'vcb', 19),
(11, 're', 'ctl', 'fgdh', 'dfg', 25),
(14, 'tt', 'ctl', 'ctl@g.c', 'fgdh', 33),
(15, '3333', 'ctl', 'ctl@g.c', 'ww.ggg.com', 35),
(16, 'mec', 'ernakulam', 'm@g.com', 'www.m.com', 35);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
`course_id` int(100) NOT NULL,
  `course` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course`) VALUES
(1, 'Bca'),
(2, 'B Com'),
(3, 'barch'),
(4, 'barch'),
(5, 'barch');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE IF NOT EXISTS `exam` (
`exam_id` int(100) NOT NULL,
  `course` int(100) NOT NULL,
  `subject` int(100) NOT NULL,
  `e_name` varchar(100) NOT NULL,
  `e_date` varchar(100) NOT NULL,
  `s_time` varchar(100) NOT NULL,
  `e_time` varchar(100) NOT NULL,
  `t_qns` varchar(100) NOT NULL,
  `t_score` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`exam_id`, `course`, `subject`, `e_name`, `e_date`, `s_time`, `e_time`, `t_qns`, `t_score`) VALUES
(1, 1, 4, 'BCA C programming Examination 2019', '2019-11-15', '10:00', '15:00', '10', '10'),
(2, 3, 7, 'BCA C programming Examinatio 2019', '2019-01-02', '01:00', '01:43', '10', '10'),
(3, 1, 6, 'BCA java programming', '2019-11-08', '11:32', '22:00', '10', '10'),
(4, 1, 4, 'BCA C programming Examinatio 2019', '2019-11-16', '05:01', '18:00', '21', '21');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginid`, `username`, `password`, `type1`, `status`) VALUES
(2, 'admin', 'admin', 'admin', 1),
(16, 'a', 'a', 'student', 1),
(43, 'arunraj0861@gmail.com', 'qq', 'student', 1);

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
  `status` int(100) NOT NULL,
  `exam` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `answer`, `status`, `exam`) VALUES
(1, 'fgf', 'dfg', '0', 'dfg', '0', 'c', 0, '4'),
(2, 'g', 'dfg', 'dfg', 'dfg', 'dfg', 'a', 0, '4'),
(3, 'h', 'fghd', 'dfghdfgh', 'fgh', 'fdgh', 'a', 0, '4'),
(4, 'aaaaaaaaaaa', 'a', 'b', 'a', 'a', 'a', 0, '4'),
(5, 'gggfg', 'fgg', 'fgfgfdg', 'gggfdg', 'fgfgg', 'c', 0, '4'),
(6, 'sdfdfdf', 'dfdff', 'fdfdfd', 'fdffdf', 'dfdfdfd', 'c', 0, '4'),
(7, 'hfgdhghfgh', 'hfghfhfgh', 'ghghgg', 'ghfgh', 'fghh', 'a', 0, '4'),
(8, 'ghfghghfg', 'gfgfgh', 'gfghg', 'ggg', 'ggg', 'b', 0, '4'),
(9, 'ffffffffffffff', 'ffffffffff', 'fffffffffff', 'fffffffffff', 'ffffffffff', 'c', 0, '4'),
(10, 'gg', 'g', 'g', 'g', 'g', 'd', 0, '4'),
(11, 'fdgh', 'fgh', 'dfgh', 'fdgh', 'fgh', 'a', 0, '4'),
(12, 'gdh', 'dfgh', 'dfgh', 'dfghdfg', 'fgh', 'a', 0, '4'),
(13, 'kuf', 'dfg', 'f', 'ukyf', 'u', 'c', 0, '4'),
(14, 'kuf', 'dfg', 'f', 'ukyf', 'u', 'c', 0, '4'),
(15, 'dgfh', 'hhhh', 'h', 'hh', 'h', 'b', 0, '4'),
(16, 'dgfh', 'hhhh', 'h', 'hh', 'h', 'b', 0, '1'),
(17, 'poi', 'a', 'b', 'c', 'd', 'a', 0, '1');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
`status_id` int(100) NOT NULL,
  `exam_id` int(100) NOT NULL,
  `student_id` int(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `exam_id`, `student_id`) VALUES
(1, 1, 16),
(2, 1, 0),
(11, 4, 16);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
`id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `acc_year` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `estatus` int(100) NOT NULL,
  `loginid` int(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `address`, `email`, `phone`, `course`, `acc_year`, `gender`, `estatus`, `loginid`) VALUES
(5, 'arun', 'moovatupuzha', 'raju@g.com', '9876543210', 'fdgh', 'dfgfsdg', 'male', 0, 16),
(6, 'asd', 'asd', 'raju@g.com', '9876543210', 'Bcad', '-2', 'female', 0, 39),
(9, 'arun', 'moovatupuzha', 'arunraj0861@gmail.com', '9876543210', '1', '245', 'male', 0, 43);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
`subject_id` int(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject`, `course`) VALUES
(1, 'dfgh', ''),
(2, 'dfgh', ''),
(4, 'c++', '1'),
(5, '', ''),
(6, 'Java Programming', '1'),
(7, 'design', '3');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

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
(12, 'w', ' 5', 'ctl@g.c', 'fdg', '54', 34),
(13, 'raj', ' 16', 'raju@g.com', 'dfghdfgh', '2', 36);

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
-- Indexes for table `course`
--
ALTER TABLE `course`
 ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
 ADD PRIMARY KEY (`exam_id`);

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
-- Indexes for table `status`
--
ALTER TABLE `status`
 ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
 ADD PRIMARY KEY (`subject_id`);

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
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
MODIFY `college_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
MODIFY `course_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
MODIFY `exam_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `loginid` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
MODIFY `question_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
MODIFY `status_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
MODIFY `subject_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
MODIFY `teach_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
