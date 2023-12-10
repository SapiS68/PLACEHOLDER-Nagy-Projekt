var clue_image;
var pics, pic_ind = 0;

function init() {
    let meta_tag = document.querySelector('meta[name="clue_images"]');
    pics = meta_tag.content.split(';');
    meta_tag.remove();
    
    clue_image = document.getElementById("clue_image");
    clue_image.src = pics[pic_ind];
}

function nextpic() {
    pic_ind = (pic_ind + 1) % pics.length;
    clue_image.src = pics[pic_ind];
}
function prevpic() {
    pic_ind = (pics.length + (pic_ind - 1)) % pics.length;
    clue_image.src = pics[pic_ind];
}