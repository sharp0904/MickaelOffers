# Install steps

## 1. composer Install

```
$ composer require "mickael/offers:1.0.3@dev"
```

## 2.Enable module

```
php bin/magento module:enable Mickael_Offers
```

## 3. Execute setups

```
php bin/magento setup:upgrade
chmod 777 -R var/
php bin/magento setup:di:compile
php bin/magento ca:cl
```

## 4. Describe database to check structure

```
mysql> describe mickael_offers;
+------------+------------------+------+-----+-------------------+-----------------------------+
| Field      | Type             | Null | Key | Default           | Extra                       |
+------------+------------------+------+-----+-------------------+-----------------------------+
| offer_id   | int(10) unsigned | NO   | PRI | NULL              | auto_increment              |
| label      | varchar(255)     | NO   |     |                   |                             |
| image_path | varchar(255)     | NO   |     |                   |                             |
| link       | varchar(255)     | NO   |     |                   |                             |
| categories | varchar(255)     | NO   |     |                   |                             |
| start_date | timestamp        | NO   |     | CURRENT_TIMESTAMP |                             |
| end_date   | timestamp        | NO   |     | CURRENT_TIMESTAMP |                             |
| created_at | timestamp        | NO   |     | CURRENT_TIMESTAMP |                             |
| updated_at | timestamp        | NO   |     | CURRENT_TIMESTAMP | on update CURRENT_TIMESTAMP |
+------------+------------------+------+-----+-------------------+-----------------------------+
9 rows in set (0.00 sec)
```
