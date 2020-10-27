<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Form for request</title>
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  <div class="contain">

    <div class="wrapper">
      <div class="contacts">
        <h3>My contacts</h3>

        <ul>
          <li>Abay Reushenov</li>
          <li>Moscow, Russia</li>
          <li>webdevelop301020@gmail.com</li>
        </ul>
      </div>

      <div class="form">
        <h3>Send me a message</h3>
        <form onsubmit="sendForm(this); return false;">
          <p>
            <label for="">Your name</label>
            <input type="text" name="name" placeholder="Your name" required>
          </p>
          <p>
            <label for="">Your surname</label>
            <input type="text" name="surname" placeholder="Your surname" required>
          </p>
          <p>
            <label for="">Phone number</label>
            <input type="tel" name="phone" placeholder="+7____________" required>
          </p>
          <p>
            <label for="">Email Address</label>
            <input type="email" name="email" id="email_address" placeholder="Email Address" required>
          </p>
          <p>
            <label for="">Topic</label>
            <input type="text" name="topic" placeholder="Topic" required>
          </p>
          <p class="full-width">
            <label for="">Write your message</label>
            <textarea name="msg" id="msg" cols="30" rows="7" placeholder="Write your message" required></textarea>
          </p>
          <p class="full-width">
            <button type="submit" class="myButton">Send</button>
          </p>
        </form>
      </div>
    </div>
  </div>
  <script src="./js/script.js"></script>
</body>

</html>