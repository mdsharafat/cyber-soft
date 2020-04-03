<div class="row">
    <div class="col-md-12">
        <div class="nk-int-st">
            <label for="title" class="control-label">{{ 'Title' }}</label>
            <input class="form-control" name="title" type="text" id="title" value="{{ isset($post->title) ? $post->title : ''}}" >
            {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>

<div class="row mg-t-20">
    <div class="col-md-6">
        <div class="nk-int-st">
            <label for="category_id" class="control-label">{{ 'Category' }}</label>
        </div>
        @php
            $categoryPostArray = [];
            foreach($post->categories as $categoryPost){            
                array_push($categoryPostArray, $categoryPost->id);
            }
        @endphp
        <div class="bootstrap-select">
            <select class="selectpicker" multiple name="category_id[]">
                @isset($categories)
                    @foreach($categories as $category)
                        <option value='{{ $category->id }}'
                        @if(in_array($category->id, $categoryPostArray)) {{ 'selected' }} @endif
                        >{{ $category->title }}</option>
                    @endforeach
                @endisset
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="nk-int-st">
            <label for="category_id" class="control-label">{{ 'Tags' }}</label>
        </div>
        @php
            $postTagArray = [];
            foreach($post->tags as $postTag){            
                array_push($postTagArray, $postTag->id);
            }
        @endphp
        <div class="bootstrap-select">
            <select class="selectpicker" multiple name="tag_id[]">
                @isset($tags)
                    @foreach($tags as $tag)
                        <option value='{{ $tag->id }}' 
                        @if(in_array($tag->id, $postTagArray)) {{ 'selected' }} @endif
                        >{{ $tag->title }}</option>
                    @endforeach
                @endisset
            </select>
        </div>
    </div>
</div>

<div class="row mg-t-20">
    <div class="col-md-12">
        <div class="nk-int-st">
            <label for="content" class="control-label" style="margin-bottom: 20px;">{{ 'Content' }}</label>
            <textarea class="form-control" name="content" type="textarea" id="summernote" >{{ isset($post->content) ? $post->content : ''}}</textarea>
            {!! $errors->first('content', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
</div>

<div class="toggle-select-act fm-cmp-mg">
    <div class="nk-toggle-switch">
        <label for="is_published" class="ts-label">Publication Status</label>
        <input id="is_published" name="is_published" @if($post->is_published == 1) {{ 'checked' }} @endif type="checkbox" hidden="hidden">
        <label for="is_published" class="ts-helper"></label>
    </div>
</div>

<div class="form-example-int mg-t-30">
    <button class="btn btn-success notika-btn-success waves-effect" type="submit">{{ $formMode === 'edit' ? 'Update' : 'Create' }}</button>
</div>