//seleciona botão e atribui na variável para usar na próxima função para ser clicado
const bt_add_questoes = document.querySelector("#add_questoes");

//Criar questão de alternativas
function criaQuestoes() {

    //pegar valor de campo e jogar em variável
    let qtd_alternatives = document.querySelector(".qtd_alternatives").value; 
    let qtd_dissertatives = document.querySelector(".qtd_dissertatives").value;

    //selecionar div (pai dos elementos referentes as questões de alternativas)
    const elemento_pai_alt = document.querySelector(".questoes_alternativas");

    /* criar quantidade de elementos de acordo com numero 
    armazenada na variável qtd_alternatives */
    for (let indexAlt = 1;  indexAlt <= qtd_alternatives; indexAlt++) {

        //campo que receberá os números da questão
        let num_question_alt = document.createElement('input');
        elemento_pai_alt.appendChild(num_question_alt);
        num_question_alt.setAttribute("type", "text");
        num_question_alt.setAttribute("name", 'alt[' + indexAlt + '][num_question_alt]');
        num_question_alt.setAttribute("class", "num_question_alt");
        num_question_alt.setAttribute("value", "");
        num_question_alt.setAttribute("placeholder", "Número da questão:");
       
        const textarea_alt = document.createElement('textarea');
        elemento_pai_alt.appendChild(textarea_alt);
        textarea_alt.setAttribute("name", 'alt[' + indexAlt + '][question_alt]');
        textarea_alt.setAttribute("value", "");
        textarea_alt.setAttribute("class", "question_alt");
        textarea_alt.setAttribute("placeholder", "Questão a ser respondida:");

        for (let index = 1; index < 8; index++) {

            let num_tabela_asci = index;
            let letra_alternativa = String.fromCharCode(num_tabela_asci+64);
            
            const elemento_pai_alt = document.querySelector(".questoes_alternativas");
            var alternativa = document.createElement('textarea');
            elemento_pai_alt.appendChild(alternativa); 
            alternativa.setAttribute("name", 'alt[' + indexAlt + ']' +  '[alternative' + letra_alternativa + ']');
            alternativa.setAttribute("class", "alt");
            alternativa.setAttribute("placeholder", letra_alternativa + ")");
            
        }

        const alt_correta = document.createElement('input');
        elemento_pai_alt.appendChild(alt_correta);
        alt_correta.setAttribute("type", "text");
        alt_correta.setAttribute("name", 'alt[' + indexAlt + '][correctAlt]');
        alt_correta.setAttribute("class", "alt_correta");
        alt_correta.setAttribute("placeholder", "Alternativa correta: Ex. B");
  
    }


    const elemento_pai_dis = document.querySelector(".questoes_dissertativas");

    for (let indexDis = 1; indexDis <= qtd_dissertatives; indexDis++) {
        
        //campo que receberá os números da questão
        let num_question_dis = document.createElement('input');
        elemento_pai_dis.appendChild(num_question_dis);
        num_question_dis.setAttribute("type", "text");
        num_question_dis.setAttribute("name", 'dis[' + indexDis + '][num_question_dis]');
        num_question_dis.setAttribute("class", "num_question_dis");
        num_question_dis.setAttribute("value", "");
        num_question_dis.setAttribute("placeholder", "Número da questão:");
    
        const textarea_dis = document.createElement('textarea');
        elemento_pai_dis.appendChild(textarea_dis);
        textarea_dis.setAttribute("name", 'dis[' + indexDis + '][question_dis]');
        textarea_dis.setAttribute("class", "question_dis");
        textarea_dis.setAttribute("placeholder", "Questão a ser respondida:");

    }

}


/* Função para ocultar campos de informar a quantidade de campos
de questões alternativas  */
/*
function escondeDivCriaQuestoes() {
    if (document.querySelector('.qtd_alternatives').value == "" &&
    document.querySelector('.qtd_dissertatives').value == "") {
        alert("Pelo menos preencha um dos campos.");
    } else {
        document.querySelector('.qtd_alternatives').style.display = 'none';
        document.querySelector('.qtd_dissertatives').style.display = 'none';
        document.querySelector('#add_questoes').style.display = 'none';
    }
}
*/
//Chamando função QuestaoAlt após clicar no botão bt_add_campo
bt_add_questoes.addEventListener("click", criaQuestoes);

//bt_add_questoes.addEventListener("click", escondeDivCriaQuestoes);





