@extends ('layouts.master')

@section ('content')
    <h1>Dostupni kuponi</h1>
    <hr>
    @foreach ($coupons->chunk(3) as $chunk)
        <div class="row">
            @foreach ($chunk as $coupon)
                <div class="col-lg-4 mb-4">
                    <div class="card h-100" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset("storage/".$coupon->image) }}" style="height: 180px;" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $coupon->sale }}</h5>
                            <p class="card-text">{{ $coupon->name }}</p>
                            <a href="{{ Auth::check() ? route('coupon.subscribe', $coupon->id) : route('login') }}" class="btn btn-primary">Prijavi se za popust</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
@endsection 