$(function () {
    $('#showdiv1').click(function () {
        $('#div2').hide();
        $('#div1').show();
    });
    $('#showdiv2').click(function () {
        $('#div1').hide();
        $('#div2').show();
    });

});

$(function () {
    $('#showdiv3').click(function () {
        $('#div4').hide();
        $('#div3').show();
    });
    $('#showdiv4').click(function () {
        $('#div3').hide();
        $('#div4').show();
    });

});

$(function () {
    $('#showdiv5').click(function () {
        $('#div6').hide();
        $('#div5').show();
    });
    $('#showdiv6').click(function () {
        $('#div5').hide();
        $('#div6').show();
    });

});

$(function () {
    $('#showdiv7').click(function () {
        $('#div8').hide();
        $('#div7').show();
    });
    $('#showdiv8').click(function () {
        $('#div7').hide();
        $('#div8').show();
    });

});

$(function () {
    $('#showdiv9').click(function () {
        $('#div10').hide();
        $('#div9').show();
    });
    $('#showdiv10').click(function () {
        $('#div9').hide();
        $('#div10').show();
    });

});

$(function () {
    $('#showdiv11').click(function () {
        $('#div12').hide();
        $('#div11').show();
    });
    $('#showdiv12').click(function () {
        $('#div11').hide();
        $('#div12').show();
    });

});

$(function () {
    $('#showdiv13').click(function () {
        $('#div14').hide();
        $('#div13').show();
    });
    $('#showdiv14').click(function () {
        $('#div13').hide();
        $('#div14').show();
    });

});

$(function () {
    $('#showdiv15').click(function () {
        $('#div16').hide();
        $('#div15').show();
    });
    $('#showdiv16').click(function () {
        $('#div15').hide();
        $('#div16').show();
    });

});

$(function () {
    $('#showdiv17').click(function () {
        $('#div18').hide();
        $('#div17').show();
    });
    $('#showdiv18').click(function () {
        $('#div17').hide();
        $('#div18').show();
    });

});

$(function () {
    $('#showdiv19').click(function () {
        $('#div20').hide();
        $('#div19').show();
    });
    $('#showdiv20').click(function () {
        $('#div19').hide();
        $('#div20').show();
    });

});


// back to top auto scroll

$(function () {

	// hide #back-top first
	$("#back-top").hide();
	
	// fade in #back-top
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#back-top').fadeIn();
			} else {
				$('#back-top').fadeOut();
			}
		});
        

	});   
    
});

