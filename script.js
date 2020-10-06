let i = 0;
function move1() {
  if (i == 0) {
    i = 1;
    let elem = document.getElementById("bar1");
    let width = 1;
    let id = setInterval(frame, 10);
    function frame() {
      if (width >= 95) {
        clearInterval(id);
        i = 0;
      } else {
        width++;
        elem.style.width = width + "%";
      }
    }
  }
}

function move2() {
  if (i == 0) {
    i = 1;
    let elem = document.getElementById("bar2");
    let width = 1;
    let id = setInterval(frame, 10);
    function frame() {
      if (width >= 97) {
        clearInterval(id);
        i = 0;
      } else {
        width++;
        elem.style.width = width + "%";
      }
    }
  }
}

function move3() {
  if (i == 0) {
    i = 1;
    let elem = document.getElementById("bar3");
    let width = 1;
    let id = setInterval(frame, 10);
    function frame() {
      if (width >= 94) {
        clearInterval(id);
        i = 0;
      } else {
        width++;
        elem.style.width = width + "%";
      }
    }
  }
}

function move4() {
  if (i == 0) {
    i = 1;
    let elem = document.getElementById("bar4");
    let width = 1;
    let id = setInterval(frame, 10);
    function frame() {
      if (width >= 86) {
        clearInterval(id);
        i = 0;
      } else {
        width++;
        elem.style.width = width + "%";
      }
    }
  }
}

function move5() {
  if (i == 0) {
    i = 1;
    let elem = document.getElementById("bar5");
    let width = 1;
    let id = setInterval(frame, 10);
    function frame() {
      if (width >= 91) {
        clearInterval(id);
        i = 0;
      } else {
        width++;
        elem.style.width = width + "%";
      }
    }
  }
}

function move6() {
  if (i == 0) {
    i = 1;
    let elem = document.getElementById("bar6");
    let width = 1;
    let id = setInterval(frame, 10);
    function frame() {
      if (width >= 88) {
        clearInterval(id);
        i = 0;
      } else {
        width++;
        elem.style.width = width + "%";
      }
    }
  }
}
