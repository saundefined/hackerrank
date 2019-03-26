window.onload = function() {
  let button = document.getElementById('btn');
  button.onclick = function() {
    let count = parseInt(button.innerHTML);
    count++;

    button.innerHTML = count;
  };
};