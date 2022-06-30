<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <x-styles/>
    <style>
        .has-error{border-bottom: 1px solid red !important;
            background: no-repeat !important;
        }
    </style>

</head>
<body {{ $attributes }}>
    <!-- ==== Loadder === -->
    <div id="loader-wrapper" class="loader3 loader-wrapper">
		<div class="load_img">
            <img src="{{ asset('images/salon-gif-tr.gif')}}" >  
		</div>
	</div>
    {{ $slot }}

    
    <script type="text/javascript">
        $(window).on('load', function(){
            $('#loader-wrapper').delay(300).fadeOut(300); 
        });
    </script>
</body>
</html>
