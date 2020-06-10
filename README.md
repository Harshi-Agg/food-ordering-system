# food-ordering-system
A real-life web application food ordering system, that will be used by real users.
Technologies: 
a) Front-end in HTML/CSS/JS.  
b) Backend in core PHP. MySQL as the database.
Functionalities:
'Registration’ pages - Different registration pages for Restaurants & Customers. Capture customer’s preferences (veg/non-veg) during registration.
‘Login’ pages - Single/different login pages for restaurants & customers. 
‘Add menu item’ page - A restaurant, once logged in, they are able to add details of new food items to their restaurant’s menu. Access to this page is restricted only to restaurants. 
‘Menu’ page - A page that displays all the available food items along with which restaurants have them and a ‘Order’ button. This page is accessible to everyone, irrespective of whether the user is logged in or not. On click of the 'Order' button-  
- Only customers are able to order food by clicking the ‘Order’ button.
- Cart functionality is removed.
- If the user is not logged in, then he/she is redirected to the login page.
- If a user is logged in as a restaurant, then the user is not allowed to order the food.
‘View orders’ page - Restaurant is able to see the list of all the customers who have ordered from their restaurant along with the food items they have ordered.
