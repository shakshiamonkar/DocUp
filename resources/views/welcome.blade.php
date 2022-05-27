<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Virtual learning and conferencing</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased">
        <nav class="block justify-left bg-indigo-200 p-4">
            <div class=" text-black mr-6">
                <h1 class="font-semibold leading-tight text-4xl mt-0 mb-2 ">S<span class="text-purple-700">O</span>FTMONKS
                </h1>
                <h3 class="font-low leading-tight text-l mt-0 mb-2">Next Gen interactive Conferencing Interface</h3>
            </div>   
            <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
              <div class="text-sm lg:flex-grow">
                <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:bg-white mr-4 p-2 font-bold">
                  About us
                </a>
                <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:bg-white mr-4 p-2 font-bold">
                  Contact us
                </a>
              </div>
              <div>
                <div>
                    @if (Route::has('login'))
                        <div>
                            @auth
                                <a href="{{ url('/dashboard') }}" class="inline-block text-sm font-semibold px-4 py-2 leading-none border rounded text-black border-white hover:border-transparent hover:text-white hover:bg-black mt-4 lg:mt-0">Dashboard</a>
                            @else
                            
                                <a href="{{ route('login') }}"  class="inline-block text-sm  font-semibold px-4 py-2 leading-none border rounded text-black border-white hover:border-transparent hover:text-white hover:bg-black mt-4 lg:mt-0">Log in</a>
                           
                                @if (Route::has('register'))
                               
                                    <a href="{{ route('register') }}"  class="inline-block text-sm font-semibold px-4 py-2 leading-none border rounded text-black border-white hover:border-transparent hover:text-white hover:bg-black mt-4 lg:mt-0">Register</a>
                                
        
                                @endif
                            @endauth
                        </div>
                    @endif
                   
                </div>



    
              </div>
            </div>
          </nav>
          
          <div>
                <link href="{{ asset('css/index.css') }}" rel="stylesheet" />
              
                  
                <div class="i-mac1152-i-mac1152 bg-slate-400  px-20">
                    
                        <div class="i-mac1152-stud189">
                            <img alt=" sturighthand153" src="playground_assets/sturighthand153-fh0i.svg"
                                class="i-mac1152-svg" />
                            <img alt="stutable154" src="playground_assets/stutable154-23em.svg"
                                class="i-mac1152-svg01" />
                            <img alt="laptop155" src="playground_assets/laptop155-ga0k.svg" class="i-mac1152-svg02" />
        
                            <img alt="trscreenmid156" src="playground_assets/trscreenmid156-vw2j.svg"
                                class="i-mac1152-svg04" />
                            <img alt="trheadscreen185" src="playground_assets/trheadscreen185-ix7.svg"
                                class="i-mac1152-svg03" />
                            <img alt="laptonstu157" src="playground_assets/laptonstu157-q43l.svg"
                                class="i-mac1152-svg05" />
                            <img alt="book158" src="playground_assets/book158-zdsn.svg" class="i-mac1152-svg06" />
                            <img alt="topbook159" src="playground_assets/topbook159-qe6i.svg" class="i-mac1152-svg07" />
                            <img alt="downtable1510" src="playground_assets/downtable1510-aofq.svg"
                                class="i-mac1152-svg08" />
                            <img alt="pen1511" src="playground_assets/pen1511-z3ng.svg" class="i-mac1152-svg09" />
                            <img alt="chair1512" src="playground_assets/chair1512-4tq.svg" class="i-mac1152-svg10" />
                            <img alt="stushoe21514" src="playground_assets/stushoe21514-gc7m.svg"
                                class="i-mac1152-svg11" />
                            <img alt="stulegskin1810" src="playground_assets/stulegskin1810-yu1.svg"
                                class="i-mac1152-svg12" />
                            <img alt="stushoe1517" src="playground_assets/stushoe1517-2k02.svg"
                                class="i-mac1152-svg13" />
                            <img alt="stuleg1558" src="playground_assets/stuleg1558-7jz8.svg" class="i-mac1152-svg14" />
                            <img alt="stumid1519" src="playground_assets/stumid1519-w8e9.svg" class="i-mac1152-svg15" />
                            <img src="playground_assets/stuhandleft1520-8ump.svg" alt="stuhandleft1520"
                                class="i-mac1152-image" />
                            <img src="playground_assets/stuhead1523-qbkn.svg" alt="stuhead1523"
                                class="i-mac1152-image1" />
        
                            <div class="i-mac1152-stutext1545">
                                <img alt="Vector1546" src="playground_assets/vector1546-kmad.svg"
                                    class="i-mac1152-svg16" />
                                <img alt="Vector1547" src="playground_assets/vector1547-st2.svg"
                                    class="i-mac1152-svg17" />
                                <img alt="Vector1548" src="playground_assets/vector1548-1nq.svg"
                                    class="i-mac1152-svg18" />
                                <img alt="stutextbartop1549" src="playground_assets/stutextbartop1549-mf6b.svg"
                                    class="i-mac1152-svg19" />
                                <img alt="stutxtbarbottom1550" src="playground_assets/stutxtbarbottom1550-zpdm.svg"
                                    class="i-mac1152-svg20" />

                                <div class="i-mac1152-studot1551">
                                    <img alt="studotleft1552" src="playground_assets/studotleft1552-m2t.svg"
                                        class="i-mac1152-svg21" />
                                    <img alt="studotmiddle1553" src="playground_assets/studotmiddle1553-sbo.svg"
                                        class="i-mac1152-svg22" />
                                    <img alt="studotright1554" src="playground_assets/studotright1554-1ap9.svg"
                                        class="i-mac1152-svg23" />
                                </div>
                          
                              </div>
                              
                        </div>
                       
                <div class="flex items-center justify-center">
                  <h1 class="text-4xl p-6 text-black border-white border-2 top-2 ">Virtual Classroom and Conferencing</h1>
                </div>
        
                        <div class="i-mac1152-tr188">
                            <img alt="trmid1525" src="playground_assets/trmid1525-3wol.svg" class="i-mac1152-svg24" />
                            <img src="playground_assets/trleft1529-1g7d.svg" alt="trleft1529" class="i-mac1152-image2" />
                            <img src="playground_assets/trright1532-n1iq.svg" alt="trright1532"
                                class="i-mac1152-image3" />
                            <img alt="laptop1534" src="playground_assets/laptop1534-cgre.svg" class="i-mac1152-svg25" />
                            <img src="playground_assets/trhead1555-qae.svg" alt="trhead1555" class="i-mac1152-image4" />

                            <div class="i-mac1152-trtext1535 my-3">
                                <img alt="trtext1536" src="playground_assets/trtext1536-gvn5.svg"
                                    class="i-mac1152-svg26" />
                                <img alt="Vector1537" src="playground_assets/vector1537-3c1i.svg"
                                    class="i-mac1152-svg27" />
                                <img alt="Vector1538" src="playground_assets/vector1538-nid.svg"
                                    class="i-mac1152-svg28" />
                                <img alt="Vector1539" src="playground_assets/vector1539-3gfc.svg"
                                    class="i-mac1152-svg29" />
                                <img alt="Vector1540" src="playground_assets/vector1540-ac5.svg"
                                    class="i-mac1152-svg30" />
        
                                <div class="i-mac1152-trdot1541">
                                    <img alt="trdotleft1542" src="playground_assets/trdotleft1542-l71a.svg"
                                        class="i-mac1152-svg31" />
                                    <img alt="trdotmiddle1543" src="playground_assets/trdotmiddle1543-3dkvb.svg"
                                        class="i-mac1152-svg32" />
                                    <img alt="trdotrightend1544" src="playground_assets/trdotrightend1544-nmp.svg"
                                        class="i-mac1152-svg33" />
        
                                </div>
                                
                            </div>
                            
                          </div>   
                </div>
            
          </div>
     <div>
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">

     <section class="text-gray-600 body-font">
      <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col">
          <div class="h-1 bg-gray-200 rounded overflow-hidden">
            <div class="w-24 h-full bg-indigo-500"></div>
          </div>
          <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
            <h1 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">About us and Product features</h1>
            <p class="sm:w-3/5 leading-relaxed text-base sm:pl-10 pl-0">SoftMonks helps you connect to the world of Internet through a range of professional software design and development services that will make your company stand out.</p>
          </div>
        </div>
        <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
          <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
            <div class="rounded-lg h-64 overflow-hidden">
              <img alt="content" class="object-cover object-center h-full w-full" src="/images/vmeet.png">
            </div>
            <h2 class="text-xl font-medium title-font text-gray-900 mt-5">Virtual Meeting</h2>
            <p class="text-base leading-relaxed mt-2">A virtual meeting is a type of collaboration technique where people from anywhere in the world can share their ideas using audio, video conferencing, screen sharing, and webinars</p>
            <a class="text-indigo-500 inline-flex items-center mt-3">Learn More
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
          <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
            <div class="rounded-lg h-64 overflow-hidden">
              <img alt="content" class="object-cover object-center h-full w-full" src="/images/whitebd.png">
            </div>
            <h2 class="text-xl font-medium title-font text-gray-900 mt-5">Collaborative whiteboard</h2>
            <p class="text-base leading-relaxed mt-2">Collaborative whiteboard software provides a shared, singular, and open design space where collaborators can simultaneously make edits and share content from their respective devices. As the name implies, a collaborative whiteboard tool often resembles a physical whiteboard.</p>
            <a class="text-indigo-500 inline-flex items-center mt-3">Learn More
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
          <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
            <div class="rounded-lg h-64 overflow-hidden">
              <img alt="content" class="object-cover object-center h-full w-full" src="/images/grpchat.jpg">
            </div>
            <h2 class="text-xl font-medium title-font text-gray-900 mt-5">Discussion Forum</h2>
            <p class="text-base leading-relaxed mt-2">Online forums can be used for many purposes, such as helping students to review material prior to an assignment or exam, engaging students in discussion of course material before coming to class, and reflecting on material that they have read or worked with outside of class.</p>
            <a class="text-indigo-500 inline-flex items-center mt-3">Learn More
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
          <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
            <div class="rounded-lg h-64 overflow-hidden">
              <img alt="content" class="object-cover object-center h-full w-full" src="/images/class.jpg">
            </div>
            <h2 class="text-xl font-medium title-font text-gray-900 mt-5">Classroom</h2>
            <p class="text-base leading-relaxed mt-2">Virtual classroom is for educational institutions that aims to simplify creating, distributing, and assignments. The primary purpose of Classroom is to streamline the process of sharing files between teachers and students It also acts as a digital organizer where teachers can keep class materials and share them with students -- all paperless-ly. </p>
            <a class="text-indigo-500 inline-flex items-center mt-3">Learn More
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                <path d="M5 12h14M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>

        </div>
      </div>
    </section>



 
    <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col">
      <div class="h-1 bg-gray-200 rounded overflow-hidden">
        <div class="w-24 h-full bg-indigo-500"></div>
      </div>
      <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
        <h1 class="sm:w-2/5 text-gray-900 font-medium title-font text-2xl mb-2 sm:mb-0">Contact Us</h1>
        <p class="sm:w-3/5 leading-relaxed text-base sm:pl-10 pl-0">Write to us with your queries and requirements. Your satisfaction is our goal. We will ensure you get the best.</p>
      </div>
    </div>

          <section class="text-gray-600 body-font flex justify-center items-center">
            
  <div class="container px-5 py-5 mx-auto flex sm:flex-nowrap flex-wrap">
    <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
      <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15372.06542124871!2d73.8067541!3d15.590775!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x135d0810fcae4147!2sSoftMonks%20(OPC)%20Private%20Limited!5e0!3m2!1sen!2sin!4v1652595029573!5m2!1sen!2sin"   style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
      <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
        <div class="lg:w-1/2 px-6">
          <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADDRESS</h2>
          <p class="mt-1">Office #12, 5th Floor, Buildmore Business Park, Khorlim-Xim, Mapusa, Goa 403507</p>
        </div>
        <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
          <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
          <a class="text-indigo-500 leading-relaxed">https://www.softmonks.com/</a>
          <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">PHONE</h2>
          <p class="leading-relaxed">07350013113</p>
        </div>
      </div>
    </div>

    <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
      <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Feedback</h2>
      <div class="relative mb-4">
        <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
        <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
        <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <div class="relative mb-4">
        <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
        <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
      </div>
      <button class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
  </div>
</section>
     </div>
          <footer class="bg-indigo-100 text-center lg:text-left  inset-x-0 bottom-0 fixed">
            <div class="text-gray-700 text-center p-4">
                © 2021 Copyright:
                <a class="text-gray-800" href="https://www.softmonks.com/">SOFTMONKS (OPC) PVT. LTD.</a>
            </div>
        </footer>
    </body>
</html>
