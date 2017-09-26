@extends('layouts.app')

@section('content')


    <div class="container">

        <div class="form-group">
            <div class="form-group">
                <label for="post_title">Post title</label>
                <input type="text" class="form-control" id="post_title" aria-describedby="titleHelp"
                       placeholder="Enter title">
                <small id="titleHelp" class="form-text text-muted">Think of a title that describes the content best
                </small>
            </div>
        </div>

        <div class="form-group">
            <div class="form-group">
                <label for="post_url">Post link</label>
                <input type="text" class="form-control" id="post_url" aria-describedby="linkHelp"
                       placeholder="Enter link">
                <small id="linkHelp" class="form-text text-muted">Insert the link you want to share</small>
            </div>
        </div>

        <div class="form-group">
            <label for="post_text">Post content</label>
            <textarea draggable="" class="form-control" id="post_text" rows="3" aria-describedby="textHelp"
                      placeholder="Enter text"></textarea>
            <small id="textHelp" class="form-text text-muted">Tell us more about the content of your post</small>
        </div>

        <div class="form-group">
            <label for="path">Upload a picture</label>
            <input type="file" class="form-control-file" id="path">
            <small id="pathHelp" class="form-text text-muted">Add a picture to represent your post</small>
        </div>
    </div>
    <div style="position:relative;">
        <a class='btn btn-primary' href='javascript:;'>
            Choose File...
            <input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="file_source" size="40"  onchange='$("#upload-file-info").html($(this).val());'>
        </a>
        &nbsp;
        <span class='label label-info' id="upload-file-info"></span>
    </div>

@endsection