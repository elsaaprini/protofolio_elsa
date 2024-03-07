// toggle icon navbar//
Let menuIcon = document.querySelector('#menu-icon');
Let navbar = document.querySelector(".navbar");

menuIcon.onclick= () => {
	menuIcon.classList.toggle('bx-x');
	navbar.classList.toggle('active');
}

// scroll sections//
Let sections=document.querySelectorAll('section');
Let navlinks = document.querySelectorAll('header nav a');

window.onscroll = () => {
	sections.forEach(sec => {
		Let top = window.scrollY;
		Let offset = sec.offsetTop -100;
		Let height = sec.offsetHeight;
		Let id = sec.getAttribute('id');

		if(top >= offset && top < offset + height) {
			// octive navbar Links
			navLinks.forEach(links => {
				links.classList.remove('active');
				document.querySelector('header nav a[href'=' + id + '']').classList.add('active');
			}); 
			//active sections for animation on scroll
			sec.classList.add('show-animate');
		}
		//if wantto use animation that repeats on scroll use this
		  	else{
				sec.classList.remove('show-animate');
		  	}
		 });

	//sticky header
	Let header = document.querySelector('header');

	header.classList.toggle('sticky', window.scrollY > 100);

	// remove toggle icon and when click navbar Links (scroll)
	menuIcon.classList.remove('bx-x');
	navbar.classList.remove('active');
}