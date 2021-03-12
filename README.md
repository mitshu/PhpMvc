# PhpMvc


Database
---Create database
"CREATE TABLE IF NOT EXISTS `manage_post` (
                `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                `title` varchar(100) NOT NULL,
                `description` text,
                `image` varchar(200) ,
                `status` int(11) NOT NULL,
                `create_at` datetime,
                `update_at` datetime DEFAULT NULL
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
---Insert Data
INSERT INTO `posttable` (`id`, `title`, `description`, `image`, `status`, `create_at`, `update_at`) VALUES (NULL, 'anh day', 'abc', 'https://cdn.mos.cms.futurecdn.net/yL3oYd7H2FHDDXRXwjmbMf.jpg', '1', '2021-03-02 16:29:59', '2021-03-03 16:29:59');
