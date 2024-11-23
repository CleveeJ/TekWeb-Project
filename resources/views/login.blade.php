<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<script src="https://cdn.tailwindcss.com"></script>
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


<section class="bg-[#33363d] flex items-center justify-center flex-col h-screen">

    <div class="konten bg-[linear-gradient(to_right,_#242124,_#222021)] rounded-[30px] [box-shadow:0_5px_15px_rgba(0,_0,_0,_0.35)] relative overflow-hidden w-[768px] max-w-full min-h-[480px]" id="konten">
        <div class="form-konten sign-up absolute top-[0] h-full transition-all ease-in-out duration-700 left-[0] w-1/2">
            <form class="bg-[linear-gradient(to_right,_#242124,_#222021)] flex items-center justify-center flex-col px-[40px] py-[0] h-full">
                <h1 class="font-semibold text-xl text-orange-600">Create Account</h1>
                <input class="bg-[#eee] border-[none] mx-[0] my-[8px] px-[15px] py-[10px] text-[13px] rounded-[8px] w-full outline-[none]" type="text" placeholder="Name">
                <input class="bg-[#eee] border-[none] mx-[0] my-[8px] px-[15px] py-[10px] text-[13px] rounded-[8px] w-full outline-[none]" type="email" placeholder="Email">
                <input class="bg-[#eee] border-[none] mx-[0] my-[8px] px-[15px] py-[10px] text-[13px] rounded-[8px] w-full outline-[none]" type="password" placeholder="Password">
                <button class="bg-orange-600 text-[#fff] text-[12px] px-[45px] py-[10px] border-[1px] border-[solid] border-[transparent] rounded-[8px] font-semibold tracking-[0.5px] uppercase mt-[10px] cursor-pointer">Sign Up</button>
            </form>
        </div>
        <div class="form-konten sign-in bg-[linear-gradient(to_right,_#242124,_#222021)] absolute top-[0] h-full transition-all ease-in-out duration-700 left-[0] w-1/2 z-2">
            <form class="bg-[linear-gradient(to_right,_#242124,_#222021)] flex items-center justify-center flex-col px-[40px] py-[0] h-full">
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
    </script>
</section>