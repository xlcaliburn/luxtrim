<!DOCTYPE HTML>
<html>

<head>
    <title>Gallery | Lux Trim Mouldings and Interior Design | Vaughan</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!-- Core CSS file -->
    <link rel="stylesheet" href="photoswipe/photoswipe.css">
    <link rel="stylesheet" href="photoswipe/default-skin/default-skin.css">
    <script src="photoswipe/photoswipe.min.js"></script>
    <script src="photoswipe/photoswipe-ui-default.min.js"></script>
    <style>
        .gallery {
            display: inline-block;
            margin-bottom: 3em;
        }

        .gallery img {
            width: 100%;
            height: auto;
        }

        .gallery figure {
            display: inline-block;
            max-width: 300px;
            margin: 0 auto;
        }

        .gallery figcaption {
            display: none;
        }
    </style>

</head>

<body class="contact">
    <div id="page-wrapper">
        <?php include 'shared/header.php';?>
        <div style="height:6em"></div>
        <!-- Main -->
        <section class="container center">
            <h1>GALLERY</h1>

            <div class="gallery center" itemscope itemtype="http://schema.org/ImageGallery">
                <figure>
                    <a href="assets/gallery/large/1.jpg" itemprop="contentUrl" data-size="4032x3024">
                        <img src="assets/gallery/thumb/1.jpg" itemprop="thumbnail" alt="Living room moulding design" title="Living room moulding design" />
                    </a>
                </figure>

                <figure>
                    <a href="assets/gallery/large/2.jpg" itemprop="contentUrl" data-size="4032x3024">
                        <img src="assets/gallery/thumb/2.jpg" itemprop="thumbnail" alt="Office moulding waffle ceiling" title="Office moulding waffle ceiling" />
                    </a>
                </figure>

                <figure>
                    <a href="assets/gallery/large/3.jpg" itemprop="contentUrl" data-size="4032x3024">
                        <img src="assets/gallery/thumb/3.jpg" itemprop="thumbnail" alt="Bedroom moulding design" title="Bedroom moulding design" />
                    </a>
                </figure>

                <figure>
                    <a href="assets/gallery/large/4.jpg" itemprop="contentUrl" data-size="4032x3024">
                        <img src="assets/gallery/thumb/4.jpg" itemprop="thumbnail" alt="Office waffle ceiling design" title="Office waffle ceiling design" />
                    </a>
                </figure>

                <figure>
                    <a href="assets/gallery/large/5.jpg" itemprop="contentUrl" data-size="4032x3024">
                        <img src="assets/gallery/thumb/5.jpg" itemprop="thumbnail" alt="Neoclassic design thumbnail" title="Neoclassic design thumbnail" />
                    </a>
                </figure>

                <figure>
                    <a href="assets/gallery/large/6.jpg" itemprop="contentUrl" data-size="4032x3024">
                        <img src="assets/gallery/thumb/6.jpg" itemprop="thumbnail" alt="LED lighting moulding design" title="LED lighting moulding design" />
                    </a>
                </figure>

                <figure>
                    <a href="assets/gallery/large/7.jpg" itemprop="contentUrl" data-size="4032x3024">
                        <img src="assets/gallery/thumb/7.jpg" itemprop="thumbnail" alt="Family room moulding design" title="Family room moulding design" />
                    </a>
                </figure>

                <figure>
                    <a href="assets/gallery/large/8.jpg" itemprop="contentUrl" data-size="4032x3024">
                        <img src="assets/gallery/thumb/8.jpg" itemprop="thumbnail" alt="Dining room moulding design" title="Dining room moulding design" />
                    </a>
                </figure>
                <figure>
                    <a href="assets/gallery/large/9.jpg" itemprop="contentUrl" data-size="4032x3024">
                        <img src="assets/gallery/thumb/9.jpg" itemprop="thumbnail" alt="Classic wall panel wallpaper" title="Classic wall panel wallpaper" />
                    </a>
                </figure>

                <figure>
                    <a href="assets/gallery/large/10.jpg" itemprop="contentUrl" data-size="4032x3024">
                        <img src="assets/gallery/thumb/10.jpg" itemprop="thumbnail" alt="Office moulding decor design" title="Office moulding decor design" />
                    </a>
                </figure>

                <figure>
                    <a href="assets/gallery/large/11.jpg" itemprop="contentUrl" data-size="1200x675">
                        <img src="assets/gallery/thumb/11.jpg" itemprop="thumbnail" alt="Wallpaper moulding" title="Wallpaper moulding" />
                    </a>
                </figure>

                <figure>
                    <a href="assets/gallery/large/12.jpg" itemprop="contentUrl" data-size="4128x2322">
                        <img src="assets/gallery/thumb/12.jpg" itemprop="thumbnail" alt="Ceiling moulding panel" title="Ceiling moulding panel" />
                    </a>
                </figure>
        </section>

        <!-- Root element of PhotoSwipe. Must have class pswp. -->
        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

            <!-- Background of PhotoSwipe.
                 It's a separate element, as animating opacity is faster than rgba(). -->
            <div class="pswp__bg"></div>

            <!-- Slides wrapper with overflow:hidden. -->
            <div class="pswp__scroll-wrap">

                <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
                <!-- don't modify these 3 pswp__item elements, data is added later on. -->
                <div class="pswp__container">
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                </div>

                <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                <div class="pswp__ui pswp__ui--hidden">
                    <div class="pswp__top-bar">
                        <!--  Controls are self-explanatory. Order can be changed. -->
                        <div class="pswp__counter"></div>

                        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                        <button class="pswp__button pswp__button--share" title="Share"></button>
                        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                        <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                        <!-- element will get class pswp__preloader--active when preloader is running -->
                        <div class="pswp__preloader">
                            <div class="pswp__preloader__icn">
                                <div class="pswp__preloader__cut">
                                    <div class="pswp__preloader__donut"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                        <div class="pswp__share-tooltip"></div>
                    </div>

                    <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                    <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                    <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Root element of PhotoSwipe. Must have class pswp. -->
        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

            <!-- Background of PhotoSwipe.
                 It's a separate element, as animating opacity is faster than rgba(). -->
            <div class="pswp__bg"></div>

            <!-- Slides wrapper with overflow:hidden. -->
            <div class="pswp__scroll-wrap">

                <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
                <div class="pswp__container">
                    <!-- don't modify these 3 pswp__item elements, data is added later on -->
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                </div>

                <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                <div class="pswp__ui pswp__ui--hidden">
                    <div class="pswp__top-bar">
                        <!--  Controls are self-explanatory. Order can be changed. -->
                        <div class="pswp__counter"></div>
                        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                        <button class="pswp__button pswp__button--share" title="Share"></button>
                        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

                        <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                        <!-- element will get class pswp__preloader--active when preloader is running -->
                        <div class="pswp__preloader">
                            <div class="pswp__preloader__icn">
                                <div class="pswp__preloader__cut">
                                    <div class="pswp__preloader__donut"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                        <div class="pswp__share-tooltip"></div>
                    </div>

                    <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                    <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                    <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            var initPhotoSwipeFromDOM = function(gallerySelector) {

                // parse slide data (url, title, size ...) from DOM elements
                // (children of gallerySelector)
                var parseThumbnailElements = function(el) {
                    var thumbElements = el.childNodes,
                        numNodes = thumbElements.length,
                        items = [],
                        figureEl,
                        linkEl,
                        size,
                        item;

                    for (var i = 0; i < numNodes; i++) {

                        figureEl = thumbElements[i]; // <figure> element

                        // include only element nodes
                        if (figureEl.nodeType !== 1) {
                            continue;
                        }

                        linkEl = figureEl.children[0]; // <a> element

                        size = linkEl.getAttribute('data-size').split('x');

                        // create slide object
                        item = {
                            src: linkEl.getAttribute('href'),
                            w: parseInt(size[0], 10),
                            h: parseInt(size[1], 10)
                        };



                        if (figureEl.children.length > 1) {
                            // <figcaption> content
                            item.title = figureEl.children[1].innerHTML;
                        }

                        if (linkEl.children.length > 0) {
                            // <img> thumbnail element, retrieving thumbnail url
                            item.msrc = linkEl.children[0].getAttribute('src');
                        }

                        item.el = figureEl; // save link to element for getThumbBoundsFn
                        items.push(item);
                    }

                    return items;
                };

                // find nearest parent element
                var closest = function closest(el, fn) {
                    return el && (fn(el) ? el : closest(el.parentNode, fn));
                };

                // triggers when user clicks on thumbnail
                var onThumbnailsClick = function(e) {
                    e = e || window.event;
                    e.preventDefault ? e.preventDefault() : e.returnValue = false;

                    var eTarget = e.target || e.srcElement;

                    // find root element of slide
                    var clickedListItem = closest(eTarget, function(el) {
                        return (el.tagName && el.tagName.toUpperCase() === 'FIGURE');
                    });

                    if (!clickedListItem) {
                        return;
                    }

                    // find index of clicked item by looping through all child nodes
                    // alternatively, you may define index via data- attribute
                    var clickedGallery = clickedListItem.parentNode,
                        childNodes = clickedListItem.parentNode.childNodes,
                        numChildNodes = childNodes.length,
                        nodeIndex = 0,
                        index;

                    for (var i = 0; i < numChildNodes; i++) {
                        if (childNodes[i].nodeType !== 1) {
                            continue;
                        }

                        if (childNodes[i] === clickedListItem) {
                            index = nodeIndex;
                            break;
                        }
                        nodeIndex++;
                    }



                    if (index >= 0) {
                        // open PhotoSwipe if valid index found
                        openPhotoSwipe(index, clickedGallery);
                    }
                    return false;
                };

                // parse picture index and gallery index from URL (#&pid=1&gid=2)
                var photoswipeParseHash = function() {
                    var hash = window.location.hash.substring(1),
                        params = {};

                    if (hash.length < 5) {
                        return params;
                    }

                    var vars = hash.split('&');
                    for (var i = 0; i < vars.length; i++) {
                        if (!vars[i]) {
                            continue;
                        }
                        var pair = vars[i].split('=');
                        if (pair.length < 2) {
                            continue;
                        }
                        params[pair[0]] = pair[1];
                    }

                    if (params.gid) {
                        params.gid = parseInt(params.gid, 10);
                    }

                    return params;
                };

                var openPhotoSwipe = function(index, galleryElement, disableAnimation, fromURL) {
                    var pswpElement = document.querySelectorAll('.pswp')[0],
                        gallery,
                        options,
                        items;

                    items = parseThumbnailElements(galleryElement);

                    // define options (if needed)
                    options = {

                        // define gallery index (for URL)
                        galleryUID: galleryElement.getAttribute('data-pswp-uid'),

                        getThumbBoundsFn: function(index) {
                            // See Options -> getThumbBoundsFn section of documentation for more info
                            var thumbnail = items[index].el.getElementsByTagName('img')[0], // find thumbnail
                                pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
                                rect = thumbnail.getBoundingClientRect();

                            return {
                                x: rect.left,
                                y: rect.top + pageYScroll,
                                w: rect.width
                            };
                        }

                    };

                    // PhotoSwipe opened from URL
                    if (fromURL) {
                        if (options.galleryPIDs) {
                            // parse real index when custom PIDs are used
                            // http://photoswipe.com/documentation/faq.html#custom-pid-in-url
                            for (var j = 0; j < items.length; j++) {
                                if (items[j].pid == index) {
                                    options.index = j;
                                    break;
                                }
                            }
                        } else {
                            // in URL indexes start from 1
                            options.index = parseInt(index, 10) - 1;
                        }
                    } else {
                        options.index = parseInt(index, 10);
                    }

                    // exit if index not found
                    if (isNaN(options.index)) {
                        return;
                    }

                    if (disableAnimation) {
                        options.showAnimationDuration = 0;
                    }

                    // Pass data to PhotoSwipe and initialize it
                    gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options);
                    gallery.init();
                };

                // loop through all gallery elements and bind events
                var galleryElements = document.querySelectorAll(gallerySelector);

                for (var i = 0, l = galleryElements.length; i < l; i++) {
                    galleryElements[i].setAttribute('data-pswp-uid', i + 1);
                    galleryElements[i].onclick = onThumbnailsClick;
                }

                // Parse URL and open gallery if it contains #&pid=3&gid=1
                var hashData = photoswipeParseHash();
                if (hashData.pid && hashData.gid) {
                    openPhotoSwipe(hashData.pid, galleryElements[hashData.gid - 1], true, true);
                }
            };

            // execute above function
            initPhotoSwipeFromDOM('.gallery');
        </script>

        <?php include 'shared/footer.php';?>
        </div>
</body>

</html>
