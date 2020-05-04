@extends("main.admin")
@section("content")
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="content">
                <!-- Basic datatable -->
                <div class="card">
                    <div class="row p-2">
                        <div class="col-md-6">
                            <h5 class="card-title" style="font-size: 20px;">Müştərilər</h5>
                        </div>
                    </div>
                    <form
                        action="{{ route('getModuleSearch',['module'=> 'customer','viewFile'=>'customer','path' => 'customer' ]) }}"
                        method="GET">
                        @csrf
                        <div class="container form-tabs p-2">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Ad Soyad</label>
                                        <input type="text" name="full_name" value="{{ request()->input('full_name') }}"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Telefon: </label>
                                        <input type="text" class="form-control" value="{{ request()->input('phone') }}"
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
                                            <option value="1" @if(request()->input('status') == '1') selected @endif>
                                                Active
                                            </option>
                                            <option value="0" @if(request()->input('status') == '0') selected @endif>
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
                                                <option @if(request()->input('filial_id') == $filial->id) selected
                                                        @endif value="{{ $filial->id }}">{{ $filial->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Müştəri Kodu</label>
                                        <input type="text" name="customer_code"
                                               value="{{ request()->input('customer_code') }}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Başlanğıc Tarix:</label>
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
                                        <label>Bitiş Tarix:</label>
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
                                        <label>Axtarış</label>
                                        <button type="submit" class="btn btn-default btn-block"><i
                                                class="icon-search4"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="table datatable-basic text-center">
                            <thead>
                            <tr>
                                <th>Müştəri Kodu</th>
                                <th>Ad Soyad</th>
                                <th>Filial</th>
                                <th>Telefon</th>
                                <th>Email</th>
                                <th>Endirim</th>
                                <th>Status</th>
                                <th>Əməliyyat</th>
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
                                    @includeIf('partials.status', ['id' => $result->id,'status' => $result->status,'module' => 'customers'])
                                    <td class="text-center">
                                        <a href="{{route("getCustomerProfile",$result->id)}}" class="dropdown-item"><i
                                                class="icon-pencil5 icon-2x m-auto"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @include('partials.pagination')

                    </form>
                    <!-- /basic datatable -->

                </div>

            </div>
        </div>

    </div>

@endsection

@section("js")
    <script>
        url_status = '{{ route("postModuleStatus") }}';
    </script>
    <script src="{{asset("/admin/assets/js/permission.js")}}"></script>
@endsection

@section("css")

@endsection
