window.addEventListener("load",function(){
    let botones = this.document.getElementsByClassName("botoncito")
    let resultado_binario = this.document.getElementById("resultado_binario")
    let resultado_decimal = this.document.getElementById("resultado_decimal")
    let numero_binario = ''
    var cuenta = 0

    //console.log(botones)
    for(var i=0;i<botones.length;i++){
        botones[i].addEventListener("click", function(){
            if (this.value == 'C'){
                resultado_decimal.innerHTML = parseInt(numero_binario,2)
            }
            if (this.value == 'R'){
                numero_binario = 0
                resultado_binario.innerHTML = ''
                resultado_decimal.innerHTML = ''
                cuenta = 0
            }
            if (this.value == '0' || this.value == '1') {
                if (cuenta == 4) {
                    numero_binario = numero_binario + this.value
                    resultado_binario.innerHTML = resultado_binario.innerHTML + ' ' + this.value
                    cuenta = 1
                } else {
                    numero_binario = numero_binario + this.value
                    resultado_binario.innerHTML = resultado_binario.innerHTML + this.value
                    cuenta++
                }
                
            }
        });
    }
})
