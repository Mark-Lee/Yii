/**
 * test javascript
 */
var test = {

    test : function() {

        alert('Test javascript!');
    }

}

$(function () {
    $("input[value=addClass]").click(function(){
        $("p").addClass("another");
    });

    $("input[value=removeClass]").click(function(){
        $("p").removeClass("high");
    })
});

var myJQuery = {


}