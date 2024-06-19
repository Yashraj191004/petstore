function search() {
  var searchInput = document.getElementById("psearchInput").value.toLowerCase();
  if (searchInput === "cat") {
    window.location.href = "#catItems";
  } else if (searchInput === "dog") {
    window.location.href = "#DogItems";
  } else {
    alert("No items found for your search.");
  }
}

function checkAvailability() {
    const pincode = document.getElementById("pincode").value;
  
    if (!pincode.match(/\d{6}/)) {
      alert("Please enter a valid 6-digit pincode.");
      return;
    }
    const numberPincode = parseInt(pincode);
    if (numberPincode >= 400000 && numberPincode <= 500000) {
      alert("Delivery is available for the entered pincode.");
    } else {
      alert("Delivery is not available for the entered pincode.");
    }
  }
  
  function giveAddress() {
    var selectedLocation = document.getElementById("loc").value;
    var addressBox = document.getElementById("address-box");
   if (selectedLocation === "Mumbai") {
      addressBox.innerHTML = "Address for Mumbai Store: 123, ABC Street, CityName - StateName, CountryName ";
    } else if (selectedLocation === "Delhi") {
      addressBox.innerHTML = "Address for Delhi Store: 123, ABC Street, CityName - StateName, CountryName";
    } else if (selectedLocation === "Bangalore") {
      addressBox.innerHTML = "Address for Bangalore Store: 123, ABC Street, CityName - StateName, CountryName";
    } else if (selectedLocation === "Surat") {
      addressBox.innerHTML = "Address for Surat Store: 123, ABC Street, CityName - StateName, CountryName";
    } else if (selectedLocation === "Pune") {
      addressBox.innerHTML = "Address for Pune Store: 123, ABC Street, CityName - StateName, CountryName ";
    } else if (selectedLocation === "Satara") {
      addressBox.innerHTML = "Address for Satara Store: 123, ABC Street, CityName - StateName, CountryName";
    } 
  }


function showProductDetails(productId) {
  var modal = document.getElementById("productModal" + productId);
  modal.style.display = "block";
}

function closeProductDetails(productId) {
  var modal = document.getElementById("productModal" + productId);
  modal.style.display = "none";
}

function addToCart(productId, productName, price, imagePath) {
  let quantitySelectId = 'qv' + productId;
  let quantity = parseInt(document.getElementById(quantitySelectId).value);
  let cartItems = JSON.parse(sessionStorage.getItem('cartItems')) || [];
  let existingItem = cartItems.find(item => item.productId === productId);
  if (existingItem) {
      existingItem.quantity += quantity;
  } else {
      cartItems.push({ productId, productName, price, quantity, imagePath });
  }
  sessionStorage.setItem('cartItems', JSON.stringify(cartItems));
  alert('Product added to cart with quantity: ' + quantity);
}


