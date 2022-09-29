create table `user` (
  `id` int(10) not null auto_increment,
  `email` varchar(200) not null,
  `password` varchar(255) not null,
  `fullname` varchar(200),
  PRIMARY KEY (`id`)
);