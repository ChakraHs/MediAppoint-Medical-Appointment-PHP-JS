document.addEventListener("click", (evt) => {
    const flyoutEl = document.getElementById("box1");
    let targetEl = evt.target; // clicked element      
    do {
      if(targetEl == flyoutEl) {
        // This is a click inside, does nothing, just return.
        document.getElementById("box1").classList.remove("box");
        document.getElementById("box1").classList.add("box-after-click");
        return;
      }
      // Go up the DOM
      targetEl = targetEl.parentNode;
    } while (targetEl);
    // This is a click outside.      
    document.getElementById("box1").classList.add("box");
    document.getElementById("box1").classList.remove("box-after-click");
    });