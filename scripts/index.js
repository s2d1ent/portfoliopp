var doc=document,
	wew=window;

var img=doc.querySelector(".proj__table-img"),
	imgtwo=doc.querySelector(".proj__table_two-img"),
	imgth=doc.getElementById("img");


img.addEventListener("mouseover",function () {
	this.style.transform="scale(1.2)";
})
img.addEventListener("mouseout",function () {
	this.style.transform="scale(1)";
})
imgtwo.addEventListener("mouseover",function () {
	this.style.transform="scale(1.2)";
})
imgtwo.addEventListener("mouseout",function () {
	this.style.transform="scale(1)";
})
imgth.addEventListener("mouseover",function () {
	this.style.transform="scale(1.2)";
})
imgth.addEventListener("mouseout",function () {
	this.style.transform="scale(1)";
})





