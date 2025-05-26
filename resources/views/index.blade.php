<!doctype html>
<html lang="en">
  <!--begin::Head-->
  @include('inc.head')
  <!--end::Head-->
  <!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <!--begin::Header-->
    @include('inc.nav')
      <!--end::Header-->
      <!--begin::Sidebar-->
     @include('inc.side')
      <!--end::Sidebar-->
      <!--begin::App Main-->
    @include('inc.main')
      <!--end::App Main-->
      <!--begin::Footer-->
    @include('inc.footer')
  
      <!--end::Footer-->
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    @include('inc.js')
  