var prev; // Holds the current selected value at focus, and when chanced can set the previous id to display none!
var prevSub; // same as above, but the selected value of it.
var value; 

//keeping previous selections to remove the previous text
$("#updateServices").focus(function(){
        prev = $(this).find(":selected").val();

//adding current service removing old service AND subservice if one was selected.
}).change(function(){
                value = $(this).find(":selected").val();
                $("#"+prev).css("display", "none");
                $("#"+value).css("display", "block");
                prev = value;
});

$("#updateSubservices").focus(function(){
        prev = $(this).find(":selected").val();

//adding current service removing old service AND subservice if one was selected.
}).change(function(){
        value = $(this).find(":selected").val();
        $("."+prev+"select").css("display", "none");
        $("."+value+"select").css("display", "");
        prev = value;
        
        $("."+value+"12").change(function(){
                $(this).css("background-color", "#B2B2B2");
        });
});




        