<!-- BEGIN: Side Menu -->
            <nav class="side-nav">
                <a href="" class="intro-x flex items-center pl-5 pt-4 mt-3">
                    <img alt="Midone - HTML Admin Template" class="w-6" src="../../../btb.png">
                    <span class="hidden xl:block text-white text-lg ml-3"> BTB </span>
                </a>
                <div class="side-nav__devider my-6"></div>
                <ul>
                    <li>
                        <a href="/dashboard" class="{{ Request::is('/','dashboard')? "side-menu side-menu--active":"side-menu" }}">
                            <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                            <div class="side-menu__title"> Dashboard </div>
                        </a>
                    </li>
                    {{-- <li>
                        <a href="#" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="hard-drive"></i> </div>
                            <div class="side-menu__title"> Nasabah Baru </div>
                        </a>
                    </li> --}}
                    <li>
                        <a href="/nasabah" class="{{ Request::is('nasabah*')? "side-menu side-menu--active":"side-menu" }}">
                            <div class="side-menu__icon"> <i data-lucide="file-plus"></i> </div>
                            <div class="side-menu__title"> Pendaftar </div>
                        </a>
                    </li>
                    <li>
                        <a href="/nasabah" class="{{ Request::is('data*')? "side-menu side-menu--active":"side-menu" }}">
                            <div class="side-menu__icon"> <i data-lucide="user"></i> </div>
                            <div class="side-menu__title"> Nasabah </div>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- END: Side Menu -->
