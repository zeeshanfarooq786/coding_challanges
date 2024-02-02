 <!-- ========== Left Sidebar Start ========== -->
 <div class="vertical-menu">

<div data-simplebar class="h-100">

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title" data-key="t-menu">Menu</li>

            <li>
                <a href="{{route('dashboard')}}">
                    <i data-feather="home"></i>
                    <span class="badge rounded-pill bg-success-subtle text-success float-end">9+</span>
                    <span data-key="t-dashboard">Dashboard</span>
                </a>
            </li>

            <li class="menu-title" data-key="t-apps">Apps</li>

            <li>
                <a href="{{route('duplicates')}}" class="has-arrow">
                    <i class="fab fa-wpforms" style="font-size:18px;"></i> 
                    <span data-key="t-ecommerce">Challenge 2</span>
                </a>
                {{-- <ul class="sub-menu" aria-expanded="false">
                    <li><a href="ecommerce-products.html" key="t-products">Products</a></li>
                    <li><a href="ecommerce-product-detail.html" data-key="t-product-detail">Product Detail</a></li>
                    <li><a href="ecommerce-orders.html" data-key="t-orders">Orders</a></li>
                    <li><a href="ecommerce-customers.html" data-key="t-customers">Customers</a></li>
                    <li><a href="ecommerce-cart.html" data-key="t-cart">Cart</a></li>
                    <li><a href="ecommerce-checkout.html" data-key="t-checkout">Checkout</a></li>
                    <li><a href="ecommerce-shops.html" data-key="t-shops">Shops</a></li>
                    <li><a href="ecommerce-add-product.html" data-key="t-add-product">Add Product</a></li>
                    <li><a href="ecommerce-seller.html" data-key="t-seller">Seller
                        <span class="badge rounded-pill bg-danger-subtle text-danger float-end">New</span>
                    </a></li>
                    <li><a href="ecommerce-sale-details.html" data-key="t-sale-details">Sale details
                        <span class="badge rounded-pill bg-danger-subtle text-danger float-end">New</span>
                    </a></li>
                </ul> 
            </li>

            <li>
             @if(auth()->user()->isAdmin())
                <a href="apps-chat.html">
                    <i data-feather="message-square"></i>
                    <span data-key="t-chat">Chat</span>
                </a>
            @endif 
            </li>

            <li>
                <a href="" class="has-arrow">
                    <i class="far fa-handshake" style="font-size:18px;"></i> 
                    <span data-key="t-email">Student Concent Form</span>
                </a>
                 <ul class="sub-menu" aria-expanded="false">
                    <li><a href="apps-email-inbox.html" data-key="t-inbox">Inbox</a></li>
                    <li><a href="apps-email-read.html" data-key="t-read-email">Read Email</a></li>
                </ul>
            </li>

            <li>
                <a href="">
                    <i class="fas fa-exclamation-triangle" style="font-size:18px;"></i>
                    <span>Disclaimer</span>
                </a>
            </li>

            <li>
                <a href=""> 
                    <i class="far fa-address-card" style="font-size:18px;"></i> 
                    <span>Proof of Address</span>
                </a>
            </li>

            <li>
                <a href=""> 
                    <i class="fas fa-american-sign-language-interpreting" style="font-size:18px;"></i> 
                    <span>Translation if Required</span>
                </a>
            </li>
            <li>
                <a href=""> 
                    <i class="far fa-credit-card" style="font-size:18px;"></i> 
                    <span>Student Finance</span>
                </a>
            </li> --}}

        </ul>

        <div class="card sidebar-alert shadow-none text-center mx-4 mb-0 mt-5">
            <div class="card-body">
                <img src="{{ asset('images/giftbox.png')}}" alt="">
                <div class="mt-4">
                    <h5 class="alertcard-title font-size-16">Unlimited Access</h5>
                    <p class="font-size-13 text-dark">Upgrade your plan from a Free trial, to select ‘Business Plan’.</p>
                    <a href="#!" class="btn btn-primary mt-2">Upgrade Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Sidebar -->
</div>
</div>
<!-- Left Sidebar End -->