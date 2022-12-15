
@extends('layouts.app')
  
@section('content')

	<head>
		<title>Laravel</title>
		<script src="{{asset('js/jquery-3.6.0.min.js')}}" type="text/javascript"></script>
		{{-- <script>
			$(document).ready(function() {

				$('#buttonDemoAjax').on('click', function() {
					var fullName = $('#textBoxFullName').val();
					$.ajax({
						type: 'GET',
						data: {
							fullName: fullName
						},
						url: "{{url('/demo/ajax')}}",
						success: function(data) {
						}
					});
				});

			});
		</script> --}}

	</head>

	<body>

		{{-- <h3>Index</h3>
		Full Name <input type="text" id="textBoxFullName">
		<br>
		<input type="button" value="Demo Ajax" id="buttonDemoAjax">
		<br>
		<span id="result"></span> --}}

	</body>
@endsection