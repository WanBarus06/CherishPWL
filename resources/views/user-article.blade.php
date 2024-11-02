<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A charity website for people that want help for humanity.">
    <title>Cherish | Charity Web</title>
    <link href="./output.css" rel="stylesheet">
</head>
<body>
  <header>
    <nav class="border-gray-200 px-5 lg:px-6 py-2 bg-slate-100">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="#" class="flex items-center">
                <img src="../images/logo-test.png" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" />
                <span class="self-center text-xl font-semibold whitespace-nowrap ">CHERISH</span>
            </a>
            <div class="flex items-center lg:order-2 pr-4">
            <h1 class="text-black font-semibold">Wan Guntar</h1>
            <button id="dropdownDividerButton" data-dropdown-toggle="dropdownDivider" class="text-black hover:text-green-500 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
              </svg>              
            </button>
    
    <!-- Dropdown menu -->
    <div id="dropdownDivider" class="z-10 hidden divide-y divide-gray-100 rounded-lg shadow w-44 bg-slate-100 ">
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDividerButton">
            <li class="flex items-center justify-between">
                <a href="#" class="flex items-center px-4 py-2 text-black">
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
            <a href="#" class="flex items-center px-4 py-2 text-black">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2 hover:text-green-500">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                </svg>
                <span>Help</span>
            </a>
        </li>     
        <hr>   
        </ul>
        <div class="py-2 flex items-center justify-between">
            <a href="#" class="px-4 py-2 text-sm text-black flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2 hover:text-green-500">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                </svg>
                <span>Logout</span>
            </a>
        </div>        
    </div>
    
                <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-green-900 rounded-lg lg:hidden "  aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3  border-b lg:hover:bg-transparent md:text-base md:text-black  lg:text-gray-500 lg:border-0 lg:p-0  hover:bg-slate-100" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 border-b lg:hover:bg-transparent lg:text-gray-500 lg:border-0 lg:p-0  hover:bg-slate-100">About</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 border-b lg:hover:bg-transparent lg:text-gray-500 lg:border-0  lg:p-0   hover:bg-slate-100">Programs</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 border-b lg:hover:bg-transparent lg:text-gray-500 lg:border-0  lg:p-0  hover:bg-slate-100">News</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 border-b lg:hover:bg-transparent lg:text-gray-500 lg:border-0 lg:p-0  hover:bg-slate-100">FAQ</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 pr-4 pl-3 border-b lg:hover:bg-transparent lg:text-gray-500 lg:border-0 lg:p-0 hover:bg-slate-100">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
  </header>

    <main class="pt-8 ">
        <section class="bg-white m-10">
            <div class=" py-6">
                <div class="xl:container mx-0 px-3 sm:px-4 xl:px-2">
                  <div class="flex flex-row flex-wrap">
                    <!-- Left -->
                    <div class="flex-shrink max-w-full w-full lg:w-2/3 overflow-hidden px">
                        <div class="w-full py-3">
                          <h2 class="text-black text-4xl font-semibold">
                            <span class="inline-block h-5 border-l-3 border-blue-300"></span>Highlighted News
                          </h2>
                        </div>
                        <div class="mt-4 pb-8">
                          <h3 class="text-gray-500 text-lg font-semibold">Popular News</h3>
                        </div>
                        <div class="grid grid-cols-1 lg:grid-cols-2 mx-0 w-4/5 shadow-md">
                          <!-- Top Left Image -->
                          <div class="relative mb-4">
                            <img src="../images/download.jpeg" alt="Image 1" class="w-4/5 h-auto rounded-lg ">
                            <p class="absolute bottom-0 left-0 w-4/5 text-white pl-4 font-semibold pb-4 pr-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto excepturi in aliquid.</p>
                          </div>
                          <!-- Top Right Image -->
                          <div class="relative mb-4">
                            <img src="../images/download.jpeg" alt="Image 2" class="w-4/5 h-auto rounded-lg">
                            <p class="absolute bottom-0 left-0 w-4/5 text-white pl-4 font-semibold pb-4 pr-4">Lorem ipsum dolor sit amet consectetur.</p>
                          </div>
                          <!-- Bottom Left Image -->
                          <div class="relative mb-4">
                            <img src="../images/9289817-removebg-preview.png" alt="Image 3" class="w-4/5 h-auto rounded-lg">
                            <p class="absolute bottom-0 left-0 w-4/5 text-white pl-4 font-semibold pb-4 pr-4">Title 3</p>
                          </div>
                          <!-- Bottom Right Image -->
                          <div class="relative mb-4">
                            <img src="../images/9289817-removebg-preview.png" alt="Image 3" class="w-4/5 h-auto rounded-lg">
                            <p class="absolute bottom-0 left-0 w-4/5 text-white pl-4 font-semibold pb-4 pr-4">Title 3</p>
                          </div>
                        </div>
                        <div class="mt-4 pb-8 pt-4">
                          <h3 class="text-gray-500 text-lg font-semibold">Recommended News</h3>
                        </div>
                        <!-- First Recommended News -->
                        <div class="flex items-center justify-between">
                          <div class="flex items-center">
                            <div>
                              <h2 class="text-xl font-semibold">Sebuah Gajah Mengamuk</h2>
                              <p class="text-md text-gray-500">Ditemukan seekor gajah mengamuk di kawasan Medan</p>
                              <p class="text-sm text-gray-500 pt-4">Admin - 2 days ago</p>
                            </div>
                          </div>
                          <div class="ml-0 pr-3 pt-8">
                            <img src="../images/download.jpeg" alt="Image" class="w-2/3 h-32 rounded-lg">
                          </div>
                        </div>
                        <!-- Second Recommended News -->
                        <div class="flex items-center justify-between">
                          <div class="flex items-center">
                            <div>
                              <h2 class="text-xl font-semibold">Sebuah Gajah Mengamuk</h2>
                              <p class="text-md text-gray-500">Ditemukan seekor gajah mengamuk di kawasan Medan</p>
                              <p class="text-sm text-gray-500 pt-4">Admin - 2 days ago</p>
                            </div>
                          </div>
                          <div class="ml-0 pr-3 pt-8">
                            <img src="../images/download.jpeg" alt="Image" class="w-2/3 h-32 rounded-lg">
                          </div>
                        </div>
                        <!-- Third Recommended News -->
                        <div class="flex items-center justify-between">
                          <div class="flex items-center">
                            <div>
                              <h2 class="text-xl font-semibold">Sebuah Gajah Mengamuk</h2>
                              <p class="text-md text-gray-500">Ditemukan seekor gajah mengamuk di kawasan Medan</p>
                              <p class="text-sm text-gray-500 pt-4">Admin - 2 days ago</p>
                            </div>
                          </div>
                          <div class="ml-0 pr-3 pt-8">
                            <img src="../images/download.jpeg" alt="Image" class="w-2/3 h-32 rounded-lg">
                          </div>
                        </div>
                        <!-- "Selengkapnya" Feature -->
                        <div class="flex justify-center mt-8">
                            <a href="#"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full flex items-center">
                            Read more
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10.707 13.293a1 1 0 0 1-1.414 0L5.586 9.414A1 1 0 1 1 6.999 7.999L10 10.999l3.414-3.414a1 1 0 1 1 1.414 1.414l-4.001 4a1 1 0 0 1 0 1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                            </a>
                        </div>
                      </div>
                      
                    
                    <!-- right -->
                    <div class="flex-shrink max-w-full w-full lg:w-1/3 lg:pl-8 lg:pt-14 lg:pb-8 pb-12 order-first lg:order-last">
                        <div class="flex items-center text-lg border-gray-300 md:hidden sm:hidden lg:block pb-12 w-full">
                            <input type="text" placeholder="Search title news" class="py-2 px-2 border w-4/6 border-gray-300 rounded-l-md focus:outline-none focus:ring focus:border-blue-100">
                            <button class="w-28 border border-gray-300 border-b border-t text-xl text-gray-500 py-2 px-4  rounded-r-md focus:ring">Search</button>
                        </div>
                        <div class="flex-col items-center justify-center bg-gray-100 border-gray-300 border pl-4 pb-4 pt-4 rounded-lg shadow-lg">
                            <h2 class="text-black font-semibold text-xl">Saved Articles</h2>
                            <div class="text-green-700 my-8 text-base font-semibold">
                                <ul>
                                    <li><a href="#">Penyerahan Sesajen</a></li>
                                    <li><a href="#">Gajah Mengamuk di TI - 2 days ago</a></li>
                                    <li><a href="#">Keberagaman Satwa Liar ditemukan di pedesaan - 2 days ago</a></li>
                                </ul>
                            </div>
                        </div>
                    
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
</body>
</html>