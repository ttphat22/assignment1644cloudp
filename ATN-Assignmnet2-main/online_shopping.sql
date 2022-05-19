-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2020 at 07:01 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Cat_ID` varchar(10) NOT NULL,
  `Cat_Name` varchar(30) NOT NULL,
  `Cat_Des` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Cat_ID`, `Cat_Name`, `Cat_Des`) VALUES
('1', 'HP', 'HP'),
('2', 'Acer', 'Acer'),
('3', 'Lenovo', 'Lenovo'),
('4', 'Apple', 'Apple'),
('5', 'Asus', 'Asus'),
('6', 'Dell', 'Dell');


-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `CustName` varchar(30) NOT NULL,
  `gender` int(11) NOT NULL,
  `Address` varchar(1000) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `CusDate` int(11) NOT NULL,
  `CusMonth` int(11) NOT NULL,
  `CusYear` int(11) NOT NULL,
  `SSN` varchar(10) DEFAULT NULL,
  `ActiveCode` varchar(100) NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Username`, `Password`, `CustName`, `gender`, `Address`, `telephone`, `email`, `CusDate`, `CusMonth`, `CusYear`, `SSN`, `ActiveCode`, `state`) VALUES
('admin', 'e10adc3949ba59abbe56e057f20f883e', 'qqq', 1, 'HCM', '0903851211', 'a1@gmail.com', 17, 11, 1984, '', '', 1),
('Finn', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyen Hung Dung', 0, 'Can Tho', '0903100550', 'nhdung.CPL@gmail.com', 31, 8, 1980, '', '', 0),
('Yuang', 'e10adc3949ba59abbe56e057f20f883e', 'AAAAAAAAA', 0, 'HCM', '03885121151', 'an@gmail.com', 3, 5, 1975, '', '', 0),
('yuang123', 'fcea920f7412b5da7be0cf42b8c93759', 'AAAAAAAAA', 1, 'HCM', '123', 'a@gmail.com', 20, 10, 1986, '', '', 0);

-- --------------------------------------------------------

--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_ID` varchar(10) NOT NULL,
  `Product_Name` varchar(30) NOT NULL,
  `Price` bigint(20) NOT NULL,
  `oldPrice` decimal(12,2) NOT NULL,
  `SmallDesc` varchar(1000) NOT NULL,
  `DetailDesc` text NOT NULL,
  `ProDate` datetime NOT NULL,
  `Pro_qty` int(11) NOT NULL,
  `Pro_image` varchar(200) NOT NULL,
  `Cat_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_ID`, `Product_Name`, `Price`, `oldPrice`, `SmallDesc`, `DetailDesc`, `ProDate`, `Pro_qty`, `Pro_image`, `Cat_ID`) VALUES
('1', 'APOL P2540UV', 19690000, '21000000.00', 'New Dell', '<div style=\"color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;\">\r\n	Intel&nbsp;Core&nbsp;i5-7200U/8GB&nbsp;RAM</div>\r\n', '2021-05-05 17:08:13', 5, 'anh17.png', '6'),
('2', 'Dell Vostro 2420 (V522412)', 20000000, '0.00', 'New Vostro ', '<div style=\"color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; white-space: pre;\">\r\n	Intel&nbsp;Core&nbsp;i7-7700HQ/&nbsp;8/16GB&nbsp;RAM/1TB&nbsp;HDD/GTX&nbsp;1050&nbsp;Ti&nbsp;4GB</div>\r\n', '2021-05-05 17:06:52', 10, 'anh18.png', '6'),
('3', 'ASUS VivoBook', 19690000, '0.00', 'New Asus', '<p>\r\n	New</p>\r\n', '2021-05-06 05:20:48', 5, 'anh20.png', '5'),
('4', 'ASUS VivoBook 5468', 16690000, '19500000.00', '123', '<p>\r\n	aaaa</p>\r\n', '2021-05-05 16:56:00', 1, 'anh21.png', '5'),
('5', 'ROG Zenphyrus(GX501)', 13400000, '15400000.00', 'New Rog', '<div courier=\"\" font-size:=\"\" line-height:=\"\" style=\"color: rgb(212, 212, 212); background-color: rgb(30, 30, 30); font-family: Consolas, \" white-space:=\"\">\r\n	Intel&nbsp;Core&nbsp;i7-7700HQ/24GB&nbsp;RAM/1TB&nbsp;SSD&nbsp;PCie</div>\r\n', '2021-05-05 17:06:14', 1, 'anh20.png', '5'),
('6', 'ROG ZEN', 29500000, '0.00', 'New Rog', '<p>\r\n	New</p>\r\n', '2021-05-06 05:21:41', 1, 'anh21.png', '5'),
('7', 'Dell Vostro', 23770000, '0.00', 'New Dell', '<p>\r\n	New</p>\r\n', '2021-05-06 05:22:43', 4, 'anh17.png', '6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Cat_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_ID`),
  ADD KEY `Cat_ID` (`Cat_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`username`) REFERENCES `customer` (`Username`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`Cat_ID`) REFERENCES `category` (`Cat_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
