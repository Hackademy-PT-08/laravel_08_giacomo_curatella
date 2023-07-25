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
                    <div class="card border-info mb-3 shadow">
                        <div class="card-header d-flex justify-content-between">
                            <p><i class="fa-solid fa-user me-3"></i><span class="text-decoration-underline text-info text-uppercase"><strong>{{ $articolo->author }}</strong></span></p>
                            <p class="text-truncate"><i class="fa-solid fa-file-circle-check me-3"></i><span class="text-black-50">{{ $articolo->title }}</span></p>
                        </div>
                        <div class="card-body">
                            <!-- <p>Contenuto:</p> -->
                            <p class="card-text text-primary"><i class="fa-solid fa-quote-left me-3 text-black-50"></i>{{ $articolo->content }}<i class="fa-solid fa-quote-right ms-3 text-black-50"></i></p>
                        </div>
                        <div class="px-2 border-top-1 border-black d-flex justify-content-end">
                            <p><i class="fa-regular fa-calendar-days me-3"></i>{{$articolo->created_at }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
</x-layout>
