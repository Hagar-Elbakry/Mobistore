# Mobistore
Mobistore is an e-commerce web application for selling mobile phones.
This project is built using **PHP** and **MYSQL**.

## Project Structure

```
app/
    controllers/
    core/
    database/
    models/
    views/
public/
```
- **app/controllers/** : Contains the controller classes.
- **app/core/** : Contains the core classes and configuration files.
- **app/database/**  Contains the database schema.
- **app/models/** : Contains the models classes.
- **app/views/** : Contains the view files.
- **public/** : Contains the public-facing files such as `index.php`, `assets` and `.htaccess`.

## File Descriptions
- **index.php**: Entry point of the application.
- **App.php**: Core application class that handles routing.
- **Controller.php**: Base controller trait for loading views.
- **Database.php**: Database connection class.
- **init.php**: Initializes the application by loading necessary files.
- **Cart.php**: Controller for handling product-related actions.
- **Product.php**: Controller for handling product-related actions.
- **Home.php**: Controller for handling the homepage.
- **functions.php**: Contains global functions and initializes models.
- **Products.php**: Model for handling product data.
- **Carts.php**: Model for handling cart data.

## Features
The application has the following main features:

- **Home Page**: Displays banners, top sales, special prices and new phones.
- **Product Page**: Displays detailed information about products.
- **Cart Page**: Displays items added to the shopping cart.
- **Wishlist Page**: Displays items saved to the wishlist.
- **404 Error Page**: Displays a custom 404 error page when a page is not found.
- **Database Integration**: Uses MySQL for storing product, cart, and user data.
- **Session Management**: Manages user sessions securely.
- **URL Routing**: Uses .htaccess for URL rewriting to handle clean URLs.
- **Autoloading**: Automatically loads required classes

## Template Usage**

This project uses an HTML, CSS and JavaScript template from the following repository: 
[https://github.com/akashyap2013/Mobile_Shopee-E-Commerce-Website.git](https://github.com/akashyap2013/Mobile_Shopee-E-Commerce-Website.git).
