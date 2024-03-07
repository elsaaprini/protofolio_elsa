<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="viewport"content="width=device-width, initial-scale=1.0">
	<title>Complete Responsive Personal Portfolio website HTML CSS Javascript </title>

	<link rel="stylesheet" href="style.css">
		<!-- box icons -->
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

		<header class="header">
			<a href="#" class="logo">Elsa.</a>

			<nav class="navbar">
				<a href="#home" class="active">Home</a>
				<a href="#about">About</a>
				<a href="#education">Education</a>
				<a href="#skills">Skills</a>
				<a href="#contact">Contact</a>

			</nav>
		</header>

		<section class="home">
			<div class="home-content">
				<h1>Hi, I'm Elsa Apriani</h1>
				<h3>Fronted Developer</h3>
				<p>You can never quit. 
					Winners never quit, and quitters never win
				</p>
				<div class="btn-box">
					<a href="#">Hire Me</a>
					<a href="#">Let's Talk</a>
				</div>
			</div>

			<div class="home-sci">
				<a href="https://wa.me/message/6KT4FD3DC2SPB1"><i class='bx bxl-whatsapp'></i></a>
			</div>

			
			<span class="home-imgHover"></span>
		</section>

		<!-- about section design-->
		<section class="about" id="about">
		<h2 class="heading">About <span>Me</span></h2>

		<div class="about-img">
				<img src="hi.jpeg" alt="">
				<span class="circle-spin"></span>
			</div>

				<div class="about-content">
				<h3>Fronted Developer</h3>
				<p>You can never quit. 
					Winners never quit, and quitters never win
				</p>

				<div class="btn-box btns">
					<a href="#" class="btn">Read More</a>
				</div>
			</div>
		</section>

		<!-- education section design -->
	<section class="education" id="education">
	<h2 class="heading">My <span>Journey</span></h2>

	<div class="education-row">
		<div class="education-column">
			<h3 class="title">Education</h3>

		<div class="education-box">
			<div class="education-content">
				<div class="content">
					<div class="year"><i class='bx bxs-calendar'></i>2010-2016</div>
					<h3>sd</h3>
					<p>Binakarya 1</p>
				</div>
			</div>

			<div class="education-content">
			<div class="content">
					<div class="year"><i class='bx bxs-calendar'></i>2016-2020</div>
					<h3>SMP</h3>
					<p>Banyursmi</p>
				</div>
			</div>

		<div class="education-box">
			<div class="education-content">
			<div class="content">
					<div class="year"><i class='bx bxs-calendar'></i>2022-2024</div>
					<h3>SMK</h3>
					<p>Alghifari</p>
				</div>
			</div>

		<div class="education-column">
			<h3 class="title">Experience</h3>

			<div class="education-box">
			<div class="education-content">
			<div class="content">
					<div class="year"><i class='bx bxs-calendar'></i>16-14-2022</div>
					<h3>PKL</h3>
					<p>Kecamatan banyuresmi</p>
				</div>
			</div>
		</div>
	</div>
</div>
	</section>

	<!--skills section design -->
	<section class="skills" id="skills">
		<h2 class="heading">My <span>Skills</span></h2>

		<div class="skills-row">
			<div class="skills-column">
				<h3 class="title">Coding Skills</h3>

					<div class="skills-box">
						<div class="skills-content">
							<div class="progress">
								<h3>HTML <span>78%</span></h3>
								<div class="bar"><span></span></div>
							</div>

							<div class="progress">
								<h3>PHP <span>75%</span></h3>
								<div class="bar"><span></span></div>
						</div>

						<div class="progress">
								<h3>NetBeans <span>77%</span></h3>
								<div class="bar"><span></span></div>
							</div>
						</div>
					</div>
				</div>

				<div class="skills-column">
				<h3 class="title">Peofessial Skills</h3>

					<div class="skills-box">
						<div class="skills-content">
							<div class="progress">
								<h3>Web Design <span>75%</span></h3>
								<div class="bar"><span></span></div>
							</div>

							<div class="progress">
								<h3>Web Development<span>75%</span></h3>
								<div class="bar"><span></span></div>
						</div>

						<div class="progress">
								<h3>Graphic Design<span>75%</span></h3>
								<div class="bar"><span></span></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- contact section design -->
		<section class="contact" id="contact">
			<h2 class="heading">Contact <span>Me!</span></h2>

			<form action="#">
				<div class="input-box">
					<div class="input-field">
						<input type="text" placeholder="Full Name " required>
						<span class="focus"></span>
					</div>
				<div class="input-field">
					<input type="text" placeholder="Email Address" required>
					<span class="focus"></span>
				</div>
			</div>

			<div class="input-box">
					<div class="input-field">
						<input type="number" placeholder="Mobile Number" required>
						<span class="focus"></span>
					</div>
				<div class="input-field">
					<input type="text" placeholder="Email Subject" required>
					<span class="focus"></span>
				</div>
			</div>

			<div class="textarea-field">
				<textarea name="" id="" cols="30" rows="10" placeholder="Your Message" required></textarea>
				<span class="focus"></span>
			</div>

			<div class="btn-box btns">
				<button type="submit" class="btn">Submit</button>
			</div>
		</form>
	</section>

	<!-- footer design -->
	<footer class="footer">
		<div class="footer-text">
			<p>Copyright &copy; 2023 by Elsa Apriani| All Rights Reserved.</p>
		</div>

		<div class="footer-iconTop">
			<a href="#"><i class='bx bx-up-arrow-alt'></i></a>
		</div>
	</footer>


	<script type="js/script.js"></script>
</body>

</html>












