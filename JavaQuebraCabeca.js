/** help */
function log(message) {
    console.log('> ' + message)
}


var dropzoneActual;

/** app */
const cardum = document.querySelectorAll('.cardum')
const carddois = document.querySelectorAll('.carddois')
const cardtres = document.querySelectorAll('.cardtres')

const dropzoneum = document.querySelectorAll('.dropzoneum')
const dropzonedois = document.querySelectorAll('.dropzonedois')
const dropzonetres = document.querySelectorAll('.dropzonetres')


/** our cards */
cardum.forEach(cardum => {
    cardum.addEventListener('dragstart', dragstart)
    cardum.addEventListener('drag', drag)
    cardum.addEventListener('dragend', dragend)
})


carddois.forEach(carddois => {
    carddois.addEventListener('dragstart', dragstart)
    carddois.addEventListener('drag', drag)
    carddois.addEventListener('dragend', dragend)
})


cardtres.forEach(cardtres => {
    cardtres.addEventListener('dragstart', dragstart)
    cardtres.addEventListener('drag', drag)
    cardtres.addEventListener('dragend', dragend)
})

function dragstart() {
    // log('CARD: Start dragging ')
    dropzoneum.forEach( dropzoneum => dropzoneum.classList.add('highlight'))
	 dropzonedois.forEach( dropzonedois => dropzonedois.classList.add('highlight'))
	 dropzonetres.forEach( dropzonetres => dropzonetres.classList.add('highlight'))

    // this = card
    this.classList.add('is-dragging')
}

function drag() {
    // console.log(this.classList)
}

function dragend() {
    // log('CARD: Stop drag! ')
    dropzoneum.forEach( dropzoneum => dropzoneum.classList.remove('highlight'))
	dropzonedois.forEach( dropzonedois => dropzonedois.classList.remove('highlight'))
	dropzonetres.forEach( dropzonetres => dropzonetres.classList.remove('highlight'))
	
	
    // this = card
    this.classList.remove('is-dragging')
	
	
	  
	var quantidadeFilhos = dropzoneActual.childNodes.length;
	var filhos = dropzoneActual.childNodes;
	var nomeDropZone = dropzoneActual.className;
	
	var quantidadeVerdes = 0;
	var quantidadeAzuis = 0;
	var quantidadeVermelhos = 0;
	
	for (i = 0; i < quantidadeFilhos; i++) {
	  var card = filhos[i].className
	 
	  
	  
	  if (card == "cardum" && nomeDropZone == "dropzoneum"){
		  quantidadeVerdes ++;
	  }
	  
	  if (card == "carddois" && nomeDropZone == "dropzonedois"){
		  quantidadeAzuis ++;
	  }
	  
	  if (card == "cardtres" && nomeDropZone == "dropzonetres"){
		  quantidadeVermelhos ++;
	  }
	}
	
	if (quantidadeVerdes == 2){
		cartasVerdes = true;
	} else 	if (quantidadeAzuis == 2){
		cartasAzuis = true;
	} else 	if (quantidadeVermelhos == 2){
		cartasVermelhas = true;
	}
	
	
	if (cartasVerdes == true && cartasAzuis == true && cartasVermelhas == true){
		document.getElementById("v").style.visibility = "visible";
		console.log("venceu");
	};
	
	
}

/** place where we will drop cards */
dropzoneum.forEach( dropzoneum => {
    dropzoneum.addEventListener('dragenter', dragenter)
    dropzoneum.addEventListener('dragover', dragover)
    dropzoneum.addEventListener('dragleave', dragleave)
    dropzoneum.addEventListener('drop', drop)
})

dropzonedois.forEach( dropzonedois => {
    dropzonedois.addEventListener('dragenter', dragenter)
    dropzonedois.addEventListener('dragover', dragover)
    dropzonedois.addEventListener('dragleave', dragleave)
    dropzonedois.addEventListener('drop', drop)
})


dropzonetres.forEach( dropzonetres => {
    dropzonetres.addEventListener('dragenter', dragenter)
    dropzonetres.addEventListener('dragover', dragover)
    dropzonetres.addEventListener('dragleave', dragleave)
    dropzonetres.addEventListener('drop', drop)
})

function dragenter() {
    // log('DROPZONE: Enter in zone ')
}

var cartasVerdes = false
var cartasAzuis = false
var cartasVermelhas = false

function dragover() {
    // this = dropzone
    this.classList.add('over')

    // get dragging card
    const cardumBeingDragged = document.querySelector('.is-dragging')
	 const carddoisBeingDragged = document.querySelector('.is-dragging')
	  const cardtresBeingDragged = document.querySelector('.is-dragging')

    // this = dropzone
    this.appendChild(cardumBeingDragged)
	 this.appendChild(carddoisBeingDragged)
	  this.appendChild(cardtresBeingDragged)
	  
	dropzoneActual = this;
}

function dragleave() {
    // log('DROPZONE: Leave ')
    // this = dropzone
    this.classList.remove('over')

}

function drop() {
    // log('DROPZONE: dropped ')
    this.classList.remove('over')
}

