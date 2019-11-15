(function ($) {
    $.fn.toggleReadonly = function () {
        return this.each(function () {
            var $this = $(this);
            if ($this.attr("readonly")) $this.removeAttr("readonly");
            else $this.attr("readonly", "readonly");
        });
    };
})(jQuery);

$("[id^=form_] input:text").prop("readonly", true);
$("input.searching").attr("readonly", false);


$("button:contains('Edit')").click(function () {
    $("[id^=form_] input:text").toggleReadonly();
    $("[type='submit']").removeAttr("disabled");
});

showResult = (val) => {
    if (val.length === 0) {
        $("#livesearch").html("").css("border",0); 
    } else {
        $.post("ajax/products",
        {query:val},
        (res)=>{
                $("#livesearch").html(res)
            });
    }
}

clearsearch=()=>{
    $("#livesearch").html("");
    $("#searchBox").val("");
}