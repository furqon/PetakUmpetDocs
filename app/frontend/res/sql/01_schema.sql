CREATE TABLE userdata (
  id int not null auto_increment,
  userid varchar(25),
  name varchar(100),
  password text,
  status varchar(10),
  is_admin boolean,
  parent_id integer,
  PRIMARY KEY (id),
  FOREIGN KEY (parent_id) REFERENCES userdata (id)
);

CREATE TABLE user_profile (
  id int not null auto_increment,
  user_id integer,
  address text,
  email varchar(255),
  PRIMARY KEY (id),
  FOREIGN KEY (user_id) REFERENCES userdata (id)
);

CREATE TABLE roledata (
  id int not null auto_increment,
  name varchar(50),
  PRIMARY KEY (id)
);

CREATE TABLE accessdata (
  id int not null auto_increment,
  name varchar(255),
  type varchar(50),
  PRIMARY KEY (id)
);

CREATE TABLE user_role (
  id int not null auto_increment,
  user_id integer,
  role_id integer,
  PRIMARY KEY (id),
  FOREIGN KEY (user_id) REFERENCES userdata (id),
  FOREIGN KEY (role_id) REFERENCES roledata (id)
);

CREATE TABLE role_access (
  id int not null auto_increment,
  role_id integer,
  access_id integer,
  PRIMARY KEY (id),
  FOREIGN KEY (role_id) REFERENCES roledata (id),
  FOREIGN KEY (access_id) REFERENCES accessdata (id)
);

CREATE TABLE user_access (
  id int not null auto_increment,
  user_id integer,
  access_id integer,
  PRIMARY KEY (id),
  FOREIGN KEY (user_id) REFERENCES userdata (id),
  FOREIGN KEY (access_id) REFERENCES accessdata (id)
);

CREATE TABLE event (
  id int not null auto_increment,
  user_id integer,
  application varchar(100),
  module varchar(100),
  action varchar(100),
  event text,
  created_at timestamp,
  PRIMARY KEY (id),
  FOREIGN KEY (user_id) REFERENCES userdata (id)
);

