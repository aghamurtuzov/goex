@php
    $locale = app() ->getLocale();
@endphp

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>@yield("title")</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
          type="text/css">
    <link href="{{asset("/admin/assets/global_assets/css/icons/icomoon/styles.css")}}" rel="stylesheet" type="text/css">
    <link href="{{asset("/admin/assets/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css">
    <link href="{{asset("/admin/assets/css/bootstrap_limitless.min.css")}}" rel="stylesheet" type="text/css">
    <link href="{{asset("/admin/assets/css/layout.min.css")}}" rel="stylesheet" type="text/css">
    <link href="{{asset("/admin/assets/css/components.min.css")}}" rel="stylesheet" type="text/css">
    <link href="{{asset("/admin/assets/css/colors.min.css")}}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->
    <link rel="stylesheet" href="{{asset("/admin/assets/css/style.css")}}">
    @yield("css")
    <script src="{{asset("/admin/assets/global_assets/js/plugins/forms/styling/uniform.min.js")}}"></script>
    <script src="{{asset("/admin/assets/global_assets/js/plugins/forms/styling/switchery.min.js")}}"></script>
    <script src="{{asset("/admin/assets/global_assets/js/plugins/forms/styling/switch.min.js")}}"></script>
    <script src="{{asset("/admin/assets/global_assets/js/demo_pages/form_checkboxes_radios.js")}}"></script>


    <script>
        let url_status = '{{ route("postModuleStatus") }}';
        let url_delete = '{{ route("postModuleDelete") }}';
    </script>

</head>
<body>

<!-- Secondary navbar -->
<div class="navbar navbar-expand-md navbar-light">
    <div class="text-center d-md-none w-100">
        <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse"
                data-target="#navbar-navigation">
            <i class="icon-unfold mr-2"></i>
            Navigation
        </button>
    </div>

    <div class="navbar-collapse collapse admin-icons" id="navbar-navigation">
        <ul class="navbar-nav navbar-nav-highlight">
            <li class="nav-item">
                <a href="/" class="navbar-nav-link">
                    <i class="icon-home4"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route("orderList")}}" class="navbar-nav-link">
                    <i class="icon-cart"></i>
                    Sifarişlər
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route("getCustomer",['type' => 0])}}" class="navbar-nav-link">
                    <i class="icon-users"></i>
                    Müştərilər
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route("getCustomer",['type' => 1])}}" class="navbar-nav-link">
                    <i class="icon-user-tie"></i>
                    Korporativ müştərilər
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route("accounting")}}" class="navbar-nav-link">
                    <i class="icon-stats-growth"></i>
                    Mühasibat
                </a>
            </li>
            <li class="nav-item">
                <ul class="navbar-nav navbar-nav-highlight ml-md-auto">
                    <li class="nav-item dropdown">
                        <a href="#" class="navbar-nav-link dropdown-toggle legitRipple" data-toggle="dropdown">
                            <i class="icon-library2"></i> Anbar
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{route("getStocks",['type' => 0])}}" class="dropdown-item"><i
                                    class="icon-library2"></i>
                                Daxili Anbar</a>
                            <a href="{{route("getStocks",['type' => 1])}}" class="dropdown-item"><i
                                    class="icon-library2"></i>
                                Xarici Anbar</a>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <ul class="navbar-nav navbar-nav-highlight ml-md-auto">
                    <li class="nav-item dropdown">
                        <a href="#" class="navbar-nav-link dropdown-toggle legitRipple" data-toggle="dropdown">
                            <i class="icon-envelope"></i> Sms
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{route("getSms")}}" class="dropdown-item"><i class="icon-envelope"></i> Smslər</a>
                            <a href="{{route("getSmsTemplate")}}" class="dropdown-item"><i class="icon-comments"></i>
                                Sms
                                şablonu</a>
                        </div>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="{{url("/")}}" class="navbar-nav-link">
                    <i class="icon-store"></i>
                    Məhsullar
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route("getComponies")}}" class="navbar-nav-link">
                    <i class="icon-percent"></i>
                    Kampaniyalar
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route("getAdmin")}}" class="navbar-nav-link">
                    <button class="btn btn-success" style="padding: 5px; margin: -10px;"><i class="icon-user-lock"></i>Admin</button>
                </a>
            </li>
        </ul>

        <ul class="navbar-nav navbar-nav-highlight ml-md-auto">


            <li class="nav-item dropdown">
                <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-cog3"></i>
                    <span class="d-md-none ml-2">Settings</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a href="{{route("postUserEdit",['id' => Auth::user()->id])}}" class="dropdown-item"><i
                            class="icon-user-lock"></i> Profil</a>
                    <a href="{{route("usersList")}}" class="dropdown-item"><i class="icon-users"></i> Users</a>
                    <a href="{{route("permission-role.index")}}" class="dropdown-item"><i class="icon-statistics"></i>
                        Permission and roles</a>
                    <a href="{{route("getTariffes")}}" class="dropdown-item"><i class="icon-stats-growth"></i> Tarif</a>
                    <a href="{{route("getSettings")}}" class="dropdown-item"><i class="icon-gear"></i> Settings</a>
                    <div class="dropdown-divider"></div>
                    <div aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                            <i class="icon-accessibility"></i> {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>


                </div>
            </li>
        </ul>
    </div>
</div>
<!-- /secondary navbar -->


@yield("content")


<!-- Footer -->
<div class="navbar navbar-expand-lg navbar-light">
    <div class="text-center d-lg-none w-100">
        <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse"
                data-target="#navbar-footer">
            <i class="icon-unfold mr-2"></i>
            Footer
        </button>
    </div>

    <div class="navbar-collapse collapse" id="navbar-footer">
			<span class="navbar-text">
				&copy; 2020. <a href="#">Goex Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov"
                                                                    target="_blank"> M a m m a d o f f</a>
			</span>
    </div>
</div>
<!-- /footer -->


<!-- Core JS files -->
<script src="{{asset("/admin/assets/global_assets/js/main/jquery.min.js")}}"></script>
<script src="{{asset("/admin/assets/global_assets/js/main/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("/admin/assets/global_assets/js/plugins/loaders/blockui.min.js")}}"></script>
<script src="{{asset("/admin/assets/global_assets/js/plugins/ui/slinky.min.js")}}"></script>
<script src="{{asset("/admin/assets/global_assets/js/plugins/ui/ripple.min.js")}}"></script>
<!-- /core JS files -->

<!-- Theme JS files -->
<script src="{{asset("/admin/assets/global_assets/js/plugins/forms/selects/select2.min.js")}}"></script>
<script src="{{asset("/admin/assets/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js")}}"></script>
<script src="{{asset("/admin/assets/global_assets/js/plugins/forms/styling/uniform.min.js")}}"></script>
<script src="{{asset("/admin/assets/global_assets/js/plugins/extensions/jquery_ui/core.min.js")}}"></script>
<script
    src="{{asset("/admin/assets/global_assets/js/plugins/forms/inputs/typeahead/typeahead.bundle.min.js")}}"></script>
<script src="{{asset("/admin/assets/global_assets/js/plugins/forms/tags/tagsinput.min.js")}}"></script>
<script src="{{asset("/admin/assets/global_assets/js/plugins/forms/tags/tokenfield.min.js")}}"></script>
<script src="{{asset("/admin/assets/global_assets/js/plugins/forms/inputs/touchspin.min.js")}}"></script>
<script src="{{asset("/admin/assets/global_assets/js/plugins/forms/inputs/maxlength.min.js")}}"></script>
<script src="{{asset("/admin/assets/global_assets/js/plugins/forms/inputs/formatter.min.js")}}"></script>
<script src="{{asset("/admin/assets/global_assets/js/plugins/forms/inputs/inputmask.js")}}"></script>
<script src="{{asset("/admin/assets/global_assets/js/plugins/visualization/d3/d3.min.js")}}"></script>
<script src="{{asset("/admin/assets/global_assets/js/plugins/visualization/d3/d3_tooltip.js")}}"></script>
<script src="{{asset("/admin/assets/global_assets/js/plugins/forms/styling/switchery.min.js")}}"></script>
<script src="{{asset("/admin/assets/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js")}}"></script>
<script src="{{asset("/admin/assets/global_assets/js/plugins/ui/moment/moment.min.js")}}"></script>
<script src="{{asset("/admin/assets/global_assets/js/plugins/pickers/daterangepicker.js")}}"></script>
<script src="{{asset("/admin/assets/global_assets/js/demo_pages/dashboard.js")}}"></script>

<script src="{{asset("/admin/assets/js/app.js")}}"></script>



<script src="{{asset("/admin/assets/global_assets/js/demo_pages/form_floating_labels.js")}}"></script>
<!-- /My Links -->
<script src="{{asset("/admin/assets/global_assets/js/demo_pages/form_select2.js")}}"></script>
<script src="{{asset("/admin/assets/js/status.js")}}"></script>
<script src="{{asset("/admin/assets/global_assets/js/plugins/ui/moment/moment.min.js")}}"></script>
<script src="{{asset("/admin/assets/global_assets/js/plugins/pickers/daterangepicker.js")}}"></script>
<script src="{{asset("/admin/assets/global_assets/js/demo_pages/picker_date.js")}}"></script>




<script src="{{asset("/admin/assets/global_assets/js/plugins/ui/moment/moment.min.js")}}"></script>
<script src="{{asset("/admin/assets/global_assets/js/plugins/pickers/anytime.min.js")}}"></script>
<script src="{{asset("/admin/assets/global_assets/js/demo_pages/picker_date_rtl.js")}}"></script>
<script src="{{asset("/admin/assets/js/validate/jquery.validate.min.js")}}"></script>
<script src="{{asset("/admin/assets/js/validate/messages_".$locale.".js")}}"></script>
<script src="{{asset('/admin/assets/global_assets/js/plugins/editors/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('/admin/assets/global_assets/js/demo_pages/editor_ckeditor.js')}}"></script>


<script>
    $("#form").validate();
</script>

@yield("js")

</body>
</html>

