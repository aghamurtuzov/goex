@extends("main.site")
@section("content")

    <section id="account">
        <div class="container">
            @if(Session::has('success-message'))
                <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('success-message') }}</p>
            @endif
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <p class="alert alert-class alert-danger">{{ $error }}</p>
                @endforeach
            @endif
            <div class="row">
                <div class="col-md-4 col-sm-5">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link first_nav" id="v-pills-home-tab" data-toggle="pill" href="">
                            <i class="fa fa-user-circle-o"></i> Hesabım</a>
                        <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#dashboard"><i class="fa fa-tachometer"></i> Dashboard</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#myorder">
                            <i class="fa fa-first-order"></i> Sifarişlərim</a>
                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#neworder">
                            <i class="fa fa-plus-square-o"></i> Yeni sifariş</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#price">
                            <i class="fa fa-calculator"></i> Qiyməti hesabla</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#interval">
                            <i class="fa fa-location-arrow"></i> Sifarişim haradadır</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#payments">
                            <i class="fa fa-money"></i> Ödəmələr</a>
                        <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#somewhere">
                            <i class="fa fa-map-marker"></i> Ünvanlar</a>
                        <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#balance">
                            <i class="fa fa-credit-card-alt"></i> Balans</a>
                        <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#private">
                            <i class="fa fa-user-secret"></i> Şəxsi məlumatlar</a>
                        <a class="nav-link" href="{{route("getSiteLogout")}}" id="logout"><i class="fa fa-sign-out"></i> Çıxış</a>
                    </div>
                </div>
                <div class="col-md-8 col-sm-7">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="dashboard">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Balansım</h5>
                                                <h1 class="card-text">0.00 AZN</h1>
                                                <button>Balansı artır</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Sifarişlərim</h5>
                                                <h1 class="card-text">20.00 AZN</h1>
                                                <div class="result">
                                                    <span>Bringo.az bu ay tam 4 ədəd sifariş</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="myorder">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="table_head">
                                        <h2>Sifarişlərimin tarixçəsi</h2>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form_search">
                                        <form>
                                            <input type="search" placeholder="Axtar">
                                            <button><img src="{{asset('/site/image/search.png')}}"></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive-xl w-100">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Sifarişin nömrəsi</th>
                                        <th>Mağaza</th>
                                        <th>Sifariş Tarix</th>
                                        <th>Çatdırılma Tarixi</th>
                                        <th>Məbləğ</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1287263</td>
                                        <td>Zara</td>
                                        <td>25.03.2020</td>
                                        <td>30.03.2020</td>
                                        <td>30 azn</td>
                                        <td>
                                            <label class="text-success">Çatdırılıb</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1287263</td>
                                        <td>Zara</td>
                                        <td>25.03.2020</td>
                                        <td>30.03.2020</td>
                                        <td>30 azn</td>
                                        <td>
                                            <label class="text-success">Çatdırılıb</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1287263</td>
                                        <td>Zara</td>
                                        <td>25.03.2020</td>
                                        <td>30.03.2020</td>
                                        <td>30 azn</td>
                                        <td>
                                            <label class="text-success">Çatdırılıb</label>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="neworder">
                            <div class="row">
                                <div class="col">
                                    <div class="neworder_top">
                                        <p class="btn-switch">
                                            <input type="radio" id="yes" name="switch" class="btn-switch__radio btn-switch__radio_yes" />
                                            <input type="radio" checked id="no" name="switch" class="btn-switch__radio btn-switch__radio_no" />
                                            <label for="yes" class="btn-switch__label btn-switch__label_yes"><span class="btn-switch__txt"></span></label>								  <label for="no" class="btn-switch__label btn-switch__label_no"><span class="btn-switch__txt"></span></label>
                                        </p>
                                        <p class="neworder_text">Sifarişimi öz hesabımdan verəcəm,Bringo.az Azərbaycan ünvanına çatdırsın.</p>
                                    </div>
                                    <div class="neworder_bottom">
                                        <h2>Yeni sifariş</h2>
                                        <div class="form_neworder">
                                            <form>
                                                <div class="row neworder_input">
                                                    <div class="col-md-2">
                                                        <label>Link:</label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" name="" placeholder="Link">
                                                    </div>
                                                </div>
                                                <div class="row neworder_input">
                                                    <div class="col-md-2">
                                                        <label>Ad:</label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" name="" placeholder="Ad">
                                                    </div>
                                                </div>
                                                <div class="row neworder_input">
                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label>Miqdar:</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="number" name="" class="form-control" placeholder="130">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label>Rəngi:</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="number" name="" class="form-control" placeholder="130">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row neworder_input">
                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label>Ölçü:</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="number" name="" class="form-control" placeholder="130">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label>Qiymət:</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="number" name="" class="form-control" placeholder="130">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row neworder_input">
                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <label>Türkiyə Daxili Çatdırılma:</label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input type="number" placeholder="130" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row neworder_input">
                                                    <div class="col-md-2">
                                                        <label>Sifarişiniz Haqqında Ətraflı Məlumat:</label>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <textarea class="form-control" rows="6"></textarea>
                                                    </div>
                                                </div>
                                                <div class="neworder_btn">
                                                    <button>Sebete əlavə et</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="price">
                            <div class="row">
                                <div class="col">
                                    <div class="calculate_block">
                                        <h2>Qiyməti hesabla</h2>
                                        @include("site.calculate.calculate")
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="somewhere">
                            <div id="somewhere_blocks">
                                <div class="accordion" id="accordionExample">
                                    @foreach($address as $addres)
                                    <div class="card">
                                        <div class="card-header" id="headingOne"  data-toggle="collapse" data-target="#collapse{{$addres->id}}">
                                            <h2 class="mb-0">
                                                <div class="somewhere_top">
                                                    <img src="{{asset("/site/image/turkish.png")}}">
                                                    <h2>{{$addres->country}}</h2>
                                                </div>
                                            </h2>
                                        </div>
                                        <div id="collapse{{$addres->id}}" class="collapse" >
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="somewhere_text">
                                                            <p>Artıq Türkiyə ünvanınızı istifadə edərək, sifariş verə bilərsiniz.</p>
                                                            <p>İstədiyiniz saytdan sifarişinizi verə bilərsiniz. Çatdırılma mərhələsində Türkiyə unvanınızı yazın, sifarişinizi tamamladıqdn sonra Yeni Sifariş səhifəsindən Sifarişi özüm verəcəm, Bringo.az Azərbaycan ünvanıma çatdırsın seçilərək sifariş məlumatlarınızı sistemdə qeyd edib sifarişinizi tamamlaya bilərsiniz</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="somewhere_block">
                                                            <div class="somewhere_head">
                                                                <img src="{{asset("/site/image/xerite.png")}}">
                                                                <h4>Türkiyə Ünvanınız</h4>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="somewhere_list_block">
                                                                        <div class="row">
                                                                            <div class="col-md-10">
                                                                                <div class="somewherelist">
                                                                                    <ul>
                                                                                        <li>Ad:</li>
                                                                                        <li>{{$addres->first_name ?? ""}}</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <div class="somewhere-copy">
                                                                                    <i class="fa fa-files-o" aria-hidden="true"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="somewhere_list_block">
                                                                        <div class="row">
                                                                            <div class="col-md-10">
                                                                                <div class="somewherelist">
                                                                                    <ul>
                                                                                        <li>Soyad:</li>
                                                                                        <li>{{$addres->last_name ?? ""}}</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <div class="somewhere-copy">
                                                                                    <i class="fa fa-files-o" aria-hidden="true"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="somewhere_list_block">
                                                                        <div class="row">
                                                                            <div class="col-md-10">
                                                                                <div class="somewherelist">
                                                                                    <ul>
                                                                                        <li>Telefon:</li>
                                                                                        <li>{{$addres->phone ?? ""}}</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <div class="somewhere-copy">
                                                                                    <i class="fa fa-files-o" aria-hidden="true"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="somewhere_list_block">
                                                                        <div class="row">
                                                                            <div class="col-md-10">
                                                                                <div class="somewherelist">
                                                                                    <ul>
                                                                                        <li>Posta kodu:</li>
                                                                                        <li>{{$addres->index ?? ""}}</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <div class="somewhere-copy">
                                                                                    <i class="fa fa-files-o" aria-hidden="true"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="somewhere_list_block">
                                                                        <div class="row">
                                                                            <div class="col-md-10">
                                                                                <div class="somewherelist">
                                                                                    <ul>
                                                                                        <li>Ünvan 1:</li>
                                                                                        <li>{{$addres->address_line_1 ?? ""}}</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <div class="somewhere-copy">
                                                                                    <i class="fa fa-files-o" aria-hidden="true"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                @if($addres->address_line_2)
                                                                <div class="col-md-6">
                                                                    <div class="somewhere_list_block">
                                                                        <div class="row">
                                                                            <div class="col-md-10">
                                                                                <div class="somewherelist">
                                                                                    <ul>
                                                                                        <li>Ünvan:</li>
                                                                                        <li>{{$addres->address_line_2 ?? "" }}</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <div class="somewhere-copy">
                                                                                    <i class="fa fa-files-o" aria-hidden="true"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                @endif
                                                                <div class="col-md-6">
                                                                    <div class="somewhere_list_block">
                                                                        <div class="row">
                                                                            <div class="col-md-10">
                                                                                <div class="somewherelist">
                                                                                    <ul>
                                                                                        <li>Küçə:</li>
                                                                                        <li>{{$addres->street ?? ""}}</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <div class="somewhere-copy">
                                                                                    <i class="fa fa-files-o" aria-hidden="true"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="somewhere_list_block">
                                                                        <div class="row">
                                                                            <div class="col-md-10">
                                                                                <div class="somewherelist">
                                                                                    <ul>
                                                                                        <li>Bölgə:</li>
                                                                                        <li>{{$addres->district ?? ""}}</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <div class="somewhere-copy">
                                                                                    <i class="fa fa-files-o" aria-hidden="true"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="somewhere_list_block">
                                                                        <div class="row">
                                                                            <div class="col-md-10">
                                                                                <div class="somewherelist">
                                                                                    <ul>
                                                                                        <li>Ölkə:</li>
                                                                                        <li>{{$addres->country ?? ""}}</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <div class="somewhere-copy">
                                                                                    <i class="fa fa-files-o" aria-hidden="true"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="somewhere_list_block">
                                                                        <div class="row">
                                                                            <div class="col-md-10">
                                                                                <div class="somewherelist">
                                                                                    <ul>
                                                                                        <li>Şəhər:</li>
                                                                                        <li>{{$addres->city ?? ""}}</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <div class="somewhere-copy">
                                                                                    <i class="fa fa-files-o" aria-hidden="true"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="somewhere_list_block">
                                                                        <div class="row">
                                                                            <div class="col-md-10">
                                                                                <div class="somewherelist">
                                                                                    <ul>
                                                                                        <li>Passport Fin:</li>
                                                                                        <li>{{$addres->passport_fin ?? ""}}</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <div class="somewhere-copy">
                                                                                    <i class="fa fa-files-o" aria-hidden="true"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="somewhere_list_block">
                                                                        <div class="row">
                                                                            <div class="col-md-10">
                                                                                <div class="somewherelist">
                                                                                    <ul>
                                                                                        <li>Province:</li>
                                                                                        <li>{{$addres->province ?? ""}}</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <div class="somewhere-copy">
                                                                                    <i class="fa fa-files-o" aria-hidden="true"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="somewhere_list_block">
                                                                        <div class="row">
                                                                            <div class="col-md-10">
                                                                                <div class="somewherelist">
                                                                                    <ul>
                                                                                        <li>Receiver:</li>
                                                                                        <li>{{$addres->receiver ?? ""}}</li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-2">
                                                                                <div class="somewhere-copy">
                                                                                    <i class="fa fa-files-o" aria-hidden="true"></i>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        @endforeach
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="payments">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="table_head">
                                        <h2>Sifarişlərimin tarixçəsi</h2>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form_search">
                                        <form>
                                            <input type="search" placeholder="Axtar">
                                            <button><img src="{{asset("/site/image/search.png")}}"></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive-xl w-100">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Sifarişin nömrəsi</th>
                                        <th>Mağaza</th>
                                        <th>Sifariş Tarix</th>
                                        <th>Çatdırılma Tarixi</th>
                                        <th>Məbləğ</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1287263</td>
                                        <td>Zara</td>
                                        <td>25.03.2020</td>
                                        <td>30.03.2020</td>
                                        <td>30 azn</td>
                                        <td>
                                            <label class="text-success">Çatdırılıb</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1287263</td>
                                        <td>Zara</td>
                                        <td>25.03.2020</td>
                                        <td>30.03.2020</td>
                                        <td>30 azn</td>
                                        <td>
                                            <label class="text-success">Çatdırılıb</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1287263</td>
                                        <td>Zara</td>
                                        <td>25.03.2020</td>
                                        <td>30.03.2020</td>
                                        <td>30 azn</td>
                                        <td>
                                            <label class="text-success">Çatdırılıb</label>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="balance">
                            <div id="balance_blocks">
                                <div class="balance_top">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Balansım</h5>
                                            <h1 class="card-text">0.00 AZN</h1>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Balance</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="number" name="" placeholder="130" class="form-control">
                                                </div>
                                            </div>
                                            <div class="balance_btn">
                                                <div class="row">
                                                    <div class="col-md-4"></div>
                                                    <div class="col-md-8">
                                                        <button>Balansı artır</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="balance_bottom">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Ad:</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="number" name="" placeholder="130" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Card number:</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="number" name="" placeholder="130" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>Expire date:</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="number" name="" placeholder="00/00" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>CVC:</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="number" name="" placeholder="120" class="form-control">
                                                </div>
                                            </div>
                                            <div class="balance_btn">
                                                <div class="row">
                                                    <div class="col-md-4"></div>
                                                    <div class="col-md-8">
                                                        <button>Balansı artır</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="private">
                            <div id="private_blocks">
                                <div class="private_top">
                                    <div class="row private_item">
                                        <div class="col-lg-7 col-md-6 private_head">
                                            <h4>Şəxsi məlumatlar</h4>
                                        </div>
                                        <div class="col-lg-5 col-md-6">
                                            <div class="private_code">
                                                <p>Müştəri kodu:{{$result->customer_code}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="private_forms m-auto">
                                        <div class="private_form">
                                            <form action="{{route("postSitePrivate",['id' => $result->id ?? 0])}}" method="post" id="form">
                                                @csrf
                                                <div class="form-row">
                                                    <div class="col-md-3">
                                                        <label>Ad:</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="first_name" value="{{ $result->first_name ?? "" }}" class="form-control" placeholder="Ad" required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-3">
                                                        <label>Soyad:</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="last_name" value="{{ $result->last_name ?? "" }}" class="form-control" placeholder="Soyad" required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-3">
                                                        <label>Telefon:</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" name="phone" value="{{ $result->phone ?? "" }}" class="form-control" placeholder="Telefon" required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-3">
                                                        <label>Doğum tarixi:</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="date" name="date_of_birth" value="{{ $result->date_of_birth ?? "" }}" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-3">
                                                        <label>Cinsi</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="gender_block">
                                                            <input type="radio" required name="gender" @if($result->gender=="1") checked @endif value="1"><span>Kisi</span>
                                                            <input type="radio" required name="gender" @if($result->gender=="0") checked  @endif value="0"><span>Qadin</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-3">
                                                        <label>Vesiqe nömrəsi:</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <input type="text" name="passport" value="{{ $result->passport ?? "" }}" required class="form-control" placeholder="Vesiqe nömrəsi">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input type="text" name="passport_fin" value="{{ $result->passport_fin ?? "" }}" required class="form-control" placeholder="Vesiqe Fin nömrəsi">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-3">
                                                        <label>Filial:</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <select name="filial_id" id="filial_id" class="form-control" required>
                                                             @foreach($filials as $filial)
                                                            <option value="{{$filial->id}}" @if($result->filial_id == $filial->id) selected @endif>{{$filial->name}}</option>
                                                                @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-3">
                                                        <label>Ünvan:</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <textarea class="form-control" name="address" id="address" rows="4" placeholder="Ünvan" required>
                                                            {{$result->address ?? ""}}
                                                        </textarea>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-3"></div>
                                                    <div class="col-md-9">
                                                        <div class="private_btn">
                                                            <button type="submit">Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="private_bottom">
                                    <div class="private_bottom_head">
                                        <h2>Sifrə və təhlukəsizlik</h2>
                                    </div>
                                    <div class="private_bottom_form">
                                        <form action="{{route("postPassword",['id' => $result->id])}}" method="post">
                                            @csrf
                                            <div class="form-row">
                                                <div class="col-md-3">
                                                    <label>Yeni şifrə:</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="password" name="password" class="form-control" placeholder="Yeni şifrə">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-3">
                                                    <label>Yeni şifrə təkrar:</label>
                                                </div>
                                                <div class="col-md-9">
                                                    <input type="password" name="password_confirmation" class="form-control" placeholder="Yeni şifrə təkrar">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-9">
                                                    <div class="private_btn">
                                                        <button type="submit">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="interval">
                            <div class="interval_search">
                                <h2>Sifarişin nömrəsi</h2>
                                <div class="row">
                                    <div class="col">

                                        <div class="form_search">
                                            <form>
                                                <input type="search" placeholder="Axtar">
                                                <button><img src="{{asset("/site/image/search.png")}}"></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="interval">
                                <div class="container">
                                    <div class="row w-100">
                                        <div class="col">
                                            <div id="wizard" class="form_wizard wizard_horizontal">
                                                <ul class="wizard_steps">
                                                    <li>
                                                        <a href="#step-1 " class="wizard_active">
                                                            <span class="step_no"></span>
                                                            <span class="step_descr">
										            	<i class="fa fa-university"></i>
										            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#step-2" class="wizard_active">
                                                            <span class="step_no"></span>
                                                            <span class="step_descr">
										            	<i class="fa fa-plane"></i>
										            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#step-3" class="wizard_active">
                                                            <span class="step_no"></span>
                                                            <span class="step_descr">
										            	<i class="fa fa-truck"></i>
										            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#step-4">
                                                            <span class="step_no"></span>
                                                            <span class="step_descr">
										            	<i class="fa fa-home"></i>
										            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#step-5">
                                                            <span class="step_no"></span>
                                                            <span class="step_descr">
										            	<i class="fa fa-map-marker"></i>
										            </span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#step-6">
                                                            <span class="step_no"></span>
                                                            <span class="step_descr">
										            	<i class="fa fa-check"></i>
										            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="interval_table">
                                        <div class="table-responsive-xl">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>Sifarişin nömrəsi</th>
                                                    <th>Mağaza</th>
                                                    <th>Sifariş Tarix</th>
                                                    <th>Çatdırılma Tarixi</th>
                                                    <th>Məbləğ</th>
                                                    <th>Status</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>1287263</td>
                                                    <td>Zara</td>
                                                    <td>25.03.2020</td>
                                                    <td>30.03.2020</td>
                                                    <td>30 azn</td>
                                                    <td>
                                                        <label class="text-success">Çatdırılıb</label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1287263</td>
                                                    <td>Zara</td>
                                                    <td>25.03.2020</td>
                                                    <td>30.03.2020</td>
                                                    <td>30 azn</td>
                                                    <td>
                                                        <label class="text-success">Çatdırılıb</label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1287263</td>
                                                    <td>Zara</td>
                                                    <td>25.03.2020</td>
                                                    <td>30.03.2020</td>
                                                    <td>30 azn</td>
                                                    <td>
                                                        <label class="text-success">Çatdırılıb</label>
                                                    </td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section("css")
    <link href="{{asset("/site/css/custom.css")}}" rel="stylesheet">
@endsection
@section("js")
    <script src="{{asset("/site/ajax/account.js")}}"></script>
    <script>
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(".calculate_btn").click(function(e){

                let width = $("#width").val();
                let height = $("#height").val();
                let depth = $("#depth").val();
                let weight = $("#weight").val();
                let country_id = $("#country_id").val();

                $.ajax({
                    type:'POST',
                    url:'{{route("postCalculate")}}',
                    data:{
                        width:width,
                        height:height,
                        depth:depth,
                        weight:weight,
                        country_id:country_id
                    },
                    success:function(data){
                        $("#result").html(data.price + " USD");
                    }
                });
                e.preventDefault();
            });

        })
    </script>
@endsection
