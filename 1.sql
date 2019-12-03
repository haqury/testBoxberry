CREATE TABLE patients
(
  id INT PRIMARY KEY NOT NULL COMMENT 'id пациэнта' AUTO_INCREMENT,
  pulse INT DEFAULT 0 COMMENT 'пульс пациэнта',
  pressure INT DEFAULT 0 COMMENT 'давление пациэнта'
) ENGINE=InnoDB;
CREATE INDEX table_name_pressure_index ON patients (pressure);

