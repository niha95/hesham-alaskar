@if(session('success'))


<script type="text/javascript">
    $(function() {
      Swal.fire({
        position: "center-center",
        icon: "success",
        title: "{{ session('success') }}",
        showConfirmButton: false,
        timer: 1500
    });


    });

  </script>

@endif


@if(session('error'))


<script type="text/javascript">
    $(function() {
      const Toast = Swal.mixin({
        toast: true,
        position: 'mid-center',
        showConfirmButton: false,
        timer: 1500
      });


      toastr.error("{{ session('error') }}")

    });

  </script>


@endif
