/*favorite items*/
// if(document.querySelector('.elements-section__item-favorite')){
//     document.querySelectorAll('.elements-section__item-favorite').forEach((elem)=>{
//         elem.addEventListener('click',()=>{
//             console.log(elem);
//         })
//     })
// }
let sizeListOpener = document.querySelector('.product-item-size-list span');
let sortOpener = document.querySelector('.section-sorter');
let mobileSortOpener = document.querySelector('.section-mobile-sorter');
let sizeList = document.querySelector('.size-list');
let mobmenuopener = document.querySelector('.header__mobile-menu-icon');
let modalwrapper = document.querySelector('.modal-wrapper');
let mobmenu = document.querySelector('.mobile-menu');
if(document.querySelector('.elements-section__item')){
    let elements = document.querySelectorAll('.elements-section__item-favorite');
    let favoritesCount = document.querySelector('.favorites .number');
    elements.forEach((element)=>{
        element.addEventListener('click', () => {
            let parent = element.closest('.elements-section__item');
            let parentId = Number(parent.dataset.productId);
            let res = sendAjax(parentId);
            let result = res.responseText;
            if(result >= 1){
                favoritesCount.innerHTML = result;
                document.querySelector('.header__menu-item.favorites a').setAttribute('href', '/favorites')
                document.querySelector('.header__menu-item.favorites a').style.pointerEvents = '';
                document.querySelector('.header__menu-item.favorites a').style.cursor = '';
            }else{
                favoritesCount.innerHTML = ""
                document.querySelector('.header__menu-item.favorites a').setAttribute('href', '')
                document.querySelector('.header__menu-item.favorites a').style.pointerEvents = 'none';
                document.querySelector('.header__menu-item.favorites a').style.cursor = 'unset';
            }
            element.classList.toggle('active');

        });
    });

}
// if(sizeListOpener){
//     sizeListOpener.addEventListener('click',function(){
//
//     })
// }
if (sortOpener) {
    if(sortOpener.querySelector('.section-sorter__item.disabled')){
        sortOpener.querySelector('.section-sorter__value').textContent = sortOpener.querySelector('.section-sorter__item.disabled').textContent;
    }
    sortOpener.addEventListener('click', (event) => {
        event.stopPropagation();
        sortOpener.querySelector('.section-sorter__list').classList.toggle('show');
    });

    document.addEventListener('click', (e) => {
        if (e.target != sortOpener && sortOpener.querySelector('.section-sorter__list').classList.contains('show')) {
            sortOpener.querySelector('.section-sorter__list').classList.toggle('show');
        }
    });
}
if (mobileSortOpener) {
    if(mobileSortOpener.querySelector('.section-sorter__item.disabled')){
        mobileSortOpener.querySelector('.section-sorter__value').textContent = mobileSortOpener.querySelector('.section-sorter__item.disabled').textContent;
    }
    mobileSortOpener.addEventListener('click', (event) => {
        event.stopPropagation();
        mobileSortOpener.querySelector('.section-sorter__list').classList.toggle('show');
    });

    document.addEventListener('click', (e) => {
        if (e.target != mobileSortOpener && mobileSortOpener.querySelector('.section-sorter__list').classList.contains('show')) {
            mobileSortOpener.querySelector('.section-sorter__list').classList.toggle('show');
        }
    });
}
if(document.querySelector('.element-buttons__add-to-favorites')){
    let element = document.querySelector('.element-buttons__add-to-favorites');
    let favoritesCount = document.querySelector('.favorites .number');
    element.addEventListener('click', () => {
        let parent = element.closest('.element-info');
        let parentId = Number(parent.dataset.productId);
        let res = sendAjax(parentId);
        let result = res.responseText;
        if(result >= 1){
            favoritesCount.innerHTML = result;
        }else{
            favoritesCount.innerHTML = ""
        }
        element.classList.toggle('active');
    });
}

function sendAjax(data){
    let res = $.ajax({
        url: '/ajax/Favorites.php',
        method: 'POST',
        data: {FAVORITE_ITEM: data},
        dataType: 'text',
        async:false ,
        success: function(response){
            // console.log('success');
            // console.log(response);
        },
        error: function(jqXHR, textStatus, errorThrown){
            // console.log(textStatus, errorThrown);
        }
    });
    return res;
}
/*end favorite items*/

document.addEventListener('DOMContentLoaded', function() {



    // let mobmenu = document.querySelector('.header__mobile-menu-icon');
    // mobmenu.addEventListener('click', function () {
    //     this.classList.toggle('open');
    // });
});


modalwrapper.addEventListener('click',(e)=>{
    if(e.target == modalwrapper){
        let children = modalwrapper.children;
        for (let i = 0; i < children.length; i++) {
            if(children[i].classList.contains('open')){
                children[i].classList.toggle('open');
            }
        }
        modalwrapper.classList.toggle('open');
        if(mobmenuopener.classList.contains('open')){
            mobmenuopener.classList.toggle('open')
        }
        // if(mobmenu.classList.contains('open')){
        //     mobmenu.classList.toggle('open');
        // }
        if(document.body.classList.contains('no-scroll')){
            document.body.classList.toggle('no-scroll');
        }

    }
})
if(mobmenuopener){
    mobmenuopener.addEventListener('click',()=> {
        if(mobmenuopener.classList.contains('open')){
            mobmenuopener.classList.toggle('open');
            let children = modalwrapper.children;
            for (let i = 0; i < children.length; i++) {
                if(children[i].classList.contains('open')){
                    children[i].classList.toggle('open');
                }
            }
            if (modalwrapper.classList.contains('open')) {
                modalwrapper.classList.toggle('open');
            }
            if(document.body.classList.contains('no-scroll')){
                document.body.classList.toggle('no-scroll')
            }
        }else {
            let children = modalwrapper.children;
            for (let i = 0; i < children.length; i++) {
                if (children[i].classList.contains('open')) {
                    children[i].classList.toggle('open');
                }
            }
            if (!modalwrapper.classList.contains('open')) {
                modalwrapper.classList.toggle('open');
            }
            if(!document.body.classList.contains('no-scroll')){
                document.body.classList.toggle('no-scroll');
            }
            mobmenu.classList.toggle('open');
            mobmenuopener.classList.toggle('open');
        }})
}
if(sizeListOpener){
    sizeListOpener.addEventListener('click',()=> {
        document.body.classList.toggle('no-scroll');
        sizeList.classList.toggle('open');
        modalwrapper.classList.toggle('open');
    })
}
if(document.querySelector('.size-list-close div')){
    document.querySelector('.size-list-close div').addEventListener('click',function (){
        sizeList.classList.toggle('open');
        document.body.classList.toggle('no-scroll');
        modalwrapper.classList.toggle('open');

    })
}
$(function() {
    $('.element-images__list-item-image').ezPlus({
        zoomType: 'inner',
        cursor: 'crosshair'
    });
});

/*sliders*/

if(document.querySelector('.element-images') && window.innerWidth <= 991){
    new Swiper('.element-images-slider', {
        // Optional parameters
        slidesPerView: 1.1,
        direction: 'horizontal',
        loop: false,
        spaceBetween: 2,
        breakpoints: {
            // when window width is >= 320px
            991: {
                slidesPerView: 1.1,
                spaceBetween: 20
            },
            // when window width is >= 480px
            575: {
                slidesPerView: 1.3,
                spaceBetween: 10
            },

        }

    });
};

if(document.querySelector('#recommend-slider')){
    new Swiper('#recommend-slider', {
        // Optional parameters
        slidesPerView: 5.5,
        direction: 'horizontal',
        loop: false,
        spaceBetween: 20,
        breakpoints: {
            // when window width is >= 320px
            991: {
                slidesPerView: 5.5,
                spaceBetween: 20
            },
            // when window width is >= 480px
            767: {
                slidesPerView: 3.5,
                spaceBetween: 10
            },

        }}
    );
}

if(document.querySelector('#viewed-slider')){
    new Swiper('#viewed-slider', {
        // Optional parameters
        slidesPerView: 8.2,
        direction: 'horizontal',
        loop: false,
        spaceBetween: 20,
        breakpoints: {
            // when window width is >= 320px
            991: {
                slidesPerView: 8.2,
                spaceBetween: 20
            },
            // when window width is >= 480px
            320: {
                slidesPerView: 3.5,
                spaceBetween: 10
            },

        }}
    );
}


if(document.querySelector('#recommend-slider-mobile')){
    new Swiper('#recommend-slider-mobile', {
        // Optional parameters
        slidesPerView: 5.5,
        direction: 'horizontal',
        loop: false,
        spaceBetween: 10,
        breakpoints: {
            575: {
                slidesPerView: 2.8,
                spaceBetween: 10
            },
            270: {
                slidesPerView: 1.8,
                spaceBetween: 10
            },
        }

    });
}

if(document.querySelector('#main-banner-swiper')) {
    new Swiper('#main-banner-swiper', {
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        slidesPerView: 1,
        direction: 'horizontal',
        loop: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

    });
}


