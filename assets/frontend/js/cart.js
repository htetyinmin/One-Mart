

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
        }
    }

    function getData(){
        var cart_str=localStorage.getItem('onemart');
        if(cart_str){
    
            $('.shoppingcart').show();
            $('.emptycart').hide();
    
            var cart_arr=JSON.parse(cart_str);
            var html = "";
            var cost = "";
            if(cart_arr.length>0){
                var no = 1;
                var total = 0;
                $.each(cart_arr,function(i,v){
                    var amount = (v.discount == 0) ? v.price*v.qty : v.discount*v.qty;
                    var price = (v.discount == 0) ? v.price : v.discount;
                    
                    html +=`<tr>
                        <td class="col-md-1">${no++}.</td>
                        <td class="col-md-5">
                        <div class="row">
                            <div class="product_img">
                            <img src="admin/uploads/${v.photo}" class="rounded" height="80" width="auto" alt="Item">
                            <div class="product_name">
                                <p>${v.name}</p>
                                <span>Brand: <small>Apple</small></span>
                            </div>
                            </div>
                        </div>
                        </td>
                        <td class="col-md-2">
                        <div class="quantity">
                            <input type="number" value="1" min="1" step="1" name="number" style="width: 50px;">
                        </div>
                        </td>
                        <td class="col-md-2">
                        <div class="price_wrap">
                            <div>${price} Ks</div>
                            <small class="text_muted"><span>${price} Ks</span> each</small>
                        </div>
                        </td>
                        <td class="col-md-2">
                        <button type="button" class="btn btn-sm" title="remove product"><i class="far fa-trash-alt"></i></button>
                        </td>
                    </tr>`;
                    
                    total+=amount;
                });
    
                cost = `${total}`
                
                $('#carts_table').html(html);
                $('.total').html(cost);
            }
        }else{
            $('.shoppingcart').hide();
            $('.emptycart').show();
        }
        
    }
});