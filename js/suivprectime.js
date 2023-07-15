var s = 0;
        function suivTime() {
            var i = 0;
            while (i<7){
                var idn = i+s;
                var idf= idn+7;
                document.getElementById(idf).style.display = 'flex';
                document.getElementById(idn).style.display = 'none';
                document.getElementById('prec2').style.display = 'flex';
                i++;
            }
            s+=7;
            if(s==21){
                document.getElementById('suiv2').style.display = 'none';
            }
        }
        function precTime() {
            var i = 0;
            while (i<7){
                var idn = i+s;
                var idf= idn-7;
                document.getElementById(idn).style.display = 'none';
                document.getElementById(idf).style.display = 'flex';
                document.getElementById('suiv2').style.display = 'flex';
                i++;
            }
            s-=7;
            if(s==0){
                document.getElementById('prec2').style.display = 'none';
            }
        }