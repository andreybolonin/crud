-- Using the root user, grant access to the mariadb user.
GRANT ALL PRIVILEGES ON *.* TO 'user'@'%' IDENTIFIED BY 'password';

-- Create a table in the database
USE article;
CREATE TABLE article (
  id INT(11) NOT NULL AUTO_INCREMENT,
  name VARCHAR(255),
  description VARCHAR(255),
  created_at TIMESTAMP,
  PRIMARY KEY (id)
);
