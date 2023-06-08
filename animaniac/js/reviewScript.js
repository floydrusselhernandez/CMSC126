var stars = document.querySelectorAll('.popup-star a');
console.log(stars);

var ratingLevel;

function getRating(productId){
	stars.forEach((item,index1) => {
		item.addEventListener('click', () => {

			var current_star_level = index1 + 1;
			current_star_level = (current_star_level  % 5 == 0) ? 5 : (current_star_level  % 5);
			console.log(current_star_level);

			const rating = document.getElementById("rating_input-" + productId);
			console.log(rating);
			rating.value = current_star_level;

			stars.forEach((star, index2)=>{
				index1 >= index2 ? star.classList.add('active') : star.classList.remove('active')
			})
		})
	})
}


function openPopup(productId) {
	var popup = document.getElementById("popup-" + productId);
	popup.style.display = "flex";
  }

function closePopup(productId){
	var popup = document.getElementById("popup-" + productId);
	popup.style.display = "none";
}


// document.getElementById('star').addEventListener("click", function(){
// 	document.querySelector(".popup").style.display = "flex";
// })

// document.getElementById('close-button').addEventListener("click", function(){
// 	document.querySelector(".popup").style.display = "none";
// 	const tananStars = document.querySelectorAll(".star");
// 	for (let star of tananStars){
// 		star.innerHTML = '&#9734';
// 	}
// })
