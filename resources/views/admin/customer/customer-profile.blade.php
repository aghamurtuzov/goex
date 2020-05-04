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
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                   aria-controls="home" aria-selected="true"><i class="icon-home4"></i> Profil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                   aria-controls="profile" aria-selected="false"><i class="icon-copy"></i> Qaydalar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                                   aria-controls="contact" aria-selected="false"><i class="icon-color-sampler"></i>
                                    Əməliyyat</a>
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
                                        <h4>Profil  Məlumatı</h4>

                                    </div>
                                    @includeIf('partials.session-message')

                                    <div class="card-body py-0 p-4" style="margin-bottom: -6px;">

                                       <form id="form" action="{{route("postCustomerProfile")}}" method="post" class="users-content" enctype="multipart/form-data">
                                       @csrf
                                            <fieldset class="mb-3">
                                                <div class="form-group row">
                                                    <div class="col-lg-2"><label
                                                            class="col-form-label">Ad</label></div>
                                                    <div class="col-lg-4">
                                                        <input type="text" name="first_name" value="{{ $result->first_name ?? '' }}"
                                                               class="form-control" placeholder="Ad">
                                                    </div>
                                                    <div class="col-lg-2"><label class="col-form-label">Soyad</label>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <input type="text" name="last_name" value="{{ $result->last_name ?? '' }}"
                                                               class="form-control" placeholder="Soyad">
                                                    </div>

                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-2"><label
                                                            class="col-form-label">References</label></div>
                                                    <div class="col-lg-4">
                                                        <input type="text" class="form-control"
                                                               placeholder="References" disabled>
                                                    </div>
                                                    <div class="col-lg-2"><label class="col-form-label">Email</label>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <input type="text" name="email" value="{{$result->email ?? ''}}"
                                                               class="form-control" placeholder="Email" disabled>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-2"><label class="col-form-label">Passport</label>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <input type="text" name="passport" value="{{$result->passport ?? ''}}"
                                                               class="form-control" data-mask="AZE99999999"
                                                               placeholder="Passport" >
                                                    </div>
                                                    <div class="col-lg-2"><label class="col-form-label">Pasport
                                                            Fin</label></div>
                                                    <div class="col-lg-4">
                                                        <input type="text" name="passport_fin" value="{{$result->passport_fin  ?? ''}}"
                                                               class="form-control" placeholder="Passport Fin" disabled>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-2"><label class="col-form-label">Endirim</label>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <input type="text" name="discount" value="{{$result->discount ?? ''}}"
                                                               class="form-control" placeholder="Endirim">
                                                    </div>
                                                    <div class="col-lg-2"><label class="col-form-label">Telefon</label>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <input type="text" name="phone" value="{{$result->phone  ?? '' }}"
                                                               class="form-control" placeholder="Telefon">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-2"><label class="col-form-label">Ünvan</label>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <input type="text" name="address" value="{{$result->address ?? ''}}"
                                                               class="form-control" placeholder="Ünvan">
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <select name="country_id" class="select-search form-control">
                                                            <option value="">Ölkə Seç</option>
                                                            @foreach($countries as $country)
                                                                {{--                                            <option value="{{ $country->id }}">{{$country->name_az}}</option>--}}
                                                                <option value="{{ $country->id }}"
                                                                        @if(isset($result->country_id) && $country->id==$result->country_id) selected @endif>{{$country->name_az}}
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <select
                                                            class="form-control select-fixed-single select2-hidden-accessible"
                                                            data-fouc="" tabindex="-1" aria-hidden="true">
                                                            <option value="Example1">example1</option>
                                                            <option value="Example2">example2</option>
                                                        </select><span
                                                            class="select2 select2-container select2-container--default select2-container--below"
                                                            dir="ltr" style="width: 250px;"><span
                                                                class="selection"></span><span class="dropdown-wrapper"
                                                                                               aria-hidden="true"></span></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-2"><label class="col-form-label">Status</label>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <select
                                                            class="form-control select-fixed-single select2-hidden-accessible"
                                                            data-fouc="" tabindex="-1" aria-hidden="true">
                                                            <option value="1">Aktiv</option>
                                                            <option value="0">Deaktiv</option>
                                                        </select><span
                                                            class="select2 select2-container select2-container--default select2-container--below"
                                                            dir="ltr" style="width: 250px;"><span
                                                                class="selection"></span><span class="dropdown-wrapper"
                                                                                               aria-hidden="true"></span></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-2"><label class="d-block font-weight-semibold">Cinsi</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <div class="uniform-choice"><input type="radio" value="1"
                                                                                               class="form-check-input-styled"
                                                                                               @if($result->gender) checked
                                                                                               @endif name="gender">
                                                            </div>
                                                            Kişi
                                                        </label>
                                                    </div>

                                                    <div class="form-check form-check-inline">
                                                        <label class="form-check-label">
                                                            <div class="uniform-choice"><input type="radio"
                                                                                               class="form-check-input-styled" value="0"
                                                                                               @if(!$result->gender) checked
                                                                                               @endif name="gender">
                                                            </div>
                                                            Qadın
                                                        </label>
                                                    </div>
                                                </div>

                                            </fieldset>

                                            <div class="text-left">
                                                <button type="submit" class="btn btn-primary">Yadda Saxla <i
                                                        class="icon-paperplane ml-2"></i></button>
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
                                        <h4>Qaydalar</h4>

                                    </div>

                                    <div class="card-body py-0 p-4" style="margin-bottom: -6px;">
                                        <table class="table datatable-basic">
                                            <thead>
                                            <tr>
                                                <th>Ad</th>
                                                <th>Soyad</th>
                                                <th>İş Başlığı</th>
                                                <th>DOB</th>
                                                <th>Status</th>
                                                <th class="text-center">Əməliyyatlar</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Marth</td>
                                                <td><a href="#">Enright</a></td>
                                                <td>Traffic Court Referee</td>
                                                <td>22 Jun 1972</td>
                                                <td><span class="badge badge-success">Aktiv</span></td>
                                                <td class="text-center">
                                                    <div class="list-icons">
                                                        <div class="dropdown">
                                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                                <i class="icon-menu9"></i>
                                                            </a>

                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-word"></i> Export to .doc</a>
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
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-word"></i> Export to .doc</a>
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
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-word"></i> Export to .doc</a>
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
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-word"></i> Export to .doc</a>
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
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-word"></i> Export to .doc</a>
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
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-word"></i> Export to .doc</a>
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
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-word"></i> Export to .doc</a>
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
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-word"></i> Export to .doc</a>
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
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-word"></i> Export to .doc</a>
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
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-word"></i> Export to .doc</a>
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
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-word"></i> Export to .doc</a>
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
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-word"></i> Export to .doc</a>
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
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-word"></i> Export to .doc</a>
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
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-word"></i> Export to .doc</a>
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
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-word"></i> Export to .doc</a>
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
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-word"></i> Export to .doc</a>
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
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-word"></i> Export to .doc</a>
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
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-word"></i> Export to .doc</a>
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
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-word"></i> Export to .doc</a>
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
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-word"></i> Export to .doc</a>
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
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-word"></i> Export to .doc</a>
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
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-word"></i> Export to .doc</a>
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
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-word"></i> Export to .doc</a>
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
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-word"></i> Export to .doc</a>
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
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-word"></i> Export to .doc</a>
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
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-word"></i> Export to .doc</a>
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
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-word"></i> Export to .doc</a>
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
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-word"></i> Export to .doc</a>
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
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-word"></i> Export to .doc</a>
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
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-pdf"></i> Export to .pdf</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-excel"></i> Export to .csv</a>
                                                                <a href="#" class="dropdown-item"><i
                                                                        class="icon-file-word"></i> Export to .doc</a>
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
