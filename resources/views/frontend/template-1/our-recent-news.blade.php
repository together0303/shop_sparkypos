@php
    $recentNewsTitle = 'Demo Title';
    $recentNewsDescriptions = 'Demo Description';
    $limit = 3;
    $orderBy = 'asc';
    if (isset($singelWidgetData->widget_content)) {
        $widgetContent = $singelWidgetData->getTranslation('widget_content');
        $recentNewsTitle = $widgetContent['recent_news_main_title'] ? $widgetContent['recent_news_main_title'] : '';
        $recentNewsDescriptions = $widgetContent['recent_news_descriptions'] ? $widgetContent['recent_news_descriptions'] : '';
        $limit = $widgetContent['total_display_recent_news'] ? $widgetContent['total_display_recent_news'] : 2;
        $orderBy = $widgetContent['recent_news_order_by'] ? $widgetContent['recent_news_order_by'] : 'desc';
    }

    $recentNewsBlog = blog($limit, '', $orderBy);

@endphp
<div class="recent-news-section pt-120">
    <img alt="image" src="{{ asset('frontend/images/bg/section-bg.png') }}" class="img-fluid section-bg">
    <div class="dot-circle">

        <svg width="93" height="92" viewBox="0 0 93 92" xmlns="http://www.w3.org/2000/svg">
            <g opacity="0.6">
                <path
                    d="M84.6083 66.1492C83.1094 65.5081 82.4084 63.7663 83.0494 62.2658C83.6967 60.7592 85.4324 60.0658 86.9405 60.7131C88.4395 61.3542 89.1405 63.096 88.4994 64.5949C88.4441 64.7118 88.3934 64.8179 88.3334 64.9209C87.5939 66.1923 85.9951 66.7473 84.6083 66.1492Z" />
                <path
                    d="M75.1506 82.3305C73.8792 83.3621 72.0159 83.1699 70.9844 81.9001C69.9482 80.6379 70.1403 78.7746 71.4025 77.7384C72.6739 76.7068 74.5372 76.899 75.5734 78.1612C76.3698 79.1482 76.4374 80.4888 75.8378 81.5203C75.6657 81.8186 75.4351 82.0953 75.1506 82.3305Z" />
                <path
                    d="M89.3697 45.8852C87.7432 46.0144 86.3149 44.7983 86.1781 43.1656C86.049 41.5391 87.265 40.1108 88.8916 39.9817C90.5227 39.8449 91.9509 41.0609 92.0878 42.6921C92.1324 43.3224 91.9848 43.9112 91.6927 44.4139C91.2238 45.2272 90.3751 45.8068 89.3697 45.8852Z" />
                <path
                    d="M55.0908 91.8112C53.4827 92.1448 51.9207 91.1009 51.5902 89.5067C51.2643 87.9032 52.3005 86.335 53.904 86.0107C55.5074 85.6863 57.074 86.7209 57.3999 88.3244C57.5537 89.0639 57.4153 89.7926 57.0633 90.3999C56.6512 91.1071 55.9548 91.639 55.0908 91.8112Z" />
                <path
                    d="M84.1717 25.7196C82.7773 26.5883 80.9555 26.1701 80.0823 24.7849C79.2167 23.4044 79.6272 21.5764 81.0124 20.7032C82.3975 19.83 84.2285 20.2527 85.0941 21.6333C85.706 22.6049 85.686 23.7795 85.151 24.7019C84.9173 25.1032 84.5868 25.4583 84.1717 25.7196Z" />
                <path
                    d="M32.911 90.9228C31.3444 90.4585 30.4373 88.8135 30.9016 87.2469C31.3521 85.6834 32.9971 84.7764 34.5683 85.233C36.1318 85.685 37.0342 87.3361 36.5822 88.9011C36.5146 89.1348 36.4162 89.3639 36.2978 89.5684C35.6352 90.7122 34.2408 91.3056 32.911 90.9228Z" />
                <path
                    d="M66.1476 11.3589C66.1215 11.3435 66.0969 11.3297 66.08 11.3189C66.0538 11.3036 66.0292 11.2897 66.0123 11.279C64.5902 10.4657 64.1014 8.65314 64.9238 7.23568C65.7371 5.81361 67.5451 5.33395 68.9595 6.14261C68.9933 6.16259 69.0194 6.17797 69.044 6.1918C69.0701 6.20718 69.0947 6.22101 69.1209 6.23639C70.5383 7.05888 71.018 8.86684 70.1955 10.2828C69.3715 11.7018 67.5635 12.1814 66.1476 11.3589Z" />
                <path
                    d="M17.8863 79.7293C16.7563 80.91 14.8823 80.9531 13.7016 79.8231C12.5209 78.6931 12.4824 76.8114 13.6139 75.6291C14.7439 74.4484 16.6211 74.4192 17.8018 75.5492C18.8072 76.51 18.984 78.0151 18.3152 79.1666C18.1953 79.3726 18.0554 79.554 17.8863 79.7293Z" />
                <path
                    d="M47.407 5.91827C45.7789 5.85217 44.5121 4.47775 44.569 2.84506C44.6259 1.21237 46.0064 -0.0636501 47.633 0.00245702C49.2733 0.0654894 50.5417 1.4399 50.4848 3.07259C50.4664 3.57531 50.3218 4.0396 50.0897 4.44086C49.5562 5.36174 48.5462 5.96286 47.407 5.91827Z" />
                <path
                    d="M5.5889 62.9288C4.03615 63.4423 2.36348 62.6091 1.85 61.0548C1.32268 59.5051 2.16978 57.8294 3.71484 57.3097C5.26758 56.7962 6.94025 57.6295 7.46757 59.1792C7.74276 60.0232 7.62592 60.8918 7.21083 61.6098C6.86338 62.2078 6.29763 62.6905 5.5889 62.9288Z" />
                <path
                    d="M28.442 9.8156C26.9692 10.5243 25.1996 9.89708 24.4955 8.41505C23.7991 6.93917 24.4279 5.16965 25.9038 4.47476C27.3842 3.77064 29.1461 4.39328 29.8502 5.87377C30.2883 6.79005 30.2069 7.81548 29.7318 8.6349C29.4443 9.12993 29.0062 9.54963 28.442 9.8156Z" />
                <path
                    d="M2.48648 42.3373C0.870698 42.0729 -0.223912 40.5586 0.0389786 38.9428C0.303407 37.327 1.81772 36.2324 3.43811 36.4876C5.05389 36.752 6.14389 38.274 5.88561 39.8821C5.82719 40.2588 5.69959 40.5955 5.52126 40.9029C4.92629 41.9268 3.73944 42.5387 2.48648 42.3373Z" />
                <path
                    d="M13.4664 22.076C12.4917 23.3813 10.6361 23.6503 9.32165 22.671C8.01642 21.6963 7.75199 19.8315 8.72515 18.5262C9.70446 17.2118 11.5555 16.952 12.8699 17.9313C14.086 18.8429 14.4042 20.4987 13.6601 21.7793C13.6017 21.8808 13.5341 21.9776 13.4664 22.076Z" />
                <path
                    d="M77.5565 62.549C76.3282 62.0309 75.7547 60.6011 76.2867 59.3697C76.814 58.1459 78.2422 57.5709 79.466 58.0983C80.6974 58.6302 81.2631 60.0538 80.7358 61.2775C80.7035 61.3729 80.6543 61.459 80.6036 61.5435C80.001 62.5859 78.6988 63.0394 77.5565 62.549Z" />
                <path
                    d="M69.8172 75.7887C68.7779 76.6358 67.2483 76.4775 66.4165 75.4351C65.5648 74.4051 65.7216 72.8754 66.7609 72.0298C67.8002 71.1827 69.3299 71.3411 70.1662 72.3742C70.8226 73.189 70.8749 74.2805 70.3845 75.1246C70.2415 75.3736 70.0555 75.5965 69.8172 75.7887Z" />
                <path
                    d="M81.4583 45.9728C80.1208 46.0758 78.9524 45.0781 78.8447 43.7498C78.7417 42.4123 79.7349 41.2531 81.0678 41.1378C82.3961 41.0302 83.5722 42.0326 83.6798 43.3608C83.7151 43.8712 83.5906 44.3586 83.3539 44.7691C82.968 45.4348 82.2762 45.9006 81.4583 45.9728Z" />
                <path
                    d="M53.4012 83.5513C52.0929 83.8188 50.8154 82.9748 50.5509 81.6573C50.2834 80.349 51.1275 79.0714 52.4358 78.8024C53.7441 78.5349 55.0216 79.3789 55.2984 80.6918C55.4152 81.296 55.3076 81.8956 55.0201 82.3906C54.6849 82.9718 54.1146 83.4053 53.4012 83.5513Z" />
                <path
                    d="M77.2044 29.4708C76.0636 30.178 74.5678 29.8459 73.8606 28.7052C73.1488 27.5737 73.4885 26.0824 74.6216 25.3691C75.7531 24.6573 77.2536 25.0016 77.9577 26.1285C78.4573 26.9203 78.445 27.8842 78.01 28.6344C77.8147 28.968 77.5441 29.2571 77.2044 29.4708Z" />
                <path
                    d="M35.2634 82.8159C33.9736 82.4439 33.2387 81.094 33.6138 79.8165C33.9859 78.5266 35.328 77.7872 36.6178 78.1592C37.8939 78.5343 38.6426 79.8811 38.2613 81.1678C38.2044 81.3631 38.1275 81.5353 38.0291 81.7059C37.4849 82.6453 36.358 83.1326 35.2634 82.8159Z" />
                <path
                    d="M62.4516 17.7268L62.4562 17.7191C62.447 17.7145 62.4393 17.7083 62.4224 17.6991C62.3963 17.6837 62.3655 17.6776 62.3409 17.6622C61.1802 16.9889 60.7805 15.513 61.4462 14.3476C62.1196 13.1869 63.5954 12.7872 64.7561 13.4606C64.7823 13.4759 64.7992 13.4852 64.8238 13.5005C64.8407 13.5098 64.8668 13.5251 64.8838 13.5359C66.0445 14.2093 66.4442 15.6852 65.7708 16.8459C65.0959 18.0066 63.6123 18.4017 62.4516 17.7268Z" />
                <path
                    d="M22.9689 73.6628C22.0419 74.6314 20.506 74.6636 19.5421 73.7289C19.5421 73.7289 19.5421 73.7289 19.5375 73.7366C18.5828 72.8065 18.5459 71.2783 19.4714 70.3098C20.3984 69.3412 21.9296 69.3166 22.9028 70.236C23.7191 71.0293 23.8652 72.2546 23.3148 73.2016C23.221 73.3661 23.1042 73.526 22.9689 73.6628Z" />
                <path
                    d="M47.1227 13.2716C45.7867 13.2147 44.7459 12.0986 44.7936 10.7565C44.8489 9.4205 45.9666 8.3797 47.3087 8.42735C48.6493 8.47501 49.6947 9.60652 49.6378 10.9425C49.6225 11.3438 49.5087 11.7342 49.3165 12.0679C48.8845 12.8119 48.0543 13.2993 47.1227 13.2716Z" />
                <path
                    d="M12.9036 59.9172C11.6383 60.3477 10.2623 59.6513 9.84572 58.3829C9.41525 57.1177 10.0978 55.7448 11.3708 55.3205C12.6453 54.8962 14.012 55.5864 14.4425 56.8517C14.6685 57.542 14.5716 58.2615 14.2349 58.8426C13.9536 59.3284 13.4878 59.7189 12.9036 59.9172Z" />
                <path
                    d="M31.6104 16.4692C30.3989 17.0442 28.9538 16.5245 28.3788 15.3131C27.8039 14.1016 28.3173 12.6657 29.5303 12.0908C30.7341 11.5112 32.1792 12.0293 32.7588 13.233C33.1093 13.9848 33.0525 14.8304 32.6666 15.496C32.4267 15.905 32.0701 16.2447 31.6104 16.4692Z" />
                <path
                    d="M10.37 43.0661C9.0525 42.8601 8.15621 41.6102 8.36222 40.2927C8.58207 38.9706 9.82273 38.0712 11.1449 38.2895C12.4639 38.4955 13.3587 39.7454 13.1527 41.0629C13.1035 41.3658 12.9974 41.6456 12.8529 41.8931C12.3625 42.7387 11.3893 43.2352 10.37 43.0661Z" />
                <path
                    d="M19.3515 26.4838C18.5551 27.5615 17.0377 27.7767 15.96 26.9804C14.887 26.1748 14.6717 24.6589 15.4773 23.5843C16.2767 22.5189 17.7987 22.296 18.8641 23.0954C19.8573 23.8426 20.1171 25.2032 19.5083 26.2532C19.4637 26.3316 19.4145 26.4161 19.3515 26.4838Z" />
                <path
                    d="M71.5347 59.4755C70.54 59.0466 70.0757 57.8982 70.5046 56.9035C70.9336 55.9088 72.0851 55.4368 73.089 55.8704C74.076 56.2947 74.5418 57.4554 74.1144 58.4501C74.0836 58.5239 74.0437 58.5915 74.0037 58.6592C73.5148 59.5062 72.4571 59.8737 71.5347 59.4755Z" />
                <path
                    d="M65.2653 70.2036C64.4213 70.8892 63.1883 70.7555 62.5104 69.9176C61.8247 69.0751 61.9446 67.8437 62.7886 67.158C63.6326 66.4724 64.8656 66.6061 65.5482 67.4363C66.0832 68.0881 66.1247 68.9798 65.7281 69.6624C65.6082 69.8669 65.456 70.0514 65.2653 70.2036Z" />
                <path
                    d="M74.6971 46.0435C73.6086 46.1312 72.6724 45.3256 72.5801 44.2448C72.4971 43.1702 73.2981 42.2201 74.3789 42.1278C75.4627 42.0494 76.4128 42.852 76.4958 43.9266C76.5266 44.3447 76.4282 44.7322 76.2299 45.0735C75.9178 45.6115 75.3628 45.9974 74.6971 46.0435Z" />
                <path
                    d="M51.9655 76.4885C50.9032 76.7053 49.8716 76.0258 49.6548 74.965C49.4381 73.9026 50.1222 72.8618 51.183 72.6451C52.2438 72.4283 53.2861 73.1124 53.5029 74.1732C53.5967 74.6621 53.509 75.1464 53.2753 75.5476C53.0032 76.0181 52.5436 76.3778 51.9655 76.4885Z" />
                <path
                    d="M71.247 32.6776C70.3307 33.2526 69.1192 32.982 68.5396 32.0534C67.9647 31.1372 68.2429 29.9303 69.1592 29.3538C70.0755 28.7788 71.2869 29.0479 71.8619 29.9641C72.2647 30.6083 72.2555 31.3908 71.8988 32.0058C71.7451 32.2702 71.5237 32.4962 71.247 32.6776Z" />
                <path
                    d="M37.2726 75.8936C36.2257 75.5938 35.6261 74.5038 35.9336 73.4615C36.2365 72.4284 37.3265 71.8288 38.3657 72.1224C39.4081 72.4299 40.0076 73.5199 39.7002 74.5622C39.6556 74.7191 39.5925 74.8651 39.5188 74.9927C39.0714 75.7614 38.1582 76.1565 37.2726 75.8936Z" />
                <path
                    d="M59.3016 23.1567C59.2847 23.1475 59.2678 23.1367 59.2509 23.1275C59.2417 23.1229 59.2248 23.1121 59.2079 23.1029C58.2639 22.5664 57.9457 21.3657 58.4899 20.4279C59.0264 19.4839 60.2271 19.1641 61.1711 19.7007C61.188 19.7115 61.2003 19.7284 61.2172 19.7391C61.2341 19.7483 61.2556 19.7499 61.2725 19.7606C62.2119 20.3049 62.5255 21.5148 61.9859 22.4449C61.4417 23.3827 60.241 23.7009 59.3016 23.1567Z" />
                <path
                    d="M27.3104 68.4805C26.5586 69.2661 25.3149 69.2845 24.5385 68.5374C23.7545 67.7856 23.7283 66.5495 24.4724 65.7609C25.2334 64.9814 26.4679 64.9568 27.2535 65.7086C27.9207 66.3481 28.0407 67.3413 27.5948 68.1084C27.5195 68.2376 27.4226 68.3652 27.3104 68.4805Z" />
                <path
                    d="M46.8827 19.5458C45.7973 19.5089 44.9564 18.5988 45.001 17.518C45.0379 16.4326 45.948 15.5917 47.0334 15.6271C48.1141 15.6716 48.9597 16.5741 48.9228 17.6595C48.9105 17.9946 48.8121 18.3021 48.6538 18.5757C48.3032 19.183 47.6376 19.5843 46.8827 19.5458Z" />
                <path
                    d="M19.1594 57.339C18.1247 57.6865 17.0178 57.1361 16.6796 56.1061C16.3321 55.0714 16.8841 53.9645 17.9172 53.6186C18.9457 53.2804 20.0526 53.8307 20.4 54.8654C20.583 55.4158 20.5061 56 20.234 56.4689C20.0019 56.8686 19.6329 57.1914 19.1594 57.339Z" />
                <path
                    d="M34.3087 22.1424C33.334 22.6036 32.161 22.1855 31.6921 21.2062C31.2309 20.2315 31.6491 19.0584 32.6238 18.5972C33.6046 18.1268 34.7761 18.545 35.2373 19.5212C35.5309 20.1361 35.4787 20.8141 35.1681 21.3522C34.9744 21.6843 34.6792 21.9579 34.3087 22.1424Z" />
                <path
                    d="M17.1008 43.6963C16.0277 43.5195 15.3036 42.5064 15.4758 41.441C15.6541 40.3679 16.658 39.6392 17.7311 39.816C18.7949 39.9882 19.5237 40.9936 19.3561 42.0698C19.3192 42.3111 19.2346 42.5356 19.1147 42.7401C18.7196 43.4257 17.9294 43.8239 17.1008 43.6963Z" />
                <path
                    d="M24.3849 30.2595C23.7346 31.125 22.5031 31.3018 21.6314 30.6592C20.7659 30.0089 20.5891 28.7775 21.241 27.9104C21.8836 27.0387 23.115 26.8634 23.9898 27.5199C24.7969 28.1133 25.0029 29.2156 24.5079 30.0689C24.4679 30.1365 24.4325 30.1965 24.3849 30.2595Z" />
            </g>
        </svg>

    </div>


    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-12 col-md-10 col-lg-8 col-xl-6">
                <div class="section-title1">
                    <h2>{{ $recentNewsTitle }}</h2>
                    <p class="mb-0">{{ $recentNewsDescriptions }}</p>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center g-4">
            @if ($recentNewsBlog->count() > 0)
                @foreach ($recentNewsBlog as $key => $recentNews)
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="single-blog-style1 wow animate fadeInDown" data-wow-duration="1.5s"
                            data-wow-delay="0.{{ $key + 1 * 2 }}s">
                            <div class="blog-img">
                                <a href="{{ url('blog/' . $recentNews->slug) }}" class="blog-date"><i
                                        class="bi bi-calendar-check"></i>{{ dateFormat($recentNews->created_at) }}</a>
                                <img alt="image" src="{{ asset('uploads/blog/' . $recentNews->image) }}"
                                    height="340" width="100%">
                            </div>
                            <div class="blog-content">
                                <h5><a
                                        href="{{ url('blog/' . $recentNews->slug) }}">{{ $recentNews->getTranslation('title') }}</a>
                                </h5>
                                <div class="blog-meta">
                                    <div class="author">

                                        @if (fileExists('uploads/users', $recentNews?->users?->image) != false && $recentNews?->users?->image != null)
                                            <img alt="image"
                                                src="{{ asset('uploads/users/' . $recentNews->users->image) }}">
                                        @else
                                            <img alt="image" src="{{ asset('uploads/users/user.png') }}">
                                        @endif
                                        <a href="{{ url('blog/' . $recentNews->slug) }}"
                                            class="author-name">{{ $recentNews->users?->fname . ' ' . $recentNews->users?->lname }}</a>
                                    </div>
                                    <div class="comment">
                                        <img alt="image"
                                            src="{{ asset('frontend/images/icons/comment-icon.svg') }}">
                                        <a href="{{ url('blog/' . $recentNews->slug) }}"
                                            class="comment">{{ $recentNews->comments_count < 9 ? '0' . $recentNews->comments_count : $recentNews->comments_count }}
                                            {{ $recentNews->comments_count > 1 ? 'Comments' : 'Comment' }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h2 class="text-center">{{ translate('No Data Found') }}</h2>
            @endif
        </div>
    </div>
</div>
