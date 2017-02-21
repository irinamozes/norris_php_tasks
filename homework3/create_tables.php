| Database           |
+--------------------+
| information_schema |
| lschool_db         |
| mysql              |
| performance_schema |
+--------------------+
4 rows in set (0,01 sec)


<?php
$host = 'localhost';
$base = 'lschool_db';
$user = 'root';
$pass = '123';
$connection = @new mysqli($host, $user, $pass, $base);
if (mysqli_connect_errno()) {
    die(mysqli_connect_error());
}
$connection->query('SET NAMES "UTF-8"');


$sql = "
  CREATE TABLE users_login (
  login varchar(100) NOT NULL,
  pass varchar(100) NOT NULL,
  user_id int(5) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (user_id),
  UNIQUE (login)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;";
$connection->query($sql);

$sql = "
  CREATE TABLE users_profile (
  profile_id int(5) NOT NULL AUTO_INCREMENT,
  username varchar(100) NOT NULL,
  age int(3),
  info text,
  PRIMARY KEY (id),
  FOREIGN KEY (user_id) REFERENCES users_login (user_id)
  ON UPDATE CASCADE
  ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;";
$connection->query($sql);

$sql = "
  CREATE TABLE user_save (
  user_id int(5) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
$connection->query($sql);

$sql = "
CREATE TABLE images (
  img_name varchar(100) NOT NULL,
  img_id int(5) NOT NULL AUTO_INCREMENT,
  user_id int(5) NOT NULL,
  PRIMARY KEY (img_id),
  FOREIGN KEY (user_id) REFERENCES users_login (user_id)
  ON UPDATE CASCADE
  ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;";
$connection->query($sql);