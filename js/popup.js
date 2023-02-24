
$('.registration').hide();
$('.restore-password').hide();

$('#signin, #signup').on(
    'click',
    function(){
        $('.registration, .authorization').toggle();
    },
    
)

$('#forgot-password').on(
    'click',
    function(){
        $('.restore-password').toggle();
    }
)

$('.popup-bg__area, .registration-popup__close').on(
    'click',
    function(){
        if ($('.restore-password')) {
            $('.restore-password').hide();
        } 
    }
)




