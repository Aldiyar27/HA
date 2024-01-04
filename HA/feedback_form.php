<!-- feedback_form.php -->
<html>
<head>
    <title>Feedback Form</title>
</head>
<body>
    <h2>Feedback Form</h2>
    <form action="index.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="message">Message:</label>
        <textarea name="message" rows="4" required></textarea><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
