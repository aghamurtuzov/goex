@extends("main.site-admin")
@section("content")


    <div class="content pt-4 pb-4">
        <div class="card shop">
            @includeIf('partials.session-message')
            <div class="card-body">

                <form id="form" action="{{route("postCountryEdit",['id' => $result->id ?? 0])}}" method="post"
                      class="users-content" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Ölkə Adı Az</label>
                        <div class="col-lg-10">
                            <input required type="text" class="form-control" value="{{ $results->name_az ?? "" }}"
                                   name="name_az">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Ölkə Adı Ru</label>
                        <div class="col-lg-10">
                            <input required type="text" class="form-control" value="{{ $results->name_ru ?? "" }}"
                                   name="name_ru">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Ölkə Adı En</label>
                        <div class="col-lg-10">
                            <input required type="text" class="form-control" value="{{ $results->name_en ?? "" }}"
                                   name="name_en">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Şəkil</label>
                        <div class="col-lg-10">
                            <input type="file" class="form-control" name="image">
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
                        <button type="submit" class="btn btn-primary">Yadda Saxla <i class="icon-paperplane ml-2"></i>
                        </button>
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
