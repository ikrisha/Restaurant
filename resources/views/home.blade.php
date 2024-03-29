<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/menu.css')}}">

    <title>Document</title>
    <style>
        .nav-item a:hover {
            background-color: orange;
            transition: all 0.6s;
            color: black;
        }

        .nav-item a {
            color: white;
        }
    </style>
</head>

<body>
    <!-- header section start -->
    <section class="container-fluid" id="back">
        @include("header")
        <div class="p-3"></div>
        <div class="row justify-content-start p-5" data-aos="fade-up">
            <h1 class="col col-6 text-white p-5">Fresh And Delicious Food For Your Health</h1>
            <div class="col-5"> </div>
            <div class="col-2 text-center">
                <button class="btn btn-outline-warning" style="margin-left:-20px;">Order Now</button>
            </div>
        </div>
        <div class="row">
        </div>
    </section>
    <!-- header section end -->
    <!-- Menu section start -->
    <div class="menu-section" id="our-menu">
        <div class="container">
            <div class="row text-center  section-title">
                <h1 class="col-12">Our Menu</h1>
            </div>
            <div class="row">
                <div class="menu-tabs">
                    <button data-target="#lunch" class="menu-tab-item active">lunch</button>
                    <button data-target="#dinner" class="menu-tab-item">Dinner</button>
                    <button data-target="#drinks" class="menu-tab-item">Drinks</button>
                    <button data-target="#desserts" class="menu-tab-item">Desserts</button>
                </div>
            </div>
            <div>
                <!-- 1 -->
                <div class="menu-tab-content" id="lunch">
                    <div class="row space">
                        <div class="col-6 menu-item" id="menu-1">
                        <a href="register" class="item-1sasasa"> <img src="{{asset('images/food.jpg')}}" alt="food" width="100px" height="100px"></a>
                            <span class="detail">Lunch Item</span>
                            <span class="price">$40.00</span>
                        </div>
                        <div class="col-6" id="menu-1">
                            <img src="{{asset('images/food1.jpg')}}" alt="food" width="100px" height="100px">
                            <span class="detail">Lunch Item</span>
                            <span class="price">$40.00</span>
                        </div>
                    </div>
                    <!-- 2 -->
                    <div class="row space">
                        <div class="col-6" id="menu-1">
                            <img src="{{asset('images/food2.jpg')}}" alt="food" width="100px" height="100px">
                            <span class="detail">Lunch Item</span>
                            <span class="price">$40.00</span>
                        </div>
                        <div class="col-6" id="menu-1">
                            <img src="{{asset('images/food3.jpg')}}" alt="food" width="100px" height="100px">
                            <span class="detail">Lunch Item</span>
                            <span class="price">$40.00</span>
                        </div>
                    </div>
                    <!-- 3 -->
                    <div class="row space">
                        <div class="col-6" id="menu-1">
                            <img src="{{asset('images/food4.jpg')}}" alt="food" width="100px" height="100px">
                            <span class="detail">Lunch Item</span>
                            <span class="price">$40.00</span>
                        </div>
                        <div class="col-6" id="menu-1">
                            <img src="{{asset('images/food5.jpg')}}" alt="food" width="100px" height="100px">
                            <span class="detail">Lunch Item</span>
                            <span class="price">$40.00</span>
                        </div>
                    </div>
                    <!-- 4 -->
                    <div class="row space">
                        <div class="col-6" id="menu-1">
                            <img src="{{asset('images/food1.jpg')}}" alt="food" width="100px" height="100px">
                            <span class="detail">Lunch Item</span>
                            <span class="price">$40.00</span>
                        </div>
                        <div class="col-6" id="menu-1">
                            <img src="{{asset('images/food2.jpg')}}" alt="food" width="100px" height="100px">
                            <span class="detail">Lunch Item</span>
                            <span class="price">$40.00</span>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Menu section end -->
    @include("footer")

    <script src="{{asset('javascript/menu.js')}}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>