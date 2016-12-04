function getFiles(callback) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var json = this.responseText;
            var obj = JSON.parse(json);
            // fileArr = obj.result;
            b_id = obj.id;
            b_img = obj.img;
            b_name = obj.name;
            totalFileLen = b_id.length;
            callback();
        }
    };
    xhttp.open("GET", "read_file.php", true);
    xhttp.send();
}

function bookAnimate() {
    $('#start_book1').attr('src', '' + b_img[idx]);
    $('#start_book1_link').attr('href', 'detail.php?id=' + b_id[idx]);
    // $('#start_book1_name').text(b_name[idx]);
    $('#start_book2').attr('src', '' + b_img[totalFileLen - idx - 1]);
    // $('#start_book2_name').text(b_name[totalFileLen - idx - 1]);
    $('#start_book2_link').attr('href', 'detail.php?id=' + b_id[totalFileLen - idx - 1]);
    if (idx < totalFileLen - 1) {
        $('#end_book1').attr('src', '' + b_img[idx + 1]);
        $('#end_book1_link').attr('href', 'detail.php?id=' + b_id[idx + 1]);
        // $('#end_book1_name').text(b_name[idx + 1]);
    } else {
        $('#end_book1').attr('src', '' + b_img[idx]);
        $('#end_book1_link').attr('href', 'detail.php?id=' + b_id[idx]);
        // $('#end_book1_name').text(b_name[idx]);
        idx = 0;
    }
    $('#end_book2').attr('src', '' + b_img[totalFileLen - idx - 2]);
    $('#end_book2_link').attr('href', 'detail.php?id=' + b_id[totalFileLen - idx - 2]);
    // $('#end_book2_name').text(b_name[totalFileLen - idx - 2]);
    $("#start_book1").hide().fadeIn(3500);
    // $("#start_book1_name").hide().fadeIn(1000);
    // $("#start_book1_name").fadeOut(1500);
    $("#start_book2").hide().fadeIn(3500);
    // $("#start_book2_name").hide().fadeIn(1000);
    // $("#start_book2_name").fadeOut(1500);
    $("#end_book1").hide().fadeIn(3500);
    // $("#end_book1_name").hide().fadeIn(1000);
    // $("#end_book1_name").fadeOut(1500);
    $("#end_book2").hide().fadeIn(3500);
    // $("#end_book2_name").hide().fadeIn(1000);
    // $("#end_book2_name").fadeOut(1500);
    idx++;
    console.log(idx);
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
    idx = 0;
    getFiles(function() {
        bookAnimate();
        time = setInterval(function() {
            bookAnimate();
        }, 6000);
    })
});
