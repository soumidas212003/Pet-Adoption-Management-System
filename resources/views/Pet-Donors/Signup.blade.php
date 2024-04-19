@extends('Layout')
@section('title_nm',"Create Account::Pet Donors")
@section('Navbar')
@include('Navbar And Footer.navbar')
@section('Main')

<div class="flex items-center justify-center mt-20 mb-8">
    <div class="flex flex-row-reverse items-center">
        <img src="{{ asset('Images/DONOR SIGNUP PIC.jpg') }}" alt="Login Image" class="md:block md:h-[28rem] md:w-80 hidden">
        <div class="ml-0 bg-white shadow appearance-none border rounded md:h-[28rem] md:w-80 h-72 w-72 flex items-center justify-center flex-col">
            <!-- Your form code here -->
            <form action="#" method="POST">
                <!-- Form fields go here -->
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Full Name:</label>
                    <input type="text" id="name" name="f_name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email Address:</label>
                    <input type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-gray-700 text-sm font-bold mb-2">Phone Number:</label>
                    <input type="number" id="p_no" name="p_no" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <button type="submit" class="bg-orange-600 hover:bg-orange-400 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Get OTP</button>
            </form>

            <p class="text-sm font-bold mt-7">ALREADY HAVE AN ACCOUNT? <a href="{{route('donor-login')}}" class="text-blue-600">SIGN IN.</a></p>
        </div>
    </div>
</div>
@section('script')
<script>
    document.addEventListener('DOMContentLoaded', function () {
    const hamburgerMenu = document.getElementById('hamburger-menu');
    const menuOverlay = document.getElementById('menu-overlay');
    const closeMenuButton = document.getElementById('close-menu');

    hamburgerMenu.addEventListener('click', function () {
        menuOverlay.classList.remove('hidden');
    });

    closeMenuButton.addEventListener('click', function () {
        menuOverlay.classList.add('hidden');
    });
    });
</script>
@section('footer')
@include('Navbar And Footer.footer')