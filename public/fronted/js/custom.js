$(document).ready(function(){


        loadcart();
        loadwishlist();

        $('.addtocartbtn').click(function(e) {

            e.preventDefault();
            var product_id = $(this).closest('.product_data').find('.pro_id').val();
            var product_qty = $(this).closest('.product_data').find('.pro_qty').val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: '/add-to-cart',
                method: 'POST',
                data: {
                    'pro_id': product_id,
                    'pro_qty': product_qty,
                },

                success: function(res) {
                    swal(res.status);
                    loadcart();

                }
            })
        });


        function loadcart() {
            $.ajax({
                url: '/load-cart-counter',
                method: 'GET',


                success: function(res) {
                    $('.cart-counter').html('');
                    $('.cart-counter').html(res.count);
                    //console.log();
                }
            })
        }

        function loadwishlist() {
            $.ajax({
                url: '/load-wishlist-counter',
                method: 'GET',


                success: function(res) {
                    $('.wishlist-counter').html('');
                    $('.wishlist-counter').html(res.count);
                    //console.log();
                }
            })
        }



        $('.add-to-wishlist').click(function(e) {

            e.preventDefault();

            var product_id = $(this).closest('.product_data').find('.pro_id').val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: '/add-to-wishlist',
                method: 'POST',
                data: {
                    'pro_id': product_id,
                },

                success: function(res) {
                    swal(res.status);
                    loadwishlist();
                }
            })
        });





            $('.increase_it').click(function(e) {
                e.preventDefault();
                var inc_value = $(this).closest('.form_data').find('.pro_qty').val();
                var value = parseInt(inc_value, 10);
                value = isNaN(value) ? 0 : value;
                //alert(value);

                if(value < 10) {
                    value++;
                    $(this).closest('.form_data').find('.pro_qty').val(value);
                }


            });





            $('.decrease_it').click(function(e) {
            e.preventDefault();
            var inc_value = $(this).closest('.form_data').find('.pro_qty').val();
            var value = parseInt(inc_value, 10);
            value = isNaN(value) ? 0 : value;
            //alert(value);

            if(value < 10) {
                value--;
                $(this).closest('.form_data').find('.pro_qty').val(value);
            }


            });

            $('.delete_from_cart').click(function() {
                var prod_id = $(this).closest('.form_data').find('.prod_id').val();

                $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                });

                $.ajax({
                    method: 'POST',
                    url: '/delete-from-cart',
                    data: {
                        'prod_id': prod_id
                    },

                    success: function(res) {
                        window.location.reload();
                        swal('', res.status, 'success');
                        loadcart();
                    }

                });
            });


            $('.delete_from_whishlist').click(function() {
                var prod_id = $(this).closest('.form_data').find('.pro_id').val();

                $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                });

                $.ajax({
                    method: 'POST',
                    url: '/delete-from-wishlist',
                    data: {
                        'prod_id': prod_id
                    },

                    success: function(res) {
                        window.location.reload();
                        swal('', res.status, 'success');
                        loadwishlist();
                    }

                });
            });




            $('.change_qty').click(function() {
                var prod_id = $(this).closest('.form_data').find('.prod_id').val();
                var prod_qty = $(this).closest('.form_data').find('.pro_qty').val();



                $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                });

                data = {
                    'prod_id': prod_id,
                    'prod_qty': prod_qty,
                };

                $.ajax({
                    method: 'POST',
                    url: '/update-cart-qty',
                    data: data,

                    success: function(res) {
                       window.location.reload();
                    }

                });
            });

            $('.featured-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                dots:true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:4
                    }
                }
            });




  });
