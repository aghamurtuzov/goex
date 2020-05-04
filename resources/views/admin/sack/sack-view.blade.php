@extends("main.admin")
@section("content")

    <div class="container-fluid mt-3">
        <div class="row">
            <div class="content">
                <!-- Basic datatable -->
                <div class="card">
                    <div class="row p-2">
                        <div class="col-md-6">
                            <h5 class="card-title" style="font-size: 20px;">Çuvallar</h5>
                        </div>
                    </div>
                    <div class="container p-2">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card card-sack">
                                    <div class="row sacks-number">
                                        <a href="http://test.goex.az/goex/admin/sack-view/2">
                                            <b id="sack-view-id">12</b>
                                            <img src="http://test.goex.az/admin/assets/global_assets/images/sack.png"
                                                 alt="">
                                            <h3 class="text-center">{{$sack->name}}</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="list-feed">
                                    <div class="list-feed-item d-flex flex-nowrap border-warning-400">
                                        <span class="mr-3">
                                         Çuval Adı: {{$sack->name}}
                                        </span>
                                    </div>
                                    <div class="list-feed-item d-flex flex-nowrap border-info-400">
                                        <span class="mr-3">
                                            Toplam Məhsul Sayısı:5
                                        </span>
                                    </div>
                                    <div class="list-feed-item d-flex flex-nowrap border-pink-400">
                                        <span class="mr-3">
                                            Yaranma Tarixi:{{$sack->date}}
                                        </span>
                                    </div>
                                    <div class="list-feed-item d-flex flex-nowrap border-teal-400">
                                        <span class="mr-3">
                                             Status:Aktiv
                                        </span>
                                    </div>
                                    <div class="list-feed-item d-flex flex-nowrap border-teal-400">
                                        <span class="mr-3">
                                            <strong>Çuvalın status tarixçəsi</strong>
                                        </span>
                                    </div>

                                    <div class="list-feed-item d-flex flex-nowrap border-teal-400">
                                        <span class="mr-3">
                                           Çuval {{$sack->name}} adlı {{$sack->name}} İstanbul anbarındadır.
                                        </span>
                                    </div>
                                    <div class="list-feed-item d-flex flex-nowrap border-teal-400">
                                        <span class="mr-3">
                                            Çuval {{$sack->name}} adlı {{$sack->name}} İstanbul anbarından Bakı  anbarına yola düşüb.
                                        </span>
                                    </div>
                                    <div class="list-feed-item d-flex flex-nowrap border-teal-400">
                                        <span class="mr-3">
                                            Çuval {{$sack->name}} adlı Çuval  Bakı  anbarındadır.
                                        </span>
                                    </div>
                                    <div class="list-feed-item d-flex flex-nowrap border-teal-400">
                                        <span class="mr-3">
                                            Çuval {{$sack->name}} adlı Çuval'ın transferi tamamlandı.
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form class="mt-3"
                          action="{{ route('getModuleSearch',['module'=> 'customer','path' => 'customer','viewFile'=>'customer' ]) }}"
                          method="GET">
                        @csrf
                        <div class="container form-tabs p-2">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Fullname</label>
                                        <input type="text" name="full_name"
                                               value="{{ request()->input('full_name') }}"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Phone: </label>
                                        <input type="text" class="form-control"
                                               value="{{ request()->input('phone') }}"
                                               name="phone" data-mask="(999) 99 999-99-99"
                                               placeholder="(994) 99 999-99-99">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select name="status" id="status"
                                                class="form-control select-search sms-template-choose"
                                                data-fouc>
                                            <option value=""> --- Status seç ---</option>
                                            <option value="1"
                                                    @if(request()->input('status') == '1') selected @endif>
                                                Active
                                            </option>
                                            <option value="0"
                                                    @if(request()->input('status') == '0') selected @endif>
                                                Passive
                                            </option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Filiallar</label>
                                        <select name="filial_id" id="filial"
                                                class="form-control select-search sms-template-choose"
                                                data-fouc>
                                            <option value=""> --- Filial seç ---</option>
                                            @foreach($filials as $filial)
                                                <option
                                                    @if(request()->input('filial_id') == $filial->id) selected
                                                    @endif value="{{ $filial->id }}">{{ $filial->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Customer code</label>
                                        <input type="text" name="customer_code"
                                               value="{{ request()->input('customer_code') }}"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Start Date:</label>
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-calendar22"></i></span>
                                            </span>
                                            <input type="date" name="start_date" class="form-control"
                                                   value="{{ request()->input('start_date') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>End Date:</label>
                                        <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-calendar22"></i></span>
                                            </span>
                                            <input type="date" name="end_date" class="form-control"
                                                   value="{{ request()->input('end_date') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Search</label>
                                        <button type="submit" class="btn btn-default btn-block"><i
                                                class="icon-search4"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="table datatable-basic text-center">
                            <thead>
                            <tr>
                                <th>Customer code</th>
                                <th>Fullname</th>
                                <th>Filial</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Endirim</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody class="text-center" id="customer_body">
                            @foreach($results as $result)
                                <tr>
                                    <td>{{$result->customer_code}}</td>
                                    <td>{{$result->first_name.' '.$result->last_name}}</td>
                                    <td>{{$result->filialName ? $result->filialName->name : ''}}</td>
                                    <td>{{$result->phone}}</td>
                                    <td>{{$result->email}}</td>
                                    <td>{{$result->discount}} %</td>
                                    <td>
                                        <div id="isActive_{{ $result->id }}" class="btn-group"
                                             style="{{ $result->status ? '' : 'display:none' }}">

                                            <a href="#"
                                               class="statusCurrent label bg-success dropdown-toggle"
                                               data-toggle="dropdown" aria-expanded="false">Aktiv <span
                                                    class="caret"></span></a>

                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li>
                                                    <a type="button" class="statusToChange"
                                                       data-id="{{ $result->id }}"
                                                       data-status="1"
                                                       data-module="customers"><span
                                                            class=" status-mark bg-danger
                                                                           position-left"></span>Deaktiv</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div id="isDeactive_{{ $result->id }}" class="btn-group"
                                             style="{{ $result->status ? 'display:none' : '' }}">

                                            <a href="#"
                                               class="statusCurrent label bg-danger dropdown-toggle"
                                               data-toggle="dropdown" aria-expanded="false">Deaktiv
                                                <span class="caret"></span></a>

                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li>
                                                    <a type="button" class="statusToChange"
                                                       data-id="{{ $result->id }}"
                                                       data-status="0"
                                                       data-module="customers"><span
                                                            class="status-mark bg-success position-left"></span>Aktiv</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{route("getCustomerProfile",$result->id)}}"
                                           class="dropdown-item"><i
                                                class="icon-pencil5 icon-2x m-auto"></i></a>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @include('partials.pagination')
                    </form>

                </div>
            </div>
        </div>
    </div>


@endsection

@section("js")
    <script>
        url_status = '{{ route("postModuleStatus") }}';
    </script>
@endsection

@section("css")

@endsection
