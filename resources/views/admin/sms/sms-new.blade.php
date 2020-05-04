@extends("main.admin")
@section("content")
    <div class="content pt-4 pb-4">
        <div class="card">
            <div class="card-body">
                <div class="content">
                    <div class="page-container">
                        <div class="page-content" style="overflow: hidden;">
                            <div class="content-wrapper">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-white">
                                            <div class="panel-heading">
                                                <h5 class="panel-title">Sms göndər</h5>
                                            </div>
                                            <div class="panel-body">
                                                <form action=""
                                                      class="form-horizontal"
                                                      method="post" accept-charset="utf-8">
                                                    <fieldset class="content-group">
                                                        <!-- Destination Type -->
                                                        <div class="form-group">
                                                            <label class="control-label col-lg-2">Qəbul edənin
                                                                növü</label>
                                                            <div class="col-lg-10">
                                                                <select id="customer" name="type"
                                                                        class="select-fixed-single destinationType">
                                                                    <option value="0">Bütün
                                                                    </option>
                                                                    <option value="1">Müştəri
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- Destination -->
                                                        <div class="form-group destinationIdField">
                                                            <label class="control-label col-lg-2">Qəbul edən</label>
                                                            <div class="col-lg-10">
                                                                <input type="text"
                                                                       name="customer_code" value=""
                                                                       class="form-control destinationIdInput"
                                                                       autocomplete="off">
                                                                <input type="hidden" name="number"
                                                                       value=""
                                                                       class="form-control">
                                                            </div>
                                                        </div>

                                                        <!-- sms-message template -->
                                                        <div class="form-group">
                                                            <label class="control-label col-lg-2">Sms şablonu</label>
                                                            <div class="col-lg-10">
                                                                <select name="message" id="sms"
                                                                        class="select-fixed-single smsTemplate">
                                                                    <option value="0"> --- Sms şablonu seç ---</option>
                                                                    @foreach($smsTemplates as $smsTemplate)
                                                                        <option
                                                                            value="{{ $smsTemplate->id }}">{{$smsTemplate->message}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <!-- Message -->
                                                        <div class="form-group messageField">
                                                            <label class="control-label col-lg-2">Push</label>
                                                            <div class="col-lg-10">
                                                <textarea maxlength="160" name="message"
                                                          class="form-control messageText" rows="5"
                                                          id="comment"></textarea>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    <div class="text-right">
                                                        <button type="submit" class="btn btn-primary">Push göndər <i
                                                                class="icon-arrow-right14 position-right"></i></button>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



@endsection
@section("css")
@endsection
@section("js")

    <script src="{{ asset('') }}"></script>
@endsection
