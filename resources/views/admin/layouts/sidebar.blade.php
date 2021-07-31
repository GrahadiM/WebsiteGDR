        {{-- sidebar --}}
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link {{ Request::is('home*') ? 'active' : ''}}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            @if (Auth::user()->role_id == 1)
            <li class="nav-header">Menu Postingan</li>
            <li class="nav-item {{ Request::is('kategori*') ? 'menu-is-opening menu-open' : ''}}">
                <a href="#" class="nav-link {{ Request::is('kategori*') ? 'active' : ''}}">
                    <i class="nav-icon fa fa-tags"></i>
                    <p>
                        Kategori
                        <i class="fas fa-angle-left right"></i>
                        <span class="badge badge-info right">2</span>
                    </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('kategori-tipe.index') }}" class="nav-link {{ Request::is('kategori-tipe*') ? 'active' : ''}}">
                            <i class="nav-icon fas fa-list-ul"></i>
                            <p>Kategori Tipe</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('kategori-model.index') }}" class="nav-link {{ Request::is('kategori-model*') ? 'active' : ''}}">
                            <i class="nav-icon fas fa-list-ul"></i>
                            <p>Kategori Model</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item {{ Request::is('portofolio*') ? 'menu-is-opening menu-open' : ''}}">
                <a href="#" class="nav-link {{ Request::is('portofolio*') ? 'active' : ''}}">
                    <i class="nav-icon fas fa-photo-video"></i>
                    <p>
                        Portofolio
                        <i class="fas fa-angle-left right"></i>
                        <span class="badge badge-info right">2</span>
                    </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('portofolio-desain.index') }}" class="nav-link {{ Request::is('portofolio-desain*') ? 'active' : ''}}">
                            <i class="fas fa-layer-group nav-icon"></i>
                            <p>Desain Bangunan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('portofolio-kontruksi.index') }}" class="nav-link {{ Request::is('portofolio-kontruksi*') ? 'active' : ''}}">
                            <i class="fas fa-hammer nav-icon"></i>
                            <p>Kontruksi Bangunan</p>
                        </a>
                    </li>
                    {{-- <li class="nav-item {{ Request::is('portofolio*') ? 'active' : ''}}">
                        <a href="{{ route('portofolio-maket.index') }}" class="nav-link {{ Request::is('portofolio-maket*') ? 'active' : ''}}">
                            <i class="far fa-file-image nav-icon"></i>
                            <p>Maket</p>
                        </a>
                    </li> --}}
                </ul>
            </li>
            <li class="nav-header">Menu Pesanan</li>
            <li class="nav-item {{ Request::is('pesanan*') ? 'menu-is-opening menu-open' : ''}}">
                <a href="#" class="nav-link {{ Request::is('pesanan*') ? 'active' : ''}}">
                    <i class="nav-icon fas fa-cart-arrow-down"></i>
                    <p>
                        Pesanan
                        <i class="right fas fa-angle-left"></i>
                        <span class="badge badge-info right">2</span>
                    </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('pesanan-desain.index') }}" class="nav-link {{ Request::is('pesanan-desain*') ? 'active' : ''}}">
                        <i class="fas fa-layer-group nav-icon"></i>
                        <p>Desain Bangunan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('pesanan-kontruksi.index') }}" class="nav-link {{ Request::is('pesanan-kontruksi*') ? 'active' : ''}}">
                        <i class="fas fa-hammer nav-icon"></i>
                        <p>Kontruksi Bangunan</p>
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a href="{{ route('pesanan-maket.index') }}" class="nav-link {{ Request::is('pesanan-maket*') ? 'active' : ''}}">
                        <i class="far fa-file-image nav-icon"></i>
                        <p>Maket</p>
                        </a>
                    </li> --}}
                </ul>
            </li>
            <li class="nav-header">Menu Validasi Pembayaran</li>
            <li class="nav-item {{ Request::is('pembayaran*') ? 'menu-is-opening menu-open' : ''}}">
                <a href="#" class="nav-link {{ Request::is('pembayaran*') ? 'active' : ''}}">
                    <i class="nav-icon fas fa-cash-register"></i>
                    <p>
                        Pembayaran
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('pembayaran.index') }}" class="nav-link {{ Request::is('pembayaran*') ? 'active' : ''}}">
                            <i class="fas fa-money-check-alt nav-icon"></i>
                        <p>Validasi Pembayaran</p>
                        </a>
                    </li>
                </ul>
            </li>
            @endif
            <li class="nav-header">Menu Progres</li>
            <li class="nav-item {{ Request::is('progres*') ? 'menu-is-opening menu-open' : ''}}">
                <a href="#" class="nav-link {{ Request::is('progres*') ? 'active' : ''}}">
                    <i class="nav-icon fas fa-business-time"></i>
                    <p>
                        Progres
                        <i class="right fas fa-angle-left"></i>
                        <span class="badge badge-info right">2</span>
                    </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                    <li class="nav-item">
                        <a href="{{ route('progres-desain.index') }}" class="nav-link {{ Request::is('progres-desain*') ? 'active' : ''}}">
                        <i class="fas fa-layer-group nav-icon"></i>
                        <p>Desain Bangunan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('progres-kontruksi.index') }}" class="nav-link {{ Request::is('progres-kontruksi*') ? 'active' : ''}}">
                        <i class="fas fa-hammer nav-icon"></i>
                        <p>Kontruksi Bangunan</p>
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a href="{{ route('progres-maket.index') }}" class="nav-link {{ Request::is('progres-maket*') ? 'active' : ''}}">
                        <i class="far fa-file-image nav-icon"></i>
                        <p>Maket</p>
                        </a>
                    </li> --}}
                </ul>
            </li>
            @if (Auth::user()->role_id == 1)
            <li class="nav-header">Menu Setting</li>
            <li class="nav-item">
                <a href="{{ route('setting-akun.index') }}" class="nav-link {{ Request::is('setting-akun*') ? 'active' : ''}}">
                    <i class="nav-icon fas fa-users-cog"></i>
                    <p>Setting Akun</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('setting-mandor.index') }}" class="nav-link {{ Request::is('setting-mandor*') ? 'active' : ''}}">
                    <i class="nav-icon fas fa-user-cog"></i>
                    <p>Data Mandor</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('setting-pelanggan.index') }}" class="nav-link {{ Request::is('setting-pelanggan*') ? 'active' : ''}}">
                    <i class="nav-icon fas fa-user-cog"></i>
                    <p>Data Pelanggan</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('setting.index') }}" class="nav-link {{ Request::is('setting') ? 'active' : ''}}">
                    <i class="nav-icon fas fa-cogs"></i>
                    <p>Setting Website</p>
                </a>
            </li>
            @endif
        </ul>