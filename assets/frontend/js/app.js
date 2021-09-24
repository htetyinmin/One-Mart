function displayProduct() {
    $.ajax({

        url: "./products.json",
        method: "GET",
        success: function(data) {

            var output = "";

            for(let i = 0; i < data.length; i++) {
    
                output += '<div class="col-md-4 col-lg-2 my-3">'
                + '<div class="card">'
                + '<div class="buy">'
                + '<button type="button" title="Add to wishlist">'
                + '<i class="far fa-heart"></i>'
                + '</button>'
                + ' </div>'
                + '<img src="./assets/frontend/img/product/' + data[i].productImg + '" class="card-img-top" alt="..." height="120">'
                + '<div class="card-body">'
                + '<h5 class="card-title">' + data[i].productName + '</h5>'
                + '<p class="card-text">' + data[i].productDec.substring(0, 30) + ' <a href="#">more...</a></p>'
                + '<div class="price">'
                    + '<span class="current_price">' + data[i].currentPrice.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + '&nbsp;MMK</span><br>'
                    + '<span class="old_price"><del>' + data[i].oldPrice.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + '&nbsp;MMK</del></span>'
                    + '</div>'
                + '</div>'
                + '<div class="card-footer order_btn">'
                + '<button type="button" data-id="' + data[i].id + '" data-title="' + data[i].productName + '" data-content="' + data[i].productDec + '" data-price="' + data[i].currentPrice + '" data-img="./assets/frontend/img/product/' + data[i].productImg + '"  class="btn btn-primary btn-sm btn-danger cart_btn click-cart" title="Add to cart" data-bs-toggle="modal" data-bs-target="#cartModal">'
                + '<i class="fa fa-cart-arrow-down"></i>'
                + '</button>'
                + '<button type="button" data-id="' + data[i].id + '" data-title="' + data[i].productName + '" data-content="' + data[i].productDec + '" data-price="' + data[i].currentPrice + '" data-img="./assets/frontend/img/product/' + data[i].productImg + '"  class="btn btn-primary btn-sm cart_btn" title="Order product">'
                + '<i class="fab fa-shopify">&nbsp;Order</i>'
                + '</button>'
                + '</div>'
                + '</div>'
                + '</div>';

            }
            $("#my_product").append(output);


            /*-----select item-------*/
            $(".click-cart").click(function(e) {
                e.preventDefault();
                let productID = $(this).data('id');
                let productName = $(this).data('title');
                let productContent = $(this).data('content');
                let productPrice = $(this).data('price');
                let productImage = $(this).data('img');

                displayCart(productID, productName, productContent, productPrice, productImage, 1);


                //add to cart
                $('.btn_cart').click(function () {

                    let totalPrice = $('.total_price').text();
                    totalPrice = Number(totalPrice.replace(/,/g, ''));

                    let productQty = $('.counting').text();
                    productQty = Number(productQty);

                    alert(productQty);
                
                    shoppingCart.addItemToCart(productID, productName, productContent, totalPrice, productImage, productQty);

                });



            });


        }
    });
}

displayProduct();



var shoppingCart = (function() {
    carts = [];

    /*----constructor-----*/
    function Item(dataID, dataName, dataContent, dataPrice, dataImage, dataQty) {
        this.id = dataID;
        this.name = dataName;
        this.content = dataContent;
        this.price = dataPrice;
        this.image = dataImage;
        this.qty = dataQty;
    }


    /*----save cart-----*/
    function saveCart() {
        sessionStorage.setItem('shoppingCart', JSON.stringify(carts));
    }



    /*----load cart-----*/
    function loadCart() {
        carts = JSON.parse(sessionStorage.getItem('shoppingCart'));
    }


    /*----add item to cart-----*/
    var obj = {};
    obj.addItemToCart = function(id, name, content, price, image, qty) {

            for (var item in carts) {
                if(carts[item].id == id) {
                    carts[item].price = price;
                    carts[item].qty = qty;
                    saveCart();
                    return;
                }
            }

            var myItem = new Item(id, name, content, price, image, qty);
            carts.push(myItem);
            saveCart();

    }



    if(sessionStorage.getItem('shoppingCart') != null) {
        loadCart();
    }



    /*----list cart-----*/
    /*obj.productList = function() {

        var cartCopy = [];

        for(var i in carts) {

          item = carts[i];
          itemCopy = {};

          for(p in item) {
            itemCopy[p] = item[p];
            }   
  
        //   itemCopy.total = Number(item.price * item.count);
          cartCopy.push(itemCopy);
        }
        return cartCopy;
    }*/


    return obj;
})();


var count = 0;
function increment() {


    let counting = Number($('.counting').text());
    let qty = Number($('.counting').text());
    let currtPrice = $('.price .total_price').data('price');
    count = counting;
    let totalPrice = Number(currtPrice) * qty;

    count = + 1;

    $('.counting').html(count);
    $('.total_price').text(totalPrice.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
    // return true;
}

function decrement() {
    let counting = Number($('.counting').text());
    let currentPrice = Number($('.price .total_price').data('price'));
    let changePrice = Number($('.price .total_price').text().replace(/,/g, ''));
    count = counting;
    let totalPrice = changePrice - currentPrice;

    if(count < 1) {
        count = 0;
        alert(count);
        return false;
    }

    count = - 1;
    $('.counting').html(count);
    $('.total_price').text(totalPrice.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
}


function displayCart(id, name, content, price, image, count) {

    var modal = "";

    let productCart = {id, name, content, price, image, count};
    let cartArray = {};

    sessionStorage.setItem("productItem", JSON.stringify(productCart));
    cartArray = JSON.parse(sessionStorage.getItem("productItem"));

    modal = 
    "<div class='preview col-lg-6'>"           
        + "<div class='preview-pic tab-content'>"

        + "<div class='tab-pane active' id='pic-1'>"  
        + "<img src='" + cartArray.image + "' /></div>"
        + "<div class='tab-pane' id='pic-2'><img src='" + cartArray.image + "' /></div>"
        + "<div class='tab-pane' id='pic-3'><img src='" + cartArray.image + "' /></div>"
        + "<div class='tab-pane' id='pic-4'><img src='" + cartArray.image + "' /></div>"
        + "<div class='tab-pane' id='pic-5'><img src='" + cartArray.image + "' /></div>"
        + "</div>"

        + "<ul class='preview-thumbnail nav nav-tabs'>"
        + "<li class='active'><a data-bs-target='#pic-1' data-bs-toggle='tab'>"
            + "<img src='" + cartArray.image + "' /></a></li>"
        + "<li><a data-bs-target='#pic-2' data-bs-toggle='tab'>"
            + "<img src='" + cartArray.image + "' /></a></li>"
        + "<li><a data-bs-target='#pic-3' data-bs-toggle='tab'>"
            + "<img src='" + cartArray.image + "' /></a></li>"
        + "<li><a data-bs-target='#pic-4' data-bs-toggle='tab'>"
            + "<img src='" + cartArray.image + "' /></a></li>"
        + "<li><a data-bs-target='#pic-5' data-bs-toggle='tab'>"
            + "<img src='" + cartArray.image + "' /></a></li>"
        + "</ul>"
    + "</div>"

    + "<div class='details col-lg-6'>"
    + "<h3 class='product-title'>" + cartArray.name + "</h3>"
    + "<div class='rating'>"
        + "<div class='stars'>"
            + "<span class='fa fa-star checked'></span>"
            + "<span class='fa fa-star checked'></span>"
            + "<span class='fa fa-star checked'></span>"
            + "<span class='fa fa-star'></span>"
            + "<span class='fa fa-star'></span>"
        + "</div>"
            + "<span class='review-no'>41 reviews</span>"
        + "</div>"
    + "<p class='product-description'>" + cartArray.content + "</p>"
    + "<h4 class='price'>price: <span class='total_price' data-price='" + cartArray.price + "'>" + cartArray.price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + "</span> Ks</h4>"
    + "<div class='btn_qty'>"
    + "<p class='qty'><span>Qty: </span></p>"
    + "<button class='btn btn-sm btn-danger counting_btn' onclick='decrement();'>-</button>"
    + "<div class='counting'>" + cartArray.count + "</div>"
    + "<button class='btn btn-sm btn-success counting_btn' onclick='increment();'>+</button>"
    + "</div>"
    + "<p class='vote'><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>"
    + "</div>";

    $('.wrapper').html(modal);

}



/*----------------nav hover----------------*/
$('a[href="#"]').on('click', function(e){ e.preventDefault(); });

$('#menu > li').on('mouseover', function(e){

    $(this).find("ul:first").show();
    $(this).find('> a').addClass('active');

}).on('mouseout', function(e){

    $(this).find("ul:first").hide();
    $(this).find('> a').removeClass('active');

});

$('#menu li li').on('mouseover',function(e){

    if($(this).has('ul').length) {
        $(this).parent().addClass('expanded');
    }
    $('ul:first',this).parent().find('> a').addClass('active');
    $('ul:first',this).show();

}).on('mouseout',function(e){

    $(this).parent().removeClass('expanded');
    $('ul:first',this).parent().find('> a').removeClass('active');
    $('ul:first', this).hide();

});















/*
    function showCarts() {
        var cartsList = shoppingCart.productList();
        var cartsItem = "";

        for (var item in cartsList) {
            // cartsItem += '<tr>'
            //             + '<td class="col-md-6">'
            //             + '<div class="row">'
            //             + '<div class="product_img">'
            //             + '<img src="./assets/frontend/img/product/device.jpg" class="rounded" width="80" alt="product image">'
            //             + '<div class="product_name">'
            //             + '<p>${cartsList[item].name}</p>'
            //             + '<span>Brand: <small>America</small></span>'
            //             + '</div>'
            //             + '</div>'
            //             + '</div>'
            //             + '</td>'
            //             + '<td class="col-md-2">'
            //             + '<div class="quantity">'
            //             + '<input type="number" value="1" min="1" step="1" name="number" style="width: 50px;">'
            //             + '</div>'
            //             + '</td>'
            //             + '<td class="col-md-2">'
            //             + '<div class="price_wrap">'
            //             + '<div>100,000Ks</div>'
            //             + '<small class="text_muted"><span>100,000Ks</span> each</small>'
            //             + '</div>'
            //             + '</td>'
            //             + '<td class="col-md-2">'
            //             + '<button type="button" class="btn btn-sm" title="product details"><i class="fas fa-info"></i></i></button>'
            //             + '<button type="button" class="btn btn-sm" title="remove product"><i class="far fa-trash-alt"></i></button>'
            //             + '</td>'
            //             + '</tr>';

            cartsItem = cartsList[item];
        }

        $("#carts_table").html(cartsItem);
    }
*/




















