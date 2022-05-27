<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student chat</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="./tailwind3.js"></script> 
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;800&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
</head>
<body>
    <nav class="block justify-left bg-indigo-100 p-6">
        <div class=" text-black mr-6">
            <h1 class="font-medium leading-tight text-4xl mt-0 mb-2 ">S<span class="text-purple-700">O</span>FTMONKS
            </h1>
            <h3 class="font-low leading-tight text-l mt-0 mb-2">Next Gen interactive Conferencing Interface</h3>
        </div>
    </nav>
    <x-app-layout>
        
    </x-app-layout>
    <section>
        <div x-cloak x-data="sidebar()" class="relative flex items-start ">
            <div class="static transition-all duration-300">
                <div class="flex justify-end">
                    <button @click="sidebarOpen = !sidebarOpen" :class="{'hover:bg-indigo-200': !sidebarOpen, 'hover:bg-white': sidebarOpen}" class="transition-all duration-300 w-8 p-1  focus:outline-none">
                        <svg viewBox="0 0 20 20" class="w-6 h-6 fill-current" :class="{'text-gray-600': !sidebarOpen,  'text-black': sidebarOpen}">
                            <path x-show="!sidebarOpen" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                            <path x-show="sidebarOpen" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>


                    <div x-cloak wire:ignore :class="{'w-56': sidebarOpen, 'w-0': !sidebarOpen}" class="  z-30  space-y-6 h-screen min-h-screen  block w-56   text-black transition-all duration-300 ease-in-out bg-indigo-200 shadow-light-50 overflow-x-hidden">
                        <!--w-64 space-y-6 py-7 px-2 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out-->
                        <div class="flex flex-col items-stretch justify-between h-full">
                            <div class="flex flex-col flex-shrink-0 w-full">
                                <div class="flex items-center justify-center px-8 py-5 text-center">
                                </div>
                                <nav>
                                    <div class="flex-grow md:block md:overflow-y-auto overflow-x-hidden" :class="{'opacity-1': sidebarOpen, 'opacity-0': !sidebarOpen}">
                                        <a class="flex items-center px-4 py-3 hover:bg-gray-800 focus:bg-gray-800 hover:text-white hover:fill-white focus:outline-none focus:ring" href="shome">
                                            <i class="fa-solid fa-house"></i>
                                            <span class="mx-4 font-medium">Home</span>
                                        </a> <a class="flex items-center px-4 py-3 bg-gray-800 focus:bg-gray-800 text-white hover:fill-white focus:outline-none focus:ring" href="schat">
                                            <i class="fa-solid fa-comments"></i>
                                            <span class="mx-4 font font-medium">Discussion Forum</span>
                                        </a>
                                        <a class="flex items-center px-4 py-3 hover:bg-gray-800 focus:bg-gray-800 hover:text-white hover:fill-white focus:outline-none focus:ring" href="smeet">
                                            <i class="fa-solid fa-video"></i>
                                            <span class="mx-4 font font-medium">Virtual Meeting</span>
                                        </a>
                                        <a class="flex items-center px-4 py-3 hover:bg-gray-800 focus:bg-gray-800 hover:text-white hover:fill-white focus:outline-none focus:ring" href="sboard">
                                            <i class="fa-solid fa-chalkboard-user"></i>
                                            <span class="mx-4 font-medium">White Board</span>
                                        </a>
                                        <a class="flex items-center px-4 py-3 hover:bg-gray-800 focus:bg-gray-800 hover:text-white hover:fill-white  focus:outline-none  focus:ring" href="sclassroom">
                                            <i class="fa-solid fa-book"></i>
                                            <span class="mx-4 font-medium">Classroom</span>
                                        </a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <script>
                        function sidebar() {
                            return {
                                sidebarOpen: true,
                                sidebarProductMenuOpen: false,
                                openSidebar() {
                                    this.sidebarOpen = true
                                },
                                closeSidebar() {
                                    this.sidebarOpen = false
                                },
                                sidebarProductMenu() {
                                    if (this.sidebarProductMenuOpen === true) {
                                        this.sidebarProductMenuOpen = false
                                        window.localStorage.setItem('sidebarProductMenuOpen', 'close');
                                    } else {
                                        this.sidebarProductMenuOpen = true
                                        window.localStorage.setItem('sidebarProductMenuOpen', 'open');
                                    }
                                },
                                checkSidebarProductMenu() {
                                    if (window.localStorage.getItem('sidebarProductMenuOpen')) {
                                        if (window.localStorage.getItem('sidebarProductMenuOpen') === 'open') {
                                            this.sidebarProductMenuOpen = true
                                        } else {
                                            this.sidebarProductMenuOpen = false
                                            window.localStorage.setItem('sidebarProductMenuOpen', 'close');
                                        }
                                    }
                                },
                            }
                        }
                    </script>
                    <div class="flex-1 p-10 text-2xl font-bold">
                        content goes here
                    </div>
                </div>
            </div>
        </div>
        <footer class="bg-indigo-100 text-center lg:text-left  inset-x-0 bottom-0">
            <div class="text-gray-700 text-center p-4">
                © 2021 Copyright:
                <a class="text-gray-800" href="https://www.softmonks.com/">SOFTMONKS (OPC) PVT. LTD.</a>
            </div>
        </footer>
</body>
</html>