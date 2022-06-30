<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="">
<meta name="author" content="">
<title></title>
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('css/datatables.css')}}">
<link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.css')}}">
<link rel="stylesheet" href="{{ asset('css/bootstrap-select.css')}}">
<link rel="stylesheet" href="{{ asset('css/all.min.css')}}">
<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{ asset('css/bootstrap-glyphicons.min.css')}}">
<link rel="stylesheet" href="{{ asset('css/feathericon.min.css')}}">
<link rel="stylesheet" href="{{ asset('css/ctrleditor.css')}}">
<link rel="stylesheet" href="{{ asset('css/swiper.css')}}">
<link rel="stylesheet" href="{{ asset('css/fileinput.css')}}">
<link rel="stylesheet" href="{{ asset('css/style-old.css')}}">
<link rel="stylesheet" href="{{ asset('css/style.css')}}">
<link rel="shortcut icon" href="{{ asset('images/short.png')}}">
<style type="text/css">
	.has-error {
		box-shadow: 0px 0px 2px 1px #DE0707 !important;
	}
	.dt-buttons{ display: none; }
	.dataTables_length{width: 50%;float: left;}
	.dataTables_filter{width: 50%;float: right;}
	div .dataTables_paginate {float: right !important; }
</style>


<script src="{{ asset('js/moment.min.js')}}"></script>
<script src="{{ asset('js/jquery-2.0.3.js')}}"></script>
<script src="{{ asset('js/popper.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<script>
	$(document).ready(function(){
		$("[data-toggle=popover]").popover({trigger:"hover"});
	});
	img_prev = [];
</script>