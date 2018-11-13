doctype html
html(lang="vi-VN" ng-app="app" ng-controller="note9")
  head
    meta(http-equiv='content-type', content='text/html; charset=utf-8')
    meta(name='author', content=' Siêu thị điện máy Chợ Lớn ')
    title Danh sách khách hàng mua Note 9 | dienmaycholon.vn 
    meta(name='viewport', content='width=device-width, initial-scale=1')
    meta(name='description', content='Mua Galaxy Note 9 - Giảm ngay 2.5 triệu cùng nhiều phần quà hấp dẫn nồi áp suất, PMH 500k, góp 0%')
    meta(name='robots' content='noindex')
    meta(name='googlebot' content='noindex')
    meta(name='Author', content='Siêu thị Điện máy Chợ Lớn')


    link(type='image/x-icon', rel='Shortcut Icon', href='https://dienmaycholon.vn/public/default/img/favicon.ico')
    link(href="/css/y2018/m11/note9/css/app.css" type='text/css' rel='stylesheet')

    script(type='text/javascript' src='/js/y2018/m11/note9/js/app.js')
    script(type='text/javascript', src='/js/y2018/m11/note9/js/angular.js')
    script(type='text/javascript', src='/js/y2018/m11/note9/js/add.js')
    script(src='https://cdn.firebase.com/js/client/2.0.4/firebase.js')
    // AngularFire
    script(src='https://cdn.firebase.com/libs/angularfire/0.9.0/angularfire.min.js')
    
    script(src='https://www.gstatic.com/firebasejs/5.4.1/firebase.js')
    script(src='https://www.gstatic.com/firebasejs/5.4.1/firebase-app.js')
    // Add additional services that you want to use
    script(src='https://www.gstatic.com/firebasejs/5.4.1/firebase-auth.js')
    script(src='https://www.gstatic.com/firebasejs/5.4.1/firebase-database.js')
    script(src='https://www.gstatic.com/firebasejs/5.4.1/firebase-firestore.js')
    script(src='https://www.gstatic.com/firebasejs/5.4.1/firebase-messaging.js')
    script(src='https://www.gstatic.com/firebasejs/5.4.1/firebase-functions.js')

  body
    header
      .content_tabs
        a.position_logo(href='https://dienmaycholon.vn/', title='Siêu thị điện máy Chợ Lớn', target='_blank')
          img.animated1.fadeInUp(src='/img/y2018/m11/note9/img/logo-dmcl.png', alt='logo điện máy Chợ Lớn')
        .box_left
          img.animated1.fadeInLeft(src='/img/y2018/m11/note9/img/galaxy-note9-top.png', alt='Samsung Galaxy Note 9')
        .box_right
          img.animated1.fadeInRight(src='/img/y2018/m11/note9/img/logo-samsung.png', alt='logo Samsung')
          h1 Galaxy Note9
          img.animated1.fadeInUp(src='/img/y2018/m11/note9/img/tit-2tr.png', alt='Giảm 2.5 triệu khi mua Galaxy Note 9')
          img.animated1.fadeInUp(src='/img/y2018/m11/note9/img/gift-main.png', alt='Quà tặng Galaxy Note 9')
          p Từ 01/11 - 30/11/2018
          a(href='https://dienmaycholon.vn/tu-khoa/note-9', title='Samsung galaxy Note 9', target='_blank')
            img(src='/img/y2018/m11/note9/img/btn-muangay.png', alt='mua ngay')
    section.box_tabs
      .content_fixed
        p.p_intro.p_intro2 Tổng số khách đặt hàng:<%members.length%>
        div.fright
          input.inputbox(type='text' value='Tìm' placeholder='Nhập từ khóa tìm kiếm' ng-model="searchquery")
        table.table
          thead
            tr
              th Họ tên
              th Số điện thoại
              th Thời gian
          tbody
            tr( ng-repeat="member in members | orderBy:'status' | filter:searchquery  | pagination: curPage * pageSize | limitTo: pageSize")
              td <% member.name %>
              td <% member.phone %>
              td <% member.today %>
        .pagination.pagination-div(style='text-align: center;')
          ul.pagination-firt
            li
              button.btn.btn-primary(type='button' ng-disabled="curPage == 0" ng-click="curPage=curPage-1")  Trước
            li
              span Trang <%curPage + 1%> 
            li
              button.btn.btn-primary(type='button' ng-disabled="curPage >= members.length/pageSize - 1"
               ng-click="curPage = curPage+1") Sau 
                
    
    footer
      p Bản quyền © 2001 - 2018 thuộc về Công ty TNHH Cao Phong
