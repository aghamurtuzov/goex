
@extends("main.site-admin")
@section("content")
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="content">
                <!-- Basic datatable -->
                <div class="card">
                    <div class="row p-4">
                        <div class="col-md-6">
                            <h5 class="card-title" style="font-size: 20px;">Haqqımızda</h5>
                        </div>
                        <div class="col-md-6 text-right">
                            <h5 class="card-title" style="font-size: 20px;"><a href="{{route("getAboutEdit",0)}}"><button class="btn btn-primary">Əlavə Et</button></a></h5>
                        </div>
                    </div>
                    <table class="table datatable-basic text-center">
                        <thead>
                        <tr>
                            <th>Mətn</th>
                            <th>Status</th>
                            <th>Əməliyyatlar</th>
                        </tr>
                        </thead>
                        <tbody class="text-center" id="shop_body">
                        @foreach($results as $result)
                            <tr>
                                <td>{{substr($result->content_az,0,50)}}...  </td>
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
                                <td>
                                    <div class="list-icons">
                                        <div class="dropdown">
                                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                <i class="icon-menu9"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">

                                                <a href="{{route("getAboutEdit",$result->id)}}" class="dropdown-item"><i
                                                        class="icon-pencil5"></i>Redaktə Et</a>
                                                <a href="#" class="dropdown-item"><i class="icon-list"></i>Sil</a>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <!-- /basic datatable -->

                </div>

            </div>
        </div>

    </div>


@endsection
@section("js")

@endsection
@section("css")


@endsection
