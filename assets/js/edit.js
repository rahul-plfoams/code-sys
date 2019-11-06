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
    xmlhttp.open("GET", "../ajax/listproducts.php?q=" + str, true);
    xmlhttp.send();
}

function add(val) {
    let id = val.getAttribute("data-val");
    getProduct(id);
    document.querySelector(".searching").value = "";
}

function editVendorProduct(e) {
    let row = e.parentElement.parentElement;
    if (e.innerText == "Edit") {
        let data = {
            rate: row.children[4].innerText,
            remark: row.children[7].innerText,
            p_in: e.getAttribute("data-p_in")
        };
        row.children[4].innerHTML =
            "<input class='form-control' type='number' placeholder='" + data.rate + "'>";
        row.children[7].innerHTML =
            "<textarea class='form-control' type='text' placeholder='" + data.remark + "'></textarea>";
        console.log(data);
        e.innerText = "Save";
        e.setAttribute("onclick", "saveVendorProduct(this)");
    }
}

function saveVendorProduct(e) {
    let row = e.parentElement.parentElement;
    let inData = {
        sr: row.children[0].innerText,
        rate: row.children[4].children[0].value,
        remark: row.children[7].children[0].value,
        p_in: e.getAttribute("data-p_in")
    };
    console.log(inData);
    e.innerText = "Edit";
    storeVendorData = new XMLHttpRequest();
    storeVendorData.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            row.innerHTML = this.responseText;
        }
    };
    storeVendorData.open(
        "GET",
        "../ajax/updateproductline.php?sr=" +
        inData.sr +
        "&rate=" +
        inData.rate +
        "&remark=" +
        inData.remark +
        "&p_in=" +
        inData.p_in,
        true
    );
    storeVendorData.send();
}

function getProduct(id) {
    let sr = document.querySelector("#showProduct").childElementCount;
    xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if (document.querySelector("#showProduct").childElementCount == 0) {
                document.getElementById("showProduct").innerHTML = this.responseText;
            } else {
                document
                    .getElementById("showProduct")
                    .lastElementChild.insertAdjacentHTML("afterend", this.responseText);
            }
        }
    };
    xmlhttp.open(
        "GET",
        "../ajax/addproductline.php?id=" + id + "&sr=" + sr,
        true
    );
    xmlhttp.send();
}

$("#frm1 input:text").prop("readonly", true);
$("input.searching").attr("readonly", false);
(function($) {
    $.fn.toggleReadonly = function() {
        return this.each(function() {
            var $this = $(this);
            if ($this.attr("readonly")) $this.removeAttr("readonly");
            else $this.attr("readonly", "readonly");
        });
    };
})(jQuery);
$(function() {
    $("#toggleEdit").click(function() {
        $("#frm1 input:text").toggleReadonly();
        $("[type='submit']").removeAttr("disabled");
    });
});

//show overview tab by Default
$(".tabcontent").hide();
$("#overview").show();
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

// $(document).ready(() => {
//     setTimeout(() => {
//         $(".msg").style.display = "none";
//     }, 3000);
// });

// var header = document.getElementById("myDIV");
// var btns = header.getElementsByClassName("btnArrow");
// for (var i = 0; i < btns.length; i++) {
//     btns[i].addEventListener("click", function() {
//         var current = document.getElementsByClassName("active");
//         current[0].className = current[0].className.replace(" active", "");
//         this.className += " active";
//     });
// }