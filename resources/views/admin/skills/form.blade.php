<div class="row">
    <div class="col-md-5">
        <div class="nk-int-st">
            <label for="name" class="control-label">{{ 'Name' }}</label>
            <input class="form-control" name="name" type="text" id="name" value="{{ isset($skill->name) ? $skill->name : ''}}" >
            {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="col-md-5">
        <div class="form-group">
            <div class="nk-int-st">
                <label for="progress" class="control-label">{{ 'Progress' }}</label>
                <input class="form-control" name="progress" type="number" id="progress" value="{{ isset($skill->progress) ? $skill->progress : ''}}" >
                {!! $errors->first('progress', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
    <div class="col-md-2 mg-t-20 text-right">
        <div class="form-example-int">
            <button class="btn btn-success notika-btn-success waves-effect">{{ $formMode === 'edit' ? 'Update' : 'Create' }}</button>
        </div>
    </div>
</div>
