function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    }
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
        }
    }
    xmlhttp.open("GET", "getuser.php?q=" + str, true);
    xmlhttp.send();
}




// Add active class to the current button (highlight it)
// var header = document.getElementById("myDIV");
// var btns = header.getElementsByClassName("btnArrow");
// for (var i = 0; i < btns.length; i++) {
//     btns[i].addEventListener("click", function() {
//         var current = document.getElementsByClassName("active");
//         current[0].className = current[0].className.replace(" active", "");
//         this.className += " active";
//     });
// }
// ajax for calender input
document.querySelector("#calendar").onsubmit = (e) => {
    e.preventDefault();
    let fromDate = document.querySelector("[name='fromDate']").value;
    let toDate = document.querySelector("[name='toDate']").value;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {

            document.querySelector("#txtHint").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "calendar.php?fromDate=" + fromDate + "&toDate=" + toDate, true);
    xmlhttp.send();

}

//show overview tab by Default
$(".tabcontent").hide();
//hide content
$(".showSingle").click(function() {
    $(".tabcontent").hide();
    if ($(this).attr("target") === "products") {
        $("#" + $(this).attr("target")).show();
        $(".btn-grp").hide();
    } else {
        $(".btn-grp").show();
        $("#" + $(this).attr("target")).show();
    }
});

function showResult(str) {
    if (str.length == 0) {
        document.getElementById("livesearch").innerHTML = "";
        document.getElementById("livesearch").style.border = "0px";
        return;
    }
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("livesearch").innerHTML = this.responseText;
            // document.getElementById("livesearch").style.border = "1px solid #A5ACB2";
        }
    };
    xmlhttp.open("GET", "../ajax/listvendorproducts.php?q=" + str, true);
    xmlhttp.send();
}

//add product
function add(val) {
    let p_in = val.getAttribute("data-val");
    document.querySelector(".searching").value = "";
    document.querySelector("#livesearch").innerHTML = "";
    getProduct(p_in);

}

//get product details
function getProduct(p_in) {
    let sr = document.querySelector("#ordertable").childElementCount;
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if (document.querySelector("#ordertable").childElementCount == 0) {
                document.getElementById("ordertable").innerHTML = this.responseText;
            } else {
                document
                    .getElementById("ordertable")
                    .lastElementChild.insertAdjacentHTML("afterend", this.responseText);
            }
        }
    };
    xmlhttp.open(
        "GET",
        "../ajax/addvendorproductline.php?p_in=" + p_in + "&sr=" + sr,
        true
    );
    xmlhttp.send();
}