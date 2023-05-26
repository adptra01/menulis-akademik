<ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item">
        <a href="{{ route('home') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Analytics">Dashboard</div>
        </a>
    </li>

    <!-- Dashboard -->
    <li class="menu-item">
        <a href="{{ route('materials') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-list-ul"></i>
            <div data-i18n="materials">Semua Materi</div>
        </a>
    </li>

    <!-- manulis akademik -->
    <li class="menu-item">
        <a href="{{ route('academy') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bxs-graduation"></i>
            <div data-i18n="academy">Menulis Akademik</div>
        </a>
    </li>

    <!-- manulis argument -->
    <li class="menu-item">
        <a href="{{ route('argument') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-book-reader"></i>
            <div data-i18n="argument">Menulis Argument</div>
        </a>
    </li>

    <!-- Team -->
    <li class="menu-item">
        <a href="javascript:void(0)" class="menu-link menu-toggle">
            <div><i class="menu-icon tf-icons bx bxs-group"></i> Team</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item">
                <a href="{{ route('personil') }}" class="menu-link">
                    <div>Personils Team</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ route('tutor') }}" class="menu-link">
                    <div>Tutors Team</div>
                </a>
            </li>
        </ul>
    </li>
    <!-- Team -->
    <li class="menu-item">
        <a href="javascript:void(0)" class="menu-link menu-toggle">
            <div><i class="menu-icon tf-icons bx bx-detail"></i> Detail Website</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item">
                <a href="{{ route('about') }}" class="menu-link">
                    <div>Tentang</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ Route('service') }}" class="menu-link">
                    <div>Pelayanan</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{ Route('guideline') }}" class="menu-link">
                    <div>Pedoman</div>
                </a>
            </li>
        </ul>
    </li>
</ul>
