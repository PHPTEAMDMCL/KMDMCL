#sidebar-left.span2
  .nav-collapse.sidebar-nav
    ul.nav.nav-tabs.nav-stacked.main-menu
      li
        a(href='/admin/index/index')
          i.icon-bar-chart
          span.hidden-tablet  Thông tin chung 
      li
        a(href='/admin/promotion/index')
          i.icon-flag
          span.hidden-tablet  Tạo chương trình
      li
        a.dropmenu(href='#')
          i.icon-folder-close-alt
          span.hidden-tablet Chương trình khuyến mãi 
          
        ul
          li
            a.submenu(href='/admin/chuongtrinhkhuyenmai/themmoi')
              span.hidden-tablet Thêm mới chương trình
          li
            a.submenu(href='/admin/chuongtrinhkhuyenmai/danhsach')
              span.hidden-tablet Danh sách con hàng của chương trình   
      li
        a.dropmenu(href='#')
          i.icon-folder-close-alt
          span.hidden-tablet Ưu đãi ABC
          
        ul
          li
            a.submenu(href='/admin/uudaiacb/add')
              span.hidden-tablet Thêm mới 
          li
            a.submenu(href='/admin/uudaiacb/lists')
              span.hidden-tablet Danh sách con hàng  
      li
        a.dropmenu(href='#')
          i.icon-folder-close-alt
          span.hidden-tablet Samsung tháng 4 
          
        ul
          li
            a.submenu(href='/admin/samsungfour/add')
              span.hidden-tablet Thêm mới 
          li
            a.submenu(href='/admin/samsungfour/lists')
              span.hidden-tablet Danh sách con hàng    
      li
        a.dropmenu(href='#')
          i.icon-folder-close-alt
          span.hidden-tablet Ngày rửa lửa 
          
        ul
          li
            a.submenu(href='/admin/redday/add')
              span.hidden-tablet Thêm mới 
          li
            a.submenu(href='/admin/redday/lists')
              span.hidden-tablet Danh sách con hàng
      //- li
      //-   a.dropmenu(href='#')
      //-     i.icon-folder-close-alt
      //-     span.hidden-tablet Bí mật Samsung 
          
      //-   ul
      //-     li
      //-       a.submenu(href='/admin/bimat/add')
      //-         span.hidden-tablet Thêm mới 
      //-     li
      //-       a.submenu(href='/admin/bimat/lít')
      //-         span.hidden-tablet Danh sách con hàng 
      li
        a.dropmenu(href='#')
          i.icon-folder-close-alt
          span.hidden-tablet Sale December
          
        ul
          li
            a.submenu(href='/admin/saledecember/add')
              span.hidden-tablet Thêm mới 
          li
            a.submenu(href='/admin/saledecember/lists')
              span.hidden-tablet Danh sách con hàng    
      //- li
      //-   a.dropmenu(href='#')
      //-     i.icon-folder-close-alt
      //-     span.hidden-tablet Landing Page
      //-     span.label.label-important  4 
      //-   ul
      //-     li
      //-       a.submenu(href='/admin/landing/add-live')
      //-         span.hidden-tablet Thêm chương trình
      //-     li
      //-       a.submenu(href='/admin/landing/add-live-child')
      //-         span.hidden-tablet Thêm chương trình con
      //-     li
      //-       a.submenu(href='/admin/landing/lít-active')
      //-         span.hidden-tablet Đang chạy
      //-     li
      //-       a.submenu(href='/admin/landing/lít-unactive')
      //-         span.hidden-tablet Ngưng đang chạy
      li
        a.dropmenu(href='#')
          i.icon-folder-close-alt
          span.hidden-tablet TechcomBank
        ul
          li
            a.submenu(href='/admin/techcombank/add')
              span.hidden-tablet Thêm mới 
          li
            a.submenu(href='/admin/techcombank/lists')
              span.hidden-tablet Danh sách con hàng
      li
        a.dropmenu(href='#')
          i.icon-folder-close-alt
          span.hidden-tablet SamSung Online
          
        ul
          li
            a.submenu(href='/admin/samsung/add')
              span.hidden-tablet Thêm mới 
          li
            a.submenu(href='/admin/samsung/lists')
              span.hidden-tablet Danh sách con hàng
          li
            a.submenu(href='/admin/grab/add')
              span.hidden-tablet Thêm mới (Grab) 
          li
            a.submenu(href='/admin/grab/lists')
              span.hidden-tablet Danh sách SP (Grab)
          li
            a.submenu(href='/admin/quatet/add')
              span.hidden-tablet Thêm Quà Tết
          li
            a.submenu(href='/admin/quatet/lists')
              span.hidden-tablet Danh sách SP(Quà tết)
          li
            a.submenu(href='/admin/promotion/add')
              span.hidden-tablet Thêm Khuyến mãi
          li
            a.submenu(href='/admin/promotion/lists')
              span.hidden-tablet Danh sách khuyến mãi
      li
        a.dropmenu(href='#')
          i.icon-folder-close-alt
          span.hidden-tablet Gian Hàng Online
        ul
          li
            a.submenu(href='/admin/online/add')
              span.hidden-tablet Thêm mới 
          li
            a.submenu(href='/admin/online/lists')
              span.hidden-tablet Danh sách con hàng
      li
        a.dropmenu(href='#')
          i.icon-folder-close-alt
          span.hidden-tablet TIVI Tết
        ul
          li
            a.submenu(href='/admin/tivi/add')
              span.hidden-tablet Thêm mới 
          li
            a.submenu(href='/admin/tivi/lists')
              span.hidden-tablet Danh sách con hàng

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