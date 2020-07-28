<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="{{URL::to('assets/admin/custom.js')}}"></script>
<link rel="stylesheet" href="{{URL::to('assets/admin/style.css')}}">
<!------ Include the above in your HEAD tag ---------->

<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle navbar-toggle-sidebar collapsed">
			MENU
			</button>
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">
				<a class="navbar-brand" href="#">
                    Welcome {{session('name')}}
                </a>
			</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      
		
			
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>  	<div class="container-fluid main-container">
  		<div class="col-md-2 sidebar">
  			<div class="row">
	<!-- uncomment code for absolute positioning tweek see top comment in css -->
	<div class="absolute-wrapper"> </div>
	<!-- Menu -->
	<div class="side-menu">
		<nav class="navbar navbar-default" role="navigation">
			<!-- Main Menu -->
			<div class="side-menu-container">
				<ul class="nav navbar-nav">
					<li class="active"><a href="dashboard"><span class="glyphicon glyphicon-dashboard"></span> Personal Info</a></li>
					<li><a href="all_users"><span class="glyphicon glyphicon-plane"></span> All Users</a></li>
					<li> <a href="{{ url('logout')}}"><span class="glyphicon glyphicon-cloud"></span>Logout</a></li>


				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>

	</div>
</div>  		</div>
  		<div class="col-md-10 content">
  			  <div class="panel panel-default">
	<div class="panel-heading">
		Personal Info
	</div>
	<div class="panel-body">
        @if(Session::has('message'))
        <p class="alert text-center {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif
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
            
              <br>
              <br>
              <br>
              <input type="hidden" name="id" value="{{$user_data[0]->id}}">
              <div class="form-group">
                <label class="col-md-3 control-label"></label>
                <div class="col-md-8">
                  <input type="submit" class="btn btn-primary" value="Save Changes">
                  <span></span>
                 
                </div>
              </div>
              {{ Form::close() }}
          </div>
	</div>
</div>
  		</div>
  		<footer class="pull-left footer">
  			<p class="col-md-12">
  				<hr class="divider">
  				Copyright &COPY; 2015 <a href="http://www.pingpong-labs.com">Gravitano</a>
  			</p>
  		</footer>
  	</div>