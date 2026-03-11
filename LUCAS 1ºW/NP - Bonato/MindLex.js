// CORTINA
function fecharCortina() {
  document.getElementById('cortina').classList.add('hide');
  setTimeout(() => {
    document.getElementById('cortina').style.display = 'none';
  }, 1200);
}
// Ondas animadas
function animateWaves() {
  const t = Date.now() / 900;
  let d1 = "M0,240 ";
  for (let x = 0; x <= 1440; x += 40) {
    let y = 60 * Math.sin((x / 300) + t) + 180;
    d1 += `L${x},${y} `;
  }
  d1 += "L1440,320 L0,320 Z";
  document.getElementById('onda1').setAttribute('d', d1);
  let d2 = "M0,260 ";
  for (let x = 0; x <= 1440; x += 40) {
    let y = 40 * Math.sin((x / 200) + t + 1) + 200;
    d2 += `L${x},${y} `;
  }
  d2 += "L1440,320 L0,320 Z";
  document.getElementById('onda2').setAttribute('d', d2);
  let d3 = "M0,280 ";
  for (let x = 0; x <= 1440; x += 40) {
    let y = 30 * Math.sin((x / 150) + t + 2) + 220;
    d3 += `L${x},${y} `;
  }
  d3 += "L1440,320 L0,320 Z";
  document.getElementById('onda3').setAttribute('d', d3);
  requestAnimationFrame(animateWaves);
}
animateWaves();

// Alternância das abas
function openTab(tabId, event) {
  document.querySelectorAll('.tab-content').forEach(el => {
    el.classList.remove('active');
    el.style.zIndex = 0;
  });
  document.querySelectorAll('nav a').forEach(el => el.classList.remove('active'));
  const tab = document.getElementById(tabId);
  tab.style.zIndex = 1;
  tab.classList.add('active');
  if (event) event.target.classList.add('active');
  fecharJogo();
}

// Alternância das telas de jogos
function abrirJogo(jogo) {
  fecharJogo();
  setTimeout(() => {
    if (jogo === 'memoria') {
      document.getElementById('modal-memoria').classList.add('active');
      initMemoryGame();
    }
    if (jogo === 'puzzle') {
      document.getElementById('modal-puzzle').classList.add('active');
      initPuzzleGame();
    }
    if (jogo === 'escrever') {
      document.getElementById('modal-escrever').classList.add('active');
      writeIdx = 0;
      document.getElementById('write-img').src = writeImgs[writeIdx].src;
      document.getElementById('write-input').value = '';
      document.getElementById('write-result').textContent = '';
    }
    if (jogo === 'completar') {
      document.getElementById('modal-completar').classList.add('active');
      completeIdx = 0;
      document.getElementById('complete-img').src = completeWords[completeIdx].src;
      document.getElementById('complete-word').textContent = completeWords[completeIdx].dica;
      document.getElementById('complete-input').value = '';
      document.getElementById('complete-result').textContent = '';
    }
  }, 200);
}
function fecharJogo() {
  document.querySelectorAll('.game-modal').forEach(modal => modal.classList.remove('active'));
}
function reiniciarJogo(jogo) {
  if (jogo === 'memoria') initMemoryGame();
  if (jogo === 'puzzle') initPuzzleGame();
  if (jogo === 'escrever') {
    writeIdx = 0;
    document.getElementById('write-img').src = writeImgs[writeIdx].src;
    document.getElementById('write-input').value = '';
    document.getElementById('write-result').textContent = '';
  }
  if (jogo === 'completar') {
    completeIdx = 0;
    document.getElementById('complete-img').src = completeWords[completeIdx].src;
    document.getElementById('complete-word').textContent = completeWords[completeIdx].dica;
    document.getElementById('complete-input').value = '';
    document.getElementById('complete-result').textContent = '';
  }
}

// Jogo da Memória
const memoryEmojis = ['🍎', '🍌', '🍇', '🍉', '🍓', '🍊', '🍍', '🥝'];
let memoryCards = [];
let memoryFlipped = [];
let memoryMatched = [];
let memoryLock = false;
function shuffle(arr) {
  for (let i = arr.length - 1; i > 0; i--) {
    const j = Math.floor(Math.random() * (i + 1));
    [arr[i], arr[j]] = [arr[j], arr[i]];
  }
}
function initMemoryGame() {
  memoryCards = [...memoryEmojis, ...memoryEmojis];
  shuffle(memoryCards);
  memoryFlipped = [];
  memoryMatched = [];
  memoryLock = false;
  const board = document.getElementById('memory-board');
  board.innerHTML = '';
  document.getElementById('memory-message').textContent = '';
  memoryCards.forEach((emoji, idx) => {
    const card = document.createElement('div');
    card.className = 'memory-card';
    card.dataset.idx = idx;
    card.onclick = () => flipMemoryCard(idx, card);
    card.textContent = '';
    board.appendChild(card);
  });
}
function flipMemoryCard(idx, cardElem) {
  if (memoryLock) return;
  if (memoryMatched.includes(idx) || memoryFlipped.includes(idx)) return;
  cardElem.textContent = memoryCards[idx];
  cardElem.classList.add('flipped');
  memoryFlipped.push(idx);
  if (memoryFlipped.length === 2) {
    memoryLock = true;
    setTimeout(() => {
      const [i1, i2] = memoryFlipped;
      const c1 = document.querySelector(`.memory-card[data-idx="${i1}"]`);
      const c2 = document.querySelector(`.memory-card[data-idx="${i2}"]`);
      if (memoryCards[i1] === memoryCards[i2]) {
        c1.classList.add('matched');
        c2.classList.add('matched');
        memoryMatched.push(i1, i2);
        if (memoryMatched.length === memoryCards.length) {
          document.getElementById('memory-message').textContent = 'Parabéns! Você encontrou todos os pares!';
        }
      } else {
        c1.textContent = '';
        c2.textContent = '';
        c1.classList.remove('flipped');
        c2.classList.remove('flipped');
      }
      memoryFlipped = [];
      memoryLock = false;
    }, 900);
  }
}

// Quebra-Cabeça simples (3x3)
const puzzleImg = "https://img.icons8.com/color/96/000000/apple--v1.png";
function initPuzzleGame() {
  const board = document.getElementById('puzzle-board');
  board.innerHTML = '';
  document.getElementById('puzzle-message').textContent = '';
  let pieces = [];
  for (let i = 0; i < 9; i++) pieces.push(i);
  shuffle(pieces);
  pieces.forEach((n, idx) => {
    const piece = document.createElement('div');
    piece.className = 'puzzle-piece';
    piece.draggable = true;
    piece.dataset.idx = idx;
    piece.dataset.n = n;
    piece.style.background = `url(${puzzleImg})`;
    piece.style.backgroundSize = "240px 240px";
    piece.style.backgroundPosition = `${-(n % 3) * 80}px ${-Math.floor(n / 3) * 80}px`;
    piece.ondragstart = e => {
      piece.classList.add('dragging');
      e.dataTransfer.setData('text/plain', idx);
    };
    piece.ondragend = () => piece.classList.remove('dragging');
    const dropzone = document.createElement('div');
    dropzone.className = 'puzzle-drop';
    dropzone.ondragover = e => e.preventDefault();
    dropzone.ondrop = e => {
      e.preventDefault();
      const fromIdx = +e.dataTransfer.getData('text/plain');
      swapPuzzlePieces(fromIdx, idx);
    };
    dropzone.appendChild(piece);
    board.appendChild(dropzone);
  });
}
function swapPuzzlePieces(fromIdx, toIdx) {
  const board = document.getElementById('puzzle-board');
  const drops = Array.from(board.children);
  const fromPiece = drops[fromIdx].firstChild;
  const toPiece = drops[toIdx].firstChild;
  drops[fromIdx].appendChild(toPiece);
  drops[toIdx].appendChild(fromPiece);
  checkPuzzleWin();
}
function checkPuzzleWin() {
  const board = document.getElementById('puzzle-board');
  const drops = Array.from(board.children);
  let win = true;
  drops.forEach((drop, i) => {
    if (drop.firstChild.dataset.n != i) win = false;
  });
  if (win) document.getElementById('puzzle-message').textContent = "Parabéns! Você montou o quebra-cabeça!";
}

// Escrever a Imagem
const writeImgs = [
  { src: "https://img.icons8.com/color/96/000000/apple--v1.png", nome: "maçã" },
  { src: "https://img.icons8.com/color/96/000000/banana.png", nome: "banana" },
  { src: "https://img.icons8.com/color/96/000000/grapes.png", nome: "uva" },
  { src: "https://img.icons8.com/color/96/000000/watermelon.png", nome: "melancia" }
];
let writeIdx = 0;
function checkWriteImg() {
  const input = document.getElementById('write-input').value.trim().toLowerCase();
  const result = document.getElementById('write-result');
  if (input === writeImgs[writeIdx].nome) {
    result.textContent = "Correto! Muito bem!";
    result.style.color = "var(--verde-agua)";
    setTimeout(() => {
      writeIdx = (writeIdx + 1) % writeImgs.length;
      document.getElementById('write-img').src = writeImgs[writeIdx].src;
      document.getElementById('write-input').value = '';
      result.textContent = '';
    }, 1200);
  } else {
    result.textContent = "Tente novamente!";
    result.style.color = "var(--rosa)";
  }
}

// Arraste a Letra
const dragWords = [
  // O underline _ indica o espaço a ser preenchido
  { src: "https://img.icons8.com/color/96/000000/apple--v1.png", palavra: "maçã", incompleta: "ma_ã", letra: "ç", opcoes: ["c", "s", "ç"] },
  { src: "https://img.icons8.com/color/96/000000/banana.png", palavra: "banana", incompleta: "b_nana", letra: "a", opcoes: ["e", "a", "o"] },
  { src: "https://img.icons8.com/color/96/000000/grapes.png", palavra: "uva", incompleta: "_va", letra: "u", opcoes: ["o", "u", "a"] },
  { src: "https://img.icons8.com/color/96/000000/watermelon.png", palavra: "melancia", incompleta: "mel_ncia", letra: "a", opcoes: ["e", "a", "i"] }
];
let dragIdx = 0;
let dragTarget = null;

function initDragGame() {
  dragIdx = 0;
  renderDragGame();
}

function renderDragGame() {
  const obj = dragWords[dragIdx];
  document.getElementById('drag-img').src = obj.src;
  // Monta a palavra com um espaço para drop
  let html = '';
  let dropAdded = false;
  for (let i = 0; i < obj.incompleta.length; i++) {
    if (obj.incompleta[i] === "_") {
      html += `<span class="drag-dropzone" id="dropzone" ondrop="dropLetter(event)" ondragover="event.preventDefault()" style="display:inline-block;width:32px;height:38px;border-bottom:2px solid var(--roxo);vertical-align:bottom;"></span>`;
      dropAdded = true;
    } else {
      html += `<span>${obj.incompleta[i]}</span>`;
    }
  }
  document.getElementById('drag-word').innerHTML = html;

  // Opções de letras
  const optionsDiv = document.getElementById('drag-options');
  optionsDiv.innerHTML = '';
  obj.opcoes.forEach((letra, idx) => {
    const span = document.createElement('span');
    span.textContent = letra;
    span.className = 'drag-letter';
    span.draggable = true;
    span.style.background = 'var(--azul)';
    span.style.color = '#fff';
    span.style.fontSize = '1.5em';
    span.style.padding = '8px 18px';
    span.style.borderRadius = '10px';
    span.style.cursor = 'grab';
    span.style.userSelect = 'none';
    span.style.boxShadow = '0 2px 8px rgba(56,189,248,0.10)';
    span.ondragstart = (e) => {
      e.dataTransfer.setData('text/plain', letra);
    };
    optionsDiv.appendChild(span);
  });
  document.getElementById('drag-result').textContent = '';
}

function dropLetter(e) {
  e.preventDefault();
  const letra = e.dataTransfer.getData('text/plain');
  const obj = dragWords[dragIdx];
  if (letra === obj.letra) {
    e.target.textContent = letra;
    e.target.style.color = "var(--verde-agua)";
    document.getElementById('drag-result').textContent = "Correto! Muito bem!";
    document.getElementById('drag-result').style.color = "var(--verde-agua)";
    setTimeout(() => {
      dragIdx = (dragIdx + 1) % dragWords.length;
      renderDragGame();
    }, 1200);
  } else {
    document.getElementById('drag-result').textContent = "Tente novamente!";
    document.getElementById('drag-result').style.color = "var(--rosa)";
  }
}

function reiniciarJogo(jogo) {
  if (jogo === 'memoria') initMemoryGame();
  if (jogo === 'puzzle') initPuzzleGame();
  if (jogo === 'escrever') {
    writeIdx = 0;
    document.getElementById('write-img').src = writeImgs[writeIdx].src;
    document.getElementById('write-input').value = '';
    document.getElementById('write-result').textContent = '';
  }
  if (jogo === 'arraste') {
    initDragGame();
  }
}

// Adicione no abrirJogo:
function abrirJogo(jogo) {
  fecharJogo();
  setTimeout(() => {
    if (jogo === 'memoria') {
      document.getElementById('modal-memoria').classList.add('active');
      initMemoryGame();
    }
    if (jogo === 'puzzle') {
      document.getElementById('modal-puzzle').classList.add('active');
      initPuzzleGame();
    }
    if (jogo === 'escrever') {
      document.getElementById('modal-escrever').classList.add('active');
      writeIdx = 0;
      document.getElementById('write-img').src = writeImgs[writeIdx].src;
      document.getElementById('write-input').value = '';
      document.getElementById('write-result').textContent = '';
    }
    if (jogo === 'arraste') {
      document.getElementById('modal-arraste').classList.add('active');
      initDragGame();
    }
  }, 200);
}

// Inicialização
window.onload = fecharJogo;