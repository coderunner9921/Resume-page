<!DOCTYPE html>
<html>
<head>
    <title>Resume - Projects</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- JS for Carousel -->
    <script>
        let currentSlide = 0;
        const images = ['p1.jpg', 'p2.jpg', 'p3.jpg'];

        function showSlide() {
            document.getElementById('projectImg').src = images[currentSlide];
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % images.length;
            showSlide();
        }

        function prevSlide() {
            currentSlide = (currentSlide - 1 + images.length) % images.length;
            showSlide();
        }
    </script>
    <?php include("bodystyle.php") ?>
    <style> 
        /* h2 styling */
        h2 {
            text-align: center;
            color: #2c3e50;
            font-size: 36px; 
            margin: 40px 0; 
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2); 
            font-weight: bold;
            letter-spacing: 1px;
            border-bottom: 2px solid #2c3e50;
            padding-bottom: 10px;
        }

        /* Carousel container */
        .carousel-container {
            width: 60%;
            margin: 40px auto;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
            background-color: #ecf0f1;
            border-radius: 10px;
            padding: 20px;
            overflow: hidden;
        }

        /* Carousel images */
        .carousel-item img {
            object-fit: cover;
            height: 60vh;
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        /* Text below each project */
        .carousel-item p {
            text-align: center;
            font-size: 16px;
            margin-top: 15px;
            color: #555;
            line-height: 1.5;
        }

        /* Button styling */
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: #2c3e50;
            border-radius: 50%;
        }
    </style>
</head>

<body>
    <?php include("navbar.php"); ?>
    
    <div class="carousel-container">
        <h2>Projects Completed</h2>
        
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <a href="http://localhost:8080/MyProjects/news.php" target="_blank">
                        <img src="p1.jpg" alt="Project1">
                    </a>
                    <p>Built an interactive news article webpage with jQuery and Bootstrap, featuring a clean, responsive layout where clicking on a news block smoothly toggles the visibility of detailed content.</p>
                </div>

                <div class="carousel-item">
                    <a href="http://localhost:8080/MyProjects/prac8aug.html" target="_blank">
                        <img src="p2.jpg" alt="Project2">
                    </a>
                    <p>Developed a movie database web app that uses AJAX to fetch movie details from an XML file, displays a list of movies, and enables users to search, filter, and view specific movie information.</p>
                </div>

                <div class="carousel-item">
                    <a href="http://localhost:8080/MyProjects/cgpa.php" target="_blank">
                        <img src="p3.jpg" alt="Project3">
                    </a>
                    <p>Developed a CGPA calculator using HTML for input forms, CSS for styling, and JavaScript to calculate and display the CGPA based on marks entered for five subjects.</p>
                </div>

                <div class="carousel-item">
                    <a href="http://localhost:8080/MyProjects/camera.php" target="_blank">
                        <img src="p4.jpg" alt="Project4">
                    </a>
                    <p>Developed a product landing page featuring a captivating hero section, detailed feature highlights, and a persuasive call-to-action purchase section, with CSS handling the styling and layout.</p>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
         
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <?php include("footer.php"); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
