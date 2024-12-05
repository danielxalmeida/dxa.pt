let tipologiawc = document.getElementById('numerowc');
let tipologiaquartos = document.getElementById('numerodequartos');
let tipologiasala = document.getElementById('salaestar');
let tipologiacozinha = document.getElementById('cozinha');
let tipologiacirculacao = document.getElementById('circulacao');
let tableBody = document.getElementById('tabelaareadivisoes');
let wc = document.getElementById('wc');
let quarto = document.getElementById('quartos');

let tabletetos = document.getElementById('tabelatetos');
let tabelapavimentos = document.getElementById('tabelapavimentos');
let tabelaparedes = document.getElementById('tabelaparedes');
let tabelaroupeiros = document.getElementById('tabelaroupeiros');
let tabelajanelas = document.getElementById('tabelajanelas');

let pavimentos = document.getElementById('pavimentos');
let opcoespavimento = document.getElementById('opcoespavimento');

let tetos = document.getElementById('tetos');
let opcoestetos = document.getElementById('opcoestetos');

let paredes = document.getElementById('paredes');
let opcoesparedes = document.getElementById('opcoesparedes');

let portas = document.getElementById('portas');
let opcoesportas = document.getElementById('opcoesportas');

let roupeiros = document.getElementById('roupeiros');
let opcoesroupeiros = document.getElementById('opcoesroupeiros');

let janelas = document.getElementById('janelas');
let opcoesjanelas = document.getElementById('opcoesjanelas');

// let areaTotal=0.0;
let areaSala = 0.0;
let areaCozinha = 0.0;
let areaWC = 0.0;
let areaQuartos = 0.0;
let areaCirculacao = 0.0;

// let paredesTotal=0.0;
let paredesSala = 0.0;
let paredesCozinha = 0.0;
let paredesWC = 0.0;
let paredesQuartos = 0.0;
let paredesCirculacao = 0.0;


const projectForm = document.getElementById('project-form');
const nextBtn = document.getElementById('next-btn');
const prevBtn = document.getElementById('prev-btn');
const submitBtn = document.getElementById('submit-btn');
const steps = document.querySelectorAll('.step');


let currentStep = 1;
let selectedAreas = {};

// Checkbox change event listener
const areaCheckboxes = document.querySelectorAll('input[name="areas[]"]');
areaCheckboxes.forEach(checkbox => {
  checkbox.addEventListener('change', function () {
    const areaValue = this.value;
    selectedAreas[areaValue] = this.checked;
  });
});

// Functionality for the next button (implement your validation logic here)
nextBtn.addEventListener('click', function () {
  const currentStepElement = document.getElementById(`step-${currentStep}`);
  const errorElement = document.getElementById(`step-${currentStep}-error`);

  // Validation for each step
  switch (currentStep) {
    case 1:
      let checkboxes = document.querySelectorAll('input[type="checkbox"]');
      let checknum = 0;

      for (const checkbox of checkboxes) {
        if (checkbox.checked) {
          checknum++;
          break;
        }
      }
      if (checknum < 1) {
        errorElement.textContent = "Por favor, escolha pelo menos uma opção";
        return;
      }

      break;
    case 2:
      const allInputs = document.querySelectorAll('#step-2 tbody input[type="number"]');
      let anyEmpty = false;

      for (const input of allInputs) {
        if (input.value === '') {
          anyEmpty = true;
          errorElement.textContent = 'Preencha todos os campos.';
          return;
        }
      }
      break;
    case 7:
      const roupeiro = document.querySelectorAll('#step-7 tbody input[type="number"]');
      let vazio = false;

      for (const input of roupeiro) {
        if (input.value === '') {
          vazio = true;
          errorElement.textContent = 'Preencha todos os campos.';
          return;
        }
      }
      break;
    case 8:
      const janela = document.querySelectorAll('#step-8 tbody input[type="number"]');
      let vazia = false;

        for (const input of janela) {
          if (input.value === '') {
            vazia = true;
            errorElement.textContent = 'Preencha todos os campos.';
            return;
          }
        }
      let wcs = document.getElementById("wc");
      if (!wcs.checked) {
        let cozinhar = document.getElementById("cozinha");
        if (!cozinhar.checked) {
          currentStep += 2;
          break;
        } else {
          currentStep++;
          break;
        }
      }

        break;
    case 9:
      let cozinhar = document.getElementById("cozinha");
      if (!cozinhar.checked) {
        currentStep++;
        break;
      }

      break;

  }

  // Remove error messages and hide current step
  errorElement.textContent = "";
  currentStepElement.classList.remove('step-active');

  // Update current step and show next step
  currentStep++;
  const nextStepElement = document.getElementById(`step-${currentStep}`);
  nextStepElement.classList.add('step-active');

  // Update button states based on current step
  if (currentStep === steps.length) {
    prevBtn.disabled = false;
    nextBtn.disabled = true;
    submitBtn.classList.toggle('esconde');
    // submitBtn.disabled=false;
  } 
  else {
    submitBtn.classList.add('esconde');
    prevBtn.disabled = false;
    nextBtn.disabled = false;
  }

});

// Functionality for the previous button
prevBtn.addEventListener('click', function () {
  if (currentStep > 1) {  // Only allow going back if not in step 1
    const currentStepElement = document.getElementById(`step-${currentStep}`);
    const errorElement = document.getElementById(`step-${currentStep}-error`);
    switch (currentStep) {
      case 1:

        let wcs = document.getElementById("wc");
        if (!wcs.checked) {
          currentStep--;
          break;
        }
        break;

      case 11:

        let cozinhar = document.getElementById("cozinha");
        if (!cozinhar.checked) {
          let wcs = document.getElementById("wc");
          if (!wcs.checked) {
            currentStep -= 2;
            break;
          } else {
            currentStep--;
            break;
          }
        }
        break;
    }

    // Remove error messages and hide current step
    errorElement.textContent = "";
    currentStepElement.classList.remove('step-active');

    // Update current step and show previous step
    currentStep--;
    const prevStepElement = document.getElementById(`step-${currentStep}`);
    prevStepElement.classList.add('step-active');

    // Update button states based on current step
    if (currentStep === steps.length) {
      prevBtn.disabled = false;
      nextBtn.disabled = true;
      submitBtn.classList.remove('esconde');
    } 
    else {
      submitBtn.classList.add('esconde');
      prevBtn.disabled = false;
      nextBtn.disabled = false;
    }
  }

});

// Update table rows

tableBody.addEventListener('change', updateArea);


tipologiacirculacao.addEventListener('change', updateTableRows);
tipologiacozinha.addEventListener('change', updateTableRows);
tipologiasala.addEventListener('change', updateTableRows);
wc.addEventListener('change', updateTableRows);
quarto.addEventListener('change', updateTableRows);
tipologiaquartos.addEventListener('change', updateTableRows);
tipologiawc.addEventListener('change', updateTableRows);

tipologiacirculacao.addEventListener('change', updatetabelatetos);
tipologiacozinha.addEventListener('change', updatetabelatetos);
tipologiasala.addEventListener('change', updatetabelatetos);
wc.addEventListener('change', updatetabelatetos);
quarto.addEventListener('change', updatetabelatetos);
tipologiaquartos.addEventListener('change', updatetabelatetos);
tipologiawc.addEventListener('change', updatetabelatetos);

tipologiacirculacao.addEventListener('change', updatetabelapavimentos);
tipologiacozinha.addEventListener('change', updatetabelapavimentos);
tipologiasala.addEventListener('change', updatetabelapavimentos);
wc.addEventListener('change', updatetabelapavimentos);
quarto.addEventListener('change', updatetabelapavimentos);
tipologiaquartos.addEventListener('change', updatetabelapavimentos);
tipologiawc.addEventListener('change', updatetabelapavimentos);

tipologiacirculacao.addEventListener('change', updatetabelaparedes);
tipologiacozinha.addEventListener('change', updatetabelaparedes);
tipologiasala.addEventListener('change', updatetabelaparedes);
wc.addEventListener('change', updatetabelaparedes);
quarto.addEventListener('change', updatetabelaparedes);
tipologiaquartos.addEventListener('change', updatetabelaparedes);
tipologiawc.addEventListener('change', updatetabelaparedes);

pavimentos.addEventListener('change', step3);
tetos.addEventListener('change', step4);
paredes.addEventListener('change', step5);
portas.addEventListener('change', step6);
roupeiros.addEventListener('change', step7);
janelas.addEventListener('change', step8);

