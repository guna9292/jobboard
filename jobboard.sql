-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2024 at 11:30 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(10) NOT NULL,
  `job_title` varchar(400) NOT NULL,
  `job_region` varchar(400) NOT NULL,
  `company` varchar(200) NOT NULL,
  `job_type` varchar(400) NOT NULL,
  `vacancy` varchar(400) NOT NULL,
  `experience` varchar(600) NOT NULL,
  `salary` varchar(400) NOT NULL,
  `Gender` varchar(400) NOT NULL,
  `application_deadline` varchar(400) NOT NULL,
  `jobdescription` varchar(1000) NOT NULL,
  `responsibilities` varchar(1000) NOT NULL,
  `education_experience` varchar(400) NOT NULL,
  `otherbenefits` varchar(400) NOT NULL,
  `image` varchar(400) NOT NULL DEFAULT 'https://img.freepik.com/free-vector/detective-woman-concept-illustration_114360-14822.jpg?semt=ais_hybrid',
  `category` varchar(200) NOT NULL DEFAULT 'General',
  `url` varchar(600) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `job_title`, `job_region`, `company`, `job_type`, `vacancy`, `experience`, `salary`, `Gender`, `application_deadline`, `jobdescription`, `responsibilities`, `education_experience`, `otherbenefits`, `image`, `category`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Flutter Developer', 'Visakhapatnam, Andhra Pradesh, India.', 'Digitalex Solutions', 'Regular Employee', '1', '[Preferred] 1 or 2 Year(s) of Relevant Experience', '15K - 25K/Month + bonuses', 'Any', 'Not Disclosed', 'We are looking for a talented Flutter Developer with 1-2 years of experience to join our dynamic team. The ideal candidate should have a strong understanding of Flutter and mobile app development, with the ability to create high-performance applications on Android and iOS platforms.', '- Develop and maintain mobile applications using Flutter.\r\n- Collaborate with cross-functional teams to define, design, and ship new features.\r\n- Ensure the best possible performance, quality, and responsiveness of the application.\r\n- Identify and correct bottlenecks and fix bugs.\r\n- Continuously discover, evaluate, and implement new technologies to maximize development efficiency.\r\n- Write clean, maintainable, and efficient code.\r\n- Ensure UI/UX designs are implemented as per specifications.\r\n- Test applications to ensure proper functionality and resolve any issues.', '- 1 or 2 years of experience in Flutter and mobile app development.\r\n- Proficiency in Dart programming language.\r\n- Experience with third-party libraries and APIs.\r\n- Knowledge of state management techniques (BLoC, Provider, etc.).\r\n- Familiarity with RESTful APIs to connect Flutter applications to backend services.\r\n- Experience in mobile app deployment on Android/iOS platforms.\r\n- Strong unders', '- Opportunity to work on exciting projects and gain hands-on experience.\r\n- Collaborative work environment.\r\n- Flexible working hours or remote options (if applicable).', 'https://digitalexsolutions.in/images/logo.png', 'Mobile Application Development', '', '2024-10-25 07:03:36', '2024-10-25 07:03:36'),
(233983, 'Site Reliability Developer 3\r\n', 'Bengaluru, KA, India\r\n', 'Oracle', 'Regular Employee\r\n', '2', '-6+ years of professional experience as a Site Reliability Engineer or equivalent experience.\r\n-3+ years Linux Experience.\r\n-Bachelor’s degree/master’s degree (Information Technology/ Computer System Engineering).\r\n-2+ years’ experience and working knowledge in -Python, Perl and/or Shell Scripting.\r\nManaging production running on UNIX flavours (RHEL, OEL).\r\n-Cloud experience IaaS (infrastructure as code IaaC, Configuration as code)', '(Not Disclosed)Career Level - IC3', 'Any', 'Not Disclosed', 'Tackle sophisticated problems related to infrastructure cloud services and build automation to prevent problem recurrence. Design, write, and deploy software to improve the availability, scalability, and efficiency of Oracle products and services. Craft and develop designs, architectures, standards, and methods for large-scale distributed systems. Facilitate service capacity planning and demand forecasting, software performance analysis, and system tuning.', 'Demonstrate clear understanding of automation and orchestration principles. Act as ultimate customer concern point for sophisticated or critical issues that have not yet been detailed as Standard Operating Procedures (SOPs). Apply a deep understanding of service topology and their dependencies required to solve issues and define mitigations. Understand and explain the effect of product architecture decisions on distributed systems. Professional curiosity and a desire to a develop deep understanding of services and technologies.\r\nAdditionally, you will be part of the OHAI roadmap, such as help drive the effort in the future state of our products as we begin to migrate them over to OCI platforms.\r\nKey Responsibilities:\r\nDrive Project to improve the availability, scalability, security, latency, and efficiency of our cloud service.\r\nDrives and actively participates in the resolution of complex technical issues spanning multiple Cloud services and works towards ensuring service availability', '-6+ years of professional experience as a Site Reliability Engineer or equivalent experience.\r\n-3+ years Linux Experience.\r\nBachelor’s degree/master’s degree (Information Technology/ Computer System Engineering).\r\n-2+ years’ experience and working knowledge in Python, Perl and/or Shell Scripting.\r\n-Managing production running on UNIX flavours (RHEL, OEL).\r\n-Cloud experience IaaS (infrastructure as', 'Oracle is an Equal Employment Opportunity Employer*. All qualified applicants will receive consideration for employment without regard to race, color, religion, sex, national origin, sexual orientation, gender identity, disability and protected veterans’ status, or any other characteristic protected by law. Oracle will consider for employment qualified applicants with arrest and conviction records', 'https://upload.wikimedia.org/wikipedia/commons/9/94/Logo_oracle.jpg', 'SRE', 'https://careers.oracle.com/jobs/#en/sites/jobsearch/requisitions/preview/233983', '0000-00-00 00:00:00', '2024-10-24 16:33:33'),
(2773414, 'Software Development Manager, Feature Generation Team (DSA)', 'ADCI - Karnataka', 'Amazon Web Services', 'Regular Employee', '2', ' * 2+ years of engineering team management experience\r\n * 8+ years of leading development of applications backed by AWS services or using other cloud based technologies and services experience', 'Not Disclosed(20 - 30 LPA)(INR)', 'Any', 'Not Disclosed', 'As part of the AWS Solutions organization, we have a vision to provide business applications, leveraging Amazon’s unique experience and expertise, that are used by millions of companies worldwide to manage day-to-day operations. We will accomplish this by accelerating our customers’ businesses through delivery of intuitive and differentiated technology solutions that solve enduring business challenges.', 'The role: As a Software Development Manager in the Physical Stores Tech organization, your work will require you to solve challenging problems at global scale and develop new functionalities across a broad swath of Amazon services and businesses. You\'ll build a new team from scratch, and own a clear well-defined charter. You’ll have the opportunity to dive deep into the technologies powering Amazo', '- Knowledge of engineering practices and patterns for the full software/hardware/networks development life cycle, including coding standards, code reviews, source control management, build processes, testing, certification, and livesite operations\r\n- Experience partnering with product and program management teams\r\n- Experience managing a team of high calibre Software Engineers developing complex, ', 'Not Disclosed.', 'https://seeklogo.com/images/A/amazon-web-services-aws-logo-6C2E3DCD3E-seeklogo.com.png', 'data structures', 'https://www.amazon.jobs/en/jobs/2773414/software-development-manager-feature-generation-team-dsa', '2024-10-23 12:57:38', '2024-10-23 12:57:38'),
(101829821, 'Administrative Assistant\r\n', 'Mumbai, India', 'Netflix', 'Regular Employee', '1', '7+ years as an executive assistant', 'Not Disclosed', 'Any', 'NA', '\r\nWe are seeking an experienced Administrative Assistant to support India PR. A successful candidate will be self-motivated, proactive, quick-thinking, flexible, and able to juggle multiple and diverse responsibilities, with a strong emphasis on timeliness, organisation and an unwavering attention to detail at all times. \r\n\r\nThe PR team interacts with internal teams and external partners - sometimes across multiple countries and timezones. Therefore, a high level of organisation and strong communication skills are critical. Someone who is curious, mature, moves and learns quickly, demonstrates significant initiative, and inherently exercises good judgement will be most successful.', '\r\n-Schedule meetings, internally and externally, across regions/time zones\r\n-Organise agendas for key meetings and interactions  \r\n-Maintain and update calendars; handle conflicts and reminders\r\n-Respond on behalf of the executive calendar when appropriate \r\n-Raise Purchase Orders and help to track payments to external vendors\r\n-Create early drafts of contracts and sponsorship agreements for review\r\n-Offer support on decks for internal and external presentations \r\n-Coordinate extensive domestic and international travel arrangements\r\n-Manage administrative duties around processing travel and expense reports\r\n-Manage various internal events/off-sites/projects for the team\r\n-Manage heavy communication internally and externally\r\n=Handle confidential information and build strong internal relationships ', '-Experience in PR, strategy, event organisation and booking venues \r\n-Writing press releases, articles, presentations and social media posts\r\n-Maintaining a PR database, documenting media coverage, or tracking projects.\r\n-Excellent communication skills (spoken and written)\r\n-Ability to multitask and drive time efficiency (thinking two steps ahead)  \r\n-Self-motivated, highly organised, detail orien', 'PF, Medical Assistance and Others.', 'https://cdn1.iconfinder.com/data/icons/logos-brands-in-colors/7500/Netflix_Logo_RGB-512.png', 'General', 'https://explore.jobs.netflix.net/careers?pid=790299137794&domain=netflix.com&sort_by=relevance&show_multiple=false#apply', '2024-10-25 16:39:04', '2024-10-25 16:39:04'),
(200575263, 'Database Systems Site Reliability Engineer\r\n', 'Bengaluru, KA, India', 'Apple Inc.', 'Regular Employee', '10', '8+ year(s)', 'Not Disclosed', 'Any', 'Not Disclosed.', 'The ASE Redis SRE team develops applications and tooling that are safe, reliable, scalable, and fast. This work requires an innovative spirit and an extraordinary degree of care and rigor in engineering. Team members contribute to all major components of Redis deployment infrastructure, including maintenance automation, backup service application, monitoring and alerting tooling/dashboards, deployment architecture, focused on stability, performance, and scaling.-  Understanding of core SRE concepts - Monitoring, Alerting, Incident management. ', 'Success in this role requires expertise in several of the following:\r\n\r\n-  Understanding of core SRE concepts - Monitoring, Alerting, Incident management. \r\n-  Understanding of database concepts (consistency models, isolation levels, crash and recovery semantics).\r\n-  Performance engineering (design concepts, profile-guided optimization).\r\n-  Service management across a bare metal, virtualized (EC2), and containerized (K8s) style platforms.\r\n-  Fundamentals of system-level hardware and networking components (storage devices and controllers, network interfaces, CPU and memory layout in server-class systems).\r\n-  Operating systems concepts (process scheduling, disk and network I/O, performance).\r\n-  Datacenter architecture (networking topologies, host placement strategies, and failure modes), design of multi-datacenter systems, failure domains, and wide-area networking.\r\n-  Prior experience with the development or maintenance of distributed databases/storage systems is recommended.', 'BS or MS in Computer Science / related fields or equivalent work experience\r\nService management across a bare metal, virtualized (EC2), and containerized (K8s) style platforms.\r\nFamiliarity with micro-services architecture and container orchestration with Kubernetes.\r\nUnderstanding SRE principles including monitoring, alerting, error budgets, fault analysis, and automation.\r\nStrong sense of owners', 'Its Apple.\r\nPF\r\nMedical Insurance etc many more can be a part.', 'https://www.freepnglogos.com/uploads/apple-logo-png/file-apple-logo-black-svg-wikimedia-commons-1.png', 'SRE', 'https://jobs.apple.com/en-us/details/200575263/redis-site-reliability-engineer?team=SFTWR', '2024-10-25 06:16:32', '2024-10-24 17:51:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200575264;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
