@extends("main.site-admin")
@section("content")


    <div class="content pt-4 pb-4">
        <div class="card shop">
            @includeIf('partials.session-message')
            <div class="card-body">
         
                <form id="form" action="{{route("postCategoryEdit",['id' => $resultss->id ?? 0])}}" method="post"
                      class="users-content" enctype="multipart/form-data">
                    @csrf
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="az" role="tabpanel">
                            <fieldset class="mb-3">
                                <legend class="text-uppercase font-size-sm font-weight-bold">Kategori</legend>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Kategori Adı</label>
                                    <div class="col-lg-10">
                                        <input required type="text" class="form-control" value="{{ $results_->name_az ?? "" }}"
                                               name="name_az" placeholder="Kategori Adı">
                                    </div>
                                </div>
                            </fieldset>
                        </div>
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
