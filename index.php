<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Contact</title>
</head>
<body>
    <main>
        <h1>Send Email</h1>
        <form action="server.php" class="contact" method="post">
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="mail" placeholder="Email">
            <input type="subject" placeholder="Subject" name="subject">
            <textarea name="message" placeholder="Message" ></textarea>
            <button type="submit" name="submit">Send</button>
        </form>
    </main>
</body>
</html>