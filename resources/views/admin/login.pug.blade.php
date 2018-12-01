doctype html
html(lang='en')
  	head
	    meta(charset='utf-8')
	    title {{$title}}
	    meta(name='description', content='Bootstrap Metro Dashboard')
	    meta(name='author', content='Dennis Ji')
	    meta(name='keyword', content='Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina')
	    meta(name='viewport', content='width=device-width, initial-scale=1')
	    link#bootstrap-style(href='/admin/css/bootstrap.min.css', rel='stylesheet')
	    link(href='/admin/css/bootstrap-responsive.min.css', rel='stylesheet')
	    link#base-style(href='/admin/css/style.css', rel='stylesheet')
	    link#base-style-responsive(href='css/style-responsive.css', rel='stylesheet')
	    
	    meta(name="csrf-token" content=csrf_token())
	    style(type='text/css').
    		body { background: url(/admin/img/bg-login.jpg) !important; }
  	body
	    .container-fluid-full
	      .row-fluid
	        .row-fluid
	          @if(session('success'))
			  .alert.alert-info.center
				 {{session('success')}}
			  @endif
			  @if($errors->has('username') && $errors->has('password'))
			  .alert.alert-info.center
				 {{$errors->first("username")}}
				 {{$errors->first("password")}}
			  @endif
	          .login-box
	            
	            h2 Login to your account
	            
	            {!!Form::open(['method'=>'post','url'=>'/postlogin'])!!}	
	            fieldset
	                .input-prepend(title='Username')
	                  span.add-on
	                    i.halflings-icon.user
	                  
	                  	{!!Form::text("username",null,[])}
	                .clearfix
	                .input-prepend(title='Password')
	                  span.add-on
	                    i.halflings-icon.lock
	                  {!!Form::text("password",null,[])}
	                .clearfix
	                .button-login
	                  button.btn.btn-primary(type='submit') Login
	                .clearfix
		