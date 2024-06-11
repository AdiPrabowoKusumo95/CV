<!-- Bootstrap core JavaScript-->
<script src="{{asset('assets/admin/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('assets/admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('assets/admin/js/sb-admin-2.min.js')}}"></script>

{{-- <!-- Vendor JS Files -->
<script src="{{ asset('assets/fe/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('assets/fe/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/fe/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/fe/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/fe/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/fe/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
<script src="{{ asset('assets/fe/assets/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{asset('assets/fe/assets/js/main.js')}}"></script> --}}
<script>
    $(document).ready(function () {
        // Kode untuk memperbarui lebar progress bar
        $('.progress-bar').each(function () {
            var $bar = $(this);
            var progress = setInterval(function () {
                var currWidth = parseInt($bar.css('width'));
                var maxWidth = parseInt($bar.parent().css('width'));
                var width = currWidth + 1;
                // Atur batas progress bar
                if (width >= maxWidth || width >= parseInt($bar.attr('aria-valuenow'))) {
                    clearInterval(progress);
                } else {
                    $bar.css('width', width + '%');
                }
            }, 10);
        });
    });
    </script>
