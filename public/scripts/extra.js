var prev; // Holds the current selected value at focus, and when chanced can set the previous id to display none!
var prevSub; // same as above, but the selected value of it.
var value; 
$("#services").focus(function(){
        prev = $(this).find(":selected").val();
        prevSub = $("#"+prev).find(":selected").val();

}).change(function(){
                value = $(this).find(":selected").val();
                $("#"+prev).css("display", "none");
                $("#"+value).css("display", "block");
                $("#"+prev).val("0");
                $("#"+prev).css("borderColor", "#B2B2B2");
                $("#"+prevSub).css("display", "none");
                prev = value;
                if (value !== "0") {
                        $("#services").css("borderColor", "#4CB770")
                }else{
                        $("#services").css("borderColor", "#B2B2B2")
                }
});
$("#services").change(function(){
        var selectedValue = $(this).find(":selected").val();
        var select = document.getElementById(selectedValue);
        select.onchange = function(){
                var value = select.options[select.selectedIndex].value;
                if (value !== "0") {
                        $("#"+selectedValue).css("borderColor", "#4CB770");
                }
                else{
                        $("#"+selectedValue).css("borderColor", "#B2B2B2");
                }
        }
                
        
        $("#"+selectedValue).focus(function () {
                prev = $(this).find(":selected").val();

        }).change(function(){
                value = $(this).find(":selected").val();
                $("#"+prev).css("display", "none");
                $("#"+value).css("display", "block");
                prev = value;

        });
});

        