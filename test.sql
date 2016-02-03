-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 06, 2015 at 01:42 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `issueclient`
--

CREATE TABLE IF NOT EXISTS `issueclient` (
  `ticketid` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(15) NOT NULL,
  `address` mediumtext NOT NULL,
  `time` bigint(20) NOT NULL,
  PRIMARY KEY (`ticketid`),
  UNIQUE KEY `ticketid` (`ticketid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `issueclient`
--

INSERT INTO `issueclient` (`ticketid`, `name`, `email`, `mobile`, `address`, `time`) VALUES
(1, '0', '0', 0, '0', 0),
(2, 'a', '8451a@gmail.com', 875, 'veklved', 2015),
(3, 'dfk', 'ndfln@kanfl.vo', 875, 'oliukyn', 2015),
(4, 'f', 'f', 0, 'f', 2015);

-- --------------------------------------------------------

--
-- Table structure for table `issuedetails`
--

CREATE TABLE IF NOT EXISTS `issuedetails` (
  `ticketid` bigint(20) NOT NULL,
  `issuetitle` text NOT NULL,
  `issuedesc` longtext NOT NULL,
  `priority` varchar(255) NOT NULL,
  `assignedto` varchar(255) NOT NULL,
  `assignedby` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `time` bigint(20) NOT NULL,
  `rtime` bigint(20) NOT NULL,
  PRIMARY KEY (`ticketid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issuedetails`
--

INSERT INTO `issuedetails` (`ticketid`, `issuetitle`, `issuedesc`, `priority`, `assignedto`, `assignedby`, `status`, `time`, `rtime`) VALUES
(2, 'sdvlkdv', 'dlkvl', 'Urgent', 'engineer', 'customer', 'Resolved', 2015, 0);

-- --------------------------------------------------------

--
-- Table structure for table `issue_resolve`
--

CREATE TABLE IF NOT EXISTS `issue_resolve` (
  `ticket_id` bigint(20) NOT NULL,
  `issue_resolve_details` longtext NOT NULL,
  `resolved_time` bigint(20) NOT NULL,
  PRIMARY KEY (`ticket_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue_resolve`
--

INSERT INTO `issue_resolve` (`ticket_id`, `issue_resolve_details`, `resolved_time`) VALUES
(0, '', 2015),
(2, 'vs,m ,m m, vvf', 2015);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(65) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `password` varchar(65) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `email` varchar(30) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=20 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `password`, `email`) VALUES
(11, 'das', '1234', 'john'),
(9, 'cx', '1234', 'john'),
(10, '', '1234', 'john'),
(8, 'pradeep', 'sadfg', 'mpradeep1994@gmail.com'),
(12, 'df', '1234', 'john'),
(13, 'asdf', '1234', 'john'),
(14, 'sdfgh', '1234', 'john'),
(15, '', '1234', 'john'),
(16, 'vignesh', '1234', 'asd'),
(17, '33300900408', 'admin', 'mpradeep1994@gmail.com'),
(18, 'mpradeep1994', 'admin', 'mpradeep1994@gmail.com'),
(19, 'mpradeeo', 'admin', 'mpradeep1994@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `msgid` bigint(20) NOT NULL AUTO_INCREMENT,
  `ticketid` bigint(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `loggedby` varchar(50) NOT NULL,
  `message` longtext NOT NULL,
  `time` bigint(20) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`msgid`),
  UNIQUE KEY `msgid` (`msgid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msgid`, `ticketid`, `username`, `loggedby`, `message`, `time`, `status`) VALUES
(1, 2, 'engineer', 'customer', 'Your issue has been resolved successfully.</br>The details are as follows.</br></br><div style="color:#993366">Ticket ID : 2</br><br />Resolved  By : <br/>Issue Description: vs,m ,m m, vvf</br></div>', 2015, 1),
(2, 2, 'engineer', 'customer', 'Your issue has been resolved successfully.</br>The details are as follows.</br></br><div style="color:#993366">Ticket ID : 2</br><br />Resolved  By : <br/>Issue Description: vs,m ,m m, vvf</br></div>', 2015, 1),
(3, 2, 'engineer', 'customer', 'Your issue has been resolved successfully.</br>The details are as follows.</br></br><div style="color:#993366">Ticket ID : 2</br><br />Resolved  By : <br/>Issue Description: vs,m ,m m, vvf</br></div>', 2015, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(11) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `name`, `email`, `mobile`, `type`) VALUES
('customer', 'customer', 'Customer', 'executive@erc.com', 2147483647, 'Customer'),
('engineer', 'engineer', 'Engineer', 'engineer@erc.com', 2147483647, 'Engineer'),
('manager', 'manager', 'Manager', 'manager@erc.com', 2147483647, 'Manager');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
