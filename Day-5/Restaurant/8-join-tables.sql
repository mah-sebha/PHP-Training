SELECT d.id, d.name, oi.quantity, oi.amount
FROM dishes AS d
LEFT JOIN order_items AS oi ON d.id = oi.dish_id
ORDER BY oi.amount DESC
