-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Oct 04, 2016 at 07:31 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `phpblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'News'),
(3, 'Tutorials'),
(4, 'Uncategorized');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category`, `title`, `body`, `author`, `tags`, `date`) VALUES
(1, 1, 'International Conference 2016', '</p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'Jeff Bagheri', 'PHP News, PHP Events', '2016-09-29 18:26:17'),
(2, 2, 'PHP 7 New Fuatures 3', '</p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', 'Jeff Bagheri', 'PHP, PHP release', '2016-09-29 18:26:17'),
(12, 7, 'sdsds', 'sdsd', 'sdsd', 'sdsd', '2016-10-03 20:11:24'),
(14, 1, 'The Difference Between iOS and Android', 'Over the past few weeks, the worldâ€™s most popular mobile operating systems, Android and iOS, were both treated to their annual facelifts, giving supported devices a new look and a bunch of new features. While users of Apple devices typically get to enjoy these features within days, if not hours after the official rollout of a major update, most Android users can only dream of enjoying the latest version of the worldâ€™s most widely used mobile device platform.\r\n\r\nAccording to data from analytics firm Mixpanel, more than a third of iPhone and iPad users have already made the switch to iOS 10 less than a week into its launch. Meanwhile, according to Googleâ€™s own platform for Android developers, less than 0.1 percent of Android devices are running Nougat, the latest Android version which was released in August. This doesnâ€™t mean that Android users arenâ€™t interested in the latest features, the problem is that Nougat is only available on a handful of Nexus devices yet, while hundreds of millions of Android users will have to wait and see if their deviceâ€™s manufacturer chooses to support it at some point.\r\n\r\nThis is one of the key advantages that Apple still has over its competitors in the smartphone market. Whoever purchases a new iPhone can count on his device getting new software for at least a couple of years. Android users on the other hand are often stuck with the version that comes pre-installed with their device, as many manufacturers donâ€™t bother rolling out Android updates to their users.', 'Maha', 'News,PHP ', '2016-10-04 03:34:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
