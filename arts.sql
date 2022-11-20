

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";




CREATE TABLE IF NOT EXISTS `contact` (
  `name` varchar(20) NOT NULL,
  `email` varchar(9) NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `contact` (`name`, `email`, `message`) VALUES
('farhadik', 'farhad', 'messaga');

