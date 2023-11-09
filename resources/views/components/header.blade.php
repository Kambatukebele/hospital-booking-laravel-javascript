<header class="w-full bg-white h-[80px] flex justify-center items-center relative">        
    <div class="w-[90%] mx-auto bg-white lg:w-[950px] xl:w-[1200px] 2xl:w-[1400px]">
        <!--Navigation -->
        <nav class="flex justify-between items-center h-[60px]">
            <!-- Logo -->
            <div>
                <img src="{{ url('/assets/images/viscareo-logo1.svg') }}" alt="Logo">
            </div>
            <!-- End Logo -->
            <!-- Navigation Links -->
            <ul class="absolute bg-gray-50 h-screen top-20 left-0 w-0 overflow-hidden duration-500 navigation lg:static lg:top-0 lg:left-0 lg:overflow-visible lg:flex lg:justify-between lg:items-center lg:w-[700px] lg:h-[46px] lg:bg-white">
                <li class="block h-[46px] text-center text-base text-gray-800 font-semibold mt-5 lg:mt-0 lg:flex lg:items-center"><a href="#" class="block">Home</a></li>
                <li class="block h-[46px] text-center text-base text-gray-800 font-semibold lg:flex lg:items-center"><a href="#" class="block">About Us</a></li>
                <li class="block h-[46px] text-center text-base text-gray-800 font-semibold lg:flex lg:items-center"><a href="#" class="block">Doctors</a></li>
                <li class="block h-[46px] text-center text-base text-gray-800 font-semibold lg:flex lg:items-center"><a href="#blog">Blog</a></li>
                <li class="block h-[46px] text-center text-base text-gray-800 font-semibold lg:flex lg:items-center"><a href="#" class="block">Contact Us</a></li>
                <li class="flex justify-center items-center h-[46px] text-center text-base text-gray-800 font-normal"><a href="#" class="block w-44 text-white bg-red-600 py-3 rounded">Appointment</a></li>
            </ul>
            <!-- End Navigation Links -->
            <!-- Hamburger Menu and Clone btn for Small Devices -->
            <div class="bg-gray-50 shadow-2xl w-10 h-10 flex justify-center items-center border border-gray-50 lg:hidden">
                <i class="fa-solid fa-bars block text-3xl cursor-pointer duration-500 lg:hidden" id="hamburger"></i>
                <i class="fa-solid fa-xmark hidden text-3xl cursor-pointer lg:hidden" id="btn-close"></i>
            </div>
            <!-- End Hamburger Menu and Clone btn for Small Devices -->
        </nav>
        <!-- End Navigation -->
        
    </div>
</header>