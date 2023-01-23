<a href="#" class="go-top">👆</a>

<style>
    .go-top {
        font-family: Arial;
        font-size: 1.5em;
        position: fixed;
        bottom: 1em;
        left: 1em;
        text-decoration: none;
        color: white;
        background-color: rgba(95, 158, 160, 0.4);
        padding: 0.5em;
        border-radius: 40px;
        display: none;
    }

    .go-top:hover {
        background-color: greenyellow;
        color: lavender;
    }
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script>
    $(document).ready(function() {
        // Show or hide the sticky footer button
        $(window).scroll(function() {
            if ($(this).scrollTop() > 200) {
                $('.go-top').fadeIn(200);
            } else {
                $('.go-top').fadeOut(200);
            }
        });

        // Animate the scroll to top
        $('.go-top').click(function(event) {
            event.preventDefault();

            $('html, body').animate({
                scrollTop: 0
            }, 300);
        })
    });
</script>