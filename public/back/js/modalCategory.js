function openModal(category, mode) {
    const button = document.createElement("button");
    const container = document.getElementById("main-container");

    button.type = "button";
    button.style.display = "none";
    button.setAttribute("data-toggle", "modal");

    switch(mode) {
      case 'add': button.setAttribute("data-target", "#addCategoryModal");
        break;
      case 'edit':
        
            document.getElementById("exampleModalTitle").textContent = "Update " + category.name ;
            document.getElementById("categoryToUpdate").setAttribute("value", category.name);
            document.getElementById("formUpdate").setAttribute("action", "http://e-commerce.test/admin/categories/"+ category.id +"");
            button.setAttribute("data-target", "#updateCategoryModal");
        break;
      default:
            document.getElementById("nameToDelete").textContent = "Are you sure! You want to delete " + category.name + " ?...";
            document.getElementById("formDelete").setAttribute("action", "http://e-commerce.test/admin/categories/"+ category.id +"");
            button.setAttribute("data-target", "#deleteModal");
    }

    container?.appendChild(button);
    button.click();
  }