-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2023 at 02:57 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dmit`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `sr` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `age` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` int(50) NOT NULL,
  `title` text NOT NULL,
  `category` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `featured_img` varchar(500) NOT NULL,
  `author` varchar(100) NOT NULL DEFAULT 'Admin',
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`blog_id`, `title`, `category`, `description`, `featured_img`, `author`, `dt`) VALUES
(3, 'Unlocking Potential: Understanding the Power of DMIT', 'Dmit Test', '&lt;p&gt;In a world where each individual is unique, discovering and nurturing inherent talents is a key factor for personal and professional success. The Dermatoglyphics Multiple Intelligence Test (DMIT) has emerged as a powerful tool in unraveling the mysteries of human potential. Let&#039;s delve into the intricacies of DMIT and explore how it can be a game-changer in understanding and harnessing one&#039;s innate strengths.&lt;/p&gt;&lt;h2&gt;&lt;strong&gt;The Science Behind DMIT&lt;/strong&gt;&lt;/h2&gt;&lt;p&gt;DMIT is a scientific study of fingerprints that reveals a person&#039;s innate intelligence, potential, and unique characteristics. The patterns of ridges and lines on our fingertips are not just random designs; they hold valuable information about our cognitive abilities, learning styles, and emotional well-being. Developed from the age-old science of dermatoglyphics, DMIT combines genetics, embryology, neurobiology, and psychology to provide a comprehensive analysis.&lt;/p&gt;&lt;h2&gt;&lt;strong&gt;Personalized Insights for Optimal Development&lt;/strong&gt;&lt;/h2&gt;&lt;p&gt;One of the key advantages of DMIT is its ability to provide personalized insights into an individual&#039;s strengths and weaknesses across multiple intelligences. From logical-mathematical intelligence to interpersonal skills, DMIT assesses a range of aptitudes, allowing individuals to tailor their learning and career paths accordingly. This personalized approach is invaluable for parents, educators, and individuals seeking to make informed decisions about education and career choices.&lt;/p&gt;&lt;h2&gt;&lt;strong&gt;Early Identification of Potential&lt;/strong&gt;&lt;/h2&gt;&lt;p&gt;DMIT is not just about understanding existing capabilities but also about identifying latent potential. By analyzing fingerprints, DMIT can reveal dormant talents that might not be apparent through traditional assessments. This early identification allows for targeted interventions and guidance, ensuring that individuals can unlock their full potential from a young age.&lt;/p&gt;&lt;h2&gt;&lt;strong&gt;Enhancing Learning and Communication&lt;/strong&gt;&lt;/h2&gt;&lt;p&gt;One of the practical applications of DMIT is in education. By recognizing a student&#039;s primary learning style, educators can tailor their teaching methods to match individual needs. Moreover, DMIT sheds light on an individual&#039;s communication preferences, fostering better understanding and collaboration in both personal and professional relationships.&lt;/p&gt;&lt;h2&gt;&lt;strong&gt;A Tool for Personal and Professional Growth&lt;/strong&gt;&lt;/h2&gt;&lt;p&gt;As we navigate the complexities of life, understanding ourselves becomes paramount. DMIT serves as a compass for personal and professional growth, offering a roadmap to harness innate abilities and overcome challenges. Whether you&#039;re a parent guiding your child, an educator shaping young minds, or an individual on a quest for self-discovery, DMIT can be the catalyst for transformative change.&lt;/p&gt;&lt;h2&gt;&lt;strong&gt;Conclusion&lt;/strong&gt;&lt;/h2&gt;&lt;p&gt;Unlocking the potential within ourselves is a journey of self-discovery, and DMIT serves as a guiding light on this path. By harnessing the power of dermatoglyphics, we gain insights that empower us to make informed decisions about education, career, and personal development. The journey towards realizing one&#039;s full potential begins with understanding the unique fingerprints that make each of us exceptional.&lt;/p&gt;&lt;p&gt;In the realm of self-discovery, DMIT is not just a test; it&#039;s a transformative experience that opens doors to a world of possibilities.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&amp;nbsp;&lt;/p&gt;', '2023121741nlp.jpg', 'Admin', '2023-12-17 17:11:09'),
(4, 'Decoding Potential: A Deep Dive into the World of DMIT', 'Education', '&lt;p&gt;In a world driven by individuality and unique capabilities, the Dermatoglyphics Multiple Intelligence Test (DMIT) stands as a beacon for those seeking to understand the intricacies of their innate potential. Join us on a fascinating journey as we decode the mysteries behind DMIT and explore the profound insights it offers into personal and professional development.&lt;/p&gt;&lt;h2&gt;&lt;strong&gt;The Intricate Science of Dermatoglyphics&lt;/strong&gt;&lt;/h2&gt;&lt;p&gt;At the heart of DMIT lies the ancient science of dermatoglyphics, where the patterns on our fingertips reveal a story far beyond their visual appeal. By combining modern scientific disciplines such as genetics, embryology, and psychology, DMIT provides a holistic analysis of an individual&#039;s intelligence, strengths, and distinctive characteristics.&lt;/p&gt;&lt;h2&gt;&lt;strong&gt;Unveiling Personalized Intelligence Profiles&lt;/strong&gt;&lt;/h2&gt;&lt;p&gt;DMIT goes beyond conventional assessments by offering a personalized intelligence profile based on the analysis of fingerprint patterns. From linguistic and logical-mathematical intelligence to spatial and intrapersonal skills, individuals gain insights into their unique blend of multiple intelligences. This tailored approach proves invaluable in making informed decisions about education, career paths, and personal growth.&lt;/p&gt;&lt;h2&gt;&lt;strong&gt;Nurturing Talents and Addressing Challenges&lt;/strong&gt;&lt;/h2&gt;&lt;p&gt;One of the standout features of DMIT is its ability to identify both visible and latent talents. By recognizing dormant potential, individuals can embark on a journey of self-discovery and skill development. Moreover, DMIT doesn’t just stop at highlighting strengths; it also provides insights into areas that may require attention, enabling a proactive approach to overcoming challenges.&lt;/p&gt;&lt;h2&gt;&lt;strong&gt;Shaping Education with Individual Learning Styles&lt;/strong&gt;&lt;/h2&gt;&lt;p&gt;In the realm of education, DMIT serves as a guiding light for educators and parents. Understanding a student&#039;s primary learning style allows for customized teaching methodologies, ensuring that education aligns seamlessly with individual needs. This tailored approach not only enhances academic performance but also fosters a love for learning.&lt;/p&gt;&lt;h2&gt;&lt;strong&gt;A Catalyst for Personal Transformation&lt;/strong&gt;&lt;/h2&gt;&lt;p&gt;DMIT is more than a test; it&#039;s a catalyst for personal transformation. Whether you&#039;re a parent guiding a child toward their true potential, an educator shaping young minds, or an individual on a quest for self-discovery, DMIT opens doors to a deeper understanding of oneself. It becomes a roadmap to navigate the complexities of life with confidence and purpose.&lt;/p&gt;&lt;h2&gt;&lt;strong&gt;Conclusion: Unleashing the Power Within&lt;/strong&gt;&lt;/h2&gt;&lt;p&gt;Decoding the potential within each of us is a profound journey, and DMIT serves as the key to unlocking doors to self-realization. As we embrace the insights revealed by our unique fingerprints, we embark on a transformative path toward realizing our full potential — a journey of self-discovery and personal empowerment.&lt;/p&gt;&lt;p&gt;In the grand tapestry of individuality, DMIT is the thread that weaves together the story of our unique capabilities and endless possibilities.&lt;/p&gt;', '2023121743what dmit.png', 'Admin', '2023-12-17 17:11:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `sr` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
