<div class="row">
    <div class="col-md-9 col-sm-8 small-padding">
        <div class="filterproducts-tab" style="padding-top: 40px;">
            <div class="filter-title">
                <ul class="content">
                    <li id="tab_featured" class="active first"><a href="#"><strong>FEATURED1</strong></a></li>
                    <li id="tab_latest"><a href="#"><strong>LATEST PRODUCTS1</strong></a></li>
                </ul>
            </div>
            <div class="clearer"></div>
            <div class="tab-content" id="tab_featured_contents">
                <div id="featured_product" class="hide-addtolinks move-action">
                    {{block type="filterproducts/featured_home_list" name="featured_list" product_count="8" column_count="4" template="filterproducts/grid.phtml"}}
                </div>
            </div>
            <div class="tab-content" id="tab_latest_contents">
                <div id="latest_product" class="hide-addtolinks move-action">
                    {{block type="filterproducts/latest_home_list" name="sale_list" product_count="8" column_count="4" template="filterproducts/grid.phtml"}}
                </div>
            </div>
        </div>
        <script type="text/javascript">new Varien.Tabs('.filterproducts-tab > div.filter-title > ul');</script>
        <div class="grid-images" style="margin:20px 0;">
            <div class="row">
                <div class="col-sm-4">
                    <div class="grid1">
                        <a href="#"><img src="{{media url="wysiwyg/porto/homepage/content/08/grid1.jpg"}}" alt="" /></a>
                    </div>
                    <div class="grid2">
                        <a href="#"><img src="{{media url="wysiwyg/porto/homepage/content/08/grid2.jpg"}}" alt="" /></a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="grid3">
                        <a href="#"><img src="{{media url="wysiwyg/porto/homepage/content/08/grid3.jpg"}}" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="filter-title"><span class="content"><strong>Our Brands</strong></span></h2>
        <div class="owl-no-narrow">
            <div id="brands-slider-demo-8" class="owl-carousel owl-theme">
                <div class="item" style="padding-top:10px;"><img src="{{media url="wysiwyg/porto/homepage/content/08/brand1.png"}}" alt="" /></div>
                <div class="item" style="padding-top:10px;"><img src="{{media url="wysiwyg/porto/homepage/content/08/brand2.png"}}" alt="" /></div>
                <div class="item" style="padding-top:10px;"><img src="{{media url="wysiwyg/porto/homepage/content/08/brand3.png"}}" alt="" /></div>
                <div class="item" style="padding-top:10px;"><img src="{{media url="wysiwyg/porto/homepage/content/08/brand4.png"}}" alt="" /></div>
                <div class="item" style="padding-top:10px;"><img src="{{media url="wysiwyg/porto/homepage/content/08/brand5.png"}}" alt="" /></div>
                <div class="item" style="padding-top:10px;"><img src="{{media url="wysiwyg/porto/homepage/content/08/brand1.png"}}" alt="" /></div>
                <div class="item" style="padding-top:10px;"><img src="{{media url="wysiwyg/porto/homepage/content/08/brand2.png"}}" alt="" /></div>
                <div class="item" style="padding-top:10px;"><img src="{{media url="wysiwyg/porto/homepage/content/08/brand3.png"}}" alt="" /></div>
                <div class="item" style="padding-top:10px;"><img src="{{media url="wysiwyg/porto/homepage/content/08/brand4.png"}}" alt="" /></div>
                <div class="item" style="padding-top:10px;"><img src="{{media url="wysiwyg/porto/homepage/content/08/brand5.png"}}" alt="" /></div>
            </div>
            <script type="text/javascript">
            jQuery(function($){
                $("#brands-slider-demo-8").owlCarousel({
                    lazyLoad: true,
                    itemsCustom: [ [0, 1], [320, 1], [480, 2], [640, 3], [768, 3], [992, 4], [1200, 5] ],
                    responsiveRefreshRate: 50,
                    slideSpeed: 200,
                    paginationSpeed: 500,
                    scrollPerPage: false,
                    stopOnHover: true,
                    rewindNav: true,
                    rewindSpeed: 600,
                    pagination: true,
                    navigation: false,
                    autoPlay: true
                });
            });
            </script>
        </div>
    </div>
    <div class="col-md-3 col-sm-4 sidebar">
        <div class="custom-block" style="margin-top:92px;padding-bottom:37px;margin-bottom:15px;">
            {{block type="core/template" template="catalog/category/main_category_nav.phtml"}}
        </div>
        <h2 class="filter-title" style="background-image:none;margin-bottom:-15px;margin-top:20px;"><span class="content"><strong>From the Blog</strong></span></h2>
        <div id="latest_news" class="custom-block" style="margin:0 -10px;padding-bottom:37px;margin-bottom:35px;">
            {{block type="blog/last" name="latest_news" template="blog/recentposts_home.phtml"}}
        </div>
        <style type="text/css">.recent-posts .item .col-sm-5, .recent-posts .item .col-sm-7{width:100%;}</style>
        <script type="text/javascript">
        jQuery(function($){
            $("#latest_news .owl-carousel").owlCarousel({
                lazyLoad: true,
                responsiveRefreshRate: 50,
                slideSpeed: 500,
                paginationSpeed: 500,
                scrollPerPage: true,
                stopOnHover: true,
                rewindNav: true,
                rewindSpeed: 600,
                pagination: true,
                navigation: false,
                autoPlay: true,
                singleItem: true
            });
        });
        </script>
        <h2 style="font-weight:600;font-size:20px;color:#000;line-height:1;">Custom HTML Block</h2>
        <h5 style="font-family:Arial;font-weight:400;font-size:11px;color:#878787;line-height:1;margin-bottom:13px;">This is a custom sub-title.</h5>
        <p style="font-weight:400;font-size:14px;color:#666;line-height:1.42;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus </p>
    </div>
</div>