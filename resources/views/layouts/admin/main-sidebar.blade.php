    <!-- Left Sidebar start-->
<div class="side-menu-fixed">
    <div class="scrollbar side-menu-bg">
        <ul class="nav navbar-nav side-menu" id="sidebarnav">
           <!-- menu item Dashboard-->
           <li>
             <a href="{{route('dashboard')}}">
               <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">Dashboard</span></div>
               <div class="clearfix"></div>
             </a>
           </li>

           <!-- component -->
            <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">Component</li>

            <!-- menu item Elements-->
          <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#home">
              <div class="pull-left"><i class="ti-calendar"></i><span class="right-nav-text">Home</span></div>
              <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
            </a>
            <ul id="home" class="collapse" data-parent="#sidebarnav">
               <li> <a href="{{route('home-slider.index')}}">Slider</a></li>
            </ul>
          </li>

          <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#about">
              <div class="pull-left"><i class="ti-palette"></i><span class="right-nav-text">About US</span></div>
              <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
            </a>
            <ul id="about" class="collapse" data-parent="#sidebarnav">
              <li> <a href="{{route('about-slider.index')}}">Slider</a></li>
              <li> <a href="{{route('teams.index')}}">Teams</a></li>
              <li> <a href="{{route('testimonials.index')}}">Testimonials</a></li>

             </ul>
          </li>

          <li>
           <a href="javascript:void(0);" data-toggle="collapse" data-target="#service">
             <div class="pull-left"><i class="fa fa-server"></i><span class="right-nav-text">Services</span></div>
             <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
           </a>
           <ul id="service" class="collapse" data-parent="#sidebarnav">
              <li><a href="{{route('service-slider.index')}}">Slider</a></li>

            </ul>
          </li>

          <li>
           <a href="javascript:void(0);" data-toggle="collapse" data-target="#client">
             <div class="pull-left"><i class="fa fa-industry"></i><span class="right-nav-text">Client</span></div>
             <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
           </a>
           <ul id="client" class="collapse" data-parent="#sidebarnav">
            <li><a href="{{route('client-slider.index')}}">Slider</a></li>
            <li><a href="{{route('brands.index')}}">Brands</a></li>

            </ul>
          </li>

          <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#career">
              <div class="pull-left"><i class="fa fa-industry"></i><span class="right-nav-text">Career</span></div>
              <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
            </a>
            <ul id="career" class="collapse" data-parent="#sidebarnav">
             <li><a href="{{route('career-slider.index')}}">Slider</a></li>
             <li><a href="{{route('career-position.index')}}">Career position</a></li>
 
             </ul>
           </li>

          <li>
           <a href="javascript:void(0);" data-toggle="collapse" data-target="#contact">
             <div class="pull-left"><i class="fa fa-phone"></i><span class="right-nav-text">Contact</span></div>
             <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
           </a>
           <ul id="contact" class="collapse" data-parent="#sidebarnav">
             <li><a href="{{route('contact-slider.index')}}">Slider</a></li>
            </ul>
          </li>

          <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">Settings</li>

          <li>
            <a href="{{ route('setting.index') }}"><i class="ti-settings"></i><span class="right-nav-text">Settings </span></a>
          </li>

          <li>
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#icon">
              <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">Icons</span></div>
              <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
            </a>
            <ul id="icon" class="collapse" data-parent="#sidebarnav">
             <li><a href="{{ route('fontawsome') }}">Font Fontawesome</a></li>
             <li><a href="{{ route('themify') }}">Themify Icons</a></li>
            </ul>
           </li>

      </ul>
  </div>
</div>

   <!-- Left Sidebar End-->
