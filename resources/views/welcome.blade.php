<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="{{ asset('/favicon.ico') }}">
    <link rel="stylesheet" href="dist/styles.css" />
    <script src="dist/script.js"></script>
</head>

<body>
    <!-- Navigation -->
    <nav class="fixed flex justify-between py-6 w-full lg:px-48 md:px-12 px-4 content-center bg-secondary z-10">
        <div class="flex items-center">
            <img src='dist/assets/Logo_black.svg' alt="Logo" class="h-4" />
        </div>
        <ul class="font-montserrat items-center hidden md:flex">
            <li class="mx-3 ">
                <a class="growing-underline" href="#howitworks">
                    How It Works?
                </a>
            </li>
            <li class="growing-underline mx-3">
                <a href="#whyiot">Why IoT?</a>
            </li>
            <li class="growing-underline mx-3">
                <a href="#about">About</a>
            </li>
        </ul>

        @if (Route::has('login'))
            <div class="font-montserrat hidden md:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="py-2 px-4 text-white bg-black rounded-3xl">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="mr-6">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="py-2 px-4 text-white bg-black rounded-3xl">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        {{-- <div class="font-montserrat hidden md:block">
            <button class="mr-6">Login</button>
            <button class="py-2 px-4 text-white bg-black rounded-3xl">
                Signup
            </button>
        </div> --}}
        <div id="showMenu" class="md:hidden">
            <img src='dist/assets/logos/Menu.svg' alt="Menu icon" />
        </div>
    </nav>
    <div id='mobileNav'
        class="hidden px-4 py-6 fixed top-0 left-0 h-full w-full bg-secondary z-20 animate-fade-in-down">
        <div id="hideMenu" class="flex justify-end">
            <img src='dist/assets/logos/Cross.svg' alt="" class="h-16 w-16" />
        </div>
        <ul class="font-montserrat flex flex-col mx-8 my-24 items-center text-3xl">
            <li class="my-6">
                <a href="#howitworks">How It Works?</a>
            </li>
            <li class="my-6">
                <a href="#whyiot">Why IoT?</a>
            </li>
            <li class="my-6">
                <a href="#about">About</a>
            </li>
        </ul>
    </div>

    <!-- Hero -->
    <section
        class="pt-24 md:mt-0 md:h-screen flex flex-col justify-center text-center md:text-left md:flex-row md:justify-between md:items-center lg:px-48 md:px-12 px-4 bg-secondary">
        <div class="md:flex-1 md:mr-10">
            <h1 class="font-pt-serif text-5xl font-bold mb-7">
                A Design Makes
                <span class="bg-underline1 bg-left-bottom bg-no-repeat pb-2 bg-100%">
                    Work Easy
                </span>
            </h1>
            <p class="font-pt-serif font-normal mb-7">
                Simplify your work with the TerMoSys Automation (Integrated Monitoring System)
                which is connected to IoT and wireless sensor network.
            </p>



            <div class="flex justify-center items-center">

                @if (Route::has('login'))
                    <div class="font-montserrat hidden md:block">
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="ml-2 px-4 py-2 border border-gray-800 bg-black text-white   hover:text-black hover:bg-white text-sm font-medium rounded-md">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}"
                                class="mr-2 px-4 py-2 border border-gray-800 bg-transparent  text-black hover:text-white hover:bg-black text-sm font-medium rounded-md">Log
                                in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="ml-2 px-4 py-2 border border-gray-800 bg-black text-white   hover:text-black hover:bg-white text-sm font-medium rounded-md">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif

                {{-- <button
                    class="mr-2 px-4 py-2 border border-gray-800 bg-transparent  text-black hover:text-white hover:bg-black text-sm font-medium rounded-md">
                    Login
                </button>

                <button
                    class="ml-2 px-4 py-2 border border-gray-800 bg-black text-white   hover:text-black hover:bg-white text-sm font-medium rounded-md">
                    Register
                </button> --}}
            </div>
        </div>

        <div class="flex justify-around md:block mt-8 md:mt-0 md:flex-1">
            <div class="relative">
                <img src='dist/assets/Highlight1.svg' alt="" class="absolute -top-16 -left-10" />
            </div>
            <img src='dist/assets/MacBook Pro.png' alt="Macbook" />
            <div class="relative">
                <img src='dist/assets/Highlight2.svg' alt="" class="absolute -bottom-10 -right-6" />
            </div>
        </div>

    </section>

    <!-- How It Works -->
    <section id="howitworks" class="bg-black text-white sectionSize">
        <div>
            <h2 class="secondaryTitle bg-underline2 bg-100% mt-8">How It Works?</h2>
        </div>
        <div class="flex flex-col md:flex-row">
            <div class="flex-1 mx-8 flex flex-col items-center my-4">
                <div
                    class="border-2 rounded-full bg-secondary text-black h-12 w-12 flex justify-center items-center mb-3">
                    1
                </div>
                <h3 class="font-montserrat font-medium text-xl mb-2">Things</h3>
                <p class="text-center font-montserrat">
                    Is a component consisting of IoT devices and sensors.
                </p>
            </div>
            <div class="flex-1 mx-8 flex flex-col items-center my-4">
                <div
                    class="border-2 rounded-full bg-secondary text-black h-12 w-12 flex justify-center items-center mb-3">
                    2
                </div>
                <h3 class="font-montserrat font-medium text-xl mb-2">Gateway</h3>
                <p class="text-center font-montserrat">
                    Manage the exchange of data between computers.
                </p>
            </div>
            <div class="flex-1 mx-8 flex flex-col items-center my-4">
                <div
                    class="border-2 rounded-full bg-secondary text-black h-12 w-12 flex justify-center items-center mb-3">
                    3
                </div>
                <h3 class="font-montserrat font-medium text-xl mb-2">Cloud</h3>
                <p class="text-center font-montserrat">
                    Is a server that stores our data.
                </p>
            </div>
            <div class="flex-1 mx-8 flex flex-col items-center my-4">
                <div
                    class="border-2 rounded-full bg-secondary text-black h-12 w-12 flex justify-center items-center mb-3">
                    4
                </div>
                <h3 class="font-montserrat font-medium text-xl mb-2">Analytics</h3>
                <p class="text-center font-montserrat">
                    Manage existing data centers to get conclusions.
                </p>
            </div>
            <div class="flex-1 mx-8 flex flex-col items-center my-4">
                <div
                    class="border-2 rounded-full bg-secondary text-black h-12 w-12 flex justify-center items-center mb-3">
                    5
                </div>
                <h3 class="font-montserrat font-medium text-xl mb-2">GUI</h3>
                <p class="text-center font-montserrat">
                    Allows humans to interact through graphical displays.
                </p>
            </div>
        </div>
    </section>

    <!-- Why IoT -->
    <section id="whyiot" class="sectionSize bg-secondary">
        <div>
            <h2 class="secondaryTitle bg-underline3 bg-100% mt-8">Why IoT?</h2>
        </div>
        <div class="md:grid md:grid-cols-2 md:grid-rows-2">

            <div class="flex items-start font-montserrat my-6 mr-10">
                <img src='dist/assets/logos/Heart.svg' alt='' class="h-7 mr-4" />
                <div>
                    <h3 class="font-semibold text-2xl">Reason #1</h3>
                    <p>
                        Internet of Things (IoT) devices will be connected to each other and
                        communicate directly so that electricity usage becomes efficient and
                        there will be no unnecessary use of electrical equipment.
                    </p>
                </div>
            </div>

            <div class="flex items-start font-montserrat my-6 mr-10">
                <img src='dist/assets/logos/Heart.svg' alt='' class="h-7 mr-4" />
                <div>
                    <h3 class="font-semibold text-2xl">Reason #2</h3>
                    <p>
                        Internet of Things (IoT) devices interact and communicate with each
                        other in many ways to assist human tasks. This will certainly help
                        minimize human effort because the Internet of Things (IoT) performs
                        various tasks without the need for human intervention.
                    </p>
                </div>
            </div>

            <div class="flex items-start font-montserrat my-6 mr-10">
                <img src='dist/assets/logos/Heart.svg' alt='' class="h-7 mr-4" />
                <div>
                    <h3 class="font-semibold text-2xl">Reason #3</h3>
                    <p>
                        Nowadays, you can easily access various necessary information and control
                        your device remotely in real-time from any location you are as long as
                        you have a smartphone and an internet connection.
                    </p>
                </div>
            </div>

            <div class="flex items-start font-montserrat my-6 mr-10">
                <img src='dist/assets/logos/Heart.svg' alt='' class="h-7 mr-4" />
                <div>
                    <h3 class="font-semibold text-2xl">Reason #4</h3>
                    <p>
                        Overall, the Internet of Things (IoT) is a great time-saving tool.
                        Internet of Things (IoT) applications allow you to have a personal virtual
                        assistant that can remind you of your daily tasks, so you can create better
                        time management.
                    </p>
                </div>
            </div>

        </div>
    </section>

    <!-- About -->
    <section id="about" class="sectionSize bg-secondary py-0">
        <div>
            <h2 class="secondaryTitle bg-underline4 mb-0 bg-100% mt-20">About</h2>
        </div>
        <div class="flex w-full flex-col md:flex-row">

            <div
                class='flex-1 flex flex-col mx-6 shadow-2xl relative bg-secondary rounded-2xl py-5 px-8 my-8 md:top-24'>
                <h3 class="font-pt-serif font-normal text-2xl mb-4">
                    The Good
                </h3>
                <div class="font-montserrat font-bold text-2xl mb-4">
                    $25
                    <span class="font-normal text-base"> / month</span>
                </div>

                <div class="flex">
                    <img src='dist/assets/logos/CheckedBox.svg' alt="" class="mr-1" />
                    <p>Benefit #1</p>
                </div>
                <div class="flex">
                    <img src='dist/assets/logos/CheckedBox.svg' alt="" class="mr-1" />
                    <p>Benefit #2</p>
                </div>
                <div class="flex">
                    <img src='dist/assets/logos/CheckedBox.svg' alt="" class="mr-1" />
                    <p>Benefit #3</p>
                </div>

                <button class=" border-2 border-solid border-black rounded-xl text-lg py-3 mt-4">
                    Choose plan
                </button>
            </div>

            <div
                class='flex-1 flex flex-col mx-6 shadow-2xl relative bg-secondary rounded-2xl py-5 px-8 my-8 md:top-12'>
                <h3 class="font-pt-serif font-normal text-2xl mb-4">
                    The Bad
                </h3>
                <div class="font-montserrat font-bold text-2xl mb-4">
                    $40
                    <span class="font-normal text-base"> / month</span>
                </div>

                <div class="flex">
                    <img src='dist/assets/logos/CheckedBox.svg' alt="" class="mr-1" />
                    <p>Benefit #1</p>
                </div>
                <div class="flex">
                    <img src='dist/assets/logos/CheckedBox.svg' alt="" class="mr-1" />
                    <p>Benefit #2</p>
                </div>
                <div class="flex">
                    <img src='dist/assets/logos/CheckedBox.svg' alt="" class="mr-1" />
                    <p>Benefit #3</p>
                </div>

                <button class=" border-2 border-solid border-black rounded-xl text-lg py-3 mt-4">
                    Choose plan
                </button>
            </div>

            <div
                class='flex-1 flex flex-col mx-6 shadow-2xl relative bg-secondary rounded-2xl py-5 px-8 my-8 md:top-24'>
                <h3 class="font-pt-serif font-normal text-2xl mb-4">
                    The Ugly
                </h3>
                <div class="font-montserrat font-bold text-2xl mb-4">
                    $50
                    <span class="font-normal text-base"> / month</span>
                </div>

                <div class="flex">
                    <img src='dist/assets/logos/CheckedBox.svg' alt="" class="mr-1" />
                    <p>Benefit #1</p>
                </div>
                <div class="flex">
                    <img src='dist/assets/logos/CheckedBox.svg' alt="" class="mr-1" />
                    <p>Benefit #2</p>
                </div>
                <div class="flex">
                    <img src='dist/assets/logos/CheckedBox.svg' alt="" class="mr-1" />
                    <p>Benefit #3</p>
                </div>

                <button class=" border-2 border-solid border-black rounded-xl text-lg py-3 mt-4">
                    Choose plan
                </button>
            </div>

        </div>
    </section>

    <!-- FAQ  -->
    <section class="sectionSize items-start pt-8 md:pt-36 bg-black text-white">
        <div>
            <h2 class="secondaryTitle bg-highlight3 p-10 mb-0 bg-center bg-100%">
                FAQ
            </h2>
        </div>

        <div toggleElement class="w-full py-4">
            <div class="flex justify-between items-center">
                <div question class="font-montserrat font-medium mr-auto">
                    Where can I get this HTML template?
                </div>
                <img src='dist/assets/logos/CaretRight.svg' alt="" class="transform transition-transform" />
            </div>
            <div answer class="font-montserrat text-sm font-extralight pb-8 hidden">
                You can download it on Gumroad.com
            </div>
        </div>
        <hr class="w-full bg-white" />

        <div toggleElement class="w-full py-4">
            <div class="flex justify-between items-center">
                <div question class="font-montserrat font-medium mr-auto">
                    Is this HTML template free?
                </div>
                <img src='dist/assets/logos/CaretRight.svg' alt="" class="transform transition-transform" />
            </div>
            <div answer class="font-montserrat text-sm font-extralight pb-8 hidden">
                Yes! For you it is free.
            </div>
        </div>
        <hr class="w-full bg-white" />

        <div toggleElement class="w-full py-4">
            <div class="flex justify-between items-center">
                <div question class="font-montserrat font-medium mr-auto">
                    Am I awesome?
                </div>
                <img src='dist/assets/logos/CaretRight.svg' alt="" class="transform transition-transform" />
            </div>
            <div answer class="font-montserrat text-sm font-extralight pb-8 hidden">
                Yes! No doubt about it.
            </div>
        </div>
        <hr class="w-full bg-white" />

    </section>

    <!-- Footer -->
    <section class="bg-black sectionSize">
        <div class="mb-4">
            <img src='dist/assets/Logo_white.svg' alt="Logo" class="h-4" />
        </div>
        <div class="flex mb-8">
            <a href="#">
                <img src='dist/assets/logos/Facebook.svg' alt="Facebook logo" class="mx-4" />
            </a>
            <a href="#">
                <img src='dist/assets/logos/Youtube.svg' alt="Youtube logo" class="mx-4" />
            </a>
            <a href="#">
                <img src='dist/assets/logos/Instagram.svg' alt="Instagram logo" class="mx-4" />
            </a>
            <a href="#">
                <img src='dist/assets/logos/Twitter.svg' alt="Twitter logo" class="mx-4" />
            </a>
        </div>
        <div class="text-white font-montserrat text-sm">
            © 2021 STARTUP. All rights reserved
        </div>
    </section>
</body>

</html>
