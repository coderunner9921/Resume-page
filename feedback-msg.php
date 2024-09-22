<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Feedback";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $job_title = $_POST['job-title'];
    $company = $_POST['company'];
    $ratings = $_POST['ratings'];
    $comments = $_POST['comments'];

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO user_feedback (name, email, job_title, company, ratings, comments) VALUES (?,?,?,?,?,?)");

    // Bind parameters to the statement
    $stmt->bind_param("ssssss", $name, $email, $job_title, $company, $ratings, $comments);

    // Execute the statement and check if successful
    if ($stmt->execute()) {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Feedback Submission</title>
            <?php include("bodystyle.php"); ?>
            <style>
                body {
                    display: flex;
                    flex-direction: column;
                    min-height: 100vh;
                    margin: 0;
                }

                .content {
                    flex: 1;
                    padding: 20px;
                }

                .container {
                    background-color: #2c3e50;
                    color: #ffffff;
                    padding: 50px;
                    box-shadow: 0 4px 12px black;
                    border-radius: 10px;
                    max-width: 800px;
                    margin: 0 auto;
                }

                h2 {
                    margin-bottom: 20px;
                }

                p {
                    font-size: 18px;
                    margin: 10px 0;
                }

                .home-button {
                    padding: 10px 20px;
                    background-color: #e74c3c;
                    color: white;
                    border: none;
                    border-radius: 5px;
                    cursor: pointer;
                    text-align: center;
                    display: block;
                    margin: 20px auto 0;
                    text-decoration: none;
                    font-size: 18px;
                }

                .home-button:hover {
                    background-color: #c0392b;
                }

                footer {
                    background-color: #333;
                    color: white;
                    text-align: center;
                    padding: 10px 0;
                    width: 100%;
                    position: relative;
                    bottom: 0;
                }
            </style>
        </head>
        <body>
            <?php include("navbar.php"); ?>
            <br>
            <div class="content">
                <div class="container">
                    <h2>Thank You for Your Feedback, <?php echo $name; ?>!</h2>
                    <p>I appreciate your time and effort in providing us with valuable feedback.</p>
                    <p>Here's a summary of what you submitted:</p>
                    <p><strong>Email:</strong> <?php echo $email; ?></p>
                    <p><strong>Job Title:</strong> <?php echo $job_title; ?></p>
                    <p><strong>Company:</strong> <?php echo $company; ?></p>
                    <p><strong>Rating:</strong> <?php echo $ratings; ?></p>
                    <p><strong>Comments:</strong> <?php echo $comments; ?></p>
                    <br><br>
                    <!-- Home button -->
                    <a href="home.php" class="home-button">Go to Homepage</a>
                </div>
            </div>
            <?php include("footer.php"); ?>
        </body>
        </html>
        <?php
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
