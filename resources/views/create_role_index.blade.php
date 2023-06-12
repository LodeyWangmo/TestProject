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
    h2{
      text-align: center;
    }
    p{
      text-align: center;
    }
  </style>
</head>
<body>
  <h2>Role management</h2>
  
  <div class="container">
 
    <form action="create_role" method="post">
      @csrf
    <label for="FName"><b>Role Name:</b></label>
    <input type="text" id="role_name" name="role_name">

    <label for="status"><b>status:</b></label><br><br>
    <input type="radio" value="Active" id="status1" name="status">
    <label for="status"><b>Active</b></label><br><br>
    <input type="radio" value="Inactive" id="status2" name="status">
    <label for="status"><b>Inactive</b></label>
    <button type="submit">submit</button>
  </div>
  </form>
</body>
</html>
