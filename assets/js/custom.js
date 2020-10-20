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