function confirmDelete() {
    return confirm("Are you sure you want to delete this entry?");

}

function feedbackClick(faceType){
    //  var f5 = document.getElementById('name').value;
    //  document.getElementById('athal').innerHTML = f5;
    var f1 = document.getElementById('box1');
    var f2 = document.getElementById('box2');
    var f3 = document.getElementById('box3');
    var f4 = document.getElementById('box4');
    var f5 = document.getElementById('box5');
    
    if(faceType === 'face1'){
        f1.style.display = 'inline-block';
        f2.style.display = 'none';
        f3.style.display = 'none';
        f4.style.display = 'none';
        f5.style.display = 'none';
    }
    if(faceType === 'face2'){
        f1.style.display = 'none';
        f2.style.display = 'inline-block';
        f3.style.display = 'none';
        f4.style.display = 'none';
        f5.style.display = 'none';
    }
    if(faceType === 'face3'){
        f1.style.display = 'none';
        f2.style.display = 'none';
        f3.style.display = 'inline-block';
        f4.style.display = 'none';
        f5.style.display = 'none';
    }
    if(faceType === 'face4'){
        f1.style.display = 'none';
        f2.style.display = 'none';
        f3.style.display = 'none';
        f4.style.display = 'inline-block';
        f5.style.display = 'none';
    }
    if(faceType === 'face5'){
        f1.style.display = 'none';
        f2.style.display = 'none';
        f3.style.display = 'none';
        f4.style.display = 'none';
        f5.style.display = 'inline-block';
    }
}

function keywords(kani) {
    if(kani === 'f1-not-work'){
        var copy1 = document.getElementById('f1-not-work').textContent;
        document.getElementById('comment').innerHTML = copy1;
    }
    if(kani === 'f1-missing-steps'){
        var copy2 = document.getElementById('f1-missing-steps').textContent;
        document.getElementById('comment').innerHTML = copy2;
    }if(kani === 'f1-missing-ingredients'){
        var copy3 = document.getElementById('f1-missing-ingredients').textContent;
        document.getElementById('comment').innerHTML = copy3;
    }if(kani === 'f2-confusing-direction'){
        var copy4 = document.getElementById('f2-confusing-direction').textContent;
        document.getElementById('comment').innerHTML = copy4;
    }if(kani === 'f2-needs-improvement'){
        var copy5 = document.getElementById('f2-needs-improvement').textContent;
        document.getElementById('comment').innerHTML = copy5;
    }if(kani === 'f2-missing-something'){
        var copy6 = document.getElementById('f2-missing-something').textContent;
        document.getElementById('comment').innerHTML = copy6;
    }if(kani === 'f2-too-difficult'){
        var copy7 = document.getElementById('f2-too-difficult').textContent;
        document.getElementById('comment').innerHTML = copy7;
    }if(kani === 'f2-ok'){
        var copy8 = document.getElementById('f2-ok').textContent;
        document.getElementById('comment').innerHTML = copy8;
    }if(kani === 'f2-needs-flavor'){
        var copy9 = document.getElementById('f2-needs-flavor').textContent;
        document.getElementById('comment').innerHTML = copy9;
    }if(kani === 'f2-keeper'){
        var copy11 = document.getElementById('f2-keeper').textContent;
        document.getElementById('comment').innerHTML = copy11;
    }if(kani === 'f2-great-flavor'){
        var copy12 = document.getElementById('f2-great-flavor').textContent;
        document.getElementById('comment').innerHTML = copy12;
    }
        
}


function update(){
    confirm("Are you sure you want to submit the form?");

    
}