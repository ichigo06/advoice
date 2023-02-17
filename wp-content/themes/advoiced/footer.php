<footer class="footer">
        
</footer>
<script src="<?php echo get_stylesheet_directory_uri() ?>/assets/js/wow.min.js"></script>
<script>new WOW().init();
</script>
<script>
		$(window).scroll(function(event) {
			const scrollLeft = $(window).scrollLeft();
			const scrollTop = $(window).scrollTop();
			if(scrollTop > 83) {
				$("#header").addClass("active-submenu");
				$("#header").removeClass("active-submenu-open");
			} else {
				$("#header").removeClass("active-submenu");
				$("#header").addClass("active-submenu-open");
			}
			console.log("Vertical "+scrollTop);
			console.log("Horizontal "+scrollLeft);
		});
</script>
<script>
	let parent = document.querySelector(".header__transparent");
	let header = document.querySelector("#header");
	console.log(parent);
	parent.addEventListener('mouseover', function() {
		console.log("hola")
		header.classList.remove("active-submenu");
		header.classList.add("active-submenu-open");
	})
	// parent.addEventListener('mouseout', function() {
	// 	header.classList.add("active-submenu");
	// 	header.classList.remove("active-submenu-open");
	// })
</script>
<script>
	var swiperPartners = new Swiper(".swiper-partners", {
      // Optional parameters
	  	slidesPerView: 6,
		loop: true,
		speed: 600,
		parallax: true,
		// If we need pagination
		navigation: {
			nextEl: '.next-partners',
			prevEl: '.prev-partners',
		},
    });
</script>
<script>
	let buttonMenu = document.querySelectorAll('#primary-menu li');
	buttonMenu.forEach((item) => {
		item.addEventListener("click" , filterButton)
	})
	function filterButton() {
		buttonMenu.forEach((item) => {
			item.classList.remove("item-image-active");
		})
		this.classList.add("item-image-active");
	}
</script>
<script>
	const swiper = new Swiper('.swiper', {
	// Optional parameters
	speed: 600,
	parallax: true,
	// If we need pagination
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},

	// Navigation arrows
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},

	});
</script>
<script>
	const swiper2 = new Swiper('.card-service-slider', {
	// Optional parameters
	slidesPerView: 4,
	spaceBetween: 30,
	centeredSlides: true,
	speed: 600,
	parallax: true,
	navigation: {
		nextEl: '.next-service',
		prevEl: '.prev-service',
	},
	// If we need pagination
	});
</script>
<script>
	var swiperSuccess = new Swiper(".success-slider", {
      // Optional parameters
	  	slidesPerView: 1,
		loop: true,
		speed: 600,
		parallax: true,
		// If we need pagination
		pagination: {
			el: '.swiper-pagination-success',
			clickable: true,
		},
		navigation: {
		nextEl: '.next-success',
		prevEl: '.prev-success',
		},
    });
</script>
<?php wp_footer(); ?>
</body>
</html>