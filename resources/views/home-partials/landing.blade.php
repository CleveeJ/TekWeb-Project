<section>
<div id="landing" class="relative h-[100vh] z-[10] w-full flex  xl:items-center">
    <div id="content" class="w-full flex justify-center text-white opacity-0 scale-95 transition-all duration-[4s]">
        <div class="w-full xl:w-[60%]  xl:pl-[100px] flex flex-col justify-center z-[25]">
            <div id="title" class="w-full font-bold text-8xl text-center  xl:text-left mb-4">WELCOME</div>
            <p class="text-center  xl:text-left">Lorem ipsum bla bla bla</p>
        </div>
        <div class="w-full  xl:w-[40%] px-3 absolute  xl:static">
            <div class="w-full grid grid-cols-3 gap-5 xl:gap-10">
                <div class="w-full items-container relative h-[100vh] overflow-hidden" style="--height: 40vh; --quantity: 3; --duration: 7s;">
                    <div class="absolute -top-[40vh] item rounded-full h-[40vh] w-full overflow-hidden" style="--position: 0">
                        <img src="{{asset('assets/burger.jpg')}}" alt="" class="w-full h-full object-cover object-center">
                    </div>
                    <div class="absolute -top-[40vh] item rounded-full h-[40vh] w-full overflow-hidden" style="--position: 1">
                        <img src="{{asset('assets/burger.jpg')}}" alt="" class="w-full h-full object-cover object-center">
                    </div>
                    <div class="absolute -top-[40vh] item rounded-full h-[40vh] w-full overflow-hidden" style="--position: 2">
                        <img src="{{asset('assets/burger.jpg')}}" alt="" class="w-full h-full object-cover object-center">
                    </div>
                </div>
                <div class="w-full items-container-reverse relative h-[100vh] overflow-hidden" style="--height: 40vh; --quantity: 3; --duration: 14s;">
                    <div class="absolute top-[100vh] item rounded-full h-[40vh] w-full overflow-hidden" style="--position: 0">
                        <img src="{{asset('assets/burger.jpg')}}" alt="" class="w-full h-full object-cover object-center">
                    </div>
                    <div class="absolute top-[100vh] item rounded-full h-[40vh] w-full overflow-hidden" style="--position: 1">
                        <img src="{{asset('assets/burger.jpg')}}" alt="" class="w-full h-full object-cover object-center">
                    </div>
                    <div class="absolute top-[100vh] item rounded-full h-[40vh] w-full overflow-hidden" style="--position: 2">
                        <img src="{{asset('assets/burger.jpg')}}" alt="" class="w-full h-full object-cover object-center">
                    </div>
                </div>
                <div class="w-full items-container relative h-[100vh] overflow-hidden" style="--height: 40vh; --quantity: 3; --duration: 10s;">
                    <div class="absolute -top-[40vh] item rounded-full h-[40vh] w-full overflow-hidden" style="--position: 0">
                        <img src="{{asset('assets/burger.jpg')}}" alt="" class="w-full h-full object-cover object-center">
                    </div>
                    <div class="absolute -top-[40vh] item rounded-full h-[40vh] w-full overflow-hidden" style="--position: 1">
                        <img src="{{asset('assets/burger.jpg')}}" alt="" class="w-full h-full object-cover object-center">
                    </div>
                    <div class="absolute -top-[40vh] item rounded-full h-[40vh] w-full overflow-hidden" style="--position: 2">
                        <img src="{{asset('assets/burger.jpg')}}" alt="" class="w-full h-full object-cover object-center">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<script>
    setTimeout(() => {
        $('#content').removeClass('opacity-0 scale-95').addClass('opacity-100 scale-100');
    }, 0);
</script>