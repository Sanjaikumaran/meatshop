function change() {
  var totalItems = 0;
  let elements = document.getElementsByTagName("input");
  var total =
    elements[0].value * 100 +
    elements[1].value * 100 +
    elements[2].value * 100 +
    elements[3].value * 100 +
    elements[4].value * 100 +
    elements[5].value * 100 +
    elements[6].value * 100 +
    elements[7].value * 100 +
    elements[8].value * 100 +
    elements[9].value * 100 +
    elements[10].value * 100 +
    Number(document.getElementById("delivery").value);
  document.getElementById("total").innerHTML = total;
  var len = elements.length;
  for (i = 0; i < len; i++) {
    if (elements[i].value > 0) totalItems += 1;
  }
  document.getElementById("totalItems").innerHTML = totalItems;
}

function addCart(id) {
  if (id == "beef_ribs") {
    localStorage.bfrbs = 1;
  } else if (id == "beef_with_bone") {
    localStorage.bfwibn = 1;
  } else if (id == "beef_boneless") {
    localStorage.bfbls = 1;
  } else if (id == "mutton_ribs") {
    localStorage.rbs = 1;
  } else if (id == "mutton_leg") {
    localStorage.leg = 1;
  } else if (id == "mutton_without_bone") {
    localStorage.bls = 1;
  } else if (id == "mutton_with_bone") {
    localStorage.b = 1;
  } else if (id == "chiken_with_skin") {
    localStorage.wisk = 1;
  } else if (id == "chicken_skinless") {
    localStorage.sknls = 1;
  } else if (id == "chicken_breast") {
    localStorage.brst = 1;
  } else if (id == "chicken_drumstick") {
    localStorage.drmstk = 1;
  } else {
    return;
  }
  window.alert("Item added to cart!");
}
function cart() {
  var brbs = localStorage.bfrbs,
    wibo = localStorage.bfwibn,
    wobo = localStorage.bfbls,
    rbs = localStorage.rbs,
    leg = localStorage.leg,
    bls = localStorage.bls,
    b = localStorage.b,
    wisk = localStorage.wisk,
    sknls = localStorage.sknls,
    brst = localStorage.brst,
    drmstk = localStorage.drmstk;
  if (brbs == 1) {
    document.getElementById("beefdiv").style.display = "block";
    document.getElementById("fribsdiv").style.display = "block";
  }
  if (wibo == 1) {
    document.getElementById("beefdiv").style.display = "block";
    document.getElementById("wibodiv").style.display = "block";
  }
  if (wobo == 1) {
    document.getElementById("beefdiv").style.display = "block";
    document.getElementById("wobodiv").style.display = "block";
  }
  if (rbs == 1) {
    document.getElementById("mtndiv").style.display = "block";
    document.getElementById("ribsdiv").style.display = "block";
  }
  if (leg == 1) {
    document.getElementById("mtndiv").style.display = "block";
    document.getElementById("mtnleg").style.display = "block";
  }
  if (bls == 1) {
    document.getElementById("mtndiv").style.display = "block";
    document.getElementById("mtnbls").style.display = "block";
  }
  if (b == 1) {
    document.getElementById("mtndiv").style.display = "block";
    document.getElementById("mtnb").style.display = "block";
  }
  if (wisk == 1) {
    document.getElementById("ckndiv").style.display = "block";
    document.getElementById("cknwiskn").style.display = "block";
  }
  if (sknls == 1) {
    document.getElementById("ckndiv").style.display = "block";
    document.getElementById("cknwoskn").style.display = "block";
  }
  if (brst == 1) {
    document.getElementById("ckndiv").style.display = "block";
    document.getElementById("cknbrt").style.display = "block";
  }
  if (drmstk == 1) {
    document.getElementById("ckndiv").style.display = "block";
    document.getElementById("ckndrmstk").style.display = "block";
  }
}
