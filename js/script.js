
let toggleNavStatus = true;

function toggleNav(){

	let getSidebar = document.querySelector(".nav-sidebar");
	let getSidebarUl = document.querySelector(".nav-sidebar ul");
	let getSidebarTitle = document.querySelector(".nav-sidebar span");
	let getSidebarLinks = document.querySelector(".nav-sidebar li");
	let getSection = document.querySelector(".container");

	if (toggleNavStatus === false)
	{
		getSidebarUl.style.visibility = "visible";
		getSidebar.style.width = "200px";
		getSidebar.style.borderTopRightRadius = "20px";
		getSidebarTitle.style.opacity = "0.5";
		getSection.style.marginLeft = "230px";

		let arrayLength = getSidebarLinks.length;
		for (var i = 0; i < arrayLength; i++) {
			getSidebarLinks[i].style.opacity = "1";
		}
		toggleNavStatus = true;
	}
	else if (toggleNavStatus === true)
	{
		getSidebarUl.style.visibility = "hidden";
		getSidebar.style.width = "50px";
		getSidebar.style.borderTopRightRadius = "0";
		getSidebarTitle.style.opacity = "0.5";
		getSection.style.marginLeft = "100px";

		let arrayLength = getSidebarLinks.length;
		for (var i = 0; i < arrayLength; i++) {
			getSidebarLinks[i].style.opacity = "0";
		}
		toggleNavStatus = false;
	}

}

