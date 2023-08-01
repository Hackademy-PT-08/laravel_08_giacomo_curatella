<x-layout>
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
                <div class="mt-3">
                    <a href="{{ route('articoli') }}" class="btn btn-danger">Indietro</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>