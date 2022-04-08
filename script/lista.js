// variaveis que recebem o combobox e sua img´s
var selectJogos0 = document.getElementById("select-jogos0")
var imagem0 = document.getElementById("imagem0")

var selectJogos1 = document.getElementById("select-jogos1")
var imagem1 = document.getElementById("imagem1")

var selectJogos2 = document.getElementById("select-jogos2")
var imagem2 = document.getElementById("imagem2")

// As funções trocam as fotos das img´s inserindo o 'src' nelas atraves do setattribute
function troca0(){
    if(selectJogos0.value == 'falloutnv'){
        imagem0.setAttribute('src', 'Estilo/listas-fotos/fallout-new-vegas-wallpaper-hd-wallpaper-885287634.jpg')
    }if(selectJogos0.value == 'red-dead-2'){
        imagem0.setAttribute('src', 'Estilo/listas-fotos/red-dead-03201115279005.jpg')  
    }if(selectJogos0.value == 'god-of-war'){
        imagem0.setAttribute('src', 'Estilo/listas-fotos/81gXqxyFrxL.jpg')
    }
}

function troca1(){
    if(selectJogos1.value == 'falloutnv'){
        imagem1.setAttribute('src', 'Estilo/listas-fotos/fallout-new-vegas-wallpaper-hd-wallpaper-885287634.jpg')
    }if(selectJogos1.value == 'red-dead-2'){
        imagem1.setAttribute('src', 'Estilo/listas-fotos/red-dead-03201115279005.jpg')  
    }if(selectJogos1.value == 'god-of-war'){
        imagem1.setAttribute('src', 'Estilo/listas-fotos/81gXqxyFrxL.jpg')
    }
}

function troca2(){
    if(selectJogos2.value == 'falloutnv'){
        imagem2.setAttribute('src', 'Estilo/listas-fotos/fallout-new-vegas-wallpaper-hd-wallpaper-885287634.jpg')
    }if(selectJogos2.value == 'red-dead-2'){
        imagem2.setAttribute('src', 'Estilo/listas-fotos/red-dead-03201115279005.jpg')  
    }if(selectJogos2.value == 'god-of-war'){
        imagem2.setAttribute('src', 'Estilo/listas-fotos/81gXqxyFrxL.jpg')
    }
}
