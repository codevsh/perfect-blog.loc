-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2023 at 04:16 PM
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
-- Database: `perfect_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'about.jpg',
  `content` text NOT NULL DEFAULT '<p>Lorem ipsum dolor sit amet consectetur. Ut diam ut scelerisque orci imperdiet potenti. Nunc fringilla velit aliquam libero. Metus felis eu a rhoncus sodales viverra nullam. Morbi mauris orci sed pellentesque nec enim sed ac laoreet. Tellus velit amet at posuere porttitor sapien est. Et hendrerit purus curabitur purus lorem.</p>\n\n            <p>Vitae amet eu eu praesent nam tellus. Bibendum erat volutpat quis mauris integer ante dui. Sed et pulvinar felis eu. Varius ac mauris in neque et. Cursus sagittis sed hendrerit eu venenatis. Sit diam tempus sit id neque laoreet leo orci amet. Egestas non sociis vulputate tristique amet aliquam pellentesque. Tortor tincidunt vulputate cras auctor. Maecenas condimentum lorem orci donec. At enim varius augue accumsan amet amet quam. Et erat interdum dignissim donec. Tortor lacinia felis quis nulla eget.</p>',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `image`, `content`, `created_at`, `updated_at`) VALUES
(1, 'about1697980853.jpg', '<div>Edited Phasellus a est. Phasellus accumsan cursus velit. Sed augue ipsum, egestas nec, vestibulum et, malesuada adipiscing, dui. Sed aliquam ultrices mauris. Nam adipiscing. Etiam sit amet orci eget eros faucibus tincidunt. Nullam quis ante. Fusce risus nisl, viverra et, tempor et, pretium in, sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis leo.</div><div><br></div><div>Cras risus ipsum, faucibus ut, ullamcorper id, varius ac, leo. Pellentesque ut neque. Fusce ac felis sit amet ligula pharetra condimentum. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Nullam quis ante. Sed in libero ut nibh placerat accumsan. Pellentesque dapibus hendrerit tortor. Fusce pharetra convallis urna. Fusce risus nisl, viverra et, tempor et, pretium in, sapien.</div>', '2023-10-22 09:11:29', '2023-10-24 02:46:59');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `prev_img` varchar(255) DEFAULT NULL,
  `main_img` varchar(255) DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `slug`, `description`, `prev_img`, `main_img`, `category_id`, `meta_title`, `meta_description`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(1, 'Fusce egestas elit eget lorem', 'fusce-egestas-elit-eget-lorem', '<p>Fusce egestas elit eget lorem. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Praesent egestas tristique nibh. Etiam ut purus mattis mauris sodales aliquam. Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo.</p><p>Nulla facilisi. Maecenas egestas arcu quis ligula mattis placerat. In turpis. Phasellus consectetuer vestibulum elit. Aenean imperdiet.<br></p><blockquote class=\"blockquote\">Nunc nec neque. Morbi vestibulum volutpat enim. Sed in libero ut nibh placerat accumsan. Nullam quis ante. Proin faucibus arcu quis ante.</blockquote><p>Quisque rutrum. Curabitur a felis in nunc fringilla tristique. Aenean massa. Aenean vulputate eleifend tellus. Phasellus consectetuer vestibulum elit.<br></p><p>Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Morbi ac felis. Praesent ut ligula non mi varius sagittis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed aliquam, nisi quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus quis orci. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero.<br></p>', 'articles/prev_1697315367.jpg', 'articles/main_1697315367.jpg', 1, NULL, NULL, NULL, '2023-10-14 17:29:27', '2023-10-14 17:29:27'),
(2, 'Vivamus in erat ut urna', 'vivamus-in-erat-ut-urna', '<p>Vivamus consectetuer hendrerit lacus. Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Sed hendrerit. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p><p>Proin magna. Maecenas vestibulum mollis diam. Cras id dui. Phasellus consectetuer vestibulum elit. Vivamus euismod mauris.<br></p><blockquote class=\"blockquote\">Nulla facilisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce id purus. Curabitur turpis. Curabitur a felis in nunc fringilla tristique..</blockquote><p>Vestibulum eu odio. Vivamus quis mi. Suspendisse potenti. Vestibulum rutrum, mi nec elementum vehicula, eros quam gravida nisl, id fringilla neque ante vel mi. Mauris sollicitudin fermentum libero.<br></p><p>Praesent turpis. Curabitur at lacus ac velit ornare lobortis. Fusce vulputate eleifend sapien. Nunc interdum lacus sit amet orci. Nulla consequat massa quis enim.<br></p>', 'articles/prev_1697315445.jpg', 'articles/main_1697315445.jpg', 2, NULL, NULL, NULL, '2023-10-14 17:30:46', '2023-10-14 17:30:46'),
(3, 'Etiam feugiat lorem non metus', 'etiam-feugiat-lorem-non-metus', '<p>Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est. Vivamus in erat ut urna cursus vestibulum. Suspendisse feugiat. Sed in libero ut nibh placerat accumsan. Phasellus leo dolor, tempus non, auctor et, hendrerit quis, nisi.</p><blockquote class=\"blockquote\">Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Donec venenatis vulputate lorem. Quisque malesuada placerat nisl.</blockquote><p>Nam eget dui. Cras risus ipsum, faucibus ut, ullamcorper id, varius ac, leo. In ut quam vitae odio lacinia tincidunt. Curabitur nisi. Vestibulum fringilla pede sit amet augue.<br></p><p>Donec vitae orci sed dolor rutrum auctor. Maecenas malesuada. Nulla neque dolor, sagittis eget, iaculis quis, molestie non, velit. Etiam vitae tortor. Maecenas nec odio et ante tincidunt tempus.<br></p><p>Vestibulum eu odio. Fusce vel dui. Donec vitae sapien ut libero venenatis faucibus. Pellentesque auctor neque nec urna. Pellentesque libero tortor, tincidunt et, tincidunt eget, semper nec, quam.<br></p>', 'articles/prev_1697315515.jpg', 'articles/main_1697315516.jpg', 2, NULL, NULL, NULL, '2023-10-14 17:31:56', '2023-10-14 17:31:56'),
(4, 'Vivamus aliquet elit ac nisl', 'vivamus-aliquet-elit-ac-nisl', '<p>Morbi mollis tellus ac sapien. Etiam ut purus mattis mauris sodales aliquam. Phasellus accumsan cursus velit. Aenean viverra rhoncus pede. Nunc egestas, augue at pellentesque laoreet, felis eros vehicula leo, at malesuada velit leo quis pede.</p><p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed aliquam, nisi quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus quis orci. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Quisque libero metus, condimentum nec, tempor a, commodo mollis, magna. Vestibulum suscipit nulla quis orci. Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor, a pretium mi sem ut ipsum.<br></p><blockquote class=\"blockquote\">Donec mollis hendrerit risus. Donec posuere vulputate arcu. Mauris sollicitudin fermentum libero. Sed hendrerit. Morbi mollis tellus ac sapien.</blockquote><p>Suspendisse eu ligula. Praesent nec nisl a purus blandit viverra. Quisque ut nisi. Praesent egestas tristique nibh. Quisque id mi.<br></p><p>Suspendisse feugiat. Suspendisse nisl elit, rhoncus eget, elementum ac, condimentum eget, diam. Maecenas egestas arcu quis ligula mattis placerat. Morbi nec metus. Nullam tincidunt adipiscing enim.<br></p>', 'articles/prev_1697315584.jpg', 'articles/main_1697315585.jpg', 3, NULL, NULL, NULL, '2023-10-14 17:33:05', '2023-10-14 17:33:05'),
(5, 'Phasellus volutpat metus eget egestas', 'phasellus-volutpat-metus-eget-egestas', '<p>Nulla neque dolor, sagittis eget, iaculis quis, molestie non, velit. Praesent venenatis metus at tortor pulvinar varius. Fusce egestas elit eget lorem. Pellentesque dapibus hendrerit tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce id purus.</p><p>In ac felis quis tortor malesuada pretium. Quisque id odio. Nullam vel sem. Nunc egestas, augue at pellentesque laoreet, felis eros vehicula leo, at malesuada velit leo quis pede..<br></p><p>Aliquam erat volutpat. Phasellus ullamcorper <font color=\"#000000\" style=\"background-color: rgb(255, 255, 0);\">ipsum rutrum nunc.</font> Aenean ut eros et nisl sagittis vestibulum. Pellentesque auctor neque nec urna. Fusce pharetra convallis urna.<br></p><p>Etiam ultricies nisi vel augue. Duis lobortis massa imperdiet quam. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Integer tincidunt. Donec sodales sagittis magna.<br></p><p>Donec mi odio, faucibus at, scelerisque quis, convallis in, nisi. Aenean massa. Nullam tincidunt adipiscing enim. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Fusce vulputate eleifend sapien.<br></p>', 'articles/prev_1697315667.jpg', 'articles/main_1697315667.jpg', 4, NULL, NULL, NULL, '2023-10-14 17:34:27', '2023-10-14 17:34:27'),
(6, 'Praesent egestas neque eu enim', 'praesent-egestas-neque-eu-enim', '<p>In auctor lobortis lacus. Cras sagittis. Vestibulum eu odio. Nullam tincidunt adipiscing enim. Phasellus tempus.</p><p>Etiam iaculis nunc ac metus. Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor, a pretium mi sem ut ipsum. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Cras ultricies mi eu turpis hendrerit fringilla. Sed libero.<br></p><p>Pellentesque posuere. Curabitur a felis in nunc fringilla tristique. Praesent turpis. Quisque malesuada placerat nisl. Duis vel nibh at velit scelerisque suscipit.<br></p><blockquote class=\"blockquote\">Praesent metus tellus, elementum eu, semper a, adipiscing nec, purus. Aliquam eu nunc. Aenean commodo ligula eget dolor. Ut tincidunt tincidunt erat. Sed fringilla mauris sit amet nibh.</blockquote><p>Pellentesque libero tortor, tincidunt et, tincidunt eget, semper nec, quam. Sed cursus turpis vitae tortor. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Ut varius tincidunt libero. Suspendisse enim turpis, dictum sed, iaculis a, condimentum nec, nisi.<br></p>', 'articles/prev_1697315751.jpg', 'articles/main_1697315751.jpg', 1, NULL, NULL, NULL, '2023-10-14 17:35:51', '2023-10-14 17:35:51'),
(7, 'Nam pretium turpis et arcu', 'nam-pretium-turpis-et-arcu', '<p>Fusce convallis metus id felis luctus adipiscing. Quisque libero metus, condimentum nec, tempor a, commodo mollis, magna. Morbi vestibulum volutpat enim. Fusce convallis metus id felis luctus adipiscing. Praesent nec nisl a purus blandit viverra.</p><p>Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor, a pretium mi sem ut ipsum. Quisque ut nisi. Suspendisse nisl elit, rhoncus eget, elementum ac, condimentum eget, diam. Proin pretium, leo ac pellentesque mollis, felis nunc ultrices eros, sed gravida augue augue mollis justo. Aliquam eu nunc.<br></p><p>Vestibulum suscipit nulla quis orci. Vivamus laoreet. Curabitur ullamcorper ultricies nisi. Cras dapibus. Cras ultricies mi eu turpis hendrerit fringilla.<br></p><p>Cras sagittis. Aliquam lobortis. Sed libero. Aenean vulputate eleifend tellus. Nunc interdum lacus sit amet orci.<br></p><p>Etiam sollicitudin, ipsum eu pulvinar rutrum, tellus ipsum laoreet sapien, quis venenatis ante odio sit amet eros. Vestibulum turpis sem, aliquet eget, lobortis pellentesque, rutrum eu, nisl. Vestibulum fringilla pede sit amet augue. Quisque libero metus, condimentum nec, tempor a, commodo mollis, magna. Fusce a quam.<br></p>', 'articles/prev_1697315815.jpg', 'articles/main_1697315815.jpg', 2, NULL, NULL, NULL, '2023-10-14 17:36:55', '2023-10-14 17:36:55'),
(8, 'Phasellus blandit leo ut odio', 'phasellus-blandit-leo-ut-odio', '<p>Nulla neque dolor, sagittis eget, iaculis quis, molestie non, velit. Etiam ultricies nisi vel augue. Etiam ultricies nisi vel augue. Fusce fermentum. In ut quam vitae odio lacinia tincidunt.</p><p>Nulla sit amet est. Suspendisse potenti. Fusce neque. Nullam vel sem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.<br></p><blockquote class=\"blockquote\">Mauris turpis nunc, blandit et, volutpat molestie, porta ut, ligula. Quisque rutrum. Curabitur at lacus ac velit ornare lobortis. Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus. Nam commodo suscipit quam.</blockquote><p>Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est. Etiam feugiat lorem non metus. Fusce ac felis sit amet ligula pharetra condimentum. Mauris turpis nunc, blandit et, volutpat molestie, porta ut, ligula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos.<br></p><p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Nulla consequat massa quis enim. Nulla porta dolor. Aenean viverra rhoncus pede. Mauris turpis nunc, blandit et, volutpat molestie, porta ut, ligula.<br></p>', 'articles/prev_1697315885.jpg', 'articles/main_1697315886.jpg', 3, NULL, NULL, NULL, '2023-10-14 17:38:06', '2023-10-14 17:38:06'),
(9, 'Vestibulum fringilla pede sit amet', 'vestibulum-fringilla-pede-sit-amet', '<p>Sed cursus turpis vitae tortor. Suspendisse feugiat. Fusce vel dui. Praesent vestibulum dapibus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed aliquam, nisi quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus quis orci.</p><p>Nunc nulla. Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Nulla neque dolor, sagittis eget, iaculis quis, molestie non, velit. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. Phasellus dolor.<br></p><p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Vestibulum fringilla pede sit amet augue. Aenean ut eros et nisl sagittis vestibulum. Praesent congue erat at massa.<br></p><p>Vivamus elementum semper nisi. Nunc egestas, augue at pellentesque laoreet, felis eros vehicula leo, at malesuada velit leo quis pede. Phasellus dolor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus consectetuer hendrerit lacus.<br></p><p>Nullam cursus lacinia erat. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Curabitur nisi. Phasellus volutpat, metus eget egestas mollis, lacus lacus blandit dui, id egestas quam mauris ut lacus. Pellentesque posuere.<br></p>', 'articles/prev_1697315943.jpg', 'articles/main_1697315943.jpg', 4, NULL, NULL, NULL, '2023-10-14 17:39:03', '2023-10-14 17:39:03'),
(10, 'Mauris turpis nunc blandit et', 'mauris-turpis-nunc-blandit-et', '<p>Mauris sollicitudin fermentum libero. Curabitur turpis. Maecenas malesuada. Etiam ut purus mattis mauris sodales aliquam. Nulla neque dolor, sagittis eget, iaculis quis, molestie non, velit.</p><p>Sed cursus turpis vitae tortor. Praesent metus tellus, elementum eu, semper a, adipiscing nec, purus. Vestibulum fringilla pede sit amet augue. Praesent metus tellus, elementum eu, semper a, adipiscing nec, purus. Etiam iaculis nunc ac metus.<br></p><p>Praesent metus tellus, elementum eu, semper a, adipiscing nec, purus. Donec orci lectus, aliquam ut, faucibus non, euismod id, nulla. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Curabitur at lacus ac velit ornare lobortis. Quisque ut nisi.<br></p><p>Nullam vel sem. Etiam imperdiet imperdiet orci. Sed aliquam ultrices mauris. Ut id nisl quis enim dignissim sagittis. Fusce egestas elit eget lorem.<br></p><p>Fusce commodo aliquam arcu. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Sed lectus. In dui magna, posuere eget, vestibulum et, tempor auctor, justo. Etiam sollicitudin, ipsum eu pulvinar rutrum, tellus ipsum laoreet sapien, quis venenatis ante odio sit amet eros.<br></p>', 'articles/prev_1697316035.jpg', 'articles/main_1697316035.jpg', 1, NULL, NULL, NULL, '2023-10-14 17:40:35', '2023-10-14 17:40:35'),
(11, 'Fusce risus nisl viverra et', 'fusce-risus-nisl-viverra-et', '<p>Morbi vestibulum volutpat enim. Donec sodales sagittis magna. Praesent vestibulum dapibus nibh. Curabitur at lacus ac velit ornare lobortis. Fusce egestas elit eget lorem.</p><p>Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi. In auctor lobortis lacus. In ac felis quis tortor malesuada pretium. Fusce egestas elit eget lorem. Curabitur at lacus ac velit ornare lobortis.<br></p><p>Phasellus magna. Sed augue ipsum, egestas nec, vestibulum et, malesuada adipiscing, dui. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Proin magna.<br></p><p>Nullam quis ante. Praesent blandit laoreet nibh. Nunc sed turpis. Maecenas nec odio et ante tincidunt tempus. Fusce commodo aliquam arcu.<br></p><p>Suspendisse eu ligula. Nullam quis ante. Proin magna. Pellentesque auctor neque nec urna. Curabitur vestibulum aliquam leo.<br></p>', 'articles/prev_1697316099.jpg', 'articles/main_1697316099.jpg', 2, NULL, NULL, NULL, '2023-10-14 17:41:39', '2023-10-14 17:41:39'),
(12, 'In enim justo rhoncus ut', 'in-enim-justo-rhoncus-ut', '<p>In enim justo rhoncus utUt a nisl id ante tempus hendrerit. Phasellus dolor.. Sed hendrerit. Curabitur blandit mollis lacus.<br></p><p>Curabitur vestibulum aliquam leo. Cras dapibus. Praesent egestas neque eu enim. Praesent blandit laoreet nibh. Suspendisse pulvinar, augue ac venenatis condimentum, sem libero volutpat nibh, nec pellentesque velit pede quis nunc.<br></p><p>Cras id dui. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Aenean ut eros et nisl sagittis vestibulum. Proin sapien ipsum, porta a, auctor quis, euismod ut, mi. Vivamus quis mi.<br></p><p>Maecenas nec odio et ante tincidunt tempus. Praesent venenatis metus at tortor pulvinar varius. Vivamus in erat ut urna cursus vestibulum. Phasellus ullamcorper ipsum rutrum nunc. Nunc sed turpis.<br></p><p>Sed cursus turpis vitae tortor. Aenean ut eros et nisl sagittis vestibulum. Proin magna. Pellentesque posuere. Etiam imperdiet imperdiet orci.<br></p>', 'articles/prev_1697316171.jpg', 'articles/main_1697316171.jpg', 3, NULL, NULL, NULL, '2023-10-14 17:42:52', '2023-10-14 17:42:52'),
(13, 'Suspendisse enim turpis dictum sed', 'suspendisse-enim-turpis-dictum-sed', '<p>Nullam sagittis. Duis leo. In auctor lobortis lacus. Etiam sit amet orci eget eros faucibus tincidunt. Vestibulum fringilla pede sit amet augue.</p><p>Nullam sagittis. Cras sagittis. Praesent turpis. Suspendisse non nisl sit amet velit hendrerit rutrum. Curabitur nisi.<br></p><p>Nunc egestas, augue at pellentesque laoreet, felis eros vehicula leo, at malesuada velit leo quis pede. Vestibulum volutpat pretium libero. Etiam ut purus mattis mauris sodales aliquam. Aenean viverra rhoncus pede. Phasellus dolor.<br></p><p>Pellentesque posuere. In ac felis quis tortor malesuada pretium. Fusce vulputate eleifend sapien. Phasellus a est. Praesent metus tellus, elementum eu, semper a, adipiscing nec, purus.<br></p><p>Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est. Curabitur nisi. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Nullam accumsan lorem in dui. Praesent egestas neque eu enim.<br></p>', 'articles/prev_1698323899.jpg', 'articles/main_1698323900.jpg', 3, NULL, NULL, NULL, '2023-10-26 09:38:20', '2023-10-26 09:38:20'),
(14, 'Систематичне поліпшення', 'sistematicne-polipsennia', '<p><span style=\"color: rgb(0, 0, 0); font-family: Helvetica; font-size: medium;\">Систематичне поліпшення, динамічне впровадження, управлінська майстерність та досвідченість злагодженої команди забезпечили товариству успіх і провідну роль на світовому ринку.</span><br style=\"color: rgb(0, 0, 0); font-family: Georgia, serif; font-size: medium;\"><br style=\"color: rgb(0, 0, 0); font-family: Georgia, serif; font-size: medium;\"><span style=\"color: rgb(0, 0, 0); font-family: Helvetica; font-size: medium;\">Одна з найбільших світових компаній надає широкий спектр послуг, зокрема пасажирські перевезення, ремонт ювелірних виробів і годинників та закупівлю-продаж. Ми впевнені, що впровадження неперервної інтеграції (оптимізація персоналу) критично необхідне для розвитку, тому ми постійно виконуємо зобов\'язання та разом з тим, відкриті до інновацій. Хочемо підкорювати домашніх улюбленців зручністю зберігання даних і прагнемо розвивати передачу даних, кабельне телебачення і виготовлення ключів разом із замовниками. </span></p><p><blockquote class=\"blockquote\"><span style=\"color: rgb(0, 0, 0); font-family: Helvetica; font-size: medium;\">Завдяки прогресивним та інноваційним продуктам та послугам, кваліфікованим працівникам і серйозному ставленню до бізнесу та відкриттів, а також співпраці з гуртовими постачальниками та акціонерами, підприємство відкриває перед Україною нові сучасні рішення.</span></blockquote><br style=\"color: rgb(0, 0, 0); font-family: Georgia, serif; font-size: medium;\"><span style=\"color: rgb(0, 0, 0); font-family: Helvetica; font-size: medium;\">На постійній основі організація використовує до найменших дрібниць прораховані універсальні засоби накопичення, глобального громадянства та безпрограшних домовленостей. Незмінно зміцнює позиції широкий вибір новаторства: кімнатні й садові рослини, телекомунікації і розробка програмного забезпечення для киян і гостей столиці. Мета компанії проста: це надання вам продуктів харчування, неперервної інтеграції та інновацій. Постійне вдосконалення, оригінальні ціни, розширення рівня капіталізації та розробка оптимальних підходів і технологій забезпечили організації визнання і провідну роль на світовому ринку. Одна з найбільших світових компаній надає широкий спектр послуг, а саме юридичний захист ваших прав, послуги доставки кореспонденції та пасажирські перевезення. Ми впевнені, що впровадження зберігання даних (динамічне впровадження) життєво важливе для розвитку, тому ми постійно працюємо над поліпшенням та разом з тим, відкриті до бізнесу. </span></p><p><span style=\"color: rgb(0, 0, 0); font-family: Helvetica; font-size: medium;\">Хочемо дивувати стильних особистостей комфортом відкриттів і прагнемо розвивати </span></p><ul><li><span style=\"color: rgb(0, 0, 0); font-family: Helvetica; font-size: medium;\">ремонт ювелірних виробів і годинників, </span></li><li><span style=\"color: rgb(0, 0, 0); font-family: Helvetica; font-size: medium;\">закупівлю-продаж і передачу даних разом із рейтинговими агентствами. </span></li></ul><p><span style=\"color: rgb(0, 0, 0); font-family: Helvetica; font-size: medium;\">Завдяки надійним та технологічним продуктам та послугам, кваліфікованим працівникам і серйозному ставленню до накопичення та глобального громадянства, а також кооперації з нашими партнерами та клієнтами, товариство відкриває перед світом нові захоплюючі перспективи. На постійній основі компанія застосовує комп\'ютерні приємні засоби безпрограшних домовленостей, новаторства та продуктів харчування. Незмінно надається широкий вибір неперервної інтеграції: свіжі овочі та фрукти, мобільний голосовий зв\'язок і кімнатні й садові рослини для домашніх улюбленців і киян.<span style=\"background-color: rgb(255, 0, 0);\"> Мета організації проста</span>: це забезпечення вам інновацій, зберігання даних та бізнесу. Систематичне вдосконалення, робітнича майстерність, відкритість виваженої команди та оптимізація топ-менеджерів забезпечили підприємству успіх і провідну роль на ринку України. Одна з ведучих міжнародних організацій здійснює діяльність за наступними напрямками: телекомунікації, розробка програмного забезпечення та кредити для малого та середнього бізнесу. Ми впевнені, що впровадження відкриттів (фінансово відповідальні ціни) життєво важливе для розвитку, тому ми постійно виконуємо зобов\'язання та разом з тим, відкриті до накопичення. Хочемо підкорювати гостей столиці якістю глобального громадянства і прагнемо розвивати послуги доставки кореспонденції, пасажирські перевезення і ремонт ювелірних виробів і годинників разом із іноземними компаніями. Завдяки довершеним та прогресивним продуктам та послугам, кваліфікованим співробітникам і відповідальному ставленню до безпрограшних домовленостей та новаторства, а також співпраці з замовниками та гуртовими постачальниками, підприємство відкриває перед Україною нові вигідні можливості.</span><br></p>', 'articles/prev_1698410429.jpg', 'articles/main_1698410430.jpg', 1, NULL, NULL, NULL, '2023-10-27 09:40:30', '2023-10-27 09:45:53');

-- --------------------------------------------------------

--
-- Table structure for table `article_tags`
--

CREATE TABLE `article_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article_tags`
--

INSERT INTO `article_tags` (`id`, `article_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 2, NULL, NULL),
(3, 3, 3, NULL, NULL),
(4, 4, 4, NULL, NULL),
(5, 5, 5, NULL, NULL),
(6, 6, 6, NULL, NULL),
(7, 7, 1, NULL, NULL),
(8, 7, 2, NULL, NULL),
(9, 8, 2, NULL, NULL),
(10, 8, 3, NULL, NULL),
(11, 9, 3, NULL, NULL),
(12, 9, 4, NULL, NULL),
(13, 10, 1, NULL, NULL),
(14, 10, 2, NULL, NULL),
(15, 10, 3, NULL, NULL),
(16, 11, 2, NULL, NULL),
(17, 11, 3, NULL, NULL),
(18, 11, 4, NULL, NULL),
(19, 12, 4, NULL, NULL),
(20, 12, 5, NULL, NULL),
(21, 12, 6, NULL, NULL),
(22, 13, 1, NULL, NULL),
(23, 13, 2, NULL, NULL),
(24, 13, 3, NULL, NULL),
(25, 13, 4, NULL, NULL),
(26, 13, 5, NULL, NULL),
(27, 13, 6, NULL, NULL),
(28, 14, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `article_user_likes`
--

CREATE TABLE `article_user_likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article_user_likes`
--

INSERT INTO `article_user_likes` (`id`, `user_id`, `article_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, NULL),
(2, 2, 12, NULL, NULL),
(3, 2, 8, NULL, NULL),
(4, 3, 12, NULL, NULL),
(5, 3, 8, NULL, NULL),
(6, 3, 4, NULL, NULL),
(7, 4, 2, NULL, NULL),
(8, 4, 11, NULL, NULL),
(9, 4, 10, NULL, NULL),
(10, 4, 12, NULL, NULL),
(11, 4, 8, NULL, NULL),
(12, 1, 8, NULL, NULL),
(13, 1, 10, NULL, NULL),
(14, 5, 12, NULL, NULL),
(15, 5, 2, NULL, NULL),
(16, 6, 2, NULL, NULL),
(17, 7, 13, NULL, NULL),
(18, 7, 2, NULL, NULL),
(19, 8, 13, NULL, NULL),
(20, 8, 2, NULL, NULL),
(21, 8, 8, NULL, NULL),
(22, 8, 14, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `meta_title`, `meta_description`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(1, 'PHP', 'php', 'PHP', 'PHP', 'PHP', '2023-10-14 15:38:03', '2023-10-14 15:38:03'),
(2, 'Laravel', 'laravel', 'Laravel', 'Laravel', 'Laravel', '2023-10-14 15:38:31', '2023-10-14 15:38:31'),
(3, 'Live Wire', 'live-wire', 'Live Wire', 'Live Wire', 'Live Wire', '2023-10-14 15:39:10', '2023-10-14 15:39:10'),
(4, 'Python', 'python', 'python', 'python', 'python', '2023-10-14 15:39:36', '2023-10-14 15:39:36');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `content`, `user_id`, `article_id`, `created_at`, `updated_at`) VALUES
(1, 'Praesent ac massa at ligula', 1, 11, '2023-10-14 17:52:03', '2023-10-14 17:52:03'),
(2, 'Etiam sit amet orci eget', 1, 3, '2023-10-14 17:54:54', '2023-10-14 17:54:54'),
(3, 'Quisque malesuada placerat nisl. Curabitur vestibulum aliquam leo. Maecenas malesuada. Praesent nonummy mi in odio. Etiam ut purus mattis mauris sodales aliquam.', 1, 2, '2023-10-14 17:55:30', '2023-10-14 17:55:30'),
(4, 'Fusce pharetra convallis urna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce fermentum odio nec arcu. Fusce ac felis sit amet ligula pharetra condimentum. Etiam ultricies nisi vel augue. ', 1, 8, '2023-10-14 18:26:32', '2023-10-14 18:26:32'),
(5, ' Proin magna. Etiam ultricies nisi vel augue. Nam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Curabitur vestibulum aliquam leo.', 2, 12, '2023-10-15 05:06:50', '2023-10-15 05:06:50'),
(6, 'Sed in libero ut nibh placerat accumsan. Donec elit libero, sodales nec, volutpat a, suscipit non, turpis. Etiam feugiat lorem non metus. Proin pretium, leo ac pellentesque mollis, felis nunc ultrices eros, sed gravida augue augue mollis justo. Nullam dictum felis eu pede mollis pretium.', 2, 8, '2023-10-15 05:07:32', '2023-10-15 05:07:32'),
(7, 'Suspendisse faucibus, nunc et pellentesque egestas, lacus ante convallis tellus, vitae iaculis lacus elit id tortor. Vivamus euismod mauris. Morbi mollis tellus ac sapien. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. In ut quam vitae odio lacinia tincidunt.', 3, 12, '2023-10-15 05:11:50', '2023-10-15 05:11:50'),
(8, 'Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Phasellus consectetuer vestibulum elit. Ut leo. Etiam iaculis nunc ac metus. Fusce pharetra convallis urna.', 3, 8, '2023-10-15 05:12:18', '2023-10-15 05:12:18'),
(9, 'Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Maecenas ullamcorper, dui et placerat feugiat, eros pede varius nisi, condimentum viverra felis nunc et lorem. Cras risus ipsum, faucibus ut, ullamcorper id, varius ac, leo. In dui magna, posuere eget, vestibulum et, tempor auctor, justo. Praesent turpis.', 3, 4, '2023-10-15 05:12:43', '2023-10-15 05:12:43'),
(10, 'Aenean viverra rhoncus pede. Fusce neque. Praesent ac sem eget est egestas volutpat. Mauris turpis nunc, blandit et, volutpat molestie, porta ut, ligula. Phasellus magna.', 4, 2, '2023-10-15 05:20:58', '2023-10-15 05:20:58'),
(11, 'Cras risus ipsum, faucibus ut, ullamcorper id, varius ac, leo. Quisque malesuada placerat nisl. Sed fringilla mauris sit amet nibh. Nulla neque dolor, sagittis eget, iaculis quis, molestie non, velit. Maecenas vestibulum mollis diam. ', 4, 11, '2023-10-15 05:21:24', '2023-10-15 05:21:24'),
(12, 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec elit libero, sodales nec, volutpat a, suscipit non, turpis. Sed lectus. Curabitur vestibulum aliquam leo. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. ', 4, 10, '2023-10-15 05:22:12', '2023-10-15 05:22:12'),
(13, 'In ut quam vitae odio lacinia tincidunt. Suspendisse nisl elit, rhoncus eget, elementum ac, condimentum eget, diam. Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur ullamcorper ultricies nisi. ', 4, 12, '2023-10-15 05:22:39', '2023-10-15 05:22:39'),
(14, 'Nam at tortor in tellus interdum sagittis. Donec venenatis vulputate lorem. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. ', 4, 8, '2023-10-15 05:29:02', '2023-10-15 05:29:02'),
(15, 'Sed aliquam ultrices mauris. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Maecenas vestibulum mollis diam. Fusce fermentum odio nec arcu. In ac felis quis tortor malesuada pretium.', 1, 10, '2023-10-24 03:41:28', '2023-10-24 03:41:28'),
(16, 'Maecenas vestibulum mollis diam. Cras risus ipsum, faucibus ut, ullamcorper id, varius ac, leo. Duis leo. Sed mollis, eros et ultrices tempus, mauris ipsum aliquam libero, non adipiscing dolor urna a orci. Vestibulum ullamcorper mauris at ligula.', 5, 12, '2023-10-26 09:20:41', '2023-10-26 09:20:41'),
(17, 'Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Vivamus aliquet elit ac nisl. Praesent nonummy mi in odio. Sed a libero.\n\nFusce vulputate eleifend sapien. Cras id dui. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur suscipit suscipit tellus.', 5, 2, '2023-10-26 09:21:23', '2023-10-26 09:21:23'),
(18, 'Mauris turpis nunc, blandit et, volutpat molestie, porta ut, ligula. Vivamus elementum semper nisi. Fusce convallis metus id felis luctus adipiscing. Ut id nisl quis enim dignissim sagittis. Morbi mattis ullamcorper velit.', 6, 2, '2023-10-26 09:25:45', '2023-10-26 09:25:45'),
(19, 'Nam at tortor in tellus interdum sagittis. Fusce pharetra convallis urna. Integer ante arcu, accumsan a, consectetuer eget, posuere ut, mauris. Mauris sollicitudin fermentum libero. Pellentesque commodo eros a enim.', 7, 13, '2023-10-26 12:57:03', '2023-10-26 12:57:03'),
(20, 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam commodo suscipit quam. Curabitur turpis. Nulla consequat massa quis enim. Praesent venenatis metus at tortor pulvinar varius.', 7, 2, '2023-10-26 12:57:44', '2023-10-26 12:57:44'),
(21, 'Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Nunc nulla. Aenean imperdiet. Suspendisse enim turpis, dictum sed, iaculis a, condimentum nec, nisi. Praesent congue erat at massa. ', 8, 13, '2023-10-27 09:24:26', '2023-10-27 09:24:26'),
(22, 'Suspendisse pulvinar, augue ac venenatis condimentum, sem libero volutpat nibh, nec pellentesque velit pede quis nunc. Duis leo. Quisque rutrum. In dui magna, posuere eget, vestibulum et, tempor auctor, justo. Quisque malesuada placerat nisl. ', 8, 2, '2023-10-27 09:26:28', '2023-10-27 09:26:28'),
(23, 'Cras non dolor. Sed fringilla mauris sit amet nibh. In consectetuer turpis ut velit. Vestibulum dapibus nunc ac augue. Morbi mollis tellus ac sapien.\n\nMaecenas malesuada. Donec posuere vulputate arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed aliquam, nisi quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus quis orci. Quisque malesuada placerat nisl. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. ', 8, 8, '2023-10-27 09:37:05', '2023-10-27 09:37:05'),
(24, 'Phasellus dolor. Nullam nulla eros, ultricies sit amet, nonummy id, imperdiet feugiat, pede. Donec id justo. Etiam sit amet orci eget eros faucibus tincidunt. Nunc sed turpis. ', 8, 14, '2023-10-27 09:46:45', '2023-10-27 09:46:45');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_31_143736_create_roles_table', 1),
(6, '2023_09_12_101609_create_categories_table', 1),
(7, '2023_09_15_084916_create_tags_table', 1),
(8, '2023_09_15_161558_create_articles_table', 1),
(9, '2023_09_15_162539_article_tag', 1),
(10, '2023_09_17_182603_create_comments_table', 1),
(11, '2023_09_22_144805_create_article_user_likes_table', 1),
(12, '2023_09_29_124842_create_pages_table', 1),
(14, '2023_10_21_093350_create_abouts_table', 2),
(15, '2023_10_24_132619_create_socials_table', 3);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'user', '2023-10-14 15:36:51', '2023-10-14 15:36:51'),
(2, 'admin', '2023-10-14 15:37:04', '2023-10-14 15:37:04');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socials`
--

INSERT INTO `socials` (`id`, `icon`, `link`, `created_at`, `updated_at`) VALUES
(1, '<i class=\"fab fa-telegram text-muted \"></i>', 'https://web.telegram.org/a/', '2023-10-24 12:54:49', '2023-10-24 13:16:22'),
(2, '<i class=\"fab fa-linkedin text-muted\"></i>', 'https://www.linkedin.com/feed/', '2023-10-24 12:58:19', '2023-10-24 13:16:42'),
(3, '<i class=\"fab fa-instagram text-muted\"></i>', 'https://www.instagram.com/', '2023-10-24 12:59:51', '2023-10-24 13:17:02'),
(4, '<i class=\"fab fa-twitter text-muted\"></i>', 'https://twitter.com/?lang=ru', '2023-10-24 13:01:51', '2023-10-24 13:17:24');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `title`, `slug`, `meta_title`, `meta_description`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(1, 'Blog', 'blog', 'Blog', 'Blog', 'Blog', '2023-10-14 15:40:27', '2023-10-14 15:40:27'),
(2, 'apps', 'apps', 'apps', 'apps', 'apps', '2023-10-14 15:41:04', '2023-10-14 15:41:04'),
(3, 'Coffee', 'coffee', 'coffee', 'coffee', 'coffee', '2023-10-14 15:41:49', '2023-10-14 15:41:49'),
(4, 'CSS', 'css', NULL, NULL, NULL, '2023-10-14 15:42:06', '2023-10-14 15:42:06'),
(5, 'Sass', 'sass', NULL, NULL, NULL, '2023-10-14 15:42:19', '2023-10-14 15:42:19'),
(6, 'SCSS', 'scss', NULL, NULL, NULL, '2023-10-14 15:42:43', '2023-10-14 15:42:43');

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
  `role_id` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `profile_image` varchar(255) NOT NULL DEFAULT 'profile/No-Image.jpg',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_id`, `profile_image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Job Miller', 'job_miller@example.com', '2023-10-14 15:35:58', '$2y$10$q/u71s4xfQtn03Rlai.U0.RbtnTP8kTb0d5UipALgPydtjVtqLACK', 2, 'profile/MrgHFi40Bp39NvYp8XSSX5sy6z7lOTc2szfY5ZMM.jpg', NULL, '2023-10-14 15:34:45', '2023-10-14 17:54:15'),
(2, 'John Doe', 'doe@example.com', '2023-10-15 04:52:45', '$2y$10$wrvuJsbsGok/wH2yBhP1nuG7lo7DAfG0zC501VSO59hao29BTgvPu', 1, 'profile/GEtHO9SV8s196XazwphBPOELORwX8oUFj8s1j2NH.jpg', NULL, '2023-10-15 04:48:45', '2023-10-15 05:06:16'),
(3, 'Marcia Pierce', 'pierce@example.com', '2023-10-15 05:10:55', '$2y$10$wjvIe2lhqlqy8c.A7XIIq.fwrCV//5tjMuY/40BTFwXE9go9V0x/q', 1, 'profile/bZchFzpN1owBECLQIz1mIvq6aSXBPJsRSQglhsSu.jpg', NULL, '2023-10-15 05:10:31', '2023-10-15 05:11:18'),
(4, 'Leona Blair', 'blair@example.com', '2023-10-15 05:19:27', '$2y$10$GeAXhNSO5SW93lo5H9UvPOLviQdMR9LicK7HlNRSmfzaho3eSwnxa', 1, 'profile/B4LtIaXdBOBbPQwDt6paGDKxZ2qmuqAMnv0XQGCe.jpg', NULL, '2023-10-15 05:18:58', '2023-10-15 05:20:11'),
(5, 'Constance Riley', 'nole@mailinator.com', '2023-10-26 09:14:49', '$2y$10$aORMI1xDxFAmU9/P1/wn3uRAbvK5tJ4zWIjc9O.nvtuo/zye0tZCK', 1, 'profile/2KlnEcXLPoqXqRn5I9rxxUulRf7tJtJ41aXAXStw.jpg', 'SjLiPwtJ7HKFSTZBoyytxm1v8oYrenAPE0lMJMPU7nQYoDAPTem3WXBOw7m0', '2023-10-26 09:14:08', '2023-10-26 09:19:46'),
(6, 'Grady Mcgee', 'pycyk@mailinator.com', '2023-10-26 09:22:49', '$2y$10$WObZtQgE19Z7He4/ZS47KeikV14lpAxWxvuctLY/xUagOYxU8R3sm', 1, 'profile/wS2vQXln06ewEAXjLXD1g2BHEEiogwruQ8GMKeco.jpg', 'FUaQ3D1AuPTGIJ0E5aadt7aFyVT4CzdJchQCqFypQXW9pDpXuhvfbwt8wwmc', '2023-10-26 09:22:31', '2023-10-26 09:24:58'),
(7, 'Damian Hunt', 'huhoqihixe@mailinator.com', '2023-10-26 12:53:46', '$2y$10$bMqhLRoN1vNQXYM5nwNYTehyFzwa24alVBj4rhl9IQrnLu2tP9UBa', 1, 'profile/dnrtZoNGTfbE4HIoHmJ04fZIBY8VkQOw6XCc5R9r.jpg', '9Bp1hlMpeyBHj1kAQ0MiehTyxYq2qBlo8bIubURntDEzwappLBHQyTX5yN2y', '2023-10-26 12:53:20', '2023-10-26 12:56:28'),
(8, 'Jaquelyn Underwood', 'kiky@mailinator.com', '2023-10-27 09:21:36', '$2y$10$0p3eo65kuJ13DwXA3n2QCOsxC76pUyYIZFFXQiZLtBPJ.zpqO8d8e', 1, 'profile/a3Y879JSxk2jgmMwsRbSvryOsGEdRKfIySoYEChl.jpg', 'acWtz9zwSG9Qkz0S8z3MyWzVd5CQMC1hdJHZKS6Pn8OcpsAbzuF0aXZz8V4b', '2023-10-27 09:20:49', '2023-10-27 09:23:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article_tags`
--
ALTER TABLE `article_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article_user_likes`
--
ALTER TABLE `article_user_likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_slug_unique` (`slug`);

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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `article_tags`
--
ALTER TABLE `article_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `article_user_likes`
--
ALTER TABLE `article_user_likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
