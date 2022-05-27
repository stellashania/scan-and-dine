## About Scan and Dine

The Scan and Dine web app project is a university group project for the Web Programming course. Scan and Dine is a web app for restaurants that include both the admin and customer app. The app aims to reduce waiting time, minimize physical interaction during the pandemic, and allows customers to have a pleasant dining experience. Customers can reserve a table, view the restaurant's menu, place an order, and pay their bill through the web app, while admins can manage the reservations menu, and orders from the customers.


## Tools
- Laravel
- HTML5
- CSS
- PHP
- Bootstrap
- XAMPP (with MySQL database)


## Screenshots

- Customer app
![1](https://user-images.githubusercontent.com/79920236/170654621-ea8af6ca-af60-4df3-b2f8-461ed47a8b73.png)
![2](https://user-images.githubusercontent.com/79920236/170654632-e24f404f-7c7e-4012-b328-cecddcc4e8b2.png)
![3](https://user-images.githubusercontent.com/79920236/170654635-67224379-e38a-4616-b1f1-55b4b6a5c575.png)
![4](https://user-images.githubusercontent.com/79920236/170654641-26257eb0-e931-4988-a362-2a594abbd0d6.png)
![5](https://user-images.githubusercontent.com/79920236/170654645-b4f0d6a4-cbaa-493c-872d-7ca3d3b15561.png)
![6](https://user-images.githubusercontent.com/79920236/170654649-bad16531-2da4-4257-8d9f-c26c62e49152.png)

- Admin app
![7](https://user-images.githubusercontent.com/79920236/170654654-27b0bb24-75f4-4a5e-9b4e-9afba99b6b15.png)
![8](https://user-images.githubusercontent.com/79920236/170654655-279da6fc-7acc-4d5f-8d66-3f798a2c2420.png)
![9](https://user-images.githubusercontent.com/79920236/170654613-3644754a-7b44-4403-9a39-cffc8f931934.png)


### How to Run the App
- Required apps to install: XAMPP, Composer, Node.js
- Pull the project
- Start Apache and MySQL in XAMPP
- Create an .env file and edit the values (DB Host, DB Port, etc.) based on your setup
- Create a MySQL database with the same name as the ```DB_DATABASE``` value in the .env file of the project, which is "scananddine".
- Run ```composer update``` to update dependencies
- Run ```php artisan migrate --seed``` to create the tables and seed the data into the database
- Run ```php artisan storage:link``` to link the storage
- Run ```php artisan serve``` to run the app
