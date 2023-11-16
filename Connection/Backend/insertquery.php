<?php
include("../connection.php");
$raName = $_POST["RA_NAME"];
$firstName = $_POST["FIRST_NAME"];
$lastName = $_POST["LAST_NAME"];
$jobTitle = $_POST["JOB_TITLE"];
$jobLevel = $_POST["JOB_LEVEL"];
$tailmap = $_POST["DOMAIN"];
$email = $_POST["EMAIL"];
$phoneNo = $_POST["PHONE_NO"];
$companyName = $_POST["COMPANY_NAME"];
$companyWebsite = $_POST["COMPANY_WEBSITE"];
$address = $_POST["ADDRESS"];
$address2 = $_POST["ADDRESS_2"];
$city = $_POST["CITY"];
$state = $_POST["STATE"];
$postalCode = $_POST["POSTAL_CODE"];
$country = $_POST["COUNTRY"];
$employeeSize = $_POST["EMPLOYEE_SIZE"];
$industryType = $_POST["INDUSTRY_TYPE"];
$subIndustry = $_POST["SUB_INDUSTRY"];
$prospectLinkedIn = $_POST["PROSPECT_LINKEDIN"];
$employeeSizeLinkedIn = $_POST["EMPLOYEE_SIZE_LINKEDIN"];
$industryTypeLinkedIn = $_POST["INDUSTRY_TYPE_LINKEDIN"];

// Create an SQL insert query
$sql = "INSERT INTO office (RA_NAME, FIRST_NAME, LAST_NAME, JOB_TITLE, JOB_LEVEL, TAL_MAPPED, EMAIL_ID, PHONE_NO, COMPANY_NAME, COMPANY_WEBSITE, ADDRESS_LINE_1, ADDRESS_LINE_2, CITY, STATE, POSTAL_CODE, COUNTRY, EMPLOYEE_SIZE, INDUSTRY_TYPE, SUB_INDUSTRY, Prospect_Link,Employee_Size_Link,Industry_Type_Link)
 VALUES ('$raName', '$firstName', '$lastName', '$jobTitle', '$jobLevel', '$$tailmap', '$email', '$phoneNo', '$companyName', '$companyWebsite', '$address', '$address2', '$city', '$state', '$postalCode', '$country', '$employeeSize', '$industryType', '$subIndustry', '$prospectLinkedIn', '$employeeSizeLinkedIn', '$industryTypeLinkedIn')";

// Execute the query
if (mysqli_query($conn, $sql)) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


