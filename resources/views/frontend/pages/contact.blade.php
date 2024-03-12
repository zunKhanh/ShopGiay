@extends('frontend.layouts.master')
@section('main-content')
@section('title','Liên hệ')
    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__text">
                        <div class="section-title">
                            <h2>Liên hệ với SHOP</h2>
                            <p>Hỗ trợ từ 9:00 - 21:00</p>
                        </div>
                        <ul>
                            @php
                                $settings=DB::table('settings')->get();
                            @endphp
                            @foreach($settings as $key=>$setting)
                            <li>
                                <h4>Email: {{$setting->email}}</h4>
                                <h4>Điện thoại: {{$setting->phone}}</h4>
                                <h4>Địa chỉ: {!! $setting->address!!}</h4>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__form">
                        <form action="{{route('contact.submit')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" name="name" placeholder="Họ và tên của bạn">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="subject" placeholder="Chủ đề">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="email" placeholder="Email">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" name="phone" placeholder="Điện thoại">
                                </div>
                                <div class="col-lg-12">
                                    <textarea name="message" placeholder="Nội dung bạn muốn gửi"></textarea>
                                    <button type="submit" class="site-btn">Gửi Tới SHOP</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
@endsection
