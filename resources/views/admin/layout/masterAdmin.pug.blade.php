doctype html
html(lang='en')
  head
    meta(charset='utf-8')
    title @yield('title')
    meta(name='description', content='Bootstrap Metro Dashboard')
    meta(name='author', content='Dennis Ji')
    meta(name='keyword', content='Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina')
    meta(name='viewport', content='width=device-width, initial-scale=1')
    link(href=asset('/admin/css/bootstrap.css?version='.time()), rel='stylesheet' type="text/css")
    link(href=asset('/admin/css/bootstrap-responsive.min.css?version='.time()) , rel='stylesheet' type="text/css")
    link#base-style(href=asset('/admin/css/style.css?version='.time()), rel='stylesheet')
    link#base-style-responsive(href=asset('/admin/css/style-responsive.css?version='.time()), rel='stylesheet')
    
    link(type='image/x-icon', rel='Shortcut Icon', href='https://dienmaycholon.vn/public/default/img/favicon.ico')
    script(src='/admin/js/jquery-1.9.1.min.js')
    meta(name="csrf-token" content=csrf_token())
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
          | © 2018 
          a(href='/', alt='ĐIỆN MÁY CHỢ LỚN ') ĐIỆN MÁY CHỢ LỚN 
    script(src=asset( '/admin/js/jquery-1.9.1.min.js')  )

    script(src=asset('/admin/js/jquery-migrate-1.0.0.min.js' ) )
    script(src=asset('/admin/js/jquery-ui-1.10.0.custom.min.js') )
    script(src=asset('/admin/js/jquery.ui.touch-punch.js') )
    script(src=asset('/admin/js/modernizr.js') )
    script(src=asset('/admin/js/bootstrap.min.js') )
    script(src=asset('/admin/js/jquery.cookie.js') ) )
    script(src=asset('/admin/js/fullcalendar.min.js') )
    script(src=asset('/admin/js/jquery.dataTables.min.js') )
    script(src=asset('/admin/js/excanvas.js') )
    script(src=asset('/admin/js/jquery.flot.js') )
    script(src=asset('/admin/js/jquery.flot.pie.js') )
    script(src=asset('/admin/js/jquery.flot.stack.js') )
    script(src=asset('/admin/js/jquery.flot.resize.min.js') )
    script(src=asset('/admin/js/jquery.chosen.min.js') )
    script(src=asset('/admin/js/jquery.uniform.min.js') )
    script(src=asset('/admin/js/jquery.cleditor.min.js') )
    script(src=asset('/admin/js/jquery.noty.js') )
    script(src=asset('/admin/js/jquery.elfinder.min.js') )
    script(src=asset('/admin/js/jquery.raty.min.js') )
    script(src=asset('/admin/js/jquery.iphone.toggle.js') )
    script(src=asset('/admin/js/jquery.uploadify-3.1.min.js') )
    script(src=asset('/admin/js/jquery.gritter.min.js') )
    script(src=asset('/admin/js/jquery.imagesloaded.js') )
    script(src=asset('/admin/js/jquery.masonry.min.js') )
    script(src=asset('/admin/js/jquery.knob.modified.js') )
    script(src=asset('/admin/js/jquery.sparkline.min.js') )
    script(src=asset('/admin/js/counter.js') )
    script(src=asset('/admin/js/retina.js') )
    script(src=asset('/admin/js/custom.js') )
    
