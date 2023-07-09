-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2023 at 05:31 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pro_pic` varchar(255) NOT NULL DEFAULT 'avronil.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `pro_pic`) VALUES
(1, 'rajibdash', 'avronilrajib@gmail.com', 'Rajib1212', 'avronil.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE `business` (
  `id` int(255) NOT NULL,
  `picture` varchar(255) NOT NULL DEFAULT 'a.jpg',
  `news_title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `business`
--

INSERT INTO `business` (`id`, `picture`, `news_title`, `details`, `date`) VALUES
(1, 'd.jpg', 'this is test', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
Accusantium rerum distinctio delectus et veritatis ratione omnis tenetur sequi voluptatem ipsam voluptatum, 
iure, atque voluptatibus deserunt maiores quod reprehenderit. Dolor rem nesciunt consequuntur deserunt nihil
voluptates distinctio recusandae, possimus, magnam reiciendis rerum ratione officiis quisquam quo adipisci?
Est quasi in impedit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium rerum distinctio
delectus et veritatis ratione omnis tenetur sequi voluptatem ipsam voluptatum, iure, atque voluptatibus deserunt
maiores quod reprehenderit. Dolor rem nesciunt consequuntur deserunt nihil voluptates distinctio', '2023-07-03');

-- --------------------------------------------------------

--
-- Table structure for table `health`
--

CREATE TABLE `health` (
  `id` int(11) NOT NULL,
  `news_title` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL DEFAULT 'news.jpg',
  `details` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `health`
--

INSERT INTO `health` (`id`, `news_title`, `picture`, `details`, `date`) VALUES
(2, 'Food ', 'c.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
 Accusantium rerum distinctio delectus et veritatis ratione omnis tenetur sequi
voluptatem ipsam voluptatum, iure, atque voluptatibus deserunt maiores quod reprehenderit.
Dolor rem nesciunt consequuntur deserunt nihil voluptates distinctio recusandae, possimus,
magnam reiciendis rerum ratione officiis quisquam quo adipisci? Est quasi in impedit.
Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium rerum distinctio', '2023-07-03'),

(3, 'Health ', 'c.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
Accusantium rerum distinctio delectus et veritatis ratione omnis tenetur sequi voluptatem 
ipsam voluptatum, iure, atque voluptatibus deserunt maiores quod reprehenderit. Dolor rem 
nesciunt consequuntur deserunt nihil voluptates distinctio recusandae, possimus, magnam reiciendis
rerum ratione officiis quisquam quo adipisci? Est quasi in impedit. Lorem ipsum dolor sit amet 
consectetur adipisicing elit. Accusantium rerum distinctio', '2023-07-03');

-- --------------------------------------------------------

--
-- Table structure for table `politics`
--

CREATE TABLE `politics` (
  `id` int(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `news_title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `politics`
--

INSERT INTO `politics` (`id`, `picture`, `news_title`, `details`, `date`) VALUES
(1, 'g.jpeg', 'this is test', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
Accusantium rerum distinctio delectus et veritatis ratione omnis tenetur sequi voluptatem 
ipsam voluptatum, iure, atque voluptatibus deserunt maiores quod reprehenderit. Dolor rem 
nesciunt consequuntur deserunt nihil voluptates distinctio recusandae, possimus, magnam reiciendis 
rerum ratione officiis quisquam quo adipisci? Est quasi in impedit. Lorem ipsum dolor sit amet consectetur 
adipisicing elit. Accusantium rerum distinctio delectus et veritatis ratione omnis tenetur sequi voluptatem 
ipsam voluptatum, iure, atque voluptatibus deserunt maiores quod reprehenderit. Dolor rem nesciunt consequuntur 
deserunt nihil voluptates distinctio recusandae, possimus, magnam reiciendis rerum ratione officiis quisquam', '2023-07-03');

-- --------------------------------------------------------

--
-- Table structure for table `recent_post`
--

CREATE TABLE `recent_post` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `catagory` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sport`
--

CREATE TABLE `sport` (
  `id` int(255) NOT NULL,
  `news_title` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sport`
--

INSERT INTO `sport` (`id`, `news_title`, `picture`, `details`, `date`) VALUES
(9, 'Ludu Game', 'avronil.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
Accusantium rerum distinctio delectus et veritatis ratione omnis tenetur sequi voluptatem ipsam voluptatum, 
iure, atque voluptatibus deserunt maiores quod reprehenderit. Dolor rem nesciunt consequuntur deserunt nihil 
voluptates distinctio recusandae, possimus, magnam reiciendis rerum ratione officiis quisquam quo adipisci? Est 
quasi in impedit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium rerum distinctio delectus 
et veritatis ratione omnis tenetur sequi voluptatem ipsam voluptatum, iure, atque voluptatibus deserunt maiores 
quod reprehenderit. Dolor rem nesciunt consequuntur deserunt nihil voluptates distinctio recusandae, possimus, 
magnam reiciendis rerum ratione officiis quisquam', '2023-07-03'),

(11, 'Messi Boss', 'messi.jpeg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Accusantium rerum distinctio delectus et veritatis ratione omnis tenetur sequi voluptatem ipsam voluptatum, 
iure, atque voluptatibus deserunt maiores quod reprehenderit. Dolor rem nesciunt consequuntur deserunt nihil 
voluptates distinctio recusandae, possimus, magnam reiciendis rerum ratione officiis quisquam quo adipisci? Est 
quasi in impedit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium rerum distinctio delectus 
et veritatis ratione omnis tenetur sequi voluptatem ipsam voluptatum, iure, atque voluptatibus deserunt maiores 
quod reprehenderit. Dolor rem nesciunt consequuntur deserunt nihil voluptates distinctio', '2023-07-03');

-- --------------------------------------------------------

--
-- Table structure for table `technology`
--

CREATE TABLE `technology` (
  `id` int(255) NOT NULL,
  `picture` varchar(255) NOT NULL DEFAULT 'b.jpg',
  `news_title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `technology`
--

INSERT INTO `technology` (`id`, `picture`, `news_title`, `details`, `date`) VALUES
(1, 'e.jpeg', 'Avronil Rajib', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Accusantium rerum distinctio delectus et veritatis ratione omnis tenetur sequi voluptatem 
ipsam voluptatum, iure, atque voluptatibus deserunt maiores quod reprehenderit. Dolor rem 
nesciunt consequuntur deserunt nihil voluptates distinctio recusandae, possimus, magnam reiciendis 
rerum ratione officiis quisquam quo adipisci? Est quasi in impedit. Lorem ipsum dolor sit amet 
consectetur adipisicing elit. Accusantium rerum distinctio delectus et veritatis ratione omnis 
tenetur sequi voluptatem ipsam voluptatum, iure, atque voluptatibus deserunt maiores quod reprehenderit. 
Dolor rem nesciunt consequuntur deserunt nihil voluptates distinctio', '2023-07-03');

-- --------------------------------------------------------

--
-- Table structure for table `travel`
--

CREATE TABLE `travel` (
  `id` int(255) NOT NULL,
  `picture` varchar(255) NOT NULL DEFAULT 'c.jpg',
  `news_title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `travel`
--

INSERT INTO `travel` (`id`, `picture`, `news_title`, `details`, `date`) VALUES
(1, 'raj.jpg', 'Rajib Dash', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Accusantium rerum distinctio delectus et veritatis ratione omnis tenetur sequi voluptatem ipsam voluptatum, 
iure, atque voluptatibus deserunt maiores quod reprehenderit. Dolor rem nesciunt consequuntur deserunt nihil 
voluptates distinctio recusandae, possimus, magnam reiciendis rerum ratione officiis quisquam quo adipisci? Est 
quasi in impedit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium rerum distinctio delectus 
et veritatis ratione omnis tenetur sequi voluptatem ipsam voluptatum, iure, atque voluptatibus deserunt maiores quod 
reprehenderit. Dolor rem nesciunt consequuntur deserunt nihil voluptates distinctio', '2023-07-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `politics`
--
ALTER TABLE `politics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recent_post`
--
ALTER TABLE `recent_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sport`
--
ALTER TABLE `sport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technology`
--
ALTER TABLE `technology`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel`
--
ALTER TABLE `travel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `politics`
--
ALTER TABLE `politics`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `recent_post`
--
ALTER TABLE `recent_post`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sport`
--
ALTER TABLE `sport`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `technology`
--
ALTER TABLE `technology`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `travel`
--
ALTER TABLE `travel`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
