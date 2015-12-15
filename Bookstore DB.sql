-- phpMyAdmin SQL Dump
-- version 4.2.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 20, 2014 at 12:52 PM
-- Server version: 5.5.38-MariaDB
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Bookstore1`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin_login`
--

CREATE TABLE IF NOT EXISTS `Admin_login` (
`admin_ID` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Admin_login`
--

INSERT INTO `Admin_login` (`admin_ID`, `admin_name`, `password`) VALUES
(1, 'admin1', 'Admin1');

-- --------------------------------------------------------

--
-- Table structure for table `AUTHOR`
--

CREATE TABLE IF NOT EXISTS `AUTHOR` (
  `aid` char(3) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `AUTHOR`
--

INSERT INTO `AUTHOR` (`aid`, `name`, `email`) VALUES
('A01', 'Chummy S. Sinnatamby', 'A01@bookstore.lk'),
('A02', 'J.R.R. Tolkien', 'A02@bookstore.lk'),
('A03', 'J.K. Rowling', 'A03@bookstore.lk'),
('A04', 'Martin Wickramasinghe', NULL),
('A05', 'Ian Fleming', 'A05@bookstore.lk'),
('A06', 'Marcus Luttrell', 'A06@bookstore.lk'),
('A07', 'Herge', 'A07@bookstore.lk'),
('A08', 'R. Goscinny & A. Uderzo', 'A08@bookstore.lk'),
('A09', 'Elmasri, Navathe, Somayajulu', 'A09@@bookstore.lk'),
('A10', 'M. Morris Mano', 'A10@@bookstore.lk'),
('A11', 'Kenneth H. Rosen', 'A11@bookstore.lk'),
('A12', 'Bulant Atalay', 'A12@bookstore.lk'),
('A13', 'kumar, Abbas, Fausto, Mitchell', 'A13@bookstore.lk'),
('A14', 'Dan Brown', 'A14@bookstore.lk'),
('A15', 'Homer', NULL),
('A16', 'E. L. James', 'A16@bookstore.lk'),
('A17', 'William Wyatt', 'A17@bookstore.lk'),
('A18', 'Micheael Ondaate', 'A18@bookstore.lk');

-- --------------------------------------------------------

--
-- Table structure for table `AUTHOR_BOOK`
--

CREATE TABLE IF NOT EXISTS `AUTHOR_BOOK` (
  `aid` char(3) NOT NULL DEFAULT '',
  `bid` char(3) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `AUTHOR_BOOK`
--

INSERT INTO `AUTHOR_BOOK` (`aid`, `bid`) VALUES
('A01', 'B01'),
('A02', 'B02'),
('A03', 'B03'),
('A04', 'B04'),
('A05', 'B05'),
('A06', 'B08'),
('A07', 'B10'),
('A08', 'B11'),
('A09', 'B13'),
('A10', 'B14'),
('A11', 'B19'),
('A12', 'B20'),
('A13', 'B12'),
('A14', 'B15'),
('A14', 'B16'),
('A15', 'B17'),
('A15', 'B18'),
('A16', 'B06'),
('A17', 'B09'),
('A18', 'B07');

-- --------------------------------------------------------

--
-- Table structure for table `BOOK`
--

CREATE TABLE IF NOT EXISTS `BOOK` (
  `bid` char(3) NOT NULL,
  `price` double DEFAULT NULL,
  `ISBN` char(10) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `catID` char(3) DEFAULT NULL,
  `img_src` varchar(200) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `BOOK`
--

INSERT INTO `BOOK` (`bid`, `price`, `ISBN`, `title`, `catID`, `img_src`, `quantity`) VALUES
('B01', 100, '0123456789', 'Last''s Anatomy: Regional and Applied 12th edition', 'C04', 'meb01.jpeg', 1000),
('B02', 100, '0123456789', 'The Lord of the Rings', 'C09', 'ab02.png', 1000),
('B03', 100, '0123456789', 'Harry Potter', 'C01', 'chb03.jpg', 1000),
('B04', 100, '0123456789', 'Madolduwa', 'C01', 'chb04.jpg', 1000),
('B05', 100, '0123456789', 'James Bond', 'C09', 'ab05.jpg', 1000),
('B06', 100, '0123456789', 'Fifty Shades of Grey ', 'C06', 'rb06.JPG', 1000),
('B07', 100, '0123456789', 'The English Patient', 'C06', 'rb07.jpeg', 1000),
('B08', 100, '0123456789', 'Lone Survivor: The Eyewitness Account of Operation', 'C02', 'bb08.jpeg', 1000),
('B09', 100, '0123456789', 'The Life Changing Lessons of Steve Jobs ', 'C02', 'bb09.jpeg', 1000),
('B10', 100, '0123456789', 'The Adventures of Tintin', 'C03', 'cob10.jpg', 1000),
('B11', 100, '0123456789', 'Asterix Series', 'C03', 'cob11.jpg', 1000),
('B12', 100, '0123456789', 'Basic Pathology', 'C04', 'meb12.jpg', 1000),
('B13', 100, '0123456789', 'Fundamentals of Database Systems', 'C05', 'comb13.jpg', 1000),
('B14', 100, '0123456789', 'Computer System Architecture', 'C05', 'comb14.jpg', 1000),
('B15', 100, '0123456789', 'The DaVinci Code', 'C07', 'myb15.jpg', 1000),
('B16', 100, '0123456789', 'Angels and Demons', 'C07', 'myb16.jpg', 1000),
('B17', 100, '0123456789', 'The Odessy', 'C08', 'pb17.jpeg', 1000),
('B18', 100, '0123456789', 'The Iliad', 'C08', 'pb18.jpg', 1000),
('B19', 100, '0123456789', 'Discrete Mathematics', 'C10', 'mab19.jpg', 1000),
('B20', 100, '0123456789', 'Math and the Mona Lisa', 'C10', 'mab20.jpg', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `CATEGORY`
--

CREATE TABLE IF NOT EXISTS `CATEGORY` (
  `catID` char(3) NOT NULL DEFAULT '',
  `cat_name` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `CATEGORY`
--

INSERT INTO `CATEGORY` (`catID`, `cat_name`) VALUES
('C01', 'Children''s Book'),
('C02', 'Biography'),
('C03', 'Comics'),
('C04', 'Medicine'),
('C05', 'Computing'),
('C06', 'Romance'),
('C07', 'Mystery'),
('C08', 'Poetry'),
('C09', 'Adventure'),
('C10', 'Mathematics');

-- --------------------------------------------------------

--
-- Table structure for table `COMMENT`
--

CREATE TABLE IF NOT EXISTS `COMMENT` (
`coID` int(11) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `cID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `CUSTOMER`
--

CREATE TABLE IF NOT EXISTS `CUSTOMER` (
`cID` int(11) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `telNo` char(10) DEFAULT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `address_no` int(11) DEFAULT NULL,
  `address_line1` varchar(50) DEFAULT NULL,
  `address_line2` varchar(50) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `zipcode` int(11) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `security_qn` varchar(500) DEFAULT NULL,
  `security_ans` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `CUSTOMER_ORDER_BOOK`
--

CREATE TABLE IF NOT EXISTS `CUSTOMER_ORDER_BOOK` (
  `O_num` int(11) NOT NULL,
  `bid` char(3) NOT NULL,
  `cID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `FEEDBACK`
--

CREATE TABLE IF NOT EXISTS `FEEDBACK` (
`fID` int(11) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `cID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ORDERS`
--

CREATE TABLE IF NOT EXISTS `ORDERS` (
`O_num` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `total_price` double DEFAULT NULL,
  `placing_date` date DEFAULT NULL,
  `payment_method` char(4) DEFAULT NULL,
  `cID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin_login`
--
ALTER TABLE `Admin_login`
 ADD PRIMARY KEY (`admin_ID`);

--
-- Indexes for table `AUTHOR`
--
ALTER TABLE `AUTHOR`
 ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `AUTHOR_BOOK`
--
ALTER TABLE `AUTHOR_BOOK`
 ADD PRIMARY KEY (`aid`,`bid`), ADD KEY `FK2` (`bid`);

--
-- Indexes for table `BOOK`
--
ALTER TABLE `BOOK`
 ADD PRIMARY KEY (`bid`), ADD KEY `fk6` (`catID`);

--
-- Indexes for table `CATEGORY`
--
ALTER TABLE `CATEGORY`
 ADD PRIMARY KEY (`catID`);

--
-- Indexes for table `COMMENT`
--
ALTER TABLE `COMMENT`
 ADD PRIMARY KEY (`coID`), ADD KEY `FK24` (`cID`);

--
-- Indexes for table `CUSTOMER`
--
ALTER TABLE `CUSTOMER`
 ADD PRIMARY KEY (`cID`), ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `CUSTOMER_ORDER_BOOK`
--
ALTER TABLE `CUSTOMER_ORDER_BOOK`
 ADD PRIMARY KEY (`O_num`,`bid`,`cID`), ADD KEY `FK22` (`bid`), ADD KEY `FK23` (`cID`);

--
-- Indexes for table `FEEDBACK`
--
ALTER TABLE `FEEDBACK`
 ADD PRIMARY KEY (`fID`), ADD KEY `FK25` (`cID`);

--
-- Indexes for table `ORDERS`
--
ALTER TABLE `ORDERS`
 ADD PRIMARY KEY (`O_num`), ADD KEY `FK10` (`cID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Admin_login`
--
ALTER TABLE `Admin_login`
MODIFY `admin_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `COMMENT`
--
ALTER TABLE `COMMENT`
MODIFY `coID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `CUSTOMER`
--
ALTER TABLE `CUSTOMER`
MODIFY `cID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `FEEDBACK`
--
ALTER TABLE `FEEDBACK`
MODIFY `fID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ORDERS`
--
ALTER TABLE `ORDERS`
MODIFY `O_num` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `AUTHOR_BOOK`
--
ALTER TABLE `AUTHOR_BOOK`
ADD CONSTRAINT `FK1` FOREIGN KEY (`aid`) REFERENCES `AUTHOR` (`aid`),
ADD CONSTRAINT `FK2` FOREIGN KEY (`bid`) REFERENCES `BOOK` (`bid`);

--
-- Constraints for table `BOOK`
--
ALTER TABLE `BOOK`
ADD CONSTRAINT `fk6` FOREIGN KEY (`catID`) REFERENCES `CATEGORY` (`catID`);

--
-- Constraints for table `COMMENT`
--
ALTER TABLE `COMMENT`
ADD CONSTRAINT `FK24` FOREIGN KEY (`cID`) REFERENCES `CUSTOMER` (`cID`);

--
-- Constraints for table `CUSTOMER_ORDER_BOOK`
--
ALTER TABLE `CUSTOMER_ORDER_BOOK`
ADD CONSTRAINT `FK21` FOREIGN KEY (`O_num`) REFERENCES `ORDERS` (`O_num`),
ADD CONSTRAINT `FK22` FOREIGN KEY (`bid`) REFERENCES `BOOK` (`bid`),
ADD CONSTRAINT `FK23` FOREIGN KEY (`cID`) REFERENCES `CUSTOMER` (`cID`);

--
-- Constraints for table `FEEDBACK`
--
ALTER TABLE `FEEDBACK`
ADD CONSTRAINT `FK25` FOREIGN KEY (`cID`) REFERENCES `CUSTOMER` (`cID`);

--
-- Constraints for table `ORDERS`
--
ALTER TABLE `ORDERS`
ADD CONSTRAINT `FK10` FOREIGN KEY (`cID`) REFERENCES `CUSTOMER` (`cID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
