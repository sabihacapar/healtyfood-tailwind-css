<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">

</head>
<body class="text-gray-700 font-serif">
    <div class="grid md:grid-cols-3"> <!-- Content Wrapper-->
        <div class="md:col-span-1 md:flex md:justify-end">
            <nav class="text-right">
                <div class="flex justify-between items-center">
                    <h1 class="font-bold uppercase p-4 border-b border-gray-400 text-4xl"><!-- büyük harflerle yazdırır -->
                        <a href="/" class="text-green-500 sm:text-red-500 lg:text-blue-500 hover:text-gray-600">Healty Food</a>
                      <!--  <a href="/" class="text-sm md:text-xl">Food Ninja</a>-->

                    </h1>
                    <div class="px-4 cursor-pointer md:hidden" id="burger">
                        <svg class="w-6" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/></svg>
                    </div>
                </div>
                <ul class="text-sm mt-6 hidden md:block" id="menu">
                    <li class="text-gray-900 font-bold py-1">
                        <a href="#" class="px-4 flex justify-end border-r-4 border-gray-200">
                            <svg class="w-5 inline-block" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 5.69l5 4.5V18h-2v-6H9v6H7v-7.81l5-4.5M12 3L2 12h3v8h6v-6h2v6h6v-8h3L12 3z"/></svg>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="py-1">
                        <a href="#" class="px-4 flex justify-end border-r-4 border-gray-200">
                            <svg class="w-5 inline-block" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><g><rect fill="none" height="24" width="24"/></g><g><path d="M13.92,8C13.44,5.16,10.97,3,8,3C4.69,3,2,5.69,2,9c0,2.97,2.16,5.44,5,5.92L7,21h2l0-6.09c0-0.98-0.71-1.8-1.67-1.97 C5.44,12.63,4,10.98,4,9c0-2.21,1.79-4,4-4c1.98,0,3.63,1.44,3.94,3.33C12.11,9.29,12.93,10,13.91,10l4.26,0l-1.59,1.59L18,13l4-4 l-4-4l-1.41,1.41L18.17,8L13.92,8z"/></g></svg>
                            <span>About</span>
                        </a>
                    </li>
                    <li class="py-1">
                        <a href="#" class="px-4 flex justify-end border-r-4 border-gray-200">
                            <svg class="w-5 inline-block" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 1.95c-5.52 0-10 4.48-10 10s4.48 10 10 10h5v-2h-5c-4.34 0-8-3.66-8-8s3.66-8 8-8 8 3.66 8 8v1.43c0 .79-.71 1.57-1.5 1.57s-1.5-.78-1.5-1.57v-1.43c0-2.76-2.24-5-5-5s-5 2.24-5 5 2.24 5 5 5c1.38 0 2.64-.56 3.54-1.47.65.89 1.77 1.47 2.96 1.47 1.97 0 3.5-1.6 3.5-3.57v-1.43c0-5.52-4.48-10-10-10zm0 13c-1.66 0-3-1.34-3-3s1.34-3 3-3 3 1.34 3 3-1.34 3-3 3z"/></svg>
                            <span>Contact</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div><!-- end nav-->
        <main class="px-16 py-6 bg-gray-100 md:col-span-2">
            <div class="flex justify-center md:justify-end">
                <a href="#" class="text-red-400 border-gray-500 md:border-2 rounded-full py-2 px-3 uppercase text-bold cursor-pointer tracking-wider hover:text-gray-600 hover:bg-red-50 transition ease-out duration-500">Log in</a>
                <a href="#" class="text-red-400 ml-2 border-gray-500 md:border-2 rounded-full py-2 px-3 uppercase text-bold cursor-pointer tracking-wider hover:text-gray-600 hover:bg-red-50 transition ease-out duration-500">Sign Up</a>
            </div>
           
            <header>
                <h2 class="text-gray-700 text-lg-6xl font-semibold">Recipes</h2>
                <h2 class="tex-2xl font-semibold">For Ninjas</h2>
            </header>

            <div>
                <h4 class="font-bold mt-12 pb-2 border-b border-gray-400">Latest Recipes</h4>
                
                 <div class="mt-8 grid lg:grid-cols-2 gap-10">
                      <!-- card go here-->
                    <div class="bg-white rounded overflow-hidden shadow-md relative hover:shadow-lg">
                        <img src="https://images.unsplash.com/photo-1606787366850-de6330128bfc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTN8fGZvb2R8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="stew" class="w-full h-32 sm:h-48 object-cover">
                        <div class="m-4">
                            <span class="font-bold">5 Bean Chilli Stew</span>
                            <span class="block text-gray-500 text-sm">Recipe By Marip</span>
                        </div>
                        <div class="bg-gray-200 text-gray-400 text-xs uppercase font-bold rounded-full p-2 absolute top-0 ml-2 mt-2">
                            <svg class="w-4 inline-block" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><g><rect fill="none" height="24" width="24"/></g><g><g><g><path d="M15,1H9v2h6V1z M11,14h2V8h-2V14z M19.03,7.39l1.42-1.42c-0.43-0.51-0.9-0.99-1.41-1.41l-1.42,1.42 C16.07,4.74,14.12,4,12,4c-4.97,0-9,4.03-9,9s4.02,9,9,9s9-4.03,9-9C21,10.88,20.26,8.93,19.03,7.39z M12,20c-3.87,0-7-3.13-7-7 s3.13-7,7-7s7,3.13,7,7S15.87,20,12,20z"/></g></g></g></svg>

                            <span>25 mins</span>
                        </div>
                        </div> 
                        <div class="bg-white rounded overflow-hidden shadow-md relative hover:shadow-lg">
                            <img src="https://images.unsplash.com/photo-1504754524776-8f4f37790ca0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fGZvb2R8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="stew" class="w-full h-32 sm:h-48 object-cover">
                            <div class="m-4">
                                <span class="font-bold">Vegetarian</span>
                                <span class="block text-gray-500 text-sm">Vegeterian food</span>
                            </div>
                            <div class="bg-gray-200 text-gray-400 text-xs uppercase font-bold rounded-full p-2 absolute top-0 ml-2 mt-2">
                                <svg class="w-4 inline-block" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><g><rect fill="none" height="24" width="24"/></g><g><g><g><path d="M15,1H9v2h6V1z M11,14h2V8h-2V14z M19.03,7.39l1.42-1.42c-0.43-0.51-0.9-0.99-1.41-1.41l-1.42,1.42 C16.07,4.74,14.12,4,12,4c-4.97,0-9,4.03-9,9s4.02,9,9,9s9-4.03,9-9C21,10.88,20.26,8.93,19.03,7.39z M12,20c-3.87,0-7-3.13-7-7 s3.13-7,7-7s7,3.13,7,7S15.87,20,12,20z"/></g></g></g></svg>

                                <span>25 mins</span>
                            </div>
                            </div> 
                            <div class="bg-white rounded overflow-hidden shadow-md relative hover:shadow-lg">
                                <img src="https://images.unsplash.com/photo-1498837167922-ddd27525d352?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8Zm9vZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="stew" class="w-full h-32 sm:h-48 object-cover">
                                <div class="m-4">
                                    <span class="font-bold">Vegetable</span>
                                    <span class="block text-gray-500 text-sm">vegetable food</span>
                                </div>
                                <div class="bg-gray-200 text-gray-400 text-xs uppercase font-bold rounded-full p-2 absolute top-0 ml-2 mt-2">
                                    <svg class="w-4 inline-block" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><g><rect fill="none" height="24" width="24"/></g><g><g><g><path d="M15,1H9v2h6V1z M11,14h2V8h-2V14z M19.03,7.39l1.42-1.42c-0.43-0.51-0.9-0.99-1.41-1.41l-1.42,1.42 C16.07,4.74,14.12,4,12,4c-4.97,0-9,4.03-9,9s4.02,9,9,9s9-4.03,9-9C21,10.88,20.26,8.93,19.03,7.39z M12,20c-3.87,0-7-3.13-7-7 s3.13-7,7-7s7,3.13,7,7S15.87,20,12,20z"/></g></g></g></svg>

                                    <span>25 mins</span>
                                </div>
                                </div> 
                 </div>
                 <h4 class="font-bold mt-12 pb-2 border-b border-red-200 text-gray-500">Most Popular</h4>

                 <div class="mt-8">
                 <!-- card go here-->
                 </div>
                  <div class="flex justify-center">
                      <div class="bg-gray-300 text-gray-700 rounded-full py-2 px-3 uppercase text-bold cursor-pointer tracking-wider hover:shadow-inner transform hover:scale-125 hover:bg-opacity-50 transition ease-out">Load More</div>
                      <div>
                          
                      </div>
                  </div>



            </div>
            
        </main>
    </div>

    <svg class="w-48" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6 2v6h.01L6 8.01 10 12l-4 4 .01.01H6V22h12v-5.99h-.01L18 16l-4-4 4-3.99-.01-.01H18V2H6zm10 14.5V20H8v-3.5l4-4 4 4zm-4-5l-4-4V4h8v3.5l-4 4z"/></svg>
</body>
</html>