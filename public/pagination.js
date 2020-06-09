$(document).ready(function(){
    var page=0;
    $.getJSON('api/productApi', {'page' : page}, function(result){
        fillTable(result);
    });
    $("#next").click(function(event){
        $.getJSON('api/productApi', {'page' : page+1}, function(result){
            page++;

            fillTable(result);
        });
    });
    $("#prev").click(function(event){

        $.getJSON('api/productApi', {'page' : page-1}, function(result){
            page--;
            fillTable(result);
        });
    });



});
function fillTable(result) {
    var items=[];
    $.each(result, function(i, val){
        console.log(val);
        items.push( "<tr><td>" + val.order_id + "</td><td>" + val.summ + "</td>" + "</tr>" );
    });
    $("#t1").html(items.join(""));
}
