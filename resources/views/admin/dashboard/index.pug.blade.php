@extends('admin.layout.masterAdmin')
@section('title')
|Admin Khuyến mãi điện máy chợ lớn
@endsection
@section('content')
ul.breadcrumb
  li
    i.icon-home
    a(href='index.html') Home
    i.icon-angle-right
  li
    a(href='#') Dashboard
.row-fluid
  .box.span12
    .box-content
      a.quick-button-small.span1
        i.icon-group
        p Users
        span.notification.blue 7
      a.quick-button-small.span1
        i.icon-comments-alt
        p Comments
        span.notification.green 4
      a.quick-button-small.span1
        i.icon-shopping-cart
        p Orders
      a.quick-button-small.span1
        i.icon-barcode
        p Products
      a.quick-button-small.span1
        i.icon-envelope
        p Messages
      a.quick-button-small.span1
        i.icon-calendar
        p Calendar
        span.notification.red 8
      a.quick-button-small.span1
        i.icon-beaker
        p Projects
      a.quick-button-small.span1
        i.icon-thumbs-up
        p Likes
        span.notification.green 1
      a.quick-button-small.span1
        i.icon-heart-empty
        p Favorites
      a.quick-button-small.span1
        i.icon-bullhorn
        p Notifications
        span.notification.yellow 7
      a.quick-button-small.span1
        i.icon-cogs
        p Settings
      a.quick-button-small.span1
        i.icon-dashboard
        p Dashboard
      .clearfix

  .clearfix
@endsection
