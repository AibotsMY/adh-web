<?php include 'partials/session.php'; ?>
<?php include 'partials/main.php'; ?>

<head>



    <?php includeFileWithVariables('partials/title-meta.php', array('title' => 'Overview')); ?>

    <?php include 'partials/head-css.php'; ?>

</head>

<?php include 'partials/body.php'; ?>

<div class="group-data-[sidebar-size=sm]:min-h-sm group-data-[sidebar-size=sm]:relative">

    <?php include 'partials/menu.php'; ?>

    <div class="relative min-h-screen group-data-[sidebar-size=sm]:min-h-sm">

        <?php include 'partials/page-wrapper.php'; ?>

        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

            <?php includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Dashboards', 'title' => 'Overview')); ?>
            <div class="col-span-12 mb-4">
                <h6>Total Users</h6>
            </div>
            <div class=" grid grid-cols-12 2xl:grid-cols-12 gap-x-5">

                <div class="col-span-12 card md:col-span-6 lg:col-span-3 2xl:col-span-2">
                    <div class="text-center card-body">
                        <div
                            class="flex items-center justify-center mx-auto rounded-full size-14 bg-custom-100 text-custom-500 dark:bg-custom-500/20">
                            <i data-lucide="wallet-2"></i>
                        </div>
                        <h5 class="mt-4 mb-2"><span class="counter-value" data-target="78923">0</span></h5>
                        <p class="text-slate-500 dark:text-zink-200">Total User</p>
                    </div>
                </div>
                <!--end col-->
                <div class="col-span-12 card md:col-span-6 lg:col-span-3 2xl:col-span-2">
                    <div class="text-center card-body">
                        <div
                            class="flex items-center justify-center mx-auto rounded-full size-14 bg-custom-100 text-custom-500 dark:bg-custom-500/20">
                            <i data-lucide="wallet-2"></i>
                        </div>
                        <h5 class="mt-4 mb-2"><span class="counter-value" data-target="78923">0</span></h5>
                        <p class="text-slate-500 dark:text-zink-200">Total User</p>
                    </div>
                </div>
                <!--end col-->
                <div class="col-span-12 card md:col-span-6 lg:col-span-3 2xl:col-span-2">
                    <div class="text-center card-body">
                        <div
                            class="flex items-center justify-center mx-auto rounded-full size-14 bg-custom-100 text-custom-500 dark:bg-custom-500/20">
                            <i data-lucide="wallet-2"></i>
                        </div>
                        <h5 class="mt-4 mb-2"><span class="counter-value" data-target="78923">0</span></h5>
                        <p class="text-slate-500 dark:text-zink-200">Total User</p>
                    </div>
                </div>
                <!--end col-->
                <div class="col-span-12 card md:col-span-6 lg:col-span-3 2xl:col-span-2">
                    <div class="text-center card-body">
                        <div
                            class="flex items-center justify-center mx-auto rounded-full size-14 bg-custom-100 text-custom-500 dark:bg-custom-500/20">
                            <i data-lucide="wallet-2"></i>
                        </div>
                        <h5 class="mt-4 mb-2"><span class="counter-value" data-target="78923">0</span></h5>
                        <p class="text-slate-500 dark:text-zink-200">Total User</p>
                    </div>
                </div>
                <!--end col-->
                <!--end col-->
                <div class="col-span-12 card 2xl:col-span-4 2xl:row-span-2">
                    <div class="card-body">
                        <div class="flex items-center mb-3">
                            <h6 class="grow text-15">New User</h6>

                            <div class="relative">
                               <div class="relative dropdown shrink-0">
                                    <button type="button" class="px-2 py-1.5 text-xs bg-text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20 dropdown-toggle" id="emailDataDropdown" data-bs-toggle="dropdown">
                                        This Monthly <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="chevron-down" class="lucide lucide-chevron-down inline-block size-4 ltr:ml-1 rlt:mr-1"><path d="m6 9 6 6 6-6"></path></svg>
                                    </button>
                            
                                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="emailDataDropdown">
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">1 Weekly</a>
                                        </li>
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">1 Monthly</a>
                                        </li>
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">3 Monthly</a>
                                        </li>
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">6 Monthly</a>
                                        </li>
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">This Monthly</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="orderStatisticsChart" class="apex-charts"
                            data-chart-colors='["bg-purple-500", "bg-sky-500"]' dir="ltr"></div>
                    </div>
                </div>
                <!--end col-->
                 <div class="col-span-12 mb-4">
                <h6>Total Subscribes</h6>
            </div>
                <div class="col-span-12 md:col-span-6 lg:col-span-3 2xl:col-span-2">
                    <div
                            class="order-1 md:col-span-6 lg:col-span-3 col-span-12 2xl:order-1 bg-green-100 dark:bg-green-500/20 card 2xl:col-span-2 group-data-[skin=bordered]:border-green-500/20 relative overflow-hidden">
                            <div class="card-body">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" data-lucide="kanban"
                                    class="lucide lucide-kanban absolute top-0 stroke-1 size-32 text-green-200/50 dark:text-green-500/20 ltr:-right-10 rtl:-left-10">
                                    <path d="M6 5v11"></path>
                                    <path d="M12 5v6"></path>
                                    <path d="M18 5v14"></path>
                                </svg>
                                <div
                                    class="flex items-center justify-center bg-green-500 rounded-md size-12 text-15 text-green-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" data-lucide="users" class="lucide lucide-users">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    </svg>
                                </div>
                                <h5 class="mt-5 mb-2"><span class="counter-value" data-target="15876">15,876</span></h5>
                                <p class="text-slate-500 dark:text-slate-200">Total Subscribes</p>
                            </div>
                        </div>
                </div>
                <!--end col-->
                <div class="col-span-12  md:col-span-6 lg:col-span-3 2xl:col-span-2">
                     <div
                            class="order-2 md:col-span-6 lg:col-span-3 col-span-12 2xl:order-1 bg-orange-100 dark:bg-orange-500/20 card 2xl:col-span-2 group-data-[skin=bordered]:border-orange-500/20 relative overflow-hidden">
                            <div class="card-body">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" data-lucide="kanban"
                                    class="lucide lucide-kanban absolute top-0 stroke-1 size-32 text-orange-200/50 dark:text-orange-500/20 ltr:-right-10 rtl:-left-10">
                                    <path d="M6 5v11"></path>
                                    <path d="M12 5v6"></path>
                                    <path d="M18 5v14"></path>
                                </svg>
                                <div
                                    class="flex items-center justify-center bg-orange-500 rounded-md size-12 text-15 text-orange-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" data-lucide="users" class="lucide lucide-users">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    </svg>
                                </div>
                                <h5 class="mt-5 mb-2"><span class="counter-value" data-target="14876">14,876
                                </h5>
                                <p class="text-slate-500 dark:text-slate-200">Total Subscribes</p>
                            </div>
                        </div>
                </div>
                <!--end col-->
                <div class="col-span-12  md:col-span-6 lg:col-span-3 2xl:col-span-2">
                    <div
                            class="order-3 md:col-span-6 lg:col-span-3 col-span-12 2xl:order-1 bg-sky-100 dark:bg-sky-500/20 card 2xl:col-span-2 group-data-[skin=bordered]:border-sky-500/20 relative overflow-hidden">
                            <div class="card-body">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" data-lucide="kanban"
                                    class="lucide lucide-kanban absolute top-0 stroke-1 size-32 text-sky-200/50 dark:text-sky-500/20 ltr:-right-10 rtl:-left-10">
                                    <path d="M6 5v11"></path>
                                    <path d="M12 5v6"></path>
                                    <path d="M18 5v14"></path>
                                </svg>
                                <div
                                    class="flex items-center justify-center bg-sky-500 rounded-md size-12 text-15 text-sky-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" data-lucide="users" class="lucide lucide-users">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    </svg>
                                </div>
                                <h5 class="mt-5 mb-2"><span class="counter-value" data-target="10000">1</span> <span
                                        class="counter-value" >15,876</h5>
                                <p class="text-slate-500 dark:text-slate-200">Total Subscribes</p>
                            </div>
                        </div>
                </div>
                <!--end col-->
                <div class="col-span-12  md:col-span-6 lg:col-span-3 2xl:col-span-2">
                   <div
                            class="order-4 md:col-span-6 lg:col-span-3 col-span-12 2xl:order-1 bg-purple-100 dark:bg-purple-500/20 card 2xl:col-span-2 group-data-[skin=bordered]:border-purple-500/20 relative overflow-hidden">
                            <div class="card-body">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" data-lucide="kanban"
                                    class="lucide lucide-kanban absolute top-0 stroke-1 size-32 text-purple-200/50 dark:text-purple-500/20 ltr:-right-10 rtl:-left-10">
                                    <path d="M6 5v11"></path>
                                    <path d="M12 5v6"></path>
                                    <path d="M18 5v14"></path>
                                </svg>
                                <div
                                    class="flex items-center justify-center bg-purple-500 rounded-md size-12 text-15 text-purple-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" data-lucide="users" class="lucide lucide-users">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    </svg>
                                </div>
                                <h5 class="mt-5 mb-2"><span class="counter-value" data-target="14876">15,876</span>
                                </h5>
                                <p class="text-slate-500 dark:text-slate-200">Total Subscribes</p>
                            </div>
                        </div>
                </div>

               
             <div class="col-span-12 card 2xl:col-span-4 2xl:row-span-2">
                    <div class="card-body">
                        <div class="flex items-center mb-3">
                            <h6 class="grow text-15">New Subscribes</h6>

                            <div class="relative">
                               <div class="relative dropdown shrink-0">
                                    <button type="button" class="px-2 py-1.5 text-xs bg-text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20 dropdown-toggle" id="emailDataDropdown" data-bs-toggle="dropdown">
                                        This Monthly <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="chevron-down" class="lucide lucide-chevron-down inline-block size-4 ltr:ml-1 rlt:mr-1"><path d="m6 9 6 6 6-6"></path></svg>
                                    </button>
                            
                                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="emailDataDropdown">
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">1 Weekly</a>
                                        </li>
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">1 Monthly</a>
                                        </li>
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">3 Monthly</a>
                                        </li>
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">6 Monthly</a>
                                        </li>
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">This Monthly</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="totalSubscribers" class="apex-charts"
                            data-chart-colors='["bg-purple-500", "bg-sky-500"]' dir="ltr"></div>
                    </div>
                </div>
                <div class="col-span-12 mb-4">
                <h6>Total Scrapping Count</h6>
            </div>
                 <div class="col-span-12 card md:col-span-6 lg:col-span-6 2xl:col-span-6">
                    <div class="text-left card-body">
                      <p class="text-slate-500 dark:text-zink-200">This Month Total Scrapping Count</p>
                        <h5 class="mt-4 mb-2"><span class="counter-value" data-target="615">0</span></h5>
                        
                    </div>
                </div>
                <!--end col-->
                <div class="col-span-12 card md:col-span-6 lg:col-span-6 2xl:col-span-6">
                    <div class="text-left card-body">
                       <p class="text-slate-500 dark:text-zink-200">This Month On-Que Count</p>
                        <h5 class="mt-4 mb-2"><span class="counter-value" data-target="174">0</span></h5>
                        
                    </div>
                </div>
                <div class="col-span-12 mb-4">
                <h6>Total Revenue</h6>
            </div>
            
                        
                        <!--end col-->
                        <div class="order-9 col-span-12 lg:col-span-6 2xl:order-1 card 2xl:col-span-4">
                            <div class="card-body">
                                <div class="flex items-center gap-2 mb-3">
                                    <h6 class="text-15 grow">Total Revenue <a href="#!" data-tooltip="default"
                                            data-tooltip-content="The 1-to-5 satisfaction scale is used for measuring customer satisfaction"
                                            class="inline-block align-middle ltr:ml-1 rtl:mr-1 text-slate-500 dark:text-zink-200"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" data-lucide="info"
                                                class="lucide lucide-info size-4">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="M12 16v-4"></path>
                                                <path d="M12 8h.01"></path>
                                            </svg></a></h6>
                                    <div class="relative dropdown shrink-0">
                                        <button type="button"
                                            class="flex items-center justify-center size-[30px] p-0 bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-700 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10 dropdown-toggle"
                                            id="satisfactionRateDropdown" data-bs-toggle="dropdown">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                data-lucide="more-vertical"
                                                class="lucide lucide-more-vertical inline-block size-4">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="12" cy="5" r="1"></circle>
                                                <circle cx="12" cy="19" r="1"></circle>
                                            </svg>
                                        </button>

                                        <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                            aria-labelledby="satisfactionRateDropdown">
                                            <li>
                                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                    href="#!">1 Weekly</a>
                                            </li>
                                            <li>
                                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                    href="#!">1 Monthly</a>
                                            </li>
                                            <li>
                                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                    href="#!">3 Monthly</a>
                                            </li>
                                            <li>
                                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                    href="#!">6 Monthly</a>
                                            </li>
                                            <li>
                                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                    href="#!">This Yearly</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="satisfactionRate" class="apex-charts"
                                    data-chart-colors="[&quot;bg-custom-500&quot;]" dir="ltr"
                                    style="min-height: 227px;">
                                    <div id="apexcharts7wq5omfg"
                                        class="apexcharts-canvas apexcharts7wq5omfg apexcharts-theme-light"
                                        style="width: 479px; height: 227px;"><svg id="SvgjsSvg2306" width="479"
                                            height="227" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                            transform="translate(0, -20)" style="background: transparent;">
                                            <foreignObject x="0" y="0" width="479" height="227">
                                                <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml">
                                                </div>
                                            </foreignObject>
                                            <g id="SvgjsG2308" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(14.5, 1)">
                                                <defs id="SvgjsDefs2307">
                                                    <clipPath id="gridRectMask7wq5omfg">
                                                        <rect id="SvgjsRect2309" width="456" height="460" x="-4" y="-6"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMask7wq5omfg"></clipPath>
                                                    <clipPath id="nonForecastMask7wq5omfg"></clipPath>
                                                    <clipPath id="gridRectMarkerMask7wq5omfg">
                                                        <rect id="SvgjsRect2310" width="454" height="452" x="-2" y="-2"
                                                            rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <linearGradient id="SvgjsLinearGradient2315" x1="1" y1="0" x2="0"
                                                        y2="1">
                                                        <stop id="SvgjsStop2316" stop-opacity="1"
                                                            stop-color="rgba(242,242,242,1)" offset="0"></stop>
                                                        <stop id="SvgjsStop2317" stop-opacity="1"
                                                            stop-color="rgba(247,247,247,1)" offset="0.5"></stop>
                                                        <stop id="SvgjsStop2318" stop-opacity="1"
                                                            stop-color="rgba(247,247,247,1)" offset="0.53"></stop>
                                                        <stop id="SvgjsStop2319" stop-opacity="1"
                                                            stop-color="rgba(242,242,242,1)" offset="0.91"></stop>
                                                    </linearGradient>
                                                    <linearGradient id="SvgjsLinearGradient2327" x1="1" y1="0" x2="0"
                                                        y2="1">
                                                        <stop id="SvgjsStop2328" stop-opacity="1"
                                                            stop-color="rgba(59,130,246,1)" offset="0"></stop>
                                                        <stop id="SvgjsStop2329" stop-opacity="1"
                                                            stop-color="rgba(137,180,250,1)" offset="0.5"></stop>
                                                        <stop id="SvgjsStop2330" stop-opacity="1"
                                                            stop-color="rgba(137,180,250,1)" offset="0.53"></stop>
                                                        <stop id="SvgjsStop2331" stop-opacity="1"
                                                            stop-color="rgba(59,130,246,1)" offset="0.91"></stop>
                                                    </linearGradient>
                                                </defs>
                                                <g id="SvgjsG2311" class="apexcharts-radialbar">
                                                    <g id="SvgjsG2312">
                                                        <g id="SvgjsG2313" class="apexcharts-tracks">
                                                            <g id="SvgjsG2314"
                                                                class="apexcharts-radialbar-track apexcharts-track"
                                                                rel="1">
                                                                <path id="apexcharts-radialbarTrack-0"
                                                                    d="M 69.52439024390242 223.99999999999997 A 155.47560975609758 155.47560975609758 0 0 1 380.4756097560976 224 "
                                                                    fill="none" fill-opacity="1"
                                                                    stroke="rgba(242,242,242,0.85)" stroke-opacity="1"
                                                                    stroke-linecap="butt"
                                                                    stroke-width="37.54609756097561"
                                                                    stroke-dasharray="0"
                                                                    class="apexcharts-radialbar-area"
                                                                    data:pathOrig="M 69.52439024390242 223.99999999999997 A 155.47560975609758 155.47560975609758 0 0 1 380.4756097560976 224 ">
                                                                </path>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG2321">
                                                            <image id="SvgjsImage2322"
                                                                xlink:href="../../assets/images/logo-sm.png" width="0"
                                                                height="0"></image>
                                                            <g id="SvgjsG2326"
                                                                class="apexcharts-series apexcharts-radial-series"
                                                                seriesName="AveragexResults" rel="1" data:realIndex="0">
                                                                <path id="SvgjsPath2332"
                                                                    d="M 69.52439024390242 223.99999999999997 A 155.47560975609758 155.47560975609758 0 0 1 378.96253180958877 202.3619772665869 "
                                                                    fill="none" fill-opacity="0.85"
                                                                    stroke="url(#SvgjsLinearGradient2327)"
                                                                    stroke-opacity="1" stroke-linecap="butt"
                                                                    stroke-width="38.707317073170735"
                                                                    stroke-dasharray="4"
                                                                    class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                    data:angle="172" data:value="95.33" index="0" j="0"
                                                                    data:pathOrig="M 69.52439024390242 223.99999999999997 A 155.47560975609758 155.47560975609758 0 0 1 378.96253180958877 202.3619772665869 ">
                                                                </path>
                                                            </g>
                                                            <circle id="SvgjsCircle2323" r="136.70256097560977" cx="225"
                                                                cy="224" class="apexcharts-radialbar-hollow"
                                                                fill="transparent"></circle>
                                                            <g id="SvgjsG2324" class="apexcharts-datalabels-group"
                                                                transform="translate(0, 0) scale(1)"
                                                                style="opacity: 1;"><text id="SvgjsText2325"
                                                                    font-family="Helvetica, Arial, sans-serif" x="225"
                                                                    y="219" text-anchor="middle"
                                                                    dominant-baseline="auto" font-size="22px"
                                                                    font-weight="600" fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-datalabel-value"
                                                                    style="font-family: Helvetica, Arial, sans-serif;">95.33%</text>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine2333" x1="0" y1="0" x2="450" y2="0" stroke="#b6b6b6"
                                                    stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine2334" x1="0" y1="0" x2="450" y2="0"
                                                    stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                            </g>
                                        </svg></div>
                                </div>
                                <p class="text-center text-15 text-slate-500 dark:text-zink-200">Based on Likes 💖</p>
                            </div>
                        </div>


<div class="order-8 col-span-12 lg:col-span-6 2xl:order-1 card 2xl:col-span-4">
                            <div class="card-body">
                                <div class="flex items-center gap-2 mb-3">
                                    <h6 class="text-15 grow">Montly / Yearly Revenue Comparsion <a href="#!" data-tooltip="default"
                                            data-tooltip-content="You can see your number of desktop, mobile, and tablet users."
                                            class="inline-block align-middle ltr:ml-1 rtl:mr-1 text-slate-500 dark:text-zink-200"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" data-lucide="info"
                                                class="lucide lucide-info size-4">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <path d="M12 16v-4"></path>
                                                <path d="M12 8h.01"></path>
                                            </svg></a></h6>
                                    <div class="relative dropdown shrink-0">
                                        <button type="button"
                                            class="flex items-center justify-center size-[30px] p-0 bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-700 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10 dropdown-toggle"
                                            id="userDeviceDropdown" data-bs-toggle="dropdown">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                data-lucide="more-vertical"
                                                class="lucide lucide-more-vertical inline-block size-4">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="12" cy="5" r="1"></circle>
                                                <circle cx="12" cy="19" r="1"></circle>
                                            </svg>
                                        </button>

                                        <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                            aria-labelledby="userDeviceDropdown">
                                            <li>
                                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                    href="#!">1 Weekly</a>
                                            </li>
                                            <li>
                                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                    href="#!">1 Monthly</a>
                                            </li>
                                            <li>
                                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                    href="#!">3 Monthly</a>
                                            </li>
                                            <li>
                                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                    href="#!">6 Monthly</a>
                                            </li>
                                            <li>
                                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                    href="#!">This Yearly</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="userDeviceCharts" class="apex-charts"
                                    data-chart-colors="[&quot;bg-custom-500&quot;, &quot;bg-green-500&quot;, &quot;bg-orange-500&quot;]"
                                    dir="ltr" style="min-height: 255px;">
                                    <div id="apexchartszn28ydf0h"
                                        class="apexcharts-canvas apexchartszn28ydf0h apexcharts-theme-light"
                                        style="width: 479px; height: 240px;"><svg id="SvgjsSvg2177" width="479"
                                            height="240" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                            class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent;">
                                            <foreignObject x="0" y="0" width="479" height="240">
                                                <div class="apexcharts-legend apexcharts-align-center apx-legend-position-right"
                                                    xmlns="http://www.w3.org/1999/xhtml"
                                                    style="height: 230px; position: absolute; left: auto; top: 20px; right: 5px;">
                                                    <div class="apexcharts-legend-series" rel="1" seriesname="Desktop"
                                                        data:collapsed="false" style="margin: 2px 5px;"><span
                                                            class="apexcharts-legend-marker" rel="1"
                                                            data:collapsed="false"
                                                            style="background: rgb(59, 130, 246) !important; color: rgb(59, 130, 246); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                            class="apexcharts-legend-text" rel="1" i="0"
                                                            data:default-text="Desktop" data:collapsed="false"
                                                            style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Desktop</span>
                                                    </div>
                                                    <div class="apexcharts-legend-series" rel="2" seriesname="Mobile"
                                                        data:collapsed="false" style="margin: 2px 5px;"><span
                                                            class="apexcharts-legend-marker" rel="2"
                                                            data:collapsed="false"
                                                            style="background: rgb(36, 151, 130) !important; color: rgb(36, 151, 130); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                            class="apexcharts-legend-text" rel="2" i="1"
                                                            data:default-text="Mobile" data:collapsed="false"
                                                            style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Mobile</span>
                                                    </div>
                                                    <div class="apexcharts-legend-series" rel="3" seriesname="Others"
                                                        data:collapsed="false" style="margin: 2px 5px;"><span
                                                            class="apexcharts-legend-marker" rel="3"
                                                            data:collapsed="false"
                                                            style="background: rgb(249, 115, 22) !important; color: rgb(249, 115, 22); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                            class="apexcharts-legend-text" rel="3" i="2"
                                                            data:default-text="Others" data:collapsed="false"
                                                            style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Others</span>
                                                    </div>
                                                </div>
                                                <style type="text/css">
                                                .apexcharts-legend {
                                                    display: flex;
                                                    overflow: auto;
                                                    padding: 0 10px;
                                                }

                                                .apexcharts-legend.apx-legend-position-bottom,
                                                .apexcharts-legend.apx-legend-position-top {
                                                    flex-wrap: wrap
                                                }

                                                .apexcharts-legend.apx-legend-position-right,
                                                .apexcharts-legend.apx-legend-position-left {
                                                    flex-direction: column;
                                                    bottom: 0;
                                                }

                                                .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                                .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                                .apexcharts-legend.apx-legend-position-right,
                                                .apexcharts-legend.apx-legend-position-left {
                                                    justify-content: flex-start;
                                                }

                                                .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                                .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                    justify-content: center;
                                                }

                                                .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                                .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                    justify-content: flex-end;
                                                }

                                                .apexcharts-legend-series {
                                                    cursor: pointer;
                                                    line-height: normal;
                                                }

                                                .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                                                .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                                    display: flex;
                                                    align-items: center;
                                                }

                                                .apexcharts-legend-text {
                                                    position: relative;
                                                    font-size: 14px;
                                                }

                                                .apexcharts-legend-text *,
                                                .apexcharts-legend-marker * {
                                                    pointer-events: none;
                                                }

                                                .apexcharts-legend-marker {
                                                    position: relative;
                                                    display: inline-block;
                                                    cursor: pointer;
                                                    margin-right: 3px;
                                                    border-style: solid;
                                                }

                                                .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                                .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                                    display: inline-block;
                                                }

                                                .apexcharts-legend-series.apexcharts-no-click {
                                                    cursor: auto;
                                                }

                                                .apexcharts-legend .apexcharts-hidden-zero-series,
                                                .apexcharts-legend .apexcharts-hidden-null-series {
                                                    display: none !important;
                                                }

                                                .apexcharts-inactive-legend {
                                                    opacity: 0.45;
                                                }
                                                </style>
                                            </foreignObject>
                                            <g id="SvgjsG2179" class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(14, 30)">
                                                <defs id="SvgjsDefs2178">
                                                    <clipPath id="gridRectMaskzn28ydf0h">
                                                        <rect id="SvgjsRect2182" width="344.5780029296875" height="185"
                                                            x="-4" y="-6" rx="0" ry="0" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskzn28ydf0h"></clipPath>
                                                    <clipPath id="nonForecastMaskzn28ydf0h"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskzn28ydf0h">
                                                        <rect id="SvgjsRect2183" width="342.5780029296875" height="177"
                                                            x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                    </clipPath>
                                                    <filter id="SvgjsFilter2191" width="200%" height="200%" x="-50%"
                                                        y="-50%">
                                                        <feFlood id="SvgjsFeFlood2192" flood-color="#000000"
                                                            flood-opacity="0.35" result="SvgjsFeFlood2192Out"
                                                            in="SourceGraphic"></feFlood>
                                                        <feComposite id="SvgjsFeComposite2193" in="SvgjsFeFlood2192Out"
                                                            in2="SourceAlpha" operator="in"
                                                            result="SvgjsFeComposite2193Out"></feComposite>
                                                        <feOffset id="SvgjsFeOffset2194" dx="1" dy="1"
                                                            result="SvgjsFeOffset2194Out" in="SvgjsFeComposite2193Out">
                                                        </feOffset>
                                                        <feGaussianBlur id="SvgjsFeGaussianBlur2195" stdDeviation="1 "
                                                            result="SvgjsFeGaussianBlur2195Out"
                                                            in="SvgjsFeOffset2194Out"></feGaussianBlur>
                                                        <feMerge id="SvgjsFeMerge2196" result="SvgjsFeMerge2196Out"
                                                            in="SourceGraphic">
                                                            <feMergeNode id="SvgjsFeMergeNode2197"
                                                                in="SvgjsFeGaussianBlur2195Out"></feMergeNode>
                                                            <feMergeNode id="SvgjsFeMergeNode2198"
                                                                in="[object Arguments]"></feMergeNode>
                                                        </feMerge>
                                                        <feBlend id="SvgjsFeBlend2199" in="SourceGraphic"
                                                            in2="SvgjsFeMerge2196Out" mode="normal"
                                                            result="SvgjsFeBlend2199Out"></feBlend>
                                                    </filter>
                                                    <filter id="SvgjsFilter2217" width="200%" height="200%" x="-50%"
                                                        y="-50%">
                                                        <feFlood id="SvgjsFeFlood2218" flood-color="#000000"
                                                            flood-opacity="0.35" result="SvgjsFeFlood2218Out"
                                                            in="SourceGraphic"></feFlood>
                                                        <feComposite id="SvgjsFeComposite2219" in="SvgjsFeFlood2218Out"
                                                            in2="SourceAlpha" operator="in"
                                                            result="SvgjsFeComposite2219Out"></feComposite>
                                                        <feOffset id="SvgjsFeOffset2220" dx="1" dy="1"
                                                            result="SvgjsFeOffset2220Out" in="SvgjsFeComposite2219Out">
                                                        </feOffset>
                                                        <feGaussianBlur id="SvgjsFeGaussianBlur2221" stdDeviation="1 "
                                                            result="SvgjsFeGaussianBlur2221Out"
                                                            in="SvgjsFeOffset2220Out"></feGaussianBlur>
                                                        <feMerge id="SvgjsFeMerge2222" result="SvgjsFeMerge2222Out"
                                                            in="SourceGraphic">
                                                            <feMergeNode id="SvgjsFeMergeNode2223"
                                                                in="SvgjsFeGaussianBlur2221Out"></feMergeNode>
                                                            <feMergeNode id="SvgjsFeMergeNode2224"
                                                                in="[object Arguments]"></feMergeNode>
                                                        </feMerge>
                                                        <feBlend id="SvgjsFeBlend2225" in="SourceGraphic"
                                                            in2="SvgjsFeMerge2222Out" mode="normal"
                                                            result="SvgjsFeBlend2225Out"></feBlend>
                                                    </filter>
                                                    <filter id="SvgjsFilter2243" width="200%" height="200%" x="-50%"
                                                        y="-50%">
                                                        <feFlood id="SvgjsFeFlood2244" flood-color="#000000"
                                                            flood-opacity="0.35" result="SvgjsFeFlood2244Out"
                                                            in="SourceGraphic"></feFlood>
                                                        <feComposite id="SvgjsFeComposite2245" in="SvgjsFeFlood2244Out"
                                                            in2="SourceAlpha" operator="in"
                                                            result="SvgjsFeComposite2245Out"></feComposite>
                                                        <feOffset id="SvgjsFeOffset2246" dx="1" dy="1"
                                                            result="SvgjsFeOffset2246Out" in="SvgjsFeComposite2245Out">
                                                        </feOffset>
                                                        <feGaussianBlur id="SvgjsFeGaussianBlur2247" stdDeviation="1 "
                                                            result="SvgjsFeGaussianBlur2247Out"
                                                            in="SvgjsFeOffset2246Out"></feGaussianBlur>
                                                        <feMerge id="SvgjsFeMerge2248" result="SvgjsFeMerge2248Out"
                                                            in="SourceGraphic">
                                                            <feMergeNode id="SvgjsFeMergeNode2249"
                                                                in="SvgjsFeGaussianBlur2247Out"></feMergeNode>
                                                            <feMergeNode id="SvgjsFeMergeNode2250"
                                                                in="[object Arguments]"></feMergeNode>
                                                        </feMerge>
                                                        <feBlend id="SvgjsFeBlend2251" in="SourceGraphic"
                                                            in2="SvgjsFeMerge2248Out" mode="normal"
                                                            result="SvgjsFeBlend2251Out"></feBlend>
                                                    </filter>
                                                </defs>
                                                <g id="SvgjsG2287" class="apexcharts-grid">
                                                    <g id="SvgjsG2288" class="apexcharts-gridlines-horizontal"
                                                        style="display: none;">
                                                        <line id="SvgjsLine2291" x1="0" y1="0" x2="338.5780029296875"
                                                            y2="0" stroke="#e0e0e0" stroke-dasharray="0"
                                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2292" x1="0" y1="43.25"
                                                            x2="338.5780029296875" y2="43.25" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2293" x1="0" y1="86.5" x2="338.5780029296875"
                                                            y2="86.5" stroke="#e0e0e0" stroke-dasharray="0"
                                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2294" x1="0" y1="129.75"
                                                            x2="338.5780029296875" y2="129.75" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine2295" x1="0" y1="173" x2="338.5780029296875"
                                                            y2="173" stroke="#e0e0e0" stroke-dasharray="0"
                                                            stroke-linecap="butt" class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG2289" class="apexcharts-gridlines-vertical"
                                                        style="display: none;"></g>
                                                    <line id="SvgjsLine2297" x1="0" y1="173" x2="338.5780029296875"
                                                        y2="173" stroke="transparent" stroke-dasharray="0"
                                                        stroke-linecap="butt"></line>
                                                    <line id="SvgjsLine2296" x1="0" y1="1" x2="0" y2="173"
                                                        stroke="transparent" stroke-dasharray="0" stroke-linecap="butt">
                                                    </line>
                                                </g>
                                                <g id="SvgjsG2290" class="apexcharts-grid-borders"
                                                    style="display: none;"></g>
                                                <g id="SvgjsG2184"
                                                    class="apexcharts-radar-series apexcharts-plot-series"
                                                    transform="translate(169.28900146484375, 86.5)">
                                                    <polygon id="SvgjsPolygon2270"
                                                        points="0,-89.04152715773809 77.11222451036318,-44.52076357886905 77.11222451036319,44.52076357886902 1.0904442122491607e-14,89.04152715773809 -77.11222451036316,44.52076357886909 -77.11222451036322,-44.52076357886899 "
                                                        fill="none" stroke="#e8e8e8" stroke-width="1"></polygon>
                                                    <polygon id="SvgjsPolygon2271"
                                                        points="0,-66.78114536830357 57.83416838277239,-33.39057268415179 57.8341683827724,33.39057268415177 8.178331591868706e-15,66.78114536830357 -57.834168382772376,33.39057268415181 -57.83416838277242,-33.39057268415174 "
                                                        fill="none" stroke="#e8e8e8" stroke-width="1"></polygon>
                                                    <polygon id="SvgjsPolygon2272"
                                                        points="0,-44.520763578869044 38.55611225518159,-22.260381789434526 38.556112255181596,22.26038178943451 5.452221061245804e-15,44.520763578869044 -38.55611225518158,22.260381789434543 -38.55611225518161,-22.260381789434494 "
                                                        fill="none" stroke="#e8e8e8" stroke-width="1"></polygon>
                                                    <polygon id="SvgjsPolygon2273"
                                                        points="0,-22.260381789434522 19.278056127590794,-11.130190894717263 19.278056127590798,11.130190894717256 2.726110530622902e-15,22.260381789434522 -19.27805612759079,11.130190894717272 -19.278056127590805,-11.130190894717247 "
                                                        fill="none" stroke="#e8e8e8" stroke-width="1"></polygon>
                                                    <polygon id="SvgjsPolygon2274" points="0,0 0,0 0,0 0,0 0,0 0,0 "
                                                        fill="none" stroke="#e8e8e8" stroke-width="1"></polygon>
                                                    <line id="SvgjsLine2264" x1="0" y1="-89.04152715773809" x2="0"
                                                        y2="0" stroke="#e8e8e8" stroke-dasharray="0"
                                                        stroke-linecap="butt"></line>
                                                    <line id="SvgjsLine2265" x1="77.11222451036318"
                                                        y1="-44.52076357886905" x2="0" y2="0" stroke="#e8e8e8"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    <line id="SvgjsLine2266" x1="77.11222451036319"
                                                        y1="44.52076357886902" x2="0" y2="0" stroke="#e8e8e8"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    <line id="SvgjsLine2267" x1="1.0904442122491607e-14"
                                                        y1="89.04152715773809" x2="0" y2="0" stroke="#e8e8e8"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    <line id="SvgjsLine2268" x1="-77.11222451036316"
                                                        y1="44.52076357886909" x2="0" y2="0" stroke="#e8e8e8"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    <line id="SvgjsLine2269" x1="-77.11222451036322"
                                                        y1="-44.52076357886899" x2="0" y2="0" stroke="#e8e8e8"
                                                        stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    <g id="SvgjsG2280" class="apexcharts-xaxis"><text id="SvgjsText2281"
                                                            font-family="Helvetica, Arial, sans-serif" x="0"
                                                            y="-99.04152715773809" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="11px" font-weight="400"
                                                            fill="#a8a8a8" class="apexcharts-datalabel" cx="0"
                                                            cy="-99.04152715773809"
                                                            style="font-family: Helvetica, Arial, sans-serif;">2018</text><text
                                                            id="SvgjsText2282"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="87.11222451036318" y="-44.52076357886905"
                                                            text-anchor="start" dominant-baseline="auto"
                                                            font-size="11px" font-weight="400" fill="#a8a8a8"
                                                            class="apexcharts-datalabel" cx="87.11222451036318"
                                                            cy="-44.52076357886905"
                                                            style="font-family: Helvetica, Arial, sans-serif;">2019</text><text
                                                            id="SvgjsText2283"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="87.11222451036319" y="44.52076357886902"
                                                            text-anchor="start" dominant-baseline="auto"
                                                            font-size="11px" font-weight="400" fill="#a8a8a8"
                                                            class="apexcharts-datalabel" cx="87.11222451036319"
                                                            cy="44.52076357886902"
                                                            style="font-family: Helvetica, Arial, sans-serif;">2020</text><text
                                                            id="SvgjsText2284"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="1.0904442122491607e-14" y="99.04152715773809"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="11px" font-weight="400" fill="#a8a8a8"
                                                            class="apexcharts-datalabel" cx="1.0904442122491607e-14"
                                                            cy="99.04152715773809"
                                                            style="font-family: Helvetica, Arial, sans-serif;">2021</text><text
                                                            id="SvgjsText2285"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="-87.11222451036316" y="44.52076357886909"
                                                            text-anchor="end" dominant-baseline="auto" font-size="11px"
                                                            font-weight="400" fill="#a8a8a8"
                                                            class="apexcharts-datalabel" cx="-87.11222451036316"
                                                            cy="44.52076357886909"
                                                            style="font-family: Helvetica, Arial, sans-serif;">2022</text><text
                                                            id="SvgjsText2286"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="-87.11222451036322" y="-44.52076357886899"
                                                            text-anchor="end" dominant-baseline="auto" font-size="11px"
                                                            font-weight="400" fill="#a8a8a8"
                                                            class="apexcharts-datalabel" cx="-87.11222451036322"
                                                            cy="-44.52076357886899"
                                                            style="font-family: Helvetica, Arial, sans-serif;">2023</text>
                                                    </g>
                                                    <g id="SvgjsG2186" class="apexcharts-series"
                                                        data:longestSeries="true" seriesName="Desktop" rel="1"
                                                        data:realIndex="0">
                                                        <path id="SvgjsPath2189"
                                                            d="M 0 -59.36101810515872 L 0 -59.36101810515872 L 32.13009354598466 -18.550318157862105 L 19.278056127590798 11.130190894717256 L 3.634814040830535e-15 29.68050905257936 L -64.2601870919693 37.10063631572424 L -12.85203741839387 -7.42012726314483Z"
                                                            fill="none" fill-opacity="1" stroke="#3b82f6"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                            stroke-dasharray="0" class="apexcharts-radar" index="0"
                                                            pathTo="M 0 -59.36101810515872 L 0 -59.36101810515872 L 32.13009354598466 -18.550318157862105 L 19.278056127590798 11.130190894717256 L 3.634814040830535e-15 29.68050905257936 L -64.2601870919693 37.10063631572424 L -12.85203741839387 -7.42012726314483Z"
                                                            pathFrom="M 0 0"></path>
                                                        <path id="SvgjsPath2190"
                                                            d="M 0 -59.36101810515872 L 0 -59.36101810515872 L 32.13009354598466 -18.550318157862105 L 19.278056127590798 11.130190894717256 L 3.634814040830535e-15 29.68050905257936 L -64.2601870919693 37.10063631572424 L -12.85203741839387 -7.42012726314483Z"
                                                            fill="rgba(59,130,246,0.1)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-radar" index="0"
                                                            pathTo="M 0 -59.36101810515872 L 0 -59.36101810515872 L 32.13009354598466 -18.550318157862105 L 19.278056127590798 11.130190894717256 L 3.634814040830535e-15 29.68050905257936 L -64.2601870919693 37.10063631572424 L -12.85203741839387 -7.42012726314483Z"
                                                            pathFrom="M 0 0" filter="url(#SvgjsFilter2191)"></path>
                                                        <g id="SvgjsG2187"
                                                            class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown">
                                                            <g id="SvgjsG2201" class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle2200" r="0" cx="0"
                                                                    cy="-59.36101810515872" class="apexcharts-marker"
                                                                    stroke="#ffffff" fill="#3b82f6" fill-opacity="1"
                                                                    stroke-width="1" stroke-opacity="1" rel="0" j="0"
                                                                    index="0" default-marker-size="0"></circle>
                                                            </g>
                                                            <g id="SvgjsG2203" class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle2202" r="0"
                                                                    cx="32.13009354598466" cy="-18.550318157862105"
                                                                    class="apexcharts-marker" stroke="#ffffff"
                                                                    fill="#3b82f6" fill-opacity="1" stroke-width="1"
                                                                    stroke-opacity="1" rel="1" j="1" index="0"
                                                                    default-marker-size="0"></circle>
                                                            </g>
                                                            <g id="SvgjsG2205" class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle2204" r="0"
                                                                    cx="19.278056127590798" cy="11.130190894717256"
                                                                    class="apexcharts-marker" stroke="#ffffff"
                                                                    fill="#3b82f6" fill-opacity="1" stroke-width="1"
                                                                    stroke-opacity="1" rel="2" j="2" index="0"
                                                                    default-marker-size="0"></circle>
                                                            </g>
                                                            <g id="SvgjsG2207" class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle2206" r="0"
                                                                    cx="3.634814040830535e-15" cy="29.68050905257936"
                                                                    class="apexcharts-marker" stroke="#ffffff"
                                                                    fill="#3b82f6" fill-opacity="1" stroke-width="1"
                                                                    stroke-opacity="1" rel="3" j="3" index="0"
                                                                    default-marker-size="0"></circle>
                                                            </g>
                                                            <g id="SvgjsG2209" class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle2208" r="0"
                                                                    cx="-64.2601870919693" cy="37.10063631572424"
                                                                    class="apexcharts-marker" stroke="#ffffff"
                                                                    fill="#3b82f6" fill-opacity="1" stroke-width="1"
                                                                    stroke-opacity="1" rel="4" j="4" index="0"
                                                                    default-marker-size="0"></circle>
                                                            </g>
                                                            <g id="SvgjsG2211" class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle2210" r="0"
                                                                    cx="-12.85203741839387" cy="-7.42012726314483"
                                                                    class="apexcharts-marker" stroke="#ffffff"
                                                                    fill="#3b82f6" fill-opacity="1" stroke-width="1"
                                                                    stroke-opacity="1" rel="5" j="5" index="0"
                                                                    default-marker-size="0"></circle>
                                                            </g>
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle2303" r="0" cx="0" cy="0"
                                                                    class="apexcharts-marker w8hjmsza5" stroke="#ffffff"
                                                                    fill="#3b82f6" fill-opacity="1" stroke-width="1"
                                                                    stroke-opacity="1" default-marker-size="0"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG2212" class="apexcharts-series"
                                                        data:longestSeries="true" seriesName="Mobile" rel="2"
                                                        data:realIndex="1">
                                                        <path id="SvgjsPath2215"
                                                            d="M 0 -14.84025452628968 L 0 -14.84025452628968 L 19.278056127590794 -11.130190894717263 L 25.70407483678773 14.840254526289673 L 7.26962808166107e-15 59.36101810515872 L -12.85203741839386 7.420127263144846 L -51.40814967357548 -29.68050905257932Z"
                                                            fill="none" fill-opacity="1" stroke="#249782"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                            stroke-dasharray="0" class="apexcharts-radar" index="1"
                                                            pathTo="M 0 -14.84025452628968 L 0 -14.84025452628968 L 19.278056127590794 -11.130190894717263 L 25.70407483678773 14.840254526289673 L 7.26962808166107e-15 59.36101810515872 L -12.85203741839386 7.420127263144846 L -51.40814967357548 -29.68050905257932Z"
                                                            pathFrom="M 0 0"></path>
                                                        <path id="SvgjsPath2216"
                                                            d="M 0 -14.84025452628968 L 0 -14.84025452628968 L 19.278056127590794 -11.130190894717263 L 25.70407483678773 14.840254526289673 L 7.26962808166107e-15 59.36101810515872 L -12.85203741839386 7.420127263144846 L -51.40814967357548 -29.68050905257932Z"
                                                            fill="rgba(36,151,130,0.1)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-radar" index="1"
                                                            pathTo="M 0 -14.84025452628968 L 0 -14.84025452628968 L 19.278056127590794 -11.130190894717263 L 25.70407483678773 14.840254526289673 L 7.26962808166107e-15 59.36101810515872 L -12.85203741839386 7.420127263144846 L -51.40814967357548 -29.68050905257932Z"
                                                            pathFrom="M 0 0" filter="url(#SvgjsFilter2217)"></path>
                                                        <g id="SvgjsG2213"
                                                            class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown">
                                                            <g id="SvgjsG2227" class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle2226" r="0" cx="0"
                                                                    cy="-14.84025452628968" class="apexcharts-marker"
                                                                    stroke="#ffffff" fill="#249782" fill-opacity="1"
                                                                    stroke-width="1" stroke-opacity="1" rel="0" j="0"
                                                                    index="1" default-marker-size="0"></circle>
                                                            </g>
                                                            <g id="SvgjsG2229" class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle2228" r="0"
                                                                    cx="19.278056127590794" cy="-11.130190894717263"
                                                                    class="apexcharts-marker" stroke="#ffffff"
                                                                    fill="#249782" fill-opacity="1" stroke-width="1"
                                                                    stroke-opacity="1" rel="1" j="1" index="1"
                                                                    default-marker-size="0"></circle>
                                                            </g>
                                                            <g id="SvgjsG2231" class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle2230" r="0"
                                                                    cx="25.70407483678773" cy="14.840254526289673"
                                                                    class="apexcharts-marker" stroke="#ffffff"
                                                                    fill="#249782" fill-opacity="1" stroke-width="1"
                                                                    stroke-opacity="1" rel="2" j="2" index="1"
                                                                    default-marker-size="0"></circle>
                                                            </g>
                                                            <g id="SvgjsG2233" class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle2232" r="0"
                                                                    cx="7.26962808166107e-15" cy="59.36101810515872"
                                                                    class="apexcharts-marker" stroke="#ffffff"
                                                                    fill="#249782" fill-opacity="1" stroke-width="1"
                                                                    stroke-opacity="1" rel="3" j="3" index="1"
                                                                    default-marker-size="0"></circle>
                                                            </g>
                                                            <g id="SvgjsG2235" class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle2234" r="0"
                                                                    cx="-12.85203741839386" cy="7.420127263144846"
                                                                    class="apexcharts-marker" stroke="#ffffff"
                                                                    fill="#249782" fill-opacity="1" stroke-width="1"
                                                                    stroke-opacity="1" rel="4" j="4" index="1"
                                                                    default-marker-size="0"></circle>
                                                            </g>
                                                            <g id="SvgjsG2237" class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle2236" r="0"
                                                                    cx="-51.40814967357548" cy="-29.68050905257932"
                                                                    class="apexcharts-marker" stroke="#ffffff"
                                                                    fill="#249782" fill-opacity="1" stroke-width="1"
                                                                    stroke-opacity="1" rel="5" j="5" index="1"
                                                                    default-marker-size="0"></circle>
                                                            </g>
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle2304" r="0" cx="0" cy="0"
                                                                    class="apexcharts-marker w8tavkl65" stroke="#ffffff"
                                                                    fill="#3b82f6" fill-opacity="1" stroke-width="1"
                                                                    stroke-opacity="1" default-marker-size="0"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG2238" class="apexcharts-series"
                                                        data:longestSeries="true" seriesName="Others" rel="3"
                                                        data:realIndex="2">
                                                        <path id="SvgjsPath2241"
                                                            d="M 0 -32.6485599578373 L 0 -32.6485599578373 L 48.83774218989668 -28.1964835999504 L 50.122945931736076 28.938496326264865 L 1.1813145632699241e-15 9.646165442088293 L -27.6318804495468 15.953273615761422 L -6.426018709196935 -3.710063631572415Z"
                                                            fill="none" fill-opacity="1" stroke="#f97316"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="2"
                                                            stroke-dasharray="0" class="apexcharts-radar" index="2"
                                                            pathTo="M 0 -32.6485599578373 L 0 -32.6485599578373 L 48.83774218989668 -28.1964835999504 L 50.122945931736076 28.938496326264865 L 1.1813145632699241e-15 9.646165442088293 L -27.6318804495468 15.953273615761422 L -6.426018709196935 -3.710063631572415Z"
                                                            pathFrom="M 0 0"></path>
                                                        <path id="SvgjsPath2242"
                                                            d="M 0 -32.6485599578373 L 0 -32.6485599578373 L 48.83774218989668 -28.1964835999504 L 50.122945931736076 28.938496326264865 L 1.1813145632699241e-15 9.646165442088293 L -27.6318804495468 15.953273615761422 L -6.426018709196935 -3.710063631572415Z"
                                                            fill="rgba(249,115,22,0.1)" fill-opacity="1"
                                                            stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                            stroke-dasharray="0" class="apexcharts-radar" index="2"
                                                            pathTo="M 0 -32.6485599578373 L 0 -32.6485599578373 L 48.83774218989668 -28.1964835999504 L 50.122945931736076 28.938496326264865 L 1.1813145632699241e-15 9.646165442088293 L -27.6318804495468 15.953273615761422 L -6.426018709196935 -3.710063631572415Z"
                                                            pathFrom="M 0 0" filter="url(#SvgjsFilter2243)"></path>
                                                        <g id="SvgjsG2239"
                                                            class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown">
                                                            <g id="SvgjsG2253" class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle2252" r="0" cx="0"
                                                                    cy="-32.6485599578373" class="apexcharts-marker"
                                                                    stroke="#ffffff" fill="#f97316" fill-opacity="1"
                                                                    stroke-width="1" stroke-opacity="1" rel="0" j="0"
                                                                    index="2" default-marker-size="0"></circle>
                                                            </g>
                                                            <g id="SvgjsG2255" class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle2254" r="0"
                                                                    cx="48.83774218989668" cy="-28.1964835999504"
                                                                    class="apexcharts-marker" stroke="#ffffff"
                                                                    fill="#f97316" fill-opacity="1" stroke-width="1"
                                                                    stroke-opacity="1" rel="1" j="1" index="2"
                                                                    default-marker-size="0"></circle>
                                                            </g>
                                                            <g id="SvgjsG2257" class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle2256" r="0"
                                                                    cx="50.122945931736076" cy="28.938496326264865"
                                                                    class="apexcharts-marker" stroke="#ffffff"
                                                                    fill="#f97316" fill-opacity="1" stroke-width="1"
                                                                    stroke-opacity="1" rel="2" j="2" index="2"
                                                                    default-marker-size="0"></circle>
                                                            </g>
                                                            <g id="SvgjsG2259" class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle2258" r="0"
                                                                    cx="1.1813145632699241e-15" cy="9.646165442088293"
                                                                    class="apexcharts-marker" stroke="#ffffff"
                                                                    fill="#f97316" fill-opacity="1" stroke-width="1"
                                                                    stroke-opacity="1" rel="3" j="3" index="2"
                                                                    default-marker-size="0"></circle>
                                                            </g>
                                                            <g id="SvgjsG2261" class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle2260" r="0"
                                                                    cx="-27.6318804495468" cy="15.953273615761422"
                                                                    class="apexcharts-marker" stroke="#ffffff"
                                                                    fill="#f97316" fill-opacity="1" stroke-width="1"
                                                                    stroke-opacity="1" rel="4" j="4" index="2"
                                                                    default-marker-size="0"></circle>
                                                            </g>
                                                            <g id="SvgjsG2263" class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle2262" r="0"
                                                                    cx="-6.426018709196935" cy="-3.710063631572415"
                                                                    class="apexcharts-marker" stroke="#ffffff"
                                                                    fill="#f97316" fill-opacity="1" stroke-width="1"
                                                                    stroke-opacity="1" rel="5" j="5" index="2"
                                                                    default-marker-size="0"></circle>
                                                            </g>
                                                            <g class="apexcharts-series-markers">
                                                                <circle id="SvgjsCircle2305" r="0" cx="0" cy="0"
                                                                    class="apexcharts-marker w54hr3kxz" stroke="#ffffff"
                                                                    fill="#3b82f6" fill-opacity="1" stroke-width="1"
                                                                    stroke-opacity="1" default-marker-size="0"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG2185" class="apexcharts-yaxis"><text id="SvgjsText2275"
                                                            font-family="Helvetica, Arial, sans-serif" x="0"
                                                            y="-83.04152715773809" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="11px"
                                                            font-weight="regular" fill="#373d3f"
                                                            class="apexcharts-text "
                                                            style="font-family: Helvetica, Arial, sans-serif;">120</text><text
                                                            id="SvgjsText2276"
                                                            font-family="Helvetica, Arial, sans-serif" x="0"
                                                            y="-60.78114536830357" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="11px"
                                                            font-weight="regular" fill="#373d3f"
                                                            class="apexcharts-text "
                                                            style="font-family: Helvetica, Arial, sans-serif;">90</text><text
                                                            id="SvgjsText2277"
                                                            font-family="Helvetica, Arial, sans-serif" x="0"
                                                            y="-38.520763578869044" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="11px"
                                                            font-weight="regular" fill="#373d3f"
                                                            class="apexcharts-text "
                                                            style="font-family: Helvetica, Arial, sans-serif;">60</text><text
                                                            id="SvgjsText2278"
                                                            font-family="Helvetica, Arial, sans-serif" x="0"
                                                            y="-16.260381789434522" text-anchor="middle"
                                                            dominant-baseline="auto" font-size="11px"
                                                            font-weight="regular" fill="#373d3f"
                                                            class="apexcharts-text "
                                                            style="font-family: Helvetica, Arial, sans-serif;">30</text><text
                                                            id="SvgjsText2279"
                                                            font-family="Helvetica, Arial, sans-serif" x="0" y="6"
                                                            text-anchor="middle" dominant-baseline="auto"
                                                            font-size="11px" font-weight="regular" fill="#373d3f"
                                                            class="apexcharts-text "
                                                            style="font-family: Helvetica, Arial, sans-serif;">0</text>
                                                    </g>
                                                    <g id="SvgjsG2188" class="apexcharts-datalabels" data:realIndex="0">
                                                    </g>
                                                    <g id="SvgjsG2214" class="apexcharts-datalabels" data:realIndex="1">
                                                    </g>
                                                    <g id="SvgjsG2240" class="apexcharts-datalabels" data:realIndex="2">
                                                    </g>
                                                </g>
                                                <line id="SvgjsLine2298" x1="0" y1="0" x2="338.5780029296875" y2="0"
                                                    stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                    stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine2299" x1="0" y1="0" x2="338.5780029296875" y2="0"
                                                    stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG2300" class="apexcharts-yaxis-annotations"></g>
                                                <g id="SvgjsG2301" class="apexcharts-xaxis-annotations"></g>
                                                <g id="SvgjsG2302" class="apexcharts-point-annotations"></g>
                                            </g>
                                        </svg>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            </div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(59, 130, 246);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(36, 151, 130);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-tooltip-series-group" style="order: 3;"><span
                                                    class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(249, 115, 22);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span></div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span></div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--end col-->
                        <div class="order-12 col-span-12 lg:col-span-6 2xl:order-1 card 2xl:col-span-3">
                            <div class="card-body">
                                 
                                <h6 class="mb-3 text-15">User Enagement Chart</h6>
                               <div class="flex items-center mb-3">
                            <h6 class="grow text-15"></h6>

                            <div class="relative">
                               <div class="relative dropdown shrink-0">
                                    <button type="button" class="px-2 py-1.5 text-xs bg-text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20 dropdown-toggle" id="emailDataDropdown" data-bs-toggle="dropdown">
                                        This Monthly <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="chevron-down" class="lucide lucide-chevron-down inline-block size-4 ltr:ml-1 rlt:mr-1"><path d="m6 9 6 6 6-6"></path></svg>
                                    </button>
                            
                                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="emailDataDropdown">
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">1 Weekly</a>
                                        </li>
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">1 Monthly</a>
                                        </li>
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">3 Monthly</a>
                                        </li>
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">6 Monthly</a>
                                        </li>
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">This Monthly</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="userEnagement" class="apex-charts"
                            data-chart-colors='["bg-purple-500", "bg-sky-500"]' dir="ltr"></div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-span-12 lg:col-span-6 order-[13] 2xl:order-1 card 2xl:col-span-3">
                            <div class="card-body">
                                <h6 class="mb-3 text-15">Revenue Trend Chart</h6>
                             <div class="flex items-center mb-3">
                         <h6 class="grow text-15"></h6>

                            <div class="relative">
                               <div class="relative dropdown shrink-0">
                                    <button type="button" class="px-2 py-1.5 text-xs bg-text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20 dropdown-toggle" id="emailDataDropdown" data-bs-toggle="dropdown">
                                        This Monthly <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="chevron-down" class="lucide lucide-chevron-down inline-block size-4 ltr:ml-1 rlt:mr-1"><path d="m6 9 6 6 6-6"></path></svg>
                                    </button>
                            
                                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="emailDataDropdown">
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">1 Weekly</a>
                                        </li>
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">1 Monthly</a>
                                        </li>
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">3 Monthly</a>
                                        </li>
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">6 Monthly</a>
                                        </li>
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">This Monthly</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="revenueTrend" class="apex-charts"
                            data-chart-colors='["bg-purple-500", "bg-sky-500"]' dir="ltr"></div>
                            </div>
                        </div>
                      
                       
                    </div>

                </div>



                <div class="col-span-12 card 2xl:col-span-12">
                    <div class="card-body">
                        <div class="grid items-center grid-cols-1 gap-3 mb-5 2xl:grid-cols-12">
                            <div class="2xl:col-span-3">
                                <h6 class="text-15">Recent Activities</h6>
                            </div>
                           
                        </div>
                        <!--end grid-->
                        <div class="overflow-x-auto">
                            <table class="w-full whitespace-nowrap">
                                <tbody>
                                    <tr>
                                        <td
                                            class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                           <strong> Howard Geroge</strong>
                                        </td>                                        
                                        <td
                                            class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            george@saas.com</td>
                                        <td
                                            class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500" style="color:blue">
                                            <a href="javascript:void(0)">Recent Post</a></td>
                                        <td
                                            class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            02:45 PM</td>
                                    
                                    </tr>
                                  <tr>
                                        <td
                                            class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                           <strong> Howard Geroge</strong>
                                        </td>                                        
                                        <td
                                            class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            george@saas.com</td>
                                        <td
                                            class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500" style="color:blue">
                                            <a href="javascript:void(0)">Recent Post</a></td>
                                        <td
                                            class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            02:45 PM</td>
                                    
                                    </tr><tr>
                                        <td
                                            class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                           <strong> Howard Geroge</strong>
                                        </td>                                        
                                        <td
                                            class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            george@saas.com</td>
                                        <td
                                            class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500" style="color:blue">
                                            <a href="javascript:void(0)">Recent Post</a></td>
                                        <td
                                            class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            02:45 PM</td>
                                    
                                    </tr><tr>
                                        <td
                                            class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                           <strong> Howard Geroge</strong>
                                        </td>                                        
                                        <td
                                            class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            george@saas.com</td>
                                        <td
                                            class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500" style="color:blue">
                                            <a href="javascript:void(0)">Recent Post</a></td>
                                        <td
                                            class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            02:45 PM</td>
                                    
                                    </tr><tr>
                                        <td
                                            class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                           <strong> Howard Geroge</strong>
                                        </td>                                        
                                        <td
                                            class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            george@saas.com</td>
                                        <td
                                            class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500" style="color:blue">
                                            <a href="javascript:void(0)">Recent Post</a></td>
                                        <td
                                            class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            02:45 PM</td>
                                    
                                    </tr><tr>
                                        <td
                                            class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                           <strong> Howard Geroge</strong>
                                        </td>                                        
                                        <td
                                            class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            george@saas.com</td>
                                        <td
                                            class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500" style="color:blue">
                                            <a href="javascript:void(0)">Recent Post</a></td>
                                        <td
                                            class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            02:45 PM</td>
                                    
                                    </tr><tr>
                                        <td
                                            class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                           <strong> Howard Geroge</strong>
                                        </td>                                        
                                        <td
                                            class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            george@saas.com</td>
                                        <td
                                            class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500" style="color:blue">
                                            <a href="javascript:void(0)">Recent Post</a></td>
                                        <td
                                            class="px-3.5 py-2.5 first:pl-5 last:pr-5 border-y border-slate-200 dark:border-zink-500">
                                            02:45 PM</td>
                                    
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
                <!--end col-->



            <!--end grid-->

        <!-- container-fluid -->

    <!-- End Page-content -->

    <?php include 'partials/footer.php'; ?>


</div>

</div>
<!-- end main content -->

<?php include 'partials/customizer.php'; ?>

<?php include 'partials/vendor-scripts.php'; ?>



<!--apexchart js-->
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>

<!--dashboard ecommerce init js-->
<script src="assets/js/pages/dashboards-ecommerce.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>



</body>

</html>

</body>

</html>