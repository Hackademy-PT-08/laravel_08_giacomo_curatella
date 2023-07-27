<x-layout>
    <section class="container">
        <div class="row py-5 animate__animated animate__bounceInDown">
            <div class="col-12">
                <p class="h2 text-center text-primary special-text">Pubblica Post!</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form method="post" action="{{ route('store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 animate__animated animate__bounceInRight">
                      <label for="image" class="form-label">Carica la foto dell'articolo</label>
                      <input type="file" class="form-control" id="image" name="image">
                    </div>

                    <div class="mb-3 animate__animated animate__bounceInLeft">
                      <label for="author" class="form-label">Autore del Post <span class="text-danger">*</span></label>
                      <input type="text" class="form-control" id="author" name="author" placeholder="Inserisci il tuo NickName" value="{{ old('author') }}">
                      @error('author') <p class="text-danger">Campo obbligatorio</p> @enderror
                    </div>

                    <div class="mb-3 animate__animated animate__bounceInRight">
                        <label for="title" class="form-label">Titolo del Post <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Titolo dell'articolo" value="{{ old('title') }}">
                        @error('title') <p class="text-danger">Campo obbligatorio</p> @enderror
                    </div>

                    <div class="mb-3 animate__animated animate__bounceInLeft">
                        <label for="content" class="form-label">Testo dell'articolo <span class="text-danger">*</span></label>
                        <textarea name="content" id="content" cols="30" rows="10" class="form-control" placeholder="Scrivi quello che vuoi, lo condivideremo noi per te...">{{ old('content') }}</textarea>
                        @error('content') <p class="text-danger">Campo obbligatorio</p> @enderror
                    </div>
                    
                    <button type="submit" class="btn btn-info mt-5 myButton animate__animated animate__bounceInUp" id="inserisci">Pubblica<i class="fa-solid fa-paper-plane ms-2"></i></button>
                </form>
            </div>
        </div>
    </section>
</x-layout>