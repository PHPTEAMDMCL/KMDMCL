.container-fluid
  a.btn.btn-navbar(data-toggle='collapse', data-target='.top-nav.nav-collapse,.sidebar-nav.nav-collapse')
    span.icon-bar
    span.icon-bar
    span.icon-bar
  a.brand(href='index.html')
    span JANUX
  .nav-no-collapse.header-nav
    ul.nav.pull-right
      li.dropdown.hidden-phone
        a.btn.dropdown-toggle(data-toggle='dropdown', href='#')
          i.icon-bell
          span.badge.red
            | 7
        ul.dropdown-menu.notifications
          li.dropdown-menu-title
            span You have 11 notifications
            a(href='#refresh')
              i.icon-repeat
          li
            a(href='#')
              span.icon.blue
                i.icon-user
              span.message New user registration
              span.time 1 min
          li
            a(href='#')
              span.icon.green
                i.icon-comment-alt
              span.message New comment
              span.time 7 min
          li
            a(href='#')
              span.icon.green
                i.icon-comment-alt
              span.message New comment
              span.time 8 min
          li
            a(href='#')
              span.icon.green
                i.icon-comment-alt
              span.message New comment
              span.time 16 min
          li
            a(href='#')
              span.icon.blue
                i.icon-user
              span.message New user registration
              span.time 36 min
          li
            a(href='#')
              span.icon.yellow
                i.icon-shopping-cart
              span.message 2 items sold
              span.time 1 hour
          li.warning
            a(href='#')
              span.icon.red
                i.icon-user
              span.message User deleted account
              span.time 2 hour
          li.warning
            a(href='#')
              span.icon.red
                i.icon-shopping-cart
              span.message New comment
              span.time 6 hour
          li
            a(href='#')
              span.icon.green
                i.icon-comment-alt
              span.message New comment
              span.time yesterday
          li
            a(href='#')
              span.icon.blue
                i.icon-user
              span.message New user registration
              span.time yesterday
          li.dropdown-menu-sub-footer
            a View all notifications
      li.dropdown.hidden-phone
        a.btn.dropdown-toggle(data-toggle='dropdown', href='#')
          i.icon-calendar
          span.badge.red
            | 5
        ul.dropdown-menu.tasks
          li.dropdown-menu-title
            span You have 17 tasks in progress
            a(href='#refresh')
              i.icon-repeat
          li
            a(href='#')
              span.header
                span.title iOS Development
                span.percent
              .taskProgress.progressSlim.red 80
          li
            a(href='#')
              span.header
                span.title Android Development
                span.percent
              .taskProgress.progressSlim.green 47
          li
            a(href='#')
              span.header
                span.title ARM Development
                span.percent
              .taskProgress.progressSlim.yellow 32
          li
            a(href='#')
              span.header
                span.title ARM Development
                span.percent
              .taskProgress.progressSlim.greenLight 63
          li
            a(href='#')
              span.header
                span.title ARM Development
                span.percent
              .taskProgress.progressSlim.orange 80
          li
            a.dropdown-menu-sub-footer View all tasks
      li.dropdown.hidden-phone
        a.btn.dropdown-toggle(data-toggle='dropdown', href='#')
          i.icon-envelope
          span.badge.red
            | 4
        ul.dropdown-menu.messages
          li.dropdown-menu-title
            span You have 9 messages
            a(href='#refresh')
              i.icon-repeat
          li
            a(href='#')
              span.avatar
                img(src='img/avatar.jpg', alt='Avatar')
              span.header
                span.from
                  | Dennis Ji
                span.time
                  | 6 min
              span.message
                | Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
          li
            a(href='#')
              span.avatar
                img(src='img/avatar.jpg', alt='Avatar')
              span.header
                span.from
                  | Dennis Ji
                span.time
                  | 56 min
              span.message
                | Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
          li
            a(href='#')
              span.avatar
                img(src='img/avatar.jpg', alt='Avatar')
              span.header
                span.from
                  | Dennis Ji
                span.time
                  | 3 hours
              span.message
                | Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
          li
            a(href='#')
              span.avatar
                img(src='img/avatar.jpg', alt='Avatar')
              span.header
                span.from
                  | Dennis Ji
                span.time
                  | yesterday
              span.message
                | Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
          li
            a(href='#')
              span.avatar
                img(src='img/avatar.jpg', alt='Avatar')
              span.header
                span.from
                  | Dennis Ji
                span.time
                  | Jul 25, 2012
              span.message
                | Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
          li
            a.dropdown-menu-sub-footer View all messages
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