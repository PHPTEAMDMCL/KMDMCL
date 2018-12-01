doctype html
html(lang='en')
    head
        meta(charset='utf-8')
        title LOGIN ADMIN
        meta(name='description', content='Bootstrap Metro Dashboard')
        meta(name='author', content='Dennis Ji')
        meta(name='keyword', content='Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina')
        meta(name='viewport', content='width=device-width, initial-scale=1')
        link#bootstrap-style(href=asset('/admin/css/bootstrap.min.css'), rel='stylesheet')
        link(href=asset('/admin/css/bootstrap-responsive.min.css' ) , rel='stylesheet')
        link#base-style(href=asset('/admin/css/style.css' ) , rel='stylesheet')
        link#base-style-responsive(href=asset('/admin/css/style-responsive.css' ) , rel='stylesheet')
        
        style(type='text/css').
            body { background: url(/img/admin/img/bg-login.jpg) !important; }
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
                form.form-horizontal(action='/postlogin', method='post')
                  fieldset
                    .input-prepend(title='Username')
                      span.add-on
                        i.halflings-icon.user
                      input#username.input-large.span10(name='username', type='text', autocomplete="off", placeholder='Username')
                    .clearfix
                    .input-prepend(title='Password')
                      span.add-on
                        i.halflings-icon.lock
                      input#password.input-large.span10(name='password', type='password',autocomplete="off",placeholder='Password')
                      input(type='hidden' value!=csrf_token() name='_token')
                    .clearfix
                    .button-login
                      button.btn.btn-primary(type='submit') Login
                    .clearfix
        