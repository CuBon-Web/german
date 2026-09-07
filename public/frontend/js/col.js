var selectedSortby;
var tt = 'Thứ tự';


/*Sắp xếp trang collection*/
$('#sort-by .ul_col li span').click(function(e){

	$('.content_ul').css('display', 'block');
	e.preventDefault();

});
$('#sort-by .ul_col .content_ul li').click(function(e){

	$(".content_ul").css('display', 'none');
	e.preventDefault();

});

$(document).ready(function($){
	$('.sort-cate .btn-filter').click(function(){
		$(".layout-collection .left-content").toggleClass('active');
		$(".backdrop__body-backdrop___1rvky").toggleClass('active');
	});
	$('.backdrop__body-backdrop___1rvky').click(function(){
		$(".layout-collection .left-content").removeClass('active');
		$(this).toggleClass('active');
	});
	$('.close-filters').click(function(){
		$(".layout-collection .left-content").removeClass('active');
		$('.backdrop__body-backdrop___1rvky').removeClass('active');
	});
	$('.aside-filter .aside-hidden-mobile .aside-item .aside-title').on('click', function(e){
		e.preventDefault();
		var $this = $(this);
		$this.parents('.aside-filter .aside-hidden-mobile .aside-item').find('.aside-content').stop().slideToggle();
		$(this).toggleClass('active')
		return false;
	});
	if($(window).width() <= 991) {
		$('.sort-cate-right h3').on('click', function(e){
			e.preventDefault();var $this = $(this);
			$this.parents('.sort-cate-right').find('ul').stop().slideToggle();
			$(this).toggleClass('active');
			return false;
		});	
	}
});

function toggleFilter(e){
    if (e.checked) {
       e.removeAttribute("checked");
    } else {
       e.setAttribute("checked", "checked");
    }
	$(".layout-collection .left-content").toggleClass('active');
	$(".backdrop__body-backdrop___1rvky").toggleClass('active');
    var page = $('#hidden_page').val();
    fetch_data(page)
       
}
function toggleFilterPrice(e){
    if (e.checked) {
        e.removeAttribute("checked");
     } else {
        e.setAttribute("checked", "checked");
     }
	 $(".layout-collection .left-content").toggleClass('active');
	$(".backdrop__body-backdrop___1rvky").toggleClass('active');
     var page = $('#hidden_page').val();
     fetch_data(page)
}
function sortby(){
	$('.sort-cate-right .btn-quick-sort').removeClass('active');
	var sort = document.querySelector('input[name="sortBy"]:checked').value;
	console.log(sort);
	switch(sort){				  
		case "price-asc":
			$('.sort-cate-right .price-asc').addClass("active");
			break;
		case "price-desc":
			$('.sort-cate-right .price-desc').addClass("active");
			break;
		case "created-asc":
			$('.sort-cate-right .created-asc').addClass("active");
			break;
		default:
			$('.sort-cate-right .default').addClass("active");
			break;
	}			   
    var page = $('#hidden_page').val();
    fetch_data(page);
}
function edValueKeyPress()
{
    var edValue = document.getElementById("filter-khoanggia-tu");
    var s = parseInt(edValue.value) ;
    document.getElementById("filter-khoanggia-den").value = parseInt(s+1000000);
    
}
function priceRange(){
    var page = $('#hidden_page').val();
    fetch_data(page)
}
   function fetch_data(page){
    var checkedBoxes = getCheckedBoxes("fillter");
    var sortby = document.querySelector('input[name="sortBy"]:checked').value;
    var checkedBoxesPrice = getCheckedBoxesPrice("filterPrice");
    console.log(checkedBoxesPrice);
    var cate = $('#cate_slug').val();
    var type = $('#type_slug').val();
    var typetwo = $('#type_two_slug').val();
    jQuery.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    jQuery.ajax({
        url: "/filter.html?page="+page+"",
        method: "POST",
        data: {
            'cate': cate,
            'type': type,
            'typetwo':typetwo,
            'sortby':sortby,
            'checkedBoxesPrice': checkedBoxesPrice,
            'fillter':checkedBoxes
        },
        success: function (response) {
          $(".product-list-filter").html(response.html);
          var element = document.getElementById("pagination_main");
          if (element !== null){
            element.classList.add("d-none");
            }
            if ($('.sidebar_mobi').hasClass('openf')){
                $('#body_overlay').addClass('d-none');
                $('.sidebar_mobi').removeClass('openf');
                colLeft.classList.remove("active");
                menuButton.classList.remove("active");
                $('body').addClass('modal-open');
            }
        },
    });
   }

   $(document).on('click', '#pagination .pagination a', function(event){
        event.preventDefault();
        var checkedBoxes = getCheckedBoxes("fillter");
        var page = $(this).attr('href').split('page=')[1];
        $('#hidden_page').val(page);
        fetch_data(page);
   });
   function getCheckedBoxesPrice(chkboxName) {
    var checkboxes = document.getElementsByName('filterPrice');
    var checkboxesChecked = [];
    for (var i=0; i<checkboxes.length; i++) {
       if (checkboxes[i].checked) {
          checkboxesChecked.push(checkboxes[i].value);
       }
    }
    return checkboxesChecked.length > 0 ? checkboxesChecked : null;
    }
   function getCheckedBoxes(chkboxName) {
    var checkboxes = document.getElementsByName('fillter');
    var checkboxesChecked = [];
    for (var i=0; i<checkboxes.length; i++) {
       if (checkboxes[i].checked) {
          checkboxesChecked.push(checkboxes[i].value);
       }
    }
    return checkboxesChecked.length > 0 ? checkboxesChecked : null;
    }