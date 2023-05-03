
var stars1 = document.getElementById('product-rating1');
var stars2 = document.getElementById('product-rating2');
var stars3 = document.getElementById('product-rating3');
var popupStars = document.getElementById('popup-star-rating');
const ratingStars = popupStars.querySelectorAll(".star");
const allStars1 = stars1.querySelectorAll(".star");
const allStars2 = stars2.querySelectorAll(".star");
const allStars3 = stars3.querySelectorAll(".star");

function rating(starGroup,productNum,productChange){
	let productIconList = ["productIcon1","productIcon2","productIcon3"];
	let productNameList = ["productName1","productName2","productName3"];
	let productCatList = ["productCategory1","productCategory2","productCategory3"];
	let productTagAList = ["productTags1A","productTags2A","productTags3A"];
	let productTagBList = ["productTags1B","productTags2B","productTags3B"];

	console.log(document.getElementById(productTagAList[2]).textContent);
	starGroup.forEach((star, i) =>{
		star.onclick = function(){

			var current_star_level = i + 1;

			starGroup.forEach((star,j)=>{
				if(current_star_level >= j+1){
					star.innerHTML = '&#9733';
				}else{
					star.innerHTML = '&#9734';
				}
			})
			document.querySelector(".popup").style.display = "flex";
			if (productChange == 1){
				document.getElementById("popup-productImg").src = document.getElementById(productIconList[productNum]).getAttribute("src");
				document.getElementById("popup-productName").innerHTML = document.getElementById(productNameList[productNum]).textContent;
				document.getElementById("popup-productCategory").innerHTML = document.getElementById(productCatList[productNum]).textContent;
				document.getElementById("popup-productTags1").innerHTML = document.getElementById(productTagAList[productNum]).textContent;
				document.getElementById("popup-productTags2").innerHTML = document.getElementById(productTagBList[productNum]).textContent;
			}
		}
	})
}

rating(allStars1,0,1);
rating(allStars2,1,1);
rating(allStars3,2,1);
rating(ratingStars,0,0);




// document.getElementById('star').addEventListener("click", function(){
// 	document.querySelector(".popup").style.display = "flex";
// })

document.getElementById('close-button').addEventListener("click", function(){
	document.querySelector(".popup").style.display = "none";
	const tananStars = document.querySelectorAll(".star");
	for (let star of tananStars){
		star.innerHTML = '&#9734';
	}
})
