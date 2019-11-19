(function ($) {
    $.fn.toggleReadonly = function () {
        return this.each(function () {
            var $this = $(this);
            if ($this.attr("readonly")) $this.removeAttr("readonly");
            else $this.attr("readonly", "readonly");
        });
    };
})(jQuery);
$(document).ready(function () {
    $("[id^=form_] input:text").prop("readonly", true);
    $("input.searching").attr("readonly", false);
    $("button:contains('Edit')").click(function () {
        $("[id^=form_] input:text").toggleReadonly();
        $("[type='submit']").removeAttr("disabled");
    });
    showResult = (val) => {
        if (val.length === 0) {
            $("#liveSearch").html("").css("border", 0);
        } else {
            $.post("http://code-sys/ajax/products", {
                    query: val
                },
                (res) => {
                    $("#liveSearch").html(res)
                });
        }
    }
    clearSearch = () => {
        $("#liveSearch").html("");
        $("#searchBox").val("");
    }
    addSearch=(product_id)=>{
        $.post("http://code-sys/ajax/addPref",{product_id:product_id},
        (res)=>{
            $("#addPref").html(res);
        });
    }
    addToList=(vendor)=>{
        alert(vendor);
        // $.post("http://code-sys/ajax/savePref",{product_id:product_id},
        // (res)=>{
        //     $("#productPref").html(res);
        // })
    }
    delFromList=(vendor)=>{
        alert(vendor);
        // $.post("http://code-sys/ajax/delPref",{product_id:product_id},
        // (res)=>{
        //     $("#productPref").html(res);
        // })
    }
})