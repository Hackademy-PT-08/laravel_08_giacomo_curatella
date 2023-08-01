<x-layout>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session('fail'))
        <div class="alert alert-warning">
            {{ session('fail') }}
        </div>
    @endif
    <section class="container py-5">
        <div class="row py-5">
            <div class="col-12">
                <h1 class="text-center text-primary special-text animate__animated animate__backInDown">Tutti i nostri Articoli...</h1>
            </div>
        </div>
        @if(count($articoli) === 0)
            <section class="container py-5">
                <div class="row py-5">
                    <div class="col-12">
                        <p class="h1 text-warning text-center animate__animated animate__bounceIn animate__delay-1s">"Ci spiace ma non abbiamo articoli da mostrarti... <br> perché non pubblichi tu il <a href="{{ route('create') }}" class="text-success">primo</a>?"</p>
                        <a href="{{ route('create') }}"><p class="text-center text-primary pt-5 animate__animated animate__backInUp animate__delay-1s"><i class="fa-regular fa-pen-to-square fa-4x"></i></p></a>
                    </div>
                </div>
            </section>
        @endif
        @foreach($articoli as $articolo)
            <div class="row py-3 justify-content-center animate__animated animate__flipInX">
                <div class="col-md-8">
                    <div class="card border-info mb-3 shadow overflow-hidden">
                        <div class="row justify-content-center">
                            @if($articolo->image == '')
                            <div class="col-6 cardImg overflow-hidden rounded-3" >
                                <img src="{{ asset('storage/' . 'placeholder.jpg') }}" alt="" class="img-fluid rounded-3">
                            </div>
                            @else
                            <div class="col-6 cardImg overflow-hidden rounded-3">
                                <img src="{{ asset('storage/' . $articolo->image) }}" alt="" class="img-fluid rounded-3">
                            </div>
                            @endif
                            <div class="col-6 d-flex flex-column justify-content-around">
                                <div class="card-header border-0 d-flex flex-column">
                                    <p><i class="fa-solid fa-user me-3"></i><span class="text-decoration-underline text-info text-uppercase"><strong>{{ $articolo->author }}</strong></span></p>
                                    <p class="mt-4"><i class="fa-solid fa-file-circle-check me-3"></i><span class="text-black-50">{{ $articolo->title }}</span></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card-footer">
                            <p class="card-text text-primary pt-5"><i class="fa-solid fa-quote-left me-3 text-black-50"></i>{{ $articolo->content }}<i class="fa-solid fa-quote-right ms-3 text-black-50"></i></p>
                        </div>
                        
                        <div class="px-2 border-top-1 border-black d-flex justify-content-end">
                            <p><i class="fa-regular fa-calendar-days me-3"></i>{{$articolo->created_at }}</p>
                        </div>
                        <div class="mt-3 d-flex align-items-center justify-content-around">
                            <a href="{{ route('dettaglioArticolo', ['id'=> $articolo->id]) }}" class="btn btn-info" style="background-color: green; color: white">Mostra dettaglio</a>
                            <a href="{{ route('modificaArticolo', ['id'=> $articolo->id]) }}" class="btn btn-success"  style="background-color: blue; color: white">Modifica Articolo</a>
                            <form action="{{ route('eliminaArticolo', ['id'=>$articolo->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Elimina Articolo" class="btn btn-danger" style="background-color: red; color: white">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
</x-layout>
