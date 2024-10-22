
if (document.readyState === "loading") {
  document.addEventListener("DOMContentLoaded", ready)
} else {
  ready()
}

function ready() {
  const removerBtn = document.getElementsByClassName("remover_produto")

  for (var i = 0; i < removerBtn.length; i++) {
    removerBtn[i].addEventListener("click", removeProd)
  }
  const qntProd = document.getElementsByClassName("qntProd")
  for (var i = 0; i < qntProd.length; i++) {
    qntProd[i].addEventListener("change", updateTotal)

  }

  const btnAdd = document.getElementsByClassName("btnAdd")
  for (var i = 0; i < btnAdd.length; i++) {
    btnAdd[i].addEventListener("click", addCarinho)

  }

}

function addCarinho(button) {

  let infoProd = button.parentElement.parentElement.parentElement
  let nomeProd = infoProd.getElementsByClassName("nomeCard")[0].innerText
  let valorProd = infoProd.getElementsByClassName("valorCard")[0].innerText

  let nProd = document.getElementsByClassName("nome")
  for (var i = 0; i < nProd.length; i++) {
    if (nProd[i].innerText === nomeProd) {
      nProd[i].parentElement.parentElement.getElementsByClassName("qntProd")[0].value++
      
      updateTotal()

      return

    } else {

    }
  }

  
  let novoaddCarrinho = document.createElement("div")
  novoaddCarrinho.classList.add("caixa")
 
  novoaddCarrinho.innerHTML = `
        
  <ul class="list-group list-group-flush">
  <li class="list-group-item">


  <span class="nome">${nomeProd}</span>
  <span>R$</span><span class="prodValor">${valorProd}</span>
  <div class="example">

  <button type="button" class="btn-add" onclick="rem(this)">
    -
  </button>


  <input type="submit" value="1" min="0" class="qntProd">
  <button type="button" class="btn-subtract"  onclick="add(this)">
    +
  </button>
    <button type="button" class="remover_produto btn btn-danger">Remover</button>

  </div>


</div>
</li>
</ul>

    `




  let newcart = document.getElementById("container_carrinho")
  //console.log(newcart)
  newcart.append(novoaddCarrinho)


  novoaddCarrinho.getElementsByClassName("qntProd")[0].addEventListener("change", updateTotal)
  novoaddCarrinho.getElementsByClassName("remover_produto")[0].addEventListener("click", removeProd)
  //console.log(novoaddCarrinho)
  updateTotal()
  updateTotal()
}


function removeProd(event) {
  event.target.parentElement.parentElement.remove()
  updateTotal()
}


function add(button){
  let infoProd = button.parentElement
  const Prod = infoProd.getElementsByClassName("qntProd")[0]
  Prod.value = parseInt(Prod.value) +1
  updateTotal()
}

function rem(button){
  let infoProd = button.parentElement
  const Prod = infoProd.getElementsByClassName("qntProd")[0]
  if (parseInt(Prod.value)==0) {return;}
  Prod.value = parseInt(Prod.value) -1
  updateTotal()
}

// BOTAO REMOVER

// CALCULAR PREÇO X QUANTIDADE
function updateTotal() {
  let total = 0;
  const prodCard = document.getElementsByClassName("list-group-item")
  for (var i = 0; i < prodCard.length; i++) {

    const prodValor = prodCard[i].getElementsByClassName("prodValor")[0].innerHTML.replace("R$", "").replace(",", ".")
    if (prodValor > 0) {

      const qntProd = prodCard[i].getElementsByClassName("qntProd")[0].value
      total += prodValor * qntProd
    }
    else {
      console.log(prodCard[i].getElementsByClassName("prodValor")[0].innerHTML);
    }
  }
  total = total.toFixed(2)
  total = total.replace(".", ",")
  document.getElementById("vTotal").innerText = "R$" + total

}

function zerar() {  
  $('#container_carrinho').empty();
  $('#vTotal').empty();

}



