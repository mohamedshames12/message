<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Contact</title>
</head>
<body>

     <div class="wrapper">
        <header>Send us a message</header>
        <form action="send.php" method="post">
            <div class="dbl-field">
                <div class="field">
                    <input type="text" placeholder="Enter your name" name="name" value="">
                    <i class="fas fa-user"></i>
                </div>
                <div class="field">
                    <input type="email" placeholder="Enter your email" name="email" value="">
                    <i class="fas fa-envelope"></i>
                </div>
            </div>
            <div class="dbl-field">
                <div class="field">
                    <input type="number" placeholder="Enter your phone" name="phone" value="">
                    <i class="fas fa-phone-alt"></i>
                </div>
                <div class="field">
                    <input type="text" placeholder="Enter your website" name="subject" value="">
                    <i class="fas fa-globe"></i>
                </div>
            </div>
            <div class="message">
                <textarea placeholder="Write your message" name="message"></textarea>
                <i class="material-symbols-outlined">message</i>
            </div>
            <div class="button-area">
                <button type="submit" name="send">Send message</button>
                <span>Sending your message....</span>
            </div>
        </form>
     </div>
         <!-- sweetalert cdnjs link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</body>
</html>