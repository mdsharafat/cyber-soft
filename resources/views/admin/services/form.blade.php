<div class="row">
    <div class="col-md-6">
        <div class="nk-int-st">
            <label for="name" class="control-label">{{ 'Name' }}</label>
            <input class="form-control" name="name" type="text" id="name" value="{{ isset($service->name) ? $service->name : ''}}" >
            {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="col-md-6 mg-t-30">
        <div class="form-example-int">
            <button class="btn btn-success notika-btn-success waves-effect" type="submit">{{ $formMode === 'edit' ? 'Update' : 'Create' }}</button>
        </div>
    </div>
</div>