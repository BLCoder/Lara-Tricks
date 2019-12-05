/*

$(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $("#save-trick-form").on("submit",function (event) {
        event.preventDefault();
        var title=$("#title").val();
        var body=$("#body").val();
        var codes=$("textarea#code-editor").val();
        //var myText = document.getElementById("codes");
        //var codes = myText.value;
        var tags=$("#tags").val();
        var categories=$("#categories").val();


        var method=$(this).attr("method");
        var url=$(this).attr("action");
        var form=$(this).closest('form');
        $.ajax({
            method: method,
            url:url,
            data:{
                title:title,
                body:body,
                codes:codes,
                tags:tags,
                categories:categories
            },
            dataType: "json",
            success:function (data) {
                //$("#title").val("");
                //$("#slug").val("");
                ///$("#body").val("");
                //form.find("input[type=text],textarea").val("");
                jQuery.each(data.errors, function(key, value){
                    jQuery('.alert-danger').show();
                    jQuery('.alert-danger').append('<p>'+value+'</p>');
                });

                $('#tags').find('option:first').attr('selected', 'selected');
                $('#tags').val(0);
                $('#tags option:eq(0)').attr('selected','selected');
                $('#tags').get(0).selectedIndex = 0;

            },
            error:function () {
                //alert("Fail");
            }
        });
    })
});

*/
