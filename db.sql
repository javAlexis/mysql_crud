-- 1. Crear las tablas (Estructura del proyecto)
CREATE TABLE IF NOT EXISTS `Products` (
  `ProductId` int NOT NULL AUTO_INCREMENT,
  `Sku` varchar (255) NOT NULL,
  `Name` varchar (255) NOT NULL DEFAULT '',
  `Description` mediumtext NOT NULL,
  `Price` decimal (6, 2) NOT NULL DEFAULT 0.00,
  `Image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ProductId`)
);

CREATE TABLE IF NOT EXISTS `Orders` ( 
  `OrderId` int NOT NULL AUTO_INCREMENT,
  `Total` decimal (6, 2) NOT NULL,
  `Date` datetime NOT NULL,
  PRIMARY KEY (`OrderId`)
);

-- 2. Datos de Ejemplo
INSERT INTO `Products` (`Sku`, `Name`, `Description`, `Price`, `Image`) VALUES
('LAP-001', 'MacBook Pro M3 14"', 'Chip M3 Pro, 18GB RAM, 512GB SSD', 1999.00, 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/mbp14-spacegray-select-202310?wid=904&hei=840&fmt=jpeg&qlt=90&.v=1697311054290'),
('LAP-002', 'ASUS TUF Gaming F15', 'Intel Core i7, 16GB RAM, RTX 4050, 512GB SSD', 1099.00, 'https://dlcdnwebimgs.asus.com/gain/97ec7d81-304b-486e-826d-2f960f27303c/w800'),
('CPU-001', 'Procesador Intel Core i9-13900K', '24 núcleos, hasta 5.8 GHz', 589.00, 'https://m.media-amazon.com/images/I/61b7b7pwRIL._AC_SL1500_.jpg'),
('GPU-001', 'Tarjeta de Video RTX 4090', '24GB GDDR6X, ASUS ROG Strix', 1999.00, 'https://m.media-amazon.com/images/I/81k3vjF4wVL._AC_SL1500_.jpg');