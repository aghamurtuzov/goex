<div class="calculate_form">
    <form id="form">
        <div class="form-row">
            <div class="col-md-3">
                <label>Height (cm)</label>
            </div>
            <div class="col-md-9">
                <input type="number" name="height" id="height" required placeholder="Height (cm)" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-3">
                <label>Width (cm)</label>
            </div>
            <div class="col-md-9">
                <input type="number" name="width" id="width" required placeholder="Width (cm)" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-3">
                <label>Depth (cm)</label>
            </div>
            <div class="col-md-9">
                <input type="number" name="depth" id="depth" required placeholder="Depth (cm)" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-3">
                <label>Weight (cm)</label>
            </div>
            <div class="col-md-9">
                <input type="number" name="weight" id="weight" required placeholder="Weight (cm)" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-3">
                <label>Country</label>
            </div>
            <div class="col-md-9">
                <select name="country_id" id="country_id" required class="form-control">
                    @foreach($countries as $country)
                        <option value="{{$country->id}}">{{$country->name_az}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-3">
                <label>Qiymət</label>
            </div>
            <div class="col-md-9">
                <span id="result" class="text-uppercase">0 USD</span>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-3">
            </div>
            <div class="col-md-9">
                <button class="form-control calculate_btn">Hesabla</button>
            </div>
        </div>

    </form>
</div>


