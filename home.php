<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Resume - Home</title>
    <?php include("bodystyle.php") ?>
    <style>
        /* Container for side bar and main content */
        .container {
            display: flex;
            height: 540px;
            width: 90%;
            margin: 20px auto;
        }

        /* Sidebar styling */
        aside {
            background-color: #ecf0f1;
            padding: 40px;
            width: 100%;
            box-shadow: 0 4px 8px #aaaaaa;
            border-radius: 10px;
            text-align: center;
        }

        aside img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin-bottom: 15px;
            border: 4px solid #2c3e50;
            transition: transform 0.3s;
        }

        aside img:hover {
            transform: scale(1.1);
            box-shadow: 0 0 8px black;
        }

        aside p {
            font-size: 20px;
            line-height: 1.6;
            margin: 10px 0;
            text-align: left;
        }

        aside p i {
            margin-right: 10px;
        }

        /* Main content area styling */
        main {
            flex-grow: 1;
            margin-left: 20px;
            padding: 20px;
            background-color: #ecf0f1;
            box-shadow: 0 4px 8px #aaaaaa;
            border-radius: 8px;
        }

        main section {
            margin-bottom: 30px;
        }

        main h2 {
            font-size: 26px;
            color: #2c3e50;
            padding-bottom: 10px;
            text-align: center;
            font-weight: bold; 
            border-bottom: 2px solid #e0e0e0; 
            margin-bottom: 20px; 
        }

        main p {
            font-size: 18px;
            line-height: 1.6;
            text-align: center;
            color: #555555;
        }
    </style>
</head>

<body>
    <?php include("navbar.php"); ?>

    <!-- Layout container -->
    <div class="container">
        <!-- Sidebar with personal details -->
        <aside>
            <img src="det.jpg" alt="MyPhoto">
            <p><i class="fa-solid fa-user"></i> <strong>Name:</strong> Alan Cardoza</p>
            <p><i class="fa-solid fa-envelope"></i> <strong>Email:</strong> alancardoza10@gmail.com</p>
            <p><i class="fa-solid fa-cake-candles"></i> <strong>Date of Birth:</strong> 10-12-2005</p>
            <p><i class="fa-solid fa-calendar-days"></i> <strong>Age:</strong> 19 years</p>
            <p><i class="fa-solid fa-phone"></i> <strong>Mobile:</strong> 9979482780</p>
        </aside>

        <!-- Main content area to the right -->
        <main>
            <section>
                <h2>Welcome to My Resume</h2>
                <p>
                I am an enthusiastic web developer focused on building dynamic, user-friendly applications. With expertise in both front-end and back-end development, I create responsive web solutions using technologies like HTML, CSS, JavaScript, and various frameworks. I take pride in delivering high-quality websites that meet and exceed user expectations.
                </p>
                <p>
                My commitment to continuous learning drives me to stay updated with the latest trends and best practices in web development. I aim to write clean and efficient code while crafting innovative solutions that enhance user experiences and address real-world challenges.
                </p>
                <p>
                Whether working independently or as part of an agile team, I’m dedicated to contributing to impactful projects in the digital landscape. I look forward to collaborating with forward-thinking teams to develop engaging, high-performance web applications.
                </p>
            </section>
        </main>
    </div>
    <?php include("footer.php"); ?>
</body>
</html>