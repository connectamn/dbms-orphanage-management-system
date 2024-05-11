# dbms-orphanage-management-system
# Orphanage-Management-System

# PHP Complete OMS - Orphanage Management System
# HTML 
# SQL
Group Project of DBMS
Course Code: CSE224
Course: Database Management System

### ****Creating the Database Table****

Create a table named *OMS* inside your MySQL database using the following code.

```sql


CREATE TABLE Adoptor (
  A_Number INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  A_Name VARCHAR(255),
  A_address VARCHAR(255)
);

CREATE TABLE donation (
    D_ID INT AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(255),
    Mobile VARCHAR(255)
);

CREATE TABLE House_Parent (
  HP_ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  Name VARCHAR(255),
  Mobile INT NOT NULL,
  E_mail VARCHAR(255)
);

CREATE TABLE `OMS` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `child_name` varchar(255) NOT NULL,
  `child_age` int(3) NOT NULL,  
  `child_gender` varchar(255) NOT NULL,
  `child_photo` varchar(255) NOT NULL,
  `child_arrival_date` date NOT NULL,
  `child_allergic_issue` varchar(255) NOT NULL,
  `child_blood_group` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE Room (
  Room_ID INT NOT NULL AUTO_INCREMENT,
  R_number INT NOT NULL,
  Room_super_id INT NOT NULL,
  Bed_Number INT NOT NULL,
  PRIMARY KEY (Room_ID)
);

CREATE TABLE Trust (
  Name VARCHAR(255),
  ID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  Location VARCHAR(255)
);


```

### ****Copy files to htdocs folder****

Download the above files. Create a folder named *OMS* inside *htdocs* folder in *xampp* directory. Finally, copy the *OMS* folder inside *htdocs* folder. Now, visit [localhost/crud](http://localhost/crud) in your browser and you should see the application.
