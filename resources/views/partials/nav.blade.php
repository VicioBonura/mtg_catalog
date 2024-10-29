{{-- resources/views/partials/nav.blade.php --}}
<nav>
    <ul>
        <li><a href="{{ route('home') }}" title="Dashboard"><i class="bi bi-pie-chart-fill"></i><span class="visually-hidden">Dashboard</span></a></li>
        <li><a href="{{ route('cards.index') }}" title="Carte"><i class="bi bi-stack"></i><span class="visually-hidden">Carte</span></a></li>
        <li><a href="{{ route('sets.index') }}" title="Set"><i class="bi bi-box"></i><span class="visually-hidden">Set</span></a></li>
        <li><a href="#" id="themeSwitcher" title="Switch theme"><i class="bi bi-brightness-high-fill"></i><span class="visually-hidden">Toggle theme</span></a></li>
    </ul>
</nav>
