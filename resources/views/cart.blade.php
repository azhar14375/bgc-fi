@extends('layouts.user_app')
@section('content')
<!-- /// HERO SECTION /// -->

<!-- /// Main Container /// -->
<div class="container">
    <div id="about" class="large-margin cart">
    </div>
    <!-- /// GAMES SECTION /// -->
    <div id="games" class="large-margin cart">
        <div class="games-portfolio ">
            {{-- <div class="container">
                @if(session('success'))
                    <div class="alert alert-success">
                    {{ session('success') }}
                    </div> 
                @endif
            </div> --}}
            @php $total = 0;@endphp
            @if(session('cart'))
                @foreach (session('cart') as $id => $details )
                    @php $total+=$details['price']*$details['quantity'] @endphp
                    <!-- Game Card Video -->
                    <div class="row game-card pc new">
                        <input type="hidden" name="product_id" id="product_id" value="{{$id}}">
                        {{-- <input type="hidden" name="quantity" id="quantity" value="{{$details['quantity']}}"> --}}
                        <div class="col-lg-12 col-xl-6 game-card-left">
                            <img src="{{asset('assets/front/images/product-img/clod-pi.png')}}" data-src="{{asset('assets/front/images/product-img/clod-pi.png')}}" class="img-fluid b-lazy" alt="cart-image"> 
                            <!-- Video Thumbnail Img -->
                        </div>

                        <div class="col-lg-12 col-xl-6 game-card-right" id="game-card-right">
                            <div id="contentToRefresh">
                                <h2 class="short-hr-left">{{$details['name']}}</h2>
                                <p class="tags"><span class="subtle">Action RPG | PC</span> </p>
                                <p class="game-description">{{$details['description']}}</p>
                                <div class="col-md-7 product-description">
                                    <table class="table table-bordered order-details-table">
                                        <thead><tr><th>Price</th><th>Quantity</th></tr></thead>
                                        <tr><td>{{$details['price']}}</td><td>{{$details['quantity']}}</td></tr>
                                        <tr><th>Grand Total : </th><th>{{number_format($total)}}</th></tr>
                                    </table>
                                </div>
                                {{-- <div class="totals">
                                    <div class="totals-item totals-item-total">
                                        <label><strong>Grand Total:</strong></label>
                                        <h2 class="hr" style="text-align: right;"><b>&#8377; </b>{{$total}}</h2>
                                    </div>
                                </div> --}}
                                {{-- <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity update-cart"/> --}}
                                <div class="input-group">
                                    <a href="javascript:void(0)" id="minusCart" class="button-store"><i class="fa fa-minus"></i></a>
                                    <span name="quantity" id="quantity" class="quantity-field" p_quantity="{{ $details['quantity'] }}"><strong>{{ $details['quantity'] }}</strong></span>
                                    <a href="javascript:void(0)" id="plusCart" class="button-store"><i class="fa fa-plus"></i></a>
                                </div>
                                
                                <div class="steam-btn">
                                    <a href="{{url('checkout')}}">
                                        <p>Proceed to Checkout</p>
                                    </a>
                                </div>
                                <div class="steam-btn">
                                    <a href="javascript:void(0)" class="remove-from-cart">
                                        <p>Remove From Cart</p>
                                    </a>
                                </div>
                                {{-- <div class="reviews">
                                    <a href="#"><div class="score-card">
                                        <p class="score">8.0</p>
                                        <p>Gamespot</p>
                                    </div></a>
                                    <a href="#"><div class="score-card">
                                        <p class="score">7.9</p>
                                        <p>IGN</p>
                                    </div></a>
                                    <a href="#"><div class="score-card">
                                        <p class="score">86</p>
                                        <p>Metacritic</p>
                                    </div></a>
                                </div> --}}

                            </div>
                        </div>
                    </div><!-- Game Card End -->
                @endforeach
                @else
                <div class="card text-center nothing-in-cart">
                    <div class="card-body">
                        <div class="alert alert-dark" role="alert">
                            Nothing in Your Cart!
                        </div>
                        <a href="{{url('products')}}" class="btn btn-primary">Order Now</a>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div><!-- Main Container End -->
@endsection()

@section('script')
@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $(document).on('click','#plusCart',function(){
            // var currentVal=parseInt();
            var currentVal=parseInt($('#quantity').attr('p_quantity'));
            var newVal=currentVal+1;
            $.ajax({
                url: '{{ route('update.cart') }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: $('#product_id').val(), 
                    quantity: newVal
                },
                success: function (response) {

                    $("#game-card-right").load(document.URL+' '+ '#contentToRefresh');
                    
                }
            });
        });
        $(document).on('click','#minusCart',function(){
            // var currentVal=parseInt();
            var currentVal=parseInt($('#quantity').attr('p_quantity'));
            var newVal=currentVal-1;
            console.log(newVal);
            $.ajax({
                url: '{{ route('update.cart') }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: $('#product_id').val(), 
                    quantity: newVal
                },
                success: function (response) {
                    // console.log(response);
                    $("#game-card-right").load(document.URL+' '+ '#contentToRefresh');
                }
            });
        });
    
        // $(".update-cart").change(function (e) {
        //     e.preventDefault();
    
        //     var ele = $(this);
    
        //     $.ajax({
        //         url: '{{ route('update.cart') }}',
        //         method: "patch",
        //         data: {
        //             _token: '{{ csrf_token() }}', 
        //             id: $('#product_id').val(), 
        //             quantity: $('.quantity').val()
        //         },
        //         success: function (response) {
        //             // console.log(response);
        //            window.location.reload();
        //         }
        //     });
        // });
    
        $(document).on('click','.remove-from-cart',function() {
            var ele = $(this);
            var id = $('#product_id').val();
            if(confirm("Are you sure want to remove?")) {
                $.ajax({
                    url: '{{ route('remove.from.cart') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}', 
                        id: id
                    },
                    success: function (response) {
                        swal("Success",response,"success").then(function(){ 
                            location.reload()});
                    }
                });
            }
        });
    });
  
</script>
@endsection
@endsection