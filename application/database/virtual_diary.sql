-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2022 at 02:30 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `virtual_diary`
--

-- --------------------------------------------------------

--
-- Table structure for table `penalty`
--

CREATE TABLE `penalty` (
  `penalty_ID` int(11) NOT NULL,
  `report_ID` int(11) NOT NULL,
  `reportedUser_ID` int(11) NOT NULL,
  `supportStaff_ID` int(11) NOT NULL,
  `penaltyType` enum('Warning','Banned') DEFAULT NULL,
  `strikeCount` int(11) NOT NULL,
  `penaltyDate` date DEFAULT NULL,
  `penaltyDuration` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `privatenb_pages`
--

CREATE TABLE `privatenb_pages` (
  `privateNBPage_ID` int(11) NOT NULL,
  `privateNB_ID` int(11) NOT NULL,
  `pageInput` text NOT NULL,
  `pageTheme` enum('Dark','Light','Apple','Orange','Kiwi') NOT NULL DEFAULT 'Dark',
  `pageTimer` time DEFAULT '00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `privatenb_pages`
--

INSERT INTO `privatenb_pages` (`privateNBPage_ID`, `privateNB_ID`, `pageInput`, `pageTheme`, `pageTimer`) VALUES
(1, 1, 'This is my private page.', 'Light', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `private_notebook`
--

CREATE TABLE `private_notebook` (
  `privateNB_ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `private_notebook`
--

INSERT INTO `private_notebook` (`privateNB_ID`, `user_ID`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `publicnb_pages`
--

CREATE TABLE `publicnb_pages` (
  `publicNBPage_ID` int(11) NOT NULL,
  `publicNB_ID` int(11) NOT NULL,
  `pageInput` text DEFAULT NULL,
  `pageTheme` enum('Dark','Light','Apple','Orange','Kiwi') DEFAULT 'Dark',
  `pageDate` datetime DEFAULT current_timestamp(),
  `pageReact_Count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publicnb_pages`
--

INSERT INTO `publicnb_pages` (`publicNBPage_ID`, `publicNB_ID`, `pageInput`, `pageTheme`, `pageDate`, `pageReact_Count`) VALUES
(1, 1, 'This is my first public page.', 'Light', '2021-12-13 19:26:56', 0);

-- --------------------------------------------------------

--
-- Table structure for table `publicpage_reacts`
--

CREATE TABLE `publicpage_reacts` (
  `reaction_ID` int(11) NOT NULL,
  `accountVisitor_ID` int(11) NOT NULL,
  `publicNBPage_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `public_notebook`
--

CREATE TABLE `public_notebook` (
  `publicNB_ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `publicPages_Count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `public_notebook`
--

INSERT INTO `public_notebook` (`publicNB_ID`, `user_ID`, `publicPages_Count`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `report_ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `reportedUser_ID` int(11) NOT NULL,
  `reported_ID` int(11) NOT NULL,
  `type` enum('Sticky Notes','Public Notebook') NOT NULL,
  `reportCategory` enum('Violence','Harassment','Suicide or Self Injury','False Information','Terrorism','Something else') DEFAULT NULL,
  `reportDetails` text DEFAULT NULL,
  `reportDate` date DEFAULT NULL,
  `staff_Comment` text DEFAULT NULL,
  `reportStatus` enum('For Review','Reviewed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stickynotes_reacts`
--

CREATE TABLE `stickynotes_reacts` (
  `reaction_ID` int(11) NOT NULL,
  `accountVisitor_ID` int(11) NOT NULL,
  `stickyNotes_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sticky_notes`
--

CREATE TABLE `sticky_notes` (
  `stickyNotes_ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `noteTheme` enum('Dark','Light','Apple','Orange','Kiwi') NOT NULL DEFAULT 'Dark',
  `noteInput` text DEFAULT NULL,
  `noteReceiver` varchar(255) NOT NULL,
  `noteReact_Count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sticky_notes`
--

INSERT INTO `sticky_notes` (`stickyNotes_ID`, `user_ID`, `noteTheme`, `noteInput`, `noteReceiver`, `noteReact_Count`) VALUES
(1, 1, 'Light', 'Welcome to Sticky Notes Wall\r\n\r\n- Support Team ♥', 'Users', 0);

-- --------------------------------------------------------

--
-- Table structure for table `support_team`
--

CREATE TABLE `support_team` (
  `supportStaff_ID` int(11) NOT NULL,
  `staffName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_ID` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `displayName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('Pending','Active','Warned','Banned','Deactivated') NOT NULL,
  `dateCreated` datetime NOT NULL DEFAULT current_timestamp(),
  `verification_Key` varchar(255) NOT NULL,
  `is_verification_correct` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_ID`, `userName`, `displayName`, `email`, `password`, `status`, `dateCreated`, `verification_Key`, `is_verification_correct`) VALUES
(1, 'admin', 'Admin', 'team6.virtualdiary2022@gmail.com', '73de29021fd0d8d2cfd204d2d955a46d', 'Active', '2021-12-13 19:26:55', '021754', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penalty`
--
ALTER TABLE `penalty`
  ADD PRIMARY KEY (`penalty_ID`),
  ADD KEY `report_ID` (`report_ID`),
  ADD KEY `reportedUser_ID` (`reportedUser_ID`),
  ADD KEY `supportStaff_ID` (`supportStaff_ID`);

--
-- Indexes for table `privatenb_pages`
--
ALTER TABLE `privatenb_pages`
  ADD PRIMARY KEY (`privateNBPage_ID`),
  ADD KEY `privateNB_ID` (`privateNB_ID`);

--
-- Indexes for table `private_notebook`
--
ALTER TABLE `private_notebook`
  ADD PRIMARY KEY (`privateNB_ID`),
  ADD KEY `user_ID` (`user_ID`);

--
-- Indexes for table `publicnb_pages`
--
ALTER TABLE `publicnb_pages`
  ADD PRIMARY KEY (`publicNBPage_ID`),
  ADD KEY `publicNB_ID` (`publicNB_ID`);

--
-- Indexes for table `publicpage_reacts`
--
ALTER TABLE `publicpage_reacts`
  ADD PRIMARY KEY (`reaction_ID`),
  ADD KEY `accountVisitor_ID` (`accountVisitor_ID`),
  ADD KEY `publicNBPage_ID` (`publicNBPage_ID`);

--
-- Indexes for table `public_notebook`
--
ALTER TABLE `public_notebook`
  ADD PRIMARY KEY (`publicNB_ID`),
  ADD UNIQUE KEY `publicNBPage_ID` (`publicNB_ID`),
  ADD UNIQUE KEY `publicNBPage_ID_2` (`publicNB_ID`),
  ADD KEY `user_ID` (`user_ID`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_ID`),
  ADD KEY `user_ID` (`user_ID`),
  ADD KEY `reportedUser_ID` (`reportedUser_ID`);

--
-- Indexes for table `stickynotes_reacts`
--
ALTER TABLE `stickynotes_reacts`
  ADD PRIMARY KEY (`reaction_ID`),
  ADD KEY `accountVisitor_ID` (`accountVisitor_ID`),
  ADD KEY `stickyNotes_ID` (`stickyNotes_ID`);

--
-- Indexes for table `sticky_notes`
--
ALTER TABLE `sticky_notes`
  ADD PRIMARY KEY (`stickyNotes_ID`),
  ADD KEY `user_ID` (`user_ID`);

--
-- Indexes for table `support_team`
--
ALTER TABLE `support_team`
  ADD PRIMARY KEY (`supportStaff_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penalty`
--
ALTER TABLE `penalty`
  MODIFY `penalty_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `privatenb_pages`
--
ALTER TABLE `privatenb_pages`
  MODIFY `privateNBPage_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `private_notebook`
--
ALTER TABLE `private_notebook`
  MODIFY `privateNB_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `publicnb_pages`
--
ALTER TABLE `publicnb_pages`
  MODIFY `publicNBPage_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `publicpage_reacts`
--
ALTER TABLE `publicpage_reacts`
  MODIFY `reaction_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `public_notebook`
--
ALTER TABLE `public_notebook`
  MODIFY `publicNB_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stickynotes_reacts`
--
ALTER TABLE `stickynotes_reacts`
  MODIFY `reaction_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sticky_notes`
--
ALTER TABLE `sticky_notes`
  MODIFY `stickyNotes_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `support_team`
--
ALTER TABLE `support_team`
  MODIFY `supportStaff_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `penalty`
--
ALTER TABLE `penalty`
  ADD CONSTRAINT `penalty_ibfk_1` FOREIGN KEY (`report_ID`) REFERENCES `report` (`report_ID`),
  ADD CONSTRAINT `penalty_ibfk_2` FOREIGN KEY (`reportedUser_ID`) REFERENCES `user` (`user_ID`),
  ADD CONSTRAINT `penalty_ibfk_3` FOREIGN KEY (`supportStaff_ID`) REFERENCES `support_team` (`supportStaff_ID`);

--
-- Constraints for table `privatenb_pages`
--
ALTER TABLE `privatenb_pages`
  ADD CONSTRAINT `privatenb_pages_ibfk_1` FOREIGN KEY (`privateNB_ID`) REFERENCES `private_notebook` (`privateNB_ID`) ON DELETE CASCADE;

--
-- Constraints for table `private_notebook`
--
ALTER TABLE `private_notebook`
  ADD CONSTRAINT `private_notebook_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `user` (`user_ID`) ON DELETE CASCADE;

--
-- Constraints for table `publicnb_pages`
--
ALTER TABLE `publicnb_pages`
  ADD CONSTRAINT `publicnb_pages_ibfk_1` FOREIGN KEY (`publicNB_ID`) REFERENCES `public_notebook` (`publicNB_ID`) ON DELETE CASCADE;

--
-- Constraints for table `publicpage_reacts`
--
ALTER TABLE `publicpage_reacts`
  ADD CONSTRAINT `publicpage_reacts_ibfk_1` FOREIGN KEY (`accountVisitor_ID`) REFERENCES `public_notebook` (`user_ID`),
  ADD CONSTRAINT `publicpage_reacts_ibfk_2` FOREIGN KEY (`publicNBPage_ID`) REFERENCES `publicnb_pages` (`publicNBPage_ID`);

--
-- Constraints for table `public_notebook`
--
ALTER TABLE `public_notebook`
  ADD CONSTRAINT `public_notebook_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `user` (`user_ID`) ON DELETE CASCADE;

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `user` (`user_ID`),
  ADD CONSTRAINT `report_ibfk_2` FOREIGN KEY (`reportedUser_ID`) REFERENCES `user` (`user_ID`);

--
-- Constraints for table `stickynotes_reacts`
--
ALTER TABLE `stickynotes_reacts`
  ADD CONSTRAINT `stickynotes_reacts_ibfk_1` FOREIGN KEY (`accountVisitor_ID`) REFERENCES `sticky_notes` (`user_ID`),
  ADD CONSTRAINT `stickynotes_reacts_ibfk_2` FOREIGN KEY (`stickyNotes_ID`) REFERENCES `sticky_notes` (`stickyNotes_ID`);

--
-- Constraints for table `sticky_notes`
--
ALTER TABLE `sticky_notes`
  ADD CONSTRAINT `sticky_notes_ibfk_1` FOREIGN KEY (`user_ID`) REFERENCES `user` (`user_ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
