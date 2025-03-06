# PHP Dynamic And SQL Operations

A simple PHP school project demonstrating basic PHP operations and MySQL database connectivity.

Repository: [notsopreety/phpFull](https://github.com/notsopreety/phpFull)

## Project Structure

```
notsopreety/phpFull/
├── Dynamic/                # PHP utilities and form operations
│   ├── oddeven.php         # Check if a number is odd or even
│   ├── palindrome.php      # Check if a string is a palindrome
│   ├── calculator.php      # Simple calculator with basic operations
│   ├── checkprime.php      # Check if a number is prime
│   └── login.php           # Basic login functionality
│
└── SQL/                    # Database operations
    ├── connect.php         # Database connection script
    ├── createDB.php        # Create database script
    ├── createTable.php     # Create table script
    ├── insert.php          # Insert data into table
    ├── select.php          # Select and display data from table
    ├── update.php          # Update records in table
    └── delete.php          # Delete records from table
```

## Features

### Dynamic PHP Operations
- **Even/Odd Checker**: Determine if a number is even or odd
- **Palindrome Checker**: Check if text reads the same forwards and backwards
- **Calculator**: Perform addition, subtraction, multiplication, and division
- **Prime Checker**: Verify if a number is prime
- **Login System**: Simple authentication with fixed credentials (admin/root)

### Database Operations
- **Database Creation**: Create a new MySQL database
- **Table Creation**: Define table structure with appropriate fields
- **CRUD Operations**: 
  - Create: Insert student records
  - Read: Display student information
  - Update: Modify existing records
  - Delete: Remove records from database

## Setup Instructions

1. Install a local server environment (XAMPP, WAMP, or MAMP)
2. Clone the repository to your web server directory:
   ```
   git clone https://github.com/notsopreety/phpFull.git
   ```
3. Start your Apache and MySQL services
4. Access the database scripts in order:
   - First run: `SQL/createDB.php` to create the database
   - Then run: `SQL/createTable.php` to create the students table
   - Finally: `SQL/insert.php` to populate the table with sample data

## How to Run (Using XAMPP)

1. Install [XAMPP](https://www.apachefriends.org/index.html) on your system.
2. Clone this repository:
   ```sh
   git clone https://github.com/notsopreety/c12-basic-php.git
   ```
3. Move the cloned folder to the XAMPP `htdocs` directory:
   ```sh
   C:\xampp\htdocs\phpFull
   ```
4. Start the Apache server from the XAMPP Control Panel.
5. Open your browser and run the PHP files using:
   ```
   http://localhost/phpFull/filename.php
   ```

## Database Structure

The project uses a MySQL database named `xyz` with a `students` table:

| Column      | Type             | Description                     |
|-------------|-----------------:|--------------------------------:|
| id          | INT UNSIGNED     | Primary key, auto-incremented   |
| first_name  | VARCHAR(15)      | Student's first name            |
| last_name   | VARCHAR(15)      | Student's last name             |
| class       | VARCHAR(2)       | Class/grade of the student      |
| roll_number | INT              | Student's roll number           |
| age         | INT(2)           | Student's age                   |
| address     | TEXT             | Student's address               |

## Usage

### Dynamic PHP Tools
Access each tool by navigating to its URL in your browser:
- `http://localhost/phpFull/Dynamic/oddeven.php`
- `http://localhost/phpFull/Dynamic/palindrome.php`
- `http://localhost/phpFull/Dynamic/calculator.php`
- `http://localhost/phpFull/Dynamic/checkprime.php`
- `http://localhost/phpFull/Dynamic/login.php`

### Database Operations
Execute these scripts in sequence to set up and manipulate the database:
1. `createDB.php`: Creates the 'xyz' database
2. `createTable.php`: Creates the 'students' table
3. `insert.php`: Adds sample student records
4. `select.php`: Displays all student records
5. `update.php`: Updates ages for specific students
6. `delete.php`: Removes a specific student record

## Technologies Used

- PHP 7+ 
- MySQL Database
- HTML Forms
- Basic CSS

## Learning Outcomes

This project demonstrates:
- Basic PHP syntax and operations
- Form handling and data validation
- Database connectivity using MySQLi
- CRUD operations in PHP and MySQL
- Simple user authentication principles


## Contributing
Feel free to contribute by adding more practical programs!

## License
This project is open-source and available under the MIT License.

## Author

**Samir Thakuri**

- GitHub: [notsopreety](https://github.com/notsopreety)
- Email: itssamir444@gmail.com

Feel free to reach out for any queries or collaboration opportunities!
