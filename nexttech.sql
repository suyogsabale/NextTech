-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2023 at 02:40 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nexttech`
--

-- --------------------------------------------------------

--
-- Table structure for table `prod_tab`
--

CREATE TABLE `prod_tab` (
  `name` varchar(255) NOT NULL,
  `short` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `feat` varchar(1000) NOT NULL,
  `pdf` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `modal` varchar(255) NOT NULL,
  `modid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prod_tab`
--

INSERT INTO `prod_tab` (`name`, `short`, `class`, `img`, `feat`, `pdf`, `id`, `modal`, `modid`) VALUES
('CYNIC SERIES', 'CYNIC Series Machines have unrivalled cutting capability achieved by overwhelming Power!', 'TURNING MACHINE', 'CYNIC.png', 'Key Featuresï¿½    Dual Torque Tube Design with 45ï¿½ True Slant Bed Constructionï¿½  32X10 Size Ball Screw with C3 Grade, Double Nut, Long Nut,and Deep Groove with Zero Backlashï¿½ High Precision Grade 30 Size Ball Type LM Guidays with Medium Prelo', '  http://nexttechmachines.com/wp-content/uploads/2023/02/CYNIC.pdf', 1, '#portfolioModal1', 'portfolioModal1'),
('TMC SERIES', 'All MC Series Machines having unrivalled cutting capability achieved by overwhelming power!', 'TMC Machine', 'tmc.png', 'Key Features\r\n\r\n\r\n· Dual Torque Tube Design with 45° True Slant Bed Construction\r\n\r\n· 32X10 Size Ball Screw with C3 Grade, Double Nut, Long Nut,and Deep Groove with Zero Backlash\r\n\r\n· High Precision Grade 35 Size Ball Type LM Guidays with Medium Preloaded', 'http://nexttechmachines.com/wp-content/uploads/2023/02/CYNIC.pdf', 2, '#portfolioModal2', 'portfolioModal2'),
('HMC SERIES', 'High Precision Grade Roller LM Guide ways With Medium Preloaded Extra Long Blocks', 'HMC Machines', 'hmc.png', 'Key Features\r\n<br>\r\n->Bed Construction Extra Wide and Torque Tube Design.\r\n\r\n->Lowe Centre Of Gravity\r\n\r\n· High Precision Grade Roller LM Guide ways with medium preloaded extra long blocks\r\n\r\n· Digital Servo Spindle Motor\r\n\r\n· Taiwan Make High Speed Rigid Spindle with P4 Class Angular Contact Ball B', 'http://nexttechmachines.com/wp-content/uploads/2023/02/CYNIC.pdf', 3, '#portfolioModal3', 'portfolioModal3'),
('CLOBBER SERIES', 'The CLOBBER Series Vertical Machining Centre Delivers Massive Cutting Versatility at your Working Place.', 'VMC Machine', 'CLOBBER.png', '· Dual Torque Tube Design  Construction\r\n\r\n· 32X10 Size Ball Screw with C3 Grade, Double Nut, Long Nut,and Deep Groove with Zero Backlash\r\n\r\n· High Precision Grade 35 Size Ball Type LM Guidays with Medium Preloaded Flange Type Blocks\r\n\r\n· Digital Servo Spindle Motor\r\n\r\n· Cartridge Type High-Speed Ri', 'http://nexttechmachines.com/wp-content/uploads/2023/02/CYNIC.pdf', 4, '#portfolioModal4', 'portfolioModal4'),
('VTL SERIES', 'The VTL Series having Ball Screw With C3 Class, Double Nut, Long Nut And Deep Groove With Zero Backlash', 'VLT Machines', 'vtl.png', '· Dual Casting Wall Construction in column design\r\n\r\n· High Precision Class roller LM guide ways with Medium\r\n\r\n· Ball Screw with C3 class, Double Nut, Long Nut and deep Groove with zerobacklash\r\n\r\n· Digital Servo Spindle Motor\r\n\r\n· Cartridge Type High-Speed Rigid Spindle with P4 Class Angular Conta', 'http://nexttechmachines.com/wp-content/uploads/2023/02/CYNIC.pdf', 5, '#portfolioModal5', 'portfolioModal5'),
('DCMC SERIES', 'DCMC Series having the Taiwan Make High Speed Rigid Spindle with P4 Class Angular Contact Ball Bearings', 'DCMC Machines', 'DCMC.png', '50X10 Size BaB24:D33h C3 Grade , Double Nut, Long Nut and Deep Groove with Zero Backlash\r\n High Precision Grade 55 Size Roller Type LM Guidays with Medium Preloaded Blocks\r\n Digital Servo Spindle Motor\r\n Taiwan Make High Speed Rigid Spindle with P4 Class Angular Contact Ball Bearings ( 2+2 )\r\n 20 To', 'http://nexttechmachines.com/wp-content/uploads/2023/02/CYNIC.pdf', 6, '#portfolioModal6', 'portfolioModal6'),
('HRAT SERIES', 'HRAT Series Machines have unrivalled cutting capability achieved by overwhelming Power!', 'TURNING MACHINE', 'HRAT_500.png', '30° Slant Saddle Structure\r\n 32X10 Size Ball Screw with C3 Grade , Double Nut, Long Nut and Deep Groove with Zero Backlash\r\n High Precision Grade 35 Size Ball Type LM Guidays with Medium Preloaded Flange Type Blocks\r\n Digital Servo Spindle Motor\r\n Cartridge Type High Speed Rigid Spindle with P4 Clas', 'http://nexttechmachines.com/wp-content/uploads/2023/02/CYNIC.pdf', 7, '#portfolioModal7', 'portfolioModal7'),
('RIG 300', 'RIG 300 Series Machines have unrivalled cutting capability achieved by overwhelming Power!', 'TURNING MACHINE', 'RIG-300.png', 'Dual Torque Tube Design with 45ï¿½ True Slant Bed Construction 32X10 Size Ball Screw with C3 Grade , Double Nut, Long Nut and Deep Groove with Zero Backlash High Precision Grade 30 Size Ball Type LM Guidays with Medium Preloaded Flange Type Blocks Digital Servo Spindle Motor Cartridge Type Hig', ' http://nexttechmachines.com/wp-content/uploads/2023/02/CYNIC.pdf', 8, '#portfolioModal8', 'portfolioModal8'),
('ANGUS SERIES', 'The ANGUS Series Vertical Machining Centre Delivers Massive Cutting Versatility at your Working Place.', 'VMC Machine', 'ANGUS_11065.png', ' Torque Tube Bed Design Construction  Dual Casting Wall Constuction with Inverted Y type Column Design  40X10 Size Ball Screw with C3 Grade , Double Nut, Long Nut and Deep Groove with Zero Backlash  High Precision Grade 45 Size Roller Type LM Guidays 4 Nos with Medium Preloaded Blocks  Digital Servo', 'http://nexttechmachines.com/wp-content/uploads/2023/02/CYNIC.pdf', 9, '#portfolioModal9', 'portfolioModal9'),
('ELPHASS SERIES', 'The ELPHASS Series Vertical Machining Centre Delivers Massive Cutting Versatility at your Working Place.', 'VMC Machine', 'ELPHAS_17090.png', 'Torque Tube Bed Design Construction\r\n Dual Casting Wall Constuction with Inverted Y type Column Design\r\n 40X10 Size Ball Screw with C3 Grade , Double Nut, Long Nut and Deep Groove with Zero Backlash\r\n High Precision Grade 45 Size Roller Type LM Guidays with Medium Preloaded Extra Long Blocks\r\n Digit', 'http://nexttechmachines.com/wp-content/uploads/2023/02/CYNIC.pdf', 10, '#portfolioModal10', 'portfolioModal10'),
('as', 'fsfggsfsa', 'cvc', 'MISSIONN.jpg', 'dzvzbzbz', ' fadfvv', 12, '#portfolioModal12', 'portfolioModal12'),
('cnc', 'adytgsdukfhisdljgi`', 'htc', '20230428153200__fpdl.in__gold-coins-pile-white_1284-52166-removebg-preview.png', 'doidsgodgkldgioduifg', 'syudgfukfgigjo', 101, '#portfolioModal101', 'portfolioModal101');

-- --------------------------------------------------------

--
-- Table structure for table `qtable`
--

CREATE TABLE `qtable` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `prodid` varchar(255) NOT NULL,
  `prodname` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `qid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `query_tab`
--

CREATE TABLE `query_tab` (
  `Name` varchar(1000) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Mobile` varchar(250) NOT NULL,
  `Product_id` varchar(250) NOT NULL,
  `Product_name` varchar(250) NOT NULL,
  `Location` varchar(1000) NOT NULL,
  `Qty` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `query_tab`
--

INSERT INTO `query_tab` (`Name`, `Email`, `Mobile`, `Product_id`, `Product_name`, `Location`, `Qty`) VALUES
('', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `email`, `password`, `code`, `status`) VALUES
(1, 'Suyog', 'suyogsabale007@gmail.com', '$2y$10$J2tIF0pwxv13IZ3GfjKVcugl6yHiXou6Mgb1BQD1MJwjyDEuzB7Pm', 0, 'verified'),
(29, 'zzz', 'zzz@gmail.com', '$2y$10$J2tIF0pwxv13IZ3GfjKVcugl6yHiXou6Mgb1BQD1MJwjyDEuzB7Pm', 0, 'verified');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prod_tab`
--
ALTER TABLE `prod_tab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qtable`
--
ALTER TABLE `qtable`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `query_tab`
--
ALTER TABLE `query_tab`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prod_tab`
--
ALTER TABLE `prod_tab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `qtable`
--
ALTER TABLE `qtable`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
