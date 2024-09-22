<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume - About Me</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php include("bodystyle.php") ?>
    <style>
        main {
            flex: 1;
        }

        /* Headings styling */
        h2 {
            font-size: 28px;
            margin-bottom: 20px; 
            color: #2c3e50; 
            text-align: center; 
            font-weight: bold;
            border-bottom: 2px solid #2c3e50; 
            padding-bottom: 10px;
            letter-spacing: 1px; 
        }

        /* Accordion button styling */
        .accordion-button {
            font-size: 20px;
            background-color: #2c3e50;
            color: white;
            border: none;
            outline: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .accordion-button:hover {
            background-color: lightsteelblue;
            color: #333;
        }

        .accordion-button:focus {
            box-shadow: none;
        }

        /* Accordion content styling */
        .accordion-body {
            font-size: 18px;
            background-color: #ecf0f1;
            padding: 20px;
            border: 1px solid #ddd;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }

        .accordion-body:hover {
            background-color: lightsteelblue;
            color: #333;
        }

        .accordion-body img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .accordion-body p {
            margin-top: 10px;
            line-height: 1.6;
        }

        /* Accordion item styling */
        .accordion-item {
            margin-bottom: 10px;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Table styling */
        table {
            margin: 20px auto;
            width: 90%;
            border-collapse: collapse;
        }

        th, td {
            border: 2px solid black;
            padding: 10px;
            font-size: 18px;
            text-align: center;
        }

        th {
            background-color: #2c3e50;
            color: white;
        }
    </style>
</head>

<body>
    <?php include("navbar.php"); ?>

    <main>
        <section class="container mt-4">
            <h2>Hobbies</h2>
            <!-- Hobbies container -->
            <div class="accordion" id="accordionHobbies">
                <!-- Gaming -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingGaming">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseGaming">
                            Gaming
                        </button>
                    </h2>
                    <div id="collapseGaming" class="accordion-collapse collapse" data-bs-parent="#accordionHobbies">
                        <div class="accordion-body d-flex align-items-center">
                            <img src="gaming.jpg" alt="Gaming" style="width: 150px; height: auto; margin-right: 15px;">
                            <p>Gaming helps me relax and enjoy immersive experiences. I enjoy various genres, particularly single player action games.</p>
                        </div>
                    </div>
                </div>
                <!-- Playing Football -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFootball">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFootball">
                            Playing Football
                        </button>
                    </h2>
                    <div id="collapseFootball" class="accordion-collapse collapse" data-bs-parent="#accordionHobbies">
                        <div class="accordion-body d-flex align-items-center">
                            <img src="football.jpg" alt="Playing Football" style="width: 150px; height: auto; margin-right: 15px;">
                            <p>Playing football is a great way to stay active and have fun with friends. It also helps in building teamwork and fitness.</p>
                        </div>
                    </div>
                </div>
                <!-- Watching Movies -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingMovies">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMovies">
                            Watching Movies
                        </button>
                    </h2>
                    <div id="collapseMovies" class="accordion-collapse collapse" data-bs-parent="#accordionHobbies">
                        <div class="accordion-body d-flex align-items-center">
                            <img src="movies.jpg" alt="Watching Movies" style="width: 150px; height: auto; margin-right: 15px;">
                            <p>Watching movies allows me to enjoy various genres and directors, expanding my cultural knowledge and appreciation for cinema.</p>
                        </div>
                    </div>
                </div>
                <!-- Hiking -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingHiking">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHiking">
                            Hiking
                        </button>
                    </h2>
                    <div id="collapseHiking" class="accordion-collapse collapse" data-bs-parent="#accordionHobbies">
                        <div class="accordion-body d-flex align-items-center">
                            <img src="hiking.jpg" alt="Hiking" style="width: 150px; height: auto; margin-right: 15px;">
                            <p>Hiking helps me connect with nature and enjoy the outdoors. It is a great way to unwind and stay physically active.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br>
        
        <!-- Education section container -->
        <section class="container mt-4">
            <h2>Education Completed</h2>
            <table>
                <tr>
                    <th>Institution</th>
                    <th>CGPA/Percentage</th>
                    <th>Qualification</th>
                </tr>
                <tr>
                    <td>OLN High School</td>
                    <td>87%</td>
                    <td>SSC</td>
                </tr>
                <tr>
                    <td>St. Andrews Junior College</td>
                    <td>91%</td>
                    <td>HSC</td>
                </tr>
                <tr>
                    <td>St. Xaviers College</td>
                    <td>9.1 CGPA</td>
                    <td>B.Sc. in IT</td>
                </tr>
                <tr>
                    <td>St. Xaviers College</td>
                    <td>8.7 CGPA</td>
                    <td>M.Sc. in Big Data Analytics</td>
                </tr>
            </table>
        </section>
    </main>

    <?php include("footer.php"); ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
