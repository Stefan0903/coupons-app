<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Kupon</title>

    
    
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/sticky-footer-navbar.css" rel="stylesheet">
</head>

<body>

    @include ('layouts.nav')

    <!-- Begin page content -->
    <main role="main" class="container mt-4">
        @yield('content')
    </main>

    <footer class="footer">
        <div class="container">
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        $('#editCouponModal').on('show.bs.modal', function (event) {
            
            var button = $(event.relatedTarget)
            var name = button.data('name')
            var sale = button.data('sale')
            var id = button.data('id')
            var number = button.data('number')
            var modal = $(this)
            modal.find('.modal-body #name').val(name);
            modal.find('.modal-body #sale').val(sale);
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #number').val(number);

        })
    </script>
</body>
</html>
