var ubi_plugin = document.getElementsByClassName("ubi_plugin");

for (var i = 0, len = ubi_plugin.length; i < len; i++) {
    (function () {
        var item = ubi_plugin[i];

        var random_image;

        var rand = item.dataset.rand
        randId = 'ubi_inner_' + rand;

        var inner = document.getElementById(randId);

        random_image = item.dataset.random_image;

        if (random_image) {
            var client_id = "7gA-o6uYKREMD0WFSteYcXMral1a_URQwt9zczaPY8k";
            var url = 'https://api.unsplash.com/photos/random/?client_id=' + client_id + '&orientation=landscape';

            fetch(url)
                .then(response => response.json())
                .then(json => {
                    if (json.urls.regular) {
                        console.log(json.urls.regular);
                        inner.style.backgroundImage = `url(${json.urls.regular}})`;
                        inner.style.backgroundPosition = "center center";
                        inner.style.backgroundSize = "cover";
                    }
                }).catch(function () {
                    console.log("error");
                });
        }
    }(i))
}
