<div id="landing" class="relative h-[100vh] z-[10] w-full flex items-center">
    <div id="content" class="w-full flex justify-center text-white opacity-0 scale-95 transition-all duration-[4s]">
        <div class="w-[60%] pl-[150px] flex flex-col justify-center">
            <div id="title" class="w-full font-bold text-4xl mb-4">WELCOME</div>
            <p>Lorem ipsum bla bla bla</p>
        </div>
        <div class="w-[40%] grid grid-cols-3">
            <div class="w-full items-container relative h-[100vh] overflow-hidden" style="--height: 300px; --quantity: 3; --duration: 7s;">
                <div class="absolute -top-[300px] item rounded-full h-[300px] w-[150px] overflow-hidden mb-4" style="--position: 0">
                    <img src="{{asset('assets/burger.jpg')}}" alt="" class="w-full h-full object-cover object-center">
                </div>
                <div class="absolute -top-[300px] item rounded-full h-[300px] w-[150px] overflow-hidden mb-4" style="--position: 1">
                    <img src="{{asset('assets/burger.jpg')}}" alt="" class="w-full h-full object-cover object-center">
                </div>
                <div class="absolute -top-[300px] item rounded-full h-[300px] w-[150px] overflow-hidden mb-4" style="--position: 2">
                    <img src="{{asset('assets/burger.jpg')}}" alt="" class="w-full h-full object-cover object-center">
                </div>
            </div>
            <div class="w-full items-container-reverse relative h-[100vh] overflow-hidden" style="--height: 300px; --quantity: 3; --duration: 14s;">
                <div class="absolute -top-[300px] item rounded-full h-[300px] w-[150px] overflow-hidden mb-4" style="--position: 0">
                    <img src="{{asset('assets/burger.jpg')}}" alt="" class="w-full h-full object-cover object-center">
                </div>
                <div class="absolute -top-[300px] item rounded-full h-[300px] w-[150px] overflow-hidden mb-4" style="--position: 1">
                    <img src="{{asset('assets/burger.jpg')}}" alt="" class="w-full h-full object-cover object-center">
                </div>
                <div class="absolute -top-[300px] item rounded-full h-[300px] w-[150px] overflow-hidden mb-4" style="--position: 2">
                    <img src="{{asset('assets/burger.jpg')}}" alt="" class="w-full h-full object-cover object-center">
                </div>
            </div>
            <div class="w-full items-container relative h-[100vh] overflow-hidden" style="--height: 300px; --quantity: 3; --duration: 10s;">
                <div class="absolute -top-[300px] item rounded-full h-[300px] w-[150px] overflow-hidden mb-4" style="--position: 0">
                    <img src="{{asset('assets/burger.jpg')}}" alt="" class="w-full h-full object-cover object-center">
                </div>
                <div class="absolute -top-[300px] item rounded-full h-[300px] w-[150px] overflow-hidden mb-4" style="--position: 1">
                    <img src="{{asset('assets/burger.jpg')}}" alt="" class="w-full h-full object-cover object-center">
                </div>
                <div class="absolute -top-[300px] item rounded-full h-[300px] w-[150px] overflow-hidden mb-4" style="--position: 2">
                    <img src="{{asset('assets/burger.jpg')}}" alt="" class="w-full h-full object-cover object-center">
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    setTimeout(() => {
        $('#content').removeClass('opacity-0 scale-95').addClass('opacity-100 scale-100');
    }, 0);
</script>