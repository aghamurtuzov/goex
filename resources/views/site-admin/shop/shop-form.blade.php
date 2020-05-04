@extends("main.site-admin")
@section("content")


    <div class="content pt-4 pb-4">
        <div class="card shop">
            @if(Session::has('success-message'))
                <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('success-message') }}</p>
            @endif
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <p class="alert alert-class alert-danger">{{ $error }}</p>
                @endforeach
            @endif
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
                <form id="form" action="{{route("postEditShop",['id' => $result->id ?? 0])}}" method="post" class="users-content" enctype="multipart/form-data">
                    @csrf
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="az" role="tabpanel">
                            <fieldset class="mb-3">
                                <legend class="text-uppercase font-size-sm font-weight-bold">Shop</legend>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Title Az</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" value="{{ $result->title_az ?? "" }}" name="title_az" placeholder="Title Az">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Content Az</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" value="{{ $result->content_az ?? "" }}" name="content_az" placeholder="Content Az">
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="tab-pane fade" id="ru" role="tabpanel">
                            <fieldset class="mb-3">
                                <legend class="text-uppercase font-size-sm font-weight-bold">Shop</legend>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Title Ru</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" value="{{ $result->title_ru ?? "" }}" name="title_ru" placeholder="Title Ru">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Content Az</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" value="{{ $result->content_ru ?? "" }}" name="content_ru" placeholder="Content Ru">
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="tab-pane fade" id="en" role="tabpanel">
                            <fieldset class="mb-3">
                                <legend class="text-uppercase font-size-sm font-weight-bold">Shop</legend>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Title En</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" value="{{ $result->title_en ?? "" }}" name="title_en" placeholder="Title En">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Content En</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="form-control" value="{{ $result->content_en ?? "" }}" name="content_en" placeholder="Content En">
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Image</label>
                        <div class="col-lg-10">
                            <input type="file" class="form-control" name="image">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Status</label>
                        <div class="col-lg-10">
                            <select name="status" id="status" class="form-control">
                                <option value="1">Active</option>
                                <option value="0">Passive</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2" style="margin-top: auto">Partnyor</label>
                        <div class="col-lg-10">
                            <input type="checkbox" value="0" name="is_partner" style="height: 25px;width: 23px;">
                        </div>
                    </div>

                    <div class="text-left">
                        <button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
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
