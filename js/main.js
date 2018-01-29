(function($) {
    // Tamaño de la pantalla
    var $window = $(window),
        windowSize	= $window.width();

    $('.title').prepend('<span class="top"></span><span class="bot"></span>');
    function menuMobile() {
        var menu = $('.header--bottom'),
            icon = $('.header__mobile--icon');
        icon.click(function() {
            menu.stop().slideToggle();
            $(this).toggleClass('active');
        });
    }
    function itemMobile() {
        var item = $('.menu--bottom__item'),
            submenu = $('.menu--bottom__submenu');
        item.click(function() {
            var $this = $(this);
            $this.find('.menu--bottom__submenu').stop().slideToggle(200);
            $this.toggleClass('active');
            $this.siblings().find('.menu--bottom__submenu').stop().slideUp(200);
            $this.siblings().removeClass('active');
        });
    }
    function itemDesktop() {
        var item = $('.menu--bottom__item'),
            submenu = $('.menu--bottom__submenu');
        item.hover(function() {
            var $this = $(this);
            $this.find('.menu--bottom__submenu').stop().slideToggle(200);
        });
    }
    function searchMobile() {
        var icon = $('.buscador--icon'),
            box = $('.header__buscador'),
            close = $('.seach__close');
        icon.click(function() {
            var $this = $(this);
            $this.parent().addClass('active');
            $('.header').addClass('active');
            close.addClass('active');
        });
        close.click(function() {
            var $this = $(this);
            $this.parents('.header').find('.header__buscador').removeClass('active');
            $('.header').removeClass('active');
            $this.removeClass('active');
        });
    }
    function bordes() {
        var item = $('.item');
        item.each(function() {
            if(!$(this).hasClass('item--define')) {
                var rng = Math.round(Math.random()*5),
                    classes = ["border-1", "border-2", "border-3", "border-4", "border-5", "border-6"];
                $(this).find('.border--style').addClass(classes[rng]);
            }
        });
    }
    function hideZoom() {
        var zoomBox = $('.zoomContainer');
        zoomBox.hide();
    }
    function showZoom() {
        var zoomBox = $('.zoomContainer');
        zoomBox.show();
    }
    function lightboxHome() {
        var item = $('.lightbox--block'),
            close = $('.lightbox__close, .js-close'),
            itemProducto = $('.openit');

        item.addClass('item--lightbox');
        item.find('a').click(function(e) {
            e.preventDefault();
        });
        var itemLight = $('.item--lightbox');
        itemLight.click(function() {
            var $this = $(this),
                media = $('.lightbox__media');
            $this.parent().find('.fast-view').fadeIn();
            $this.find('.border--style').clone().prependTo(media);
            zoomImage();
            showZoom();
        });
        close.click(function() {
            var $this = $(this);
            $this.parents('.item').find('.fast-view').fadeOut(300, function() {
                $('.lightbox__media').empty();
            });
            hideZoom();
        });
        itemProducto.click(function() {
            var $this = $(this),
                media = $('.lightbox__media');
            $this.parents('.item').find('.fast-view').fadeIn();
            $this.parents('.item').find('.border--style').clone().prependTo(media);
            zoomImage();
            showZoom();
        });
    }
    function numberInput() {
        $('.quantity').find('input').val(1);
        $('.dec-numb').click(function() {
            var $button = $(this);
            var oldValue = $button.parent().find("input").val();
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
            $button.parent().find("input").val(newVal);
        });
        $('.inc-numb').click(function() {
            var $button = $(this);
            var oldValue = $button.parent().find("input").val();
            var newVal = parseFloat(oldValue) + 1;
            $button.parent().find("input").val(newVal);
        });
    }
    function relatedSlider() {
        $('.slider').flexslider({
            animation: 'slide',
            controlNav: false,
            prevText: '<svg><use xlink:href="#shape-pag-back" /></svg>',
            nextText: '<svg><use xlink:href="#shape-pag-next" /></svg>'
        });
    }
    function filtrosNovedades() {
        $('.filtro__content').flexslider({
            animation: 'slide',
            controlNav: false,
            customDirectionNav: $(".filtro__more button")
        });
    }
    function inputFocus() {
        var input = $('input, textarea');
        input.focus(function() {
            $(this).parents('.group').addClass('focusin');
        });
        input.blur(function() {
            $(this).parents('.group').removeClass('focusin');
        });
    }
    function tabs() {
        var tabTrigger = $('.js-tab-trigger');
        $('.js-tab-trigger:first-child').addClass('active');
        tabTrigger.on('click', function() {
            var $this  = $(this),
                target = $this.data('tab');
            $this.addClass('active');
            $this.siblings().removeClass('active');
            $('#'+target).fadeIn(500);
            $('#'+target).siblings('.js-tab-content').fadeOut(200);
        });
    }
    function sliderGallery() {
        var slide = $('.js-slider__gallery'),
            slideContent = $('.gallery'),
            fullscreen = $('.js-fullscreen'),
            altura = $window.height(),
            texto = $('.gallery__text p');
        slide.each(function() {
            $(this).flexslider({
                animation: "slide",
                controlNav: false,
                controlsContainer: $(".custom-controls-container"),
                prevText: '<svg><use xlink:href="#shape-pag-back" /></svg>',
                nextText: '<svg><use xlink:href="#shape-pag-next" /></svg>',
                start: function(slider) {
                    $('.total-slides').text(slider.count);
                    $('.current-slide').text(slider.currentSlide+1);
                    var title = $('.flex-viewport .slides').find('.flex-active-slide').children().attr('alt');
                    texto.empty();
                    texto.text(title);
                },
                after: function(slider) {
                    $('.current-slide').text(slider.currentSlide+1);
                    var title = $('.flex-viewport .slides').find('.flex-active-slide').children().attr('alt');
                    texto.empty();
                    texto.text(title);
                }
            });
        });
        fullscreen.click(function() {
            if(fullscreen.hasClass('open-gallery')) {
                slideContent.removeClass('slider--fullscreen');
                fullscreen.removeClass('open-gallery');
                slide.find('ul li').css('height', 490);
            } else {
                slideContent.addClass('slider--fullscreen');
                fullscreen.addClass('open-gallery');
                slide.find('ul li').css('height', altura);
            }
            setTimeout(function(){ slide.resize(); }, 350);

        });
    }
    function accordeon() {
        var button = $('.accordeon');
        button.click(function() {
            var $this = $(this);
            $this.parents('.estado__container').find('.estado__resumen__container').slideToggle();
            $this.parents('.estado__container').siblings().find('.estado__resumen__container').slideUp();
            $this.parents('.estado__block').toggleClass('active');
            $this.parents('.estado__container').siblings().find('.estado__block').removeClass('active');
        });
    }
    function search404() {
        var but = $('.but-search'),
            search = $('.input-search');
        but.click(function() {
            $('.header__buscador').toggleClass('active');
            search.focus();
        });
    }
    function buscadorDesktop() {
        var send = $('.header__buscador .send-group'),
            icon = $('.buscador--icon');
        send.hover(function() {
            icon.toggleClass('color');
        })
    }
    function carroCompras() {
        $('.coupon').prepend('<span class="top"></span><span class="right"></span><span class="bot"></span><span class="left"></span>').addClass('border--style border-1');
        $('.product-remove a').empty().text('Eliminar');
        $('.product-quantity .quantity').prepend('<span class="dec-numb"><svg><use xlink:href="#shape-less" /></svg></span>').append('<span class="inc-numb"><svg><use xlink:href="#shape-plus" /></svg></span>');
    }
    function categorias() {
        var $item = $('.filtro__list'),
            $itemWidth = $item.width(),
            content = $('.filtro__content').width(),
            index = 0, //Starting index
            endIndex = (($itemWidth / content) * 2) - 2,
            more = $('.filtro__more');
        if($itemWidth > content ){
            more.removeClass('disable');
        }
        $('.filtro-next').click(function(){
            if(index < endIndex ){
                index++;
                $item.animate({'left':'-=' + content / 2 + 'px'});
            }
        });

        $('.filtro-back').click(function(){
            if(index > 0){
                index--;
                $item.animate({'left':'+=' + content / 2 + 'px'});
            }
        });
    }
    function popupLinks(){
        var $trigger = $('.popup');
        $trigger.on('click', function(e) {
            e.preventDefault();
            var width  = 575,
                height = 400,
                left   = ($window.width()  - width)  / 2,
                top    = ($window.height() - height) / 2,

                opts   = 'status=1' +
                ',width='  + width  +
                ',height=' + height +
                ',top='    + top    +
                ',left='   + left;

            window.open(this.href,'compartir', opts);
        });
    }
    function zoomImage() {
        var image = $('.zoom-box .zoom');
        if(image.length) {
            image.elevateZoom({
                tint:true,
                tintColour:'#ffffff',
                tintOpacity:0.5,
                lensSize: 20
            });
        }
    }
    function titutlos() {
        var altura=0; // the height of the highest element (after the function runs)
        var altura_elem;  // the highest element (after the function runs)
        $('.item .item__title').each(function () {
            $this = $(this);
            if ( $this.outerHeight() > altura ) {
                altura_elem=this;
                altura=$this.outerHeight();
            }
        });
        $('.item .item__title').height(altura);
    }
    function items() {
        var item = $('.item');
        item.wrapInner('<div class="item__container"></div>');
    }
    function welcome() {
        var close = $('.welcome__cerrar'),
            welcome = $('.welcome');
        close.click(function() {
            welcome.fadeOut();
        });
    }
    if(windowSize < 1160) {
        menuMobile();
        itemMobile();
        searchMobile();
        tabs();
    }
    if( windowSize < 740) {
        relatedSlider();
    } 
    if( windowSize > 1160) {
        lightboxHome();
        //itemDesktop();
        buscadorDesktop();
        zoomImage();
    }
    bordes();
    inputFocus();
    sliderGallery();
    accordeon();
    search404();
    filtrosNovedades();
    carroCompras();
    numberInput();
    categorias();
    popupLinks();
    items();
    welcome();
    $(window).load(function() {
        titutlos();
    });
})(jQuery);
