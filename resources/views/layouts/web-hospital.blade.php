<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font google Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Endd Font google Poppins -->
    <!-- Font Awedome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- End Font Awedome CDN -->
    <!-- Vite -->
    @vite('resources/css/app.css')
    <!-- End Vite -->
    <title>@yield('title')</title>
</head>
<body class="font-poppins">
    <!--Announcement bar -->
    <section class="hidden lg:w-full lg:h-[60px] lg:flex lg:justify-center lg:items-center lg:bg-blue-950">
        <div class="lg:w-[950px] lg:h-[45px] lg:flex lg:justify-between lg:items-center xl:w-[1200px] 2xl:w-[1400px]">
            <!-- Number, email, Address -->
            <div class="lg:w-[650px] lg:h-[45px] lg:flex lg:justify-between lg:items-center">
                <div class="">
                    <span><i class="fa-solid fa-phone text-base text-blue-500 mr-2"></i></span>
                    <span class="text-base text-white font-normal">+1 (201) 555-0123</span>
                </div>
                <div>
                    <span><i class="fa-solid fa-envelope text-base text-blue-500 mr-2"></i></span>
                    <span class="text-base text-white font-normal">info@viscareo.com</span>
                </div>
                <div>
                    <span><i class="fa-solid fa-location-dot text-base text-blue-500 mr-2"></i></span>
                    <span class="text-base text-white font-normal">Flat 25, King Street, California.</span>
                </div>
            </div>
            <!-- Number, email, Address -->
            <!-- icons -->
            <div class="lg:w-[250px] lg:h-[45px] lg:flex lg:justify-between lg:items-center">
                <a href="#" class="lg:flex lg:justify-center lg:items-center lg:bg-white lg:w-8 lg:h-8 lg:rounded-full"><i class="fa-brands fa-facebook text-blue-500 text-xl"></i></a>
                <a href="#" class="lg:flex lg:justify-center lg:items-center lg:bg-white lg:w-8 lg:h-8 lg:rounded-full"><i class="fa-brands fa-x-twitter text-black text-xl"></i></a>
                <a href="#" class="lg:flex lg:justify-center lg:items-center lg:bg-white lg:w-8 lg:h-8 lg:rounded-full"><i class="fa-brands fa-linkedin text-blue-500 text-xl"></i></a>
                <a href="#" class="lg:flex lg:justify-center lg:items-center lg:bg-white lg:w-8 lg:h-8 lg:rounded-full"><i class="fa-brands fa-instagram text-orange-500 text-xl"></i></a>
                <a href="#" class="lg:flex lg:justify-center lg:items-center lg:bg-white lg:w-8 lg:h-8 lg:rounded-full"><i class="fa-brands fa-youtube text-red-500 text-xl"></i></a>
            </div>
            <!-- End icons -->
        </div>
    </section>
    <!--Announcement bar -->
    <!-- Header Section -->
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
    <!-- End Header Section -->
    {{ $slot }}
    <!-- Footer -->
    <footer class="w-full bg-blue-950 bg-center bg-no-repeat bg-cover h-fit">
        <div class="w-[90%] mx-auto lg:w-[950px] xl:w-[1200px] 2xl:w-[1400px] py-10">
            <!-- Footer upper -->
            <div class="h-fit flex justify-between items-center flex-col md:grid md:grid-row-2 md:grid-cols-2 lg:grid-cols-3 lg:grid-rows-1">
                <!-- First column -->
                <div class="w-full h-fit flex flex-col justify-between items-center md:w-[350px] md:items-start lg:min-w-[300px]">
                    <!-- Logo footer -->
                    <div class="my-5">
                        <img src="{{ url('/assets/images/viscareo-logo-white2.svg') }}" alt="">
                    </div>
                    <!-- End Logo footer -->
                    <p class="block text-white text-base px-2 mb-5">
                        Lorem Ipsum is simply dummy text of the
                        printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                        text ever since the 1500s.
                    </p>
                    <!-- company Contact footer -->
                    <div class="mb-5 w-full flex flex-col justify-center items-center md:items-start">
                        <div class="mb-3">
                            <span class="mr-2"><i class="fa-solid fa-phone text-red-500"></i></span>
                            <span class="text-white text-base">+1 (201) 555-0123</span>
                        </div>
                        <div class="mb-3">
                            <span class="mr-2"><i class="fa-solid fa-envelope text-red-500"></i></span>
                            <span class="text-white text-base">info@viscareo.com</span>
                        </div>
                        <div class="mb-3">
                            <span class="mr-2"><i class="fa-solid fa-location-dot text-red-500"></i></span>
                            <span class="text-white text-base">Flat 25, King Street, California.</span>
                        </div>
                    </div>
                    <!-- company Contact footer -->
                    <!-- Icons footer -->
                    <div class="w-[250px] flex justify-between items-center mb-5">
                        <a href="#" class="flex justify-center items-center bg-white w-8 h-8 rounded-full"><i class="fa-brands fa-facebook text-blue-500 text-xl"></i></a>
                        <a href="#" class="flex justify-center items-center bg-white w-8 h-8 rounded-full"><i class="fa-brands fa-x-twitter text-black text-xl"></i></a>
                        <a href="#" class="flex justify-center items-center bg-white w-8 h-8 rounded-full"><i class="fa-brands fa-linkedin text-blue-500 text-xl"></i></a>
                        <a href="#" class="flex justify-center items-center bg-white w-8 h-8 rounded-full"><i class="fa-brands fa-instagram text-orange-500 text-xl"></i></a>
                        <a href="#" class="flex justify-center items-center bg-white w-8 h-8 rounded-full"><i class="fa-brands fa-youtube text-red-500 text-xl"></i></a>
                    </div>
                    <!-- End Icons Footer -->
                </div>
                <!-- End First column -->
                <!-- Departments -->
                <div class="h-fit w-full md:w-[350px] lg:min-w-[300px]">
                    <!-- Logo footer -->
                    <div class="flex justify-center items-center">
                        <div class="w-10 h-10 block mr-2 my-5">
                            <img class="block w-full h-full object-cover object-center" src="{{ url('/assets/images/icon-white.svg') }}" alt="">
                        </div>
                        <h4 class="block text-2xl text-blue-400 font-semibold">Departments</h4>
                    </div>
                    <!-- End Logo footer -->
                    <div class="w-full mb-5">
                        <span class="text-white h-[40px] text-base font-normal block text-center"><a href="#">Blood Test Department</a></span>
                        <span class="text-white h-[40px] text-base font-normal block text-center"><a href="#">Blood Test Department</a></span>
                        <span class="text-white h-[40px] text-base font-normal block text-center"><a href="#">Blood Test Department</a></span>
                        <span class="text-white h-[40px] text-base font-normal block text-center"><a href="#">Blood Test Department</a></span>
                        <span class="text-white h-[40px] text-base font-normal block text-center"><a href="#">Blood Test Department</a></span>
                        <span class="text-white h-[40px] text-base font-normal block text-center"><a href="#">Blood Test Department</a></span>
                        <span class="text-white h-[40px] text-base font-normal block text-center"><a href="#">Blood Test Department</a></span>
                        <span class="text-white h-[40px] text-base font-normal block text-center"><a href="#">Blood Test Department</a></span>
                        <span class="text-white h-[40px] text-base font-normal block text-center"><a href="#">Blood Test Department</a></span>
                    </div>
                </div>
                <!-- End Departments -->
                <!-- Opening Hours -->
                <div class="h-fit w-full my-5 md:w-[300px]">
                    <!-- Logo footer -->
                    <div class="flex justify-center items-center">
                        <div class="w-10 h-10 block mr-2 my-5">
                            <img class="block w-full h-full object-cover object-center" src="{{ url('/assets/images/icon-white.svg') }}" alt="">
                        </div>
                        <h4 class="block text-2xl text-blue-400 font-semibold">Opening Hours</h4>
                    </div>
                    <!-- End Logo footer -->
                    <div class="min-w-[250px] bg-black flex flex-col justify-center items-center py-5">
                        <span class="h-[52px] text-base font-normal text-white"><i class="fa-solid fa-check mr-2"></i><small>Mon: 9:00 AM - 9:00 PM</small></span>
                        <span class="h-[52px] text-base font-normal text-white"><i class="fa-solid fa-check mr-2"></i><small>Mon: 9:00 AM - 9:00 PM</small></span>
                        <span class="h-[52px] text-base font-normal text-white"><i class="fa-solid fa-check mr-2"></i><small>Mon: 9:00 AM - 9:00 PM</small></span>
                        <span class="h-[52px] text-base font-normal text-white"><i class="fa-solid fa-check mr-2"></i><small>Mon: 9:00 AM - 9:00 PM</small></span>
                        <span class="h-[52px] text-base font-normal text-white"><i class="fa-solid fa-check mr-2"></i><small>Mon: 9:00 AM - 9:00 PM</small></span>
                        <span class="h-[52px] text-base font-normal text-white"><i class="fa-solid fa-check mr-2"></i><small>Mon: 9:00 AM - 9:00 PM</small></span>
                        <span class="h-[52px] text-base font-normal text-white"><i class="fa-solid fa-check mr-2"></i><small>Mon: 9:00 AM - 9:00 PM</small></span>
                    </div>
                </div>
                <!-- End Opening Hours -->
            </div>
            <!-- End Footer upper -->
        </div>
    </footer>
    <!-- Footer bottom -->
    <section class="w-full bg-gray-100">
        <div class="w-[90%] mx-auto lg:w-[950px] xl:w-[1200px] 2xl:w-[1400px] py-3">
            <div class="block w-full py-3">
                <!-- Copyright -->
                <div class="block mb-5">
                    <span class="block text-center text-base font-normal text-gray-500">2023 Viscareo All Rights Reserved by Webizycode</span>
                </div>
                <!-- End Copyright -->
                <!-- More Links -->
                <div class="block sm:flex justify-between items-center">
                    <span class="block text-center text-gray-500"><a href="#">Terms & Conditions</a></span>
                    <span class="block text-center text-gray-500"><a href="#">Privacy Policy</a></span>
                    <span class="block text-center text-gray-500"><a href="#">Chat & Support</a></span>
                </div>
                <!-- End More Links -->
            </div>
        </div>
    </section>
    <!-- End Footer bottom -->
    <!-- End Footer -->
    <script src="{{ url('/assets/js/main.js') }}"></script>
</body>
</html>