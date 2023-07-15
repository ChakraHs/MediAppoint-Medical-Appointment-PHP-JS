function img(x) {
    if (x == 1) {
        document.getElementById('input1').style.display = 'flex';
        document.getElementById('input2').style.display = 'none';
        document.getElementById('input3').style.display = 'none';
    } else if (x == 2) {
        document.getElementById('input2').style.display = 'flex';
        document.getElementById('input1').style.display = 'none';
        document.getElementById('input3').style.display = 'none';
    } else if (x == 3) {
        document.getElementById('input3').style.display = 'flex';
        document.getElementById('input2').style.display = 'none';
        document.getElementById('input1').style.display = 'none';
    } else {
        document.getElementById('input1').style.display = 'none';
        document.getElementById('input2').style.display = 'none';
        document.getElementById('input3').style.display = 'none';
    }
    return;
}