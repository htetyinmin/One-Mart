$(document).ready(function(){

    // count();
        
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
        
        // count();

    });
});

function count(){

    var cart_str = localStorage.getItem('onemart');
    if(cart_str){
        var cart_arr = JSON.parse(cart_str);
        var count=0;
        // var total=0;

        $.each(cart_arr, function(i,v){
            if (v.discount) {
                var price = v.discount;
            }
            else{
                var price = v.price;
            }
            var subtotal = price * v.qty;
            count += v.qty;
            total += subtotal;
                
        });
        $('.cartNoti').text(count);
        $('.cartTotal').text(total+'Ks');
        
    }else{
        $('.cartNoti').text(0);
        $('.cartTotal').text(0+'Ks');

    }
    // return count;
}