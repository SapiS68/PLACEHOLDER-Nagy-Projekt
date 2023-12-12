function publish(remove) {
    if(remove) {document.getElementById('remove').value = 1;}
    document.getElementById('form').submit();
}