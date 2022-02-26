window.addEventListener("load",function(){
    let botones = this.document.getElementsByClassName("botoncito")
    //onsole.log(botones)
    let valor = ''
    let cuenta = 0
    let n_telefono = this.document.getElementById("n_telefono")
    for(var i=0;i<botones.length;i++){
        botones[i].addEventListener("click", function(){
            if (this.value == 'R') {
                valor = ''
                n_telefono.innerHTML =  valor
            } else {
                if (cuenta == 3) {
                    valor = valor + '  ' + this.value 
                    n_telefono.innerHTML =  valor
                    cuenta = 1
                } else {
                    valor = valor + this.value 
                    n_telefono.innerHTML =  valor
                    cuenta++
                }
            }
        });
    }

})