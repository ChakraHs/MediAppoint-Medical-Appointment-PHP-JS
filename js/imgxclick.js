function img(x) {
    if (x == 1) {
        document.getElementById('home').style.display = 'flex';
        document.getElementById('medecins').style.display = 'none';
        document.getElementById('rdv').style.display = 'none';
        document.getElementById('ajouter').style.display = 'none';
        document.getElementById('detail').style.display = 'none';
        document.getElementById('editer').style.display = 'none';

        document.getElementById('1').style.background='#42454c';
        document.getElementById('2').style.background='transparent';
        document.getElementById('3').style.background='transparent';

        document.getElementById('b1').style.color='white';
        document.getElementById('b2').style.color='#CFD0C7';
        document.getElementById('b3').style.color='#CFD0C7';

    } else if (x == 2) {
        document.getElementById('medecins').style.display = 'flex';
        document.getElementById('home').style.display = 'none';
        document.getElementById('rdv').style.display = 'none';
        document.getElementById('ajouter').style.display = 'none';
        document.getElementById('detail').style.display = 'none';
        document.getElementById('editer').style.display = 'none';

        document.getElementById('1').style.background='transparent';
        document.getElementById('2').style.background='#42454c';
        document.getElementById('3').style.background='transparent';


        document.getElementById('b1').style.color='#CFD0C7';
        document.getElementById('b2').style.color='white';
        document.getElementById('b3').style.color='#CFD0C7';


    } else if (x == 3) {
        document.getElementById('rdv').style.display = 'flex';
        document.getElementById('home').style.display = 'none';
        document.getElementById('medecins').style.display = 'none';
        document.getElementById('ajouter').style.display = 'none';
        document.getElementById('detail').style.display = 'none';
        document.getElementById('editer').style.display = 'none';


        document.getElementById('1').style.background='transparent';
        document.getElementById('2').style.background='transparent';
        document.getElementById('3').style.background='#42454c';


        document.getElementById('b1').style.color='#CFD0C7';
        document.getElementById('b2').style.color='#CFD0C7';
        document.getElementById('b3').style.color='white';


    }
    else if (x == 4){
        document.getElementById('ajouter').style.display = 'flex';
        document.getElementById('medecins').style.display = 'none';


    }
    return;
}