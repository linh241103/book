function get_link_from_slug(link, slug, taxonomy) {
    //link: get_permalink($page_ajax_processing)
    // get_link_from_slug('<?php echo get_permalink($page_ajax_processing) ?>', '<?php echo $main_cater->slug?>', 'filter');

    jQuery.noConflict()(function ($) {
        $.ajax({
            url: link, type: "post", async: true, data: {slug: slug, taxonomy: taxonomy, action: 'get_link_from_slug'}
        }).done(function (output_data) {

                var output = $.parseJSON(output_data);

                if (output[0] != "") {
                    document.querySelector("#dynamic_slug").value = output[0];
                } else {
                    alert('0');
                }

            }
        );
    });
}

function filter_from_slug(link, current_term_slug) {
    //link: get_permalink($page_ajax_processing)
    // filter_from_slug('<?php echo get_permalink($page_ajax_processing) ?>', 'current_term');

    jQuery.noConflict()(function ($) {
        $("#d_loading").show();
        $(".d_overlay").show();
        let checked_lst = [];
        $(".d_filter_option input.form-check-input").each(function (index) {
            if ($(this).prop("checked")) {
                checked_lst.push($(this).val());
            }
        });

        $.ajax({
            url: link,
            type: "post",
            async: true,
            data: {action: 'filter_from_slug', checked_lst: checked_lst, current_term_slug: current_term_slug}
        }).done(function (output_data) {

                $("#d_loading").hide();
                $(".d_overlay").hide();

                var output = $.parseJSON(output_data);
                if (output[0] != "") {
                    $("#output_html").html(output[0]);
                } else {
                    $("#output_html").html("Không có sản phẩm nào");
                }
            }
        );
    });
}


// // FOOTER
// $("input.form-check-input").change(function() {
//     filter_from_slug('<?php echo get_permalink($page_ajax_processing) ?>');
// })


// MODE: HTML
function filter_from_slug_html(link, current_term_slug, current_link, other_params_str) {

    //link: get_permalink($page_ajax_processing)
    // filter_from_slug('<?php echo get_permalink($page_ajax_processing) ?>', 'current_term');

    // other_params_str:
    // 1: page, 2: sort

    let other_param_lst = other_params_str.split(",");
    let page = other_params_str.split(",")[0];
    let sort = "";
    let query_sort = "";

    if (other_param_lst.length >= 2) {
        sort = other_param_lst[1];
        query_sort = "&sort=" + sort;
    }

    jQuery.noConflict()(function ($) {
        $("#d_loading").show();
        // $(".d_overlay").show();
        let checked_lst = [];
        $(".d_filter_option input.form-check-input").each(function (index) {
            if ($(this).prop("checked")) {
                checked_lst.push($(this).val());
            }
        });


        var query_lst = build_query_js(checked_lst);


        console.log(page);

        var addition_params = "?page=" + page + query_lst + query_sort;

        var new_address = current_link + addition_params;

        window.history.pushState("object or string", "Page Title", new_address);


        $.ajax({
            url: link,
            type: "GET",
            async: true,
            data: {
                action: 'filter_from_slug',
                checked_lst: checked_lst,
                current_term_slug: current_term_slug,
                current_link: current_link,
                current_page: page,
                sort: sort
            }
        }).done(function (output_data) {

                $("#d_loading").hide();
                // $(".d_overlay").hide();

                $("#output_html").html(output_data);
            }
        );
    });

}


function quick_search(event, link, key, id_element) {
    jQuery.noConflict()(function ($) {

        console.log(key);

        if (event.keyCode != 40 && event.keyCode != 38) {
            $("#search_list_id").val(0);

            if (key == "") {
                $(id_element).html("");
                $(id_element).hide();
                $("#max_search_list").val(0);



            } else {
                $.ajax({
                    url: link,
                    type: "GET",
                    async: true,
                    data: {
                        action: 'quick_search',
                        key: key
                    }
                }).done(function (output_data) {
                        var output = $.parseJSON(output_data);

                        if (output[0] != 0) {
                            $(id_element).html(output[1]);
                            $(id_element).show();
                            // alert(1);
                        } else {
                            // alert("0");
                            $(id_element).hide();
                        }



                        $("#max_search_list").val(output[0]);

                    }
                );
            }
        }


    });

}


function build_query_js(array) {
    if (array.length == 0) {
        var query = "";
    } else {
        var query = "&thuoctinh[0]=" + array[0];
    }

    if (array.length > 1) {
        for ($i = 1; $i < array.length; $i++) {
            query += "&thuoctinh[" + $i + "]=" + array[$i];
        }
    }
    return query;
}