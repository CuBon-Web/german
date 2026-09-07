function choiseProvince(){
    var e = document.getElementById("province");
    var value = e.value;
    jQuery.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            'Access-Control-Allow-Origin': "*"
        }
    });
    jQuery.ajax({
        url: "/district",
        method: "POST",
        data: {
            'id': value,
        },
        success: function (response) {
            $('#district').prop("disabled", false);
            document.getElementById("valueprovince").value = response.province_name;
            var html = '';
            html += '<option value="">--Chọn--</option>';
            Object.keys(response.data).forEach(function (key){
               
                html += '<option value="'+response.data[key].district_id+'">'+response.data[key].name+'</option>';
            });
            $('#district').html(html);
        },
    });
}
function choiseDistrrict(){
    var e = document.getElementById("district");
    var value = e.value;
    jQuery.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            'Access-Control-Allow-Origin': "*"
        }
    });
    jQuery.ajax({
        url: "/wards",
        method: "POST",
        data: {
            'id': value,
        },
        success: function (response) {
            $('#wards').prop("disabled", false);
            document.getElementById("valuedistrict").value = response.district_name;
            var html = '';
            html += '<option value="">--Chọn--</option>';
            Object.keys(response.data).forEach(function (key){
               
                html += '<option value="'+response.data[key].wards_id+'">'+response.data[key].name+'</option>';
            });
            $('#wards').html(html);
        },
    });
}
function choiseWards(){
    var e = document.getElementById("wards");
    var value = e.value;
    jQuery.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            'Access-Control-Allow-Origin': "*"
        }
    });
    jQuery.ajax({
        url: "/findwards",
        method: "POST",
        data: {
            'id': value,
        },
        success: function (response) {
            document.getElementById("valuewards").value = response.data;
        },
    });
}