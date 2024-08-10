<!-- Js -->
<script src="{{ asset('assets/scripts/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('assets/scripts/popper.js') }}"></script>
<script src="{{ asset('assets/scripts/main.js') }}"></script>
<script src="{{ asset('assets/scripts/perfect-scrollbar.min.js') }}"></script>

<script>
    $(document).ready(function() {
        $("#pageloader").fadeOut();

        const ps = new PerfectScrollbar('.scrollbar-sidebar');
    });
</script>