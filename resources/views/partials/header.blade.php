<nav class="bg-gray-800 p-3 flex flex-col md:flex-row justify-between">
    <div class="flex items-center mb-4 md:mb-0">
        <a href="{{ route('posts') }}" class="text-white text-2xl font-bold">BLOG✍</a>
    </div>
    <div class="">
        <ul class="flex flex-col md:flex-row items-center space-y-2 md:space-y-1 md:space-x-4 " id="navLinks">
            <li><a href="{{ route('posts') }}" class="text-white hover:underline" wire:navigate>HOME</a></li>
            {{-- @auth --}}
                <li><a href="{{ route('posts.create') }}" class="text-white hover:underline" wire:navigate>CREATE POST</a></li>
            {{-- @endauth --}}
            <li><a href="{{ route('posts') }}" class="text-white hover:underline" wire:navigate>BLOG</a></li>
            <li><a href="{{ route('contact') }}" class="text-white hover:underline" wire:navigate>CONTACT</a></li>
            <li><a href="{{ route('about')}}" class="text-white hover:underline" wire:navigate>ABOUT</a></li>
            {{-- <li><a href="{{ route('')}}" class="text-white hover:underline" wire:navigate>LINK 3</a></li> --}}
        </ul>
    </div>
    <div class="flex items-center ml-4 md:hidden">
        <button id="menuToggle" class="text-white focus:outline-none">
            <span class="block">&#9776;</span>
        </button>
    </div>

    <div class="flex space-x-4">
        <a href="#" class="text-blue-500"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="text-blue-500"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="text-blue-500"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="text-blue-500"><i class="bx bxl-linkedin"></i></a>
        <a href="#" class="text-blue-500"><i class="bx bxl-pinterest"></i></a>
    </div>
    
</nav>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const menuToggle = document.getElementById('menuToggle');
        const navLinks = document.getElementById('navLinks');

        menuToggle.addEventListener('click', function () {
            navLinks.classList.toggle('hidden');
        });
    });
</script>
