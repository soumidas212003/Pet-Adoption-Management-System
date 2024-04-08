@extends('Layout')

@section('title_nm','Dogs And Cats Who Are Avliable For Adoption')

@section('Navbar')
@include('Navbar And Footer.navbar')

@section('Main')
<h1 class="text-center font-extrabold text text-[#515252] text-3xl mt-4">Dogs Available For Adoption</h1>
<div class="hero mt-5 lg:flex lg:justify-between  lg:flex-row-reverse">
    <div id="loader"
        class="fixed top-0 left-0 w-full hidden h-full flex justify-center items-center bg-white bg-opacity-80 z-50 ">
        <!-- Add your loader GIF image here -->
        <img src="{{asset('Images/tpn-loading-icon.gif')}}" alt="Loading..." class="w-80 h-80">
    </div>
    <div id="heroContent"
        class="inside-hero flex flex-col justify-between items-center px-6 py-6 space-y-6 lg:flex-row lg:space-y-0 lg:grid lg:grid-cols-3">

        <div
            class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 lg:mx-4 lg:my-4">
            <a href="{{route('pet_details')}}">
                <img class="rounded-t-lg w-full" src="{{asset('Images/memedog.jpg')}}" alt="" class="h-40 w-40">
            </a>
            <div class="p-6">
                <a href="{{route('pet_details')}}">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Mr Dogesh</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Male,Adulthood <br>Hooghly</p>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 flex flex-col items-start">
                    Owner Details
                <p class=" text-gray-700 dark:text-gray-400">
                    Owner Name:- Virat Kohli
                </p>
                <p class="mb-4 text-gray-700 dark:text-gray-400">
                    Contact:- <a href="#" class="font-bold">See</a>
                </p>
                </p>
                <a href="{{route('pet_details')}}"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>


        <div
            class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 lg:mx-4 lg:my-4">
            <a href="#">
                <img class="rounded-t-lg w-full" src="{{asset('Images/adopt-me.jpg')}}" alt="" class="h-40 w-40">
            </a>
            <div class="p-6">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Mr Dogesh</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Male,Adulthood <br>Hooghly</p>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 flex flex-col items-start">
                    Owner Details
                <p class=" text-gray-700 dark:text-gray-400">
                    Owner Name:- Virat Kohli
                </p>
                <p class="mb-4 text-gray-700 dark:text-gray-400">
                    Contact:- <a href="#" class="font-bold">See</a>
                </p>
                </p>
                <a href="#"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>

        <div
            class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 lg:mx-4 lg:my-4">
            <a href="#">
                <img class="rounded-t-lg w-full" src="{{asset('Images/adopt-me.jpg')}}" alt="" class="h-40 w-40">
            </a>
            <div class="p-6">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Mr Dogesh</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Male,Adulthood <br>Hooghly</p>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 flex flex-col items-start">
                    Owner Details
                <p class=" text-gray-700 dark:text-gray-400">
                    Owner Name:- Virat Kohli
                </p>
                <p class="mb-4 text-gray-700 dark:text-gray-400">
                    Contact:- <a href="#" class="font-bold">See</a>
                </p>
                </p>
                <a href="#"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>

        <div
            class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 lg:mx-4 lg:my-4">
            <a href="#">
                <img class="rounded-t-lg" src="{{asset('Images/adopt-me.jpg')}}" alt="" />
            </a>
            <div class="p-6">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Kalu</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Male,Adulthood <br>Hooghly</p>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 flex flex-col items-start">
                    Owner Details
                <p class=" text-gray-700 dark:text-gray-400">
                    Owner Name:- Virat Kohli
                </p>
                <p class="mb-4 text-gray-700 dark:text-gray-400">
                    Contact:- <a href="#" class="font-bold">See</a>
                </p>
                </p>
                <a href="#"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>
        <div
            class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 lg:mx-4 lg:my-4">
            <a href="#">
                <img class="rounded-t-lg" src="{{asset('Images/adopt-me.jpg')}}" alt="" />
            </a>
            <div class="p-6">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Kalu</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Male,Adulthood <br>Hooghly</p>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 flex flex-col items-start">
                    Owner Details
                <p class=" text-gray-700 dark:text-gray-400">
                    Owner Name:- Virat Kohli
                </p>
                <p class="mb-4 text-gray-700 dark:text-gray-400">
                    Contact:- <a href="#" class="font-bold">See</a>
                </p>
                </p>
                <a href="#"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div
        class="fixed bottom-0 left-0 right-0 flex justify-center items-center py-4 border border-t-4 bg-white lg:hidden">
        <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
            class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-6 rounded-full mt-2 ">Search By
            Filters</button>
    </div>

    <div
        class="part2 hidden lg:flex lg:flex-col lg:items-start  px-5 ml-5 mt-10 w-80 h-[30rem] border border-[#515252]">
        <p class="flex flex-row items-center"><img src="{{asset('Images/gog.png')}}" alt="" class="h-10 w-10">Clear
            All Filters</p>
        <form action="" class="flex flex-col space-y-5">
            <label for="Pet_Type" class="mt-5 text-[#515252] font-bold text-lg">Pet Type</label>
            <select name="pet_type" id="" class="h-9 w-60 border border-[#515252]">
                <option value="">Dog</option>
                <option value="">Cat</option>
            </select>
            <label for="search_state" class="mt-5 text-[#515252] font-bold text-lg">State</label>
            <select name="pet_type" id="" class="h-9 w-60 border border-[#515252]">
                <option value="">Andhra Pradesh</option>
                <option value="">Arunachal Pradesh</option>
                <option value="">Assam</option>
                <option value="">Bihar</option>
                <option value="">Chhattisgarh</option>
                <option value="">Goa</option>
                <option value="">Gujarat</option>
                <option value="">Haryana</option>
                <option value="">Himachal Pradesh</option>
                <option value="">Jharkhand</option>
                <option value="">Karnataka</option>
                <option value="">Kerala</option>
                <option value="">Maharashtra</option>
                <option value="">Madhya Pradesh</option>
                <option value="">Manipur</option>
                <option value="">Meghalaya</option>
                <option value="">Mizoram</option>
                <option value="">Nagaland</option>
                <option value="">Odisha</option>
                <option value="">Punjab</option>
                <option value="">Rajasthan</option>
                <option value="">Sikkim</option>
                <option value="">Tamil Nadu</option>
                <option value="">Tripura</option>
                <option value="">Telangana</option>
                <option value="">Uttar Pradesh</option>
                <option value="">Uttarakhand</option>
                <option value="">West Bengal</option>
                <option value="">Andaman & Nicobar (UT)</option>
                <option value="">Chandigarh (UT)</option>
                <option value="">Dadra & Nagar Haveli and Daman & Diu (UT)</option>
                <option value="">Delhi [National Capital Territory (NCT)]</option>
                <option value="">Jammu & Kashmir (UT)</option>
                <option value="">Ladakh (UT)</option>
                <option value="">Lakshadweep (UT)</option>
                <option value="">Puducherry (UT)</option>
            </select>
            <label for="search_state" class="mt-5 text-[#515252] font-bold text-lg">PinCode</label>
            <input type="number" class="h-9 w-60 border border-[#515252]">
            <button class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-6 rounded-full mt-2"
                type="submit">Apply Filter</button>
        </form>
    </div>
</div>
<div id="authentication-modal" class="fixed lg:hidden inset-0 flex items-center justify-center bg-black bg-opacity-50">
    <!-- Modal content -->
    <div class="bg-white rounded-lg shadow-lg max-w-md w-full p-4 md:p-5">
        <!-- Modal header -->
        <div class="flex items-center justify-between border-b p-4 md:p-5 rounded-t">
            <h3 class="text-xl font-semibold text-gray-900">
                Apply The Filter
            </h3>
            <button type="button"
                class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                data-modal-hide="authentication-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
        </div>
        <!-- Modal body -->
        <div class="p-4 md:p-5">
            <form class="space-y-4 flex flex-col items-center justify-between" action="#">
                <label for="Pet_Type" class="mt-5 text-[#515252] font-bold text-lg">Pet Type</label>
                <select name="pet_type" id="" class="h-9 w-60 border border-[#515252]">
                    <option value="">Dog</option>
                    <option value="">Cat</option>
                </select>
                <label for="search_state" class="mt-5 text-[#515252] font-bold text-lg">State</label>
                <select name="pet_type" id="" class="h-9 w-60 border border-[#515252]">
                    <option value="">Andhra Pradesh</option>
                    <option value="">Arunachal Pradesh</option>
                    <option value="">Assam</option>
                    <option value="">Bihar</option>
                    <option value="">Chhattisgarh</option>
                    <option value="">Goa</option>
                    <option value="">Gujarat</option>
                    <option value="">Haryana</option>
                    <option value="">Himachal Pradesh</option>
                    <option value="">Jharkhand</option>
                    <option value="">Karnataka</option>
                    <option value="">Kerala</option>
                    <option value="">Maharashtra</option>
                    <option value="">Madhya Pradesh</option>
                    <option value="">Manipur</option>
                    <option value="">Meghalaya</option>
                    <option value="">Mizoram</option>
                    <option value="">Nagaland</option>
                    <option value="">Odisha</option>
                    <option value="">Punjab</option>
                    <option value="">Rajasthan</option>
                    <option value="">Sikkim</option>
                    <option value="">Tamil Nadu</option>
                    <option value="">Tripura</option>
                    <option value="">Telangana</option>
                    <option value="">Uttar Pradesh</option>
                    <option value="">Uttarakhand</option>
                    <option value="">West Bengal</option>
                    <option value="">Andaman & Nicobar (UT)</option>
                    <option value="">Chandigarh (UT)</option>
                    <option value="">Dadra & Nagar Haveli and Daman & Diu (UT)</option>
                    <option value="">Delhi [National Capital Territory (NCT)]</option>
                    <option value="">Jammu & Kashmir (UT)</option>
                    <option value="">Ladakh (UT)</option>
                    <option value="">Lakshadweep (UT)</option>
                    <option value="">Puducherry (UT)</option>
                </select>
                <label for="search_state" class="mt-5 text-[#515252] font-bold text-lg">PinCode</label>
                <input type="number" class="h-9 w-60 border border-[#515252]">
                <button class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-6 rounded-full mt-2"
                    type="submit">Apply Filter</button>
            </form>
        </div>
    </div>
</div>
</div>

@section('script')
<script>
    // Get the button element
    const modalButton = document.querySelector('[data-modal-toggle="authentication-modal"]');

    // Get the modal element
    const modal = document.getElementById('authentication-modal');

    // Get the close button inside the modal
    const closeButton = modal.querySelector('[data-modal-hide="authentication-modal"]');

    // Function to open the modal
    const openModal = () => {
        modal.classList.remove('hidden');
        modal.setAttribute('aria-hidden', 'false');
        document.body.classList.add('overflow-hidden');
    };

    // Function to close the modal
    const closeModal = () => {
        modal.classList.add('hidden');
        modal.setAttribute('aria-hidden', 'true');
        document.body.classList.remove('overflow-hidden');
    };

    // Event listener to open the modal when the button is clicked
    modalButton.addEventListener('click', openModal);

    // Event listener to close the modal when the close button is clicked
    closeButton.addEventListener('click', closeModal);

    // Event listener to close the modal when clicking outside of it
    modal.addEventListener('click', (event) => {
        if (event.target === modal) {
            closeModal();
        }
    });

    // Event listener to close the modal when pressing the Escape key
    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && !modal.classList.contains('hidden')) {
            closeModal();
        }
    });
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

    document.addEventListener('DOMContentLoaded', function () {
        var loader = document.getElementById('loader');
        var heroContent = document.getElementById('heroContent');

        // Show loader when the page starts loading
        window.addEventListener('load', function () {
            loader.classList.add('hidden');
            heroContent.classList.remove('hidden');
        });

        // Hide loader when the content is fully loaded
        loader.classList.remove('hidden');
    });


</script>

@section('footer')
@include('Navbar And Footer.footer')