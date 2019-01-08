

// header fixed
document.addEventListener('DOMContentLoaded', function () {
var items = document.getElementsByClassName('animacion');
document.addEventListener('scroll', function () {
	let pos = window.pageYOffset
	let menu = document.querySelector('.menu')
	if (pos > 5) {
		menu.classList.add('stiky')
	} else if (pos < 10) {
		menu.classList.remove('stiky')
	}
// items fadeIn	
	for (let i = 0; i < items.length; i++) {
		let topPx = items[i].getBoundingClientRect().top;
		// console.log(window.innerHeight);
		if (topPx < window.innerHeight - 80) {
			items[i].classList.add('on')
		}
	}
})
	portfolioItems()
	//
	function portfolioItems() {
		let items = document.getElementsByClassName('portfolio-item');
		if (screen.width > 800) {
			for (var i = 0; i < items.length; i++) {
				if (i % 2 != 0) { // index is odd
					items[i].classList.add('portfolio-item-2n');
				}
			}
			return 0
		}
	}
	// Svg hover
	const tagA = document.querySelectorAll(".work-exper-item svg") 		// take hovered element
	const arrayOfId = ['Homepage---Gilroy1', 'Homepage---Gilroy2', 'Homepage---Gilroy3', 'Homepage---Gilroy4', 'Gilroy5']
	const arrOfClass = ['gilroy', 'gilroy', 'gilroy', 'gilroy1', 'gilroy2']
	// add class by id of array's
	function hoverSvg(i) {
		tagA[i].addEventListener('mouseover', function () {
			document.getElementById(arrayOfId[i]).classList.add(arrOfClass[i]);
		})
	}
	// for each elements add and remove class on mouseover/out
	for (let i = 0; i < tagA.length; i++) {
		hoverSvg(i)
		tagA[i].addEventListener('mouseout', function () {
			document.getElementById(arrayOfId[i]).classList.remove(arrOfClass[i]);
		})
	}
})


	

