<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Web Page</title>

    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <style>
        #table-container {
            width: 100%;
            overflow-x: auto;
            white-space: nowrap;
        }

        .my-table td:nth-child(n+11),
        .my-table th:nth-child(n+11) {
            display: none;
        }
    </style>
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
                        <a class="nav-link" href="#">Form</a>
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
                            <a data-toggle="collapse" href="#collapse1"><img src="../imgs/table.png" alt="Table icon" width="50" height="50"></a>
                        </h4>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse">
                        <div id="table-container">
                            <table class="table table-dark table-striped my-table">
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
                                    // Sample table data
                                    for ($i = 1; $i <= 20; $i++) {
                                        echo "<tr>";
                                        echo "<td>" . $i . "</td>";
                                        echo "<td>RA Name " . $i . "</td>";
                                        echo "<td>First Name " . $i . "</td>";
                                        echo "<td>Last Name " . $i . "</td>";
                                        echo "<td>Job Title " . $i . "</td>";
                                        echo "<td>Job Level " . $i . "</td>";
                                        echo "<td>Domain " . $i . "</td>";
                                        echo "<td>Email " . $i . "</td>";
                                        echo "<td>Phone No " . $i . "</td>";
                                        echo "<td>Company Name " . $i . "</td>";
                                        echo "<td>Company Website " . $i . "</td>";
                                        echo "<td>Address " . $i . "</td>";
                                        echo "<td>City " . $i . "</td>";
                                        echo "<td>State " . $i . "</td>";
                                        echo "<td>Postal Code " . $i . "</td>";
                                        echo "<td>Country " . $i . "</td>";
                                        echo "<td>Employee Size " . $i . "</td>";
                                        echo "<td>Industry Type " . $i . "</td>";
                                        echo "<td>Sub Industry " . $i . "</td>";
                                        echo "<td>Prospect LinkedIn " . $i . "</td>";
                                        echo "<td>Employee Size LinkedIn " . $i . "</td>";
                                        echo "<td>Industry Type LinkedIn " . $i . "</td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <p>Copyright 2023</p>
    </footer>

    <!-- Include Bootstrap and jQuery JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>