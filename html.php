<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .container {
      max-width: 400px;
      padding: 20px;
      background-color: #ffffff;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      text-align: center;
    }
    .form-group {
      margin-bottom: 15px;
    }
    .green-button {
      background-color: #4caf50;
      color: #ffffff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
    }
    .green-button:hover {
      background-color: #45a049;
    }
    #message {
      margin-top: 10px;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Username Verification</h2>
    <p><b>Please enter your username and click 'Submit'</b></p>
    <form id="userForm">
      <div class="form-group">
        <label for="usernameInput">Username:</label>
        <input type="text" id="usernameInput" name="username" class="form-control" placeholder="Enter username">
      </div>
      <button type="submit" class="green-button">Submit</button>
    </form>
    <div id="message"></div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="verify_ajax.js"></script>
</body>
</html>
