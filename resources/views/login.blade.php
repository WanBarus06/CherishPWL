<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cherish | Charity Website</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>

    <header>
        <nav class="border-gray-200 px-5 lg:px-6 py-2 bg-slate-100">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a href="#" class="flex items-center">
                    <img src="../images/logo-test.png" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap ">CHERISH</span>
                </a>
                <div class="flex items-center lg:order-2">
                    <a href="#" class="text-green-500 rounded-full hover:bg-slate-300 focus:ring-4 focus:ring-green-300 font-semibold px-8 py-2.5 mr-2 bg-slate-200  focus:outline-none ">Login</a>
                    <a href="#" class="text-white rounded-full hover:bg-green-600 focus:ring-4 focus:ring-green-300 font-medium  px-8 py-2.5 mr-2 bg-green-500 focus:outline-none">Register</a>
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
      

      <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                    Sign in to your account
                </h1>
                <form class="space-y-4 md:space-y-6" wire:submit.prevent="login">
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Your email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Email" required="">
                    </div>
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " required="">
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                              <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 text-green-500 focus:ring-3 focus:ring-primary-300 " required="">
                            </div>
                            <div class="ml-3 text-sm">
                              <label for="remember" class="text-gray-500 ">Remember me</label>
                            </div>
                        </div>
                        <a href="#" class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">Forgot password?</a>
                    </div>
                    <button type="submit" class="w-full text-white rounded-full hover:bg-green-600 focus:ring-4 focus:ring-green-300 font-medium  px-8 py-2.5 mr-2 bg-green-500 focus:outline-none">Sign in</button>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        Don’t have an account yet? <a href="{{ route('login') }}" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign up</a>
                    </p>
                </form>
            </div>
        </div>
    </div>


    <footer class="p-4 sm:p-6 bg-black ">
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
@livewireScripts
</body>
</html>