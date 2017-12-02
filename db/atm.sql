-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2017 at 05:13 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atm`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `trans_current_dep` (IN `tran_id` INT(7), IN `acc_no` VARCHAR(20), IN `t_amt` INT(7), IN `balance` INT(7))  NO SQL
insert INTO transaction values(CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,tran_id,acc_no,'current',t_amt,balance,'credit')$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `trans_current_with` (IN `tran_id` INT(7), IN `acc_no` VARCHAR(20), IN `t_amt` INT(7), IN `balance` INT(7))  NO SQL
insert INTO transaction values(CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,tran_id,acc_no,'current',t_amt,balance,'debit')$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `trans_saving_dep` (IN `tran_id` INT(7), IN `acc_no` VARCHAR(20), IN `t_amt` INT(7), IN `balance` INT(7))  NO SQL
insert INTO transaction values(CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,tran_id,acc_no,'saving',t_amt,balance,'credit')$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `trans_saving_with` (IN `tran_id` INT(7), IN `acc_no` VARCHAR(20), IN `t_amt` INT(7), IN `balance` INT(7))  NO SQL
insert INTO transaction values(CURRENT_TIMESTAMP,CURRENT_TIMESTAMP,tran_id,acc_no,'saving',t_amt,balance,'debit')$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `account_details`
--

CREATE TABLE `account_details` (
  `c_id` int(11) NOT NULL,
  `acc_no` varchar(20) NOT NULL,
  `atm_pin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_details`
--

INSERT INTO `account_details` (`c_id`, `acc_no`, `atm_pin`) VALUES
(1, 'client001', 2018),
(2, 'client002', 2017),
(3, 'client003', 2017),
(4, 'client004', 2017),
(5, 'client005', 2017),
(6, 'client006', 2017),
(7, 'client007', 2017),
(8, 'client008', 2017),
(9, 'client009', 2017),
(10, 'client010', 2017),
(11, 'client011', 2017),
(12, 'client012', 2017),
(13, 'client013', 2017),
(14, 'client014', 2017),
(15, 'client015', 2017),
(16, 'client016', 2017),
(17, 'client017', 2017),
(18, 'client018', 2017),
(19, 'client019', 2017),
(20, 'client020', 2017),
(21, 'client021', 2017),
(22, 'client022', 2017),
(23, 'client023', 2017),
(24, 'client024', 2017),
(25, 'client025', 2017),
(26, 'client026', 2017),
(27, 'client027', 2017),
(28, 'client028', 2017),
(29, 'client029', 2017),
(30, 'client030', 2017);

-- --------------------------------------------------------

--
-- Table structure for table `atm`
--

CREATE TABLE `atm` (
  `a_id` int(11) NOT NULL,
  `a_location` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `atm`
--

INSERT INTO `atm` (`a_id`, `a_location`) VALUES
(1, 'Vidyaranyapura');

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `b_id` int(11) NOT NULL,
  `b_name` varchar(20) DEFAULT NULL,
  `b_location` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`b_id`, `b_name`, `b_location`) VALUES
(1, 'State Bank of India', 'Vidyaranyapura'),
(2, 'State Bank of India', 'Hebbal'),
(3, 'State Bank of India', 'New Bel'),
(4, 'State Bank of India', 'R.T Nagar'),
(5, 'State Bank of India', 'Malleshwaram'),
(6, 'State Bank of India', 'Indiranagar'),
(7, 'State Bank of India', 'M.G Road'),
(8, 'State Bank of India', 'Cunningham Road'),
(9, 'State Bank of India', 'Sahakarnagar'),
(10, 'State Bank of India', 'J.P Nagar');

-- --------------------------------------------------------

--
-- Table structure for table `current_account`
--

CREATE TABLE `current_account` (
  `c_id` int(11) NOT NULL,
  `current_balance` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `current_account`
--

INSERT INTO `current_account` (`c_id`, `current_balance`) VALUES
(1, 600),
(2, 2000),
(3, 3000),
(4, 4000),
(5, 5000),
(6, 6000),
(7, 7000),
(8, 8000),
(9, 9000),
(10, 10000),
(11, 11000),
(12, 12000),
(13, 13000),
(14, 14000),
(15, 15000),
(16, 16000),
(17, 17000),
(18, 18000),
(19, 19000),
(20, 20000),
(21, 21000),
(22, 22000),
(23, 23000),
(24, 24000),
(25, 25000),
(26, 26000),
(27, 27000),
(28, 28000),
(29, 29000),
(30, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(11) NOT NULL,
  `b_id` int(11) NOT NULL,
  `c_fname` varchar(20) DEFAULT NULL,
  `c_lname` varchar(20) DEFAULT NULL,
  `c_address` varchar(30) DEFAULT NULL,
  `c_mob` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `b_id`, `c_fname`, `c_lname`, `c_address`, `c_mob`) VALUES
(1, 1, 'Deepak', ' V', 'Vidyaranyapura', 2147483647),
(2, 1, 'Shreyas', ' Jain', 'Vidyaranyapura', 2147483647),
(3, 1, 'Akshay', ' Harish', 'Vidyaranyapura', 2147483647),
(4, 2, 'Rishi', ' Suresh', 'Hebbal', 2147483647),
(5, 2, 'Joeseph', ' Daniel', 'Hebbal', 2147483647),
(6, 2, 'Sudhanshu', ' Yadhav', 'Hebbal', 2147483647),
(7, 3, 'Gautham', ' N', 'New Bel', 2147483647),
(8, 3, 'Ronny', ' Kashyap', 'New Bel', 2147483647),
(9, 3, 'Tanishk', ' Sharma', 'New Bel', 2147483647),
(10, 4, 'Aisha', ' Misbah', 'R.T Nagar', 2147483647),
(11, 4, 'Amulya', ' V', 'R.T Nagar', 2147483647),
(12, 4, 'Chaitra', ' V', 'R.T Nagar', 2147483647),
(13, 5, 'Gagan', ' Chand', 'Malleshwaram', 2147483647),
(14, 5, 'Meghana', ' A.N', 'Malleshwaram', 958762568),
(15, 5, 'Latha', ' A.V', 'Malleshwaram', 2147483647),
(16, 6, 'Kiran', ' Gowda', 'Indiranagar', 2147483647),
(17, 6, 'Krishna', ' Changappa', 'Indiranagar', 2147483647),
(18, 6, 'Puneth', ' P', 'Indiranagar', 2147483647),
(19, 7, 'Farheen', ' Sheik', 'M.G Road', 2147483647),
(20, 7, 'Talha', ' Sheik', 'M.G Road', 2147483647),
(21, 7, 'Saba', ' Khan', 'M.G Road', 2147483647),
(22, 8, 'Vinayak', ' T', 'Cunningham Road', 2147483647),
(23, 8, 'Priyanka', ' Chopra', 'Cunningham Road', 2147483647),
(24, 8, 'Deepika', ' Padukone', 'Cunningham Road', 2147483647),
(25, 9, 'Apeksha', ' Mrutyunjay', 'Sahakarnagar', 789620568),
(26, 9, 'Aaryan', ' Kumar', 'Sahakarnagar', 2147483647),
(27, 9, 'Sameen', ' Adam', 'Sahakarnagar', 2147483647),
(28, 10, 'Aiman', ' Khan', 'J.P Nagar', 2147483647),
(29, 10, 'Avinash', ' Prakash', 'J.P Nagar', 2147483647),
(30, 10, 'Divyanshu', ' Gupta', 'J.P Nagar', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `cus_id`
--

CREATE TABLE `cus_id` (
  `cid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cus_id`
--

INSERT INTO `cus_id` (`cid`) VALUES
(33);

-- --------------------------------------------------------

--
-- Table structure for table `saving_account`
--

CREATE TABLE `saving_account` (
  `c_id` int(11) NOT NULL,
  `saving_balance` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saving_account`
--

INSERT INTO `saving_account` (`c_id`, `saving_balance`) VALUES
(1, 6500),
(2, 2000),
(3, 3000),
(4, 4000),
(5, 5000),
(6, 6000),
(7, 7000),
(8, 8000),
(9, 9000),
(10, 10000),
(11, 11000),
(12, 12000),
(13, 13000),
(14, 14000),
(15, 15000),
(16, 16000),
(17, 17000),
(18, 18000),
(19, 19000),
(20, 20000),
(21, 21000),
(22, 22000),
(23, 23000),
(24, 24000),
(25, 25000),
(26, 26000),
(27, 27000),
(28, 28000),
(29, 29000),
(30, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `date` date NOT NULL,
  `time` time NOT NULL,
  `t_id` int(11) NOT NULL,
  `acc_no` varchar(20) NOT NULL,
  `account_type` varchar(20) NOT NULL,
  `t_amount` int(11) DEFAULT NULL,
  `t_balance` int(11) NOT NULL,
  `t_type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`date`, `time`, `t_id`, `acc_no`, `account_type`, `t_amount`, `t_balance`, `t_type`) VALUES
('2017-11-26', '12:41:14', 1012, 'client001', 'saving', 500, 1500, 'credit'),
('2017-11-26', '12:41:31', 1013, 'client001', 'saving', 1000, 500, 'debit'),
('2017-11-26', '12:41:45', 1014, 'client001', 'current', 500, 1500, 'debit'),
('2017-11-26', '12:41:54', 1015, 'client001', 'current', 500, 1000, 'debit'),
('2017-11-27', '10:21:09', 1016, 'client001', 'saving', 500, 0, 'debit'),
('2017-11-27', '10:27:19', 1018, 'client001', 'saving', 0, 0, 'debit'),
('2017-11-27', '10:47:32', 1019, 'client001', 'current', 400, 600, 'debit'),
('2017-11-27', '10:49:48', 1020, 'client001', 'saving', 1000, 1000, 'credit'),
('2017-11-27', '10:52:07', 1021, 'client001', 'saving', 200, 1200, 'credit'),
('2017-11-27', '10:58:25', 1022, 'client001', 'saving', 100, 1100, 'debit'),
('2017-11-27', '11:03:11', 1023, 'client001', 'saving', 1000, 100, 'debit'),
('2017-11-27', '11:03:33', 1024, 'client001', 'saving', 1000, 1100, 'credit'),
('2017-11-27', '11:13:22', 1025, 'client001', 'saving', 400, 1500, 'credit'),
('2017-11-27', '12:56:31', 1026, 'client001', 'saving', 5000, 6500, 'credit');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_id`
--

CREATE TABLE `transaction_id` (
  `t_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction_id`
--

INSERT INTO `transaction_id` (`t_id`) VALUES
(1026);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_details`
--
ALTER TABLE `account_details`
  ADD PRIMARY KEY (`acc_no`,`c_id`);

--
-- Indexes for table `atm`
--
ALTER TABLE `atm`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `current_account`
--
ALTER TABLE `current_account`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`,`b_id`);

--
-- Indexes for table `saving_account`
--
ALTER TABLE `saving_account`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `transaction_id`
--
ALTER TABLE `transaction_id`
  ADD PRIMARY KEY (`t_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
