$(window).on('load', function(){ 
    $(function(){
        var $slider = $('#exampleSlider');
        var $Temp = document.getElementsByClassName("attorneys_card");
        
        var rotating = true;
        var sliderspeed = 500;
        var seeitems = setInterval(rotateSlider, sliderspeed);
        
        if(!!('ontouchstart' in window)){//check for touch device
            //behaviour and events for touch device
            $("#exampleSlider").click(function(){
                rotating = false;
                setTimeout(function(){
                    rotating = true;
                }, 7000);
              });
            }
            else{
            //behaviour and events for pointing device like mouse
            $(document).on({
                mouseenter: function(){
                    rotating = false; // turn off rotation when hovering
                },
                mouseleave: function(){
                    rotating = true;
                }
                }, '#exampleSlider');
            }

        
        
        function rotateSlider() {
        if(rotating != false) {
    
            var $first = $('#exampleSlider li:first');
            var sizeImage = 19;
            if (window.matchMedia('(max-width: 1024px)').matches)
            {
                sizeImage = 32.33;
            }
            if (window.matchMedia('(max-width: 500px)').matches)
            {
                sizeImage = 99;
            }
            $first.animate({ 'margin-left': '-'+sizeImage+'%' }, 3000, "swing", function() {
            $first.remove().css({ 'margin-left': '1%' });
            $('#exampleSlider li:last').after($first);
            });
        }
        }
    });
})
