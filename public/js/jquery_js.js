//Top image 

TweenMax.from("#p1", 2, { x: 400 });
TweenMax.from("#p2", 2, { x: -400 });
TweenMax.from("#p3", 2, { y: -400 });
//TweenMax.from("#p3", 1, {rotationX: 4*360});



//navbar

$(document).ready(function() {
    $("nav").mouseenter(function() {
        TweenMax.from("#nv1", 1, { x: 100, delay: 0 });
        TweenMax.from("#nv2", 1, { x: 100, delay: 0.1 });
        TweenMax.from("#nv3", 1, { x: 100, delay: 0.2 });
        TweenMax.from("#nv4", 1, { x: 100, delay: 0.3 });
    });
});





//about

$(document).ready(function() {
    $("#about").mouseenter(function() {
        TweenMax.from("#hrr", 1, { y: 50 });
        TweenMax.from("#hr1", 1, { y: -50 });
        TweenMax.from("#hrr", 1, { rotationX: 1 * 360 });
    });
});


$(document).ready(function() {
    $("#about2").mouseenter(function() {
        TweenMax.from("#shape1", 1, { rotationY: 1 * 360 });
        TweenMax.from("#shape2", 1, { y: -50 });
        TweenMax.from("#shape3", 1, { rotationY: 1 * 360 });
    });
});


$(document).ready(function() {
    $("#about3").mouseenter(function() {
        TweenMax.from("#shapeA", 1, { x: -250 });
        TweenMax.from("#shapeB", 1, { x: 250 });
    });
});



//projects

$(document).ready(function() {
    $(".tabs").click(function() {
        TweenMax.from(".img1", 1, { x: 100, delay: 0 });

    });
});

//contact
$(document).ready(function() {
    $("#contact").mouseenter(function() {
        TweenMax.from(".drag", 1, { y: 80 });
    });
});



//for displaying MODAL in PROJECTS
//This code loads a different page in the project page
$(document).ready(function() {
    $('.prjtmodal').on('click', function(e) {
        e.preventDefault();
        $('#myModal').modal('show').find('.modal-content').load($(this).attr('href'));
    });
});


/**
//another code for loading a page. This did not work when tried
$(document).ready(function() {
    $("#abt2").click(function() {
        $("#tt2").load("admin_about/about2.html.twig");
    });
});

**/


//the code below and button are solely for displaying screen size when developing
/* Screen size. Simply paste the <button> on the html page
   <button id="screenSize">Display dimensions of document and window</button>
 */
$(document).ready(function() {
    $("#screenSize").click(function() {
        var txt = "";
        txt += "Document width/height: " + $(document).width();
        txt += "x" + $(document).height() + "\n";
        txt += "Window width/height: " + $(window).width();
        txt += "x" + $(window).height();
        alert(txt);
    });
});


$(document).ready(function() {
    $("#myModal").modal('show');
});