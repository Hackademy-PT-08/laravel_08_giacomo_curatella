<x-layout>
    <section class="container">
        <div class="row py-5 animate__animated animate__bounceInDown">
            <div class="col-12">
                <p class="h2 text-center text-primary special-text">Modifica articolo {{$articolo->title}}!</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form method="post" action="{{ route('modificaArticoloPut', ['id'=>$articolo->id]) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3 animate__animated animate__bounceInRight">
                      <label for="image" class="form-label">Aggiorna la foto dell'articolo</label>
                      <input type="file" class="form-control" id="image" name="image">
                    </div>

                    <div class="mb-3 animate__animated animate__bounceInRight">
                        <label for="title" class="form-label">Modifica il titolo del Post</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Titolo dell'articolo" value="{{ $articolo->title }}">
                    </div>

                    <div class="mb-3 animate__animated animate__bounceInLeft">
                        <label for="content" class="form-label">Modifica il testo dell'articolo </label>
                        <textarea name="content" id="content" cols="30" rows="10" class="form-control" placeholder="Scrivi quello che vuoi, lo condivideremo noi per te...">{{ $articolo->content }}</textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-info mt-5 myButton animate__animated animate__bounceInUp" id="inserisci">Aggiorna Articolo<i class="fa-solid fa-paper-plane ms-2"></i></button>
                </form>
            </div>
        </div>
    </section>
</x-layout>