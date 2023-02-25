$(document).ready(function () {
//script for add and delete button functionality
$("#add-product-btn").on("click", function() {
    location.href = "addProduct.php";
})

var deleteArray = [];

//when an element is checked, the following code returns the sku property corresponding to that element
$('#delete-product-btn').on("click", function() {
    checkBoxes = document.getElementsByClassName('delete-checkbox');
    Array.from(checkBoxes).forEach((element) => {
        if (element.checked) {
            parent = element.closest('div');
            skus = $(parent).children('p.sku');
            Array.from(skus).forEach((element) => {
                deleteSku = element.innerText;
                deleteArray.push(deleteSku);
            })
        }
    })
    var src = "index.php?delete=" + deleteArray;
    window.location.href = src;
});
});