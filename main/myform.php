<?php
if (isset($_POST['submit'])) {
    include("../Connection/connection.php");
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
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/link.css">
    <style>
        body {
            background-color: #222;
            /* Dark background color */
        }

        .container {
            width: 80%;
            /* Adjust as needed */
            margin: auto;
            padding: 20px;
        }

        .container form {
            background-color: #333;
            /* Dark form background color */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .form-label {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <header class="head">
            <h1 class="mx-auto text-center fw-semibold border border-secondary w-50 bg-secondary">
                <a class="navbar-brand text-white" href="./agent.php">
                    <i class="bi bi-box-arrow-left"></i>
                    Lead Form
                </a>
            </h1>
        </header>
        <section class="container my-2 bg-secondary w-50 text-light p-2">
            <form class="row g-3 p-3 shadow-lg" method="post" action="./myform.php">
                <div class="col-md-4">
                    <label for="raName" class="form-label">RA NAME</label>
                    <input type="text" name="RA_NAME" class="form-control" id="raName" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="firstName" class="form-label">First name</label>
                    <input type="text" name="FIRST_NAME" class="form-control" id="firstName" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="lastName" class="form-label">Last name</label>
                    <input type="text" name="LAST_NAME" class="form-control" id="lastName" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="jobTitle" class="form-label">JOB TITLE</label>
                    <input type="text" name="JOB_TITLE" class="form-control" id="jobTitle" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-12">
                    <label for="jobLevel" class="form-label">JOB LEVEL</label>
                    <input type="text" name="JOB_LEVEL" class="form-control" id="jobLevel">
                </div>
                <div class="col-12">
                    <label for="domain" class="form-label">DOMAIN</label>
                    <input type="text" name="DOMAIN" class="form-control" id="domain">
                </div>
                <div class="col-md-12">
                    <label for="email" class="form-label">Email</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="emailPrepend">@</span>
                        <input type="text" name="EMAIL" class="form-control" id="email" required>
                        <div class="invalid-feedback">
                            Please enter a valid email address.
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="phoneNo" class="form-label">PHONE NO</label>
                    <input type="text" name="PHONE_NO" class="form-control" id="phoneNo">
                </div>
                <div class="col-md-12">
                    <label for="companyName" class="form-label">COMPANY NAME</label>
                    <input type="text" name="COMPANY_NAME" class="form-control" id="companyName">
                </div>
                <div class="col-md-12">
                    <label for="companyWebsite" class="form-label">COMPANY WEBSITE</label>
                    <input type="text" name="COMPANY_WEBSITE" class="form-control" id="companyWebsite">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" name="ADDRESS" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Address 2</label>
                    <input type="text" name="ADDRESS_2" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="col-md-12">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" name="CITY" class="form-control" id="inputCity">
                </div>
                <div class="col-md-12">
                    <label for="inputState" class="form-label">State</label>

                    <input type="text" name="STATE" class="form-control" id="inputCity">
                </div>
                <div class="col-md-12">
                    <label for="inputPostalCode" class="form-label">POSTAL CODE</label>
                    <input type="text" name="POSTAL_CODE" class="form-control" id="inputPostalCode">
                </div>
                <div class="col-md-12">
                    <label for="inputCountry" class="form-label">COUNTRY</label>
                    <input type="text" name="COUNTRY" class="form-control" id="inputCountry">
                </div>
                <div class="col-12">
                    <label for="employeeSize" class="form-label">EMPLOYEE SIZE</label>
                    <input type="text" name="EMPLOYEE_SIZE" class="form-control" id="employeeSize">
                </div>
                <div class="col-12">
                    <label for="industryType" class="form-label">INDUSTRY TYPE</label>
                    <input type="text" name="INDUSTRY_TYPE" class="form-control" id="industryType">
                </div>
                <div class="col-12">
                    <label for="subIndustry" class="form-label">SUB INDUSTRY</label>
                    <input type="text" name="SUB_INDUSTRY" class="form-control" id="subIndustry">
                </div>
                <div class="col-12">
                    <label for="prospectLinkedIn" class="form-label">PROSPECT LINKEDIN</label>
                    <input type="text" name="PROSPECT_LINKEDIN" class="form-control" id="prospectLinkedIn">
                </div>
                <div class="col-12">
                    <label for="employeeSizeLinkedIn" class="form-label">EMPLOYEE SIZE LINKEDIN</label>
                    <input type="text" name="EMPLOYEE_SIZE_LINKEDIN" class="form-control" id="employeeSizeLinkedIn">
                </div>
                <div class="col-12">
                    <label for="industryTypeLinkedIn" class="form-label">INDUSTRY TYPE LINKEDIN</label>
                    <input type="text" name="INDUSTRY_TYPE_LINKEDIN" class="form-control" id="industryTypeLinkedIn">
                </div>

                <div class="col-12 d-flex justify-content-center">
                    <button class="btn btn-primary" type="submit" name="submit">Submit form</button>
                </div>
            </form>
        </section>
    </div>
</body>

</html>