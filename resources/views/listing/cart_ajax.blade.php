<script src="{{ asset('frontend/assets/js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <link rel="stylesheet" type="text/css" href="{{ url('public/vendor/magnific-popup/magnific-popup.min.css') }}">

    <script type="text/javascript">


        function addToCart(product_id, pno = 1) {
            var qty=$('#quantity').val();
            var color=$("input[name='color']:checked").val();
            var size=$("input[name='size']:checked").val();
            // alert([color,size])
            if(qty>1){
                pno=qty;
            }
            $.ajax({
                url: "{{ route('add-to-cart') }}",
                method: "POST",
                data: {
                    _token: '{{ csrf_token() }}',
                    "product_id": product_id,
                    "pno": pno,
                    "color":color,
                    "size":size,
                },
                dataType: "json",
                success: function(response) {
                    $(".mini_cart_wrapper").html(response.data);
                    var resp = 'success';
                    if(response.status==false){
                        var resp = 'error';
                    }else{
                        setTimeout(function() {
                            location.reload();
                        }, 1000);
                    }
                    Swal.fire({
                        position: 'top-end',
                        icon: resp,
                        title: response.message,
                        showConfirmButton: false,
                        timer: 3000
                    })
                }
            });
        }


        function productDecreaseCounter(cart_id) {
            base_url = "{{ url('/dec/') }}";
            session_id = "{{ Session::getId() }}";
            location.href = base_url + '/' + cart_id + '/session_id/' + session_id;

        }

        function productIncreaseCounter(cart_id) {
            base_url = "{{ url('/inc/') }}";
            session_id = "{{ Session::getId() }}";
            location.href = base_url + '/' + cart_id + '/session_id/' + session_id;

        }

        function productDecreaseCounterAuth(cart_id,User_id) {
            base_url = "{{ url('/dec/') }}";
            // session_id = "{{ Session::getId() }}";
            location.href = base_url + '/' + cart_id + '/session_id/' + User_id;

        }

        function productIncreaseCounterAuth(cart_id,User_id) {
            base_url = "{{ url('/inc/') }}";
            // session_id = "{{ Session::getId() }}";
            location.href = base_url + '/' + cart_id + '/session_id/' + User_id;

        }
        function clearCartAuth(User_id) {
            base_url = "{{ url('/cart-clear/') }}";
            location.href = base_url + '/session_id/' + User_id;

        }
        function clearCart() {
            base_url = "{{ url('/cart-clear/') }}";
            session_id = "{{ Session::getId() }}";
            location.href = base_url + '/session_id/' + session_id;

        }
    </script>
    