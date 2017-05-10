 <script type="text/javascript">
        $(document).ready(function(){
            var flags = 1;
            var flg = 1;
            $('#loginButton').on('click',function(){
                $('#signupDiv').hide();
                flg = 1;
                if(flags == 1){
                    $('#loginDiv').show();
                    flags = 0;
                    $('body').addClass('pop-up');
                }else{
                     $('#loginDiv').hide();
                    flags = 1;
                    $('body').removeClass('pop-up');
                }
            });

            $('#signupButton').on('click',function(){
                $('#loginDiv').hide();
                flags = 1;
                if(flg == 1){
                    $('#signupDiv').show();
                    flg = 0;
                     $('body').addClass('pop-up');
                }else{
                    $('#signupDiv').hide();
                    flg = 1;
                    $('body').removeClass('pop-up');
                }
            });

            var flag = 1;
            jQuery('.navbar-toggle').click(function(){
              if(flag == 1){
                 jQuery('.slider_text_mob').addClass('slider_text_mob_hide');
                flag = 0;
              }else{
                  jQuery('.slider_text_mob').removeClass('addmore');
                flag = 1;
              }
            });
        });
        
    </script>


    <script type="text/javascript">
        $(document).ready(function(){
            $('#loginButton').on('click',function(){
              $('#signupDiv').hide();
              $('#loginDiv').toggle();
              
            });

            $('#signupButton').on('click',function(){
              $('#loginDiv').hide();
              $('#signupDiv').toggle();
            });

            var flag = 1;
            jQuery('.navbar-toggle').click(function(){
              if(flag == 1){
                 jQuery('.slider_text_mob').addClass('slider_text_mob_hide');
                flag = 0;
              }else{
                  jQuery('.slider_text_mob').removeClass('slider_text_mob_hide');
                flag = 1;
              }
            });
        });
        
    </script>