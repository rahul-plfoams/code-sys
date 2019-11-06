// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
// var btn = document.querySelectorAll("[data-p_in]");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
function openModal(e) {
    var row = e.parentElement.parentElement;
    var data = {
        name: row.children[1].innerText,
        rate: row.children[4].innerText,
        remark: row.children[7].innerText,
        p_in: e.getAttribute('data-p_in')
    }
    document.querySelector("#editProductName").innerText = data.name;
    document.querySelector("#editProductRate").setAttribute("placeholder", data.rate);
    document.querySelector("#editProductRate").setAttribute("data-p_in", data.p_in);
    document.querySelector("#editProductRemark").setAttribute("placeholder", data.remark);
    modal.style.display = "block";
}


//when editing vendor product details
function editVendorProduct(e) {
    var inData = {
        rate: e.children[1].value,
        remark: e.children[3].value,
        p_in: e.children[1].getAttribute("data-p_in"),
    }
    console.log(inData);
    modal.style.display = "none";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}