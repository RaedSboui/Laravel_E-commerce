@extends('layouts.front.template')

@section('content')
<!-- breadcrumbs -->
<div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
            <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
            <li class="active">Products</li>
        </ol>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<div class="products">
    <div class="container">
        <div class="col-md-4 products-left">
            <div class="filter-price animated wow slideInUp" data-wow-delay=".5s">
                <h3>Filter By Price</h3>
                <ul class="dropdown-menu1">
                        <li><a href="">								               
                        <div id="slider-range"></div>							
                        <input type="text" id="amount" style="border: 0" />
                        </a></li>	
                </ul>
                    <script type='text/javascript'>//<![CDATA[ 
                    $(window).load(function(){
                     $( "#slider-range" ).slider({
                            range: true,
                            min: 0,
                            max: 100000,
                            values: [ 20000, 80000 ],
                            slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
                            }
                 });
                $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );


                    });//]]>
                    </script>
                    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
                 <!---->
            </div>

            <div class="categories animated wow slideInUp" data-wow-delay=".5s">
                <h3>Categories</h3>
                <ul class="cate">
                    @foreach ($categories as $cat)
                        <li><a href="{{ route('front.product', $cat->id)}}">{{ $cat->name }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="new-products animated wow slideInUp" data-wow-delay=".5s">
                <h3>New Products</h3>
                <div class="new-products-grids">
                    <div class="new-products-grid">
                        <div class="new-products-grid-left">
                            <a href="single.html"><img src="../../images/front/6.jpg" alt=" " class="img-responsive" /></a>
                        </div>
                        <div class="new-products-grid-right">
                            <h4><a href="single.html">occaecat cupidatat</a></h4>
                            <div class="rating">
                                <div class="rating-left">
                                    <img src="../../images/front/2.png" alt=" " class="img-responsive">
                                </div>
                                <div class="rating-left">
                                    <img src="../../images/front/2.png" alt=" " class="img-responsive">
                                </div>
                                <div class="rating-left">
                                    <img src="../../images/front/2.png" alt=" " class="img-responsive">
                                </div>
                                <div class="rating-left">
                                    <img src="../../images/front/1.png" alt=" " class="img-responsive">
                                </div>
                                <div class="rating-left">
                                    <img src="../../images/front/1.png" alt=" " class="img-responsive">
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="simpleCart_shelfItem new-products-grid-right-add-cart">
                                <p> <span class="item_price">$180</span><a class="item_add" href="#">add to cart </a></p>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="new-products-grid">
                        <div class="new-products-grid-left">
                            <a href="single.html"><img src="../../images/front/26.jpg" alt=" " class="img-responsive" /></a>
                        </div>
                        <div class="new-products-grid-right">
                            <h4><a href="single.html">eum fugiat quo</a></h4>
                            <div class="rating">
                                <div class="rating-left">
                                    <img src="../../images/front/2.png" alt=" " class="img-responsive">
                                </div>
                                <div class="rating-left">
                                    <img src="../../images/front/2.png" alt=" " class="img-responsive">
                                </div>
                                <div class="rating-left">
                                    <img src="../../images/front/2.png" alt=" " class="img-responsive">
                                </div>
                                <div class="rating-left">
                                    <img src="../../images/front/1.png" alt=" " class="img-responsive">
                                </div>
                                <div class="rating-left">
                                    <img src="../../images/front/1.png" alt=" " class="img-responsive">
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="simpleCart_shelfItem new-products-grid-right-add-cart">
                                <p> <span class="item_price">$250</span><a class="item_add" href="#">add to cart </a></p>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="new-products-grid">
                        <div class="new-products-grid-left">
                            <a href="single.html"><img src="../../images/front/11.jpg" alt=" " class="img-responsive" /></a>
                        </div>
                        <div class="new-products-grid-right">
                            <h4><a href="single.html">officia deserunt</a></h4>
                            <div class="rating">
                                <div class="rating-left">
                                    <img src="../../images/front/2.png" alt=" " class="img-responsive">
                                </div>
                                <div class="rating-left">
                                    <img src="../../images/front/2.png" alt=" " class="img-responsive">
                                </div>
                                <div class="rating-left">
                                    <img src="../../images/front/2.png" alt=" " class="img-responsive">
                                </div>
                                <div class="rating-left">
                                    <img src="../../images/front/1.png" alt=" " class="img-responsive">
                                </div>
                                <div class="rating-left">
                                    <img src="../../images/front/1.png" alt=" " class="img-responsive">
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="simpleCart_shelfItem new-products-grid-right-add-cart">
                                <p> <span class="item_price">$259</span><a class="item_add" href="#">add to cart </a></p>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <div class="men-position animated wow slideInUp" data-wow-delay=".5s">
                <a href="single.html"><img src="../../images/front/27.jpg" alt=" " class="img-responsive" /></a>
                <div class="men-position-pos">
                    <h4>Summer collection</h4>
                    <h5><span>55%</span> Flat Discount</h5>
                </div>
            </div>
        </div>
        <div class="col-md-8 products-right">
            <div class="products-right-grid">
                <div class="products-right-grids animated wow slideInRight" data-wow-delay=".5s">
                    <div class="sorting">
                        <select id="country" onchange="change_country(this.value)" class="frm-field required sect">
                            <option value="null">Default sorting</option>
                            <option value="null">Sort by popularity</option> 
                            <option value="null">Sort by average rating</option>					
                            <option value="null">Sort by price</option>								
                        </select>
                    </div>
                    <div class="sorting-left">
                        <select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
                            <option value="null">Item on page 9</option>
                            <option value="null">Item on page 18</option> 
                            <option value="null">Item on page 32</option>					
                            <option value="null">All</option>								
                        </select>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="products-right-grids-position animated wow slideInRight" data-wow-delay=".5s">
                    <img src="../../images/front/18.jpg" alt=" " class="img-responsive" />
                    <div class="products-right-grids-position1">
                        <h4>2016 New Collection</h4>
                        <p>Temporibus autem quibusdam et aut officiis debitis aut rerum 
                            necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae 
                            non recusandae.</p>
                    </div>
                </div>
            </div>

            <div class="products-right-grids-bottom">
                @foreach ($products as $product)
                    <div class="col-md-4 products-right-grids-bottom-grid">
                        <div class="new-collections-grid1 products-right-grid1 animated wow slideInUp" data-wow-delay=".5s">
                            <div class="new-collections-grid1-image">
                                <a href="single.html" class="product-image">
                                    <img src="{{ asset('images/products/'.$product->image) }}" alt=" " class="img-responsive">
                                </a>
                                <div class="new-collections-grid1-image-pos products-right-grids-pos">
                                    <a href="{{ route('front.single',$product->id) }}">Quick View</a>
                                </div>
                                <h4>{{ $product->name }}</h4>
                                <p>{{ $product->description }}</p>
                                <div class="simpleCart_shelfItem products-right-grid1-add-cart">
                                    <p>
                                        <span class="item_price">${{ $product->price }}</span>
                                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" value="{{ $product->id }}" name="id"/>
                                            <input type="hidden" value="{{ $product->name }}" name="name"/>
                                            <input type="hidden" value="{{ $product->price }}" name="price"/>
                                            <input type="hidden" value="{{ $product->image }}"  name="image"/>
                                            <input type="hidden" value="1" name="quantity"/>
                                            <input type="hidden" value="{{ $category }}" name="category_id">
                                            <button type="submit" style="background: #e67e22; color:white ;border:none; padding:5px">Add To Cart</button>
                                        </form>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="clearfix"> </div>
            </div>


            <nav class="numbering animated wow slideInRight" data-wow-delay=".5s">
              <ul class="pagination paging">
                <li>
                  <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                  <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //breadcrumbs -->
@endsection