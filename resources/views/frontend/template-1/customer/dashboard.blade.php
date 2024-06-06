@extends('frontend.template-1.partials.master')
@section('content')
    @include('frontend.template-1.breadcrumb.breadcrumb')
    <div class="dashboard-section pt-120">
        <img alt="image" src="{{ asset('frontend/images/bg/section-bg.png') }}" class="img-fluid section-bg-top">
        <img alt="image" src="{{ asset('frontend/images/bg/section-bg.png') }}" class="img-fluid section-bg-bottom">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3">
                    @include('frontend.template-1.customer.sidenav')
                </div>
                <div class="col-lg-9">
                    <div class="dashboard-area box--shadow">
                        <div class="row g-4">
                            <div class="col-md-6 col-sm-6">
                                <div class="dashboard-card hover-border1 wow fadeInDown" data-wow-duration="1.5s"
                                    data-wow-delay=".2s">
                                    <div class="header">
                                        <h5>{{ translate('Total Bidding') }}</h5>
                                    </div>
                                    <div class="body">
                                        <div class="counter-item">
                                            <h2>{{ $bidding }}</h2>
                                        </div>
                                        <div class="icon">
                                            <svg width="50" height="50" viewBox="0 0 50 50"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g opacity="0.8">
                                                    <path
                                                        d="M1.66016 0.830078V1.66016H0.830078H0V2.44141V3.22266H0.830078H1.66016V4.05273V4.88281H2.44141H3.22266V4.05273V3.22266H4.05273H4.88281V2.44141V1.66016H4.05273H3.22266V0.830078V0H2.44141H1.66016V0.830078ZM3.22266 2.44141V3.22266H2.44141H1.66016V2.44141V1.66016H2.44141H3.22266V2.44141Z" />
                                                    <path
                                                        d="M44.3555 0.800781L44.3848 1.61133H45.166H45.9473L45.9766 0.800781L46.0059 0H45.166H44.3262L44.3555 0.800781Z" />
                                                    <path
                                                        d="M23.7207 2.71485L22.4805 4.24805L20.7617 4.98048C19.8145 5.38087 19.043 5.72266 19.043 5.75196C19.043 5.78126 19.4824 6.55274 20.0098 7.46094L20.9863 9.13087L21.1328 11.0645C21.2109 12.1387 21.2988 13.0274 21.3184 13.0469C21.3477 13.0762 22.1777 12.8906 23.1836 12.6367L25 12.1777L26.8164 12.6367C27.8223 12.8906 28.6523 13.0762 28.6816 13.0469C28.7012 13.0274 28.7891 12.1387 28.8672 11.0645L29.0137 9.13087L30 7.44141C30.5371 6.51368 30.9668 5.74219 30.9473 5.72266C30.9277 5.70313 30.1465 5.3711 29.2188 4.97071L27.5195 4.24805L26.2891 2.71485C25.6055 1.87501 25.0293 1.18165 25 1.18165C24.9707 1.18165 24.3945 1.87501 23.7207 2.71485ZM25.7813 4.67774C26.4746 5.53712 26.4844 5.53712 27.5488 6.00587C28.1348 6.25977 28.6133 6.50391 28.6133 6.55274C28.6133 6.5918 28.3496 7.07032 28.0273 7.61719L27.4414 8.60352L27.3535 9.78516C27.2949 10.4297 27.2363 10.9863 27.207 11.0059C27.1777 11.0352 26.6699 10.9375 26.0742 10.7813L25 10.4981L23.9258 10.7813C23.3301 10.9375 22.8223 11.0352 22.793 11.0059C22.7637 10.9863 22.7051 10.4297 22.6465 9.78516L22.5586 8.60352L21.9727 7.61719C21.6504 7.07032 21.3867 6.5918 21.3867 6.55274C21.3867 6.50391 21.8652 6.25977 22.4512 6.00587C23.5156 5.53712 23.5254 5.53712 24.2188 4.67774C24.5996 4.19923 24.9512 3.8086 25 3.8086C25.0488 3.8086 25.4004 4.19923 25.7813 4.67774Z" />
                                                    <path
                                                        d="M42.7734 2.44141V3.22266H43.5547H44.3262L44.3555 4.02344L44.3848 4.83398H45.166H45.9473L45.9766 4.02344L46.0059 3.22266H46.7773H47.5586V2.44141V1.66016H46.7773H45.9961V2.44141V3.22266H45.166H44.3359V2.44141V1.66016H43.5547H42.7734V2.44141Z" />
                                                    <path
                                                        d="M12.1094 7.27539V8.10547H12.8906H13.6719V7.27539V6.44531H12.8906H12.1094V7.27539Z" />
                                                    <path
                                                        d="M36.3281 7.27539V8.10547H37.1094H37.8906V7.27539V6.44531H37.1094H36.3281V7.27539Z" />
                                                    <path
                                                        d="M14.5508 10.498V11.3281H15.332H16.1133V10.498V9.66797H15.332H14.5508V10.498Z" />
                                                    <path
                                                        d="M33.8867 10.498V11.3281H34.668H35.4492V10.498V9.66797H34.668H33.8867V10.498Z" />
                                                    <path
                                                        d="M5.68359 10.957L4.9707 11.8652L3.94531 12.2949C3.38867 12.5293 2.92969 12.7539 2.92969 12.7832C2.92969 12.8125 3.19336 13.291 3.50586 13.8379L4.07227 14.834L4.14062 15.9375C4.17969 16.5332 4.22852 17.0508 4.24805 17.0801C4.27734 17.0996 4.77539 17.0019 5.37109 16.8555L6.43555 16.5723L7.51953 16.8457C8.11523 16.9922 8.62305 17.0996 8.64258 17.0801C8.66211 17.0605 8.7207 16.5234 8.76953 15.8984L8.86719 14.7461L9.41406 13.8086C9.7168 13.3008 9.96094 12.8418 9.96094 12.8027C9.96094 12.7637 9.51172 12.5391 8.96484 12.2949C7.97852 11.875 7.95898 11.8555 7.25586 10.9863C6.85547 10.498 6.50391 10.0976 6.46484 10.0781C6.42578 10.0683 6.07422 10.4687 5.68359 10.957ZM6.70898 12.9004C6.8457 13.0664 7.12891 13.2617 7.34375 13.3496L7.72461 13.4961L7.4707 13.916C7.32422 14.1797 7.22656 14.4922 7.22656 14.7363V15.1269L6.91406 15.0293C6.73828 14.9805 6.38672 14.9609 6.13281 15L5.66406 15.0586V14.6875C5.66406 14.4726 5.56641 14.1504 5.41992 13.9062L5.17578 13.4961L5.51758 13.3789C5.70312 13.3203 5.97656 13.125 6.12305 12.9394C6.26953 12.7637 6.40625 12.6074 6.42578 12.6074C6.44531 12.5976 6.57227 12.7344 6.70898 12.9004Z" />
                                                    <path
                                                        d="M42.7734 10.957C42.041 11.8555 42.0313 11.8652 41.0352 12.2949C40.4883 12.5391 40.0391 12.7637 40.0391 12.8027C40.0391 12.8418 40.2832 13.3008 40.5859 13.8086L41.1328 14.7461L41.2305 15.8984C41.2793 16.5234 41.3379 17.0605 41.3574 17.0801C41.377 17.0996 41.8848 16.9922 42.4805 16.8457L43.5645 16.5723L44.6289 16.8555C45.2246 17.0019 45.7227 17.0996 45.752 17.0801C45.7715 17.0508 45.8203 16.5332 45.8594 15.9375L45.9278 14.8437L46.5137 13.8086C46.836 13.2422 47.0801 12.7734 47.0606 12.7539C47.041 12.7344 46.5723 12.5195 46.0254 12.2851C45.0391 11.8555 45.0195 11.8457 44.3359 10.9766C43.9453 10.498 43.6035 10.0976 43.5645 10.0781C43.5352 10.0683 43.1738 10.459 42.7734 10.957ZM43.8574 12.9297C44.0137 13.1152 44.3067 13.3203 44.4824 13.3789L44.8242 13.4961L44.5801 13.9062C44.4336 14.1504 44.3359 14.4726 44.3359 14.6875V15.0586L43.877 15C43.6133 14.9609 43.2617 14.9805 43.0957 15.0293L42.7734 15.1269V14.7363C42.7734 14.4922 42.6758 14.1797 42.5293 13.916L42.2754 13.4961L42.666 13.3496C42.8711 13.2617 43.1445 13.0664 43.2715 12.9004C43.3984 12.7441 43.5156 12.6074 43.5352 12.6074C43.5449 12.5976 43.6914 12.7441 43.8574 12.9297Z" />
                                                    <path
                                                        d="M16.9238 12.9102L16.3184 13.4082L16.6602 13.8574C17.8516 15.4102 18.8965 17.4316 19.4238 19.1992C19.9707 21.0449 20.0391 21.582 20.1074 24.5605L20.166 27.3926L20.9863 27.4219L21.8066 27.4512L21.7481 24.7852C21.6797 21.4062 21.4551 19.9902 20.6348 17.7734C20 16.0645 18.7109 13.75 17.8027 12.7246L17.5293 12.4023L16.9238 12.9102Z" />
                                                    <path
                                                        d="M32.002 12.959C30.5957 14.7949 29.3848 17.2852 28.8184 19.4824C28.4082 21.1133 28.3008 22.0508 28.252 24.7852L28.1934 27.4512L29.0137 27.4219L29.834 27.3926L29.8926 24.5605C29.9609 21.582 30.0293 21.0449 30.5762 19.1992C31.1035 17.4414 32.168 15.3613 33.2617 13.9746L33.6914 13.4277L33.4277 13.2031C33.2715 13.0762 32.9883 12.8516 32.793 12.6855L32.4414 12.4023L32.002 12.959Z" />
                                                    <path
                                                        d="M24.2188 14.502V15.332H25H25.7812V14.502V13.6719H25H24.2188V14.502Z" />
                                                    <path
                                                        d="M10.6152 16.4551C9.99023 17.7148 9.47266 18.7695 9.47266 18.789C9.47266 18.8086 9.92187 19.1504 10.4687 19.541C11.9824 20.625 13.3398 22.0117 15.3906 24.5605C16.3965 25.8203 17.2363 26.8457 17.2461 26.8261C17.2754 26.7968 16.6309 21.6992 16.5039 20.9961C16.1719 19.1504 15.2637 17.373 13.9355 15.9473C13.3691 15.3418 11.9824 14.1601 11.8359 14.1601C11.7969 14.1601 11.25 15.1953 10.6152 16.4551ZM13.2422 17.5976C14.0039 18.5742 14.6582 19.9804 14.8828 21.0937C14.9512 21.4258 14.9414 21.416 14.3066 20.7324C13.7402 20.1074 12.334 18.8574 11.7383 18.4375L11.5137 18.2812L11.9336 17.4414L12.3437 16.6015L12.5781 16.8262C12.7051 16.9433 13.0078 17.2949 13.2422 17.5976Z" />
                                                    <path
                                                        d="M37.3828 14.7266C35.293 16.3965 33.9355 18.5937 33.4961 21.0058C33.3691 21.6992 32.7246 26.7968 32.7539 26.8261C32.7637 26.8457 33.6035 25.8203 34.6094 24.5605C36.6601 22.0117 38.0176 20.625 39.5312 19.541C40.0781 19.1504 40.5273 18.8086 40.5273 18.789C40.5273 18.6816 38.2226 14.1601 38.164 14.1601C38.125 14.1601 37.7734 14.4141 37.3828 14.7266ZM38.2715 18.4375C37.6465 18.8769 36.25 20.1172 35.7226 20.7129C35.3906 21.084 35.1074 21.3672 35.0781 21.3476C35.0098 21.2695 35.3808 20.0586 35.7031 19.3652C36.084 18.5156 36.582 17.7539 37.1875 17.0801L37.6367 16.582L38.0664 17.4316L38.4863 18.2812L38.2715 18.4375Z" />
                                                    <path
                                                        d="M24.2188 22.168V27.4414H25H25.7812V22.168V16.8945H25H24.2188V22.168Z" />
                                                    <path
                                                        d="M46.7773 22.5586V23.3301L45.9766 23.3594L45.166 23.3887L45.1367 24.1895L45.1074 25H45.9473H46.7773V25.8301V26.6602H47.5586H48.3398V25.8301V25H49.1699H50V24.1699V23.3301L49.1992 23.3594L48.3887 23.3887L48.3594 24.1895L48.3301 25H47.5586H46.7773V24.1699V23.3398H47.5586H48.3398V22.5586V21.7773H47.5586H46.7773V22.5586Z" />
                                                    <path
                                                        d="M1.66016 25.8301V26.6602H0.830078H0V27.4414V28.2227H0.830078H1.66016V29.0527V29.8828H2.44141H3.22266V29.0527V28.2227H4.05273H4.88281V27.4414V26.6602H4.05273H3.22266V25.8301V25H2.44141H1.66016V25.8301ZM3.22266 27.4414V28.2227H2.44141H1.66016V27.4414V26.6602H2.44141H3.22266V27.4414Z" />
                                                    <path
                                                        d="M8.41797 32.1777C7.54883 33.9258 6.83594 35.3711 6.83594 35.4004C6.83594 35.4297 7.4707 35.4492 8.25195 35.4492H9.66797V42.7246V50H25H40.332V42.7246V35.4492H41.748C42.5293 35.4492 43.1641 35.4297 43.1641 35.4004C43.1641 35.3711 42.4512 33.9258 41.582 32.1777L39.9902 29.0039H25H10.0098L8.41797 32.1777ZM23.6328 30.7129C23.6328 30.7422 23.2812 31.4648 22.8516 32.3242L22.0703 33.8867H15.7227H9.375L10.1758 32.2754L10.9863 30.6641H17.3047C20.791 30.6641 23.6328 30.6836 23.6328 30.7129ZM39.8242 32.2754L40.625 33.8867H34.2773H27.9297L27.1484 32.3242C26.7188 31.4648 26.3672 30.7422 26.3672 30.7129C26.3672 30.6836 29.209 30.6641 32.6953 30.6641H39.0137L39.8242 32.2754ZM25 40.332H25.7812L25.8008 36.8359L25.8301 33.3496L26.3672 34.3945L26.9043 35.4492H32.7832H38.6719V41.8945V48.3398H32.2266H25.7812V45.5566V42.7734H25H24.2188V45.5566V48.3398H17.7734H11.3281V41.8945V35.4492H17.2168H23.0957L23.6328 34.3945L24.1699 33.3496L24.1992 36.8359L24.2188 40.332H25Z" />
                                                    <path
                                                        d="M12.8906 42.7246V43.5547H15.332H17.7832L17.7539 42.7441L17.7246 41.9434L15.3125 41.9141L12.8906 41.8945V42.7246Z" />
                                                    <path
                                                        d="M12.959 45.1758C12.9199 45.2148 12.8906 45.5957 12.8906 46.0156V46.7773H15.332H17.7832L17.7539 45.9668L17.7246 45.166L15.3711 45.1367C14.082 45.127 12.998 45.1465 12.959 45.1758Z" />
                                                    <path
                                                        d="M19.4043 45.1758C19.3652 45.2148 19.3359 45.5957 19.3359 46.0156V46.7773H20.166H21.0059L20.9766 45.9668L20.9473 45.166L20.2148 45.1367C19.8047 45.1269 19.4434 45.1367 19.4043 45.1758Z" />
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="dashboard-card hover-border1 wow fadeInDown" data-wow-duration="1.5s"
                                    data-wow-delay=".4s">
                                    <div class="header">
                                        <h5>{{ translate('Total Orders') }}</h5>
                                    </div>
                                    <div class="body">
                                        <div class="counter-item">
                                            <h2>{{ $purchases }}</h2>
                                        </div>
                                        <div class="icon">
                                            <svg width="46" height="48" viewBox="0 0 46 48"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.68749 7.59375V14.625H1.75976C0.900385 14.625 0.802729 14.6445 0.587885 14.8691C0.0996037 15.3477 0.167963 15.4648 2.44335 18.209C3.63476 19.6348 4.65038 20.7676 4.7871 20.8164C4.94335 20.875 5.11913 20.875 5.27538 20.8164C5.4121 20.7676 6.42773 19.6348 7.61913 18.209C9.89453 15.4648 9.96288 15.3477 9.4746 14.8691C9.25976 14.6445 9.1621 14.625 8.30273 14.625H7.37499V7.59375V0.562498H6.59374H5.81249V8.13086V15.709L6.05663 15.9434C6.24218 16.1387 6.38867 16.1875 6.78906 16.1875H7.2871L6.20312 17.4766C5.60742 18.1895 5.08007 18.7754 5.03124 18.7754C4.98242 18.7754 4.45507 18.1895 3.85937 17.4766L2.77538 16.1875H3.27343C3.67382 16.1875 3.82031 16.1387 4.00585 15.9434L4.24999 15.709V8.13086V0.562498H3.46874H2.68749V7.59375Z" />
                                                <path
                                                    d="M10.5488 0.650391C9.66992 0.865234 8.85937 1.5293 8.44922 2.36914C8.11719 3.04297 8.10742 4.30273 8.42969 4.95703C8.77148 5.65039 9.16211 6.07031 9.83594 6.42188C10.4219 6.73438 10.5098 6.75391 11.6523 6.79297L12.8437 6.83203V10.1914V13.541L10.9785 16.7637C9.06445 20.0742 8.52734 21.2168 8.16602 22.6426C7.61914 24.8398 7.63867 25.6211 8.35156 32.0566C8.73242 35.5137 8.9375 37.7207 8.9375 38.4727V39.625H8.40039C7.95117 39.625 7.81445 39.6641 7.61914 39.8691L7.375 40.1035V43.5312V46.959L7.61914 47.1934L7.85352 47.4375H15.1875H22.5215L22.7559 47.1934L23 46.959V43.5312V40.1035L22.7559 39.8691C22.5801 39.6836 22.4141 39.625 22.0723 39.625C21.8281 39.625 21.6328 39.5957 21.6328 39.5664C21.6328 39.5371 21.916 39.0293 22.2676 38.4434C23.4004 36.5488 23.6836 35.6016 23.752 33.5215C23.8105 31.793 23.7129 30.9727 23.2539 29.6348L22.9316 28.6875H28.5859H34.2402L34.4746 28.4434L34.7187 28.209V17.5254V6.83203L35.9199 6.79297C37.0527 6.75391 37.1406 6.73438 37.7266 6.42188C38.4102 6.06055 38.7031 5.75781 39.0937 5.01562C39.3086 4.5957 39.3477 4.39062 39.3477 3.6875C39.3574 2.92578 39.3281 2.80859 39.0254 2.24219C38.6641 1.56836 38.2539 1.17773 37.5508 0.835938L37.1113 0.611328L23.9766 0.591797C16.75 0.591797 10.7148 0.611328 10.5488 0.650391ZM12.8437 3.6875V5.25H11.916C10.8125 5.25 10.4414 5.12305 10.0508 4.60547C9.81641 4.30273 9.76758 4.14648 9.76758 3.6875C9.76758 3.23828 9.81641 3.07227 10.0312 2.78906C10.4316 2.26172 10.793 2.125 11.8965 2.125H12.8437V3.6875ZM33.1367 11.1289L33.1074 20.1328L32.4727 20.25C29.377 20.8262 26.8574 23.3457 26.2812 26.4414L26.1641 27.0762L24.1914 27.1055L22.2285 27.125L22.1992 23.9805C22.1699 20.8457 22.1699 20.8262 21.9258 20.3379C21.623 19.7129 21.0371 19.127 20.4121 18.8242C20.0117 18.6289 19.7773 18.5801 19.0937 18.5801C18.3711 18.5801 18.1953 18.6191 17.7461 18.8535C17.1602 19.166 16.5352 19.7617 16.3594 20.1914C16.2227 20.5234 16.2031 20.5332 15.4805 20.3379C15.1875 20.2598 14.8262 20.1914 14.6797 20.1914H14.4062V11.1582V2.125H23.7812H33.1562L33.1367 11.1289ZM37.1992 2.45703C37.8926 2.98438 38.0293 3.93164 37.5215 4.60547C37.1309 5.11328 36.7305 5.25 35.6562 5.25H34.7187V3.67773V2.10547L35.7734 2.14453C36.7695 2.17383 36.8574 2.19336 37.1992 2.45703ZM13.127 28.502C13.3223 28.668 13.5176 28.6875 14.6602 28.6875H15.9687V29.0781V29.4688H16.75H17.5312V25.4062C17.5312 20.8848 17.5312 20.9141 18.1953 20.4062C18.4785 20.1914 18.6445 20.1426 19.0937 20.1426C19.543 20.1426 19.709 20.1914 19.9922 20.4062C20.6367 20.9043 20.6562 21.002 20.6562 24.3125V27.2715L21.291 28.8633C21.6328 29.7324 21.9844 30.7773 22.0723 31.1777C22.2578 32.0859 22.2676 33.9121 22.082 34.8594C21.8867 35.875 21.6328 36.4609 20.6953 38.0332C20.2461 38.7949 19.875 39.4688 19.875 39.5176C19.875 39.5957 18.4004 39.625 15.1875 39.625H10.5V38.4238C10.5 37.5938 10.3145 35.5527 9.91406 31.959C9.29883 26.4512 9.24023 25.4551 9.46484 24.0977C9.75781 22.2617 10.0898 21.4707 11.6523 18.7363L12.7949 16.7344L12.8437 22.5254L12.8926 28.3164L13.127 28.502ZM15.5488 21.9785L15.9199 22.0957L15.9492 24.6152L15.9687 27.125H15.1875H14.4062V24.4297V21.7246L14.7871 21.793C15.002 21.8223 15.3437 21.9102 15.5488 21.9785ZM33.1562 24.4395V27.125H30.4707C27.4238 27.125 27.6777 27.2129 27.9316 26.2461C28.3809 24.5664 29.6895 23.0039 31.291 22.2617C31.8672 21.998 32.5898 21.7734 32.9414 21.7637L33.1562 21.7539V24.4395ZM21.4375 43.5312V45.875H15.1875H8.9375V43.5312V41.1875H15.1875H21.4375V43.5312Z" />
                                                <path
                                                    d="M22.7559 3.7754C20.7246 4.21485 19.2305 5.58204 18.5469 7.59376C18.4102 7.98439 18.3613 8.41407 18.3613 9.15626C18.3613 10.7383 18.8594 11.9395 19.9531 13.0332C22.0625 15.1426 25.5 15.1328 27.6191 13.0137C29.2988 11.334 29.6992 8.91212 28.6641 6.75392C27.7949 4.94728 26.0566 3.81446 24.0254 3.73634C23.5469 3.71681 22.9707 3.73634 22.7559 3.7754ZM25.3828 5.6211C26.2715 6.03126 26.8379 6.59767 27.2773 7.47657C27.6191 8.1797 27.6387 8.26759 27.6387 9.15626C27.6387 10.0449 27.6191 10.1328 27.2773 10.8359C26.8379 11.7246 26.2715 12.2715 25.3633 12.7012C24.7676 12.9844 24.6211 13.0137 23.7812 13.0137C22.9414 13.0137 22.7949 12.9844 22.1992 12.7012C21.291 12.2715 20.7246 11.7246 20.2852 10.8359C19.9434 10.1328 19.9238 10.0449 19.9238 9.16603C19.9238 8.31642 19.9531 8.16993 20.2363 7.57423C20.627 6.74415 21.1836 6.13868 21.916 5.75782C22.6777 5.34767 23.1074 5.25001 23.9961 5.28907C24.5918 5.31837 24.8945 5.39649 25.3828 5.6211Z" />
                                                <path
                                                    d="M38.625 18.5312V25.5625H37.6973C36.8379 25.5625 36.7402 25.582 36.5254 25.8066C36.0371 26.2852 36.1055 26.4023 38.3809 29.1465C39.5723 30.5723 40.5879 31.7051 40.7246 31.7539C40.8809 31.8125 41.0566 31.8125 41.2129 31.7539C41.3496 31.7051 42.3652 30.5723 43.5566 29.1465C45.832 26.4023 45.9004 26.2852 45.4121 25.8066C45.1973 25.582 45.0996 25.5625 44.2402 25.5625H43.3125V18.5312V11.5H42.5312H41.75V19.0684V26.6465L41.9941 26.8809C42.1797 27.0762 42.3262 27.125 42.7266 27.125H43.2246L42.1406 28.4141C41.5449 29.127 41.0176 29.7129 40.9687 29.7129C40.9199 29.7129 40.3926 29.127 39.7969 28.4141L38.7129 27.125H39.2109C39.6113 27.125 39.7578 27.0762 39.9434 26.8809L40.1875 26.6465V19.0684V11.5H39.4062H38.625V18.5312Z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="dashboard-card hover-border1 wow fadeInDown" data-wow-duration="1.5s"
                                    data-wow-delay=".6s">
                                    <div class="header">
                                        <h5>{{ translate('Total Diposits') }}</h5>
                                    </div>
                                    <div class="body">
                                        <div class="counter-item">
                                            <h2>{{ currency_symbol() . $deposits }}</h2>
                                        </div>
                                        <div class="icon">
                                            <svg width="50" height="50" viewBox="0 0 50 50"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.70117 2.44141C8.06641 2.58789 7.88086 2.91016 6.78711 5.71289L5.76172 8.33984V13.8672C5.76172 19.1113 5.77148 19.4141 5.9375 19.5605C6.18164 19.7852 6.69922 19.7656 6.93359 19.5312C7.11914 19.3457 7.12891 19.209 7.12891 14.3066V9.27734H14.6973H22.2656V14.7949C22.2656 20.752 22.2559 20.6738 22.7734 21.0352C22.998 21.2012 23.4961 21.2402 23.7891 21.123C23.8867 21.0938 24.7949 20.3125 25.8203 19.4043C26.8457 18.4961 27.7344 17.7246 27.8027 17.7051C27.8711 17.6758 28.6621 18.3105 29.5605 19.1113C32.041 21.2988 31.9043 21.1914 32.2852 21.1914C32.7344 21.1914 33.1348 20.9766 33.2812 20.6543C33.3691 20.4688 33.3984 18.9453 33.3984 14.8438V9.27734H40.9668H48.5352V25.4395C48.5352 43.4473 48.5938 41.9824 47.8613 42.1875C47.4219 42.3047 34.5703 42.3242 34.5703 42.1973C34.5703 42.1582 34.8926 42.0898 35.293 42.0703C36.3965 42.002 37.0801 41.5332 37.5098 40.5762C37.9688 39.5508 37.7246 38.3887 36.8945 37.6465L36.5039 37.2852L36.6992 37.0801C37.2266 36.5234 37.4707 35.2344 37.1973 34.502C37.0312 34.043 36.6211 33.5254 36.25 33.2812C36.0547 33.1445 33.3691 32.0215 30.293 30.7617C27.2168 29.5117 24.7168 28.4766 24.7363 28.457C24.7559 28.4375 25.9668 28.0566 27.4316 27.5977C28.9648 27.1289 30.2539 26.6699 30.4688 26.5234C31.2109 26.0352 31.6113 24.8926 31.3574 23.9648C31.2402 23.5156 30.6738 22.8125 30.2637 22.6074C29.5898 22.2559 29.1406 22.2461 27.6367 22.5586C19.8633 24.1992 15.8496 24.9414 13.2129 25.2441C11.5234 25.4395 11.1719 25.4199 11.2207 25.1465C11.4062 24.1016 11.2891 23.6328 10.7715 23.2617C10.4199 23.0273 6.35742 21.3867 6.11328 21.3867C5.71289 21.3867 5.07812 21.7871 4.88281 22.168C4.43359 23.0371 0 34.082 0 34.3164C0 34.6582 0.214844 35.166 0.46875 35.3809C0.742188 35.6348 4.6582 37.2168 5.13672 37.2754C5.61523 37.334 6.05469 37.1387 6.36719 36.7188C6.48438 36.5527 6.64062 36.4258 6.71875 36.4258C6.97266 36.4258 8.50586 37.1973 9.12109 37.6367C9.45312 37.8711 10.1562 38.5254 10.6836 39.1016C11.2109 39.668 11.9336 40.3516 12.2852 40.625C12.8906 41.0742 14.1113 41.7578 14.9414 42.0996C15.2441 42.2266 14.9121 42.2363 11.6797 42.2656C6.98242 42.2949 7.12891 42.3535 7.12891 40.3711C7.12891 39.4531 7.09961 39.2383 6.95312 39.0527C6.72852 38.7793 6.24023 38.7598 5.95703 39.0137C5.78125 39.1699 5.76172 39.3066 5.76172 40.5176C5.76172 41.709 5.79102 41.8945 5.99609 42.3438C6.12305 42.6172 6.37695 42.959 6.5625 43.0957C7.30469 43.6719 7.12891 43.6523 13.2129 43.6523H18.8184L23.623 45.6152C28.125 47.4414 28.4766 47.5684 29.0527 47.5684C30.4199 47.5684 31.543 46.4941 31.543 45.1953V44.8535L32.1094 44.7852C32.793 44.707 33.6328 44.3164 33.9062 43.9355L34.1211 43.6523H41.0547C45.7617 43.6523 48.125 43.6133 48.3887 43.5449C48.9062 43.4082 49.7168 42.5781 49.8828 42.0312C49.9707 41.7188 50 37.8711 50 25.0293V8.4375L48.9355 5.72266C48.3496 4.23828 47.7734 2.91016 47.6562 2.7832C47.5391 2.65625 47.2559 2.50977 47.0215 2.45117C46.4746 2.31445 43.291 2.31445 42.8906 2.45117C42.3438 2.63672 42.2656 3.4375 42.7637 3.70117C42.8809 3.76953 43.6914 3.80859 44.8047 3.80859H46.6602L47.1191 5C47.373 5.66406 47.7246 6.5625 47.9004 7.00195C48.0762 7.44141 48.1934 7.82227 48.1641 7.85156C48.1348 7.88086 44.7852 7.91016 40.7129 7.91016H33.3008L33.252 7.68555C33.2227 7.56836 33.0078 6.66016 32.7832 5.66406L32.3633 3.85742L35.2441 3.82812C38.0469 3.80859 38.1348 3.79883 38.3496 3.59375C38.75 3.22266 38.6035 2.63672 38.0762 2.45117C37.7051 2.32422 9.23828 2.31445 8.70117 2.44141ZM23.3398 3.86719C23.3398 3.99414 22.4512 7.74414 22.4023 7.82227C22.3438 7.92969 7.51953 7.93945 7.51953 7.8418C7.51953 7.7832 8.62305 4.89258 8.94531 4.12109L9.07227 3.80859H16.2012C20.127 3.80859 23.3398 3.83789 23.3398 3.86719ZM31.3574 5.81055C31.6016 6.88477 31.7969 7.79297 31.7676 7.83203C31.709 7.94922 23.9258 7.92969 23.9258 7.82227C23.9258 7.77344 24.1211 6.875 24.3652 5.83008C24.6094 4.77539 24.8047 3.89648 24.8047 3.86719C24.8047 3.82812 26.1719 3.81836 27.8516 3.82812L30.8984 3.85742L31.3574 5.81055ZM32.0312 14.3164C32.0312 19.0332 32.0215 19.3555 31.8652 19.2285C31.7773 19.1504 31.0645 18.5254 30.2832 17.832C29.502 17.1484 28.7109 16.4648 28.5449 16.3379C28.1738 16.0449 27.6465 16.0156 27.2852 16.2598C27.0508 16.4062 24.834 18.3398 24.0527 19.082L23.7305 19.375V14.3262V9.27734H27.8809H32.0312V14.3164ZM8.13477 23.6621C9.64844 24.2773 9.86328 24.3945 9.83398 24.5605C9.78516 24.8145 5.37109 35.6641 5.26367 35.7812C5.16602 35.8984 1.44531 34.375 1.48438 34.2285C1.50391 34.1699 2.54883 31.582 3.80859 28.4863C5.60547 24.0723 6.13281 22.8613 6.25 22.9004C6.32812 22.9297 7.17773 23.2715 8.13477 23.6621ZM29.5801 23.877C30.1367 24.1602 30.1465 25.0977 29.5996 25.3809C29.4922 25.4492 27.832 25.9766 25.9277 26.5723C24.0234 27.1582 22.3535 27.6953 22.2168 27.7539C21.9238 27.8906 21.7773 28.2812 21.8945 28.623C22.002 28.9453 21.6211 28.7793 29.1504 31.8359C32.4805 33.1934 35.3223 34.3848 35.4688 34.4922C36.0254 34.873 36.0352 35.791 35.4785 36.2305C34.9316 36.6602 34.9219 36.6602 30.1758 34.7266C27.7344 33.7207 25.6445 32.9102 25.5273 32.9102C24.9609 32.9102 24.6484 33.6816 25.0586 34.082C25.1562 34.1797 27.5977 35.2148 30.4688 36.377C34.1211 37.8613 35.7812 38.584 35.9766 38.7695C36.1719 38.9648 36.2695 39.1602 36.2988 39.4922C36.3477 39.9023 36.3281 39.9609 36.0059 40.2832C35.6836 40.6055 35.4883 40.6738 35.0098 40.625C34.9023 40.6152 32.4316 39.6387 29.5117 38.457C23.7695 36.123 23.877 36.1426 23.5449 36.7285C23.3398 37.0996 23.4668 37.4609 23.9062 37.6855C24.1016 37.7832 25.918 38.5352 27.9297 39.3555C32.7051 41.2988 32.7637 41.3184 32.9492 41.6895C33.3594 42.4707 32.8125 43.3594 31.9238 43.3594C31.8066 43.3594 29.7168 42.5488 27.2852 41.5527C24.8438 40.5566 22.7832 39.7461 22.7148 39.7461C22.6465 39.7461 22.4707 39.834 22.3242 39.9512C22.0117 40.1953 21.9727 40.7031 22.2559 40.957C22.3535 41.0449 24.0137 41.7578 25.9375 42.5488C27.8711 43.3301 29.5605 44.0527 29.707 44.1602C30.0195 44.375 30.2148 44.9121 30.127 45.3027C30.0977 45.4492 29.9414 45.7031 29.7852 45.8496C29.2383 46.377 29.3066 46.3965 21.7773 43.3203C17.9883 41.7773 14.6289 40.3809 14.3066 40.2148C13.4961 39.8047 12.9492 39.3848 12.207 38.6035C10.3516 36.6504 9.44336 35.9668 7.89062 35.332L7.13867 35.0293L7.28516 34.6777C7.36328 34.4824 8.04688 32.8125 8.80859 30.957C9.56055 29.1016 10.2637 27.3926 10.3613 27.1484L10.5566 26.6992L11.4648 26.7383C12.627 26.7871 13.7305 26.6699 17.041 26.1133C19.4043 25.7129 25.752 24.4531 27.9297 23.9453C28.9551 23.7012 29.2285 23.6914 29.5801 23.877Z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="dashboard-card hover-border1 wow fadeInDown" data-wow-duration="1.5s"
                                    data-wow-delay=".8s">
                                    <div class="header">
                                        <h5>{{ translate('Total Bids Win') }}</h5>
                                    </div>
                                    <div class="body">
                                        <div class="counter-item">
                                            <h2>{{ $wins }}</h2>
                                        </div>
                                        <div class="icon">
                                            <svg width="48" height="32" viewBox="0 0 24 16"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.69687 0.682812C7.36406 0.842187 7.18125 1.01094 7.03125 1.31094C6.77344 1.82656 6.8625 2.38906 7.275 2.81562L7.50469 3.05469L7.35469 3.47656C6.96094 4.57812 6.4125 5.68906 5.90156 6.41094C5.17031 7.44219 4.5 7.76562 3.77812 7.42344C3.25781 7.17969 2.59219 6.39687 2.05781 5.40312L1.80937 4.93437L1.95 4.84062C2.39531 4.52656 2.55469 4.22656 2.55469 3.71094C2.55469 3.17187 2.36719 2.83437 1.92656 2.57187C1.65 2.4125 1.125 2.375 0.810937 2.49219C0.309375 2.68437 0 3.14375 0 3.71094C0 4.25 0.248437 4.65312 0.740625 4.90156L0.91875 4.99062L2.14687 8.57656L3.375 12.1625V13.6859V15.2141L3.49687 15.3078L3.62344 15.4062H12H20.3766L20.5031 15.3078L20.625 15.2141V13.6859V12.1578L21.8578 8.5625C23.0719 5.00937 23.0859 4.9625 23.2312 4.91094C23.3109 4.88281 23.4656 4.77969 23.5781 4.68594C24.1406 4.20312 24.15 3.24687 23.5922 2.74531C23.3109 2.49219 23.0391 2.40312 22.6219 2.43125C22.1062 2.46406 21.7922 2.67031 21.5531 3.125C21.4078 3.40625 21.3984 3.99219 21.5344 4.26406C21.6328 4.46094 21.8344 4.69062 22.0453 4.83594L22.1719 4.92969L21.8719 5.43125C21.2953 6.39219 20.7328 7.02969 20.1891 7.35781C19.9125 7.52187 19.8234 7.55 19.5187 7.56875C19.1906 7.5875 19.1484 7.58281 18.8297 7.42344C18.3187 7.17031 17.7797 6.59375 17.2781 5.76406C17.025 5.3375 16.4484 4.11406 16.2422 3.55625L16.0641 3.07812L16.2891 2.88125C16.5984 2.60937 16.7344 2.30469 16.7344 1.88281C16.7297 1.16094 16.2469 0.65 15.525 0.603125C14.5922 0.542187 13.9219 1.4375 14.2312 2.3375C14.3203 2.60469 14.5781 2.91406 14.8172 3.03594C14.9156 3.08281 15 3.14375 15 3.1625C15 3.24219 14.7234 4.01562 14.5078 4.53125C13.6828 6.53281 12.8437 7.53125 11.9953 7.53125C11.2453 7.53125 10.3828 6.69219 9.50625 5.11719C9.25312 4.6625 8.85469 3.82812 8.67187 3.36406L8.58281 3.13437L8.73281 3.07344C8.81719 3.04062 8.9625 2.9375 9.06562 2.84375C9.57656 2.38437 9.61406 1.54062 9.15 1.01094C8.82187 0.635937 8.13281 0.48125 7.69687 0.682812ZM8.5125 1.55C8.73281 1.77031 8.7375 2.02344 8.52656 2.22969C8.20781 2.55312 7.6875 2.32812 7.6875 1.86875C7.6875 1.71406 7.8375 1.49844 7.9875 1.4375C8.19375 1.35312 8.34844 1.38594 8.5125 1.55ZM15.7781 1.55C15.9984 1.77031 16.0031 2.02344 15.7922 2.22969C15.4734 2.55312 14.9531 2.32812 14.9531 1.86875C14.9531 1.71406 15.1031 1.49844 15.2531 1.4375C15.4594 1.35312 15.6141 1.38594 15.7781 1.55ZM1.62187 3.37812C1.84219 3.59844 1.84219 3.82344 1.62187 4.04375C1.29375 4.37187 0.801562 4.16562 0.796875 3.70156C0.796875 3.54688 0.825 3.47656 0.942187 3.36406C1.14844 3.15312 1.40156 3.15781 1.62187 3.37812ZM23.0578 3.36406C23.3812 3.6875 23.1516 4.20312 22.6875 4.20312C22.4672 4.20312 22.2187 3.94062 22.2187 3.71094C22.2187 3.575 22.2562 3.5 22.3781 3.37812C22.5984 3.15781 22.8516 3.15312 23.0578 3.36406ZM8.34844 4.625C9.31875 6.67812 10.3359 7.89219 11.3812 8.23906C11.625 8.31875 11.7609 8.3375 12.1125 8.31875C12.4734 8.30469 12.5859 8.27656 12.8625 8.14531C13.7297 7.72812 14.6812 6.36875 15.3562 4.59219C15.4594 4.325 15.5484 4.10938 15.5625 4.10938C15.5766 4.10938 15.6469 4.26406 15.7219 4.45156C16.1672 5.5625 16.9406 6.84687 17.5266 7.44219C18.1734 8.09375 18.75 8.375 19.4531 8.375C20.0672 8.375 20.55 8.17812 21.1266 7.68594L21.375 7.47969L20.7844 9.20469C20.4609 10.1516 20.1422 11.0844 20.0766 11.2672L19.9594 11.6094H12H4.04062L3.92344 11.2672C3.85781 11.0844 3.55312 10.1844 3.23906 9.275L2.67187 7.62031L2.88281 7.80312C3.15937 8.04687 3.60937 8.2625 3.99375 8.33281C4.39687 8.40781 4.82812 8.3375 5.25 8.13594C5.65312 7.93437 6.30469 7.2875 6.69844 6.6875C7.04531 6.15781 7.60312 5.06562 7.85156 4.42812C7.95 4.175 8.03437 3.97344 8.03906 3.98281C8.04375 3.9875 8.18437 4.27812 8.34844 4.625ZM19.875 13.5078V14.6094H12H4.125V13.5078V12.4062H12H19.875V13.5078Z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
