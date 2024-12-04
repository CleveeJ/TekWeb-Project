<style>
a{
    text-decoration: none;
}
.thumbnail {
    left: 100%;
}
/* animation */
.carousel .list .item:nth-child(1){
    z-index: 1;
}


/* animation text in first item */


.carousel .list .item:nth-child(1) .content .author,
.carousel .list .item:nth-child(1) .content .title,
.carousel .list .item:nth-child(1) .content .topic,
.carousel .list .item:nth-child(1) .content .des,
.carousel .list .item:nth-child(1) .content .buttons
{
    transform: translateY(50px);
    filter: blur(20px);
    opacity: 0;
    animation: showContent .5s 1s linear 1 forwards;
}
@keyframes showContent{
    to{
        transform: translateY(0px);
        filter: blur(0px);
        opacity: 1;
    }
}
.carousel .list .item:nth-child(1) .content .title{
    animation-delay: 1.2s!important;
}
.carousel .list .item:nth-child(1) .content .topic{
    animation-delay: 1.4s!important;
}
.carousel .list .item:nth-child(1) .content .des{
    animation-delay: 1.6s!important;
}
.carousel .list .item:nth-child(1) .content .buttons{
    animation-delay: 1.8s!important;
}
/* create animation when next click */
.carousel.next .list .item:nth-child(1) img{
    width: 150px;
    height: 220px;
    position: absolute;
    bottom: 50px;
    left: 50%;
    border-radius: 30px;
    animation: showImage .5s linear 1 forwards;
}
@keyframes showImage{
    to{
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-radius: 0;
    }
}


.carousel.next .thumbnail .item:nth-last-child(1){
    overflow: hidden;
    animation: showThumbnail .5s linear 1 forwards;
}
.carousel.prev .list .item img{
    z-index: 100;
}
@keyframes showThumbnail{
    from{
        width: 0;
        opacity: 0;
    }
}
.carousel.next .thumbnail{
    animation: effectNext .5s linear 1 forwards;
}


@keyframes effectNext{
    from{
        transform: translateX(150px);
    }
}




/* prev click */


.carousel.prev .list .item:nth-child(2){
    z-index: 2;
}


.carousel.prev .list .item:nth-child(2) img{
    animation: outFrame 0.5s linear 1 forwards;
    position: absolute;
    bottom: 0;
    left: 0;
}
@keyframes outFrame{
    to{
        width: 150px;
        height: 220px;
        bottom: 50px;
        left: 50%;
        border-radius: 20px;
    }
}


.carousel.prev .thumbnail .item:nth-child(1){
    overflow: hidden;
    opacity: 0;
    animation: showThumbnail .5s linear 1 forwards;
}
.carousel.next .arrows button,
.carousel.prev .arrows button{
    pointer-events: none;
}
.carousel.prev .list .item:nth-child(2) .content .author,
.carousel.prev .list .item:nth-child(2) .content .title,
.carousel.prev .list .item:nth-child(2) .content .topic,
.carousel.prev .list .item:nth-child(2) .content .des,
.carousel.prev .list .item:nth-child(2) .content .buttons
{
    animation: contentOut 1.5s linear 1 forwards!important;
}


@keyframes contentOut{
    to{
        transform: translateY(-150px);
        filter: blur(20px);
        opacity: 0;
    }
}
@media screen and (max-width: 678px) {
    .carousel .list .item .content{
        padding-right: 0;
    }
    .carousel .list .item .content .title{
        font-size: 30px;
    }
}
</style>
<section class="relative" id="leaderboard">
    <!-- carousel -->
    <div class="carousel h-screen w-full overflow-hidden relative">
        <!-- list item -->
        <div class="list">
            <div class="item w-full h-full absolute">
                <img src="{{asset('assets/burger.jpg')}}" class="w-full h-full object-cover filter brightness-[60%]">
                <div class="texts content absolute top-1/4 w-full max-w-[80%] left-2/4 -translate-x-1/2 pr-[30%] box-border text-[#fff] [text-shadow:0_5px_10px_#0004]">
                    <div class="author font-bold tracking-[10px]">LUNDEV</div>
                    <div class="title text-[5rem] font-bold leading-[1.3em]">DESIGN SLIDER</div>
                    <div class="topic text-[5rem] font-bold leading-[1.3em] text-[#f1683a]">BURGER</div>
                    <div class="des">
                        <!-- lorem 50 -->
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut sequi, rem magnam nesciunt minima placeat, itaque eum neque officiis unde, eaque optio ratione aliquid assumenda facere ab et quasi ducimus aut 
                    </div>
                    <div class="buttons grid grid-cols-[repeat(2,_130px)] grid-rows-[40px] gap-[5px] mt-[20px]">
                        <button class="border-[none] bg-[#eee] tracking-[3px] font-[Poppins] font-medium text-black">SEE MORE</button>
                        <button class="border-[none] bg-[#eee] tracking-[3px] font-[Poppins] font-medium bg-transparent border-[1px] border-[solid] border-[#fff] text-[#eee]">SUBSCRIBE</button>
                    </div>
                </div>
            </div>
            <div class="item w-full h-full absolute">
                <img src="{{asset('assets/pizza.jpg')}}" class="w-full h-full object-cover filter brightness-[60%]">
                <div class="texts content absolute top-1/4 w-full max-w-[80%] left-2/4 -translate-x-1/2 pr-[30%] box-border text-[#fff] [text-shadow:0_5px_10px_#0004]">
                    <div class="author font-bold tracking-[10px]">LUNDEV</div>
                    <div class="title text-[5rem] font-bold leading-[1.3em]">DESIGN SLIDER</div>
                    <div class="topic text-[5rem] font-bold leading-[1.3em] text-[#f1683a]">PIZZA</div>
                    <div class="des">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut sequi, rem magnam nesciunt minima placeat, itaque eum neque officiis unde, eaque optio ratione aliquid assumenda facere ab et quasi ducimus aut 
                    </div>
                    <div class="buttons grid grid-cols-[repeat(2,_130px)] grid-rows-[40px] gap-[5px] mt-[20px]">
                        <button class="border-[none] bg-[#eee] tracking-[3px] font-[Poppins] font-medium text-black">SEE MORE</button>
                        <button class="border-[none] bg-[#eee] tracking-[3px] font-[Poppins] font-medium bg-transparent border-[1px] border-[solid] border-[#fff] text-[#eee]">SUBSCRIBE</button>
                    </div>
                </div>
            </div>
            <div class="item w-full h-full absolute">
                <img src="{{asset('assets/pie.jpg')}}" class="w-full h-full object-cover filter brightness-[60%]">
                <div class="texts content absolute top-1/4 w-full max-w-[80%] left-2/4 -translate-x-1/2 pr-[30%] box-border text-[#fff] [text-shadow:0_5px_10px_#0004]">
                    <div class="author font-bold tracking-[10px]">LUNDEV</div>
                    <div class="title text-[5rem] font-bold leading-[1.3em]">DESIGN SLIDER</div>
                    <div class="topic text-[5rem] font-bold leading-[1.3em] text-[#f1683a]">PIE</div>
                    <div class="des">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut sequi, rem magnam nesciunt minima placeat, itaque eum neque officiis unde, eaque optio ratione aliquid assumenda facere ab et quasi ducimus aut 
                    </div>
                    <div class="buttons grid grid-cols-[repeat(2,_130px)] grid-rows-[40px] gap-[5px] mt-[20px]">
                        <button class="border-[none] bg-[#eee] tracking-[3px] font-[Poppins] font-medium text-black">SEE MORE</button>
                        <button class="border-[none] bg-[#eee] tracking-[3px] font-[Poppins] font-medium bg-transparent border-[1px] border-[solid] border-[#fff] text-[#eee]">SUBSCRIBE</button>
                    </div>
                </div>
            </div>
            <div class="item w-full h-full absolute">
                <img src="{{asset('assets/burger.jpg')}}" class="w-full h-full object-cover filter brightness-[60%]">
                <div class="texts content absolute top-1/4 w-full max-w-[80%] left-2/4 -translate-x-1/2 pr-[30%] box-border text-[#fff] [text-shadow:0_5px_10px_#0004]">
                    <div class="author font-bold tracking-[10px]">LUNDEV</div>
                    <div class="title text-[5rem] font-bold leading-[1.3em]">DESIGN SLIDER</div>
                    <div class="topic text-[5rem] font-bold leading-[1.3em] text-[#f1683a]">ANIMAL</div>
                    <div class="des">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut sequi, rem magnam nesciunt minima placeat, itaque eum neque officiis unde, eaque optio ratione aliquid assumenda facere ab et quasi ducimus aut 
                    </div>
                    <div class="buttons grid grid-cols-[repeat(2,_130px)] grid-rows-[40px] gap-[5px] mt-[20px]">
                        <button class="border-[none] bg-[#eee] tracking-[3px] font-[Poppins] font-medium text-black">SEE MORE</button>
                        <button class="border-[none] bg-[#eee] tracking-[3px] font-[Poppins] font-medium bg-transparent border-[1px] border-[solid] border-[#fff] text-[#eee]">SUBSCRIBE</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- list thumnail -->
        <div class="thumbnail absolute bottom-[50px] w-max flex gap-[20px] z-50">
            <div class="item w-[100px] h-[150px] flex-shrink-0 relative">
                <img class="w-full h-full object-cover rounded-[20px] filter brightness-[60%]" src="{{asset('assets/burger.jpg')}}">
                <div class="content text-[#fff] absolute bottom-[10px] left-[10px] right-[10px]">
                    <div class="title font-medium">
                        Name Slider
                    </div>
                    <div class="description font-light">
                        Description
                    </div>
                </div>
            </div>
            <div class="item w-[100px] h-[150px] flex-shrink-0 relative">
                <img class="w-full h-full object-cover rounded-[20px] filter brightness-[60%]" src="{{asset('assets/pizza.jpg')}}">
                <div class="content text-[#fff] absolute bottom-[10px] left-[10px] right-[10px]">
                    <div class="title font-medium">
                        Name Slider
                    </div>
                    <div class="description font-light">
                        Description
                    </div>
                </div>
            </div>
            <div class="item w-[100px] h-[150px] flex-shrink-0 relative">
                <img class="w-full h-full object-cover rounded-[20px] filter brightness-[60%]" src="{{asset('assets/pie.jpg')}}">
                <div class="content text-[#fff] absolute bottom-[10px] left-[10px] right-[10px]">
                    <div class="title font-medium">
                        Name Slider
                    </div>
                    <div class="description font-light">
                        Description
                    </div>
                </div>
            </div>
            <div class="item w-[100px] h-[150px] flex-shrink-0 relative">
                <img class="w-full h-full object-cover rounded-[20px] filter brightness-[60%]" src="{{asset('assets/burger.jpg')}}">
                <div class="content text-[#fff] absolute bottom-[10px] left-[10px] right-[10px]">
                    <div class="title font-medium">
                        Name Slider
                    </div>
                    <div class="description font-light">
                        Description
                    </div>
                </div>
            </div>
        </div>
        <!-- next prev -->


        <div class="arrows absolute top-[80%] right-[52%] w-[300px] max-w-[30%] flex gap-[10px] items-center z-50">
            <button class="w-[40px] h-[40px] rounded-[50%] border-[none] text-[#fff] font-[monospace] font-bold [transition:.5s] bg-yellow-600 border border-white hover:bg-[#fff] hover:text-[#000]" id="prev"><</button>
            <button class="w-[40px] h-[40px] rounded-[50%] border-[none] text-[#fff] font-[monospace] font-bold [transition:.5s] bg-yellow-600 border border-white hover:bg-[#fff] hover:text-[#000]" id="next">></button>
        </div>
    </div>
</section>
<script>
    let tl = gsap.timeline({
        scrollTrigger: {
            trigger: '.carousel',
            start: 'top center',
            end: 'bottom bottom', // end after scrolling 500px beyond the start
            scrub: true, // smooth scrubbing, takes 1 second to "catch up" to the scrollbar
            markers: false,
            duration: 5,
        }
    });
    
    tl.to('.thumbnail', {
        left: '60%'
    }, 0);

    tl.from('.texts', {
        x: '-100vw'
    }, 0);

    tl.from('.arrows', {
        x: '-100vw'
    }, 0);

    //step 1: get DOM
    let nextDom = document.getElementById('next');
    let prevDom = document.getElementById('prev');


    let carouselDom = document.querySelector('.carousel');
    let SliderDom = carouselDom.querySelector('.carousel .list');
    let thumbnailBorderDom = document.querySelector('.carousel .thumbnail');
    let thumbnailItemsDom = thumbnailBorderDom.querySelectorAll('.item');
    let timeDom = document.querySelector('.carousel .time');


    thumbnailBorderDom.appendChild(thumbnailItemsDom[0]);


    nextDom.onclick = function(){
        showSlider('next');    
    }


    prevDom.onclick = function(){
        showSlider('prev');    
    }
    let runTimeOut;
    function showSlider(type){
        let  SliderItemsDom = SliderDom.querySelectorAll('.carousel .list .item');
        let thumbnailItemsDom = document.querySelectorAll('.carousel .thumbnail .item');
    
        if(type === 'next'){
            SliderDom.appendChild(SliderItemsDom[0]);
            thumbnailBorderDom.appendChild(thumbnailItemsDom[0]);
            carouselDom.classList.add('next');
        }else{
            SliderDom.prepend(SliderItemsDom[SliderItemsDom.length - 1]);
            thumbnailBorderDom.prepend(thumbnailItemsDom[thumbnailItemsDom.length - 1]);
            carouselDom.classList.add('prev');
        }
        clearTimeout(runTimeOut);
        runTimeOut = setTimeout(() => {
            carouselDom.classList.remove('next');
            carouselDom.classList.remove('prev');
        }, 700);
    }
</script>
