<!DOCTYPE html>
<html lang="en" class="h-100">
	<head>
		<meta charset="UTF-8">
		<title>Twitchy</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootswatch@5.2.3/dist/vapor/bootstrap.min.css"
              rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
              integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
              crossorigin="anonymous"
              referrerpolicy="no-referrer" />


		<link rel="stylesheet" href="{{ asset('styles/custom.css') }}">

		<link rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
			integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer" />



		<script defer src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.2/axios.min.js"
                integrity="sha512-QTnb9BQkG4fBYIt9JGvYmxPpd6TBeKp6lsUrtiVQsrJ9sb33Bn9s0wMQO9qVBFbPX3xHRAsBHvXlcsrnJjExjg=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
                integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        @stack('styles')
        @stack('scripts')
	</head>
	<body>

        <x-navbar />

		<div class="container">
			{{ $slot }}
		</div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
				integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
				crossorigin="anonymous"></script>
		<script src="{{ asset('scripts/custom.js') }}"></script>
	</body>
</html>
