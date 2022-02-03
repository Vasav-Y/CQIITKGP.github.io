-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2021 at 11:28 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `bloglist`
--

CREATE TABLE `bloglist` (
  `S.No` int(8) NOT NULL,
  `blogid` int(255) NOT NULL,
  `Interviewer` varchar(50) NOT NULL,
  `Interviewee` varchar(50) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Department` varchar(10) NOT NULL,
  `Series` varchar(30) NOT NULL,
  `placeNintern` varchar(20) NOT NULL,
  `Descript` varchar(1000) NOT NULL,
  `Company` varchar(50) NOT NULL,
  `FacebookLink` varchar(255) NOT NULL,
  `linkedInLink` varchar(255) NOT NULL,
  `instaLink` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloglist`
--

INSERT INTO `bloglist` (`S.No`, `blogid`, `Interviewer`, `Interviewee`, `Title`, `Department`, `Series`, `placeNintern`, `Descript`, `Company`, `FacebookLink`, `linkedInLink`, `instaLink`, `photo`) VALUES
(1, 1, 'Sadhvika', 'Diwakar', 'Mechanical Core', 'ME', 'core', 'placed', 'This interview was taken in the year 2019 and sheds light on core opportunities in mechanical core', 'Audi', 'https://www.facebook.com/dennyb.justin', 'https://www.linkedin.com/in/denny-b-justin-2340a1215/', 'https://www.instagram.com/priyanshugautam1923/', 'https://drive.google.com/uc?export=view&id=112rzqP9rXSgBe7O9_bp832H0U0A19iow');

-- --------------------------------------------------------

--
-- Table structure for table `conversation`
--

CREATE TABLE `conversation` (
  `S.No` int(8) NOT NULL,
  `blogid` int(255) NOT NULL,
  `QSummary` varchar(255) NOT NULL,
  `Question` mediumtext NOT NULL,
  `Answer` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `conversation`
--

INSERT INTO `conversation` (`S.No`, `blogid`, `QSummary`, `Question`, `Answer`) VALUES
(2, 1, 'Introduction', 'Hello Diwakar! This is Sadhvika from Communiqué. Heartiest congratulations on being placed at Lam Research. If I have your consent may I take a short interview with you?', 'Thank you Sadhvika! Yeah sure, let’s have a discussion. Please go ahead.'),
(3, 1, 'Why core..!!', 'How did you decide to go in the core profile considering that coding and data are usually in vogue and are most talked about?', 'I had a liking for core mechanical engineering from the beginning itself, which did not change at any stage. I also knew about the various on-campus/ off-campus opportunities available in the domain. I had the interest and the confidence to excel as well, therefore, there was no reason I switched to other profiles.'),
(4, 1, 'Interview process', 'What was the general interview process (number of rounds, questions asked, topics they questioned about in each round, etc.) for the companies that you aimed for?', 'Most of the technical companies have similar interview processes. The first round is the technical round which generally takes about an hour. In this round, they cover up much of the whole mechanical course curriculum. The second round is the HR round but they did ask some Engineering intuitive questions in the interview of LAM Research and it took about 20–30 mins. Regarding written rounds: For Bajaj, we had the aptitude and core-based questions in MCQ format. The questions asked were theory-based, no numerical and relatively easier than others. The questions asked for the written round of placement for Lam were the most challenging and different according to me. The questions were subjective and were to be handwritten and uploaded in a portal that was provided. They had 8–9 questions to be solved in about 90 mins or so. The questions weren’t routine and they checked how strong your basics and application of concepts are. The second round is the interview round. Here I’d like to mention one thing that is even though my interview with Jaguar went very well, I wasn’t selected. The reason being that they had less vacancy and they preferred other candidates who had exposure in the domain of the automobile through some research group or research project they had been a part of. Bajaj also needs candidates with previous experience in that field. So my advice is that if you wish to join this field you should take an initiative to be a part of a research group or take a research project in this field.'),
(5, 1, 'Relevance of CGPA', 'Many of us have heard that one should aim for going into the core sector only when your CG is high. Would you like to comment on that statement?', 'A good CGPA helps a lot. They are important for you to get selected for the interview round as the companies consider it along with the test scores. So above 8 is good enough, and above 8.5 would be a great place to be. Having said that the people with an average CG may also get shortlisted but make sure you have a good reason for it. Like you could back it up with a research project saying that you were more focused on gaining practical knowledge and such.'),
(6, 1, 'Study resources', 'Any resources you’d like to mention which you used while preparing? Eg- any additionals you took, online courses, etc.', 'In my opinion, there is no need for additional courses because the college course curriculum covers everything you need. So if you are thorough with the curriculum then you will be able to crack the general placement process in the core. The additionals offered are very specific for a certain field and if you are preparing for a general core placement, then the course curriculum is your key. Taking additionals should solely be one’s own choice, based on the interest they have. Here I would also mention that many ignore their 1st and 2nd-year basic courses but they are the conceptual foundation, questions based on these are also asked in the interviews as well. So when you prepare for the placement I would advise you to revise all the concepts from your 1st year itself. It is not necessary to take up additional courses or any online material. Your course curriculum would be sufficient for the theory part. You should revise your concepts from a reference book because I believe that reading helps in better understanding and retaining the knowledge for a long time. And if you have taken up research or an internship you might need to learn software or two which you could from the many videos available on youtube and any other online platform.'),
(7, 1, 'Strategy for preparation', 'What was your strategy for preparation? Did you change it depending on which company you were aiming for and in between rounds?', 'First of all do not aim for just a single company and put all your energy behind it. You should aim for a set of 5 to 6 companies you wish to get into and focus on them and prepare accordingly so you don’t panic at the last moment. So my strategy was to prepare short notes of the topics as I revised them so that I could recollect all of them at the end. So in the last semester that is the placement semester I started preparing in this way and in 2–3 months I had covered up all the core engineering subjects and I had all the short notes ready with me. So whenever I had a test for a certain company it was very easy for me to revise the topics relevant to the profile of the company.'),
(8, 1, 'Opportunities in core', 'It is generally said that there are fewer opportunities in the core sector than non-core sector. Is this the case and is if so what are the opportunities we should look out for and focus on?', 'There are many opportunities in the core sector though they may be less in the campus placements, there are many out of it. You can always get very good PSU jobs through GATE and you get into government sectors through engineering services examinations. Apart from that, there are examinations conducted for ISRO, DRDO, BARC, and so on. So opportunities are there. We just need to explore and have an open mind towards it.'),
(9, 1, 'Research under a prof', 'How often do we get an opportunity to work on a research project under a professor on the campus?', 'It truly depends on the professor. Like some professors who are quite reputed for their research in the department, they like to take students early. They would have students under them from the second year itself. It would be difficult to get a project under them in the later years. So you could approach them in the second year itself when you are well acquainted with a few core topics and learn your interests. But yes, BTPs and MTPs are also a very good option since 2 years is also enough to get a good yield project in the core. BTPs and MTPs are not difficult to get under a professor of your choice, but it is always advisable to start early on. To get a good project, you should first check the profile of the professor and learn what his field of research is. This can be easily learned by the institutes’ webpage for the faculty department. And then you need to explore a bit on your own so that you are properly acquainted with it and make sure the research is relevant to the industry. So now when you approach a professor saying you are interested in his research and wish to work under him, seeing that you are well informed about the project, you have significant chances of securing the opportunity. You should also take initiative from the beginning itself to get the best out of the professor because several students are working under him. So he would focus on you only if you show interest in it. Some of the professors also consider your CGPA but not many. So if you show a real interest in the domain, CGPA shouldn’t be a problem.'),
(10, 1, 'Advice to juniors', 'What advice would you like to give your juniors who will be sitting for placements this year?', 'I would advise them to focus on the thing under their control. With the circumstances of today, a lot of things might feel uncertain and chaotic. So keeping your focus is very important. Like for example, I had expected to get into ISRO as it had been visiting our campus in the past few years but at the last moment, I was informed that it wouldn’t visit the campus this year. So in this situation, you should try to focus on the fact that you still haven’t lost the opportunity and you have a lot of time to prepare and things like that. Because your efforts and hard work will never be wasted and will always pay off well.'),
(11, 1, 'Internship in second year', 'What is your opinion on taking an internship in the second year?', 'Considering the time we all are facing I’m sure how possible it would be to get an internship in the core industry and that too for a second year. The reason being the restricted mobility now. But even if you don’t have an internship, you can always approach a professor. Working under a professor in the second year is very underrated when it is a great opportunity to get an insight into the core domain that not many of your peers would have. In my opinion, it is the best possible use of your time.'),
(12, 1, 'Message for the Junta', 'What would you like to say to the general KGP public out there? Any advice for them?', 'I would like to say that you need to maintain a balance in your life. Academics are important but so is socializing and developing your personality and making friends for life while on campus. As you’re not only going to take a degree with you but also the memories of the years of your life spent here, to cherish for a lifetime. So be a better judge of yourself to know the right time to do what. When you will be able to judge yourself, that’s when you will enjoy your life here to the fullest and never regret what you did.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloglist`
--
ALTER TABLE `bloglist`
  ADD PRIMARY KEY (`S.No`);

--
-- Indexes for table `conversation`
--
ALTER TABLE `conversation`
  ADD PRIMARY KEY (`S.No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bloglist`
--
ALTER TABLE `bloglist`
  MODIFY `S.No` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `conversation`
--
ALTER TABLE `conversation`
  MODIFY `S.No` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
