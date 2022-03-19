<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from radixtouch.com/templates/admin/atrio/source/lighthr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Oct 2021 09:52:13 GMT -->

<head>

    @include('includes.admin.styles')
    @yield('pagestyles')
</head>

<body >
  

<div class="layout-wrapper layout-content-navbar  ">
  <div class="layout-container">

    
 
     

<!-- side navepar -->


@include('includes.admin.side_nav')
 <!--end side navepar -->   

    <!-- Layout container -->
    <div class="layout-page">
      
      

<!-- header -->

@include('includes.admin.header')


<!--end header -->


<!-- Content -->
@yield('content')
<!--end Content -->

          
          

<!-- Footer -->
@include('includes.admin.footer')
<!-- / Footer -->

          
          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    
    
    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    
    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
  </div>
  <!-- / Layout wrapper -->

  
  <div class="buy-now">
    <a href="https://1.envato.market/frest_admin" target="_blank" class="btn btn-danger btn-buy-now">Buy Now</a>
  </div>


    @include('includes.admin.script')
    @yield('pageScript')

   

</body>


<!-- Mirrored from radixtouch.com/templates/admin/atrio/source/lighthr/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Oct 2021 09:54:20 GMT -->

</html>