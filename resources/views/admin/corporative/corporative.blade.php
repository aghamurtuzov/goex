@extends("main.admin")
@section("content")

    <div class="container-fluid mt-3">
        <div class="row">

            <div class="content">
                <!-- Basic datatable -->
                <div class="card">
                    <div class="row p-2">
                        <div class="col-md-6">
                            <div class="card-header header-elements-inline">
                                <h5 class="card-title">Corporative</h5>
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
                        <tbody class="text-center" id="corporative_body">
                            @foreach($corporative as $c)
                                <tr>
                                    <td>{{$c->customer_code}}</td>
                                    <td>{{$c->firstname.' '.$c->lastname}}</td>
                                    <td>{{$c->filial}}</td>
                                    <td>{{$c->phone}}</td>
                                    <td>{{$c->email}}</td>
                                    <td>{{$c->endirim}}</td>
                                    <td>
                                        <div id="isActive_{{ $c->id }}" class="btn-group"
                                             style="{{ $c->status ? '' : 'display:none' }}">

                                            <a href="#"
                                               class="statusCurrent label bg-success dropdown-toggle"
                                               data-toggle="dropdown" aria-expanded="false">Aktiv <span
                                                    class="caret"></span></a>

                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li>
                                                    <a type="button" class="statusToChange"
                                                       data-id="{{ $c->id }}"
                                                       data-status="1"
                                                       data-module="customers"><span
                                                            class=" status-mark bg-danger
                                                                       position-left"></span>Deaktiv</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div id="isDeactive_{{ $c->id }}" class="btn-group"
                                             style="{{ $c->status ? 'display:none' : '' }}">

                                            <a href="#"
                                               class="statusCurrent label bg-danger dropdown-toggle"
                                               data-toggle="dropdown" aria-expanded="false">Deaktiv
                                                <span class="caret"></span></a>

                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li>
                                                    <a type="button" class="statusToChange"
                                                       data-id="{{ $c->id }}"
                                                       data-status="0"
                                                       data-module="customers"><span
                                                            class="status-mark bg-success position-left"></span>Aktiv</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                          <a href="{{route("corporativeProfile",$c->id)}}" class="dropdown-item"><i
                                                            class="icon-pencil5 icon-2x m-auto"></i></a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="datatable-footer mb-4 mt-4">
                        <ul class="pagination pagination-separated pull-right">
                            {{ $results->links('vendor.pagination.bootstrap-4') }}
                        </ul>
                    </div>
                </div>
                <!-- /basic datatable -->

            </div>

        </div>
    </div>



    @endsection

@section("js")
    <script>
        url_status='{{ route("postModuleStatus") }}';
    </script>
    <script src="{{asset("/admin/assets/js/permission.js")}}"></script>

    @endsection

@section("css")

    @endsection
