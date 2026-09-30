let srilankanarray = '';
let food = new Object();
let cardcountbadge = document.getElementById("cardcountbadge");

let productloaderdiv = document.getElementById("productloader");

const productloader = () => {
    ajax = new XMLHttpRequest();
    ajax1 = new XMLHttpRequest();


    ajax1.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            cartcount = this.responseText;
            cardcountbadge.innerText = "";
            cardcountbadge.innerText = cartcount;

        }
    }


    ajax1.open("get", "usercartbadgeproceesor.php", true);
    ajax1.send();



    ajax.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            srilankanarray = (JSON.parse(this.responseText));
            console.log(srilankanarray);
            srilankanarray.forEach(element => {

                let maindiv = document.createElement("div");
                maindiv.classList = "col-lg-4 col-md-6 col-sm-6";

                let carddiv = document.createElement('div');
                carddiv.classList = "card mt-4 mb-1 sri_lankan_dishes_card";
                carddiv.style.boxShadow = "2px 2px 0px rgba(0,0,0, 0.6)";



                let imagediv = document.createElement("img");
                imagediv.src = "./uploads/" + element['imagefile'];
                imagediv.classList = "card-img-top sri_lankan_dishes_image";
                imagediv.style.height = "18rem";

                let cardbody = document.createElement("div");
                cardbody.classList = "card-body sri_lankan_dishes_card_body";
                cardbody.style.height = "15rem";



                let cardtitle = document.createElement('h2');
                cardtitle.classList = "card-text card_title";
                cardtitle.innerText = element['productname'];
                cardtitle.style.fontFamily = "";

                let cardp = document.createElement("p");
                cardp.classList = "card-text sri_lankan_card_text mt-1";
                cardp.innerText = element['description'];

                let pricediv = document.createElement("div");
                pricediv.classList = "card-text mt-1 sri_lankan_card_price";
                pricediv.innerHTML = element['price'];

                let pricebutton = document.createElement("button");
                pricebutton.id = "cardbutton";
                pricebutton.classList = "btn mt-1  sri_lankan_card_button ";
                pricebutton.innerHTML = "Add to cart <i class='fa-solid fa-cart-plus fa-bounce'></i>";
                pricebutton.style.color = "white";
                pricebutton.style.backgroundColor = "#ee581f";



                productloaderdiv.appendChild(maindiv);
            maindiv.appendChild(carddiv);
            carddiv.appendChild(imagediv);

            carddiv.appendChild(cardbody);

             cardbody.appendChild(cardtitle);
            cardbody.appendChild(cardp);
            cardbody.appendChild(pricediv);
            cardbody.appendChild(pricebutton);


                pricebutton.onclick = () => {
                    if (document.cookie) {
                        ajax.open("get", "carddetailsendtodatabase.php?productid=" + element['productid'], true);
                        ajax.send();
                        //window.location.reload();
                        setTimeout(() => {
                            window.location.reload();
                        }, 100);
                    } else {
                        alert("Please log in to place an order ....!");
                    }
                }



            });

        }
    }
    ajax.open("get", "backgrounddataloadsrilankan.php", true);
    ajax.send();


}