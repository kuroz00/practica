-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 06, 2024 at 12:39 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ucm_visor_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `llamadas`
--

CREATE TABLE `llamadas` (
  `AcctId` int(11) NOT NULL,
  `AccountCode` int(255) DEFAULT NULL COMMENT 'Relacion con usuarios',
  `action_owner` int(11) NOT NULL,
  `action_type` text NOT NULL,
  `amaflags` text NOT NULL,
  `answer` datetime NOT NULL,
  `billsec` int(11) NOT NULL,
  `caller_name` text NOT NULL,
  `cdr` text NOT NULL,
  `chanext` text NOT NULL,
  `channel` text NOT NULL,
  `channel_ext` text NOT NULL,
  `clid` text NOT NULL,
  `dcontext` text NOT NULL,
  `disposition` text NOT NULL,
  `dst` int(11) NOT NULL,
  `dst_trunk_name` text NOT NULL,
  `dstanswer` text NOT NULL,
  `dstchanext` text NOT NULL,
  `dstchannel` text NOT NULL,
  `dstchannel_ext` text NOT NULL,
  `duration` int(11) NOT NULL,
  `end` datetime NOT NULL,
  `lastapp` text NOT NULL,
  `lastdata` text NOT NULL,
  `recordfiles` text NOT NULL,
  `service` text NOT NULL,
  `session` text NOT NULL,
  `src` text NOT NULL,
  `src_trunk_name` text NOT NULL,
  `start` datetime NOT NULL,
  `uniqueid` text NOT NULL,
  `userfield` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `llamadas`
--

INSERT INTO `llamadas` (`AcctId`, `AccountCode`, `action_owner`, `action_type`, `amaflags`, `answer`, `billsec`, `caller_name`, `cdr`, `chanext`, `channel`, `channel_ext`, `clid`, `dcontext`, `disposition`, `dst`, `dst_trunk_name`, `dstanswer`, `dstchanext`, `dstchannel`, `dstchannel_ext`, `duration`, `end`, `lastapp`, `lastdata`, `recordfiles`, `service`, `session`, `src`, `src_trunk_name`, `start`, `uniqueid`, `userfield`) VALUES
(1, 2, 123, 'example_action', 'flag_example', '2024-11-03 10:00:00', 60, 'Caller Name', 'cdr_data', 'chanext_data', 'channel_data', 'channel_ext_data', 'clid_data', 'dcontext_data', 'completed', 456, 'dst_trunk_name_data', 'dst_answer_data', 'dst_chanext_data', 'dst_channel_data', 'dst_channel_ext_data', 120, '2024-11-03 10:02:00', 'last_app_data', 'last_data_example', 'record_file_example', 'service_data', 'session_data', 'src_data', 'src_trunk_name_data', '2024-11-03 10:00:00', 'unique_id_data', 'user_field_data');

-- --------------------------------------------------------

--
-- Table structure for table `llamadaspnt`
--

CREATE TABLE `llamadaspnt` (
  `AcctId` int(11) NOT NULL,
  `AccountCode` text NOT NULL,
  `action_owner` int(11) NOT NULL,
  `action_type` text NOT NULL,
  `amaflags` text NOT NULL,
  `answer` datetime NOT NULL,
  `billsec` int(11) NOT NULL,
  `caller_name` text NOT NULL,
  `cdr` text NOT NULL,
  `chanext` text NOT NULL,
  `channel` text NOT NULL,
  `channel_ext` text NOT NULL,
  `clid` text NOT NULL,
  `dcontext` text NOT NULL,
  `disposition` text NOT NULL,
  `dst` int(11) NOT NULL,
  `dst_trunk_name` text NOT NULL,
  `dstanswer` text NOT NULL,
  `dstchanext` text NOT NULL,
  `dstchannel` text NOT NULL,
  `dstchannel_ext` text NOT NULL,
  `duration` int(11) NOT NULL,
  `end` datetime NOT NULL,
  `lastapp` text NOT NULL,
  `lastdata` text NOT NULL,
  `recordfiles` text NOT NULL,
  `service` text NOT NULL,
  `session` text NOT NULL,
  `src` text NOT NULL,
  `src_trunk_name` text NOT NULL,
  `start` datetime NOT NULL,
  `uniqueid` text NOT NULL,
  `userfield` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(128) NOT NULL,
  `apellido_p` varchar(128) NOT NULL,
  `apellido_s` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usuario` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `sede` varchar(255) NOT NULL,
  `edificio` varchar(255) NOT NULL,
  `piso` int(32) NOT NULL,
  `oficina` int(32) NOT NULL,
  `anexo` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido_p`, `apellido_s`, `email`, `usuario`, `password`, `sede`, `edificio`, `piso`, `oficina`, `anexo`) VALUES
(2, 'DIEGO DAVID', 'PACHECO', 'OJEDA', 'dpacheco@umag.cl', 'dpacheco', '$2y$10$vzSoSJjG5xSnBT0jijvo5e7ufbZlFNpoV1cTx915jTi1gnR9dnV4a', 'PUNTA ARENAS', 'FACULTAD DE INGENIERIA', 2, 24, 2001);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `llamadas`
--
ALTER TABLE `llamadas`
  ADD KEY `id_usuario_guardado` (`AccountCode`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `llamadas`
--
ALTER TABLE `llamadas`
  ADD CONSTRAINT `id_usuario_guardado` FOREIGN KEY (`AccountCode`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
