const d = document,
  buttonAddProduct = d.getElementById("button-add-product"),
  closeForm = d.getElementById("close-form"),
  divForm = d.querySelector(".div-form"),
  divFormDelete = d.querySelector(".div-form-delete"),
  closeFormDelete = d.getElementById("close-form-delete"),
  
  buttonAddBanner = d.getElementById("button-add-banner"),
  divFormB = d.querySelector(".div-form2"),
  
  //INPUTS FORM
  inputName = document.getElementById("input-name-product"),
  inputDesc = document.getElementById("input-desc-product"),
  inputPrecio = document.getElementById("input-precio-product"),
  inputFile = document.getElementById("input-file-product"),
  inputCategoria = document.getElementById("input-categ-product"),
  inputId = document.getElementById("form-id-product"),
  inputMethod = document.getElementById("form-method"),
  titleForm = document.getElementById("title-form"),
  //Inputs Delete
  inputIdDeleteProduct = document.getElementById("id-product-delete"),
  inputDeleteNameProduct = document.getElementById("name-product-delete"),
  inputDeleteRutaImg = document.getElementById("imagen-product-delete");

d.addEventListener("click", (e) => {
  if (e.target === buttonAddProduct) {
    //RESET DATA FORM
    titleForm.innerText = "Agregar Producto";
    inputName.value = "";
    inputDesc.value = "";
    inputPrecio.value = "";
    inputCategoria.value = "0";
    inputFile.required = "required";
    inputMethod.value = "INSERT";

    divForm.classList.remove("animated-salida");
    divForm.classList.add("active");
    divForm.classList.add("animated-entrada");
  }
  
  
  if (e.target === closeForm) {
    divForm.classList.remove("animated-entrada");
    divForm.classList.add("animated-salida");
    setTimeout(() => {
      divForm.classList.remove("active");
    }, 400);
  }


  if (e.target.matches(".edit-product")) {
    //EDIT FORM PRODUCT

    const BtnEditId = e.target.dataset.id,
      productName = d.getElementById(`product-name-${BtnEditId}`).innerText,
      productDes = d.getElementById(
        `product-descripcion-${BtnEditId}`
      ).innerText,
      productPrecio = d.getElementById(`product-precio-${BtnEditId}`).innerText,
      productCat = d.getElementById(`product-categoria-${BtnEditId}`).innerText,
      productId = d.getElementById(`product-id-${BtnEditId}`).innerText;
    titleForm.innerText = "Editar Producto";

    //OPEN AND FILL FORM
    inputName.value = productName;
    inputDesc.value = productDes;
    inputPrecio.value = productPrecio;
    inputCategoria.value = productCat;
    inputFile.required = "";
    inputId.value = productId;
    inputMethod.value = "UPDATE";

    divForm.classList.remove("animated-salida");
    divForm.classList.add("active");
    divForm.classList.add("animated-entrada");
  }

  if (e.target.matches(".delete-product")) {
    //OPEN FORM DELETE PRODUCT
    const IdProductDelete = e.target.dataset.id,
      productIdDel = d.getElementById(
        `product-id-${IdProductDelete}`
      ).innerText,
      productNameDel = d.getElementById(
        `product-name-${IdProductDelete}`
      ).innerText,
      productRutaImg = d.getElementById(
        `product-img-${IdProductDelete}`
      ).innerText;

    divFormDelete.classList.remove("animated-salida");
    divFormDelete.classList.add("active");
    divFormDelete.classList.add("animated-entrada");

    //OPEN AND FILL FORM
    inputIdDeleteProduct.value = productIdDel;
    inputDeleteRutaImg.value = productRutaImg;
    inputDeleteNameProduct.innerText = productNameDel;
  }

  if (e.target === closeFormDelete) {
    //CLOSE FORM DELETE
    e.preventDefault();
    divFormDelete.classList.remove("animated-entrada");
    divFormDelete.classList.add("animated-salida");
    setTimeout(() => {
      divFormDelete.classList.remove("active");
    }, 400);
  }
});
