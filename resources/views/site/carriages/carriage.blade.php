@extends("main.site")
@section("content")
    <section id="carriage">
        <div class="container">
            <h2>MALLARIN DAŞINMASI XİDMƏTİNƏ DAİR ŞƏRTLƏR TOPLUSU:</h2>
            <div class="row">
                <div class="col">
                    <ol>
                        @foreach($conditions as $condition)
                        <li>{{$condition->content_az}}</li>
                        @endforeach
                    </ol>

                </div>
            </div>
        </div>
    </section>
    @endsection

@section("css")

    @endsection

@section("js")

    @endsection
