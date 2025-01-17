<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{ URL::asset('asssets/img/tittle-logo.png') }}" />
    {{-- <link href="{{ URL::asset('css/jquery.nice-number.css') }}" rel="stylesheet" /> --}}

    <title>WeCoffee | {{ $tittle }}</title>
  </head>
  <body style="margin-top: 3%">
    @include('components.navbar')

    @yield('konten')

    @include('components.footer')



    <script src="https://kit.fontawesome.com/3a051b2f60.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    {{-- <script src="{{ URL::asset('js/jquery.nice-number.js') }}"></script> --}}
    {{-- <script src="{{ URL::asset('js/script-number.js') }}"></script> --}}
  </body>
</html>
