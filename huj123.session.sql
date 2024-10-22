CREATE TABLE Restaurant (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    city VARCHAR(100),
    address VARCHAR(255),
    postcode VARCHAR(10)
);

CREATE TABLE Meal_Type (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100)
);

CREATE TABLE Meal (
    id INT AUTO_INCREMENT PRIMARY KEY,
    meal_type_id INT,
    restaurant_id INT,
    price INT,
    meal_name VARCHAR(100),
    FOREIGN KEY (meal_type_id) REFERENCES Meal_Type(id),
    FOREIGN KEY (restaurant_id) REFERENCES Restaurant(id)
);

CREATE TABLE Employee_Position (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100)
);

CREATE TABLE Employee (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100),
    last_name VARCHAR(255),
    personal_id_number VARCHAR(11)
);

CREATE TABLE Employment (
    id INT AUTO_INCREMENT PRIMARY KEY,
    employee_id INT,
    employee_position_id INT,
    restaurant_id INT,
    FOREIGN KEY (employee_id) REFERENCES Employee(id),
    FOREIGN KEY (employee_position_id) REFERENCES Employee_Position(id),
    FOREIGN KEY (restaurant_id) REFERENCES Restaurant(id)
);

CREATE TABLE Restaurant_Table (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    number_of_guests INT,
    restaurant_id INT,
    FOREIGN KEY (restaurant_id) REFERENCES Restaurant(id)
);

CREATE TABLE Reservation (
    id INT AUTO_INCREMENT PRIMARY KEY,
    restaurant_table_id INT,
    phone_number VARCHAR(12),
    date DATE,
    number_of_guests INT,
    FOREIGN KEY (restaurant_table_id) REFERENCES Restaurant_Table(id)
);
