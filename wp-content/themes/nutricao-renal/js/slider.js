// Link me to your sonicSlide in action!

// Version 28.0

// Shuffle elements on load
// https://css-tricks.com/snippets/jquery/shuffle-dom-elements/

// Automatic Rotation
setInterval(function() {
    nextAuto();
}, 9200);

function nextAuto() {
    if ($('.baby-controls .next').length)
        $('.baby-controls .next')[0].click();
}


babySonicSlide(
    'baby',
    '.baby-controls', 
    '.baby-pagination', 
    '.baby-item');
    
    function babySonicSlide(list, listController, listPagination, listElement) {
        
        // Variable Setup
        // =================
        
        var prev = listController + ' .prev';
        var next = listController + ' .next';
        
        var pagination = listPagination;
        var paginationItem = pagination + ' span';
        
        var element = listElement;
        
        var activeClass = 'active';
        var activeElement = element + '.' + activeClass;
        
        
        // Setup Controls
        // =================
        
        $(listController)
        .append('<span class="prev control" />')
        .append('<span class="next control" />');
        
        
        // Setup Pagination
        // =================
        
        if(!($(pagination + ' span').length)) {
            
            $(element).each(function() {
                
                $(pagination)
                .append('<span></span>');
                
            });
            
        }
        
        
        // Preparations
        // =================
        
        $(element + ':first-child')
        .addClass(activeClass);
        
        $(paginationItem + ':first-child')
        .addClass(activeClass);
        
        
        // Actions
        // =================
        
        // Previous Click
        // =================
        
        $(prev).click(function() {
            
            if($(element + ':first-child').hasClass(activeClass)) {
                
                $(activeElement)
                .removeClass(activeClass);
                
                $(element)
                .last()
                .addClass(activeClass);
                
            }
            
            else {
                
                $(activeElement)
                .removeClass(activeClass)
                .prev()
                .addClass(activeClass);
                
            }
            
            coordinatePagination();
            
        });
        
        
        // Next Click
        // =================
        
        $(next).click(function(e) {
            e.stopPropagation();
            console.log("Next evento loaded!");
            if($(element + ':last-child').hasClass(activeClass)) {
                
                $(activeElement)
                .removeClass(activeClass);
                
                $(element)
                .first()
                .addClass(activeClass);
                
            }
            
            else {
                
                $(activeElement)
                .removeClass(activeClass)
                .next()
                .addClass(activeClass);
                
            }
            
            coordinatePagination();
            
        });
        
        
        // Pagination Click
        // =================
        
        $(paginationItem).click(function() {
            
            $(paginationItem)
            .removeClass(activeClass);
            $(this)
            .addClass(activeClass);
            
            $(activeElement)
            .removeClass(activeClass);
            $(element + ':nth-child(' + ($(paginationItem + '.' + activeClass).index() + 1) + ')')
            .addClass(activeClass);
            
        });
        
        
        // Pagination Coor.
        // =================
        
        function coordinatePagination() {
            
            $(paginationItem)
            .removeClass(activeClass);
            $(paginationItem + ':nth-child(' + ($(activeElement).index() + 1) + ')')
            .addClass(activeClass);
            
        }
        
        
        
        //stackoverflow.com/questions/2264072/detect-a-finger-swipe-through-javascript-on-the-iphone-and-android
        var listContainer =  document.getElementsByClassName(list);
        listContainer = listContainer[0];
        
        try {
            listContainer.addEventListener('touchstart', handleTouchStart, false);
            listContainer.addEventListener('touchmove', handleTouchMove, false);
        }
        catch(e) {
            console.log("Erro no slider: ", e);
        }
        var xDown = null;
        var yDown = null;
        
        function handleTouchStart(evt) {
            xDown = evt.touches[0].clientX;
            yDown = evt.touches[0].clientY;
        };
        
        function handleTouchMove(evt) {
            if ( ! xDown || ! yDown ) {
                return;
            }
            
            var xUp = evt.touches[0].clientX;
            var yUp = evt.touches[0].clientY;
            
            var xDiff = xDown - xUp;
            var yDiff = yDown - yUp;
            
            if ( Math.abs( xDiff ) > Math.abs( yDiff ) ) {
                
                if ( xDiff > 0 ) {
                    $('.next').trigger('click');
                } else {
                    $('.prev').trigger('click');
                }
                
            }
            
            /* reset values */
            xDown = null;
            yDown = null;
        };
        
    }
    
    
    
    
    