$(document).ready(function(){

    count();
    getData();

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

        if(cart_str){
    
            $('.noitem').hide();
    
            var html = "";
            var shipping = parseInt($(".shipping").text());
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
                
                $('#carts_table').html(html);
                $('.subtotal').html(total);
                $('.total').html(total+=shipping);
            }
        } else {
            $('.hasitem').hide();
        }
    }

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
                localStorage.clear();
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
        }
    });

    $('#region').click(function(){
        var selectedVal = $("#region option:selected").val();
        // console.log(selectedVal);
        
        if (selectedVal == 'aya') {
            $('.shipping').text('3500')
        } else if (selectedVal == 'bgo') {
            $('.shipping').text('2500')
        } else if (selectedVal == 'mdy') {
            $('.shipping').text('4000')
        } else if (selectedVal == 'mgw') {
            $('.shipping').text('3500')
        } else if (selectedVal == 'mlm') {
            $('.shipping').text('0')
        } else if (selectedVal == 'sgg') {
            $('.shipping').text('4500')
        } else if (selectedVal == 'tty') {
            $('.shipping').text('3000')
        } else if (selectedVal == 'ygn') {
            $('.shipping').text('3000')
        } else {
            $('.shipping').text('0')
        }

        getData()

    })

    $('.ordernow').click(function(){

        var total = $('.total').text();

        var cart_str=localStorage.getItem('onemart');
        var cart_arr=JSON.parse(cart_str);

        $.ajax({

            url: '../../../order.php',
            method: 'POST',
            data: {action:action, name:userName, email:userEmail, pass:userPass, phone:userPhone},
            success: function(data) {

                    data = data.trim();
                    alert(data);
            }
        });

        // console.log(cart_arr);

        // $.post('order.php', {
        //     cart:cart_arr,
        //     total:total
        // },function(response){
        //     window.location.href="order.php";
            // Swal.fire({
            //     icon: 'question',
            //     title: 'Are you sure?',
            //     confirmButtonText: 'Yes',
            //     confirmButtonColor: '#0d6efd',
            //     showCancelButton: true,
            //   }).then((result) => {
            //     if (result.isConfirmed) {
            //         Swal.fire({
            //             icon: 'success',
            //             title: 'Order Success!<br>Thank you for shopping with us!',
            //             confirmButtonText: 'Got it',
            //             confirmButtonColor: '#0d6efd',
            //           }).then((result) => {
            //             if (result.isConfirmed) {
            //                 // localStorage.clear();
            //                 window.location.href="order.php";
            //             }
            //           })
            //     }
            //   })
        // });
    })
    
});
