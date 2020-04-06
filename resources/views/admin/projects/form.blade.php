<div class="row mg-t-20">
    <div class="col-md-12">
        <div class="nk-int-st">
            <label for="title" class="control-label">{{ 'Title' }}</label>
            <input required class="form-control" name="title" type="text" id="title" value="{{ isset($project->title) ? $project->title : ''}}" >
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>
<div class="row mg-t-20">
    <div class="col-md-12">
        <div class="nk-int-st">
            <label for="short_desc" class="control-label">{{ 'Short Desc' }}</label>
            <textarea class="form-control" rows="5" name="short_desc" type="textarea" id="short_desc" >{{ isset($project->short_desc) ? $project->short_desc : ''}}</textarea>
        {!! $errors->first('short_desc', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>
<div class="row mg-t-20">
    <div class="col-md-12">
        <div class="nk-int-st">
            <label for="url" class="control-label">{{ 'Url' }}</label>
            <input class="form-control" name="url" type="text" id="url" value="{{ isset($project->url) ? $project->url : ''}}" >
        {!! $errors->first('url', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>

<div class="row mg-t-20">
    <div class="col-lg-6 col-md-6">
        <div class="lh">
            <label for="image">{{ 'Image' }} </label>
            <div class='file-input'>
                <input type='file' name="image" onchange="readURL(this);">
                <span class='button'>Choose</span>
                <span class='label' data-js-label>No file selected</label>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 text-center">
        @if($project->image)
        <img id="blah" class="uploaded-img-preview" src="{{ asset('storage/projects/'.$project->image) }}"
            alt="{{ $project->image }}" />
        @else
        <img id="blah" class="uploaded-img-preview" src="http://placehold.it/180" alt="{{ $project->title }}" />
        @endif
    </div>
</div>


<div class="form-example-int">
    <button class="btn btn-success notika-btn-success waves-effect" type="submit">{{ $formMode === 'edit' ? 'Update' : 'Create' }}</button>
</div>
