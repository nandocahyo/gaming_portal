<!-- Bootstrap core JavaScript-->
    <script src="{{url('backend/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{url('backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Page level plugin JavaScript-->
    <script src="{{url('backend/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{url('backend/vendor/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{url('backend/vendor/datatables/dataTables.bootstrap4.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{url('backend/js/sb-admin.min.js')}}"></script>

    <!-- Demo scripts for this page-->
    <script src="{{url('backend/js/demo/datatables-demo.js')}}"></script>
    <script src="{{url('backend/js/demo/chart-area-demo.js')}}"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script>
        function confirmDelete(item_id) {
            swal({
                title: "Anda yakin ingin mengubah status pertandingan ?",
                text: "Ubah status pertandingan jika telah selesai !",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        $('#'+item_id.closest('#delete-pack').submit());
                    } else {
                        swal("Ubah status dibatalkan");
                    }
                });
        }
    </script> 