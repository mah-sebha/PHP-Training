-- Select all clients
SELECT * FROM clients;

-- Select price field from dishes
SELECT price FROM dishes;

-- Aggregate Functions --
-- Select total amount of order items
SELECT SUM(amount) FROM order_items;
-- Select count of orders
SELECT COUNT(id) FROM orders;

-- Filtering orders
-- Select Processing orders
SELECT * FROM orders WHERE status = "Processing";

-- Ordering orders by date created in descending order
SELECT * FROM orders ORDER BY created_at DESC;
