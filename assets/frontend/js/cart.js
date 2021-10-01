$(document).ready(function(){

    count();
    getData();
        
    $('.addtocart').click(function(){

        // alert('hi');

        var id=$(this).data('id');
        var name=$(this).data('name');
        var price=$(this).data('price');
        var discount=$(this).data('discount');
        var photo=$(this).data('photo');
        var codeno=$(this).data('codeno');

        var item ={
            id:id,
            name:name,
            price:price,
            discount:discount,
            photo:photo,
            codeno:codeno,
            qty:1,
        }

        var cart_str = localStorage.getItem('onemart');
        var cart_arr;
        if(cart_str == null){
            cart_arr = Array();
        }else{
            cart_arr = JSON.parse(cart_str);
        }

        var status = false;
        $.each(cart_arr, function(i,v){
            if(id==v.id){
                v.qty++;
                status=true;
            }
        });
        
        if(status == false){
            cart_arr.push(item);
        }

        var myData = JSON.stringify(cart_arr);
        localStorage.setItem("onemart", myData);
        
        count();

    });

    function count() {
        var cart_str = localStorage.getItem("onemart");
        if (cart_str) {
    
            var cart_arr = JSON.parse(cart_str);
            var count = 0;
            $.each(cart_arr, function (i,v) {
                count += v.qty;
            })
    
            $('.cartNoti').text(count);
        } else {
            $('.cartNoti').text(0);
        }
    }

    function getData(){
        var cart_str=localStorage.getItem('onemart');
        var cart_arr=JSON.parse(cart_str);

        if(cart_arr.length > 0){
    
            $('#noitem').hide();
    
            var html = "";
            var cost = "";
            if(cart_arr.length>0){
                var no = 1;
                var total = 0;
                $.each(cart_arr,function(i,v){
                    var amount = (v.discount == 0) ? v.price*v.qty : v.discount*v.qty;
                    var price = (v.discount == 0) ? v.price : v.discount;
                    var tot = price*v.qty;
                    
                    html +=`<tr>
                        <td class="col-md-1">${no++}.</td>
                        <td class="col-md-5 image-name">
                            <div class="product_img">
                                <div class="cart-item">
                                    <img src="admin/uploads/${v.photo}" class="rounded" alt="Item">
                                </div>
                                <div class="product_name">
                                    <p>${v.name}</p>
                                    <span>Brand: <small>Apple</small></span>
                                </div>
                            </div>
                        </td>

                        <td class="qty-group">
                            <span class="minus" data-key="${i}"> <i class="fas fa-minus"></i> </span>

                                <span class="quantity"> ${v.qty} </span>

                            <span class="plus" data-key="${i}"> <i class="fas fa-plus"></i> </span>
                        </td>

                        <td class="col-md-2">
                        <div class="price_wrap">
                            <div>${tot} Ks</div>
                            <small class="text_muted"><span>${price} Ks</span> each</small>
                        </div>
                        </td>
                        <td class="col-md-2">
                        <button type="button" class="btn btn-sm removebtn" title="remove product" data-key="${i}"><i class="far fa-trash-alt"></i></button>
                        </td>
                    </tr>`;
                    
                    total+=amount;
                });
    
                cost = `${total}`
                
                $('#carts_table').html(html);
                $('.total').html(cost);
            }
        } else {
            $('#hasitem').hide();
        }
    }

    // REMOVE ITEM
    $('tbody').on('click','.removebtn',function(){
        var key= $(this).data('key');
        var cart_str=localStorage.getItem('onemart');
        
        if(cart_str){
            var cart_arr = JSON.parse(cart_str);
            $.each(cart_arr,function(i,v){
                if(key==i){
                    cart_arr.splice(key,1);
                }
                var myData = JSON.stringify(cart_arr);
                localStorage.setItem('onemart',myData);
                count();
                getData();
            })

            if(cart_arr.length == 0){
                location.reload();
            }
        }
    });

    // QTY INCREASE BTN
    $('tbody').on('click','.plus',function(){
        var key = $(this).data('key');

        var cart_str = localStorage.getItem('onemart');
        if(cart_str){
            var cart_arr=JSON.parse(cart_str);
            $.each(cart_arr,function(i,v){
                if(key==i){
                    v.qty++;
                }

                var myData = JSON.stringify(cart_arr);
                localStorage.setItem('onemart',myData);
                count();
                getData();
            })
        }
    });

    // QTY DECREASE BTN
    $('tbody').on('click','.minus',function(){
        var key= $(this).data('key');
        var cart_str=localStorage.getItem('onemart');
        
        if(cart_str){
            var cart_arr = JSON.parse(cart_str);
            $.each(cart_arr,function(i,v){
                if(key==i && v.qty>1){
                    v.qty--;
                }
                var myData = JSON.stringify(cart_arr);
                localStorage.setItem('onemart', myData);
                count();
                getData();
            })

            if(cart_arr.length == 0){
                location.reload();
            }
        }
    });

});
