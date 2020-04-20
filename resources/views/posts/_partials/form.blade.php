@include('includes.alerts')

@csrf

<div class="form-group">
    <input value="{{ $post->title ?? old('title') }}" class="form-control" type="text" name="title" placeholder="Title">
</div>
<div class="form-group">
    <input class="form-control" type="file" name="image">
</div>
<div class="form-group">
    <textarea class="form-control" name="body" cols="30" rows="5" placeholder="commnet">{{ $post->body ?? old('body') }}</textarea>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-success">Save</button>
</div>