        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand mx-auto my-2">
                    <a href="#">
                        <img src="{{ asset('images/logo LGR-white.svg') }}" width="150px">
                    </a>
                </li>
                <li class="{{ Request::is('rg-admin') ? 'active' : 'no' }}">
                    <a href="{{ route('admin.dashboard') }}"><i class="fas fa-tachometer-alt mr-2"></i>Beranda</a>
                </li>
                <li class="{{ Request::is('rg-admin/produk') ? 'active' : 'no'}}">
                    <a href="{{ route('admin.produk') }}"><i class="fas fa-box mr-2"></i>Produk</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->