(function ($) {
    // if (document.querySelector(".btnAjax")){
    //     document.querySelector(".btnAjax").addEventListener('click', function (e) {
    //         e.preventDefault();
    //         let id = $("#userIdInput").val();
    //         let url = $(this).val();
    //         let key = $(this).attr("name");
    //         jQuery.ajax({
    //
    //                 type: "POST",
    //                 url: postdata.ajaxurl+'?action=send_user_data',
    //                 dataType:"json",
    //                 data: {
    //                     'id': id,
    //                     'key': key,
    //                     'url':url,
    //                     'nonce': postdata.nonce
    //                 },
    //                 success: function(){
    //                     alert('dgdfgfdg');
    //                 }
    //
    //             }
    //         );
    //     })
    //     }

    $(".btnAjax").click(function (event) {

        let id = $("#userIdInput").val();
        let url = $(this).val();
        let linkkey = $(this).attr("textkey");
        let key = $(this).attr("name");
        let beforeajax = $(this).parent();
        let afterajax = $(this).parent().next();
        jQuery.ajax({

                type: "POST",
                url: postdata.ajaxurl + '?action=send_user_data',
                data: {
                    'id': id,
                    'key': key,
                    'url': url,
                    'linkkey':linkkey,
                    'nonce': postdata.nonce
                },

                success: function () {
                    beforeajax.removeClass('show');
                    beforeajax.addClass('hide');
                    afterajax.removeClass('hide');
                    afterajax.addClass('show');

                }

            }
        );

    });

   $('li.menu-item-has-children').addClass('dropdown ');
   $('ul.sub-menu').addClass('dropdown-menu');


})(jQuery);