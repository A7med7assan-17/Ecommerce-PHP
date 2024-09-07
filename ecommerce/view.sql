Create OR REPLACE View items1view AS
Select items.* , categories.* From items , 
INNER Join categories on items.items_cat = categories.categories_id ;


CREATE OR REPLACE VIEW MyFavorite AS
SELECT favorite.* , items.* , users.users_id FROM favorite
INNER JOIN users ON users.users_id = favorite.favorite_usersid
INNER JOIN items ON items.items_id = favorite.favorite_itemsid ;


CREATE OR REPLACE VIEW cartview AS
SELECT SUM(items.items_price) AS itemsprice, COUNT(cart_itemsid) AS countitems , cart.* , items.* FROM cart 
INNER JOIN items ON items.items_id = cart.cart_itemsid
where cart_orders = 0
GROUP BY cart.cart_itemsid , cart.cart_usersid


SELECT SUM(itemsprice) AS totalprice, SUM(countitems) AS totalcount FROM `cartview` 
GROUP BY cart_usersid