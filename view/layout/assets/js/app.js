$(document).ready(function () {
  $(".hero-slider").slick({
    arrows: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 2000,
    infinite: true,

    dots: true,
    cssEase: "linear",
    responsive: [
      {
        breakpoint: 480,
        settings: {
          dots: false,
          slidesToShow: 1,
          slidesToScroll: 1,
        },
      },
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ],
    // prevArrow: `<button type='button' class='slick-prev slick-arrow'><i class='fa fa-angle-left' aria-hidden='true'></i></button>`,
    // nextArrow: `<button type='button' class='slick-next slick-arrow'><i class='fa fa-angle-right' aria-hidden='true'></i></button>`,
  });
});

const tabItems = document.querySelectorAll(".account-link");
const accountRight = document.querySelector(".account-right");
const orderHistoryContent = document.querySelector(".order-history");
const orderHistory = document.getElementById("history-order");
const historyLink = document.getElementById("history");
const myAccount = document.getElementById("myaccount");
const accountHistory = document.querySelector(".account-history");
tabItems.forEach((item) => item.addEventListener("click", handleTabClick));
function handleTabClick(event) {
  tabItems.forEach((item) => item.classList.remove("active"));
  event.target.classList.add("active");

  const tabId = event.target.id.toLowerCase();
  showTabContent(tabId);
}

function showTabContent(tabId) {
  switch (tabId) {
    case "history":
      showHistory();
      break;
    case "myaccount":
      showMyAccount();
      break;
    case "history-order":
      showHistoryOrder();
      break;

    default:
      console.error("Unhandled tab id: ", tabId);
  }
}

function hideAllTabs() {
  accountRight.style.display = "none";
  accountHistory.style.display = "none";
  orderHistoryContent.style.display = "none";
}
historyLink.addEventListener("click", showHistory);
function showHistory() {
  hideAllTabs();
  accountHistory.style.display = "inline-flex";
}

myAccount.addEventListener("click", showMyAccount);
function showMyAccount() {
  hideAllTabs();
  accountRight.style.display = "inline-flex";
}

orderHistory.addEventListener("click", showHistoryOrder);
function showHistoryOrder() {
  hideAllTabs();
  orderHistoryContent.style.display = "inline-flex";
}
