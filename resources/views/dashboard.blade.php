@extends('layouts.dashboard.main')

@section('content')
    <!-- BEGIN: Content -->
    <div class="content">
        <!-- BEGIN: Top Bar -->
        <div class="top-bar -mx-4 px-4 md:mx-0 md:px-0">
            <!-- BEGIN: Breadcrumb -->
            <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Application</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </nav>
            <!-- END: Breadcrumb -->
            <!-- BEGIN: Search -->
            <div class="intro-x relative mr-3 sm:mr-6">
                <div class="search hidden sm:block">
                    <input type="text" class="search__input form-control border-transparent" placeholder="Search...">
                    <i data-lucide="search" class="search__icon dark:text-slate-500"></i>
                </div>
                <a class="notification sm:hidden" href=""> <i data-lucide="search"
                        class="notification__icon dark:text-slate-500"></i> </a>
                <div class="search-result">
                    <div class="search-result__content">
                        <div class="search-result__content__title">Pages</div>
                        <div class="mb-5">
                            <a href="" class="flex items-center">
                                <div
                                    class="w-8 h-8 bg-success/20 dark:bg-success/10 text-success flex items-center justify-center rounded-full">
                                    <i class="w-4 h-4" data-lucide="inbox"></i> </div>
                                <div class="ml-3">Mail Settings</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div
                                    class="w-8 h-8 bg-pending/10 text-pending flex items-center justify-center rounded-full">
                                    <i class="w-4 h-4" data-lucide="users"></i> </div>
                                <div class="ml-3">Users & Permissions</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div
                                    class="w-8 h-8 bg-primary/10 dark:bg-primary/20 text-primary/80 flex items-center justify-center rounded-full">
                                    <i class="w-4 h-4" data-lucide="credit-card"></i> </div>
                                <div class="ml-3">Transactions Report</div>
                            </a>
                        </div>
                        <div class="search-result__content__title">Users</div>
                        <div class="mb-5">
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full"
                                        src="dist/images/profile-15.jpg">
                                </div>
                                <div class="ml-3">Angelina Jolie</div>
                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">
                                    angelinajolie@left4code.com</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full"
                                        src="dist/images/profile-10.jpg">
                                </div>
                                <div class="ml-3">Christian Bale</div>
                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">
                                    christianbale@left4code.com</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full"
                                        src="dist/images/profile-8.jpg">
                                </div>
                                <div class="ml-3">Tom Cruise</div>
                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">tomcruise@left4code.com
                                </div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full"
                                        src="dist/images/profile-11.jpg">
                                </div>
                                <div class="ml-3">Russell Crowe</div>
                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">
                                    russellcrowe@left4code.com</div>
                            </a>
                        </div>
                        <div class="search-result__content__title">Products</div>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone - HTML Admin Template" class="rounded-full"
                                    src="dist/images/preview-13.jpg">
                            </div>
                            <div class="ml-3">Oppo Find X2 Pro</div>
                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Smartphone &amp; Tablet
                            </div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone - HTML Admin Template" class="rounded-full"
                                    src="dist/images/preview-11.jpg">
                            </div>
                            <div class="ml-3">Sony A7 III</div>
                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Photography</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone - HTML Admin Template" class="rounded-full"
                                    src="dist/images/preview-3.jpg">
                            </div>
                            <div class="ml-3">Nikon Z6</div>
                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Photography</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone - HTML Admin Template" class="rounded-full"
                                    src="dist/images/preview-7.jpg">
                            </div>
                            <div class="ml-3">Nikon Z6</div>
                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Photography</div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- END: Search -->
            <!-- BEGIN: Notifications -->
            <div class="intro-x dropdown mr-auto sm:mr-6">
                <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button"
                    aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="bell"
                        class="notification__icon dark:text-slate-500"></i> </div>
                <div class="notification-content pt-2 dropdown-menu">
                    <div class="notification-content__box dropdown-content">
                        <div class="notification-content__title">Notifications</div>
                        <div class="cursor-pointer relative flex items-center ">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone - HTML Admin Template" class="rounded-full"
                                    src="dist/images/profile-15.jpg">
                                <div
                                    class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600">
                                </div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Angelina Jolie</a>
                                    <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>
                                </div>
                                <div class="w-full truncate text-slate-500 mt-0.5">Lorem Ipsum is simply dummy text of the
                                    printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard
                                    dummy text ever since the 1500</div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone - HTML Admin Template" class="rounded-full"
                                    src="dist/images/profile-10.jpg">
                                <div
                                    class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600">
                                </div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Christian Bale</a>
                                    <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>
                                </div>
                                <div class="w-full truncate text-slate-500 mt-0.5">There are many variations of passages of
                                    Lorem Ipsum available, but the majority have suffered alteration in some form, by
                                    injected humour, or randomi</div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone - HTML Admin Template" class="rounded-full"
                                    src="dist/images/profile-8.jpg">
                                <div
                                    class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600">
                                </div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Tom Cruise</a>
                                    <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">05:09 AM</div>
                                </div>
                                <div class="w-full truncate text-slate-500 mt-0.5">It is a long established fact that a
                                    reader will be distracted by the readable content of a page when looking at its layout.
                                    The point of using Lorem </div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone - HTML Admin Template" class="rounded-full"
                                    src="dist/images/profile-11.jpg">
                                <div
                                    class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600">
                                </div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Russell Crowe</a>
                                    <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">06:05 AM</div>
                                </div>
                                <div class="w-full truncate text-slate-500 mt-0.5">It is a long established fact that a
                                    reader will be distracted by the readable content of a page when looking at its layout.
                                    The point of using Lorem </div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone - HTML Admin Template" class="rounded-full"
                                    src="dist/images/profile-11.jpg">
                                <div
                                    class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600">
                                </div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Kate Winslet</a>
                                    <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">03:20 PM</div>
                                </div>
                                <div class="w-full truncate text-slate-500 mt-0.5">Lorem Ipsum is simply dummy text of the
                                    printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard
                                    dummy text ever since the 1500</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Notifications -->
            <!-- BEGIN: Account Menu -->
            <div class="intro-x dropdown w-8 h-8">
                <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in"
                    role="button" aria-expanded="false" data-tw-toggle="dropdown">
                    <img alt="Midone - HTML Admin Template" src="dist/images/profile-3.jpg">
                </div>
                <div class="dropdown-menu w-56">
                    <ul class="dropdown-content bg-primary text-white">
                        <li class="p-2">
                            <div class="font-medium">Angelina Jolie</div>
                            <div class="text-xs text-white/70 mt-0.5 dark:text-slate-500">DevOps Engineer</div>
                        </li>
                        <li>
                            <hr class="dropdown-divider border-white/[0.08]">
                        </li>
                        <li>
                            <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="user"
                                    class="w-4 h-4 mr-2"></i> Profile </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="edit"
                                    class="w-4 h-4 mr-2"></i> Add Account </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="lock"
                                    class="w-4 h-4 mr-2"></i> Reset Password </a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="help-circle"
                                    class="w-4 h-4 mr-2"></i> Help </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider border-white/[0.08]">
                        </li>
                        <li>
                            <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="toggle-right"
                                    class="w-4 h-4 mr-2"></i> Logout </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END: Account Menu -->
        </div>
        <!-- END: Top Bar -->
        <div class="grid grid-cols-12 gap-6">
            <div class="col-span-12 2xl:col-span-9">
                <div class="grid grid-cols-12 gap-6">
                    <!-- BEGIN: General Report -->
                    <div class="col-span-12 mt-8">
                        <div class="intro-y flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">
                                General Report
                            </h2>
                            <a href="" class="ml-auto flex items-center text-primary"> <i
                                    data-lucide="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a>
                        </div>
                        <div class="grid grid-cols-12 gap-6 mt-5">
                            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                <div class="report-box zoom-in">
                                    <div class="box p-5">
                                        <div class="flex">
                                            <i data-lucide="clipboard" class="report-box__icon text-primary"></i>
                                            <div class="ml-auto">
                                                {{-- <div class="report-box__indicator bg-success tooltip cursor-pointer"
                                                    title="33% Higher than last month"> 33% <i data-lucide="clipboard"
                                                        class="w-4 h-4 ml-0.5"></i> </div> --}}
                                            </div>
                                        </div>
                                        <div class="text-3xl font-medium leading-8 mt-6">{{ $total_pendaftar }}</div>
                                        <div class="text-base text-slate-500 mt-1">Total Pendaftar</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                <div class="report-box zoom-in">
                                    <div class="box p-5">
                                        <div class="flex">
                                            <i data-lucide="user-check" class="report-box__icon text-success"></i>
                                            <div class="ml-auto">
                                                {{-- <div class="report-box__indicator bg-danger tooltip cursor-pointer"
                                                    title="2% Lower than last month"> 2% <i data-lucide="chevron-down"
                                                        class="w-4 h-4 ml-0.5"></i> </div> --}}
                                            </div>
                                        </div>
                                        <div class="text-3xl font-medium leading-8 mt-6">{{ $nasabah_aktif }}</div>
                                        <div class="text-base text-slate-500 mt-1">Nasabah Aktif</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                <div class="report-box zoom-in">
                                    <div class="box p-5">
                                        <div class="flex">
                                            <i data-lucide="user-x" class="report-box__icon text-warning"></i>
                                            <div class="ml-auto">
                                                {{-- <div class="report-box__indicator bg-success tooltip cursor-pointer"
                                                    title="12% Higher than last month"> 12% <i data-lucide="chevron-up"
                                                        class="w-4 h-4 ml-0.5"></i> </div> --}}
                                            </div>
                                        </div>
                                        <div class="text-3xl font-medium leading-8 mt-6">{{ $nasabah_tidak_aktif }}</div>
                                        <div class="text-base text-slate-500 mt-1">Nasabah Belum Aktif</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                                <div class="report-box zoom-in">
                                    <div class="box p-5">
                                        <div class="flex">
                                            <i data-lucide="user" class="report-box__icon text-success"></i>
                                            <div class="ml-auto">
                                                {{-- <div class="report-box__indicator bg-success tooltip cursor-pointer"
                                                    title="22% Higher than last month"> 22% <i data-lucide="chevron-up"
                                                        class="w-4 h-4 ml-0.5"></i> </div> --}}
                                            </div>
                                        </div>
                                        <div class="text-3xl font-medium leading-8 mt-6">{{ $pendaftar_hari_ini }}</div>
                                        <div class="text-base text-slate-500 mt-1">Pendaftar Hari Ini</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: General Report -->
                    {{-- <!-- BEGIN: Sales Report -->
                    <div class="col-span-12 lg:col-span-6 mt-8">
                        <div class="intro-y block sm:flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">
                                Sales Report
                            </h2>
                            <div class="sm:ml-auto mt-3 sm:mt-0 relative text-slate-500">
                                <i data-lucide="calendar" class="w-4 h-4 z-10 absolute my-auto inset-y-0 ml-3 left-0"></i>
                                <input type="text" class="datepicker form-control sm:w-56 box pl-10">
                            </div>
                        </div>
                        <div class="intro-y box p-5 mt-12 sm:mt-5">
                            <div class="flex flex-col md:flex-row md:items-center">
                                <div class="flex">
                                    <div>
                                        <div class="text-primary dark:text-slate-300 text-lg xl:text-xl font-medium">
                                            $15,000</div>
                                        <div class="mt-0.5 text-slate-500">This Month</div>
                                    </div>
                                    <div
                                        class="w-px h-12 border border-r border-dashed border-slate-200 dark:border-darkmode-300 mx-4 xl:mx-5">
                                    </div>
                                    <div>
                                        <div class="text-slate-500 text-lg xl:text-xl font-medium">$10,000</div>
                                        <div class="mt-0.5 text-slate-500">Last Month</div>
                                    </div>
                                </div>
                                <div class="dropdown md:ml-auto mt-5 md:mt-0">
                                    <button class="dropdown-toggle btn btn-outline-secondary font-normal"
                                        aria-expanded="false" data-tw-toggle="dropdown"> Filter by Category <i
                                            data-lucide="chevron-down" class="w-4 h-4 ml-2"></i> </button>
                                    <div class="dropdown-menu w-40">
                                        <ul class="dropdown-content overflow-y-auto h-32">
                                            <li><a href="" class="dropdown-item">PC & Laptop</a></li>
                                            <li><a href="" class="dropdown-item">Smartphone</a></li>
                                            <li><a href="" class="dropdown-item">Electronic</a></li>
                                            <li><a href="" class="dropdown-item">Photography</a></li>
                                            <li><a href="" class="dropdown-item">Sport</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="report-chart">
                                <div class="h-[275px]">
                                    <canvas id="report-line-chart" class="mt-6 -mb-6"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Sales Report -->
                    <!-- BEGIN: Weekly Top Seller -->
                    <div class="col-span-12 sm:col-span-6 lg:col-span-3 mt-8">
                        <div class="intro-y flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">
                                Weekly Top Seller
                            </h2>
                            <a href="" class="ml-auto text-primary truncate">Show More</a>
                        </div>
                        <div class="intro-y box p-5 mt-5">
                            <div class="mt-3">
                                <div class="h-[213px]">
                                    <canvas id="report-pie-chart"></canvas>
                                </div>
                            </div>
                            <div class="w-52 sm:w-auto mx-auto mt-8">
                                <div class="flex items-center">
                                    <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                    <span class="truncate">17 - 30 Years old</span> <span
                                        class="font-medium ml-auto">62%</span>
                                </div>
                                <div class="flex items-center mt-4">
                                    <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                                    <span class="truncate">31 - 50 Years old</span> <span
                                        class="font-medium ml-auto">33%</span>
                                </div>
                                <div class="flex items-center mt-4">
                                    <div class="w-2 h-2 bg-warning rounded-full mr-3"></div>
                                    <span class="truncate">>= 50 Years old</span> <span
                                        class="font-medium ml-auto">10%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Weekly Top Seller -->
                    <!-- BEGIN: Sales Report -->
                    <div class="col-span-12 sm:col-span-6 lg:col-span-3 mt-8">
                        <div class="intro-y flex items-center h-10">
                            <h2 class="text-lg font-medium truncate mr-5">
                                Sales Report
                            </h2>
                            <a href="" class="ml-auto text-primary truncate">Show More</a>
                        </div>
                        <div class="intro-y box p-5 mt-5">
                            <div class="mt-3">
                                <div class="h-[213px]">
                                    <canvas id="report-donut-chart"></canvas>
                                </div>
                            </div>
                            <div class="w-52 sm:w-auto mx-auto mt-8">
                                <div class="flex items-center">
                                    <div class="w-2 h-2 bg-primary rounded-full mr-3"></div>
                                    <span class="truncate">17 - 30 Years old</span> <span
                                        class="font-medium ml-auto">62%</span>
                                </div>
                                <div class="flex items-center mt-4">
                                    <div class="w-2 h-2 bg-pending rounded-full mr-3"></div>
                                    <span class="truncate">31 - 50 Years old</span> <span
                                        class="font-medium ml-auto">33%</span>
                                </div>
                                <div class="flex items-center mt-4">
                                    <div class="w-2 h-2 bg-warning rounded-full mr-3"></div>
                                    <span class="truncate">>= 50 Years old</span> <span
                                        class="font-medium ml-auto">10%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Sales Report --> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content -->
@endsection
