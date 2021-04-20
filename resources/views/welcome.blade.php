<!doctype html>
<head>
  <!-- ... --->
 <meta charset="UTF-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<body class="">
    {{-- Main  section --}}
    <section class="relative bg-gray-700">
        <div class="container mx-auto">
            <div class="flex flex-col items-center justify-center min-h-screen space-y-5">
                <h1 class="text-2xl font-bold text-center text-white md:text-4xl"> Hello, I'm <span class="text-blue-400">Kishan Patel</span>. <br> A full stack developer</h1>
                <button class="flex items-center justify-center px-6 py-4 space-x-4 font-bold text-white bg-blue-500 rounded-xl">
                    <label> My Work</label>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </button>
            </div>
        </div>

    </section>



    {{-- ABOUT ME --}}
    <section class="relative bg-white">
        <div class="container mx-auto">
            <div class="flex-col items-center justify-center min-h-screen space-y-5 md:flex">
                <h1 class="pb-20 mb-10 text-2xl font-bold text-center text-black md:text-5xl ">ABOUT ME</h1>

                <div class="relative flex flex-col items-center justify-center space-y-5 md:space-y-0 md:space-x-32 md:flex-row">
                    <x-aboutme_card title="Learner" subtitle="Quick learner and always trying to learn more
                    as technology is always changing" icon="icon.svg" />
                    <x-aboutme_card title="Responsible" subtitle="Always on time with my work and will learn all necessary requriments of the project" icon="Resonsible.svg" />
                    <x-aboutme_card title="Creative" subtitle="I like making Websites or Applications that stand out. Giving it a design that gives a wow factor when looking at it" icon="creative.svg" />
                    <x-aboutme_card title="Motivated" subtitle="I am much eager to adopt and know new technologies. I am really enthusiastic for the devloper world" icon='motivated.svg' />
                </div>

                <div class="flex flex-col md:flex-row">
                    <img src="{{asset('images/pic.png')}}" class="mx-auto mt-5 border-4 border-blue-500 rounded-full w-52 h-52 justify-self-center">
                    <div class="p-8 space-y-8 text-lg leading-relaxed text-gray-800 bg-gray-100 rounded shadow-2xl lg:w-2/3 lg:p-16">
                        <p>I'm a software engineer, currently a senior at Fairleigh Dickinson University graduating May 2021.  Located in North Bergen, NJ.  Specializing in building websites, applications and everything in between.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

      {{-- My Projects --}}
      <section class="relative bg-white">
        <div class="container mx-auto">
            <div class="flex-col items-center justify-center min-h-screen space-y-5 md:flex">
                <h1 class="pb-20 mb-10 text-2xl font-bold text-center text-black md:text-5xl">Projects</h1>

                <div class="box-content grid grid-cols-1 gap-4 p-4 mb-3 transition duration-150 ease-in-out bg-gray-500 md:grid-cols-3">

                             {{-- MovieApp --}}

                                <div x-data="{ isOpen: false }">

                             <div>
                                <button  @click="isOpen = true">

                                    <img src="{{asset('images/MovieSiteHomeScreen.png')}}" alt="MovieFinder" title="MovieFinder" class="mx-auto transition duration-150 ease-in-out justify-self-center hover:opacity-75 ">

                                </button>
                            </div>


                                        <div
                                        style="background-color: rgba(0, 0, 0, .5);"
                                        class="fixed top-0 left-0 flex items-center w-full h-full overflow-y-auto shadow-lg"
                                        x-show="isOpen"
                                    >
                                        <div class="container mx-auto overflow-y-auto rounded-lg lg:px-32">
                                            <div class="bg-gray-800 rounded">
                                                <div class="flex justify-end pt-2 pr-4">
                                                    <button
                                                        @click="isOpen = false"
                                                        @keydown.escape.window="isOpen = false"
                                                        @click.away="isOpen = false"
                                                        class="text-3xl leading-none hover:text-gray-300">&times;
                                                    </button>
                                                </div>
                                                <div class="px-8 py-8 modal-body">

                                                    <div class="relative overflow-hidden responsive-container" style="padding-top: 59.25%">
                                                        <iframe class="absolute top-0 left-0 w-full h-full responsive-iframe" src="{{asset('images/movieSiteActor.png')}}" style="border:0;"></iframe>
                                                    </div>
                                                        <br>
                                                    <span class="text-white">This site is super convient if you want to watch/browse current or upcoming movies.  You will also be able to search for your favorite Actor and get a list of the movies they starred in.  Last but not least you will also get a list of TV shows.</span><br><br>

                                                    <span class="text-blue-500"><a href="https://github.com/Kishanp12/Movie-App">View Repo!</a></span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                    {{-- Personal Site --}}

                    <div>
                        <div>
                            <img src="{{asset('images/comingsoon.png')}}" class="mx-auto transition duration-150 ease-in-out justify-self-center hover:opacity-75 ">
                        </div>

                </div>


                    {{-- SeatMap --}}
                    <div>
                        <div>
                            <img src="{{asset('images/comingsoon.png')}}" class="mx-auto transition duration-150 ease-in-out justify-self-center hover:opacity-75 ">
                        </div>

                </div>
                    {{-- Tailwind Battle --}}
                    <div>
                        <div>
                            <img src="{{asset('images/comingsoon.png')}}" class="mx-auto transition duration-150 ease-in-out justify-self-center hover:opacity-75 ">
                        </div>

                </div>
                    {{-- Tinder --}}
                    <div>
                        <div>
                            <img src="{{asset('images/comingsoon.png')}}" class="mx-auto transition duration-150 ease-in-out justify-self-center hover:opacity-75 ">
                        </div>

                </div>
                    {{-- UNited Candy --}}
                    <div>
                            <div>
                                <img src="{{asset('images/comingsoon.png')}}" class="mx-auto transition duration-150 ease-in-out justify-self-center hover:opacity-75 ">
                            </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

     {{-- Contact Me --}}
     <section class="relative bg-gray-800">
        <div class="container mx-auto">
            <div class="flex flex-col items-center justify-center min-h-screen space-y-5">
                <h1 class="mt-10 mb-20 text-2xl font-bold text-center text-white md:text-5xl">Contact</h1>

                <form class="px-3">

                        <div class="flex flex-wrap mb-6 -mx-3">
                            <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
                                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-400 uppercase" for="grid-first-name">First Name</label>
                                <input class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 focus:outline-none focus:bg-white" type="text" placeholder="Kishan">
                            </div>

                            <div class="w-full px-3 md:w-1/2">
                                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-400 uppercase">Last Name</label>
                                <input class="block w-full px-4 py-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="Patel">
                            </div>
                        </div>

                        <div class="flex mb-6 -mx-3">
                            <div class="w-full px-3">
                                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-400 uppercase">E-mail</label>
                                <input class="block w-full px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500" type="email" placeholder="Kishanpate246@gmail.com">
                            </div>
                        </div>

                        <div class="flex flex-wrap mb-6 -mx-3">
                            <div class="w-full px-3">
                                <label class="block mb-2 text-xs font-bold tracking-wide text-gray-400 uppercase">Message</label>
                                <textarea class="block w-full h-48 px-4 py-3 mb-3 leading-tight text-gray-700 bg-gray-200 border border-gray-200 rounded resize-none no-resize focus:outline-none focus:bg-white focus:border-gray-500" id="message" placeholder="Type Your Message Here! :)"></textarea>
                            </div>
                        </div>

                        <div class="flex items-center">
                                <button class="w-full px-4 py-2 font-bold text-center text-white rounded shadow md:w-auto hover:bg-blue-400 focus:shadow-outline focus:outline-none" type="button">Send</button>
                        </div>
                  </form>

            </div>
        </div>
    </section>





</body>

</html>


