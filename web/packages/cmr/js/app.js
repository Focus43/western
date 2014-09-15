/* global TweenLite */

$(function(){

    var $glider         = $('#gliderInstance'),
        $gliderNodes    = $('.node', $glider),
        $gliderNav      = $('.glider-nav', $glider),
        $gliderControls = $('.glider-control', $glider),
        _activeIndex    = $gliderNodes.filter('.active').index(),
        _nodesLength    = $gliderNodes.length;

    function activate( _index ){
        $gliderNodes.removeClass('active').eq(_index).addClass('active');
        $('li', $gliderNav).removeClass('active').eq(_index).addClass('active');
    }

    function gliderPrev(){
        _activeIndex = (_activeIndex > 0) ? (_activeIndex - 1) : 0;
        activate(_activeIndex);
    }

    function gliderNext(){
        _activeIndex = (_activeIndex < (_nodesLength-1)) ? (_activeIndex + 1) : (_nodesLength - 1);
        activate(_activeIndex);
    }

    // Set backgrounds
    $gliderNodes.each(function( idx, node ){
        $(node).css({
            backgroundImage:'url('+node.getAttribute('data-bg')+')'
        }).removeAttr('data-bg');
    });

    // Controls
    $gliderControls.on('click', function(){
        if( $(this).hasClass('prev') ){
            gliderPrev(); return;
        }
        gliderNext();
    });

    $gliderNav.on('click', 'li', function(){
        activate( $(this).index() );
    });

    // Create bullets based on number of visible nodes
    var _str = '';
    for(var i = 0; i < _nodesLength; i++){
        if( i === 0 ){
            _str += '<li class="active">&bullet;</li>';
        }else{
            _str += '<li>&bullet;</li>';
        }
    }
    $('ul', $gliderNav).append(_str);

});