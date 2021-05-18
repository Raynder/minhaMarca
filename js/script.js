intervalofinal = setInterval(function(){
    aparecer_txt()
},1000)

setTimeout(function(){
    clearInterval(intervalofinal)
},15000)

//Converter objeto em array
function toArray(lista){
    newlista = []
    for(var i = 0; i < lista.length; i++){
        newlista.push(lista[i])
    }

    return newlista
}

function aparecer(div){
    if(typeof(interval) == 'undefined'){
        console.log('entrei')
        
        divs = div.querySelectorAll('.campotxt')
        divs = toArray(divs)

        console.log(divs)

        vezes = 0
        var intervalo3 = setInterval(function(){
            if(vezes < divs.length){
                subir(divs[vezes])
            }

            else{
                clearInterval(intervalo3)
            }
            vezes = vezes + 1
        },250)

        function subir(campo){

            var promessa = new Promise((resolve, reject) => {

                px = 120
                op = 0
                var intervalo2 = setInterval(function(){
                    px = px - 5
                    op = op +0.15
                    campo.style.marginTop = px+"px" 
                    campo.style.opacity = op
                    if(px <= 80){
                        campo.style.marginTop = "80px" 
                        campo.style.opacity = 1
                        clearInterval(intervalo2)
                        resolve('ok')
                    }
                },20)

            }).then(response => {
                setTimeout(function(){

                    if(response == 'ok'){
                        return true
                    }

                })
            })
        }
    }
    else{
        console.log('js exis')
    }


}

function aparecer_txt(){
    var index = 0
    lista.forEach((div, index) => {
        if(lista[index].querySelectorAll('.campotxt')[index].style != 'undefined'){
            if(lista[index].querySelectorAll('.campotxt')[1].style.opacity == 0 && lista[index].querySelectorAll('.campotxt')[1].getBoundingClientRect().top < window.innerHeight || lista[index].querySelectorAll('.campotxt')[2].style.opacity == 0 && lista[index].querySelectorAll('.campotxt')[2].getBoundingClientRect().top < window.innerHeight){
                aparecer(lista[index])
                lista.shift()
            }
        }

    })
}

function mexerseta(){
        var posseta = 0
        var seta = document.getElementById('seta').style.marginTop
        setInterval(function(){
            if(posseta > 10){
                posseta = 0
            }
            document.getElementById('seta').style.marginTop = posseta+"px"
            posseta = posseta + 2

        },100)
    }