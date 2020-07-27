 @csrf
 <div class="form-group">
     <label for="title">Titulo</label>
     <input type="text" name="title" id="title" value="{{ old('title', $category->title) }}" class="form-control @error('title') is-invalid @enderror" placeholder="" aria-describedby="helpId">
 </div>
 <div class="form-group">
     <label for="url_clean">URL Clean</label>
     <input type="text" name="url_clean" id="url_clean" value="{{ old('url_clean', $category->url_clean) }}" class="form-control  @error('url_clean') is-invalid @enderror" placeholder="" aria-describedby="helpId">
 </div>
 <input class="btn btn-primary" type="submit" value="Enviar">
