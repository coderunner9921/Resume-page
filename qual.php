<!DOCTYPE html>
<html>
<head>
    <title>Resume - Achievements</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <?php include("bodystyle.php") ?>
    <style>
        /* Section styling */
        section {
            padding: 40px;
            background-color: #ecf0f1;
            margin: 20px auto;
            width: 85%;
            box-shadow: 0 4px 12px black;
            border-radius: 10px;
        }

        section h2 {
            font-size: 26px;
            border-bottom: 3px solid darkslategray;
            display: inline-block;
            margin-bottom: 20px;
            color: #333;
        }

        /* Card layout */
        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px black;
            width: 300px;
            margin: 20px;
            padding: 20px;
            text-align: center;
            transition: 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card h3 {
            font-size: 20px;
            margin-bottom: 15px;
        }

        .card p {
            font-size: 16px;
            color: #555;
            margin-bottom: 15px;
        }

        /* Remove color on links */
        .card a {
            color: black;
            text-decoration: none;
        }

        .card a:hover {
            color: black;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <?php include("navbar.php"); ?>

    <!-- Achievements section -->
    <section>
        <h2>Achievements</h2>
        <div class="card-container">
            <div class="card">
                <div>
                    <a href="bigdata.png" target="_blank">
                        <h3>Published Research</h3>
                        <p>Published research paper on Big Data Analytics in an International Journal</p>
                    </a>
                </div>
            </div>

            <div class="card">
                <div>
                    <a href="cfsd.jpg" target="_blank">
                        <h3>Web Development Bootcamp</h3>
                        <p>Completed a Full Stack Web Development Bootcamp with Distinction</p>
                    </a>
                </div>
            </div>

            <div class="card">
                <div>
                    <a href="win.jpg" target="_blank">
                        <h3>Best Project Award</h3>
                        <p>Received the Best Project Award for a Web Application in University</p>
                    </a>
                </div>
            </div>
        </div> <!-- Container closes -->
    </section>

    <!-- Qualifications section -->
    <section>
        <h2>Qualifications</h2>
        <div class="card-container">
            <div class="card">
                <div>
                    <a href="bscit.jpg" target="_blank">
                        <h3>B.Sc. in IT</h3>
                        <p>Completed in 2026</p>
                    </a>
                </div>
            </div>

            <div class="card">
                <div>
                    <a href="mscit.jpg" target="_blank">
                        <h3>M.Sc. in Big Data Analytics</h3>
                        <p>Acquired in 2028</p>
                    </a>
                </div>
            </div>
          
            <div class="card">
                <div>
                    <a href="projectcertificate.jpg" target="_blank">
                        <h3>Project Management</h3>
                        <p>Obtained in 2029</p>
                    </a>
                </div>
            </div>
        </div> <!-- Container closes -->
    </section>
    
    <?php include("footer.php"); ?>
</body>
</html>
