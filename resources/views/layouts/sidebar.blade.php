
<li class="nav-item">
    <a class="nav-link" href="{{ route('dashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-home"></i>
        <span>Halaman Utama</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('slider') }}">Manajemen Slider</a>
            <a class="collapse-item" href="{{ route('tentang') }}">Tentang</a>
            <a class="collapse-item" href="{{ route('karosel') }}">Karosel</a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#profil"
        aria-expanded="true" aria-controls="profil">
        <i class="fas fa-fw fa-user"></i>
        <span>Profil</span>
    </a>
    <div id="profil" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('profil') }}">Manajemen Profil</a>
            <a class="collapse-item" href="{{ route('fasilitas') }}">Tambah Fasilitas</a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ route('program') }}">
        <i class="fas fa-fw fa-tasks"></i>
        <span>Program</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#kategoriproduk"
        aria-expanded="true" aria-controls="kategoriproduk">
        <i class="fas fa-fw fa-flask"></i>
        <span>Produk</span>
    </a>
    <div id="kategoriproduk" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('kategoriproduk') }}">Kategori</a>
            <a class="collapse-item" href="{{ route('produk') }}">Manajemen Produk</a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link" href="{{ route('berita') }}">
        <i class="fas fa-fw fa-info-circle"></i>
        <span>Manajemen Berita</span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#virtual-tour"
        aria-expanded="true" aria-controls="virtual-tour">
        <i class="fas fa-fw fa-vr-cardboard"></i>
        <span>Virtual Tour</span>
    </a>
    <div id="virtual-tour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('lab') }}">Laboraturium</a>
            <a class="collapse-item" href="{{ route('scene') }}">Scene</a>
            <a class="collapse-item" href="{{ route('hotspot') }}">Hotspot</a>
            <a class="collapse-item" href="{{ route('objek') }}">Object</a>
        </div>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#bisnis"
        aria-expanded="true" aria-controls="bisnis">
        <i class="fas fa-fw fa-briefcase"></i>
        <span>Bisnis dan Inovasi</span>
    </a>
    <div id="bisnis" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('lapetek-kategori') }}">Lapetek Kategori</a>
            <a class="collapse-item" href="{{ route('lapetek') }}">Pengembangan Teknologi</a>
            <a class="collapse-item" href="{{ route('laytek-kategori') }}">Laytek Kategori</a>
            <a class="collapse-item" href="{{ route('laytek') }}">Layanan Teknis</a>
            <a class="collapse-item" href="{{ route('hotspot') }}">Inkubasi Teknologi</a>
        </div>
    </div>
</li>

@if (Auth::check() && Auth::user()->level == 'supervisor')
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#db_tekno"
        aria-expanded="true" aria-controls="db_tekno">
        <i class="fas fa-fw fa-database"></i>
        <span>Database Teknologi</span>
    </a>
    <div id="db_tekno" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('bidang') }}">Bidang</a>
            <a class="collapse-item" href="{{ route('kedeputian') }}">kedeputian</a>
            <a class="collapse-item" href="{{ route('pemasaran') }}">Pemasaran</a>
            <a class="collapse-item" href="{{ route('skala_dampak_ekonomi') }}">Skala Dampak Ekonomi</a>
            <a class="collapse-item" href="{{ route('skala_dampak_teknologi') }}">Skala Dampak Teknologi</a>
            <a class="collapse-item" href="{{ route('tkt') }}">Tkt</a>
            <a class="collapse-item" href="{{ route('unit_kerja') }}">Unit Kerja</a>
            <a class="collapse-item" href="{{ route('kompetensi') }}">Kompetensi</a>
            <a class="collapse-item" href="{{ route('layanantekno') }}">Layanan Teknologi</a>
            <a class="collapse-item" href="{{ route('produktekno') }}">Produk Teknologi</a>


        </div>
    </div>
</li>
@elseif (Auth::check() && Auth::user()->level == 'admin')
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#db_tekno"
        aria-expanded="true" aria-controls="db_tekno">
        <i class="fas fa-fw fa-database"></i>
        <span>Database Teknologi</span>
    </a>
    <div id="db_tekno" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('bidang') }}">Bidang</a>
            <a class="collapse-item" href="{{ route('kedeputian') }}">kedeputian</a>
            <a class="collapse-item" href="{{ route('pemasaran') }}">Pemasaran</a>
            <a class="collapse-item" href="{{ route('skala_dampak_ekonomi') }}">Skala Dampak Ekonomi</a>
            <a class="collapse-item" href="{{ route('skala_dampak_teknologi') }}">Skala Dampak Teknologi</a>
            <a class="collapse-item" href="{{ route('tkt') }}">Tkt</a>
            <a class="collapse-item" href="{{ route('unit_kerja') }}">Unit Kerja</a>
            <a class="collapse-item" href="{{ route('kompetensi') }}">Kompetensi</a>
            <a class="collapse-item" href="{{ route('layanantekno') }}">Layanan Teknologi</a>
            <a class="collapse-item" href="{{ route('produktekno') }}">Produk Teknologi</a>


        </div>
    </div>
</li>
    
@endif

{{-- <li class="nav-item">
    <a class="nav-link" href="{{ route('program') }}">
        <i class="fas fa-fw fa-circle"></i>
        <span>Pengaturan</span>
    </a>
</li> --}}
@if (Auth::check() && Auth::user()->level == 'admin')
<li class="nav-item">
    <a class="nav-link" href="{{ route('user') }}">
        <i class="fas fa-fw fa-user-cog"></i>
        <span>Manajemen User</span>
    </a>
</li>
@endif

