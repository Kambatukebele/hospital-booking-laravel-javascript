function openCloseNavigationOnSmallDevive()
{
    //Open and close menu on small devices
    const hamburgerMenu = document.getElementById("hamburger");  // Hamburger menu
    const closeMenu = document.getElementById("btn-close"); //close Menu
    const navigation = document.getElementsByClassName("navigation")[0]; // Navigation link

    // On click show the navigation
    hamburgerMenu.addEventListener("click", () => {
        navigation.classList.remove("w-0"); // Remove the w-0 class
        navigation.classList.add("w-full"); // adding the w-full class
        //Remove the hamburger menu
        hamburgerMenu.classList.add("hidden"); 
        hamburgerMenu.classList.remove("block");
        //show the close btn
        closeMenu.classList.remove("hidden");
        closeMenu.classList.add("block");
        
    }); 

    //On click hide the navigation
    closeMenu.addEventListener("click", () => {
        console.log("close");
        navigation.classList.add("w-0"); // addind the w-0 class
        navigation.classList.remove("w-full"); // remove sthe w-full class
        //hidden the close btn
        closeMenu.classList.remove("block");
        closeMenu.classList.add("hidden");
        //Showing the hamburger menu
        hamburgerMenu.classList.add("block"); 
        hamburgerMenu.classList.remove("hidden");
    });
}
openCloseNavigationOnSmallDevive();
