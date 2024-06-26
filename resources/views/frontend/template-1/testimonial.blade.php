@php
    $mainTitle = 'What Client Say';
    $mainDescriptions = 'Demo Descriptions';
    $testimonialDataItemList = [];

    if ($singelWidgetData->widget_content) {
        $widgetContent = $singelWidgetData->getTranslation('widget_content');
        $mainTitle = isset($widgetContent['testimonial_main_title']) ? $widgetContent['testimonial_main_title'] : '';
        $mainDescriptions = isset($widgetContent['testimonial_main_descriptions']) ? $widgetContent['testimonial_main_descriptions'] : '';
        $testimonialDataItemList = isset($widgetContent['testimonials']) ? $widgetContent['testimonials'] : '';
    }
    $countTestimonial = count($testimonialDataItemList);
    if ($countTestimonial > 3) {
        $countTestimonial = 3;
    }
@endphp
<div class="testimonial-section pt-80 pb-80 mt-120">
    <img alt="image" src="{{ asset('frontend/images/bg/client-right.png') }}" class="client-right-vector">
    <img alt="image" src="{{ asset('frontend/images/bg/client-left.png') }}" class="client-left-vector">
    <img alt="image" src="{{ asset('frontend/images/bg/clent-circle1.png') }}" class="client-circle1">
    <img alt="image" src="{{ asset('frontend/images/bg/clent-circle2.png') }}" class="client-circle2">
    <img alt="image" src="{{ asset('frontend/images/bg/clent-circle3.png') }}" class="client-circle3">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                <div class="section-title1">
                    <h2>{{ $mainTitle }}</h2>
                    <p class="mb-0">{{ $mainDescriptions }}</p>
                </div>
            </div>
        </div>
        @if ($testimonialDataItemList)
            <div class="row justify-content-center position-relative">
                <div class="swiper testimonial-slider">
                    <div class="swiper-wrapper">
                        @foreach ($testimonialDataItemList as $key => $testimonialItem)
                            <div class="swiper-slide">
                                <div class="testimonial-single hover-border1 wow fadeInDown" data-wow-duration="1.5s"
                                    data-wow-delay=".2s">


                                    {{-- <img alt="image" src="{{ asset('frontend/images/icons/quote-green.svg') }}"
                                        class="quote-icon"> --}}

                                    <div class="quote-icon">
                                        <svg width="38" height="28" viewBox="0 0 38 28"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.70166 1.32327C3.44346 4.49241 1.15752 8.87874 0.296586 13.5916C-0.0077112 15.2912 -0.0967737 18.3194 0.118461 19.7666C0.341117 21.2733 0.905179 22.7354 1.71416 23.908C3.72549 26.8248 7.41416 28.1014 10.895 27.092C12.2606 26.6987 13.3665 26.0307 14.4427 24.9545C15.4892 23.908 16.0458 23.0174 16.4837 21.7112C17.2036 19.5662 17.0478 17.2358 16.0606 15.2393C14.8657 12.8123 12.4759 11.0385 9.90791 10.66C8.83916 10.5041 8.95049 10.6006 9.00245 9.85101C9.11377 8.29241 9.7001 6.71155 10.8134 4.92288C11.4665 3.89124 11.5259 4.03968 9.64073 2.15452C7.65166 0.172878 7.83721 0.224833 6.70166 1.32327ZM9.50713 4.59632C8.77979 5.79124 8.16377 7.3053 7.90401 8.58929C7.74073 9.36858 7.71104 10.8752 7.85205 11.276C7.99307 11.6545 8.1712 11.751 8.90596 11.803C11.6001 12.0182 13.9083 13.6065 15.029 16.026C15.5263 17.0948 15.6228 17.5994 15.6153 19.0096C15.6153 20.1674 15.5931 20.3307 15.4075 20.9393C14.6579 23.4034 12.706 25.2959 10.2419 25.9565C9.3587 26.194 7.58487 26.2014 6.73877 25.9639C3.80713 25.1549 1.80323 22.728 1.33565 19.4252C1.22432 18.6088 1.23916 16.0409 1.37276 15.0018C1.57315 13.3764 1.90713 11.944 2.41182 10.5116C3.45088 7.56507 5.21729 4.6928 7.41416 2.39944L7.75557 2.05061L8.77979 3.07483L9.81143 4.10647L9.50713 4.59632Z" />
                                            <path
                                                d="M27.4979 1.62755C23.9131 5.27912 21.6791 10.133 21.1447 15.4322C21.0186 16.7088 21.1002 19.3955 21.2858 20.3084C22.1541 24.4721 25.2268 27.2405 29.1752 27.4112C31.5576 27.5151 33.658 26.7432 35.3576 25.1326C36.7084 23.8487 37.5545 22.3049 37.8885 20.494C38.0592 19.5959 38.0072 17.7776 37.792 16.9612C36.9459 13.7846 34.5857 11.469 31.4315 10.7342C31.0826 10.6526 30.6744 10.5858 30.5186 10.5858C30.0584 10.5858 30.0287 10.5338 30.0881 9.80646C30.2143 8.28498 30.7709 6.77834 31.8916 4.93029C32.2924 4.27716 32.3666 4.10646 32.3295 3.92834C32.2924 3.7799 31.8174 3.24552 30.7783 2.20646C29.9471 1.38263 29.2197 0.670134 29.1604 0.633024C29.101 0.595915 28.9377 0.566227 28.7967 0.566227C28.5592 0.566227 28.4479 0.66271 27.4979 1.62755ZM30.3924 4.94513C29.2791 6.89709 28.6705 9.19045 28.8635 10.7268C28.9822 11.6842 29.0342 11.7287 29.9916 11.8029C33.0865 12.0479 35.5729 14.0444 36.4932 17.0205C36.6787 17.6217 36.6936 17.7701 36.6936 18.9725C36.6936 20.1748 36.6787 20.3233 36.4932 20.9244C35.8326 23.0545 34.5264 24.5834 32.5596 25.5037C31.5131 25.9936 30.86 26.1346 29.576 26.1346C28.6483 26.1346 28.3588 26.1049 27.8318 25.9639C25.2861 25.2811 23.3193 23.2104 22.644 20.5162C22.4065 19.5811 22.3471 18.9205 22.3397 17.4139C22.3397 14.1557 22.9928 11.2686 24.4104 8.32209C25.4494 6.16232 26.5479 4.5592 28.3217 2.61466L28.8338 2.05802L29.858 3.07482L30.8748 4.09162L30.3924 4.94513Z" />
                                        </svg>
                                    </div>





                                    <div class="testi-img">
                                        <img alt="image"
                                            src="{{ asset('uploads/testimonials/' . $testimonialItem['img']) }}">
                                    </div>
                                    <div class="testi-content">
                                        <p class="para">{{ $testimonialItem['testimonial_descriptions'] }}</p>
                                        <div class="testi-designation">
                                            <h5><a href="#">{{ $testimonialItem['testimonial_name'] }}</a></h5>
                                            <p>{{ $testimonialItem['testimonial_designations'] }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="slider-arrows testimonial2-arrow d-flex justify-content-between gap-3">
                    <div class="testi-prev1 swiper-prev-arrow" tabindex="0" role="button"
                        aria-label="Previous slide"><i class="bi bi-arrow-left"></i></div>
                    <div class="testi-next1 swiper-next-arrow" tabindex="0" role="button" aria-label="Next slide">
                        <i class="bi bi-arrow-right"></i>
                    </div>
                </div>
            </div>
        @endif
    </div>
</div>
