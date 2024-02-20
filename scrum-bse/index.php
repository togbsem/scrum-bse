<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bakery Boys</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">Over Ons</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="search.php">Zoeken</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <h1>Homepage</h1>
        
        <!-- Voeg het contactformulier hier toe -->
        <form id="contactForm">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Question:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            <button type="submit">Submit</button>
        </form>
        
        <!-- Voeg de lijst met bakkerijen hier toe -->
        <h1>Available Bakeries</h1>
        <ul id="bakeriesList">
            <!-- Bakery items zullen dynamisch worden toegevoegd met JavaScript -->
        </ul>

    </main>

</body>
</html>