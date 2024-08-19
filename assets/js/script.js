document.addEventListener('DOMContentLoaded', function() {
  var swiper = new Swiper(".swiper", {
    direction: "vertical",
    pagination: {
      el: ".swiper-pagination",
      type: "fraction",
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
});

document.addEventListener('DOMContentLoaded', function() {
  const num1 = document.getElementById('num1');
  const num2 = document.getElementById('num2');
  const operation = document.getElementById('operation');
  const resultDiv = document.getElementById('result');

  function calculate() {
      const value1 = num1.value;
      const value2 = num2.value;
      const operator = operation.value;
      console.log('Operation:', operator); // Добавьте это для отладки

      if (value1 !== '' && value2 !== '') {
          const xhr = new XMLHttpRequest();
          xhr.open('POST', '/wp-admin/admin-ajax.php', true);
          xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

          xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
              const result = xhr.responseText;
              resultDiv.innerHTML = `Result: <span>${result}</span>`;
            }
          };

          const params = `action=calculate&num1=${encodeURIComponent(value1)}&num2=${encodeURIComponent(value2)}&operation=${encodeURIComponent(operator)}`;

          xhr.send(params);
      } else {
          resultDiv.textContent = 'Please enter both numbers.';
      }
  }

  num1.addEventListener('input', calculate);
  num2.addEventListener('input', calculate);
  operation.addEventListener('change', calculate);
});

document.addEventListener('DOMContentLoaded', function() {
  const modalMenu = document.getElementById('modal-menu');
  const close = document.querySelector('.modal-menu-close');
  const headerMenu = document.querySelector('.header__menu');
  const btn = document.querySelector('.menu__open');

  // Открыть модальное меню при клике на кнопку
  btn.addEventListener('click', () => {
    modalMenu.style.display = 'block';
  });

  // Закрыть модальное меню при клике на фон
  modalMenu.addEventListener('click', (e) => {
    if (e.target === modalMenu) {
      modalMenu.style.display = 'none';
    }
  });
  close.addEventListener('click', () => {
    modalMenu.style.display = 'none';
  });
});