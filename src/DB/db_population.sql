# POPULATE DATABASE
## Populate table "restaurante"
INSERT INTO restaurante (CORREO, CLAVE, DIRECCION, CP, PAIS)
VALUES ('admin@admin.com', 'admin', 'C/ Avenida de las Flores, 15', 18615, 'España');

## Populate table "categoria"
INSERT INTO categoria (NOMBRE, DESCRIPCION)
VALUES ('Comida', 'Comida sólida'),
    ('Bebidas con', 'Bebidas con alcohol'),
    ('Bebidas sin', 'Bebidas sin alcohol');

## Populate table "producto"

INSERT INTO producto (NOMBRE, DESCRIPCION, PESO, STOCK, COD_CAT)
VALUES ('Hamburguesa', 'Hamburguesa de ternera', 200, 0, 1),
    ('Coca-Cola', 'Coca-Cola de 33cl', 33, 0, 3),
    ('Cerveza', 'Cerveza de 33cl', 33, 0, 2),
    ('Agua', 'Agua de 33cl', 33, 0, 3),
    ('Patatas', 'Patatas fritas', 100, 0, 1),
    ('Ensalada', 'Ensalada de lechuga y tomate', 100, 0, 1),
    ('Café', 'Café con leche', 100, 0, 3),
    ('Té', 'Té con leche', 100, 0, 3),
    ('Vino', 'Vino de la casa', 100, 0, 2),
    ('Copa', 'Copa de vino', 100, 0, 2),
    ('Pinta', 'Pinta de cerveza', 100, 0, 2),
    ('Cubata', 'Cubata de ron', 100, 0, 2),
    ('Spagetti carbonara', 'Spagetti carbonara', 200, 0, 1),
    ('Spagetti boloñesa', 'Spagetti boloñesa', 200, 0, 1),
    ('Pizza de 4 quesos', 'Pizza con salsa de tomate, mozzarella, parmesano, ricota y rulo de cabra', 200, 0, 1),
    ('Pizza de pepperoni', 'Pizza con salsa de tomate, mozzarella y peperoni', 200, 0, 1),
    ('Pizza de jamón y queso', 'Pizza con salsa de tomate, mozzarella y jamón cocido', 200, 0, 1),
    ('Pizza de atún y cebolla', 'Pizza con salsa de tomate, mozzarella, atún y cebolla', 200, 0, 1),
    ('Pizza de vegetales', 'Pizza con salsa de tomate, mozzarella, pimiento, calabacín, berenjena y cebolla',200, 0, 1),
    ('Pizza de pollo', 'Pizza con salsa de tomate, mozzarella y pollo asado', 200, 0, 1),
    ('Pizza de barbacoa', 'Pizza con salsa barbacoa, mozzarella, pollo asado, bacon',200, 0, 1),
    ('Pizza de hawaiana', 'Pizza con salsa de tomate, mozzarella y piña', 200, 0, 1),
    ('Pizza de 4 estaciones', 'Pizza con salsa de tomate, alcachofa, tomate en láminas, albahaca, jamón, setas y aceitunas', 200, 0, 1),
    ('Entrecot', 'Entrecot de ternera a la brasa con patatas y pimientos asados', 300, 0, 1),
    ('Chuletillas de cordero', 'chuletillas de cordero a las brasas con patatas y pimientos asados', 250, 0, 1),
    ('Solomillo', 'Solomillo de ternera a la brasa con patatas y pimientos asados', 300, 0, 1),
    ('Chuleta de cerdo', 'Chuleta de cerdo a la brasa con patatas y pimientos asados', 300, 0, 1),
    ('Crème brûlée', 'Postre con base de yemas clarificadas, leche y vainilla', 150, 0, 1),
    ('Tarta de manzana', 'Tarta de manzana reineta con mermelada de melocotón', 250, 0, 1),
    ('Tarta de queso', 'Tarta de queso con mermelada de frutos rojos', 250, 0, 1),
    ('Tarta de chocolate', 'Tarta de chocolate con mermelada de frutos rojos', 250, 0, 1),
    ('Tarta de zanahoria', 'Tarta de zanahoria con mermelada de frutos rojos', 250, 0, 1),
    ('Tarta de limón', 'Tarta de limón con mermelada de frutos rojos', 250, 0, 1),
    ('Tarta de fresa', 'Tarta de fresa con mermelada de frutos rojos', 250, 0, 1),
    ('Tarta de frutos rojos', 'Tarta de frutos rojos con mermelada de frutos rojos', 250, 0, 1),
    ('Tarta de piña', 'Tarta de piña con mermelada de frutos rojos', 250, 0, 1),
    ('Tarta de melocotón', 'Tarta de melocotón con mermelada de frutos rojos', 250, 0, 1),
    ('Tarta de mango', 'Tarta de mango con mermelada de frutos rojos', 250, 0, 1),
    ('Tarta de coco', 'Tarta de coco con mermelada de frutos rojos', 250, 0, 1),
    ('Tarta de plátano', 'Tarta de plátano con mermelada de frutos rojos', 250, 0, 1),
    ('Tarta de naranja', 'Tarta de naranja con mermelada de frutos rojos', 250, 0, 1),
    ('Tarta de lima', 'Tarta de lima con mermelada de frutos rojos', 250, 0, 1),
    ('Tarta de limón', 'Tarta de limón con mermelada de frutos rojos', 250, 0, 1),
    ('Limoncello', 'Licor italiano con base de limón', 100, 0, 2),
    ('Cola-Cao', 'Un vaso de 250ml de Cola-Cao', 250, 0, 3),
    ('Nestea', 'Refresco con base de te negro', 333, 0, 3);
