@props(["title" => "Tp01 - Blackriver Blades"])
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>{{ $title }}</title>

  <!-- Core styles -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />

  <!-- Shared custom styles -->
    <link rel="stylesheet" href="{{ asset('css/customs/header.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/customs/navbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />

  <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


  <!-- Core scripts -->
    <script defer src="{{ asset('vendor/bootstrap/jquery-1.12.4.min.js') }}"></script>
    <script defer src="{{ asset('vendor/bootstrap/popper.min.js') }}"></script>
    <script defer src="{{ asset('vendor/bootstrap/bootstrap.min.js') }}"></script>
    <script defer src="{{ asset('js/main.js') }}"></script>
</head>

<body>
  <x-header />
  <x-navbar />
  {{ $slot }}
  <x-footer />
</body>

</html>
