-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql-server
-- Generation Time: Apr 18, 2023 at 02:16 PM
-- Server version: 8.0.19
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `mail`, `password`) VALUES
(1, 'admin', 'admin@mail.com', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `mail`, `password`) VALUES
(1, 'admin', 'admin@mail.com', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `all_blogs`
--

CREATE TABLE `all_blogs` (
  `id` int NOT NULL,
  `title` varchar(300) DEFAULT NULL,
  `description` varchar(3000) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `likes` int DEFAULT '0',
  `user_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `all_blogs`
--

INSERT INTO `all_blogs` (`id`, `title`, `description`, `image`, `likes`, `user_id`) VALUES
(647, 'Random Blog 1', 'What are you up to this weekend? The boys and I are visiting old friends in Austin (including our beloved illustrator Grace Farris), and although we weren’t quite brave enough to jump into Barton Springs, we did dip our feet in! We’d also forgotten how delicious migas tacos are, omg. Hope you have a good one, and here are a few fun links from around the web…\r\nI thought all mascaras were the same until trying this magic formula.\r\nHave you seen the new show Beef? I’m really enjoying it.\r\nPlus, the trailer for Never Have I Ever season four! #TeamBen\r\nThe perfect vacation dress. (And plus.)\r\nBrooklyn’s Café Spaghetti is getting a sibling. (NYMag)\r\nHouse hunting by the lakes in Minneapolis. (NYTimes gift link)\r\nA delicious no-bake British dessert.\r\nA compelling and honest essay about how the professionalism double standard impacts Black women, written by author Tembe Denton-Hurst. “By the time I entered the working world, I was well versed in navigating the choppy waters of respectability. I knew how I would be perceived for showing up too similarly to a caricature of a Black woman they’d seen on TV or encountered in real life. I threw my best and biggest ideas out early, made culturally relevant jokes followed by my best attempts to explain them, became an always available sounding board for diversity, and didn’t make a fuss. I called missteps out gently, typing exclamation points and ‘I think’ to soften my approach in emails. I carefully managed myself as well as their perceptions of me', 'https://cupofjo.com/wp-content/uploads/2023/04/barton-springs-austin-pool-1536x1152.jpeg', 0, 2),
(648, 'Random Blog 2', 'DigitalOcean’s commitment to simplifying cloud computing and providing an excellent experience for our customers is at the forefront of all we do. We’re dedicated to the success of startups and SMBs and continuously seek ways to evolve our products and partnerships so that we can enable teams to grow faster. Support of open source projects is a significant portion of that mission, and we’re proud to give back to the community by sponsoring projects that help developers spend more time doing what they love: building great software.\r\nThat’s why we use and sponsor Let’s Encrypt, a Certificate Authority built by the Internet Security Research Group (ISRG), providing free, automated certificates for everyone. Certificate Authorities play a crucial role in securing the Internet, and Let’s Encrypt changed the game by providing not only publicly trusted certificates for free but also a standardized API that enables automation, reducing the burden of certificate maintenance operations.\r\nIn this post, we’ll walk through where DigitalOcean uses Let’s Encrypt, how our integration works, and some of the enhancements we’ve made along the way.', 'https://doimages.nyc3.digitaloceanspaces.com/letsencryptarch.png', 0, 1),
(649, 'Random Blog 3', 'Since the Console UI is a web-based app running on the customer’s browser, there are a few challenges we had to overcome due to the limitation set by the browser environment. Typically, the SSH protocol runs over a TCP connection. However, a raw TCP connection isn’t allowed by most browsers.  Moreover, even if we had a way to support a direct TCP connection from within the browser, the Console UI still would not be able to connect to the target Droplet due to CORS limitation unless we assigned every Droplet a sub domain that complies with the CORS requirements, which is impractical.\r\nTherefore, we had to place a proxy in the middle between the Console UI and the target Droplet. The Console UI communicates with the proxy over a websocket connection, and the proxy talks to the target Droplet over a TCP connection. To build the proxy, we decided to build a heavier Console UI by embedding a fully functional SSH client and making the proxy work at the network layer for translating & repeating the binary messages between the websocket and TCP connections. Although the connection is still being bridged by the proxy, the SSH communication has been end-to-end encrypted between the Console UI (i.e. the browser) and the target Droplet.', 'https://doimages.nyc3.digitaloceanspaces.com/Console%20session.png', 0, 1),
(650, 'Random Blog 4', 'nothing here', 'https://doimages.nyc3.digitaloceanspaces.com/kubecon2017LinuxFoundationScholarshipGroup.jpg', 0, 1),
(651, 'Random Blog 5', ' Software development and deployment best practices continue to evolve at a rapid pace. It can be challenging to understand whether you are making the right choices to ensure that you’re going to deliver a great experience for your end users while maintaining a workflow that keeps your team unblocked and productive. Traditional Platform as a Service (PaaS) offerings make it easy and cost effective to get started, but as your application begins to grow in complexity and scale, and your needs from the offering become more diverse, it can become difficult to manage. Taking a component-based approach to your architecture can go a long way to ease this burden.\r\nThe Existing Approaches\r\nAs a developer working on a new project, you’ll face the decision of picking an application architecture and deciding on the frameworks, tooling, and services you’ll utilize to be successful. It can often feel overwhelming to make sense of all of the options and decide on the right approach. Should you be building a 12 factor app? Should you be focused on building with the JAM stack? Are you backing yourself into a corner if you decide on one over the other? What if your needs change in six months, or business takes you in a new direction with a new set of requirements?\r\nWith component-based applications you can layer on the building blocks of all of these approaches in a succinct specification that is easy to understand, manage, and expand upon.', 'https://doimages.nyc3.digitaloceanspaces.com/Phil,blog3.png', 0, 2),
(653, 'q', 'qwqw', 'https://cupofjo.com/wp-content/uploads/2023/04/barton-springs-austin-pool-1536x1152.jpeg', 0, NULL),
(654, 'qwqw', 'something', 'https://cupofjo.com/wp-content/uploads/2023/04/barton-springs-austin-pool-1536x1152.jpeg', 0, NULL),
(655, 'aaa', 'afdfafa', 'https://cupofjo.com/wp-content/uploads/2023/04/barton-springs-austin-pool-1536x1152.jpeg', 0, NULL),
(656, 'aaa', 'qwert', 'https://cupofjo.com/wp-content/uploads/2023/04/barton-springs-austin-pool-1536x1152.jpeg', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `user_id` int NOT NULL,
  `blog_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'a', 'a@mail.com', 'a'),
(2, 'Satyam', 'satyam@mail.com', 'ab'),
(3, 'Shuaib', 's@mail.com', 'qw');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_blogs`
--
ALTER TABLE `all_blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `blog_id` (`blog_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `all_blogs`
--
ALTER TABLE `all_blogs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=657;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `all_blogs`
--
ALTER TABLE `all_blogs`
  ADD CONSTRAINT `all_blogs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`blog_id`) REFERENCES `all_blogs` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
