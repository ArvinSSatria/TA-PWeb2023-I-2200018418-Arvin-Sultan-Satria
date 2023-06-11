const images = document.querySelectorAll(".portfolio img");

images.forEach(img => {
	img.addEventListener("mouseover", () => {
		img.style.transform = "scale(1.1)";
		img.style.transition = "transform 0.5s";
	});

	img.addEventListener("mouseout", () => {
		img.style.transform = "scale(1)";
		img.style.transition = "transform 0.5s";
	});
});
