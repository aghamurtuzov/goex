
@extends("main.admin")
@section("content")
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="content">
                <!-- Basic datatable -->
                <div class="card">
                    <div class="row p-2">
                        <div class="col-md-6">
                            <h5 class="card-title" style="font-size: 20px;">Alt Bölmələr</h5>
                        </div>
                    </div>
                    <div class="row p-2">
                        <div class="col-md-12 text-right">
                            <a class="add-button" href="{{route("getSubSectionEdit",['id' => 0])}}">
                                <button class="btn btn-primary">Əlavə Et</button>
                            </a>
                        </div>
                    </div>
                    <form
                        action="{{ route('getModuleSearch',['module'=> 'subSection','path' => 'subsection','viewFile'=>'subsection' ]) }}"
                        method="GET">
                        @csrf
                        <div class="container form-tabs p-2">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Bölmə</label>
                                        <select name="section_id" id="section"
                                                class="form-control select-search sms-template-choose"
                                                data-fouc>
                                            <option value=""> --- Bölmə seç ---</option>
                                            @foreach($sections as $section)
                                                <option @if(request()->input('section_id') == $section->id) selected
                                                        @endif value="{{ $section->id }}">{{ $section->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="">Ad</label>
                                        <input type="text" name="name" value="{{ request()->input('name') }}"
                                               class="form-control">
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
                                        <label>Search</label>
                                        <button type="submit" class="btn btn-default btn-block"><i
                                                class="icon-search4"></i></button>
                                    </div>
                                </div>
                            </div>


                            <table class="table datatable-basic text-center">
                                <thead>
                                <tr>
                                    <th>Bölmə</th>
                                    <th>Ad</th>
                                    <th>Status</th>
                                    <th>Tarix</th>
                                    <th>Əməliyyat</th>
                                </tr>
                                </thead>
                                <tbody class="text-center" id="customer_body">
                                @foreach($results as $result)
                                    <tr>
                                        <td>{{$result->SectionName->name}}</td>
                                        <td>{{$result->name}}</td>
                                        @includeIf('partials.status', ['id' => $result->id,'status' => $result->status,'module' => 'sub_sections'])
                                        <td>{{$result->date}}</td>
                                        <td class="text-center">
                                            <a href="{{route("getSubSectionEdit",$result->id)}}" class="dropdown-item"><i
                                                    class="icon-pencil5 icon-2x m-auto"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            @include('partials.pagination')
                        </div>
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
