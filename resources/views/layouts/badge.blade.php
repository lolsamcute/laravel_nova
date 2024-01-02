   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
			<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
			
           @if (session('error'))
                <!-- / Swal View -->
    		    <script type="text/javascript">
                    Swal.fire(
                      'Error!',
                      '{{ session('error') }}',
                      'error'
                    )
    		    </script>
    			<!-- /End Swal View -->
    	    @endif
    	    
    	    
    	    @if (session('success'))
            <script type="text/javascript">
            Swal.fire(
              'Successful!',
              '{{ session('success') }}',
              'success'
            )
            </script>
            @endif
