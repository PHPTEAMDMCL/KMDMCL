#sidebar-left.span2
  .nav-collapse.sidebar-nav
    ul.nav.nav-tabs.nav-stacked.main-menu
      li
        a(href='/admin/dashboard')
          i.icon-bar-chart
          span.hidden-tablet  Dashboard
      li
        a.dropmenu(href='#')
          i.icon-folder-close-alt
          span.hidden-tablet Landing Page
          span.label.label-important  4 
        ul
          li
            a.submenu(href='/admin/landing/add-live')
              span.hidden-tablet Thêm chương trình
          li
            a.submenu(href='/admin/landing/add-live-child')
              span.hidden-tablet Thêm chương trình con
          li
            a.submenu(href='/admin/landing/list-active')
              span.hidden-tablet Đang chạy
          li
            a.submenu(href='/admin/landing/list-unactive')
              span.hidden-tablet Ngưng đang chạy
      //- li
      //-   a(href='form.html')
      //-     i.icon-edit
      //-     span.hidden-tablet  Forms
      //- li
      //-   a(href='chart.html')
      //-     i.icon-list-alt
      //-     span.hidden-tablet  Charts
      //- li
      //-   a(href='typography.html')
      //-     i.icon-font
      //-     span.hidden-tablet  Typography
      //- li
      //-   a(href='gallery.html')
      //-     i.icon-picture
      //-     span.hidden-tablet  Gallery
      //- li
      //-   a(href='table.html')
      //-     i.icon-align-justify
      //-     span.hidden-tablet  Tables
      //- li
      //-   a(href='calendar.html')
      //-     i.icon-calendar
      //-     span.hidden-tablet  Calendar
      //- li
      //-   a(href='file-manager.html')
      //-     i.icon-folder-open
      //-     span.hidden-tablet  File Manager
      //- li
      //-   a(href='icon.html')
      //-     i.icon-star
      //-     span.hidden-tablet  Icons
      //- li
      //-   a(href='login.html')
      //-     i.icon-lock
      //-     span.hidden-tablet  Login Page