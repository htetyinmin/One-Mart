var shoppingCart = (function() {
    carts = [];

    // Constructor
    function Item(id, name, content, price, image, count) {
        this.id = id;
        this.name = name;
        this.content = content;
        this.price = price;
        this.image = image;
        this.count = count;
    }

    // Save cart
    function saveCart() {
        sessionStorage.setItem('shoppingCart', JSON.stringify(carts));
    }

    // Add to cart
    var obj = {};
    obj.addItemToCart = function(dataid, name, content, price, image, count) {
        
        for(var item in carts) {
            if(carts[item].name === name) {
                carts[item].count ++;
                saveCart();
                return;
            }
        }

        var item = new Item(dataid, name, content, price, image, count);
        carts.push(item);
        saveCart();
    }
    
    // Load cart
    function loadCart() {
      cart = JSON.parse(sessionStorage.getItem('shoppingCart'));
    }


    if (sessionStorage.getItem('shoppingCart') != null) {
      loadCart();
    }



    // Total cart
    obj.totalCart = function() {
      var totalCart = 0;
      for(var item in cart) {
      totalCart += cart[item].price * cart[item].count;
      }
      return Number(totalCart.toFixed(2));
    }
    

    // Remove item from cart
    obj.removeItemFromCart = function(name) {
      for(var item in carts) {
        if(carts[item].name === name) {
          carts[item].count --;
          if(carts[item].count === 0) {
            carts.splice(item, 1);
          }
          break;
        }
      }
      saveCart();
    }

    // Total cart
    obj.totalCart = function() {
        var totalCart = 0;
        for(var item in carts) {
          totalCart += carts[item].price * carts[item].count;
        }
        return Number(totalCart.toFixed(2));
    }

    // List cart
    obj.listCart = function() {
      var cartCopy = [];
      for(i in carts) {
        item = carts[i];
        itemCopy = {};
        for(p in item) {
          itemCopy[p] = item[p];
        }

        itemCopy.total = Number(item.price * item.count);
        cartCopy.push(itemCopy);
      }
      return cartCopy;
    }

    // Set count from item
    obj.setCountForItem = function(name, count) {
      for(var i in carts) {
        if (carts[i].name === name) {
            carts[i].count = count;
            break;
        }
      }
    };


    // Count cart 
    obj.totalCount = function() {
      var totalCount = 0;
      for(var item in carts) {
        totalCount += carts[item].count;
      }
      return totalCount;
    }
  
    return obj;
})();
  

let d = new Date();
d = Math.floor(Math.round(Math.random(d) * d.getTime()));
$(".click-cart").attr("data-id", d);

// add item events
$(".click-cart").click(function() {


    console.log(d);
    let productID = $(this).data('id');
    let productName = $(this).data('title');
    let productContent = $(this).data('content');
    let productPrice = $(this).data('price');
    let productImage = $(this).data('img');

    console.log( productID + '\n' + productName + '\n' + productContent + '\n' + productPrice + '\n' + productImage);
    shoppingCart.addItemToCart(productID, productName, productContent, productPrice, productImage, 1);
    displayCart();

});




  
  
  function displayCart() {

    var cartArray = shoppingCart.listCart();
    var output = "";

    for(var i in cartArray) {

        output = 
        "<div class='preview col-lg-6'>"           
         + "<div class='preview-pic tab-content'>"

          + "<div class='tab-pane active' id='pic-1'>"  
           + "<img src='" + cartArray[i].image + "' /></div>"
           + "<div class='tab-pane' id='pic-2'><img src='" + cartArray[i].image + "' /></div>"
           + "<div class='tab-pane' id='pic-3'><img src='" + cartArray[i].image + "' /></div>"
           + "<div class='tab-pane' id='pic-4'><img src='" + cartArray[i].image + "' /></div>"
           + "<div class='tab-pane' id='pic-5'><img src='" + cartArray[i].image + "' /></div>"
          + "</div>"

          + "<ul class='preview-thumbnail nav nav-tabs'>"
           + "<li class='active'><a data-bs-target='#pic-1' data-bs-toggle='tab'>"
                + "<img src='" + cartArray[i].image + "' /></a></li>"
           + "<li><a data-bs-target='#pic-2' data-bs-toggle='tab'>"
                + "<img src='" + cartArray[i].image + "' /></a></li>"
           + "<li><a data-bs-target='#pic-3' data-bs-toggle='tab'>"
                + "<img src='" + cartArray[i].image + "' /></a></li>"
           + "<li><a data-bs-target='#pic-4' data-bs-toggle='tab'>"
                + "<img src='" + cartArray[i].image + "' /></a></li>"
           + "<li><a data-bs-target='#pic-5' data-bs-toggle='tab'>"
                + "<img src='" + cartArray[i].image + "' /></a></li>"
          + "</ul>"
        + "</div>"

        + "<div class='details col-lg-6'>"
        + "<p>'" + cartArray[i].id + "'</p>"
        + "<h3 class='product-title'>" + cartArray[i].name + "</h3>"
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
        + "<p class='product-description'>" + cartArray[i].content + "</p>"
        + "<h4 class='price'>price: <span>" + cartArray[i].price + " Ks</span></h4>"
        + "<p class='qty'><span>Qty: </span>"
        + "<input type='number' min='1' class='item-count' step='1' value='" + cartArray[i].count + "' data-name='"+ cartArray[i].name +"' style='width: 50px;'></p>"
        + "<p class='vote'><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>"
        + "</div>";
    }

    $('.wrapper').html(output);
    // $('.total-cart').html(shoppingCart.totalCart());
    // $('.total-count').html(shoppingCart.totalCount());
  }






    // // -1
    // $('.wrapper').on("click", ".minus-item", function(event) {
    //   event.preventDefault();
    //   var name = $(this).data('name')
    //   shoppingCart.removeItemFromCart(name);
    //   displayCart();
    // });
      
    // // +1
    // $('.wrapper').on("click", ".plus-item", function(event) {
    //   event.preventDefault();
    //   var name = $(this).data('name');
    //   shoppingCart.addItemToCart(name);
    //   displayCart();
    // });

  // Item count input
  $('.wrapper').on("keyup", ".item-count", function(event) {
     var name = $(this).data('name');
     var count = Number($(this).val());
    shoppingCart.setCountForItem(name, count);
    displayCart();
  });
  

displayCart();