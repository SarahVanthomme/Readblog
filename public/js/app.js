var root = 'https://jsonplaceholder.typicode.com';
$.ajax({
    url: root+"/posts",
    method: 'GET',
    contentType: 'application/json',
    success: function(posts) {
        console.log("Data=>",posts);
        $.each(posts,function(index,post){
            y=post.id;
            function req1() {
                fetch('https://jsonplaceholder.typicode.com/posts/'+ y)
                    .then(response => response.json())
                    .then(json => {
                        const title = json.title;
                        const body = json.body;
                        $('#card-post').append(
                            '<div class="card radius-0 mr-4 my-2"><img class="card-img-top radius-0" src="https://picsum.photos/700/450?random=1"><div class="card-body"><h5 class="card-title stix black"><b>' + post.title + '</b></h5><p class="card-text lightgrey">' + post.body + '</p></div></div>');
                    });
            }
            req1();
        });
    }
});
