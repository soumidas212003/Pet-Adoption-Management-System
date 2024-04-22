@extends('Layout')

@section('title_nm','Pet Donor::My Profile')

@section('Navbar')
@include('Pet-Donors.NAV.AuthNav')

@section('Main')
<div id="dropdown-content" class="hidden flex flex-col items-center justify-between absolute z-auto right-0 mt-0 w-48 bg-white rounded-md shadow-lg space-y-4">
    <div class="part-1 flex flex-row items-center justify-between space-x-4">
      <img src="{{asset('Images/profile.png')}}" alt="" class="h-6 w-6">
      <a href="{{route('my-profile')}}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200 text-sm font-bold">My Profile</a>
    </div>
    <div class="part-1 flex flex-row items-center justify-between">
      <img src="{{asset('Images/my-pets.png')}}" alt="" class="h-6 w-6">
      <a href="{{ route('donor-pets') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200 text-sm font-bold ml-8">My Pets</a>
    </div>
    <div class="part-1 flex flex-row items-center justify-between">
      <img src="{{asset('Images/address.png')}}" alt="" class="h-6 w-6">
      <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200 text-sm font-bold ml-1">My Address</a>
    </div>
    <div class="part-1 flex flex-row items-center justify-between">
      <img src="{{asset('Images/history.png')}}" alt="" class="h-6 w-6">
      <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200 text-sm font-bold ml-1">My History</a>
    </div>
    <div class="part-1 flex flex-row items-center justify-between">
      <img src="{{asset('Images/logout.png')}}" alt="" class="h-6 w-6">
      <a href="{{route('donor-logout')}}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200 text-sm font-bold ml-[1.5rem]">Logout</a>
    </div>
</div>
<h1 class="text-2xl font-bold text-[#515279] text-center mt-5">Your Profile</h1>

<div class="flex justify-center items-start mt-8 mb-7">
  <div class="bg-white shadow appearance-none border rounded h-96 w-72 md:w-[40rem] lg:w-[80rem] relative flex flex-col items-center justify-center">
      <button class="absolute top-0 right-0 mt-4 mr-4 border rounded-full bg-white text-orange-600 border-orange-600 w-32 md:w-52 md:text-lg">
          <a href="{{route('editprofile-view')}}">Edit Profile</a>
      </button>
      <img src="/storage/{{Auth::guard('donor')->user()->image}}" alt="" class="h-10 w-10 md:h-20 md:w-20 border rounded-full border-black absolute top-0 left-0 mt-4 ml-4">
      <div class="flex flex-col justify-evenly space-y-5 md:space-x-96 md:flex-row">
        <div class="flex flex-col">
          <p class="text-sm text-[#515252] font-bold">Full Name</p>
          <p class="text-lg font-bold">{{Auth::guard('donor')->user()->full_name}}</p>
        </div>
        <div class="flex flex-col">
          <p class="text-sm text-[#515252] font-bold">State</p>
          <p class="text-lg font-bold">{{Auth::guard('donor')->user()->state}}</p>
        </div>
      </div>
      <div class="flex flex-col justify-evenly space-y-5 md:space-x-80 md:flex-row mt-8">
        <div class="flex flex-col">
          <p class="text-sm text-[#515252] font-bold">Email Address</p>
          <p class="text-lg font-bold">{{Auth::guard('donor')->user()->email}}</p>
        </div>
        <div class="flex flex-col">
          <p class="text-sm text-[#515252] font-bold">Contact No</p>
          <p class="text-lg font-bold">{{Auth::guard('donor')->user()->mobile_no}}</p>
        </div>
      </div>
  </div>
</div>



@section('footer')
@include('Navbar And Footer.footer')

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

