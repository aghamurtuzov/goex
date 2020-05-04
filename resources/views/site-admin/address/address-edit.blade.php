@extends("main.site-admin")
@section("content")


    <div class="content pt-4 pb-4">
        <div class="card shop">
            @includeIf('partials.session-message')
            <div class="card-body">
                <form id="form" action="{{route("postAddressEdit",['id' => $result->id ?? 0])}}" method="post"
                      class="users-content" enctype="multipart/form-data">
                    @csrf
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="az" role="tabpanel">
                            <legend class="text-uppercase font-size-sm font-weight-bold">Ünvan</legend>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Ad </label>
                                <div class="col-lg-10">
                                    <input required type="text" class="form-control"
                                           value="{{ $result->first_name ?? "" }}"
                                           name="first_name" placeholder="Ad ">
                                </div>
                            </div>
                                  <div class="form-group row">
                                <label class="col-form-label col-lg-2"> Soyad</label>
                                <div class="col-lg-10">
                                    <input required type="text" class="form-control"
                                           value="{{ $result->last_name ?? "" }}"
                                           name="last_name" placeholder=" Soyad">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Ünvan 1</label>
                                <div class="col-lg-10">
                                    <input required type="text" class="form-control"
                                           value="{{ $result->address_line_1 ?? "" }}"
                                           name="address_line_1" placeholder="Ünvan 1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Ünvan 2</label>
                                <div class="col-lg-10">
                                    <input required type="text" class="form-control"
                                           value="{{ $result->address_line_2 ?? "" }}"
                                           name="address_line_2" placeholder="Ünvan 2">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Telefon</label>
                                <div class="col-lg-10">
                                    <input required type="text" class="form-control" value="{{ $result->phone ?? "" }}"
                                           name="phone" data-mask="(999) 99 999-99-99"
                                           placeholder="(994) 99 999-99-99">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Ölkə</label>
                                <div class="col-lg-10">
                                    <input required type="text" class="form-control"
                                           value="{{ $result->country ?? "" }}"
                                           name="country" placeholder="Ölkə">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">Şəhər</label>
                                <div class="col-lg-10">
                                    <input required type="text" class="form-control" value="{{ $result->city ?? "" }}"
                                           name="city" placeholder="Şəhər">
                                </div>
                            </div>
                               <div class="form-group row">
                                <label class="col-form-label col-lg-2">Rayon</label>
                                <div class="col-lg-10">
                                    <input required type="text" class="form-control" value="{{ $result->district ?? "" }}"
                                           name="district" placeholder="Rayon">
                                </div>
                            </div>

                          <div class="form-group row">
                                <label class="col-form-label col-lg-2">Küçə</label>
                                <div class="col-lg-10">
                                    <input required type="text" class="form-control" value="{{ $result->street ?? "" }}"
                                           name="street" placeholder="Küçə">
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-form-label col-lg-2">Pasport Fin</label>
                                <div class="col-lg-10">
                                    <input required type="text" class="form-control" value="{{ $result->passport_fin ?? "" }}"
                                           name="passport_fin" placeholder="Passport Fin">
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-form-label col-lg-2">Province</label>
                                <div class="col-lg-10">
                                    <input required type="text" class="form-control" value="{{ $result->province ?? "" }}"
                                           name="province" placeholder="Province">
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-form-label col-lg-2">Receiver</label>
                                <div class="col-lg-10">
                                    <input required type="text" class="form-control" value="{{ $result->receiver ?? "" }}"
                                           name="receiver" placeholder="Receiver">
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
