@extends("main.site")
@section("content")
<div class="container p-5">
    <div class="row">
        <h3 class="m-auto pb-5">Change Password</h3>
    </div>
    <div class="row">
        <div class="col-4 m-auto">
            <form action="{{route("postSiteReset")}}" method="post" class="text-left">
                @csrf
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword2">
                </div>
                <button type="submit" class="btn btn-primary">Password</button>
            </form>
        </div>
    </div>
</div>
@endsection
