<?php
$servername = "localhost";
$username = "root";
$password = "";

//Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE studentlist";
if ($conn->query($sql) === TRUE) {
    echo "StudentList Database Created Successfully.<br>";
} else {
    echo "Error creating database: " . $conn->error;
}
$dbname = "studentlist";
// Create table connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check table connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// sql to create table
$sql = "CREATE TABLE students (
id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
fullname VARCHAR(30) NOT NULL,
email VARCHAR(50)NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo " Students Table Created Successfully.<br>";
} else {
    echo "Error creating table: " . $conn->error;
}
$sql = "INSERT INTO students (fullname, email)
VALUES ('John Doe', 'john@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Asif Karim', 'asif@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Kamal Pasha', 'kamal@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Shafiq Tuhin', 'tuhin@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Sumion Shahid', 'sumion@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Amin Rasjid', 'amin@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Muzahid Aziz', 'aziz@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Anwar Khan', 'khan@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Nazrul Mhaom', 'nazrul@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Kamal Pasha', 'pasha@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Shovon Ahmed', 'ahmed@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Wakil Khan', 'wakil@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Oli Ahmed', 'oli@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Baharul Islam', 'bahar@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('masud Kar', 'masud@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Kamal Pasha', 'pasha@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Shafiq Tuhin', 'tuhin@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Sumion Shahid', 'sumion@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Amin Rasjid', 'amin@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Muzahid Aziz', 'aziz@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Anwar Khan', 'khan@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Nazrul Mhaom', 'nazrul@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Kamal Pasha', 'kamal@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Shafiq Tuhin', 'tuhin@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Sumion Shahid', 'sumion@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Amin Rasjid', 'amin@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Muzahid Aziz', 'aziz@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Anwar Khan', 'khan@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Nazrul Mhaom', 'nazrul@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('John Doe', 'john@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Asif Karim', 'asif@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Kamal Pasha', 'kamal@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Shafiq Tuhin', 'tuhin@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Sumion Shahid', 'sumion@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Amin Rasjid', 'amin@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Muzahid Aziz', 'aziz@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Anwar Khan', 'khan@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Nazrul Mhaom', 'nazrul@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Kamal Pasha', 'pasha@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Shovon Ahmed', 'ahmed@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Asad Khan', 'asad@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Rashid Khan', 'rashid@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Tamim Iqbal', 'tamim@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Nasir Uddin', 'nasir@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Sakib Ahmed', 'sakib@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Md. Nasir', 'nasir@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Masrafe Martuza', 'mashe@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Golam Roni', 'roni@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Rohan Ahmed', 'rohan@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Akash Ahmed', 'akash@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('John Doe', 'john@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Asif Karim', 'asif@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Kamal Pasha', 'kamal@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Shafiq Tuhin', 'tuhin@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Sumion Shahid', 'sumion@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Amin Rasjid', 'amin@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Muzahid Aziz', 'aziz@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Anwar Khan', 'khan@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Nazrul Mhaom', 'nazrul@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Kamal Pasha', 'pasha@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Shovon Ahmed', 'ahmed@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Wakil Khan', 'wakil@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Oli Ahmed', 'oli@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Baharul Islam', 'bahar@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('masud Kar', 'masud@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Kamal Pasha', 'pasha@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Shafiq Tuhin', 'tuhin@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Sumion Shahid', 'sumion@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Amin Rasjid', 'amin@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Muzahid Aziz', 'aziz@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Anwar Khan', 'khan@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Nazrul Mhaom', 'nazrul@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Kamal Pasha', 'kamal@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Shafiq Tuhin', 'tuhin@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Sumion Shahid', 'sumion@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Amin Rasjid', 'amin@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Muzahid Aziz', 'aziz@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Anwar Khan', 'khan@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Nazrul Mhaom', 'nazrul@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('John Doe', 'john@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Asif Karim', 'asif@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Kamal Pasha', 'kamal@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Shafiq Tuhin', 'tuhin@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Sumion Shahid', 'sumion@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Amin Rasjid', 'amin@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Muzahid Aziz', 'aziz@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Anwar Khan', 'khan@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Nazrul Mhaom', 'nazrul@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Kamal Pasha', 'pasha@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Shovon Ahmed', 'ahmed@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Asad Khan', 'asad@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Rashid Khan', 'rashid@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Tamim Iqbal', 'tamim@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Nasir Uddin', 'nasir@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Sakib Ahmed', 'sakib@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Md. Nasir', 'nasir@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Masrafe Martuza', 'mashe@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Golam Roni', 'roni@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Rohan Ahmed', 'rohan@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Akash Ahmed', 'akash@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('John Doe', 'john@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Asif Karim', 'asif@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Kamal Pasha', 'kamal@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Shafiq Tuhin', 'tuhin@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Sumion Shahid', 'sumion@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Amin Rasjid', 'amin@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Muzahid Aziz', 'aziz@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Anwar Khan', 'khan@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Nazrul Mhaom', 'nazrul@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Kamal Pasha', 'pasha@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Shovon Ahmed', 'ahmed@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Wakil Khan', 'wakil@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Oli Ahmed', 'oli@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Baharul Islam', 'bahar@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('masud Kar', 'masud@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Kamal Pasha', 'pasha@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Shafiq Tuhin', 'tuhin@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Sumion Shahid', 'sumion@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Amin Rasjid', 'amin@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Muzahid Aziz', 'aziz@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Anwar Khan', 'khan@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Nazrul Mhaom', 'nazrul@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Kamal Pasha', 'kamal@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Shafiq Tuhin', 'tuhin@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Sumion Shahid', 'sumion@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Amin Rasjid', 'amin@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Muzahid Aziz', 'aziz@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Anwar Khan', 'khan@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Nazrul Mhaom', 'nazrul@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('John Doe', 'john@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Asif Karim', 'asif@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Kamal Pasha', 'kamal@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Shafiq Tuhin', 'tuhin@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Sumion Shahid', 'sumion@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Amin Rasjid', 'amin@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Muzahid Aziz', 'aziz@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Anwar Khan', 'khan@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Nazrul Mhaom', 'nazrul@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Kamal Pasha', 'pasha@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Shovon Ahmed', 'ahmed@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Asad Khan', 'asad@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Rashid Khan', 'rashid@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Tamim Iqbal', 'tamim@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Nasir Uddin', 'nasir@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Sakib Ahmed', 'sakib@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Md. Nasir', 'nasir@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Masrafe Martuza', 'mashe@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Golam Roni', 'roni@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Rohan Ahmed', 'rohan@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Akash Ahmed', 'akash@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('John Doe', 'john@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Asif Karim', 'asif@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Kamal Pasha', 'kamal@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Shafiq Tuhin', 'tuhin@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Sumion Shahid', 'sumion@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Amin Rasjid', 'amin@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Muzahid Aziz', 'aziz@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Anwar Khan', 'khan@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Nazrul Mhaom', 'nazrul@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Kamal Pasha', 'pasha@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Shovon Ahmed', 'ahmed@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Wakil Khan', 'wakil@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Oli Ahmed', 'oli@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Baharul Islam', 'bahar@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('masud Kar', 'masud@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Kamal Pasha', 'pasha@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Shafiq Tuhin', 'tuhin@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Sumion Shahid', 'sumion@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Amin Rasjid', 'amin@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Muzahid Aziz', 'aziz@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Anwar Khan', 'khan@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Nazrul Mhaom', 'nazrul@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Kamal Pasha', 'kamal@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Shafiq Tuhin', 'tuhin@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Sumion Shahid', 'sumion@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Amin Rasjid', 'amin@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Muzahid Aziz', 'aziz@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Anwar Khan', 'khan@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Nazrul Mhaom', 'nazrul@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('John Doe', 'john@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Asif Karim', 'asif@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Kamal Pasha', 'kamal@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Shafiq Tuhin', 'tuhin@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Sumion Shahid', 'sumion@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Amin Rasjid', 'amin@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Muzahid Aziz', 'aziz@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Anwar Khan', 'khan@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Nazrul Mhaom', 'nazrul@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Kamal Pasha', 'pasha@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Shovon Ahmed', 'ahmed@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Asad Khan', 'asad@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Rashid Khan', 'rashid@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Tamim Iqbal', 'tamim@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Nasir Uddin', 'nasir@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Sakib Ahmed', 'sakib@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Md. Nasir', 'nasir@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Masrafe Martuza', 'mashe@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Golam Roni', 'roni@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Rohan Ahmed', 'rohan@example.com');";
$sql .= "INSERT INTO students (fullname, email)
VALUES ('Akash Ahmed', 'akash@example.com')";

if ($conn->multi_query($sql) === TRUE) {
    echo "Data Inserted Successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
