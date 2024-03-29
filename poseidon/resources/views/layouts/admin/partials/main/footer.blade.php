<footer class="main-footer">
    <strong>Copyright © <a href="{{ url('/') }}">Poseidon</a>.</strong> All rights
    reserved.
</footer>

<!-- Bootstrap JS -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<!-- bootstrap datepicker @to do - check this -->
<script src="{{ asset('assets/plugins/datepicker/bootstrap-datepicker.js') }}"></script>

<!-- Datatable JS -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>

<!-- Select 2 Dropdown -->
<script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>

<!-- Date Time Picker JS-->
<script src="{{ asset('assets/plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>

<!-- AdminLTE App -->
<script src="{{ asset('assets/js/app.js') }}"></script>

<!-- Delete JS -->
<script src="{{ asset('assets/js/delete.js') }}"></script>

<!-- Custom JS -->
@yield('scripts')
