

$(document).ready(function(e) {

    


$('body').on('click', 'button.tag', function() {
    var userID = this.value
        //alert(userID);
        //alert("ramya");
        $.ajax({
            type: "POST",
            url: 'Following.php',
            data: {section:userID},
            success: function(data)
             {
                // alert(data);
                setInterval('refreshPage()', 100);

             }
         });
    });

});



function refreshPage() {
    location.reload(true);
    // $( ".art" ).load(window.location.reload + ".art" );
    // $(".art").load(" .art");
}

$(document).ready(function(){
$("body").on('click', '.heart.fa', function() {
    var post_pics=this.id
    $clicked_btn = $(this);
    if($(this).hasClass("fa-heart"))
    {
        action = "dislike"
    }
    if($(this).hasClass("fa-heart-o"))
    {
        action = "like";
    }
    //alert(action)
    $.ajax({
        url: 'post_like.php',
        type: 'post',
        data: {
            'action': action,
            'post_pics': post_pics
        },
        success: function(data)
        {
            //alert(data)
               // alert(data);
                //alert(data.action);
                
                // $clicked_btn.parent('span.fa-heart-o').removeClass('fa-heart-o').addClass('fa-heart');
                setInterval('refreshPage()', 100);

        }
    });
    //$(this).toggleClass("fa-heart-o");

  });
    $("body").on('click','.cmnt.fa ',function(){
        
        //alert('div.mydiv'+this.id)
        var id='div.mydiv'+this.id;
        $(id).toggle();
        // $("#id").next(id).slideToggle("fast");
        //alert("done")
       // $("#id").next("#myDIV").slideToggle("fast");
        // $.ajax({
        //     url: 'comment.php',
        //     type: 'post',
        //     data: {
        //         'id': id
        //     },
        //     success: function(data)
        //     {
        //         alert(data)
        //            // alert(data);
                    
        //             //setInterval('refreshPage()', 100);
    
        //     }
        // });
        

    });
    $("body").on('click','.post ',function(){
    
        var id=this.id;
        //alert(this.value)
        var value=this.value;
        //alert(id);
        var message = $('textarea#'+id).val();
        //alert("post");
        //alert(message)
        $.ajax({
            url: 'comment.php',
            type: 'post',
            data: {
                'value': value,
                'message':message
            },
            success: function(data)
            {
               // alert(data)
                   // alert(data);
                    
                    setInterval('refreshPage()', 100);
    
            }
        });
    });

});    


    