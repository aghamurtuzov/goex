@extends("main.site-admin")
@section("content")


    <div class="content pt-4 pb-4">
        <div class="card shop">
             @includeIf('partials.session-message')
            <div class="card-body">
                <ul class="nav nav-tabs mr-auto" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#az" role="tab">Az</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#ru" role="tab">Ru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#en" role="tab">En</a>
                    </li>
                </ul>
                <form id="form" action="{{route("postForbiddenProductEdit",['id' => $result->id ?? 0])}}" method="post" class="users-content" enctype="multipart/form-data">
                    @csrf
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="az" role="tabpanel">
                            <fieldset class="mb-3">
                                <legend class="text-uppercase font-size-sm font-weight-bold">Qadağan Olunmuş Mallar</legend>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Ad</label>
                                    <div class="col-lg-10">
                                        <input required type="text" class="form-control" value="{{ $result->name_az ?? "" }}" name="name_az" placeholder="Ad">
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="tab-pane fade" id="ru" role="tabpanel">
                            <fieldset class="mb-3">
                                <legend class="text-uppercase font-size-sm font-weight-bold">Qadağan Olunmuş Mallar</legend>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Ad</label>
                                    <div class="col-lg-10">
                                        <input required type="text" class="form-control" value="{{ $result->name_ru ?? "" }}" name="name_ru" placeholder="Ad">
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="tab-pane fade" id="en" role="tabpanel">
                            <fieldset class="mb-3">
                                <legend class="text-uppercase font-size-sm font-weight-bold">Qadağan Olunmuş Mallar</legend>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Ad</label>
                                    <div class="col-lg-10">
                                        <input required type="text" class="form-control" value="{{ $result->name_en ?? "" }}" name="name_en" placeholder="Ad">
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Şəkil</label>
                        <div class="col-lg-10">
                            <input required type="file" class="form-control" name="image">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Status</label>
                        <div class="col-lg-10">
                            <select name="status" id="status" class="form-control">
                                <option value="1">Aktiv</option>
                                <option value="0">Passiv</option>
                            </select>
                        </div>
                    </div>
                    <div class="text-left">
                        <button type="submit" class="btn btn-primary">Yadda Saxla <i class="icon-paperplane ml-2"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>




@endsection

@section("js")

@endsection


@section("css")

@endsection
