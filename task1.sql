SELECT strftime('%Y', p.date) year,  strftime('%m', p.date) mounth, AVG(i.price) amount FROM User u
INNER JOIN Purchases p on p.userId = u.userId
INNER JOIN Items i on i.itemId = p.itemId
WHERE u.age BETWEEN 18 AND 25
GROUP by strftime('%Y', p.date),  strftime('%m', p.date)
ORDER BY amount DESC;

SELECT strftime('%Y', p.date) y, strftime('%m', p.date) mounth, SUM(i.price) amount FROM User u
INNER JOIN purchases p on p.userId = u.userId
INNER JOIN items i on i.itemId = p.itemId
WHERE u.age >= 35
GROUP by strftime('%Y', p.date), strftime('%m', p.date)
ORDER BY amount DESC
LIMIT 1;