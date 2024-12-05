@extends('layout')

@section('content')
@include('navbar')

<div id="container" class="w-full py-4 px-8 md:px-28 pt-[70px]">
    <div class="w-full text-[50px] text-white text-center mb-5">
        All Recipes
    </div>



    <div class="inline-block text-gray-500 focus-within:text-black w-full mb-10">
        <p class="w-5 h-5 absolute ml-3 mt-2 pointer-events-none">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
        </p>
        <form action="">
            <input type="text" id="search" placeholder="Search Recipes" autocomplete="off" class="w-full pr-3 pl-12 mr-3 px-3 py-2 font-semibold placeholder-gray-500 text-black rounded-2xl border-none ring-2 ring-gray-300 focus:ring-black focus:ring-2">
        </form>
    </div>


    <div id="list" class="w-full grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-5">
        <div id="card" class="w-full rounded-2xl overflow-hidden p-2 bg-[#f1683a]">
            <div class="w-full aspect-square rounded-2xl overflow-hidden">
                <img src="{{asset('assets/burger.jpg')}}" alt="" class="w-full h-full object-center object-cover">
            </div>
            <div class="w-full text-lg p-1.5 flex justify-center border-[rgba(255,255,255,0.4)] border-b-[1px] mb-3">
                <div>Burger</div>
            </div>
            <div class="flex flex-row space-between text-center">
                <div class="w-1/2">
                    Author
                </div>
                <div class="w-1/2 flex flex-row justify-center">
                    <div class="w-[20px] aspect-square text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z"/></svg>
                    </div>
                    <div class="px-2 text-center">
                        3.5
                    </div>
                </div>
            </div>
        </div>
        <div id="card" class="w-full rounded-2xl overflow-hidden p-2 bg-[#f1683a]">
            <div class="w-full aspect-square rounded-2xl overflow-hidden">
                <img src="{{asset('assets/burger.jpg')}}" alt="" class="w-full h-full object-center object-cover">
            </div>
            <div class="w-full text-lg p-1.5 flex justify-center border-[rgba(255,255,255,0.4)] border-b-[1px] mb-3">
                <div>Burger</div>
            </div>
            <div class="flex flex-row space-between text-center">
                <div class="w-1/2">
                    Author
                </div>
                <div class="w-1/2 flex flex-row justify-center">
                    <div class="w-[20px] aspect-square text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z"/></svg>
                    </div>
                    <div class="px-2 text-center">
                        3.5
                    </div>
                </div>
            </div>
        </div>
        <div id="card" class="w-full rounded-2xl overflow-hidden p-2 bg-[#f1683a]">
            <div class="w-full aspect-square rounded-2xl overflow-hidden">
                <img src="{{asset('assets/burger.jpg')}}" alt="" class="w-full h-full object-center object-cover">
            </div>
            <div class="w-full text-lg p-1.5 flex justify-center border-[rgba(255,255,255,0.4)] border-b-[1px] mb-3">
                <div>Burger</div>
            </div>
            <div class="flex flex-row space-between text-center">
                <div class="w-1/2">
                    Author
                </div>
                <div class="w-1/2 flex flex-row justify-center">
                    <div class="w-[20px] aspect-square text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z"/></svg>
                    </div>
                    <div class="px-2 text-center">
                        3.5
                    </div>
                </div>
            </div>
        </div>
        <div id="card" class="w-full rounded-2xl overflow-hidden p-2 bg-[#f1683a]">
            <div class="w-full aspect-square rounded-2xl overflow-hidden">
                <img src="{{asset('assets/burger.jpg')}}" alt="" class="w-full h-full object-center object-cover">
            </div>
            <div class="w-full text-lg p-1.5 flex justify-center border-[rgba(255,255,255,0.4)] border-b-[1px] mb-3">
                <div>Burger</div>
            </div>
            <div class="flex flex-row space-between text-center">
                <div class="w-1/2">
                    Author
                </div>
                <div class="w-1/2 flex flex-row justify-center">
                    <div class="w-[20px] aspect-square text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z"/></svg>
                    </div>
                    <div class="px-2 text-center">
                        3.5
                    </div>
                </div>
            </div>
        </div>
        <div id="card" class="w-full rounded-2xl overflow-hidden p-2 bg-[#f1683a]">
            <div class="w-full aspect-square rounded-2xl overflow-hidden">
                <img src="{{asset('assets/burger.jpg')}}" alt="" class="w-full h-full object-center object-cover">
            </div>
            <div class="w-full text-lg p-1.5 flex justify-center border-[rgba(255,255,255,0.4)] border-b-[1px] mb-3">
                <div>Burger</div>
            </div>
            <div class="flex flex-row space-between text-center">
                <div class="w-1/2">
                    Author
                </div>
                <div class="w-1/2 flex flex-row justify-center">
                    <div class="w-[20px] aspect-square text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z"/></svg>
                    </div>
                    <div class="px-2 text-center">
                        3.5
                    </div>
                </div>
            </div>
        </div>
        <div id="card" class="w-full rounded-2xl overflow-hidden p-2 bg-[#f1683a]">
            <div class="w-full aspect-square rounded-2xl overflow-hidden">
                <img src="{{asset('assets/burger.jpg')}}" alt="" class="w-full h-full object-center object-cover">
            </div>
            <div class="w-full text-lg p-1.5 flex justify-center border-[rgba(255,255,255,0.4)] border-b-[1px] mb-3">
                <div>Burger</div>
            </div>
            <div class="flex flex-row space-between text-center">
                <div class="w-1/2">
                    Author
                </div>
                <div class="w-1/2 flex flex-row justify-center">
                    <div class="w-[20px] aspect-square text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z"/></svg>
                    </div>
                    <div class="px-2 text-center">
                        3.5
                    </div>
                </div>
            </div>
        </div>
        <div id="card" class="w-full rounded-2xl overflow-hidden p-2 bg-[#f1683a]">
            <div class="w-full aspect-square rounded-2xl overflow-hidden">
                <img src="{{asset('assets/burger.jpg')}}" alt="" class="w-full h-full object-center object-cover">
            </div>
            <div class="w-full text-lg p-1.5 flex justify-center border-[rgba(255,255,255,0.4)] border-b-[1px] mb-3">
                <div>Burger</div>
            </div>
            <div class="flex flex-row space-between text-center">
                <div class="w-1/2">
                    Author
                </div>
                <div class="w-1/2 flex flex-row justify-center">
                    <div class="w-[20px] aspect-square text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z"/></svg>
                    </div>
                    <div class="px-2 text-center">
                        3.5
                    </div>
                </div>
            </div>
        </div>
        <div id="card" class="w-full rounded-2xl overflow-hidden p-2 bg-[#f1683a]">
            <div class="w-full aspect-square rounded-2xl overflow-hidden">
                <img src="{{asset('assets/burger.jpg')}}" alt="" class="w-full h-full object-center object-cover">
            </div>
            <div class="w-full text-lg p-1.5 flex justify-center border-[rgba(255,255,255,0.4)] border-b-[1px] mb-3">
                <div>Burger</div>
            </div>
            <div class="flex flex-row space-between text-center">
                <div class="w-1/2">
                    Author
                </div>
                <div class="w-1/2 flex flex-row justify-center">
                    <div class="w-[20px] aspect-square text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z"/></svg>
                    </div>
                    <div class="px-2 text-center">
                        3.5
                    </div>
                </div>
            </div>
        </div>
        <div id="card" class="w-full rounded-2xl overflow-hidden p-2 bg-[#f1683a]">
            <div class="w-full aspect-square rounded-2xl overflow-hidden">
                <img src="{{asset('assets/burger.jpg')}}" alt="" class="w-full h-full object-center object-cover">
            </div>
            <div class="w-full text-lg p-1.5 flex justify-center border-[rgba(255,255,255,0.4)] border-b-[1px] mb-3">
                <div>Burger</div>
            </div>
            <div class="flex flex-row space-between text-center">
                <div class="w-1/2">
                    Author
                </div>
                <div class="w-1/2 flex flex-row justify-center">
                    <div class="w-[20px] aspect-square text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z"/></svg>
                    </div>
                    <div class="px-2 text-center">
                        3.5
                    </div>
                </div>
            </div>
        </div>
        <div id="card" class="w-full rounded-2xl overflow-hidden p-2 bg-[#f1683a]">
            <div class="w-full aspect-square rounded-2xl overflow-hidden">
                <img src="{{asset('assets/burger.jpg')}}" alt="" class="w-full h-full object-center object-cover">
            </div>
            <div class="w-full text-lg p-1.5 flex justify-center border-[rgba(255,255,255,0.4)] border-b-[1px] mb-3">
                <div>Burger</div>
            </div>
            <div class="flex flex-row space-between text-center">
                <div class="w-1/2">
                    Author
                </div>
                <div class="w-1/2 flex flex-row justify-center">
                    <div class="w-[20px] aspect-square text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z"/></svg>
                    </div>
                    <div class="px-2 text-center">
                        3.5
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endSection

@section('script')

<script>
    const search = document.getElementById('search');
    let dataList = [];
    search.addEventListener("input", (e) => {
        const value = e.target.value.toLowerCase();
        console.log(value);
        const filteredDataList = dataList.filter(student => {
            console.log(student);
            return student.name.toLowerCase().includes(value) || student.nrp.toLowerCase().includes(value);
        });
        console.log(filteredDataList)
        display(filteredDataList);
    });

    const display = (data) => {
        $('#list').html('');
        data.forEach(recipe => {
            $('#list').append(`
                <div id="card" class="w-full rounded-2xl overflow-hidden p-2 bg-[#f1683a]">
                    <div class="w-full aspect-square rounded-2xl overflow-hidden">
                        <img src="${recipe.image}" alt="${recipe.name}" class="w-full h-full object-center object-cover">
                    </div>
                    <div class="w-full text-lg p-1.5 flex justify-center border-[rgba(255,255,255,0.4)] border-b-[1px] mb-3">
                        <div>${recipe.name}</div>
                    </div>
                    <div class="flex flex-row space-between text-center">
                        <div class="w-1/2">
                            Belum User
                        </div>
                        <div class="w-1/2 flex flex-row justify-center">
                            <div class="w-[20px] aspect-square text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.7.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M287.9 0c9.2 0 17.6 5.2 21.6 13.5l68.6 141.3 153.2 22.6c9 1.3 16.5 7.6 19.3 16.3s.5 18.1-5.9 24.5L433.6 328.4l26.2 155.6c1.5 9-2.2 18.1-9.7 23.5s-17.3 6-25.3 1.7l-137-73.2L151 509.1c-8.1 4.3-17.9 3.7-25.3-1.7s-11.2-14.5-9.7-23.5l26.2-155.6L31.1 218.2c-6.5-6.4-8.7-15.9-5.9-24.5s10.3-14.9 19.3-16.3l153.2-22.6L266.3 13.5C270.4 5.2 278.7 0 287.9 0zm0 79L235.4 187.2c-3.5 7.1-10.2 12.1-18.1 13.3L99 217.9 184.9 303c5.5 5.5 8.1 13.3 6.8 21L171.4 443.7l105.2-56.2c7.1-3.8 15.6-3.8 22.6 0l105.2 56.2L384.2 324.1c-1.3-7.7 1.2-15.5 6.8-21l85.9-85.1L358.6 200.5c-7.8-1.2-14.6-6.1-18.1-13.3L287.9 79z"/></svg>
                            </div>
                            <div class="px-2 text-center">
                                3.5
                            </div>
                        </div>
                    </div>
                </div>
            `);
        });
    }

    display(@json($recipes));
</script>
@endSection