-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 22, 2016 at 12:11 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uddipanenergy`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_address`
--

CREATE TABLE `tbl_address` (
  `address_id` int(2) NOT NULL,
  `address_title` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(100) NOT NULL,
  `fax` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_address`
--

INSERT INTO `tbl_address` (`address_id`, `address_title`, `name`, `address`, `phone`, `fax`, `email`, `website`) VALUES
(1, 'HEAD OFFICE', 'UDDIPAN ENERGY LIMITED ', '840-841, Baitul Aman Tower.\r\nRing Road, Adabar, Mohammadpur,\r\nDhaka-1207.', '+8802 9122877\r\n09614800800, 09614800803', '', 'info@uddipanenergy.com', ''),
(2, 'LIAISON OFFICE', 'Advanced Micro Energy Inc.', '1131A Leslie St., Toronto, ON M3C 3L8, Canada.', '1 (416) 384-0007,1 (416) 477-6810; \r\nCell:1 (647) 781-4085.', '', '', 'www.amenergy.ca'),
(3, 'IT Solution', '', '', '+8809614800800, +801770790050, \r\n+8801770790051, +8801770790052', '', '', ''),
(4, 'Renewable Energy', '', 'Purchase & Commercial:\r\n+8801777719633  09614800805                                      Engineering Solution : +8801777719635\r\nTechnical Solution : +8801777719637\r\nAccounts & Admin : +8801777719638, 09614800804', '', '', '', ''),
(5, 'Ishwardi Showroom', '', 'In Front of Govt. Women’s College Pabna Road, Ishwardi, Pabna .', '', '', '', ''),
(6, 'Bogura Showroom', '', 'Betbari, Shahjahanpur, Bogura.', '', '', '', ''),
(7, 'Cox Bazar Showroom', '', 'Alir Jahan, Cox’s Bazar.', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(2) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(32) NOT NULL,
  `admin_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `admin_status` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_date_time`, `admin_status`) VALUES
(1, 'Developer', 'admin@me.com', '111111', '2016-09-22 09:21:03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(3) NOT NULL,
  `portfolio_id` int(3) NOT NULL,
  `category_image` varchar(250) NOT NULL,
  `category_summery` text NOT NULL,
  `category_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `portfolio_id`, `category_image`, `category_summery`, `category_description`) VALUES
(1, 1, 'upload_image/category_image/Protfolio_1_thumb.jpg', 'Information technology deals with information and its use in organizations especially in businesses, enterprises and society. UEL is specialized in information technology specifically in the application of computers and telecommunication equipment. We are specialized to cater the need of fastest growing IT industry in developing countries aiming at strategic, timely and well informed decision-making for poverty alleviation, digital education, advancing businesses, enterprises and industries and sustainable development. \n\nWith our digital vision and solution to advanced education, we are launched three low pricing laptop in Bangladesh, this are Astron Hope series, Astron Star series and Astron Maple Series. This Astron brand mainly coming from Canada being a Canadian partner organization Advanced Micro Energy. We offer Strong and innovative services for solution to everyday computing. It is our pleasure to provide high quality products at very competent prices.', 'The Challenge\n\nDiffusion of information technology to rural areas and poor population with limited financial capacity.\n\nThe Solution\n\nAs a first step, we have designed affordable laptops specifically to fulfill the needs of poor people in the rural areas. The laptops are being distributed by our partner NGOs under micro-credit program.\n\nProduct Specifications:\n\nHOPE-Solution to Advanced Education\nPrice: 23,000/-'),
(2, 2, 'upload_image/category_image/Protfolio_2_thumb.JPG', 'UDDPAN Energy Limited (UEL) is highly dedicated to resource development business like renewable energy. With a view to maximum utilization of natural resources, we are working very hard in this sector. With a view to maximum utilization of natural resources, UDDIPAN Energy Limited (UEL) is working very hard in this sector.As a part of this view we are working in Solar Home System, Solar Rooftop Projects, Solar Street Lighting Solution and Solar Irrigation Projects, Solar Mini Grid Power Plant.', 'At present we are working with different types of Solar Home System such as IDCOL approved home systems and as well as Smart Solar Home System with GEL type battery. We are supplying the home systems by resourcing locally & importing from abroad as well. We are providing Solar Home System of 10W, 20W, 30W, 40W, 50W, 65W, 85W, 90W. So far we’ve provided almost 220 KW Solar PV of different types of Home Systems. We also provide the suitable structures with different systems. So far we have supplied about 7,000 charge controllers, almost 25,000 LED Bulbs with these systems.'),
(3, 4, 'upload_image/category_image/Fish_Feed_thumb.jpg', 'Fish Feed Ensure Highest Quality fish feed for better health for All', 'Business Vision Maximum amount sales with Minimum profits through developing YOUNG ENTREPRENURE.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_job`
--

CREATE TABLE `tbl_job` (
  `job_id` int(2) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `job_program` varchar(50) NOT NULL,
  `job_location` varchar(20) NOT NULL,
  `job_description` text NOT NULL,
  `job_salary` varchar(10) NOT NULL,
  `dead_line` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_message`
--

CREATE TABLE `tbl_message` (
  `message_id` int(2) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `news_id` int(10) NOT NULL,
  `news_title` varchar(100) NOT NULL,
  `news` text NOT NULL,
  `news_image_0` varchar(200) NOT NULL,
  `news_image_1` varchar(200) NOT NULL,
  `news_image_2` varchar(200) NOT NULL,
  `news_image_3` varchar(200) NOT NULL,
  `news_image_4` varchar(200) NOT NULL,
  `news_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`news_id`, `news_title`, `news`, `news_image_0`, `news_image_1`, `news_image_2`, `news_image_3`, `news_image_4`, `news_date`) VALUES
(1, 'Protein Plus Poultry and Fish Feed Inauguration', 'Palli Karma-Sohaok Foundation managing director Abdul Karim holds a product named Protein plus and Fish Feed launched by Uddipan Energy Ltd. At a programmed in the capital recently. Uddipan Energy board of directors honorary chairman Shahid Hossain Talukder and Credit and Development Forum executive director Abdul Awal were also present in the programmed presided over y Uddipan Energy honorary chairman Mohammed Emranul Hoque Chowdhury.', 'upload_image/news_image_0/Slider_Image_3_thumb.jpg', '', '', '', '', 'Thu, 02-July 2015. 1:01:47 PM'),
(2, '11.25 KW SIPS Project', 'We’ve already installed a Solar Irrigation project in Uttar Sudorshon Khila, Haluaghat, Mymenshing. We’ve installed a 7.5 KW Franklin pump with 11.25 KW PV panel.\n\nIrrigation Coverage Areas: 45 Bighas of Land\nTotal Beneficiary: 24\nTotal number of seasons: 3\nDaily Output: 6, 00,000 Litter/ Day', 'upload_image/news_image_0/11.2_KW_SIPS_Project_(9)___thumb.jpg', '', '', '', '', 'Tue, 07-July 2015. 8:06:22 PM');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_portfolio`
--

CREATE TABLE `tbl_portfolio` (
  `portfolio_id` int(3) NOT NULL,
  `portfolio_name` varchar(50) NOT NULL,
  `portfolio_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_portfolio`
--

INSERT INTO `tbl_portfolio` (`portfolio_id`, `portfolio_name`, `portfolio_image`) VALUES
(1, 'Educational and Information Technology', 'upload_image/portfolio_image/Slider_Image_4_thumb.jpg'),
(2, 'Renewable Energy', 'upload_image/portfolio_image/Picture1_thumb.png'),
(3, 'CNG Auto Vehicles', 'upload_image/portfolio_image/Slider_Image_7_thumb.jpg'),
(4, 'Protein Plus Poultry and Fish Feed', 'upload_image/portfolio_image/Protein_Logo_thumb.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service`
--

CREATE TABLE `tbl_service` (
  `service_id` int(2) NOT NULL,
  `service_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_service`
--

INSERT INTO `tbl_service` (`service_id`, `service_image`) VALUES
(2, 'upload_image/service_image/cache_25725267_thumb.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slide`
--

CREATE TABLE `tbl_slide` (
  `slide_id` int(2) NOT NULL,
  `slide_heading` varchar(100) NOT NULL,
  `slide_subheading` varchar(100) NOT NULL,
  `slide_image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_slide`
--

INSERT INTO `tbl_slide` (`slide_id`, `slide_heading`, `slide_subheading`, `slide_image`) VALUES
(1, 'Communication', 'Communication has a catalytic role in social', 'upload_image/slide_image/Slider_Image_2_thumb.jpg'),
(2, 'Protein Plus Inauguration', 'UEL Launched Protein Plus & Fish Feed Product', 'upload_image/slide_image/1438421260Slider_Image_3_thumb.jpg'),
(3, 'Our Management                ', 'Meet our management team', 'upload_image/slide_image/1439135722IMG_9774_thumb.JPG'),
(4, 'Quality Product of Protein Plus', 'Products made in a factory', 'upload_image/slide_image/IMG_2370_thumb.JPG'),
(5, ' Mr. Emranul Huq Chowdhury', 'Honorable Chairman of Uddipan Energy Ltd', 'upload_image/slide_image/IMG_2522_thumb.JPG'),
(8, 'Office of Beauty                ', 'Combination of Qualities', 'upload_image/slide_image/IMG_2216_thumb.JPG'),
(9, 'Contract Signing Ceremony', '156 KWp Solar Mini Grid, Chorvodrashon, Faridpur                ', 'upload_image/slide_image/02_thumb.jpg'),
(10, 'Contract Signing Ceremony', 'UDDIPAN PV-Diesel Hybrid Minigrids', 'upload_image/slide_image/03_thumb.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_address`
--
ALTER TABLE `tbl_address`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_job`
--
ALTER TABLE `tbl_job`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `tbl_message`
--
ALTER TABLE `tbl_message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `tbl_portfolio`
--
ALTER TABLE `tbl_portfolio`
  ADD PRIMARY KEY (`portfolio_id`);

--
-- Indexes for table `tbl_service`
--
ALTER TABLE `tbl_service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `tbl_slide`
--
ALTER TABLE `tbl_slide`
  ADD PRIMARY KEY (`slide_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_address`
--
ALTER TABLE `tbl_address`
  MODIFY `address_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_job`
--
ALTER TABLE `tbl_job`
  MODIFY `job_id` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_message`
--
ALTER TABLE `tbl_message`
  MODIFY `message_id` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `news_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_portfolio`
--
ALTER TABLE `tbl_portfolio`
  MODIFY `portfolio_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_service`
--
ALTER TABLE `tbl_service`
  MODIFY `service_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_slide`
--
ALTER TABLE `tbl_slide`
  MODIFY `slide_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
