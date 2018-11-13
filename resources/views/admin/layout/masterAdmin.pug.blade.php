doctype html
html(lang='en')
  head
    meta(charset='utf-8')
    title @yield('title')
    meta(name='description', content='Bootstrap Metro Dashboard')
    meta(name='author', content='Dennis Ji')
    meta(name='keyword', content='Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina')
    meta(name='viewport', content='width=device-width, initial-scale=1')
    link#bootstrap-style(href='/admin/css/bootstrap.min.css', rel='stylesheet')
    link(href='/admin/css/bootstrap-responsive.min.css', rel='stylesheet')
    link#base-style(href='/admin/css/style.css', rel='stylesheet')
    link#base-style-responsive(href='/admin/css/style-responsive.css', rel='stylesheet')
    link(href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext', rel='stylesheet', type='text/css')
    link(type='image/x-icon', rel='Shortcut Icon', href='https://dienmaycholon.vn/public/default/img/favicon.ico')
    script(src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js')
  body
    .navbar
      .navbar-inner
        @include('admin.layout.header')
    .container-fluid-full
      .row-fluid
        @include('admin.layout.sidebar')
        #content.span10
          @yield('content')
    footer
      p
        span(style='text-align:left;float:left')
          | © 2013 
          a(href='http://themifycloud.com/downloads/janux-free-responsive-admin-dashboard-template/', alt='Bootstrap_Metro_Dashboard') JANUX Responsive Dashboard
    script(src='/js/admin/js/jquery-1.9.1.min.js')

    script(src='/admin/js/jquery-migrate-1.0.0.min.js')
    script(src='/admin/js/jquery-ui-1.10.0.custom.min.js')
    script(src='/admin/js/jquery.ui.touch-punch.js')
    script(src='/admin/js/modernizr.js')
    script(src='/admin/js/bootstrap.min.js')
    script(src='/admin/js/jquery.cookie.js')
    script(src='/admin/js/fullcalendar.min.js')
    script(src='/admin/js/jquery.dataTables.min.js')
    script(src='/admin/js/excanvas.js')
    script(src='/admin/js/jquery.flot.js')
    script(src='/admin/js/jquery.flot.pie.js')
    script(src='/admin/js/jquery.flot.stack.js')
    script(src='/admin/js/jquery.flot.resize.min.js')
    script(src='/admin/js/jquery.chosen.min.js')
    script(src='/admin/js/jquery.uniform.min.js')
    script(src='/admin/js/jquery.cleditor.min.js')
    script(src='/admin/js/jquery.noty.js')
    script(src='/admin/js/jquery.elfinder.min.js')
    script(src='/admin/js/jquery.raty.min.js')
    script(src='/admin/js/jquery.iphone.toggle.js')
    script(src='/admin/js/jquery.uploadify-3.1.min.js')
    script(src='/admin/js/jquery.gritter.min.js')
    script(src='/admin/js/jquery.imagesloaded.js')
    script(src='/admin/js/jquery.masonry.min.js')
    script(src='/admin/js/jquery.knob.modified.js')
    script(src='/admin/js/jquery.sparkline.min.js')
    script(src='/admin/js/counter.js')
    script(src='/admin/js/retina.js')
    script(src='/admin/js/custom.js')
    
