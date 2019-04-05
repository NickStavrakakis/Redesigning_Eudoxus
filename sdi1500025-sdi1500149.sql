-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 12, 2019 at 02:59 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdi1500025-sdi1500149`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `book_title` varchar(100) NOT NULL,
  `book_isbn` char(13) NOT NULL,
  `book_authors` longtext NOT NULL,
  `book_year` year(4) NOT NULL,
  `book_keywords` longtext NOT NULL,
  `book_publisher` longtext NOT NULL,
  `book_price` decimal(5,2) NOT NULL,
  `book_site` longtext NOT NULL,
  `book_img` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_title`, `book_isbn`, `book_authors`, `book_year`, `book_keywords`, `book_publisher`, `book_price`, `book_site`, `book_img`) VALUES
(1, 'Οργάνωση και Σχεδίαση Υπολογιστών: Η Διασύνδεση Υλικού και Λογισμικού', '9789604613526', 'David A. Patterson, John L. Hennessy\r\n', 2010, 'αρχιτεκτονική υπολογιστών, οργάνωση, σχεδίαση, mips, λογισμικο, πληροφορική', 'ΚΛΕΙΔΑΡΙΘΜΟΣ', '45.34', 'http://www.klidarithmos.gr/organwsh-kai-sxediash-ypologistwn-a-tomos', 'cover-12561945.jpg'),
(15, 'Πανεπιστημιακή Φυσική με σύγχρονη φυσική', '9789600224733', 'Young H., Freedman R.', 2010, 'σύγχρονη φυσική, ηλεκτρομαγνητισμός, οπτική', 'ΕΚΔΟΣΕΙΣ ΠΑΠΑΖΗΣΗ', '48.00', 'http://www.papazissi.gr/product/%cf%80%ce%b1%ce%bd%ce%b5%cf%80%ce%b9%cf%83%cf%84%ce%b7%ce%bc%ce%b9%ce%b1%ce%ba%ce%ae-%cf%86%cf%85%cf%83%ce%b9%ce%ba%ce%ae-2/', 'cover-5583.jpg'),
(16, 'Δομές Δεδομένων με C', '9609203116', 'Νικόλαος Μισυρλής', 2008, 'Δομές Δεδομένων, Προγραμματισμός με C, Προγραμματισμός υπολογιστών', 'ΝΙΚΟΛΑΟΣ ΜΙΣΥΡΛΗΣ', '0.01', '', 'cover-7982.jpg'),
(17, 'Εισαγωγή στην Αλληλεπίδραση Ανθρώπου - Υπολογιστή', '9789605301651', 'Ν. Αβούρης, Χ. Κατσάνος, Ν. Τσέλιος, Κ. Μουστάκας', 2016, 'επικοινωνία, ανθρώπου, μηχανής, υπολογιστή, εαμ', 'Πανεπιστήμιο Πατρών', '16.00', 'http://unico.upatras.gr/', 'εαμ.jpg'),
(18, 'Προγραμματισμός για το WEB', '9789605126902', 'R. Connolly, R. Hoar', 2015, 'Javascript, PHP, internet, java, web, ανάπτυξη, προγραμματισμος, προγραμματισμός', 'Γκιούρδα', '35.00', 'https://www.mgiurdas.gr/biblia/programmatismos-gia-web', 'web.jpg'),
(19, 'Νομική Πληροφορική', '9789602729748', 'Γ. Γιαννόπουλος', 2013, 'νομική, πληροφορική, gdpr', 'Νομική Βιβλιοθήκη', '0.00', 'http://www.nb.org/%CE%95%CE%9A%CE%94%CE%9F%CE%A3%CE%95%CE%99%CE%A3/%CE%97_%CE%95%CE%A5%CE%98%CE%A5%CE%9D%CE%97_%CE%A4%CE%A9%CE%9D_%CE%A0%CE%91%CE%A1%CE%9F%CE%A7%CE%A9%CE%9D_%CE%A5%CE%A0%CE%97%CE%A1%CE%95%CE%A3%CE%99%CE%A9%CE%9D_%CE%A3%CE%A4%CE%9F_INTERNET#.V7xWtqLGliY', 'nomiki.jpg'),
(20, 'Λειτουργικά Συστήματα', '9789605126513', 'A. Silberschatz, P. B. Galvin, G. Gagne', 2013, 'Linux, Silberschatz, Windows, εικονικοποίηση, κινητή υπολογιστική, λειτουργικά, λειτουργικά συστήματα, πολυπύρηνα συστήματα, συστήματα', 'Γκιούρδα', '35.00', 'http://www.mgiurdas.gr/biblia/leitoyrgika-systimata-9i-ekdosi', 'ls.jpg'),
(21, 'Συστήματα Διαχείρισης Βάσεων Δεδομένων', '9789604184118', 'R. Ramakrishnan, J.  Gehrke', 2012, 'Gehrke, MINIBASE, Ramakrishnan, Ανάκτηση, Βασεις δεδομένων, Δενδρικά Ευρετήρια, Διαχείριση βάσεων, Εξόρυξη Δεδομένων, Ευρετήρια Κατακερματισμού, Ευρετηριοποίηση, Σχεσιακοί Τελεστές, Σχεσιακός Λογισμός, Τζιόλα, ΧΜL, συστήματα', 'Τζιόλα', '41.00', 'http://tziola.gr/book/syst/', 'ysbd.jpg'),
(22, 'Δικτύωση Υπολογιστών', '9789605126575', 'J. F. Kurose, K. W. Ross', 2013, 'Δικτύωση, Δικτύωση υπολογιστών, υπολογιστών', 'Γκιούρδα', '31.00', 'http://www.mgiurdas.gr/biblia/diktyosi-ypologiston-6i-ekdosi', 'diktia.jpg'),
(23, 'Η Γλώσσα Προγραμματισμού C++', '9789603322092', 'B. Stroustrup', 2014, 'C++, C++11, STL, Αντικειμενοστραφής Προγραμματισμός, Γενικευμένος Προγραμματισμός, Καθιερωμένη Βιβλιοθήκη C++, Μεταπρογραμματισμός, Προγραμματισμός, Πρότυπα C++ ', 'Ιωάννης Φαλμάδης', '48.00', 'http://www.klidarithmos.gr/h-glwssa-programmatismoy-cplus-4h-ekdosh', 'cpp.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `distr_points`
--

CREATE TABLE `distr_points` (
  `distr_point_id` int(11) NOT NULL,
  `distr_point_title` varchar(100) NOT NULL,
  `distr_point_address` longtext NOT NULL,
  `distr_point_city` longtext NOT NULL,
  `distr_point_zipcode` int(11) NOT NULL,
  `distr_point_phone` int(11) NOT NULL,
  `distr_point_email` longtext NOT NULL,
  `distr_point_workinghours` longtext NOT NULL,
  `distr_point_map_link` longtext NOT NULL,
  `distr_point_map_img` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `distr_points`
--

INSERT INTO `distr_points` (`distr_point_id`, `distr_point_title`, `distr_point_address`, `distr_point_city`, `distr_point_zipcode`, `distr_point_phone`, `distr_point_email`, `distr_point_workinghours`, `distr_point_map_link`, `distr_point_map_img`) VALUES
(6, 'Συμμετρία', 'Ιωάννου Θεολόγου 80', 'Ζωγράφου', 15773, 2107707114, 'esimmetria@gmail.com', 'Δευτέρα - Παρασκευή 08:00 - 16:00', '-', 'symmetria.png'),
(7, 'Τζιόλα', 'Χαριλάου Τρικούπη 16', 'Αθήνα', 10681, 2103632600, 'athens@tziola.gr', 'Τρίτη - Πέμπτη - Παρασκευή 10:00 - 20:00, Δευτέρα - Τετάρτη 10:00 - 16:30', '-', 'tziola.png'),
(8, 'Γκιούρδας', 'Σέργιου Πατριάρχου', 'Αθήνα', 11472, 2147483647, 'n.karakasis@mgiurdas.gr', 'Δευτέρα - Παρασκευή 10:00 - 15:00', '-', 'giourdas.png'),
(9, 'Κριτική', 'Νευροκοπίου 8', 'Αθήνα', 11855, 2108211470, 'veniakakis@kritiki.gr', 'Δευτέρα - Παρασκευή 10:00 - 16:00', '-', 'kritikh.png'),
(10, 'Νομική Βιβλιοθήκη', 'Μαυρομιχάλη 23', 'Αθήνα', 10680, 2103678801, 'magdap@nb.org', 'Δευτέρα - Παρασκευή 09:00 - 15:00', '-', 'nomikh.png'),
(11, 'Νέες Τεχνολογίες', 'Σουρνάρη 49Α', 'Αθήνα', 10682, 2103845594, 'contact@newtech-publications.gr', 'Δευτέρα - Παρασκευή 10:00 - 17:00', '-', 'neon texnologion.png'),
(12, 'Προκόπης', 'Ηρώων Πολυτεχνείου 80', 'Ζωγράφου', 15772, 2107774130, 'prokopis@homtail.com', 'Δευτέρα - Τετάρτη - Παρασκευή 08:00 - 16:00, Τρίτη - Πέμπτη 10:00 - 20:00', '-', 'prokopis.png'),
(13, 'Παρασκήνιο', 'Σόλωνος 76', 'Αθήνα', 10680, 2103648170, 'mbooks@otenet.gr', 'Δευτέρα - Παρασκευή 10:00 - 14:00', '-', 'paraskinio.png'),
(14, 'Κλειδάριθμος', 'Ακαδημίας 42', 'Αθήνα', 10672, 2103642887, 'shop@klidarithmos.gr', 'Δευτέρα - Παρασκευή 10:00 - 17:00', '-', 'kleidarithmos.png');

-- --------------------------------------------------------

--
-- Table structure for table `professors`
--

CREATE TABLE `professors` (
  `idprf` int(11) NOT NULL,
  `usrprf` mediumtext NOT NULL,
  `emailprf` mediumtext NOT NULL,
  `pwdprf` longtext NOT NULL,
  `nmeprf` mediumtext NOT NULL,
  `surnmeprf` mediumtext NOT NULL,
  `schoolprf` mediumtext NOT NULL,
  `departprf` mediumtext NOT NULL,
  `phoneprf` mediumtext NOT NULL,
  `degreeprf` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `professors`
--

INSERT INTO `professors` (`idprf`, `usrprf`, `emailprf`, `pwdprf`, `nmeprf`, `surnmeprf`, `schoolprf`, `departprf`, `phoneprf`, `degreeprf`) VALUES
(9, 'sdi1500025', 'sdi1500025@di.uoa.gr', '$2y$10$Ng37OR1z5bF63FVbM68vzOlvHZR/JXu/rcK7nrFesP.g6H4lm/WIC', 'Γιάννης', 'Γιαννακίδης', 'Εθνικό Καποδιστριακό Πανεπιστήμιο Αθηνών', 'Πληροφορικής & Τηλεπικοινωνιών', '1234567890', 'Πληροφορική');

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

CREATE TABLE `sites` (
  `site_id` int(10) NOT NULL,
  `site_title` varchar(100) NOT NULL,
  `site_link` varchar(100) NOT NULL,
  `site_keywords` varchar(100) NOT NULL,
  `site_desc` longtext NOT NULL,
  `site_image` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sites`
--

INSERT INTO `sites` (`site_id`, `site_title`, `site_link`, `site_keywords`, `site_desc`, `site_image`) VALUES
(4, 'Popular SEO Tools', 'https://smallseotools.com/', 'SEO tools, SEO tips, SEO tutorials, lol', 'THIS IS MY DESC', 'logo.png'),
(5, 'Popular SEO Tools', 'something like this', 'SEO tools, SEO tips, SEO tutorials', 'gctvfrcdewrd', 'logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `idstudents` int(11) NOT NULL,
  `usrstudents` mediumtext NOT NULL,
  `emailstudents` mediumtext NOT NULL,
  `pwdstudents` longtext NOT NULL,
  `namestudents` mediumtext NOT NULL,
  `surnamestudents` mediumtext NOT NULL,
  `schoolstudents` mediumtext NOT NULL,
  `departmentstudents` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`idstudents`, `usrstudents`, `emailstudents`, `pwdstudents`, `namestudents`, `surnamestudents`, `schoolstudents`, `departmentstudents`) VALUES
(16, 'sdi1500149', 'sdi1500149@di.uoa.gr', '$2y$10$h3MYd.LMljxowTNJyrvF8ObYhQwmO8QY4RpQq9JoTA1g8LEkXbn1S', 'Νικόλας', 'Σταυρακάκης', 'Εθνικό Καποδιστριακό Πανεπιστήμιο Αθηνών', 'Πληροφορικής & Τηλεπικοινωνιών');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`),
  ADD UNIQUE KEY `book_isbn` (`book_isbn`);

--
-- Indexes for table `distr_points`
--
ALTER TABLE `distr_points`
  ADD PRIMARY KEY (`distr_point_id`);

--
-- Indexes for table `professors`
--
ALTER TABLE `professors`
  ADD PRIMARY KEY (`idprf`);

--
-- Indexes for table `sites`
--
ALTER TABLE `sites`
  ADD PRIMARY KEY (`site_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`idstudents`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `distr_points`
--
ALTER TABLE `distr_points`
  MODIFY `distr_point_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `professors`
--
ALTER TABLE `professors`
  MODIFY `idprf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sites`
--
ALTER TABLE `sites`
  MODIFY `site_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `idstudents` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
