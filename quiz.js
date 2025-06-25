function verificarRespostas() {
  const respostasCertas = {
    q1: 'c',
    q2: 'c',
    q3: 'c',
    q4: 'd',
    q5: 'a',
    q6: 'b',
    q7: 'b',
    q8: 'd',
    q9: 'b',
    q10: 'c'
  };

  let acertos = 0;

  for (let i = 1; i <= 10; i++) {
    const resposta = document.querySelector(`input[name="q${i}"]:checked`);
    const resp = document.getElementById(`resposta${i}`);
    if (resposta) {
      if (resposta.value === respostasCertas[`q${i}`]) {
        resp.textContent = "✅ Correto!";
        resp.style.color = "green";
        acertos++;
      } else {
        const respostasTexto = {
          q1: "C) Uma técnica para roubar dados se passando por instituições confiáveis.",
          q2: "C) Número do CPF.",
          q3: "C) Roubo de dados por terceiros.",
          q4: "D) Criptografia.",
          q5: "A) Garantir a confidencialidade, integridade e disponibilidade dos dados.",
          q6: "B) Confidencialidade, Integridade e Disponibilidade.",
          q7: "B) Software malicioso criado para prejudicar ou invadir sistemas.",
          q8: "D) Controlar o tráfego e bloquear acessos não autorizados.",
          q9: "B) Tentar todas as combinações possíveis de senha até encontrar a correta.",
          q10: "C) Verificação com dois métodos para aumentar a segurança."
        };
        resp.textContent = `❌ Incorreto. A resposta certa é: ${respostasTexto[`q${i}`]}`;
        resp.style.color = "red";
      }
    } else {
      resp.textContent = "⚠️ Você não respondeu esta pergunta.";
      resp.style.color = "orange";
    }
  }

  const resultadoBox = document.getElementById("resultadoFinalBox");
  const resultadoTexto = document.getElementById("resultadoTexto");

  resultadoTexto.innerHTML = `🎉 Você acertou <strong>${acertos}</strong> de 10 perguntas!`;
  resultadoBox.style.display = "block";
}

function reiniciarQuiz() {
  for (let i = 1; i <= 10; i++) {
    const radios = document.getElementsByName(`q${i}`);
    radios.forEach(radio => radio.checked = false);

    const resp = document.getElementById(`resposta${i}`);
    if (resp) {
      resp.textContent = "";
      resp.style.color = "";
    }
  }
  document.getElementById("resultadoFinalBox").style.display = "none";
}

function fecharResultado() {
  document.getElementById("resultadoFinalBox").style.display = "none";
}

