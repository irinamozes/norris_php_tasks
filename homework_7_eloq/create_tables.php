| Database           |
+--------------------+
| information_schema |
| loft_dbe         |
| mysql              |
| performance_schema |
+--------------------+


<?php
$host = 'localhost';
$base = 'loft_dbe';
$user = 'root';
$pass = '123';
$connection = @new mysqli($host, $user, $pass, $base);
if (mysqli_connect_errno()) {
    die(mysqli_connect_error());
}
$connection->query('SET NAMES "UTF-8"');


$sql = "
  CREATE TABLE users (
  login varchar(100) NOT NULL,
  pass varchar(100) NOT NULL,
  id int(5) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (id),
  UNIQUE (login)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;";
$connection->query($sql);

$sql = "
  CREATE TABLE profiles (
  id int(5) NOT NULL AUTO_INCREMENT,
  username varchar(100) NOT NULL,
  age int(3),
  info text,
  user_id int(5) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (user_id) REFERENCES users (id)
  ON UPDATE CASCADE
  ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;";
$connection->query($sql);

$sql = "
CREATE TABLE images (
  img_name varchar(100) NOT NULL,
  id int(5) NOT NULL AUTO_INCREMENT,
  user_id int(5) NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (user_id) REFERENCES users (id)
  ON UPDATE CASCADE
  ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;";
$connection->query($sql);
