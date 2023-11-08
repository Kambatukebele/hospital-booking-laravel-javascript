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
    <!-- Header Section -->
    <header class="w-full bg-white h-[80px] flex justify-center items-center relative">        
        <div class="w-[90%] mx-auto bg-white">
            <!--Announcement bar -->
            <div class="hidden">
                <!-- Number, email, Address -->
                <div>
                    <div>
                        <span><i class="fa-solid fa-phone"></i></span>
                        <span>+1 (201) 555-0123</span>
                    </div>
                    <div>
                        <span><i class="fa-solid fa-envelope"></i></span>
                        <span>info@viscareo.com</span>
                    </div>
                    <div>
                        <span><i class="fa-solid fa-location-dot"></i></span>
                        <span>Flat 25, King Street, California.</span>
                    </div>
                </div>
                <!-- Number, email, Address -->
                <!-- icons -->
                <div>
                    <span><i class="fa-brands fa-facebook"></i></span>
                    <span><i class="fa-brands fa-x-twitter"></i></span>
                    <span><i class="fa-brands fa-linkedin"></i></span>
                    <span><i class="fa-brands fa-youtube"></i></span>
                    <span><i class="fa-brands fa-youtube"></i></span>
                </div>
                <!-- End icons -->
            </div>
            <!--Announcement bar -->
            <!--Navigation -->
            <nav class="flex justify-between items-center h-[60px]">
                <!-- Logo -->
                <div>
                    <img src="{{ url('/images/viscareo-logo1.svg') }}" alt="Logo">
                </div>
                <!-- End Logo -->
                <!-- Navigation Links -->
                <ul class="absolute bg-yellow-500 w-full h-screen  top-20 right-0 -left-80">
                    <li class="block h-[46px] text-center text-base text-gray-800 font-semibold mt-5"><a href="#" class="block">Home</a></li>
                    <li class="block h-[46px] text-center text-base text-gray-800 font-semibold"><a href="#" class="block">About Us</a></li>
                    <li class="block h-[46px] text-center text-base text-gray-800 font-semibold"><a href="#" class="block">Doctors</a></li>
                    <li class="block h-[46px] text-center text-base text-gray-800 font-semibold"><a href="#blog">Blog</a></li>
                    <li class="block h-[46px] text-center text-base text-gray-800 font-semibold"><a href="#" class="block">Contact Us</a></li>
                    <li class="flex justify-center items-center h-[46px] text-center text-base text-gray-800 font-normal"><a href="#" class="block w-44 text-white bg-red-800 py-3 rounded">Appointment</a></li>
                </ul>
                <!-- End Navigation Links -->
                <!-- Hamburger Menu and Clone btn for Small Devices -->
                <div class="bg-gray-50 shadow-2xl w-10 h-10 flex justify-center items-center border border-gray-50">
                    <i class="fa-solid fa-bars block text-3xl"></i>
                    <i class="fa-solid fa-xmark hidden text-3xl"></i>
                </div>
                <!-- End Hamburger Menu and Clone btn for Small Devices -->
            </nav>
            <!-- End Navigation -->
            
        </div>
    </header>
    <!-- End Header Section -->

    <!-- Footer -->
    {{-- <footer>
        <div>
            <!-- Footer upper -->
            <div>
                <!-- First column -->
                <div>
                    <!-- Logo footer -->
                    <div>
                        <img src="" alt="">
                    </div>
                    <!-- End Logo footer -->
                    <div>
                        <p>
                            Lorem Ipsum is simply dummy text of the
                            printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                            text ever since the 1500s.
                        </p>
                    </div>
                    <!-- company Contact footer -->
                    <div>
                        <div>
                            <span><i class="fa-solid fa-phone"></i></span>
                            <span>+1 (201) 555-0123</span>
                        </div>
                        <div>
                            <span><i class="fa-solid fa-envelope"></i></span>
                            <span>info@viscareo.com</span>
                        </div>
                        <div>
                            <span><i class="fa-solid fa-location-dot"></i></span>
                            <span>Flat 25, King Street, California.</span>
                        </div>
                    </div>
                    <!-- company Contact footer -->
                    <!-- Icons footer -->
                    <div>
                        <span><i class="fa-brands fa-facebook"></i></span>
                        <span><i class="fa-brands fa-x-twitter"></i></span>
                        <span><i class="fa-brands fa-linkedin"></i></span>
                        <span><i class="fa-brands fa-youtube"></i></span>
                        <span><i class="fa-brands fa-youtube"></i></span>
                    </div>
                    <!-- End Icons Footer -->
                </div>
                <!-- End First column -->
                <!-- Departments -->
                <div>
                    <!-- Logo footer -->
                    <div>
                        <img src="" alt="">
                    </div>
                    <!-- End Logo footer -->
                    <div>
                        <span><a href="#">Blood Test Department</a></span>
                        <span><a href="#">Blood Test Department</a></span>
                        <span><a href="#">Blood Test Department</a></span>
                        <span><a href="#">Blood Test Department</a></span>
                        <span><a href="#">Blood Test Department</a></span>
                        <span><a href="#">Blood Test Department</a></span>
                        <span><a href="#">Blood Test Department</a></span>
                        <span><a href="#">Blood Test Department</a></span>
                        <span><a href="#">Blood Test Department</a></span>
                    </div>
                </div>
                <!-- End Departments -->
                <!-- Opening Hours -->
                <div>
                    <!-- Logo footer -->
                    <div>
                        <img src="" alt="">
                    </div>
                    <!-- End Logo footer -->
                    <div>
                        <span><i class="fa-solid fa-check"></i><small>Mon: 9:00 AM - 9:00 PM</small></span>
                        <span><i class="fa-solid fa-check"></i><small>Mon: 9:00 AM - 9:00 PM</small></span>
                        <span><i class="fa-solid fa-check"></i><small>Mon: 9:00 AM - 9:00 PM</small></span>
                        <span><i class="fa-solid fa-check"></i><small>Mon: 9:00 AM - 9:00 PM</small></span>
                        <span><i class="fa-solid fa-check"></i><small>Mon: 9:00 AM - 9:00 PM</small></span>
                        <span><i class="fa-solid fa-check"></i><small>Mon: 9:00 AM - 9:00 PM</small></span>
                        <span><i class="fa-solid fa-check"></i><small>Mon: 9:00 AM - 9:00 PM</small></span>
                    </div>
                </div>
                <!-- End Opening Hours -->
            </div>
            <!-- End Footer upper -->
            <!-- Footer bottom -->
            <div>
                <!-- Copyright -->
                <div>
                    <span>2023 Viscareo All Rights Reserved by Webizycode</span>
                </div>
                <!-- End Copyright -->
                <!-- More Links -->
                <div>
                    <span><a href="#">Terms & Conditions</a></span>
                    <span><a href="#">Privacy Policy</a></span>
                    <span><a href="#">Chat & Support</a></span>
                </div>
                <!-- End More Links -->
            </div>
            <!-- End Footer bottom -->
        </div>
    </footer> --}}
    <!-- End Footer -->
</body>
</html>