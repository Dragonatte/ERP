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
VALUES ('Hamburguesa', 'Hamburguesa de ternera', 200, 100, 1),
    ('Coca-Cola', 'Coca-Cola de 33cl', 33, 100, 3),
    ('Cerveza', 'Cerveza de 33cl', 33, 100, 2),
    ('Agua', 'Agua de 33cl', 33, 100, 3),
    ('Patatas', 'Patatas fritas', 100, 100, 1),
    ('Ensalada', 'Ensalada de lechuga y tomate', 100, 100, 1),
    ('Café', 'Café con leche', 100, 100, 3),
    ('Té', 'Té con leche', 100, 100, 3),
    ('Vino', 'Vino de la casa', 100, 100, 2),
    ('Copa', 'Copa de vino', 100, 100, 2);
