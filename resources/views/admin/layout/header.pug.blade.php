.container-fluid
  a.btn.btn-navbar(data-toggle='collapse', data-target='.top-nav.nav-collapse,.sidebar-nav.nav-collapse')
    span.icon-bar
    span.icon-bar
    span.icon-bar
  a.brand(href='index.html')
    span DMCL 
  .nav-no-collapse.header-nav
    ul.nav.pull-right
    
     
  
      li.dropdown
        a.btn.dropdown-toggle(data-toggle='dropdown', href='#')
          i.halflings-icon.white.user
          |  {{ Auth::user()->name }}
          span.caret
        ul.dropdown-menu
          li.dropdown-menu-title
            span Account Settings
          //- li
          //-   a(href='#')
          //-     i.halflings-icon.user
          //-     |  Profile
          li
            a(href='/logout')
              i.halflings-icon.off
              |  Logout