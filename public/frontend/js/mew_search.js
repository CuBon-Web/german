function keyinputsearch(){
    setTimeout(function(){
        var keyword = document.querySelector('input[name="keywordsearch"]').value;
        console.log(keyword);
        jQuery.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
            }
        }), jQuery.ajax({
            url: "/auto-search-product",
            method: "POST",
            data: {
                keyword: keyword
            },
            success: function(e) {
                $('.search-suggest').addClass('open');
                $(".list-search").html(e.html);
            }
        });
     }, 200);
    
}

$(document).on('click','body *',function(){
    $('.search-suggest').removeClass('open');
});