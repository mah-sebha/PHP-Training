SELECT dish_id, COUNT(order_id) AS number_of_orders
FROM order_items
GROUP BY dish_id