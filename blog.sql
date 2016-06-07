-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Jun 07, 2016 at 04:52 AM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `entries`
--

CREATE TABLE `entries` (
`id` int(11) NOT NULL,
  `title` text NOT NULL,
  `entry` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entries`
--

INSERT INTO `entries` (`id`, `title`, `entry`) VALUES
(1, 'Hello World', 'this is awesome. '),
(2, 'Another blog entry.', 'this is just another test entry for my blog.'),
(7, 'hello', 'this is body'),
(9, 'hello agianihrf;lh;oih', 'dlkfn;elfin;oerjvoijer;ocnveorij'),
(10, 'hello', 'hodjyfjgfgjfgjgk'),
(11, 'PDO HELLO', 'whats up you'),
(12, 'PDO HELLO5', 'whats up you55'),
(13, 'PDO HELLO5', 'whats up you55'),
(14, 'PDO HELLO5', 'whats up you55'),
(19, 'PDO HELLO5', 'whats up you55'),
(25, 'hello again', 'another article here');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entries`
--
ALTER TABLE `entries`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `entries`
--
ALTER TABLE `entries`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;