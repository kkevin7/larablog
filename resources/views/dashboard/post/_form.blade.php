 @csrf
 <div class="form-group">
     <label for="title">Titulo</label>
     <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}" class="form-control @error('title') is-invalid @enderror" placeholder="" aria-describedby="helpId">
 </div>
 <div class="form-group">
     <label for="url_clean">URL Clean</label>
     <input type="text" name="url_clean" id="url_clean" value="{{ old('url_clean', $post->url_clean) }}" class="form-control  @error('url_clean') is-invalid @enderror" placeholder="" aria-describedby="helpId">
 </div>
 <div class="form-group">
     <label for="content">Centenido</label>
     <textarea class="form-control  @error('content') is-invalid @enderror" name="content" id="content" rows="3">{{ old('content', $post->content) }}</textarea>
 </div>
 <div class="form-group">
   <label for="">Select Category</label>
   <select class="form-control" name="category_id" id="category_id">
    @foreach ($categories as $title => $id)
   <option {{$post->category_id == $id ? 'selected="selected"' : ''}} value="{{$id}}">{{$title}}</option>
    @endforeach     
   </select>
 </div>

 <div class="form-group">
   <label for="">Posted</label>
   <select class="form-control" name="posted" id="posted">
     @include('dashboard.partials.option-yes-not',['val' => $post->posted])
   </select>
 </div>
 <input class="btn btn-primary" type="submit" value="Enviar">
