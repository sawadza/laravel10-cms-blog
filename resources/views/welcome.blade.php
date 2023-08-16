<x-app-layout>

<div class="">

    {{-- hero section --}}
    <section class="bg-white dark:bg-gray-900">

        <div class="grid items-center max-w-screen-xl px-4 py-8 mx-auto xl:gap-0 lg:py-16">
            <div class="mx-auto w-full text-center">
                <h1 class="mb-4 text-4xl font-extrabold md:text-5xl xl:text-6xl dark:text-white">{{__('Our First Laravel Blog')}}</h1>

                
                <form class="mt-6">   
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Blogs..." required>
                        <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </div>
                </form>
            </div>
                      
        </div>
    </section>



    {{-- latest blogs --}}

    <section class="bg-white p-3">

        <div class="grid grid-cols-1 md:grid-cols-3 gap-3 py-3">
        {{-- latest posts --}}
        
        <div class="mb-8 col-span-2">
                <h1 class="md:text-5xl text-3xl w-fit mx-auto font-extrabold uppercase my-3 text-center border-blue-700 border-b-2">{{__('latest Blog')}}</h1>
                <div class="w-3/4 lg:ms-auto mx-auto my-3">
                    <x-post-item :post="$latestPost" />
                </div>
            </div>

             {{-- 3 Popular posts --}}
            <div class="mb-8 md:col-span-1 col-span-2">
            <h1 class="md:text-xl text-3xl w-fit mx-auto font-extrabold uppercase my-3 text-center border-blue-700 border-b-2">{{__('Popular Blogs')}}</h1>
                    <div class="flex flex-row w-1/2 mx-auto md:mx-0 gap-2 my-3">
                        <a href="" class="pt-2">
                            <img src="https://cdn.pixabay.com/photo/2023/05/15/08/52/flower-7994489_1280.jpg" alt="">
                            <div class="col-span-3 mt-1">
                                    <h3 class="test-sm uppercase whitespace-nowrap truncate hover:text-blue-500">post title</h3>
                                    <div class="flex gap-4 s">
                                        
                                            <a href="" class="bg-blue-700 text-white p-1 rounded text-xs font-bold uppercase">category</a>

                                    </div>
                                    <div class="text-xs">
                                       
                                    </div>
                            </div>
                        </a>
                    </div>
                    <div class="flex flex-row w-1/2 mx-auto md:mx-0 gap-2 my-3">
                        <a href="" class="pt-2">
                            <img src="https://cdn.pixabay.com/photo/2023/05/15/08/52/flower-7994489_1280.jpg" alt="">
                            <div class="col-span-3 mt-1">
                                    <h3 class="test-sm uppercase whitespace-nowrap truncate hover:text-blue-500">post title</h3>
                                    <div class="flex gap-4 s">
                                        
                                            <a href="" class="bg-blue-700 text-white p-1 rounded text-xs font-bold uppercase">category</a>
                                    
                                    </div>
                            </div>
                        </a>
                    </div>
                    <div class="flex flex-row w-1/2 mx-auto md:mx-0 gap-2 my-3">
                        <a href="" class="pt-2">
                            <img src="https://cdn.pixabay.com/photo/2023/05/15/08/52/flower-7994489_1280.jpg" alt="">
                            <div class="col-span-3 mt-1">
                                    <h3 class="test-sm uppercase whitespace-nowrap truncate hover:text-blue-500">post title</h3>
                                    <div class="flex gap-4 s">
                                        
                                            <a href="" class="bg-blue-700 text-white p-1 rounded text-xs font-bold uppercase">category</a>
                                    
                                    </div>
                            </div>
                        </a>
                    </div>
                
               
                 
            </div>
        </div>

    </section>

       


    {{-- blogs by category --}}
    <section class=" p-3">
        <h1 class="md:text-5xl text-3xl w-fit mx-auto font-extrabold uppercase my-3 text-center border-blue-700 border-b-2">{{__('Category Blogs')}}</h1>

      
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3 items-center mx-auto my-6 p-3">
      
            <x-post-item :post="$latestPost" />
            <x-post-item :post="$latestPost" />
            <x-post-item :post="$latestPost" />
            <x-post-item :post="$latestPost" />
            
         
        </div>
    
    </section>
    
    
</div>

</x-app-layout>