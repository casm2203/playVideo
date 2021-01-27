<nav class="navHeader">
    <div class="divLogo">
        <i class="fas fa-play mr-2"></i>
        <span >PlayVideo</span>
    </div>
    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
        <div class="text-lg lg:flex-grow">
            <a href="{{ route('videos.index') }}"
                class="navAncla lg:inline-block lg:mt-0 hover:text-white {{ request()->routeIs('videos.index') ||  request()->routeIs('videos.showgrid') ? 'active' : '' }}">
                Inicio
            </a>
            <a href="{{ route('videos.create') }}"
                class="navAncla lg:inline-block lg:mt-0  hover:text-white  {{ request()->routeIs('videos.create') ? 'active' : '' }}">
                Agregar
            </a>
        </div>
    </div>
</nav>
