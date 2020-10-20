function cumprimenta(pagina){

    $('section').delay(100).html( "Olá, bem vindo à " + $('#'+pagina).html() );

    $('nav li').css("color", "black");
    $this.css("color", "green");
  }

  function oraBolas() {
    $('section').delay(100).html( "Existe qualquer coisa de errado!" );
  }

  /**
   * Escuta alterações na hash da localização actual.
   * @param {Event} e HashChangeEvent object
   */
  window.onhashchange = function(e) {

    var pagina = lerHash();

    // aqui chama-se função X mediante o valor da variável "pagina"

  };

 /**
  * Actualiza a hash da localização actual com o valor facultado
  * @param {string} str
  */
 function escreverHash(str) {
   window.location.hash = str;
 }

 /**
  * Devolve a hash da localização actual
  * @return {string} Valor da Hash com prefixo '#' ignorado.
  */
 function lerHash () {
   return window.location.hash.substring(1);
 }

 $(function() {

   /*$('nav').on("click", 'li', function (e) {
     e.preventDefault();
     escreverHash($(this).attr("id"));
   });*/
 });




function wpcm_modal_contact_open() {
    document.getElementById('id01').style.display='block';
}
function wpcm_modal_contact_close() {
    document.getElementById('id01').style.display='none'
}

function wpcm_modal_whats_open() {
    document.getElementById('wpcm-modal-whats').style.display='block';
}
function wpcm_modal_whats_close() {
    document.getElementById('wpcm-modal-whats').style.display='none'
}

$("#selecionar").change(function() {
var $this, secao, atual, campos;

campos = $("div[data-name]");

campos.addClass("wpcm-hide");

if (this.value !== "") {
    secao = $('option[data-section][value="' + this.value + '"]', this).attr("data-section");
  
    atual = campos.filter("[data-name=" + secao + "]");
  
    if (atual.length !== 0) {
        atual.removeClass("wpcm-hide");
    }
}
});