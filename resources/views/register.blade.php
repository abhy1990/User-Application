<html >
<head>
  <meta charset=utf-8 />
 
  <title>User Registration</title>
  <base target="_self"> 

  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />  
  

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

  <style>/* CSS used here will be applied after bootstrap.css */</style>
</head>
<body >
  <div class="container">
    <h1>Registration</h1>
  	<hr>
	<div class="row">
      <!-- left column -->
   
      
      <!-- edit form column -->
      <div>
        
          @if(Session::has('message'))
    <p class="alert text-center {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
    @endif
      
       
        
        {{ Form::open(array('url' => 'registration', 'autocomplete'=>'off')) }}
          <div class="form-group">
            <label class="col-lg-3 control-label">Name:</label>
            <div class="col-lg-8">
              <input required class="form-control" name="name" type="text" value="">
            </div>
          </div>
          <br>
          <br>
          <br>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input required  class="form-control" type="email" name="email" value="">
            </div>
          </div>
          <br>
          <br>
          <br>
          <div class="form-group">
            <label class="col-lg-3 control-label">Password:</label>
            <div class="col-lg-8">
              <input required  class="form-control" type="password" name="password" value="">
            </div>
          </div>
          <br>
          <br>
          <br>
          <div class="form-group">
            <label class="col-lg-3 control-label">Confirm Password:</label>
            <div class="col-lg-8">
              <input required class="form-control" type="password" name="c_password" value="">
            </div>
          </div>
          <br>
          <br>
          <br>
          <div class="form-group">
            <label class="col-lg-3 control-label">Address:</label>
            <div class="col-lg-8">
              <textarea required class="form-control"  name="address" ></textarea>
            </div>
          </div>
          <br>
          <br>
          <br>
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