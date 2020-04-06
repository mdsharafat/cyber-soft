<div class="row">
    <div class="col-md-6">
        <div class="nk-int-st">
            <label for="title" class="control-label">{{ 'Title' }}</label>
            <input required class="form-control" name="title" type="text" id="title" value="{{ isset($category->title) ? $category->title : ''}}" >
            {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="col-md-6 mg-t-30">
        <div class="col-md-12">
            <div class="form-example-int">
                <button class="btn btn-success notika-btn-success waves-effect" type="submit">{{ $formMode === 'edit' ? 'Update' : 'Create' }}</button>
            </div>
        </div>
    </div>
</div>
