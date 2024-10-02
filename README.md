# eCommerce Website for Clothing

A modern eCommerce website developed by three students from University of Bundelkhand, Jhansi.

![Website Screenshot](https://github.com/metaXproject/ecommerce/blob/main/images/Screenshot%20(23).png)

## Features

- **Modern Design**: Clean and responsive layout using HTML and CSS.
- **Product Grid View**: Display products with images, names, and prices.
- **Dynamic Cart**: Add products to cart with live total updates.
- **Secure Payments**: Integrated Stripe for processing payments.
- **Session Management**: Secure user authentication and session handling.
- **Local Server Optimization**: Easy to deploy using XAMPP.

## Installation

1. **Clone the repository**
    ```bash
    git clone https://github.com/yourusername/ecommerce-website.git
    ```

2. **Move to the project directory**
    ```bash
    cd ecommerce-website
    ```

3. **Move the project to the local server directory (e.g., XAMPP's htdocs)**
    ```bash
    mv ecommerce-website /path-to-xampp/htdocs/
    ```

4. **Start the local server** (e.g., XAMPP)
5. **Create database**
     users and products table as of now,       cart and orders table will be added        afterwards...
   use this query for user table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE
);

6. **Access the site**
    Open your web browser and navigate to:
    ```
    http://localhost/ecommerce-website/index.php
    ```

## Configuration

### Stripe Integration

1. **Set up your Stripe account**: Go to the [Stripe website](https://stripe.com/) and sign up for an account.

2. **Get API keys**: Obtain your publishable and secret keys from the Stripe Dashboard.

3. **Configure API keys**: Add your Stripe API keys to your configuration file or environment variables.

### Database Setup

1. **Create a database**: Set up a MySQL database using phpMyAdmin or command line.

2. **Import the database schema**: Import the provided SQL file to set up the necessary tables.

3. **Configure database connection**: Update the `functions.php` file with your database credentials.

## Usage

- **Add Products**: Modify the `products.json` file to add or update product details, including images, names, and prices.
- **Manage Cart**: Users can add products to their cart and view the total amount dynamically.
- **Checkout**: Use the integrated Stripe payment gateway to handle transactions.

## Contributing

1. Fork the repository
2. Create a new branch (`git checkout -b feature-branch`)
3. Commit your changes (`git commit -m 'Add new feature'`)
4. Push to the branch (`git push origin feature-branch`)
5. Create a new Pull Request

## License

This project is licensed under the MIT License. See the LICENSE file for details.

## Contact

For any inquiries or issues, please contact [Tanishq Seth](mailto:tanishqseth772@gmail.com).

## Contributors

Shantanu Yadav [mail](mailto:shantanuyadav@protonmail.ch)<br>
Rishabh Singh [mail](mailto:ayushsingh91200@gmail.com)<br>
Tanishq Seth [mail](mailto:tanishqseth772@gmail.com)
