<html >
<head>

  <title></title>
  <base target="_self"> 

  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />  
  

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

  <style>/* CSS used here will be applied after bootstrap.css */</style>
</head>
<body >
  <div class="container">
    <h1>Edit Profile</h1>
  	<hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
            @if($user_data[0]->image !="" )
            
                <img src="<?php echo url('/').'/uploads/profile/'. $user_data[0]->image ?>" class="avatar img-circle" style=" height: 150px; width: 150px; " alt="avatar">
            @else
                <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
            @endif
         
         
        </div>
        <br>
        <br>
        <br>
        <a href="{{ url('logout')}}">Logout</a>
      </div>
      
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
       
        <h3>Personal info</h3>
        
        {{ Form::open(array('url' => 'user/edit_user', 'autocomplete'=>'off', 'files' => true )) }}
          <div class="form-group">
            <label class="col-lg-3 control-label">Name:</label>
            <div class="col-lg-8">
              <input required class="form-control" name="name" type="text" value="{{$user_data[0]->name}}">
            </div>
          </div>
          <br>
          <br>
          <br>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input required  class="form-control" disabled type="email" name="email" value="{{$user_data[0]->email}}">
            </div>
          </div>
          <br>
          <br>
          <br>
          <div class="form-group">
            <label class="col-lg-3 control-label">Password:</label>
            <div class="col-lg-8">
              <input   class="form-control" type="password" name="password" value="" placeholder="******">
            </div>
          </div>
          <br>
          <br>
          <br>
          <div class="form-group">
            <label class="col-lg-3 control-label">Confirm Password:</label>
            <div class="col-lg-8">
              <input  class="form-control" type="password" name="c_password" value="" placeholder="******">
            </div>
          </div>
          <br>
          <br>
          <br>
          <div class="form-group">
            <label class="col-lg-3 control-label">Address:</label>
            <div class="col-lg-8">
              <textarea required class="form-control"  name="address" >{{$user_data[0]->address}}</textarea>
            </div>
          </div>
          <br>
          <br>
          <br>
          <div class="form-group">
            <label class="col-lg-3 control-label">Profile Pictire:</label>
            <div class="col-lg-8">
                <input type="file" name="profile_image" class="form-control">
            </div>
          </div>
          <br>
          <br>
          <br>
          <input type="hidden" name="id" value="{{$user_data[0]->id}}">
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
          {{ Form::close() }}
      </div>
  </div>
</div>
<hr>

  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  
</body>
</html>