//===NAVBAR=====================================================================================================/
let menuBtn = document.querySelector(".open");
let items = document.querySelector(".navbar__items");
let closeBtn = document.querySelector(".close");
let dropBtn = document.querySelector(".dropbtn");
let menuItems = document.querySelector(".dropdown-content");
let here = document.querySelector(".here");
let shown = document.querySelector(".shown");
let logo = document.getElementById("logo");

logo.addEventListener("click", () => {
  window.location = "https://the-dubai-life.com";
});

if (menuBtn) {
  menuBtn.addEventListener("click", () => {
    items.classList.add("show");
    closeBtn.style.display = "block";
    menuBtn.style.display = "none";
  });
}
if (closeBtn) {
  closeBtn.addEventListener("click", () => {
    items.classList.remove("show");
    closeBtn.style.display = "none";
    menuBtn.style.display = "block";
  });
}
let a = 0;
dropBtn.addEventListener("click", () => {
  if (a == 0) {
    here.classList.add("shown");
    a = 1;
  } else {
    here.classList.remove("shown");
    a = 0;
  }
});

/*===========================================================*/
//===Video=====================================================================================================/
let btn = document.getElementById("pausePlay");
let video = document.getElementById("myVideo");

video.addEventListener("click", () => {
  video.paused ? video.play() : video.pause();
  if (video.paused) {
    btn.classList.remove("fa-circle-pause");
    btn.classList.add("fa-circle-play");
  } else {
    btn.classList.remove("fa-circle-play");
    btn.classList.add("fa-circle-pause");
  }
});

/*===============*/
let btn2 = document.getElementById("pausePlay2");
let video2 = document.getElementById("mobileVideo");

video2.addEventListener("click", () => {
  video2.paused ? video2.play() : video2.pause();
  if (video2.paused) {
    btn2.classList.remove("fa-circle-pause");
    btn2.classList.add("fa-circle-play");
  } else {
    btn2.classList.remove("fa-circle-play");
    btn2.classList.add("fa-circle-pause");
  }
});
//===Phone Input=====================================================================================================/
const phoneInputField = document.querySelector("#tel");
const phoneInput = window.intlTelInput(phoneInputField, {
  utilsScript:
    "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
  preferredCountries: ["fr"],
});

const info = document.querySelector(".alert-info");

function process(event) {
  event.preventDefault();

  const phoneNumber = phoneInput.getNumber();

  info.style.display = "";
  info.innerHTML =
    "Phone number in E.164 format: <strong>${phoneNumber}</strong>";
}

closeModel.addEventListener("click", () => {
  error = "";
  notif.style.visibility = "hidden";
});
/*=====================================================*/
let minus = document.getElementById("minus");
let plus = document.getElementById("plus");
let nbrTicket = document.getElementById("quantity");
let priceInput = document.getElementById("priceT");
let oldP = document.querySelector(".oldP");
let showed = document.getElementById("showPresent");
let totalTickets = document.getElementById("listTick");
let message = document.querySelector(".message");
let popover = document.getElementById("popover__title");
let content = document.querySelector(".popover__content");
let price = 29.9;
let clicked = 0;
var timerID = setTimeout(() => {
  content.style.visibility = "hidden";
  content.style.opacity = "0";
}, 5000);

priceInput.value = price + "€";
nbrTicket.addEventListener("keyup", () => {
  clearTimeout(timerID);
  let ggwp = Number(nbrTicket.value);
  showMessagePrice(ggwp, price);
  timerID = setTimeout(() => {
    content.style.visibility = "hidden";
    content.style.opacity = "0";
  }, 5000);
});

minus.addEventListener("click", () => {
  if (nbrTicket.value > 1) {
    nbrTicket.value--;
  }
  clearTimeout(timerID);
  let ggwp = Number(nbrTicket.value);
  showMessagePrice(ggwp, price);
  clicked = 1;
  timerID = setTimeout(() => {
    content.style.visibility = "hidden";
    content.style.opacity = "0";
  }, 5000);
});

plus.addEventListener("click", () => {
  clearTimeout(timerID);
  nbrTicket.value++;
  clicked = 1;
  let ggwp = Number(nbrTicket.value);
  showMessagePrice(ggwp, price);
  timerID = setTimeout(() => {
    content.style.visibility = "hidden";
    content.style.opacity = "0";
  }, 5000);
});
///////////////////////////////////////////////////////////////////////////////////////////////////
popover.addEventListener("click", () => {
  if (clicked === 0) {
    content.style.visibility = "visible";
    content.style.opacity = "1";
    content.style.transform = "translate(0, -20px)";
    clicked = 1;
  } else {
    content.style.visibility = "hidden";
    content.style.opacity = "0";
    clicked = 0;
  }
});
//All about Price logic (bonus,price,total,text etc ....) :
const showMessagePrice = (quantity, unitPrice) => {
  let bonus = 0;
  let finalPrice = 0;
  let oldPrice = 0;
  let text = "";

  if (quantity < 4) {
    finalPrice = (unitPrice * quantity).toFixed(2);
    bonus = 0;
    text = `achetez <span>${
      4 - quantity
    } </span> autres tickets pour avoir <span>1</span> ticket bonus et économisez <span>${unitPrice.toFixed(
      2
    )}&euro; </span>.`;
    oldP.innerHTML = "";
    totalTickets.innerHTML = `${quantity} tickets.`;
  } else if (quantity < 8) {
    bonus = 1;
    oldPrice = (unitPrice * (quantity + bonus)).toFixed(2);
    finalPrice = (unitPrice * quantity).toFixed(2);
    text = `achetez <span>${
      8 - quantity
    } </span> autres tickets pour avoir <span>3</span> tickets bonus et économisez <span>${(
      3 * unitPrice
    ).toFixed(2)} &euro;</span>.`;
    oldP.innerHTML = `${oldPrice} &euro;`;
    totalTickets.innerHTML = `${quantity} tickets <span>+ ${bonus} ticket offert.</span>`;
  } else {
    bonus = 3 * (Math.floor(quantity / 4) - 1);
    oldPrice = (unitPrice * (quantity + bonus)).toFixed(2);
    finalPrice = (unitPrice * quantity).toFixed(2);
    text = `achetez <span>${
      (Math.floor(quantity / 4) + 1) * 4 - quantity
    }</span> autres tickets pour avoir <span>${
      bonus + 3
    } </span> tickets bonus et économisez <span>${(
      (bonus + 3) *
      unitPrice
    ).toFixed(2)} &euro; </span>.`;
    oldP.innerHTML = `${oldPrice} &euro;`;
    totalTickets.innerHTML = `${quantity} tickets <span>+ ${bonus} tickets offerts.</span>`;
  }
  priceInput.value = finalPrice + "€";
  message.innerHTML = text;
  popover.style.visibility = "visible";
  content.style.visibility = "visible";
  content.style.opacity = "1";
  content.style.transform = "translate(0, -20px)";
  showed.style.display = "block";
};
///////////////////////////////////////////////////////////////////////////////////////////////////////
