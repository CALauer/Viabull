console.log("loaded")
$('#test').click('click', function() {
	console.log("clicked");

	let x = $('.login-drop-down');
	console.log("clicked")
	if (x.data('clicked', true) ) {
		x.fadeToggle(200).delay( 100 ).css({display: 'inline-grid', top: 30})
		}
	})
	// $( "button" ).click(function() {
	// 	$( "div.first" ).slideUp( 300 ).delay( 800 ).fadeIn( 400 );
	// 	$( "div.second" ).slideUp( 300 ).fadeIn( 400 );
	//   });

// $('#learn_more_btn').click(function() {
// 	$([ document.documentElement, document.body ]).animate(
// 		{
// 			scrollTop: $('#about_me').offset().top
// 		},
// 		800
// 	);
// });
// $('#to_about_me_btn, #to_about_me_link,#to_about_me_nav').click(function() {
// 	$([ document.documentElement, document.body ]).animate(
// 		{
// 			scrollTop: $('#about_me').offset().top
// 		},
// 		800
// 	);
// });
// $('#continue_btn').click(function() {
// 	$([ document.documentElement, document.body ]).animate(
// 		{
// 			scrollTop: $('#projects').offset().top
// 		},
// 		800
// 	);
// });
// $('#to_projects_me_btn, #to_projects_me_nav,#to_projects_btn').click(function() {
// 	$([ document.documentElement, document.body ]).animate(
// 		{
// 			scrollTop: $('#projects').offset().top
// 		},
// 		800
// 	);
// });
// $('#to_designs, #to_designs_nav').click(function() {
// 	$([ document.documentElement, document.body ]).animate(
// 		{
// 			scrollTop: $('#designs').offset().top
// 		},
// 		800
// 	);
// });
// $('#to_contact_me_btn, #to_contact_nav').click(function() {
// 	$([ document.documentElement, document.body ]).animate(
// 		{
// 			scrollTop: $('#contact_me').offset().top
// 		},
// 		800
// 	);
// });
// $('#to_templates,#to_templates_nav').click(function() {
// 	$([ document.documentElement, document.body ]).animate(
// 		{
// 			scrollTop: $('#presents').offset().top
// 		},
// 		800
// 	);
// });
// $('#view2Byte').click(function() {
// 	console.log('clicked');
// 	window.location = '../2ByteWare/view/index.html';
// });
// $('#viewMyHub').click(function() {
// 	console.log('clicked');
// 	window.location = '../../login_table/view/index.php';
// });
// $('#dyna_table').click(function() {
// 	console.log('clicked');
// 	window.location = '../../dynamic_table/view/index.html';
// });
// $('#unf_port').click(function() {
// 	console.log('clicked');
// 	window.location = '../../portfolio_old/view/index.php';
// });
// //PROJECT BUTTON
// $('#project1_btn, #project1_btn_res').click('tap', function() {
// 	console.log('Test');
// 	$(
// 		'.project2_desc, .project3_desc, .project4_desc, .project5_desc, .project6_desc, .project7_desc, .project8_desc'
// 	).fadeOut(0, function() {
// 		// this starts when the fadeOut is finished
// 		$('.project1_desc').fadeIn(500);
// 	});
// });
// $('#project2_btn, #project2_btn_res').click('tap', function() {
// 	console.log('Test');
// 	$(
// 		'.project1_desc, .project3_desc, .project4_desc, .project5_desc, .project6_desc, .project7_desc, .project8_desc'
// 	).fadeOut(0, function() {
// 		// this starts when the fadeOut is finished
// 		$('.project2_desc').fadeIn(500);
// 	});
// });
// $('#project3_btn, #project3_btn_res').click(function() {
// 	console.log('Test');
// 	$(
// 		'.project1_desc, .project2_desc, .project4_desc, .project5_desc, .project6_desc, .project7_desc, .project8_desc'
// 	).fadeOut(0, function() {
// 		// this starts when the fadeOut is finished
// 		$('.project3_desc').fadeIn(500);
// 	});
// });
// $('#project4_btn, #project4_btn_res').click(function() {
// 	$(
// 		'.project1_desc, .project2_desc, .project3_desc, .project5_desc, .project6_desc, .project7_desc, .project8_desc'
// 	).fadeOut(0, function() {
// 		// this starts when the fadeOut is finished
// 		$('.project4_desc').fadeIn(500);
// 	});
// });
// $('#project5_btn, #project5_btn_res').click(function() {
// 	$(
// 		'.project1_desc, .project2_desc, .project3_desc, .project4_desc, .project6_desc, .project7_desc, .project8_desc'
// 	).fadeOut(0, function() {
// 		// this starts when the fadeOut is finished
// 		$('.project5_desc').fadeIn(500);
// 	});
// });
// $('#project6_btn, #project6_btn_res').click(function() {
// 	$(
// 		'.project1_desc, .project2_desc, .project3_desc, .project4_desc, .project5_desc, .project7_desc, .project8_desc'
// 	).fadeOut(0, function() {
// 		// this starts when the fadeOut is finished
// 		$('.project6_desc').fadeIn(500);
// 	});
// });
// $('#project7_btn, #project7_btn_res').click(function() {
// 	$(
// 		'.project1_desc, .project2_desc, .project3_desc, .project4_desc, .project5_desc, .project6_desc, .project8_desc'
// 	).fadeOut(0, function() {
// 		// this starts when the fadeOut is finished
// 		$('.project7_desc').fadeIn(500);
// 	});
// });
// $('#project8_btn, #project8_btn_res').click(function() {
// 	$(
// 		'.project1_desc, .project2_desc, .project3_desc, .project4_desc, .project5_desc, .project6_desc, .project7_desc'
// 	).fadeOut(0, function() {
// 		// this starts when the fadeOut is finished
// 		$('.project8_desc').fadeIn(500);
// 	});
// });


