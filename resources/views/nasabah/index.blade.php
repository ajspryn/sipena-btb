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
                                        src="dist/images/profile-5.jpg">
                                </div>
                                <div class="ml-3">Johnny Depp</div>
                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">
                                    johnnydepp@left4code.com</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full"
                                        src="dist/images/profile-10.jpg">
                                </div>
                                <div class="ml-3">Keanu Reeves</div>
                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">
                                    keanureeves@left4code.com</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full"
                                        src="dist/images/profile-2.jpg">
                                </div>
                                <div class="ml-3">John Travolta</div>
                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">
                                    johntravolta@left4code.com</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full"
                                        src="dist/images/profile-11.jpg">
                                </div>
                                <div class="ml-3">Robert De Niro</div>
                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">
                                    robertdeniro@left4code.com</div>
                            </a>
                        </div>
                        <div class="search-result__content__title">Products</div>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone - HTML Admin Template" class="rounded-full"
                                    src="dist/images/preview-5.jpg">
                            </div>
                            <div class="ml-3">Samsung Galaxy S20 Ultra</div>
                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Smartphone &amp; Tablet
                            </div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone - HTML Admin Template" class="rounded-full"
                                    src="dist/images/preview-1.jpg">
                            </div>
                            <div class="ml-3">Nike Air Max 270</div>
                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Sport &amp; Outdoor</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone - HTML Admin Template" class="rounded-full"
                                    src="dist/images/preview-7.jpg">
                            </div>
                            <div class="ml-3">Nike Tanjun</div>
                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Sport &amp; Outdoor</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone - HTML Admin Template" class="rounded-full"
                                    src="dist/images/preview-1.jpg">
                            </div>
                            <div class="ml-3">Samsung Galaxy S20 Ultra</div>
                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Smartphone &amp; Tablet
                            </div>
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
                                    src="dist/images/profile-5.jpg">
                                <div
                                    class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600">
                                </div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Johnny Depp</a>
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
                                    <a href="javascript:;" class="font-medium truncate mr-5">Keanu Reeves</a>
                                    <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">03:20 PM</div>
                                </div>
                                <div class="w-full truncate text-slate-500 mt-0.5">Lorem Ipsum is simply dummy text of the
                                    printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard
                                    dummy text ever since the 1500</div>
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
                                    <a href="javascript:;" class="font-medium truncate mr-5">John Travolta</a>
                                    <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">05:09 AM</div>
                                </div>
                                <div class="w-full truncate text-slate-500 mt-0.5">Contrary to popular belief, Lorem Ipsum
                                    is not simply random text. It has roots in a piece of classical Latin literature from 45
                                    BC, making it over 20</div>
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
                                    <a href="javascript:;" class="font-medium truncate mr-5">Robert De Niro</a>
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
                                    src="dist/images/profile-15.jpg">
                                <div
                                    class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white dark:border-darkmode-600">
                                </div>
                            </div>
                            <div class="ml-2 overflow-hidden">
                                <div class="flex items-center">
                                    <a href="javascript:;" class="font-medium truncate mr-5">Nicolas Cage</a>
                                    <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">05:09 AM</div>
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
                    <img alt="Midone - HTML Admin Template" src="dist/images/profile-8.jpg">
                </div>
                <div class="dropdown-menu w-56">
                    <ul class="dropdown-content bg-primary text-white">
                        <li class="p-2">
                            <div class="font-medium">Johnny Depp</div>
                            <div class="text-xs text-white/70 mt-0.5 dark:text-slate-500">Backend Engineer</div>
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
        <h2 class="intro-y text-lg font-medium mt-10">
            Data Nasabah Mendaftar
        </h2>
        <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
                <a href='/export' class="btn btn-primary shadow-md mr-2">Export To Exel</a>
            </div>
            <!-- BEGIN: Data List -->
            <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                <table class="table table-report -mt-2">
                    <thead>
                        <tr>
                            <th class="whitespace-nowrap" style="text-align: center">No</th>
                            <th class="whitespace-nowrap">Nama</th>
                            <th class="text-center whitespace-nowrap">NIK</th>
                            <th class="text-center whitespace-nowrap">Status</th>
                            <th class="text-center whitespace-nowrap">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($nasabahs as $nasabah)
                            <tr class="intro-x">
                                <td class="w-40" style="text-align: center">
                                    {{ $loop->iteration }}
                                </td>
                                <td>
                                    <a href=""
                                        class="font-medium whitespace-nowrap">{{ $nasabah->nama_lengkap }}</a>
                                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">{{ $nasabah->alamat }}
                                    </div>
                                </td>
                                <td class="text-center">{{ $nasabah->no_tanda_pengenal }}</td>
                                <td class="w-40">
                                    <div class="flex items-center justify-center text-danger"> <i
                                            data-lucide="check-square" class="w-4 h-4 mr-2"></i> Inactive </div>
                                </td>
                                <td class="table-report__action w-56">
                                    <div class="flex justify-center items-center">
                                        <a class="flex items-center mr-3" href="/nasabah/{{ $nasabah->id }}"> <i
                                                data-lucide="eye" class="w-4 h-4 mr-1"></i> Detail </a>
                                        <a class="flex items-center mr-3" href="javascript:;"> <i
                                                data-lucide="edit" class="w-4 h-4 mr-1"></i> Edit </a>
                                        <a class="flex items-center text-danger" href="javascript:;"
                                            data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal"> <i
                                                data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- END: Data List -->
        </div>
        <!-- BEGIN: Delete Confirmation Modal -->
        <div id="delete-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <div class="p-5 text-center">
                            <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                            <div class="text-3xl mt-5">Are you sure?</div>
                            <div class="text-slate-500 mt-2">
                                Do you really want to delete these records?
                                <br>
                                This process cannot be undone.
                            </div>
                        </div>
                        <div class="px-5 pb-8 text-center">
                            <button type="button" data-tw-dismiss="modal"
                                class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                            <button type="button" class="btn btn-danger w-24">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Delete Confirmation Modal -->
    </div>
    <!-- END: Content -->
@endsection
