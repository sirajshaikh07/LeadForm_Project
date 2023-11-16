<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('./conn.php');
    session_start();

    // Retrieve form data
    // $agentName = $_POST["Agent_NAME"];
    // $leaderName = $_POST["Leader_NAME"];
    $campName = $_POST["CAMP_NAME"];
    $agentName1 = $_SESSION['username'];
    $raName = $_POST["RA_NAME"];
    $firstName = $_POST["FIRST_NAME"];
    $lastName = $_POST["LAST_NAME"];
    $jobTitle = $_POST["JOB_TITLE"];
    $jobLevel = $_POST["JOB_LEVEL"];
    $talMapped = $_POST["TAL_MAPPED"];
    $email = $_POST["EMAIL_ID"];
    $phone = $_POST["PHONE_NO"];
    $companyName = $_POST["COMPANY_NAME"];
    $companyWebsite = $_POST["COMPANY_WEBSITE"];
    $addressLine1 = $_POST["ADDRESS_LINE_1"];
    $addressLine2 = $_POST["ADDRESS_LINE_2"];
    $city = $_POST["CITY"];
    $state = $_POST["STATE"];
    $postalCode = $_POST["POSTAL_CODE"];
    $country = $_POST["COUNTRY"];
    $employeeSize = $_POST["EMPLOYEE_SIZE"];
    $industryType = $_POST["INDUSTRY_TYPE"];
    $subIndustry = $_POST["SUB_INDUSTRY"];
    $prospectLink = $_POST["Prospect_Link"];
    $employeeSizeLink = $_POST["Employee_Size_Link"];
    $industryTypeLink = $_POST["Industry_Type_Link"];
    $agentName1 = $_SESSION["username"];
    $leadername = $_SESSION['leader'];



    // Check if the record exists for the given agent name
    $query = "SELECT * FROM leadform WHERE Agent_NAME='$agentName1'";

    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($result) {
        // Check if there are any rows in the result set
        if (mysqli_num_rows($result) > 0) {
            // Fetch data from the result set
            while ($data = mysqli_fetch_assoc($result)) {

               



                // If CAMP_NAME is null, update the record; otherwise, insert a new record
                if ($data['CAMP_NAME'] == null) {
                    $updateQuery = "UPDATE leadform SET
                        CAMP_NAME='$campName',
                        RA_NAME='$raName',
                        FIRST_NAME='$firstName',
                        LAST_NAME='$lastName',
                        JOB_TITLE='$jobTitle',
                        JOB_LEVEL='$jobLevel',
                        TAL_MAPPED='$talMapped',
                        EMAIL_ID='$email',
                        PHONE_NO='$phone',
                        COMPANY_NAME='$companyName',
                        COMPANY_WEBSITE='$companyWebsite',
                        ADDRESS_LINE_1='$addressLine1',
                        ADDRESS_LINE_2='$addressLine2',
                        CITY='$city',
                        STATE='$state',
                        POSTAL_CODE='$postalCode',
                        COUNTRY='$country',
                        EMPLOYEE_SIZE='$employeeSize',
                        INDUSTRY_TYPE='$industryType',
                        SUB_INDUSTRY='$subIndustry',
                        Prospect_Link='$prospectLink',
                        Employee_Size_Link='$employeeSizeLink',
                        Industry_Type_Link='$industryTypeLink'
                        WHERE Agent_NAME='$agentName1'";

                    // Execute the update query
                    $updateResult = mysqli_query($conn, $updateQuery);

                    // Check for success
                    if ($updateResult) {
                        echo "Data updated successfully!";
                    } else {
                        echo "Error updating data: " . mysqli_error($conn);
                    }
                } else {
                    // If CAMP_NAME is not null, insert a new record
                    $insertQuery = "INSERT INTO leadform
                        (Agent_NAME, Leader_NAME, CAMP_NAME, RA_NAME, FIRST_NAME, LAST_NAME, JOB_TITLE, JOB_LEVEL, TAL_MAPPED, EMAIL_ID, PHONE_NO, 
                        COMPANY_NAME, COMPANY_WEBSITE, ADDRESS_LINE_1, ADDRESS_LINE_2, CITY, STATE, POSTAL_CODE, COUNTRY, EMPLOYEE_SIZE, INDUSTRY_TYPE, 
                        SUB_INDUSTRY, Prospect_Link, Employee_Size_Link, Industry_Type_Link)
                        VALUES 
                        ('$agentName1', '$leadername', '$campName', '$raName', '$firstName', '$lastName', '$jobTitle', '$jobLevel', '$talMapped', 
                        '$email', '$phone', '$companyName', '$companyWebsite', '$addressLine1', '$addressLine2', '$city', '$state', '$postalCode', 
                        '$country', '$employeeSize', '$industryType', '$subIndustry', '$prospectLink', '$employeeSizeLink', '$industryTypeLink')";

                    // Execute the insert query
                    $insertResult = mysqli_query($conn, $insertQuery);

                    // Check for success
                    if ($insertResult) {
                        echo "Data inserted successfully!";
                    } else {
                        echo "Error inserting data: " . mysqli_error($conn);
                    }
                }
            }
        } else {
            echo "No records found for Agent_NAME='$agentName1'";
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>


    <h1><a href="Userform.php">Login</a></h1>
    <div class="container mt-5">
        <form action="Form.php" method="post">
            <div class="form-group">
                <label for="RA_NAME">Agent Name</label>
                <input type="text" class="form-control" id="RA_NAME" name="Agent_NAME" value="<?php session_start();
                                                                                                echo $_SESSION['username'];   ?>" required disabled>
            </div>

            <div class="form-group">
                <label for="RA_NAME">Leader Name</label>
                <input type="text" class="form-control" id="RA_NAME" name="Leader_NAME" value="<?php 
                                                                                                echo $_SESSION['leader'];   ?>" required disabled>
            </div>
            <div class="form-group">
                <label for="RA_NAME">Camp Name</label>
                <input type="text" class="form-control" id="RA_NAME" name="CAMP_NAME" placeholder="RA Name" required>
            </div>
            <div class="form-group">
                <label for="RA_NAME">RA Name:</label>
                <input type="text" class="form-control" id="RA_NAME" name="RA_NAME" placeholder="RA Name" required>
            </div>

            <div class="form-group">
                <label for="FIRST_NAME">First Name:</label>
                <input type="text" class="form-control" id="FIRST_NAME" name="FIRST_NAME" placeholder="First Name" required>
            </div>

            <div class="form-group">
                <label for="LAST_NAME">Last Name:</label>
                <input type="text" class="form-control" id="LAST_NAME" name="LAST_NAME" placeholder="Last Name" required>
            </div>

            <div class="form-group">
                <label for="JOB_TITLE">Job Title:</label>
                <input type="text" class="form-control" id="JOB_TITLE" name="JOB_TITLE" placeholder="Job Title" required>
            </div>

            <div class="form-group">
                <label for="JOB_LEVEL">Job Level:</label>
                <input type="text" class="form-control" id="JOB_LEVEL" name="JOB_LEVEL" placeholder="Job Level" required>
            </div>

            <div class="form-group">
                <label for="TAL_MAPPED">TAL Mapped:</label>
                <input type="text" class="form-control" id="TAL_MAPPED" name="TAL_MAPPED" placeholder="TAL Mapped" required>
            </div>

            <div class="form-group">
                <label for="EMAIL_ID">Email ID:</label>
                <input type="email" class="form-control" id="EMAIL_ID" name="EMAIL_ID" placeholder="Email ID" required>
            </div>

            <div class="form-group">
                <label for="PHONE_NO">Phone Number:</label>
                <input type="tel" class="form-control" id="PHONE_NO" name="PHONE_NO" placeholder="Phone Number" required>
            </div>

            <div class="form-group">
                <label for="COMPANY_NAME">Company Name:</label>
                <input type="text" class="form-control" id="COMPANY_NAME" name="COMPANY_NAME" placeholder="Company Name" required>
            </div>

            <div class="form-group">
                <label for="COMPANY_WEBSITE">Company Website:</label>
                <input type="url" class="form-control" id="COMPANY_WEBSITE" name="COMPANY_WEBSITE" placeholder="Company Website" required>
            </div>

            <div class="form-group">
                <label for="ADDRESS_LINE_1">Address Line 1:</label>
                <input type="text" class="form-control" id="ADDRESS_LINE_1" name="ADDRESS_LINE_1" placeholder="Address Line 1" required>
            </div>

            <div class="form-group">
                <label for="ADDRESS_LINE_2">Address Line 2:</label>
                <input type="text" class="form-control" id="ADDRESS_LINE_2" name="ADDRESS_LINE_2" placeholder="Address Line 2">
            </div>

            <div class="form-group">
                <label for="CITY">City:</label>
                <input type="text" class="form-control" id="CITY" name="CITY" placeholder="City" required>
            </div>

            <div class="form-group">
                <label for="STATE">State:</label>
                <input type="text" class="form-control" id="STATE" name="STATE" placeholder="State" required>
            </div>

            <div class="form-group">
                <label for="POSTAL_CODE">Postal Code:</label>
                <input type="text" class="form-control" id="POSTAL_CODE" name="POSTAL_CODE" placeholder="Postal Code" required>
            </div>

            <div class="form-group">
                <label for="COUNTRY">Country:</label>
                <input type="text" class="form-control" id="COUNTRY" name="COUNTRY" placeholder="Country" required>
            </div>

            <div class="form-group">
                <label for="EMPLOYEE_SIZE">Employee Size:</label>
                <input type="text" class="form-control" id="EMPLOYEE_SIZE" name="EMPLOYEE_SIZE" placeholder="Employee Size" required>
            </div>

            <div class="form-group">
                <label for="INDUSTRY_TYPE">Industry Type:</label>
                <input type="text" class="form-control" id="INDUSTRY_TYPE" name="INDUSTRY_TYPE" placeholder="Industry Type" required>
            </div>

            <div class="form-group">
                <label for="SUB_INDUSTRY">Sub Industry:</label>
                <input type="text" class="form-control" id="SUB_INDUSTRY" name="SUB_INDUSTRY" placeholder="Sub Industry" required>
            </div>

            <div class="form-group">
                <label for="Prospect_Link">Prospect Link:</label>
                <input type="url" class="form-control" id="Prospect_Link" name="Prospect_Link" placeholder="Prospect Link" required>
            </div>

            <div class="form-group">
                <label for="Employee_Size_Link">Employee Size Link:</label>
                <input type="url" class="form-control" id="Employee_Size_Link" name="Employee_Size_Link" placeholder="Employee Size Link" required>
            </div>

            <div class="form-group">
                <label for="Industry_Type_Link">Industry Type Link:</label>
                <input type="url" class="form-control" id="Industry_Type_Link" name="Industry_Type_Link" placeholder="Industry Type Link" required>
            </div>

            <!-- Add other form elements as needed -->

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>