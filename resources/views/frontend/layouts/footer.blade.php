 <!-- Footer Section Begin -->
 <footer class="footer">
    <div class="container">
        <div class="row">
            @php
                $settings=DB::table('settings')->get();
            @endphp
            @foreach($settings as $key=>$setting)
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about">
                    <p>{!!$setting->short_des !!}</p>
                    <a href="#"><img src="{{asset('frontend/img/payment.png')}}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                <div class="footer__widget">
                    <h6>Danh mục</h6>
                    <ul>
                        @php
                            $categories=DB::table('categories')->where('status','active')->limit(5)->get();
                        @endphp
                        @foreach ($categories as $cate)
                        <li><a href="#">{{$cate->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            {{-- <div class="col-lg-2 col-md-3 col-sm-6">
                <div class="footer__widget">
                    <h6>Thương hiệu</h6>
                    <ul>
                        @php
                            $brand=DB::table('brands')->where('status','active')->limit(5)->get();
                        @endphp
                        @foreach ($brand as $brands)
                        <li><a href="#">{{$brands->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div> --}}
            <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
                <div class="footer__widget">
                    <h6>Thông tin liên hệ</h6>
                    <div class="footer__newslatter">
                        <p>Email: &emsp14;{{$setting->email}}</p>
                        <p>Điện thoại: &emsp14;{{$setting->phone}}</p>
                        <p>Địa chỉ: &emsp14;{{$setting->address}}</p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</footer>
<!-- Footer Section End -->

<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form" method="POST" action="{{route('product.search')}}">
            @csrf
            <input type="text" id="search-input" name="search" placeholder="Tìm kiếm ở đây.....">
        </form>
    </div>
</div>
<!-- Search End -->

<!-- Js Plugins -->
<script src="{{asset('frontend/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.slicknav.js')}}"></script>
<script src="{{asset('frontend/js/mixitup.min.js')}}"></script>
<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>
<script src="{!! asset('backend/plugins/select2/js/select2.min.js') !!}"></script>
<!-- toastr -->
<script src="{!! asset('backend/plugins/toastr/toastr.min.js') !!}"></script>
<script>
    toastr.options.closeButton = true;
    @if (session('success'))
        var message = "{{ session('success') }}";
        toastr.success(message, {
            timeOut: 3000
        });
    @endif
    @if (session('error'))
        var message = "{{ session('error') }}";
        toastr.error(message, {
            timeOut: 3000
        });
    @endif
    setTimeout(function() {
        toastr.clear()
    }, 3000);
    $(document).ready(function() {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        //Initialize Select2 Elements
        $('.select2').select2();
    });
</script>
@stack('scripts')
