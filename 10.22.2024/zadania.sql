SELECT * FROM Reservation;

SELECT * 
FROM Restaurant_Table 
WHERE id NOT IN (SELECT restaurant_table_id FROM Reservation);

SELECT * 
FROM Restaurant_Table 
WHERE id IN (SELECT restaurant_table_id FROM Reservation) AND restaurant_id = 1;

-- SELECT e.first_name, e.last_name AS position_name, r.name AS restaurant_name
-- FROM Employee e
-- WHERE id IN (SELECT employee_id FROM Employment);

SELECT * 
FROM Employee 
WHERE id NOT IN (SELECT employee_id FROM Employment);

SELECT e.first_name, e.last_name
FROM Employee e
WHERE (SELECT COUNT(DISTINCT restaurant_id) FROM Employment WHERE employee_id = e.id) >= 2;

SELECT * 
FROM Restaurant 
CROSS JOIN Employee;
