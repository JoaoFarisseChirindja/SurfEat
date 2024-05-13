// Função para girar a imagem do prato continuamente
function spinPlate() {
    const plate = document.getElementById('spinning-plate');
    let rotation = 0;
    setInterval(() => {
      rotation += 2;
      plate.style.transform = `rotate(${rotation}deg)`;
    }, 50);
  }
  
  // Chama a função ao carregar a página
  window.onload = spinPlate;
  
  // Função para alternar o menu móvel
  const menuToggle = document.querySelector('.menu-toggle');
  const menuNav = document.querySelector('.header-right ul');
  
  menuToggle.addEventListener('click', () => {
    menuNav.classList.toggle('active');
  });