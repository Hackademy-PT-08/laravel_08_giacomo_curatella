<x-layout>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <section class="container px-2 px-md-0 py-5">
        <div class="row justify-content-center py-5">
            <h1 class="text-center">Login page</h1>
            <div class="col-md-8">
                <form action="/login" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="email">Inserisci un indirizzo e-mail valido</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                    </div>
                    <div class="mb-4">
                        <label for="password">Inserisci la password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div class="mb-4">
                        <input type="submit" value="Login" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </section>

</x-layout>