-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 09, 2026 at 05:19 AM
-- Server version: 8.0.46
-- PHP Version: 8.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coopera_rosere_rose_rsdncy`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int NOT NULL,
  `booking_name` varchar(100) NOT NULL,
  `booking_email` varchar(100) NOT NULL,
  `booking_phn` varchar(100) NOT NULL,
  `booking_addr` varchar(200) NOT NULL,
  `booking_sess` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `booking_name`, `booking_email`, `booking_phn`, `booking_addr`, `booking_sess`) VALUES
(1, 'Jisha', 'jisha@gmail.com', '8086172344', 'Test Booking', 'frz724084112'),
(3, 'Jisha', 'jisha@gmail.com', '8086172344', 'Test', 'frz662712672');

-- --------------------------------------------------------

--
-- Table structure for table `rose_about`
--

CREATE TABLE `rose_about` (
  `about_id` int NOT NULL,
  `about_title` varchar(100) NOT NULL,
  `about_desc` varchar(10000) NOT NULL,
  `about_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rose_about`
--

INSERT INTO `rose_about` (`about_id`, `about_title`, `about_desc`, `about_img`) VALUES
(1, 'Rose Residency', '<p align=\"justify\"><br></p><p class=\"lead\">Established in 1985, Rose Residency Hotels has created some of the Kerala’s most highly regarded intimate hotels.</p><p>Over twenty-five years of living and working in\r\n various destinations around Kerala provides Rose Residency Hotels with \r\nvaluable insights, local knowledge and cultural sensitivities\r\nthat we share with all our guests through genuine\r\nconnections in each community. </p><p>As our acclaimed portfolio continues to grow, we\r\nremain committed to our signature Kerala inspired\r\ncutting edge design, realised in each new location\r\naccording to that region’s history and traditions,\r\nwith great respect for the local environment.</p><p><br></p><p align=\"justify\"><br></p>', 'home_about.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rose_category`
--

CREATE TABLE `rose_category` (
  `category_id` int NOT NULL,
  `category_title` varchar(100) NOT NULL,
  `category_desc` varchar(30000) NOT NULL,
  `category_img` varchar(200) NOT NULL,
  `category_submit` varchar(100) NOT NULL,
  `category_status` int NOT NULL,
  `hotel_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rose_category`
--

INSERT INTO `rose_category` (`category_id`, `category_title`, `category_desc`, `category_img`, `category_submit`, `category_status`, `hotel_id`) VALUES
(1, 'Rose Premium', '<p><br></p><p>Beautiful design with modern furnishings including a glamorous bay window with your own private view of Lucerne.</p><h3>\r\n                            <small>Double Room - INR 2150/Night</small>\r\n                            </h3><h3><small>Single Room - INR 1850/Night</small><br></h3>', '11.jpg', '', 0, 'north_paravur'),
(2, 'Delux A/C Rooms', '<p><br></p><p>Beautiful design with modern furnishings including a glamorous bay window with your own private view of Lucerne.</p><h4>\r\n                              <small>Double Room- INR 2000/Night</small>\r\n</h4><h4>                            <small>Single Room - INR 1800/Night</small><br></h4>', 'WhatsApp_Image_2.jpeg', '', 1, 'north_paravur'),
(3, 'Standard Non A/C Rooms', '<p><br></p><p>Beautiful design with modern furnishings including a glamorous bay window with your own private view of Lucerne.</p><h4>\r\n                            <small>Double Room - INR 1350/Night<br></small>\r\n                            <small>Single Room - INR 1200/Night</small><br></h4>', '2.jpg', '', 0, 'north_paravur'),
(4, 'Executive Room', '<p>Beautiful design with modern furnishings including a glamorous bay window with your own private view of Lucerne.</p><h3>\r\n                            <small>Double Room - INR 2000/Night</small>\r\n                            </h3><h3><small>Single Room - INR 1500/Night</small><br></h3><p><br></p>', 'Delux-room-executive.jpg', '', 1, 'perumbavoor'),
(5, 'Deluxe Room', '<p>Beautiful design with modern furnishings including a glamorous bay window with your own private view of Lucerne.</p><h3>\r\n                            <small>Double Room - INR 2150/Night</small>\r\n                            </h3><h3><small>Single Room - INR 1850/Night </small></h3><h3><small><br></small></h3><h3><small>Extra Bed 500/-<br></small></h3><p></p>', 'Delux-room1.jpg', '', 1, 'perumbavoor'),
(6, 'Deluxe Room', '<p><br></p><h4>\r\n                              </h4><h3><small>Deluxe Room - Rs.3000/Night</small></h3><h4><small>Extra Person- Rs. 500/Night</small></h4><h4><small>Check in check out - 24hrs</small></h4><h4><small><br></small></h4><h4>Facilities</h4><ul><li>24 hours Room Service</li><li>Multi cuisine restaurant</li><li>Ample car parking Travel desk</li><li>Board room, WiFi</li><li>Doctor on call</li><li>Safe deposit locker</li></ul><h4><br><small><br><br></small></h4><p><br></p><h4><br><br><br><small><br></small>\r\n</h4><p><br></p><h4>                            <br></h4><p><br></p>', '4.jpg', '', 1, 'irinjalakuda'),
(7, 'Standard A/C Rooms', '<h4><small>Double Room- INR 2000/Night</small></h4><h4><small><br></small>\r\n</h4><h4>                            <small>Single Room - INR1500/Night</small></h4><h4><small><br></small></h4><h4><small>Extra Person - 500/Night<br></small></h4><p><br></p>', '9.jpg', '', 1, 'irinjalakuda'),
(8, 'Standard Non A/C Rooms', '<h4>\r\n                              <small>Double Room- INR1500/Night</small></h4><h4><small><br></small></h4><h4><small>Extra Person - INR500/Night<br></small></h4><p><br></p>', '12.jpg', '', 1, 'irinjalakuda'),
(9, 'Executive Room', '<p>Beautiful design with modern furnishings including a glamorous bay window with your own private view of Lucerne.</p><h3>\r\n                            <small>Double Room - INR 2000/Night</small>\r\n                            </h3><h3><small>Single Room - INR 1500/Night</small><br></h3><p><br></p><p><br><br></p><p><br></p>', '21.jpg', ' ', 1, 'perinthalmanna'),
(10, 'Deluxe Room', '<p>Beautiful design with modern furnishings including a glamorous bay window with your own private view of Lucerne.</p><h3>\r\n                            <small>Double Room - INR 2500/Night</small>\r\n                            </h3><h3><small>Single Room - INR 1850/Night </small></h3><h3><small>Extra Bed 500/-<br></small></h3><p><br></p><p><br></p><p><br></p>', 'WhatsApp_Image_9.jpeg', '', 1, 'perinthalmanna');

-- --------------------------------------------------------

--
-- Table structure for table `rose_contact`
--

CREATE TABLE `rose_contact` (
  `contact_id` int NOT NULL,
  `contact_addrs` varchar(300) NOT NULL,
  `contact_frmtitl` varchar(500) NOT NULL,
  `contact_workng` varchar(500) NOT NULL,
  `contact_phn1` varchar(30) NOT NULL,
  `contact_phn2` varchar(30) NOT NULL,
  `contact_email` varchar(50) NOT NULL,
  `contact_fb` varchar(100) NOT NULL,
  `contact_inst` varchar(100) NOT NULL,
  `contact_youtube` varchar(100) NOT NULL,
  `contact_map` varchar(1000) NOT NULL,
  `hotel_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rose_contact`
--

INSERT INTO `rose_contact` (`contact_id`, `contact_addrs`, `contact_frmtitl`, `contact_workng`, `contact_phn1`, `contact_phn2`, `contact_email`, `contact_fb`, `contact_inst`, `contact_youtube`, `contact_map`, `hotel_id`) VALUES
(1, '                                                                                                                                                                                    Jaya tourist home<br> \r\nAluva paravur Road<br>\r\nNorth Paravur 683513', 'Jaya Tourist Home North Paravur', '                                                                                                                                                                                                                                                                                                Monday to Friday 9am - 11pm', '0484-2442044', '', 'jayatouristhomenparavur@gmail.com', ' #', '#', ' #', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3927.393066516439!2d76.22457137429608!3d10.148669570460422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b081a80f8efa97b%3A0xe8e733d2800ea24a!2sJaya%20Tourist%20Home!5e0!3m2!1sen!2sin!4v1792751745556!5m2!1sen!2sin', 'north_paravur'),
(3, '                                    Travellers Inn<br>\r\nNear KSRTC Bus Station<br>\r\nPerumbavoor ', 'Travellers Inn Perumbavoor', '                                                                        Monday to Friday 9am - 11pm', '+918921097359', ' ', 'hoteltravellersinn@gmail.com', '#', 'https://www.instagram.com/travellers_inn_pbvr/?igsh=MW96YWl3eGZveWNqYg%3D%3D', '#', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3927.852829765326!2d76.48014407384287!3d10.11113027111506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b07e25f0c067555%3A0x6a0305587655d53f!2sHotel%20Travellers%20Inn!5e0!3m2!1sen!2sus!4v1711008186718!5m2!1sen!2sus', 'perumbavoor'),
(4, '                                                                        Rose Residency<br>\r\nMadayikonam P.O<br>\r\nMapranam <br>\r\nIrinjalakuda<br>\r\nThrissur, 680712                                    ', 'Rose Residency Irinjalakuda', '                                                                                           Monday to Friday 9am - 11pm                 ', '+91-480 2826 727', '+918547106727, +91 9947837309', 'rrm969@gmail.com', '', '', '', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3924.6505586259154!2d76.220261!3d10.3698!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba7f6fea6365511%3A0x53179628a69ae6!2sROSE%20RESIDENCY!5e0!3m2!1sen!2sin!4v1711522384854!5m2!1sen!2sin', 'irinjalakuda'),
(5, '                                    NH 213, Shanti Nagar,<br> Perintalmanna,<br> Kerala 679322', 'Rose Residency Perinthalmanna', '                                    Monday to Friday 9am - 11pm', '+914933222650', '', 'roseresidencypmna@gmail.com', '#', 'https://www.instagram.com/roseresidency.mapranam09/?igsh=MXBhcmN2d2lpZnc4ag%3D%3D', '#', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.8624225736!2d76.23308257385457!3d10.97375545552533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba7cdaf6575ec73%3A0x8c498716562f9f48!2sRose%20Residency.!5e0!3m2!1sen!2sin!4v1712472499176!5m2!1sen!2sin', 'perinthalmanna');

-- --------------------------------------------------------

--
-- Table structure for table `rose_facilities`
--

CREATE TABLE `rose_facilities` (
  `service_id` int NOT NULL,
  `service_title` varchar(100) NOT NULL,
  `service_content` varchar(5000) NOT NULL,
  `service_img` varchar(200) NOT NULL,
  `hotel_id` varchar(100) NOT NULL,
  `service_status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rose_facilities`
--

INSERT INTO `rose_facilities` (`service_id`, `service_title`, `service_content`, `service_img`, `hotel_id`, `service_status`) VALUES
(9, 'Our Facilities', '<p class=\"lead\">FACILITIES & AMENITIES PROVIDED ON COMPLIMENTARY BASIS</p>\r\n<p>Breakfast (Indian & Continental) Bottled \r\nMineral Water (1000ML for per guest) Mini Fridge, Toilet Soap, Dental \r\nKit. Comb, Shampoo, Moisturizer, Shoe Shine Strip, All purpose kit. Free\r\n Internet Access, Daily Newspaper, Hair Dryer, Left Luggage keeping \r\nfacility, Coffee Maker Guest Stationary, Valet Parking facility, Shaving\r\n Kit, Shower Cap, Foreign Exchange, Multi-Cuisine Restaurant Along With \r\nIt High Quality Guest Amenities and Multi Channel TV Entertainments can \r\nbe enjoyed. Guests Can Request For Wheel Chair, Wake Up Call Service, \r\nFirst aid Kit etc.</p>', 'WhatsApp_Image_12.jpeg', 'north_paravur', 1),
(11, 'Our Facilities', '<p class=\"lead\">FACILITIES &amp; AMENITIES PROVIDED ON COMPLIMENTARY BASIS</p>\r\n<p>Breakfast (Indian &amp; Continental) Bottled \r\nMineral Water (1000ML for per guest) Mini Fridge, Toilet Soap, Dental \r\nKit. Comb, Shampoo, Moisturizer, Shoe Shine Strip, All purpose kit. Free\r\n Internet Access, Daily Newspaper, Hair Dryer, Left Luggage keeping \r\nfacility, Coffee Maker Guest Stationary, Valet Parking facility, Shaving\r\n Kit, Shower Cap, Foreign Exchange, Multi-Cuisine Restaurant Along With \r\nIt High Quality Guest Amenities and Multi Channel TV Entertainments can \r\nbe enjoyed. Guests Can Request For Wheel Chair, Wake Up Call Service, \r\nFirst aid Kit etc.</p><p></p>', 'lobby.jpg', 'perumbavoor', 1),
(13, 'Our Facilities', '<div class=\"twelve columns b0\">Rose Residency situated near to Maparanam, near to Thrissur in the middle part of God\'s own Country Kerala. Here you can get comfort and tranquility for pleasure and business dealings. Multi-specialty and unmatched hospitality is our passion.<br><br>This is a correct choice family friends or business tycoons for their business purpose and family for their pleasure trips. We cordially invite you to come and stay and experience our marvelous hospitality.</div><div class=\"twelve columns b0\"><br></div><h4><u>Rest and Relax</u></h4><div class=\"twelve columns b0\">Our rooms \r\nare giving excellent aesthetic view and its environment is marvelous. We\r\n offer all services such as transportation. ticketing, sight seeing in \r\naddition to very good accommodation and conference facilities.<br>Designed\r\n skillfully to provide maximum space and comfort. All rooms are adorned \r\nwith alluring decor and equally designed with all modern interiors.<br></div><div class=\"twelve columns b0\"><u><br></u></div><h3 class=\"twelve columns b0\"><u>Places to Visit</u></h3><div class=\"twelve columns b0\"><br>1. The Cheraman Juma Mosque in Methala, Kodungallur is a legend claims that it was built in 629 AD, which makes it the first Mosque in India and the oldest Mosque in the Indian subcontinent.<br><br>2. Vadakkunnathan Temple is an ancient Hindu temple dedicated to Shiva at city of Thrissur, of Kerala state in India. This temple is a classic example of the architectural style of Kerala and has monumental towers on all four sides and also a kuttambalam. Mural paintings depicting various episodes from Mahabharata can be seen inside the temple. The shrines and the Kuttambalam display vignettes carved in wood. The temple, along with the mural paintings, has been declared as a National Monument by India under the AMASR Act. According to popular local lore, this is the first temple built by Parasurama, the sixth avatar of Vishnu. Thekkinkadu maidan, encircling the Vadakkunnathan Temple, is the main venue of the Thrissur Pooram.<br><br>3. Holy cross (Mar sleeva syro-malabar Church, Mapranam) Thrissur located in 4 km. It is notable as the unique position in the history of worship places in the world, 1081 years of oldness and tradition. A secular monument and is the only church in India having three holy relics.<br><br>4. Athirappilly Water Falls is situated in Thrissur District of Kerala. Which originates from the upper reaches of the Western Ghats and the entrance to the Sholayar ranges. It is the largest waterfalls in Kerala. Which stands tall at 80 feet. Just a short drive from Athirappilly to the Vazhachal falls. Which is close to dense green forests that are home to many endangered and endemic species of flora and fauma. There is another waterfall on the way from Athirappilly to Vazhachal falls in close proximity to the road. Which is locally called \"Chapra Falls\". Athirappilly Falls is the largest waterfall in Kerala and is nicknamed \"The Niagra of India\".<br><br><br></div><div class=\"twelve columns b0\"><br></div>', '51.jpg', 'irinjalakuda', 1),
(14, 'Our Facilities', '<p class=\"lead\">FACILITIES &amp; AMENITIES PROVIDED ON COMPLIMENTARY BASIS</p><p>Breakfast (Indian &amp; Continental) Bottled \r\nMineral Water (1000ML for per guest) Mini Fridge, Toilet Soap, Dental \r\nKit. Comb, Shampoo, Moisturizer, Shoe Shine Strip, All purpose kit. Free\r\n Internet Access, Daily Newspaper, Hair Dryer, Left Luggage keeping \r\nfacility, Coffee Maker Guest Stationary, Valet Parking facility, Shaving\r\n Kit, Shower Cap, Foreign Exchange, Multi-Cuisine Restaurant Along With \r\nIt High Quality Guest Amenities and Multi Channel TV Entertainments can \r\nbe enjoyed. Guests Can Request For Wheel Chair, Wake Up Call Service, \r\nFirst aid Kit etc.</p><p><br></p>', '18.jpg', 'perinthalmanna', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rose_gallery`
--

CREATE TABLE `rose_gallery` (
  `gallery_id` int NOT NULL,
  `hotel_id` varchar(100) NOT NULL,
  `gallery_img` varchar(300) NOT NULL,
  `project_title` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rose_gallery`
--

INSERT INTO `rose_gallery` (`gallery_id`, `hotel_id`, `gallery_img`, `project_title`) VALUES
(26, 'perumbavoor', 'Restaurant22.jpg', 'Hotel Travellers Inn'),
(27, 'perumbavoor', 'Restaurant-(77).jpg', 'Hotel Travellers Inn'),
(28, 'perumbavoor', 'Reception(22).jpg', 'Hotel Travellers Inn'),
(29, 'perumbavoor', 'Reception-door1.jpg', 'Hotel Travellers Inn'),
(30, 'perumbavoor', 'Reception-(g).jpg', 'Hotel Travellers Inn'),
(31, 'perumbavoor', 'Out-door2.jpg', 'Hotel Travellers Inn'),
(32, 'perumbavoor', 'lobby-(33).jpg', 'Hotel Travellers Inn'),
(33, 'perumbavoor', 'Lobby1.jpg', 'Hotel Travellers Inn'),
(34, 'perumbavoor', 'Delux-room1.jpg', 'Hotel Travellers Inn'),
(35, 'perumbavoor', 'Delux-room-(12).jpg', 'Hotel Travellers Inn'),
(36, 'perumbavoor', 'Delux-room-(7).jpg', 'Hotel Travellers Inn'),
(37, 'perumbavoor', 'Delux-room-21.jpg', 'Hotel Travellers Inn'),
(38, 'perumbavoor', 'corridoor(11).jpg', 'Hotel Travellers Inn'),
(39, 'perumbavoor', 'Conference-hall(1).jpg', 'Hotel Travellers Inn'),
(40, 'perumbavoor', 'Delux-room-1(1).jpg', 'Hotel Travellers Inn'),
(41, 'perumbavoor', 'Delux-room-11.jpg', 'Hotel Travellers Inn'),
(42, 'perumbavoor', 'corridoor1.jpg', 'Hotel Travellers Inn'),
(43, 'perumbavoor', 'Conference-hall23.jpg', 'Hotel Travellers Inn'),
(44, 'perumbavoor', 'Conference-hall3.jpg', 'Hotel Travellers Inn'),
(45, 'perumbavoor', 'conference-hall2.jpg', 'Hotel Travellers Inn'),
(46, 'irinjalakuda', '18.jpg', 'Rose Residency Irinjalakuda'),
(47, 'irinjalakuda', '2.jpg', 'Rose Residency Irinjalakuda'),
(48, 'irinjalakuda', '31.jpg', 'Rose Residency Irinjalakuda'),
(49, 'irinjalakuda', '41.jpg', 'Rose Residency Irinjalakuda'),
(50, 'irinjalakuda', '51.jpg', 'Rose Residency Irinjalakuda'),
(51, 'irinjalakuda', '61.jpg', 'Rose Residency Irinjalakuda'),
(52, 'irinjalakuda', '71.jpg', 'Rose Residency Irinjalakuda'),
(53, 'irinjalakuda', '81.jpg', 'Rose Residency Irinjalakuda'),
(54, 'irinjalakuda', '91.jpg', 'Rose Residency Irinjalakuda'),
(55, 'irinjalakuda', '101.jpg', 'Rose Residency Irinjalakuda'),
(56, 'irinjalakuda', '111.jpg', 'Rose Residency Irinjalakuda'),
(57, 'irinjalakuda', '121.jpg', 'Rose Residency Irinjalakuda'),
(58, 'irinjalakuda', '131.jpg', 'Rose Residency Irinjalakuda'),
(59, 'perinthalmanna', '110.jpg', 'Rose Residency Perinthalmanna'),
(60, 'perinthalmanna', '21.jpg', 'Rose Residency Perinthalmanna'),
(61, 'perinthalmanna', '32.jpg', 'Rose Residency Perinthalmanna'),
(62, 'perinthalmanna', '42.jpg', 'Rose Residency Perinthalmanna'),
(63, 'perinthalmanna', '52.jpg', 'Rose Residency Perinthalmanna'),
(64, 'perinthalmanna', '62.jpg', 'Rose Residency Perinthalmanna'),
(65, 'perinthalmanna', '72.jpg', 'Rose Residency Perinthalmanna'),
(66, 'perinthalmanna', '73.jpg', 'Rose Residency Perinthalmanna'),
(67, 'perinthalmanna', '82.jpg', 'Rose Residency Perinthalmanna'),
(68, 'perinthalmanna', '92.jpg', 'Rose Residency Perinthalmanna'),
(69, 'perinthalmanna', '102.jpg', 'Rose Residency Perinthalmanna'),
(70, 'perinthalmanna', '112.jpg', 'Rose Residency Perinthalmanna'),
(71, 'perinthalmanna', '122.jpg', 'Rose Residency Perinthalmanna'),
(72, 'perinthalmanna', '132.jpg', 'Rose Residency Perinthalmanna'),
(73, 'perinthalmanna', '141.jpg', 'Rose Residency Perinthalmanna'),
(74, 'perinthalmanna', '151.jpg', 'Rose Residency Perinthalmanna'),
(75, 'perinthalmanna', '171.jpg', 'Rose Residency Perinthalmanna'),
(76, 'perinthalmanna', '181.jpg', 'Rose Residency Perinthalmanna'),
(77, 'perinthalmanna', '191.jpg', 'Rose Residency Perinthalmanna'),
(78, 'perinthalmanna', '20.jpg', 'Rose Residency Perinthalmanna'),
(79, 'perinthalmanna', '211.jpg', 'Rose Residency Perinthalmanna'),
(80, 'perinthalmanna', '22.jpg', 'Rose Residency Perinthalmanna'),
(81, 'perinthalmanna', '23.jpg', 'Rose Residency Perinthalmanna'),
(82, 'perinthalmanna', '24.jpg', 'Rose Residency Perinthalmanna'),
(83, 'perinthalmanna', '25.jpg', 'Rose Residency Perinthalmanna'),
(84, 'perinthalmanna', '26.jpg', 'Rose Residency Perinthalmanna'),
(85, 'perinthalmanna', '27.jpg', 'Rose Residency Perinthalmanna'),
(86, 'perinthalmanna', '28.jpg', 'Rose Residency Perinthalmanna'),
(122, 'north_paravur', 'WhatsApp_Image_5.jpeg', 'Jaya Tourist Home'),
(123, 'north_paravur', 'WhatsApp_Image_9.jpeg', 'Jaya Tourist Home'),
(124, 'north_paravur', 'WhatsApp_Image_4.jpeg', 'Jaya Tourist Home'),
(121, 'north_paravur', 'WhatsApp_Image_8.jpeg', 'Jaya Tourist Home'),
(125, 'north_paravur', 'WhatsApp_Image_3.jpeg', 'Jaya Tourist Home'),
(126, 'north_paravur', 'WhatsApp_Image_6.jpeg', 'Jaya Tourist Home'),
(127, 'north_paravur', 'WhatsApp_Image_2.jpeg', 'Jaya Tourist Home'),
(128, 'north_paravur', 'WhatsApp_Image_101.jpeg', 'Jaya Tourist Home'),
(118, 'north_paravur', 'WhatsApp_Image_12.jpeg', 'Jaya Tourist Home'),
(119, 'north_paravur', 'WhatsApp_Image_11.jpeg', 'Jaya Tourist Home'),
(116, 'north_paravur', 'rrslider.jpg', 'Jaya Tourist Home'),
(117, 'north_paravur', 'Modern_Building_Courtyard_at_Dusk.jpg', 'Jaya Tourist Home');

-- --------------------------------------------------------

--
-- Table structure for table `rose_servicelist`
--

CREATE TABLE `rose_servicelist` (
  `servicelist_id` int NOT NULL,
  `servicelist_title` varchar(200) NOT NULL,
  `servicelist_desc` varchar(300) NOT NULL,
  `hotel_id` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rose_servicelist`
--

INSERT INTO `rose_servicelist` (`servicelist_id`, `servicelist_title`, `servicelist_desc`, `hotel_id`) VALUES
(1, 'A/C and Non AC Rooms', '<p>We provide well decorated A/c and Non-A/c Rooms for your complete relaxation. <br></p>', 'north_paravur'),
(2, 'Running Hot & Cold water ', '<p><br></p><div class=\"acc-content open-content\" style=\"display: block;\">\r\n                                                        We have running hot &amp; cold water to keep you refreshed.\r\n                                                    </div><p><br></p>', 'north_paravur'),
(3, 'Laundry Service ', '<p>We provide laundry services to keep your clothes clean, neat and tidy.\r\n                                                    <br></p>', 'north_paravur'),
(4, 'Internet Facility ', '<p>For always keep you connected.\r\n                                                    <br></p>', 'north_paravur'),
(5, 'Travel Desk ', '<p>Helps you to reach your favorite destinations.\r\n                                                    <br></p>', 'north_paravur'),
(6, 'Multi Cusine A/c Restaurant ', '<p>Enjoy the taste of Kerala.\r\n                                                    <br></p>', 'north_paravur'),
(7, '24 Hours Room Service ', '<p>We are happy to help you at any time.\r\n                                                    <br></p>', 'north_paravur'),
(8, 'TV with Cable ', '<p>To keep you entertained.\r\n                                                    <br></p>', 'north_paravur'),
(9, 'Direct Dialling from Rooms ', '<p>Want help...? We are one call away...\r\n                                                    <br></p>', 'north_paravur'),
(10, 'A/c Conference Hall ', '<p>For your business needs.\r\n                                                    <br></p>', 'north_paravur'),
(11, 'Safe Deposit Locker ', '<p><br></p><div class=\"acc-content open-content\" style=\"display: block;\">\r\n                                                        For keeping your precious belongings safe.\r\n                                                    </div><p><br></p>', 'north_paravur'),
(12, 'A/c and Non-A/c Rooms ', '<p>We provide well decorated A/c and Non-A/c Rooms for your complete relaxation.\r\n                                                    <br></p>', 'perumbavoor'),
(13, 'Running Hot & Cold water ', '<p>We have running hot &amp; cold water to keep you refreshed.\r\n                                                    <br></p>', 'Choose...'),
(14, 'Running Hot & Cold water ', '<p>We have running hot &amp; cold water to keep you refreshed.\r\n                                                    <br></p>', 'perumbavoor'),
(15, 'Laundry Service ', '<p>We provide laundry services to keep your clothes clean, neat and tidy.\r\n<br></p>', 'perumbavoor'),
(16, 'Internet Facility', '<p>For always keep you connected.\r\n                                                    <br></p>', 'perumbavoor'),
(17, 'Travel Desk ', '<p>Helps you to reach your favorite destinations.\r\n                                                    <br></p>', 'perumbavoor'),
(18, 'Multi Cusine A/c Restaurant ', '<p>Enjoy the taste of Kerala.\r\n                                                    <br></p>', 'perumbavoor'),
(19, '24 Hours Room Service ', '<p>We are happy to help you at any time.\r\n                                                    <br></p>', 'perumbavoor'),
(20, 'TV with Cable ', '<p>To keep you entertained.\r\n                                                    <br></p>', 'perumbavoor'),
(21, 'Direct Dialling from Rooms ', '<p>Want help...? We are one call away...\r\n                                                    <br></p>', 'perumbavoor'),
(22, 'A/c Conference Hall ', '<p>For your business needs.\r\n                                                    <br></p>', 'perumbavoor'),
(23, 'Safe Deposit Locker ', '<p>For keeping your precious belongings safe.</p>', 'perumbavoor');

-- --------------------------------------------------------

--
-- Table structure for table `rose_services`
--

CREATE TABLE `rose_services` (
  `products_title` varchar(100) NOT NULL,
  `products_caption` varchar(10000) NOT NULL,
  `products_img` varchar(200) NOT NULL,
  `products_id` int NOT NULL,
  `hotel_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rose_services`
--

INSERT INTO `rose_services` (`products_title`, `products_caption`, `products_img`, `products_id`, `hotel_id`) VALUES
('Jaya Tourist Home North Paravur', '<p class=\"lead\">FEEL THE REAL HAPPINESS</p>\r\n                            <p>We, Jaya Tourist Home is at your services. Status wise, this Hotel with utmost perfection and cleanliness for serving our valued Guests, who is visiting North Paravur and Ernakulam. We are not lf praising, but ours is one of the best luxurious hotel available in the middle of God’s Own Country i.e. Kerala. Another attraction to us is that this is an affordable Hotel for the common man. When you really stay in our Hotel you can enjoy the beauty and the environment. If you stay once in our Hotel we are sure you will continue to stay here whenever you are at Kerala. Business or pleasure, we are sure you will cherish the enchanting environ of Jaya Tourist Home.Jaya Tourist Home catered to your every needs and necessity with utmost care and ensuring your utmost comfort and hospitality. The charming and aesthetics views, wll lead to relax in great comfort, entertain in style and do your business with international style.\r\n                            Great Welcome to Jaya Tourist Home</p>', 'WhatsApp_Image_11.jpeg', 1, 'north_paravur'),
('Travellers Inn ', '<p>We, Travellers Inn  is   at your  services.   Status wise, this\r\n Hotel with utmost perfection and cleanliness for serving our valued \r\nGuests, who is visiting Perumbavoor and Ernakulam. We  are not if \r\npraising, but ours is one of the best luxurious  hotel available in the \r\nmiddle of God’s Own Country i.e. Kerala.   Another attraction to us is \r\nthat  this is an  affordable  Hotel  for  the common man.  When you \r\nreally stay in our Hotel you  can enjoy  the beauty and  the \r\nenvironment.  If you stay once  in our Hotel  we are sure you will \r\ncontinue to stay here whenever you are at Kerala.  Business or pleasure,\r\n  we are sure you will cherish the enchanting environs of Travellers Inn.</p><p>Travellers Inn \r\n catered to your every needs and necessity with  utmost care  and \r\nensuring  your utmost comfort and hospitality.  The  charming and \r\naesthetics views, will lead to  relax in great comfort, entertain in \r\nstyle and do your business  with international style.</p><p><br></p>', 'perumbavoor.jpg', 2, 'perumbavoor'),
('Perinthalmanna', '<p>We, ROSE RESIDENCY  is   at your  services.  Status wise, this Hotel \r\nwith utmost perfection and cleanliness for serving our valued Guests, \r\nwho is visiting Perinthalmanna and Malappuram. We  are not lf praising, \r\nbut ours is one of the best luxurious  hotel available in the middle of \r\nGod’s Own Country i.e. Kerala.   Another attraction to us is that  this \r\nis an  affordable  Hotel  for  the common man.  When you really stay in \r\nour Hotel you  can enjoy  the beauty and  the environment.  If you stay \r\nonce  in our Hotel  we are sure you will continue to stay here whenever \r\nyou are at Kerala.  Business or pleasure,  we are sure you will cherish \r\nthe enchanting environ of Rose Residency.</p><p>Rose Residency  \r\ncatered to your every needs and necessity with  utmost care  and \r\nensuring  your utmost comfort and hospitality.  The  charming and \r\naesthetics views, wll lead to  relax in great comfort, entertain in \r\nstyle and do your business  with international style.</p><p>Great Welcome to <strong>ROSE RESIDENCY...</strong></p><p><br></p>', 'perithalmanna.jpg', 3, 'perinthalmanna'),
('Irinjalakuda', '<p>We, ROSE RESIDENCY  is   at your  services.   Status wise, this Hotel\r\n with utmost perfection and cleanliness for serving our valued Guests, \r\nwho is visiting Irinjalakuda and Trissur. We  are not lf praising, but \r\nours is one of the best luxurious  hotel available in the middle of \r\nGod’s Own Country i.e. Kerala.   Another attraction to us is that  this \r\nis an  affordable  Hotel  for  the common man.  When you really stay in \r\nour Hotel you  can enjoy  the beauty and  the environment.  If you stay \r\nonce  in our Hotel  we are sure you will continue to stay here whenever \r\nyou are at Kerala.  Business or pleasure,  we are sure you will cherish \r\nthe enchanting environ of Rose Residency.</p><p>Rose Residency  \r\ncatered to your every needs and necessity with  utmost care  and \r\nensuring  your utmost comfort and hospitality.  The  charming and \r\naesthetics views, wll lead to  relax in great comfort, entertain in \r\nstyle and do your business  with international style.</p><p>Great Welcome to <strong>ROSE RESIDENCY...</strong></p><p><br></p>', 'rriabout.jpg', 4, 'irinjalakuda'),
('Thrissur', '', '', 5, 'thrissur');

-- --------------------------------------------------------

--
-- Table structure for table `rose_slider`
--

CREATE TABLE `rose_slider` (
  `slider_id` int NOT NULL,
  `slider_title` varchar(100) NOT NULL,
  `slider_caption` varchar(200) NOT NULL,
  `slider_img` varchar(200) NOT NULL,
  `hotel_id` varchar(100) NOT NULL,
  `slider_status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rose_slider`
--

INSERT INTO `rose_slider` (`slider_id`, `slider_title`, `slider_caption`, `slider_img`, `hotel_id`, `slider_status`) VALUES
(2, 'Jaya Tourist Home North Paravur', ' A Unique Experience Where To Stay', 'Modern_Building_Courtyard_at_Dusk.jpg', 'home', 1),
(3, 'Jaya Tourist Home North Paravur', '  A Unique Experience Where To Stay', 'Luxury_Reception_Lobby_with_Geometric_Lighting.jpg', 'home', 1),
(4, 'Enjoy the Luxury Hotel Experience', 'A unique Experience where to stay', 'rrslider.jpg', 'north_paravur', 1),
(5, 'Enjoy the Luxury Hotel Experience', 'A unique Experience where to stay', 'Front_view.JPG', 'perumbavoor', 1),
(6, 'Rose Residency Irinjalakuda', 'Enjoy the Luxury Hotel Experience', '12.jpg', 'irinjalakuda', 1),
(8, 'Rose Residency Irinjalakuda', 'Enjoy the Luxury Hotel Experience', '11.jpg', 'home', 1),
(9, 'Rose Residency Perinthalmanna', 'Enjoy the Luxury Hotel Experience', '3.jpg', 'perinthalmanna', 1),
(10, 'Rose Residency Perinthalmanna', 'A unique Experience where to stay', '31.jpg', 'home', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rose_tariff`
--

CREATE TABLE `rose_tariff` (
  `tariff_id` int NOT NULL,
  `tariff_title` varchar(100) NOT NULL,
  `tariff_desc` text NOT NULL,
  `hotel_id` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rose_testi`
--

CREATE TABLE `rose_testi` (
  `testi_id` int NOT NULL,
  `testi_name` varchar(100) NOT NULL,
  `testi_place` varchar(200) NOT NULL,
  `testi_content` varchar(5000) NOT NULL,
  `testi_img` varchar(200) NOT NULL,
  `hotel_id` varchar(100) NOT NULL,
  `testi_status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `settings_id` int NOT NULL,
  `type` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`settings_id`, `type`, `description`) VALUES
(1, 'system_name', 'Rose Residency'),
(2, 'system_title', 'Rose Residency');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `subcategory_id` int NOT NULL,
  `subcategory_name` varchar(200) NOT NULL,
  `subcategory_desc` text NOT NULL,
  `subcategory_img` varchar(300) NOT NULL,
  `subcategory_status` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcategory_id`, `subcategory_name`, `subcategory_desc`, `subcategory_img`, `subcategory_status`) VALUES
(1, 'Malankara Dam', '<p>Malankara dam is a gravity dam constructed across Muvattupuzha river for\r\n irrigation purposes. The dam is constructed to make use of the tail \r\nwater from the Moolamattom power house. The project runs under the \r\nMuvattupuzha Valley Irrigation Project and KSEB. \r\n								The artificial lake covers an area of around 11 square km.</p><p><b>30 mtr away from Damview Holidays \r\n                                 \r\n                            </b><br></p>', 'malankara.jpg', 1),
(9, 'Kottapara', '<p>The view from Kottapara is astounding to enthral all your senses, the \r\nbest so far for me. Kottapara view point can be accessed easily from \r\nMuvattupuzha, Thodupuzha and Kothamangalam. To reach Kottapara take \r\nVannappuram towards the Mullaringad road.\r\n								It is a well known picnic spot among people here.  </p><p><b>29.8 km away from Damview Holidays\r\n                               \r\n                            </b><br></p>', 'kottappara-hills.jpg', 1),
(8, 'Ilaveezha Poonchira', '<p>Known as the land of letters, latex and lakes, Kottayam is among the \r\nmost prominent districts in Kerala. Here lies the beautiful valley of \r\nIlaveezhapoonchira, one amongst the many prime picnicking spots in the \r\narea. The beautiful hillocks near Kanjar are known to have great trails \r\nfor trekking.\r\n									The view in itself is breath-taking. \r\n.\r\n\r\n </p><p><b>17 km away Damview Holidays                           \r\n                                   \r\n                                </b><br></p>', 'ilaveezha-poonchira.jpg', 1),
(10, 'Thommankuth', '<p>Thommankuthu is a waterfall located in Thodupuzha Thaluk in Idukki \r\nDistrict of the southern state of Kerala, India. It is popular tourist \r\nspot in the state and one the major centres of eco-tourism in Kerala. \r\n									It situated in the southern part of Western Ghats mountain \r\nrange</p><p><b>25.1 km away from Damview Holidays\r\n                                     \r\n                                </b><br></p>', 'thommankuthu.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `country` int NOT NULL,
  `created_at` datetime NOT NULL,
  `status` int NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `mobile`, `password`, `country`, `created_at`, `status`, `role`) VALUES
(1, 'Super', 'Admin', 'admin1@admin.com', '0100 500 600', 'ece4f77e9124248102753e00a51a28fa', 14, '2021-07-02 14:51:38', 1, 'admin'),
(16, 'Esther', 'User', 'teacher@teacher.com', '08053433', '8d788385431273d11e8b43bb78f3aa41', 11, '2021-07-02 14:51:38', 0, 'user'),
(17, 'New Admin', 'New Admin', 'admin@admin.com', '08053433', '81dc9bdb52d04dc20036dbd8313ed055', 126, '2019-02-27 23:51:25', 1, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user_power`
--

CREATE TABLE `user_power` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `power_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `user_power`
--

INSERT INTO `user_power` (`id`, `name`, `power_id`) VALUES
(2, 'edit', 2),
(3, 'delete', 3),
(4, 'add', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `action` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `user_id`, `action`) VALUES
(1, 11, 1),
(2, 11, 3),
(3, 13, 2),
(4, 14, 1),
(5, 14, 3),
(6, 15, 1),
(7, 15, 3),
(11, 16, 1),
(12, 16, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `rose_about`
--
ALTER TABLE `rose_about`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `rose_category`
--
ALTER TABLE `rose_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `rose_contact`
--
ALTER TABLE `rose_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `rose_facilities`
--
ALTER TABLE `rose_facilities`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `rose_gallery`
--
ALTER TABLE `rose_gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `rose_servicelist`
--
ALTER TABLE `rose_servicelist`
  ADD PRIMARY KEY (`servicelist_id`);

--
-- Indexes for table `rose_services`
--
ALTER TABLE `rose_services`
  ADD PRIMARY KEY (`products_id`);

--
-- Indexes for table `rose_slider`
--
ALTER TABLE `rose_slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `rose_tariff`
--
ALTER TABLE `rose_tariff`
  ADD PRIMARY KEY (`tariff_id`);

--
-- Indexes for table `rose_testi`
--
ALTER TABLE `rose_testi`
  ADD PRIMARY KEY (`testi_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`settings_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`subcategory_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_power`
--
ALTER TABLE `user_power`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rose_about`
--
ALTER TABLE `rose_about`
  MODIFY `about_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rose_category`
--
ALTER TABLE `rose_category`
  MODIFY `category_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `rose_contact`
--
ALTER TABLE `rose_contact`
  MODIFY `contact_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rose_facilities`
--
ALTER TABLE `rose_facilities`
  MODIFY `service_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `rose_gallery`
--
ALTER TABLE `rose_gallery`
  MODIFY `gallery_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `rose_servicelist`
--
ALTER TABLE `rose_servicelist`
  MODIFY `servicelist_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `rose_services`
--
ALTER TABLE `rose_services`
  MODIFY `products_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rose_slider`
--
ALTER TABLE `rose_slider`
  MODIFY `slider_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `rose_tariff`
--
ALTER TABLE `rose_tariff`
  MODIFY `tariff_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rose_testi`
--
ALTER TABLE `rose_testi`
  MODIFY `testi_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `settings_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `subcategory_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_power`
--
ALTER TABLE `user_power`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
