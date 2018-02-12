-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 12, 2018 at 12:56 PM
-- Server version: 5.7.16
-- PHP Version: 7.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edu`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'world'),
(3, 'tech'),
(4, 'sport'),
(6, '123');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `title`, `description`, `category`) VALUES
(2, 'Poland’s President Supports Making Some Holocaust Statements a Crime 22', 'WARSAW — President Andrzej Duda announced on Tuesday that he would sign into law a bill that makes it illegal to accuse “the Polish nation” of complicity in the Holocaust, but in a nod to critics, he asked the Constitutional Court to review the legislation.\r\n\r\nIn a speech broadcast live on Polish television and radio, Mr. Duda said that he was seeking the high court’s involvement because this “very painful, delicate issue” needed to be dealt with carefully, but that is unlikely to placate those who have accused his right-wing party of dangerous revisionism. It is unclear when a judicial review by the court, which is controlled by judges appointed by Mr. Duda’s party, might occur; the law would remain in effect until then.\r\n\r\nBrushing aside ferocious criticism from Israel, the United States, and independent scholars and experts, the party, Law and Justice, has pressed ahead with a law that opponents say could stifle free speech, and put questions of historical accuracy into the hands of judges and prosecutors who may be more motivated by politics than scholarship.\r\n\r\nMr. Duda said the Constitutional Court would determine whether the law violated free-speech protections, adding that if the law were upheld, he hoped that the court would make clear what specific kinds of speech could be prosecuted. He said the government wanted to be sure that survivors of war crimes felt free to tell their stories without fear.\r\n\r\nFor more than 20 minutes, he reviewed his country’s bloody history, noting time and again that both Poles and Jews died during the war. Like many Poles, he has a personal story of suffering, saying that his grandfather’s brother was killed by the Nazis.\r\n\r\nContinue reading the main story\r\nRELATED COVERAGE\r\n\r\nPoland Tries to Curb Holocaust Speech, and Israel Puts Up a Fight FEB. 1, 2018\r\n\r\nIsrael Slams ‘Baseless’ Holocaust Legislation in Poland JAN. 27, 2018\r\n\r\nOpinion Op-Ed Contributor\r\nPoland Digs Itself a Memory Hole FEB. 4, 2018\r\n\r\nPoland Overhauls Courts, and Critics See Retreat From Democracy DEC. 20, 2017\r\n\r\nFEATURE\r\nThe Party That Wants to Make Poland Great Again NOV. 2, 2016\r\n“Those years when Poland was occupied by the Nazis was one of the darkest time in Poland’s history,” he said.\r\n\r\nThe Israeli response was muted on Tuesday, unlike the angry reactions of recent weeks, as the law neared enactment. The Foreign Ministry took note of the Constitutional Court review, and expressed hope that Israel would “manage to agree on changes and corrections.”', 4),
(3, 'As Bitcoin Bubble Loses Air, Frauds and Flaws Rise to Surface', 'SAN FRANCISCO — You did not have to be a technophobe to worry that the virtual-currency boom of the past year papered over plenty of problems.\r\n\r\nThe scale of those problems is starting to become clear as digital tokens have slid more than 50 percent in value from their peaks in early January, with steep drops on Monday pushing the value of Bitcoin specifically below $7,000.\r\n\r\nHackers draining funds from online exchanges. Ponzi schemes. Government regulators unable to keep up with the rise of so-called cryptocurrencies. Signs of trouble have appeared at nearly every level of the industry, from the biggest exchanges to the news sites and chat rooms where the investment frenzy has been discussed.\r\n\r\nOn Tuesday, the leaders of the two main regulatory agencies in the United States that oversee the technology, the Securities and Exchange Commission and the Commodity Futures Trading Commission, are to testify before the Senate banking committee about their efforts to police virtual currency markets. In the past two weeks, both have brought major cases, but people in the young industry said regulators had barely made a dent.\r\n\r\nSome virtual currency enthusiasts argue that the problems are no different from what has happened in other booms, like the internet bubble of the 1990s. But even true believers say the design of virtual currencies — meant to cut out middlemen and government authorities — has made bad behavior more prevalent amid this particular bubble.\r\n\r\nContinue reading the main story\r\nRELATED COVERAGE\r\n\r\nDespite S.E.C. Warning, Wave of Initial Coin Offerings Grows AUG. 7, 2017\r\n\r\nInitial Coin Offerings Horrify a Former S.E.C. Regulator NOV. 26, 2017\r\n\r\nHow Floyd Mayweather Helped Two Young Guys From Miami Get Rich OCT. 27, 2017\r\n\r\nWorries Grow That the Price of Bitcoin Is Being Propped Up JAN. 31, 2018\r\n“Cryptocurrencies are almost a perfect vehicle for scams,” said Kevin Werbach, a professor at University of Pennsylvania’s Wharton School. “The combination of credulous buyers and low barriers for scammers were bound to lead to a high level of fraud, if and when the money involved got large. The fact that the money got huge almost overnight, before there were good regulatory or even self-regulatory models in place, made the problem acute.”\r\n\r\nThe fall from the peaks of early January has been dizzying. The value of all outstanding virtual currencies has been cut by more than half, down over $400 billion as of Monday, according to the website Coinmarketcap.com.\r\n\r\nIn January, the heads of the main regulators wrote in The Wall Street Journal that the situation presented an unprecedented challenge. “These markets are new, evolving and international,” Jay Clayton, the Securities and Exchange Commission’s chairman, and J. Christopher Giancarlo, his counterpart at the Commodity Futures Trading Commission, wrote. “As such they require us to be nimble and forward-looking.”\r\n\r\nGovernment agencies in the United States have shut down a few notable frauds. Early last month, securities regulators in Texas and North Carolina issued cease-and-desist orders to BitConnect, an operation that had grown to be worth $3 billion.\r\n\r\nBut those moves only came after BitConnect had operated openly for months, collecting hundreds of millions of dollars from people around the world despite being labeled a Ponzi scheme by many prominent people in the virtual currency industry. BitConnect offered tokens on a decentralized network, similar to Bitcoin, but promised regular payouts to coin holders.\r\n\r\nIn January, the Commodity Futures Trading Commission shut down My Big Coin, a purported swindle that had attracted $6 million.\r\n\r\nBut regulators have not gotten near most of the brazen schemes that have popped up in the past year, many of which had been attacked by hackers first, or simply shut down by their operators after money had been raised.\r\n\r\nA new virtual currency, Proof of Weak Hands Coin, whose creators referred to it as a Ponzi scheme on Twitter and use a pyramid as a website logo, raised $800,000 before hackers got into its systems last week and drained its funds. Another pyramid scheme, MMM, which was shut down in an earlier incarnation by the Russian government, has been revived thanks to the popularity of Bitcoin and is operating openly, with particular success in Africa.', 1),
(6, 'Which European commuters spend the most time in traffic jams?', 'Londoners spent more time in traffic jams in 2017 than motorists in any other EU city, wasting more than three full days to congestion, according to new research.\r\n\r\nThe report by transport analytics company Inrix found that drivers in London spent an average of 74 hours waiting in traffic last year, an hour more than in 2016.\r\n\r\nOverall, Londoners spent 13% of driving time in congestion.\r\n\r\nParis followed with 69 hours lost to congestion, while outside of the EU the Swiss cities of Geneva and Zurich lost 52 and 51 hours respectively.\r\n\r\n', 1),
(7, 'Belgium is (slowly) sterilising all its cats', 'New laws in Belgium are mandating that nearly all of the country’s two million cats must be sterilized to better control the surplus population of strays, making it the first state in the world to oblige citizens to spray and castrate their felines.\r\n\r\nIn the nation where cats once delivered the mail as part of a bizarre experiment in the late 1800s, nearly 30,000 cats are abandoned every year, half of which are put to death due to overpopulation at cat shelters.\r\n\r\nTo alleviate the mounting pressure on shelters, the government has ruled that all newborn cats must be sterilized before the age of six months, while those brought into the country must also be sterilized if they stay longer than 30 days. Older cats will also need to be sterilized.\r\n\r\nWhile a handful of municipal governments have legally introduced mandatory sterilization, Belgium is unique worldwide for implementing these measures on a national scale.\r\n\r\nThe law has already come into force in Brussels and the French-speaking region of Wallonia and will apply nationwide by 2020.\r\n\r\n“The logic is to stop the overpopulation of stray cats in the street. However, the measures will apply both to domestic and stray cats,” said Bianca Debaets, one of three ministers in Belgium responsible for proposing the law.', 1),
(11, 'some title 1', 'some text ', 1),
(12, 'some title 2', 'some text', 1),
(13, 'some title 3', 'some text', 1),
(14, 'some title 4', 'some text', 1),
(15, 'some title 5', 'some text', 1),
(16, 'some title 6', 'some text', 1),
(18, 'some title 8', 'some text', 1),
(19, 'some title 9', 'some text', 1),
(20, 'some title 10', 'some text', 1),
(21, 'some title 11', 'some text', 1),
(22, 'some title 12', 'some text', 1),
(23, 'some title 13', 'some text', 1),
(24, 'some title tech 1', 'some text', 1),
(25, 'some title tech 2', 'some text', 1),
(26, 'some title tech 3', 'some text', 1),
(27, 'some title tech 4', 'some text', 1),
(31, '0', '0', 1),
(33, '111111111', '111111', 1),
(37, '321', '321', 0),
(38, '123', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'test', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
