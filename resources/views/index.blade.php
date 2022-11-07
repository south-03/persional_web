<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/style.css">
    <link rel="stylesheet" href="./asset/css/responsive.css">
    <link rel="stylesheet" href="./asset/font/themify-icons/themify-icons.css">
    <!-- Nhúng font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <link rel="icon" href="https://scontent.fsgn2-6.fna.fbcdn.net/v/t1.6435-1/cp0/p74x74/178830807_1616221572099604_1074872570203691627_n.jpg?_nc_cat=100&ccb=1-5&_nc_sid=7206a8&_nc_ohc=qisEKnP1NFkAX9s7RnM&_nc_ht=scontent.fsgn2-6.fna&oh=00_AT8rRsL12Xk_stVu7yxK97YAJTZOxYi2mYkkWSwfEU0EiA&oe=61EF7F93" type="image/x-icon" />
    <title>The band</title>
</head>

<body>

    <div id="main">
        <div id="header">
            <!-- Begin Nav  -->
            <ul id="nav">
                <li ><a href="#">Home</a></li>
                <li><a href="#band">Band</a></li>
                <li><a href="#tour">Tour</a></li>
                <li><a href="#contact">Contact</a></li>

                <li>
                    <a href="#">
                        More
                        <i class="nav-arrow-down ti-angle-double-down"></i>
                    </a>
                    <ul class="subnav">
                        <li><a href="#">Merchandise</a></li>
                        <li><a href="#">Extras</a></li>
                        <li><a href="#">Media</a></li>
                    </ul>
                </li>
            </ul>
            <div class="search-button">
                <i class="search-icons ti-search"></i>
            </div>

            <div id="mobile-menu-bar" class="menu-bar">
                <i class="menu-ico-bar ti-menu"></i>
            </div>
            <div></div>
        </div>

        <div id="slide">
            <div class="text-content">
                <h2 class="text-heading">New York</h2>
                <div class="text-description">The atmosphere in New York is lorem ipsum.</div>
            </div>
        </div>

         <!--Begin: Content Section -->
        <div id="content">

            <div id="band" class="content-section">

                <h2 class="section-heading">The Band</h2>
                <p class="section-subheading">We love music</p>
                <p class="about-content">We have created a fictional band website. Lorem ipsum dolor sit amet,
                    consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                    enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                    nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                    mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</p>

                <div class="row member-list">
                    <div class="col col-third text-center s-col-full mt-32">
                        <p class="member-name">Túc</p>
                        <img src="./asset/image/slide/member.jpg" alt="" class="member-img">
                    </div>

                    <div class="col col-third text-center s-col-full mt-32">
                        <p class="member-name">Túc</p>
                        <img src="./asset/image/slide/member.jpg" alt="" class="member-img">
                    </div>

                    <div class="col col-third text-center s-col-full mt-32">
                        <p class="member-name">Túc</p>
                        <img src="./asset/image/slide/member.jpg" alt="" class="member-img">
                    </div>
                </div>
            </div>
            <!--Begin: Tour Section  -->
            <div id="tour" class="tour-section">
                <div class="content-section">

                    <h2 class="section-heading text-white">Tour Date</h2>
                    <p class="section-subheading text-white">Remember to book your tickets!</p>

                    <ul class="ticket-list">
                        <li>September <span class="sold-out">Sold out</span></li>
                        <li>October <span class="sold-out">Sold out</span></li>
                        <li>November <span class="quality">3</span></li>
                    </ul>

                    <div class="row place-list">

                        <div class="tour-items col col-third s-col-full mt-16">
                            <img src="./asset/image/tour-image/newyork.jpg" alt="" class="place-image">
                            <div class="place-body">
                                <h3 class="place-heading">New York</h3>
                                <p class="place-time">Fri 27 Nov 2016</p>
                                <p class="place-description">Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                                <button class="s-fill-width btn btn js-button-click">Buy Tickets</button>
                            </div>
                        </div>

                        <div class="tour-items col col-third s-col-full mt-16">
                            <img src="./asset/image/tour-image/paris.jpg" alt="" class="place-image">
                            <div class="place-body">
                                <h3 class="place-heading">Paris</h3>
                                <p class="place-time">Sat 28 Nov 2016</p>
                                <p class="place-description">Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                                <button class="s-fill-width btn btn js-button-click">Buy Tickets</button>
                            </div>
                        </div>

                        <div class="tour-items col col-third s-col-full mt-16">
                            <img src="./asset/image/tour-image/sanfran.jpg" alt="" class="place-image">
                            <div class="place-body">
                                <h3 class="place-heading">San Francisco</h3>
                                <p class="place-time">Sun 29 Nov 2016</p>
                                <p class="place-description">Praesent tincidunt sed tellus ut rutrum sed vitae justo.</p>
                                <button class="s-fill-width btn btn js-button-click">Buy Tickets</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End: Tour Section  -->

            <!-- Begin: Contact Section  -->
            <div id="contact" class="content-section">

                <h2 class="section-heading">Contact</h2>
                <p class="section-subheading">Fan? Drop a note!</p>

                <div class="row contact-content">
                    <div class="col col-half contact-infor s-col-full">
                        <p><i class="ti-location-pin"></i>Chicago, US</p>
                        <p><i class="ti-mobile"></i>Phone: <a href="tel:+00 151515">+00 151515</a></p>
                        <p><i class="ti-email"></i>Email: <a href="mailto:mail@mail.com">mail@mail.com</a></p>
                    </div>
                    <div class="col col-half contact-form s-col-full">
                        <form action="">
                            <div class="row">
                                <div class="col col-half s-col-full">
                                    <input type="text" name="" placeholder="Name" required id="" class="form-control">
                                </div>
                                <div class="col col-half s-col-full s-mt-8">
                                    <input type="email" name="" placeholder="Email" required id="" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-8">
                                <div class="col col-full s-mt-8">
                                    <input type="text" name="" placeholder="Message" required id="" class="form-control">
                                </div>
                            </div>
                            <input class="s-fill-width btn mt-16" type="submit" value="Send" style="float: right">
                        </form>
                    </div>
                </div>

            </div>
            <!-- End: Contact Section  -->

            <div class="map-section">
                <img src="./asset/image/map.jpg" alt="">

            </div>
        </div>

    </div>



    <div id="footer">
        <div class="social-list">
            <a href=""><i class="icon-social ti-facebook"></i></a>
            <a href=""><i class="icon-social ti-instagram"></i></a>
            <a href=""><i class="icon-social ti-github"></i></a>
            <a href=""><i class="icon-social ti-pinterest-alt"></i></a>
            <a href=""><i class="icon-social ti-twitter-alt"></i></a>
            <a href=""><i class="icon-social ti-linkedin"></i></a>
        </div>
        <p class="copyright" >Power by <a href="https://www.w3schools.com/w3css/tryw3css_templates_band.htm#">W3</a></p>
    </div>
        

    <div class="modal js-modal">
        <div class="modal-container js-modal-container">
            <div class="modal-close js-modal-close">
                <i class="ti-close"></i>
            </div>

            <header class="modal-header">
                <i class="modal-heading-icon ti-bag"></i>
                Ticket
            </header>

            <div class="modal-body">
                <label for="ticket" class="modal-lable">
                    <i class="ti-shopping-cart"></i>
                    Tickets, $15 per person
                </label>
                <input id="ticket" type="text" class="modal-input" placeholder="How many?">

                <label for="email" class="modal-lable">
                    <i class="ti-user"></i>
                    Send To
                </label>
                <input id="email" type="email" class="modal-input" placeholder="Enter email">
                
                <button id="buy-tickets">
                    Pay <i class="ti-check"></i>
                </button>

                <footer class="modal-footer">
                    <p class="modal-help">Need <a href="">help</a></p>
                </footer>
            </div>
        </div>
    </div>


    <script>
        const buyBtns = document.querySelectorAll('.js-button-click')
        const modal = document.querySelector('.js-modal')
        const modalClose =document.querySelector('.js-modal-close')
        const modalContainer = document.querySelector('.js-modal-container')
        
        function showbuyTicket() {
            modal.classList.add('open')
        }

        function hirebuyTicket() {
            modal.classList.remove('open')
        }

        for(const buyBtn of buyBtns){
                buyBtn.addEventListener('click', showbuyTicket)
        }

        modalClose.addEventListener('click', hirebuyTicket)

        modal.addEventListener('click', hirebuyTicket);

        modalContainer.addEventListener('click', function(event) {
            event.stopPropagation()
        })
    </script>
    <script>
        var header = document.getElementById('header');
        var mobileMenuBar = document.getElementById('mobile-menu-bar');
        var clientHeight = header.clientHeight;
        
        // Menu control
        mobileMenuBar.onclick = function(){
            var isClose = header.clientHeight === clientHeight;

            if(isClose){
                header.style.height = 'auto';
            } else {
                header.style.height = null;
            }
        }

        // Close mobileMenuBar
        var menuItems = document.querySelectorAll('#nav li a[href*="#"]');
        for(var i = 0; i < menuItems.length; i++){
            var menuItem = menuItems[i];
            
            menuItem.onclick = function(event){
                var isParenMenu = this.nextElementSibling && this.nextElementSibling.classList.contains('subnav');
                if(isParenMenu) {
                    event.preventDefault();
                } else {
                    header.style.height = null;
                }
            } 
        }

    </script>
</body>

</html>