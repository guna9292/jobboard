-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2024 at 07:50 PM
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
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(400) NOT NULL,
  `password` varchar(400) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin.gunesh', 'nagothiguneshadmin@gmail.com', '$2y$12$Jjn/gi7aBK1p0XsQU/VmPe46xl5zBw0bkrtLIy97sggRsNQKRzXDG', '2024-11-01 09:27:05', '2024-11-01 09:27:05'),
(2, 'sravani100', 'sravaniadmin@gmail.com', '$2y$12$3Hf5sUoVjeucid8uN3xm/OBKOBCjS5jFrzDNWjbMNr5OxaBlaAwuG', '2024-11-01 10:53:51', '2024-11-01 10:53:51');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(10) NOT NULL,
  `job_id` int(10) NOT NULL,
  `cv` varchar(200) NOT NULL,
  `video` varchar(200) NOT NULL DEFAULT 'No Video',
  `user_id` varchar(400) NOT NULL,
  `email` varchar(400) NOT NULL,
  `job_image` varchar(600) NOT NULL,
  `job_title` varchar(400) NOT NULL,
  `job_region` varchar(400) NOT NULL,
  `company` varchar(400) NOT NULL,
  `job_type` varchar(400) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `job_id`, `cv`, `video`, `user_id`, `email`, `job_image`, `job_title`, `job_region`, `company`, `job_type`, `created_at`, `updated_at`) VALUES
(10, 1, 'Gunesh-Nagothi-A-4.pdf', 'Screen Recording 2024-10-25 161020.mp4', '1', 'nagothigunesh@gmail.com', 'https://digitalexsolutions.in/images/logo.png', 'Flutter Developer', 'Visakhapatnam, Andhra Pradesh, India.', 'Regular Employee', 'Digitalex Solutions', '2024-11-06 13:07:41', '2024-11-06 13:07:41');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('select*fromusers@gmail.com|127.0.0.1', 'i:1;', 1730914824),
('select*fromusers@gmail.com|127.0.0.1:timer', 'i:1730914824;', 1730914824);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `name` varchar(400) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Core Programming', '2024-10-23 18:44:54', '2024-11-03 01:13:25'),
(2, 'data structures', '2024-10-23 18:45:20', '2024-10-23 18:45:20'),
(3, 'cloud', '2024-10-23 18:45:40', '2024-10-23 18:45:40'),
(4, 'cyber security', '2024-10-23 18:45:40', '2024-10-23 18:45:40'),
(5, 'SRE', '2024-10-24 17:44:37', '2024-10-24 17:44:37'),
(6, 'SDE', '2024-10-24 17:44:37', '2024-10-24 17:44:37'),
(7, 'Mobile Application Development', '2024-10-26 16:06:59', '2024-10-26 16:06:59'),
(8, 'Management', '2024-10-26 16:07:30', '2024-10-26 16:07:30'),
(9, 'UI/UX Designer', '2024-10-26 16:07:30', '2024-10-26 16:07:30'),
(10, 'Backend ', '2024-10-26 16:08:01', '2024-10-26 16:08:01'),
(11, 'Frontend', '2024-10-26 16:08:01', '2024-10-26 16:08:01'),
(12, 'Support', '2024-11-01 11:58:16', '2024-11-01 11:58:16'),
(13, 'Operations', '2024-11-01 12:00:09', '2024-11-01 12:00:09'),
(15, 'General', '2024-11-06 17:59:08', '2024-11-06 17:59:08'),
(16, 'Trainer', '2024-11-06 17:59:08', '2024-11-06 17:59:08');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `jobsaved`
--

CREATE TABLE `jobsaved` (
  `id` int(10) NOT NULL,
  `job_id` int(40) NOT NULL,
  `user_id` int(40) NOT NULL,
  `job_image` varchar(600) NOT NULL,
  `job_title` varchar(400) NOT NULL,
  `job_region` varchar(400) NOT NULL,
  `job_type` varchar(400) NOT NULL,
  `company` varchar(400) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobsaved`
--

INSERT INTO `jobsaved` (`id`, `job_id`, `user_id`, `job_image`, `job_title`, `job_region`, `job_type`, `company`, `created_at`, `updated_at`) VALUES
(5, 2773414, 1, 'https://seeklogo.com/images/A/amazon-web-services-aws-logo-6C2E3DCD3E-seeklogo.com.png', 'Software Development Manager, Feature Generation Team (DSA)', 'ADCI - Karnataka', 'Full-time', 'Amazon Web Services', '2024-10-24 19:21:29', '2024-10-24 19:21:29'),
(6, 200575263, 2, 'https://www.freepnglogos.com/uploads/apple-logo-png/file-apple-logo-black-svg-wikimedia-commons-1.png', 'Database Systems Site Reliability Engineer', 'Bengaluru, KA, India', 'Regular Employee', 'Apple Inc.', '2024-10-25 06:49:30', '2024-10-25 06:49:30'),
(7, 1, 1, 'https://digitalexsolutions.in/images/logo.png', 'Flutter Developer', 'Visakhapatnam, Andhra Pradesh, India.', 'Regular Employee', 'Digitalex Solutions', '2024-10-25 03:09:56', '2024-10-25 03:09:56'),
(8, 234357, 1, 'https://upload.wikimedia.org/wikipedia/commons/9/94/Logo_oracle.jpg?20131125201822', 'Software Developer 3', 'Bengaluru, KA, India', 'Regular Employee', 'Oracle', '2024-10-25 13:03:29', '2024-10-25 13:03:29'),
(9, 101829821, 2, 'https://cdn1.iconfinder.com/data/icons/logos-brands-in-colors/7500/Netflix_Logo_RGB-512.png', 'Administrative Assistant', 'Mumbai, India', 'Regular Employee', 'Netflix', '2024-10-26 12:09:39', '2024-10-26 12:09:39');

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `searches`
--

CREATE TABLE `searches` (
  `id` int(10) NOT NULL,
  `keyword` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `searches`
--

INSERT INTO `searches` (`id`, `keyword`, `created_at`, `updated_at`) VALUES
(1, 'Laravel Developer', '2024-10-31 02:34:54', '2024-10-31 02:34:54'),
(2, 'DEveloper', '2024-10-31 02:35:36', '2024-10-31 02:35:36'),
(3, 'Reliability', '2024-10-31 02:36:24', '2024-10-31 02:36:24'),
(5, 'Site Reliability Engineer', '2024-10-31 02:36:43', '2024-10-31 02:36:43'),
(6, 'SRE', '2024-10-31 02:38:17', '2024-10-31 02:38:17'),
(12, 'Site Reliability Engineer', '2024-10-31 02:44:08', '2024-10-31 02:44:08'),
(13, 'developer', '2024-10-31 02:44:17', '2024-10-31 02:44:17'),
(14, 'DEveloper', '2024-10-31 02:44:46', '2024-10-31 02:44:46'),
(15, 'Reliability', '2024-10-31 02:45:04', '2024-10-31 02:45:04'),
(20, 'Engineer', '2024-10-31 02:53:50', '2024-10-31 02:53:50'),
(24, 'SRE', '2024-10-31 03:01:34', '2024-10-31 03:01:34'),
(25, 'Site Reliability Engineer', '2024-10-31 03:20:36', '2024-10-31 03:20:36'),
(26, 'SRE', '2024-10-31 03:21:28', '2024-10-31 03:21:28'),
(27, 'SRE', '2024-10-31 03:21:33', '2024-10-31 03:21:33'),
(28, 'SRE', '2024-10-31 03:35:50', '2024-10-31 03:35:50');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('qzYwvbDC9To6A4kC12H0kCw5qTd41BrwjeVqtW6U', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiNGhYb2d5ZVV1c2xpaXl4RWVhRmVQaFRiWENmN2xZUGQzZFNuS2gwMyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDA6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbi9kaXNwbGF5LWFwcHMiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6NDoiYXV0aCI7YToxOntzOjIxOiJwYXNzd29yZF9jb25maXJtZWRfYXQiO2k6MTczMDkxNDgwMTt9czo1MjoibG9naW5fYWRtaW5fNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1730918270);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(200) NOT NULL DEFAULT 'pic.png',
  `video` varchar(200) NOT NULL DEFAULT 'No Video',
  `cv` varchar(400) NOT NULL DEFAULT 'No CV',
  `job_title` varchar(200) NOT NULL DEFAULT 'No Job Title',
  `bio` varchar(1000) NOT NULL DEFAULT 'No bio',
  `github` varchar(400) NOT NULL DEFAULT 'No github',
  `facebook` varchar(400) NOT NULL DEFAULT 'No facebook',
  `linkedin` varchar(400) NOT NULL DEFAULT 'No Linkedin',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `image`, `video`, `cv`, `job_title`, `bio`, `github`, `facebook`, `linkedin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Gunesh Nagothi', 'nagothigunesh@gmail.com', NULL, '$2y$12$Jjn/gi7aBK1p0XsQU/VmPe46xl5zBw0bkrtLIy97sggRsNQKRzXDG', 'passport_guna.jpg', 'Screen Recording 2024-10-25 161020.mp4', 'Gunesh-Nagothi-A-4.pdf', 'Laravel Developer', 'I am a passionate back-end engineer with cloud computing knowledge and AWS proficiency.', 'https://github.com/guna9292', 'https://www.facebook.com/in/nagothigunesh', 'https://linkedin.com/in/gunesh-nagothi', NULL, '2024-10-16 13:17:39', '2024-11-06 12:54:24'),
(2, 'Sravani', 'sravanikuppili.100@gmail.com', NULL, '$2y$12$Naoz4jS/78oL5nWwycQINeCPH7iBMuKzmSHByTr91a/DLBdKeOMFC', 'pic.png', 'No Video', 'DA_RECORD_CSE.pdf', 'No Job Title', 'No bio', 'No github', 'No facebook', 'No Linkedin', NULL, '2024-10-21 04:34:20', '2024-11-06 11:40:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobsaved`
--
ALTER TABLE `jobsaved`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `searches`
--
ALTER TABLE `searches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200575264;

--
-- AUTO_INCREMENT for table `jobsaved`
--
ALTER TABLE `jobsaved`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `searches`
--
ALTER TABLE `searches`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
