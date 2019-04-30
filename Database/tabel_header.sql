-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2018 at 08:06 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oprec2`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataoprec`
--

CREATE TABLE `dataoprec` (
  `nrp` varchar(14) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pil1` varchar(50) NOT NULL,
  `pil2` varchar(50) NOT NULL,
  `pil3` varchar(50) NOT NULL,
  `interviewerkerohanian` varchar(100) NOT NULL,
  `lahirbaru` int(11) NOT NULL,
  `lahirbarunotes` varchar(100) NOT NULL,
  `sate` int(11) NOT NULL,
  `satenotes` varchar(100) NOT NULL,
  `komitsate` int(11) NOT NULL,
  `komitsatenotes` varchar(255) NOT NULL,
  `kk` varchar(50) NOT NULL,
  `pkk` varchar(100) NOT NULL,
  `bab8` varchar(100) NOT NULL,
  `semuabab8` varchar(100) NOT NULL,
  `tidakpik` varchar(100) NOT NULL,
  `lanjutkk` varchar(100) NOT NULL,
  `pkk_kk` varchar(100) NOT NULL,
  `temankk` varchar(100) NOT NULL,
  `tambahteman` varchar(100) NOT NULL,
  `ketemukk` varchar(100) NOT NULL,
  `babkk` varchar(100) NOT NULL,
  `lastkk` varchar(100) NOT NULL,
  `kknotes` varchar(255) NOT NULL,
  `bedaagama` int(11) NOT NULL,
  `bedaagamanotes` varchar(255) NOT NULL,
  `rokok` int(11) NOT NULL,
  `rokoknotes` varchar(255) NOT NULL,
  `bohong` int(11) NOT NULL,
  `bohongnotes` varchar(255) NOT NULL,
  `pornografi` int(11) NOT NULL,
  `pornonotes` varchar(255) NOT NULL,
  `interviewerkomitmen` varchar(100) NOT NULL,
  `urutanprioritas` int(11) NOT NULL,
  `urutanprioritasnotes` varchar(255) NOT NULL,
  `artikomitmen` int(11) NOT NULL,
  `artikomitmennotes` varchar(255) NOT NULL,
  `ekspektasikepanitiaan` int(11) NOT NULL,
  `ekspektasinotes` varchar(255) NOT NULL,
  `bukansiepilihan` int(11) NOT NULL,
  `bukansiepilihannotes` varchar(255) NOT NULL,
  `terlibatpelayanan` varchar(50) NOT NULL,
  `terlibatpelayanannotes` varchar(255) NOT NULL,
  `teskampus` varchar(50) NOT NULL,
  `teskampusnotes` varchar(255) NOT NULL,
  `saranlowmotivation` varchar(400) NOT NULL,
  `sieyangmau` varchar(100) NOT NULL,
  `melayanipmk` varchar(255) NOT NULL,
  `interviewerleadership` varchar(50) NOT NULL,
  `skilltidaksesuai` int(11) NOT NULL,
  `skilltidaksesuainotes` varchar(255) NOT NULL,
  `artipemimpin` int(11) NOT NULL,
  `artipemimpinnotes` varchar(255) NOT NULL,
  `kesalahanbesar` int(11) NOT NULL,
  `kesalahanbesarnotes` varchar(255) NOT NULL,
  `memilihorang` varchar(100) NOT NULL,
  `memilihorangnotes` varchar(255) NOT NULL,
  `interviewerskill` varchar(50) NOT NULL,
  `dampakpanitia` int(11) NOT NULL,
  `notesdampak` varchar(255) NOT NULL,
  `notesacaranapas` varchar(255) NOT NULL,
  `case1` int(11) NOT NULL,
  `case1notes` varchar(255) NOT NULL,
  `case2` int(11) NOT NULL,
  `case2notes` varchar(255) NOT NULL,
  `case3` int(11) NOT NULL,
  `case3notes` varchar(255) NOT NULL,
  `tinggaldimana` varchar(100) NOT NULL,
  `bagaimanakekampus` varchar(100) NOT NULL,
  `pengalamanorganisasi` varchar(100) NOT NULL,
  `pelayanan` varchar(100) NOT NULL,
  `pelayanannotes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

