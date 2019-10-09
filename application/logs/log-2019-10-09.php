<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2019-10-09 04:52:24 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column '1410inventory.transactions.transDate' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT count(DISTINCT(ref)) as "tot_trans", SUM(quantity) as "qty_sold", SUM(totalPrice) as "tot_earned", `transDate`
FROM `transactions`
GROUP BY DATE(transDate)
ORDER BY DATE(transDate) DESC
 LIMIT 10
ERROR - 2019-10-09 04:53:54 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column '1410inventory.transactions.transDate' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT count(DISTINCT(ref)) as "tot_trans", SUM(quantity) as "qty_sold", SUM(totalPrice) as "tot_earned", `transDate`
FROM `transactions`
GROUP BY DATE(transDate)
ORDER BY DATE(transDate) DESC
 LIMIT 10
ERROR - 2019-10-09 04:53:55 --> Query error: Expression #4 of SELECT list is not in GROUP BY clause and contains nonaggregated column '1410inventory.transactions.transDate' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query: SELECT count(DISTINCT(ref)) as "tot_trans", SUM(quantity) as "qty_sold", SUM(totalPrice) as "tot_earned", `transDate`
FROM `transactions`
GROUP BY DATE(transDate)
ORDER BY DATE(transDate) DESC
 LIMIT 10
