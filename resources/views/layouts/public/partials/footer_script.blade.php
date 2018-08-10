
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "../../connect.facebook.net/en_US/all.js#xfbml=1&appId=126780447403102";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<script type="text/javascript" src="{{ asset ('assets/ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js') }}"></script>
<script type="text/javascript">
    if (typeof jQuery == 'undefined') {
        document.write('<script src="{{ asset ('assets/js/jquery.min.js') }}"><\/script>');
    }
</script>

<script src="{{ asset ('assets/js/underscore/underscore-min.js') }}" type="text/javascript"></script>

<script src="{{ asset ('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>

<script src="{{ asset ('assets/js/rs-plugin/js/jquery.themepunch.plugins.min.js') }}" type="text/javascript"></script>
<script src="{{ asset ('assets/js/rs-plugin/js/jquery.themepunch.revolution.min.js') }}" type="text/javascript"></script>

<script src="{{ asset ('assets/js/jquery.carouFredSel-6.2.1-packed.js') }}" type="text/javascript"></script>

<script src="{{ asset ('assets/js/jquery-ui-1.10.3/js/jquery-ui-1.10.3.custom.min.js') }}" type="text/javascript"></script>
<script src="{{ asset ('assets/js/jquery-ui-1.10.3/touch-fix.min.js') }}" type="text/javascript"></script>

<script src="{{ asset ('assets/js/isotope/jquery.isotope.min.js') }}" type="text/javascript"></script>

<script src="{{ asset ('assets/js/bootstrap-tour/build/js/bootstrap-tour.min.js') }}" type="text/javascript"></script>

<script src="{{ asset ('assets/js/prettyphoto/js/jquery.prettyPhoto.js') }}" type="text/javascript"></script>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDvMjN1g49P1MA2Onsj-GulDkmDuuH6aoU&amp;sensor=false"></script>
<script type="text/javascript" src="{{ asset ('assets/js/goMap/js/jquery.gomap-1.3.2.min.js') }}"></script>

<script src="{{ asset ('assets/js/custom.js') }}" type="text/javascript"></script>

<script src="{{ asset ('assets/js/sweetalert.min.js')}}"></script>

<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script>
    $(document).ready(function() {
        $("#myForm").validate({
            rules: {
                u_name: {
                    required: true,
                    minlength: 2
                },
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 6
                },
                con_pass: {
                    required: true,
                    minlength: 6,
                    equalTo: "#password"
                },
            },
            messages: {}
        });
    });
</script>

</body>

<!-- Mirrored from html-demo.proteusthemes.com/webmarket/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 09 Aug 2017 06:50:31 GMT -->
</html>
