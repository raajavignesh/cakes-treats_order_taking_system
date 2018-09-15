
function grabValues() {
    var item = document.getElementById('item').value
    var table = document.getElementById('table').value
    var quantity = document.getElementById('quantity').value
    addOrderItem(table,item,quantity)
}

function addOrderItem(table,item,quantity) {
        url = `http://localhost/cakes/restapi/order/additem.php?table=${table}&item=${item}&quantity=${quantity}`
        console.log(url)
        fetch(url).
        then(data => data.json()).
        then(response => {
            console.log(response)
        })
        .catch(error => console.log(error))
    
}


function placeOrder() {
    url = `http://localhost/cakes/restapi/order/placeorder.php`
    console.log(url)
    fetch(url).
    then(data => data.json()).
    then(response => {
        console.log(response)
    })
    .catch(error => console.log(error))
}


function deleteOrderItem(itemId) {
    url = `http://localhost/cakes/restapi/order/deleteitem.php?tid=${itemId}`
    console.log(url)
    fetch(url).
    then(data => data.json()).
    then(response => {
        console.log(response)
    })
    .catch(error => console.log(error))
}
