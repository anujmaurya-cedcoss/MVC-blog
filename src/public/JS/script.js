function likeButton(bid, uid) {
    $.ajax({
        type : 'POST',
        url : '../controller/like_controller.php',
        data : {'uid' : uid, 'bid' : bid},
        dataType : 'text',
        success : function(res) {
            console.log(res);
        }
    })
}