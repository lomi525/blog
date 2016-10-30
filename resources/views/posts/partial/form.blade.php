<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
    <label for="title"">Title</label>
    <input id="title" type="text" class="form-control" name="title" value="{{ old('title', $post->title) }}">
    @if ($errors->has('title'))
        <span class="help-block">
      <strong>{{ $errors->first('title') }}</strong>
    </span>
    @endif
</div>


<div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
    <label for="content">Content</label>
    <textarea name="content" id="content" rows="10" class="form-control">{{ old('content', $post->content) }}</textarea>
    @if ($errors->has('content'))
        <span class="help-block">
      <strong>{{ $errors->first('content') }}</strong>
    </span>
    @endif
</div>