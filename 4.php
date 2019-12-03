<?php
$queryUpdate = "CREATE TEMPORARY TABLE `tmp_table` (
      `color` tinytext NOT NULL,
      `factor` FLOAT NOT NULL DEFAULT 0
    ) ENGINE=innoDB;
    INSERT INTO `tmp_table` SET `color` = 'red', `factor` = 1.1;
    INSERT INTO `tmp_table` SET `color` = 'green', `factor` = 0.95;
    
    UPDATE products
    LEFT JOIN tmp_table ON tmp_table.color = products.color
    SET products.price = IF(tmp_table.factor != 0, products.price * tmp_table.factor, products.price);
    SELECT * from `products`;";
$result = $connection->query($queryUpdate);



