
$(function () {



    let postId=0;

    $('.like').on('click',function (event) {
        event.preventDefault();
        postId=event.target.parentNode.parentNode.dataset['postid'];

        $.ajax({
            method:'POST',
            url: urlLike,
            dataType: "json",
            data: {postId:postId,_token:token}
        })
            .done(function (data) {
                event.target.innerText= event.target.innerText == 'Like this?' ? 'You Like this': 'Like this?';

                if(event.target.innerText == 'Like this?'){
                    $('.like_style').css('color', 'black');
                    $('.like_count').text(data+' like');

                }else if(event.target.innerText == 'You Like this'){
                    $('.like_style').css('color', 'red');
                    $('.like_count').text(data+' like');

                }

            });
    })


});

