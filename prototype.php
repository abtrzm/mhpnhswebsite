<?php
include 'db_connect.php';  // Database connection
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // If no session exists, redirect to the login page
    header('Location: login.php');
    exit();
}

// Fetch student details (assuming data is stored in session or retrieved from database)
$username = $_SESSION['username'];  // Get the session username
// Example: Use the username to fetch data from the database
$query = $conn->prepare("SELECT * FROM users WHERE username = ?");
$query->execute([$username]);
$student = $query->fetch();

// If the student is not found in the database, redirect to login
if (!$student) {
    header('Location: login.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            min-height: 100vh;
        }
        .sidebar {
            width: 250px;
            background-color: #2B3940;
            color: white;
            height: 100vh;
            padding: 20px;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .sidebar img {
            width: 100px;
            border-radius: 50%;
            margin-bottom: 15px;
        }
        .sidebar h3 {
            text-align: center;
            margin-bottom: 20px;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
            width: 100%;
        }
        .sidebar ul li {
            padding: 12px;
            margin: 8px 0;
            background: #008000;
            cursor: pointer;
            text-align: center;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .sidebar ul li:hover {
            background: #00b300;
        }
        .content {
            flex: 1;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
        }
        .card {
            background: white;
            padding: 20px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            width: 90%;
            max-width: 800px;
            margin-bottom: 20px;
        }
        .card h2 {
            margin-bottom: 15px;
            color: #004d00;
        }
        .row {
            display: flex;
            gap: 10px;
        }
        .column {
            flex: 1;
        }
        .card label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
        }
        .card input {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #008000;
            color: white;
        }
        @media (max-width: 768px) {
            body {
                flex-direction: column;
                align-items: center;
            }
            .sidebar {
                width: 100%;
                height: auto;
                padding-bottom: 10px;
            }
            .content {
                padding: 10px;
            }
            .card {
                width: 100%;
            }
            .row {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <img src="img/student.png" alt="Student Avatar">
        <h3>Hello, Student!</h3> <!-- Display student's name -->
        <ul>
            <li>View Account</li>
            <li>Update Account</li>
            <li>Change Password</li>
            <a href="logout.php" style="color: white; text-decoration: none;"><li>Logout</li></a>
        </ul>
    </div>
    <div class="content">
        <div class="card">
            <h2>View Personal Information</h2>
            <div class="row">
                <div class="column">
                    <label>Username</label>
                    <input type="text" value="123456789012" readonly>
                </div>
                <div class="column">
                    <label>Full Name</label>
                    <input type="text" value="Anika Beatriz Marasigan" readonly>
                </div>
                <div class="column">
                    <label>Gender</label>
                    <input type="text" value="Female" readonly>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <label>Grade Level</label>
                    <input type="text" value="12" readonly>
                </div>
                <div class="column">
                    <label>Strand/Program</label>
                    <input type="text" value="TVL" readonly>
                </div>
                <div class="column">
                    <label>Section</label>
                    <input type="text" value="1" readonly>
                </div>
            </div>
        </div>
        <div class="card">
            <h2>View Grades</h2>
            <table>
                <tr>
                    <th>Subject</th>
                    <th>1st Quarter</th>
                    <th>2nd Quarter</th>
                    <th>3rd Quarter</th>
                    <th>4th Quarter</th>
                    <th>Final Grade</th>
                </tr>
                <tr>
                    <td>Math</td>
                    <td>85</td>
                    <td>88</td>
                    <td>90</td>
                    <td>87</td>
                    <td>88</td>
                </tr>
                <tr>
                    <td>Science</td>
                    <td>89</td>
                    <td>92</td>
                    <td>91</td>
                    <td>90</td>
                    <td>91</td>
                </tr>
                <tr>
                    <td>English</td>
                    <td>84</td>
                    <td>86</td>
                    <td>87</td>
                    <td>85</td>
                    <td>86</td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
