<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="A charity website for people that want help for humanity.">
  <title>Cherish | Charity Web</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
  <header>
    <nav class="border-gray-200 px-5 lg:px-6 py-2 fixed top-0 left-0 right-0 bg-slate-100">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="#" class="flex items-center">
                <img src="../images/logo-test.png" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" />
                <span class="self-center text-xl font-semibold whitespace-nowrap ">CHERISH</span>
            </a>
            <div class="flex items-center lg:order-2">
              @if(Route::has('login'))
              @auth
                  @if(auth()->user()->hasVerifiedEmail())
                      <!-- User is authenticated and has verified email -->
                      <h1 class="text-black font-semibold">{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</h1>
                      <button id="dropdownDividerButton" data-dropdown-toggle="dropdownDivider" class="text-black hover:text-green-500 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">
                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                          </svg>              
                      </button>
                      <!-- Dropdown menu -->
                      <div id="dropdownDivider" class="z-10 hidden divide-y divide-gray-100 rounded-lg shadow w-44 bg-slate-100">
                          <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDividerButton">
                              <li class="flex items-center justify-between">
                                  <a href="{{ route('my-account') }}" class="flex items-center px-4 py-2 text-black">
                                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2 hover:text-green-500">
                                          <path class="" stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
                                      </svg>                      
                                      <span>Account</span>
                                  </a>
                              </li>            
                              <li class="flex items-center justify-between">
                                  <a href="#" class="flex items-center px-4 py-2 text-black">
                                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2 hover:text-green-500">
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z" />
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                      </svg>
                                      <span>Settings</span>
                                  </a>
                              </li>        
                              <li class="flex items-center justify-between">
                                <form method="POST" action="{{ route('logout') }}">
                                  @csrf
                                  <button type="submit" href="{{ route('logout') }}" class="flex items-center px-4 py-2 text-black rounded-lg hover:bg-green-500 hover:text-white group">
                                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 transition duration-75 group-hover:text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                                </svg>                          
                                 <span class="ms-3">Logout</span>
                                  </button>
                               </form>
                              </li>            
                          </ul>
                      </div>    
                  @else
                      <!-- User is authenticated but has not verified email -->
                      <a href="{{ route('login') }}" class="text-green-500 rounded-full hover:bg-slate-300 focus:ring-4 focus:ring-green-300 font-semibold px-8 py-2.5 mr-2 bg-slate-200  focus:outline-none ">Login</a>
                      @if(Route::has('register'))
                      <a href="{{ route('register') }}" class="text-white rounded-full hover:bg-green-600 focus:ring-4 focus:ring-green-300 font-medium  px-8 py-2.5 mr-2 bg-green-500 focus:outline-none">Sign Up</a>
                      @endif
                  @endif
              @else
                  <!-- User is not authenticated -->
                  <a href="{{ route('login') }}" class="text-green-500 rounded-full hover:bg-slate-300 focus:ring-4 focus:ring-green-300 font-semibold px-8 py-2.5 mr-2 bg-slate-200  focus:outline-none ">Login</a>
                  @if(Route::has('register'))
                  <a href="{{ route('register') }}" class="text-white rounded-full hover:bg-green-600 focus:ring-4 focus:ring-green-300 font-medium  px-8 py-2.5 mr-2 bg-green-500 focus:outline-none">Sign Up</a>
                  @endif
              @endauth
          @endif
                          <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-green-900 rounded-lg lg:hidden "  aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="/" class="block py-2 pr-4 pl-3  border-b lg:hover:bg-transparent md:text-base md:text-black  lg:text-gray-500 lg:border-0 lg:p-0  hover:bg-slate-100" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#about" class="block py-2 pr-4 pl-3 border-b lg:hover:bg-transparent lg:text-gray-500 lg:border-0 lg:p-0  hover:bg-slate-100">About</a>
                    </li>
                    <li>
                        <a href="#program" class="block py-2 pr-4 pl-3 border-b lg:hover:bg-transparent lg:text-gray-500 lg:border-0  lg:p-0   hover:bg-slate-100">Programs</a>
                    </li>
                    <li>
                        <a href="#popular-news" class="block py-2 pr-4 pl-3 border-b lg:hover:bg-transparent lg:text-gray-500 lg:border-0  lg:p-0  hover:bg-slate-100">News</a>
                    </li>
                    <li>
                        <a href="#FAQ" class="block py-2 pr-4 pl-3 border-b lg:hover:bg-transparent lg:text-gray-500 lg:border-0 lg:p-0  hover:bg-slate-100">FAQ</a>
                    </li>
                    <li>
                        <a href="#FAQ" class="block py-2 pr-4 pl-3 border-b lg:hover:bg-transparent lg:text-gray-500 lg:border-0 lg:p-0 hover:bg-slate-100">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
  </header>
  
  <main>
    <section class="bg-white shadow-2xl pt-8">
      <div class="grid py-8 px-5 mx-auto max-w-screen-xl lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
          <div class="place-self-center mr-auto lg:col-span-7">
              <h1 class=" mb-4 max-w-2xl text-4xl font-semibold leading-none md:text-5xl xl:text-6xl ">Lets Help Humanity</h1>
              <p class="mb-6 max-w-2xl font-medium text-gray-500 lg:mb-8 md:text-lg lg:text-xl "> An online platform for users to explore the organization's mission, discover volunteer opportunities, and learn about impactful projects, fostering a community committed to positive change.</p>
              <a href="" class="bg-green-600 inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center rounded-2xl border  text-white focus:outline-0  focus:ring-4 focus:ring-green-100 hover:bg-green-500">
                  Donate Now
              </a>
              <!-- <a href="#" class="text-white rounded-full hover:bg-green-600 focus:ring-4 focus:ring-green-300 font-medium  px-8 py-2.5 mr-2 bg-green-500 focus:outline-none">Daftar</a> -->
              <a href="" class="bg-white inline-block justify-center items-center py-3 px-5 text-base font-medium text-center rounded-2xl border border-green-600  text-green-800  focus:ring-4 focus:ring-green-100 hover:bg-green-500 hover:text-white">Get Started</a>
          </div>
          <div class="hidden lg:mt-0 lg:col-span-5 lg:flex ">
              <img src="../images/hero-icon.svg" alt="charity-hero-icon" width="100%" height="100%">
          </div>
      </div>
    </section>

    <section class="bg-gray-200 m-10 rounded-lg shadow-xl" id="about">
      <div class="grid py-14 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6 lg:my-12 lg:gap-8 lg:grid-cols-12">
          <div class="mb-8 max-w-screen-md lg:mb-16 lg:col-span-6">
              <p class=" sm:text-xl font-semibold pb-5 ">Get to know about us more</p>
              <h2 class="mb-4 text-4xl font-extrabold text-green-900 ">Cherish - Connect All People</h2>
              <p class="text-gray-900 sm:text-xl ">
                  Cherish is a pioneering platform that fosters meaningful connections among nonprofits, donors, and corporations spanning nearly every corner of the globe. With a steadfast commitment to empowerment and collaboration, we serve as a vital conduit, enabling fellow nonprofits to seamlessly access the crucial funding, cutting-edge tools, comprehensive training, and unwavering support necessary to effectively fulfill their missions and uplift their communities. Our expansive network transcends borders, uniting diverse entities in a shared pursuit of social impact and sustainable change.</p>
          </div>  
          <div class="hidden lg:mb-32 lg:mt-0 lg:col-span-6 lg:flex ">
              <img src="../images/WhatsApp_Image_2024-04-29_at_17.53.29-removebg-preview.png" class="w-500px h-500px"  alt="cherish-icon">
          </div>
      </div>
    </section>



    <section class ="flex flex-wrap justify-center" id="program">
      <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6 flex text-center ">
        <h1 class="mb-4 text-5xl font-extrabold text-green-900">Our Programs</h1>
      </div>
    </section>

    <section class="flex flex-wrap justify-center">
      <div class="max-w-xs overflow-hidden bg-gray-200 shadow-xl p-4 m-4">
          <img class="w-full rounded-2xl h-56" src="../images/images.png" alt="Image">
          <div class="px-6 py-4">
              <div class="font-bold text-xl mb-2 text-center">Education Sponsorship Program</div>
              <p class="text-gray-700 text-base text-center">
                This program aims to provide education opportunities to underprivileged children or individuals who lack access to quality education.
              </p>
          </div>
          <div class="px-6 pt-4 pb-2 text-center">
              <h3 class="text-xl underline text-amber-700 font-bold">
                  <a href="">
                      Get Started
                  </a>
              </h3>
          </div>
      </div>
      <div class="max-w-xs overflow-hidden bg-gray-200 shadow-xl p-4 m-4">
          <img class="w-full rounded-2xl h-56" src="../images/education_program.jpeg" alt="Image">
          <div class="px-6 py-4">
              <div class="font-bold text-xl mb-2 text-center">Food Assistance Program</div>
              <p class="text-gray-700 text-base text-center">
                This program may involve distributing food packages, operating community kitchens, or partnering with local food banks and shelters to ensure that vulnerable populations have access to sufficient food.             </p>
          </div>
          <div class="px-6 pt-4 pb-2 text-center">
              <h3 class="text-xl underline text-amber-700 font-bold">
                  <a href="">
                      Get Started
                  </a>
              </h3>
          </div>
      </div>
      <div class="max-w-xs overflow-hidden bg-gray-200 shadow-xl p-4 m-4">
          <img class="w-full rounded-2xl h-56 " src="../images/images.png" alt="Image">
          <div class="px-6 py-4">
              <div class="font-bold text-xl mb-2 text-center">Donor Appreciation Weekly</div>
              <p class="text-gray-700 text-base text-center">
                  Dedicate a week to celebrating and thanking your donors for their support with a donor appreciation campaign.
              </p>
          </div>
          <div class="px-6 pt-4 pb-2 text-center">
              <h3 class="text-xl underline text-amber-700 font-bold">
                  <a href="">
                      Get Started
                  </a>
              </h3>
          </div>
      </div>
  </section>

  <section class ="flex flex-wrap justify-center py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6 ">
    <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6 flex text-center ">
        <h2 class="mb-4 text-4xl lg:text-5xl  font-extrabold text-green-900" id="popular-news">News</h2>
    </div>
  </section>

  <section class="flex flex-wrap justify-center mx-auto">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center">
            <h2 class="lg:text-3xl text-3xl font-bold mb-8">Popular News</h2>
            <a href="/news" class="lg:text-xl text-lg font-semibold text-blue-500">Show More</a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-0">
            @foreach($articles as $article)
                <div class="bg-white rounded-lg overflow-hidden w-11/12">
                    <a href="/news/{{ $article->slug }}">
                        <img class="w-full h-48 object-cover rounded-xl" src="{{ $article->image }}" alt="News 1">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold">{{ $article->title }}</h3>
                            <p class="text-gray-500 mb-5">{{ $article->updated_at->diffForHumans() }}</p>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

  <section class ="flex flex-wrap justify-center mx-auto py-8" id="FAQ">
    <div class="container mx-auto px-4 py-8">
        <h2 class="text-3xl font-bold mb-8">Frequently Question Asked</h2>
        
        <div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-2 gap-8">
          <div class="border rounded-md">
            <button class="w-full text-left p-4 focus:outline-none bg-gray-100 hover:bg-gray-200 flex justify-between items-center" onclick="toggleAnswer(this)">
              <h2 class="text-lg font-semibold">What types of projects does your charity support?</h2>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 rotate-0 transition-transform duration-300" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M6.293 7.293a1 1 0 0 1 1.414 0L10 9.586l2.293-2.293a1 1 0 1 1 1.414 1.414l-3 3a1 1 0 0 1-1.414 0l-3-3a1 1 0 0 1 0-1.414z" clip-rule="evenodd" />
              </svg>
            </button>
            <div class="accordion-content hidden p-4">
              <p class="text-gray-700 text-lg">Our charity is dedicated to addressing a wide range of social and environmental issues. We support projects
                 focused on education, healthcare, environmental conservation, disaster relief, and community development, among others. Our goal is
                 to create sustainable and impactful change in communities around the world. To learn more about the specific projects we support,
                 please visit our website's "Cherish" page for detailed information and updates on our ongoing initiatives.
              </p>
            </div>
          </div>
      
          <div class="border rounded-md">
            <button class="w-full text-left p-4 focus:outline-none bg-gray-100 hover:bg-gray-200 flex justify-between items-center" onclick="toggleAnswer(this)">
              <h2 class="text-lg font-semibold">Can I organize a fundraising event to support your charity?</h2>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 rotate-0 transition-transform duration-300" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M6.293 7.293a1 1 0 0 1 1.414 0L10 9.586l2.293-2.293a1 1 0 1 1 1.414 1.414l-3 3a1 1 0 0 1-1.414 0l-3-3a1 1 0 0 1 0-1.414z" clip-rule="evenodd" />
              </svg>
            </button>
            <div class="accordion-content hidden p-4">
              <p class="text-gray-700 text-lg">Absolutely! We encourage individuals and groups to organize fundraising events to support our cause. Whether
                 it's a charity run, a bake sale, or a gala dinner, every effort makes a difference. Our team is here to support you every step of
                 the way, providing resources, guidance, and promotional materials to make your event a success. Visit our website's "Fundraise"
                 page to learn more about how you can get started and make a meaningful impact through fundraising. Together, we can create positive
                 change and transform lives.
              </p>
            </div>
          </div>
      
          <div class="border rounded-md">
            <button class="w-full text-left p-4 focus:outline-none bg-gray-100 hover:bg-gray-200 flex justify-between items-center" onclick="toggleAnswer(this)">
              <h2 class="text-lg font-semibold"> How does your charity ensure transparency and accountability?</h2>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 rotate-0 transition-transform duration-300" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M6.293 7.293a1 1 0 0 1 1.414 0L10 9.586l2.293-2.293a1 1 0 1 1 1.414 1.414l-3 3a1 1 0 0 1-1.414 0l-3-3a1 1 0 0 1 0-1.414z" clip-rule="evenodd" />
              </svg>
            </button>
            <div class="accordion-content hidden p-4">
              <p class="text-gray-700 text-lg">Transparency and accountability are fundamental values of our organization. We strive to maintain open
                 communication with our supporters and stakeholders. Our financial records are regularly audited by independent firms to ensure accuracy
                 and compliance with regulations. Additionally, we provide detailed reports on our website, showcasing how donations are utilized and the
                 progress of our projects. We believe in accountability to our donors and the communities we serve.
              </p>
            </div>
          </div>

          <div class="border rounded-md">
            <button class="w-full text-left p-4 focus:outline-none bg-gray-100 hover:bg-gray-200 flex justify-between items-center" onclick="toggleAnswer(this)">
              <h2 class="text-lg font-semibold">Can I designate my donation to a specific cause or project?</h2>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 rotate-0 transition-transform duration-300" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M6.293 7.293a1 1 0 0 1 1.414 0L10 9.586l2.293-2.293a1 1 0 1 1 1.414 1.414l-3 3a1 1 0 0 1-1.414 0l-3-3a1 1 0 0 1 0-1.414z" clip-rule="evenodd" />
              </svg>
            </button>
            <div class="accordion-content hidden p-4">
              <p class="text-gray-700 text-lg">Yes, absolutely! We understand that donors may have specific causes or projects that are close to their hearts.
                 When making a donation, you can choose to designate your contribution to a particular program or initiative. Whether you're passionate
                 about education, healthcare, environmental conservation, or disaster relief, your donation can be directed to support the cause of your
                 choice. Simply indicate your preference during the donation process, and rest assured that your contribution will directly support the
                 area you care about most. Thank you for your support and generosity!
              </p>
            </div>
          </div>
        </div>
      </div>  
  </section>
</main>

<footer class="p-4 sm:p-6 bg-black rounded-tl-3xl rounded-tr-3xl">
    <div class="mx-auto max-w-screen-xl ">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="https://flowbite.com" class="flex items-center">
                    <span class="self-center text-2xl font-bold whitespace-nowrap text-white">Cherish</span>
                </a>
                <h3 class="text-2xl font-semi-bold italic text-white mt-6 ">" We Help Humanity "</h3>
            </div>
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                <div>
                    <h2 class="mb-6 text-lg font-semibold text-white">Follow us</h2>
                    <ul class="text-white">
                        <li class="mb-4">
                            <a href="#" class="hover:underline ">Instagram</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Facebook</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Twitter</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-lg font-semibold text-white">Legal</h2>
                    <ul class="text-white">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto bg-white lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-white sm:text-center ">© 2024 <a href="/" class="hover:underline">Cherish</a>. All Rights Reserved.
            </span>
            <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                <a href="#" class="text-white hover:text-green-800 focus:text-gray-600"">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-label="Check our social media facebook"  ><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                </a>
                <a href="#" class="text-white hover:text-green-800 focus:text-gray-600"">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-label="Check our social media facebook" ><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                </a>
                <a href="#" class="text-white hover:text-green-800 focus:text-gray-600">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-label="Check our social media facebook" ><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                </a>
            </div>
        </div>
    </div>
</footer>
  
  
<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
  <script>
    function toggleAnswer(button) {
      const content = button.nextElementSibling;
      content.classList.toggle('hidden');
      button.querySelector('svg').classList.toggle('rotate-0');
      button.querySelector('svg').classList.toggle('rotate-180');
    }

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
  </script>
  </script>
  
  
  
  

</body>
</html>