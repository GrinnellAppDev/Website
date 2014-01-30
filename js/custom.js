var onceThru = false;
var pathname = window.location.pathname;
var devs = false;
var desi = false;
var uxd = false;
var comm = false;
$(document).ready(function() {
	
/*
	var questions = ["How many windows are there in north campus?", "Why do the fire alarms in Haines trigger the fire alarms in the whole south campus?", "Do you know Betty, the dining hall lady?", "If you had 13 colorful marbles, which one would you give to Raynard Kington?", "Some other random shit..."];
	
	var num = Math.floor(Math.random() * questions.length);
	
	var selectedQuestion = questions[num];
	
	$("label[for='q3']").text(selectedQuestion);
*/
	
	$("input:checkbox").click(function() {
    if ($(this).is(":checked")) {
        var group = "input:checkbox[name='" + $(this).attr("name") + "']";
        $(group).prop("checked", false);
        $(this).prop("checked", true);
    } else {
        $(this).prop("checked", false);
    }
});

	var checkedValue = $('.checkbox:checked').val();
	
	$(window).scroll($.debounce(500, true, function() {
		$(".navbar-inverse").fadeTo("slow", 0.8);
	}));
	$(window).scroll($.debounce(500, function() {
		$(".navbar-inverse").fadeTo("slow", 1);
	}));
	// scroll to certain link - CSS Tricks
	$(function() {
		$('a[href*=#]:not([href=#])').click(function() {
			if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
				if (target.length) {
					$('html,body').animate({
						scrollTop: target.offset().top
					}, 1000);
					return false;
				}
			}
		});
	});
	
	if (pathname == "/appDev/members.php") {
		$("a[href='members.php']").click(function() {
			$("html, body").animate({
				scrollTop: 0
			}, "slow");
			return false;
		});
	}
	
	if (pathname == "/appDev/portfolio.php") {
		$("a[href='portfolio.php']").click(function() {
			$("html, body").animate({
				scrollTop: 0
			}, "slow");
			return false;
		});
	}
	
	$(".maijidBox").mouseenter(function() {
		$("#maijid1").addClass("animated pulse");
	});

	
	$("#colin1").mouseover(function() {
		$("#colin1").addClass("animated pulse");
	});
	
	
	$("#patrick1").mouseover(function() {
		$("#patrick1").addClass("animated pulse");
	});
	
	$("#lea1").mouseover(function() {
		$("#lea1").addClass("animated pulse");
	});
	
	$("#tiffany1").mouseover(function() {
		$("#tiffany1").addClass("animated pulse");
	});
	
	
	$("#danielG1").mouseover(function() {
		$("#danielG1").addClass("animated pulse");
	});
	
	
	$("#danielT1").mouseover(function() {
		$("#danielT1").addClass("animated pulse");
	});
	
	
	$("#spencer1").mouseover(function() {
		$("#spencer1").addClass("animated pulse");
	});
	
	
	$("#devs").click( function() {

		if (desi == true || devs == true || uxd == true || comm == true) {
			$(".jobRole").empty();
		}
	
		if (($(".jobRole").is(':empty')) || (devs == false)) { 
			$(".jobRole").append("<h3 class='redTitle'> Developer Trainee </h2> We’re looking for enthusiastic developers to help us sustain the group and move it forward in years to come. Trainees are assigned a mentor and partake in a semester-long course that teaches how to design and develop mobile applications on either the iOS or the Android platform. In addition to regular Appdev meetings, trainees will meet with their mentors twice a week to discuss progress and ask questions. The end of the course involves a final group project of the trainees’ choice. Upon successful completion, trainees will be promoted to Developer positions. </p> <p><em>What we’re looking for:</em><ul><li>some experience with coding</li> <li>enthusiasm and passion for learning</li> <li>the ability to manage your time well (commitment of circa 8 hours per week)</li> <li>self-starter mindset</li></ul></p> <p><em>What we're offering:</em> <ul><li>awesome resume addition</li><li>projects to call your own</li><li>access to over $5K+ in educational and development material</li><li>a supportive community</li><li>apersonalized one-on-one mentorship</li></ul></p>");
		}
		else {
		$(".jobRole").empty();
		}
		devs = true;
		desi = false;
		uxd = false;
		comm = false;
	});
	
		$("#desi").click( function() {
		if (desi == true || devs == true || uxd == true || comm == true) {
			$(".jobRole").empty();
		}
	
		if (($(".jobRole").is(':empty')) || (desi == false)) { 
			$(".jobRole").append("<h3 class='redTitle'> UX/Graphic Designer </h3> <p> We are looking for designers to help us build beautiful apps and craft captivating user experiences. We want users to easily and intuitively utilize our apps to their maximum potential. We want our apps to be useful, exciting, rich, self-evident, and simultaneously subtle, and we need your help!</p> <p>We’re looking for people with previous experience in visual design and a familiarity with graphic design software (i.e Adobe CS6, GIMP, Corel, Sketch…), who knows what ‘svg’ stands for and does not back down from a creative challenge. Our designers will participate in all aspects of the product development process and collaborate closely with the Product and Engineering Teams throughout the entire project lifecycle. </p> <p><em>What we’re looking for:</em><ul><li>great sense of design</li> <li>experience with graphic design software</li><li>interest in human computer interaction</li><li>passion for learning </li></ul></p> <p><em>What we’re offering:</em><ul><li>$5K+ in educational resources available in both design and development</li><li>access to professional graphic design software</li><li>a chance to work on tangible projects</li><li>an awesome resume addition</li><li>a supportive community</li></ul></p>");
		}
		else {
		$(".jobRole").empty();
		}
		devs = false;
		desi = true;
		uxd = false;
		comm = false;
	});
	
		$("#uxd").click( function() {
		if (desi == true || devs == true || uxd == true || comm == true) {
			$(".jobRole").empty();
		}
		if (($(".jobRole").is(':empty')) || (uxd == false)) { 
			$(".jobRole").append("<h3 class='redTitle'> Financial Officer </h3><p> The Financial Officer will manage Appdev’s accounts payable and receivable, including payroll and and all other financial matters. In addition, the financial officer with consult with preparing budgets, implementing financial procedures, and working with iOS and Android team leaders. The financial officer is also responsible for future investor relations, and alumni outreach.</p> <p><em>What we're looking for:</p></em><ul><li>good time management skills</li><li>a proactive and driven person with good writing skills, and a passion for technology</li><li>experience with managing finances</li><li>3-4 hour time commitment each week</li></ul></p><p> <em>What we're offering:</em><ul><li>get experience working with Grinnell College investors</li><li>get to know involved alumni and trustees</li><li>an awesome resume addition</li><li>a supportive community</li></ul></p>");
		}
		else {
		$(".jobRole").empty();
		}
		devs = false;
		desi = false;
		uxd = true;
		comm = false;
	});
	
		$("#comm").click( function() {
		if (desi == true || devs == true || comm == true || uxd == true) {
			$(".jobRole").empty();
		}
		if (($(".jobRole").is(':empty')) || (comm == false)) { 
			$(".jobRole").append("<h3 class='redTitle'> Community builder </h3><p> We’re looking for a Community Developer who will help us engage and expand our community. You will become an advocate for Grinnell Appdev in social media spaces, engaging in dialogues and answering questions. You will implement a proactive strategy for capturing customer online reviews. You will monitor the group’s online perceptions, and study the impact that our applications may have on society at large. </p><p><em>What we're looking for:</em><ul><li>a proactive person with good writing skills</li><li>a desire to work in marketing</li><li>experience with social media</li><li>3-4 hour time commitment each week</li></ul><p><em>What we're offering:</em><ul><li>hands on experience with professional outreach on several social media platforms (facebook, twitter, …)</li><li>the ability to connect with users and collect feedback to help decide the future direction of Grinnell AppDev</li><li>an opportunity to grow a community around our apps</li><li>valuable experience in media communication</li><li>an awesome bullet point to your resume</li><li>a supportive community</li></ul></p>");
		}
		else {
		$(".jobRole").empty();
		}
		devs = false;
		desi = false;
		uxd = false;
		comm = true;
	});
	
	
	$('#events').waypoint(function() {
		document.getElementById("events1").style.display = "inline";
		$("#events1").addClass("animated fadeInRight");
		document.getElementById("events2").style.display = "inline";
		$("#events2").addClass("animated fadeInDown");
	}, { offset: '40%' });
	
	$('#kdic').waypoint(function() {
		document.getElementById("kdic1").style.display = "inline";
		$("#kdic1").addClass("animated fadeInRight");
		document.getElementById("kdic2").style.display = "inline";
		$("#kdic2").addClass("animated fadeInDown");
	}, { offset: '40%' });
	
	$('#sandb').waypoint(function() {
		document.getElementById("sandb1").style.display = "inline";
		$("#sandb1").addClass("animated fadeInRight");
		document.getElementById("sandb2").style.display = "inline";
		$("#sandb2").addClass("animated fadeInDown");
	}, { offset: '40%' });
	
		$('#gl').waypoint(function() {
		document.getElementById("gl1").style.display = "inline";
		$("#gl1").addClass("animated fadeInRight");
		document.getElementById("gl2").style.display = "inline";
		$("#gl2").addClass("animated fadeInDown");
	}, { offset: '40%' });
});