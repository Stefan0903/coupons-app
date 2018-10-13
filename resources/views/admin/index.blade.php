@extends ('layouts.master')

@section ('content')

    @include ('admin.addModal')
    
    <h1>
        Dodaj novi kupon:
        <span>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addCouponModal">
            Dodaj novi kupon
        </button>
        </span>
    </h1>

    <hr>

    <h1>Lista dostupnih kupona</h1>

    <table class="table table-striped">
        <thead>
            <tr>    
                <th></th>
                <th scope="col">Naziv kupona</th>
                <th scope="col">Popust</th>
                <th scope="col">Slika</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($coupons as $coupon)
                <tr>
                    <td>
                        <button type="button" class="btn btn-primary" data-name="{{ $coupon->name }}" data-number="{{ $coupon->number }}" data-sale="{{ $coupon->sale }}" data-id="{{ $coupon->id }}" data-toggle="modal" data-target="#editCouponModal">
                            Izmijeni
                        </button>
                        @include ('admin.editModal')
                        <a href="{{ route('coupon.delete', $coupon->id) }}">
                            <button type="submit" class="btn btn-primary">
                                Obriši
                            </button>
                        </a>  
                    </td>
                    <td>{{ $coupon->name }}</td>
                    <td>{{ $coupon->sale }}</td>
                    <td style="width: 18rem;">
                        <img class="card-img" src="{{ asset("storage/".$coupon->image) }}" style="height:126px;" alt="Card image cap">
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection