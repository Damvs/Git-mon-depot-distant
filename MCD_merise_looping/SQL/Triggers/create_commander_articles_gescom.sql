CREATE TABLE `commander_articles` (
    `comart_id` int(10) NOT NULL AUTO_INCREMENT,
    `codart` int(10) UNSIGNED NOT NULL,
    `qte` int(11) NOT NULL,
    `com_date` datetime NOT NULL,
    PRIMARY KEY (`comart_id`),
    FOREIGN KEY (`codart`) REFERENCES `products`(`pro_id`)
);
