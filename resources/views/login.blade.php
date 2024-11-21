<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap');


*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
}


.konten.active .sign-in{
    transform: translateX(100%);
}

.konten.active .sign-up{
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
<section class="bg-[#c9d6ff] bg-[linear-gradient(to_right,_#e2e2e2,_#c9d6ff)] flex items-center justify-center flex-col h-screen">

    <div class="konten bg-[#fff] rounded-[30px] [box-shadow:0_5px_15px_rgba(0,_0,_0,_0.35)] relative overflow-hidden w-[768px] max-w-full min-h-[480px]" id="konten">
        <div class="form-konten sign-up absolute top-[0] h-full [transition:all_0.6s_ease-in-out] left-[0] w-1/2 opacity-0 z-1">
            <form class="bg-[#fff] flex items-center justify-center flex-col px-[40px] py-[0] h-full">
                <h1 class="font-semibold text-lg">Create Account</h1>
                <input class="bg-[#eee] border-[none] mx-[0] my-[8px] px-[15px] py-[10px] text-[13px] rounded-[8px] w-full outline-[none]" type="text" placeholder="Name">
                <input class="bg-[#eee] border-[none] mx-[0] my-[8px] px-[15px] py-[10px] text-[13px] rounded-[8px] w-full outline-[none]" type="email" placeholder="Email">
                <input class="bg-[#eee] border-[none] mx-[0] my-[8px] px-[15px] py-[10px] text-[13px] rounded-[8px] w-full outline-[none]" type="password" placeholder="Password">
                <button class="bg-[#512da8] text-[#fff] text-[12px] px-[45px] py-[10px] border-[1px] border-[solid] border-[transparent] rounded-[8px] font-semibold tracking-[0.5px] uppercase mt-[10px] cursor-pointer">Sign Up</button>
            </form>
        </div>
        <div class="form-konten sign-in absolute top-[0] h-full [transition:all_0.6s_ease-in-out] left-[0] w-1/2 z-2">
            <form class="bg-[#fff] flex items-center justify-center flex-col px-[40px] py-[0] h-full">
                <h1 class="font-semibold text-lg">Sign In</h1>
                <input class="bg-[#eee] border-[none] mx-[0] my-[8px] px-[15px] py-[10px] text-[13px] rounded-[8px] w-full outline-[none]" type="email" placeholder="Email">
                <input class="bg-[#eee] border-[none] mx-[0] my-[8px] px-[15px] py-[10px] text-[13px] rounded-[8px] w-full outline-[none]" type="password" placeholder="Password">
                <button class="bg-[#512da8] text-[#fff] text-[12px] px-[45px] py-[10px] border-[1px] border-[solid] border-[transparent] rounded-[8px] font-semibold tracking-[0.5px] uppercase mt-[10px] cursor-pointer">Sign In</button>
            </form>
        </div>
        <div class="toggle-konten absolute top-[0] left-2/4 w-1/2 h-full overflow-hidden [transition:all_0.6s_ease-in-out] rounded-tl-[150px] rounded-br-[0] rounded-tr-[0] rounded-bl-[100px]">
            <div class="toggle bg-[#512da8] h-full bg-[linear-gradient(to_right,_#5c6bc0,_#512da8)] text-[#fff] relative -left-full w-[200%] translate-x-[0] [transition:all_0.6s_ease-in-out]">
                <div class="toggle-panel toggle-left absolute w-1/2 h-full flex items-center justify-center flex-col px-[30px] py-[0] text-center top-[0] translate-x-[0] [transition:all_0.6s_ease-in-out] -translate-x-[200%]">
                    <h1 class="font-semibold text-lg">Welcome Back!</h1>
                    <p class="text-[14px] leading-[20px] tracking-[0.3px] mx-[0] my-[20px]">Enter your personal details to use all of site features</p>
                    <button class="hilang bg-[#512da8] text-[#fff] text-[12px] px-[45px] py-[10px] border-[1px] border-[solid] border-[transparent] rounded-[8px] font-semibold tracking-[0.5px] uppercase mt-[10px] cursor-pointer border border-white bg-transparent" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right absolute w-1/2 h-full flex items-center justify-center flex-col px-[30px] py-[0] text-center top-[0] translate-x-[0] [transition:all_0.6s_ease-in-out] right-[0] translate-x-[0]">
                    <h1 class="font-semibold text-lg">Hello, Friend!</h1>
                    <p class="text-[14px] leading-[20px] tracking-[0.3px] mx-[0] my-[20px]">Register with your personal details to use all of site features</p>
                    <button class="hilang bg-[#512da8] text-[#fff] text-[12px] px-[45px] py-[10px] border-[1px] border-[solid] border-[transparent] rounded-[8px] font-semibold tracking-[0.5px] uppercase mt-[10px] cursor-pointer border border-white bg-transparent" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
<script>
    const container = document.getElementById('konten');
    const registerBtn = document.getElementById('register');
    const loginBtn = document.getElementById('login');

    registerBtn.addEventListener('click', () => {
        container.classList.add("active");
    });

    loginBtn.addEventListener('click', () => {
        container.classList.remove("active");
    });
</script>
</section>
