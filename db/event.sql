-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2019 年 3 月 03 日 03:19
-- サーバのバージョン： 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seven_event`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `event`
--

CREATE TABLE `event` (
  `id` int(8) NOT NULL,
  `title` varchar(255) NOT NULL,
  `eventdate` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `hotel_id` int(8) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `delete_flg` int(1) NOT NULL DEFAULT '0',
  `finished_flg` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `event`
--

INSERT INTO `event` (`id`, `title`, `eventdate`, `link`, `description`, `hotel_id`, `image_name`, `delete_flg`, `finished_flg`) VALUES
(14, '「Omiai×デジママ」コラボイベント', '2.11', '', 'SEVEN GARDEN 浅草で、あのOmiai様とデジママ「よし子」のコラボイベントを開催しました！  人生経験豊富な、デジママこと「よし子」が皆さんに気の効いたフォローをしてくれます。\r\n 開催の際は当サイトで告知していきます！', 2, 'omiaデジママ.jpg', 0, 1),
(16, '英語落語', '3.24', '', '【定期開催】\r\n\r\n今月も浅草で「英語落語」イベントを開催します！  読んで字のごとく落語を英語で行うイベントです。プロが話す英語の落語、ぜひ一度聞いてみてください！', 2, '英語落語.jpg', 0, 0),
(17, 'ZOOMADANKE~けん玉イベント~', '2.17', '', '【定期開催】\r\n\r\nけん玉のパフォーマー集団ZOOMADANKEがプレゼンターのけん玉イベントです！子供の頃一度は触れたことのあるけん玉。大人になった今、かっこよくけん玉をしてみませんか？', 2, '', 0, 1),
(19, 'DAMA BASE ASAKUSA', '3.14', '', '【定期開催】  けん玉のパフォーマー集団ZOOMADANKEがプレゼンターのけん玉イベントです！子供の頃一度は触れたことのあるけん玉。大人になった今、かっこよくけん玉をしてみませんか？', 2, 'けん玉１.jpg', 0, 0),
(20, 'DAMA BASE ASAKUSA', '3.23', '', '【定期開催】  けん玉のパフォーマー集団ZOOMADANKEがプレゼンターのけん玉イベントです！子供の頃一度は触れたことのあるけん玉。大人になった今、かっこよくけん玉をしてみませんか？', 2, '', 0, 0),
(21, 'DAMA BASE ASAKUSA', '3.28', '', '【定期開催】  けん玉のパフォーマー集団ZOOMADANKEがプレゼンターのけん玉イベントです！子供の頃一度は触れたことのあるけん玉。大人になった今、かっこよくけん玉をしてみませんか？', 2, '', 0, 0),
(24, 'ボードゲーム会', '2.22', '', 'well asakusaにてボードゲーム会を開催しました。スリルとワクワク感のあるボードゲームはとても交流を深めてくれました！', 2, 'ボードゲーム.jpg', 0, 1),
(26, '「クラシカ・エール×デジママ」コラボイベント', '2.8', '', 'デジママがファシリテータのバイオリン鑑賞イベント！演奏中は素敵な音色、演奏の合間にデジママの絶妙な司会で退屈と無縁の伝説のイベント。', 2, 'バイオリン・デジママ.jpg', 0, 1),
(29, '画像テスト', '2.14', 'https://7garden.co.jp/', '楽しいです', 2, 'id_29_event_img_3', 0, 1),
(31, '画像テスト2', '3.24', '', '楽しくないかもしれないです', 2, 'id_31_event_img_3', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
