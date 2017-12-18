(function($){
  
  $('#new-quote-button').on('click', function(e){
    e.preventDefault();
    
    $.ajax({
      method: 'get',
      url: api_vars.root_url + '/wp/v2/posts?filter[orderby]=rand&filter[posts_per_page]=1'
    })
    
    .done(function(data) {
      var slug = data[0].slug;
      $('.post').empty();
      
      history.pushState(null, null, slug);
      
      var postWithSource = "<section class='site-main'>" + data[0].excerpt.rendered + "<div class='entry-meta'> <h2 class='author'> &mdash; &nbsp;" + data[0].title.rendered + "</h2>, &nbsp; " + "<a href=" + data[0]._qod_quote_source_url + ">" + data[0]._qod_quote_source + "</a>" + "</div> </section>";
      
      var postNoSource = "<section class='site-main'>" + data[0].excerpt.rendered + "<div class='entry-meta'> <h2 class='author'> &mdash; &nbsp;" + data[0].title.rendered + "</h2> </div> </section>";
      
      if (data[0]._qod_quote_source) {
        $('.post').append(postWithSource);
      }
      else {
        $('.post').append(postNoSource);

      }
    });
  });
  
  $('#submit-quote').on('click', function(e){
    e.preventDefault();
    
    $.ajax({
      method: 'POST',
      url: api_vars.root_url + 'wp/v2/posts',
      data:{
        "title": $('#quote-author').val(),
        "content": $('#quote-content').val(),
        "_qod_quote_source": $('#quote-source').val(),
        "_qod_quote_source_url": $('#quote-source-url').val(),
        "status": 'publish'
      },
      beforeSend: function(xhr) {
        xhr.setRequestHeader('X-WP-Nonce', api_vars.nonce);
      }
    }).done (function(){
      alert('Thank you for submitting a quote.');
    })
  });  

})(jQuery);