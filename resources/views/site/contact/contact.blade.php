@extends("main.site")
@section("content")
    <section id="contact_page">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 order1">
                    @includeIf('partials.session-message')
                    <div class="contact_form">
                        <form  id="form" method="post">
                            @csrf
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Ad Soyad</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="fullname" id="fullname" required class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Telefon</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="number" name="phone" id="phone" required class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="email" name="email" id="email" required class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Message</label>
                                    </div>
                                    <div class="col-md-9">
									<textarea name="message" id="message" class="form-control" required>

									</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <button type="submit" class="form-control contact_btn">Göndər</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                @foreach($contacts as $contact)
                <div class="col-lg-5 col-md-6 order2">
                    <div class="contact_info">
                        <div class="contact_info_block">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="contact_head">
                                        <img src="{{asset("/site/image/phone1.png")}}">
                                        <label>Mobile number:</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="contact_head">
                                        <span>{{$contact->phone}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact_info_block">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="contact_head">
                                        <img src="{{asset("/site/image/whatsapp.png")}}">
                                        <label>Whatsapp number:</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="contact_head">
                                        <span>{{$contact->wp}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact_info_block">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="contact_head">
                                        <img src="{{asset("/site/image/message.png")}}">
                                        <label>Mail:</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="contact_head">
                                        <span>{{$contact->email}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact_info_block">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="contact_head">
                                        <img src="{{asset("/site/image/xerite.png")}}">
                                        <label>Ünvan:</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="contact_head">
                                        <span>{{$contact->address_az}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact_info_block">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="contact_head">
                                        <img src="{{asset("/site/image/day.png")}}">
                                        <label>İş günləri:</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="contact_head">
                                        <span>{{$contact->work_date_az}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact_info_block">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="contact_head">
                                        <img src="{{asset("/site/image/clock.png")}}">
                                        <label>İş saatları:</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="contact_head">
                                        <span>{{$contact->work_hour}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    @endforeach
            </div>
        </div>
    </section>
    @endsection

@section("css")
    <link href="{{asset('/css/sweetalert2.min.css')}}" rel="stylesheet">
    @endsection
@section("js")
    <script src="{{asset('/js/jquery.form.min.js')}}"></script>
    <script src="{{asset('/js/sweetalert2.min.js')}}"></script>
    <script src="{{asset('/site/ajax/mail.js')}}"></script>
@endsection
