// Initialize uploader box

jQuery(function(jQuery) {  

    jQuery('.upload_image_button').click(function() {  
        formfield = jQuery(this).siblings('.upload_image');  
        preview = jQuery(this).siblings('.preview_image');  
        tb_show('', 'media-upload.php?type=image&TB_iframe=true');  
        window.send_to_editor = function(html) {  
            imgurl = jQuery('img',html).attr('src');  
            classes = jQuery('img', html).attr('class');  
            id = classes.replace(/(.*?)wp-image-/, '');  
            formfield.val(id);  
            preview.attr('src', imgurl);  
            tb_remove();  
        }  
        return false;  
    });  

    // Clear an image
      
    jQuery('.clear_image_button').click(function() {  
        var defaultImage = jQuery(this).parent().siblings('.default_image').text();  
        jQuery(this).parent().siblings('.upload_image').val('');  
        jQuery(this).parent().siblings('.preview_image').attr('src', defaultImage);  
        return false;  
    });  

    // make images sortable

    jQuery('.image-details').sortable({  
        opacity: 0.6,  
        revert: true,  
        cursor: 'move',  
        handle: '.sort'  
    });  
  
});  

// Add and remove fields
  
jQuery('.repeatable-add').click(function(){
        var copyThis = jQuery(".image-details").find("li:last").clone(true).hide();
        copyThis.appendTo(jQuery(".image-details")).slideDown('fast');
        var name = jQuery("input").attr("name");
        var count = name.replace(/\d+/, '');
        var newCount = count++;
        jQuery("input").attr("name",name.replace(newCount.toString(),count.toString()));
    return false;  
});
  
jQuery('.repeatable-remove').click(function(){  
    jQuery(this).parent().slideUp('fast', function() {
        jQuery(this).remove();
  });
    return false;  
});  
      
