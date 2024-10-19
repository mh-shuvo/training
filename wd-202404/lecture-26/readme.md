
### What is MySQL?
* MySQL is a database system used on the web
* MySQL is a database system that runs on a server
* MySQL is ideal for both small and large applications
* MySQL is very fast, reliable, and easy to use
* MySQL uses standard SQL
* MySQL compiles on a number of platforms
* MySQL is free to download and use
* MySQL is developed, distributed, and supported by Oracle Corporation
* MySQL is named after co-founder Monty Widenius's daughter: My
The data in a MySQL database are stored in tables. A table is a collection of related data, and it consists of * columns and rows.

### PHP Connecti with MySQL
* MySQLi extension (the "i" stands for improved)
* PDO (PHP Data Objects)

#### Should I Use MySQLi or PDO?

* PDO will work on 12 different database systems, whereas MySQLi will only work with MySQL databases.

* Both are object-oriented, but MySQLi also offers a procedural API.

* Both support Prepared Statements. Prepared Statements protect from SQL injection, and are very important for web application security.

### In MySQL data store as tabular format

#### Connection 
        ## Example (MySQLi Object-Oriented)
        <?php
            $servername = "localhost";
            $username = "root";
            $password = null;

            // Create connection
            $conn = new mysqli($servername, $username, $password);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            echo "Connected successfully";
        ?>
        ##Example (MySQLi Procedural)
        <?php
        $servername = "localhost";
        $username = "root";
        $password = null;

        // Create connection
        $conn = mysqli_connect($servername, $username, $password);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully";
        ?>
        ##Example (PDO)
        <?php
        $servername = "localhost";
        $username = "roto";
        $password = null;

        try {
            $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        ?>

## DML vs DDL

* DDL - Data Definiton Language
* DML - Data Manipulation Language
