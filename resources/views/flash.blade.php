@if(session()->has('flash_message'))
<script type="text/javascript">
	swal({   
		title: "success", 
		text: "{{session('flash_message')}}",
		type: "success",  
		timer: 1600, 
		showConfirmButton: false
		});
</script>

@endif