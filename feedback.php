<html>
<head>
    <title>Resume - Feedback</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <?php include("bodystyle.php") ?>
    <style>
        section {
            padding: 40px;
            background-color: #ecf0f1;
            margin: 30px auto;
            width: 60%;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            text-align: center;
            position: relative;
        }

        /* h2 styling */
        section h2 {
            font-size: 34px; 
            margin-bottom: 30px;
            color: #2c3e50;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
            font-weight: bold;
            letter-spacing: 1px; 
            border-bottom: 3px solid #2c3e50;
            padding-bottom: 10px;
            width: 80%;
            margin: 0 auto 30px;
        }

        /* Paragraph styling */
        section p {
            font-size: 18px; 
            color: #2c3e50; 
            margin-bottom: 20px; 
            text-align: center;
        }

        /* Form styling */
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            max-width: 600px;
            margin: 0 auto;
        }

        label {
            margin: 10px 0 5px;
            font-size: 18px;
            color: #2c3e50;
            display: block;
            width: 100%;
            text-align: left;
        }

        input, textarea, select {
            padding: 12px;
            margin: 8px 0 20px;
            font-size: 16px;
            width: 100%;
            max-width: 100%;
            border-radius: 8px;
            border: 1px solid #ccc;
            background-color: #ffffff;
            color: #2c3e50;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.05);
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        input:focus, textarea:focus, select:focus {
            border-color: #34495e;
            outline: none;
            box-shadow: 0 0 8px rgba(52, 73, 94, 0.5);
        }

        input:hover, textarea:hover, select:hover {
            border-color: #2c3e50;
        }

        textarea {
            resize: vertical;
            height: 140px;
        }

        button {
            padding: 12px 25px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 18px;
            cursor: pointer;
            margin-top: 20px;
            transition: background-color 0.3s, transform 0.2s;
        }

        button:hover {
            background-color: #2980b9;
        }

        /* font awesome icons */
        .form-group {
            position: relative;
            width: 100%;
        }

        .form-group i {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #34495e;
        }

        input, select {
            padding-left: 35px;
        }

        textarea {
            padding-left: 20px;
        }
    </style>
</head>
<body>
    <?php include("navbar.php"); ?>

    <!-- Feedback form section -->
    <section>
        <h2>Feedback Form</h2>
        <p>Please take a moment to fill out the feedback form below. Your insights are valuable to me!</p>
        <form id="feedback-form" method="POST" action="feedback-msg.php">
            <div class="form-group">
                <label for="name">Name:</label>
                <i class="fas fa-user"></i>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <i class="fas fa-envelope"></i>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="job-title">Job Title:</label>
                <i class="fas fa-briefcase"></i>
                <input type="text" id="job-title" name="job-title" required>
            </div>

            <div class="form-group">
                <label for="company">Company/Organization:</label>
                <i class="fas fa-building"></i>
                <input type="text" id="company" name="company" required>
            </div>

            <div class="form-group">
                <label for="ratings">Rating:</label>
                <i class="fas fa-star"></i>
                <select id="ratings" name="ratings" required>
                    <option value="" disabled selected>Select your rating</option>
                    <option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Good</option>
                    <option value="4">4 - Very Good</option>
                    <option value="5">5 - Excellent</option>
                </select>
            </div>

            <label for="comments">Comments:</label>
            <textarea id="comments" name="comments"></textarea>

            <button type="submit">Submit Feedback</button>
        </form>
    </section>

    <?php include("footer.php"); ?>

    <script>
        document.getElementById('feedback-form').addEventListener('submit', function(event) {
            const email = document.getElementById('email').value.trim();

            // Prevent form submission if email is not valid
            if (!validateEmail(email)) {
                event.preventDefault();
                return; // Exit the function early
            }
        });

        function validateEmail(email) {
            const emailRegex = /^[a-z0-9_.-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
            return emailRegex.test(email);
        }
    </script>
</body>
</html>
