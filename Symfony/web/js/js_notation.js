var script = document.createElement('script');
script.src = 'http://code.jquery.com/jquery-1.11.0.min.js';
script.type = 'text/javascript';
document.getElementsByTagName('head')[0].appendChild(script);
$( '#example-fontawesome' ).barrating({
    theme: 'bars-1to10',
    showSelectedRating: true,
    onSelect: function(value, text, event)
    {
        if (typeof(event) !== 'undefined')
        {
            var ratingValue = $('.br-selected.br-current').data('rating-value');
            //alert(ratingValue);
            // rating was selected by a user
            console.log(event.target);
            if (ratingValue <= 25)
            {
                document.getElementById('note').innerText = "Mauvais";
            }
            else if (ratingValue <= 50)
            {
                document.getElementById('note').innerText = "Moyen";
            }
            else if (ratingValue <= 75)
            {
                document.getElementById('note').innerText = "Bien";
            }
            else if (ratingValue <= 100)
            {
                document.getElementById('note').innerText = "Très bien";
            }
        } else
        {
            // rating was selected programmatically
            // by calling `set` method
        }
    }
});