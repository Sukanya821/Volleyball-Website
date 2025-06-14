<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volleyball Nations League 2024</title>
    
    <!-- Link to Google Fonts for Quicksand -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600&display=swap" rel="stylesheet">
    
    <!-- External CSS file -->
    <link rel="stylesheet" href="styles.css">
    
    <style>
        /* Sapphire Blue Theme */
        body {
            font-family: 'Quicksand', sans-serif;
            background-color: #f0f4f8;
            color: #00274d;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #00274d;
            color: white;
            padding: 20px;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin: 0 15px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        nav ul li a:hover {
            color: #00adee; /* Lighter Sapphire Blue */
        }

        .section {
            padding: 40px 20px;
            text-align: center;
        }

        h2 {
            color: #00274d;
        }

        table {
            width: 100%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #00274d;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        /* Team Images */
        .team-member img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin: 10px;
        }

        .team-member {
            display: inline-block;
            margin: 20px;
        }

        /* Animation for section transitions */
        .fade-in {
            animation: fadeIn 1.5s ease-in;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        /* Video Section */
        .video-section {
            background-color: #00274d;
            color: white;
            padding: 20px;
        }

        .video-section h2 {
            color: #00adee;
        }

        .video-section iframe {
            width: 560px;
            height: 315px;
            margin: 20px auto;
            display: block;
            border: 5px solid #00adee;
        }
    </style>
</head>
<body>

    <header>
        <h1>Volleyball Women's Nations League 2024</h1>
        <nav>
            <ul>
                <li><a href="#" onclick="showSection('home')">Home</a></li>
                <li><a href="#" onclick="showSection('schedule')">Match Schedule</a></li>
                <li><a href="#" onclick="showSection('team')">Thailand Team</a></li>
                <li><a href="#" onclick="showSection('videos Highlights')">Videos Highlights</a></li>
                <li><a href="#" onclick="showSection('contact')">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Section for Home -->
    <section id="home" class="section">
        <h2>About Volleyball Women's Nations League 2024</h2>
        <p>Get ready for the excitement and intensity of the Volleyball Nations League 2024! </p>
        <img src="image/รูปปก.avif" alt="Volleyball Nations League 2024" width="700" height="400" style="display: block; margin: auto;">
        <p>The 2024 FIVB Women's Volleyball Nations League was the sixth edition of the FIVB Women's Volleyball Nations League. The final round took place at Indoor Stadium Huamark, Bangkok, Thailand.</p>
    </section>

    <!-- Section for Match Schedule -->
    <section id="schedule" class="section" style="display:none;">
        <h2>Upcoming Matches</h2>
        <table>
            <tr><th>Date</th><th>Teams</th><th>Location</th></tr>
            <tr><td>Sept 25, 2024</td><td>China vs Brazil</td><td>Bangkok Stadium</td></tr>
            <tr><td>Oct 1, 2024</td><td>Thailand vs Japan</td><td>Chiang Mai Arena</td></tr>
            <tr><td>Oct 10, 2024</td><td>Dominican vs Korea</td><td>Phuket Sports Complex</td></tr>
        </table>
    </section>

    <!-- Section for Thailand Team -->
    <section id="team" class="section" style="display:none;">
        <h2>Meet Thailand Team</h2>
        <div class="team-member"><img src="image/ทัตดาว.jpg" alt="Player 1"><h3>Thatdao Nuekjang</h3><p>Position: Setter</p></div>
        <div class="team-member"><img src="image/วิภาวี.jpg" alt="Player 2"><h3>Wipawee Srithong</h3><p>Position: Opposite</p></div>
        <div class="team-member"><img src="image/หัททยา.jpg" alt="Player 3"><h3>Hatthaya BamrungSuk</h3><p>Position: Libero</p></div>
        <img src="image/ทีมไทย.jpg" alt="Thailand Team" width="700" height="400" style="display: block; margin: auto;">
        <p>Thailand's national volleyball team is made up of some of the best players in the world.</p>
    </section>

    <!-- Section for Videos -->
    <section id="videos Highlights" class="section video-section" style="display:none;">
        <h2>Match Highlights</h2>
        <iframe src="https://www.youtube.com/embed/TXXJAmwsLQg" allowfullscreen></iframe>
        <iframe src="https://www.youtube.com/embed/cLOb_GS_nJ0" allowfullscreen></iframe>
    </section>
    


    <!-- Section for Contact Us -->
    <section id="contact" class="section" style="display:none;">
        <h2>Contact Us</h2>
        <form id="contactForm">
            <label for="name">Name:</label><input type="text" id="name" name="name" required><br><br>
            <label for="email">Email:</label><input type="email" id="email" name="email" required><br><br>
            <label for="message">Message:</label><textarea id="message" name="message" rows="4" required></textarea><br><br>
            <input type="submit" value="Submit">
        </form>
    </section>

    <footer>
        <p>© 2024 Volleyball Nations League. All rights reserved.</p>
    </footer>

    <script>
        function showSection(sectionId) {
            const sections = document.querySelectorAll('.section');
            sections.forEach(section => {
                section.style.display = 'none';
            });
            const sectionToShow = document.getElementById(sectionId);
            sectionToShow.style.display = 'block';
            sectionToShow.classList.add('fade-in');
        }
    </script>
   <hr>
     <button class="btn btn-primary btn-lg btn-block" type="submit"><a href="sutitar-03.php">เรียนรู้การสร้างตารางข้อมูล</a></button>
   <hr>
</body>
</html>
