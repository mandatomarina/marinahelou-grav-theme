$().ready(function () {
  $(".download-link").on('click', function() {
    var url = $(this).attr('href').split('/')
    var filename = url[url.length-1]
    if (typeof ga === "function") {
      ga('send', 'event', 'File', 'download', filename);
    }
    console.log(filename);
  });
});
