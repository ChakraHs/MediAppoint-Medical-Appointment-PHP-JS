        function tyconsui() {
            if (x == 1) {
                document.getElementById('type').style.display = 'none';
                document.getElementById('horaire').style.display = 'flex';

                document.getElementById('rdv1').classList.remove("active");
                document.getElementById('rdv2').classList.add("active");

                document.getElementById('prec-btn').style.display = 'flex';
                x++;

            }else if(x == 2){
                document.getElementById('horaire').style.display = 'none';
                document.getElementById('payement').style.display = 'flex';

                document.getElementById('rdv2').classList.remove("active");
                document.getElementById('rdv4').classList.add("active");

                document.getElementById('btn1').style.display = 'none';
                document.getElementById('btn2').style.display = 'flex';

                document.getElementById('prec-btn').style.display = 'flex';

                x+=2;

            }else if(x == 3){
                document.getElementById('motif').style.display = 'none';
                document.getElementById('payement').style.display = 'flex';

                document.getElementById('rdv3').classList.remove("active");
                document.getElementById('rdv4').classList.add("active");

                document.getElementById('btn2').style.display = 'flex';

                x++;

            }
            return;
        }

        function tyconprec() {
            if (x == 2) {
                document.getElementById('type').style.display = 'flex';
                document.getElementById('horaire').style.display = 'none';

                document.getElementById('rdv1').classList.add("active");
                document.getElementById('rdv2').classList.remove("active");

                x--;
            }else if(x == 3){
                document.getElementById('horaire').style.display = 'flex';
                document.getElementById('motif').style.display = 'none';

                document.getElementById('rdv2').classList.add("active");
                document.getElementById('rdv3').classList.remove("active");
            
                x--;
            }else if(x == 4){
                document.getElementById('horaire').style.display = 'flex';
                document.getElementById('payement').style.display = 'none';

                document.getElementById('rdv2').classList.add("active");
                document.getElementById('rdv4').classList.remove("active");

                document.getElementById('btn2').style.display = 'none';
                document.getElementById('prec-btn').style.display = 'none';
            
                x-=2;
            }
            return;
        }