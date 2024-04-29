<div class="logo p-absolute">
    <img src="{{ url('frontend/images/logo-rem.png') }}" class="img-logo" alt="Image">
</div>

<div class="menu-toogle p-absolute">
    <div class="menu-toggle-icon">
        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M3 2.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zM3.5 6a.5.5 0 0 0-.5.5v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-.5-.5zm5 0a.5.5 0 0 0-.5.5v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-.5-.5zm5 0a.5.5 0 0 0-.5.5v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-.5-.5z"/>
        </svg> -->
        <span style="font-size:30px;cursor:pointer" id="menu-icon" onclick="openNav()">&#9776; Menu</span>
        
    </div>
    
    <div id="mySidenav" class="sidenav mx-2">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="{{ url('/') }}" class="text-dinim">Home</a>
        <a href="{{ url('about-us') }}" class="text-dinim">About Us</a>
        {{-- <a href="{{ url('our-governance') }}" class="text-dinim">Our governance</a> --}}
        <a href="{{ url('our-approach') }}" class="text-dinim">Our approach</a>
        <a href="https://csoweek.or.tz/" class="text-dinim">CSO Week 2024</a>
        <a href="{{ url('get-involved') }}" class="text-dinim">Get involved</a>
        <a href="{{ url('media') }}" class="text-dinim">Media</a>
    </div>
</div>