<style>
    .container {
        background: rgba(255, 255, 255, 0.1);
        box-shadow: 0 0 10px rgba(255, 255, 255, 0.5), 
                    0 0 20px rgba(255, 255, 255, 0.4), 
                    0 0 30px rgba(255, 255, 255, 0.3);
        border: 2px solid rgba(255, 255, 255, 0.2);
        position: relative;
    }
    .container:hover {
        box-shadow: 0 0 15px rgba(255, 255, 255, 0.8), 
                    0 0 30px rgba(255, 255, 255, 0.7), 
                    0 0 45px rgba(255, 255, 255, 0.6);
    }
</style>

<div class="relative h-screen mt-10">
    <img src="{{asset('assets/rempah_bg.jpeg')}}" alt="Background" class="absolute top-0 left-0 w-full h-full object-cover">
    <div class="flex items-center justify-center h-full relative z-10 text-white">
        <div class="container rounded-xl shadow-lg w-96 text-center">
            <div>
                <img src="{{asset('assets/burger.jpg')}}" alt="recommendation" class="rounded-lg">
            </div>
            <div class="absolute bottom-0 left-0 right-0 p-4 bg-white bg-opacity-20 backdrop-blur-md text-white rounded-b-xl border border-white/30">
                <div class="text-3xl font-bold text-left">Tittle</div>
                <div class="text-sm text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, voluptatibus. Tempore debitis asperiores in tempora nam amet, commodi, adipisci reprehenderit odit corrupti, qui cum harum aspernatur ipsa. Totam, reprehenderit porro?</div>
                <div class="buttons grid grid-cols-[repeat(2,_130px)] grid-rows-[40px] gap-[5px] mt-[20px]">
                    <button class="border-[none] bg-[#eee] tracking-[3px] font-[Poppins] font-medium text-black">SEE MORE</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/vanilla-tilt@1.7.3/dist/vanilla-tilt.min.js"></script>

<script>
    VanillaTilt.init(document.querySelector(".container"), {
        max: 25,       // Maximum tilt angle
        speed: 400,    // Speed of the effect
        glare: true,   // Enable glare effect
        "max-glare": 0.5, // Max intensity of glare
    });
</script>
