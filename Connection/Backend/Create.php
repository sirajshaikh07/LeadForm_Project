<?php
include("../Connection/connection.php");
$sql = "
CREATE TABLE Office(
    id INT AUTO_INCREMENT PRIMARY KEY,
    RA_NAME VARCHAR(255),
    FIRST_NAME VARCHAR(255),
    LAST_NAME VARCHAR(255),
    JOB_TITLE VARCHAR(255),
    JOB_LEVEL VARCHAR(255),
    TAL_MAPPED VARCHAR(255),
    EMAIL_ID VARCHAR(255),
    PHONE_NO VARCHAR(255),
    COMPANY_NAME VARCHAR(255),
    COMPANY_WEBSITE VARCHAR(255),
    ADDRESS_LINE_1 VARCHAR(255),
    ADDRESS_LINE_2 VARCHAR(255),
    CITY VARCHAR(255),
    STATE VARCHAR(255),
    POSTAL_CODE VARCHAR(10),
    COUNTRY VARCHAR(255),
    EMPLOYEE_SIZE VARCHAR(255),
    INDUSTRY_TYPE VARCHAR(255),
    SUB_INDUSTRY VARCHAR(255),
    Prospect_Link VARCHAR(255),
    Employee_Size_Link VARCHAR(255),
    Industry_Type_Link VARCHAR(255)
)";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "table created successfully";
}




?>