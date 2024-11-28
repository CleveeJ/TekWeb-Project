<div class="fixed top-0 left-0 w-full z-[2500]">
    <div class="relative w-full h-[60px] max-width-[1200px] mx-0 my-auto flex justify-between items-center py-2 px-[2rem]">
        <div>
            <a href="">Welcome</a>
        </div>
        <ul class="hidden lg:flex list-none gap-5 text-lg">
            <li><a href="#landing">Home</a></li>
            <li><a href="#leaderboard">Top 5</a></li>
            <li><a href="#recommendation">Recommendation</a></li>
            <li><a href="">Home</a></li>
        </ul>
        <a href="" class="hidden lg:block bg-red-500 text-white px-[1rem] py-[0.5rem] border-none outline-none rounded-[20px] text-[0.8rem] font-bold cursor-pointer">Get Started</a>
        <div id="dropdown" class="font-bold w-[24px] cursor-pointer lg:hidden">
            <svg class="fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M0 80c0-8.8 7.2-16 16-16l416 0c8.8 0 16 7.2 16 16s-7.2 16-16 16L16 96C7.2 96 0 88.8 0 80zM0 240c0-8.8 7.2-16 16-16l416 0c8.8 0 16 7.2 16 16s-7.2 16-16 16L16 256c-8.8 0-16-7.2-16-16zM448 400c0 8.8-7.2 16-16 16L16 416c-8.8 0-16-7.2-16-16s7.2-16 16-16l416 0c8.8 0 16 7.2 16 16z"/></svg>
        </div>
        <div id="menu" class="absolute sm:end-[2rem] top-[60px] h-0 sm:w-[300px] bg-[rgba(255, 255, 255, 0.1)] backdrop-blur-lg rounded-[10px] overflow-hidden transition-[height] duration-200 ease-[cubic-bezier(0.175,0.885,0.32,1.275)] lg:hidden" style="width: calc(100% - 4rem)">
            <ul class="list-none">
                <li class="p-[0.7rem] flex items-center justify-center"><a href="">Home</a></li>
                <li class="p-[0.7rem] flex items-center justify-center"><a href="">Home</a></li>
                <li class="p-[0.7rem] flex items-center justify-center"><a href="">Home</a></li>
                <li class="p-[0.7rem] flex items-center justify-center"><a href="">Home</a></li>
                <li class="p-[0.7rem] flex items-center justify-center"><a href="" class="w-full flex justify-center bg-red-500 text-white px-[1rem] py-[0.5rem] border-none outline-none rounded-[20px] text-[0.8rem] font-bold cursor-pointer">Get Started</a></li>
            </ul>
        </div>
    </div>
</div>


<script>
    const toggleBtn = document.getElementById('dropdown');
    const menu = document.getElementById('menu');
    toggleBtn.onclick = function () {
        menu.classList.toggle('h-0');
        menu.classList.toggle('h-[240px]');

        const isOpen = menu.classList.contains('h-[240px]');

        toggleBtn.innerHTML = "";
        toggleBtn.innerHTML = isOpen 
        ? `<svg class="fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>`
        : `<svg class="fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M0 80c0-8.8 7.2-16 16-16l416 0c8.8 0 16 7.2 16 16s-7.2 16-16 16L16 96C7.2 96 0 88.8 0 80zM0 240c0-8.8 7.2-16 16-16l416 0c8.8 0 16 7.2 16 16s-7.2 16-16 16L16 256c-8.8 0-16-7.2-16-16zM448 400c0 8.8-7.2 16-16 16L16 416c-8.8 0-16-7.2-16-16s7.2-16 16-16l416 0c8.8 0 16 7.2 16 16z"/></svg>`
    }
</script>