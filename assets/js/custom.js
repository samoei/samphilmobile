/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function listPosts(data) {
    var output = '<ul data-role="listview" data-filter="true">';
    $.each(data.posts, function(key, val) {

        var tempDiv = document.createElement("tempDiv");
        tempDiv.innerHTML = val.excerpt;
        $('a', tempDiv).remove();
        var excerpt = tempDiv.innerHTML;

        output += '<li>';
        output += '<a href="#posts" onclick="showPost(' + val.id + ')">';
        output += '<h1>' + val.title + '</h1>';
        output += (val.thumbnail) ? '<img src="' + val.thumbnail + '" alt="' + val.title + '" />' : '<img src="images/viewsourcelogo.png" alt="Default Image"/>';
        output += '<p>' + excerpt + '</p>';
        output += '</li>';

    });//go through each post
    output += '</ul>';
    $('#postlist').html(output);
}//lists all posts

function showPost(id) {
    $.getJSON('http://www.samphiltech.com/?json=get_post&post_id=' + id + '&callback=?', function(data) {
        var output = '';
        output += '<h1>' + data.post.title + '</h1>';
        output += data.post.content;
        $('#mypost').html(output);
    });
}


