-- Add dishes
INSERT INTO dishes (name, description, image, quantity, price) VALUES
('Pizza', 'Delicious cheese pizza with a variety of toppings.', 'path/to/pizza_image.jpg', 50, 12.99),
('Tuna Sandwich', 'Fresh tuna sandwich with lettuce and tomatoes.', 'path/to/tuna_sandwich_image.jpg', 30, 8.99);

-- Add clients
INSERT INTO clients (name, phone) VALUES
('John Doe', '123-456-7890'),
('Jane Smith', '987-654-3210'),
('Alex Johnson', '555-666-7777');

-- Add orders data --

-- Order by John Doe
INSERT INTO orders (client_id, status) VALUES (1, 'Completed');

-- Order by Jane Smith
INSERT INTO orders (client_id, status) VALUES (2, 'Processing');

-- Order by Alex Johnson
INSERT INTO orders (client_id, status) VALUES (3, 'Delivered');

-- Order items for John Doe's order
INSERT INTO order_items (order_id, dish_id, quantity, amount) VALUES (1, 1, 2, 25.98); -- 2 Pizzas
INSERT INTO order_items (order_id, dish_id, quantity, amount) VALUES (1, 2, 1, 8.99);  -- 1 Tuna Sandwich

-- Order items for Jane Smith's order
INSERT INTO order_items (order_id, dish_id, quantity, amount) VALUES (2, 1, 1, 12.99); -- 1 Pizza
INSERT INTO order_items (order_id, dish_id, quantity, amount) VALUES (2, 2, 2, 17.98); -- 2 Tuna Sandwiches

-- Order items for Alex Johnson's order
INSERT INTO order_items (order_id, dish_id, quantity, amount) VALUES (3, 2, 3, 26.97); -- 3 Tuna Sandwiches
