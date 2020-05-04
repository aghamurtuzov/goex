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
                <form id="form" action="{{route("postContactEdit",['id' => $result->id ?? 0])}}" method="post" class="users-content" enctype="multipart/form-data">
                    @csrf
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="az" role="tabpanel">
                            <fieldset class="mb-3">
                                <legend class="text-uppercase font-size-sm font-weight-bold">Əlaqə</legend>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Ünvan</label>
                                    <div class="col-lg-10">
                                        <input required type="text" class="form-control" value="{{ $result->address_az ?? "" }}" name="address_az" placeholder="Ünvan">
                                    </div>
                                </div>
                                 <div class="form-group row">
                        <label class="col-form-label col-lg-2">İş Günləri Az  </label>
                        <div class="col-lg-10">
                            <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-calendar22"></i></span>
                                            </span>
                                <input type="date" name="work_date_az" class="form-control"
                                       value="{{ $result->work_date_az ?? "" }}">
                            </div>
                        </div>
                    </div>
                            </fieldset>
                        </div>
                        <div class="tab-pane fade" id="ru" role="tabpanel">
                            <fieldset class="mb-3">
                                <legend class="text-uppercase font-size-sm font-weight-bold">Əlaqə</legend>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Ünvan</label>
                                    <div class="col-lg-10">
                                        <input  required type="text" class="form-control" value="{{ $result->address_ru ?? "" }}" name="address_ru" placeholder="Ünvan">
                                    </div>
                                </div>
                            </fieldset>
                          <div class="form-group row">
                        <label class="col-form-label col-lg-2">İş Günləri Ru</label>
                        <div class="col-lg-10">
                            <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-calendar22"></i></span>
                                            </span>
                                <input type="date" name="work_date_ru" class="form-control"
                                       value="{{ $result->work_date_ru ?? "" }}">
                            </div>
                        </div>
                    </div>
                        </div>
                        <div class="tab-pane fade" id="en" role="tabpanel">
                            <fieldset class="mb-3">
                                <legend class="text-uppercase font-size-sm font-weight-bold">Əlaqə</legend>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2">Ünvan</label>
                                    <div class="col-lg-10">
                                        <input required  type="text" class="form-control" value="{{ $result->address_en ?? "" }}" name="address_en" placeholder="Ünvan">
                                    </div>
                                </div>
                            </fieldset>
                                                <div class="form-group row">
                        <label class="col-form-label col-lg-2">İş Günləri En</label>
                        <div class="col-lg-10">
                            <div class="input-group">
                                            <span class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-calendar22"></i></span>
                                            </span>
                                <input type="date" name="work_date_en" class="form-control"
                                       value="{{ $result->work_date_en ?? "" }}">
                            </div>
                        </div>
                    </div>
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
                        <label class="col-form-label col-lg-2">WP</label>
                        <div class="col-lg-10">
                            <input required type="text" class="form-control" value="{{ $result->wp ?? "" }}"
                                   name="wp" data-mask="(999) 99 999-99-99"
                                   placeholder="(994) 99 999-99-99">

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Email</label>
                        <div class="col-lg-10">
                            <input required type="text" class="form-control" value="{{ $result->email ?? "" }}" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">İş Saatları</label>
                        <div class="col-lg-10">
                            <div class="input-group">
						<span class="input-group-prepend">
											<span class="input-group-text"><i class="icon-watch2"></i></span>
										</span>
                               <input name="work_hour" type="text" class="form-control" id="anytime-time" value="{{ $result->work_hour ?? "" }}">
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
                        <button type="submit" class="btn btn-primary">Göndər <i class="icon-paperplane ml-2"></i></button>
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
