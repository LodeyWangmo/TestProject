<!DOCTYPE html>
<html>
<head>
  <title>Register form</title>
  @include('common.css')
    <body>
</head>
<body>
    <section class="contact_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 col-lg-4 offset-md-1 offset-lg-2">
          <div class="form_container">
            <div class="heading_container">
              <h2>
                Registration Form
              </h2>
            </div>
            <form action="register_new_user" method="POST">
            @csrf
          
              <div>
                <label for="fullname"><b>FullName</b></label>
                <input type="text" id="full_name "name="full_name" required>
              </div>
              <div>
                <label for="contact_no">ContactNO</label>
                <input type="text" id="contact_no" name="contact_no" required>
              </div>
              <div>
                <label for="username"><b>username(email):</b></label>
                <input type="text" id="email"name="email" required>
              </div>
              <div>
                <label for="password"><b>Password:</b></label>
                <input type="password" id="password"name="password" required>
              </div>

          <div class="dropdown">
              <label for="role">Select Role:</label>
              <select name="role_id" id="role_id" class="form-control">
                <option value="">Select a role</option>
                @foreach ($response_data as $id => $data)
                  <option value="{{$data->id}}">
                    {{$data->name}}</option>
                @endforeach
              </select>
          </div>


              <div class="d-flex ">
                <button>
                  SEND
                </button>
              </div>
          
  </form>
  
</body>
</html>
