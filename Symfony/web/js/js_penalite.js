var script = document.createElement('script');
script.src = 'http://code.jquery.com/jquery-1.11.0.min.js';
script.type = 'text/javascript';
document.getElementsByTagName('head')[0].appendChild(script);
$( '#penalite' ).barrating({
    theme: 'bars-pill',
    showSelectedRating: true,
    onSelect: function(value, text, event)
    {
        if (typeof(event) !== 'undefined')
        {
            var ratingValue = $('.br-selected.br-current').data('rating-value');
            //alert(ratingValue);
            // rating was selected by a user
            console.log(event.target);
        } else
        {
            // rating was selected programmatically
            // by calling `set` method
        }
    }
});