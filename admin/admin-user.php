<?php include 'partials/session.php'; ?>
<?php include 'partials/main.php'; ?>

<head>

    <?php includeFileWithVariables('partials/title-meta.php', array('title' => 'SubScriber User')); ?>

    <!-- Sweet Alert css-->
    <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css">

    <?php include 'partials/head-css.php'; ?>

</head>

<?php include 'partials/body.php'; ?>

<div class="group-data-[sidebar-size=sm]:min-h-sm group-data-[sidebar-size=sm]:relative">

    <?php include 'partials/menu.php'; ?>

    <div class="relative min-h-screen group-data-[sidebar-size=sm]:min-h-sm">

        <?php include 'partials/page-wrapper.php'; ?>

        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

            <?php //includeFileWithVariables('partials/page-title.php', array('pagetitle' => 'Admin User', 'title' => 'Admin Users')); 
            ?>

            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                <div class="grow">
                    <h5 class="text-16">Admin User</h5>
                    <p>Overiview, <strong>Users List</strong></p>
                </div>

                <div class="ltr:md:text-end rtl:md:text-start">
                    <button type="button" data-modal-target="showModal" data-bs-toggle="static-modal"
                        class="text-white mb-4 btn bg-red-500 border-red-500 hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20 add-btn"
                        id="create-btn" data-bs-target="#showModal"><i class="align-bottom ri-add-line me-1"></i> Add
                        User</button>

                </div>
            </div>


            <div class="card" id="customerList">
                <div class="card-body">


                    <div class="grid grid-cols-2 gap-4">
                        <strong>Admin Users List</strong>
                        <!-- ... -->
                        <div>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="relative">
                                    <input type="text"
                                        class="ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                        placeholder="Search for ..." autocomplete="off">
                                    <i data-lucide="search"
                                        class="inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600"></i>
                                </div>
                                <div>
                                    <button style="width:100%" type="button"
                                        class="text-slate-500 bg-white border-slate-100 btn hover:text-white hover:bg-slate-600 hover:border-slate-600 focus:text-white focus:bg-slate-600 focus:border-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:border-slate-600 active:ring active:ring-slate-100 dark:bg-zink-700 dark:hover:bg-slate-500 dark:ring-orange-400/20 dark:focus:bg-orange-500">
                                        <i class="align-bottom ri-download-2-line"></i> Download Selection</button>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="overflow-x-auto mt-5">
                        <table class="w-full whitespace-nowrap" id="customerTable">
                            <thead class="bg-slate-100 dark:bg-zink-600">
                                <tr>
                                    <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500"
                                        scope="col" style="width: 50px;">
                                        <input
                                            class="size-4 border rounded-sm appearance-none cursor-pointer bg-slate-100 border-slate-200 dark:bg-zink-600 dark:border-zink-500 checked:bg-custom-500 checked:border-custom-500 dark:checked:bg-custom-500 dark:checked:border-custom-500 checked:disabled:bg-custom-400 checked:disabled:border-custom-400"
                                            type="checkbox" id="checkAll" value="option">
                                    </th>
                                    <th class="sort px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 ltr:text-left rtl:text-right"
                                        data-sort="customer_name">User Id</th>
                                    <th class="sort px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 ltr:text-left rtl:text-right"
                                        data-sort="customer_name">Name</th>
                                    <th class="sort px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 ltr:text-left rtl:text-right"
                                        data-sort="email">Email</th>
                                    <th class="sort px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 ltr:text-left rtl:text-right"
                                        data-sort="phone">Department</th>
                                    <th class="sort px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 ltr:text-left rtl:text-right"
                                        data-sort="date">Designation</th>
                                    <th class="sort px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 ltr:text-left rtl:text-right"
                                        data-sort="date">Role</th>
                                    <th class="sort px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 ltr:text-left rtl:text-right"
                                        data-sort="status">Status</th>

                                    <th class="sort px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500 ltr:text-left rtl:text-right"
                                        data-sort="action">Action</th>
                                </tr>
                            </thead>
                            <tbody class="list form-check-all">
                                <tr>
                                    <th class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"
                                        scope="row">
                                        <input
                                            class="size-4 border rounded-sm appearance-none cursor-pointer bg-slate-100 border-slate-200 dark:bg-zink-600 dark:border-zink-500 checked:bg-custom-500 checked:border-custom-500 dark:checked:bg-custom-500 dark:checked:border-custom-500 checked:disabled:bg-custom-400 checked:disabled:border-custom-400"
                                            type="checkbox" name="chk_child">
                                    </th>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 id"><a
                                            href="javascript:void(0);" class="fw-medium link-primary id">2711234</a>
                                    </td>

                                    <td
                                        class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 customer_name">
                                        Alex Thompson</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 email">
                                        alexthompson@mail.com</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 status">
                                        HR
                                    </td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 phone">
                                        Financial</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 date">
                                        Admin</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                        Active
                                    </td>


                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                        <div class="icon"><span data-v-0ff4fc29="" class="reference"><a
                                                    data-v-e087307f="" class="icon-button confetti-button vp-raw"
                                                    aria-label="ellipsis-vertical" href="javascript:void(0)"
                                                    data-confetti-text="confetti!"><svg data-v-e087307f=""
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-ellipsis-vertical lucide-icon customizable">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="12" cy="5" r="1"></circle>
                                                        <circle cx="12" cy="19" r="1"></circle>
                                                    </svg></a></span>

                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <th class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"
                                        scope="row">
                                        <input
                                            class="size-4 border rounded-sm appearance-none cursor-pointer bg-slate-100 border-slate-200 dark:bg-zink-600 dark:border-zink-500 checked:bg-custom-500 checked:border-custom-500 dark:checked:bg-custom-500 dark:checked:border-custom-500 checked:disabled:bg-custom-400 checked:disabled:border-custom-400"
                                            type="checkbox" name="chk_child">
                                    </th>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 id"><a
                                            href="javascript:void(0);" class="fw-medium link-primary id">2711234</a>
                                    </td>

                                    <td
                                        class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 customer_name">
                                        Alex Thompson</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 email">
                                        alexthompson@mail.com</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 status">
                                        HR
                                    </td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 phone">
                                        Financial</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 date">
                                        Admin</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                        Active
                                    </td>


                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                        <div class="icon"><span data-v-0ff4fc29="" class="reference"><a
                                                    data-v-e087307f="" class="icon-button confetti-button vp-raw"
                                                    aria-label="ellipsis-vertical" href="javascript:void(0)"
                                                    data-confetti-text="confetti!"><svg data-v-e087307f=""
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-ellipsis-vertical lucide-icon customizable">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="12" cy="5" r="1"></circle>
                                                        <circle cx="12" cy="19" r="1"></circle>
                                                    </svg></a></span>

                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <th class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"
                                        scope="row">
                                        <input
                                            class="size-4 border rounded-sm appearance-none cursor-pointer bg-slate-100 border-slate-200 dark:bg-zink-600 dark:border-zink-500 checked:bg-custom-500 checked:border-custom-500 dark:checked:bg-custom-500 dark:checked:border-custom-500 checked:disabled:bg-custom-400 checked:disabled:border-custom-400"
                                            type="checkbox" name="chk_child">
                                    </th>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 id"><a
                                            href="javascript:void(0);" class="fw-medium link-primary id">2711234</a>
                                    </td>

                                    <td
                                        class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 customer_name">
                                        Alex Thompson</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 email">
                                        alexthompson@mail.com</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 status">
                                        HR
                                    </td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 phone">
                                        Financial</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 date">
                                        Admin</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                        Active
                                    </td>


                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                        <div class="icon"><span data-v-0ff4fc29="" class="reference"><a
                                                    data-v-e087307f="" class="icon-button confetti-button vp-raw"
                                                    aria-label="ellipsis-vertical" href="javascript:void(0)"
                                                    data-confetti-text="confetti!"><svg data-v-e087307f=""
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-ellipsis-vertical lucide-icon customizable">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="12" cy="5" r="1"></circle>
                                                        <circle cx="12" cy="19" r="1"></circle>
                                                    </svg></a></span>

                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <th class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"
                                        scope="row">
                                        <input
                                            class="size-4 border rounded-sm appearance-none cursor-pointer bg-slate-100 border-slate-200 dark:bg-zink-600 dark:border-zink-500 checked:bg-custom-500 checked:border-custom-500 dark:checked:bg-custom-500 dark:checked:border-custom-500 checked:disabled:bg-custom-400 checked:disabled:border-custom-400"
                                            type="checkbox" name="chk_child">
                                    </th>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 id"><a
                                            href="javascript:void(0);" class="fw-medium link-primary id">2711234</a>
                                    </td>

                                    <td
                                        class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 customer_name">
                                        Alex Thompson</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 email">
                                        alexthompson@mail.com</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 status">
                                        HR
                                    </td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 phone">
                                        Financial</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 date">
                                        Admin</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                        Active
                                    </td>


                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                        <div class="icon"><span data-v-0ff4fc29="" class="reference"><a
                                                    data-v-e087307f="" class="icon-button confetti-button vp-raw"
                                                    aria-label="ellipsis-vertical" href="javascript:void(0)"
                                                    data-confetti-text="confetti!"><svg data-v-e087307f=""
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-ellipsis-vertical lucide-icon customizable">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="12" cy="5" r="1"></circle>
                                                        <circle cx="12" cy="19" r="1"></circle>
                                                    </svg></a></span>

                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <th class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"
                                        scope="row">
                                        <input
                                            class="size-4 border rounded-sm appearance-none cursor-pointer bg-slate-100 border-slate-200 dark:bg-zink-600 dark:border-zink-500 checked:bg-custom-500 checked:border-custom-500 dark:checked:bg-custom-500 dark:checked:border-custom-500 checked:disabled:bg-custom-400 checked:disabled:border-custom-400"
                                            type="checkbox" name="chk_child">
                                    </th>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 id"><a
                                            href="javascript:void(0);" class="fw-medium link-primary id">2711234</a>
                                    </td>

                                    <td
                                        class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 customer_name">
                                        Alex Thompson</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 email">
                                        alexthompson@mail.com</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 status">
                                        HR
                                    </td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 phone">
                                        Financial</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 date">
                                        Admin</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                        Active
                                    </td>


                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                        <div class="icon"><span data-v-0ff4fc29="" class="reference"><a
                                                    data-v-e087307f="" class="icon-button confetti-button vp-raw"
                                                    aria-label="ellipsis-vertical" href="javascript:void(0)"
                                                    data-confetti-text="confetti!"><svg data-v-e087307f=""
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-ellipsis-vertical lucide-icon customizable">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="12" cy="5" r="1"></circle>
                                                        <circle cx="12" cy="19" r="1"></circle>
                                                    </svg></a></span>

                                        </div>
                                    </td>
                                </tr>


                            </tbody>
                        </table>
                        <div class="noresult" style="display: none">
                            <div class="text-center p-7">
                                <h5 class="mb-2">Sorry! No Result Found</h5>
                                <p class="mb-0 text-slate-500 dark:text-zink-200">We've searched more than 150+
                                    Orders
                                    We did not find any orders for you search.</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end mt-4">
                        <div class="flex gap-2 pagination-wrap">
                            <a class="inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-500 dark:[&.active]:text-custom-500 [&.active]:bg-custom-50 dark:[&.active]:bg-custom-500/10 [&.active]:border-custom-50 dark:[&.active]:border-custom-500/10 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto page-item pagination-prev disabled pagination-prev disabled"
                                href="#">
                                Previous
                            </a>
                            <ul class="flex gap-2 mb-0 pagination listjs-pagination"></ul>
                            <a class="inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-500 dark:[&.active]:text-custom-500 [&.active]:bg-custom-50 dark:[&.active]:bg-custom-500/10 [&.active]:border-custom-50 dark:[&.active]:border-custom-500/10 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto page-item pagination-prev disabled pagination-next"
                                href="#">
                                Next
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


    <?php include 'partials/footer.php'; ?>

</div>

</div>
<!-- end main content -->

<div id="showModal" modal-center
    class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
    <div class="w-screen md:w-[40rem] bg-white shadow rounded-md dark:bg-zink-600">
        <div class="flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500">
            <h5 class="text-16" id="exampleModalLabel">Add Admin User

            </h5><br />

            <div style="clear: both;"><br />

            </div>
            <button data-modal-close="showModal"
                class="transition-all duration-200 ease-linear text-slate-400 hover:text-slate-500"><i data-lucide="x"
                    class="size-5"></i></button>
        </div>
        <div class="max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto p-4">
            <form class="tablelist-form">
                <div class="mb-3" id="modal-id" style="display: none;">
                    <label for="id-field" class="inline-block mb-2 text-base font-medium">ID</label>
                    <input type="text" id="id-field"
                        class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                        placeholder="ID" readonly="">
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="mb-3">
                        <label for="customername-field" class="inline-block mb-2 text-base font-medium">First Name
                            <span class="text-red-500">*</span></label>
                        <input type="text" id="customername-field"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="Enter your name" required>
                    </div>
                    <div class="mb-3">
                        <label for="status-field" class="inline-block mb-2 text-base font-medium">Last Name <span
                                class="text-red-500">*</span></label>
                        <input type="text" id="customername-field"
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            placeholder="Enter your name" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="status-field" class="inline-block mb-2 text-base font-medium">Email <span
                            class="text-red-500">*</span></label>
                    <input type="text" id="customername-field"
                        class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                        placeholder="Enter your email" required>
                </div>

                <div class="mb-3">
                    <label for="status-field" class="inline-block mb-2 text-base font-medium">User Role
                        <span class="text-red-500">*</span></label>
                    <select
                        class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                        data-trigger name="status-field" id="status-field">
                        <option value="">select user role</option>
                        <option value="Active">Active</option>
                        <option value="Block">Block</option>
                    </select>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="mb-3">
                        <label for="status-field" class="inline-block mb-2 text-base font-medium">Password
                            <span class="text-red-500">*</span></label>
                        <div class="flex items-center">

                            <input type="password" id="customername-field"
                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                placeholder="Enter password" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="status-field" class="inline-block mb-2 text-base font-medium">Confirm Password

                            <span class="text-red-500">*</span></label>
                        <div class="flex items-center">
                            <input type="password" id="customername-field"
                                class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                placeholder="Enter confirm password" required>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="mb-3">
                        <label for="email-field" class="inline-block mb-2 text-base font-medium">Department
                            <span class="text-red-500">*</span></label>
                        <select
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            data-trigger name="status-field" id="status-field">
                            <option value="">select department</option>
                            <option value="Active">Active</option>
                            <option value="Block">Block</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="email-field" class="inline-block mb-2 text-base font-medium">Designation
                            <span class="text-red-500">*</span></label>
                        <select
                            class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                            data-trigger name="status-field" id="status-field">
                            <option value="">select designation</option>
                            <option value="Active">Active</option>
                            <option value="Block">Block</option>
                        </select>
                    </div>
                </div>


                <div class="flex justify-end gap-2">
                    <button type="reset" data-modal-close="showModal"
                        class="text-white mb-4 btn bg-slate-500 border-slate-500 hover:text-white hover:bg-slate-600 hover:border-slate-600 focus:text-white focus:bg-slate-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20 add-btn"
                        data-modal-close="showModal">Close</button>
                    <button type="submit" data-modal-close="showModal"
                        class="text-white mb-4 btn bg-red-500 border-red-500 hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20 add-btn"
                        id="add-btn">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="deleteModal" modal-center
    class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
    <div class="w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600">
        <div class="max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto px-6 py-8">
            <div class="float-right">
                <button data-modal-close="deleteModal" id="close-removeNotesModal"
                    class="transition-all duration-200 ease-linear text-slate-500 hover:text-red-500"><i data-lucide="x"
                        class="size-5"></i></button>
            </div>
            <img src="assets/images/delete.png" alt="" class="block h-12 mx-auto">
            <div class="mt-5 text-center">
                <h5 class="mb-1">Are you sure?</h5>
                <p class="text-slate-500 dark:text-zink-200">Are you certain you want to delete this record?</p>
                <div class="flex justify-center gap-2 mt-6">
                    <button type="button" data-modal-close="deleteModal"
                        class="bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-600 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10">Cancel</button>
                    <button type="button" id="remove-notes"
                        class="text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20">Yes,
                        Delete It!</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'partials/customizer.php'; ?>

<?php include 'partials/vendor-scripts.php'; ?>

<!-- list js-->
<script src="assets/libs/list.js/list.min.js"></script>
<script src="assets/libs/list.pagination.js/list.pagination.min.js"></script>

<!-- Sweet Alerts js -->
<script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>

<!-- listjs init -->
<script src="assets/js/pages/listjs.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>

</body>

</html>