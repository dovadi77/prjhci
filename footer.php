</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script src="js/index.js"></script>
<script>
    $(document).ready(function() {
        // Add scrollspy to <body>
        $('body').scrollspy({
            target: ".container",
            offset: 200
        });

        // Add smooth scrolling on all links inside the navbar
        $("#menu-center a").on('click', function(event) {
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function() {

                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });
        const minus = $('.quantity__minus');
        const plus = $('.quantity__plus');
        const input = $('.quantity__input');
        minus.click(function(e) {
            e.preventDefault();
            var value = input.val();
            if (value > 1) {
                value--;
            }
            input.val(value);
        });

        plus.click(function(e) {
            e.preventDefault();
            var value = input.val();
            value++;
            input.val(value);
        })

    });
</script>

</html>