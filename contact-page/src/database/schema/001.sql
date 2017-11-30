drop database `rutgers_ecomm`;
create database if not exists `rutgers_ecomm`;

use `rutgers_ecomm`;

create table `contact_list` (
   `id` int(11) unsigned not null auto_increment,
   `name` varchar(150) not null,
   `email_address` varchar(200) not null,
   `password` varchar(255) default null,
   `created_at` timestamp null default null,
   primary key (id), # always need a primary key,
   `
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
