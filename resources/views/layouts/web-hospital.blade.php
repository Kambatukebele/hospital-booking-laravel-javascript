<!DOCTYPE html>
<html lang="en">
<x-head />
<body class="font-poppins">
    <!--Announcement bar -->
    <x-announcement />
    <!--Announcement bar -->
    <!-- Header Section -->
    <x-header />
    <!-- End Header Section -->
    {{ $slot }}
    <!-- Footer -->
    <x-footer/>
    <!-- End Footer bottom -->
    <!-- End Footer -->
    <script src="{{ url('/assets/js/main.js') }}"></script>
</body>
</html>