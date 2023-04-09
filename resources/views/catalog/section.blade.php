<div class="page-container">
    <div class="section-content">
        <div class="section-header">
            <h1 class="section-heading">{{ $section->name }}</h1>
            <div class="section-sorter" style="display: none">
                <div class="section-sorter__value">По популярности</div>
                <div class="section-sorter__list">
                    <a class="section-sorter__item " href="?sort=show_counter&amp;method=desc">По популярности</a><a
                        class="section-sorter__item " href="?sort=property_NEW_PRODUCT&amp;method=desc">Сначала
                        новинки</a><a class="section-sorter__item " href="?sort=catalog_PRICE_1&amp;method=asc">Сначала
                        дешёвые</a><a class="section-sorter__item " href="?sort=catalog_PRICE_1&amp;method=desc">Сначала
                        дорогие</a></div>
            </div>
        </div>
        <div class="elements-section" data-entity="">
            @foreach($section->products as $product)
                <div data-product-id="{{$product->id}}" class="elements-section__item">
                    <a href="<?echo url()->current() . '/' . $product->slug;?>" class="elements-section__item-slider">
                        <img loading="lazy" src="{{$product->product_image}}" alt="item-img">
                    </a>
                    <div class="elements-section__item-name"><a
                            href="<?echo url()->current() . '/' . $product->slug;?>">{{ $product->name}}</a></div>
                    <div class="elements-section__item-price"><a
                            href="<?echo url()->current() . '/' . $product->slug;?>">{{$product->price . '₽'}}</a></div>
                    <div class="elements-section__item-favorite">
                        <svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M11.9997 1.97108C18.6567 -4.87192 35.3007 7.10258 11.9997 22.5001C-11.3013 7.10408 5.34267 -4.87192 11.9997 1.97108Z"
                                  fill="white" stroke="#808080" stroke-width="0.1"/>
                        </svg>
                    </div>
                </div>

            @endforeach
        </div>
    </div>
</div>
