
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
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
				Welcome {{session('name')}}
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
		Users
    </div>
    @if(Session::has('message'))
    <p class="alert text-center {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
    @endif
	<div class="panel-body">
      
        <table class="table">
            <thead>
              <tr>
                <th>Firstname</th>
                <th>Email</th>
                <th>Address</th>
                <th>User Type</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            @if(!empty($user_data))
            @foreach ($user_data as $users)
            <tr>
                <td>{{$users->name}}</td>
                <td>{{$users->email}}</td>
                <td>{{$users->address}}</td>
                <td>@if($users->user_type == 1) <span class="label label-primary">Admin</span> @else <span class="label label-primary">Normal User</span> @endif</td>
                <td>@if($users->status == 1) <span class="label label-success">Active</span> @else <span class="label label-danger">In Active</span> @endif </td>
               
                <td>
                    @if($users->status == 1)  <a href="deactivate/{{$users->id}}"><span class="label label-warning">Deactivate</span></a>
                     @else  <a href="activate/{{$users->id}}"><span class="label label-success">Activate</span></a>
                     @endif
                   </td>
              </tr>
            @endforeach
            @endif
             
            </tbody>
          </table>
          
	</div>
</div>
<span style="float:right">
    {{ $user_data->onEachSide(1)->links() }}
    </span>
  		</div>
  		<footer class="pull-left footer">
  			<p class="col-md-12">
  				<hr class="divider">
  				Copyright &COPY; 2015 <a href="http://www.pingpong-labs.com">Gravitano</a>
  			</p>
  		</footer>
  	</div>