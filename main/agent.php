<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Web Page</title>
    <link rel="stylesheet" type="text/css" href="../css/link.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <header>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="#">PaperCut</a>
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./myform.php">Form</a>
                    </li>

                </ul>

            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <h2>Agent Information</h2>
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapse1"><img src="../imgs/table.png" alt="Girl in a jacket" width="50" height="50"></a>

                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <table class="table table-dark table-striped">
                            <thead class="table-danger">
                                <tr>
                                    <th>Index</th>
                                    <th>RA Name</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Job Title</th>
                                    <th>Job Level</th>
                                    <th>Domain</th>
                                    <th>Email</th>
                                    <th>Phone No</th>
                                    <th>Company Name</th>
                                    <th>Company Website</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Postal Code</th>
                                    <th>Country</th>
                                    <th>Employee Size</th>
                                    <th>Industry Type</th>
                                    <th>Sub Industry</th>
                                    <th>Prospect LinkedIn</th>
                                    <th>Employee Size LinkedIn</th>
                                    <th>Industry Type LinkedIn</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include("../Connection/connection.php");

                                // Create an SQL select query to retrieve data
                                $sql = "SELECT * FROM office";

                                $result = mysqli_query($conn, $sql);
                                $num = 1;

                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>";
                                        echo "<td>" . $num . "</td>";
                                        echo "<td>" . $row['RA_NAME'] . "</td>";
                                        echo "<td>" . $row['FIRST_NAME'] . "</td>";
                                        echo "<td>" . $row['LAST_NAME'] . "</td>";
                                        echo "<td>" . $row['JOB_TITLE'] . "</td>";
                                        echo "<td>" . $row['JOB_LEVEL'] . "</td>";
                                        echo "<td>" . $row['TAL_MAPPED'] . "</td>";
                                        echo "<td>" . $row['EMAIL_ID'] . "</td>";
                                        echo "<td>" . $row['PHONE_NO'] . "</td>";
                                        echo "<td>" . $row['COMPANY_NAME'] . "</td>";
                                        echo "<td>" . $row['COMPANY_WEBSITE'] . "</td>";
                                        echo "<td>" . $row['ADDRESS_LINE_1'] . "</td>";
                                        echo "<td>" . $row['CITY'] . "</td>";
                                        echo "<td>" . $row['STATE'] . "</td>";
                                        echo "<td>" . $row['POSTAL_CODE'] . "</td>";
                                        echo "<td>" . $row['COUNTRY'] . "</td>";
                                        echo "<td>" . $row['EMPLOYEE_SIZE'] . "</td>";
                                        echo "<td>" . $row['INDUSTRY_TYPE'] . "</td>";
                                        echo "<td>" . $row['SUB_INDUSTRY'] . "</td>";
                                        echo "<td>" . $row['Prospect_Link'] . "</td>";
                                        echo "<td>" . $row['Employee_Size_Link'] . "</td>";
                                        echo "<td>" . $row['Industry_Type_Link'] . "</td>";
                                        echo "</tr>";
                                        $num++;
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>

        <p>Copy Rights 2023</p>


    </footer>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>