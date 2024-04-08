@extends('Layout')

@section('title_nm','Adopt Dogesh')

@section('Navbar')
@include('Navbar And Footer.navbar')

@section('Main')
<h1 class="text-center text-[#515252] text-4xl font-bold">Adopt Dogesh</h1>
  <div class="part-1 flex flex-col items-start justify-between px-5 py-5 space-y-5 lg:px-96">
    <p class="text-blue-600 font-bold lg:text-lg"><a href="{{route('Avliable_Dogs_Cats')}}">< Back To Results</a></p>
    <p class="text-[#515252] text-lg font-bold lg:text-2xl">Heya !!! My Name Is Mr. Dogesh</p>
  </div>
  <div class="part-2 flex items-center justify-center">
    <img src="{{asset('Images/memedog.jpg')}}" alt="" class="h-50 w-50 mx-auto lg:h-80 lg:w-80">
    </div>
    <div class="part-3 flex flex-col items-start justify-center py-8 px-5 lg:px-96">
        <h1 class="text-[#515252] text-lg font-bold mb-5 lg:text-2xl">Facts About Me</h1>
        <table>
            <tbody >
                <tr>
                    <td class="pr-20 text-[#515252] font-bold text-lg lg:text-xl">Breed</td>
                    <td class="lg:text-xl">Indian Street Dog</td>
                </tr>
                <tr>
                    <td class="pr-20 text-[#515252] font-bold text-lg lg:text-xl">Vaccinated</td>
                    <td class="lg:text-xl">Yes</td>
                </tr>
                <tr>
                    <td class="pr-20 text-[#515252] font-bold text-lg lg:text-xl">Gender</td>
                    <td class="lg:text-xl">Male</td>
                </tr>
                <tr>
                    <td class="pr-20 text-[#515252] font-bold text-lg lg:text-xl">Age</td>
                    <td class="lg:text-xl">Adulthood</td>
                </tr>
                <tr>
                    <td class="pr-20 text-[#515252] font-bold text-lg lg:text-xl">Pet Id</td>
                    <td class="lg:text-xl">PETD123</td>
                </tr>
            </tbody>
        </table>
        <hr class="border border-b border-black w-full mt-4">
        <h1 class="text-[#515252] text-lg font-bold pt-5 py-8">My Info</h1>
        <table>
        <tbody >
            <tr>
                <td class="pr-20"><img src="{{asset('Images/green tik.png')}}" alt="" class="h-10 w-14"></td>
                <td class="lg:text-xl">Spayed</td>
            </tr>
            <tr>
                <td class="pr-20 text-[#515252] font-bold text-lg"><img src="{{asset('Images/green tik.png')}}" alt="" class="h-10 w-14"></td>
                <td class="lg:text-xl">Shots Up To Date</td>
            </tr>
            <tr>
                <td class="pr-20 text-[#515252] font-bold text-lg"><img src="{{asset('Images/green tik.png')}}" alt="" class="h-10 w-14"></td>
                <td class="lg:text-xl">Needs Loving Adoptor</td>
            </tr>
            <tr>
                <td class="pr-20 text-[#515252] font-bold text-lg"><img src="{{asset('Images/yello exclaim.jpg')}}" alt="" class="h-10 w-14"></td>
                <td class="lg:text-xl">Not Good With Cats</td>
            </tr>
            <tr>
                <td class="pr-20 text-[#515252] font-bold text-lg"><img src="{{asset('Images/green tik.png')}}" alt="" class="h-10 w-14"></td>
                <td class="lg:text-xl">Good With Dogs</td>
            </tr>
        </tbody>
    </table>
    <hr class="border border-b border-black w-full mt-4">
    <h1 class="text-[#515252] text-lg font-bold pt-5 py-8">My Story</h1>
        <div class="social flex flex-row items-start justify-between space-x-8">
            <p><a href=""><img src="{{asset('Images/facebook.jpg')}}" alt="" class="border rounded-3xl h-10 w-10"></a></p>
            <p><a href=""><img src="{{asset('Images/linkedin2.png')}}" alt="" class="border rounded-3xl h-10 w-10"></a></p>
        </div>
        <p class="pt-5 text-lg text-[#515252]">They are 2 female fully vaccinated dogs. Friendly and very active. We will also pay for them being neutered but right now we can’t take care of them as one family member got diagnosed with cancer.</p>

        <div class="contact flex flex-col items-start justify-between bg-[#f9f9f9] px-5 mt-5 space-y-5">
            <p class="text-red-500 text-sm font-bold py-5">*The Furever Family Finder does not ask for money for any adoption listed on website.</p>
            <p class="text-red-500 text-sm font-bold">*Please do not make any payment for transportation, vaccination etc of pet in advance.</p>
            <p class="text-red-500 text-sm font-bold">*Only make any payment upon arrival of the pet at your location.</p>
            <p class="text-red-500 text-sm font-bold">*Please report to ThePetNest Support Team if anyone asks for money before making any payment.</p>

            <button class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-6 rounded-full mt-2">
                <a href="{{route('questions')}}">Adopt Dogesh</a>
            </button>
            
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


