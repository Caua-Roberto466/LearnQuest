const tabs = document.querySelectorAll(".tab-botao");
const contents = document.querySelectorAll(".tab-conteudo");
const indicator = document.querySelector(".tab-indicador"); // corrigido

function updateIndicador(){  // corrigido
    const tabAtivo = document.querySelector(".tab-botao.ativo"); // corrigido
    indicator.style.width = tabAtivo.offsetWidth + "px";
    indicator.style.left = tabAtivo.offsetLeft + "px";
}

updateIndicador(); // corrigido

tabs.forEach(tab => {
    tab.addEventListener("click" , () => {

        tabs.forEach(t => t.classList.remove("ativo"));
        contents.forEach(c => c.classList.remove("ativo"));

        tab.classList.add("ativo");
        document.getElementById(tab.dataset.tab).classList.add("ativo");

        updateIndicador();
    });
});
