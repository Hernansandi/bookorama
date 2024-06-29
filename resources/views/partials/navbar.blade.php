<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(133, 173, 227);">
    <div class="container">
        <div class="navbar-brand">BookOrama</div>

        <div class="mx-auto"></div>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link {{ request()->is('book') ? 'active' : '' }}" href="/book">Data Buku</a>
            </li>
        </ul>
    </div>
</nav>