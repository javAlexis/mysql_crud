-- 1. Crear las tablas (Estructura del proyecto)
CREATE TABLE IF NOT EXISTS `Products` (
  `ProductId` int NOT NULL AUTO_INCREMENT,
  `Sku` varchar (255) NOT NULL,
  `Name` varchar (255) NOT NULL DEFAULT '',
  `Description` mediumtext NOT NULL,
  `Price` decimal (6, 2) NOT NULL DEFAULT 0.00,
  PRIMARY KEY (`ProductId`)
);

CREATE TABLE IF NOT EXISTS `Orders` ( 
  `OrderId` int NOT NULL AUTO_INCREMENT,
  `Total` decimal (6, 2) NOT NULL,
  `Date` datetime NOT NULL,
  PRIMARY KEY (`OrderId`)
);

CREATE TABLE IF NOT EXISTS `OrdersProducts` ( 
  `OrderId` int (11) NOT NULL,
  `ProductId` int (11) NOT NULL,
  `Quantity` smallint (3) NOT NULL DEFAULT 1,
  `Price` decimal (6, 2) NOT NULL,
  FOREIGN KEY (`OrderId`) REFERENCES `Orders`(`OrderId`) ON DELETE CASCADE
);

-- 2. Datos de Ejemplo
INSERT INTO `Products` (`Sku`, `Name`, `Description`, `Price`) VALUES
('SKU-001', 'Smartphone X', 'Teléfono de última generación', 599.99),
('SKU-002', 'Laptop Pro', 'Portátil para desarrolladores', 1200.50),
('SKU-003', 'Auriculares Wireless', 'Cancelación de ruido activa', 150.00);
