function openModal(product, mode) {
    const button = document.createElement("button");
    const container = document.getElementById("main-container");

    button.type = "button";
    button.style.display = "none";
    button.setAttribute("data-toggle", "modal");

    switch(mode) {
      case 'add': button.setAttribute("data-target", "#addProductModal");
        break;
      case 'edit':
        
            button.setAttribute("data-target", "#updateProductModal");
            document.getElementById("exampleModalTitle").textContent = "Update " + product.name ;
            document.getElementById("formUpdate").setAttribute("action", "http://e-commerce.test/admin/products/"+ product.id);
            
            document.getElementById('event_id').value = product.category_id;
            document.getElementById("name").setAttribute("value", product.name);
            document.getElementById("price").setAttribute("value", product.price);
            document.getElementById("description").innerText = product.description;        
        break;
      default:
            document.getElementById("nameToDelete").textContent = "Are you sure! You want to delete " + product.name + " ?...";
            document.getElementById("formDelete").setAttribute("action", "http://e-commerce.test/admin/products/"+ product.id);
            button.setAttribute("data-target", "#deleteModal");
    }

    container?.appendChild(button);
    button.click();
  }