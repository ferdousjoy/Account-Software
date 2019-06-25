(function(window,document,$){'use strict';var $html=$('html');var $body=$('body');$(window).on('load',function(){var rtl;var compactMenu=false;if($('html').data('textdirection')=='rtl'){rtl=true;}setTimeout(function(){$html.removeClass('loading').addClass('loaded');},1200);$.app.menu.init(compactMenu);var config={speed:300};if($.app.nav.initialized===false){$.app.nav.init(config);}Unison.on('change',function(bp){$.app.menu.change();});$('[data-toggle="tooltip"]').tooltip({container:'body'});if($(".navbar-hide-on-scroll").length>0){$(".navbar-hide-on-scroll.fixed-top").headroom({"offset":205,"tolerance":5,"classes":{initial:"headroom",pinned:"headroom--pinned-top",unpinned:"headroom--unpinned-top",}});$(".navbar-hide-on-scroll.fixed-bottom").headroom({"offset":205,"tolerance":5,"classes":{initial:"headroom",pinned:"headroom--pinned-bottom",unpinned:"headroom--unpinned-bottom",}});}$('a[data-action="collapse"]').on('click',function(e){e.preventDefault();$(this).closest('.card').children('.card-content').collapse('toggle');$(this).closest('.card').find('[data-action="collapse"] i').toggleClass('ft-minus ft-plus');});$('a[data-action="expand"]').on('click',function(e){e.preventDefault();$(this).closest('.card').find('[data-action="expand"] i').toggleClass('ft-maximize ft-minimize');$(this).closest('.card').toggleClass('card-fullscreen');});if($('.scrollable-container').length>0){$('.scrollable-container').perfectScrollbar({theme:"dark"});}$('a[data-action="reload"]').on('click',function(){var block_ele=$(this).closest('.card');block_ele.block({message:'<div class="ft-refresh-cw icon-spin font-medium-2"></div>',timeout:2000,overlayCSS:{backgroundColor:'#FFF',cursor:'wait',},css:{border:0,padding:0,backgroundColor:'none'}});});$('a[data-action="close"]').on('click',function(){$(this).closest('.card').removeClass().slideUp('fast');});setTimeout(function(){$('.row.match-height').each(function(){$(this).find('.card').not('.card .card').matchHeight();});},500);$('.card .heading-elements a[data-action="collapse"]').on('click',function(){var $this=$(this),card=$this.closest('.card');var cardHeight;if(parseInt(card[0].style.height,10)>0){cardHeight=card.css('height');card.css('height','').attr('data-height',cardHeight);}else{if(card.data('height')){cardHeight=card.data('height');card.css('height',cardHeight).attr('data-height','');}}});var menuType=$body.data('menu');if(menuType!='horizontal-menu'&&compactMenu===false){if($body.data('menu')=='vertical-menu-modern'){if(localStorage.getItem("menuLocked")==="true"){$(".main-menu-content").find('li.active').parents('li').addClass('open');}}else{$(".main-menu-content").find('li.active').parents('li').addClass('open');}}if(menuType=='horizontal-menu'){$(".main-menu-content").find('li.active').parents('li:not(.nav-item)').addClass('open');$(".main-menu-content").find('li.active').parents('li').addClass('active');}$(".heading-elements-toggle").on("click",function(){$(this).parent().children(".heading-elements").toggleClass("visible");});var chartjsDiv=$('.chartjs'),canvasHeight=chartjsDiv.children('canvas').attr('height');chartjsDiv.css('height',canvasHeight);if($body.hasClass('boxed-layout')){if($body.hasClass('vertical-overlay-menu')){var menuWidth=$('.main-menu').width();var contentPosition=$('.app-content').position().left;var menuPositionAdjust=contentPosition-menuWidth;if($body.hasClass('menu-flipped')){$('.main-menu').css('right',menuPositionAdjust+'px');}else{$('.main-menu').css('left',menuPositionAdjust+'px');}}}$('.nav-link-search').on('click',function(){var $this=$(this),searchInput=$(this).siblings('.search-input');if(searchInput.hasClass('open')){searchInput.removeClass('open');}else{searchInput.addClass('open');}});});$(document).on('click','.menu-toggle, .modern-nav-toggle',function(e){e.preventDefault();$.app.menu.toggle();setTimeout(function(){$(window).trigger("resize");},200);if($('#collapsed-sidebar').length>0){setTimeout(function(){if($body.hasClass('menu-expanded')||$body.hasClass('menu-open')){$('#collapsed-sidebar').prop('checked',false);}else{$('#collapsed-sidebar').prop('checked',true);}},1000);}return false;});$(document).on('click','.open-navbar-container',function(e){var currentBreakpoint=Unison.fetch.now();$.app.menu.drillDownMenu(currentBreakpoint.name);});$(document).on('click','.main-menu-footer .footer-toggle',function(e){e.preventDefault();$(this).find('i').toggleClass('pe-is-i-angle-down pe-is-i-angle-up');$('.main-menu-footer').toggleClass('footer-close footer-open');return false;});$('.navigation').find('li').has('ul').addClass('has-sub');$('.carousel').carousel({interval:2000});$('.nav-link-expand').on('click',function(e){if(typeof screenfull!='undefined'){if(screenfull.enabled){screenfull.toggle();}}});if(typeof screenfull!='undefined'){if(screenfull.enabled){$(document).on(screenfull.raw.fullscreenchange,function(){if(screenfull.isFullscreen){$('.nav-link-expand').find('i').toggleClass('ft-minimize ft-maximize');}else{$('.nav-link-expand').find('i').toggleClass('ft-maximize ft-minimize');}});}}$(document).on('click','.mega-dropdown-menu',function(e){e.stopPropagation();});$(document).ready(function(){$('.step-icon').each(function(){var $this=$(this);if($this.siblings('span.step').length>0){$this.siblings('span.step').empty();$(this).appendTo($(this).siblings('span.step'));}});});$(window).resize(function(){$.app.menu.manualScroller.updateHeight();});$('.nav.nav-tabs a.dropdown-item').on('click',function(){var $this=$(this),href=$this.attr('href');var tabs=$this.closest('.nav');tabs.find('.nav-link').removeClass('active');$this.closest('.nav-item').find('.nav-link').addClass('active');$this.closest('.dropdown-menu').find('.dropdown-item').removeClass('active');$this.addClass('active');tabs.next().find(href).siblings('.tab-pane').removeClass('active in').attr('aria-expanded',false);$(href).addClass('active in').attr('aria-expanded','true');});$('#sidebar-page-navigation').on('click','a.nav-link',function(e){e.preventDefault();e.stopPropagation();var $this=$(this),href=$this.attr('href');var offset=$(href).offset();var scrollto=offset.top-80;$('html, body').animate({scrollTop:scrollto},0);setTimeout(function(){$this.parent('.nav-item').siblings('.nav-item').children('.nav-link').removeClass('active');$this.addClass('active');},100);});})(window,document,jQuery);