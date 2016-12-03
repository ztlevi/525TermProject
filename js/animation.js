function getFiles(callback) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var json = this.responseText;
            var obj = JSON.parse(json);
            fileArr = obj.result;
            totalFileLen = fileArr.length;
            callback();
        }
    };
    xhttp.open("GET", "read_file.php", true);
    xhttp.send();
}

function bookAnimate() {
    $('#start_book1').attr('src', 'upload_image/' + fileArr[idx]);
    $('#start_book2').attr('src', 'upload_image/' + fileArr[totalFileLen - idx + 1]);
    if (idx < totalFileLen - 1) {
        $('#end_book1').attr('src', 'upload_image/' + fileArr[++idx]);
    } else {
        $('#end_book1').attr('src', 'upload_image/' + fileArr[2]);
        idx = 2;
    }
    $('#end_book2').attr('src', 'upload_image/' + fileArr[totalFileLen - idx + 1]);
    $("#start_book1").hide().fadeIn(1000);
    $("#start_book2").hide().fadeIn(1000);
    $("#end_book1").hide().fadeIn(1000);
    $("#end_book2").hide().fadeIn(1000);
    if (idx % 2 == 0) {
        $('#start_book1').animate({
            bottom: '1px'
        });
        $('#end_book1').animate({
            bottom: '-1px'
        });
        $('#start_book2').animate({
            bottom: '1px'
        });
        $('#end_book2').animate({
            bottom: '-1px'
        });
    } else {
        $('#start_book1').animate({
            bottom: '-350px'
        });
        $('#end_book1').animate({
            bottom: '350px'
        });
        $('#start_book2').animate({
            bottom: '-350px'
        });
        $('#end_book2').animate({
            bottom: '350px'
        });
    }

}

$(document).ready(function() {
    idx = 2;
    getFiles(function() {
        time = setInterval(function() {
            bookAnimate();
        }, 2000);
    })
});
