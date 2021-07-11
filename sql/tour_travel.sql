-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2021 at 07:28 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tour_travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `ID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`ID`, `username`, `password`) VALUES
(1, 'admin', 'Test@123'),
(2, 'Ajay', '12345678'),
(3, 'Rohit', 'Rohit@123'),
(4, 'Sohan', 'xyz@123');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `ID` int(11) NOT NULL,
  `User Id` varchar(200) NOT NULL,
  `Place` varchar(255) NOT NULL,
  `Mode Of Travelling` varchar(255) NOT NULL,
  `Persons` int(11) NOT NULL,
  `Total Cost` int(11) NOT NULL,
  `Stay Cost` int(11) NOT NULL,
  `Food Cost` int(11) NOT NULL,
  `Travelling Cost` int(11) NOT NULL,
  `Travelling Date` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`ID`, `User Id`, `Place`, `Mode Of Travelling`, `Persons`, `Total Cost`, `Stay Cost`, `Food Cost`, `Travelling Cost`, `Travelling Date`, `status`) VALUES
(1, 'abc@mail.com', 'Lotus Temple', 'Train', 5, 4000, 1000, 1000, 2000, '2021-02-05', 'No'),
(2, 'jyoti@gmail.com', 'Nainital', 'Bus', 5, 8000, 2000, 3000, 3000, '2021-01-19', 'Yes'),
(3, 'rk@gmail.com', 'Lotus Temple', 'Train', 5, 4000, 1000, 1000, 2000, '2021-01-21', 'Yes'),
(4, 'jyoti@gmail.com', 'Taj Mahal', 'Flight', 4, 7000, 2000, 2000, 3000, '2021-01-14', 'Yes'),
(14, 'jyoti@gmail.com', 'Nainital', 'Bus', 6, 6000, 2000, 2000, 2000, '2021-01-13', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` char(10) NOT NULL,
  `password` varchar(200) NOT NULL,
  `Image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `name`, `email`, `contact`, `password`, `Image`) VALUES
(1, 'Jyoti', 'jyoti@gmail.com', '9895859581', '12345', '../image/c3.jpg'),
(2, 'Rohit', 'xyz@gmail.com', '9780374941', '12345678', '../image/c1.jpg'),
(3, 'Happy ', 'rk@gmail.com', '9780374941', '123456', '../image/c2.png'),
(6, 'Mohit ', 'mohit123@gmail.com', '9831227861', 'Mohit#123', '../image/c1.jpg'),
(38, 'Ajit Singh', 'ajit34@gmail.com', '8970234567', 'Ajit@123', '../image/c7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Feedback` varchar(500) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`ID`, `Name`, `Email`, `Feedback`, `Date`) VALUES
(1, 'hello', 'abc@gamil.com', 'Very Good site		', '2020-12-08'),
(2, 'Jyoti', 'jyoti@gamil.com', 'Need More Change		', '2020-12-09'),
(3, 'John', 'john123@gamil.com', 'Need more package 		', '2020-12-02'),
(4, 'Jiva', 'jiva@gamil.com', 'Booking is very easy	', '2021-01-19'),
(5, 'joa', 'jo@gmail.com', 'show all package according to database		', '2020-12-08'),
(9, 'Raja', 'abc@gamil.com', 'Good Morning		', '2021-01-03');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `Id` int(11) NOT NULL,
  `Place` varchar(255) NOT NULL,
  `Number of adults` int(11) NOT NULL,
  `Number Of children` int(11) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Stay_amount` int(11) NOT NULL,
  `Food_amount` int(11) NOT NULL,
  `Bus_amount` int(11) NOT NULL,
  `Train_amount` int(11) NOT NULL,
  `Airline_amount` int(11) NOT NULL,
  `Number of days` int(11) NOT NULL,
  `Number of nights` int(11) NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`Id`, `Place`, `Number of adults`, `Number Of children`, `Description`, `Stay_amount`, `Food_amount`, `Bus_amount`, `Train_amount`, `Airline_amount`, `Number of days`, `Number of nights`, `Image`) VALUES
(1, 'Lotus Temple', 3, 2, 'The Lotus Temple (also known as Kamal Mandir)  in Delhi is a matchless architectural marvel and one of the prime tourist attractions of the National Capital. Shaped in the form of a spectacular lotus with white petals, it makes for a break-taking sight and attracts countless visitors throughout the year. Unlike most other places of worship, this temple or Bahai House of Worship does not allow ritualistic ceremonies and has no fixed pattern to conduct worship. A glorious symbol of oneness, this p', 1000, 1000, 2000, 2000, 3000, 1, 1, 'image/1.jpg'),
(2, 'Taj Mahal', 2, 2, 'The Taj Mahal is an ivory-white marble mausoleum on the southern bank of the river Yamuna in the Indian city of Agra', 2000, 2000, 1000, 2000, 3000, 2, 2, 'image/4.jpg'),
(3, 'Hussain Sagar Lake', 3, 2, 'Hussain Sagar is a heart-shaped lake in Hyderabad, Telangana, built by Ibrahim Quli Qutb Shah in 1563. It is spread across an area of 5.7 square kilometers and is fed by the River Musi. A large monolithic statue of the Gautama Buddha, erected in 1992, stands on Gibraltar Rock in the middle of the lake.', 2000, 2000, 3000, 3000, 5000, 2, 1, 'image/sagar.jpg'),
(4, 'Nainital', 3, 3, 'Nainital Lake, also known as Naini Lake a natural freshwater body, situated amidst the township of Nainital in Kumaon, tectonic in origin, is kidney shaped or crescent shaped and has an outfall at the southeastern end.', 2000, 2000, 2000, 2500, 4000, 2, 2, 'image/nainital-lake.jpg'),
(5, 'Arambol Beach', 4, 2, 'The newest beach developed in Goa, Arambol Beach is a part of a fisherman’s village, and attracts a number of tourists across the year. Arambol Beach is considered to be the most beautiful beaches in Goa, and borders the Mandrem Beach and Keri Beach on two sides.', 3000, 3000, 3000, 4000, 5000, 2, 2, 'image/arambol_beach.jpg'),
(6, 'Kaziranga National Park', 4, 3, 'Kaziranga National Park is a protected area in the northeast Indian state of Assam. Spread across the floodplains of the Brahmaputra River, its forests, wetlands and grasslands are home to tigers,', 2000, 2000, 3000, 2500, 4000, 3, 2, 'image/assam.jpg'),
(7, 'Udaipur', 3, 2, 'Udaipur, formerly the capital of the Mewar Kingdom, is a city in the western Indian state of Rajasthan.', 2000, 1000, 2000, 2000, 3000, 2, 1, 'image/udaipur.jpg'),
(8, 'Munnar Hills', 3, 2, 'Munnar is a town in the Western Ghats mountain range in India’s Kerala state.', 2000, 2000, 1000, 2000, 3000, 2, 2, 'image/kerala.jpg'),
(9, 'Manali', 3, 4, 'Manali is a high-altitude Himalayan resort town in India’s northern Himachal Pradesh state. ', 2000, 2000, 1000, 2000, 3000, 2, 1, 'image/3.jpg'),
(10, 'Gateway of India', 3, 4, 'The Gateway of India is an arch-monument built in the early twentieth century in the city of Mumbai, in the Indian state of Maharashtra.', 3000, 2000, 2000, 2000, 4000, 2, 1, 'image/gateway-of-India.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `cardno` text NOT NULL,
  `card` varchar(200) NOT NULL,
  `cvv` int(11) NOT NULL,
  `expiry` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Id`, `Username`, `cardno`, `card`, `cvv`, `expiry`) VALUES
(1, 'xyz@mail.com', '6774903451234123', 'Credit', 234, '03/2022'),
(2, 'abc@mail.com', '6774903451234145', 'Debit', 675, '09/2024'),
(3, 'jyoti@mail.com', '6774903451234156', 'Credit ', 675, '09/2023'),
(4, 'abc@mail.com', '6774903451234189', 'Credit', 234, '04/2022'),
(5, 'rk@gmail.com', '6774903451234234', 'Debit', 235, '01/2022'),
(6, 'abc@mail.com', '6774903451234145', 'Credit', 342, '05/2022'),
(7, 'raj@gmail.com', '6774903451234113', 'Debit', 123, '09/2024'),
(8, 'rk@gmail.com', '6774903451233456', 'Credit', 321, '08/2025'),
(9, 'jyoti@gmail.com', '6774903451234178', 'Debit', 347, '06/2023'),
(14, 'jyoti@gmail.com', '6784564631234564', 'Credit', 236, '09/2024');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
