<div class="page-container">
<div class="catalog-sections">
    <div class="section-list heading-big">Каталог товаров</div>
    <div class="sections">
        @foreach($sections as $section)
        <div class="section">
            <div class="section-img"><a href="<?echo url()->current() .'/'. $section->slug;?>"><img src="{{ $section->section_image }}" alt="section-img"></a></div>
            <div class="section-block">
                <div class="section-name hover-yellow">
                    <a href="<?echo url()->current() . $section->slug;?>">{{$section->name}}</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>
