@extends('layout')
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<script src="https://cdn.tailwindcss.com"></script> -->
@section('style')
<style>
    .sign-up{
        opacity: 0;
        z-index: 1;
        display: none;
    }
    .konten.active .sign-in{
        transform: translateX(100%);
    }
    .konten.active .sign-up{
        display: block;
        transform: translateX(100%);
        opacity: 1;
        z-index: 5;
        animation: move 0.6s;
    }

    @keyframes move{
        0%, 49.99%{
            opacity: 0;
            z-index: 1;
        }
        50%, 100%{
            opacity: 1;
            z-index: 5;
        }
    }
    .konten.active .toggle-konten{
        transform: translateX(-100%);
        border-radius: 0 150px 100px 0;
    }
    .konten.active .toggle{
        transform: translateX(50%);
    }
    .konten.active .toggle-left{
        transform: translateX(0);
    }
    .konten.active .toggle-right{
        transform: translateX(200%);
    }
</style>
@endSection

@section('content')
<canvas id="particleCanvas" class="absolute inset-0 w-full h-full z-0"></canvas>
<section class="bg-[#33363d] flex items-center justify-center flex-col h-screen">

    <div class="konten bg-[linear-gradient(to_right,_#242124,_#222021)] rounded-[30px] [box-shadow:0_5px_15px_rgba(0,_0,_0,_0.35)] relative overflow-hidden w-[768px] max-w-full min-h-[480px]" id="konten">
        <div class="form-konten sign-up absolute top-[0] h-full transition-all ease-in-out duration-700 left-[0] w-1/2">
            <form id="signup" action="{{route('user.signup')}}" method="POST" class="bg-[linear-gradient(to_right,_#242124,_#222021)] flex items-center justify-center flex-col px-[40px] py-[0] h-full">
                @csrf
                <h1 class="font-semibold text-xl text-orange-600">Create Account</h1>
                <input id="name" name="name" class="text-black bg-[#eee] border-[none] mx-[0] my-[8px] px-[15px] py-[10px] text-[13px] rounded-[8px] w-full outline-[none]" type="text" placeholder="Name">
                <input id="email" name="email" class="text-black bg-[#eee] border-[none] mx-[0] my-[8px] px-[15px] py-[10px] text-[13px] rounded-[8px] w-full outline-[none]" type="email" placeholder="Email">
                <input id="pass" name="pass" class="text-black bg-[#eee] border-[none] mx-[0] my-[8px] px-[15px] py-[10px] text-[13px] rounded-[8px] w-full outline-[none]" type="password" placeholder="Password">
                <button type="submit" class="bg-orange-600 text-[#fff] text-[12px] px-[45px] py-[10px] border-[1px] border-[solid] border-[transparent] rounded-[8px] font-semibold tracking-[0.5px] uppercase mt-[10px] cursor-pointer">Sign Up</button>
            </form>
        </div>
        <div class="form-konten sign-in bg-[linear-gradient(to_right,_#242124,_#222021)] absolute top-[0] h-full transition-all ease-in-out duration-700 left-[0] w-1/2 z-2">
            <form class="bg-[linear-gradient(to_right,_#242124,_#222021)] flex items-center justify-center flex-col px-[40px] py-[0] h-full">
                @csrf
                <h1 class="font-semibold text-xl text-orange-600">Sign In</h1>
                <input class="bg-[#eee] border-[none] mx-[0] my-[8px] px-[15px] py-[10px] text-[13px] rounded-[8px] w-full outline-[none]" type="email" placeholder="Email">
                <input class="bg-[#eee] border-[none] mx-[0] my-[8px] px-[15px] py-[10px] text-[13px] rounded-[8px] w-full outline-[none]" type="password" placeholder="Password">
                <button class="bg-orange-600 text-[#fff] text-[12px] px-[45px] py-[10px] border-[1px] border-[solid] border-[transparent] rounded-[8px] font-semibold tracking-[0.5px] uppercase mt-[10px] cursor-pointer">Sign In</button>
            </form>
        </div>
        <div class="toggle-konten absolute top-[0] left-2/4 w-1/2 h-full overflow-hidden transition-all ease-in-out duration-700 rounded-tl-[150px] rounded-br-[0] rounded-tr-[0] rounded-bl-[100px] z-[1000]">
            <div class="toggle bg-orange-500 h-full text-[#0d0d0d] relative -left-full w-[200%] translate-x-[0] transition-all ease-in-out duration-700">
                <div class="toggle-panel toggle-left absolute w-1/2 h-full flex items-center justify-center flex-col px-[30px] py-[0] text-center top-[0] translate-x-[0] transition-all ease-in-out duration-700 -translate-x-[200%]">
                    <h1 class="font-bold text-lg">Already have account?</h1>
                    <!-- <p class="text-[14px] leading-[20px] tracking-[0.3px] mx-[0] my-[20px]">Enter your personal details to use all of site features</p> -->
                    <button class="hilang bg-orange-600 text-[#010203] text-[12px] px-[45px] py-[10px] border-[2] border-[solid] rounded-[8px] font-semibold tracking-[0.5px] uppercase mt-[10px] cursor-pointer border border-[#3b3b3b] bg-transparent font-medium" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right absolute w-1/2 h-full flex items-center justify-center flex-col px-[30px] py-[0] text-center top-[0] translate-x-[0] transition-all ease-in-out duration-700 right-[0] translate-x-[0]">
                    <h1 class="font-bold text-lg">Don't have account?</h1>
                    <!-- <p class="text-[14px] leading-[20px] tracking-[0.3px] mx-[0] my-[20px]">Register here</p> -->
                    <button class="hilang bg-orange-600 text-[#010203] text-[12px] px-[45px] py-[10px] border-[2] border-[solid] rounded-[8px] font-semibold tracking-[0.5px] uppercase mt-[10px] cursor-pointer border border-[#3b3b3b] bg-transparent font-medium" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endSection
@section('script')
<script>
    $("#signup").on('submit',function(e){
        e.preventDefault();

        // Swal.fire({
        //     title: "Success!",
        //     text: "Halo",
        //     icon: "success",
        //     confirmButtonColor: "3085d6",
        //     confirmButtonText: "OK"
        // }).then((result) => {
        //     if (result.isConfirmed) {
        //         window.location.reload();
        //     }
        // });
        
        Swal.fire({
            title: "Are you sure with your data?",
            text: "You can only submit once!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Submit now!"
        }).then((result) => {
            if(result.isConfirmed) {
                var form = $(this)[0];
                var formData = new FormData(form);
                var method = 'POST';
                var url = "{{ route('user.signup') }}";

                $.ajax({
                    type: method,
                    url: url,
                    data: formData,
                    processData: false,
                    contentType: false,
                    cache: false,

                    success: async function(response) {
                        if (response.success) {
                            await Swal.fire({
                                title: "Success!",
                                text: response.message,
                                icon: "success",
                                confirmButtonColor: "3085d6",
                                confirmButtonText: "OK"
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.reload();
                                }
                                setTimeout(() => {
                                    window.location.reload(); 
                                }, 1500);
                            });

                        } else {
                            await Swal.fire({
                                icon:"error",
                                title: "Oopss...",
                                text: response.message,
                            });
                        }
                    },
                    error: async function(xhr, textStatus, errorThrown) {
                        await Swal.fire({
                            title: 'Oops!',
                            text: 'Something went wrong: ' + textStatus + '-' + errorThrown,
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    }
                });
            } else {
                Swal.fire({
                    title: "Cancelled!",
                    text: "Your data was not submitted.",
                    icon: "info",
                    confirmButtonText: "OK"
                });
            }
        });
        
    });
</script>
<script>
    const konten = document.getElementById('konten');
    const registerBtn = document.getElementById('register');
    const loginBtn = document.getElementById('login');

    registerBtn.addEventListener('click', () => {
        konten.classList.add("active");
    });

    loginBtn.addEventListener('click', () => {
        konten.classList.remove("active");
    });

    const canvas = document.getElementById('particleCanvas');
    const ctx = canvas.getContext('2d');

    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;

    let particles = [];
    const particleCount = 300; // Number of particles
    const mouse = {
        x: null,
        y: null,
        radius: 100 // Interaction radius
    };

    // Mouse move event
    window.addEventListener('mousemove', (event) => {
        mouse.x = event.x;
        mouse.y = event.y;
    });

    // Particle class
    class Particle {
        constructor(x, y) {
            this.x = x;
            this.y = y;
            this.size = Math.random() * 2 + 0.75; // Size for particles
            this.speedX = Math.random() * 3 - 1.5; // Random speed in x direction
            this.speedY = Math.random() * 3 - 1.5; // Random speed in y direction
        }

        update() {
            // Calculate distance from mouse
            const dx = this.x - mouse.x;
            const dy = this.y - mouse.y;
            const distance = Math.sqrt(dx * dx + dy * dy);

            // If within the interaction radius, move particle away from mouse
            if (distance < mouse.radius) {
                if (this.x < mouse.x) this.x -= 1; // Move left
                if (this.x > mouse.x) this.x += 1; // Move right
                if (this.y < mouse.y) this.y -= 1; // Move up
                if (this.y > mouse.y) this.y += 1; // Move down
            }

            // Bounce off the edges
            if (this.x < 0 || this.x > canvas.width) this.speedX *= -1;
            if (this.y < 0 || this.y > canvas.height) this.speedY *= -1;

            this.x += this.speedX;
            this.y += this.speedY;
        }

        draw() {
            ctx.fillStyle = 'rgba(255, 98, 6, 0.8)'; // Color for particles
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
            ctx.fill();
        }
    }

    // Initialize particles
    function init() {
        for (let i = 0; i < particleCount; i++) {
            particles.push(new Particle(Math.random() * canvas.width, Math.random() * canvas.height));
        }
    }

    // Animate particles
    function animate() {
        // Create a gradient from purple to black
        const gradient = ctx.createLinearGradient(0, 0, 0, canvas.height);
        gradient.addColorStop(0, 'rgba(27, 0, 32, 1)'); // Purple
        gradient.addColorStop(1, 'rgba(0, 0, 0, 1)'); // Black

        // Fill the canvas with the gradient
        ctx.fillStyle = gradient;
        ctx.fillRect(0, 0, canvas.width, canvas.height);

        // Draw lines between particles
        for (let i = 0; i < particles.length; i++) {
            particles[i].update();
            particles[i].draw();

            for (let j = i + 1; j < particles.length; j++) {
                const dx = particles[i].x - particles[j].x;
                const dy = particles[i].y - particles[j].y;
                const distance = Math.sqrt(dx * dx + dy * dy);

                // Draw a line if the distance is less than a certain threshold
                if (distance < 100) { // Adjust this value to change the connection distance
                    ctx.strokeStyle = 'rgba(225, 98, 6, 0.5)'; // Color for lines
                    ctx.lineWidth = 0.5; // Line width
                    ctx.beginPath();
                    ctx.moveTo(particles[i].x, particles[i].y);
                    ctx.lineTo(particles[j].x, particles[j].y);
                    ctx.stroke();
                }
            }
        }

        requestAnimationFrame(animate);
    }

    // Handle resizing
    window.addEventListener('resize', () => {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
    });

    // Start the animation
    init();
    animate();  

</script>

@endSection