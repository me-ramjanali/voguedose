/**
 * jQuery horizontal scroller
 *
 * Copyright 2015, Mitch Rompelman
 * Dual licensed under the MIT or GPL Version 2 licenses.
 *
 * If you found a bug, please contact me via email <mitchrompelman@gmail.com>
 *
 * @author Mitch Rompelman
 * @version 0.1.0
 * @url https://github.com/MitchRompelman/Jquery-horizontal-scroller
 *
 */
$(function() {
    
    progressBar();
     
    window.addEventListener( 'scroll', function() {
        progressBar();
    });

    $( window ).resize( function() {
        progressBar();
    });

    function progressBar()
    {
        var toscroll  = document.body.scrollHeight - window.innerHeight;
        var pecentage = (($(window).scrollTop()/toscroll)*100);
        if( pecentage < 33 )
        {
            $( "#bar" ).attr("class", "progress-bar progress-bar-danger progress-bar-striped");
        }else if(pecentage < 66){
            $( "#bar" ).attr("class", "progress-bar progress-bar-warning progress-bar-striped");
        }else if(pecentage < 99){
            $( "#bar" ).attr("class", "progress-bar progress-bar-info progress-bar-striped");
        }else{
            $( "#bar" ).attr("class", "progress-bar progress-bar-success progress-bar-striped");
        }

        $( "#bar" ).stop().animate( { width: pecentage+"%" }, 0, 'swing', function() { });
        //$("#bar").html("<span class='bar-parcentage'>"+Math.ceil(pecentage)+"%</span>");
    }

});