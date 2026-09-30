let cartdetailsshowarea = document.getElementById("cartdetailsshowarea");
let subtotal = 0;
let itemcount = 0;
let delivarycost = 200;
let subtotalcardtext = document.getElementById("subtotalcardtext");
let itemcountcardtext = document.getElementById("itemcountcardtext");
let delivarycostcardtext = document.getElementById("delivarycostcardtext");
let totalcostcardtext = document.getElementById("totalcostcardtext");

const productloader =()=>{
    ajax = new XMLHttpRequest();

    ajax.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            cartdetails = (JSON.parse(this.responseText));
            console.log(cartdetails);
            cartdetails.forEach(element => {

                let row = document.createElement("div");
                row.classList="row";

                let imagedivcol4 = document.createElement("div");
                imagedivcol4.classList="col-4";

                let titledivcol4 = document.createElement("div");
                titledivcol4.classList="col-4";

                let pricedivcol4 = document.createElement("div");
                pricedivcol4.classList="col-4";




                let maindiv = document.createElement("div");
                maindiv.classList = "col-12";



                let carddiv = document.createElement('div');
                carddiv.classList = "card mt-4 mb-1 ";
                carddiv.style.boxShadow = "2px 2px 0px rgba(0,0,0, 0.6)";

                let elementdivwithoutimage = document.createElement("div");
                elementdivwithoutimage.classList="col-8";

                let imagediv = document.createElement("img");
                imagediv.src = "./uploads/" + element['imagefile'];
                imagediv.classList = "";
                imagediv.style.height = "15rem";
                imagediv.style.width = "18rem";


                let cardbody = document.createElement("div");
                cardbody.classList = "card-body sri_lankan_dishes_card_body";
                cardbody.style.height = "15rem";

                let cardtitle = document.createElement('h2');
                cardtitle.classList = "card-text card_title mt-4 col-8";
                cardtitle.innerText = element['productname'];
                cardtitle.style.fontFamily = "";

                let pricediv = document.createElement("div");
                pricediv.classList = "card-text mt-1 mt-5 col-4";
                pricediv.innerHTML = element['price'];

                let insiderow = document.createElement("div");
                insiderow.classList="row";

                let decreamentdiv = document.createElement("div");
                decreamentdiv.classList="col-1";

                let increamentdiv = document.createElement("div");
                increamentdiv.classList="col-1";

                let decrementItemButton = document.createElement("button");
                decrementItemButton.classList="btn btn-outline-warning mt-5 ms-2";
                decrementItemButton.innerText="<";

                let increamentItemButton = document.createElement("button");
                increamentItemButton.classList="btn btn-outline-warning mt-5 ";
                increamentItemButton.innerText=">";

                let savechangesbuttondiv = document.createElement("div");
                savechangesbuttondiv.classList="col-4";

                let deletecartitemdiv = document.createElement("div");
                deletecartitemdiv.classList="col-4";

                let savechangesbutton = document.createElement("button")
                savechangesbutton.classList="btn btn-outline-success mt-5 btn-lg";
                savechangesbutton.innerText=" save changes ";

                let deletecartitembutton = document.createElement("button");
                deletecartitembutton.classList="btn btn-outline-danger mt-5 btn-lg";
                deletecartitembutton.innerText=" remove item ";


                let itemquantity = document.createElement("h5");
                itemquantity.classList="col-1 mt-5 ms-3";
                itemquantity.style.textAlign="center";
                let itemquantityvalue = element['quantity'];
                itemquantity.innerText = element['quantity'];




                maindiv.appendChild(carddiv);
                carddiv.appendChild(row);
                row.appendChild(imagedivcol4);
                row.appendChild(elementdivwithoutimage);
                //elementdivwithoutimage.appendChild(titledivcol4);

                imagedivcol4.appendChild(imagediv);
                elementdivwithoutimage.appendChild(insiderow);
                insiderow.appendChild(cardtitle);
                insiderow.appendChild(pricediv);
                insiderow.appendChild(decreamentdiv);
                decreamentdiv.appendChild(decrementItemButton);
                insiderow.appendChild(itemquantity);
                insiderow.appendChild(increamentdiv);
                increamentdiv.appendChild(increamentItemButton);

                insiderow.appendChild(savechangesbuttondiv);
                savechangesbuttondiv.appendChild(savechangesbutton);

                insiderow.appendChild(deletecartitemdiv);
                deletecartitemdiv.appendChild(deletecartitembutton);

                
                cartdetailsshowarea.appendChild(maindiv);



                decrementItemButton.onclick= () => {
                    itemquantityvalue = itemquantityvalue - 1;
                    if (itemquantityvalue<1) {
                        itemquantityvalue = 1;
                    }
                    itemquantity.innerText = "";
                    itemquantity.innerText = itemquantityvalue;

                }


                increamentItemButton.onclick= () => {
                    // console.log(typeof(itemquantityvalue));
                    // console.log(typeof(parseInt(itemquantityvalue)));
                    itemquantityvalue = parseInt(itemquantityvalue);
                    itemquantityvalue = itemquantityvalue + 1;
                    if (itemquantityvalue>15) {
                        itemquantityvalue = 15;
                        alert("you can only order 15 items in one order.......!")
                    }
                    itemquantity.innerText = "";
                    itemquantity.innerText = itemquantityvalue;

                }



                savechangesbutton.onclick = ()=>{
                    ajax.open("get", "cartquantityupdate.php?productid="+element['productid']+"&updatedquantity="+itemquantityvalue, true);
                    

                    ajax.send();
                    setTimeout(() => {
                        window.location.reload();
                        alert("apply changes to "+element['productname']+ " successfully....!")
                    }, 100);

                }

                

                deletecartitembutton.onclick = ()=>{
                    ajax.open("get", "deletecartitem.php?productid="+element['productid'], true);
                    

                    ajax.send();
                    setTimeout(() => {
                        window.location.reload();
                        alert("remove "+element['productname']+ " item successfully....!");
                    }, 100);

                }

                const subtotalpricecalculator = ()=>{
                    let priceforsinglecard = 0;

                   let pricearray =  element['price'].split(".");
                   //console.log(pricearray);
                   let price = pricearray['1'];
                   //console.log(typeof(price));
                   price = parseInt(price);
                   //console.log(typeof(price));

                   let quantityfromarray = element['quantity'];
                   let quantity = parseInt(quantityfromarray);
                   //console.log(typeof(quantity));
                   
                   priceforsinglecard = price * quantity;

                   //console.log(priceforsinglecard);
                   subtotal = subtotal + priceforsinglecard;

                    itemcount = itemcount +1;
                }



                subtotalpricecalculator();

            });
            
            console.log(itemcount);
            subtotalcardtext.innerText="RS. "+subtotal+".00";
            itemcountcardtext.innerText=itemcount+" items";
            delivarycostcardtext.innerText="RS. "+delivarycost+".00";
            totalcostcardtext.innerText="RS. "+(subtotal+delivarycost)+".00";

            if (subtotal==0) {
                totalcostcardtext.innerText="RS. 0.00";
            }
            

        }
    }
    ajax.open("get", "cartdetailsgetfromdatabase.php", true);
    ajax.send();

    

}