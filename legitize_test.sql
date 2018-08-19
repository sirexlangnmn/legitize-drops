-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2018 at 09:35 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `legitize_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `client_firstname` varchar(45) NOT NULL,
  `client_middlename` varchar(45) NOT NULL,
  `client_surname` varchar(45) NOT NULL,
  `image` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `project_id`, `client_firstname`, `client_middlename`, `client_surname`, `image`, `created_at`, `updated_at`) VALUES
(1, 15, 'enk fn', 'enk mn', 'enk sm', 'Ako2.PNG', '2018-07-30 13:55:33', '2018-07-30 15:46:34'),
(2, 16, 'pp fn', 'pp mn', 'pp sn', 'AKo.jpg', '2018-07-30 14:25:10', '2018-07-30 15:47:09');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_title` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_title`) VALUES
(34, 'Telegram'),
(35, 'Mobile Number'),
(36, 'asd'),
(41, 'qw555');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `name`, `email`, `message`, `created_at`) VALUES
(1, 'test name1', 'testname1@gmail.com', 'test name1 note message', '2018-07-30 08:45:54'),
(4, 'asd', 'asd@gmail.com', 'asdasd', '2018-07-30 09:11:01');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(11) NOT NULL,
  `project_title` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telegram` varchar(45) NOT NULL,
  `website` varchar(100) NOT NULL,
  `note` longtext NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `project_title`, `email`, `telegram`, `website`, `note`, `created_at`, `updated_at`) VALUES
(13, 'test ICO', 'testico@gmail.com', 'testtele', 'test.com', 'test note', '2018-07-30 10:02:44', NULL),
(14, 'test2update', 'test2update@gmail.com', 'test2 tele update', 'test2update.com', 'test2 note update', '2018-07-30 10:03:58', '2018-07-30 10:04:44'),
(15, 'Enkronos', 'enkoronos@gmail.com', 'enkronos telegram', 'enkronos.com', 'enkronos notes', '2018-07-30 10:08:08', NULL),
(16, 'Pearl Pay', 'pearlpay@gmail.com', 'pearl pay telegram', 'pearlpay.io', 'pearlpay notes', '2018-07-30 10:08:56', NULL),
(17, 'ico test 99', 'icotest99@gmail.com', 'ico test 99 tg', 'icotest99.com', 'ico test 99 notes', '2018-07-31 15:33:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project_campaign`
--

CREATE TABLE `project_campaign` (
  `project_campaign_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `campaign_title` varchar(45) NOT NULL,
  `allocated_token` varchar(45) NOT NULL,
  `allocated_participants` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project_campaign_standing`
--

CREATE TABLE `project_campaign_standing` (
  `project_campaign_standing_id` int(11) NOT NULL,
  `project_campaign_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `remarks_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project_detail`
--

CREATE TABLE `project_detail` (
  `project_detail_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `project_subtitle` varchar(45) NOT NULL,
  `project_tagline` varchar(45) NOT NULL,
  `project_description` varchar(45) NOT NULL,
  `project_token` varchar(45) NOT NULL,
  `eth_value` varchar(45) NOT NULL,
  `symbol` varchar(45) NOT NULL,
  `project_whitepaper` varchar(45) NOT NULL,
  `project_thread` varchar(45) NOT NULL,
  `accepted_language` varchar(45) NOT NULL,
  `image` varchar(45) NOT NULL,
  `launch_date` datetime NOT NULL,
  `bounty_campaign_start` datetime NOT NULL,
  `bounty_campaign_end` datetime NOT NULL,
  `verification_perion_end` datetime NOT NULL,
  `result_displayed` datetime NOT NULL,
  `distribution` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project_standing`
--

CREATE TABLE `project_standing` (
  `project_standing_id` int(11) NOT NULL,
  `remarks_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `referral`
--

CREATE TABLE `referral` (
  `referral_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `referral_link` varchar(45) NOT NULL,
  `unclaimed_value` varchar(45) NOT NULL,
  `total_value` varchar(45) NOT NULL,
  `claimmed_value` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `remarks`
--

CREATE TABLE `remarks` (
  `remarks_id` int(11) NOT NULL,
  `remarks_title` varchar(45) NOT NULL,
  `remarks_category` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `social_group`
--

CREATE TABLE `social_group` (
  `social_group_id` int(11) NOT NULL,
  `social_group_title` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social_group`
--

INSERT INTO `social_group` (`social_group_id`, `social_group_title`) VALUES
(2, 'bitcointalk.org'),
(3, 'altcoinstalks.com'),
(4, 'bountytalks.com');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `social_media_id` int(11) NOT NULL,
  `social_media_title` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`social_media_id`, `social_media_title`) VALUES
(1, 'Facebook'),
(5, 'Twitter');

-- --------------------------------------------------------

--
-- Table structure for table `spreadsheet`
--

CREATE TABLE `spreadsheet` (
  `spreadsheet_id` int(11) NOT NULL,
  `user_campaign_id` int(11) NOT NULL,
  `project_campaign_id` int(11) NOT NULL,
  `week_1` int(11) NOT NULL,
  `week_2` int(11) NOT NULL,
  `week_20` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_id` int(11) NOT NULL,
  `status_category` varchar(45) NOT NULL,
  `status_title` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `email`, `password`, `created_at`, `updated_at`) VALUES
(2, 'sirexlangnmn', 'potolin.federex@gmail.com', 'x', '2018-07-31 15:21:39', NULL),
(3, 'federexpogi', 'federexpogi@gmail.com', 'rex', '2018-07-31 15:32:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `age` int(40) NOT NULL,
  `description` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_campaign`
--

CREATE TABLE `user_campaign` (
  `user_campaign_id` int(11) NOT NULL,
  `user_campaign_standing_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_campaign_standing`
--

CREATE TABLE `user_campaign_standing` (
  `user_campaign_standing_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `remarks_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_contact`
--

CREATE TABLE `user_contact` (
  `user_contact_id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `data` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_social_group`
--

CREATE TABLE `user_social_group` (
  `user_sg_id` int(11) NOT NULL,
  `social_group_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `link` varchar(100) NOT NULL,
  `rank` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_social_media`
--

CREATE TABLE `user_social_media` (
  `user_sm_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `social_media_id` int(11) NOT NULL,
  `link` varchar(100) NOT NULL,
  `num_followers` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_standing`
--

CREATE TABLE `user_standing` (
  `user_status_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `remarks_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_wallet`
--

CREATE TABLE `user_wallet` (
  `user_wallet_id` int(11) NOT NULL,
  `wallet_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `wallet_address` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `wallet_id` int(11) NOT NULL,
  `wallet_title` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wallet`
--

INSERT INTO `wallet` (`wallet_id`, `wallet_title`) VALUES
(4, 'ERC-20'),
(5, 'Komodo'),
(7, 'Stellar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`),
  ADD KEY `fk_tbl_client_project_registration1_idx` (`project_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `project_campaign`
--
ALTER TABLE `project_campaign`
  ADD PRIMARY KEY (`project_campaign_id`),
  ADD KEY `fk_project_campaign_project1_idx` (`project_id`);

--
-- Indexes for table `project_campaign_standing`
--
ALTER TABLE `project_campaign_standing`
  ADD PRIMARY KEY (`project_campaign_standing_id`),
  ADD KEY `fk_project_campaign_standing_project_campaign1_idx` (`project_campaign_id`),
  ADD KEY `fk_project_campaign_standing_status1_idx` (`status_id`),
  ADD KEY `fk_project_campaign_standing_remarks1_idx` (`remarks_id`);

--
-- Indexes for table `project_detail`
--
ALTER TABLE `project_detail`
  ADD PRIMARY KEY (`project_detail_id`),
  ADD KEY `fk_project_detail_project1_idx` (`project_id`);

--
-- Indexes for table `project_standing`
--
ALTER TABLE `project_standing`
  ADD PRIMARY KEY (`project_standing_id`),
  ADD KEY `fk_project_standing_remarks1_idx` (`remarks_id`),
  ADD KEY `fk_project_standing_status1_idx` (`status_id`),
  ADD KEY `fk_project_standing_project_registration1_idx` (`project_id`);

--
-- Indexes for table `referral`
--
ALTER TABLE `referral`
  ADD PRIMARY KEY (`referral_id`),
  ADD KEY `fk_tbl_referral_user1_idx` (`user_id`);

--
-- Indexes for table `remarks`
--
ALTER TABLE `remarks`
  ADD PRIMARY KEY (`remarks_id`);

--
-- Indexes for table `social_group`
--
ALTER TABLE `social_group`
  ADD PRIMARY KEY (`social_group_id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`social_media_id`);

--
-- Indexes for table `spreadsheet`
--
ALTER TABLE `spreadsheet`
  ADD PRIMARY KEY (`spreadsheet_id`),
  ADD KEY `fk_tbl_spreadsheet_project_campaign1_idx` (`project_campaign_id`),
  ADD KEY `fk_spreadsheet_user_campaign1_idx` (`user_campaign_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_campaign`
--
ALTER TABLE `user_campaign`
  ADD PRIMARY KEY (`user_campaign_id`),
  ADD KEY `fk_user_campaign_user_campaign_standing1_idx` (`user_campaign_standing_id`),
  ADD KEY `fk_user_campaign_user1_idx` (`user_id`);

--
-- Indexes for table `user_campaign_standing`
--
ALTER TABLE `user_campaign_standing`
  ADD PRIMARY KEY (`user_campaign_standing_id`),
  ADD KEY `fk_user_campaign_standing_status1_idx` (`status_id`),
  ADD KEY `fk_user_campaign_standing_remarks1_idx` (`remarks_id`);

--
-- Indexes for table `user_contact`
--
ALTER TABLE `user_contact`
  ADD PRIMARY KEY (`user_contact_id`),
  ADD KEY `fk_user_contact_contact1_idx` (`contact_id`),
  ADD KEY `fk_user_contact_user1_idx` (`user_id`);

--
-- Indexes for table `user_social_group`
--
ALTER TABLE `user_social_group`
  ADD PRIMARY KEY (`user_sg_id`),
  ADD KEY `fk_user_social_group_social_group1_idx` (`social_group_id`),
  ADD KEY `fk_user_social_group_user1_idx` (`user_id`);

--
-- Indexes for table `user_social_media`
--
ALTER TABLE `user_social_media`
  ADD PRIMARY KEY (`user_sm_id`),
  ADD KEY `fk_user_social_media_tbl_social_media1_idx` (`social_media_id`),
  ADD KEY `fk_user_social_media_tbl_user1_idx` (`user_id`);

--
-- Indexes for table `user_standing`
--
ALTER TABLE `user_standing`
  ADD PRIMARY KEY (`user_status_id`),
  ADD KEY `fk_user_standing_user1_idx` (`user_id`),
  ADD KEY `fk_user_standing_status1_idx` (`status_id`),
  ADD KEY `fk_user_standing_remarks1_idx` (`remarks_id`);

--
-- Indexes for table `user_wallet`
--
ALTER TABLE `user_wallet`
  ADD PRIMARY KEY (`user_wallet_id`),
  ADD KEY `fk_tbl_user_wallet_tbl_wallet_idx` (`wallet_id`),
  ADD KEY `fk_tbl_user_wallet_tbl_user1_idx` (`user_id`);

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`wallet_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `project_campaign`
--
ALTER TABLE `project_campaign`
  MODIFY `project_campaign_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `project_campaign_standing`
--
ALTER TABLE `project_campaign_standing`
  MODIFY `project_campaign_standing_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `project_detail`
--
ALTER TABLE `project_detail`
  MODIFY `project_detail_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `project_standing`
--
ALTER TABLE `project_standing`
  MODIFY `project_standing_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `referral`
--
ALTER TABLE `referral`
  MODIFY `referral_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `remarks`
--
ALTER TABLE `remarks`
  MODIFY `remarks_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `social_group`
--
ALTER TABLE `social_group`
  MODIFY `social_group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `social_media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `spreadsheet`
--
ALTER TABLE `spreadsheet`
  MODIFY `spreadsheet_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_campaign`
--
ALTER TABLE `user_campaign`
  MODIFY `user_campaign_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_campaign_standing`
--
ALTER TABLE `user_campaign_standing`
  MODIFY `user_campaign_standing_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_contact`
--
ALTER TABLE `user_contact`
  MODIFY `user_contact_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_social_group`
--
ALTER TABLE `user_social_group`
  MODIFY `user_sg_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_social_media`
--
ALTER TABLE `user_social_media`
  MODIFY `user_sm_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_standing`
--
ALTER TABLE `user_standing`
  MODIFY `user_status_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_wallet`
--
ALTER TABLE `user_wallet`
  MODIFY `user_wallet_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wallet`
--
ALTER TABLE `wallet`
  MODIFY `wallet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `fk_tbl_client_project_registration1` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `project_campaign`
--
ALTER TABLE `project_campaign`
  ADD CONSTRAINT `fk_project_campaign_project1` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `project_campaign_standing`
--
ALTER TABLE `project_campaign_standing`
  ADD CONSTRAINT `fk_project_campaign_standing_project_campaign1` FOREIGN KEY (`project_campaign_id`) REFERENCES `project_campaign` (`project_campaign_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_project_campaign_standing_remarks1` FOREIGN KEY (`remarks_id`) REFERENCES `remarks` (`remarks_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_project_campaign_standing_status1` FOREIGN KEY (`status_id`) REFERENCES `status` (`status_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `project_detail`
--
ALTER TABLE `project_detail`
  ADD CONSTRAINT `fk_project_detail_project1` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `project_standing`
--
ALTER TABLE `project_standing`
  ADD CONSTRAINT `fk_project_standing_project_registration1` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_project_standing_remarks1` FOREIGN KEY (`remarks_id`) REFERENCES `remarks` (`remarks_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_project_standing_status1` FOREIGN KEY (`status_id`) REFERENCES `status` (`status_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `referral`
--
ALTER TABLE `referral`
  ADD CONSTRAINT `fk_tbl_referral_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `spreadsheet`
--
ALTER TABLE `spreadsheet`
  ADD CONSTRAINT `fk_spreadsheet_user_campaign1` FOREIGN KEY (`user_campaign_id`) REFERENCES `user_campaign` (`user_campaign_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_spreadsheet_project_campaign1` FOREIGN KEY (`project_campaign_id`) REFERENCES `project_campaign` (`project_campaign_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_campaign`
--
ALTER TABLE `user_campaign`
  ADD CONSTRAINT `fk_user_campaign_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_campaign_user_campaign_standing1` FOREIGN KEY (`user_campaign_standing_id`) REFERENCES `user_campaign_standing` (`user_campaign_standing_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_campaign_standing`
--
ALTER TABLE `user_campaign_standing`
  ADD CONSTRAINT `fk_user_campaign_standing_remarks1` FOREIGN KEY (`remarks_id`) REFERENCES `remarks` (`remarks_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_campaign_standing_status1` FOREIGN KEY (`status_id`) REFERENCES `status` (`status_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_contact`
--
ALTER TABLE `user_contact`
  ADD CONSTRAINT `fk_user_contact_contact1` FOREIGN KEY (`contact_id`) REFERENCES `contact` (`contact_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_contact_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_social_group`
--
ALTER TABLE `user_social_group`
  ADD CONSTRAINT `fk_user_social_group_social_group1` FOREIGN KEY (`social_group_id`) REFERENCES `social_group` (`social_group_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_social_group_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_social_media`
--
ALTER TABLE `user_social_media`
  ADD CONSTRAINT `fk_user_social_media_tbl_social_media1` FOREIGN KEY (`social_media_id`) REFERENCES `social_media` (`social_media_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_social_media_tbl_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_standing`
--
ALTER TABLE `user_standing`
  ADD CONSTRAINT `fk_user_standing_remarks1` FOREIGN KEY (`remarks_id`) REFERENCES `remarks` (`remarks_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_standing_status1` FOREIGN KEY (`status_id`) REFERENCES `status` (`status_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_standing_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_wallet`
--
ALTER TABLE `user_wallet`
  ADD CONSTRAINT `fk_tbl_user_wallet_tbl_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_user_wallet_tbl_wallet` FOREIGN KEY (`wallet_id`) REFERENCES `wallet` (`wallet_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
