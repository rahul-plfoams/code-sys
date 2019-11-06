statuschange=()=>{
			document.onclick = (e) => {
				var currentStat = e.target.parentNode.children[4].innerHTML;
				var mobile = e.target.parentNode.children[1].innerHTML;
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function () {
					if (this.readyState == 4 && this.status == 200) {

						e.target.parentNode.children[4].innerHTML = this.responseText;
					}
				};
				xmlhttp.open("GET", "chkstatus.php?q=" + currentStat + "&mobile=" + mobile, true);
				xmlhttp.send();
			}
		}