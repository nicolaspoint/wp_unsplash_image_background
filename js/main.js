// https://github.com/unsplash/unsplash-js

var random_image;
var ubi_plugin = document.getElementById("ubi_plugin");
var inner = document.getElementById("ubi_inner");

random_image = ubi_plugin.dataset.random_image;

if (random_image) {
    var client_id = "COPY_PASTE_YOUR_UNSPLASH_CLIENT_ID_HERE";
    var url = 'https://api.unsplash.com/photos/random/?client_id=' + client_id + '&orientation=landscape';

    fetch(url)
        .then(response => response.json())
        .then(json => {
            if (json.urls.regular) {
                inner.style.backgroundImage = `url(${json.urls.regular}})`;
                inner.style.backgroundPosition = "center center";
                inner.style.backgroundSize = "cover";
            }
        })
}
