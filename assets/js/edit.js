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
    addSearch = (product_id) => {
        $.post("http://code-sys/ajax/addPref", {
                product_id: product_id
            },
            (res) => {
                $("#addPref").html(res);
            });
    }
    $("#addPref").click((event) => {
        if ($(event.target).hasClass("fa-check")) {
            $("#addPref").html("");
            const [id, rate, remark] = $(event.target).parents("tr").children("td").children("input");
            // alert("Vendor: "+vendor+" Rate: " + $(rate).val() + " Remark: " + $(remark).val());
            $.post("http://code-sys/ajax/savePref", {
                    vendor: vendor,
                    id: $(id).val(),
                    rate: $(rate).val(),
                    remark: $(remark).val()
                },
                (res) => {
                    $("#savePref").html(res)
                });
        }
    });
    $("#savePref").click((event) => {
        if ($(event.target).hasClass("fa-times")) {
            const [p_in] = $(event.target).parents("tr").children("td").children("input");
            $.post("http://code-sys/ajax/delPref", {p_in:$(p_in).val(),vendor:vendor},
                (res) => {
                    $("#savePref").html(res);
                }
            )
        }
    });


})