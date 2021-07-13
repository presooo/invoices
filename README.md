# Setup

1. Dependencies: `composer install`

2. Run: `php bin/console server:run`

3. Access: http://127.0.0.1:8000/

## DB setup

1.  Set the DB name in the `.env` file:

    `DATABASE_URL=mysql://root@127.0.0.1:3306/<DB_NAME>`

2.  Create the tables and migrate

    `php bin/console doctrine:database:create`

    `php bin/console doctrine:migrations:migrate`

# Create a MySQL query that return the quantity of Lines by Invoice (It is not necessary link this query to your sourcecode)

```
SELECT ih.id, count(il.id) as LineQuantity, ih.status
FROM invoice_headers ih
INNER JOIN invoice_lines il ON ih.id = il.invoice_header_id
GROUP BY ih.id;
```
