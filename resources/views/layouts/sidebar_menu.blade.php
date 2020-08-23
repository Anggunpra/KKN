<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="{{ url('/') }}">O</a>
    </div>
    <ul class="sidebar-menu">
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
        </li>
        @role('Perangkat Desa')
        <li class="nav-item">
            <a href="{{ route('user.main') }}" class="nav-link"><i class="fas fa-users"></i><span>Daftar
                    Pengguna</span></a>
        </li>
        <li class="nav-item">
            <a href="{{ route('letter.main') }}" class="nav-link"><i class="fas fa-sticky-note"></i><span>Daftar
                    Pengajuan Surat</span></a>
        </li>
        <li class="nav-item">
            <a href="{{ route('official.main') }}" class="nav-link"><i class="fas fa-users"></i><span>Daftar Pejabat Desa</span></a>
        </li>
        <li class="nav-item">
            <a href="{{ route('information.main') }}" class="nav-link"><i class="fas fa-newspaper"></i><span>Daftar
                    Informasi</span></a>
        </li>
        <li class="nav-item">
            <a href="{{ route('category.main') }}" class="nav-link"><i class="fas fa-tags"></i><span>Daftar
                    Kategori</span></a>
        </li>
        <li class="nav-item">
            <a href="{{ route('atribute.main') }}" class="nav-link"><i class="fab fa-wpforms"></i><span>Daftar
                    Atribut</span></a>
        </li>
        <li class="nav-item">
            <a href="{{ route('periode.main') }}" class="nav-link"><i class="fas fa-calendar"></i><span>Daftar
                    Periode</span></a>
        </li>
        
        
        @endrole
        <li class="nav-item">
            <a href="{{ route('survey.main') }}" class="nav-link"><i class="fas fa-poll"></i><span>Daftar
                    Survey</span></a>
        </li>
    </ul>
</aside>