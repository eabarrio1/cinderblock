
<footer>

    <div class="container">


            <div class="social">
                <ul>
                    <li><a href="https://www.facebook.com/cinderblockcomedy/?fref=ts" target="_blank" class="facebook">Facebook</a></li>
                    <li><a href="https://twitter.com/CinderBlockFest" target="_blank" class="twitter">Twitter</a></li>
                    <li><a href="https://www.instagram.com/CinderBlockComedyFest/" target="_blank" class="instagram">Instagram</a></li>
                    <!-- <li><a href="#" class="tumblr">Tumblr</a></li> -->
                    <!-- <li><a href="#" class="youtube">YouTube</a></li> -->

                </ul>

            </div>

            <p>Powered by <img src="<?php bloginfo('stylesheet_directory'); ?>/images/ticketfly.png" alt="TicketFly" width="100"></p>

             <p>Copyright &copy; <?php echo date('Y'); ?> Cinderblock Comedy Festival<br>
    site by <a href="http://elenabarrio.com" target="_blank">Elena Barrio</a></p>

    </div>

</footer>


</div>

<?php wp_footer(); ?>


<script src="<?php bloginfo('template_directory'); ?>/js/jquery.popup.js"></script>

    <script>
        $(function(){

            /*-------------------------------

                GENERAL EXAMPLES

            -------------------------------*/

            // Default usage
            // $('.default_popup').popup();

            // // Function for content
            // $('.function_popup').popup({
            //     content     : function(){
            //         return '<p>'+$(this.ele).attr('title')+'</p>';
            //     }
            // });

            $('.coree').popup({
                content     : $('#coree')
            });

            $('.elena').popup({
                content     : $('#elena')
            });

            $('.cathy').popup({
                content     : $('#cathy')
            });

            $('.hana').popup({
                content     : $('#hana')
            });

            $('.chrissie').popup({
                content     : $('#chrissie')
            });

            $('.took').popup({
                content     : $('#took')
            });

            $('.alison').popup({
                content     : $('#alison')
            });


            $('.joanna').popup({
                content     : $('#joanna')
            });



        });

        $('.gross').click(function(){
            $(this).addClass('hidden');
        });


        // $('.hidden').click(function(){
        //     $(this).removeClass('hidden');
        // });


        /*---------------------

            JQUERY EASING

        */

        $.extend($.easing, {
            easeOutBack: function (x, t, b, c, d, s) {
                if (s == undefined) s = 1.70158;
                return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
            },
            easeInBack: function (x, t, b, c, d, s) {
                if (s == undefined) s = 1.70158;
                return c*(t/=d)*t*((s+1)*t - s) + b;
            }
        });

    </script>


</body>

</html>
