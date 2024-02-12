<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');
        body {
            font-family: "Poppins", sans-serif;
            margin: 0;
            padding: 0;
            background-color:  #b8bcc8 ;
            background-size: cover;
        }

        header {
            background-color:  #4070f4;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        h1 {
            margin: 0;
            font-size: 32px;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #eee9e9;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        p {
            line-height: 1.6;
            margin-bottom: 20px;
        }

        footer {
            background-color: #4070f4;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .image-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .image-container img {
            max-width: 100%;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .highlight {
            color: #4070f4;
            font-weight: bold;
        }

        /* Navbar Styles */
        #navbar {
            text-align: center;
            margin-bottom: 20px;
        }

        #main-page-link {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            padding: 8px 16px;
            background-color: #4070f4;
            border-radius: 4px;
        }

        #main-page-link:hover {
            background-color: #4070f4;
        }

       /* Section Styles */
.section {
    margin-bottom: 40px;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    background-color: #c3bae6;
}

.section-title {
    font-size: 24px;
    font-weight: bold;
    color: #4070f4;
    margin-bottom: 16px;
}

.section-content {
    line-height: 1.6;
}

    </style>
</head>
<body>
    <header>
        <div id="navbar">
            <a href="index.php" id="main-page-link">Go to Main Page</a>
        </div>
        <h1>About Us</h1>
    </header>

    <div class="container">
        <div class="image-container">
            <img src="https://img.freepik.com/premium-vector/woman-therapy-group-counseling-abuse-female-psychological-aid-mental-health-community-psychotherapeutic-women-meeting-professional-psychoanalysis-session-coach-consultation-vector-flat-concept_176411-2459.jpg" alt="Team Photo">
        </div>

        <div class="section">
            <h2 class="section-title">Our Story</h2>
            <p class="section-content">We are a team of passionate students dedicated to animal welfare, particularly dogs and cats. Our final year project is aimed at providing guidance and support to pet owners, veterans, and animal enthusiasts.</p>
        </div>
        
        <div class="section">
            <h2 class="section-title">Our Mission</h2>
            <p class="section-content">Our mission is to promote animal welfare, combat animal cruelty, and offer assistance to those in need. We aim to create a positive impact in the lives of animals and humans alike.</p>
        </div>
        
        <div class="section">
            <h2 class="section-title">Our Services</h2>
            <ul class="section-content">
                <li><span class="highlight">Puzzle:</span> Play small game.</li>
                <li><span class="highlight">Virtual Keyboard:</span> Accessible tool for all users.</li>
                <li><span class="highlight">QR-Tag Collar:</span> Pet identification solution.</li>
                <li><span class="highlight"">Veteran Chatbot:</span> Support for pet owner.</li>
                <li><span class="highlight">Pet Care Guide:</span> Tips for responsible pet ownership.</li>
            </ul>
        </div>
        
        <div class="section">
            <h2 class="section-title">Our Values</h2>
            <p class="section-content">We believe in compassion, empathy, and advocacy for animals and humans alike. Our team is committed to making a difference in the world of animal welfare.</p>
        </div>
        
        <div class="section">
            <h2 class="section-title">Contact Us</h2>
            <p class="section-content">If you have any questions or would like to learn more about our organization, please feel free to contact us at <span class="highlight">animalwelfare91@gmail.com.com</span>.</p>
        </div>
    </div>

    <footer>
        &copy; 2024 Animal Welfare Project. All rights reserved.
    </footer>
</body>
</html>
