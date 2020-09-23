$(function(){
    $('a[href^="#"]').click(function(){
        var id = $(this).attr("href")
        if(id === '#'){
            return
        }
        $('html, body').animate({
            scrollTop:$(id).offset().top
        }, 'slow')
        return false
    })
})