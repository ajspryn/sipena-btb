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
                    <li class="breadcrumb-item"><a href="#">Data Nasabah</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail Nasabah</li>
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
                                    <i class="w-4 h-4" data-lucide="inbox"></i>
                                </div>
                                <div class="ml-3">Mail Settings</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div
                                    class="w-8 h-8 bg-pending/10 text-pending flex items-center justify-center rounded-full">
                                    <i class="w-4 h-4" data-lucide="users"></i>
                                </div>
                                <div class="ml-3">Users & Permissions</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div
                                    class="w-8 h-8 bg-primary/10 dark:bg-primary/20 text-primary/80 flex items-center justify-center rounded-full">
                                    <i class="w-4 h-4" data-lucide="credit-card"></i>
                                </div>
                                <div class="ml-3">Transactions Report</div>
                            </a>
                        </div>
                        <div class="search-result__content__title">Users</div>
                        <div class="mb-5">
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full"
                                        src="dist/images/profile-2.jpg">
                                </div>
                                <div class="ml-3">Denzel Washington</div>
                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">
                                    denzelwashington@left4code.com</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full"
                                        src="dist/images/profile-2.jpg">
                                </div>
                                <div class="ml-3">Denzel Washington</div>
                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">
                                    denzelwashington@left4code.com</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full"
                                        src="dist/images/profile-1.jpg">
                                </div>
                                <div class="ml-3">Russell Crowe</div>
                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">
                                    russellcrowe@left4code.com</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full"
                                        src="dist/images/profile-2.jpg">
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
                            <div class="ml-3">Nike Air Max 270</div>
                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Sport &amp; Outdoor</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone - HTML Admin Template" class="rounded-full"
                                    src="dist/images/preview-12.jpg">
                            </div>
                            <div class="ml-3">Oppo Find X2 Pro</div>
                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Smartphone &amp; Tablet
                            </div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone - HTML Admin Template" class="rounded-full"
                                    src="dist/images/preview-5.jpg">
                            </div>
                            <div class="ml-3">Nike Air Max 270</div>
                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Sport &amp; Outdoor</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone - HTML Admin Template" class="rounded-full"
                                    src="dist/images/preview-10.jpg">
                            </div>
                            <div class="ml-3">Apple MacBook Pro 13</div>
                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">PC &amp; Laptop</div>
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
                                    src="dist/images/profile-2.jpg">
                                <div
                                    class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600">
                                </div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Denzel Washington</a>
                                    <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>
                                </div>
                                <div class="w-full truncate text-slate-500 mt-0.5">Contrary to popular belief, Lorem Ipsum
                                    is not simply random text. It has roots in a piece of classical Latin literature from 45
                                    BC, making it over 20</div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone - HTML Admin Template" class="rounded-full"
                                    src="dist/images/profile-2.jpg">
                                <div
                                    class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600">
                                </div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Denzel Washington</a>
                                    <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">05:09 AM</div>
                                </div>
                                <div class="w-full truncate text-slate-500 mt-0.5">Lorem Ipsum is simply dummy text of the
                                    printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard
                                    dummy text ever since the 1500</div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone - HTML Admin Template" class="rounded-full"
                                    src="dist/images/profile-1.jpg">
                                <div
                                    class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600">
                                </div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Russell Crowe</a>
                                    <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">05:09 AM</div>
                                </div>
                                <div class="w-full truncate text-slate-500 mt-0.5">There are many variations of passages of
                                    Lorem Ipsum available, but the majority have suffered alteration in some form, by
                                    injected humour, or randomi</div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone - HTML Admin Template" class="rounded-full"
                                    src="dist/images/profile-2.jpg">
                                <div
                                    class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600">
                                </div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Russell Crowe</a>
                                    <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">06:05 AM</div>
                                </div>
                                <div class="w-full truncate text-slate-500 mt-0.5">Contrary to popular belief, Lorem Ipsum
                                    is not simply random text. It has roots in a piece of classical Latin literature from 45
                                    BC, making it over 20</div>
                            </div>
                        </div>
                        <div class="cursor-pointer relative flex items-center mt-5">
                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                <img alt="Midone - HTML Admin Template" class="rounded-full"
                                    src="dist/images/profile-4.jpg">
                                <div
                                    class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600">
                                </div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Angelina Jolie</a>
                                    <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>
                                </div>
                                <div class="w-full truncate text-slate-500 mt-0.5">Contrary to popular belief, Lorem Ipsum
                                    is not simply random text. It has roots in a piece of classical Latin literature from 45
                                    BC, making it over 20</div>
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
                    <img alt="Midone - HTML Admin Template" src="dist/images/profile-4.jpg">
                </div>
                <div class="dropdown-menu w-56">
                    <ul class="dropdown-content bg-primary text-white">
                        <li class="p-2">
                            <div class="font-medium">Denzel Washington</div>
                            <div class="text-xs text-white/70 mt-0.5 dark:text-slate-500">Software Engineer</div>
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
        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Invoice Layout
            </h2>
            <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                <button class="btn btn-primary shadow-md mr-2">Print</button>
                <div class="dropdown ml-auto sm:ml-0">
                    <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                        <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4"
                                data-lucide="plus"></i> </span>
                    </button>
                    <div class="dropdown-menu w-40">
                        <div class="dropdown-content">
                            <a href="" class="dropdown-item"> <i data-lucide="file" class="w-4 h-4 mr-2"></i>
                                Export Word </a>
                            <a href="" class="dropdown-item"> <i data-lucide="file" class="w-4 h-4 mr-2"></i>
                                Export PDF </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BEGIN: Invoice -->
        <div class="intro-y box overflow-hidden mt-5">
            <div class="flex flex-col lg:flex-row pt-10 px-5 sm:px-20 sm:pt-20 lg:pb-20 text-center sm:text-left">
                <div class="font-semibold text-primary text-3xl">
                    <img src="../../../logo.png" alt="" class="h-12">
                </div>
                <div class="mt-20 lg:mt-0 lg:ml-auto lg:text-right">
                    <div class="text-xl text-primary font-medium ml-1">
                        <img src="../../../logoib.png" alt="" class="h-12">
                    </div>
                    {{-- <div class="mt-1">left4code@gmail.com</div>
                    <div class="mt-1">8023 Amerige Street Harriman, NY 10926.</div> --}}
                </div>
            </div>
            <!-- BEGIN: Profile Info -->
            <div class="intro-y box px-5 pt-5 mt-5">
                <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                    <div class="flex flex-1 px-5 items-center justify-center lg:justify-start">
                        <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                            <img src={{ asset('storage/' . $nasabah->foto_ktp) }}>
                        </div>
                        <div class="ml-5">
                            <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">
                                {{ $nasabah->nama_lengkap }}</div>
                            <div class="text-slate-500">{{ $nasabah->no_tanda_pengenal }}</div>
                        </div>
                    </div>
                    <div
                        class="mt-6 lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                        <div class="font-medium text-center lg:text-left lg:mt-3">Detail Profile</div>
                        <div class="flex flex-col justify-center items-center lg:items-start mt-4">
                            <tr>
                                <td>Nama Singkat</td>
                                <td> : {{ $nasabah->nama_singkat }}</td>
                            </tr>
                        </div>
                        <div class="flex flex-col justify-center items-center lg:items-start mt-4">
                            <tr>
                                <td>Alamat KTP</td>
                                <td> : {{ $nasabah->alamat }},
                                    {{ $nasabah->rt }},{{ $nasabah->rw }},{{ $nasabah->kab_kota }} {{ $nasabah->kode_pos }}</td>
                            </tr>
                        </div>
                        <div class="flex flex-col justify-center items-center lg:items-start mt-4">
                            <tr>
                                <td>No Telp</td>
                                <td> : {{ $nasabah->no_telp_hp }}</td>
                            </tr>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Profile Info -->
            {{-- <div class="px-5 sm:px-16 py-10 sm:py-20">
                <div class="overflow-x-auto">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="border-b-2 dark:border-darkmode-400 whitespace-nowrap">DESCRIPTION</th>
                                <th class="border-b-2 dark:border-darkmode-400 text-right whitespace-nowrap">QTY</th>
                                <th class="border-b-2 dark:border-darkmode-400 text-right whitespace-nowrap">PRICE</th>
                                <th class="border-b-2 dark:border-darkmode-400 text-right whitespace-nowrap">SUBTOTAL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border-b dark:border-darkmode-400">
                                    <div class="font-medium whitespace-nowrap">Midone HTML Admin Template</div>
                                    <div class="text-slate-500 text-sm mt-0.5 whitespace-nowrap">Regular License</div>
                                </td>
                                <td class="text-right border-b dark:border-darkmode-400 w-32">2</td>
                                <td class="text-right border-b dark:border-darkmode-400 w-32">$25</td>
                                <td class="text-right border-b dark:border-darkmode-400 w-32 font-medium">$50</td>
                            </tr>
                            <tr>
                                <td class="border-b dark:border-darkmode-400">
                                    <div class="font-medium whitespace-nowrap">Vuejs Admin Template</div>
                                    <div class="text-slate-500 text-sm mt-0.5 whitespace-nowrap">Regular License</div>
                                </td>
                                <td class="text-right border-b dark:border-darkmode-400 w-32">1</td>
                                <td class="text-right border-b dark:border-darkmode-400 w-32">$25</td>
                                <td class="text-right border-b dark:border-darkmode-400 w-32 font-medium">$25</td>
                            </tr>
                            <tr>
                                <td class="border-b dark:border-darkmode-400">
                                    <div class="font-medium whitespace-nowrap">React Admin Template</div>
                                    <div class="text-slate-500 text-sm mt-0.5 whitespace-nowrap">Regular License</div>
                                </td>
                                <td class="text-right border-b dark:border-darkmode-400 w-32">1</td>
                                <td class="text-right border-b dark:border-darkmode-400 w-32">$25</td>
                                <td class="text-right border-b dark:border-darkmode-400 w-32 font-medium">$25</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="font-medium whitespace-nowrap">Laravel Admin Template</div>
                                    <div class="text-slate-500 text-sm mt-0.5 whitespace-nowrap">Regular License</div>
                                </td>
                                <td class="text-right w-32">3</td>
                                <td class="text-right w-32">$25</td>
                                <td class="text-right w-32 font-medium">$75</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="px-5 sm:px-20 pb-10 sm:pb-20 flex flex-col-reverse sm:flex-row">
                <div class="text-center sm:text-left mt-10 sm:mt-0">
                    <div class="text-base text-slate-500">Bank Transfer</div>
                    <div class="text-lg text-primary font-medium mt-2">Elon Musk</div>
                    <div class="mt-1">Bank Account : 098347234832</div>
                    <div class="mt-1">Code : LFT133243</div>
                </div>
                <div class="text-center sm:text-right sm:ml-auto">
                    <div class="text-base text-slate-500">Total Amount</div>
                    <div class="text-xl text-primary font-medium mt-2">$20.600.00</div>
                    <div class="mt-1">Taxes included</div>
                </div>
            </div> --}}
        </div>
        <!-- END: Invoice -->
    </div>
    <!-- END: Content -->
@endsection
