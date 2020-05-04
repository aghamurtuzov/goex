@extends("main.admin")
@section("content")
    <div class="page-content pt-4">

        <!-- Main sidebar -->
        <div class="sidebar sidebar-light sidebar-main sidebar-expand-md align-self-start">

            <!-- Sidebar mobile toggler -->
            <div class="sidebar-mobile-toggler text-center">
                <a href="#" class="sidebar-mobile-main-toggle">
                    <i class="icon-arrow-left8"></i>
                </a>
                <span class="font-weight-semibold">Main sidebar</span>
                <a href="#" class="sidebar-mobile-expand">
                    <i class="icon-screen-full"></i>
                    <i class="icon-screen-normal"></i>
                </a>
            </div>
            <!-- /sidebar mobile toggler -->


            <!-- Sidebar content -->
            <div class="sidebar-content">
                <div class="card card-sidebar-mobile">



                    <!-- User menu -->
                    <div class="sidebar-user bg-indigo-400">
                        <div class="card-body">
                            <div class="media ">
                                <h1 class="m-auto">#3425332</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /user menu -->


                    <!-- Main navigation -->
                    <div class="card-body p-3">
                        <ul class="nav nav-tabs nav-sidebar" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="icon-home4"></i> Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="icon-copy"></i> Order</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><i class="icon-color-sampler"></i>  Transaction</a>
                            </li>
                        </ul>

                    </div>
                    <!-- /main navigation -->

                </div>
            </div>
            <!-- /sidebar content -->

        </div>
        <!-- /main sidebar -->


        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content">

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-xl-12">

                                <!-- Traffic sources -->
                                <div class="card">
                                    <div class="card-header header-elements-inline">
                                        <h4>Profile information</h4>

                                    </div>

                                    <div class="card-body py-0 p-4" style="margin-bottom: -6px;">

                                                <form action="#" class="users-content">
                                                    <fieldset class="mb-3">
                                                        <div class="form-group row">
                                                            <div class="col-lg-2"> <label class="col-form-label">Firstname</label></div>
                                                            <div class="col-lg-4">
                                                                <input type="text" value="{{$corporative->firstname}}" class="form-control" placeholder="Firstname">
                                                            </div>
                                                            <div class="col-lg-2"> <label class="col-form-label">Lastname</label></div>
                                                            <div class="col-lg-4">
                                                                <input type="text" value="{{$corporative->lastname}}" class="form-control" placeholder="Lastname">
                                                            </div>

                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-2"><label class="col-form-label">References</label></div>
                                                            <div class="col-lg-4">
                                                                <input type="text" class="form-control"  placeholder="References">
                                                            </div>
                                                            <div class="col-lg-2"><label class="col-form-label">Email</label></div>
                                                            <div class="col-lg-4">
                                                                <input type="text" value="{{$corporative->email}}" class="form-control" placeholder="Email">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-2"><label class="col-form-label">Passport</label></div>
                                                            <div class="col-lg-4">
                                                                <input type="text" value="{{$corporative->passport}}" class="form-control" data-mask="AZE99999999" placeholder="Passport">
                                                            </div>
                                                            <div class="col-lg-2"><label class="col-form-label">Pasport Fin</label></div>
                                                            <div class="col-lg-4">
                                                                <input type="text" value="{{$corporative->passport_fin}}" class="form-control" placeholder="Passport Fin">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-2"><label class="col-form-label">Endirim</label></div>
                                                            <div class="col-lg-4">
                                                                <input type="text" value="{{$corporative->discount}}" class="form-control" placeholder="Endirim">
                                                            </div>
                                                            <div class="col-lg-2"><label class="col-form-label">Phone</label></div>
                                                            <div class="col-lg-4">
                                                                <input type="text" value="{{$corporative->phone}}" class="form-control" placeholder="Phone">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-2"><label class="col-form-label">Address</label></div>
                                                            <div class="col-lg-4">
                                                                <input type="text" value="{{$corporative->address}}" class="form-control" placeholder="Address">
                                                            </div>
                                                            <div class="col-lg-2"><label class="col-form-label">Filial</label></div>
                                                            <div class="col-lg-4">
                                                                <select class="form-control select-fixed-single select2-hidden-accessible" data-fouc="" tabindex="-1" aria-hidden="true">
                                                                    <option value="Example1">example1</option>
                                                                    <option value="Example2">example2</option>
                                                                </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 250px;"><span class="selection"></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-2"><label class="col-form-label">Status</label></div>
                                                            <div class="col-lg-4">
                                                                <select class="form-control select-fixed-single select2-hidden-accessible" data-fouc="" tabindex="-1" aria-hidden="true">
                                                                    <option value="Active">Active</option>
                                                                    <option value="Deactive">Deactive</option>
                                                                </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 250px;"><span class="selection"></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-lg-2"><label class="d-block font-weight-semibold">Gender</label></div>
                                                            <div class="form-check form-check-inline">
                                                                <label class="form-check-label">
                                                                    <div class="uniform-choice"><input type="radio" class="form-check-input-styled" @if($corporative->gender=="1") checked @endif name="gender"></div>
                                                                    Male
                                                                </label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <label class="form-check-label">
                                                                    <div class="uniform-choice"><input type="radio" class="form-check-input-styled" @if($corporative->gender=="0") checked @endif name="gender"></div>
                                                                    Female
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </fieldset>

                                                    <div class="text-left">
                                                        <button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
                                                    </div>
                                                </form>

                                    </div>

                                </div>
                                <!-- /traffic sources -->

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <div class="col-xl-12">

                                <!-- Traffic sources -->
                                <div class="card">
                                    <div class="card-header header-elements-inline">
                                        <h4>Order</h4>

                                    </div>

                                    <div class="card-body py-0 p-4" style="margin-bottom: -6px;">
                                        <table class="table datatable-basic">
                                            <thead>
                                            <tr>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Job Title</th>
                                                <th>DOB</th>
                                                <th>Status</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Marth</td>
                                                <td><a href="#">Enright</a></td>
                                                <td>Traffic Court Referee</td>
                                                <td>22 Jun 1972</td>
                                                <td><span class="badge badge-success">Active</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons">
                                                        <div class="dropdown">
                                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jackelyn</td>
                                                <td>Weible</td>
                                                <td><a href="#">Airline Transport Pilot</a></td>
                                                <td>3 Oct 1981</td>
                                                <td><span class="badge badge-secondary">Inactive</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons">
                                                        <div class="dropdown">
                                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Aura</td>
                                                <td>Hard</td>
                                                <td>Business Services Sales Representative</td>
                                                <td>19 Apr 1969</td>
                                                <td><span class="badge badge-danger">Suspended</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons">
                                                        <div class="dropdown">
                                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Nathalie</td>
                                                <td><a href="#">Pretty</a></td>
                                                <td>Drywall Stripper</td>
                                                <td>13 Dec 1977</td>
                                                <td><span class="badge badge-info">Pending</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons">
                                                        <div class="dropdown">
                                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Sharan</td>
                                                <td>Leland</td>
                                                <td>Aviation Tactical Readiness Officer</td>
                                                <td>30 Dec 1991</td>
                                                <td><span class="badge badge-secondary">Inactive</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons">
                                                        <div class="dropdown">
                                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Maxine</td>
                                                <td><a href="#">Woldt</a></td>
                                                <td><a href="#">Business Services Sales Representative</a></td>
                                                <td>17 Oct 1987</td>
                                                <td><span class="badge badge-info">Pending</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons">
                                                        <div class="dropdown">
                                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Sylvia</td>
                                                <td><a href="#">Mcgaughy</a></td>
                                                <td>Hemodialysis Technician</td>
                                                <td>11 Nov 1983</td>
                                                <td><span class="badge badge-danger">Suspended</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons">
                                                        <div class="dropdown">
                                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Lizzee</td>
                                                <td><a href="#">Goodlow</a></td>
                                                <td>Technical Services Librarian</td>
                                                <td>1 Nov 1961</td>
                                                <td><span class="badge badge-danger">Suspended</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons">
                                                        <div class="dropdown">
                                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Kennedy</td>
                                                <td>Haley</td>
                                                <td>Senior Marketing Designer</td>
                                                <td>18 Dec 1960</td>
                                                <td><span class="badge badge-success">Active</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons">
                                                        <div class="dropdown">
                                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Chantal</td>
                                                <td><a href="#">Nailor</a></td>
                                                <td>Technical Services Librarian</td>
                                                <td>10 Jan 1980</td>
                                                <td><span class="badge badge-secondary">Inactive</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons">
                                                        <div class="dropdown">
                                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Delma</td>
                                                <td>Bonds</td>
                                                <td>Lead Brand Manager</td>
                                                <td>21 Dec 1968</td>
                                                <td><span class="badge badge-info">Pending</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons">
                                                        <div class="dropdown">
                                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Roland</td>
                                                <td>Salmos</td>
                                                <td><a href="#">Senior Program Developer</a></td>
                                                <td>5 Jun 1986</td>
                                                <td><span class="badge badge-secondary">Inactive</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons">
                                                        <div class="dropdown">
                                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Coy</td>
                                                <td>Wollard</td>
                                                <td>Customer Service Operator</td>
                                                <td>12 Oct 1982</td>
                                                <td><span class="badge badge-success">Active</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons">
                                                        <div class="dropdown">
                                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Maxwell</td>
                                                <td>Maben</td>
                                                <td>Regional Representative</td>
                                                <td>25 Feb 1988</td>
                                                <td><span class="badge badge-danger">Suspended</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons">
                                                        <div class="dropdown">
                                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Cicely</td>
                                                <td>Sigler</td>
                                                <td><a href="#">Senior Research Officer</a></td>
                                                <td>15 Mar 1960</td>
                                                <td><span class="badge badge-info">Pending</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons">
                                                        <div class="dropdown">
                                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <!-- /traffic sources -->

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="row">
                            <div class="col-xl-12">

                                <!-- Traffic sources -->
                                <div class="card">
                                    <div class="card-header header-elements-inline">
                                        <h4>Transaction</h4>

                                    </div>

                                    <div class="card-body py-0 p-4" style="margin-bottom: -6px;">
                                        <table class="table datatable-basic">
                                            <thead>
                                            <tr>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Job Title</th>
                                                <th>DOB</th>
                                                <th>Status</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Marth</td>
                                                <td><a href="#">Enright</a></td>
                                                <td>Traffic Court Referee</td>
                                                <td>22 Jun 1972</td>
                                                <td><span class="badge badge-success">Active</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons">
                                                        <div class="dropdown">
                                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Jackelyn</td>
                                                <td>Weible</td>
                                                <td><a href="#">Airline Transport Pilot</a></td>
                                                <td>3 Oct 1981</td>
                                                <td><span class="badge badge-secondary">Inactive</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons">
                                                        <div class="dropdown">
                                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Aura</td>
                                                <td>Hard</td>
                                                <td>Business Services Sales Representative</td>
                                                <td>19 Apr 1969</td>
                                                <td><span class="badge badge-danger">Suspended</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons">
                                                        <div class="dropdown">
                                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Nathalie</td>
                                                <td><a href="#">Pretty</a></td>
                                                <td>Drywall Stripper</td>
                                                <td>13 Dec 1977</td>
                                                <td><span class="badge badge-info">Pending</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons">
                                                        <div class="dropdown">
                                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Sharan</td>
                                                <td>Leland</td>
                                                <td>Aviation Tactical Readiness Officer</td>
                                                <td>30 Dec 1991</td>
                                                <td><span class="badge badge-secondary">Inactive</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons">
                                                        <div class="dropdown">
                                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Maxine</td>
                                                <td><a href="#">Woldt</a></td>
                                                <td><a href="#">Business Services Sales Representative</a></td>
                                                <td>17 Oct 1987</td>
                                                <td><span class="badge badge-info">Pending</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons">
                                                        <div class="dropdown">
                                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Sylvia</td>
                                                <td><a href="#">Mcgaughy</a></td>
                                                <td>Hemodialysis Technician</td>
                                                <td>11 Nov 1983</td>
                                                <td><span class="badge badge-danger">Suspended</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons">
                                                        <div class="dropdown">
                                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Lizzee</td>
                                                <td><a href="#">Goodlow</a></td>
                                                <td>Technical Services Librarian</td>
                                                <td>1 Nov 1961</td>
                                                <td><span class="badge badge-danger">Suspended</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons">
                                                        <div class="dropdown">
                                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Kennedy</td>
                                                <td>Haley</td>
                                                <td>Senior Marketing Designer</td>
                                                <td>18 Dec 1960</td>
                                                <td><span class="badge badge-success">Active</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons">
                                                        <div class="dropdown">
                                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Chantal</td>
                                                <td><a href="#">Nailor</a></td>
                                                <td>Technical Services Librarian</td>
                                                <td>10 Jan 1980</td>
                                                <td><span class="badge badge-secondary">Inactive</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons">
                                                        <div class="dropdown">
                                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Delma</td>
                                                <td>Bonds</td>
                                                <td>Lead Brand Manager</td>
                                                <td>21 Dec 1968</td>
                                                <td><span class="badge badge-info">Pending</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons">
                                                        <div class="dropdown">
                                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Roland</td>
                                                <td>Salmos</td>
                                                <td><a href="#">Senior Program Developer</a></td>
                                                <td>5 Jun 1986</td>
                                                <td><span class="badge badge-secondary">Inactive</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons">
                                                        <div class="dropdown">
                                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Coy</td>
                                                <td>Wollard</td>
                                                <td>Customer Service Operator</td>
                                                <td>12 Oct 1982</td>
                                                <td><span class="badge badge-success">Active</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons">
                                                        <div class="dropdown">
                                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Maxwell</td>
                                                <td>Maben</td>
                                                <td>Regional Representative</td>
                                                <td>25 Feb 1988</td>
                                                <td><span class="badge badge-danger">Suspended</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons">
                                                        <div class="dropdown">
                                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Cicely</td>
                                                <td>Sigler</td>
                                                <td><a href="#">Senior Research Officer</a></td>
                                                <td>15 Mar 1960</td>
                                                <td><span class="badge badge-info">Pending</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons">
                                                        <div class="dropdown">
                                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                                <!-- /traffic sources -->

                            </div>
                        </div>
                    </div>
                </div>



                <!-- /main charts -->
            </div>
            <!-- /content area -->
        </div>
        <!-- /main content -->
    </div>
    @endsection

@section("js")

    @endsection

@section("css")

    @endsection
