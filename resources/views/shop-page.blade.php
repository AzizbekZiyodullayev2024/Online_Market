<x-header title="Online Market"></x-header>
<!-- Loader -->
<div
    class="bb-loader min-w-full w-full h-screen fixed top-[0] left-[0] flex items-center justify-center bg-[#fff] z-[45]">
    <img src="assets/img/logo/loader.png" alt="loader" class="absolute">
    <span class="loader w-[60px] h-[60px] relative"></span>
</div>

<!-- Header -->
<x-navbar :parentCategories="$parentCategories" :latestPosts="$latestPosts"></x-navbar>
    <!-- Breadcrumb -->
    <section class="section-breadcrumb mb-[50px] max-[1199px]:mb-[35px] border-b-[1px] border-solid border-[#eee] bg-[#f8f8fb]">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="flex flex-wrap w-full bb-breadcrumb-inner m-[0] py-[20px] items-center">
                        <div class="min-[768px]:w-[50%] min-[576px]:w-full w-full px-[12px]">
                            <h2 class="bb-breadcrumb-title font-quicksand tracking-[0.03rem] leading-[1.2] text-[16px] font-bold text-[#3d4750] max-[767px]:text-center max-[767px]:mb-[10px]">Shop Page</h2>
                        </div>
                        <div class="min-[768px]:w-[50%] min-[576px]:w-full w-full px-[12px]">
                            <ul class="bb-breadcrumb-list mx-[-5px] flex justify-end max-[767px]:justify-center">
                                <li class="bb-breadcrumb-item text-[14px] font-normal px-[5px]"><a href="index.html" class="font-Poppins text-[14px] leading-[28px] tracking-[0.03rem] font-semibold text-[#686e7d]">Home</a></li>
                                <li class="text-[14px] font-normal px-[5px]"><i class="ri-arrow-right-double-fill text-[14px] font-semibold leading-[28px]"></i></li>
                                <li class="bb-breadcrumb-item font-Poppins text-[#686e7d] text-[14px] leading-[28px] font-normal tracking-[0.03rem] px-[5px] active">Shop Page</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Category section -->
    <section class="section-category pt-[50px] max-[1199px]:pt-[35px] mb-[24px]">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="bb-category-6-colum owl-carousel">
                        @foreach($categories as $category)
                            <div class="bb-category-box p-[30px] rounded-[20px] flex flex-col items-center text-center max-[1399px]:p-[20px] category-items-1 bg-[#fef1f1]" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="200">
                                <div class="category-image mb-[12px]">
                                    @if ($category->images->isNotEmpty())
                                        <img src="{{ Illuminate\Support\Facades\Storage::url($category->images->first()->path) }}"
                                             class="w-[50px] h-[50px] max-[1399px]:h-[65px]"
                                             alt="category">
                                    @endif
                                </div>
                                <div class="category-sub-contact">
                                    <h5 class="mb-[2px] text-[16px] font-quicksand text-[#3d4750] font-semibold tracking-[0.03rem] leading-[1.2]"><a href="shop-left-sidebar-col-3.html" class="font-Poppins text-[16px] font-medium leading-[1.2] tracking-[0.03rem] text-[#3d4750] capitalize">{{ $category->name }}</a></h5>
                                    <p class="font-Poppins text-[13px] text-[#686e7d] leading-[25px] font-light tracking-[0.03rem]">485 items</p>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop section -->
    <section class="section-shop pb-[50px] max-[1199px]:pb-[35px]">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full mb-[-24px]">
                <div class="min-[992px]:w-[25%] w-full px-[12px] mb-[24px]">
                    <div class="bb-shop-wrap bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[20px] sticky top-[0]">
                        <div class="bb-sidebar-block p-[20px] border-b-[1px] border-solid border-[#eee]">
                            <div class="bb-sidebar-title mb-[20px]">
                                <h3 class="font-quicksand text-[18px] tracking-[0.03rem] leading-[1.2] font-bold text-[#3d4750]">Category</h3>
                            </div>
                            <div class="bb-sidebar-contact">
                                <ul>
                                    @foreach($categories as $category)
                                        <li class="relative block mb-[14px]">
                                            <div class="bb-sidebar-block-item relative">
                                                <input type="checkbox" class="w-full h-[calc(100%-5px)] absolute opacity-[0] cursor-pointer z-[999] top-[50%] left-[0] translate-y-[-50%]">
                                                <a href="javascript:void(0)" class="ml-[30px] block text-[#777] text-[14px] leading-[20px] font-normal capitalize cursor-pointer">{{ $category->name }}</a>
                                                <span class="checked absolute top-[0] left-[0] h-[18px] w-[18px] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden"></span>
                                            </div>
                                        </li>

                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="bb-sidebar-block p-[20px] border-b-[1px] border-solid border-[#eee]">
                            <div class="bb-sidebar-title mb-[20px]">
                                <h3 class="font-quicksand text-[18px] tracking-[0.03rem] leading-[1.2] font-bold text-[#3d4750]">Weight</h3>
                            </div>
                            <div class="bb-sidebar-contact">
                                <ul>
                                    <li class="relative block mb-[14px]">
                                        <div class="bb-sidebar-block-item relative">
                                            <input type="checkbox" class="w-full h-[calc(100%-5px)] absolute opacity-[0] cursor-pointer z-[999] top-[50%] left-[0] translate-y-[-50%]">
                                            <a href="javascript:void(0)" class="ml-[30px] block text-[#777] text-[14px] leading-[20px] font-normal capitalize cursor-pointer">200gm pack</a>
                                            <span class="checked absolute top-[0] left-[0] h-[18px] w-[18px] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden"></span>
                                        </div>
                                    </li>
                                    <li class="relative block mb-[14px]">
                                        <div class="bb-sidebar-block-item relative">
                                            <input type="checkbox" class="w-full h-[calc(100%-5px)] absolute opacity-[0] cursor-pointer z-[999] top-[50%] left-[0] translate-y-[-50%]">
                                            <a href="javascript:void(0)" class="ml-[30px] block text-[#777] text-[14px] leading-[20px] font-normal capitalize cursor-pointer">500gm pack</a>
                                            <span class="checked absolute top-[0] left-[0] h-[18px] w-[18px] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden"></span>
                                        </div>
                                    </li>
                                    <li class="relative block mb-[14px]">
                                        <div class="bb-sidebar-block-item relative">
                                            <input type="checkbox" class="w-full h-[calc(100%-5px)] absolute opacity-[0] cursor-pointer z-[999] top-[50%] left-[0] translate-y-[-50%]">
                                            <a href="javascript:void(0)" class="ml-[30px] block text-[#777] text-[14px] leading-[20px] font-normal capitalize cursor-pointer">1kg pack</a>
                                            <span class="checked absolute top-[0] left-[0] h-[18px] w-[18px] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden"></span>
                                        </div>
                                    </li>
                                    <li class="relative block mb-[14px]">
                                        <div class="bb-sidebar-block-item relative">
                                            <input type="checkbox" class="w-full h-[calc(100%-5px)] absolute opacity-[0] cursor-pointer z-[999] top-[50%] left-[0] translate-y-[-50%]">
                                            <a href="javascript:void(0)" class="ml-[30px] block text-[#777] text-[14px] leading-[20px] font-normal capitalize cursor-pointer">5kg pack</a>
                                            <span class="checked absolute top-[0] left-[0] h-[18px] w-[18px] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden"></span>
                                        </div>
                                    </li>
                                    <li class="relative block">
                                        <div class="bb-sidebar-block-item relative">
                                            <input type="checkbox" class="w-full h-[calc(100%-5px)] absolute opacity-[0] cursor-pointer z-[999] top-[50%] left-[0] translate-y-[-50%]">
                                            <a href="javascript:void(0)" class="ml-[30px] block text-[#777] text-[14px] leading-[20px] font-normal capitalize cursor-pointer">10kg pack</a>
                                            <span class="checked absolute top-[0] left-[0] h-[18px] w-[18px] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[5px] overflow-hidden"></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="bb-sidebar-block p-[20px] border-b-[1px] border-solid border-[#eee]">
                            <div class="bb-sidebar-title mb-[20px]">
                                <h3 class="font-quicksand text-[18px] tracking-[0.03rem] leading-[1.2] font-bold text-[#3d4750]">Color</h3>
                            </div>
                            <div class="bb-color-contact">
                                <ul>
                                    <li class="transition-all duration-[0.3s] ease-in-out inline-block p-[2px] rounded-[20px] cursor-pointer mr-[5px] w-[26px] h-[26px] color-sidebar-active">
                                        <div class="bb-sidebar-block-item relative">
                                            <span class="pro-color-1 w-[22px] h-[22px] block rounded-[20px] bg-[#c4d6f9]"></span>
                                        </div>
                                    </li>
                                    <li class="transition-all duration-[0.3s] ease-in-out inline-block p-[2px] rounded-[20px] cursor-pointer mr-[5px] w-[26px] h-[26px]">
                                        <div class="bb-sidebar-block-item relative">
                                            <span class="pro-color-2 w-[22px] h-[22px] block rounded-[20px] bg-[#ff748b]"></span>
                                        </div>
                                    </li>
                                    <li class="transition-all duration-[0.3s] ease-in-out inline-block p-[2px] rounded-[20px] cursor-pointer mr-[5px] w-[26px] h-[26px]">
                                        <div class="bb-sidebar-block-item relative">
                                            <span class="pro-color-3 w-[22px] h-[22px] block rounded-[20px] bg-[#000000]"></span>
                                        </div>
                                    </li>
                                    <li class="transition-all duration-[0.3s] ease-in-out inline-block p-[2px] rounded-[20px] cursor-pointer mr-[5px] w-[26px] h-[26px]">
                                        <div class="bb-sidebar-block-item relative">
                                            <span class="pro-color-4 w-[22px] h-[22px] block rounded-[20px] bg-[#2bff4a]"></span>
                                        </div>
                                    </li>
                                    <li class="transition-all duration-[0.3s] ease-in-out inline-block p-[2px] rounded-[20px] cursor-pointer mr-[5px] w-[26px] h-[26px]">
                                        <div class="bb-sidebar-block-item relative">
                                            <span class="pro-color-5 w-[22px] h-[22px] block rounded-[20px] bg-[#ff7c5e]"></span>
                                        </div>
                                    </li>
                                    <li class="transition-all duration-[0.3s] ease-in-out inline-block p-[2px] rounded-[20px] cursor-pointer mr-[5px] w-[26px] h-[26px]">
                                        <div class="bb-sidebar-block-item relative">
                                            <span class="pro-color-6 w-[22px] h-[22px] block rounded-[20px] bg-[#f155ff]"></span>
                                        </div>
                                    </li>
                                    <li class="transition-all duration-[0.3s] ease-in-out inline-block p-[2px] rounded-[20px] cursor-pointer mr-[5px] w-[26px] h-[26px]">
                                        <div class="bb-sidebar-block-item relative">
                                            <span class="pro-color-7 w-[22px] h-[22px] block rounded-[20px] bg-[#ffef00]"></span>
                                        </div>
                                    </li>
                                    <li class="transition-all duration-[0.3s] ease-in-out inline-block p-[2px] rounded-[20px] cursor-pointer mr-[5px] w-[26px] h-[26px]">
                                        <div class="bb-sidebar-block-item relative">
                                            <span class="pro-color-8 w-[22px] h-[22px] block rounded-[20px] bg-[#c89fff]"></span>
                                        </div>
                                    </li>
                                    <li class="transition-all duration-[0.3s] ease-in-out inline-block p-[2px] rounded-[20px] cursor-pointer mr-[5px] w-[26px] h-[26px]">
                                        <div class="bb-sidebar-block-item relative">
                                            <span class="pro-color-9 w-[22px] h-[22px] block rounded-[20px] bg-[#7bfffa]"></span>
                                        </div>
                                    </li>
                                    <li class="transition-all duration-[0.3s] ease-in-out inline-block p-[2px] rounded-[20px] cursor-pointer mr-[5px] w-[26px] h-[26px]">
                                        <div class="bb-sidebar-block-item relative">
                                            <span class="pro-color-10 w-[22px] h-[22px] block rounded-[20px] bg-[#56ffc1]"></span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="bb-sidebar-block p-[20px] border-b-[1px] border-solid border-[#eee]">
                            <div class="bb-sidebar-title mb-[20px]">
                                <h3 class="font-quicksand text-[18px] tracking-[0.03rem] leading-[1.2] font-bold text-[#3d4750]">Price</h3>
                            </div>
                            <div class="bb-price-range">
                                <div class="price-range-slider relative w-full mb-[7px]">
                                    <p class="range-value m-[0]">
                                        <input type="text" id="amount" readonly class="w-full bg-[#fff] text-[#000] text-[16px] mb-[15px] font-initial border-[1px] border-solid border-[#eee] p-[10px] text-center outline-[0] rounded-[10px]">
                                    </p>
                                    <div id="slider-range" class="range-bar"></div>
                                </div>
                            </div>
                        </div>
                        <div class="bb-sidebar-block p-[20px]">
                            <div class="bb-sidebar-title mb-[20px]">
                                <h3 class="font-quicksand text-[18px] tracking-[0.03rem] leading-[1.2] font-bold text-[#3d4750]">Tags</h3>
                            </div>
                            <div class="bb-tags">
                                <ul class="flex flex-wrap m-[-5px]">
                                    <li class="transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] hover:bg-[#6c7fd8] cursor-pointer">
                                        <a href="javascript:void(0)" class="font-Poppins text-[13px] capitalize font-light leading-[28px] tracking-[0.03rem] text-[#686e7d]">Clothes</a>
                                    </li>
                                    <li class="transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] hover:bg-[#6c7fd8] cursor-pointer">
                                        <a href="javascript:void(0)" class="font-Poppins text-[13px] capitalize font-light leading-[28px] tracking-[0.03rem] text-[#686e7d]">Fruits</a>
                                    </li>
                                    <li class="transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] hover:bg-[#6c7fd8] cursor-pointer">
                                        <a href="javascript:void(0)" class="font-Poppins text-[13px] capitalize font-light leading-[28px] tracking-[0.03rem] text-[#686e7d]">Snacks</a>
                                    </li>
                                    <li class="transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] hover:bg-[#6c7fd8] cursor-pointer">
                                        <a href="javascript:void(0)" class="font-Poppins text-[13px] capitalize font-light leading-[28px] tracking-[0.03rem] text-[#686e7d]">Dairy</a>
                                    </li>
                                    <li class="transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] hover:bg-[#6c7fd8] cursor-pointer">
                                        <a href="javascript:void(0)" class="font-Poppins text-[13px] capitalize font-light leading-[28px] tracking-[0.03rem] text-[#686e7d]">Seafood</a>
                                    </li>
                                    <li class="transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] hover:bg-[#6c7fd8] cursor-pointer">
                                        <a href="javascript:void(0)" class="font-Poppins text-[13px] capitalize font-light leading-[28px] tracking-[0.03rem] text-[#686e7d]">Toys</a>
                                    </li>
                                    <li class="transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] hover:bg-[#6c7fd8] cursor-pointer">
                                        <a href="javascript:void(0)" class="font-Poppins text-[13px] capitalize font-light leading-[28px] tracking-[0.03rem] text-[#686e7d]">perfume</a>
                                    </li>
                                    <li class="transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] hover:bg-[#6c7fd8] cursor-pointer">
                                        <a href="javascript:void(0)" class="font-Poppins text-[13px] capitalize font-light leading-[28px] tracking-[0.03rem] text-[#686e7d]">jewelry</a>
                                    </li>
                                    <li class="transition-all duration-[0.3s] ease-in-out m-[5px] py-[2px] px-[15px] border-[1px] border-solid border-[#eee] rounded-[10px] hover:bg-[#6c7fd8] cursor-pointer">
                                        <a href="javascript:void(0)" class="font-Poppins text-[13px] capitalize font-light leading-[28px] tracking-[0.03rem] text-[#686e7d]">Bags</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="min-[992px]:w-[75%] w-full px-[12px] mb-[24px]">
                    <div class="bb-shop-pro-inner">
                        <div class="flex flex-wrap mx-[-12px] mb-[-24px]">
                            <div class="w-full px-[12px]">
                                <div class="bb-pro-list-top mb-[24px] rounded-[20px] flex bg-[#f8f8fb] border-[1px] border-solid border-[#eee] justify-between">
                                    <div class="flex flex-wrap w-full">
                                        <div class="w-[50%] px-[12px] max-[420px]:w-full">
                                            <div class="bb-bl-btn py-[10px] flex max-[420px]:justify-center">
                                                <button type="button" class="grid-btn btn-grid-100 h-[38px] w-[38px] flex justify-center items-center border-[0] p-[5px] bg-transparent mr-[5px] active" title="grid">
                                                    <i class="ri-apps-line text-[20px]"></i>
                                                </button>
                                                <button type="button" class="grid-btn btn-list-100 h-[38px] w-[38px] flex justify-center items-center border-[0] p-[5px] bg-transparent" title="grid">
                                                    <i class="ri-list-unordered text-[20px]"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="w-[50%] px-[12px] max-[420px]:w-full">
                                            <div class="bb-select-inner h-full py-[10px] flex items-center justify-end max-[420px]:justify-center">
                                                <div class="custom-select w-[130px] mr-[30px] flex justify-end text-[#777]  items-center text-[14px] relative max-[420px]:w-[100px] max-[420px]:justify-left">
                                                    <select>
                                                        <option selected disabled>Sort by</option>
                                                        <option value="1">Position</option>
                                                        <option value="2">Relevance</option>
                                                        <option value="3">Name, A to Z</option>
                                                        <option value="4">Name, Z to A</option>
                                                        <option value="5">Price, low to high</option>
                                                        <option value="6">Price, high to low</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @foreach($products as $product)
                                <div class="min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px] pro-bb-content" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                    <div class="bb-pro-box bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[20px]">
                                        <div class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                        <span class="flags transition-all duration-[0.3s] ease-in-out absolute z-[5] top-[10px] left-[6px]">
                                            <span class="text-[14px] text-[#777] font-medium uppercase">New</span>
                                        </span>
                                            <a href="javascript:void(0)">
                                                <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                                    <img class="main-img transition-all duration-[0.3s] ease-in-out w-full" src="assets/img/new-product/1.jpg"
                                                         alt="product-1">
                                                    <img class="hover-img transition-all duration-[0.3s] ease-in-out absolute z-[2] top-[0] left-[0] opacity-[0] w-full" src="assets/img/new-product/back-1.jpg"
                                                         alt="product-1">
                                                </div>
                                            </a>
                                            <ul class="bb-pro-actions transition-all duration-[0.3s] ease-in-out my-[0] mx-[auto] absolute z-[9] left-[0] right-[0] bottom-[0] flex flex-row items-center justify-center opacity-[0]">
                                                <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                    <a href="javascript:void(0)" title="Wishlist" class="w-[35px] h-[35px] flex items-center justify-center">
                                                        <i class="ri-heart-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                    </a>
                                                </li>
                                                <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                    <a href="javascript:void(0)" title="Quick View" class="bb-modal-toggle w-[35px] h-[35px] flex items-center justify-center">
                                                        <i class="ri-eye-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                    </a>
                                                </li>
                                                <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                    <a href="compare.html" title="Compare" class="w-[35px] h-[35px] flex items-center justify-center">
                                                        <i class="ri-repeat-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                    </a>
                                                </li>
                                                <li class="bb-btn-group transition-all duration-[0.3s] ease-in-out w-[35px] h-[35px] mx-[2px] flex items-center justify-center text-[#fff] bg-[#fff] border-[1px] border-solid border-[#eee] rounded-[10px]">
                                                    <a href="javascript:void(0)" title="Add To Cart" class="w-[35px] h-[35px] flex items-center justify-center">
                                                        <i class="ri-shopping-bag-4-line transition-all duration-[0.3s] ease-in-out text-[18px] text-[#777] leading-[10px]"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="bb-pro-contact p-[20px]">
                                            <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                            </div>
                                            <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                                <a href="product-left-sidebar.html" class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">{{ $product->name }}</a></h4>
                                            <p class="hidden font-Poppins text-[14px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]">{{ $product->description }}</p>
                                            <div class="bb-price flex flex-wrap justify-between">
                                                <div class="inner-price mx-[-3px]">
                                                    <span class="new-price px-[3px] text-[16px] text-[#686e7d] font-bold">{{$product->price}}</span>
                                                    <span class="old-price px-[3px] text-[14px] text-[#686e7d] line-through">{{ $product->sale_price }}</span>
                                                </div>
                                                <span class="last-items text-[14px] text-[#686e7d]">500g</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                                <div class="bb-pro-pagination mb-[24px] flex justify-between max-[575px]:flex-col max-[575px]:items-center">
                                    <p class="font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem] max-[575px]:mb-[10px]">Showing 1-12 of 21 item(s)</p>
                                    <ul class="flex">
                                        <li class="leading-[28px] mr-[6px] active">
                                            <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out w-[32px] h-[32px] font-light text-[#777] leading-[32px] bg-[#f8f8fb] font-Poppins tracking-[0.03rem] text-[15px] flex text-center align-top justify-center items-center rounded-[10px] border-[1px] border-solid border-[#eee] hover:bg-[#3d4750] hover:text-[#fff]">1</a>
                                        </li>
                                        <li class="leading-[28px] mr-[6px]">
                                            <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out w-[32px] h-[32px] font-light text-[#777] leading-[32px] bg-[#f8f8fb] font-Poppins tracking-[0.03rem] text-[15px] flex text-center align-top justify-center items-center rounded-[10px] border-[1px] border-solid border-[#eee] hover:bg-[#3d4750] hover:text-[#fff]">2</a>
                                        </li>
                                        <li class="leading-[28px] mr-[6px]">
                                            <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out w-[32px] h-[32px] font-light text-[#777] leading-[32px] bg-[#f8f8fb] font-Poppins tracking-[0.03rem] text-[15px] flex text-center align-top justify-center items-center rounded-[10px] border-[1px] border-solid border-[#eee] hover:bg-[#3d4750] hover:text-[#fff]">3</a>
                                        </li>
                                        <li class="leading-[28px] mr-[6px]">
                                            <a href="javascript:void(0)" class="transition-all duration-[0.3s] ease-in-out w-[32px] h-[32px] font-light text-[#777] leading-[32px] bg-[#f8f8fb] font-Poppins tracking-[0.03rem] text-[15px] flex text-center align-top justify-center items-center rounded-[10px] border-[1px] border-solid border-[#eee] hover:bg-[#3d4750] hover:text-[#fff]">4</a>
                                        </li>
                                        <li class="leading-[28px]">
                                            <a href="javascript:void(0)" class="next transition-all duration-[0.3s] ease-in-out w-[auto] h-[32px] px-[13px] font-light text-[#fff] leading-[30px] bg-[#3d4750] font-Poppins tracking-[0.03rem] text-[15px] flex text-center align-top justify-center items-center rounded-[10px] border-[1px] border-solid border-[#eee]">Next <i class="ri-arrow-right-s-line transition-all duration-[0.3s] ease-in-out ml-[10px] text-[16px] w-[8px] text-[#fff]"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <x-footer></x-footer>
    <!-- Cart sidebar -->
    <x-cart-sidebar></x-cart-sidebar>
    <!-- Category Popup -->
    <x-category-popup :categories="$categories"></x-category-popup>

    <!-- Quick view Modal -->
    <x-quick-view-modal></x-quick-view-modal>

    <!-- Newsletter Modal -->
    <x-news-letter-model></x-news-letter-model>
    <!-- Tools Sidebar -->
    <x-tools-sidebar></x-tools-sidebar>
    <!-- Back to top  -->
    <x-back-to-top></x-back-to-top>

    <!-- Plugins -->
    <x-plugins></x-plugins>

</body>
</html>