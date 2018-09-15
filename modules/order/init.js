
function buildOrderDom(response) {
    var output = ''
    const orderItemsRef = document.getElementById('orderitems')
    const orderItems = response.orderitem
    orderItems.forEach(element => {
        output += `<div class="row text-center">
                        <div class="col-2">${element.table}</div>
                        <div class="col-6">${element.item}</div>
                        <div class="col-2">${element.quantity}</div>
                        <div class="col-2" onclick="deleteOrderItem(${element.tid})" id="${element.tid}"><i class="fa fa-trash text-danger"></i></div>
                    </div>
                    <hr>`
    });
    orderItemsRef.innerHTML = output
}

function fetchOrderItems() {
    url = `http://localhost/cakes/restapi/order/vieworderitem.php`
    fetch(url).
    then(data => data.json()).
    then(response => {
        console.log(response)
        buildOrderDom(response)
    })
    .catch(error => console.log(error))
}


function buildItemDom(response) {
    const itemRef = document.getElementById('item')
    var output = '<option value = "0" selected="selected" aria-required="true">select an item</option>'
    const items = response.item
    items.forEach(element => {
        output += `<option value = "${element.itemname}">${element.itemname}</option>`
    });
    itemRef.innerHTML = output
}

function getItems() {
    url="http://localhost/cakes/restapi/items/fetchitems.php"
    fetch(url).
    then(data => data.json()).
    then(response => {
        console.log(response)
        buildItemDom(response)
    })
    .catch(error => console.log(error))
}

$(document).ready(function() {
    getItems()
    fetchOrderItems()
})
