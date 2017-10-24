<!-- ***************** EXTERNAL SCRIPTS ***************** -->
<!-- jQuery, Popper.js, Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<!-- Nice Scroll Js CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.6.8-fix/jquery.nicescroll.min.js"></script>

<!-- ***************** PAGE SCRIPTS ***************** -->
<script>
    $(document).ready(function () {

        $('.overlay').hide();
        $('#signOut').on('click', function () {
            if(confirm('Are you sure you want to sign out?')){
                location.href = '../logout.php';
            }               
        })

        $('#sidebar').niceScroll({
            cursorcolor: '#53619d', // Changing the scrollbar color
            cursorwidth: 4, // Changing the scrollbar width
            cursorborder: 'none', // Removing the scrollbar border
        });

        $('#sidebarCollapse').on('click', function () {
            // open or close navbar
            $('#sidebar').toggleClass('active');
            // fade in the overlay
            $('.overlay').show();
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });

        // if dismiss or overlay was clicked
        $('#dismiss, .overlay').on('click', function () {
          // hide the sidebar
          $('#sidebar').removeClass('active');
          // fade out the overlay
          $('.overlay').hide();
        });

    });
</script>