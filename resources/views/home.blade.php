@extends('layouts.app')

@section('content')
    <slide-show></slide-show>
    <script type="text/ng-template" id="slideshow.html">
        @include('slideshow.slideshow')
    </script>
    
    <search-filter-home></search-filter-home>
    <script type="text/ng-template" id="search-filter-home.html">
        @include('search-filter-home.search-filter-home')
    </script>

    <latest-properties></latest-properties>
    <script type="text/ng-template" id="latest-properties.html">
        @include('latest-properties.latest-properties')
    </script>    

    <!--    /*<random-properties></random-properties>
    <script type="text/ng-template" id="random-properties.html">
        {{-- @include('random-properties.random-properties') --}}
    </script>*/-->
@endsection



@section('scripts')
<script>
    var rangeSlider = function(){

        var slider = $('.range-slider'),
            range = $('.range-slider__range'),
            value = $('.range-slider__value');
        
        slider.each(function(){
            value.each(function(){
              var value = $(this).prev().attr('value');
              $(this).html(value);
            });

            range.on('input', function(){
              $(this).next(value).html(this.value);
            });
        });
    };

    rangeSlider();

    /* GALERíA DE IMÁGENES*/

    $(document).ready(function() {
        
        $('#links').click(function (event) {
        event = event || window.event;
        var target = event.target || event.srcElement,
        link = target.src ? target.parentNode : target,
        options = {index: link, event: event},
        links = this.getElementsByTagName('a');
        blueimp.Gallery(links, options);
      });

        $('.carousel').carousel({
        interval: false
      })
      $('a.page-scroll').on('click', function(e){
        var anchor = $(this);
        $('html, body').stop().animate({
          scrollTop: $(anchor.attr('href')).offset().top - 50
        }, 1500);
        e.preventDefault();
      }); 
      $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
        
        $(".zoom").hover(function(){
        
        $(this).addClass('transition');
      }, function(){
            
        $(this).removeClass('transition');
      });
    });


    /* FIN GALERÍA DE IMÁGENES*/


    (function($) {

        $.fn.liquo = function(options) {

            // Override defaults, if provided
            var settings = $.extend({
                menu: null,
                start: "all",
                random: false
            }, options);

            // Throw error if menu not defined
            if (settings.menu == null) throw "Liquo: You must provide a valid menu selector.";

            // Allow chaining and process each DOM node
            return this.each(function() {

                // Define variables
                var $this = $(this); // Store reference to self
                var $menu = $(settings.menu);
                var $options = $menu.children("a[data-liquo]");
                var last = null;

                // Add liquo class to ul
                $this.addClass("liquo-gallery");

                // Add active class provided category if exists, otherwise add to "all"
                if (settings.start != "all" && $menu.children("a[data-liquo="+settings.start+"]").length > 0) {

                    // Set active class on navigation
                    $menu.children("a[data-liquo="+settings.start+"]").addClass("liquo-active");

                    // Hide everything except active elements
                    $this.find("li").not("[data-liquo="+settings.start+"]").addClass("inactive").hide(300);

                    // Set last to starting category
                    last = settings.start;

                } else {

                    // Add active to all
                    $menu.children("a[data-liquo=all]").addClass("liquo-active");

                }

                // Randomize if set to true
                if (settings.random) {

                    // Loop through each li element and sort randomly
                    $this.children("li").sort(function(a,b) {

                        return (Math.round(Math.random())-0.5);

                    }).detach().appendTo($this);

                }

                // Handle menu click functionality
                $($options).click(function(e) {

                    // Stop link functionality
                    e.preventDefault();

                    // Get category
                    var category = $(this).data("liquo");

                    // Change active classes
                    if (!$(this).hasClass("liquo-active")) {

                        // Remove currently active link
                        $menu.find(".liquo-active").removeClass("liquo-active");

                        // Add new active link
                        $(this).addClass("liquo-active");
                    }

                    // If category is set to all, show all elements, otherwise, show only given category
                    if (category == "all") {

                        // Show all elements
                        $this.find("li").show(300).removeClass("inactive");

                        // Set last to null
                        last = null;

                    } else if ($this.find("li[data-liquo="+category+"]").length > 0) {

                        // If first category clicked
                        if (last == null) {

                            // Hide everything except current category
                            $this.find("li").not("[data-liquo="+category+"]").addClass("inactive").hide(300);

                        } else if (category != last) {

                            // Hide last category elements
                            $this.find("li[data-liquo="+last+"]").addClass("inactive").fadeOut(300, function() {

                                // Show new category elements
                                $this.find("li[data-liquo="+category+"]").removeClass("inactive").stop().show(300);

                            });
                        }

                        // Update last with current category
                        last = category;

                    }

                });

            });

        }

    })(jQuery);
</script>

@endsection