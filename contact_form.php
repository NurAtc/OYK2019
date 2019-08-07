<html lang="en">
<head>
  <title>Contact form</title>
</head>
<body>

<form method="post" action="send_message.php" id="contactForm">
  Name: <br /> <input id="name" name="name" type="text" /><br />
  Email: <br /> <input id="email" name="email" type="text" /><br />
  Subject: <br /> <input id="subject" name="subject" type="text" /><br />
  Message: <br /> <input id="message" name="message" type="text" /><br />
  <textarea cols="50" rows="5" id="message" name="message"></textarea><br />
  <input id="btn_send" type="submit" value="send message" />
</form>

<script src="https://code.jquery.com/jquery-3.3.1.min.js">
  $(function(){

    var form = $("#contactForm");
  });
</script>

</body>
</html>
