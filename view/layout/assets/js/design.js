const color = document.getElementById("color");
const size = document.getElementById("size");
const image = document.getElementById("image");
const upload = document.getElementById("upload");
const history = document.getElementById("history");
const colorContent = document.querySelector(".design-mobile-content");
const sizeContent = document.querySelector(".design-mobile-content-size");
const uploadContent = document.querySelector(".design-mobile-content-upload");
const uploadFileContent = document.querySelector(".design-mobile-content-upload-file");
const historyContent = document.querySelector(".design-mobile-content-history");
const closeBtn = document.querySelectorAll(".design-mobile-icon-close");
console.log(closeBtn);
function closeContent() {
  closeBtn.forEach((item) => {
    item.addEventListener("click", function () {
      hideAllTabs();
    });
  });
}
function hideAllTabs() {
  colorContent.style.display = "none";
  sizeContent.style.display = "none";
  uploadContent.style.display = "none";
  uploadFileContent.style.display = "none";
  historyContent.style.display = "none";
}

color.addEventListener("click", showColor);
function showColor() {
  hideAllTabs();
  colorContent.style.display = "block";
  closeContent();
}

size.addEventListener("click", showSize);
function showSize() {
  hideAllTabs();
  sizeContent.style.display = "block";
  closeContent();
}
image.addEventListener("click", showImg);
function showImg() {
  hideAllTabs();
  uploadContent.style.display = "block";
  closeContent();
}

upload.addEventListener("click", showUpload);
function showUpload() {
  hideAllTabs();
  uploadFileContent.style.display = "block";
  closeContent();
}

history.addEventListener("click", showHistory);
function showHistory() {
  hideAllTabs();
  historyContent.style.display = "block";
  closeContent();
}

var listcolor=document.getElementsByClassName('custom-color')[0].children;
var main_img=document.getElementsByClassName('design-image')[0].children[0];
var sub_img1=document.getElementsByClassName('design-image-item')[0].children[0];
var sub_img2=document.getElementsByClassName('design-image-item')[1].children[0];

// var size=document.getElementsByClassName('custom-btn')[0];
// var pick_size=document.getElementsByClassName('pick-size')[0];
// sizecart.value=pick_size.innerHTML;
// [...sizeItems].forEach((item) => item.addEventListener("click", handleSizeClick));
// function handleSizeClick(event) {
//   console.log(event.target);
//   [...sizeItems].forEach((item) => item.classList.remove("active"));
//   event.target.classList.add("active");
//   pick_size.innerHTML=event.target.innerHTML;
//   sizecart.value=pick_size.innerHTML;
// }

var draggingElements;
function drag(event,id) {
    event.dataTransfer.setData("text", event.target.id);
    draggingElements=id;
  }

  
  function allowDrop(event) {
    event.preventDefault();
  }
  
 
  function drop(event) {
    event.preventDefault();
    var data = event.dataTransfer.getData("text");
    var draggedElement = document.getElementById(data).parentElement;
  
    // Calculate the position relative to the drop area
    if(draggingElements=='zoom'){
      var offsetX = event.clientX - event.target.getBoundingClientRect().left;
      var offsetY = event.clientY - event.target.getBoundingClientRect().top;

      var xdau=event.target.getBoundingClientRect().left;
      var ydau=event.target.getBoundingClientRect().top;
      var xsau=event.clientX;
      var ysau=event.clientY;

    
      // Set the position of the dragged element
      draggedElement.style.position = 'absolute';
      // draggedElement.style.height = draggedElement.offsetHeight+ offsetX - draggedElement.offsetHeight + 'px';
      // draggedElement.style.width = draggedElement.offsetWidth+ offsetX -draggedElement.offsetWidth + 'px';
      draggedElement.style.height = offsetX  + 'px';
      draggedElement.style.width = offsetX +'px';
    
      // Append the dragged element to the drop area
      event.target.appendChild(draggedElement);
    }
    if(draggingElements=='rotate'){
      var offsetX = event.clientX - event.target.getBoundingClientRect().left;
      var offsetY = event.clientY - event.target.getBoundingClientRect().top;

      var xdau=event.target.getBoundingClientRect().left;
      var ydau=event.target.getBoundingClientRect().top;
      var xsau=event.clientX;
      var ysau=event.clientY;

    
      // Set the position of the dragged element
      draggedElement.style.position = 'absolute';
      var min=1000;
      var degree=0;
      for(let i=0;i<=360;i++){
        draggedElement.style.transform = 'rotate('+ i +'deg)';
        var rotate=draggedElement.children[3];
        var khacx=rotate.getBoundingClientRect().left-xsau;
        var khacy=rotate.getBoundingClientRect().top-ysau;
        if(min>(Math.abs(khacx)+Math.abs(khacy))){
          min=(Math.abs(khacx)+Math.abs(khacy));
          degree=i;
        }
      }
      draggedElement.style.transform = 'rotate('+ degree +'deg)';
    
      // Append the dragged element to the drop area
      event.target.appendChild(draggedElement);
    }
    if(draggingElements=='image'){
      var offsetX = event.clientX - event.target.getBoundingClientRect().left;
      var offsetY = event.clientY - event.target.getBoundingClientRect().top;
      var xsau=event.clientX;
      var ysau=event.clientY;
    
      var ob='';
      if(draggedElement.parentElement.getAttribute('mat')==1){
        ob=document.getElementById('image-container');
      }else{
        if(draggedElement.parentElement.getAttribute('mat')==2){
          ob=document.getElementById('image-container1');
        }
      }
      // Set the position of the dragged element
      draggedElement.style.position = 'absolute';
      // draggedElement.style.left = offsetX - draggedElement.offsetWidth/2 + 'px';
      // draggedElement.style.top = offsetY - draggedElement.offsetHeight/2 + 'px';
      draggedElement.style.left = xsau - draggedElement.offsetWidth/2-ob.getBoundingClientRect().left + 'px';
      draggedElement.style.top = ysau - ob.getBoundingClientRect().top - draggedElement.offsetHeight/2 + 'px';
    
      // Append the dragged element to the drop area
      event.target.appendChild(draggedElement);
    }
  }

  function hienborder(a){
    a.style.border='2px dashed #ccc';
    a.children[0].style.border='2px rgb(119, 171, 230) solid';
    a.children[0].children[1].style.display='block';
    a.children[0].children[2].style.display='block';
    a.children[0].children[3].style.display='block';
  }
  function anborder(a){
    a.style.border='2px dashed rgba(0, 0, 0, 0)';
    a.children[0].style.border='2px rgba(0,0,0,0) solid';
    a.children[0].children[1].style.display='none';
    a.children[0].children[2].style.display='none';
    a.children[0].children[3].style.display='none';
  }
function delete_hoatiet(a){
  a.parentElement.remove();
}

var truoc1=document.getElementsByClassName('design-card')[0];
var truoc2=document.getElementsByClassName('design-image-list')[0];
var sau1=document.getElementsByClassName('design-card')[1];
var sau2=document.getElementsByClassName('design-image-list')[1];
function mattruoc(){
  truoc1.style.display='block';
  truoc2.style.display='grid';
  sau1.style.display='none';
  sau2.style.display='none';
}
function matsau(){
  truoc1.style.display='none';
  truoc2.style.display='none';
  sau1.style.display='block';
  sau2.style.display='grid';
}

var design_card=document.getElementsByClassName('design-card');
function add_img(a){
  for(let i=0;i<design_card.length;i++){
    if(design_card[i].style.display!='none'){
      if(i==0){
        var child=`<div id="draggable-image">
        <img id="image-hoatiet1" src="`+a.src+`" alt="Draggable Image"  draggable="true" ondragstart="drag(event,'image')">
        <img src="view/layout/assets/images/zoom.png" id="zoom" class="zoom" draggable="true" ondragstart="drag(event,'zoom')">
        <img onclick="delete_hoatiet(this)" src="view/layout/assets/images/delete.png" id="delete-img" class="delete-img">
        <img src="view/layout/assets/images/rotate.png" id="rotate" class="rotate" draggable="true" ondragstart="drag(event,'rotate')">
        </div>`;
        design_card[i].children[1].children[1].innerHTML=child;
      }else{
        if(i==1){
          var child=`<div id="draggable-image">
          <img id="image-hoatiet2" src="`+a.src+`" alt="Draggable Image"  draggable="true" ondragstart="drag(event,'image')">
          <img src="view/layout/assets/images/zoom.png" id="zoom1" class="zoom" draggable="true" ondragstart="drag(event,'zoom')">
          <img onclick="delete_hoatiet(this)" src="view/layout/assets/images/delete.png" id="delete-img1" class="delete-img">
          <img src="view/layout/assets/images/rotate.png" id="rotate1" class="rotate" draggable="true" ondragstart="drag(event,'rotate')">
      </div>`;
          design_card[i].children[1].children[1].innerHTML=child;
        }
      }
      
    }
  }
}

// Chụp và lưu ảnh vào upload/////////////////////////

function convertToImage1() {
  var bandau=document.getElementById('targetElement1').parentElement.style.display;
  console.log(bandau);
  if(document.getElementById('targetElement1').parentElement.style.display!='block'){
    document.getElementById('targetElement1').parentElement.style.display='block';
  }
  const targetElement = document.getElementById('targetElement1');
  
  // Sử dụng thư viện html2canvas để tạo ảnh từ đối tượng HTML
  html2canvas(targetElement).then(function(canvas) {
      // Chuyển đổi canvas thành URL hình ảnh
      const dataURL = canvas.toDataURL();

      // Gửi dữ liệu URL hình ảnh đến server để lưu vào tệp
      
      saveImage(dataURL);
  });
  if(bandau!='block'){
    document.getElementById('targetElement1').parentElement.style.display='none';
  }
}
function convertToImage2() {
  var bandau1=document.getElementById('targetElement2').parentElement.style.display;
  console.log(bandau1);
  if(document.getElementById('targetElement2').parentElement.style.display!='block'){
    document.getElementById('targetElement2').parentElement.style.display='block';
  }
  const targetElement = document.getElementById('targetElement2');
  
  // Sử dụng thư viện html2canvas để tạo ảnh từ đối tượng HTML
  html2canvas(targetElement).then(function(canvas) {
      // Chuyển đổi canvas thành URL hình ảnh
      const dataURL = canvas.toDataURL();

      // Gửi dữ liệu URL hình ảnh đến server để lưu vào tệp
      
      saveImage(dataURL);
  });
  if(bandau1!='block'){
    document.getElementById('targetElement2').parentElement.style.display='none';
  }
}
function convertToImage(){
  convertToImage1();
  convertToImage2();
  document.querySelector(".modal").classList.add('active');
}
function convertToImagecart(){
  convertToImage1();
  convertToImage2();
  document.querySelectorAll(".modal")[1].classList.add('active');
}

function saveImage(dataURL) {
  // Gửi dữ liệu URL hình ảnh đến server
  const xhr = new XMLHttpRequest();
  xhr.open('POST', 'save_img.php', true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

  xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
          console.log(xhr.responseText);
      }
  };

  const params = 'imageData=' + encodeURIComponent(dataURL);
  xhr.send(params);
}

function predesign(a){
  document.getElementById('targetElement1').children[0].src=a.src;
  document.getElementsByClassName('design-image-item')[0].children[0].src=a.src;
  document.getElementsByClassName('design-image-item')[1].children[0].src=a.nextSibling.src;
  document.getElementById('targetElement2').children[0].src=a.nextSibling.src;
  document.getElementsByClassName('design-image-item')[2].children[0].src=a.src;
  document.getElementsByClassName('design-image-item')[3].children[0].src=a.nextSibling.src;
  if(document.getElementById('image-container').innerHTML=='' && document.getElementById('image-container1').innerHTML==''){
    document.getElementById('addcart').innerHTML='<form action="index.php?pg=design" method="post"><input type="hidden" name="id_design" value='+a.nextSibling.nextSibling.innerHTML+'><button name="onlyaddcart" class="detail-button__cart design-btn">Thêm vào giỏ hàng</button></form>';
  }
                  
                
                
}
