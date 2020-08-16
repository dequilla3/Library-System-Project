
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


function autocomplete(inp, arr) {

  var currentFocus;

  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;

      closeAllLists();

      if (!val) { return false;}
      currentFocus = -1;

      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");

      this.parentNode.appendChild(a);

      for (i = 0; i < arr.length; i++) {

        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {

          b = document.createElement("DIV");

          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);

          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";

          b.addEventListener("click", function(e) {

              inp.value = this.getElementsByTagName("input")[0].value;

              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });

  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {

        currentFocus++;

        addActive(x);
      } else if (e.keyCode == 38) { //up

        currentFocus--;
       
        addActive(x);
      } else if (e.keyCode == 13) {

        if (currentFocus > -1) {

          if (x) x[currentFocus].click();
        }
      }
  });

  function addActive(x) {

    if (!x) return false;
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);

    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {

    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {

    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }

  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}


var ajax = new XMLHttpRequest();
var method = "GET";
var asy = true;
var url = "Model/php-js.inc.model.php";

ajax.open(method, url, asy );

ajax.send();

ajax.onreadystatechange = function()
{
	if (this.readyState == 4 && this.status == 200)
	{
		data = JSON.parse(this.responseText);
		console.log(data);
		autocomplete(document.getElementById("myInput"), data);
	}
}




