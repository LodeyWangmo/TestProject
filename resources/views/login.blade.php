<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <style>
    .container {
      width: 300px;
      padding: 16px;
      background-color: #f2f2f2;
      margin: 0 auto;
      margin-top: 100px;
      border: 1px solid #ccc;
    }
    input[type=text], input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }
    button {
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    }
    button:hover {
      opacity: 0.8;
    }
  </style>
</head>
<body>
  <div class="container">
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit">Login</button>
  </div>
</body>
</html>
